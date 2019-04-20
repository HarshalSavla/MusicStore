-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 20, 2019 at 08:11 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `music_store_db`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `findByComposer` (IN `song` VARCHAR(255))  BEGIN
 SELECT Song_name,  Composer
 FROM music_store_db.Song
 WHERE Composer like CONCAT ('%',song,'%');
 END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `findByGenre` (IN `genre` VARCHAR(255))  BEGIN
SELECT Genre_name, Song_name, Composer
 FROM Song s
 JOIN Genre g
 ON s.GenreID = g.Genre_ID
 WHERE Genre_name like CONCAT ('%',genre,'%');
 END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `findComposer` (IN `song` VARCHAR(255))  BEGIN
 SELECT Song_name,  Composer
 FROM music_store_db.Song
 WHERE Song_name like CONCAT ('%',song,'%');
 END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_ID` int(11) NOT NULL,
  `admin_name` varchar(150) DEFAULT NULL,
  `admin_passwd` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_ID`, `admin_name`, `admin_passwd`) VALUES
(1, 'Harshal', 'd8578edf8458ce06fbc5bb76a58c5ca4');

-- --------------------------------------------------------

--
-- Table structure for table `Album`
--

CREATE TABLE `Album` (
  `AlbumID` int(11) NOT NULL,
  `Album_name` varchar(200) COLLATE utf8mb4_bin DEFAULT NULL,
  `ArtistID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `Album`
--

INSERT INTO `Album` (`AlbumID`, `Album_name`, `ArtistID`) VALUES
(1, 'Hunting Party', 1),
(2, 'One More Light', 1),
(3, 'Ghost Stories', 2),
(4, 'Highway to Hell', 3);

-- --------------------------------------------------------

--
-- Table structure for table `Artist`
--

CREATE TABLE `Artist` (
  `ArtistID` int(11) NOT NULL,
  `Artist_name` varchar(45) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `Artist`
--

INSERT INTO `Artist` (`ArtistID`, `Artist_name`) VALUES
(1, 'Linkin Park'),
(2, 'Coldplay'),
(3, 'AC/DC'),
(4, 'Sin Fang');

-- --------------------------------------------------------

--
-- Table structure for table `Customer`
--

CREATE TABLE `Customer` (
  `CustomerID` int(11) NOT NULL,
  `first_name` varchar(45) COLLATE utf8mb4_bin DEFAULT NULL,
  `last_name` varchar(45) COLLATE utf8mb4_bin DEFAULT NULL,
  `phone_number` int(11) DEFAULT NULL,
  `points` int(11) DEFAULT NULL,
  `uname` varchar(150) COLLATE utf8mb4_bin DEFAULT NULL,
  `passwd` varchar(150) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `Customer`
--

INSERT INTO `Customer` (`CustomerID`, `first_name`, `last_name`, `phone_number`, `points`, `uname`, `passwd`) VALUES
(15, 'h', 'h', 0, NULL, 'harsh', '81dc9bdb52d04dc20036dbd8313ed055'),
(17, 'Harshal', 'Savla', 2147483647, NULL, 'HarshalSavla', 'a384b6463fc216a5f8ecb6670f86456a');

-- --------------------------------------------------------

--
-- Table structure for table `Genre`
--

CREATE TABLE `Genre` (
  `Genre_ID` int(11) NOT NULL,
  `Genre_name` varchar(100) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `Genre`
--

INSERT INTO `Genre` (`Genre_ID`, `Genre_name`) VALUES
(1, 'Rock'),
(2, 'Indie'),
(5, 'Metal'),
(6, 'Rap');

-- --------------------------------------------------------

--
-- Table structure for table `Song`
--

CREATE TABLE `Song` (
  `SongID` int(11) NOT NULL,
  `Song_name` varchar(150) DEFAULT NULL,
  `AlbumID` int(11) DEFAULT NULL,
  `GenreID` int(11) DEFAULT NULL,
  `Composer` varchar(150) DEFAULT NULL,
  `Popularity` int(11) DEFAULT NULL,
  `Price` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Song`
--

INSERT INTO `Song` (`SongID`, `Song_name`, `AlbumID`, `GenreID`, `Composer`, `Popularity`, `Price`) VALUES
(1, 'Magic', 3, 1, 'Coldplay', 5, 11.99),
(2, 'Sky full of stars', 3, 1, 'Coldplay', 5, 11.99),
(3, 'Highway to Hell', NULL, 1, 'AC/DC', 4, 2.99),
(4, 'Thunderstruck', NULL, 1, 'AC/DC', 4, 2.99),
(5, 'Back in Black', NULL, 1, 'AC/DC', 4, 2.99),
(10, 'Killshot', NULL, 6, 'Eminem', 4, 2.99);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_ID`);

--
-- Indexes for table `Album`
--
ALTER TABLE `Album`
  ADD PRIMARY KEY (`AlbumID`),
  ADD KEY `ArtistID_idx` (`ArtistID`);

--
-- Indexes for table `Artist`
--
ALTER TABLE `Artist`
  ADD PRIMARY KEY (`ArtistID`);

--
-- Indexes for table `Customer`
--
ALTER TABLE `Customer`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Indexes for table `Genre`
--
ALTER TABLE `Genre`
  ADD PRIMARY KEY (`Genre_ID`);

--
-- Indexes for table `Song`
--
ALTER TABLE `Song`
  ADD PRIMARY KEY (`SongID`),
  ADD UNIQUE KEY `SongID` (`SongID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Customer`
--
ALTER TABLE `Customer`
  MODIFY `CustomerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `Genre`
--
ALTER TABLE `Genre`
  MODIFY `Genre_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `Song`
--
ALTER TABLE `Song`
  MODIFY `SongID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Album`
--
ALTER TABLE `Album`
  ADD CONSTRAINT `ArtistID` FOREIGN KEY (`ArtistID`) REFERENCES `artist` (`artistid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
