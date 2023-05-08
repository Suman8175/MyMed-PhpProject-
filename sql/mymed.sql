-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2023 at 03:18 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mymed`
--

-- --------------------------------------------------------

--
-- Table structure for table `logintable`
--

CREATE TABLE `logintable` (
  `LoginId` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `D.O.B` date NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Role` varchar(10) NOT NULL,
  `AccountCreation` datetime NOT NULL DEFAULT current_timestamp(),
  `verificationcode` varchar(255) NOT NULL,
  `isverified` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logintable`
--

INSERT INTO `logintable` (`LoginId`, `Username`, `Email`, `Password`, `D.O.B`, `Gender`, `Role`, `AccountCreation`, `verificationcode`, `isverified`) VALUES
(32, 'Suman', 'evkota75@gmail.com', '$2y$10$miWwRlMxG0GsScmD2bZ4b.EcbItZ81MK4lQkIhrGDYEeDRJ6wtZY6', '2023-05-03', 'Male', 'Patient', '2023-05-08 14:32:02', 'a197f1fd3d2bc31868f70f25c208ab22', 0),
(33, 'Suman', 'sumandevkota75@gmail.com', '$2y$10$LlWHGwEpdkUsfFkzYMQwbenIL1h54LzyoukLHJWmYJSLtvkAMIcP.', '2023-05-12', 'Male', 'Patient', '2023-05-08 14:36:56', '752bf4dbc6159a0b56234801bf611b90', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logintable`
--
ALTER TABLE `logintable`
  ADD PRIMARY KEY (`LoginId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `logintable`
--
ALTER TABLE `logintable`
  MODIFY `LoginId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
