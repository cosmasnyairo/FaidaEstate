-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2018 at 10:13 PM
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
-- Database: `faida_estate`
--

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
(13, 'Tom Rotich', 'trot@j.com', 'Change of emaail'),
(14, 'SusanOrina', 'sorina@gmail.com', 'Hi there'),
(15, 'Susan Orina', 'sorina@gmail.com', 'Need more tools'),
(16, 'Cosmas Nyairo', 'nyairocosmas@gmail.com', 'Hey');

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
(1, 1, 2, 'G', '2018-10-29 17:45:06', 0),
(2, 1, 2, 'f', '2018-10-29 17:45:46', 0),
(3, 1, 2, '😆', '2018-10-29 17:58:54', 0),
(4, 1, 2, 'Hr', '2018-10-29 18:19:15', 0),
(5, 1, 2, 'Hi', '2018-10-29 18:20:07', 0),
(6, 1, 2, 'Yooooo', '2018-10-29 18:48:48', 0),
(7, 2, 1, 'g', '2018-10-29 18:48:57', 0),
(8, 2, 1, 'g', '2018-10-29 18:48:57', 0),
(9, 2, 1, 'g', '2018-10-29 18:49:02', 0),
(10, 2, 1, '😆', '2018-10-29 18:49:13', 0),
(11, 1, 2, 'rew', '2018-10-29 18:49:53', 0),
(12, 1, 2, 'g', '2018-10-29 18:50:18', 0),
(13, 2, 1, 'g😃', '2018-10-29 18:50:27', 0),
(14, 2, 1, 'f', '2018-10-29 20:02:09', 0),
(15, 2, 1, 'g', '2018-10-29 20:03:56', 0),
(16, 2, 1, 'sf', '2018-10-29 20:04:08', 0),
(17, 2, 1, 's', '2018-10-29 20:04:11', 0),
(18, 2, 1, 's', '2018-10-29 20:04:11', 0),
(19, 1, 2, 'Hi', '2018-10-30 07:25:05', 0),
(20, 1, 2, 'Yo', '2018-10-30 07:43:17', 0),
(21, 1, 2, 'yo', '2018-10-30 07:43:22', 0),
(22, 2, 1, 'nfnd', '2018-10-30 07:44:02', 1),
(23, 6, 1, 'g', '2018-10-30 13:05:34', 0),
(24, 6, 1, '', '2018-10-30 13:05:34', 0),
(25, 1, 4, 'Hello', '2018-10-30 13:44:01', 0),
(26, 4, 1, 'ytyg', '2018-10-30 13:44:24', 0),
(27, 1, 4, '😂😂', '2018-10-30 13:44:43', 0),
(28, 4, 1, '😂😂', '2018-10-30 13:44:51', 1),
(29, 2, 4, 'hgn', '2018-11-01 08:12:06', 1),
(30, 1, 12, 'Hello!', '2018-11-03 19:01:47', 1);

-- --------------------------------------------------------

--
-- Table structure for table `estate_forum`
--

