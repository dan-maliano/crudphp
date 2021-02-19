-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 19, 2021 at 11:02 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tablephp`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(5) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `number` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `name`, `email`, `number`) VALUES
(1, 'dan', 'dan@dan', '1234'),
(2, 'dan2', 'dan2@dan2', '4321'),
(3, 'dan', 'dan@dan', '1234'),
(4, 'dan2', 'dan2@dan2', '4321');

-- --------------------------------------------------------

--
-- Table structure for table `notesphp`
--

CREATE TABLE `notesphp` (
  `id` int(100) NOT NULL,
  `note_name` varchar(100) NOT NULL,
  `note_description` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notesphp`
--

INSERT INTO `notesphp` (`id`, `note_name`, `note_description`) VALUES
(34, 'sdfsdfsdf', 'sdfsdfsdf'),
(33, 'sdfsdf', 'dsfsdfsdf'),
(21, 'asdsad', 'Soccerasdas'),
(22, 'dan', 'dan'),
(30, 'sdfsdfsdfasdsadasd', 'sdfsdfsdfasdasdasd'),
(31, 'sdfsdfsdf', 'sdfsdfsdf'),
(32, 'sdfsdfsd', 'sdfsdfsdf'),
(35, 'sdfsdfsdf', 'sdfsdfsdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notesphp`
--
ALTER TABLE `notesphp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `notesphp`
--
ALTER TABLE `notesphp`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
