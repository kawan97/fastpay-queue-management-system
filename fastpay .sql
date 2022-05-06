-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 06, 2022 at 06:44 PM
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
  `time` varchar(10) NOT NULL,
  `pincode` varchar(19) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `serviceid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=77 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `time`, `pincode`, `date`, `serviceid`, `name`) VALUES
(72, '11:51', '8984', '2022-04-22', 286, 'kawan'),
(73, '12:23', '3703', '2022-05-06', 327, 'kawan'),
(74, '12:23', '2046', '2022-05-06', 328, 'kawan'),
(75, '13:23', '771', '2022-05-06', 329, 'kawan pshtiwan'),
(76, '15:25', '9435', '2022-05-06', 330, 'dana');

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
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`id`, `name`, `phone`, `address`, `date`, `serviceid`) VALUES
(18, 'kawan', '7710257172', 'jjjjj', '2022-04-17', 231),
(19, 'kawan pshtiwan', '7704569874', 'raparin gulan  89', '2022-04-19', 277),
(20, 'kawan pshtiwan', '7706442134', 'raparin gulan  89', '2022-04-19', 278),
(21, 'kawan pshtiwan', '7706442134', 'raparin gulan  89', '2022-04-22', 279),
(22, 'kawan pshtiwan', '7706442134', 'raparin gulan  89', '2022-05-06', 322),
(23, 'kawan pshtiwan', '7706442134', 'raparin gulan  89', '2022-05-06', 323),
(24, 'kawan pshtiwan', '7706442134', 'raparin gulan  89', '2022-05-06', 324),
(25, 'kawan pshtiwan', '7706442134', 'raparin gulan  89', '2022-05-06', 325),
(26, 'kawan pshtiwan', '7706442134', 'raparin gulan  89', '2022-05-06', 326);

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
) ENGINE=MyISAM AUTO_INCREMENT=208 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sequencenumber`
--

