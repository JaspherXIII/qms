-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2023 at 06:00 PM
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
-- Database: `queue`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `created`, `modified`) VALUES
(1, 'admin', '123', '2023-04-21 17:41:36', '2023-04-21 17:41:36'),
(2, 'jas', '$2y$10$XzcdDhk.vvA14FIz22b9Yue7Sq9JMIfmr17DCqM0ppNjipqq5keRS', '2023-04-21 17:56:44', '2023-04-21 17:56:44'),
(3, 'dev', '$2y$10$AEZD3lcFC1rTCpK5i2eJkOlSBBUNgihIh5kQ5rQPGADao7E3NSJqW', '2023-04-21 18:01:33', '2023-04-21 18:01:33');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `appointment_time` datetime NOT NULL,
  `purpose` varchar(255) DEFAULT NULL,
  `status` enum('waiting','in progress','completed') NOT NULL DEFAULT 'waiting'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `customer_name`, `appointment_time`, `purpose`, `status`) VALUES
(1, 'Mark Jas', '2023-06-13 18:04:51', 'Papagawa ng ID', 'completed'),
(2, 'Mark Jas', '2023-06-13 18:19:30', 'Papagawa ng ID', 'completed'),
(3, 'Mark Jasp', '2023-06-14 14:00:54', 'dsf', 'completed'),
(4, 'qwqwe', '2023-06-14 14:02:22', 'wqewq', 'completed'),
(5, 'test', '2023-06-14 14:07:20', '12334', 'in progress'),
(7, 'dsf', '2023-06-14 16:47:44', 'erwe', 'waiting'),
(8, 'Another Test', '2023-06-14 23:25:57', '1', 'completed');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'inactive',
  `last_login_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `status`, `last_login_time`) VALUES
(22, 'client', '$2y$10$YhaE1hVhz01SlKmK4ILy/erkB4FV0amUMr18uz5o4aOW8X.47nguO', 'inactive', '2023-06-14 23:56:10'),
(23, '123', '$2y$10$OZN0ODW2EJmgfnsIATY0O.FNSx.bpPQ4CmQoXeTJY070hh4SUtfxe', 'inactive', '2023-06-15 00:03:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
