-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2025 at 04:57 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fyp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` varchar(7) NOT NULL,
  `adminName` varchar(255) NOT NULL,
  `adminPassword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `adminName`, `adminPassword`) VALUES
('CC20065', 'MUHAMMAD AZIQ HAIKAL BIN ALUWI', '123');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appointmentID` int(255) NOT NULL,
  `appointmentDate` date NOT NULL,
  `appointmentTime` time(4) NOT NULL,
  `appointmentVenue` varchar(255) NOT NULL,
  `childIC` varchar(12) NOT NULL,
  `appointmentStatus` varchar(100) NOT NULL DEFAULT 'incomplete',
  `nextVaccine` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appointmentID`, `appointmentDate`, `appointmentTime`, `appointmentVenue`, `childIC`, `appointmentStatus`, `nextVaccine`) VALUES
(18, '2019-05-05', '10:00:00.0000', 'Klinik Kesihatan', '190503060277', 'complete', 'vac1'),
(19, '2019-05-05', '10:00:00.0000', 'Klinik Kesihatan', '190503060277', 'complete', 'vac2'),
(21, '2019-06-03', '10:00:00.0000', 'Klinik Kesihatan', '190503060277', 'complete', 'vac3'),
(22, '2019-07-03', '10:00:00.0000', 'Klinik Kesihatan', '190503060277', 'complete', 'vac5'),
(23, '2019-07-03', '10:00:00.0000', 'Klinik Kesihatan', '190503060277', 'complete', 'vac9'),
(24, '2019-07-03', '10:00:00.0000', 'Klinik Kesihatan', '190503060277', 'complete', 'vac13'),
(25, '2019-08-03', '10:00:00.0000', 'Klinik Kesihatan', '190503060277', 'complete', 'vac6'),
(26, '2019-08-03', '10:00:00.0000', 'Klinik Kesihatan', '190503060277', 'complete', 'vac10'),
(27, '2019-08-03', '10:00:00.0000', 'Klinik Kesihatan', '190503060277', 'complete', 'vac14'),
(28, '2019-10-03', '10:00:00.0000', 'Klinik Kesihatan', '190503060277', 'complete', 'vac7'),
(29, '2019-10-03', '10:00:00.0000', 'Klinik Kesihatan', '190503060277', 'complete', 'vac11'),
(30, '2019-10-03', '10:00:00.0000', 'Klinik Kesihatan', '190503060277', 'complete', 'vac15'),
(31, '2019-11-03', '10:00:00.0000', 'Klinik Kesihatan', '190503060277', 'complete', 'vac4'),
(32, '2020-01-03', '10:00:00.0000', 'Klinik Kesihatan', '190503060277', 'complete', 'vac21'),
(33, '2020-07-03', '10:00:00.0000', 'Klinik Kesihatan', '190503060277', 'complete', 'vac8'),
(34, '2020-07-03', '10:00:00.0000', 'Klinik Kesihatan', '190503060277', 'complete', 'vac16'),
(35, '2020-07-03', '10:00:00.0000', 'Klinik Kesihatan', '190503060277', 'complete', 'vac12'),
(36, '2022-01-01', '10:00:00.0000', 'Klinik Kesihatan', '220101060267', 'complete', 'vac1'),
(37, '2022-01-01', '10:00:00.0000', 'Klinik Kesihatan', '220101060267', 'complete', 'vac1'),
(38, '2022-04-05', '10:00:00.0000', 'Klinik Kesihatan', '220405060377', 'complete', 'vac1'),
(39, '2022-04-05', '10:00:00.0000', 'Klinik Kesihatan', '220405060377', 'complete', 'vac2'),
(40, '2022-05-05', '10:00:00.0000', 'Klinik Kesihatan', '220405060377', 'complete', 'vac3'),
(41, '2022-06-05', '10:00:00.0000', 'Klinik Kesihatan', '220405060377', 'complete', 'vac5'),
(42, '2022-06-05', '10:00:00.0000', 'Klinik Kesihatan', '220405060377', 'complete', 'vac9'),
(43, '2022-06-05', '10:00:00.0000', 'Klinik Kesihatan', '220405060377', 'complete', 'vac13'),
(44, '2022-01-01', '10:00:00.0000', 'Klinik Kesihatan', '220101060267', 'complete', 'vac1'),
(45, '2022-01-01', '10:00:00.0000', 'Klinik Kesihatan', '220101060267', 'complete', 'vac2'),
(46, '2022-02-01', '10:00:00.0000', 'Klinik Kesihatan', '220101060267', 'complete', 'vac3'),
(47, '2022-03-01', '10:00:00.0000', 'Klinik Kesihatan', '220101060267', 'complete', 'vac5'),
(48, '2022-03-01', '10:00:00.0000', 'Klinik Kesihatan', '220101060267', 'complete', 'vac10'),
(49, '2022-03-01', '10:00:00.0000', 'Klinik Kesihatan', '220101060267', 'complete', 'vac13'),
(50, '2022-06-15', '10:00:00.0000', 'Klinik Kesihatan', '220202060269', 'complete', 'vac1'),
(51, '2022-06-17', '10:00:00.0000', 'Klinik Kesihatan', '220202060269', 'complete', 'vac10'),
(52, '2022-06-25', '10:00:00.0000', 'Klinik Kesihatan', '220101060267', 'complete', 'vac21'),
(53, '2022-06-07', '10:29:00.0000', 'Klinik Kesihatan', '220606060276', 'complete', 'vac1'),
(54, '2022-08-30', '10:00:00.0000', 'Klinik Kesihatan', '220101060267', 'incomplete', 'vac10');

