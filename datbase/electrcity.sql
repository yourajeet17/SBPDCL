-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2022 at 07:29 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `electrcity`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `id` int(25) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_type` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(1, 'abc', 'ab@gmail.com', 'abc', 'admin'),
(2, 'ABADHESH KUMAR', 'i.abadhesh@gmail.com', '202cb962ac59075b964b07152d234b70', 'admin'),
(3, 'ajeet kumar', 'yourajeet@gmail.com', '202cb962ac59075b964b07152d234b70', 'user'),
(4, 'ABADHESH KUMAR', 'ABADHESH@GMAIL.COM', '202cb962ac59075b964b07152d234b70', 'admin'),
(5, 'RANJEET PASWAN', 'ranjeet@gmail.com', '202cb962ac59075b964b07152d234b70', 'user'),
(6, 'rani', 'rani@gmail.com', '202cb962ac59075b964b07152d234b70', 'admin'),
(7, 'mohit', 'mohit@gmail.com', '202cb962ac59075b964b07152d234b70', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `career_table`
--

CREATE TABLE `career_table` (
  `id` int(25) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `contact_no` int(40) NOT NULL,
  `cv_url` varchar(50) NOT NULL,
  `reason_to_hire` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `career_table`
--

INSERT INTO `career_table` (`id`, `full_name`, `email_id`, `contact_no`, `cv_url`, `reason_to_hire`) VALUES
(1, '', 'gvsdfsd@gmail.com', 564546, '', 'dfgdfgfd'),
(2, '', 'gvsdfsd@gmail.com', 564546, '', 'dfgdfgfd'),
(3, '', 'gvsdfsd@gmail.com', 564546, '', 'fdsfds'),
(4, '', 'mithun@Gmail.com', 2147483647, '', 'i am very talented'),
(5, '', 'sdfds@Gmail.com', 2147483647, '', 'sdfsdfd'),
(6, '', 'mithun@Gmail.com', 234243243, '', 'dsfdsfds'),
(7, '', 'yourajeet17@gmail.com', 2147483647, '', 'dfdsf'),
(8, '', 'mithun@Gmail.com', 2147483647, '', 'fghfdgfd'),
(9, '', 'yourajeet17@gmail.com', 2147483647, '', '2xcdfsd'),
(10, '', 'gvsdfsd@gmail.com', 2147483647, '', ''),
(11, '', 'gvsdfsd@gmail.com', 2147483647, '', 'sdfds'),
(12, 'sdfds', 'gvsdfsd@gmail.com', 2147483647, '', ''),
(13, 'rohit kumar', 'gvsdfsd@gmail.com', 2343244, 'IMG-63a9c5f8777220.60482719.png', 'dfgfdg');

-- --------------------------------------------------------

--
-- Table structure for table `connection_table`
--

CREATE TABLE `connection_table` (
  `connection_id` int(5) NOT NULL,
  `connection_type` varchar(25) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `father_husband_name` varchar(30) NOT NULL,
  `contact_no` int(10) NOT NULL,
  `email_id` varchar(25) NOT NULL,
  `House_no` int(11) NOT NULL,
  `street` varchar(25) NOT NULL,
  `address_line_1` varchar(25) NOT NULL,
  `address_line_2` varchar(25) NOT NULL,
  `applicant_photo_url` varchar(50) NOT NULL,
  `applicant_id_url` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `connection_table`
--

INSERT INTO `connection_table` (`connection_id`, `connection_type`, `full_name`, `father_husband_name`, `contact_no`, `email_id`, `House_no`, `street`, `address_line_1`, `address_line_2`, `applicant_photo_url`, `applicant_id_url`) VALUES
(72, 'LT', 'Aman kumar', 'Rohit singh', 2147483647, 'abc@gmail.com', 45, 'lane 4', 'Patna', 'Bihar', 'IMG-63a8a3b3ce17f2.36755012.jpeg', 'IMG-63a8a3b3afba21.17341891.jpg '),
(73, 'LT', 'rahul kumar', 'ranjan kumar', 2147483647, 'mithun@Gmail.com', 45, 'lane 5', 'Arwal', 'Bihar', 'IMG-63a8a6f15afd34.54147131.jpeg', 'IMG-63a8a6f15ab239.66373479.jpeg '),
(74, 'HT', 'rani kumari', 'ram isqbal', 2147483647, 'yourajeet17@gmail.com', 56, 'lane 46', 'munger', 'Bihar', 'IMG-63a8a775b11429.01493741.png', 'IMG-63a8a775b0d4b3.86851559.png '),
(75, 'LT', 'samar ', 'amar ', 2147483647, 'kjljk@gmail.com', 45, 'lanev-45', 'bihta', 'bihar', 'IMG-63a957a0927fd0.22523852.png', 'IMG-63a957a08ba4c3.57071293.png ');

-- --------------------------------------------------------

--
-- Table structure for table `consumer_table`
--

CREATE TABLE `consumer_table` (
  `consumer_no` int(50) NOT NULL,
  `connection_id` int(50) NOT NULL DEFAULT 0,
  `consumer_name` varchar(50) NOT NULL,
  `date_of_connection` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `consumer_table`
--

INSERT INTO `consumer_table` (`consumer_no`, `connection_id`, `consumer_name`, `date_of_connection`) VALUES
(72, 68, '', '2022-12-24 21:36:54'),
(73, 69, 'rohit kumar', '2022-12-24 21:37:28'),
(74, 68, '', '2022-12-24 21:42:57'),
(75, 70, '', '2022-12-24 22:04:39'),
(76, 71, 'rohit kumar', '2022-12-25 11:39:35'),
(77, 76, 'shaaim', '2022-12-26 18:15:45');

-- --------------------------------------------------------

--
-- Table structure for table `contact_form_table`
--

CREATE TABLE `contact_form_table` (
  `id` int(25) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `contact_no` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `purpose` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_form_table`
