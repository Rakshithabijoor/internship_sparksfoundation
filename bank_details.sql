-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2021 at 03:11 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank_details`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `Customer_id` varchar(12) NOT NULL,
  `Name` text DEFAULT NULL,
  `Email` varchar(99) NOT NULL,
  `Phone` bigint(10) NOT NULL,
  `Balance` bigint(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`Customer_id`, `Name`, `Email`, `Phone`, `Balance`) VALUES
('1', 'Aman RAj', 'aman@gmail.com', 9999999999, 50000),
('10', 'Ramesh', 'ramesh@gmail.com', 9922299999, 50000),
('11', 'Sundar RAj', 'sundar@gmail.com', 9999999444, 50000),
('2', 'Bobby patel', 'bobby@gmail.com', 9999999988, 90000),
('3', 'Ciestin George', 'george@gmail.com', 9779999999, 40000),
('4', 'Dev Aman', 'devn@gmail.com', 9999998787, 70000),
('5', 'Rakesh', 'rakesh@gmail.com', 9999009999, 39000),
('6', 'Rajeev', 'raj@gmail.com', 99998989999, 50000),
('7', 'Seetha', 'ram@gmail.com', 9999000000, 100000),
('8', 'Krishn', 'gopal@gmail.com', 9999998888, 50000),
('9', 'Rakshitha', 'rakshu@gmail.com', 9999999911, 50000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`Customer_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
