-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2026 at 04:51 AM
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
-- Database: `authentication`
--

-- --------------------------------------------------------

--
-- Table structure for table `orderhistory`
--

CREATE TABLE `orderhistory` (
  `orderID` int(11) NOT NULL,
  `userEmail` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `totalAmount` decimal(10,2) NOT NULL,
  `paymentMethod` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orderhistory`
--

INSERT INTO `orderhistory` (`orderID`, `userEmail`, `address`, `totalAmount`, `paymentMethod`) VALUES
(1, 'akil@gmail.com', 'dhaka', 125.00, 'Cash on Delivery'),
(2, 'akil@gmail.com', 'Kuril', 665.00, 'Cash on Delivery'),
(4, 'Sadid@email', 'Kuratoli', 185.00, 'Cash on Delivery'),
(5, 'mdparveahmedpappu@gmail.com', 'Gazipur', 185.00, 'Cash on Delivery'),
(6, 'akil@gmail.com', 'Dhaka', 165.00, 'Cash on Delivery'),
(8, 'Sadid@email', 'Basundhara', 265.00, 'Cash on Delivery'),
(9, 'akil@gmail.com', 'wari', 325.00, 'Cash on Delivery'),
(10, 'akil@gmail.com', 'qq', 325.00, 'Cash on Delivery'),
(11, 'mdparveahmedpappu@gmail.com', 'Dhaka', 265.00, 'Cash on Delivery'),
(12, 'Sadid@email', 'kuril', 325.00, 'Cash on Delivery'),
(13, 'mdparveahmedpappu@gmail.com', 'Gazipir', 205.00, 'Cash on Delivery');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orderhistory`
--
ALTER TABLE `orderhistory`
  ADD PRIMARY KEY (`orderID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orderhistory`
--
ALTER TABLE `orderhistory`
  MODIFY `orderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
