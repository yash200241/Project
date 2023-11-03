-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2022 at 09:06 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `Password`) VALUES
('Yash', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `studentdetail`
--

CREATE TABLE `studentdetail` (
  `AdmissionNumber` varchar(10) NOT NULL,
  `First Name` varchar(20) NOT NULL,
  `Middle Name` varchar(20) NOT NULL,
  `Last Name` varchar(20) NOT NULL,
  `DOB` date NOT NULL,
  `Mes Id` varchar(50) NOT NULL,
  `Contact` int(11) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Pin Code` int(11) NOT NULL,
  `State` varchar(15) NOT NULL,
  `Country` varchar(15) NOT NULL,
  `College Year` varchar(6) NOT NULL,
  `Association` varchar(20) NOT NULL,
  `Course` varchar(10) NOT NULL,
  `CreditPoints` int(11) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentdetail`
--

INSERT INTO `studentdetail` (`AdmissionNumber`, `First Name`, `Middle Name`, `Last Name`, `DOB`, `Mes Id`, `Contact`, `Gender`, `City`, `Pin Code`, `State`, `Country`, `College Year`, `Association`, `Course`, `CreditPoints`, `password`) VALUES
('2019PC0721', 'Yash', 'Sujit', 'Pednekar', '2002-04-01', 'pednekaryscs19@student.mes.ac.in', 2147483647, 'Male', 'Navi Mumbai', 410206, 'Chunabhatti', 'India', 'Third', 'Maths association', 'BSc CS', 2, '123456'),
('2019PC0722', 'ross', 'why', 'hello', '2022-02-01', 'yashpednekar60@gmail.com', 1234567788, 'Male', 'ha', 410206, 'chembur', 'India', 'Third', 'math ', 'BSc CS', 2, '1234567'),
('2019PC0723', 'Sharad', 'ajay', 'tiwari', '2001-08-23', 'sharad@student.mes.ac.in', 1234525252, 'Male', 'mumbai', 410206, 'maharashtra', 'India', 'Third', '', 'BSc CS', 0, '123456');

-- --------------------------------------------------------

--
-- Table structure for table `studentqualification`
--

CREATE TABLE `studentqualification` (
  `AdmissionNumber` varchar(15) NOT NULL,
  `Class X Percentage` int(11) NOT NULL,
  `Class X Year of Passing` int(11) NOT NULL,
  `Class X Board` varchar(20) NOT NULL,
  `Class XII Percentage` int(11) NOT NULL,
  `Class XII Year of Passing` int(11) NOT NULL,
  `Class XII Board` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentqualification`
--

INSERT INTO `studentqualification` (`AdmissionNumber`, `Class X Percentage`, `Class X Year of Passing`, `Class X Board`, `Class XII Percentage`, `Class XII Year of Passing`, `Class XII Board`) VALUES
('2019PC0721', 69, 2017, 'State', 64, 2019, 0),
('2019PC0722', 66, 2022, 'state', 66, 66, 0),
('2019PC0723', 80, 2017, 'state', 80, 2019, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `studentdetail`
--
ALTER TABLE `studentdetail`
  ADD PRIMARY KEY (`AdmissionNumber`);

--
-- Indexes for table `studentqualification`
--
ALTER TABLE `studentqualification`
  ADD PRIMARY KEY (`AdmissionNumber`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
