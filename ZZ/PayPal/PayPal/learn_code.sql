-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2018 at 12:30 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `learn_code`
--

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE `membership` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `tr_id` varchar(300) NOT NULL,
  `amount` varchar(1000) NOT NULL,
  `state` varchar(300) NOT NULL,
  `tra_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`id`, `username`, `tr_id`, `amount`, `state`, `tra_date`) VALUES
(1, 'krishna', 'PAY-8Y663167FD931820XLN5TAJQ', '10.21', 'approved', '2018/08/20 23:19:12'),
(2, 'stint', 'PAY-1P281683GC606813ALN5TCCI', '10.21', 'approved', '2018/08/20 23:22:53');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(120) NOT NULL,
  `password` varchar(400) NOT NULL,
  `member_since` varchar(100) NOT NULL,
  `membership` int(10) NOT NULL,
  `activate` tinyint(4) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `ccode` int(120) NOT NULL,
  `activation_has` varchar(300) NOT NULL,
  `activation_time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `username`, `email`, `password`, `member_since`, `membership`, `activate`, `mobile`, `ccode`, `activation_has`, `activation_time`) VALUES
(1, 'krishna', 'gajanand.kgn@rediffmail.com', '$2y$10$Mv/nqUAridV4l5QuhYgJN.MNF0kFGXJFLo0/UbBc4mDF5CpMLRABe', '2018/08/07 11:00:05', 0, 0, '+918827213789', 0, '2y107jt6bfDYpw2vTkKLT9CuuOpF4Mejo3kQuJ9Iki7iCbmsfIzmN6q', '2018/08/07 11:00:05'),
(2, 'stint', 'stint@rathor.me', '$2y$10$wHuUS5zMsjTml0C/FD/aeuF8dxZ77gXL5uTkrDPb.EJukPkH/5y6K', '2018/08/20 23:21:45', 1, 0, '+919630590950', 0, '2y10gTQ6VbtptNfBtcF7aeDDOlQhGaUuu1K7QmW1hmIaBJ0kxTsVr5S', '2018/08/20 23:21:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `membership`
--
ALTER TABLE `membership`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `membership`
--
ALTER TABLE `membership`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
