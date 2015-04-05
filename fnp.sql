-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2015 at 10:53 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fnp`
--

-- --------------------------------------------------------

--
-- Table structure for table `blocked`
--

CREATE TABLE IF NOT EXISTS `blocked` (
  `spot` varchar(40) NOT NULL,
  `fromtime` varchar(15) NOT NULL,
  `totime` varchar(15) NOT NULL,
  `user` varchar(50) NOT NULL,
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `vehno` varchar(15) NOT NULL,
  `parked` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `no` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `description` varchar(10000) NOT NULL,
  PRIMARY KEY (`no`),
  KEY `no` (`no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`no`, `name`, `subject`, `email`, `description`) VALUES
(5, 'sachin999', '123ssss', 'sachinpray4me@gmail.com', 'sdddddddddddddddddddddddddddddddddddddd'),
(7, 'sajan', 'send', 'nidhinpk@yahoo.co.in', 'hijjugki');

-- --------------------------------------------------------

--
-- Table structure for table `gm`
--

CREATE TABLE IF NOT EXISTS `gm` (
  `gmid` varchar(25) NOT NULL,
  `town` varchar(30) NOT NULL,
  `spot` varchar(30) NOT NULL,
  `total` int(10) NOT NULL,
  `parked` int(10) NOT NULL,
  `blocked` int(10) NOT NULL,
  `free` int(10) NOT NULL,
  PRIMARY KEY (`gmid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gm`
--

INSERT INTO `gm` (`gmid`, `town`, `spot`, `total`, `parked`, `blocked`, `free`) VALUES
('gmknr001', 'kannur', 'caltex', 160, 0, 0, 160),
('gmknr002', 'kannur', 'railway', 150, 0, 0, 150),
('gmtly001', 'thalassery', 'new busstand', 100, 0, 0, 100),
('gmtly002', 'thalassery', 'railway station', 70, 0, 0, 70);

-- --------------------------------------------------------

--
-- Table structure for table `mail`
--

CREATE TABLE IF NOT EXISTS `mail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `from` varchar(50) NOT NULL,
  `to` varchar(50) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `message` varchar(5000) NOT NULL,
  `read` tinyint(1) NOT NULL DEFAULT '0',
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `mail`
--

INSERT INTO `mail` (`id`, `from`, `to`, `subject`, `message`, `read`, `time`) VALUES
(1, 'admin', 'jeneesh@gmail.com', 'hai', 'koooi', 0, '2015-04-04 06:28:33'),
(2, 'admin', 'aneesh@gmail.com', 'haiiiiii', 'sachinnnnn', 0, '2015-04-04 06:34:18'),
(3, 'admin', 'ashwant@gmail.com', 'like', 'haiiii i like it', 0, '2015-04-05 08:49:33'),
(4, 'admin', 'jeneesh@gmail.com', 'finish', 'haiiii i like it', 0, '2015-04-05 08:51:06'),
(5, 'jeneesh@gmail.com', 'admin', 'hello', 'Myaccc', 0, '2015-04-05 08:54:45'),
(6, 'aneesh@gmail.com', 'admin', 'check', 'How are you', 0, '2015-04-05 08:56:09'),
(7, 'jethin@gmail.com', 'admin', 'iam', 'Fine', 1, '2015-04-05 08:56:43');

-- --------------------------------------------------------

--
-- Table structure for table `mapping`
--

CREATE TABLE IF NOT EXISTS `mapping` (
  `no` int(15) NOT NULL,
  `tm` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mapping`
--

INSERT INTO `mapping` (`no`, `tm`) VALUES
(0, '12:00 am'),
(1, '12:30 am'),
(2, '1:00 am'),
(3, '1:30 am'),
(4, '2:00 am'),
(5, '2:30 am'),
(6, '3:00 am'),
(7, '3:30 am'),
(8, '4:00 am'),
(9, '4:30 am'),
(10, '5:00 am'),
(11, '5:30 am'),
(12, '6:00 am'),
(13, '6:30 am'),
(14, '7:00 am'),
(15, '7:30 am'),
(16, '8:00 am'),
(17, '8:30 am'),
(18, '9:00am'),
(19, '9:30 am'),
(20, '10:00 am'),
(21, '10:30 am'),
(22, '11:00 am'),
(23, '11:30 am'),
(24, '12:00 pm'),
(25, '12:30 pm'),
(26, '1:00 pm'),
(27, '1:30 pm'),
(28, '2:00 pm'),
(29, '2:30 pm'),
(37, '6:30 pm'),
(36, '6:00 pm'),
(30, '3:00 pm'),
(31, '3:30 pm'),
(32, '4:00 pm'),
(33, '4:30 pm'),
(34, '5:00 pm'),
(35, '5:30 pm'),
(38, '7:00 pm'),
(39, '7:30 pm'),
(40, '8:00 pm'),
(41, '8:30 pm'),
(42, '9:00 pm'),
(43, '9:30 pm'),
(44, '10:00 pm'),
(45, '10:30 pm'),
(46, '11:00 pm'),
(47, '11:30 pm');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `username` varchar(35) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(25) NOT NULL,
  `type` varchar(5) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`username`, `password`, `email`, `type`) VALUES
('admin', 'admin', 'admin', 'admin'),
('gmknr001', 'gmknr001', 'gmknr001@gmail.com', 'gm'),
('jeneesh', 'jeneesh', 'jeneesh@gmail.com', 'user'),
('gmknr002', 'gmknr002', 'gmknr002@gmail.com', 'gm'),
('gmtly001', 'gmtly001', 'gmtly002@gmail.com', 'gm'),
('gmtly002', 'gmtly002', 'gmtly002@gmail.com', 'gm'),
('aneesh', 'aneesh', 'aneesh@gmail.com', 'user'),
('jethin', 'passme', 'jethin@gmail.com', 'user'),
('vineeth', 'vineeth', 'vineeth@gmail.com', 'user'),
('ashwant', 'ashwant', 'ashwant@gmail.com', 'user'),
('', '', '', 'user');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
