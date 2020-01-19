-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2018 at 04:20 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.34

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
(1006, 'wala', 'Female', 123456, 'makkah', 6665555, 'wala@gmail.com', 'Bone', '0000-00-00', '00:00:00.000000'),
(1007, 'anas', 'Female', 123456, 'narathiwat', 2147483647, 'anas@gmail.com', 'Bone', '0000-00-00', '00:00:00.000000'),
(1008, 'nafisah', 'Female', 123456, 'bangkok', 2147483647, 'nafisah@hotmail.com', 'Heart', '0000-00-00', '00:00:00.000000'),
(1009, 'muhammad.zain', 'Male', 123456, 'sirowt', 2147483647, 'muhammad.zain', 'Heart', '0000-00-00', '00:00:00.000000'),
(1010, 'kamilia', 'Female', 123456, 'pattaya', 2147483647, 'kamilia@gmail.com', 'Cardiologist', '0000-00-00', '00:00:00.000000'),
(1011, 'khaled.rosol', 'Male', 123456, 'pattani', 2147483647, 'khaled@yahoo.com', 'Cardiologist', '0000-00-00', '00:00:00.000000'),
(1012, 'abdullah.jameel', 'Male', 123456, 'malee', 2147483647, 'abdullah.jameel@hotmail.com', 'Dentist', '0000-00-00', '00:00:00.000000'),
(1013, 'qaseem', 'Male', 123456, 'sraow', 2147483647, 'qaseem@ftu.com', 'Dentist', '0000-00-00', '00:00:00.000000'),
(1014, 'mano- shya', 'Male', 123456, 'jeddah', 2147483647, 'shya@yahoo.com', 'Dentist', '0000-00-00', '00:00:00.000000'),
(1015, 'rahaf.alsyami', 'Female', 123456, 'jeddah', 2147483647, 'rahaf.alsyami@malak.com', 'Neurologist', '0000-00-00', '00:00:00.000000'),
(1016, 'jameelah.flower', 'Female', 123456, 'mayoo', 2147483647, 'flower@gmail.com', 'Neurologist', '0000-00-00', '00:00:00.000000'),
(1017, 'sameer.fatani', 'Male', 123456, 'taif', 2147483647, 'sameer.fatani@gmail.com', 'Neurologist', '0000-00-00', '00:00:00.000000'),
(1018, 'rowed', 'Male', 123456, 'ohayo', 2147483647, 'rowed@yahoo.com', 'Kidney', '0000-00-00', '00:00:00.000000'),
(1019, 'HASSAN-Z', 'Male', 123456, 'makkah', 2147483647, 'HASSAN-Z@gmail.com', 'Kidney', '0000-00-00', '00:00:00.000000'),
(1020, 'fisal.kasoor', 'Male', 123456, 'endia', 2147483647, 'kasoor@hotmail.com', 'Kidney', '0000-00-00', '00:00:00.000000'),
(1021, 'juni-deeb', 'Male', 123456, 'mehok', 2147483647, 'juni-deeb@gmail.com', 'Plastic Surgeon', '0000-00-00', '00:00:00.000000'),
(1022, 'mike-sol', 'Male', 123456, 'yaha', 2147483647, 'sol@yahoo.com', 'Plastic Surgeon', '0000-00-00', '00:00:00.000000'),
(1023, 'roof24', 'Female', 123456, 'makkah', 2147483647, 'roof24@gmail.com', 'Plastic Surgeon', '0000-00-00', '00:00:00.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`dr_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `dr_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1024;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
