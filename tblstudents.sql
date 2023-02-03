-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3311
-- Generation Time: Jan 29, 2023 at 11:35 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `srms`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblstudents`
--

CREATE TABLE `tblstudents` (
  `StudentId` int(11) NOT NULL,
  `StudentName` varchar(100) NOT NULL,
  `RollId` varchar(100) NOT NULL,
  `StudentEmail` varchar(100) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `DOB` varchar(100) NOT NULL,
  `ClassId` int(11) NOT NULL,
  `RegDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `Status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblstudents`
--

INSERT INTO `tblstudents` (`StudentId`, `StudentName`, `RollId`, `StudentEmail`, `Gender`, `DOB`, `ClassId`, `RegDate`, `UpdationDate`, `Status`) VALUES
(1, 'Abhay M Kamat', '001', 'ise046@bnmit.in', 'Male', '2002-12-30', 3, '2023-01-07 17:07:16', '2023-01-07 17:07:45', 1),
(2, 'Adarsh Vajpayee', '002', 'ise047@bnmit.in', 'Male', '2001-08-19', 3, '2023-01-07 17:09:07', '2023-01-07 17:09:58', 1),
(3, 'Aditi Srinivas', '003', 'ise048@bnmit.in', 'Female', '2002-12-31', 3, '2023-01-07 17:11:35', '2023-01-07 17:15:36', 1),
(4, 'Aditya', '001', 'cse001@bnmit.in', 'Male', '2001-01-10', 1, '2023-01-07 17:12:52', NULL, 1),
(5, 'Arun', '002', 'cse002@bnmit.in', 'Male', '2002-06-15', 1, '2023-01-07 17:13:28', NULL, 1),
(6, 'Bhavana patil', '003', 'cse003@bnmit.in', 'Female', '2001-01-14', 1, '2023-01-07 17:14:11', '2023-01-07 17:15:51', 1),
(7, 'Adarsh Thambi', '001', 'cse100@bnmit.in', 'Male', '2001-07-24', 2, '2023-01-07 17:15:18', NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblstudents`
--
ALTER TABLE `tblstudents`
  ADD PRIMARY KEY (`StudentId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblstudents`
--
ALTER TABLE `tblstudents`
  MODIFY `StudentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
