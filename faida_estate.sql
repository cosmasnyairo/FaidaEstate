-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2019 at 11:33 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
(15, 'Mary Njenga', 'mnjenga@yahoo.com', 'Change of House Number to A2');

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
(22, 2, 1, 'nfnd', '2018-10-30 07:44:02', 0),
(23, 6, 1, 'g', '2018-10-30 13:05:34', 1),
(24, 6, 1, '', '2018-10-30 13:05:34', 1),
(25, 1, 4, 'Hello', '2018-10-30 13:44:01', 0),
(26, 4, 1, 'ytyg', '2018-10-30 13:44:24', 0),
(27, 1, 4, '😂😂', '2018-10-30 13:44:43', 0),
(28, 4, 1, '😂😂', '2018-10-30 13:44:51', 1),
(29, 2, 4, 'hgn', '2018-11-01 08:12:06', 0),
(30, 2, 3, 'Hey Mary!\n\n', '2019-02-27 12:23:39', 0),
(31, 4, 2, 'Hi\n', '2019-02-27 12:24:36', 1),
(32, 1, 2, '🤠', '2019-02-27 12:24:53', 1);

-- --------------------------------------------------------

--
-- Table structure for table `estate_forum`
--

CREATE TABLE `estate_forum` (
  `chat_message_id` int(11) NOT NULL,
  `to_user_id` int(11) NOT NULL,
  `from_user_id` int(11) NOT NULL,
  `chat_message` text COLLATE utf8mb4_bin NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `estate_forum`
--

INSERT INTO `estate_forum` (`chat_message_id`, `to_user_id`, `from_user_id`, `chat_message`, `timestamp`, `status`) VALUES
(0, 0, 2, 'f\n\n   ', '2018-10-29 18:22:59', 1),
(0, 0, 2, '<p><img src="upload/jdk.jpg" class="img-thumbnail" width="200" height="160"></p><br>', '2018-10-29 18:30:24', 1),
(0, 0, 2, 'J\n\n   ', '2018-10-30 07:43:10', 1),
(0, 0, 1, '<p><img src="../upload/Je suis.jpg" class="img-thumbnail" width="200" height="160"></p><br>', '2018-11-01 08:41:13', 1),
(0, 0, 3, '<p><img src="../upload/PickingaProgrammingLangauge.png" class="img-thumbnail" width="200" height="160"></p><br>', '2019-02-27 12:23:11', 1),
(0, 0, 3, '<div>Hi</div><div><br></div>', '2019-02-27 12:23:21', 1),
(0, 0, 2, '<p><img src="../upload/263146458005202.jpg" class="img-thumbnail" width="200" height="160"></p><br>', '2019-02-27 12:25:06', 1),
(0, 0, 3, 'yooooo', '2019-03-05 10:35:52', 1);

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
(79, 2, '2018-11-01 16:51:52', 'no'),
(80, 5, '2018-11-01 16:52:31', 'no'),
(81, 3, '2018-11-01 16:56:29', 'no'),
(82, 5, '2018-11-01 16:57:58', 'no'),
(83, 5, '2018-11-01 16:58:49', 'no'),
(84, 5, '2018-11-01 17:03:15', 'no'),
(85, 4, '2018-11-01 22:57:15', 'no'),
(86, 3, '2018-11-01 22:58:08', 'no'),
(87, 1, '2018-11-02 05:22:02', 'no'),
(88, 2, '2018-11-02 05:29:57', 'no'),
(89, 6, '2018-11-02 05:36:30', 'no'),
(90, 4, '2018-11-02 05:42:08', 'no'),
(91, 5, '2018-11-02 05:46:47', 'no'),
(92, 2, '2018-11-05 04:56:59', 'no'),
(93, 5, '2018-11-05 05:00:54', 'no'),
(94, 3, '2018-11-09 06:39:31', 'no'),
(95, 3, '2019-02-27 07:46:29', 'no'),
(96, 5, '2019-02-27 08:45:58', 'no'),
(97, 3, '2019-02-27 09:13:58', 'no'),
(98, 2, '2019-02-27 09:25:15', 'no'),
(99, 3, '2019-02-27 12:23:41', 'no'),
(100, 2, '2019-02-27 12:25:11', 'no'),
(101, 4, '2019-02-27 12:28:48', 'no'),
(102, 6, '2019-02-27 12:30:10', 'no'),
(103, 1, '2019-02-27 12:30:58', 'no'),
(104, 4, '2019-03-04 08:48:44', 'no'),
(105, 4, '2019-03-04 09:09:49', 'no'),
(106, 4, '2019-03-04 09:23:23', 'no'),
(107, 3, '2019-03-04 09:24:14', 'no'),
(108, 4, '2019-03-04 10:22:09', 'no'),
(109, 4, '2019-03-04 10:26:41', 'no'),
(110, 3, '2019-03-04 10:29:28', 'no'),
(111, 4, '2019-03-04 11:13:37', 'no'),
(112, 3, '2019-03-04 11:15:07', 'no'),
(113, 3, '2019-03-04 11:21:10', 'no'),
(114, 4, '2019-03-04 11:38:41', 'no'),
(115, 5, '2019-03-05 09:56:37', 'no'),
(116, 3, '2019-03-05 10:36:50', 'no'),
(117, 5, '2019-03-05 10:37:00', 'no'),
(118, 5, '2019-03-05 12:00:48', 'no'),
(119, 2, '2019-03-05 13:07:30', 'no'),
(120, 5, '2019-03-05 13:09:17', 'no'),
(121, 2, '2019-03-05 13:30:50', 'no'),
(122, 5, '2019-03-05 13:44:02', 'no'),
(123, 2, '2019-03-05 13:44:31', 'no'),
(124, 2, '2019-03-05 13:45:22', 'no'),
(125, 2, '2019-03-06 10:36:03', 'no'),
(126, 3, '2019-03-08 08:31:49', 'no'),
(127, 2, '2019-03-08 09:30:36', 'no'),
(128, 5, '2019-03-08 09:39:36', 'no'),
(129, 6, '2019-03-08 09:42:43', 'no'),
(130, 3, '2019-03-08 09:43:40', 'no'),
(131, 5, '2019-03-08 09:45:18', 'no'),
(132, 2, '2019-03-08 09:54:03', 'no'),
(133, 3, '2019-03-08 09:56:08', 'no'),
(134, 3, '2019-03-08 14:43:34', 'no'),
(135, 3, '2019-03-08 14:54:36', 'no'),
(136, 3, '2019-03-08 23:06:59', 'no'),
(137, 3, '2019-03-08 23:08:16', 'no'),
(138, 2, '2019-03-08 23:09:13', 'no'),
(139, 5, '2019-03-08 23:18:11', 'no'),
(140, 3, '2019-03-08 23:36:49', 'no'),
(141, 3, '2019-03-09 00:19:21', 'no'),
(142, 6, '2019-03-09 00:19:40', 'no'),
(143, 2, '2019-03-09 00:25:37', 'no'),
(144, 2, '2019-03-09 00:50:41', 'no'),
(145, 5, '2019-03-09 01:25:29', 'no'),
(146, 3, '2019-03-09 02:08:27', 'no'),
(147, 2, '2019-03-09 09:50:03', 'no'),
(148, 3, '2019-03-09 09:51:59', 'no'),
(149, 5, '2019-03-09 09:54:33', 'no'),
(150, 3, '2019-03-11 09:14:43', 'no'),
(151, 3, '2019-03-11 09:15:14', 'no'),
(152, 3, '2019-03-11 09:32:59', 'no'),
(153, 5, '2019-03-11 11:58:16', 'no'),
(154, 2, '2019-03-11 12:03:54', 'no'),
(155, 2, '2019-03-11 12:03:55', 'no'),
(156, 3, '2019-03-11 12:07:36', 'no'),
(157, 3, '2019-03-11 12:14:48', 'no'),
(158, 3, '2019-03-12 14:11:08', 'no'),
(159, 6, '2019-03-12 14:19:07', 'no'),
(160, 6, '2019-03-12 14:19:44', 'no'),
(161, 5, '2019-03-12 14:20:35', 'no'),
(162, 6, '2019-03-12 15:02:00', 'no'),
(163, 6, '2019-03-12 15:45:23', 'no'),
(164, 3, '2019-03-14 18:00:27', 'no'),
(165, 2, '2019-03-14 18:00:45', 'no'),
(166, 5, '2019-03-14 18:07:58', 'no'),
(167, 2, '2019-03-15 11:59:23', 'no'),
(168, 2, '2019-03-15 13:02:08', 'no'),
(169, 5, '2019-03-15 13:03:24', 'no'),
(170, 9, '2019-03-15 13:16:44', 'no');

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
(12, '3', '8', 'Paid'),
(13, '3', '10', 'Paid');

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
(8, '2018-12', '2000', '2000', '2000', '6000', '60'),
(10, '2019-01', '900', '2980', '2130', '6010', '60.1');

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
(8, 7, 'Hallo Muj', 'Kelly', '2019-03-12 16:33:23');

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
(1, 'Cosmas Nyairo', 'E5', 'nyairocosmas@gmail.com', '+254799344215', 'Resident', '$2y$10$aqmtYAYwAT7CUSQ43UosjOOeRGkD9AtylAJbchm6vzCF01YKHu2Ku'),
(2, 'Mary Njenga', 'A2', 'mary.njenga@gmail.com', '+254722904502', 'Chairperson', '$2y$10$hG0t0MRpByc7Y8MOAT19d.AleXZJQ/Qty9ZPzdRN5TvZzxLtQufku'),
(3, 'Allan Vikiru', 'C3', 'vikiruallan12@gmail.com', '+254735696067', 'Resident', '$2y$10$jd6f9NIpbXGL9Jq6pNtmCe3nbxMAVXlofWnuPvt69.dbm3wnRxCKq'),
(4, 'Susan Orina', 'B2', 'susan.orina@gmail.com', '+254722904502', 'Treasurer', '$2y$10$of2rS7Ga09PEuAW6cHZmqe8UzwU/FQ2QUWOXWpmhy9OtUCZHsL5sC'),
(5, 'Moses Mumo', '-', 'mmumo@gmail.com', '+254735098651', 'Administrator', '$2y$10$irxmB9jrnmh30ElEhZDsduUFCbhwVWGM4SKCNTD2IUTvYrpNpR//S'),
(6, 'Tom Rotich', 'A5', 'trotich@gmail.com', '+254735696067', 'Secretary', '$2y$10$emgyQrZuLkUaoGzKVNxdY.XLi.aQos691Q2yAEqlAiJV1uoUBbW56'),
(7, 'Sarah Mukhonza', 'A6', 'smukhonza@gmail.com', '+254735124684', 'Resident', '$2y$10$KbSItiFEsYFR.chQbRsZuu.6Dh5OschMLrqFRf9pntI8iTRCNPnyy'),
(8, 'Peter Maina', 'B7', 'pmaina@gmail.com', '+254723589134', 'Resident', '$2y$10$vCQuzcDMs0U5xfhgYhBCiu5/2.fyK90spWjBRRs2r3aVh6HD5OJAq'),
(9, 'Josephine', 'A1', 'josephinem@gmail.com', '+254727848914', 'Resident', '$2y$10$hnjHDgZmqt0Qc6JIFDKiye0rY8XDbljlPz9wdFeOY77teqkJHm996'),
(24, 'Eric Kimani', 'D6', 'erickimani@gmail.com', '+254735908432', 'Resident', '$2y$10$qOIOEL64Wqp6PGLnyozJ1eLyAJtDb3tIj.rOoKk.523/Ekw.1TiK2'),
(25, 'Abdi Hassan', 'E2', 'ahassan@gmail.com', '+254731201493', 'Resident', '$2y$10$t5sJ.Ho.UUD1po3YeatW8ezg7PYxTjwnv7RtmMWEQlMaWbPn2JX5W');

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
  MODIFY `requestID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `chat_message`
--
ALTER TABLE `chat_message`
  MODIFY `chat_message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `login_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=171;
--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `paymentID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `statement`
--
ALTER TABLE `statement`
  MODIFY `statementID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
