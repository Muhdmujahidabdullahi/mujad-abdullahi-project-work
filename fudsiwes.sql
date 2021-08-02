-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2021 at 12:07 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fudsiwes`
--

-- --------------------------------------------------------

--
-- Table structure for table `chart`
--

CREATE TABLE IF NOT EXISTS `chart` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `msg` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chart`
--

INSERT INTO `chart` (`id`, `name`, `msg`, `date`) VALUES
(25, 'Buhari', 'Slm', '2021-05-17 11:20:45'),
(26, 'Adamu', 'Wslm', '2021-05-17 11:21:24'),
(27, 'Buhari', 'Yaya Gida', '2021-05-17 11:25:04'),
(28, 'Adamu', 'Lfy', '2021-05-17 11:25:14'),
(29, 'Buhari', 'Masha Allah', '2021-05-17 11:29:08'),
(30, 'Adamu', 'Ya Lbr', '2021-05-17 11:36:53'),
(31, 'Buhari', 'Kai Shiru ne ai', '2021-05-17 11:37:14');

-- --------------------------------------------------------

--
-- Table structure for table `cordinator_acct`
--

CREATE TABLE IF NOT EXISTS `cordinator_acct` (
`S_NO` int(11) NOT NULL,
  `staff_ID` varchar(20) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cordinator_acct`
--

INSERT INTO `cordinator_acct` (`S_NO`, `staff_ID`, `Name`, `designation`, `password`) VALUES
(1, 'cordinator', 'Mustapha Abba', 'Siwes Coordinator', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `logbook`
--

CREATE TABLE IF NOT EXISTS `logbook` (
`id` int(11) NOT NULL,
  `stu_regno` varchar(25) NOT NULL,
  `week_no` int(11) NOT NULL,
  `day_no` int(11) NOT NULL,
  `day_name` varchar(15) NOT NULL,
  `Description` varchar(400) NOT NULL,
  `date` date NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `file_name` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logbook`
--

INSERT INTO `logbook` (`id`, `stu_regno`, `week_no`, `day_no`, `day_name`, `Description`, `date`, `create_date`, `file_name`) VALUES
(1, 'SCI/COM/00001', 1, 1, 'Monday', ' I Have a Learned About Cisco Networking  ', '2021-05-18', '2021-05-21 04:51:48', ''),
(2, 'SCI/COM/00001', 1, 2, 'Tuesday', 'I Have Learned also about how to blocked intruder in our System', '2021-05-14', '2021-05-21 05:03:45', ''),
(3, 'SCI/COM/00001', 1, 3, 'Wenesday', 'We Learned also today, how to troubleshoot network', '2021-05-15', '2021-05-21 14:13:05', ''),
(4, 'SCI/COM/00001', 1, 4, 'Thursday', 'We Learned a lot today', '2021-05-16', '2021-05-21 14:14:43', ''),
(5, '', 1, 5, 'Friday', 'We learned also about how to maintain computer hardware component', '2021-05-16', '2021-05-21 14:17:58', '1'),
(6, '', 2, 1, 'Monday', 'We learned excel', '2021-05-17', '2021-05-21 14:26:19', '26088-appletter.pdf'),
(7, '', 2, 2, 'Tuesday', 'We Learned Many Things Also Today', '2021-05-18', '2021-05-21 14:33:15', '25680-date of birth paper.pdf'),
(8, '', 2, 3, 'Wenesday', 'we learned about Android programming', '2021-05-19', '2021-05-21 14:36:22', ''),
(9, '', 2, 4, 'Thursday', 'We learned many  a lot', '2021-05-26', '2021-05-21 14:37:57', '53926-img-20190515-wa0024.jpg'),
(10, 'SCI/COM/00001', 2, 5, 'Friday', 'We Learn More About How to Format Computer System', '2021-07-01', '2021-07-04 07:53:37', ''),
(11, 'SCI/COM/00001', 3, 1, 'Monday', 'We Just Write some office document file, of daily activities', '2021-07-03', '2021-07-04 07:58:35', '');

-- --------------------------------------------------------

--
-- Table structure for table `login_account_details`
--

CREATE TABLE IF NOT EXISTS `login_account_details` (
`S_NO` int(11) NOT NULL,
  `Stu_reg_no` varchar(20) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `status` enum('Approve','Pending') NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_account_details`
--

INSERT INTO `login_account_details` (`S_NO`, `Stu_reg_no`, `Password`, `status`) VALUES
(1, 'user', 'user', 'Pending'),
(2, 'SCI/COM/00001', 'garko', 'Pending'),
(3, 'SCI/COM/00001', 'garko', 'Pending'),
(4, 'SCI/COM/00001', 'abba', 'Pending'),
(5, 'SCI/COM/00001', 'garko', 'Pending'),
(6, 'SCI/COM/00001', 'garko', 'Pending'),
(7, 'SCI/COM/00001', 'garko', 'Pending'),
(8, 'SCI/COM/00001', 'garko', 'Pending'),
(9, 'SCI/COM/00001', 'binubale', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE IF NOT EXISTS `notice` (
`id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `message` varchar(600) NOT NULL,
  `postdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `name`, `message`, `postdate`) VALUES
(1, 'BuhariUbale', 'Hello', '2021-05-18 20:44:28');

-- --------------------------------------------------------

--
-- Table structure for table `place_of_attachment`
--

CREATE TABLE IF NOT EXISTS `place_of_attachment` (
`S_NO` int(11) NOT NULL,
  `Stu_reg_no` varchar(15) NOT NULL,
  `place_name` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `acceptance_letter` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `place_of_attachment`
--

INSERT INTO `place_of_attachment` (`S_NO`, `Stu_reg_no`, `place_name`, `address`, `acceptance_letter`) VALUES
(1, 'SCI/COM/00001', 'Express Radio 90.3 FM, Kano St', 'Lamido Cresent, New Layout, Nassarawa GRA Kano State ', '87468-green_card_slip_.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `siwes_letter`
--

CREATE TABLE IF NOT EXISTS `siwes_letter` (
`id` int(11) NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `file_type` varchar(40) NOT NULL,
  `file_size` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siwes_letter`
--

INSERT INTO `siwes_letter` (`id`, `file_name`, `file_type`, `file_size`) VALUES
(1, '58751-appletter.pdf', 'application/pdf', 4653);

-- --------------------------------------------------------

--
-- Table structure for table `staff_acct`
--

CREATE TABLE IF NOT EXISTS `staff_acct` (
`S_NO` int(11) NOT NULL,
  `staff_ID` varchar(15) NOT NULL,
  `staff_name` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_acct`
--

INSERT INTO `staff_acct` (`S_NO`, `staff_ID`, `staff_name`, `password`) VALUES
(1, 'staff1', 'Mujahid Abdullahi', 'staff');

-- --------------------------------------------------------

--
-- Table structure for table `student_validation`
--

CREATE TABLE IF NOT EXISTS `student_validation` (
`id` int(11) NOT NULL,
  `Stu_reg_no` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `supervisor_name` varchar(50) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `phone_no` varchar(11) NOT NULL,
  `faculty` varchar(50) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `file_name` varchar(30) NOT NULL,
  `status` enum('Pending','Approve') NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_validation`
--

INSERT INTO `student_validation` (`id`, `Stu_reg_no`, `email`, `supervisor_name`, `fullname`, `phone_no`, `faculty`, `dept`, `dob`, `file_name`, `status`) VALUES
(9, 'SCI/COM/00001', 'bugarko13@gmail.com', 'Dr Musa Isa', 'Buhari Ubale', '08000112233', 'Faculty of Computer & Info. Tech.', 'Software Engineering', '2003-06-18', '5637-img-20190515-wa0024.jpg', 'Approve'),
(10, 'SCI/COM/00002', 'binubalegarko13@gmail.com', 'Dr Musa Isa', '', '', '', '', '0000-00-00', '', 'Pending'),
(12, 'SCI/COM/00003', 'abbaisa@gmail.com', 'Dr Musa Isa', '', '', '', '', '0000-00-00', '', 'Pending'),
(13, 'SCI/COM/00004', 'saniabbag@gmail.com', 'Dr Musa Isa', '', '', '', '', '0000-00-00', '', 'Pending'),
(14, 'SCI/COM/00002', 'binubalegarko13@gmail.com', 'Dr Musa Isa', '', '', '', '', '0000-00-00', '', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `supervisor_account`
--

CREATE TABLE IF NOT EXISTS `supervisor_account` (
`S_NO` int(11) NOT NULL,
  `staff_ID` varchar(20) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `Department` varchar(30) NOT NULL,
  `Rank` varchar(30) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supervisor_account`
--

INSERT INTO `supervisor_account` (`S_NO`, `staff_ID`, `fullname`, `Department`, `Rank`, `phone`, `email`, `password`) VALUES
(1, 'Staff2', 'Dr Musa Isa', 'Computer Science', 'Duputy Dean', '09099887766', 'drmusaisa@gmail.com', '123456'),
(2, 'Staff3', 'Mustapha Hamza', 'Engineering', 'IT Supervisor', '09099887788', 'mustaphahamza@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `supervisor_comment`
--

CREATE TABLE IF NOT EXISTS `supervisor_comment` (
`id` int(11) NOT NULL,
  `weekno` int(11) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `comment_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supervisor_comment`
--

INSERT INTO `supervisor_comment` (`id`, `weekno`, `comment`, `comment_date`) VALUES
(1, 1, 'Very Good, You are absolutely good learner indeed', '2021-05-26 14:21:33'),
(2, 2, 'Very Good Job, Keep it Up', '2021-06-11 20:11:29'),
(3, 1, 'Very Good', '2021-07-11 22:03:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chart`
--
ALTER TABLE `chart`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cordinator_acct`
--
ALTER TABLE `cordinator_acct`
 ADD PRIMARY KEY (`S_NO`);

--
-- Indexes for table `logbook`
--
ALTER TABLE `logbook`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_account_details`
--
ALTER TABLE `login_account_details`
 ADD PRIMARY KEY (`S_NO`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `place_of_attachment`
--
ALTER TABLE `place_of_attachment`
 ADD PRIMARY KEY (`S_NO`);

--
-- Indexes for table `siwes_letter`
--
ALTER TABLE `siwes_letter`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_acct`
--
ALTER TABLE `staff_acct`
 ADD PRIMARY KEY (`S_NO`);

--
-- Indexes for table `student_validation`
--
ALTER TABLE `student_validation`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supervisor_account`
--
ALTER TABLE `supervisor_account`
 ADD PRIMARY KEY (`S_NO`);

--
-- Indexes for table `supervisor_comment`
--
ALTER TABLE `supervisor_comment`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chart`
--
ALTER TABLE `chart`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `cordinator_acct`
--
ALTER TABLE `cordinator_acct`
MODIFY `S_NO` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `logbook`
--
ALTER TABLE `logbook`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `login_account_details`
--
ALTER TABLE `login_account_details`
MODIFY `S_NO` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `place_of_attachment`
--
ALTER TABLE `place_of_attachment`
MODIFY `S_NO` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `siwes_letter`
--
ALTER TABLE `siwes_letter`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `staff_acct`
--
ALTER TABLE `staff_acct`
MODIFY `S_NO` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `student_validation`
--
ALTER TABLE `student_validation`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `supervisor_account`
--
ALTER TABLE `supervisor_account`
MODIFY `S_NO` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `supervisor_comment`
--
ALTER TABLE `supervisor_comment`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
