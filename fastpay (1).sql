-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 12, 2022 at 12:41 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fastpay`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE IF NOT EXISTS `booking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `time` int(10) NOT NULL,
  `pincode` varchar(19) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `serviceid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `time`, `pincode`, `date`, `serviceid`) VALUES
(2, 13, '119988609933207', '2022-04-12', 50),
(3, 13, '697193251956885', '2022-04-12', 51),
(4, 13, '500385402261156', '2022-04-12', 52),
(5, 13, '678162946544155', '2022-04-12', 53),
(6, 13, '339882556846995', '2022-04-12', 54);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'kawan pshtiwan', 'pshtiwankawan@gmail.com', 'dddddddd', 'aaaaaaaaa'),
(2, 'kawan pshtiwan', 'pshtiwankawan@gmail.com', 'das', 'dsadsa'),
(3, 'kawan pshtiwan', 'pshtiwankawan@gmail.com', 'hfhg', 'jkkj'),
(4, 'kawan pshtiwan', 'pshtiwankawan@gmail.com', 'das', 'dasdsa'),
(5, 'dana', 'admin@admin.com', 'form body', 'my message'),
(6, 'kawan', 'pshtiwankawan@gmail.com', 'das', 'dsada'),
(7, 'kawan pshtiwan', 'pshtiwankawan@gmail.com', 'gdfg', 'gdfg'),
(8, 'kawan', 'pshtiwankawan@gmail.com', 'ff', 'from delivery'),
(9, 'kawan', 'pshtiwankawan@gmail.com', 'khjkhj', 'sas'),
(10, 'aaaaa', 'kawan.pshtiwan@yahoo.com', 'gggggg', 'eeeeeee'),
(11, 'kawan pshtiwan', 'pshtiwankawan@gmail.com', 'khj', 'from booking'),
(12, 'kawan pshtiwan', 'pshtiwankawan@gmail.com', 'hfhg', 'ghfhf'),
(13, 'kawan pshtiwan', 'pshtiwankawan@gmail.com', 'ff', 'fdsfdsf');

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

DROP TABLE IF EXISTS `delivery`;
CREATE TABLE IF NOT EXISTS `delivery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `serviceid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`id`, `name`, `phone`, `address`, `date`, `serviceid`) VALUES
(4, 'kawan pshtiwan', '7706994444', 'raparin gulan  89', '2022-04-12', 34),
(5, 'kawan ', '7704775540', 'raparin ', '2022-04-12', 35),
(6, 'kawan pshtiwan', '7774445522', 'raparin gulan  89', '2022-04-12', 36),
(7, 'kawan pshtiwan', '7706994420', 'raparin gulan  89', '2022-04-12', 37),
(8, 'kawan pshtiwan', '7704441111', 'raparin gulan  89', '2022-04-12', 38),
(9, 'kawan pshtiwan', '7706994420', 'raparin gulan  89', '2022-04-12', 55);

-- --------------------------------------------------------

--
-- Table structure for table `sequencenumber`
--

DROP TABLE IF EXISTS `sequencenumber`;
CREATE TABLE IF NOT EXISTS `sequencenumber` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `number` int(15) NOT NULL,
  `serviceid` int(10) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sequencenumber`
--

INSERT INTO `sequencenumber` (`id`, `number`, `serviceid`, `date`) VALUES
(22, 4, 49, '2022-04-12'),
(21, 3, 48, '2022-04-12'),
(20, 2, 47, '2022-04-12'),
(19, 1, 46, '2022-04-12');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

DROP TABLE IF EXISTS `service`;
CREATE TABLE IF NOT EXISTS `service` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `typeid` int(10) NOT NULL,
  `status` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `subtypeid` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=56 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `typeid`, `status`, `date`, `subtypeid`) VALUES
(55, 1, 'pinding', '2022-04-12', 1),
(54, 3, 'pinding', '2022-04-12', 4),
(53, 3, 'pinding', '2022-04-12', 3),
(52, 3, 'pinding', '2022-04-12', 2),
(51, 3, 'pinding', '2022-04-12', 1),
(50, 3, 'pinding', '2022-04-12', 1),
(49, 2, 'pinding', '2022-04-12', 4),
(48, 2, 'pinding', '2022-04-12', 3),
(47, 2, 'pinding', '2022-04-12', 2),
(46, 2, 'pinding', '2022-04-12', 1),
(38, 1, 'pinding', '2022-04-12', 1),
(37, 1, 'pinding', '2022-04-12', 4),
(36, 1, 'pinding', '2022-04-12', 3),
(35, 1, 'pinding', '2022-04-12', 2),
(34, 1, 'pinding', '2022-04-12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `subtype`
--

DROP TABLE IF EXISTS `subtype`;
CREATE TABLE IF NOT EXISTS `subtype` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subtype`
--

INSERT INTO `subtype` (`id`, `name`) VALUES
(1, 'balance'),
(2, 'internet service'),
(3, 'service issue'),
(4, 'mytv+');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

DROP TABLE IF EXISTS `type`;
CREATE TABLE IF NOT EXISTS `type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id`, `name`) VALUES
(1, 'delivery '),
(2, 'showroom '),
(3, 'booking');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
