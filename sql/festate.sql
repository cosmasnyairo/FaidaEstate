-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2018 at 01:09 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `festate`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `adminID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phoneNo` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`adminID`, `name`, `position`, `email`, `phoneNo`, `username`, `password`) VALUES
(1, 'Mary Njenga', 'Chairperson', 'mary.njenga@gmail.com', '254722904502', 'mnjenga', 'njenga'),
(2, 'Susan Orina', 'Treasurer', 'susan.orina@gmail.com', '254722904502', 'sorina', 'orina'),
(3, 'Tom Rotich', 'Secretary', 'trotich@gmail.com', '254722394013', 'trotich', 'rotich'),
(4, 'Allan Odindo', 'System Administrator', 'aodindo@gmail.com', '254726229489', 'sysadmin', 'sysmin');

-- --------------------------------------------------------

--
-- Table structure for table `admin_requests`
--

CREATE TABLE `admin_requests` (
  `requestID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_requests`
--

INSERT INTO `admin_requests` (`requestID`, `name`, `email`, `message`) VALUES
(1, 'Allan', 'vikiruallan12@gmail.com', 'Hey'),
(12, 'Mary Njenga', 'mnjenga@gmail.com', 'iAMtiRed');

-- --------------------------------------------------------

--
-- Table structure for table `new_residents`
--

CREATE TABLE `new_residents` (
  `pendingID` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `houseNumber` varchar(10) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phoneNo` varchar(12) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new_residents`
--

INSERT INTO `new_residents` (`pendingID`, `name`, `houseNumber`, `email`, `phoneNo`, `password`) VALUES
(1, 'Tony Kamau', '99', 'tony.kamau@gmail.com', '254789098231', 'kamau');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `paymentID` int(255) NOT NULL,
  `residentID` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `statementID` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`paymentID`, `residentID`, `statementID`, `status`) VALUES
(4, '6', '2', 'Paid'),
(5, '6', '5', 'Paid'),
(6, '7', '5', 'Paid'),
(7, '7', '2', 'Paid'),
(8, '7', '1', 'Paid'),
(9, '6', '6', 'Paid');

-- --------------------------------------------------------

--
-- Table structure for table `resident`
--

CREATE TABLE `resident` (
  `residentID` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `houseNumber` varchar(10) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phoneNo` varchar(12) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resident`
--

INSERT INTO `resident` (`residentID`, `name`, `houseNumber`, `email`, `phoneNo`, `password`) VALUES
(6, 'Allan Vikiru', '101', 'allan.vikiru@hotmail.com', '254731010299', 'vikiru'),
(7, 'Cosmas', '100', 'nyairocosmas@gmail.com', '254799344215', 'kamanda254'),
(8, 'Tina Njeri', '102', 'allan.vikiru48@gmail.com', '254726229489', 'tinanjeri');

-- --------------------------------------------------------

--
-- Table structure for table `statement`
--

CREATE TABLE `statement` (
  `statementID` int(11) NOT NULL,
  `month` varchar(255) NOT NULL,
  `security` varchar(255) DEFAULT NULL,
  `garbage` varchar(255) DEFAULT NULL,
  `infrastructure` varchar(255) DEFAULT NULL,
  `total_kes` varchar(255) DEFAULT NULL,
  `total_usd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `statement`
--

INSERT INTO `statement` (`statementID`, `month`, `security`, `garbage`, `infrastructure`, `total_kes`, `total_usd`) VALUES
(1, '2018-07', '1500', '1000', '2000', '4500', '45'),
(2, '2018-08', '2000', '500', '1000', '3500', '35'),
(4, '2018-09', '3000', '2000', '1000', '6000', '60'),
(5, '2018-06', '1000', '1000', '2000', '4000', '40'),
(6, '2018-10', '1000', '500', '1000', '2500', '25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `admin_requests`
--
ALTER TABLE `admin_requests`
  ADD PRIMARY KEY (`requestID`);

--
-- Indexes for table `new_residents`
--
ALTER TABLE `new_residents`
  ADD PRIMARY KEY (`pendingID`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`paymentID`);

--
-- Indexes for table `resident`
--
ALTER TABLE `resident`
  ADD PRIMARY KEY (`residentID`);

--
-- Indexes for table `statement`
--
ALTER TABLE `statement`
  ADD PRIMARY KEY (`statementID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `adminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `admin_requests`
--
ALTER TABLE `admin_requests`
  MODIFY `requestID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `new_residents`
--
ALTER TABLE `new_residents`
  MODIFY `pendingID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `paymentID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `resident`
--
ALTER TABLE `resident`
  MODIFY `residentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `statement`
--
ALTER TABLE `statement`
  MODIFY `statementID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
