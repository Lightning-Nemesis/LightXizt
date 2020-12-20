-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2020 at 10:26 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sharks`
--

-- --------------------------------------------------------

--
-- Table structure for table `investors`
--

CREATE TABLE `investors` (
  `NetWorth` int(100) NOT NULL DEFAULT 5000000,
  `Priority` int(10) NOT NULL,
  `Invested` tinyint(1) NOT NULL DEFAULT 0,
  `userid` varchar(20) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `phone` int(10) DEFAULT NULL,
  `user_name` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `signin`
--

CREATE TABLE `signin` (
  `userid` int(5) NOT NULL,
  `user_name` tinytext NOT NULL,
  `email` longtext NOT NULL,
  `password` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signin`
--

INSERT INTO `signin` (`userid`, `user_name`, `email`, `password`) VALUES
(4, 'rahul', 'rahul@gmail.com', '$2y$10$DsgiVwlxfnzkyMa.RSPlaeTeC3gRQ9G8tmz/edwBiNUW7XRATBGju'),
(5, 'prakshal', 'prakshal1999@gmail.com', '$2y$10$/pT10zJZP3Cz/vhxG.WU4u29DqMmn06l7Lf5/v1oosNovBXw4007e'),
(6, 'xizt', 'xizt@gmail.com', '$2y$10$jKj6zB.bzpIF5Egh6giveel8/YY007bB/l8cA.D4JfhlF1JFDxope');

-- --------------------------------------------------------

--
-- Table structure for table `startup`
--

CREATE TABLE `startup` (
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` mediumint(9) NOT NULL,
  `domain` varchar(20) NOT NULL DEFAULT 'FinTech',
  `location` varchar(50) NOT NULL,
  `idea` varchar(200) NOT NULL,
  `amount` int(100) NOT NULL DEFAULT 10000,
  `profit` int(100) NOT NULL DEFAULT 0,
  `startupId` int(5) NOT NULL,
  `cid` date DEFAULT NULL,
  `patent` binary(1) DEFAULT NULL,
  `stake` float(22,2) DEFAULT NULL,
  `startup_name` varchar(20) NOT NULL,
  `website` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `startup`
--

INSERT INTO `startup` (`username`, `email`, `phone`, `domain`, `location`, `idea`, `amount`, `profit`, `startupId`, `cid`, `patent`, `stake`, `startup_name`, `website`) VALUES
('prakshal', 'prakshal1999@gmail.com', 8388607, 'realtime', 'PUNE', 'asdasdqw', 120000, 0, 1, '2020-04-28', NULL, 0.99, 'coolzz', 'https://coolhaihum.com/aboutUs'),
('xizt', 'goodproduct@gmail.com', 8388607, 'Oil', 'Sokratis', 'toofan aa jayega market mein tum dekho toh yaar', 243200, 0, 2, '2020-03-11', NULL, 43.00, 'Toofan', 'http://toofan.goodproduct.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `investors`
--
ALTER TABLE `investors`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `signin`
--
ALTER TABLE `signin`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `user_name` (`user_name`) USING HASH;

--
-- Indexes for table `startup`
--
ALTER TABLE `startup`
  ADD PRIMARY KEY (`startupId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `signin`
--
ALTER TABLE `signin`
  MODIFY `userid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `startup`
--
ALTER TABLE `startup`
  MODIFY `startupId` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
