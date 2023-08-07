-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 07, 2023 at 05:53 PM
-- Server version: 8.0.33-0ubuntu0.22.04.4
-- PHP Version: 8.1.2-1ubuntu2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `User`
--

-- --------------------------------------------------------

--
-- Table structure for table `neeraj`
--

CREATE TABLE `neeraj` (
  `sno` int NOT NULL,
  `username` varchar(11) NOT NULL,
  `cpassword` varchar(23) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `dt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `neeraj`
--

INSERT INTO `neeraj` (`sno`, `username`, `cpassword`, `dt`) VALUES
(1, 'ANSHUL', 'NEERAJ', '2023-08-06 12:36:41'),
(2, 'neeraj', 'anshul', '2023-08-06 13:01:02'),
(3, '1234', '1234', '2023-08-06 13:01:55'),
(4, 'AMAN', 'AMAN', '2023-08-06 13:10:35'),
(5, 'AMITESH', 'AMITESH', '2023-08-06 13:11:17'),
(6, 'AMITESH', 'AMITESH', '2023-08-06 13:20:14'),
(7, 'amrita', 'ammo', '2023-08-06 15:30:06'),
(8, '123', '123', '2023-08-06 18:00:05'),
(9, '123', 'amit', '2023-08-06 22:29:01'),
(10, '123', 'amit', '2023-08-06 23:28:34'),
(11, 'govind', '123', '2023-08-07 11:46:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `neeraj`
--
ALTER TABLE `neeraj`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `neeraj`
--
ALTER TABLE `neeraj`
  MODIFY `sno` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
