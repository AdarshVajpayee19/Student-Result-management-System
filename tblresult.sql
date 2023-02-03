-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3311
-- Generation Time: Jan 30, 2023 at 05:51 AM
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
-- Table structure for table `tblresult`
--

CREATE TABLE `tblresult` (
  `id` int(11) NOT NULL,
  `StudentId` int(11) DEFAULT NULL,
  `ClassId` int(11) DEFAULT NULL,
  `SubjectId` int(11) DEFAULT NULL,
  `marks` int(11) DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblresult`
--

INSERT INTO `tblresult` (`id`, `StudentId`, `ClassId`, `SubjectId`, `marks`, `PostingDate`, `UpdationDate`) VALUES
(1, 1, 3, 5, 78, '0000-00-00 00:00:00', '2023-01-20 18:15:50'),
(2, 1, 3, 4, 98, '2023-01-07 17:22:57', '2023-01-20 18:15:50'),
(3, 1, 3, 7, 100, '2023-01-07 17:22:57', '2023-01-20 18:15:50'),
(4, 1, 3, 2, 97, '2023-01-07 17:22:57', '2023-01-20 18:15:50'),
(5, 1, 3, 3, 95, '2023-01-07 17:22:57', '2023-01-20 18:15:50'),
(6, 1, 3, 8, 100, '2023-01-07 17:22:57', '2023-01-20 18:15:50'),
(7, 1, 3, 9, 90, '2023-01-07 17:22:57', '2023-01-20 18:15:50'),
(8, 1, 3, 1, 85, '2023-01-07 17:22:57', '2023-01-20 18:15:50'),
(9, 1, 3, 6, 92, '2023-01-07 17:22:57', '2023-01-20 18:15:50'),
(10, 2, 3, 5, 80, '2023-01-07 17:23:48', '2023-01-20 18:15:50'),
(11, 2, 3, 4, 70, '2023-01-07 17:23:48', '2023-01-20 18:15:50'),
(12, 2, 3, 7, 65, '2023-01-07 17:23:48', '2023-01-20 18:15:50'),
(13, 2, 3, 2, 78, '2023-01-07 17:23:48', '2023-01-20 18:15:50'),
(14, 2, 3, 3, 45, '2023-01-07 17:23:48', '2023-01-20 18:15:50'),
(15, 2, 3, 8, 78, '2023-01-07 17:23:48', '2023-01-20 18:15:50'),
(16, 2, 3, 9, 80, '2023-01-07 17:23:48', '2023-01-20 18:15:50'),
(17, 2, 3, 1, 80, '2023-01-07 17:23:48', '2023-01-29 10:22:58'),
(18, 2, 3, 6, 60, '2023-01-07 17:23:48', '2023-01-20 18:15:50'),
(19, 3, 3, 5, 100, '2023-01-07 17:26:06', '2023-01-20 18:15:50'),
(20, 3, 3, 4, 98, '2023-01-07 17:26:06', '2023-01-20 18:15:50'),
(21, 3, 3, 7, 97, '2023-01-07 17:26:06', '2023-01-20 18:15:50'),
(22, 3, 3, 2, 88, '2023-01-07 17:26:06', '2023-01-20 18:15:50'),
(23, 3, 3, 3, 98, '2023-01-07 17:26:06', '2023-01-20 18:15:50'),
(24, 3, 3, 8, 100, '2023-01-07 17:26:06', '2023-01-20 18:15:50'),
(25, 3, 3, 9, 98, '2023-01-07 17:26:06', '2023-01-20 18:15:50'),
(75, 14, 3, 5, 90, '2023-01-29 10:26:23', NULL),
(76, 14, 3, 4, 78, '2023-01-29 10:26:23', NULL),
(77, 14, 3, 7, 65, '2023-01-29 10:26:23', NULL),
(78, 14, 3, 2, 78, '2023-01-29 10:26:23', NULL),
(79, 14, 3, 3, 79, '2023-01-29 10:26:23', NULL),
(80, 14, 3, 8, 78, '2023-01-29 10:26:23', NULL),
(81, 14, 3, 9, 79, '2023-01-29 10:26:23', NULL),
(82, 14, 3, 1, 79, '2023-01-29 10:26:23', NULL),
(83, 14, 3, 6, 90, '2023-01-29 10:26:23', NULL);

--
-- Triggers `tblresult`
--
DELIMITER $$
CREATE TRIGGER `after_result_insert` AFTER INSERT ON `tblresult` FOR EACH ROW begin
insert into tblresult_backup values(NEW.id,NEW.StudentId,NEW.ClassId,NEW.SubjectId,NEW.marks,NEW.PostingDate,NEW.UpdationDate);
end
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `after_result_update` AFTER UPDATE ON `tblresult` FOR EACH ROW begin
update tblresult_backup set marks=1*marks;
end
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblresult`
--
ALTER TABLE `tblresult`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblresult`
--
ALTER TABLE `tblresult`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
