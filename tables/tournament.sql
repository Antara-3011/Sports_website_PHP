-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2024 at 09:17 PM
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
  `document` blob DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tournament`
--

INSERT INTO `tournament` (`Tid`, `Tname`, `Timage`, `DOE`, `Tvenue`, `Treg_start_date`, `Treg_end_date`, `organizer_name`, `organizer_email`, `general_info`, `document`, `status`) VALUES
('112', 'Dojo Inhouse Tournament', NULL, '2024-03-10', 'Kenwyn Martial arts centre, South Africa', NULL, '2024-03-08 10:56:00', NULL, NULL, NULL, NULL, 1),
('113', 'Inter District Open Karate Championship', NULL, '2024-03-09', 'TDP Hall, near India Spring School, India', NULL, '2024-03-09 10:56:00', NULL, NULL, NULL, NULL, 1),
('114', 'Eagles Karate Challenge', NULL, '2024-03-15', 'Tshwane Korfball Park, South Africa', NULL, '2024-03-11 10:58:28', NULL, NULL, NULL, NULL, 1),
('115', 'Demo tournament', NULL, '2024-02-10', 'Cuttack, Odisha', NULL, '2024-03-08 14:34:45', NULL, NULL, NULL, NULL, 0),
('116', 'Hefty Tournament', NULL, '2024-03-20', 'Pune, India', NULL, '2024-03-17 19:08:27', NULL, NULL, NULL, NULL, 1),
('117', 'Demo(II) Tournament', NULL, '2024-03-24', 'India', NULL, '2024-03-21 19:09:28', NULL, NULL, NULL, NULL, 0),
('118', 'Demo(III) Tournament', NULL, '2024-03-12', 'California', NULL, '2024-03-08 14:39:28', NULL, NULL, NULL, NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tournament`
--
ALTER TABLE `tournament`
  ADD PRIMARY KEY (`Tid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
