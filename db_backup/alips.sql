-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 20 Lis 2022, 23:38
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
-- Struktura tabeli dla tabeli `game_eye_tetris`
--

CREATE TABLE `game_eye_tetris` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `points` int(11) DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  `last_game` datetime DEFAULT NULL,
  `gameCount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `game_talk_milionaires`
--

CREATE TABLE `game_talk_milionaires` (
  `id` int(11) NOT NULL,
  `idPlayer` int(11) NOT NULL,
  `question` int(11) NOT NULL,
  `money` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `game_talk_ships`
--

CREATE TABLE `game_talk_ships` (
  `id` int(11) NOT NULL,
  `idHost` int(11) NOT NULL,
  `hostDashboard` varchar(255) COLLATE utf8mb4_polish_ci DEFAULT NULL,
  `destroyHost` int(11) DEFAULT NULL,
  `playerHostMove` int(2) DEFAULT NULL,
  `hostRedy` tinyint(1) DEFAULT NULL,
  `idGuest` int(11) DEFAULT NULL,
  `guestDashboard` varchar(255) COLLATE utf8mb4_polish_ci DEFAULT NULL,
  `destroyGuest` int(11) DEFAULT NULL,
  `playerGuestMove` int(2) DEFAULT NULL,
  `guestRedy` tinyint(1) DEFAULT NULL,
  `game_key` int(11) NOT NULL,
  `idWinPlayer` int(11) DEFAULT NULL,
  `gameDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

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
(0, '0', 'djamrozy@ur.edu.pl', '7c4f910f7e5510a57262a57e35c57839', '2022-09-01 12:54:31', NULL, 1665962552, '2022-10-17 02:08:04', 0),
(1, '1', 'test@test.pl', 'cc03e747a6afbbcbf8be7668acfebee5', NULL, '2022-11-20 14:57:47', 1668983613, '2022-11-19 01:29:08', 1),
(4, '4', 'test2@test2.pl', 'd41d8cd98f00b204e9800998ecf8427e', '2022-10-03 15:50:10', NULL, 0, NULL, 0),
(14, '14', 'haslo@haslo.pl', '15aeccf46e5f5db8fd9d28cfb7d2c68d', '2022-11-01 21:22:04', '2022-11-01 21:22:25', 1667335626, '2022-11-01 21:47:46', 0),
(15, '15', 'user1@poczta.pl', '9e38e8d688743e0d07d669a1fcbcd35b', '2022-11-18 13:47:12', '2022-11-20 14:06:22', 1668952605, '2022-11-19 01:18:11', 1);

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

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `videochat`
--

CREATE TABLE `videochat` (
  `id` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `keyHost` varchar(25) COLLATE utf8mb4_polish_ci DEFAULT NULL,
  `keyHostFull` varchar(255) COLLATE utf8mb4_polish_ci DEFAULT NULL,
  `keyActive` varchar(25) COLLATE utf8mb4_polish_ci DEFAULT NULL,
  `lastVideo` datetime DEFAULT NULL,
  `keyModified` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `videochat`
--

INSERT INTO `videochat` (`id`, `idUser`, `keyHost`, `keyHostFull`, `keyActive`, `lastVideo`, `keyModified`) VALUES
(1, 0, '1', '', '1', NULL, 0),
(2, 1, '6278571', 'https://meet.jit.si/6278571', '6117211', '2022-10-30 11:45:17', 0),
(3, 4, '3', '', '3', NULL, 0),
(4, 14, '21908614', 'https://meet.jit.si/21908614', '0', '0000-00-00 00:00:00', 0),
(5, 15, '81285515', 'https://meet.jit.si/81285515', 'NULL', '0000-00-00 00:00:00', 0);

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
-- Indeksy dla tabeli `game_eye_tetris`
--
ALTER TABLE `game_eye_tetris`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeksy dla tabeli `game_talk_milionaires`
--
ALTER TABLE `game_talk_milionaires`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `game_talk_ships`
--
ALTER TABLE `game_talk_ships`
  ADD PRIMARY KEY (`id`);

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
-- Indeksy dla tabeli `videochat`
--
ALTER TABLE `videochat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IdUser` (`idUser`);

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
-- AUTO_INCREMENT dla tabeli `game_eye_tetris`
--
ALTER TABLE `game_eye_tetris`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `game_talk_milionaires`
--
ALTER TABLE `game_talk_milionaires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `game_talk_ships`
--
ALTER TABLE `game_talk_ships`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT dla tabeli `user_active`
--
ALTER TABLE `user_active`
  MODIFY `idActive` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `videochat`
--
ALTER TABLE `videochat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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

--
-- Ograniczenia dla tabeli `videochat`
--
ALTER TABLE `videochat`
  ADD CONSTRAINT `videochat_ibfk_1` FOREIGN KEY (`IdUser`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

DELIMITER $$
--
-- Zdarzenia
--
CREATE DEFINER=`root`@`localhost` EVENT `StatusAktywnosci` ON SCHEDULE EVERY 15 MINUTE STARTS '2022-10-17 00:59:04' ON COMPLETION PRESERVE ENABLE COMMENT 'Zmiana statusu online' DO UPDATE user SET idActive = 0, last_logout_date = NOW() WHERE (lastActive+900)<UNIX_TIMESTAMP() AND idActive = 1

-- CHANGE ACCOUNT TO OFFLINE WHEN NONE ACTION SEEN BY 15 MIN ON CLIENT SITE$$

CREATE DEFINER=`root`@`localhost` EVENT `StatusRozmowy` ON SCHEDULE EVERY 10 MINUTE STARTS '2022-10-23 20:39:33' ON COMPLETION PRESERVE DISABLE DO UPDATE videochat AS vi 
INNER JOIN user AS u ON u.id = vi.idUser 
SET vi.keyHost = NULL, vi.keyActive = NULL 
WHERE (u.lastActive+900)<UNIX_TIMESTAMP() AND u.idActive = 1$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
