-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2017 at 01:22 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webtech`
--

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `name` varchar(100) NOT NULL,
  `edutype` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `details` varchar(1000) NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`name`, `edutype`, `location`, `details`, `price`) VALUES
('as', 'sad', 'asd', 'asd', 0);

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `fname` varchar(100) NOT NULL,
  `ftype` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `details` varchar(1000) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`fname`, `ftype`, `location`, `details`, `price`) VALUES
('asdsd', '$	ftype', 'asdasd', 'asdsda', 0);

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `moviename` varchar(100) NOT NULL,
  `movietype` varchar(100) NOT NULL,
  `location` varchar(200) NOT NULL,
  `details` varchar(1000) NOT NULL,
  `ticketprice` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`name`, `email`, `address`, `username`, `password`, `gender`, `dob`) VALUES
('', '', '', '', '', '0', '0000-00-00'),
('', '', '', '', '', '0', '0000-00-00'),
('', '', '', '', '', '0', '0000-00-00'),
('', '', '', '', '', '0', '0000-00-00'),
('', '', '', '', '', '0', '0000-00-00'),
('', '', '', '', '', '0', '0000-00-00'),
('', '', '', '', '', '0', '0000-00-00'),
('', '', '', '', '', '0', '0000-00-00'),
('', '', '', '', '', '0', '0000-00-00'),
('', '', '', '', '', '0', '0000-00-00'),
('', '', '', '', '', '0', '0000-00-00'),
('dfhbndsfb', 'dfbdfb', '', '', '', '0', '0000-00-00'),
('dfhbndsfb', 'dfbdfb', '', '', '', '0', '0000-00-00'),
('dfhbndsfb', 'dfbdfb', '', '', '', '0', '0000-00-00'),
('dfhbndsfb', 'dfbdfb', '', '', '', '0', '0000-00-00'),
('dfhbndsfb', 'dfbdfb', '', '', '', '0', '0000-00-00'),
('dfhbndsfb', 'dfbdfb', '', '', '', '0', '0000-00-00'),
('dfhbndsfb', 'dfbdfb', '', '', '', '0', '0000-00-00'),
('', '', '', '', '', '0', '0000-00-00'),
('', '', '', '', '', '0', '0000-00-00'),
('', '', '', '', '', '0', '0000-00-00'),
('', '', '', '', '', '0', '0000-00-00'),
('', '', '', '', '', '0', '0000-00-00'),
('ppp', 'svdsdv', '', '', '', '0', '0000-00-00'),
('ppp', 'svdsdv', '', '', '', '0', '0000-00-00'),
('ppp', 'svdsdv', '', '', '', '0', '0000-00-00'),
('', '', '', '', '', '0', '0000-00-00'),
('', '', '', '', '', '0', '0000-00-00'),
('', '', '', '', '', '0', '0000-00-00'),
('fth', 'fhf', 'fgh', 'hhf', '', '0', '0000-00-00'),
('jjjanbn', 'fhf', 'fgh', 'hhf', '', '0', '0000-00-00'),
('jjjanbn', 'fhf', 'fgh', 'hhf', '', '0', '0000-00-00'),
('karim', '', '', '', '', '0', '0000-00-00'),
('Salam', '', '', '', '', 'm', '0000-00-00'),
('salma', '', '', '', '', 'f', '0000-00-00'),
('onurag', 'anu78699@gmail.com', 'address', 'onurag', '01932208340', 'm', '1996-06-10'),
('ppp', 'anu78699@gmail.com', '', 'dasd', 'asd', 'm', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `sports`
--

CREATE TABLE `sports` (
  `sname` varchar(100) NOT NULL,
  `stype` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `details` varchar(1000) NOT NULL,
  `ticketprice` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
