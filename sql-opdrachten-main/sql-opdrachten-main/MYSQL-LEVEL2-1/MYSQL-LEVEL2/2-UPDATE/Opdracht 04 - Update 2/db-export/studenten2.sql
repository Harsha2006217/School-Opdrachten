-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 28 aug 2020 om 11:27
-- Serverversie: 10.1.38-MariaDB
-- PHP-versie: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ams`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `studenten2`
--

CREATE TABLE `studenten2` (
  `student_id` int(5) NOT NULL,
  `voornaam` varchar(50) NOT NULL,
  `achternaam` varchar(50) NOT NULL,
  `klas` varchar(5) DEFAULT NULL,
  `adres` varchar(50) DEFAULT NULL,
  `postcode` varchar(7) DEFAULT NULL,
  `geboortedatum` date DEFAULT NULL,
  `woonplaats` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `studenten2`
--

INSERT INTO `studenten2` (`student_id`, `voornaam`, `achternaam`, `klas`, `adres`, `postcode`, `geboortedatum`, `woonplaats`) VALUES
(1, 'Henk', 'van Balen', '9A', 'Albert Cuypstraat 1', '1234AB', '2000-05-18', 'Amsterdam'),
(2, 'Marloes', 'Bakker', '9A', '2e Kekerstraat', '1104EG', '1999-12-12', 'Amsterdam'),
(3, 'Emma', 'da Silva', '9A', 'Burgemeester Mulstraat 66', '1109ET', '2001-04-28', 'Amstelveen'),
(4, 'Mohammed', 'Atari', '9A', 'Duke Ellingtonstraat 11', '1066AK', '2002-02-17', 'Amstelveen'),
(5, 'Piet', 'Pieters', '9A', 'Albert Cuypstraat 5', '1234AB', '2001-04-28', 'Ouderkerk'),
(6, 'Johanna', 'Eduardo', '9C', 'Pieter Aertszstraat 44', '1073CD', '2001-09-02', 'Hoorn'),
(7, 'Angela ', 'Mohammed', '9C', 'Piet Mondriaanplein 14', '1299CD', '2002-05-17', 'Amstelveen'),
(8, 'Jan', 'Vermeer', '9C', '', '', '2000-08-08', 'Amsterdam'),
(9, 'Bert', 'Hendriks', '9C', '', '', '2001-04-28', 'Utrecht'),
(10, 'Marri', 'Janssen', '9C', '', '', '2003-06-26', 'Almere');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `studenten2`
--
ALTER TABLE `studenten2`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `studenten2`
--
ALTER TABLE `studenten2`
  MODIFY `student_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
