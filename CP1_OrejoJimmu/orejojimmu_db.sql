-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2021 at 11:06 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `orejojimmu_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `introduction`
--

CREATE TABLE `introduction` (
  `cp1_id` int(100) NOT NULL COMMENT 'add/read/update/delete primary id',
  `cp1_name` varchar(100) NOT NULL COMMENT 'add/read/update/delete full name',
  `cp1_email` varchar(100) NOT NULL COMMENT 'add/read/update/delete email',
  `cp1_bday` date NOT NULL COMMENT 'add/read/update/delete date of birth',
  `cp1_pos_applied` varchar(100) NOT NULL COMMENT 'add/read/update/delete position applied as drop down option',
  `cp1_answer` varchar(100) NOT NULL COMMENT 'add/read/update/delete my answer to my edge over the other applicants'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='this is my information table. ';

--
-- Dumping data for table `introduction`
--

INSERT INTO `introduction` (`cp1_id`, `cp1_name`, `cp1_email`, `cp1_bday`, `cp1_pos_applied`, `cp1_answer`) VALUES
(6, 'Jimmu Brizuela Orejo', 'jikiorejo1@gmail.com', '1997-04-18', 'Computer Programmer 1', 'My personal agenda is to learn more about programming and to improve, but to do so I must become mor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `introduction`
--
ALTER TABLE `introduction`
  ADD PRIMARY KEY (`cp1_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `introduction`
--
ALTER TABLE `introduction`
  MODIFY `cp1_id` int(100) NOT NULL AUTO_INCREMENT COMMENT 'add/read/update/delete primary id', AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
