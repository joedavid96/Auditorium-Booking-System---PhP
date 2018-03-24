-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 24, 2018 at 02:53 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nallia`
--

-- --------------------------------------------------------

--
-- Table structure for table `event_content`
--

DROP TABLE IF EXISTS `event_content`;
CREATE TABLE IF NOT EXISTS `event_content` (
  `eventid` varchar(10) DEFAULT NULL,
  `staffname` varchar(100) DEFAULT NULL,
  `staffmail` varchar(100) DEFAULT NULL,
  `staffnumber` varchar(100) DEFAULT NULL,
  `studname` varchar(100) DEFAULT NULL,
  `studmail` varchar(100) DEFAULT NULL,
  `studnumber` varchar(100) DEFAULT NULL,
  `eventname` varchar(100) DEFAULT NULL,
  `orgdept` varchar(100) DEFAULT NULL,
  `guestdetails` text,
  `attclasses` varchar(100) DEFAULT NULL,
  `eventtopic` varchar(100) DEFAULT NULL,
  `eventduration` varchar(100) DEFAULT NULL,
  `wiredmic` varchar(100) DEFAULT NULL,
  `cordlmic` varchar(100) DEFAULT NULL,
  `chairsaud` varchar(100) DEFAULT NULL,
  `lcdproj` varchar(100) DEFAULT NULL,
  `ac` varchar(100) DEFAULT NULL,
  `chairsstg` varchar(100) DEFAULT NULL,
  `podium` varchar(100) DEFAULT NULL,
  `othreq` text,
  `verify` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_content`
--

INSERT INTO `event_content` (`eventid`, `staffname`, `staffmail`, `staffnumber`, `studname`, `studmail`, `studnumber`, `eventname`, `orgdept`, `guestdetails`, `attclasses`, `eventtopic`, `eventduration`, `wiredmic`, `cordlmic`, `chairsaud`, `lcdproj`, `ac`, `chairsstg`, `podium`, `othreq`, `verify`) VALUES
(NULL, 'qwerty', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('47', 'Joel David', 'joedavid96@gmail.com', '9790912737', 'Daniel', 'daniel@gmail.com', '9884627950', 'The brothers', 'us', 'me and him', 'us', 'us', 'forever', 'yes', 'yes', '7', '0', 'yes', '2', 'no', 'love and fun!', '1'),
('12', NULL, NULL, NULL, NULL, NULL, NULL, 'drestein', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1'),
('13', NULL, NULL, NULL, NULL, NULL, NULL, 'xfsdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1'),
('45', NULL, NULL, NULL, NULL, NULL, NULL, 'dasdfa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1'),
('45', NULL, NULL, NULL, NULL, NULL, NULL, 'asdasd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1'),
('48', 'Joel', 'joe@gmail.om', '1234567890', 'David', 'dav@gmail.com', '0987654321', 'Farewell', 'us', 'us', 'us', 'bid adeiu', '11-09-17', 'yes', 'yes', '240', '0', 'yes', '5', 'no', 'food and love and fun!', '1'),
('49', 'Joel Davy', 'joedavy@gmail.com', '9884650028', 'Momos', 'momo@gmail.com', '1234567890', 'momo', 'momo', 'momo', 'momo', 'momo', '11-18-98', 'yes', 'yes', '5', '0', 'yes', '456', 'no', 'momos', '0');

-- --------------------------------------------------------

--
-- Table structure for table `event_status`
--

DROP TABLE IF EXISTS `event_status`;
CREATE TABLE IF NOT EXISTS `event_status` (
  `eventid` varchar(10) NOT NULL,
  `userid` varchar(10) NOT NULL,
  `hod` int(2) NOT NULL,
  `principal` int(2) NOT NULL,
  `fo` int(2) NOT NULL,
  `smc_main` int(2) NOT NULL,
  `sec_main` int(2) NOT NULL,
  `sec` int(2) NOT NULL,
  `ao_team` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_status`
--

INSERT INTO `event_status` (`eventid`, `userid`, `hod`, `principal`, `fo`, `smc_main`, `sec_main`, `sec`, `ao_team`) VALUES
('56', '', 3, 2, 0, 0, 0, 0, 0),
('1', 'sdf', 0, 0, 0, 0, 0, 0, 0),
('1', 'sdf', 0, 0, 0, 0, 0, 0, 0),
('1', 'sdf', 0, 0, 0, 0, 0, 0, 0),
('1', 'sdf', 0, 0, 0, 0, 0, 0, 0),
('1', 'sdf', 0, 0, 0, 0, 0, 0, 0),
('1', 'sdf', 0, 0, 0, 0, 0, 0, 0),
('1', 'sdf', 0, 0, 0, 0, 0, 0, 0),
('1', 'sdf', 0, 0, 0, 0, 0, 0, 0),
('1', 'sdf', 0, 0, 0, 0, 0, 0, 0),
('1', 'sdf', 0, 0, 0, 0, 0, 0, 0),
('1', 'sdf', 0, 0, 0, 0, 0, 0, 0),
('1', 'sdf', 0, 0, 0, 0, 0, 0, 0),
('1', 'sdf', 0, 0, 0, 0, 0, 0, 0),
('11', 'sdf', 0, 0, 0, 0, 0, 0, 0),
('11', 'sdf', 0, 0, 0, 0, 0, 0, 0),
('11', 'sdf', 0, 0, 0, 0, 0, 0, 0),
('46', 'sdf', 0, 0, 0, 0, 0, 0, 0),
('46', 'sdf', 0, 0, 0, 0, 0, 0, 0),
('47', 'sdf', 0, 0, 0, 0, 0, 0, 0),
('', 'sdf', 0, 0, 0, 0, 0, 0, 0),
('', 'sdf', 0, 0, 0, 0, 0, 0, 0),
('45', 'sdf', 0, 0, 0, 0, 0, 0, 0),
('48', 'sdf', 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `userid` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` int(2) NOT NULL,
  `dept` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`userid`, `password`, `role`, `dept`) VALUES
('admin', '1234', 1, ''),
('user.cse', '1234', 2, 'cse'),
('user.it', '1234', 2, 'it'),
('user.ece', '1234', 2, 'ece');

-- --------------------------------------------------------

--
-- Table structure for table `mail_keys`
--

DROP TABLE IF EXISTS `mail_keys`;
CREATE TABLE IF NOT EXISTS `mail_keys` (
  `mailkey` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mail_keys`
--

INSERT INTO `mail_keys` (`mailkey`) VALUES
('abcd');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
