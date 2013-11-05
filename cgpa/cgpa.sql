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
-- Database: `cgpa`
--
CREATE DATABASE IF NOT EXISTS `cgpa` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cgpa`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `mca1`
--

CREATE TABLE IF NOT EXISTS `mca1` (
  `roll` int(10) NOT NULL,
  `name` varchar(15) NOT NULL,
  `course` varchar(15) NOT NULL,
  `sem` varchar(5) NOT NULL,
  `cprm` varchar(2) NOT NULL,
  `coa` varchar(2) NOT NULL,
  `diss` varchar(2) NOT NULL,
  `account` varchar(2) NOT NULL,
  `num` varchar(2) NOT NULL,
  `clab` varchar(2) NOT NULL,
  `bo` varchar(2) NOT NULL,
  `totalgrade` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mca1`
--

INSERT INTO `mca1` (`roll`, `name`, `course`, `sem`, `cprm`, `coa`, `diss`, `account`, `num`, `clab`, `bo`, `totalgrade`) VALUES
(0, 'Array', 'Array', 'Array', 'Ar', 'Ar', 'Ar', 'Ar', 'Ar', 'Ar', 'Ar', 0),
(0, 'Array', 'Array', 'Array', 'Ar', 'Ar', 'Ar', 'Ar', 'Ar', 'Ar', 'Ar', 0),
(0, 'Array', 'Array', 'Array', 'Ar', 'Ar', 'Ar', 'Ar', 'Ar', 'Ar', 'Ar', 0),
(0, 'Array', 'Array', 'Array', 'Ar', 'Ar', 'Ar', 'Ar', 'Ar', 'Ar', 'Ar', 0),
(0, 'Array', 'Array', 'Array', 'Ar', 'Ar', 'Ar', 'Ar', 'Ar', 'Ar', 'Ar', 0),
(0, 'Array', 'Array', 'Array', 'Ar', 'Ar', 'Ar', 'Ar', 'Ar', 'Ar', 'Ar', 0);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `roll` int(10) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`username`, `password`, `roll`, `email`) VALUES
('romon', 'romon', 61, 'email'),
('romon', 'romon', 61, 'email'),
('sikku', 'sikku', 55, 'email'),
('hihi', 'hihih', 0, 'email'),
('romon', 'romon', 61, 'email'),
('romon', 'romon', 61, 'email'),
('amit', 'amit', 86, 'email'),
('amit', 'amit', 86, 'email');

-- --------------------------------------------------------

--
-- Table structure for table `student_record`
--

CREATE TABLE IF NOT EXISTS `student_record` (
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `dept` varchar(20) NOT NULL,
  `course` varchar(10) NOT NULL,
  `roll` int(10) NOT NULL,
  `batch` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_record`
--

INSERT INTO `student_record` (`fname`, `lname`, `gender`, `email`, `address`, `dob`, `dept`, `course`, `roll`, `batch`) VALUES
('romon', 'ronghang', 'male', 'romonronghang19@gmail.com', 'Aquamarine A', '0000-00-00', 'Computer Application', 'MCA', 205112061, 2015),
('mohammad', 'rizwan', 'male', 'rz@gmail.com', 'Amber', '0000-00-00', 'Computer Application', 'MCA', 205112054, 2015),
('arun', 'kumar', 'male', 'arun@gmail.com', 'Rajasthan', '0000-00-00', 'Computer Application', 'MCA', 205112013, 2015),
('romon', 'ronghang', 'male', 'romonronghang19@gmail.com', 'Assam', '0000-00-00', 'Computer Application', 'MCA', 205112061, 2015),
('romon', 'ronghang', 'male', 'romonronghang19@gmail.com', 'Assam', '0000-00-00', 'Computer Application', 'MCA', 205112061, 2015),
('romon', 'ronghang', 'male', 'romonronghang19@gmail.com', 'Assam', '0000-00-00', 'Computer Application', 'MCA', 205112061, 2015);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
