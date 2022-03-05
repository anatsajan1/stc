-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2022 at 03:14 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stc`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fid` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fid`, `name`, `address`, `email`, `message`) VALUES
(16, 'Anat Sajan', 'Kalapurackal H Attappallam P.O Kumily', 'anat@gmail.com', 'very good'),
(17, 'Sajan Kuriakose', 'Kalapurackal H Attappallam P.O Kumily', 'sajan@123gmail.com', 'very good'),
(18, 'Anat Sajan', 'Kalapurackal H Attappallam P.O Kumily', 'anat@gmail.com', 'ver good'),
(19, 'Benit Sajan', 'Kalapurackal H Attappallam P.O Kumily', 'benitsajan@gmail.com', 'Excelent'),
(20, 'Jomet Sajan', 'Kalapurackal H Attappallam P.O Kumily', 'jometsajan@gmail.com', 'ok ....'),
(21, 'Sindhu Sajan', 'Kalapurackal H Attappallam P.O Kumily', 'sindhu@gmail.com', 'very good'),
(22, 'Jijo Jose', 'qwertyuioopppasdfghjklllzxcvbnm', 'jijojose@gmail.com', 'thank you..!!!'),
(23, 'Poornima R Nair', 'ASDFGHJKLXZCVBNM,', 'Poornima@gmail.com', 'very good'),
(24, 'Muth Kutty', 'Kalapurackal H Attappallam P.O Kumily', 'muth@gmail.com', 'excelent');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `type` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `pwd`, `type`) VALUES
(31, 'anat@gmail.com', '123456', 'student'),
(32, 'sajan@123gmail.com', 'qwerty', 'student'),
(33, 'rajesh@gmail.com', '123456', 'student'),
(34, 'muth@gmail.com', '123456', 'student'),
(35, 'jijojose@gmail.com', 'qwerty', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `id` int(15) NOT NULL,
  `name` varchar(15) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(15) NOT NULL,
  `number` varchar(10) NOT NULL,
  `uname` varchar(15) NOT NULL,
  `pwd` varchar(15) NOT NULL,
  `cpwd` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`id`, `name`, `address`, `email`, `number`, `uname`, `pwd`, `cpwd`) VALUES
(32, 'Anat Sajan', 'Kalapurackal H Attappallam P.O Kumily', 'anat@gmail.com', '9188044536', 'muth', '123456', '123456'),
(33, 'Sajan Kuriakose', 'Kalapurackal H Attappallam P.O Kumily', 'sajan@123gmail.', '9495045536', 'sajan', 'qwerty', 'qwerty'),
(34, 'rajesh', 'asdfghjkl;', 'rajesh@gmail.co', '1234567890', 'asdfg', '123456', '123456'),
(35, 'Muth', 'Kalapurackal H Attappallam P.O Kumily', 'muth@gmail.com', '1234567890', 'muth', '123456', '123456'),
(36, 'Jijo Jose', 'qwertyuiopasdfghjklzxcvbnm', 'jijojose@gmail.', '9495035538', 'jijo jose', 'qwerty', 'qwerty');

-- --------------------------------------------------------

--
-- Table structure for table `requestform`
--

CREATE TABLE `requestform` (
  `id` int(5) NOT NULL,
  `name` varchar(250) NOT NULL,
  `image` blob NOT NULL,
  `address` varchar(100) NOT NULL,
  `gender` enum('m','f','o') NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(30) NOT NULL,
  `number` varchar(100) NOT NULL,
  `place` varchar(100) NOT NULL,
  `institutename` varchar(100) NOT NULL,
  `wheretowhere` varchar(100) NOT NULL,
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requestform`
--

INSERT INTO `requestform` (`id`, `name`, `image`, `address`, `gender`, `dob`, `email`, `number`, `place`, `institutename`, `wheretowhere`, `status`) VALUES
(28, 'Anat Sajan', 0x70322e6a7067, 'Kalapurackal H Attappallam P.O Kumily', 'm', '1999-12-11', 'anat@gmail.com', '9188044536', 'Kumily', 'Marian College Kuttikanam', 'Kumily to Kuttikanam', 'Declined'),
(29, 'Sajan Kuriakose', 0x70312e6a7067, 'Kalapurackal H Attappallam P.O Kumily', 'm', '1965-04-13', 'sajan@123gmail.com', '9495045536', 'Attappallam', 'Marian College Kuttikanam', 'Attappallam to Kuttikanam', 'approved'),
(30, 'Anat Sajan', 0x70322e6a7067, 'Kalapurackal H Attappallam P.O Kumily', 'm', '1999-12-11', 'anat@gmail.com', '9188044536', 'Kuttikanam', 'Marian College Kuttikanam', 'kuttikkanam to Alapuzhya', '0'),
(31, 'Benit Sajan', 0x70322e6a7067, 'Kalapurackal H Attappallam P.O Kumily', 'm', '1998-04-03', 'benitsajan@gmail.com', '1234567890', 'TVM', 'Marian College Kuttikanam', 'kuttikanam to tvm', 'Declined'),
(32, 'Jomet Sajan', 0x70312e6a7067, 'Kalapurackal H Attappallam P.O Kumily', 'm', '2004-07-11', 'jometsajan@gmail.com', '9188044536', 'Kottayam', 'Marian College Kuttikanam', 'Kottayam to kuttikkanam', 'Declined'),
(33, 'Sindhu Sajan', 0x70332e6a7067, 'Kalapurackal H Attappallam P.O Kumily', 'm', '1969-10-24', 'sindhu@gmail.com', '9495035538', 'Malamala', 'Pala College', 'Pala to Kumily', 'approved'),
(34, 'Jijo Jose', 0x70332e6a7067, 'qwertyuiopasdfghjkl', 'm', '1997-09-16', 'jijojose@gmail.com', '9188044536', 'Kumily', 'SB College Changanassery', 'Kumily to Changanassery', 'Declined'),
(35, 'Poornima R Nair', 0x70322e6a7067, 'ASDFGHJKL;.,MNBVCX', 'm', '1999-04-25', 'poornima@123gmail.com', '1234567890', 'karintharuvi', 'Marian College Kuttikanam', 'kuttikkanam to Alapuzhya', 'approved'),
(36, 'Muth Kutty', 0x70322e6a7067, 'Kalapurackal H Attappallam P.O Kumily', 'm', '1999-12-11', 'muth@gmail.com', '1234567890', 'Mundayakayam', 'Marian College Kuttikanam', 'Mundakayam to Kuttikanam', 'approved');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requestform`
--
ALTER TABLE `requestform`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `requestform`
--
ALTER TABLE `requestform`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
