-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2013 at 08:53 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `grade`
--
CREATE DATABASE IF NOT EXISTS `grade` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `grade`;

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE IF NOT EXISTS `info` (
  `roll` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `course` varchar(30) NOT NULL,
  `sem` varchar(5) NOT NULL,
  `c` float NOT NULL,
  `coa` float NOT NULL,
  `dm` float NOT NULL,
  `num` float NOT NULL,
  `acc` float NOT NULL,
  `clab` float NOT NULL,
  `bo` float NOT NULL,
  `totalgrade` float NOT NULL,
  `remarks` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`roll`, `name`, `course`, `sem`, `c`, `coa`, `dm`, `num`, `acc`, `clab`, `bo`, `totalgrade`, `remarks`) VALUES
(0, 'ROMON RONGHANG', 'MCA', '1st s', 7, 8, 8, 6, 7, 8, 8, 7.36842, 'PASSED'),
(0, 'ROMON RONGHANG', 'MCA', '1st s', 7, 8, 8, 6, 7, 8, 8, 7.36842, 'PASSED'),
(205112050, 'saneesh', 'mca', '1st s', 8, 7, 9, 8, 7, 7, 6, 7.52632, 'PASSED'),
(205112077, 'kolariya', 'mca', '1st s', 9, 9, 9, 8, 9, 8, 9, 8.73684, 'PASSED');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