--

INSERT INTO `contact_form_table` (`id`, `full_name`, `contact_no`, `email`, `purpose`) VALUES
(1, 'ABADHESH KUMAR', 852565, '', 'sdfdsf'),
(2, 'ABADHESH KUMAR', 852565, '', 'sdfdsf'),
(3, 'ABADHESH KUMAR', 852565, '', 'sdfdsf'),
(4, 'ABADHESH KUMAR', 852565, '', 'sdfdsf'),
(5, 'ABADHESH KUMAR', 852565, '', 'sdfdsf'),
(6, 'ABADHESH KUMAR', 852565, '', 'sdfdsf'),
(7, 'ABADHESH KUMAR', 852565, '', 'sdfdsf'),
(8, 'ABADHESH KUMAR', 852565, '', 'sdfdsf'),
(9, 'ABADHESH KUMAR', 852565, '', 'sdfdsf'),
(10, 'ABADHESH KUMAR', 852565, '', 'sdfdsf'),
(11, 'ABADHESH KUMAR', 852565, '', 'sdfdsf'),
(12, 'ABADHESH KUMAR', 852565, '', 'sdfdsf'),
(13, 'ABADHESH KUMAR', 852565, '', 'sdfdsf'),
(14, 'ABADHESH KUMAR', 852565, 'gvsdfsd@gmail.com', 'cbxcvbxcv '),
(15, 'ABADHESH KUMAR', 852565, 'gvsdfsd@gmail.com', ' d fd fdg dfg f'),
(16, 'ABADHESH KUMAR', 852565, 'gvsdfsd@gmail.com', ' gfd fdg dfgd'),
(17, 'ABADHESH KUMAR', 852565, 'gvsdfsd@gmail.com', ' gfd fdg dfgd'),
(18, 'ABADHESH KUMAR', 852565, 'gvsdfsd@gmail.com', 'jj ljk lkj'),
(19, 'ABADHESH KUMAR', 852565, 'gvsdfsd@gmail.com', 'jj ljk lkj'),
(20, 'ABADHESH KUMAR', 852565, 'gvsdfsd@gmail.com', 'dbvdxvxcvcx'),
(21, 'ABADHESH KUMAR', 852565, 'gvsdfsd@gmail.com', 'dbvdxvxcvcx'),
(22, 'ABADHESH KUMAR', 852565, 'gvsdfsd@gmail.com', 'dbvdxvxcvcx'),
(23, 'ABADHESH KUMAR', 852565, 'gvsdfsd@gmail.com', 'dbvdxvxcvcx'),
(24, 'ABADHESH KUMAR', 852565, 'gvsdfsd@gmail.com', 'dbvdxvxcvcx'),
(25, 'Ajeet kumar', 2147483647, 'yourajeet17@gmail.com', 'i am unable to perform the given task \r\n'),
(26, 'sdfds', 2147483647, 'yourajeet17@gmail.com', 'sdfds');

