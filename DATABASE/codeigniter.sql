-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2022 at 06:40 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codeigniter`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `vmodel` varchar(250) NOT NULL,
  `vnumber` varchar(100) NOT NULL,
  `seat` int(20) NOT NULL,
  `rent` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `vmodel`, `vnumber`, `seat`, `rent`) VALUES
(1, '1', '1', 1, 1),
(5, '2', '2', 1, 1),
(21, 'amr', '123', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_agency`
--

CREATE TABLE `tbl_agency` (
  `sno` int(200) NOT NULL,
  `agencyname` varchar(200) NOT NULL,
  `contact` int(20) NOT NULL,
  `aemail` varchar(50) NOT NULL,
  `apassword` varchar(500) NOT NULL,
  `city` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_agency`
--

INSERT INTO `tbl_agency` (`sno`, `agencyname`, `contact`, `aemail`, `apassword`, `city`) VALUES
(1, 'agency', 34, 'agency@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Pune'),
(2, 'agency', 34, 'agency@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Pune'),
(3, '', 234, 'agency@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Pune'),
(4, '', 0, '', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', ''),
(5, 'agency', 345, 'agency@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Pune'),
(6, 'agency', 0, 'agency@gmail.com', '356a192b7913b04c54574d18c28d46e6395428ab', ''),
(7, '', 0, '', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', ''),
(8, 'agency123', 123, 'a@gmail.com', '356a192b7913b04c54574d18c28d46e6395428ab', 'Chennai'),
(9, 'agency123', 123, 'a@gmail.com', '356a192b7913b04c54574d18c28d46e6395428ab', 'Bangalore'),
(10, 'agency123', 123, 'a@gmail.com', '356a192b7913b04c54574d18c28d46e6395428ab', 'Bangalore');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `sno` int(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `contact` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL,
  `city` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`sno`, `username`, `gender`, `contact`, `email`, `password`, `city`) VALUES
(38, '', '', 0, '', '356a192b7913b04c54574d18c28d46e6395428ab', ''),
(39, '', '', 0, '', 'a0f1490a20d0211c997b44bc357e1972deab8ae3', ''),
(40, '', '', 0, '', 'da4b9237bacccdf19c0760cab7aec4a8359010b0', ''),
(41, '', '', 0, '', '356a192b7913b04c54574d18c28d46e6395428ab', ''),
(42, '', '', 0, '', '356a192b7913b04c54574d18c28d46e6395428ab', ''),
(43, '', '', 0, '', '356a192b7913b04c54574d18c28d46e6395428ab', ''),
(44, '', '', 0, '', '356a192b7913b04c54574d18c28d46e6395428ab', ''),
(45, '', '', 0, 'user@gmail.com', '123', ''),
(46, 'AMRESH', '', 123, 'user@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Pune'),
(47, '', '', 0, '', '356a192b7913b04c54574d18c28d46e6395428ab', ''),
(48, '', '', 0, '', '356a192b7913b04c54574d18c28d46e6395428ab', ''),
(49, '', '', 0, '', '356a192b7913b04c54574d18c28d46e6395428ab', ''),
(50, '', '', 0, '', '356a192b7913b04c54574d18c28d46e6395428ab', ''),
(51, '', '', 0, '', '356a192b7913b04c54574d18c28d46e6395428ab', ''),
(52, 'AMRESH', '', 0, '', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', ''),
(53, 'AMRESH', '', 0, '', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', ''),
(54, 'AMRESH', '', 0, '', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', ''),
(55, '', '', 0, '', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', ''),
(56, '', '', 0, '', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', ''),
(57, '', '', 0, '', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', ''),
(58, '', '', 0, '', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', ''),
(59, '', '', 0, 'user@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', ''),
(60, '', '', 0, 'user@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', ''),
(61, '', '', 0, 'user@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`vnumber`);

--
-- Indexes for table `tbl_agency`
--
ALTER TABLE `tbl_agency`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_agency`
--
ALTER TABLE `tbl_agency`
  MODIFY `sno` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `sno` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
