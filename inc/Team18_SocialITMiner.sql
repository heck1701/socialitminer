-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 13, 2013 at 04:52 PM
-- Server version: 5.6.12
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `Team18_SocialITMiner`
--
CREATE DATABASE IF NOT EXISTS `Team18_SocialITMiner` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `Team18_SocialITMiner`;

-- --------------------------------------------------------

--
-- Table structure for table `Locations`
--

CREATE TABLE IF NOT EXISTS `Locations` (
  `LocationID` varchar(64) NOT NULL,
  `Building` varchar(64) NOT NULL,
  `Room` int(3) DEFAULT NULL,
  PRIMARY KEY (`LocationID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `PostList`
--

CREATE TABLE IF NOT EXISTS `PostList` (
  `OwnerID` char(10) NOT NULL,
  `RequestID` int(7) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`RequestID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Requests`
--

CREATE TABLE IF NOT EXISTS `Requests` (
  `RequestID` int(7) NOT NULL AUTO_INCREMENT,
  `Title` char(64) NOT NULL,
  `Body` varchar(255) NOT NULL,
  `DateSubmitted` datetime NOT NULL,
  `OwnerID` char(10) NOT NULL,
  `Votes` int(6) NOT NULL,
  `Privacy` tinyint(1) NOT NULL,
  `NotifcationSent` tinyint(1) NOT NULL,
  `LocationID` varchar(255) NOT NULL,
  `TypeOfRequest` varchar(255) NOT NULL,
  `VendorName` varchar(255) NOT NULL,
  `VendorURL` varchar(255) NOT NULL,
  `SoftwareVersion` varchar(255) NOT NULL,
  `SoftwareUpgrade` tinyint(1) NOT NULL,
  PRIMARY KEY (`RequestID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Types`
--

CREATE TABLE IF NOT EXISTS `Types` (
  `TypeOfRequest` varchar(64) NOT NULL,
  `DescriptionOfType` varchar(255) NOT NULL,
  PRIMARY KEY (`TypeOfRequest`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE IF NOT EXISTS `Users` (
  `OwnerID` char(10) NOT NULL,
  `CampusUsername` char(10) NOT NULL,
  `Password` char(30) NOT NULL,
  `DisplayName` char(30) NOT NULL,
  PRIMARY KEY (`OwnerID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `VoteTable`
--

CREATE TABLE IF NOT EXISTS `VoteTable` (
  `OwnerID` char(10) NOT NULL,
  `RequestID` int(7) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`RequestID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
