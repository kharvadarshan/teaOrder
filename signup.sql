-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2024 at 09:01 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `signup`
--

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `item_id` int(20) NOT NULL,
  `itemName` varchar(30) DEFAULT NULL,
  `price` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_id`, `itemName`, `price`) VALUES
(1, 'Masala Tea', 15),
(2, 'Ginger Tea', 20),
(3, 'Regular Tea', 10),
(4, 'Phudina Tea', 22),
(5, 'Green Tea', 30),
(6, 'Herble Tea', 25);

-- --------------------------------------------------------

--
-- Table structure for table `itemorder`
--

CREATE TABLE `itemorder` (
  `num` int(20) NOT NULL,
  `item_id` varchar(20) NOT NULL,
  `itemName` varchar(20) NOT NULL,
  `quantity` int(20) NOT NULL,
  `price` float NOT NULL,
  `subTotal` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `itemorder`
--

INSERT INTO `itemorder` (`num`, `item_id`, `itemName`, `quantity`, `price`, `subTotal`) VALUES
(47, '2', 'Ginger Tea', 5, 20, 100),
(55, '5', 'Green Tea', 7, 25, 175),
(56, '4', 'Phudina Tea', 7, 22, 154),
(57, '5', 'Green Tea', 0, 25, 0),
(58, '5', 'Green Tea', 7, 25, 175);

-- --------------------------------------------------------

--
-- Table structure for table `orderplace`
--

CREATE TABLE `orderplace` (
  `o_id` int(20) NOT NULL,
  `c_id` int(20) NOT NULL,
  `time` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `toatalAmount` float NOT NULL,
  `phone` int(10) DEFAULT NULL,
  `nearAddress` varchar(50) DEFAULT NULL,
  `Address` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orderplace`
--

INSERT INTO `orderplace` (`o_id`, `c_id`, `time`, `toatalAmount`, `phone`, `nearAddress`, `Address`) VALUES
(18, 1, '2024-04-20 00:48:13.000000', 300, NULL, NULL, NULL),
(19, 1, '2024-04-20 04:21:13.942687', 300, 0, 'gssgsfsfsfg', 'dfdgaga'),
(20, 1, '2024-04-20 05:06:27.163118', 432, 2147483647, 'vvrgbg', 'dwfee'),
(24, 1, '2024-04-23 20:12:30.121466', 429, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE `userdetails` (
  `c_id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` int(30) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`c_id`, `name`, `email`, `phone`, `password`) VALUES
(1, 'mahesh parmar', 'mah32@gmail.com', 2147483647, 'mah@3232'),
(2, 'shubham patil', 'shubham12@gmail.com', 2147483647, 'shubham@1212'),
(3, 'dhaval sharma', 'dahvalsharma1@gmail.com', 2147483647, 'dhaval@123'),
(4, 'abhay sharma', 'abh21@gmail.com', 2147483647, 'a2b1h@'),
(5, 'narendra', 'n9@gmail.com', 2147483647, 'n@22015');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `itemorder`
--
ALTER TABLE `itemorder`
  ADD PRIMARY KEY (`num`);

--
-- Indexes for table `orderplace`
--
ALTER TABLE `orderplace`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `userdetails`
--
ALTER TABLE `userdetails`
  ADD PRIMARY KEY (`c_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `item_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `itemorder`
--
ALTER TABLE `itemorder`
  MODIFY `num` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `orderplace`
--
ALTER TABLE `orderplace`
  MODIFY `o_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `userdetails`
--
ALTER TABLE `userdetails`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
