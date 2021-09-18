-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2021 at 07:55 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ourz_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `propertyID` int(11) NOT NULL,
  `owner_name` text NOT NULL,
  `address` text NOT NULL,
  `street` text NOT NULL,
  `street_number` text NOT NULL,
  `city` text NOT NULL,
  `lat` text NOT NULL,
  `lng` text NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `time1` time NOT NULL,
  `time2` time NOT NULL,
  `peoples` text NOT NULL,
  `rate` text NOT NULL,
  `phone` text NOT NULL,
  `description` text NOT NULL,
  `imagePath1` text NOT NULL,
  `imagePath2` text NOT NULL,
  `imagePath3` text NOT NULL,
  `imagePath4` text NOT NULL,
  `createdDate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`propertyID`, `owner_name`, `address`, `street`, `street_number`, `city`, `lat`, `lng`, `startDate`, `endDate`, `time1`, `time2`, `peoples`, `rate`, `phone`, `description`, `imagePath1`, `imagePath2`, `imagePath3`, `imagePath4`, `createdDate`) VALUES
(13, 'Test House', 'Rothschild Blvd 33, Tel Aviv-Yafo, Israel', '1', '33', 'Tel Aviv-Yafo', '32.0638547', '34.7735046', '2021-09-01', '2021-10-21', '12:30:00', '20:00:00', '4', '12', '3201288956', 'This is test example', 'uploads/1630863487007WhatsApp Image 2021-03-04 at 17.39.34 (1).jpeg', 'uploads/1630863487009WhatsApp Image 2021-03-04 at 17.39.34.jpeg', 'uploads/1630863487011WhatsApp Image 2021-03-04 at 17.39.35 (1).jpeg', 'uploads/1630863487011WhatsApp Image 2021-03-04 at 17.39.35.jpeg', '2021-09-05 22:38:07');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(11) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `password` text NOT NULL,
  `createdDate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `first_name`, `last_name`, `email`, `phone`, `password`, `createdDate`) VALUES
(10, 'Test1', 'User1', 'testuser@gmail.com', '1234567891', 'e10adc3949ba59abbe56e057f20f883e', '2021-09-05 22:35:19');

-- --------------------------------------------------------

--
-- Table structure for table `user_orders`
--

CREATE TABLE `user_orders` (
  `useOrderID` int(11) NOT NULL,
  `propertyID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `paymentID` text NOT NULL,
  `totalHours` text NOT NULL,
  `createdDate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_orders`
--

INSERT INTO `user_orders` (`useOrderID`, `propertyID`, `userID`, `paymentID`, `totalHours`, `createdDate`) VALUES
(9, 13, 10, '8EG94663SX750981V', '10', '2021-09-05 22:40:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`propertyID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `user_orders`
--
ALTER TABLE `user_orders`
  ADD PRIMARY KEY (`useOrderID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `propertyID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_orders`
--
ALTER TABLE `user_orders`
  MODIFY `useOrderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