INSERT INTO `sequencenumber` (`id`, `number`, `serviceid`, `date`) VALUES
(121, 13, 230, '2022-04-17'),
(120, 12, 229, '2022-04-17'),
(119, 11, 228, '2022-04-17'),
(118, 10, 227, '2022-04-17'),
(117, 9, 226, '2022-04-17'),
(116, 8, 225, '2022-04-17'),
(115, 7, 224, '2022-04-17'),
(114, 6, 223, '2022-04-17'),
(113, 5, 222, '2022-04-17'),
(112, 4, 221, '2022-04-17'),
(111, 3, 220, '2022-04-17'),
(110, 2, 219, '2022-04-17'),
(109, 1, 218, '2022-04-17'),
(122, 1, 232, '2022-04-19'),
(123, 2, 233, '2022-04-19'),
(124, 3, 234, '2022-04-19'),
(125, 4, 235, '2022-04-19'),
(126, 5, 236, '2022-04-19'),
(127, 6, 237, '2022-04-19'),
(128, 7, 238, '2022-04-19'),
(129, 8, 239, '2022-04-19'),
(130, 9, 240, '2022-04-19'),
(131, 10, 241, '2022-04-19'),
(132, 11, 242, '2022-04-19'),
(133, 12, 243, '2022-04-19'),
(134, 13, 244, '2022-04-19'),
(135, 14, 245, '2022-04-19'),
(136, 15, 246, '2022-04-19'),
(137, 16, 247, '2022-04-19'),
(138, 17, 248, '2022-04-19'),
(139, 18, 249, '2022-04-19'),
(140, 19, 250, '2022-04-19'),
(141, 20, 251, '2022-04-19'),
(142, 21, 252, '2022-04-19'),
(143, 22, 253, '2022-04-19'),
(144, 23, 254, '2022-04-19'),
(145, 24, 255, '2022-04-19'),
(146, 25, 256, '2022-04-19'),
(147, 26, 257, '2022-04-19'),
(148, 27, 258, '2022-04-19'),
(149, 28, 259, '2022-04-19'),
(150, 29, 260, '2022-04-19'),
(151, 30, 261, '2022-04-19'),
(152, 31, 262, '2022-04-19'),
(153, 32, 263, '2022-04-19'),
(154, 33, 264, '2022-04-19'),
(155, 34, 265, '2022-04-19'),
(156, 35, 266, '2022-04-19'),
(157, 36, 267, '2022-04-19'),
(158, 37, 268, '2022-04-19'),
(159, 38, 269, '2022-04-19'),
(160, 39, 270, '2022-04-19'),
(161, 40, 271, '2022-04-19'),
(162, 41, 272, '2022-04-19'),
(163, 42, 273, '2022-04-19'),
(164, 43, 274, '2022-04-19'),
(165, 44, 275, '2022-04-19'),
(166, 45, 276, '2022-04-19'),
(167, 1, 280, '2022-04-22'),
(168, 2, 281, '2022-04-22'),
(169, 3, 282, '2022-04-22'),
(170, 4, 283, '2022-04-22'),
(171, 5, 284, '2022-04-22'),
(172, 6, 285, '2022-04-22'),
(173, 7, 287, '2022-04-22'),
(174, 8, 288, '2022-04-22'),
(175, 9, 289, '2022-04-22'),
(176, 10, 290, '2022-04-22'),
(177, 1, 291, '2022-05-06'),
(178, 2, 292, '2022-05-06'),
(179, 3, 293, '2022-05-06'),
(180, 4, 294, '2022-05-06'),
(181, 5, 295, '2022-05-06'),
(182, 6, 296, '2022-05-06'),
(183, 7, 297, '2022-05-06'),
(184, 8, 298, '2022-05-06'),
(185, 9, 299, '2022-05-06'),
(186, 10, 300, '2022-05-06'),
(187, 11, 301, '2022-05-06'),
(188, 12, 302, '2022-05-06'),
(189, 13, 303, '2022-05-06'),
(190, 14, 304, '2022-05-06'),
(191, 15, 305, '2022-05-06'),
(192, 16, 306, '2022-05-06'),
(193, 17, 307, '2022-05-06'),
(194, 18, 308, '2022-05-06'),
(195, 19, 309, '2022-05-06'),
(196, 20, 310, '2022-05-06'),
(197, 21, 311, '2022-05-06'),
(198, 22, 312, '2022-05-06'),
(199, 23, 313, '2022-05-06'),
(200, 24, 314, '2022-05-06'),
(201, 25, 315, '2022-05-06'),
(202, 26, 316, '2022-05-06'),
(203, 27, 317, '2022-05-06'),
(204, 28, 318, '2022-05-06'),
(205, 29, 319, '2022-05-06'),
(206, 30, 320, '2022-05-06'),
(207, 31, 321, '2022-05-06');

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
) ENGINE=MyISAM AUTO_INCREMENT=331 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `typeid`, `status`, `date`, `subtypeid`) VALUES
(218, 2, 'finished', '2022-04-17', 1),
(219, 2, 'finished', '2022-04-17', 1),
(220, 2, 'finished', '2022-04-17', 1),
(221, 2, 'finished', '2022-04-17', 2),
(222, 2, 'finished', '2022-04-17', 2),
(223, 2, 'finished', '2022-04-17', 1),
(224, 2, 'pinding', '2022-04-17', 3),
(225, 2, 'pinding', '2022-04-17', 4),
(226, 2, 'pinding', '2022-04-17', 4),
(227, 2, 'pinding', '2022-04-17', 3),
(228, 2, 'pinding', '2022-04-17', 1),
(229, 2, 'pinding', '2022-04-17', 2),
(230, 2, 'pinding', '2022-04-17', 3),
(231, 1, 'pinding', '2022-04-17', 1),
(232, 2, 'finished', '2022-04-19', 1),
(233, 2, 'finished', '2022-04-19', 2),
(234, 2, 'finished', '2022-04-19', 1),
(235, 2, 'finished', '2022-04-19', 4),
(236, 2, 'finished', '2022-04-19', 1),
(237, 2, 'finished', '2022-04-19', 2),
(238, 2, 'finished', '2022-04-19', 1),
(239, 2, 'finished', '2022-04-19', 1),
(240, 2, 'finished', '2022-04-19', 1),
(241, 2, 'finished', '2022-04-19', 3),
(242, 2, 'finished', '2022-04-19', 1),
(243, 2, 'finished', '2022-04-19', 2),
(244, 2, 'finished', '2022-04-19', 3),
(245, 2, 'finished', '2022-04-19', 1),
(246, 2, 'finished', '2022-04-19', 1),
(247, 2, 'finished', '2022-04-19', 1),
(248, 2, 'finished', '2022-04-19', 1),
(249, 2, 'finished', '2022-04-19', 2),
(250, 2, 'finished', '2022-04-19', 1),
(251, 2, 'finished', '2022-04-19', 2),
(252, 2, 'finished', '2022-04-19', 2),
(253, 2, 'finished', '2022-04-19', 2),
(254, 2, 'finished', '2022-04-19', 2),
(255, 2, 'finished', '2022-04-19', 2),
(256, 2, 'finished', '2022-04-19', 1),
(257, 2, 'finished', '2022-04-19', 1),
(258, 2, 'finished', '2022-04-19', 2),
(259, 2, 'finished', '2022-04-19', 1),
(260, 2, 'finished', '2022-04-19', 1),
(261, 2, 'finished', '2022-04-19', 2),
(262, 2, 'finished', '2022-04-19', 3),
(263, 2, 'finished', '2022-04-19', 4),
(264, 2, 'finished', '2022-04-19', 2),
(265, 2, 'finished', '2022-04-19', 2),
(266, 2, 'finished', '2022-04-19', 2),
(267, 2, 'finished', '2022-04-19', 2),
(268, 2, 'finished', '2022-04-19', 2),
(269, 2, 'finished', '2022-04-19', 1),
(270, 2, 'finished', '2022-04-19', 1),
(271, 2, 'finished', '2022-04-19', 3),
(272, 2, 'finished', '2022-04-19', 3),
(273, 2, 'finished', '2022-04-19', 4),
(274, 2, 'finished', '2022-04-19', 1),
(275, 2, 'finished', '2022-04-19', 1),
(276, 2, 'pinding', '2022-04-19', 1),
(277, 1, 'finished', '2022-04-19', 1),
(278, 1, 'pinding', '2022-04-19', 1),
(279, 1, 'pinding', '2022-04-22', 0),
(280, 2, 'pinding', '2022-04-22', 0),
(281, 2, 'pinding', '2022-04-22', 0),
(282, 2, 'pinding', '2022-04-22', 0),
(283, 2, 'pinding', '2022-04-22', 0),
(284, 2, 'pinding', '2022-04-22', 0),
(285, 2, 'pinding', '2022-04-22', 4),
(286, 3, 'pinding', '2022-04-22', 0),
(287, 2, 'pinding', '2022-04-22', 0),
(288, 2, 'pinding', '2022-04-22', 0),
(289, 2, 'pinding', '2022-04-22', 0),
(290, 2, 'pinding', '2022-04-22', 0),
(291, 2, 'finished', '2022-05-06', 0),
(292, 2, 'finished', '2022-05-06', 0),
(293, 2, 'finished', '2022-05-06', 0),
(294, 2, 'finished', '2022-05-06', 1),
(295, 2, 'finished', '2022-05-06', 0),
(296, 2, 'finished', '2022-05-06', 0),
(297, 2, 'finished', '2022-05-06', 0),
(298, 2, 'finished', '2022-05-06', 0),
(299, 2, 'finished', '2022-05-06', 0),
(300, 2, 'finished', '2022-05-06', 0),
(301, 2, 'finished', '2022-05-06', 0),
(302, 2, 'finished', '2022-05-06', 0),
(303, 2, 'finished', '2022-05-06', 0),
(304, 2, 'finished', '2022-05-06', 0),
(305, 2, 'finished', '2022-05-06', 0),
(306, 2, 'finished', '2022-05-06', 1),
(307, 2, 'finished', '2022-05-06', 0),
(308, 2, 'finished', '2022-05-06', 1),
(309, 2, 'finished', '2022-05-06', 1),
(310, 2, 'finished', '2022-05-06', 1),
(311, 2, 'finished', '2022-05-06', 1),
(312, 2, 'finished', '2022-05-06', 1),
(313, 2, 'finished', '2022-05-06', 0),
(314, 2, 'finished', '2022-05-06', 0),
(315, 2, 'finished', '2022-05-06', 0),
(316, 2, 'finished', '2022-05-06', 1),
(317, 2, 'finished', '2022-05-06', 2),
(318, 2, 'finished', '2022-05-06', 3),
(319, 2, 'finished', '2022-05-06', 3),
(320, 2, 'finished', '2022-05-06', 3),
(321, 2, 'finished', '2022-05-06', 4),
(322, 1, 'pinding', '2022-05-06', 1),
(323, 1, 'pinding', '2022-05-06', 1),
(324, 1, 'pinding', '2022-05-06', 2),
(325, 1, 'pinding', '2022-05-06', 3),
(326, 1, 'pinding', '2022-05-06', 4),
(327, 3, 'pinding', '2022-05-06', 1),
(328, 3, 'pinding', '2022-05-06', 2),
(329, 3, 'pinding', '2022-05-06', 3),
(330, 3, 'pinding', '2022-05-06', 4);

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

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'kawa', '1234'),
(2, 'diako', '1234');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
