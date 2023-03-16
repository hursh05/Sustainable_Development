-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2023 at 08:08 PM
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
-- Database: `hackathon`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(11) NOT NULL,
  `doctorname` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `phone` int(11) NOT NULL,
  `specialization` varchar(1000) NOT NULL,
  `aboutdoctor` varchar(1000) NOT NULL,
  `experience` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `doctorname`, `email`, `phone`, `specialization`, `aboutdoctor`, `experience`) VALUES
(1, 'Dr.Saurabh Shukla', 'saurabh@gmail.com', 985623017, 'Skin care specialist', 'xyz', '6years +'),
(2, 'Dr.Rajesh Bhise', 'rajesh@gmail.com', 985923017, 'Mental health specialist', 'lmn', '8years +'),
(3, 'Dr.Deepa', 'deepa@gmail.com', 985973017, 'Child specialist', 'wxy', '4years +'),
(4, 'Dr.Shailendra Verma', 'shailen@gmail.com', 985973697, 'Skin care specialist', 'pqr', '10 years +'),
(5, 'Dr.Rajan Shirke', 'rajan@gmail.com', 985273697, 'Child specialist', 'abc', '9 years +');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
