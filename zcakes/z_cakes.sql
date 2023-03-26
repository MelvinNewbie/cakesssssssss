-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2023 at 01:25 AM
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
-- Database: `zcakes`
--

-- --------------------------------------------------------

--
-- Table structure for table `z_customers`
--

CREATE TABLE `z_customers` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `street` varchar(100) DEFAULT NULL,
  `city_town` varchar(50) DEFAULT NULL,
  `region` varchar(50) DEFAULT NULL,
  `zip_code` varchar(20) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `user_status` varchar(1) NOT NULL DEFAULT 'A' COMMENT 'A = Active / I = Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `z_customers`
--

INSERT INTO `z_customers` (`user_id`, `first_name`, `last_name`, `email`, `username`, `password`, `phone`, `street`, `city_town`, `region`, `zip_code`, `country`, `user_status`) VALUES
(1, 'althea', 'reyes', 'althea@gmail.com', 'alteaya', '123', '09876543213', 'ewan', 'oas', 'albay', '4504', 'philippines', 'A'),
(2, 'Ben', 'Jamine', 'bj@gmail.com', 'bjalex', '12321', '09099854232', 'Seasame Street', 'Disney', 'Land', '4505', 'Philippines', 'A'),
(3, 'Jaz', 'Mine', 'minejaz@gmail.com', 'minejaz', '32212', '09685423176', 'Di ko alam', 'Polangui', 'Albay', '4506', 'Philippines', 'A'),
(4, 'melvin', 'porcalla', 'asda@gmail.com', 'melvin', '123321', '09876543213', 'san rafael', 'guinobatan', 'albay', '4501', 'philippines', 'A'),
(5, 'melvin', 'qweqwe', 'althsadsea@gmail.com', 'admin', '12321', '09876543213', 'san rafael', 'guinobatan', 'albay', '23133', 'philippines', 'I'),
(7, 'adsa', 'qweqwe', 'asd@gmail.com', 'masnd', 'sdaa', '09876543213', 'san rafael', 'guinobatan', 'albay', '12123', 'philippines', 'I');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `z_customers`
--
ALTER TABLE `z_customers`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `z_customers`
--
ALTER TABLE `z_customers`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
