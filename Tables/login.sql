-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2016 at 07:56 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `sellerid` int(11) NOT NULL,
  `firstname` varchar(256) CHARACTER SET utf8 NOT NULL,
  `lastname` varchar(256) CHARACTER SET utf8 NOT NULL,
  `sellername` varchar(256) CHARACTER SET utf8 NOT NULL,
  `password` varchar(256) CHARACTER SET utf8 NOT NULL,
  `secretquestion` varchar(256) CHARACTER SET utf8 NOT NULL,
  `secretanswer` varchar(256) CHARACTER SET utf8 NOT NULL,
  `company` varchar(256) CHARACTER SET utf8 NOT NULL,
  `address` varchar(256) CHARACTER SET utf8 NOT NULL,
  `city` varchar(256) CHARACTER SET utf8 NOT NULL,
  `state` varchar(256) CHARACTER SET utf8 NOT NULL,
  `zip` varchar(256) CHARACTER SET utf8 NOT NULL,
  `phone` varchar(10) CHARACTER SET utf8 NOT NULL,
  `email` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`sellerid`, `firstname`, `lastname`, `sellername`, `password`, `secretquestion`, `secretanswer`, `company`, `address`, `city`, `state`, `zip`, `phone`, `email`) VALUES
(7, 'Niteeshkuma', 'Akurati', 'Niteeshkumar Akurati', 'hi', 'What is Your Favourite Colour?', 'dsvckjdfj', '', 'Spp Road, 17/1/6', 'Gunturr', 'Andhra Pradesh', '52124', '9177120489', 'niteeshk8@gmail.com'),
(8, 'Deepikaaa', 'Bajpai', 'DeepikaBajpai', 'hi', 'What is your Mothers Maiden Name?', 'sneh', 'DEEP', '7921 Camino Glorita', 'San Diego', 'California', '47409', '8123498733', 'dbajpai@iu.edu');

-- --------------------------------------------------------

--
-- Table structure for table `members1`
--

CREATE TABLE `members1` (
  `userid` int(11) NOT NULL,
  `firstname` varchar(256) NOT NULL,
  `lastname` varchar(256) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `secretquestion` varchar(256) NOT NULL,
  `secretanswer` varchar(256) NOT NULL,
  `address` varchar(256) NOT NULL,
  `city` varchar(256) NOT NULL,
  `state` varchar(256) NOT NULL,
  `zip` varchar(256) NOT NULL,
  `phone` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members1`
--

INSERT INTO `members1` (`userid`, `firstname`, `lastname`, `username`, `password`, `secretquestion`, `secretanswer`, `address`, `city`, `state`, `zip`, `phone`, `email`) VALUES
(14, 'Deepikaa', 'Bajpai', 'dbajpai', 'hii', 'What is your Mothers Maiden Name?', 'sneh', '7921 Camino Glorita', 'San Diego', 'California', '47409', '8123498733', 'dbajpai@iu.edu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`sellerid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `members1`
--
ALTER TABLE `members1`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `sellerid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `members1`
--
ALTER TABLE `members1`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
