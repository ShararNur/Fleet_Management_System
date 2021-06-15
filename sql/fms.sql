-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2021 at 01:56 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fms`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `name` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`name`, `password`) VALUES
('Alvee', '123456'),
('Nur', '12345'),
('Sharar Nur', '12345'),
('Sharar Nur Alvee', '121212');

-- --------------------------------------------------------

--
-- Table structure for table `mechanic_list`
--

CREATE TABLE `mechanic_list` (
  `serial` int(50) NOT NULL,
  `workshop_name` varchar(50) NOT NULL,
  `mechanic_name` varchar(50) NOT NULL,
  `mechanic_email` varchar(20) NOT NULL,
  `mechanic_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mechanic_list`
--

INSERT INTO `mechanic_list` (`serial`, `workshop_name`, `mechanic_name`, `mechanic_email`, `mechanic_number`) VALUES
(1, 'it', 'ndsnfojn', 'jdsfjn@gmail.com', 2131456),
(2, 'Bhuiyan', 'Sharar', 'Sna@gmail.com', 123456789),
(3, 'Masum Wrkshop', 'Masum', 'Masum@gmail.com', 123345),
(4, 'Nur Workshop', 'Nur', 'Nur@gmail.com', 1521218627),
(5, 'Carshop', 'SNA', 'SNA@gmail.com', 123456),
(6, 'idk', 'idk', 'idk@gmail.com', 12121212),
(10, 'Noname', 'Noone', 'Noone@gmail.com', 123456789),
(1111, 'asdasd', 'asdasd', 'asdasd', 1519465);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_list`
--

CREATE TABLE `vehicle_list` (
  `vehicleid` int(20) NOT NULL,
  `brand_Model` varchar(50) NOT NULL,
  `color` varchar(20) NOT NULL,
  `license` varchar(20) NOT NULL,
  `owner_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle_list`
--

INSERT INTO `vehicle_list` (`vehicleid`, `brand_Model`, `color`, `license`, `owner_name`, `email`, `mobile`) VALUES
(1, 'BMW', 'Black', 'ka-1234', 'Sharar Nur', 'shararnur@gmail.com', 1749648808),
(2, 'Audi', 'Mate Black', 'cha-1444', 'Sharar', 'shararnur@gmail.com', 1749648808),
(13, 'I know', 'megenda', 'cha-5555', 'I know', 'Iknow@gmail.com', 1749);

-- --------------------------------------------------------

--
-- Table structure for table `work_order_list`
--

CREATE TABLE `work_order_list` (
  `vehicle_id` int(50) NOT NULL,
  `date` varchar(20) NOT NULL,
  `work_order_title` varchar(50) NOT NULL,
  `issue_description` varchar(200) NOT NULL,
  `assigned_to` varchar(50) NOT NULL,
  `deadline` varchar(20) NOT NULL,
  `total_cost` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `work_order_list`
--

INSERT INTO `work_order_list` (`vehicle_id`, `date`, `work_order_title`, `issue_description`, `assigned_to`, `deadline`, `total_cost`, `status`) VALUES
(1, '2021-04-29', 'Boroken Glass', 'Accident happen', 'Rafik', '2021-05-07', '50000', ''),
(2, '2021-04-01', 'mirror', 'mirror', 'andalib', '2021-05-05', '10000', ''),
(3, '2021-04-22', 'back light broken', 'something went wrong', 'shudipto ', '2021-05-06', '5000', 'pending'),
(6, '2021-04-22', 'asdasdass', 'asdasd', 'asdasdasdad', '2021-04-30', '20000', 'Resolve'),
(9, '2021-04-22', 'tier', 'tier puncher', 'mokles', '2021-05-06', '2000', 'pending'),
(10, '2021-05-19', 'no title', 'no issue', 'Me', '2021-06-16', '150000', 'Pending'),
(11, '21-05-2021', 'idk', 'idk', 'idk', '30-05-2021', '121212', 'on');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`name`) USING BTREE;

--
-- Indexes for table `mechanic_list`
--
ALTER TABLE `mechanic_list`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `vehicle_list`
--
ALTER TABLE `vehicle_list`
  ADD PRIMARY KEY (`vehicleid`);

--
-- Indexes for table `work_order_list`
--
ALTER TABLE `work_order_list`
  ADD PRIMARY KEY (`vehicle_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
