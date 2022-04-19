-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2022 at 10:07 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `time` varchar(10) NOT NULL,
  `pincode` varchar(19) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `serviceid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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

CREATE TABLE `delivery` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `serviceid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`id`, `name`, `phone`, `address`, `date`, `serviceid`) VALUES
(18, 'kawan', '7710257172', 'jjjjj', '2022-04-17', 231);

-- --------------------------------------------------------

--
-- Table structure for table `sequencenumber`
--

CREATE TABLE `sequencenumber` (
  `id` int(11) NOT NULL,
  `number` int(15) NOT NULL,
  `serviceid` int(10) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
(109, 1, 218, '2022-04-17');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `typeid` int(10) NOT NULL,
  `status` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `subtypeid` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
(231, 1, 'pinding', '2022-04-17', 1);

-- --------------------------------------------------------

--
-- Table structure for table `subtype`
--

CREATE TABLE `subtype` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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

CREATE TABLE `type` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'kawa', '1234'),
(2, 'diako', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sequencenumber`
--
ALTER TABLE `sequencenumber`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subtype`
--
ALTER TABLE `subtype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `sequencenumber`
--
ALTER TABLE `sequencenumber`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=232;

--
-- AUTO_INCREMENT for table `subtype`
--
ALTER TABLE `subtype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
