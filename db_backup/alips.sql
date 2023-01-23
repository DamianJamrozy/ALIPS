-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 23 Sty 2023, 17:04
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
-- Struktura tabeli dla tabeli `business_color`
--

CREATE TABLE `business_color` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `business_color`
--

INSERT INTO `business_color` (`id`, `Name`) VALUES
(0, 'Niebiesko-białe'),
(1, 'Szaro-białe'),
(2, 'Morsko-białe'),
(3, 'Morska zieleń-białe'),
(4, 'Zielono-białe'),
(5, 'Pomarańczowo-białe'),
(6, 'Łososiowo-białe'),
(7, 'Fioletowo-białe'),
(8, 'Niebiesko-czarne'),
(9, 'Szaro-czarne'),
(10, 'Morsko-czarne'),
(11, 'Morska zieleń-czarne'),
(12, 'Zielono-czarne'),
(13, 'Pomarańczowo-czarne'),
(14, 'Łososiowo-czarne'),
(15, 'Fioletowo-czarne');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `business_color_user`
--

CREATE TABLE `business_color_user` (
  `id` int(11) NOT NULL,
  `idColor` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  `lookTimePoints` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `business_color_user`
--

INSERT INTO `business_color_user` (`id`, `idColor`, `idUser`, `points`, `lookTimePoints`, `date`) VALUES
(10, 0, 0, 4, 216, '2023-01-23'),
(11, 1, 0, 0, 4, '2023-01-23'),
(12, 2, 0, 3, 204, '2023-01-23'),
(13, 3, 0, 0, 5, '2023-01-23'),
(14, 4, 0, 1, 65, '2023-01-23'),
(15, 5, 0, 0, 2, '2023-01-23'),
(16, 6, 0, 0, 4, '2023-01-23'),
(17, 7, 0, 0, 6, '2023-01-23'),
(18, 8, 0, 1, 39, '2023-01-23'),
(19, 9, 0, 0, 6, '2023-01-23'),
(20, 10, 0, 1, 40, '2023-01-23'),
(21, 11, 0, 2, 214, '2023-01-23'),
(22, 12, 0, 0, 4, '2023-01-23'),
(23, 13, 0, 0, 23, '2023-01-23'),
(24, 14, 0, 1, 81, '2023-01-23'),
(25, 15, 0, 5, 181, '2023-01-23');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `business_food`
--

CREATE TABLE `business_food` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `business_food`
--

INSERT INTO `business_food` (`id`, `Name`) VALUES
(0, 'Kuchnia Brazylijska'),
(1, 'Kuchnia Bułgarska'),
(2, 'Kuchnia Chińska'),
(3, 'Kuchnia Chorwacka'),
(4, 'Kuchnia Francuska'),
(5, 'Kuchnia Grecka'),
(6, 'Kuchnia Hiszpańska'),
(7, 'Kuchnia Indonezyjska'),
(8, 'Kuchnia Indyjska'),
(9, 'Kuchnia Japońska'),
(10, 'Kuchnia Meksykańska'),
(11, 'Kuchnia Polska'),
(12, 'Kuchnia Portugalska'),
(13, 'Kuchnia Rumuńska'),
(14, 'Kuchnia USA'),
(15, 'Kuchnia Włoska');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `business_food_user`
--

CREATE TABLE `business_food_user` (
  `id` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `idFood` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  `lookTimePoints` int(5) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `business_food_user`
--

INSERT INTO `business_food_user` (`id`, `idUser`, `idFood`, `points`, `lookTimePoints`, `date`) VALUES
(25, 0, 0, 1, 24, '2023-01-23'),
(26, 0, 1, 0, 30, '2023-01-23'),
(27, 0, 2, 0, 94, '2023-01-23'),
(28, 0, 3, 1, 82, '2023-01-23'),
(29, 0, 4, 0, 6, '2023-01-23'),
(30, 0, 5, 0, 4, '2023-01-23'),
(31, 0, 6, 1, 51, '2023-01-23'),
(32, 0, 7, 1, 102, '2023-01-23'),
(33, 0, 8, 5, 240, '2023-01-23'),
(34, 0, 9, 0, 31, '2023-01-23'),
(35, 0, 10, 3, 167, '2023-01-23'),
(36, 0, 11, 4, 433, '2023-01-23'),
(37, 0, 12, 0, 32, '2023-01-23'),
(38, 0, 13, 0, 2, '2023-01-23'),
(39, 0, 14, 2, 213, '2023-01-23'),
(40, 0, 15, 0, 6, '2023-01-23');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `game_eye_tetris`
--

CREATE TABLE `game_eye_tetris` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `points` int(11) DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `game_eye_tetris`
--

INSERT INTO `game_eye_tetris` (`id`, `id_user`, `points`, `date`) VALUES
(1, 0, 4, '2023-01-22'),
(2, 1, 8, '2023-01-22'),
(3, 0, 1, '2023-01-01'),
(4, 0, 6, '2023-01-04'),
(5, 0, 0, '2023-01-23');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `game_talk_milionaires`
--

CREATE TABLE `game_talk_milionaires` (
  `id` int(11) NOT NULL,
  `idPlayer` int(11) NOT NULL,
  `question` int(11) NOT NULL,
  `money` int(11) NOT NULL,
  `gameDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `game_talk_milionaires`
--

INSERT INTO `game_talk_milionaires` (`id`, `idPlayer`, `question`, `money`, `gameDate`) VALUES
(1, 1, 1, 500, '2022-11-21'),
(2, 0, 0, 0, '2023-01-22'),
(3, 0, 2, 1000, '2023-01-20');

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

--
-- Zrzut danych tabeli `game_talk_ships`
--

INSERT INTO `game_talk_ships` (`id`, `idHost`, `hostDashboard`, `destroyHost`, `playerHostMove`, `hostRedy`, `idGuest`, `guestDashboard`, `destroyGuest`, `playerGuestMove`, `guestRedy`, `game_key`, `idWinPlayer`, `gameDate`) VALUES
(1, 0, '2,2,0,0,0,0,0,2,2,0,0,0,0,0,2,0,8,0,0,0,0,2,0,8,0,0,0,0,2,0,8,0,0,0,0,2,0,0,0,0,0,0,2,0,0,0,0,0,0', 9, 9, 1, 1, '0,0,0,0,0,0,2,0,0,0,0,0,0,2,0,0,0,0,0,0,2,0,0,0,0,0,0,2,0,0,0,0,0,0,2,0,0,0,0,0,2,2,0,0,0,0,0,2,2', 9, 12, 1, 6086140, 0, '2023-01-22'),
(2, 0, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 0, 5215030, NULL, '2023-01-22'),
(3, 0, '2,2,0,0,0,0,0,2,2,0,0,0,0,0,2,0,8,0,0,0,0,2,0,8,0,0,0,0,2,0,8,0,0,0,0,2,0,0,0,0,0,0,2,0,0,0,0,0,0', 9, 11, 1, 1, '0,0,0,0,0,0,2,0,0,0,0,0,0,2,0,0,0,0,0,0,2,0,0,0,0,0,0,2,0,0,0,0,0,0,2,0,0,0,0,0,2,2,0,0,0,0,0,2,2', 9, 10, 1, 6086180, 1, '2023-01-23');

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
(0, 'djamrozy', 'djamrozy@ur.edu.pl', '9e38e8d688743e0d07d669a1fcbcd35b', '2022-09-01 12:54:31', '2023-01-23 14:45:57', 1674489788, '2023-01-22 15:17:56', 1),
(1, 'test', 'test@test.pl', '9e38e8d688743e0d07d669a1fcbcd35b', NULL, '2023-01-22 21:36:31', 1674419800, '2022-12-04 11:46:05', 1),
(4, 'test2', 'test2@test2.pl', 'd41d8cd98f00b204e9800998ecf8427e', '2022-10-03 15:50:10', NULL, 0, NULL, 0);

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
(1, 0, '1402470', 'https://meet.jit.si/1402470', '1', NULL, 0),
(2, 1, 'xd', 'https://meet.jit.si/xd', 'xd', '2022-11-21 16:03:23', 1),
(3, 4, '3', '', '3', NULL, 0);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `business_color`
--
ALTER TABLE `business_color`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `business_color_user`
--
ALTER TABLE `business_color_user`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `business_food`
--
ALTER TABLE `business_food`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `business_food_user`
--
ALTER TABLE `business_food_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUser` (`idUser`,`idFood`),
  ADD KEY `idFood` (`idFood`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `idPlayer` (`idPlayer`);

--
-- Indeksy dla tabeli `game_talk_ships`
--
ALTER TABLE `game_talk_ships`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idHost` (`idHost`,`idGuest`),
  ADD KEY `idGuest` (`idGuest`);

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
-- AUTO_INCREMENT dla tabeli `business_color_user`
--
ALTER TABLE `business_color_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT dla tabeli `business_food`
--
ALTER TABLE `business_food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT dla tabeli `business_food_user`
--
ALTER TABLE `business_food_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT dla tabeli `game_eye_tetris`
--
ALTER TABLE `game_eye_tetris`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `game_talk_milionaires`
--
ALTER TABLE `game_talk_milionaires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `game_talk_ships`
--
ALTER TABLE `game_talk_ships`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
-- Ograniczenia dla tabeli `business_food_user`
--
ALTER TABLE `business_food_user`
  ADD CONSTRAINT `business_food_user_ibfk_1` FOREIGN KEY (`idFood`) REFERENCES `business_food` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `business_food_user_ibfk_2` FOREIGN KEY (`idUser`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `game_eye_tetris`
--
ALTER TABLE `game_eye_tetris`
  ADD CONSTRAINT `game_eye_tetris_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `game_talk_milionaires`
--
ALTER TABLE `game_talk_milionaires`
  ADD CONSTRAINT `game_talk_milionaires_ibfk_1` FOREIGN KEY (`idPlayer`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `game_talk_ships`
--
ALTER TABLE `game_talk_ships`
  ADD CONSTRAINT `game_talk_ships_ibfk_1` FOREIGN KEY (`idHost`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `game_talk_ships_ibfk_2` FOREIGN KEY (`idGuest`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`idActive`) REFERENCES `user_active` (`idActive`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `videochat`
--
ALTER TABLE `videochat`
  ADD CONSTRAINT `videochat_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `videochat_ibfk_2` FOREIGN KEY (`idUser`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

DELIMITER $$
--
-- Zdarzenia
--
CREATE DEFINER=`root`@`localhost` EVENT `StatusAktywnosci` ON SCHEDULE EVERY 15 MINUTE STARTS '2022-10-17 00:59:04' ON COMPLETION PRESERVE ENABLE COMMENT 'Zmiana statusu online' DO UPDATE user SET idActive = 0, last_logout_date = NOW() WHERE (lastActive+900)<UNIX_TIMESTAMP() AND idActive = 1

-- END CHANGE ACCOUNT TO OFFLINE WHEN NONE ACTION SEEN BY 15 MIN ON CLIENT SITE$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
