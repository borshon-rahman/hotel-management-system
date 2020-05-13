-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2020 at 03:11 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sunrise_hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user_name` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_name`, `password`, `status`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
('borshon', 'fa246d0262c3925617b0c72bb20eeb1d', 'client'),
('client', '62608e08adc29a8d6dbc9754e659f125', 'client'),
('lucky', '339a65e93299ad8d72c42b263aa23117', 'stuff'),
('manager', '1d0258c2440a8d19e716292b231e3190', 'manager'),
('stuff', 'c13d88cb4cb02003daedb8a84e5d272a', 'stuff');

-- --------------------------------------------------------

--
-- Table structure for table `reserved_room`
--

CREATE TABLE `reserved_room` (
  `room_number` int(3) NOT NULL,
  `room_type` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `bedding_type` varchar(10) NOT NULL,
  `meal_plan` varchar(15) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reserved_room`
--

INSERT INTO `reserved_room` (`room_number`, `room_type`, `fname`, `lname`, `email`, `country`, `phone`, `bedding_type`, `meal_plan`, `checkin`, `checkout`) VALUES
(1, 'Superior Room', 'dfsdffsd', 'dafdfsd', 'hrthhh', 'Bangladesh', 'kgh', 'Single', 'Room Only', '0000-00-00', '0000-00-00'),
(2, 'Superior Room', '', '', '', 'Bangladesh', '', 'Single', 'Room Only', '2020-04-28', '2020-05-12'),
(3, 'Superior Room', 'dfsdffsd', 'aad', 'jhhj', 'Bangladesh', '&lt;b&gt;183&lt;/b&g', 'Single', 'Room Only', '2020-05-13', '2020-05-14'),
(4, 'Superior Room', 'gfgfs', 'dafdfsd', 'hrthhh', 'Bangladesh', 'kgh', 'Single', 'Room Only', '2020-05-19', '2020-05-20');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_number` int(8) NOT NULL,
  `type` varchar(15) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_number`, `type`, `status`) VALUES
(1, 'Deluxe', 'reserved'),
(2, 'Deluxe', 'reserved'),
(3, 'Deluxe', 'reserved'),
(4, 'Deluxe', 'reserved'),
(5, 'Luxury', 'available'),
(6, 'Deluxe', 'available'),
(7, 'Deluxe', 'available'),
(8, 'Luxury', 'available'),
(9, 'Luxury', 'available'),
(10, 'Luxury', 'available'),
(11, 'Guest House', 'available'),
(12, 'Guest House', 'available'),
(13, 'Guest House', 'available'),
(14, 'Guest House', 'available');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `SN` int(8) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `status` varchar(20) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `permanent_adrs` varchar(100) NOT NULL,
  `present_adrs` varchar(100) NOT NULL,
  `city` varchar(15) NOT NULL,
  `zip_code` varchar(10) NOT NULL,
  `country` varchar(20) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`SN`, `user_name`, `status`, `fname`, `lname`, `gender`, `permanent_adrs`, `present_adrs`, `city`, `zip_code`, `country`, `phone`, `email`) VALUES
(1, 'borshon', 'client', 'Borshon', 'Rahman', 'Male', 'Courtpara, Kushtia', 'Courtpara, Kushtia', 'Kushtia', '7000', 'Bangladesh', '01730264304', 'fortuneborshon@gmail.com'),
(2, 'admin', 'admin', 'Richard', 'Parker', 'Male', '829 Van Dyke St.\r\nHoward Beach', '829 Van Dyke St.\r\nHoward Beach', 'NewYork', '11414', 'United State', '+80236-564-455', 'parker@gmail.com'),
(3, 'manager', 'manager', 'Sufat', 'Ullah', 'Male', '2 Ram Chandra Ray Chowdhury Rd', '2 Ram Chandra Ray Chowdhury Rd', 'Kushtia', '7000', 'Bangladesh', '1012134576789', 'zxcvb@aiub.edu'),
(4, 'client', 'client', 'Mehzabien', 'Chowdhury', 'Female', 'House building, Uttara', 'House building, Uttara', 'Dhaka', '1208', 'Bangladesh', '+8801755555555', 'mehzabien@yahoo.com'),
(21, 'lucky', 'stuff', 'Lucky', 'Aktar', 'Female', 'Ishwaredi, Pabna, 1200', 'Mirpur 10', 'Dhaka', '7000', 'Bangladesh', ' 88 12212332455', 'lucky@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`user_name`);

--
-- Indexes for table `reserved_room`
--
ALTER TABLE `reserved_room`
  ADD PRIMARY KEY (`room_number`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_number`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`SN`),
  ADD KEY `user_name` (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `SN` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reserved_room`
--
ALTER TABLE `reserved_room`
  ADD CONSTRAINT `reserved_room_ibfk_1` FOREIGN KEY (`room_number`) REFERENCES `room` (`room_number`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
