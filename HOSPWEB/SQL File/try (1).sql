-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2022 at 07:17 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `try`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`, `ID`) VALUES
('admin@gmail.com', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `adminlog`
--

CREATE TABLE `adminlog` (
  `ID` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `login` datetime NOT NULL,
  `logout` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlog`
--

INSERT INTO `adminlog` (`ID`, `Email`, `login`, `logout`) VALUES
(1, 'admin@gmail.com', '2022-12-05 08:16:39', '2022-12-06 09:53:36'),
(2, 'admin@gmail.com', '2022-12-05 08:33:02', '2022-12-06 09:53:36'),
(3, 'admin@gmail.com', '2022-12-05 12:27:08', '2022-12-06 09:53:36'),
(4, 'admin@gmail.com', '2022-12-05 12:43:44', '2022-12-06 09:53:36'),
(5, 'admin@gmail.com', '2022-12-05 12:45:32', '2022-12-06 09:53:36'),
(6, 'admin@gmail.com', '2022-12-05 13:34:29', '2022-12-06 09:53:36'),
(7, 'admin@gmail.com', '2022-12-05 14:34:19', '2022-12-06 09:53:36'),
(8, 'admin@gmail.com', '2022-12-06 05:08:46', '2022-12-06 09:53:36'),
(9, 'admin@gmail.com', '2022-12-06 06:53:54', '2022-12-06 09:53:36');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `ID` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `doc` varchar(100) NOT NULL,
  `date` varchar(50) NOT NULL,
  `time` varchar(20) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`ID`, `Email`, `doc`, `date`, `time`, `status`) VALUES
(1, 'k@gmail.com', 'DermatologistDr. GUl', '12/16/2022', '10:00PM', 'Done'),
(2, 'k@gmail.com', 'DermatologistDr. GUl', '12/15/2022', '10:00PM', ''),
(3, 'k@gmail.com', 'DermatologistDr. GUl', '12/15/2022', '10:00PM', ''),
(4, 'k@gmail.com', 'General PhysicianDr Faheem Ashraff', '12/05/2022', '10:00Am', 'Done'),
(5, 'k@gmail.com', 'General PhysicianDr Faheem Ashraff', '12/20/2022', '11:00PM', 'Approved'),
(6, 'k@gmail.com', 'Gynecologist/ObstetricianDr. Atta UR Rehman', '12/13/2022', '02:00 PM', 'Active'),
(7, 'k@gmail.com', 'General PhysicianDr Faheem Ashraff', '12/06/2022', '02:00 PM', 'Approved'),
(8, 'k@gmail.com', 'DermatologistDr. GUl', '12/19/2022', '09:00 PM', 'Active'),
(10, 'k@gmail.com', 'General PhysicianDr Faheem Ashraff', '12/13/2022', '06:00 PM', 'Active'),
(11, 'k@gmail.com', 'General PhysicianDr Faheem Ashraff', '12/25/2022', '10:00Am', 'CANCELED'),
(12, 'k@gmail.com', 'General PhysicianDr Faheem Ashraff', '12/12/2022', '02:00 PM', 'CANCELED'),
(13, 'ham@gmail.com', 'Gynecologist/ObstetricianDr. Haris Kamal', '12/17/2022', '03:30 PM', 'Done'),
(14, 'k@gmail.com', 'DermatologistDr. GUl', '12/05/2022', '10:00PM', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `Query` varchar(100) NOT NULL,
  `Date` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `contact`, `Query`, `Date`) VALUES
('ham', 'k200487@nu.edu.pk', '9997', 'dcvjsdcvsdcsd', '2022-12-06 14:52:49');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `fullname` text NOT NULL,
  `fees` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` int(11) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `sno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`fullname`, `fees`, `email`, `city`, `address`, `contact`, `Password`, `sno`) VALUES
('Dr Faheem Ashraff', 1500, 'faheem@gmail.com', 'karachi', 'Gulshan', 6689868, 'poster', 2),
('Dr. GUl', 1750, 'Gul@gmail.com', 'karachi', 'Gulshan', 76676698, 'tester', 3),
('Dr. Haris Kamal', 4000, 'haris@gmail.com', 'karachi', 'Gulshan', 92382929, 'haris12', 1),
('Dr. Atta UR Rehman', 3500, 'qwer@gmail.com', 'karachi', 'Gulshan', 20492494, 'iiiii', 1),
('Dr Israr Ahmed', 2000, 'theworldisreal@gmail.com', 'City', 'Gulshan-e-Iqbal', 8938398, 'israr', 4);

