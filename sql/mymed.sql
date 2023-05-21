-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2023 at 03:06 PM
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
  `isverified` int(11) NOT NULL DEFAULT 0,
  `certificate` varchar(300) NOT NULL,
  `verifieddoctor` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logintable`
--

INSERT INTO `logintable` (`LoginId`, `Username`, `Email`, `Password`, `D.O.B`, `Gender`, `Role`, `AccountCreation`, `verificationcode`, `isverified`, `certificate`, `verifieddoctor`) VALUES
(74, 'hell', 'dssuman525@gmail.com', '$2y$10$q4Ag76iyvnw2c1SXu9Ui8ORmbOYkFtu5M.J81RwQBBk/HGcDQ7agO', '2023-05-04', 'Male', 'Doctor', '2023-05-13 19:31:29', '80081ef0188d90e7f6577c4e6fa82af2', 1, '2023-05-11-SumanDevkota-Unit3.pdf', 0),
(75, 'Suman', 'sumandevkota75@gmail.com', '$2y$10$hntgqS2//zcwdvH2QvJ6peM7g6AJRvHgh2VbrPT43oUVCMHpKdjZm', '2023-05-04', 'Male', 'Admin', '2023-05-14 19:14:53', '99c989991322bf6a75d1af13324fe9fe', 1, '', 1);

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
  MODIFY `LoginId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
