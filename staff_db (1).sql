-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2019 at 03:07 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `staff_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `qual_name` varchar(255) NOT NULL,
  `salary` decimal(8,2) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `djoin` datetime NOT NULL DEFAULT current_timestamp(),
  `qual_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `fname`, `lname`, `qual_name`, `salary`, `dob`, `djoin`, `qual_id`) VALUES
(1, 'Ejoko', 'Ekakara', 'NCE', '100.00', '2019-12-11', '2019-12-11 13:56:44', NULL),
(2, 'Brenda', 'Emeka', 'FSLC', '100.00', '2019-12-11', '2019-12-11 13:58:40', NULL),
(3, 'Eunice', 'Ebak', 'Bsc', '35000.00', '2019-12-11', '2019-12-11 16:55:48', NULL),
(4, 'Pualina ', 'Glory', 'OND', '15000.00', '2019-12-11', '2019-12-11 16:55:48', NULL),
(5, 'Mark', 'Etim', 'PHD', '2000.00', '2019-12-12', '2019-12-12 10:51:47', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `qualification`
--

CREATE TABLE `qualification` (
  `qual_id` int(11) NOT NULL,
  `qual_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `qualification`
--

INSERT INTO `qualification` (`qual_id`, `qual_name`) VALUES
(1, 'PHD'),
(2, 'Msc'),
(3, 'Bsc'),
(4, 'NCE'),
(5, 'HND'),
(6, 'OND'),
(8, 'SSCE'),
(9, 'FSLC'),
(10, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `testid`
--

CREATE TABLE `testid` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `prefix` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testid`
--

INSERT INTO `testid` (`id`, `name`, `prefix`) VALUES
(1, 'HHFHFH', 'EMP001');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(17, 'Richard', '6ae199a93c381bf6d5de27491139d3f9', 'ekararichard@gmail.com'),
(18, 'Sylvia', '4a7d1ed414474e4033ac29ccb8653d9b', 'sylviaedet@gmail.com'),
(19, 'Sunady', '787c74a2e618a696e34e025adda33ad3', 'etosunday74@gmail'),
(20, 'Wisdom', 'a541714a17804ac281e6ddda5b707952', 'wisdom@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employees_ar_fk` (`qual_id`);

--
-- Indexes for table `qualification`
--
ALTER TABLE `qualification`
  ADD PRIMARY KEY (`qual_id`);

--
-- Indexes for table `testid`
--
ALTER TABLE `testid`
  ADD PRIMARY KEY (`id`,`prefix`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10058;

--
-- AUTO_INCREMENT for table `qualification`
--
ALTER TABLE `qualification`
  MODIFY `qual_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `testid`
--
ALTER TABLE `testid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_ar_fk` FOREIGN KEY (`qual_id`) REFERENCES `qualification` (`qual_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