-- --------------------------------------------------------

--
-- Table structure for table `doctorlog`
--

CREATE TABLE `doctorlog` (
  `ID` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `login` datetime NOT NULL,
  `logout` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctorlog`
--

INSERT INTO `doctorlog` (`ID`, `Email`, `login`, `logout`) VALUES
(1, 'faheem@gmail.com', '2022-12-02 14:57:33', '2022-12-06 09:55:58'),
(2, 'faheem@gmail.com', '2022-12-02 14:54:15', '2022-12-06 09:55:58'),
(3, 'faheem@gmail.com', '2022-12-03 06:33:39', '2022-12-06 09:55:58'),
(4, 'faheem@gmail.com', '2022-12-03 15:20:11', '2022-12-06 09:55:58'),
(5, 'faheem@gmail.com', '2022-12-04 17:51:40', '2022-12-06 09:55:58'),
(6, 'faheem@gmail.com', '2022-12-05 08:11:14', '2022-12-06 09:55:58'),
(7, 'faheem@gmail.com', '2022-12-05 12:43:13', '2022-12-06 09:55:58'),
(8, 'faheem@gmail.com', '2022-12-05 14:17:58', '2022-12-06 09:55:58'),
(9, 'haris@gmail.com', '2022-12-05 14:27:11', '2022-12-05 14:34:10'),
(10, 'faheem@gmail.com', '2022-12-05 14:41:53', '2022-12-06 09:55:58'),
(11, 'faheem@gmail.com', '2022-12-05 15:02:26', '2022-12-06 09:55:58'),
(12, 'faheem@gmail.com', '2022-12-06 05:01:27', '2022-12-06 09:55:58'),
(13, 'faheem@gmail.com', '2022-12-06 05:02:44', '2022-12-06 09:55:58'),
(14, 'theworldisreal@gmail.com', '2022-12-06 05:22:05', '2022-12-06 05:23:06'),
(15, 'faheem@gmail.com', '2022-12-06 09:54:37', '2022-12-06 09:55:58');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `fullname` text NOT NULL,
  `AGE` int(11) NOT NULL,
  `Email` varchar(80) NOT NULL,
  `Gender` text NOT NULL,
  `Password` varchar(80) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `City` varchar(30) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ver` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`fullname`, `AGE`, `Email`, `Gender`, `Password`, `Address`, `City`, `Date`, `ver`) VALUES
