-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2021 at 09:17 PM
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
  `isBooked` tinyint(1) NOT NULL,
  `imagePath1` text NOT NULL,
  `imagePath2` text NOT NULL,
  `imagePath3` text NOT NULL,
  `imagePath4` text NOT NULL,
  `createdDate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`propertyID`, `owner_name`, `address`, `street`, `street_number`, `city`, `lat`, `lng`, `startDate`, `endDate`, `time1`, `time2`, `peoples`, `rate`, `phone`, `description`, `isBooked`, `imagePath1`, `imagePath2`, `imagePath3`, `imagePath4`, `createdDate`) VALUES
(15, 'Adva Jakobson', 'Ashdod, Israel', '1', 'as', 'Tel Aviv-Yafo', '31.804381', '34.655314', '2021-09-28', '2021-09-28', '16:00:00', '18:00:00', '2', '15', '3201288956', 'asfasfasf', 0, 'uploads/9-fin-Home-Office-5a1c4efc47c2660037d3b44c.jpg', '', '', '', '2021-09-28 14:49:51'),
(16, 'Moshe Cohen', 'Rehov Mekor Chayim 35, Tel Aviv-Yafo, Israel', 'Rehov Mekor Chayim', '35', 'Tel Aviv-Yafo', '32.0528382', '34.777834', '2021-09-28', '2021-10-11', '16:00:00', '22:00:00', '5', '12', '3201288956', 'aaaaaaaaaaaaa', 0, 'uploads/85823_tm_stage_Homeoffice_1920x1080_M.jpg', 'uploads/designer-home-office.jpg', '', '', '2021-09-28 23:02:11'),
(17, 'Lior Raz', 'Uri Tsvi Grinberg St 25, Tel Aviv-Yafo, Israel', 'Uri Tsvi Grinberg Street', '25', 'Tel Aviv-Yafo', '32.1307115', '34.7922258', '2021-09-28', '2021-09-28', '12:00:00', '17:00:00', '4', '12', '3201288956', 'Testing', 1, 'uploads/HomeOffice_20936_1586950695.jpg', '', '', '', '2021-09-28 23:52:42'),
(18, 'Lue', 'Shlomo Ibn Gabirol St 124, Tel Aviv-Yafo, Israel', '1', '124', 'Tel Aviv-Yafo', '32.0869557', '34.7823923', '2021-09-29', '2021-10-27', '16:00:00', '17:00:00', '4', '12', '3201288956', '1212121212', 0, 'uploads/edbott-home-office.jpg', 'uploads/Home-Office-1.jpg', 'uploads/tikal_location1.jpg', 'uploads/home-office-stylish.jpg', '2021-09-29 00:08:10');

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
(10, 15, 10, '9HY63185D34066241', '0.5', '2021-09-28 22:17:07'),
(11, 16, 10, '9E8645762X8477215', '1.5', '2021-09-28 23:31:08'),
(12, 16, 10, '3NM931659P679013C', '3', '2021-09-28 23:43:59'),
(13, 17, 10, '15906987J0699341K', '2', '2021-09-28 23:58:40');

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
  MODIFY `propertyID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_orders`
--
ALTER TABLE `user_orders`
  MODIFY `useOrderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
