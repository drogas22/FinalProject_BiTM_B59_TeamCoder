-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2017 at 09:12 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coaching`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(111) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(111) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(111) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soft_deleted` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `name`, `soft_deleted`) VALUES
(1, 'lolipop', 'lolipop', 'Mashiour', 'No'),
(2, 'lolo', 'd6581d542c7eaf801284f084478b5fcc', 'lolo', 'No'),
(3, 'fd', '36eba1e1e343279857ea7f69a597324e', 'fd', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `student_name` varchar(111) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(111) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(111) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(111) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(111) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course` varchar(111) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institution` varchar(111) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(111) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified` varchar(111) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `soft_deleted` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `student_name`, `email`, `password`, `phone`, `gender`, `course`, `institution`, `image`, `email_verified`, `soft_deleted`) VALUES
(2, 'Nishad', 'nishad5089@gmail.com', '202cb962ac59075b964b07152d234b70', '123', 'MALE', 'Web Design', '', '6-Akuma.jpg', 'Yes', 'No');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