-- --------------------------------------------------------

--
-- Table structure for table `child`
--

CREATE TABLE `child` (
  `childIC` varchar(12) NOT NULL,
  `childName` varchar(255) NOT NULL,
  `childBirthDate` date NOT NULL,
  `childGender` varchar(20) NOT NULL,
  `parentsIC` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `child`
--

INSERT INTO `child` (`childIC`, `childName`, `childBirthDate`, `childGender`, `parentsIC`) VALUES
('190503060277', 'BUNGA INTAN', '2019-05-06', 'Female', '021203060269'),
('220101060267', 'SOFIA MAISARAH', '2022-01-01', 'Female', '021203060269'),
('220202060269', 'ABDULRAHMAN ADAM', '2022-02-02', 'Male', '021203060269'),
('220405060377', 'ADAM MUKHLIS', '2022-04-05', 'Male', '020111060697'),
('220606060276', 'thalia', '2022-06-06', 'Female', '021203060269');

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `parentsIC` varchar(12) NOT NULL,
  `parentsName` varchar(255) NOT NULL,
  `parentsGender` varchar(6) NOT NULL,
  `parentsPhoneNum` varchar(12) NOT NULL,
  `parentsEmail` varchar(255) NOT NULL,
  `parentsPassword` varchar(20) NOT NULL,
  `parentsAddress` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parents`
--

INSERT INTO `parents` (`parentsIC`, `parentsName`, `parentsGender`, `parentsPhoneNum`, `parentsEmail`, `parentsPassword`, `parentsAddress`) VALUES
('020111060697', 'TENGKU MUHAMMAD IRSYADUDEEN', 'Male', '012345', 'knightsgate@gmail.com', '123', 'pak mahat'),
('021118080468', 'AINA SAFIAH BINTI ISHRAPI', '', '', 'sfhaina@gmail.com', '123', ''),
('021203060269', 'AHMAD ABU ', 'Male', '01111199693', 'abu@gmail.com', '123', 'Paya Besar'),
('770420110269', 'hazarina', 'Female', '', 'hazarina@ump.edu.my', '123', '');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staffIC` varchar(12) NOT NULL,
  `staffName` varchar(255) DEFAULT NULL,
  `staffPassword` varchar(20) DEFAULT NULL,
  `staffEmail` varchar(255) DEFAULT NULL,
  `staffStatus` varchar(100) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staffIC`, `staffName`, `staffPassword`, `staffEmail`, `staffStatus`) VALUES
('020111060697', 'AINA SAFIAH BINTI ISHRAPI', '123', 'aina@gmail.com', 'Inactive'),
('020906110627', 'WAN MUHAMMAD IQBAL', '123', 'iqbal@gmail.com', 'Active'),
('021203060269', 'MUHAMMAD AZIQ HAIKAL BIN ALUWI', 'aziq123', 'aziqhaikal969@gmail.com', 'Inactive');

-- --------------------------------------------------------

--
-- Table structure for table `vaccinationrecord`
--

CREATE TABLE `vaccinationrecord` (
  `vaccineRecordID` int(255) NOT NULL,
  `vaccineID` varchar(10) NOT NULL,
  `vaccineRecordDate` date NOT NULL,
  `staffIC` varchar(12) DEFAULT NULL,
  `childIC` varchar(12) NOT NULL,
  `childHeight` int(255) NOT NULL,
  `childWeight` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vaccinationrecord`
--

INSERT INTO `vaccinationrecord` (`vaccineRecordID`, `vaccineID`, `vaccineRecordDate`, `staffIC`, `childIC`, `childHeight`, `childWeight`) VALUES
(25, 'vac1', '2019-05-05', '021203060269', '190503060277', 49, 3),
(26, 'vac2', '2019-05-05', '021203060269', '190503060277', 49, 3),
(27, 'vac3', '2019-06-03', '021203060269', '190503060277', 54, 4),
(28, 'vac5', '2019-07-03', '021203060269', '190503060277', 57, 5),
(29, 'vac9', '2019-07-03', '021203060269', '190503060277', 57, 5),
(30, 'vac13', '2019-07-03', '021203060269', '190503060277', 57, 5),
(31, 'vac6', '2019-08-03', '021203060269', '190503060277', 59, 6),
(32, 'vac10', '2019-08-03', '021203060269', '190503060277', 60, 6),
(33, 'vac14', '2019-08-03', '021203060269', '190503060277', 60, 6),
(34, 'vac7', '2019-10-03', '021203060269', '190503060277', 64, 6),
(35, 'vac11', '2019-10-03', '021203060269', '190503060277', 64, 7),
(36, 'vac15', '2019-10-03', '021203060269', '190503060277', 64, 7),
(37, 'vac4', '2019-11-03', '021203060269', '190503060277', 65, 7),
(38, 'vac21', '2019-01-03', '021203060269', '190503060277', 74, 9),
(39, 'vac8', '2019-07-03', '021203060269', '190503060277', 80, 10),
(40, 'vac16', '2019-07-03', '021203060269', '190503060277', 80, 10),
(44, 'vac1', '2022-04-05', '021203060269', '220405060377', 49, 3),
(45, 'vac2', '2022-04-05', '021203060269', '220405060377', 50, 3),
(46, 'vac3', '2022-05-05', '021203060269', '220405060377', 54, 5),
(47, 'vac5', '2022-06-05', '021203060269', '220405060377', 58, 6),
(48, 'vac9', '2022-06-05', '021203060269', '220405060377', 58, 6),
(49, 'vac13', '2022-06-05', '021203060269', '220405060377', 58, 6),
(50, 'vac1', '2022-01-01', '021203060269', '220101060267', 49, 3),
(51, 'vac2', '2022-01-01', '021203060269', '220101060267', 49, 3),
(52, 'vac3', '2022-02-01', '021203060269', '220101060267', 53, 4),
(53, 'vac5', '2022-03-01', '021203060269', '220101060267', 57, 5),
(54, 'vac10', '2022-03-01', '021203060269', '220101060267', 57, 5),
(55, 'vac13', '2022-03-01', '021203060269', '220101060267', 57, 5),
(56, 'vac1', '2022-06-14', '021203060269', '220202060269', 49, 3),
(57, 'vac10', '2022-06-22', '021203060269', '220202060269', 49, 10),
(58, 'vac1', '2022-06-24', '021203060269', '220606060276', 24, 3),
(59, 'vac21', '2022-08-24', '021203060269', '220101060267', 40, 40);

-- --------------------------------------------------------

--
-- Table structure for table `vaccine`
--

CREATE TABLE `vaccine` (
  `vaccineID` varchar(10) NOT NULL,
  `vaccineName` varchar(255) NOT NULL,
  `childAge` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vaccine`
--

INSERT INTO `vaccine` (`vaccineID`, `vaccineName`, `childAge`) VALUES
('vac1', 'BCG', 0),
('vac10', 'Hib (dos 2)', 3),
('vac11', 'Hib (dos 3)', 5),
('vac12', 'Hib (booster)', 18),
('vac13', 'IPV (dos 1)', 2),
('vac14', 'IPV (dos 2)', 3),
('vac15', 'IPV (dos 3)', 5),
('vac16', 'IPV (booster)', 18),
('vac17', 'Measles (Sabah)', 6),
('vac18', 'JE (dos 1)(Sarawak)', 9),
('vac19', 'JE (dos 2)(Sarawak)', 10),
('vac2', 'Hepatitis B (dos 1)', 0),
('vac20', 'JE (dos 3)(Sarawak)', 18),
('vac21', 'MMR', 12),
('vac3', 'Hepatitis B (dos 2)', 1),
('vac4', 'Hepatitis B (dos 3)', 6),
('vac5', 'DTaP/DT (dos 1)', 2),
('vac6', 'DTaP/DT (dos 2)', 3),
('vac7', 'DTaP/DT (dos 3)', 5),
('vac8', 'DTaP/DT (booster)', 18),
('vac9', 'Hib (dos 1)', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appointmentID`),
  ADD KEY `childIC` (`childIC`),
  ADD KEY `nextVaccine` (`nextVaccine`);

--
-- Indexes for table `child`
--
ALTER TABLE `child`
  ADD PRIMARY KEY (`childIC`),
  ADD KEY `fk_parentsIC` (`parentsIC`);

--
-- Indexes for table `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`parentsIC`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staffIC`);

