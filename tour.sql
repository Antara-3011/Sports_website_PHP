-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2024 at 11:20 AM
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
-- Database: `tour`
--

-- --------------------------------------------------------

--
-- Table structure for table `athlete`
--

CREATE TABLE `athlete` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `DOB` date NOT NULL,
  `gender` varchar(22) NOT NULL,
  `height` int(10) NOT NULL,
  `weight` int(10) NOT NULL,
  `coach_name` varchar(100) NOT NULL,
  `coach_email` varchar(100) NOT NULL,
  `experience` int(5) NOT NULL,
  `achievements` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `coach`
--

CREATE TABLE `coach` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(15) DEFAULT NULL,
  `club_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tournament`
--

CREATE TABLE `tournament` (
  `Tid` varchar(10) NOT NULL,
  `Tname` varchar(200) NOT NULL,
  `Timage` blob DEFAULT NULL,
  `DOE` date NOT NULL,
  `Tvenue` varchar(100) NOT NULL,
  `Treg_start_date` date DEFAULT NULL,
  `Treg_end_date` datetime NOT NULL,
  `organizer_name` varchar(100) DEFAULT NULL,
  `organizer_email` varchar(100) DEFAULT NULL,
  `general_info` varchar(10000) DEFAULT NULL,
  `document` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tournament`
--

INSERT INTO `tournament` (`Tid`, `Tname`, `Timage`, `DOE`, `Tvenue`, `Treg_start_date`, `Treg_end_date`, `organizer_name`, `organizer_email`, `general_info`, `document`) VALUES
('112', 'Dojo Inhouse Tournament', NULL, '2024-03-10', 'Kenwyn Martial arts centre, South Africa', NULL, '2024-03-08 10:56:00', NULL, NULL, NULL, NULL),
('113', 'Inter District Open Karate Championship', NULL, '2024-03-09', 'TDP Hall, near India Spring School, India', NULL, '2024-03-09 10:56:00', NULL, NULL, NULL, NULL),
('114', 'Eagles Karate Challenge', NULL, '2024-03-15', 'Tshwane Korfball Park, South Africa', NULL, '2024-03-11 10:58:28', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`) VALUES
(0, 'Admin', 'admin@gmail.com', '202cb962ac59075b964b07152d234b70', 'Admin'),
(1, 'sai', 'abc@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Coach'),
(8, 'Arnav', '7735471517@ds.com', 'e10adc3949ba59abbe56e057f20f883e', 'Athlete'),
(11, 'Aman', 'aman123@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Coach');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `athlete`
--
ALTER TABLE `athlete`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coach`
--
ALTER TABLE `coach`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tournament`
--
ALTER TABLE `tournament`
  ADD PRIMARY KEY (`Tid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `athlete`
--
ALTER TABLE `athlete`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `coach`
--
ALTER TABLE `coach`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
