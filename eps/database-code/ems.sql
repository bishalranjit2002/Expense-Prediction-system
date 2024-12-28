-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2024 at 02:46 PM
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
-- Database: `ems`
--

-- --------------------------------------------------------

--
-- Table structure for table `addexpenses`
--

CREATE TABLE `addexpenses` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `expense_date` date NOT NULL,
  `expense_amount` decimal(10,2) NOT NULL,
  `paymode` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addexpenses`
--

INSERT INTO `addexpenses` (`id`, `user_id`, `expense_date`, `expense_amount`, `paymode`, `category`) VALUES
(8, 'suman123@gmail.com', '2023-10-12', 10000.00, 'cash', 'food'),
(9, 'suman123@gmail.com', '2022-06-14', 29999.00, 'credit', 'rent'),
(23, 'bishalranjit2002@gmail.com', '2024-11-10', 100.00, 'cash', 'grocery'),
(24, 'bishalranjit2002@gmail.com', '2024-11-11', 150.00, 'cash', 'food'),
(25, 'bishalranjit2002@gmail.com', '2024-11-12', 125.00, 'online', 'car'),
(26, 'bishalranjit2002@gmail.com', '2024-11-13', 200.00, 'credit', 'rent'),
(29, 'bishalranjit2002@gmail.com', '2024-11-16', 135.00, 'cash', 'travel'),
(30, 'bishalranjit2002@gmail.com', '2024-11-02', 77.00, 'cash', 'car'),
(33, 'bishalranjit2002@gmail.com', '2024-11-19', 200.00, 'cash', 'house'),
(35, 'bishalranjit2002@gmail.com', '2024-11-12', 10.00, 'cash', 'house'),
(38, 'bishalranjit2002@gmail.com', '2024-11-06', 223.00, 'cash', 'house'),
(39, 'bishalranjit2002@gmail.com', '2024-11-14', 100.00, 'debit', 'food'),
(40, 'bishalranjit2002@gmail.com', '2024-11-20', 225.00, 'cash', 'house');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `password`) VALUES
(1, 'bishalranjit2002@gmail.com', 'admin@12345');

-- --------------------------------------------------------

--
-- Table structure for table `contact_submissions`
--

CREATE TABLE `contact_submissions` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `submission_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_submissions`
--

INSERT INTO `contact_submissions` (`id`, `name`, `email`, `message`, `submission_time`) VALUES
(4, 'bishal ranjitkar', 'bishalranjit2002@gmail.com', 'Thank you for your inquiry. We will get back to you soon.', '2023-07-18 13:12:02'),
(5, 'ayush poudel', 'ayushpoudel@gmail.com', 'great!', '2023-07-18 17:26:50'),
(6, 'bishal ranjitkar', 'bishalranjit2002@gmail.com', 'hello', '2023-07-19 02:16:45');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `expense_date` date DEFAULT NULL,
  `expense_amount` decimal(10,2) DEFAULT NULL,
  `paymode` varchar(50) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `notes` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `mobile_number` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `mobile_number`, `email`, `password`, `date_of_birth`) VALUES
(1, 'bishal', 'ranjit', '9876543210', 'bishalranjit2002@gmail.com', 'Bishal@Bishal', '2002-06-06'),
(2, 'ayush', 'poudel', '986767667', 'ayushpoudel@gmail.com', 'ayush@1234', '2023-07-18'),
(3, 'ujjawal', 'maharzan', '985656556666', 'ujjawal@gmail', '1234', '2012-11-29'),
(4, 'Bishal', 'Ranjitkar ', '9812241818jbhjbjbjbj', 'bishalranjit2002@gmail.comgasgysdg', 'bishalbishal', '2002-06-06'),
(5, 'suman', 'bajgain', '9890676668', 'suman123@gmail.com', 'suman1234', '2023-10-18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addexpenses`
--
ALTER TABLE `addexpenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_submissions`
--
ALTER TABLE `contact_submissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addexpenses`
--
ALTER TABLE `addexpenses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_submissions`
--
ALTER TABLE `contact_submissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `expenses`
--
ALTER TABLE `expenses`
  ADD CONSTRAINT `expenses_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
