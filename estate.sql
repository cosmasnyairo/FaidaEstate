-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2018 at 05:04 PM
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
-- Database: `estate`
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
-- Table structure for table `chat_message`
--

CREATE TABLE `chat_message` (
  `chat_message_id` int(11) NOT NULL,
  `to_user_id` int(11) NOT NULL,
  `from_user_id` int(11) NOT NULL,
  `chat_message` mediumtext COLLATE utf8mb4_bin NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `chat_message`
--

INSERT INTO `chat_message` (`chat_message_id`, `to_user_id`, `from_user_id`, `chat_message`, `timestamp`, `status`) VALUES
(1, 2, 1, 'Hi\n', '2018-09-27 07:46:22', 0),
(2, 2, 1, 'ho\n', '2018-09-27 07:46:35', 0),
(3, 2, 1, 'Hello\n', '2018-09-27 07:47:03', 0),
(4, 1, 3, 'hey\n', '2018-09-27 07:47:45', 0),
(5, 2, 3, 'Hello', '2018-09-27 07:47:56', 0),
(6, 3, 1, 'Hey\n', '2018-09-27 07:48:09', 0),
(7, 2, 1, 'Hi', '2018-09-27 07:48:42', 0),
(8, 2, 1, 'Wasgood', '2018-09-27 07:48:56', 0),
(9, 1, 2, 'Good day', '2018-09-27 07:49:23', 0),
(10, 2, 1, 'Hi\n', '2018-09-27 07:51:40', 0),
(11, 1, 2, 'Sema', '2018-09-27 07:51:47', 0),
(12, 2, 1, 'Hey\n', '2018-09-27 07:57:39', 0),
(13, 3, 1, 'Hi\n', '2018-09-27 07:59:27', 0),
(14, 2, 1, 'Hi\n', '2018-09-27 08:01:25', 0),
(15, 2, 1, 'Oya\n', '2018-09-27 08:16:10', 0),
(16, 1, 2, 'oya', '2018-09-27 08:17:57', 0),
(17, 2, 1, 'Ebo', '2018-09-27 08:18:07', 0),
(18, 2, 1, '', '2018-09-27 08:23:16', 0),
(19, 1, 2, 'Hey\n', '2018-09-27 08:26:15', 0),
(20, 2, 1, 'Oya', '2018-09-27 08:28:47', 0),
(21, 3, 1, 'Hey', '2018-09-27 08:54:36', 0),
(22, 3, 1, 'Ja', '2018-09-27 08:54:40', 0),
(23, 3, 1, 'Bless', '2018-09-27 08:54:44', 0),
(24, 3, 2, 'Hi', '2018-09-27 09:01:25', 0),
(25, 1, 2, 'Hoe Hoe Hoe', '2018-09-27 09:01:58', 0),
(26, 1, 3, 'Hey', '2018-09-27 09:05:11', 0),
(27, 1, 3, 'I am using the mobile version', '2018-09-27 09:05:30', 0),
(28, 2, 3, '', '2018-09-27 09:06:15', 0),
(29, 3, 1, 'nd,;dkjal\n', '2018-09-27 16:23:37', 0),
(30, 1, 3, 'f', '2018-09-27 16:24:45', 0),
(31, 3, 1, 'hdj\\\n', '2018-09-27 16:26:33', 0),
(32, 1, 3, 'n', '2018-09-27 16:29:55', 0),
(33, 1, 3, '', '2018-09-27 16:30:47', 0),
(34, 1, 3, 'dndk', '2018-09-27 16:33:55', 0),
(35, 1, 3, '😊😊😊', '2018-09-27 16:49:47', 0),
(36, 1, 3, '', '2018-09-27 16:52:44', 0),
(37, 1, 3, '😜', '2018-09-27 16:52:51', 0),
(38, 3, 1, 'djdbbhd💗', '2018-09-27 16:55:03', 0),
(39, 0, 2, 'hi', '2018-09-27 17:35:03', 1),
(40, 0, 3, 'n', '2018-09-27 17:35:14', 1),
(41, 0, 2, 'hey', '2018-09-27 17:35:21', 1),
(42, 0, 3, 'hey', '2018-09-27 18:08:49', 1),
(43, 0, 3, 'd', '2018-09-27 18:10:15', 1),
(44, 0, 3, 'h', '2018-09-27 18:20:34', 1),
(45, 0, 3, 'New Meeting', '2018-09-27 18:20:59', 1),
(46, 1, 3, 'hEY', '2018-09-27 18:52:34', 0),
(47, 0, 2, '<p><img src=\"../uploads/vo.jpg\" class=\"img-thumbnail\" width=\"200\" height=\"160\"></p><br>', '2018-09-27 19:09:29', 1),
(48, 0, 2, '<p><img src=\"../uploads/My Post (1).jpg\" class=\"img-thumbnail\" width=\"200\" height=\"160\"></p><br>', '2018-09-27 19:09:57', 1),
(49, 0, 2, '<p><img src=\"../uploads/634464769.jpg\" class=\"img-thumbnail\" width=\"200\" height=\"160\"></p><p>hELO</p><br>', '2018-09-27 19:10:47', 1),
(50, 1, 2, 'wueeh😎', '2018-09-27 19:59:25', 0),
(51, 2, 1, 'hey😁', '2018-09-27 19:59:44', 0),
(52, 0, 2, '<p><img src=\"../uploads/Screenshot_20180927-223818.png\" class=\"img-thumbnail\" width=\"200\" height=\"160\"></p><br>', '2018-09-27 20:00:37', 1),
(53, 0, 3, '<p><img src=\"../uploads/cos.png\" class=\"img-thumbnail\" width=\"200\" height=\"160\"></p><br>', '2018-09-27 20:05:13', 1),
(54, 0, 3, '<p><img src=\"../uploads/a.txt\" class=\"img-thumbnail\" width=\"200\" height=\"160\"></p><br>', '2018-09-27 20:05:38', 1),
(55, 1, 3, '💗', '2018-09-27 20:44:59', 0),
(56, 1, 2, 'Hello🍃', '2018-09-27 20:48:28', 0),
(57, 0, 2, 'Hey🍃', '2018-09-27 20:48:54', 1),
(58, 2, 1, 'Hi there😎', '2018-09-28 07:31:02', 0),
(59, 1, 2, 'U good?😀😊', '2018-09-28 07:31:35', 0),
(60, 0, 1, '<p><img src=\"../uploads/walll.jpg\" class=\"img-thumbnail\" width=\"200\" height=\"160\"></p><p>Image</p><br>', '2018-09-28 07:32:59', 1),
(61, 1, 3, 'Hey 😜', '2018-09-28 07:48:21', 0),
(62, 0, 3, 'Hey<div><br></div>', '2018-09-28 07:49:42', 1),
(63, 0, 3, '\n\n   ', '2018-09-28 07:50:52', 1),
(64, 0, 1, '<p><img src=\"../uploads/walll.jpg\" class=\"img-thumbnail\" width=\"200\" height=\"160\"></p><br>', '2018-09-28 09:34:54', 1),
(65, 2, 1, '😂😂😂', '2018-09-28 09:41:22', 0),
(66, 1, 3, '🤑', '2018-10-01 08:41:25', 0),
(67, 5, 4, 'Waaaaaasssssuuppp', '2018-10-01 08:53:14', 0),
(68, 4, 3, 'Hey😂', '2018-10-01 08:53:29', 0),
(69, 1, 4, 'Cosmaaasss', '2018-10-01 08:53:36', 0),
(70, 3, 4, 'Waaaaassssuuuppppp', '2018-10-01 08:54:04', 1),
(71, 3, 4, 'Waaaaassssuuuppppp', '2018-10-01 08:54:07', 1),
(72, 0, 4, 'Ti', '2018-10-01 08:55:35', 1),
(73, 0, 4, 'Ti', '2018-10-01 08:55:37', 1),
(74, 0, 6, '\n\n   ', '2018-10-01 08:56:22', 1),
(75, 0, 1, '<p><img src=\"../uploads/wall.jpg\" class=\"img-thumbnail\" width=\"200\" height=\"160\"></p><br>', '2018-10-01 08:56:36', 1),
(76, 0, 4, '<p><img src=\"../uploads/3E196C62-060C-4D35-A5B6-02B473DDC3B5.png\" class=\"img-thumbnail\" width=\"200\" height=\"160\"></p><br>', '2018-10-01 08:57:01', 1),
(77, 4, 5, 'Helloo', '2018-10-01 08:57:29', 1),
(78, 0, 6, '<p><img src=\"../uploads/image.jpg\" class=\"img-thumbnail\" width=\"200\" height=\"160\"></p><br>', '2018-10-01 08:58:08', 1),
(79, 4, 1, '😎', '2018-10-01 09:03:33', 1),
(80, 0, 5, '\n\n   ', '2018-10-01 09:03:36', 1),
(81, 0, 5, 'Upload video<br>', '2018-10-01 09:04:13', 1),
(82, 0, 5, '<p><img src=\"../uploads/3a9cb26943eee4a60da5510f46e43085.jpg\" class=\"img-thumbnail\" width=\"200\" height=\"160\">Pic</p><br>', '2018-10-01 09:05:13', 1),
(83, 0, 5, '<p><img src=\"../uploads/3a9cb26943eee4a60da5510f46e43085.jpg\" class=\"img-thumbnail\" width=\"200\" height=\"160\">Pic</p><br>', '2018-10-01 09:05:13', 1),
(84, 0, 5, '<p><img src=\"../uploads/3a9cb26943eee4a60da5510f46e43085.jpg\" class=\"img-thumbnail\" width=\"200\" height=\"160\">Pic</p><br>', '2018-10-01 09:05:13', 1),
(85, 0, 5, '<p><img src=\"../uploads/3a9cb26943eee4a60da5510f46e43085.jpg\" class=\"img-thumbnail\" width=\"200\" height=\"160\">Pic</p><br>', '2018-10-01 09:05:13', 1),
(86, 0, 5, '<p><img src=\"../uploads/3a9cb26943eee4a60da5510f46e43085.jpg\" class=\"img-thumbnail\" width=\"200\" height=\"160\">Pic</p><br>', '2018-10-01 09:05:13', 1),
(87, 0, 5, '<p><img src=\"../uploads/3a9cb26943eee4a60da5510f46e43085.jpg\" class=\"img-thumbnail\" width=\"200\" height=\"160\">Pic</p><br>', '2018-10-01 09:05:13', 1),
(88, 0, 5, '<p><img src=\"../uploads/3a9cb26943eee4a60da5510f46e43085.jpg\" class=\"img-thumbnail\" width=\"200\" height=\"160\">Pic</p><br>', '2018-10-01 09:05:13', 1),
(89, 0, 5, '<p><img src=\"../uploads/3a9cb26943eee4a60da5510f46e43085.jpg\" class=\"img-thumbnail\" width=\"200\" height=\"160\">Pic</p><br>', '2018-10-01 09:05:13', 1),
(90, 0, 5, '<p><img src=\"../uploads/3a9cb26943eee4a60da5510f46e43085.jpg\" class=\"img-thumbnail\" width=\"200\" height=\"160\">Pic</p><br>', '2018-10-01 09:05:13', 1),
(91, 0, 5, '<p><img src=\"../uploads/3a9cb26943eee4a60da5510f46e43085.jpg\" class=\"img-thumbnail\" width=\"200\" height=\"160\">Pic</p><br>', '2018-10-01 09:05:13', 1),
(92, 0, 5, '<p><img src=\"../uploads/3a9cb26943eee4a60da5510f46e43085.jpg\" class=\"img-thumbnail\" width=\"200\" height=\"160\">Pic</p><br>', '2018-10-01 09:05:14', 1),
(93, 0, 5, '<p><img src=\"../uploads/3a9cb26943eee4a60da5510f46e43085.jpg\" class=\"img-thumbnail\" width=\"200\" height=\"160\">Pic</p><br>', '2018-10-01 09:05:14', 1),
(94, 0, 5, '<p><img src=\"../uploads/3a9cb26943eee4a60da5510f46e43085.jpg\" class=\"img-thumbnail\" width=\"200\" height=\"160\">Pic</p><br>', '2018-10-01 09:05:18', 1),
(95, 0, 5, '<p><img src=\"../uploads/3a9cb26943eee4a60da5510f46e43085.jpg\" class=\"img-thumbnail\" width=\"200\" height=\"160\">Pic</p><br>', '2018-10-01 09:05:27', 1),
(96, 0, 5, '<p><img src=\"../uploads/3a9cb26943eee4a60da5510f46e43085.jpg\" class=\"img-thumbnail\" width=\"200\" height=\"160\">Pic</p><br>', '2018-10-01 09:05:28', 1),
(97, 0, 5, '<p><img src=\"../uploads/3a9cb26943eee4a60da5510f46e43085.jpg\" class=\"img-thumbnail\" width=\"200\" height=\"160\">Pic</p><br>', '2018-10-01 09:05:28', 1),
(98, 0, 5, '<p><img src=\"../uploads/3a9cb26943eee4a60da5510f46e43085.jpg\" class=\"img-thumbnail\" width=\"200\" height=\"160\">Pic</p><br>', '2018-10-01 09:05:28', 1),
(99, 0, 5, '<p><img src=\"../uploads/3a9cb26943eee4a60da5510f46e43085.jpg\" class=\"img-thumbnail\" width=\"200\" height=\"160\">Pic</p><br>', '2018-10-01 09:05:30', 1),
(100, 0, 5, '<p><img src=\"../uploads/3a9cb26943eee4a60da5510f46e43085.jpg\" class=\"img-thumbnail\" width=\"200\" height=\"160\">Pic</p><br>', '2018-10-01 09:05:30', 1),
(101, 0, 5, '<p><img src=\"../uploads/3a9cb26943eee4a60da5510f46e43085.jpg\" class=\"img-thumbnail\" width=\"200\" height=\"160\">Pic</p><br>', '2018-10-01 09:05:30', 1),
(102, 0, 5, '<p><img src=\"../uploads/3a9cb26943eee4a60da5510f46e43085.jpg\" class=\"img-thumbnail\" width=\"200\" height=\"160\">Pic</p><br>', '2018-10-01 09:06:40', 1),
(103, 2, 3, 'Hi there', '2018-10-02 11:17:52', 0),
(104, 3, 2, 'I am fine😁', '2018-10-02 11:18:26', 0),
(105, 0, 3, 'hi&nbsp;<div><br></div>', '2018-10-02 11:18:45', 1),
(106, 7, 2, 'heyyyy\n\n', '2018-10-08 09:31:44', 0),
(107, 2, 7, '😚😚😚😚😚😚😚', '2018-10-08 09:31:52', 0),
(108, 7, 2, '😍', '2018-10-08 09:32:01', 0),
(109, 7, 2, '📤', '2018-10-08 09:32:17', 0),
(110, 0, 7, '<p><img src=\"../uploads/587d69906542301bbd3ce2ecbd0b1643--music-jokes-music-humor.jpg\" class=\"img-thumbnail\" width=\"200\" height=\"160\"></p><br>', '2018-10-08 09:34:25', 1),
(111, 7, 1, 'hI😃', '2018-10-08 09:59:59', 0),
(112, 1, 7, 'hello\n\n', '2018-10-08 10:00:10', 0),
(113, 1, 8, 'Hi😁', '2018-10-22 09:00:45', 0),
(114, 2, 1, 'Hi📤', '2018-10-25 05:02:17', 1);

-- --------------------------------------------------------

--
-- Table structure for table `estate_forum`
--

CREATE TABLE `estate_forum` (
  `chat_message_id` int(11) NOT NULL,
  `to_user_id` int(11) NOT NULL,
  `from_user_id` int(11) NOT NULL,
  `Sender` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `chat_message` mediumtext COLLATE utf8mb4_bin NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `estate_forum`
--

INSERT INTO `estate_forum` (`chat_message_id`, `to_user_id`, `from_user_id`, `Sender`, `chat_message`, `timestamp`, `status`) VALUES
(1, 0, 2, 'kulthum', 'Hi<div><br></div>', '2018-10-20 17:12:14', 1),
(2, 0, 2, 'kulthum', 'I am Groot', '2018-10-20 17:12:21', 1),
(3, 0, 1, 'cosmas', 'Hey there', '2018-10-20 17:12:46', 1),
(4, 0, 1, 'cosmas', 'Hi There People<div><br></div>', '2018-10-21 20:44:33', 1),
(5, 0, 1, 'cosmas', 'Today I try new Things', '2018-10-21 20:44:43', 1),
(6, 0, 1, 'cosmas', 'Hi guys', '2018-10-25 05:02:37', 1);

-- --------------------------------------------------------

--
-- Table structure for table `general_announcement`
--

CREATE TABLE `general_announcement` (
  `id` int(11) NOT NULL,
  `message_title` varchar(255) NOT NULL,
  `message_body` mediumtext NOT NULL,
  `sender` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `general_announcement`
--

INSERT INTO `general_announcement` (`id`, `message_title`, `message_body`, `sender`, `date`) VALUES
(1, 'Christmas', 'Enjoy your Festivities and keep the less fortunate in your mind', 'allan', '2018-10-14 12:03:01'),
(2, 'Wedding', 'I am inviting you all to my wedding on the 1st of December. Please come through.\n\n', 'kulthum', '2018-10-15 05:54:12'),
(5, 'Meeting', 'There will be a meeting on the 23rd of this month.', 'kulthum', '2018-10-15 09:18:27'),
(6, 'bhjs', 'bkhj cd', 'cosmas', '2018-10-15 09:26:49'),
(7, 'Hi ', 'HI son', 'cosmas', '2018-10-15 09:38:16'),
(8, 'Testing', 'JUH FS', 'cosmas', '2018-10-25 05:08:30'),
(9, 'Meeting at noon', 'Please Attend', 'cosmas', '2018-10-25 05:08:52'),
(10, 'Gummy Bear', 'They call me gummy bear', 'cosmas', '2018-10-25 05:18:48');

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
  `user_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `statementID` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`paymentID`, `user_id`, `statementID`, `status`) VALUES
(4, '6', '2', 'Paid'),
(5, '6', '5', 'Paid'),
(6, '7', '5', 'Paid'),
(7, '7', '2', 'Paid'),
(8, '7', '1', 'Paid'),
(9, '6', '6', 'Paid'),
(10, '1', '5', 'Paid');

-- --------------------------------------------------------

--
-- Table structure for table `resident`
--

CREATE TABLE `resident` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `houseNumber` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phoneNo` varchar(12) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resident`
--

INSERT INTO `resident` (`user_id`, `username`, `houseNumber`, `email`, `phoneNo`, `pass`) VALUES
(1, 'cosmas', '1A', 'nyairocosmas@gmail.com', '254799344215', 'kamanda'),
(2, 'kulthum', '2A', 'kulthummamo@gmail.com', '254731018041', 'mamo'),
(3, 'tiffany', '4A', 'tiffanytirop@gmail.com', '254793201234', 'stephanie'),
(4, 'ian', '5A', 'ianodundo@gmail.com', '254912345455', 'Odundo'),
(5, 'magak', '6A', 'nicholusmagak@gmail.com', '254934586431', '1234'),
(6, 'allan', '7A', 'allanvikiru@gmail.com', '254731010299', 'vikiru'),
(7, 'miriam', '8A', 'miriam@gmail.com', '254122329843', 'mizzy'),
(8, '', '9A', 'snyaga@gmail.com', '254678234596', '');

-- --------------------------------------------------------

--
-- Table structure for table `resident_details`
--

CREATE TABLE `resident_details` (
  `login_details_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `last_activity` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_type` enum('no','yes') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resident_details`
--

INSERT INTO `resident_details` (`login_details_id`, `user_id`, `last_activity`, `is_type`) VALUES
(1, 1, '2018-09-26 19:56:41', 'no'),
(2, 3, '2018-09-26 19:56:58', 'no'),
(3, 2, '2018-09-26 19:57:05', 'no'),
(4, 1, '2018-09-26 19:57:28', 'no'),
(5, 1, '2018-09-26 20:21:36', 'no'),
(6, 3, '2018-09-26 20:24:28', 'no'),
(7, 2, '2018-09-26 20:24:32', 'no'),
(8, 1, '2018-09-27 07:47:27', 'no'),
(9, 3, '2018-09-27 07:47:54', 'no'),
(10, 1, '2018-09-27 07:48:59', 'no'),
(11, 2, '2018-09-27 07:51:54', 'no'),
(12, 1, '2018-09-27 07:51:54', 'no'),
(13, 1, '2018-09-27 09:10:34', 'no'),
(14, 2, '2018-09-27 16:07:54', 'no'),
(15, 3, '2018-09-27 09:06:15', 'no'),
(16, 2, '2018-09-27 09:06:40', 'no'),
(17, 1, '2018-09-27 16:22:16', 'no'),
(18, 3, '2018-09-27 17:11:35', 'no'),
(19, 1, '2018-09-27 17:10:28', 'no'),
(20, 3, '2018-09-27 19:58:23', 'no'),
(21, 2, '2018-09-27 20:36:06', 'no'),
(22, 1, '2018-09-27 20:01:37', 'no'),
(23, 2, '2018-09-27 20:01:00', 'no'),
(24, 1, '2018-09-27 20:02:06', 'no'),
(25, 3, '2018-09-27 20:22:28', 'no'),
(26, 1, '2018-09-27 20:58:45', 'no'),
(27, 3, '2018-09-27 21:18:10', 'no'),
(28, 2, '2018-09-27 21:18:34', 'no'),
(29, 3, '2018-09-27 20:59:11', 'no'),
(30, 1, '2018-09-27 21:12:42', 'no'),
(31, 1, '2018-09-28 05:18:01', 'no'),
(32, 3, '2018-09-28 05:17:25', 'no'),
(33, 3, '2018-09-28 05:17:44', 'no'),
(34, 1, '2018-09-28 07:44:27', 'no'),
(35, 2, '2018-09-28 07:33:17', 'no'),
(36, 1, '2018-09-28 07:47:09', 'no'),
(37, 3, '2018-09-28 07:51:29', 'no'),
(38, 1, '2018-09-28 07:51:44', 'no'),
(39, 1, '2018-09-28 09:42:32', 'no'),
(40, 3, '2018-09-28 09:42:39', 'no'),
(41, 3, '2018-10-01 08:53:56', 'no'),
(42, 1, '2018-10-01 08:40:02', 'no'),
(43, 1, '2018-10-01 08:40:23', 'no'),
(44, 1, '2018-10-01 10:26:02', 'no'),
(45, 4, '2018-10-01 08:58:35', 'no'),
(46, 6, '2018-10-01 09:00:58', 'no'),
(47, 1, '2018-10-01 09:07:32', 'no'),
(48, 5, '2018-10-01 09:08:13', 'no'),
(49, 2, '2018-10-02 11:19:23', 'no'),
(50, 3, '2018-10-02 11:20:23', 'no'),
(51, 1, '2018-10-02 11:25:22', 'no'),
(52, 2, '2018-10-08 09:31:21', 'no'),
(53, 2, '2018-10-08 09:34:39', 'no'),
(54, 7, '2018-10-08 09:51:43', 'no'),
(55, 1, '2018-10-08 09:51:56', 'no'),
(56, 2, '2018-10-08 09:58:56', 'no'),
(57, 7, '2018-10-08 09:56:15', 'no'),
(58, 7, '2018-10-08 09:56:37', 'no'),
(59, 7, '2018-10-08 09:56:44', 'no'),
(60, 7, '2018-10-08 09:58:51', 'no'),
(61, 1, '2018-10-08 10:08:08', 'no'),
(62, 7, '2018-10-08 10:13:08', 'no'),
(63, 1, '2018-10-14 09:06:45', 'no'),
(64, 1, '2018-10-14 09:10:40', 'no'),
(65, 7, '2018-10-14 12:11:26', 'no'),
(66, 2, '2018-10-15 05:53:16', 'no'),
(67, 1, '2018-10-15 08:57:00', 'no'),
(68, 2, '2018-10-15 09:23:00', 'no'),
(69, 1, '2018-10-15 09:19:19', 'no'),
(70, 2, '2018-10-15 09:23:20', 'no'),
(71, 7, '2018-10-15 09:25:15', 'no'),
(72, 1, '2018-10-15 09:24:02', 'no'),
(73, 1, '2018-10-15 09:26:42', 'no'),
(74, 7, '2018-10-15 09:29:58', 'no'),
(75, 2, '2018-10-15 09:30:31', 'no'),
(76, 1, '2018-10-15 09:30:46', 'no'),
(77, 2, '2018-10-15 09:31:43', 'no'),
(78, 1, '2018-10-15 09:38:04', 'no'),
(79, 2, '2018-10-15 14:42:12', 'no'),
(80, 1, '2018-10-20 13:34:18', 'no'),
(81, 2, '2018-10-20 17:12:31', 'no'),
(82, 1, '2018-10-20 17:50:35', 'no'),
(83, 1, '2018-10-21 21:26:50', 'no'),
(84, 1, '2018-10-22 09:25:49', 'no'),
(85, 8, '2018-10-22 09:20:44', 'no'),
(86, 1, '2018-10-22 13:38:35', 'no'),
(87, 2, '2018-10-22 13:38:42', 'no'),
(88, 1, '2018-10-24 21:14:58', 'no'),
(89, 2, '2018-10-24 21:31:45', 'no'),
(90, 1, '2018-10-24 21:19:31', 'no'),
(91, 1, '2018-10-24 21:24:27', 'no'),
(92, 2, '2018-10-24 21:34:01', 'no'),
(93, 2, '2018-10-24 21:35:35', 'no'),
(94, 1, '2018-10-25 05:05:13', 'no'),
(95, 2, '2018-10-25 05:04:16', 'no'),
(96, 2, '2018-10-25 05:20:39', 'no'),
(97, 1, '2018-10-25 09:03:56', 'no'),
(98, 1, '2018-10-25 09:14:22', 'no'),
(99, 2, '2018-10-26 07:22:39', 'no'),
(100, 1, '2018-10-26 07:29:43', 'no'),
(101, 2, '2018-10-26 07:34:00', 'no'),
(102, 1, '2018-10-26 10:19:11', 'no'),
(103, 1, '2018-10-26 10:29:24', 'no'),
(104, 1, '2018-10-27 10:09:13', 'no'),
(105, 1, '2018-10-27 10:12:41', 'no'),
(106, 2, '2018-10-27 10:18:37', 'no');

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
(7, '2018-10', '5000', '2091', '1234', '8325', '83.25');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `comment_id` int(11) NOT NULL,
  `parent_comment_id` int(11) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `comment_sender_name` varchar(40) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_comment`
--

INSERT INTO `tbl_comment` (`comment_id`, `parent_comment_id`, `comment`, `comment_sender_name`, `date`) VALUES
(1, 0, 'I am Groot\r\n', 'Peter', '2018-10-24 21:47:07'),
(2, 0, 'I am Here', 'Peter', '2018-10-24 21:47:59'),
(3, 2, 'We Know', 'cosmas', '2018-10-24 21:48:22'),
(4, 3, 'Its OK', 'Peter', '2018-10-24 21:48:33'),
(5, 4, 'i am the groot', 'cosmas', '2018-10-24 21:48:43'),
(6, 0, 'I really love this site', 'Michael', '2018-10-25 05:01:45'),
(7, 0, 'hi\r\n\r\n\r\n\r\n\r\n\r\n\r\n', 'muj', '2018-10-25 09:06:48'),
(8, 0, 'Good Work', 'Allan', '2018-10-26 07:13:47'),
(9, 8, 'j', 'Michael', '2018-10-26 07:13:58');

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
-- Indexes for table `chat_message`
--
ALTER TABLE `chat_message`
  ADD PRIMARY KEY (`chat_message_id`);

--
-- Indexes for table `estate_forum`
--
ALTER TABLE `estate_forum`
  ADD PRIMARY KEY (`chat_message_id`);

--
-- Indexes for table `general_announcement`
--
ALTER TABLE `general_announcement`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `resident_details`
--
ALTER TABLE `resident_details`
  ADD PRIMARY KEY (`login_details_id`),
  ADD UNIQUE KEY `login_details_id` (`login_details_id`),
  ADD UNIQUE KEY `login_details_id_2` (`login_details_id`);

--
-- Indexes for table `statement`
--
ALTER TABLE `statement`
  ADD PRIMARY KEY (`statementID`);

--
-- Indexes for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`comment_id`);

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
-- AUTO_INCREMENT for table `chat_message`
--
ALTER TABLE `chat_message`
  MODIFY `chat_message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;
--
-- AUTO_INCREMENT for table `estate_forum`
--
ALTER TABLE `estate_forum`
  MODIFY `chat_message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `general_announcement`
--
ALTER TABLE `general_announcement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `new_residents`
--
ALTER TABLE `new_residents`
  MODIFY `pendingID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `paymentID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `resident`
--
ALTER TABLE `resident`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `resident_details`
--
ALTER TABLE `resident_details`
  MODIFY `login_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;
--
-- AUTO_INCREMENT for table `statement`
--
ALTER TABLE `statement`
  MODIFY `statementID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
