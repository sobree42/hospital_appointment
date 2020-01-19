-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2018 at 10:38 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(3) UNSIGNED ZEROFILL NOT NULL,
  `admin_n` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `admin_pass` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Status` enum('ADMIN','USER') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'USER'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_n`, `admin_pass`, `Name`, `Status`) VALUES
(1001, 'admin', 'admin123', 'Hossni Sama', 'ADMIN'),
(1002, 'Hossni', '7412369', 'Hossni Sama', 'ADMIN');

-- --------------------------------------------------------

--
-- Table structure for table `admin_test`
--

CREATE TABLE `admin_test` (
  `id_admin` int(10) UNSIGNED ZEROFILL NOT NULL,
  `admin_n` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `admin_pass` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Aname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Aemail` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin_test`
--

INSERT INTO `admin_test` (`id_admin`, `admin_n`, `admin_pass`, `Aname`, `Aemail`) VALUES
(0000000101, 'admin', 'admin12345', 'Hossni Sama', 'the.sweet-prince@hotmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `appoin`
--

CREATE TABLE `appoin` (
  `appoin_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `dr_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `dr_id` int(10) NOT NULL,
  `dr_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `dr_pass` int(50) NOT NULL,
  `dr_address` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `dr_mobile` int(20) NOT NULL,
  `dr_Email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dr_specialty` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `dr_date` date NOT NULL,
  `dr_time` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`dr_id`, `dr_name`, `gender`, `dr_pass`, `dr_address`, `dr_mobile`, `dr_Email`, `dr_specialty`, `dr_date`, `dr_time`) VALUES
(1001, 'Hossni', 'Male', 123456, 'pattani', 2147483647, 'so0ona.hf@gmail.com', 'Heart', '0000-00-00', '00:00:00.000000'),
(1002, 'Hassan', 'Male', 123456, 'yala', 2147483647, 'Hassan@gmail.com', 'Cardiologist', '0000-00-00', '00:00:00.000000'),
(1005, 'Abdulrashid', 'Male', 123456, 'krabi', 427222452, 'abdulrashid@fake.com', 'Bone', '0000-00-00', '00:00:00.000000'),
(1006, 'wala', 'Female', 123456, 'makkah', 6665555, 'wala@gmail.com', 'Bone', '0000-00-00', '00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id_feed` int(11) NOT NULL,
  `text2` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `text1` varchar(150) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id_feed`, `text2`, `text1`) VALUES
(1, 'Good', 'GOOOOOOD');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `user_id` int(10) NOT NULL,
  `u_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `u_pass` int(50) NOT NULL,
  `u_address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `u_mobile` int(20) NOT NULL,
  `u_email` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`user_id`, `u_name`, `gender`, `u_pass`, `u_address`, `u_mobile`, `u_email`) VALUES
(1, 'Hassan', 'Male', 7412369, 'yala', 1234577, 'Hassan@gmail.com'),
(2, 'sobree', 'Male', 123456, 'pattani', 123456, 'sobree@gmail.com'),
(3, 'Fatmah', 'Female', 123456, 'makkah', 5555222, 'Fatmah@hotmail.com'),
(4, 'majed', 'Male', 123456, 'pattani', 666444555, 'majed@hotmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `admin_test`
--
ALTER TABLE `admin_test`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `appoin`
--
ALTER TABLE `appoin`
  ADD PRIMARY KEY (`appoin_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`dr_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id_feed`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1003;

--
-- AUTO_INCREMENT for table `admin_test`
--
ALTER TABLE `admin_test`
  MODIFY `id_admin` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `appoin`
--
ALTER TABLE `appoin`
  MODIFY `appoin_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `dr_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1007;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id_feed` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
