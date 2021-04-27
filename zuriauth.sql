-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 27, 2021 at 11:47 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zuriauth`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
CREATE TABLE IF NOT EXISTS `course` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course` varchar(50) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_reg`
--

DROP TABLE IF EXISTS `user_reg`;
CREATE TABLE IF NOT EXISTS `user_reg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `user_reg`
--

INSERT INTO `user_reg` (`id`, `name`, `password`, `date`) VALUES
(1, 'rolymygiz', 'Pa$$w0rd!', '2021-04-26 00:32:57'),
(2, 'kikomopuvu', 'Pa$$w0rd!', '2021-04-26 00:34:54'),
(3, 'Adeyinka', 'password', '2021-04-26 07:59:27'),
(4, 'Davido', 'baddest', '2021-04-26 08:26:01'),
(5, 'Admin', 'pass', '2021-04-26 08:26:57'),
(6, 'ricodah', 'Pa$$w0rd!', '2021-04-26 08:36:47'),
(7, 'suxaga', 'Pa$$w0rd!', '2021-04-26 08:41:44'),
(8, 'suzojijavy', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', '2021-04-26 08:45:35'),
(9, 'Marshall', '098f6bcd4621d373cade4e832627b4f6', '2021-04-26 17:21:30'),
(10, 'Test', '098f6bcd4621d373cade4e832627b4f6', '2021-04-26 17:41:33'),
(11, 'Mike', '18126e7bd3f84b3f3e4df094def5b7de', '2021-04-26 19:11:55'),
(12, 'Yemi', 'a562cfa07c2b1213b3a5c99b756fc206', '2021-04-27 07:09:55'),
(13, 'admin12', '5f4dcc3b5aa765d61d8327deb882cf99', '2021-04-27 18:59:08'),
(14, 'admin12', '5f4dcc3b5aa765d61d8327deb882cf99', '2021-04-27 19:02:27'),
(15, 'Toyin', '1a1dc91c907325c69271ddf0c944bc72', '2021-04-27 19:02:48'),
(16, 'naguwi', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', '2021-04-27 19:04:10'),
(17, 'Name', '098f6bcd4621d373cade4e832627b4f6', '2021-04-27 23:35:02');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
