-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2020 at 12:09 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wesal_bd`
--

-- --------------------------------------------------------

--
-- Table structure for table `check_hand`
--

CREATE TABLE `check_hand` (
  `id` int(11) NOT NULL,
  `hands` varchar(30) NOT NULL,
  `add_hand` varchar(30) DEFAULT NULL,
  `count_hand` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `check_hand`
--

INSERT INTO `check_hand` (`id`, `hands`, `add_hand`, `count_hand`) VALUES
(1, 'ام القرى', 'جده', 3),
(2, 'مكتب التعليم', 'جده', 4),
(3, 'مركز اسعاد', 'جده', 7),
(4, 'اماراه العاصمه المقدسه', 'جده', 9),
(5, 'وزاره الحج والعمره', 'جده', 2),
(9, 'جامعه سعود', 'رياص', 6);

-- --------------------------------------------------------

--
-- Table structure for table `login_member`
--

CREATE TABLE `login_member` (
  `id` int(11) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `trinig_num` int(10) NOT NULL,
  `specialty` varchar(10) NOT NULL,
  `password_mt` varchar(10) NOT NULL,
  `password_emp` varchar(10) NOT NULL,
  `avrag` float NOT NULL,
  `phone_num` int(11) NOT NULL,
  `Place` varchar(10) NOT NULL,
  `yse_no` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login_member`
--

INSERT INTO `login_member` (`id`, `fullname`, `trinig_num`, `specialty`, `password_mt`, `password_emp`, `avrag`, `phone_num`, `Place`, `yse_no`) VALUES
(16, 'abdalmalik', 77700, 'it', '12345', '12345', 88, 7777299, 'sanaa', ''),
(17, 'magd', 2244, 'it', '12345', '12345', 89, 77777, 'sanaa', '');

-- --------------------------------------------------------

--
-- Table structure for table `login_mn`
--

CREATE TABLE `login_mn` (
  `id` int(11) NOT NULL,
  `users` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login_mn`
--

INSERT INTO `login_mn` (`id`, `users`, `password`) VALUES
(1, 'wesal', 'wesal');

-- --------------------------------------------------------

--
-- Table structure for table `member_hand`
--

CREATE TABLE `member_hand` (
  `id` int(10) NOT NULL,
  `id_member` int(10) NOT NULL,
  `id_hand` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `id_trining` int(11) NOT NULL,
  `id_hand` int(11) NOT NULL,
  `state` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `id_trining`, `id_hand`, `state`) VALUES
(23, 16, 3, 1),
(26, 17, 5, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `check_hand`
--
ALTER TABLE `check_hand`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`,`hands`);

--
-- Indexes for table `login_member`
--
ALTER TABLE `login_member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_mn`
--
ALTER TABLE `login_mn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member_hand`
--
ALTER TABLE `member_hand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `check_hand`
--
ALTER TABLE `check_hand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `login_member`
--
ALTER TABLE `login_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `login_mn`
--
ALTER TABLE `login_mn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `member_hand`
--
ALTER TABLE `member_hand`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
