-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2026 at 08:55 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(75) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Name`, `Email`, `Password`) VALUES
('Parvez', 'mdparveahmedpappu@gmail.com', 'pappu');

-- --------------------------------------------------------

--
-- Table structure for table `allproducts`
--

CREATE TABLE `allproducts` (
  `productID` int(11) NOT NULL,
  `productName` varchar(40) NOT NULL,
  `category` varchar(40) NOT NULL,
  `price` double NOT NULL,
  `stock` int(11) NOT NULL,
  `status` varchar(25) NOT NULL,
  `image` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `allproducts`
--

INSERT INTO `allproducts` (`productID`, `productName`, `category`, `price`, `stock`, `status`, `image`) VALUES
(5, 'Tomato', 'Veg', 100, 15, 'Acitve', 0x313736373239373532382e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Name`, `Email`, `Password`) VALUES
('Pappu', 'Pappu@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `farmer`
--

CREATE TABLE `farmer` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `farmer`
--

INSERT INTO `farmer` (`Name`, `Email`, `Address`, `Password`, `Role`) VALUES
('dddddddddd', 'ddddd@gmail.com', 'dhakad', 'dd', 'Farmer'),
('ddddddddddd', 'dddddddddddddddd@gmaill.comd', 'ddd', 'dd', 'Farmer'),
('dddddddddddd', 'ddddddddddddddddd@gmaill.comd', 'ddd', 'dd', 'Farmer'),
('ddddddddddddd', 'dddddddddddddddddd@gmaill.comd', 'ddd', 'dd', 'Farmer'),
('ddddddddddddd', 'ddddddddddddddddddd@gmaill.comd', 'ddd', 'dd', 'Farmer'),
('ddddddddddddd', 'dddddddddddddddddddd@gmaill.comd', 'ddd', 'dd', 'Farmer'),
('Farmer_Parvez', 'Farmer_Parvez@gmailcom', 'dhaka', 'farmer', 'Farmer'),
('Parvez Pappu', 'mddpadrddddvdedafhmedpappu@gmail.com', 'dhakad', 'd', 'Farmer'),
('Parvez Pappu', 'mddpadrdddvdedafhmedpappu@gmail.com', 'dhakad', 'd', 'Farmer'),
('Parvez Pappu', 'mdpadrdddvdedafhmedpappu@gmail.com', 'dhakad', 'd', 'Farmer'),
('Parvez Pappu', 'mdparddvdedafhmedpappu@gmail.com', 'dhakad', 'd', 'Farmer'),
('Parvez Pappu', 'mdpardvdedafhmedpappu@gmail.com', 'dhakad', 'd', 'Farmer'),
('Parvez Pappu', 'mdpardveafhmedpappu@gmail.com', 'dhakad', 'd', 'Farmer'),
('Parvez Pappu', 'mdpardveahmedpappu@gmail.com', 'dhaka', 'd', 'Farmer'),
('Parvez Pappu', 'mdpardvedafhmedpappu@gmail.com', 'dhakad', 'd', 'Farmer'),
('Parvez Pappu', 'mdparveahmedpappu@gmail.com', 'dhaka', '123', 'Farmer'),
('pappu5', 'pappu5@gmail.com', 'pappu', '1234', 'Farmer'),
('Parvez Pappu', 'pappu@gmail.com', 'dhaka', '12', 'Farmer');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `for_role` varchar(20) NOT NULL DEFAULT 'admin',
  `type` varchar(50) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `for_role`, `type`, `message`) VALUES
(38, 'signup_approved', ' Employee approved a ShopOwner signup', 'admin');

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

-- --------------------------------------------------------

--
-- Table structure for table `productcart`
--

CREATE TABLE `productcart` (
  `productID` int(25) NOT NULL,
  `productName` varchar(50) NOT NULL,
  `price` int(5) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `productcart`
--

INSERT INTO `productcart` (`productID`, `productName`, `price`, `stock`) VALUES
(3, 'h', 60, 10),
(2, 'h', 12, 5),
(5, 'Tomato', 100, 15),
(5, 'Tomato', 100, 15),
(9, 'dd', -1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shopowner`
--

CREATE TABLE `shopowner` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shopowner`
--

INSERT INTO `shopowner` (`Name`, `Email`, `Address`, `Password`, `Role`) VALUES
('akil', 'akil@gmail.com', 'dhaka', '2112', 'ShopOwner'),
('d', 'd@gmaill.comd', 'd', 'd', 'ShopOwner'),
('ddddddddd', 'ddd@gmail.com', 'dhaka', 'd', 'ShopOwner'),
('dd', 'dddd@gmail.com', 'd', 'd', 'ShopOwner'),
('dd', 'ddddd@gmail.com', 'd', 'd', 'ShopOwner'),
('dd', 'dddddd@gmail.com', 'd', 'd', 'ShopOwner'),
('d', 'ddddddd@dgmaill.comd', 'd', 'd', 'ShopOwner'),
('dd', 'ddddddd@gmail.com', 'd', 'd', 'ShopOwner'),
('dd', 'ddddddd@gmaill.comd', 'ddd', 'dd', 'ShopOwner'),
('d', 'dddddddd@dgmaill.comd', 'd', 'd', 'ShopOwner'),
('dd', 'dddddddd@gmail.com', 'd', 'd', 'ShopOwner'),
('ddd', 'dddddddd@gmaill.comd', 'ddd', 'dd', 'ShopOwner'),
('d', 'ddddddddd@dgmaill.comd', 'd', 'd', 'ShopOwner'),
('dddd', 'ddddddddd@gmaill.comd', 'ddd', 'dd', 'ShopOwner'),
('ddddd', 'dddddddddd@gmaill.comd', 'ddd', 'dd', 'ShopOwner'),
('dddddd', 'ddddddddddd@gmaill.comd', 'ddd', 'dd', 'ShopOwner'),
('ddddddd', 'dddddddddddd@gmaill.comd', 'ddd', 'dd', 'ShopOwner'),
('dddddddd', 'ddddddddddddd@gmaill.comd', 'ddd', 'dd', 'ShopOwner'),
('ddddddddd', 'dddddddddddddd@gmaill.comd', 'ddd', 'dd', 'ShopOwner'),
('dddddddddd', 'ddddddddddddddd@gmaill.comd', 'ddd', 'dd', 'ShopOwner'),
('d', 'mddparveahmedpappu@gmail.com', 'dhaka', 'd', 'ShopOwner'),
('d', 'mddpdarveahmedpappu@gmail.com', 'dhaka', 'd', 'ShopOwner'),
('Parvez Pappu', 'mdparveahmedpappu@gmail.com', 'dhaka', 'd', 'ShopOwner'),
('ok', 'ok@gmailcom', 'dhaka', '123', 'ShopOwner');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `allproducts`
--
ALTER TABLE `allproducts`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `farmer`
--
ALTER TABLE `farmer`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderhistory`
--
ALTER TABLE `orderhistory`
  ADD PRIMARY KEY (`orderID`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `shopowner`
--
ALTER TABLE `shopowner`
  ADD PRIMARY KEY (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allproducts`
--
ALTER TABLE `allproducts`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `orderhistory`
--
ALTER TABLE `orderhistory`
  MODIFY `orderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
