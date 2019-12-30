-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2018 at 02:34 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hyndex`
--

-- --------------------------------------------------------

--
-- Table structure for table `acc`
--

CREATE TABLE `acc` (
  `id` int(5) NOT NULL,
  `email` text NOT NULL,
  `pass` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acc`
--

INSERT INTO `acc` (`id`, `email`, `pass`, `message`) VALUES
(6, 'suckmydick@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', ''),
(9, 'fucker@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', ''),
(10, 'fucker@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '');

-- --------------------------------------------------------

--
-- Table structure for table `acc2`
--

CREATE TABLE `acc2` (
  `id` int(3) NOT NULL,
  `email` text NOT NULL,
  `pass` text NOT NULL,
  `messages` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acc2`
--

INSERT INTO `acc2` (`id`, `email`, `pass`, `messages`) VALUES
(1, 'fucker@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `chatid` int(5) NOT NULL,
  `email` text NOT NULL,
  `message` text NOT NULL,
  `Date` datetime NOT NULL,
  `cname` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`chatid`, `email`, `message`, `Date`, `cname`, `img`) VALUES
(96, 'suckmydick@gmail.com', 'ASFAS', '2018-02-12 16:15:13', '', ''),
(97, 'suckmydick@gmail.com', 'cvnn', '2018-02-12 19:16:01', '', ''),
(98, 'fucker@gmail.com', 'dtns', '2018-02-12 20:08:07', '', ''),
(99, 'suckmydick@gmail.com', 'dgndfnfs', '2018-02-12 20:08:28', '', ''),
(100, 'fucker@gmail.com', 'nsfn', '2018-02-12 20:08:34', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `stockinfo`
--

CREATE TABLE `stockinfo` (
  `cname` text NOT NULL,
  `sym` text NOT NULL,
  `Company Name` text NOT NULL,
  `Date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(50) NOT NULL,
  `cname` text NOT NULL,
  `ex` text NOT NULL,
  `sym` text NOT NULL,
  `cdate` int(50) NOT NULL,
  `img` varchar(50) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `cname`, `ex`, `sym`, `cdate`, `img`, `active`) VALUES
(19, 'TCS', 'NSE', 'TCS', 0, 'assets/images/download.jpg', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acc`
--
ALTER TABLE `acc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `acc2`
--
ALTER TABLE `acc2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`chatid`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acc`
--
ALTER TABLE `acc`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `acc2`
--
ALTER TABLE `acc2`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `chatid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
