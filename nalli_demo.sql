-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2018 at 07:55 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nalli_demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `event_content`
--

CREATE TABLE `event_content` (
  `eventid` varchar(50) DEFAULT NULL,
  `staffname` varchar(100) DEFAULT NULL,
  `staffmail` varchar(100) DEFAULT NULL,
  `staffnumber` varchar(13) DEFAULT NULL,
  `studname` varchar(100) DEFAULT NULL,
  `studmail` varchar(100) DEFAULT NULL,
  `studnumber` varchar(13) DEFAULT NULL,
  `eventname` varchar(500) DEFAULT NULL,
  `orgdept` varchar(100) DEFAULT NULL,
  `guestdetails` varchar(500) DEFAULT NULL,
  `attclasses` varchar(200) DEFAULT NULL,
  `eventtopic` varchar(500) DEFAULT NULL,
  `eventduration` varchar(100) DEFAULT NULL,
  `wiredmic` varchar(10) DEFAULT NULL,
  `cordlmic` varchar(10) DEFAULT NULL,
  `chairsaud` varchar(10) DEFAULT NULL,
  `lcdproj` varchar(10) DEFAULT NULL,
  `ac` varchar(10) DEFAULT NULL,
  `chairsstg` varchar(10) DEFAULT NULL,
  `podium` varchar(10) DEFAULT NULL,
  `othreq` varchar(500) DEFAULT NULL,
  `verify` varchar(10) DEFAULT NULL,
  `dept` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_content`
--

INSERT INTO `event_content` (`eventid`, `staffname`, `staffmail`, `staffnumber`, `studname`, `studmail`, `studnumber`, `eventname`, `orgdept`, `guestdetails`, `attclasses`, `eventtopic`, `eventduration`, `wiredmic`, `cordlmic`, `chairsaud`, `lcdproj`, `ac`, `chairsstg`, `podium`, `othreq`, `verify`, `dept`) VALUES
('1', 'Joel David', 'joedavid96@gmail.com', '9884627940', 'Joshua Daniel', 'joshdani88@gmail.com', '9790912737', 'Grace to Grace', 'The Brothers', 'Grace Unplugged', 'Everyone', 'Grace', 'Forever', 'Yes', 'Yes', '100', 'No', 'No', '7', 'Yes', 'faith hope and love', '1', 'Array');

-- --------------------------------------------------------

--
-- Table structure for table `event_status`
--

CREATE TABLE `event_status` (
  `eventid` varchar(100) NOT NULL,
  `hod` varchar(5) NOT NULL,
  `principal` varchar(5) NOT NULL,
  `fo` varchar(5) NOT NULL,
  `smc_main` varchar(5) NOT NULL,
  `sec_main` varchar(5) NOT NULL,
  `sec` varchar(5) NOT NULL,
  `ao_team` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `userid` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(5) NOT NULL,
  `dept` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`userid`, `password`, `role`, `dept`) VALUES
('admin', '1234', '1', 'Admin Team'),
('user.cse', '1234', '2', 'CSE');

-- --------------------------------------------------------

--
-- Table structure for table `mail_keys`
--

CREATE TABLE `mail_keys` (
  `mailkey` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mail_keys`
--

INSERT INTO `mail_keys` (`mailkey`) VALUES
('abcd');

-- --------------------------------------------------------

--
-- Table structure for table `status_timestamp`
--

CREATE TABLE `status_timestamp` (
  `eventid` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `hod` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `principal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fo` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `smc_main` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sec_main` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sec` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ao_team` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supervisor_assign`
--

CREATE TABLE `supervisor_assign` (
  `eventid` varchar(100) DEFAULT NULL,
  `supervisor1` varchar(5) DEFAULT NULL,
  `supervisor2` varchar(5) DEFAULT NULL,
  `supervisor3` varchar(5) DEFAULT NULL,
  `supervisor4` varchar(5) DEFAULT NULL,
  `supervisor5` varchar(5) DEFAULT NULL,
  `supervisor6` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
