-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2023 at 01:34 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemesanan_kamarhotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(10) NOT NULL,
  `customer_name` varchar(30) NOT NULL,
  `address` varchar(20) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `phonenumber` varchar(20) NOT NULL,
  `ic_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `address`, `gender`, `phonenumber`, `ic_no`) VALUES
(1, 'Alif Sofwan', 'Kg RImba', 'Male', '8796891', 1119891),
(2, 'Amal Aniqah', 'Kg Gadong', 'Female', '89189100', 1123456),
(3, 'Hamizah ', 'Kg Rimba', 'Female', '7188291', 1212122);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_id` varchar(30) NOT NULL,
  `employee_name` varchar(30) NOT NULL,
  `gender` enum('Male','Female') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `employee_name`, `gender`) VALUES
('1001', 'Hanif Danish', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_no` int(11) NOT NULL,
  `customer_id` varchar(10) NOT NULL,
  `employee_id` varchar(10) NOT NULL,
  `total_room` int(11) NOT NULL,
  `date_checkin` datetime NOT NULL,
  `date_checkout` datetime NOT NULL,
  `durationofstay` int(11) NOT NULL,
  `total_price` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_no`, `customer_id`, `employee_id`, `total_room`, `date_checkin`, `date_checkout`, `durationofstay`, `total_price`) VALUES
(2001, '3001', '1001', 150, '2023-02-01 00:00:00', '2023-02-03 00:00:00', 2, 300),
(2002, '3002', '1002', 100, '2023-02-02 00:00:00', '2023-02-05 00:00:00', 3, 300),
(2058, '3025', '1001', 200, '2023-01-01 00:00:00', '2023-01-07 00:00:00', 7, 1400),
(2059, '3026', '1002', 200, '2023-10-01 00:00:00', '2023-10-06 00:00:00', 6, 1200),
(20012, '3010', '1002', 200, '2023-02-05 00:00:00', '2023-02-10 00:00:00', 5, 1000),
(20013, '3011', '1002', 200, '2023-03-09 00:00:00', '2023-03-11 00:00:00', 3, 400),
(20027, '3012', '1002', 200, '2023-04-09 00:00:00', '2023-04-11 00:00:00', 3, 400),
(20029, '3018', '1002', 200, '2023-05-09 00:00:00', '2023-05-11 00:00:00', 3, 400),
(20032, '3019', '1001', 200, '2023-05-09 00:00:00', '2023-06-11 00:00:00', 3, 400),
(20038, '3020', '1002', 200, '2023-06-09 00:00:00', '2023-06-11 00:00:00', 3, 400),
(20039, '3022', '1002', 200, '2023-07-09 00:00:00', '2023-07-11 00:00:00', 3, 400),
(20043, '3023', '1002', 200, '2023-08-09 00:00:00', '2023-08-11 00:00:00', 3, 400),
(20050, '3024', '1001', 200, '2023-09-08 00:00:00', '2023-09-11 00:00:00', 4, 600);

-- --------------------------------------------------------

--
-- Table structure for table `payment_detail`
--

CREATE TABLE `payment_detail` (
  `payment_detail_id` varchar(10) NOT NULL,
  `payment_no` int(11) NOT NULL,
  `room_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment_detail`
--

INSERT INTO `payment_detail` (`payment_detail_id`, `payment_no`, `room_no`) VALUES
('5000', 2001, 3),
('5001', 2002, 4),
('ba3936d0cb', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_no` int(11) NOT NULL,
  `room_type` varchar(20) NOT NULL,
  `price` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_no`, `room_type`, `price`) VALUES
(1, 'Single', 100),
(2, 'Double', 150),
(3, 'Deluxe', 200);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `email` varchar(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `AccessLevel` int(1) NOT NULL DEFAULT 3
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `fullname`, `username`, `pwd`, `gender`, `AccessLevel`) VALUES
('manager@email', 'John Manager', 'manager', 'manager', 'Male', 1),
('testmail@email', 'sarah connor', 'receptionist', 'receptionist', 'Female', 2),
('user@email', 'connor user', 'user', 'user', 'Female', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`),
  ADD UNIQUE KEY `customer_name` (`customer_name`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD UNIQUE KEY `uc_payment_customer` (`payment_no`,`customer_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD UNIQUE KEY `room_no` (`room_no`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`AccessLevel`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
