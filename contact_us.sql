-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2023 at 11:19 AM
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
-- Database: `jewel_webnet`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `Name` text DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Subject` text DEFAULT NULL,
  `Contact` bigint(10) DEFAULT NULL,
  `Massage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `Name`, `Email`, `Subject`, `Contact`, `Massage`) VALUES
(1, 'vipul vishwakarma', 'vipulvishwakarma161@gmail.com', 'aaaaaaaaaaaaaaaaaaaaaaaaaaafas', 2147483647, 'vcxzcvxcbxcvbvcncvn'),
(2, 'vipul vishwakarma', 'vipulvishwakarma161@gmail.com', 'sxvxzcvxc', 2147483647, 'dfsfgdsgdfhfghfgjhg'),
(3, 'vipul vishwakarma', 'vipulvishwakarma161@gmail.com', 'sxvxzcvxc', 7900108552, 'dfsfgdsgdfhfghfgjhg'),
(4, 'Arjoo Vishwakarma', 'developer@oriflammeitsolutions.com', 'dgdghfdh', 797770163, 'vdvncmbm'),
(5, '', '', '', 0, ''),
(6, 'Arjoo Vishwakarma', 'developer@oriflammeitsolutions.com', 'aDSFSDFSD', 7900108552, 'hello test'),
(7, 'Arjoo Vishwakarma', 'developer@oriflammeitsolutions.com', 'aDSFSDFSD', 7900108552, 'hello test'),
(8, 'Aipul Vishwakarma', 'developer@oriflammeitsolutions.com', 'wafsd', 7900108552, 'dhfgjfgjgh'),
(9, '', '', '', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
