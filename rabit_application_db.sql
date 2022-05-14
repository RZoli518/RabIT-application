-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Gép: localhost
-- Létrehozás ideje: 2022. Máj 14. 20:28
-- Kiszolgáló verziója: 8.0.29
-- PHP verzió: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `rabit_application_db`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `advertisement`
--

CREATE TABLE `advertisement` (
  `id` int NOT NULL,
  `userid` int DEFAULT NULL,
  `title` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- A tábla adatainak kiíratása `advertisement`
--

INSERT INTO `advertisement` (`id`, `userid`, `title`) VALUES
(1, 3, 'testad1'),
(2, 3, 'testad2'),
(3, 1, 'testad3'),
(4, 2, 'testad4'),
(5, 1, 'testad5'),
(6, 1, 'testad6');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- A tábla adatainak kiíratása `user`
--

INSERT INTO `user` (`id`, `name`) VALUES
(1, 'Testuser1'),
(2, 'Testuser2'),
(3, 'Testuser3');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `advertisement`
--
ALTER TABLE `advertisement`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`);

--
-- A tábla indexei `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `advertisement`
--
ALTER TABLE `advertisement`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT a táblához `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `advertisement`
--
ALTER TABLE `advertisement`
  ADD CONSTRAINT `advertuserid` FOREIGN KEY (`userid`) REFERENCES `user` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
