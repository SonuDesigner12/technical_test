-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2024 at 08:35 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `technicalround`
--

-- --------------------------------------------------------

--
-- Table structure for table `resister`
--

CREATE TABLE `resister` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `dob` int(3) NOT NULL,
  `address` text NOT NULL,
  `phone` bigint(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `resister`
--

INSERT INTO `resister` (`id`, `fname`, `lname`, `dob`, `address`, `phone`, `email`, `password`) VALUES
(1, 'sonu ', 'kumar', 22, 'pune', 9888842230, 'sonu@gmail.com', '111111'),
(2, 'sonu ', 'kumar', 22, 'hallomajra', 9888848230, 'teste@exemplo.us', 'Parkash@12'),
(3, 'sonu ', 'kumar', 22, 'hallomajra', 9888848230, 'parkash@1212.gmail.com', '111111'),
(4, 'sonu ', 'kumar', 22, 'hallomajra', 9888848230, 'sonu@1212.gmail.com', '111111'),
(5, 'sonu ', 'kumar', 22, 'hallomajra', 9888848230, 'bhishan@gmail.com', '123456'),
(6, 'raju', 'jha', 21, '4, delhi', 1234567890, 'raju@gmail.com', '123123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `resister`
--
ALTER TABLE `resister`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `resister`
--
ALTER TABLE `resister`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
