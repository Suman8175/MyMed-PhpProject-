-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2023 at 12:41 AM
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
-- Table structure for table `appointmenttable`
--

CREATE TABLE `appointmenttable` (
  `appointid` int(11) NOT NULL,
  `docid` int(11) NOT NULL,
  `patientid` int(11) NOT NULL,
  `appointmentdate` date NOT NULL,
  `appointmenttime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointmenttable`
--

INSERT INTO `appointmenttable` (`appointid`, `docid`, `patientid`, `appointmentdate`, `appointmenttime`) VALUES
(1, 76, 82, '2023-06-15', '13:00:00'),
(2, 76, 82, '2023-06-15', '11:00:00'),
(3, 83, 82, '2023-06-15', '15:00:00'),
(4, 76, 82, '2023-06-15', '09:00:00'),
(5, 76, 82, '2023-06-15', '15:00:00'),
(8, 83, 82, '2023-06-17', '11:00:00');

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
  `Mobile` bigint(11) NOT NULL DEFAULT 99999999,
  `ProfilePicture` varchar(255) NOT NULL DEFAULT 'PP1.png',
  `starttime` time NOT NULL DEFAULT '09:00:00',
  `endtime` time NOT NULL DEFAULT '17:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctordetails`
--

INSERT INTO `doctordetails` (`Did`, `LoginId`, `City`, `State`, `HouseNo`, `Registration`, `Specialization`, `Mobile`, `ProfilePicture`, `starttime`, `endtime`) VALUES
(2, 76, 'Pokhara', 'Province3', 0, 0, 'Dental', 9815158175, 'PP1.png', '08:00:00', '17:00:00'),
(3, 77, 'Pokhara', 'Province3', 0, 0, 'Neurolosgist', 984658369, 'ppp.jpg', '09:00:00', '17:00:00'),
(4, 83, 'Pokhara', 'Province3', 5485, 2147483647, 'Neuro', 0, 'downdoc3.jpg', '10:00:00', '17:00:00'),
(5, 86, 'Pokhara', 'Province3', 0, 0, 'General', 99999999, 'PP1.png', '09:00:00', '17:00:00'),
(6, 87, 'Pokhara', 'Province3', 0, 0, 'General', 99999999, 'PP1.png', '09:00:00', '17:00:00'),
(7, 88, 'Pokhara', 'Province3', 0, 0, 'General', 99999999, 'PP1.png', '09:00:00', '17:00:00'),
(8, 89, 'Pokhara', 'Province3', 0, 0, 'General', 99999999, 'PP1.png', '09:00:00', '17:00:00');

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
(76, 'Suman Devkota', 'doctor@gmail.com', '$2y$10$tuWZ6DQ1LY83SQHunYjyjOU9aDHpktnlPywq2a1x3YKIk3SeDGy9i', '2023-06-06', 'Male', 'Doctor', '2023-06-04 01:11:17', '23dc0dd399860de59ecbace6d9336e82', 1, '2023-05-11-SumanDevkota-Unit3.pdf', 1, 0),
(77, 'Bhakti Thapa', 'sum@gmail.com', '$2y$10$yzNYXwcgqcMMzbTOs9zfAO6J1raB2Fta4Mj6xKXCHURqmsBCCZKym', '2023-06-06', 'Male', 'Doctor', '2023-06-04 01:19:59', '598f68444cc25ffac2f0f443bee91ee9', 1, '', 1, 0),
(78, 'awd', 'q@gmail.com', '$2y$10$wJJBvLJ2T..YPTHzKxawWeWMEuYUTM9xvgufHcxM/sRfRk4HaiFPa', '2023-06-13', 'Male', 'Patient', '2023-06-04 08:38:29', '15767e5c49726dfdd6d3d8b5276d6292', 1, '', 0, 0),
(79, 'r', 'r@gmail.com', '$2y$10$RFYiCwTGhgAVRkYkyGV1DexQaVEVHLrJRL3c4My/yTDJX6rYVAomS', '2023-06-06', 'Male', 'Patient', '2023-06-04 08:42:47', '505a0b428dc8126a59b3c2d0ea21dd5d', 1, '', 0, 1),
(80, 'ad', 'dssuman525@gmail.com', '$2y$10$/CaJGkAPimkovy7oCczgUODb14B6M0knYW3pzY6qJLmF8CbDMntte', '2023-06-08', 'Male', 'Patient', '2023-06-04 08:43:47', '4c6766f26fee4cd12dc24c670511a39f', 1, '', 0, 0),
(81, 'helloo', 'sumandevkota75@gmail.com', '$2y$10$5ucEP30Gf0haiXZc9Hw.zeZG4mkrlTnJpOge2TUBk2DyckQKFi.O6', '2023-06-07', 'Male', 'Patient', '2023-06-04 09:11:57', '51cdf29c81a69dc7f173705f744de167', 1, '', 0, 0),
(82, 'Patient1', 'patient@gmail.com', '$2y$10$xu4WLb/r7cah8Fib6XSg8ODkyLx2Zo3bxlIlJXBGLuTn7OHSXi6ci', '2023-06-06', 'Male', 'Patient', '2023-06-04 09:13:44', '4b153aa4d31a265d8af87bafd69f3cc3', 1, '', 0, 0),
(83, 'Laxman Khadka', 'z@gmail.com', '$2y$10$FQ6KuwijhqHht.sOmjyW/u2Jc10LJcjf9Nlp0yUzGFv8LNveM2TP6', '2023-06-13', 'Male', 'Doctor', '2023-06-04 09:40:57', '1b3fd74f8f461b84a8eaf7723d0f01b0', 1, '2023-05-11-SumanDevkota-Unit3.pdf', 1, 0),
(84, 'as', 'n@gmail.com', '$2y$10$S93J3bL/8UDsVQJS09yPkuAPKIvrQ6mZbBReQis./BFrnsjCGZ.oa', '2023-06-06', 'Male', 'Admin', '2023-06-04 09:44:11', '8a8f1c5dbc1ca3dc160a00aec7231006', 1, '2023-05-11-SumanDevkota-Unit3.pdf', 1, 0),
(85, 'admin', 'admin@gmail.com', '$2y$10$g0SkgNLaF56AEAjpqvEGAO4idWsM0EOh4b2N/XmLJn60AjLmM6yNS', '2023-06-05', 'Male', 'Admin', '2023-06-06 20:20:57', '43875232c6ee29f0bf271a3a19014d2b', 1, '', 0, 0),
(86, 'Sandip Magar', 'doctor2@gmail.com', '$2y$10$7uvV3/JRqkazIV/Ka.dKS.2ort7P/vVNyk5vEmablCCWCeAdb/2vy', '2020-02-11', 'Male', 'Doctor', '2023-06-12 04:11:47', 'ae8ce449147f44381608ce91138303fe', 1, '2023-06-08SumanDevkota-Hw.pdf', 0, 0),
(87, 'Hari Ram Poudel', 'doctor3@gmail.com', '$2y$10$bXdbzvcgj92BQXSEQPfxMuSmDJJuuLfs5GGqo3agGqrwd4plG47NC', '2021-01-06', 'Male', 'Doctor', '2023-06-12 04:12:57', '5d2fd47463cc7e865f469332167a109a', 1, '2023-06-08-SumanDevkota-Assignments.pdf', 0, 0),
(88, 'Tilak Acharaya', 'doctor4@gmail.com', '$2y$10$doMSKHbsajDHsQHCEgobOOzrSVCndcRuAsfxlnrfcsaK4Dz0N.yNa', '2023-06-21', 'Male', 'Doctor', '2023-06-12 04:14:47', 'dc143e9764b72cc9318dfe400f026b10', 1, '2023-06-08-SumanDevkota-Assignment.docx', 0, 0),
(89, 'Sanjan Saru Magar', 'doctor5@gmail.com', '$2y$10$RjvqLaG3EqSBqOBd8TVZzeBfmYUUGDm.GoSrUq99HUQ9yEtlO5r52', '2023-06-05', 'Male', 'Doctor', '2023-06-12 04:16:11', '83e1b732bc0de8d57424fd8ffb090625', 1, 'chapter3.docx', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `patientdetails`
--

CREATE TABLE `patientdetails` (
  `PatientId` int(11) NOT NULL,
  `LoginId` int(11) NOT NULL,
  `PatientCity` varchar(255) NOT NULL DEFAULT 'XXXX',
  `PatientState` varchar(255) NOT NULL DEFAULT 'Province3',
  `PatientHouseNo` varchar(255) NOT NULL DEFAULT 'xxxx',
  `PatientBloodGroup` varchar(25) NOT NULL DEFAULT 'A+',
  `PatientMobile` bigint(20) NOT NULL DEFAULT 9876543210,
  `PatientProfilePicture` varchar(300) NOT NULL DEFAULT 'PP1.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patientdetails`
--

INSERT INTO `patientdetails` (`PatientId`, `LoginId`, `PatientCity`, `PatientState`, `PatientHouseNo`, `PatientBloodGroup`, `PatientMobile`, `PatientProfilePicture`) VALUES
(1, 82, 'Pokhara', 'Province3', 'xxxx', 'A+', 9876543210, 'daad.jpg');

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
(17, ' ', 'Healthcare facilities play a very important role in improving the quality of life of people.', 'doc3.jpg'),
(18, ' ', 'To provide high quality specialized medical care involving a range of health professionals and promote highly-advanced medical treatments', 'qwe.png'),
(19, '    ', 'Deliver the service that is responsive, efficient, courteous and helpful.', 'dctor.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointmenttable`
--
ALTER TABLE `appointmenttable`
  ADD PRIMARY KEY (`appointid`),
  ADD KEY `docid` (`docid`),
  ADD KEY `patientid` (`patientid`);

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
-- Indexes for table `patientdetails`
--
ALTER TABLE `patientdetails`
  ADD PRIMARY KEY (`PatientId`),
  ADD KEY `LoginId` (`LoginId`);

--
-- Indexes for table `slidertable`
--
ALTER TABLE `slidertable`
  ADD PRIMARY KEY (`sliderid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointmenttable`
--
ALTER TABLE `appointmenttable`
  MODIFY `appointid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `doctordetails`
--
ALTER TABLE `doctordetails`
  MODIFY `Did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `logintable`
--
ALTER TABLE `logintable`
  MODIFY `LoginId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `patientdetails`
--
ALTER TABLE `patientdetails`
  MODIFY `PatientId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slidertable`
--
ALTER TABLE `slidertable`
  MODIFY `sliderid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointmenttable`
--
ALTER TABLE `appointmenttable`
  ADD CONSTRAINT `appointmenttable_ibfk_1` FOREIGN KEY (`docid`) REFERENCES `logintable` (`LoginId`),
  ADD CONSTRAINT `appointmenttable_ibfk_2` FOREIGN KEY (`patientid`) REFERENCES `logintable` (`LoginId`);

--
-- Constraints for table `doctordetails`
--
ALTER TABLE `doctordetails`
  ADD CONSTRAINT `doctordetails_ibfk_1` FOREIGN KEY (`LoginId`) REFERENCES `logintable` (`LoginId`);

--
-- Constraints for table `patientdetails`
--
ALTER TABLE `patientdetails`
  ADD CONSTRAINT `patientdetails_ibfk_1` FOREIGN KEY (`LoginId`) REFERENCES `logintable` (`LoginId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
