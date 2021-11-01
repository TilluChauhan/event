-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2021 at 04:27 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `events`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `eventname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `perprice` bigint(50) NOT NULL,
  `gst` bigint(20) NOT NULL,
  `quantity` int(11) NOT NULL,
  `totalprice` bigint(20) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `createddate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `user_id`, `event_id`, `eventname`, `username`, `perprice`, `gst`, `quantity`, `totalprice`, `status`, `createddate`) VALUES
(23, 5, 12, 'An Actor`s Voice', 'Tillu', 199, 143, 4, 939, 1, '2121-10-31'),
(24, 5, 13, 'Money and the Law of Attraction Workshop', 'Tillu', 11, 6, 3, 39, 1, '2121-10-31'),
(25, 5, 7, 'Art Workshop for Kids by Uttara Lakhani', 'Tillu', 300, 54, 1, 354, 1, '2121-10-31'),
(29, 2, 3, 'Curtain Call Exclusives', 'Ankit', 599, 323, 3, 2120, 1, '2121-11-01'),
(33, 2, 3, 'Curtain Call Exclusives', 'Ankit', 599, 216, 2, 1414, 1, '2121-11-01'),
(35, 2, 2, 'FrontRow Open Mics', 'Ankit', 299, 215, 4, 1411, 1, '2121-11-01'),
(36, 2, 2, 'FrontRow Open Mics', 'Ankit', 299, 161, 3, 1058, 1, '2121-11-01'),
(37, 2, 2, 'FrontRow Open Mics', 'Ankit', 299, 161, 3, 1058, 1, '2121-11-01'),
(38, 2, 2, 'FrontRow Open Mics', 'Ankit', 299, 108, 2, 705, 1, '2121-11-01'),
(47, 1, 3, 'Curtain Call Exclusives', 'Tushar', 599, 431, 4, 2827, 1, '2121-11-01'),
(48, 1, 3, 'Curtain Call Exclusives', 'Tushar', 599, 431, 4, 2827, 1, '2121-11-01'),
(49, 1, 3, 'Curtain Call Exclusives', 'Tushar', 599, 323, 3, 2120, 1, '2121-11-01'),
(50, 1, 3, 'Curtain Call Exclusives', 'Tushar', 599, 216, 2, 1413, 1, '2121-11-01'),
(51, 1, 3, 'Curtain Call Exclusives', 'Tushar', 599, 431, 4, 2827, 1, '2121-11-01'),
(56, 1, 1, 'Jo Bolta Hai Wohi Hota Hai Feat Harsh Gujral', 'Tushar', 499, 90, 1, 588, 1, '2121-11-01'),
(57, 1, 1, 'Jo Bolta Hai Wohi Hota Hai Feat Harsh Gujral', 'Tushar', 499, 180, 2, 1177, 1, '2121-11-01'),
(58, 1, 1, 'Jo Bolta Hai Wohi Hota Hai Feat Harsh Gujral', 'Tushar', 499, 269, 3, 1766, 1, '2121-11-01'),
(59, 1, 1, 'Jo Bolta Hai Wohi Hota Hai Feat Harsh Gujral', 'Tushar', 499, 180, 2, 1177, 1, '2121-11-01'),
(60, 1, 1, 'Jo Bolta Hai Wohi Hota Hai Feat Harsh Gujral', 'Tushar', 499, 269, 3, 1766, 1, '2121-11-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
