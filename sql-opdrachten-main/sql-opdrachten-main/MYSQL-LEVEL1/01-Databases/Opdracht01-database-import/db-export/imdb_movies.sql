-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2019 at 08:51 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imdb_movies`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `movie_id` int(2) DEFAULT NULL,
  `movie` varchar(46) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `rating` decimal(7,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`movie_id`, `movie`, `year`, `rating`) VALUES
(1, 'Velvet Buzzsaw', 2019, '6'),
(2, 'Alita: Battle Angel', 2019, '8'),
(3, 'Avengers: Endgame', 2019, '0'),
(4, 'Polar', 2019, '6'),
(5, 'Bohemian Rhapsody', 2018, '8'),
(6, 'Overlord', 2018, '7'),
(7, 'Glass', 2019, '7'),
(8, 'Green Book', 2018, '8'),
(9, 'Aquaman', 2018, '7'),
(10, 'Extremely Wicked, Shockingly Evil, and Vile', 2019, '8'),
(11, 'Child\'s Play', 2019, '0'),
(12, 'The Favourite', 2018, '8'),
(13, 'Captain Marvel', 2019, '0'),
(14, 'A Star Is Born', 2018, '8'),
(15, 'Incredibles 2', 2018, '8'),
(16, 'Fast & Furious Presents: Hobbs & Shaw', 2019, '0'),
(17, 'The Lego Movie 2: The Second Part', 2019, '7'),
(18, 'Joker', 2019, '0'),
(19, 'Mortal Engines', 2018, '6'),
(20, 'Cold Pursuit', 2019, '7'),
(21, 'How to Train Your Dragon: The Hidden World', 2019, '8'),
(22, 'Once Upon a Time in Hollywood', 2019, '0'),
(23, 'Widows', 2018, '7'),
(24, 'Robin Hood', 2018, '5'),
(25, 'Roma', 2018, '8'),
(26, 'Pet Sematary', 2019, '0'),
(27, 'Birds of Prey', 2020, '0'),
(28, 'Scary Stories to Tell in the Dark', 2019, '0'),
(29, 'Fighting with My Family', 2019, '8'),
(30, 'Vice', 2018, '7'),
(31, 'Shaft', 2019, '0'),
(32, 'Spider-Man: Into the Spider-Verse', 2018, '9'),
(33, 'Us', 2019, '0'),
(34, 'What Men Want', 2019, '4'),
(35, 'Avengers: Infinity War', 2018, '9'),
(36, 'BlacKkKlansman', 2018, '8'),
(37, 'Bird Box', 2018, '7'),
(38, 'Can You Ever Forgive Me?', 2018, '7'),
(39, 'Escape Room', 2019, '7'),
(40, 'The Prodigy', 2019, '6'),
(41, 'Toy Story 4', 2019, '0'),
(42, 'Serenity', 2019, '5'),
(43, 'The Wandering Earth', 2019, '8'),
(44, 'Suspiria', 2018, '7'),
(45, 'Abducted in Plain Sight', 2017, '7'),
(46, 'Ant-Man and the Wasp', 2018, '7'),
(47, 'Climax', 2018, '7'),
(48, 'The Upside', 2017, '6'),
(49, 'IO', 2019, '5'),
(50, 'The Mule', 2018, '7'),
(51, 'The Man Who Killed Hitler and Then The Bigfoot', 2018, '6'),
(52, 'First Man', 2018, '7'),
(53, 'Split', 2016, '7'),
(54, 'Close', 2019, '6'),
(55, 'Black Panther', 2018, '7'),
(56, 'Hunter Killer', 2018, '7'),
(57, 'Fyre', 2019, '7'),
(58, 'The Girl in the Spider\'s Web', 2018, '6'),
(59, 'Venom', 2018, '7'),
(60, 'Bumblebee', 2018, '7'),
(61, 'They Shall Not Grow Old', 2018, '9'),
(62, 'Bad Times at the El Royale', 2018, '7'),
(63, 'The Ballad of Buster Scruggs', 2018, '7'),
(64, 'Mary Queen of Scots', 2018, '7'),
(65, 'Uncle Drew', 2018, '6'),
(66, 'Solo: A Star Wars Story', 2018, '7'),
(67, 'Dragon Ball Super: Broly', 2018, '8'),
(68, 'The Greatest Showman', 2017, '8'),
(69, 'The Wife', 2017, '7'),
(70, 'Miss Bala', 2019, '5'),
(71, 'Spider-Man: Far From Home', 2019, '0'),
(72, 'A Quiet Place', 2018, '8'),
(73, 'Aladdin', 2019, '0'),
(74, 'Fantastic Beasts: The Crimes of Grindelwald', 2018, '7'),
(75, 'After', 2019, '0'),
(76, 'Ready Player One', 2018, '8'),
(77, 'Isn\'t It Romantic', 2019, '0'),
(78, 'The Irishman', 2019, '0'),
(79, 'Arctic', 2018, '7'),
(80, 'Groundhog Day', 1993, '8'),
(81, 'A Simple Favor', 2018, '7'),
(82, 'A Private War', 2018, '7'),
(83, 'It: Chapter Two', 2019, '0'),
(84, 'Deadpool 2', 2018, '8'),
(85, 'The Front Runner', 2018, '6'),
(86, 'Hanna', 2011, '7'),
(87, 'The Grinch', 2018, '6'),
(88, 'Unbreakable', 2000, '7'),
(89, 'Happy Death Day 2U', 2019, '0'),
(90, 'Hellboy', 2019, '0'),
(91, 'Boy Erased', 2018, '7'),
(92, 'At Eternity\'s Gate', 2018, '7'),
(93, 'The Kid Who Would Be King', 2019, '6'),
(94, 'Todos lo saben', 2018, '7'),
(95, 'American Pie', 1999, '7'),
(96, 'Tag', 2018, '7'),
(97, 'Prospect', 2018, '6'),
(98, 'Mary Poppins Returns', 2018, '7');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
