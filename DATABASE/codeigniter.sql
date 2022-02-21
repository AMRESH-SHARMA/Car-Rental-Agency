-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2022 at 03:01 PM
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
-- Table structure for table `booked`
--

CREATE TABLE `booked` (
  `sno` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL,
  `day` int(11) NOT NULL,
  `vnumber` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booked`
--

INSERT INTO `booked` (`sno`, `email`, `date`, `day`, `vnumber`) VALUES
(1, 'user1@gmail.com', '2022-02-20', 12, '12'),
(2, 'user1@gmail.com', '2022-02-20', 12, '12'),
(3, 'user1@gmail.com', '2022-02-20', 12, '12'),
(4, 'user1@gmail.com', '2022-02-20', 12, '12'),
(5, 'user1@gmail.com', '2022-02-20', 1234, '1234'),
(6, 'user1@gmail.com', '2022-02-20', 999, '999'),
(7, 'user1@gmail.com', '2022-02-20', 500, '500'),
(13, 'user1@gmail.com', '2022-02-20', 12, 'UP78 13822'),
(14, 'user1@gmail.com', '2022-02-21', 211, '211'),
(15, 'user1@gmail.com', '2022-02-20', 3996, 'UP78 13822'),
(16, 'user1@gmail.com', '2022-02-22', 12321, '0'),
(17, 'user1@gmail.com', '2022-02-28', 3000, 'upyy'),
(18, 'user1@gmail.com', '2022-02-20', 200, 'upyy'),
(19, 'user1@gmail.com', '2022-02-20', 69, 'UP78 13822'),
(20, 'user1@gmail.com', '2022-02-21', 121212, 'UP78 13822'),
(21, 'user1@gmail.com', '2022-03-01', 7, 'UP78 13822');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `vnumber` varchar(200) NOT NULL,
  `vmodel` varchar(250) NOT NULL,
  `seat` int(20) NOT NULL,
  `rent` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `vnumber`, `vmodel`, `seat`, `rent`) VALUES
(17, 'UP78 13822', 'AF LOTT', 12, 4999),
(18, 'MP 4563', 'YAKLISTO V12', 9, 600),
(19, 'MP ZZ202', 'BRACENOLOVA', 5, 68969);

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
(1, 'AGENCY1', 9191, 'agency1@gmail.com', '1', 'KANPUR'),
(2, 'AGENCY2', 9292, 'agency2@gmail.com', '2', 'Delhi'),
(3, 'AGENCY3', 9393, 'agency3@gmail.com', '3', 'PUNE');

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
(1, 'USER1', 'female', 8181, 'user1@gmail.com', '1', 'OTHERS'),
(2, 'USER2', 'female', 8282, 'user2@gmail.com', '2', 'BANGALORE'),
(3, 'USER3', 'male', 8383, 'user3@gmail.com', '3', 'MUMBAI');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booked`
--
ALTER TABLE `booked`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `booked`
--
ALTER TABLE `booked`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_agency`
--
ALTER TABLE `tbl_agency`
  MODIFY `sno` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `sno` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
