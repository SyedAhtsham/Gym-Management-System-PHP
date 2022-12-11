-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3308
-- Generation Time: Jul 27, 2020 at 06:50 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `gym`
--
CREATE DATABASE IF NOT EXISTS `gym` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `gym`;

-- --------------------------------------------------------

--
-- Table structure for table `Class`
--

CREATE TABLE `Class` (
  `classNo` int(3) NOT NULL,
  `name` varchar(50) NOT NULL,
  `size` int(3) NOT NULL DEFAULT '0',
  `fee` int(10) NOT NULL DEFAULT '50',
  `staffNo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Class`
--

INSERT INTO `Class` (`classNo`, `name`, `size`, `fee`, `staffNo`) VALUES
(1, 'Meditation', 0, 50, 1),
(2, 'Six Packs Workout', 0, 30, 2),
(3, 'Fitness and Workout', 0, 20, 1),
(4, 'Jogging and Running', 0, 50, 4),
(5, 'Stretching ', 0, 50, 5),
(6, 'Strength Building', 0, 50, 4);

-- --------------------------------------------------------

--
-- Table structure for table `ClassSchedule`
--

CREATE TABLE `ClassSchedule` (
  `classNo` int(4) NOT NULL,
  `cDate` date NOT NULL,
  `cTime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ClassSchedule`
--

INSERT INTO `ClassSchedule` (`classNo`, `cDate`, `cTime`) VALUES
(1, '2020-07-25', '10:00:00'),
(2, '2020-07-29', '18:00:00'),
(3, '2020-07-25', '02:00:00'),
(3, '2020-07-25', '12:00:00'),
(3, '2020-07-25', '19:00:00'),
(4, '2020-07-24', '12:00:00'),
(4, '2020-07-26', '16:00:00'),
(6, '2020-07-23', '15:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `Enrollment`
--

CREATE TABLE `Enrollment` (
  `classNo` int(3) NOT NULL,
  `memberID` int(4) NOT NULL,
  `dateJoined` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Enrollment`
--

INSERT INTO `Enrollment` (`classNo`, `memberID`, `dateJoined`) VALUES
(1, 1, '2020-07-17 17:22:35'),
(3, 5, '2020-07-25 17:21:40'),
(6, 1, '2020-07-24 17:21:40'),
(6, 4, '2020-07-27 17:23:04');

-- --------------------------------------------------------

--
-- Table structure for table `Equipment`
--

CREATE TABLE `Equipment` (
  `equipmentNo` int(3) NOT NULL,
  `equipName` varchar(20) NOT NULL,
  `equipCondition` varchar(55) NOT NULL DEFAULT 'Good',
  `rent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Equipment`
--

INSERT INTO `Equipment` (`equipmentNo`, `equipName`, `equipCondition`, `rent`) VALUES
(1, 'Dumbell', 'Good', 54),
(2, 'Stretcher', 'Good', 50),
(3, 'TreadMill', 'Need to be replaced', 40),
(7, 'Resistance Bands', 'Good', 30),
(8, 'Shoulder Presser', 'Need to be replaced', 50),
(9, 'Pull Rope', 'Normal', 80);

-- --------------------------------------------------------

--
-- Table structure for table `Member`
--

CREATE TABLE `Member` (
  `memberID` int(4) NOT NULL,
  `fName` varchar(15) NOT NULL,
  `lName` varchar(15) NOT NULL,
  `tellNo` varchar(15) DEFAULT '000',
  `sex` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Member`
--

INSERT INTO `Member` (`memberID`, `fName`, `lName`, `tellNo`, `sex`) VALUES
(1, 'Mehreen', 'Khan', '051-3212344', 'F'),
(2, 'Ahmed', 'Afzal', '+9234334582', 'M'),
(3, 'Syed', 'Ahtsham', '03155726162', 'M'),
(4, 'Muhammad', 'Arsalan', NULL, 'M'),
(5, 'Anum', 'Mir', '051-2234323', 'F'),
(6, 'Hamid', 'Ajmal', '0342-4344233', 'M');

-- --------------------------------------------------------

--
-- Table structure for table `Membership`
--

CREATE TABLE `Membership` (
  `membershipID` int(11) NOT NULL,
  `dateCreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `expiryDate` timestamp NULL DEFAULT NULL,
  `type` varchar(15) NOT NULL,
  `memberID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Membership`
--

INSERT INTO `Membership` (`membershipID`, `dateCreated`, `expiryDate`, `type`, `memberID`) VALUES
(1, '2020-07-27 17:24:27', '2021-02-25 17:23:33', 'Diamond', 1),
(2, '2020-07-27 17:24:27', '2021-03-19 17:23:33', 'Silver', 4),
(3, '2020-07-23 17:24:29', '2021-03-31 17:24:29', 'Diamond', 6),
(4, '2020-03-16 17:24:29', '2020-10-15 17:24:29', 'Diamond', 2),
(5, '2020-04-07 20:09:00', '2021-05-21 03:25:25', 'Gold', 3);

-- --------------------------------------------------------

--
-- Table structure for table `MembershipType`
--

CREATE TABLE `MembershipType` (
  `type` varchar(15) NOT NULL,
  `rate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `MembershipType`
--

INSERT INTO `MembershipType` (`type`, `rate`) VALUES
('Diamond', 100),
('Gold', 50),
('Silver', 30);

-- --------------------------------------------------------

--
-- Table structure for table `Rental`
--

CREATE TABLE `Rental` (
  `memberID` int(4) NOT NULL,
  `equipmentNo` int(3) NOT NULL,
  `rentStarted` date NOT NULL,
  `rentFinish` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Rental`
--

INSERT INTO `Rental` (`memberID`, `equipmentNo`, `rentStarted`, `rentFinish`) VALUES
(1, 3, '2020-07-11', '2020-10-14'),
(3, 2, '2020-07-16', '2021-02-18'),
(6, 2, '2020-07-09', '2020-09-10'),
(6, 3, '2020-07-16', '2020-10-30');

-- --------------------------------------------------------

--
-- Table structure for table `Staff`
--

CREATE TABLE `Staff` (
  `staffNo` int(4) NOT NULL,
  `fName` varchar(15) NOT NULL,
  `lName` varchar(15) NOT NULL,
  `position` varchar(15) NOT NULL DEFAULT 'Trainer',
  `sex` varchar(1) DEFAULT NULL,
  `DOB` date NOT NULL,
  `salary` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Staff`
--

INSERT INTO `Staff` (`staffNo`, `fName`, `lName`, `position`, `sex`, `DOB`, `salary`) VALUES
(1, 'Fahad', 'Jamil', 'Trainer', 'M', '1999-07-15', 14000),
(2, 'Mahad', 'Kiani', 'Trainer', 'M', '1984-07-02', 15000),
(3, 'Bhural', 'Ikram', 'Manager', 'M', '1998-07-14', 25000),
(4, 'Warisha', 'Ghani', 'Trainer', 'F', '2001-07-08', 10000),
(5, 'Haad', 'Kazmi', 'Trainer', 'M', '1988-07-01', 20000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Class`
--
ALTER TABLE `Class`
  ADD PRIMARY KEY (`classNo`),
  ADD KEY `staffNo` (`staffNo`);

--
-- Indexes for table `ClassSchedule`
--
ALTER TABLE `ClassSchedule`
  ADD PRIMARY KEY (`cDate`,`cTime`),
  ADD KEY `classNo` (`classNo`);

--
-- Indexes for table `Enrollment`
--
ALTER TABLE `Enrollment`
  ADD PRIMARY KEY (`classNo`,`memberID`),
  ADD KEY `memberID` (`memberID`);

--
-- Indexes for table `Equipment`
--
ALTER TABLE `Equipment`
  ADD PRIMARY KEY (`equipmentNo`);

--
-- Indexes for table `Member`
--
ALTER TABLE `Member`
  ADD PRIMARY KEY (`memberID`);

--
-- Indexes for table `Membership`
--
ALTER TABLE `Membership`
  ADD PRIMARY KEY (`membershipID`),
  ADD UNIQUE KEY `memberID` (`memberID`),
  ADD KEY `type` (`type`),
  ADD KEY `memberID_2` (`memberID`);

--
-- Indexes for table `MembershipType`
--
ALTER TABLE `MembershipType`
  ADD PRIMARY KEY (`type`);

--
-- Indexes for table `Rental`
--
ALTER TABLE `Rental`
  ADD PRIMARY KEY (`memberID`,`equipmentNo`),
  ADD KEY `equipmentNo` (`equipmentNo`),
  ADD KEY `memberID` (`memberID`),
  ADD KEY `equipmentNo_2` (`equipmentNo`);

--
-- Indexes for table `Staff`
--
ALTER TABLE `Staff`
  ADD PRIMARY KEY (`staffNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Class`
--
ALTER TABLE `Class`
  MODIFY `classNo` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `Equipment`
--
ALTER TABLE `Equipment`
  MODIFY `equipmentNo` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `Member`
--
ALTER TABLE `Member`
  MODIFY `memberID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `Membership`
--
ALTER TABLE `Membership`
  MODIFY `membershipID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `Staff`
--
ALTER TABLE `Staff`
  MODIFY `staffNo` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Class`
--
ALTER TABLE `Class`
  ADD CONSTRAINT `class_ibfk_1` FOREIGN KEY (`staffNo`) REFERENCES `Staff` (`staffNo`);

--
-- Constraints for table `ClassSchedule`
--
ALTER TABLE `ClassSchedule`
  ADD CONSTRAINT `classschedule_ibfk_1` FOREIGN KEY (`classNo`) REFERENCES `Class` (`classNo`);

--
-- Constraints for table `Enrollment`
--
ALTER TABLE `Enrollment`
  ADD CONSTRAINT `enrollment_ibfk_1` FOREIGN KEY (`classNo`) REFERENCES `Class` (`classNo`),
  ADD CONSTRAINT `enrollment_ibfk_2` FOREIGN KEY (`memberID`) REFERENCES `Member` (`memberID`);

--
-- Constraints for table `Membership`
--
ALTER TABLE `Membership`
  ADD CONSTRAINT `membership_ibfk_1` FOREIGN KEY (`type`) REFERENCES `MembershipType` (`type`),
  ADD CONSTRAINT `membership_ibfk_2` FOREIGN KEY (`memberID`) REFERENCES `Member` (`memberID`);

--
-- Constraints for table `Rental`
--
ALTER TABLE `Rental`
  ADD CONSTRAINT `rental_ibfk_1` FOREIGN KEY (`memberID`) REFERENCES `Member` (`memberID`),
  ADD CONSTRAINT `rental_ibfk_2` FOREIGN KEY (`equipmentNo`) REFERENCES `Equipment` (`equipmentNo`);