('ibrahim', 19, 'ascjcadkfjsd@gmail.com', 'male', 'poppop', 'Gulshan-e-hadeed', 'karachi', '2022-12-06 14:15:15', 0),
('hamdan khan', 22, 'ham@gmail.com', 'male', 'hamham', 'Johar block 5', 'karachi', '2022-12-06 14:09:25', 1),
('Hammad Khan', 20, 'hammad@gmail.com', 'male', 'hammad', 'Gulshan-e-hadeed', 'karachi', '2022-12-06 14:09:08', 0),
('Ibrahim', 19, 'k@gmail.com', 'male', 'irahim', 'Gulshan', 'City', '2022-12-05 22:17:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `patientent`
--

CREATE TABLE `patientent` (
  `ID` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `doc` varchar(100) NOT NULL,
  `Symptoms` varchar(100) NOT NULL,
  `diagnosis` varchar(100) NOT NULL,
  `prescription` varchar(100) NOT NULL,
  `AppNo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patientent`
--

INSERT INTO `patientent` (`ID`, `Email`, `doc`, `Symptoms`, `diagnosis`, `prescription`, `AppNo`) VALUES
(1, 'k@gmail.com', 'Dr Utta UR Rehman', 'Cough,fever.', 'Viral flu', 'Panadol,cough syrup. Twice a day.', 1),
(2, 'k@gmail.com', 'Dr Faheem Ashraff', 'cough', 'tonsils', 'Cough syrup', 4),
(3, 'ham@gmail.com', 'Dr. Haris Kamal', 'cough', 'tonsils', 'Cough syrup', 13);

-- --------------------------------------------------------

--
-- Table structure for table `specialization`
--

CREATE TABLE `specialization` (
  `sno` int(11) NOT NULL,
  `special` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `specialization`
--

INSERT INTO `specialization` (`sno`, `special`) VALUES
(1, 'Gynecologist/Obstetrician'),
(2, 'General Physician'),
(3, 'Dermatologist'),
(4, 'Dentist'),
(5, 'Ear-Nose-Throat (Ent) Specialist'),
(6, 'Bones Specialist demo');

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `ID` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `login` datetime NOT NULL,
  `logout` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`ID`, `Email`, `login`, `logout`) VALUES
(1, 'k@gmail.com', '2022-11-29 10:15:36', '2022-12-06 05:43:28'),
(2, 'k@gmail.com', '2022-11-30 07:16:10', '2022-12-06 05:43:28'),
(3, 'k@gmail.com', '2022-11-30 11:20:50', '2022-12-06 05:43:28'),
(4, 'k@gmail.com', '2022-12-01 13:42:25', '2022-12-06 05:43:28'),
(5, 'k@gmail.com', '2022-12-01 13:45:04', '2022-12-06 05:43:28'),
(6, 'k@gmail.com', '2022-12-01 13:49:25', '2022-12-06 05:43:28'),
(7, 'k@gmail.com', '2022-12-02 02:41:37', '2022-12-06 05:43:28'),
(8, 'k@gmail.com', '2022-12-02 05:51:49', '2022-12-06 05:43:28'),
(9, 'k@gmail.com', '2022-12-02 06:06:45', '2022-12-06 05:43:28'),
(10, 'k@gmail.com', '2022-12-02 06:29:37', '2022-12-06 05:43:28'),
(11, 'hammad@gmail.com', '2022-12-04 17:40:21', '2022-12-04 17:46:07'),
(12, 'hammad@gmail.com', '2022-12-04 17:44:25', '2022-12-04 17:46:07'),
(13, 'ham@gmail.com', '2022-12-04 17:50:31', '2022-12-06 04:56:37'),
(14, 'k@gmail.com', '2022-12-05 07:21:55', '2022-12-06 05:43:28'),
(15, 'k@gmail.com', '2022-12-05 07:59:42', '2022-12-06 05:43:28'),
(16, 'k@gmail.com', '2022-12-05 12:45:13', '2022-12-06 05:43:28'),
(17, 'k@gmail.com', '2022-12-05 14:41:20', '2022-12-06 05:43:28'),
(18, 'k@gmail.com', '2022-12-05 14:47:50', '2022-12-06 05:43:28'),
(19, 'k@gmail.com', '2022-12-05 14:50:00', '2022-12-06 05:43:28'),
(20, 'k@gmail.com', '2022-12-05 15:00:27', '2022-12-06 05:43:28'),
(21, 'ham@gmail.com', '2022-12-06 04:55:51', '2022-12-06 04:56:37'),
(22, 'hammad@gmail.com', '2022-12-06 04:57:52', '2022-12-06 04:57:52'),
(23, 'k@gmail.com', '2022-12-06 05:00:35', '2022-12-06 05:43:28'),
(24, 'k@gmail.com', '2022-12-06 05:41:33', '2022-12-06 05:43:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Emailunique` (`email`);

--
-- Indexes for table `adminlog`
--
ALTER TABLE `adminlog`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`email`),
  ADD KEY `sno` (`sno`);

--
-- Indexes for table `doctorlog`
--
ALTER TABLE `doctorlog`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `patientent`
--
ALTER TABLE `patientent`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `AppNo` (`AppNo`),
  ADD KEY `Email` (`Email`);

--
-- Indexes for table `specialization`
--
ALTER TABLE `specialization`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `adminlog`
--
ALTER TABLE `adminlog`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `doctorlog`
--
ALTER TABLE `doctorlog`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `patientent`
--
ALTER TABLE `patientent`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `specialization`
--
ALTER TABLE `specialization`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `doctor`
--
ALTER TABLE `doctor`
  ADD CONSTRAINT `doctor_ibfk_1` FOREIGN KEY (`sno`) REFERENCES `specialization` (`sno`);

--
-- Constraints for table `patientent`
--
ALTER TABLE `patientent`
  ADD CONSTRAINT `patientent_ibfk_1` FOREIGN KEY (`AppNo`) REFERENCES `appointment` (`ID`),
  ADD CONSTRAINT `patientent_ibfk_2` FOREIGN KEY (`Email`) REFERENCES `patient` (`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
