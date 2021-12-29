-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2021 at 09:04 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginsys`
--

-- --------------------------------------------------------

--
-- Table structure for table `users_records_db`
--

CREATE TABLE `users_records_db` (
  `id` int(11) NOT NULL,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_records_db`
--

INSERT INTO `users_records_db` (`id`, `first_name`, `last_name`, `email`, `password`) VALUES
(5, 'java', 'sadfasfd', 'asfdkjasdf@java.com', '$2y$10$1CylK8hqSrSo.gOK8Rnk4.XmmrKwNK6kUyHVF9CRm.OL6U1YW/3Oe'),
(6, 'bhushan', 'mahajan', 'bhushan@test.com', '$2y$10$yJI63X8EpX7UpYI0JmXPquVY0YYl1.1b05lBGMtV9yvw8j4Yabhzy'),
(7, 'mark', 'zukerberg', 'mark@facebook.com', '$2y$10$ckHdt5fukXFRZr6b4N350edX3YunfselcOO7AQ0Xq726U0mjUb98q'),
(8, 'mark', 'java', 'mark@java.com', '$2y$10$DRWkYKfs40jZL1oS0xJv4OLWhE0sXEdnToonrdYk6BWSYZYTHwgAW'),
(9, 'mark', 'java', 'mark@facebook.in', '$2y$10$ANKZTghp92d/smSdehL4sOwlrDLJntah5YzIPCmXMbamx/adMWH9m'),
(10, 'abc', 'xyz', 'abc@facebook.com', '$2y$10$dhwRLViYAxTRxJmwrp1iv.TASoGnrqo2z.1YgMkZvHta7mUrM921.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users_records_db`
--
ALTER TABLE `users_records_db`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users_records_db`
--
ALTER TABLE `users_records_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
