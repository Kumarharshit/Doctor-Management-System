-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 20, 2018 at 05:16 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `doc`
--
CREATE DATABASE IF NOT EXISTS `doc` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `doc`;

-- --------------------------------------------------------

--
-- Table structure for table `add_doc`
--

CREATE TABLE IF NOT EXISTS `add_doc` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `desig` varchar(500) NOT NULL,
  `dept` varchar(500) NOT NULL,
  `gen` varchar(10) NOT NULL,
  `mob` varchar(15) NOT NULL,
  `dob` varchar(14) NOT NULL,
  `addr` varchar(500) NOT NULL,
  `ppic` text NOT NULL,
  `edu` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `add_doc`
--

INSERT INTO `add_doc` (`id`, `fname`, `lname`, `email`, `password`, `desig`, `dept`, `gen`, `mob`, `dob`, `addr`, `ppic`, `edu`) VALUES
(1, 'Harshit', 'Kumar', 'abcd@gmail.com', '123456', 'patna', 'Category 1', 'Category 1', '123456789', '05 July 2018', 'patna', '../uploads/P07-07-2018-1.png', 'abcd');

-- --------------------------------------------------------

--
-- Table structure for table `add_patient`
--

CREATE TABLE IF NOT EXISTS `add_patient` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `fname` varchar(250) NOT NULL,
  `lname` varchar(250) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `gen` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `mob` varchar(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `addr` varchar(500) NOT NULL,
  `bg` varchar(50) NOT NULL,
  `injury` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `add_patient`
--

INSERT INTO `add_patient` (`id`, `fname`, `lname`, `dob`, `gen`, `age`, `mob`, `email`, `addr`, `bg`, `injury`) VALUES
(1, 'Harshit', 'Kumar', '11-11-11', 'Male', '20', '123456', 'abcd@gmail.com', 'patna', 'o', 'dsfjghsdjk');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('Harshit', '123456'),
('Rahul', '123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
