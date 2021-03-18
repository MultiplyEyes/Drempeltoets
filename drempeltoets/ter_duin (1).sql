-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 02 mrt 2021 om 12:57
-- Serverversie: 10.4.14-MariaDB
-- PHP-versie: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ter duin`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `kamer`
--

CREATE TABLE `kamer` (
  `id` int(11) NOT NULL,
  `Hoeveel_personen` int(11) NOT NULL,
  `prijs_per_nacht` int(11) NOT NULL,
  `Active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `kamer`
--

INSERT INTO `kamer` (`id`, `Hoeveel_personen`, `prijs_per_nacht`, `Active`) VALUES
(1, 2, 60, 1),
(2, 3, 100, 0),
(3, 4, 154, 1),
(4, 2, 50, 1),
(5, 2, 55, 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `reserveren`
--

CREATE TABLE `reserveren` (
  `id` int(11) NOT NULL,
  `startdatum` date NOT NULL,
  `einddatum` date NOT NULL,
  `Naam` varchar(250) NOT NULL,
  `adres` varchar(250) NOT NULL,
  `postcode` varchar(250) NOT NULL,
  `woonplaats` varchar(250) NOT NULL,
  `kamer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `reserveren`
--

INSERT INTO `reserveren` (`id`, `startdatum`, `einddatum`, `Naam`, `adres`, `postcode`, `woonplaats`, `kamer_id`) VALUES
(1, '2021-03-03', '2021-03-26', 'Remco', 'Zacharias Jansenstraat 5', '1097', 'AMSTERDAM', 1),
(23, '2021-03-03', '2021-03-26', 'Matthijs', 'Zacharias Jansenstraat 1', '1097', 'GRONINGEN', 4),
(27, '2021-03-03', '2021-03-12', 'Matthijs', 'KIKstreat 6', '1818', 'ROTTERDAM', 3),
(30, '2021-04-16', '2021-04-25', 'Leroy', 'Bigstreat 2', '9898', 'GRONINGEN', 2);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `usersId` int(11) NOT NULL,
  `usersName` varchar(250) NOT NULL,
  `usersEmail` varchar(250) NOT NULL,
  `usersUid` varchar(250) NOT NULL,
  `usersPwd` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`usersId`, `usersName`, `usersEmail`, `usersUid`, `usersPwd`) VALUES
(1, 'Matthijs Stokroos', 'mstokroos@gmail.com', 'GalaxyEyes', '$2y$10$63QL4hfCYJiXxljB8.4kbOnrggbF9AxKDF5aS8hA8WbxyqicMYZBW');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `kamer`
--
ALTER TABLE `kamer`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `reserveren`
--
ALTER TABLE `reserveren`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kamer_id` (`kamer_id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersId`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `kamer`
--
ALTER TABLE `kamer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT voor een tabel `reserveren`
--
ALTER TABLE `reserveren`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `reserveren`
--
ALTER TABLE `reserveren`
  ADD CONSTRAINT `reserveren_ibfk_1` FOREIGN KEY (`kamer_id`) REFERENCES `kamer` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
