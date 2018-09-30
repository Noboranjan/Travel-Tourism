-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2018 at 11:43 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tt`
--

-- --------------------------------------------------------

--
-- Table structure for table `tagency`
--

CREATE TABLE `tagency` (
  `userid` int(9) NOT NULL,
  `aname` varchar(100) NOT NULL,
  `destination` varchar(40) NOT NULL,
  `duration` varchar(30) NOT NULL,
  `cost` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tagency`
--

INSERT INTO `tagency` (`userid`, `aname`, `destination`, `duration`, `cost`) VALUES
(4, 'Nova', 'india', '3d-2n', 'Tk12000'),
(5, 'Tulip', 'coxs bazar', '3day-4night', 'Tk:7000'),
(6, 'Shopno', 'Nepal', '3day-4night', 'Tk:16000'),
(7, 'Robi', 'Bandarban', '3d-4night', 'Tk:8000'),
(8, 'nilu', 'sylhet', '2d-1n', 'tk:5000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tagency`
--
ALTER TABLE `tagency`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tagency`
--
ALTER TABLE `tagency`
  MODIFY `userid` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
