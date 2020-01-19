-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2018 at 02:41 AM
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
  `appoin_id` int(11) NOT NULL,
  `dr_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `a_month` int(11) NOT NULL,
  `a_date` int(11) NOT NULL,
  `a_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `appoin`
--

INSERT INTO `appoin` (`appoin_id`, `dr_id`, `user_id`, `a_month`, `a_date`, `a_time`) VALUES
(29, 1007, 1, 10, 30, 14),
(30, 1028, 2, 12, 2, 14),
(31, 1028, 2, 12, 2, 24),
(44, 1001, 2, 11, 4, 3),
(45, 1002, 2, 11, 8, 14),
(48, 1002, 2, 11, 8, 0),
(49, 1005, 2, 11, 30, 1),
(50, 1005, 2, 11, 30, 12),
(51, 1005, 2, 11, 30, 24);

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

CREATE TABLE `categorie` (
  `id_cate` int(10) NOT NULL,
  `cate_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categorie`
--

INSERT INTO `categorie` (`id_cate`, `cate_name`) VALUES
(1, 'Normal'),
(2, 'Bone'),
(3, 'Heart'),
(4, 'Dentist'),
(5, 'Neurologist'),
(6, 'Kidney'),
(7, 'Cardiologist'),
(8, 'Plastic Surgeon');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id_contus` int(11) NOT NULL,
  `fname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `text` varchar(150) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id_contus`, `fname`, `lname`, `country`, `text`) VALUES
(1, 'Mickey', 'Mouse', 'USA', 'such us a good website system ');

-- --------------------------------------------------------

--
-- Table structure for table `descrip`
--

CREATE TABLE `descrip` (
  `id_treat` int(11) NOT NULL,
  `dr_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `treat_for` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `treat` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `note` varchar(150) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `descrip`
--

INSERT INTO `descrip` (`id_treat`, `dr_id`, `user_id`, `treat_for`, `treat`, `note`) VALUES
(13, 1026, 2, 'aaa', 'abc', 'goood'),
(14, 1028, 2, 'abs', 'xxxx', 'dlkcdk');

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
  `id_cate` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`dr_id`, `dr_name`, `gender`, `dr_pass`, `dr_address`, `dr_mobile`, `dr_Email`, `dr_specialty`, `id_cate`) VALUES
