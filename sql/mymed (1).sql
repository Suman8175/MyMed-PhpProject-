-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2023 at 07:24 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

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
-- Table structure for table `doctordetails`
--

CREATE TABLE `doctordetails` (
  `Did` int(11) NOT NULL,
  `LoginId` int(11) NOT NULL,
  `City` varchar(255) NOT NULL DEFAULT 'Pokhara',
  `State` varchar(255) NOT NULL DEFAULT 'Province3',
  `HouseNo` int(11) NOT NULL DEFAULT 0,
  `Registration` int(11) NOT NULL DEFAULT 0,
  `Specialization` varchar(255) NOT NULL DEFAULT 'General',
  `Mobile` int(11) NOT NULL DEFAULT 99999999,
  `ProfilePicture` varchar(255) NOT NULL DEFAULT 'PP1.png',
  `starttime` time NOT NULL DEFAULT '09:00:00',
  `endtime` time NOT NULL DEFAULT '17:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctordetails`
--

INSERT INTO `doctordetails` (`Did`, `LoginId`, `City`, `State`, `HouseNo`, `Registration`, `Specialization`, `Mobile`, `ProfilePicture`, `starttime`, `endtime`) VALUES
(1, 84, 'Pokhara', 'Province5', 0, 0, 'General', 99999999, 'imgdo.jpg', '05:00:00', '11:00:00'),
(2, 76, 'Pokhara', 'Province3', 0, 0, 'General', 99999999, 'PP1.png', '09:00:00', '17:00:00');

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
  `verifieddoctor` int(11) NOT NULL DEFAULT 0,
  `userdelete` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logintable`
--

INSERT INTO `logintable` (`LoginId`, `Username`, `Email`, `Password`, `D.O.B`, `Gender`, `Role`, `AccountCreation`, `verificationcode`, `isverified`, `certificate`, `verifieddoctor`, `userdelete`) VALUES
(75, 'Suman', 'sumand@gmail.com', '$2y$10$hntgqS2//zcwdvH2QvJ6peM7g6AJRvHgh2VbrPT43oUVCMHpKdjZm', '2023-05-04', 'Male', 'Admin', '2023-05-14 19:14:53', '99c989991322bf6a75d1af13324fe9fe', 1, '', 1, 0),
(76, 'Suman', 'sd@gmail.com', '$2y$10$tuWZ6DQ1LY83SQHunYjyjOU9aDHpktnlPywq2a1x3YKIk3SeDGy9i', '2023-06-06', 'Male', 'Doctor', '2023-06-04 01:11:17', '23dc0dd399860de59ecbace6d9336e82', 1, '', 1, 1),
(77, 'sdd', 'sum@gmail.com', '$2y$10$yzNYXwcgqcMMzbTOs9zfAO6J1raB2Fta4Mj6xKXCHURqmsBCCZKym', '2023-06-06', 'Male', 'Doctor', '2023-06-04 01:19:59', '598f68444cc25ffac2f0f443bee91ee9', 1, '', 1, 0),
(78, 'awd', 'q@gmail.com', '$2y$10$wJJBvLJ2T..YPTHzKxawWeWMEuYUTM9xvgufHcxM/sRfRk4HaiFPa', '2023-06-13', 'Male', 'Patient', '2023-06-04 08:38:29', '15767e5c49726dfdd6d3d8b5276d6292', 0, '', 0, 0),
(79, 'r', 'r@gmail.com', '$2y$10$RFYiCwTGhgAVRkYkyGV1DexQaVEVHLrJRL3c4My/yTDJX6rYVAomS', '2023-06-06', 'Male', 'Patient', '2023-06-04 08:42:47', '505a0b428dc8126a59b3c2d0ea21dd5d', 0, '', 0, 0),
(80, 'ad', 'dssuman525@gmail.com', '$2y$10$/CaJGkAPimkovy7oCczgUODb14B6M0knYW3pzY6qJLmF8CbDMntte', '2023-06-08', 'Male', 'Patient', '2023-06-04 08:43:47', '4c6766f26fee4cd12dc24c670511a39f', 0, '', 0, 0),
(81, 'helloo', 'sumandevkota75@gmail.com', '$2y$10$5ucEP30Gf0haiXZc9Hw.zeZG4mkrlTnJpOge2TUBk2DyckQKFi.O6', '2023-06-07', 'Male', 'Patient', '2023-06-04 09:11:57', '51cdf29c81a69dc7f173705f744de167', 1, '', 0, 0),
(82, 'Suman', 'as@gmail.com', '$2y$10$xu4WLb/r7cah8Fib6XSg8ODkyLx2Zo3bxlIlJXBGLuTn7OHSXi6ci', '2023-06-06', 'Male', 'Patient', '2023-06-04 09:13:44', '4b153aa4d31a265d8af87bafd69f3cc3', 0, '', 0, 0),
(83, 'Su', 'z@gmail.com', '$2y$10$FQ6KuwijhqHht.sOmjyW/u2Jc10LJcjf9Nlp0yUzGFv8LNveM2TP6', '2023-06-13', 'Male', 'Doctor', '2023-06-04 09:40:57', '1b3fd74f8f461b84a8eaf7723d0f01b0', 1, '2023-05-11-SumanDevkota-Unit3.pdf', 1, 0),
(84, 'as', 'n@gmail.com', '$2y$10$S93J3bL/8UDsVQJS09yPkuAPKIvrQ6mZbBReQis./BFrnsjCGZ.oa', '2023-06-06', 'Male', 'Doctor', '2023-06-04 09:44:11', '8a8f1c5dbc1ca3dc160a00aec7231006', 1, '2023-05-11-SumanDevkota-Unit3.pdf', 1, 0),
(85, 'admin', 'admin@gmail.com', '$2y$10$g0SkgNLaF56AEAjpqvEGAO4idWsM0EOh4b2N/XmLJn60AjLmM6yNS', '2023-06-05', 'Male', 'Admin', '2023-06-06 20:20:57', '43875232c6ee29f0bf271a3a19014d2b', 1, '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `slidertable`
--

CREATE TABLE `slidertable` (
  `sliderid` int(11) NOT NULL,
  `sliderheading` varchar(255) NOT NULL,
  `sliderparagraph` varchar(255) NOT NULL,
  `sliderimage` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slidertable`
--

INSERT INTO `slidertable` (`sliderid`, `sliderheading`, `sliderparagraph`, `sliderimage`) VALUES
(9, 'sdasd', 'dwadaw', '2.png'),
(13, 'This is a form', 'dawwadad', 'doctor5.jpg'),
(14, '   hiii', 'hello', 'qwe.jpg'),
(17, '  I am don of nepal', 'This is a paragraph', 'doc3.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctordetails`
--
ALTER TABLE `doctordetails`
  ADD PRIMARY KEY (`Did`),
  ADD KEY `LoginId` (`LoginId`);

--
-- Indexes for table `logintable`
--
ALTER TABLE `logintable`
  ADD PRIMARY KEY (`LoginId`);

--
-- Indexes for table `slidertable`
--
ALTER TABLE `slidertable`
  ADD PRIMARY KEY (`sliderid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctordetails`
--
ALTER TABLE `doctordetails`
  MODIFY `Did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `logintable`
--
ALTER TABLE `logintable`
  MODIFY `LoginId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `slidertable`
--
ALTER TABLE `slidertable`
  MODIFY `sliderid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `doctordetails`
--
ALTER TABLE `doctordetails`
  ADD CONSTRAINT `doctordetails_ibfk_1` FOREIGN KEY (`LoginId`) REFERENCES `logintable` (`LoginId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
