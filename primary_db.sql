-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2017 at 02:32 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `primary_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `caretaker_details`
--

CREATE TABLE IF NOT EXISTS `caretaker_details` (
  `stu_id` int(11) NOT NULL,
  `pog` varchar(30) DEFAULT NULL,
  `father_name` varchar(50) DEFAULT NULL,
  `mother_name` varchar(50) DEFAULT NULL,
  `occu_father` varchar(50) DEFAULT NULL,
  `occu_mother` varchar(50) DEFAULT NULL,
  `p_income` bigint(20) DEFAULT NULL,
  `p_address` text,
  `p_phone` bigint(20) DEFAULT NULL,
  `p_pincode` int(11) DEFAULT NULL,
  `gaurd_name` varchar(50) DEFAULT NULL,
  `occu_gaurd` varchar(30) DEFAULT NULL,
  `g_income` bigint(20) DEFAULT NULL,
  `g_address` text,
  `g_phone` bigint(20) DEFAULT NULL,
  `g_pincode` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `communal_details`
--

CREATE TABLE IF NOT EXISTS `communal_details` (
  `stu_id` int(11) NOT NULL,
  `mother_tongue` varchar(15) NOT NULL,
  `aadhar_no` bigint(20) NOT NULL,
  `tc_attchd` varchar(5) NOT NULL,
  `promoted` varchar(5) NOT NULL,
  `to_std` int(11) NOT NULL,
  `sec_lang` varchar(6) NOT NULL,
  `protection` varchar(5) NOT NULL,
  `activities` varchar(50) NOT NULL,
  `declaration` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `personal_details`
--

CREATE TABLE IF NOT EXISTS `personal_details` (
  `stu_id` int(11) NOT NULL,
  `std_of_add` int(11) NOT NULL,
  `date_of_add` date NOT NULL,
  `name` varchar(50) NOT NULL,
  `name_in_tamil` varchar(30) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `dob_in_words` varchar(100) NOT NULL,
  `native` varchar(30) NOT NULL,
  `religion` varchar(15) NOT NULL,
  `community` varchar(10) NOT NULL,
  `blood_group` varchar(10) NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `image_name` varchar(100) NOT NULL,
  `image_path` varchar(100) NOT NULL,
  `comm_name` varchar(50) NOT NULL,
  `comm_path` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `previous_school`
--

CREATE TABLE IF NOT EXISTS `previous_school` (
  `stu_id` int(11) NOT NULL,
  `name_of_schl` varchar(150) NOT NULL,
  `year` int(11) NOT NULL,
  `cls_lst_std` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `caretaker_details`
--
ALTER TABLE `caretaker_details`
  ADD PRIMARY KEY (`stu_id`);

--
-- Indexes for table `communal_details`
--
ALTER TABLE `communal_details`
  ADD PRIMARY KEY (`stu_id`);

--
-- Indexes for table `personal_details`
--
ALTER TABLE `personal_details`
  ADD PRIMARY KEY (`stu_id`);

--
-- Indexes for table `previous_school`
--
ALTER TABLE `previous_school`
  ADD UNIQUE KEY `year` (`year`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
