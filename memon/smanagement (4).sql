-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2019 at 07:26 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Email` varchar(30) DEFAULT NULL,
  `Password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Email`, `Password`) VALUES
('jinnahkaadmin@gmail.com', 'jinnah123+');

-- --------------------------------------------------------

--
-- Table structure for table `sms`
--

CREATE TABLE `sms` (
  `Id` int(255) UNSIGNED NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sms`
--

INSERT INTO `sms` (`Id`, `Username`, `Message`) VALUES
(1, 'Student', 'Salam '),
(2, 'Student', 'Kya haaal hai sbka??'),
(3, 'Zoya Shahid', 'hn kya hai'),
(4, 'Zoya Shahid', '?'),
(5, 'Zoya Shahid', 'ok'),
(6, 'Khadija ', '?'),
(7, 'Khadija ', '?'),
(8, 'Khadija ', 'goodnight'),
(9, 'Khadija ', 'goodnight'),
(10, 'Student', '????/'),
(11, 'Student', 'Ok'),
(12, 'Student', 'acha han'),
(13, 'Student', ''),
(14, 'Student', '?'),
(15, 'Student', '????'),
(16, 'Hani', 'Salam'),
(17, 'Hani', 'kya hua hai han'),
(18, 'Hani', '?'),
(19, 'Hani', '?'),
(20, 'Hani', 'what?'),
(21, 'Hani', 'what?'),
(22, 'Hani', 'what?'),
(23, 'Hani', 'what are you doing?'),
(24, 'Student', 'ok'),
(25, 'Student', '?'),
(26, 'Student', 'Achaaaaa'),
(27, 'Student', 'or'),
(28, 'Student', 'or'),
(29, 'Student', 'or'),
(30, 'Student', 'kya hai'),
(31, 'Aliza', 'Salam to all'),
(32, 'Student', 'W.Salam ');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Id` int(150) UNSIGNED NOT NULL,
  `Username` varchar(30) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Password` varchar(30) DEFAULT NULL,
  `Faculty` varchar(50) DEFAULT NULL,
  `Batch` varchar(30) DEFAULT NULL,
  `Source` varchar(30) DEFAULT NULL,
  `Area` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Id`, `Username`, `Email`, `Password`, `Faculty`, `Batch`, `Source`, `Area`) VALUES
(1, 'Student', 'studentstudent12@gmail.com', 'newpas', 'Pharmacy', '2016', 'Friend', 'Saddar Town'),
(2, 'Zoya Shahid', 'zoyashahid@gmail.com', 'zoya2', 'Pharmacy', '2017', 'Realtives', 'SITE Town'),
(3, 'Khadija ', 'khadija456@yahoo.com', 'cool', 'Pharmacy', '2015', 'Friend', 'Saddar Town'),
(5, 'Payal', 'payalkasturi3@gmail.com', 'payal6', 'Science', '2017', 'Realtives', 'Shah Faisal Town'),
(6, 'Shahina', 'shah12@yahoo.com', 'yes', 'Pharmacy', '2016', 'Friend', 'New Karachi Town'),
(7, 'Sana Ali Khan', 'sanasana4@gmail.com ', 'jan123', 'Pharmacy', '2015', 'Friend', 'SITE Town'),
(11, 'Sobia', 'sobia12@yahoo.com', 's12', 'Pharmacy', '2015', 'Realtives', 'Saddar Town'),
(12, 'Aliza', 'alizacool@gmail.com', 'jee2', 'Business Administration', '2018', 'Friend', 'Gulshan Town');

-- --------------------------------------------------------

--
-- Table structure for table `users_chats`
--

CREATE TABLE `users_chats` (
  `sender_username` varchar(255) NOT NULL,
  `receiver_username` varchar(255) NOT NULL,
  `msg_content` text NOT NULL,
  `msg_status` varchar(255) NOT NULL,
  `msg_date` date NOT NULL,
  `msg_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_chats`
--

INSERT INTO `users_chats` (`sender_username`, `receiver_username`, `msg_content`, `msg_status`, `msg_date`, `msg_time`) VALUES
('Khadija ', 'Khadija ', 'acha', 'read', '2019-11-22', '2019-11-21 08:32:31'),
('Khadija ', 'Khadija ', 'or kya ', 'read', '2019-11-22', '2019-11-21 09:06:25'),
('Khadija ', 'Khadija ', '?', 'read', '2019-11-22', '2019-11-21 11:44:29'),
('Khadija ', 'Khadija ', '?', 'read', '2019-11-22', '2019-11-21 11:44:33'),
('Khadija ', 'Khadija ', '?', 'read', '2019-11-22', '2019-11-21 11:44:39'),
('Khadija ', 'Khadija ', '?', 'read', '2019-11-22', '2019-11-21 11:44:41'),
('Khadija ', 'Khadija ', '?', 'read', '2019-11-22', '2019-11-21 11:52:27'),
('Khadija ', 'Khadija ', '?', 'read', '2019-11-22', '2019-11-21 11:55:28'),
('Payal', 'Payal', '?', 'read', '2019-11-23', '2019-11-23 10:12:30'),
('Payal', 'Payal', 'New ', 'read', '2019-11-23', '2019-11-23 10:12:57'),
('Payal', 'Payal', 'New ', 'read', '2019-11-23', '2019-11-23 10:17:12'),
('Payal', 'Payal', 'hn', 'read', '2019-11-23', '2019-11-23 10:17:18'),
('Payal', 'Payal', 'good night', 'read', '2019-11-23', '2019-11-23 10:17:36'),
('Payal', 'Payal', 'good night', 'read', '2019-11-23', '2019-11-23 10:18:25'),
('Payal', 'Payal', 'huuu', 'unread', '2019-11-23', '2019-11-23 10:40:37'),
('Khadija ', 'Salma ', 'Salam kya haal hain??', 'unread', '2019-11-23', '2019-11-23 04:10:59'),
('Khadija ', 'Salma ', 'Salam kya haal hain??', 'unread', '2019-11-23', '2019-11-23 04:49:27'),
('Khadija ', 'Salma ', 'hey', 'unread', '2019-11-23', '2019-11-23 04:49:38'),
('Khadija ', 'Salma ', 'hey', 'unread', '2019-11-23', '2019-11-23 04:49:45'),
('Khadija ', 'Payal', 'kya hua?', 'unread', '2019-11-23', '2019-11-23 04:49:56'),
('Khadija ', 'Payal', 'kya hua?', 'unread', '2019-11-23', '2019-11-23 04:50:03'),
('Khadija ', 'Khadija ', 'what', 'read', '2019-11-23', '2019-11-23 04:50:42'),
('Khadija ', 'Khadija ', 'what', 'read', '2019-11-23', '2019-11-23 04:50:50'),
('Khadija ', 'Khadija ', 'what', 'unread', '2019-11-23', '2019-11-23 04:54:59'),
('Shahina', 'Payal', 'Good Morning', 'unread', '2019-11-23', '2019-11-23 04:58:03'),
('Shahina', 'Payal', 'Good Morning', 'unread', '2019-11-23', '2019-11-23 04:58:22'),
('Shahina', 'Payal', '??', 'unread', '2019-11-23', '2019-11-23 04:59:37'),
('Shahina', 'Khadija ', '?', 'unread', '2019-11-23', '2019-11-23 04:59:50'),
('Shahina', 'Khadija ', '?', 'unread', '2019-11-23', '2019-11-23 05:07:05'),
('Shahina', 'Khadija ', '?', 'unread', '2019-11-23', '2019-11-23 05:10:24'),
('Shahina', 'Khadija ', '?', 'unread', '2019-11-23', '2019-11-23 05:10:24'),
('Shahina', 'Payal', 'hn', 'unread', '2019-11-23', '2019-11-23 05:12:27'),
('Shahina', 'Payal', 'hn', 'unread', '2019-11-23', '2019-11-23 05:12:27'),
('Shahina', 'Payal', 'hn', 'unread', '2019-11-23', '2019-11-23 05:12:27'),
('Shahina', 'Khadija ', 'whats are you doing?', 'unread', '2019-11-23', '2019-11-23 05:13:16'),
('Shahina', 'Khadija ', 'whats are you doing?', 'unread', '2019-11-23', '2019-11-23 05:13:16'),
('Shahina', 'Khadija ', 'whats are you doing?', 'unread', '2019-11-23', '2019-11-23 05:13:16'),
('Shahina', 'Khadija ', 'whats are you doing?', 'unread', '2019-11-23', '2019-11-23 05:13:16'),
('Shahina', 'Salma ', 'ha', 'unread', '2019-11-23', '2019-11-23 05:35:26'),
('Shahina', 'Salma ', 'ha', 'unread', '2019-11-23', '2019-11-23 05:35:33'),
('Shahina', 'Payal', 'dafa', 'unread', '2019-11-23', '2019-11-23 05:41:50'),
('Shahina', 'Payal', 'dafa', 'unread', '2019-11-23', '2019-11-23 05:42:05'),
('Shahina', 'Salma ', 'k', 'unread', '2019-11-23', '2019-11-23 05:56:45'),
('Shahina', 'Salma ', 'k', 'unread', '2019-11-23', '2019-11-23 06:13:31'),
('Pyari', 'Pyari', '?', 'read', '2019-11-25', '2019-11-25 05:19:11'),
('Pyari', 'Khadija ', '?', 'unread', '2019-11-25', '2019-11-25 05:19:19'),
('Pyari', 'Khadija ', '?', 'unread', '2019-11-25', '2019-11-25 05:19:24'),
('Pyari', 'Khadija ', '?', 'unread', '2019-11-25', '2019-11-25 05:21:04'),
('Pyari', 'Khadija ', '?', 'unread', '2019-11-25', '2019-11-25 05:21:54'),
('Pyari', 'Khadija ', '?', 'unread', '2019-11-25', '2019-11-25 05:22:05'),
('Pyari', 'Sana Ali', '?', 'unread', '2019-11-25', '2019-11-25 05:22:27'),
('Pyari', 'Sana Ali', '?', 'unread', '2019-11-25', '2019-11-25 05:22:29'),
('Pyari', 'Sana Ali', '?', 'unread', '2019-11-25', '2019-11-25 05:23:40'),
('Pyari', 'Sana Ali', '?', 'unread', '2019-11-25', '2019-11-25 05:23:47'),
('Pyari', 'Sana Ali', '?', 'unread', '2019-11-25', '2019-11-25 05:25:10'),
('Pyari', 'Sana Ali', 'acha', 'unread', '2019-11-25', '2019-11-25 05:25:18'),
('Pyari', 'Payal', '?', 'unread', '2019-11-25', '2019-11-25 05:26:12'),
('Pyari', 'Payal', 'or', 'unread', '2019-11-25', '2019-11-25 05:26:16'),
('Pyari', 'Payal', 'or', 'unread', '2019-11-25', '2019-11-25 05:27:08'),
('Pyari', 'Payal', '?', 'unread', '2019-11-25', '2019-11-25 05:27:14'),
('Pyari', 'Pyari', '???', 'read', '2019-11-25', '2019-11-25 05:27:51'),
('Pyari', 'Pyari', '???', 'read', '2019-11-25', '2019-11-25 05:28:01'),
('Pyari', 'Khadija ', '??', 'unread', '2019-11-25', '2019-11-25 05:29:56'),
('Pyari', 'Khadija ', 'acha', 'unread', '2019-11-25', '2019-11-25 05:30:02'),
('Pyari', 'Khadija ', 'Ok', 'unread', '2019-11-25', '2019-11-25 05:30:08'),
('Pyari', 'Sana Ali', 'Good', 'unread', '2019-11-25', '2019-11-25 05:32:11'),
('Pyari', 'Sana Ali', '???', 'unread', '2019-11-25', '2019-11-25 05:32:24'),
('Pyari', 'Sana Ali', 'kya hai haaa', 'unread', '2019-11-25', '2019-11-25 05:32:40'),
('Pyari', 'Sana Ali', 'kya hai haaa', 'unread', '2019-11-25', '2019-11-25 05:35:17'),
('Pyari', 'Sana Ali', 'kya hai haaa', 'unread', '2019-11-25', '2019-11-25 05:36:43'),
('Pyari', 'Sana Ali', 'kya hai haaa', 'unread', '2019-11-25', '2019-11-25 05:39:20'),
('Pyari', 'Sana Ali', 'kya hai haaa', 'unread', '2019-11-25', '2019-11-25 05:40:03'),
('Pyari', 'Sana Ali', 'ok fine', 'unread', '2019-11-25', '2019-11-25 05:40:12'),
('Pyari', 'Sana Ali', 'ok fine', 'unread', '2019-11-25', '2019-11-25 05:43:09'),
('Pyari', 'Sana Ali', 'ok fine', 'unread', '2019-11-25', '2019-11-25 05:45:22'),
('Pyari', 'Sana Ali', 'ok fine', 'unread', '2019-11-25', '2019-11-25 05:46:37'),
('Pyari', 'Sana Ali', 'ok fine', 'unread', '2019-11-25', '2019-11-25 05:49:25'),
('Pyari', 'Pyari', '?', 'read', '2019-11-25', '2019-11-25 05:49:58'),
('Pyari', 'Pyari', '?', 'read', '2019-11-25', '2019-11-25 05:52:03'),
('Pyari', 'Pyari', '?', 'read', '2019-11-25', '2019-11-25 05:52:55'),
('Salma ', 'Pyari', 'OK', 'read', '2019-11-25', '2019-11-25 07:37:00'),
('Salma ', 'Pyari', '?', 'read', '2019-11-25', '2019-11-25 07:37:02'),
('Pyari', 'Salma ', 'hn', 'read', '2019-11-25', '2019-11-25 07:37:50'),
('Pyari', 'Salma ', 'ok', 'read', '2019-11-25', '2019-11-25 07:39:48'),
('Pyari', 'Salma ', 'ok', 'read', '2019-11-25', '2019-11-25 07:40:10'),
('Pyari', 'Salma ', 'ok', 'read', '2019-11-25', '2019-11-25 07:40:28'),
('Pyari', 'Salma ', 'go here', 'read', '2019-11-25', '2019-11-25 07:40:35'),
('Salma ', 'Pyari', 'hn', 'read', '2019-11-25', '2019-11-25 07:41:31'),
('Salma ', 'Pyari', 'bolna kya hai', 'read', '2019-11-25', '2019-11-25 07:41:43'),
('Pyari', 'Student', 'ok', 'read', '2019-11-25', '2019-11-25 08:07:32'),
('Pyari', 'Student', 'ok', 'read', '2019-11-25', '2019-11-25 08:08:34'),
('Pyari', 'Student', 'ok', 'read', '2019-11-25', '2019-11-25 08:08:47'),
('Pyari', 'Student', 'ok', 'read', '2019-11-25', '2019-11-25 08:09:03'),
('Pyari', 'Student', 'ok', 'read', '2019-11-25', '2019-11-25 08:09:59'),
('Pyari', 'Student', 'ok', 'read', '2019-11-25', '2019-11-25 08:10:25'),
('Hani', 'Khadija ', 'Salam', 'unread', '2019-11-27', '2019-11-27 03:37:59'),
('Hani', 'Khadija ', 'Salam', 'unread', '2019-11-27', '2019-11-27 03:38:05'),
('Hani', 'Khadija ', 'ok', 'unread', '2019-11-27', '2019-11-27 03:39:13'),
('Hani', 'Khadija ', 'ok', 'unread', '2019-11-27', '2019-11-27 03:56:09'),
('Hani', 'Khadija ', 'ok', 'unread', '2019-11-27', '2019-11-27 03:57:29'),
('Hani', 'Khadija ', 'ok', 'unread', '2019-11-27', '2019-11-27 03:58:14'),
('Hani', 'Khadija ', 'ok', 'unread', '2019-11-27', '2019-11-27 03:58:23'),
('Hani', 'Khadija ', 'ok', 'unread', '2019-11-27', '2019-11-27 03:58:45'),
('Hani', 'Khadija ', '?', 'unread', '2019-11-27', '2019-11-27 03:58:59'),
('Hani', 'Pyari', '?', 'read', '2019-11-27', '2019-11-27 04:09:36'),
('Hani', 'Pyari', '?', 'read', '2019-11-27', '2019-11-27 04:09:43'),
('Hani', 'Pyari', '??', 'read', '2019-11-27', '2019-11-27 04:09:52'),
('Hani', 'Pyari', '??', 'read', '2019-11-27', '2019-11-27 04:11:02'),
('Hani', 'Pyari', '??', 'read', '2019-11-27', '2019-11-27 04:11:24'),
('Hani', 'Pyari', '??', 'read', '2019-11-27', '2019-11-27 04:11:51'),
('Hani', 'Pyari', 'good', 'read', '2019-11-27', '2019-11-27 04:12:17'),
('Hani', 'Student', 'Hi', 'read', '2019-11-27', '2019-11-27 04:12:34'),
('Hani', 'Student', 'Hi', 'read', '2019-11-27', '2019-11-27 04:12:41'),
('Hani', 'Student', 'Hi', 'read', '2019-11-27', '2019-11-27 04:13:36'),
('Hani', 'Zoya Shahid', '?', 'unread', '2019-11-27', '2019-11-27 04:14:26'),
('Hani', 'Zoya Shahid', '?', 'unread', '2019-11-27', '2019-11-27 04:14:37'),
('Hani', 'Hani', 'ok', 'read', '2019-11-27', '2019-11-27 04:19:39'),
('Hani', 'Hani', '?', 'read', '2019-11-27', '2019-11-27 04:19:43'),
('Hani', 'Hani', '?', 'read', '2019-11-27', '2019-11-27 04:19:56'),
('Hani', 'Hani', 'aacha', 'read', '2019-11-27', '2019-11-27 04:20:30'),
('Hani', 'Hani', '?', 'read', '2019-11-27', '2019-11-27 04:21:39'),
('Hani', 'Hani', '?', 'read', '2019-11-27', '2019-11-27 04:22:42'),
('Hani', 'Hani', '?', 'read', '2019-11-27', '2019-11-27 04:25:19'),
('Hani', 'Hani', '?', 'read', '2019-11-27', '2019-11-27 04:25:50'),
('Hani', 'Hani', 'kkkkkkkk', 'read', '2019-11-27', '2019-11-27 04:26:16'),
('Hani', 'Hani', 'ac?ha', 'read', '2019-11-27', '2019-11-27 04:26:54'),
('Hani', 'Hani', 'kya hauii', 'read', '2019-11-27', '2019-11-27 04:27:03'),
('Hani', 'Hani', 'kya hauii', 'read', '2019-11-27', '2019-11-27 04:28:34'),
('Hani', 'Hani', 'kya hauii', 'read', '2019-11-27', '2019-11-27 04:28:50'),
('Hani', 'Hani', 'kya hauii', 'read', '2019-11-27', '2019-11-27 04:29:03'),
('Hani', 'Hani', 'kya hauii', 'read', '2019-11-27', '2019-11-27 04:29:37'),
('Hani', 'Hani', 'kya hauii', 'read', '2019-11-27', '2019-11-27 04:29:51'),
('Hani', 'Hani', 'kya hauii', 'read', '2019-11-27', '2019-11-27 04:31:12'),
('Hani', 'Hani', 'kkk', 'read', '2019-11-27', '2019-11-27 04:31:26'),
('Hani', 'Hani', 'kkk', 'read', '2019-11-27', '2019-11-27 04:32:54'),
('Hani', 'Hani', 'k', 'read', '2019-11-27', '2019-11-27 04:33:03'),
('Hani', 'Hani', 'k', 'read', '2019-11-27', '2019-11-27 04:34:03'),
('Hani', 'Hani', 'k', 'read', '2019-11-27', '2019-11-27 04:34:43'),
('Hani', 'Hani', 'k', 'read', '2019-11-27', '2019-11-27 04:34:59'),
('Hani', 'Hani', 'k', 'read', '2019-11-27', '2019-11-27 04:35:17'),
('Hani', 'Hani', 'k', 'read', '2019-11-27', '2019-11-27 04:37:03'),
('Hani', 'Hani', 'k', 'read', '2019-11-27', '2019-11-27 04:37:22'),
('Hani', 'Hani', 'k', 'read', '2019-11-27', '2019-11-27 04:37:45'),
('Hani', 'Hani', 'k', 'read', '2019-11-27', '2019-11-27 04:38:05'),
('Hani', 'Hani', 'k', 'read', '2019-11-27', '2019-11-27 04:38:20'),
('Hani', 'Zoya Shahid', 'acahhaa', 'unread', '2019-11-27', '2019-11-27 04:43:30'),
('Hani', 'Zoya Shahid', 'k', 'unread', '2019-11-27', '2019-11-27 04:43:48'),
('Hani', 'Salma ', '?', 'unread', '2019-11-27', '2019-11-27 04:44:33'),
('Hani', 'Salma ', '?', 'unread', '2019-11-27', '2019-11-27 04:44:43'),
('Hani', 'Salma ', 'acha', 'unread', '2019-11-27', '2019-11-27 04:45:11'),
('Hani', 'Salma ', 'acha', 'unread', '2019-11-27', '2019-11-27 04:47:14'),
('Hani', 'Salma ', '?', 'unread', '2019-11-27', '2019-11-27 04:47:21'),
('Hani', 'Salma ', '?', 'unread', '2019-11-27', '2019-11-27 04:49:15'),
('Hani', 'Salma ', '?', 'unread', '2019-11-27', '2019-11-27 04:49:22'),
('Hani', 'Salma ', '?', 'unread', '2019-11-27', '2019-11-27 04:49:45'),
('Hani', 'Salma ', 'acha', 'unread', '2019-11-27', '2019-11-27 04:49:50'),
('Hani', 'Salma ', 'chalo kooi bt nii', 'unread', '2019-11-27', '2019-11-27 04:49:58'),
('Hani', 'Salma ', 'chalo kooi bt nii', 'unread', '2019-11-27', '2019-11-27 04:50:47'),
('Hani', 'Salma ', 'chalo kooi bt nii', 'unread', '2019-11-27', '2019-11-27 04:51:15'),
('Hani', 'Salma ', 'chalo kooi bt nii', 'unread', '2019-11-27', '2019-11-27 04:52:33'),
('Hani', 'Khadija ', 'chalo theek', 'unread', '2019-11-27', '2019-11-27 04:52:50'),
('Hani', 'Khadija ', 'chalo theek', 'unread', '2019-11-27', '2019-11-27 04:53:56'),
('Hani', 'Khadija ', 'chalo theek', 'unread', '2019-11-27', '2019-11-27 04:54:48'),
('Hani', 'Khadija ', 'chalo theek', 'unread', '2019-11-27', '2019-11-27 04:55:58'),
('Hani', 'Khadija ', 'chalo theek', 'unread', '2019-11-27', '2019-11-27 04:56:27'),
('Hani', 'Khadija ', 'chalo theek', 'unread', '2019-11-27', '2019-11-27 04:56:50'),
('Hani', 'Khadija ', 'chalo theek', 'unread', '2019-11-27', '2019-11-27 04:57:19'),
('Hani', 'Khadija ', 'chalo theek', 'unread', '2019-11-27', '2019-11-27 04:57:56'),
('Hani', 'Khadija ', 'chalo theek', 'unread', '2019-11-27', '2019-11-27 04:58:07'),
('Hani', 'Khadija ', 'chalo theek', 'unread', '2019-11-27', '2019-11-27 04:58:20'),
('Hani', 'Khadija ', 'chalo theek', 'unread', '2019-11-27', '2019-11-27 04:58:56'),
('Hani', 'Khadija ', 'chalo theek', 'unread', '2019-11-27', '2019-11-27 04:59:06'),
('Hani', 'Khadija ', 'chalo theek', 'unread', '2019-11-27', '2019-11-27 04:59:22'),
('Hani', 'Khadija ', 'chalo theek', 'unread', '2019-11-27', '2019-11-27 04:59:40'),
('Hani', 'Khadija ', 'chalo theek', 'unread', '2019-11-27', '2019-11-27 05:00:07'),
('Hani', 'Khadija ', 'chalo theek', 'unread', '2019-11-27', '2019-11-27 05:00:24'),
('Hani', 'Khadija ', 'chalo theek', 'unread', '2019-11-27', '2019-11-27 05:00:44'),
('Hani', 'Khadija ', 'chalo theek', 'unread', '2019-11-27', '2019-11-27 05:00:57'),
('Hani', 'Khadija ', 'chalo theek', 'unread', '2019-11-27', '2019-11-27 05:01:22'),
('Hani', 'Khadija ', 'chalo theek', 'unread', '2019-11-27', '2019-11-27 05:01:56'),
('Hani', 'Khadija ', 'chalo theek', 'unread', '2019-11-27', '2019-11-27 05:02:10'),
('Hani', 'Khadija ', 'chalo theek', 'unread', '2019-11-27', '2019-11-27 05:02:27'),
('Hani', 'Khadija ', 'chalo theek', 'unread', '2019-11-27', '2019-11-27 05:02:42'),
('Hani', 'Khadija ', 'chalo theek', 'unread', '2019-11-27', '2019-11-27 05:03:11'),
('Hani', 'Khadija ', 'chalo theek', 'unread', '2019-11-27', '2019-11-27 05:03:26'),
('Hani', 'Khadija ', 'chalo theek', 'unread', '2019-11-27', '2019-11-27 05:03:38'),
('Hani', 'Khadija ', 'chalo theek', 'unread', '2019-11-27', '2019-11-27 05:04:14'),
('Hani', 'Khadija ', 'chalo theek', 'unread', '2019-11-27', '2019-11-27 05:04:24'),
('Hani', 'Khadija ', 'chalo theek', 'unread', '2019-11-27', '2019-11-27 05:04:38'),
('Hani', 'Khadija ', 'chalo theek', 'unread', '2019-11-27', '2019-11-27 05:05:06'),
('Hani', 'Khadija ', 'chalo theek', 'unread', '2019-11-27', '2019-11-27 05:05:22'),
('Hani', 'Student', '?', 'read', '2019-11-27', '2019-11-27 05:05:56'),
('Hani', 'Pyari', 'ok', 'read', '2019-11-27', '2019-11-27 06:39:37'),
('Hani', 'Pyari', 'chalo bye', 'read', '2019-11-27', '2019-11-27 06:39:43'),
('Hani', 'Pyari', 'chalo bye', 'read', '2019-11-27', '2019-11-27 06:40:06'),
('Hani', 'Pyari', 'chalo bye', 'read', '2019-11-27', '2019-11-27 06:40:45'),
('Hani', 'Pyari', 'chalo bye', 'read', '2019-11-27', '2019-11-27 06:43:32'),
('Hani', 'Pyari', 'chalo bye', 'read', '2019-11-27', '2019-11-27 06:44:00'),
('Hani', 'Pyari', 'chalo bye', 'read', '2019-11-27', '2019-11-27 06:44:32'),
('Hani', 'Pyari', 'chalo bye', 'read', '2019-11-27', '2019-11-27 06:44:41'),
('Hani', 'Pyari', 'chalo bye', 'read', '2019-11-27', '2019-11-27 06:44:51'),
('Hani', 'Pyari', 'chalo bye', 'read', '2019-11-27', '2019-11-27 06:45:03'),
('Hani', 'Pyari', 'chalo bye', 'read', '2019-11-27', '2019-11-27 06:45:14'),
('Hani', 'Pyari', 'chalo bye', 'read', '2019-11-27', '2019-11-27 06:45:29'),
('Hani', 'Pyari', 'chalo bye', 'read', '2019-11-27', '2019-11-27 06:46:00'),
('Hani', 'Pyari', 'chalo bye', 'read', '2019-11-27', '2019-11-27 06:46:29'),
('Hani', 'Pyari', 'chalo bye', 'read', '2019-11-27', '2019-11-27 06:46:50'),
('Hani', 'Pyari', 'chalo bye', 'read', '2019-11-27', '2019-11-27 06:47:12'),
('Hani', 'Pyari', 'chalo bye', 'read', '2019-11-27', '2019-11-27 06:47:33'),
('Hani', 'Pyari', 'chalo bye', 'read', '2019-11-27', '2019-11-27 06:47:59'),
('Hani', 'Pyari', 'chalo bye', 'read', '2019-11-27', '2019-11-27 06:48:30'),
('Hani', 'Pyari', 'chalo bye', 'read', '2019-11-27', '2019-11-27 06:49:09'),
('Hani', 'Pyari', 'chalo bye', 'read', '2019-11-27', '2019-11-27 06:49:24'),
('Hani', 'Pyari', 'chalo bye', 'read', '2019-11-27', '2019-11-27 06:49:35'),
('Hani', 'Pyari', 'chalo bye', 'read', '2019-11-27', '2019-11-27 06:49:45'),
('Hani', 'Pyari', 'chalo bye', 'read', '2019-11-27', '2019-11-27 06:50:23'),
('Hani', 'Pyari', 'chalo bye', 'read', '2019-11-27', '2019-11-27 06:51:08'),
('Hani', 'Pyari', 'chalo bye', 'read', '2019-11-27', '2019-11-27 06:51:18'),
('Hani', 'Pyari', 'chalo bye', 'read', '2019-11-27', '2019-11-27 06:51:27'),
('Hani', 'Pyari', 'chalo bye', 'read', '2019-11-27', '2019-11-27 06:51:39'),
('Hani', 'Pyari', 'chalo bye', 'read', '2019-11-27', '2019-11-27 06:51:52'),
('Hani', 'Pyari', 'chalo bye', 'read', '2019-11-27', '2019-11-27 06:52:13'),
('Hani', 'Sana Ali', 'Salam', 'unread', '2019-11-27', '2019-11-27 06:53:34'),
('Hani', 'Sana Ali', '?', 'unread', '2019-11-27', '2019-11-27 06:53:43'),
('Hani', 'Sana Ali', 'ok', 'unread', '2019-11-27', '2019-11-27 06:54:21'),
('Hani', 'Hani', 'Salam ', 'read', '2019-11-27', '2019-11-27 07:03:08'),
('Hani', 'Hani', 'Salam ', 'read', '2019-11-27', '2019-11-27 07:06:11'),
('Hani', 'Hani', 'Salam ', 'read', '2019-11-27', '2019-11-27 07:06:30'),
('Hani', 'Zoya Shahid', '?', 'unread', '2019-11-27', '2019-11-27 07:11:35'),
('Hani', 'Zoya Shahid', '?', 'unread', '2019-11-27', '2019-11-27 07:12:44'),
('Hani', 'Zoya Shahid', '?', 'unread', '2019-11-27', '2019-11-27 07:13:06'),
('Hani', 'Zoya Shahid', 'kya hai ', 'unread', '2019-11-27', '2019-11-27 07:13:14'),
('Hani', 'Zoya Shahid', 'kya hai ', 'unread', '2019-11-27', '2019-11-27 07:13:55'),
('Hani', 'Zoya Shahid', 'kuch nii', 'unread', '2019-11-27', '2019-11-27 07:14:02'),
('Hani', 'Zoya Shahid', 'kuch nii', 'unread', '2019-11-27', '2019-11-27 07:15:25'),
('Pyari', 'Hani', 'kya hai', 'read', '2019-11-27', '2019-11-27 07:16:41'),
('Pyari', 'Hani', '?', 'read', '2019-11-27', '2019-11-27 07:17:12'),
('Pyari', 'Hani', 'ok', 'read', '2019-11-27', '2019-11-27 07:17:28'),
('Hani', 'Pyari', 'good morning', 'unread', '2019-11-27', '2019-11-27 07:18:59'),
('Hani', 'Pyari', 'oye', 'unread', '2019-11-27', '2019-11-27 07:19:20'),
('Hani', 'Pyari', 'dafa hojao', 'unread', '2019-11-27', '2019-11-27 07:19:44'),
('Hani', 'Pyari', 'ok', 'unread', '2019-11-27', '2019-11-27 07:20:36'),
('Hani', 'Hani', 'kya hua', 'read', '2019-11-27', '2019-11-27 07:32:45'),
('Hani', 'Zoya Shahid', 'ok', 'unread', '2019-11-27', '2019-11-27 07:32:58'),
('Hani', 'Payal', '?', 'unread', '2019-11-27', '2019-11-27 07:34:41'),
('Hani', 'Payal', '?', 'unread', '2019-11-27', '2019-11-27 07:34:52'),
('Hani', 'Payal', '?', 'unread', '2019-11-27', '2019-11-27 07:37:14'),
('Student', 'Student', '?', 'read', '2019-11-27', '2019-11-27 04:50:01'),
('Student', 'Student', 'Ok', 'read', '2019-11-27', '2019-11-27 04:50:14'),
('Student', 'Khadija ', 'Salam', 'unread', '2019-11-27', '2019-11-27 04:50:45'),
('Student', 'Khadija ', '?', 'unread', '2019-11-27', '2019-11-27 04:50:49'),
('Student', 'Khadija ', 'kya haal hain?', 'unread', '2019-11-27', '2019-11-27 04:50:59'),
('Student', 'Hani', 'or', 'unread', '2019-11-27', '2019-11-27 04:53:48'),
('Student', 'Hani', 'kya', 'unread', '2019-11-27', '2019-11-27 04:53:57'),
('Student', 'Hani', 'chalo', 'unread', '2019-11-27', '2019-11-27 04:54:09'),
('Student', 'Khadija ', '?', 'unread', '2019-11-28', '2019-11-27 09:02:33'),
('Student', 'Pyari', '???/', 'unread', '2019-11-28', '2019-11-27 09:03:20'),
('Student', 'Pyari', '???/', 'unread', '2019-11-28', '2019-11-27 09:04:05'),
('Student', 'Pyari', '???/', 'unread', '2019-11-28', '2019-11-27 09:04:29'),
('Student', 'Pyari', '???/', 'unread', '2019-11-28', '2019-11-27 09:04:44'),
('Student', 'Pyari', '???/', 'unread', '2019-11-28', '2019-11-27 09:07:47'),
('Student', 'Pyari', '???/', 'unread', '2019-11-28', '2019-11-27 09:08:21'),
('Student', 'Pyari', '???/', 'unread', '2019-11-28', '2019-11-27 09:08:59'),
('Student', 'Pyari', '???/', 'unread', '2019-11-28', '2019-11-27 09:09:11'),
('Student', 'Pyari', '???/', 'unread', '2019-11-28', '2019-11-27 09:09:30'),
('Student', 'Pyari', '???/', 'unread', '2019-11-28', '2019-11-27 09:09:59'),
('Student', 'Pyari', '???/', 'unread', '2019-11-28', '2019-11-27 09:10:13'),
('Student', 'Salma ', '?', 'unread', '2019-11-28', '2019-11-27 09:38:55'),
('Student', 'Salma ', '?', 'unread', '2019-11-28', '2019-11-27 09:39:02'),
('Student', 'Salma ', 'kya', 'unread', '2019-11-29', '2019-11-28 08:54:36'),
('Aliza', 'Zoya Shahid', 'Salam', 'unread', '2019-11-29', '2019-11-29 04:23:39'),
('Aliza', 'Zoya Shahid', 'Salam', 'unread', '2019-11-29', '2019-11-29 04:23:47'),
('Aliza', 'Zoya Shahid', 'Kya haal hain??', 'unread', '2019-11-29', '2019-11-29 04:23:56'),
('Aliza', 'Zoya Shahid', 'Kesi ho ???', 'unread', '2019-11-29', '2019-11-29 04:24:05'),
('Aliza', 'Student', '????', 'read', '2019-11-29', '2019-11-29 04:24:17'),
('Aliza', 'Student', '?', 'read', '2019-11-29', '2019-11-29 04:24:19'),
('Aliza', 'Student', 'hiiii', 'read', '2019-11-29', '2019-11-29 04:24:31'),
('Student', 'Aliza', 'G', 'unread', '2019-11-29', '2019-11-29 04:25:17'),
('Student', 'Aliza', 'bolo', 'unread', '2019-11-29', '2019-11-29 04:25:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sms`
--
ALTER TABLE `sms`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sms`
--
ALTER TABLE `sms`
  MODIFY `Id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `Id` int(150) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
