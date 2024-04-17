-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2024 at 08:29 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task-1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(111) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `current_time` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `email`, `password`, `current_time`) VALUES
(2, 'test', 'b@gmail.com', '6562c5c1f33db6e05a082a88cddab5ea', 0),
(3, 'admin', 'a@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 0),
(4, 'Depannita', 'd@gmail.com', '68053af2923e00204c3ca7c6a3150cf7', 0);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cid` int(111) NOT NULL,
  `cat_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cid`, `cat_name`) VALUES
(5, 'egy\'s');

-- --------------------------------------------------------

--
-- Table structure for table `product_data`
--

CREATE TABLE `product_data` (
  `pid` int(111) NOT NULL,
  `name` varchar(250) NOT NULL,
  `quntity` varchar(250) NOT NULL,
  `price` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `tex` int(111) NOT NULL,
  `status` int(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_data`
--

INSERT INTO `product_data` (`pid`, `name`, `quntity`, `price`, `image`, `tex`, `status`) VALUES
(1, 'hgbhjb', '1', '500', '1711710832pexels-blaque-x-863963.jpg', 2, 0),
(2, 'fdfg', '1', '600', '1711712692pexels-katie-burandt-1212693.jpg', 3, 0),
(3, 'hgfghv', '1', '700', '1711712718pexels-max-andrey-1366630.jpg', 4, 0),
(4, 'hfgf', '1', '800', '1711712748pexels-pixabay-15239.jpg', 5, 0),
(5, 'rdfgc', '1', '900', '1711712773pexels-pixabay-36762.jpg', 6, 0),
(6, 'jhgvgh', '1', '999', '1711712802pexels-pixabay-59990.jpg', 7, 0),
(7, 'gdfgc', '1', '100', '1711712858pexels-pixabay-60597.jpg', 8, 0),
(8, 'hgbhjb', '2', '700', '1711860602', 0, 1),
(9, 'hgbhjb', '2', '700', '1711860676', 0, 1),
(10, 'hgbhjb', '2', '700', '1711860738', 3, 1),
(11, 'hgbhjb', '2', '700', '1711860888', 4, 1),
(12, 'test', '2', '700', '1711860988', 5, 1),
(13, 'hgbhjb', '2', '700', '1711861241pexels-suneo-103573.jpg', 6, 1),
(14, 'test', '2', '500', '1711861362pexels-pixabay-36762.jpg', 5, 1),
(15, 'bjb', '1', '5512', '1712820803Screenshot 2024-03-18 210035.png', 2, 1),
(16, 'hgbhjb', '1', '566', '1712820862Screenshot 2024-04-01 211606.png', 1, 1),
(17, '', '', '', '1712821278', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `student_data`
--

CREATE TABLE `student_data` (
  `sid` int(111) NOT NULL,
  `name` varchar(250) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `stream` varchar(250) NOT NULL,
  `subject` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_data`
--

INSERT INTO `student_data` (`sid`, `name`, `gender`, `stream`, `subject`, `image`) VALUES
(8, 'test', 'Female', 'BBA', 'C,C++,PHP', '1711690617Screenshot 2024-03-28 002257.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `product_data`
--
ALTER TABLE `product_data`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `student_data`
--
ALTER TABLE `student_data`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cid` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product_data`
--
ALTER TABLE `product_data`
  MODIFY `pid` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `student_data`
--
ALTER TABLE `student_data`
  MODIFY `sid` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
