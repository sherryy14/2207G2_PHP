-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2023 at 04:16 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `practical`
--

CREATE TABLE `practical` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `p_description` varchar(100) NOT NULL,
  `p_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `practical`
--

INSERT INTO `practical` (`p_id`, `p_name`, `p_description`, `p_date`) VALUES
(7, 'exercise', '1 hour', '2023-07-19'),
(9, 'haris', 'i will go to play cricket.', '2023-07-09'),
(10, 'haris', 'i will go to play cricket.', '2023-07-09'),
(11, 'haris', 'klarge', '2023-07-29'),
(12, 'kaif', 'medora', '2023-07-05'),
(13, 'lotion', 'medora', '2023-07-06'),
(14, 'rehan', 'large', '2023-07-19'),
(15, 'eraf', 'red', '2023-06-30');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(100) NOT NULL,
  `u_email` varchar(100) NOT NULL,
  `u_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_name`, `u_email`, `u_password`) VALUES
(1, 'haris', 'haris@gmail.com', '123'),
(2, 'kaif', 'kaif@gmail.com', '124'),
(3, 'rehan', 'rehan@gmail.com', '126'),
(4, 'rehan', 'rehan@gmail.com', '129'),
(5, 'faiz', 'faiz@gmail.com', '111'),
(6, 'raheem', 'raheem@gmail.com', 'rah'),
(7, 'raheem', 'raheem@gmail.com', '111'),
(8, 'zaid', 'zaid@gmail.com', 'bu'),
(9, 'zaid', 'zaid@gmail.com', '654'),
(10, 'zaid', 'zaid@gmail.com', ''),
(11, 'hania', 'hania@gmail.com', 'hani'),
(12, 'haris', 'kaif@gmail.com', '154'),
(13, 'haris', 'kaif@gmail.com', '1212'),
(14, 'haris', 'kaif@gmail.com', '432'),
(15, 'haris', 'kaif@gmail.com', '22222'),
(16, 'david', 'david@gmail.com', '123'),
(17, 'david', 'david@gmail.com', '321'),
(18, 'kaif', 'zaid@gmail.com', '2121'),
(19, 'fahim', 'fahim@gmail.com', 'fa12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `practical`
--
ALTER TABLE `practical`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `practical`
--
ALTER TABLE `practical`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
