-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2023 at 11:05 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amusement_park`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_submissions`
--

CREATE TABLE `contact_submissions` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `submission_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_submissions`
--

INSERT INTO `contact_submissions` (`id`, `full_name`, `email`, `phone`, `subject`, `message`, `submission_date`) VALUES
(1, 'Idowu', 'idowuayoola@gmail.com', '09157288288', 'Ticket', 'HHHH', '2023-09-07 12:31:42'),
(2, 'Idowu', 'olamidealao22@gmail.com', '09157288288', 'Ticket', 'uuiokio', '2023-09-07 16:34:13'),
(3, 'Idowu', 'olamidealao22@gmail.com', '09157288288', 'Ticket', 'uuiokio', '2023-09-07 16:35:59'),
(4, 'hs', 'olamide@outlook.com', '', 'jsj', 'jqiqi', '2023-09-08 09:04:21');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_orders`
--

CREATE TABLE `ticket_orders` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `ticket_type` varchar(50) NOT NULL,
  `num_tickets` int(11) NOT NULL,
  `date_visit` varchar(50) NOT NULL,
  `special_packages` text DEFAULT NULL,
  `payment_method` varchar(50) NOT NULL,
  `billing_address` text DEFAULT NULL,
  `emergency_contact` varchar(255) DEFAULT NULL,
  `ticket_delivery` varchar(50) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ticket_orders`
--

INSERT INTO `ticket_orders` (`id`, `full_name`, `email`, `phone`, `ticket_type`, `num_tickets`, `date_visit`, `special_packages`, `payment_method`, `billing_address`, `emergency_contact`, `ticket_delivery`, `timestamp`) VALUES
(1, 'Hannah', 'olamide@outlook.com', '09157288288', 'student', 2, '2023-09-09', 'meal-plan', 'credit-card', 'WKWK', 'kalakj', 'email', '2023-09-08 08:52:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_submissions`
--
ALTER TABLE `contact_submissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticket_orders`
--
ALTER TABLE `ticket_orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_submissions`
--
ALTER TABLE `contact_submissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ticket_orders`
--
ALTER TABLE `ticket_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
