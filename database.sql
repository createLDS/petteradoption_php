-- phpMyAdmin SQL Dump
-- version 4.7.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 20, 2019 at 08:25 PM
-- Server version: 5.6.38
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `petteradoption`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminFirstName` varchar(255) DEFAULT NULL,
  `adminLastName` varchar(255) DEFAULT NULL,
  `adminEmail` varchar(255) DEFAULT NULL,
  `adminUsername` varchar(255) DEFAULT NULL,
  `adminPassword` varchar(255) DEFAULT NULL,
  `adminID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminFirstName`, `adminLastName`, `adminEmail`, `adminUsername`, `adminPassword`, `adminID`) VALUES
('Henry', 'Leung', 'henry@henry.com', 'henry', 'henry123', 32),
('Henry', 'Leung', 'henry@henry.com', 'henry', 'henry123', 33),
('Henry', 'Leung', 'henry@henry.com', 'henry', 'henry123', 34),
('Henry', 'Leung', 'henry@henry.com', 'henry', 'henry123', 35),
('Henry', 'Leung', 'henry@henry.com', 'henry', 'henry123', 36),
('Henry', 'Leung', 'henry@henry.com', 'henry', 'henry123', 37),
('', '', '', '', '', 38),
('', '', '', '', '', 39),
('', '', '', '', '', 40),
('', '', '', '', '', 41),
('', '', '', '', '', 42),
('', '', '', '', '', 43),
('', '', '', '', '', 44),
('', '', '', '', '', 45),
('', '', '', '', '', 46),
('', '', '', '', '', 47),
('', '', '', '', '', 48),
('', '', '', '', '', 49),
('', '', '', '', '', 50),
('', '', '', '', '', 51);

-- --------------------------------------------------------

--
-- Table structure for table `pets`
--

CREATE TABLE `pets` (
  `petID` int(11) NOT NULL,
  `petName` varchar(255) DEFAULT NULL,
  `petGender` enum('F','M') DEFAULT NULL,
  `petDOB` date DEFAULT NULL,
  `petSpecies` enum('D','C','H','B') DEFAULT NULL,
  `petPhotos` varchar(255) DEFAULT NULL,
  `petadminID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pets`
--

INSERT INTO `pets` (`petID`, `petName`, `petGender`, `petDOB`, `petSpecies`, `petPhotos`, `petadminID`) VALUES
(1, 'Rocko', 'M', '2019-02-02', 'D', '\"../assets/img/dog1.jpg\"', 1),
(2, 'Lola', 'F', '2018-05-08', 'D', 'src/assets/img/dog2.jpg', 2),
(3, 'Lucky', 'M', '2018-01-10', 'D', 'dog3.jpg', 3),
(4, 'Missy', 'F', '2018-09-01', 'D', 'dog4.jpg', 4),
(5, 'Piper', 'F', '2018-04-04', 'H', 'hamster1.jpg', 5),
(10, 'Peter', 'M', '2019-01-11', 'C', 'cat2.jpg', 6),
(17, 'Bossy', 'F', '2017-01-01', 'H', 'hamster2.jpg', 7),
(18, 'Logan', 'M', '2016-09-09', 'C', 'cat1.jpg', 8),
(19, '', '', '0000-00-00', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `userFirstName` varchar(255) DEFAULT NULL,
  `userLastName` varchar(255) DEFAULT NULL,
  `userEmail` varchar(255) DEFAULT NULL,
  `userPassword` varchar(255) DEFAULT NULL,
  `userDOB` date DEFAULT NULL,
  `userGender` enum('F','M') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `userFirstName`, `userLastName`, `userEmail`, `userPassword`, `userDOB`, `userGender`) VALUES
(1, 'Sierra', 'Schuss', 'sierra@petter.com', '123abc', '1999-01-01', 'F'),
(2, '', '', '', '', '0000-00-00', ''),
(3, '', '', '', '', '0000-00-00', ''),
(4, '', '', '', '', '0000-00-00', ''),
(5, '', '', '', '', '0000-00-00', ''),
(6, '', '', '', '', '0000-00-00', ''),
(7, '', '', '', '', '0000-00-00', ''),
(8, '', '', '', '', '0000-00-00', ''),
(9, '', '', '', '', '0000-00-00', ''),
(10, '', '', '', '', '0000-00-00', ''),
(11, '', '', '', '', '0000-00-00', ''),
(12, '', '', '', '', '0000-00-00', ''),
(13, '', '', '', '', '0000-00-00', ''),
(14, '', '', '', '', '0000-00-00', ''),
(15, '', '', '', '', '0000-00-00', ''),
(16, '', '', '', '', '0000-00-00', ''),
(17, '', '', '', '', '0000-00-00', ''),
(18, '', '', '', '', '0000-00-00', ''),
(19, '', '', '', '', '0000-00-00', ''),
(20, '', '', '', '', '0000-00-00', ''),
(21, '', '', '', '', '0000-00-00', ''),
(22, '', '', '', '', '0000-00-00', ''),
(23, '', '', '', '', '0000-00-00', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `pets`
--
ALTER TABLE `pets`
  ADD PRIMARY KEY (`petID`),
  ADD UNIQUE KEY `Unique` (`petadminID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `pets`
--
ALTER TABLE `pets`
  MODIFY `petID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
