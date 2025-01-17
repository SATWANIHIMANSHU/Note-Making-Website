-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2025 at 06:59 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inotes`
--

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `Sr.no` int(11) NOT NULL,
  `title` varchar(45) NOT NULL,
  `Description` text NOT NULL,
  `tstamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`Sr.no`, `title`, `Description`, `tstamp`) VALUES
(3, 'hii Himanshu', 'who are you?', '2024-07-28 12:42:15'),
(6, 'CMAT vedio by raman tiwari', 'Watch first vedio of cmat quants subject by Mukesh tiwari', '2024-07-28 12:51:55'),
(7, 'CMAT vedio by raman tiwari', 'Watch first vedio of cmat quants subject by raman tiwari', '2024-07-28 12:54:01'),
(8, 'CMAT vedio by raman tiwari', 'Watch first vedio of cmat quants subject by raman tiwari', '2024-07-28 12:56:38'),
(9, 'CMAT vedio by raman tiwari', 'Watch first vedio of cmat quants subject by raman tiwari', '2024-07-28 12:58:58'),
(10, 'CMAT vedio by raman tiwari', 'Watch first vedio of cmat quants subject by raman tiwari', '2024-07-28 12:59:05'),
(12, 'CMAT vedio by raman tiwari', 'Watch first vedio of cmat quants subject by raman tiwari', '2024-07-28 13:00:39'),
(13, 'CMAT vedio by raman tiwari', 'Watch first vedio of cmat quants subject by raman tiwari', '2024-07-28 13:05:03'),
(14, 'CMAT vedio by raman tiwari', 'Watch first vedio of cmat quants subject by raman tiwari', '2024-07-28 13:06:02'),
(15, 'CMAT vedio by raman tiwari', 'Watch first vedio of cmat quants subject by raman tiwari', '2024-07-28 13:06:26'),
(16, 'CMAT vedio by raman tiwari', 'Watch first vedio of cmat quants subject by raman tiwari', '2024-07-28 13:06:48'),
(17, 'CMAT vedio by raman tiwari', 'Watch first vedio of cmat quants subject by raman tiwari', '2024-07-28 13:07:55'),
(18, 'CMAT vedio by raman tiwari', 'Watch first vedio of cmat quants subject by raman tiwari', '2024-07-28 13:08:08'),
(19, 'CMAT vedio by raman tiwari', 'Watch first vedio of cmat quants subject by raman tiwari', '2024-07-28 13:08:23'),
(20, 'CMAT vedio by raman tiwari', 'Watch first vedio of cmat quants subject by raman tiwari', '2024-07-28 13:08:39'),
(21, 'hi how are you', 'nice i am fine', '2024-07-29 19:02:37'),
(22, 'hi how are you', 'nice i am fine', '2024-07-29 19:09:34'),
(24, 'Good Morning', 'Make a personal portfolio', '2025-01-10 11:52:30');

-- --------------------------------------------------------

--
-- Table structure for table `notes2`
--

CREATE TABLE `notes2` (
  `sno` int(10) NOT NULL,
  `title` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notes2`
--

INSERT INTO `notes2` (`sno`, `title`, `description`, `Date`) VALUES
(1, '1', '134', '0000-00-00'),
(2, '33', '44', '0000-00-00'),
(3, '2', '4', '0000-00-00'),
(4, '5', '89', '0000-00-00'),
(5, '6', '246', '0000-00-00'),
(6, '7', '674', '0000-00-00'),
(7, '8', '78', '0000-00-00'),
(8, '9', '4t56', '0000-00-00'),
(9, '11', 'ufufvbvvbrvirvvr', '0000-00-00'),
(10, '12', 'fb3iufbruvbvivuvrvbhruiv', '0000-00-00'),
(11, '134', 'iucbciudsbcuca', '0000-00-00'),
(12, '134', 'iucbciudsbcuca', '0000-00-00'),
(13, '134', 'iucbciudsbcuca', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`Sr.no`);

--
-- Indexes for table `notes2`
--
ALTER TABLE `notes2`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `Sr.no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `notes2`
--
ALTER TABLE `notes2`
  MODIFY `sno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
