-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 17 Paź 2022, 01:55
-- Wersja serwera: 10.4.24-MariaDB
-- Wersja PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `alips`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `friends`
--

CREATE TABLE `friends` (
  `idFriends` int(11) NOT NULL,
  `idUser1` int(11) NOT NULL,
  `idUser2` int(11) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `statusDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `friends`
--

INSERT INTO `friends` (`idFriends`, `idUser1`, `idUser2`, `status`, `statusDate`) VALUES
(1, 0, 1, 1, '2022-10-12 20:47:03'),
(2, 0, 4, 2, '2022-10-12 20:47:39');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `friends_status`
--

CREATE TABLE `friends_status` (
  `idFStatus` int(11) NOT NULL,
  `statusName` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `friends_status`
--

INSERT INTO `friends_status` (`idFStatus`, `statusName`) VALUES
(1, 'Oczekujący'),
(2, 'Znajomy');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `login` varchar(15) COLLATE utf8mb4_polish_ci NOT NULL,
  `email` varchar(45) COLLATE utf8mb4_polish_ci NOT NULL,
  `password` varchar(1000) COLLATE utf8mb4_polish_ci NOT NULL,
  `reg_date` datetime DEFAULT NULL,
  `last_login_date` datetime DEFAULT NULL,
  `lastActive` int(255) NOT NULL,
  `last_logout_date` datetime DEFAULT NULL,
  `idActive` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `user`
--

INSERT INTO `user` (`id`, `login`, `email`, `password`, `reg_date`, `last_login_date`, `lastActive`, `last_logout_date`, `idActive`) VALUES
(0, '0', 'djamrozy@ur.edu.pl', '7c4f910f7e5510a57262a57e35c57839', '2022-09-01 12:54:31', NULL, 1665962552, NULL, 1),
(1, '1', 'test@test.pl', 'cc03e747a6afbbcbf8be7668acfebee5', NULL, '2022-10-17 00:41:58', 1665963722, '2022-10-17 00:41:49', 1),
(4, '4', 'test2@test2.pl', 'd41d8cd98f00b204e9800998ecf8427e', '2022-10-03 15:50:10', NULL, 0, NULL, 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user_active`
--

CREATE TABLE `user_active` (
  `idActive` int(11) NOT NULL,
  `activeStatus` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `user_active`
--

INSERT INTO `user_active` (`idActive`, `activeStatus`) VALUES
(0, 'Offline'),
(1, 'Online');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`idFriends`),
  ADD KEY `idUser1` (`idUser1`,`idUser2`,`status`),
  ADD KEY `idUser2` (`idUser2`),
  ADD KEY `status` (`status`);

--
-- Indeksy dla tabeli `friends_status`
--
ALTER TABLE `friends_status`
  ADD PRIMARY KEY (`idFStatus`);

--
-- Indeksy dla tabeli `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idActive` (`idActive`);

--
-- Indeksy dla tabeli `user_active`
--
ALTER TABLE `user_active`
  ADD PRIMARY KEY (`idActive`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `friends`
--
ALTER TABLE `friends`
  MODIFY `idFriends` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `friends_status`
--
ALTER TABLE `friends_status`
  MODIFY `idFStatus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `user_active`
--
ALTER TABLE `user_active`
  MODIFY `idActive` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `friends`
--
ALTER TABLE `friends`
  ADD CONSTRAINT `friends_ibfk_1` FOREIGN KEY (`idUser1`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `friends_ibfk_2` FOREIGN KEY (`idUser2`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `friends_ibfk_3` FOREIGN KEY (`status`) REFERENCES `friends_status` (`idFStatus`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ograniczenia dla tabeli `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`idActive`) REFERENCES `user_active` (`idActive`) ON DELETE NO ACTION ON UPDATE CASCADE;

DELIMITER $$
--
-- Zdarzenia
--
CREATE DEFINER=`root`@`localhost` EVENT `StatusAktywnosci` ON SCHEDULE EVERY 15 MINUTE STARTS '2022-10-17 00:59:04' ON COMPLETION PRESERVE ENABLE COMMENT 'Zmiana statusu online' DO UPDATE user SET idActive = 0 WHERE (lastActive+900)<UNIX_TIMESTAMP()

-- CHANGE ACCOUNT TO OFFLINE WHEN NONE ACTION SEEN BY 15 MIN ON CLIENT SITE$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