-- --------------------------------------------------------

--
-- Table structure for table `master_table`
--

CREATE TABLE `master_table` (
  `connection_id` int(5) NOT NULL,
  `connection_type` varchar(25) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `father_husband_name` varchar(30) NOT NULL,
  `contact_no` int(10) NOT NULL,
  `email_id` varchar(25) NOT NULL,
  `House_no` int(11) NOT NULL,
  `street` varchar(25) NOT NULL,
  `address_line_1` varchar(25) NOT NULL,
  `address_line_2` varchar(25) NOT NULL,
  `applicant_photo_url` varchar(50) NOT NULL,
  `applicant_id_url` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `master_table`
--

INSERT INTO `master_table` (`connection_id`, `connection_type`, `full_name`, `father_husband_name`, `contact_no`, `email_id`, `House_no`, `street`, `address_line_1`, `address_line_2`, `applicant_photo_url`, `applicant_id_url`) VALUES
(65, 'LT', 'ram', 'raj kumar', 2147483647, 'gvsdfsd@gmail.com', 39, 'fddgffd', 'PAKADI', 'fdgfd', 'IMG-63a70b5b7dbe78.55611582.jpeg', 'IMG-63a70b5b7cb792.39627014.jpeg '),
(66, 'LT', 'rohit kumar', 'raj kumar', 2147483647, 'mithun@Gmail.com', 39, 'fddgffd', 'PAKADI', 'Bihar', 'IMG-63a71deb11b8f9.35899903.jpeg', 'IMG-63a71deb1087f2.48264925.jpg '),
(67, '', '', '', 0, '', 0, '', '', '', 'IMG-63a71ede6e6ed1.83161919.jpeg', 'IMG-63a71ede6dc9f0.97254284.jpeg '),
(69, 'LT', 'rohit kumar', 'raj  singh', 2147483647, 'mohit@gmail.com', 39, '69', 'patna', 'Bihar', 'IMG-63a74c38900ee1.68864336.jpeg', 'IMG-63a74c388fc9d4.25759837.jpeg '),
(70, 'LT', 'rani kumari', 'manoj sharma', 2147483647, 'rani@gmail.com', 34, 'rajiv nagar -2', 'rajiv nagar ', 'bihar', 'IMG-63a7689b4e2117.01062560.jpeg', 'IMG-63a7689b4de356.87664463.jpg '),
(71, 'LT', '', '', 0, '', 0, '', '', '', 'IMG-63a76941b1c136.03438515.jpg', 'IMG-63a76941b183e1.49302569.jpg '),
(72, 'LT', 'rohit kumar', 'raj kumar', 4654654, 'gvsdfsd@gmail.com', 24, '69', 'PAKADI', 'Bihar', 'IMG-63a8284f5b5060.51552533.jpeg', 'IMG-63a8284f58b8a1.35756612.jpeg '),
(73, 'LT', 'Aman kumar', 'Rohit singh', 2147483647, 'abc@gmail.com', 45, 'lane 4', 'Patna', 'Bihar', 'IMG-63a8a3b3ce17f2.36755012.jpeg', 'IMG-63a8a3b3afba21.17341891.jpg '),
(74, 'LT', 'rahul kumar', 'ranjan kumar', 2147483647, 'mithun@Gmail.com', 45, 'lane 5', 'Arwal', 'Bihar', 'IMG-63a8a6f15afd34.54147131.jpeg', 'IMG-63a8a6f15ab239.66373479.jpeg '),
(75, 'HT', 'rani kumari', 'ram isqbal', 2147483647, 'yourajeet17@gmail.com', 56, 'lane 46', 'munger', 'Bihar', 'IMG-63a8a775b11429.01493741.png', 'IMG-63a8a775b0d4b3.86851559.png '),
(76, 'LT', 'samar ', 'amar ', 2147483647, 'kjljk@gmail.com', 45, 'lanev-45', 'bihta', 'bihar', 'IMG-63a957a0927fd0.22523852.png', 'IMG-63a957a08ba4c3.57071293.png '),
(77, 'LT', 'shaaim', 'ilaksiase', 2147483647, 'i.abadhesh@gmail.com', 343, 'rampur ', 'bihar', ' patna', 'IMG-63a9b62b967b52.68736078.png', ' '),
(78, 'LT', 'rohit kumar', 'ram', 2147483647, 'mithun@Gmail.com', 0, '', '', '', 'IMG-63a9b6c7ce9d30.64962453.png', 'IMG-63a9b6c7cde099.09365393.png ');

-- --------------------------------------------------------

--
-- Table structure for table `register_complain`
--

CREATE TABLE `register_complain` (
  `id` int(25) NOT NULL,
  `con_name` varchar(50) NOT NULL,
  `con_contact` int(10) NOT NULL,
  `con_email` varchar(50) NOT NULL,
  `con_address` varchar(50) NOT NULL,
  `con_complaint` varchar(50) NOT NULL,
  `con_complaint_nature` varchar(50) NOT NULL,
  `complaint_against` varchar(50) NOT NULL,
  `complaint_detail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register_complain`
--

INSERT INTO `register_complain` (`id`, `con_name`, `con_contact`, `con_email`, `con_address`, `con_complaint`, `con_complaint_nature`, `complaint_against`, `complaint_detail`) VALUES
(8, 'dfsd', 85258285, 'adsfsd@gma.com', 'NEW ETWARPUR, DHALAIYA ROAD', 'fsdgfds', 'gdsf', 'dfgdsf', 'gdsfgd'),
(9, 'fghgd', 85258285, '', '', '', '', '', ''),
(10, 'dfsd', 85258285, '', '', '', '', '', ''),
(11, '', 0, '', '', '', '', '', ''),
(12, '', 0, '', '', '', '', '', ''),
(13, 'dfgdf', 0, '', '', '', '', '', 'dfgfd'),
(14, 'ram singh', 2147483647, 'adsfsd@gma.com', 'NEW ETWARPUR, DHALAIYA ROAD', 's sdfdsf ds sdf', 'sdf sdf sdf', '', 'sdf sdf ');

-- --------------------------------------------------------

--
-- Table structure for table `reject_connection_app`
--

CREATE TABLE `reject_connection_app` (
  `reject_id` int(25) NOT NULL,
  `connection_id` varchar(50) NOT NULL,
  `full_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reject_connection_app`
--

INSERT INTO `reject_connection_app` (`reject_id`, `connection_id`, `full_name`) VALUES
(1, '69', 'rohit kumar'),
(2, '69', 'rohit kumar'),
(3, '65', 'ram'),
(4, '77', 'rohit kumar');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `consumer_no` varchar(25) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_contact` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`consumer_no`, `user_name`, `user_email`, `user_contact`, `user_password`) VALUES
('', '', '', '', ''),
('100448034', 'abadhesh', 'raj@gmail.com', '46564', '123'),
('111', '', '', '', '698d51a19d8a121ce581499d7b701668'),
('123', '', '', '', '123'),
('1452715', 'sonali', 'sonali@gmail.com', '909899832', 'a9610e955c9bb8905ed96926c6ec1aa2'),
('54456456', 'salni', 'salni@gmail.com', '9879876546', '123'),
('65656', 'rohit', 'rohit@gmail.com', '5465465465', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `career_table`
--
ALTER TABLE `career_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `connection_table`
--
ALTER TABLE `connection_table`
  ADD PRIMARY KEY (`connection_id`);

--
-- Indexes for table `consumer_table`
--
ALTER TABLE `consumer_table`
  ADD PRIMARY KEY (`consumer_no`);

--
-- Indexes for table `contact_form_table`
--
ALTER TABLE `contact_form_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_table`
--
ALTER TABLE `master_table`
  ADD PRIMARY KEY (`connection_id`);

--
-- Indexes for table `register_complain`
--
ALTER TABLE `register_complain`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reject_connection_app`
--
ALTER TABLE `reject_connection_app`
  ADD PRIMARY KEY (`reject_id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`consumer_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `career_table`
--
ALTER TABLE `career_table`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `connection_table`
--
ALTER TABLE `connection_table`
  MODIFY `connection_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `consumer_table`
--
ALTER TABLE `consumer_table`
  MODIFY `consumer_no` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `contact_form_table`
--
ALTER TABLE `contact_form_table`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `master_table`
--
ALTER TABLE `master_table`
  MODIFY `connection_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `register_complain`
--
ALTER TABLE `register_complain`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `reject_connection_app`
--
ALTER TABLE `reject_connection_app`
  MODIFY `reject_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