CREATE TABLE `estate_forum` (
  `chat_message_id` int(11) NOT NULL,
  `to_user_id` int(11) NOT NULL,
  `from_user_id` int(11) NOT NULL,
  `Sender` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `chat_message` text COLLATE utf8mb4_bin NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `estate_forum`
--

INSERT INTO `estate_forum` (`chat_message_id`, `to_user_id`, `from_user_id`, `Sender`, `chat_message`, `timestamp`, `status`) VALUES
(1, 0, 6, 'Tom Rotich', '<p><img src=\"../upload/bandicam.jpg\" class=\"img-thumbnail\" width=\"200\" height=\"160\"></p>Wall', '2018-11-01 21:50:55', 1),
(2, 0, 6, 'Tom Rotich', 'Hello', '2018-11-01 21:51:39', 1),
(3, 0, 6, 'Tom Rotich', '<p><img src=\"../upload/images.jpg\" class=\"img-thumbnail\" width=\"200\" height=\"160\"></p>Avengers', '2018-11-02 07:44:56', 1),
(4, 0, 1, 'Cosmas Nyairo', '\n\n   ', '2018-11-03 20:44:55', 1),
(5, 0, 1, 'Cosmas Nyairo', '\n\n   ', '2018-11-03 20:44:55', 1),
(6, 0, 1, 'Cosmas Nyairo', '<p><img src=\"../upload/download.txt\" class=\"img-thumbnail\" width=\"200\" height=\"160\"></p><br>', '2018-11-03 20:53:09', 1),
(7, 0, 1, 'Cosmas Nyairo', '<p><img src=\"../upload/diar.txt\"></p><br>', '2018-11-03 20:56:37', 1),
(8, 0, 1, 'Cosmas Nyairo', '<br>\n<b>Notice</b>:  Undefined index: extension in <b>C:\\xampp\\htdocs\\Festate\\FaidaEstate\\php\\upload.php</b> on line <b>8</b><br>\n<br>\n<b>Notice</b>:  Undefined index: uploaded_file in <b>C:\\xampp\\htdocs\\Festate\\FaidaEstate\\php\\upload.php</b> on line <b>20</b><br>\n<br>\n<b>Notice</b>:  Undefined index: uploaded_file in <b>C:\\xampp\\htdocs\\Festate\\FaidaEstate\\php\\upload.php</b> on line <b>21</b><br>\nThere was an error uploading the file, please try again!', '2018-11-03 21:01:56', 1),
(9, 0, 1, 'Cosmas Nyairo', '<p><img src=\"../upload/j.PNG\" class=\"img-thumbnail\" width=\"200\" height=\"160\"></p><br>', '2018-11-03 21:02:20', 1);

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
(10, 'Gummy Bear', 'They call me gummy bear', 'cosmas', '2018-10-25 05:18:48'),
(11, 'gftgauiejd', 'gtyatddasy', 'Tom Rotich', '2018-11-02 07:36:51'),
(12, 'hdvhagfyhj', 'vuyfcdgvubhjnhugfcygvhbjkljhgfdtstfghjk', 'Tom Rotich', '2018-11-02 07:44:04');

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `login_details_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `last_activity` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_type` enum('no','yes') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`login_details_id`, `user_id`, `last_activity`, `is_type`) VALUES
(1, 2, '2018-10-29 18:54:15', 'yes'),
(2, 1, '2018-10-29 18:52:11', 'no'),
(3, 2, '2018-10-29 20:12:10', 'no'),
(4, 2, '2018-10-29 20:14:06', 'no'),
(5, 2, '2018-10-29 20:19:19', 'no'),
(6, 2, '2018-10-29 20:19:58', 'no'),
(7, 2, '2018-10-29 20:30:12', 'no'),
(8, 2, '2018-10-29 20:32:36', 'no'),
(9, 2, '2018-10-29 20:38:36', 'no'),
(10, 1, '2018-10-29 20:40:06', 'no'),
(11, 1, '2018-10-29 20:43:39', 'no'),
(12, 2, '2018-10-29 20:45:15', 'no'),
(13, 2, '2018-10-29 20:47:24', 'no'),
(14, 2, '2018-10-29 20:48:30', 'no'),
(15, 1, '2018-10-29 20:49:42', 'no'),
(16, 4, '2018-10-29 20:54:16', 'no'),
(17, 4, '2018-10-29 20:56:00', 'no'),
(18, 3, '2018-10-30 06:55:31', 'no'),
(19, 2, '2018-10-30 06:55:58', 'no'),
(20, 2, '2018-10-30 06:56:57', 'no'),
(21, 2, '2018-10-30 06:57:15', 'no'),
(22, 4, '2018-10-30 06:58:06', 'no'),
(23, 2, '2018-10-30 07:12:18', 'no'),
(24, 2, '2018-10-30 07:12:50', 'no'),
(25, 2, '2018-10-30 07:13:23', 'no'),
(26, 1, '2018-10-30 07:13:45', 'no'),
(27, 4, '2018-10-30 07:19:21', 'no'),
(28, 4, '2018-10-30 07:20:18', 'no'),
(29, 2, '2018-10-30 07:20:41', 'no'),
(30, 2, '2018-10-30 07:21:26', 'no'),
(31, 2, '2018-10-30 07:21:51', 'no'),
(32, 2, '2018-10-30 07:25:13', 'no'),
(33, 2, '2018-10-30 07:33:29', 'no'),
(34, 2, '2018-10-30 07:34:53', 'no'),
(35, 1, '2018-10-30 07:35:40', 'no'),
(36, 5, '2018-10-30 07:36:23', 'no'),
(37, 4, '2018-10-30 07:38:21', 'no'),
(38, 2, '2018-10-30 08:10:53', 'no'),
(39, 1, '2018-10-30 07:44:12', 'no'),
(40, 4, '2018-10-30 08:11:33', 'no'),
(41, 2, '2018-10-30 09:20:19', 'no'),
(42, 2, '2018-10-30 09:31:28', 'no'),
(43, 2, '2018-10-30 12:24:03', 'no'),
(44, 4, '2018-10-30 12:29:15', 'no'),
(45, 6, '2018-10-30 12:37:46', 'no'),
(46, 2, '2018-10-30 12:42:34', 'no'),
(47, 4, '2018-10-30 12:46:39', 'no'),
(48, 3, '2018-10-30 12:49:48', 'no'),
(49, 3, '2018-10-30 13:00:14', 'no'),
(50, 5, '2018-10-30 13:01:04', 'no'),
(51, 1, '2018-10-30 13:03:47', 'no'),
(52, 5, '2018-10-30 13:05:11', 'no'),
(53, 1, '2018-10-30 13:07:27', 'no'),
(54, 1, '2018-10-30 13:12:25', 'no'),
(55, 1, '2018-10-30 13:47:20', 'no'),
(56, 5, '2018-10-30 13:41:26', 'no'),
(57, 4, '2018-10-30 13:45:03', 'no'),
(58, 6, '2018-10-30 13:46:51', 'no'),
(59, 1, '2018-10-31 07:41:30', 'no'),
(60, 2, '2018-10-31 07:41:50', 'no'),
(61, 5, '2018-10-31 07:43:24', 'no'),
(62, 2, '2018-11-01 07:30:44', 'no'),
(63, 2, '2018-11-01 07:37:08', 'no'),
(64, 5, '2018-11-01 07:46:56', 'no'),
(65, 2, '2018-11-01 07:48:29', 'no'),
(66, 4, '2018-11-01 08:12:13', 'no'),
(67, 1, '2018-11-01 08:44:45', 'no'),
(68, 4, '2018-11-01 09:05:56', 'no'),
(69, 6, '2018-11-01 09:06:34', 'no'),
(70, 4, '2018-11-01 09:06:55', 'no'),
(71, 5, '2018-11-01 09:08:46', 'no'),
(72, 2, '2018-11-01 11:00:50', 'no'),
(73, 5, '2018-11-01 11:01:44', 'no'),
(74, 2, '2018-11-01 11:07:22', 'no'),
(75, 2, '2018-11-01 11:09:46', 'no'),
(76, 5, '2018-11-01 11:22:13', 'no'),
(77, 2, '2018-11-01 11:23:00', 'no'),
(78, 2, '2018-11-01 11:24:41', 'no'),
(79, 2, '2018-11-01 19:58:17', 'no'),
(80, 1, '2018-11-01 20:50:45', 'no'),
(81, 4, '2018-11-01 20:51:23', 'no'),
(82, 6, '2018-11-01 20:53:29', 'no'),
(83, 1, '2018-11-01 20:53:54', 'no'),
(84, 1, '2018-11-01 20:55:53', 'no'),
(85, 1, '2018-11-01 20:56:17', 'no'),
(86, 1, '2018-11-01 20:59:03', 'no'),
(87, 6, '2018-11-01 21:54:30', 'no'),
(88, 5, '2018-11-01 21:56:56', 'no'),
(89, 1, '2018-11-02 06:56:39', 'no'),
(90, 2, '2018-11-02 07:00:48', 'no'),
(91, 4, '2018-11-02 07:04:43', 'no'),
(92, 5, '2018-11-02 07:06:27', 'no'),
(93, 5, '2018-11-02 07:06:54', 'no'),
(94, 5, '2018-11-02 07:07:29', 'no'),
(95, 2, '2018-11-02 07:08:27', 'no'),
(96, 4, '2018-11-02 07:08:47', 'no'),
(97, 6, '2018-11-02 07:10:09', 'no'),
(98, 2, '2018-11-02 07:42:42', 'no'),
(99, 6, '2018-11-02 07:44:57', 'no'),
(100, 6, '2018-11-03 15:46:09', 'no'),
(101, 2, '2018-11-03 15:48:10', 'no'),
(102, 5, '2018-11-03 15:48:40', 'no'),
(103, 4, '2018-11-03 15:49:10', 'no'),
(104, 1, '2018-11-03 15:55:08', 'no'),
(105, 1, '2018-11-03 16:05:06', 'no'),
(106, 5, '2018-11-03 16:06:36', 'no'),
(107, 1, '2018-11-03 16:06:58', 'no'),
(108, 5, '2018-11-03 16:08:00', 'no'),
(109, 2, '2018-11-03 16:08:12', 'no'),
(110, 5, '2018-11-03 16:09:15', 'no'),
(111, 5, '2018-11-03 17:23:41', 'no'),
(112, 5, '2018-11-03 17:42:39', 'no'),
(113, 5, '2018-11-03 18:51:25', 'no'),
(114, 12, '2018-11-03 19:01:49', 'no'),
(115, 5, '2018-11-03 19:01:57', 'no'),
(116, 5, '2018-11-03 19:20:58', 'no'),
(117, 1, '2018-11-03 19:51:30', 'no'),
(118, 1, '2018-11-03 21:02:35', 'no');

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
  `status` varchar(255) NOT NULL DEFAULT 'Not Verified'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new_residents`
--

INSERT INTO `new_residents` (`pendingID`, `name`, `houseNumber`, `email`, `phoneNo`, `status`) VALUES
(1, 'Tony Kamau', '99', 'tony.kamau@gmail.com', '254789098231', 'Verified'),
(4, 'george', 'b4', 'george.george@gmail.com', '23487623', 'Verified');

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
(10, '3', '5', 'Paid'),
(11, '8', '5', 'Paid'),
(12, '1', '7', 'Paid'),
(13, '1', '8', 'Paid');

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
(6, '2018-10', '1000', '500', '1000', '2500', '25'),
(7, '2018-11', '6678', '5789', '8867', '21334', '213.34'),
(8, '2018-12', '5000', '439', '3498', '8937', '89.37');

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
(8, 0, 'I need Time', 'Peter', '2018-11-02 06:44:46'),
(9, 8, 'Why?', 'Cosmas', '2018-11-02 06:44:58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `houseNumber` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `phoneNo` varchar(255) NOT NULL,
  `Position` varchar(20) NOT NULL DEFAULT 'Resident',
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `houseNumber`, `email`, `phoneNo`, `Position`, `password`) VALUES
(1, 'Cosmas Nyairo', '4A', 'nyairocosmas@gmail.com', '254799344215', 'Resident', '$2y$10$aqmtYAYwAT7CUSQ43UosjOOeRGkD9AtylAJbchm6vzCF01YKHu2Ku'),
(2, 'Mary Njenga', '2A', 'mary.njenga@gmail.com', '254722904502', 'Chairperson', '$2y$10$hG0t0MRpByc7Y8MOAT19d.AleXZJQ/Qty9ZPzdRN5TvZzxLtQufku'),
(3, 'Allan Vikiru', '4A', 'vikiruallan12@gmail.com', '254735696067', 'Resident', '$2y$10$jd6f9NIpbXGL9Jq6pNtmCe3nbxMAVXlofWnuPvt69.dbm3wnRxCKq'),
(4, 'Susan Orina', '1A', 'susan.orina@gmail.com', '254722904502', 'Treasurer', '$2y$10$of2rS7Ga09PEuAW6cHZmqe8UzwU/FQ2QUWOXWpmhy9OtUCZHsL5sC'),
(5, 'Moses Mumo', '-', 'mmumo@gmail.com', '254735098651', 'Administrator', '$2y$10$irxmB9jrnmh30ElEhZDsduUFCbhwVWGM4SKCNTD2IUTvYrpNpR//S'),
(6, 'Tom Rotich', '5A', 'trotich@gmail.com', '254735696067', 'Secretary', '$2y$10$emgyQrZuLkUaoGzKVNxdY.XLi.aQos691Q2yAEqlAiJV1uoUBbW56'),
(7, 'Sarah Mukhonza', '6A', 'smukhonza@gmail.com', '254735124684', 'Resident', '$2y$10$KbSItiFEsYFR.chQbRsZuu.6Dh5OschMLrqFRf9pntI8iTRCNPnyy'),
(8, 'Peter Maina', '7B', 'pmaina@gmail.com', '254723589134', 'Resident', '$2y$10$vCQuzcDMs0U5xfhgYhBCiu5/2.fyK90spWjBRRs2r3aVh6HD5OJAq'),
(9, 'Josephine', '11C', 'josephinem@gmail.com', '254727848914', 'Resident', '$2y$10$hnjHDgZmqt0Qc6JIFDKiye0rY8XDbljlPz9wdFeOY77teqkJHm996'),
(10, 'Michael', '4B', 'mnyairo@gmail.com', '254862349349', 'Resident', '$2y$10$dIjuhCWCqzUkIEbOfzcLSOhLEuI4KBNHs6.iyTAf7FpTnW9QvKv.m');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`login_details_id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_requests`
--
ALTER TABLE `admin_requests`
  MODIFY `requestID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `chat_message`
--
ALTER TABLE `chat_message`
  MODIFY `chat_message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `estate_forum`
--
ALTER TABLE `estate_forum`
  MODIFY `chat_message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `general_announcement`
--
ALTER TABLE `general_announcement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `login_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;
--
-- AUTO_INCREMENT for table `new_residents`
--
ALTER TABLE `new_residents`
  MODIFY `pendingID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `paymentID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `statement`
--
ALTER TABLE `statement`
  MODIFY `statementID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
