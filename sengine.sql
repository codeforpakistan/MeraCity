-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 21, 2015 at 06:35 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sengine`
--
CREATE DATABASE IF NOT EXISTS `sengine` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sengine`;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `catID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(200) NOT NULL,
  PRIMARY KEY (`catID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE IF NOT EXISTS `city` (
  `CID` int(11) NOT NULL DEFAULT '0',
  `name` varchar(200) NOT NULL,
  PRIMARY KEY (`CID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `CMID` int(11) NOT NULL,
  `Comment` varchar(300) NOT NULL,
  PRIMARY KEY (`CMID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `imgID` int(11) NOT NULL,
  `URL` varchar(300) NOT NULL,
  `CatID` int(11) NOT NULL,
  PRIMARY KEY (`imgID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE IF NOT EXISTS `rating` (
  `RID` int(11) NOT NULL,
  `Rate` int(11) NOT NULL,
  PRIMARY KEY (`RID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `SID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(300) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Address` varchar(1000) NOT NULL,
  `tel` varchar(200) NOT NULL,
  `web` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `CID` int(11) NOT NULL,
  `CatID` int(11) NOT NULL,
  PRIMARY KEY (`SID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `UID` int(11) NOT NULL,
  `Name` varchar(300) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Tel` varchar(300) NOT NULL,
  `CID` int(11) NOT NULL,
  PRIMARY KEY (`UID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
