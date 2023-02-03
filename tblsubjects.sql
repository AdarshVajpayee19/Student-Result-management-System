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
-- Table structure for table `tblsubjects`
--

CREATE TABLE `tblsubjects` (
  `id` int(11) NOT NULL,
  `SubjectName` char(100) NOT NULL,
  `SubjectCode` varchar(100) NOT NULL,
  `Creationdate` timestamp NOT NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblsubjects`
--

INSERT INTO `tblsubjects` (`id`, `SubjectName`, `SubjectCode`, `Creationdate`, `UpdationDate`) VALUES
(1, 'Management, Entrepreneurship for IT industry', '18CS51', '2023-01-07 16:56:28', '0000-00-00 00:00:00'),
(2, 'Computer Networks', '18CS52', '2023-01-07 16:56:47', '0000-00-00 00:00:00'),
(3, 'Database Management System', '18CS53', '2023-01-07 16:57:13', '0000-00-00 00:00:00'),
(4, 'Automata Theory And Computability', '18CS54', '2023-01-07 16:57:37', '0000-00-00 00:00:00'),
(5, 'Application Development Using Python', '18CS55', '2023-01-07 16:57:55', '0000-00-00 00:00:00'),
(6, 'Unix Programming', '18CS56', '2023-01-07 16:58:10', '0000-00-00 00:00:00'),
(7, 'Computer Network Laboratory', '18CSL57', '2023-01-07 16:58:35', '2023-01-07 16:59:41'),
(8, 'DBMS Laboratory With Mini Project', '18CSL58', '2023-01-07 16:58:56', '2023-01-07 17:00:39'),
(9, 'Environmental Studies', '18CIV59', '2023-01-07 16:59:09', '2023-01-07 17:00:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblsubjects`
--
ALTER TABLE `tblsubjects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblsubjects`
--
ALTER TABLE `tblsubjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