(1001, 'Hossni', 'Male', 123456, 'pattani', 2147483647, 'so0ona.hf@gmail.com', 'Heart', 3),
(1002, 'Hassan', 'Male', 123456, 'yala', 2147483647, 'Hassan@gmail.com', 'Cardiologist', 7),
(1005, 'Abdulrashid', 'Male', 123456, 'krabi', 427222452, 'abdulrashid@fake.com', 'Bone', 2),
(1006, 'wala', 'Female', 123456, 'makkah', 6665555, 'wala@gmail.com', 'Bone', 2),
(1007, 'anas', 'Female', 123456, 'narathiwat', 2147483647, 'anas@gmail.com', 'Bone', 2),
(1008, 'nafisah', 'Female', 123456, 'bangkok', 2147483647, 'nafisah@hotmail.com', 'Heart', 3),
(1009, 'muhammad.zain', 'Male', 123456, 'sirowt', 2147483647, 'muhammad.zain', 'Heart', 3),
(1010, 'kamilia', 'Female', 123456, 'pattaya', 2147483647, 'kamilia@gmail.com', 'Cardiologist', 7),
(1011, 'khaled.rosol', 'Male', 123456, 'pattani', 2147483647, 'khaled@yahoo.com', 'Cardiologist', 7),
(1012, 'abdullah.jameel', 'Male', 123456, 'malee', 2147483647, 'abdullah.jameel@hotmail.com', 'Dentist', 4),
(1013, 'qaseem', 'Male', 123456, 'sraow', 2147483647, 'qaseem@ftu.com', 'Dentist', 4),
(1014, 'mano- shya', 'Male', 123456, 'jeddah', 2147483647, 'shya@yahoo.com', 'Dentist', 4),
(1015, 'rahaf.alsyami', 'Female', 123456, 'jeddah', 2147483647, 'rahaf.alsyami@malak.com', 'Neurologist', 5),
(1016, 'jameelah.flower', 'Female', 123456, 'mayoo', 2147483647, 'flower@gmail.com', 'Neurologist', 5),
(1017, 'sameer.fatani', 'Male', 123456, 'taif', 2147483647, 'sameer.fatani@gmail.com', 'Neurologist', 5),
(1018, 'rowed', 'Male', 123456, 'ohayo', 2147483647, 'rowed@yahoo.com', 'Kidney', 6),
(1019, 'HASSAN-Z', 'Male', 123456, 'makkah', 2147483647, 'HASSAN-Z@gmail.com', 'Kidney', 6),
(1020, 'fisal.kasoor', 'Male', 123456, 'endia', 2147483647, 'kasoor@hotmail.com', 'Kidney', 6),
(1021, 'juni-deeb', 'Male', 123456, 'mehok', 2147483647, 'juni-deeb@gmail.com', 'Plastic Surgeon', 8),
(1022, 'mike-sol', 'Male', 123456, 'yaha', 2147483647, 'sol@yahoo.com', 'Plastic Surgeon', 8),
(1023, 'roof24', 'Female', 123456, 'makkah', 2147483647, 'roof24@gmail.com', 'Plastic Surgeon', 8),
(1024, 'James', 'Male', 123456, 'canada', 12445355, 'James@hotmail.com', 'Normal', 1),
(1025, 'Ryan', 'Male', 123456, 'Jeddah', 123454557, 'Ryan@gmail.com', 'Normal', 1),
(1026, 'Eli', 'Female', 123456, 'canada', 12257785, 'Eli@gmail.com', 'Normal', 1),
(1027, 'Khalid Mansor', 'Male', 123456, 'makkah', 1234567890, 'Khalid_fatani@gmail.com', 'Normal', 1),
(1028, 'Tassnim sani', 'Female', 123456789, 'pattani', 2145978, 'Tassnim@gmail.com', 'Heart', 3);

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
(1, 'Good', 'GOOOOOOD'),
(2, 'Good', 'Anything alse');

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
(2, 'sobree', 'Male', 123456, 'pattani', 123456789, 'sobree@gmail.com'),
(3, 'Fatmah', 'Female', 123456, 'makkah', 5555222, 'Fatmah@hotmail.com'),
(4, 'majed', 'Male', 123456, 'pattani', 666444555, 'majed@hotmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `time`
--

CREATE TABLE `time` (
  `id_time` int(11) NOT NULL,
  `a_time` int(11) NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `time`
--

INSERT INTO `time` (`id_time`, `a_time`, `time`) VALUES
(1, 0, '06:00:00'),
(2, 1, '06:30:00');

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
  ADD PRIMARY KEY (`appoin_id`),
  ADD KEY `dr_id` (`dr_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id_cate`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contus`);

--
-- Indexes for table `descrip`
--
ALTER TABLE `descrip`
  ADD PRIMARY KEY (`id_treat`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `dr_id` (`dr_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`dr_id`),
  ADD KEY `id_cate` (`id_cate`);

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
-- Indexes for table `time`
--
ALTER TABLE `time`
  ADD PRIMARY KEY (`id_time`);

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
  MODIFY `appoin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id_cate` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `descrip`
--
ALTER TABLE `descrip`
  MODIFY `id_treat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `dr_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1029;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id_feed` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appoin`
--
ALTER TABLE `appoin`
  ADD CONSTRAINT `appoin_ibfk_1` FOREIGN KEY (`dr_id`) REFERENCES `doctor` (`dr_id`),
  ADD CONSTRAINT `appoin_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `patient` (`user_id`);

--
-- Constraints for table `descrip`
--
ALTER TABLE `descrip`
  ADD CONSTRAINT `descrip_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `patient` (`user_id`),
  ADD CONSTRAINT `descrip_ibfk_2` FOREIGN KEY (`dr_id`) REFERENCES `doctor` (`dr_id`);

--
-- Constraints for table `doctor`
--
ALTER TABLE `doctor`
  ADD CONSTRAINT `doctor_ibfk_1` FOREIGN KEY (`id_cate`) REFERENCES `categorie` (`id_cate`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