--
-- Indexes for table `vaccinationrecord`
--
ALTER TABLE `vaccinationrecord`
  ADD PRIMARY KEY (`vaccineRecordID`),
  ADD KEY `adminIC` (`staffIC`),
  ADD KEY `childIC` (`childIC`),
  ADD KEY `vaccineID` (`vaccineID`);

--
-- Indexes for table `vaccine`
--
ALTER TABLE `vaccine`
  ADD PRIMARY KEY (`vaccineID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appointmentID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `vaccinationrecord`
--
ALTER TABLE `vaccinationrecord`
  MODIFY `vaccineRecordID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_ibfk_1` FOREIGN KEY (`childIC`) REFERENCES `child` (`childIC`),
  ADD CONSTRAINT `appointment_ibfk_2` FOREIGN KEY (`nextVaccine`) REFERENCES `vaccine` (`vaccineID`);

--
-- Constraints for table `child`
--
ALTER TABLE `child`
  ADD CONSTRAINT `fk_parentsIC` FOREIGN KEY (`parentsIC`) REFERENCES `parents` (`parentsIC`);

--
-- Constraints for table `vaccinationrecord`
--
ALTER TABLE `vaccinationrecord`
  ADD CONSTRAINT `vaccinationrecord_ibfk_1` FOREIGN KEY (`staffIC`) REFERENCES `staff` (`staffIC`),
  ADD CONSTRAINT `vaccinationrecord_ibfk_2` FOREIGN KEY (`childIC`) REFERENCES `child` (`childIC`),
  ADD CONSTRAINT `vaccinationrecord_ibfk_3` FOREIGN KEY (`vaccineID`) REFERENCES `vaccine` (`vaccineID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
