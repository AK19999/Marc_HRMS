-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 25, 2019 at 07:33 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `marc`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_access`
--

CREATE TABLE IF NOT EXISTS `tbl_access` (
  `ac_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(60) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`ac_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_access`
--

INSERT INTO `tbl_access` (`ac_id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', '123456'),
(2, 'attendance', 'unlocked');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `adm_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`adm_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`adm_id`, `username`, `password`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_advance`
--

CREATE TABLE IF NOT EXISTS `tbl_advance` (
  `adv_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `advance` varchar(50) NOT NULL,
  `date` varchar(10) NOT NULL,
  `reason` varchar(100) NOT NULL,
  PRIMARY KEY (`adv_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_advance`
--

INSERT INTO `tbl_advance` (`adv_id`, `emp_id`, `dept_id`, `advance`, `date`, `reason`) VALUES
(1, 1, 1, '122', '2019-07-23', ''),
(2, 1, 1, '200', '2019-07-23', ''),
(3, 1, 1, '100', '2019-07-23', ''),
(4, 2, 2, '200', '2019-07-23', ''),
(5, 2, 2, '50', '2019-07-23', ''),
(6, 1, 1, '200', '2019-07-23', 'important'),
(7, 6, 2, '200', '2019-07-24', 'fever'),
(8, 1, 1, '500', '2019-07-25', 'fghjk');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_answer`
--

CREATE TABLE IF NOT EXISTS `tbl_answer` (
  `ans_id` int(11) NOT NULL AUTO_INCREMENT,
  `ques_id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `answer` varchar(500) NOT NULL,
  `date` varchar(10) NOT NULL,
  PRIMARY KEY (`ans_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_answer`
--

INSERT INTO `tbl_answer` (`ans_id`, `ques_id`, `emp_id`, `answer`, `date`) VALUES
(1, 1, 3, 'sdflbadsfvbfdlnv', '2019-07-22'),
(2, 1, 1, 'saFDf', '2019-07-25');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_apply`
--

CREATE TABLE IF NOT EXISTS `tbl_apply` (
  `app_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `filename` varchar(150) NOT NULL,
  `skill` varchar(6) NOT NULL,
  `status` varchar(10) NOT NULL,
  `date` varchar(10) NOT NULL,
  PRIMARY KEY (`app_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_apply`
--

INSERT INTO `tbl_apply` (`app_id`, `name`, `email`, `mobile`, `gender`, `dob`, `filename`, `skill`, `status`, `date`) VALUES
(1, 'VIKASH KUMAR GUPTA', 'rsvkg143@gmail.com', '+918953313162', 'male', '1999-07-15', 'ankit.docx', 'yes', 'confirm', '2019-07-22'),
(2, 'sekhar', 'sekhar@gmail.com', '125895145', 'male', '1995-06-14', 'IMPS Transfer.pdf', 'yes', 'waiting', '2019-07-24'),
(3, 'shriyansh', 'shri@gmail.com', '8953313162', 'male', '1993-05-10', 'Mohit Admit Card 2018-19 Odd-Sem.pdf', 'yes', 'waiting', '2019-07-24');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_applyleaves`
--

CREATE TABLE IF NOT EXISTS `tbl_applyleaves` (
  `levave_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `datefrom` varchar(10) NOT NULL,
  `till` varchar(10) NOT NULL,
  `empid` int(11) NOT NULL,
  `date` varchar(10) NOT NULL,
  `status` varchar(15) NOT NULL,
  PRIMARY KEY (`levave_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_applyleaves`
--

INSERT INTO `tbl_applyleaves` (`levave_id`, `title`, `description`, `datefrom`, `till`, `empid`, `date`, `status`) VALUES
(1, 'Work', 'Work', '2019-07-18', '2019-07-22', 1, '2019-07-20', 'pending'),
(2, 'Important', 'Work', '2019-06-30', '2019-07-12', 3, '2019-07-20', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_attendence`
--

CREATE TABLE IF NOT EXISTS `tbl_attendence` (
  `attd_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) NOT NULL,
  `att_status` varchar(60) NOT NULL,
  `date` varchar(10) NOT NULL,
  `time` varchar(20) NOT NULL,
  PRIMARY KEY (`emp_id`,`date`),
  KEY `attd_id` (`attd_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `tbl_attendence`
--

INSERT INTO `tbl_attendence` (`attd_id`, `emp_id`, `att_status`, `date`, `time`) VALUES
(1, 1, 'present', '20-07-2019', '10:01:08'),
(2, 2, 'present', '20-07-2019', '10:01:12'),
(3, 3, 'present', '20-07-2019', '10:01:14'),
(4, 4, 'present', '20-07-2019', '10:01:16'),
(5, 5, 'present', '20-07-2019', '10:01:20'),
(6, 1, 'present', '22-07-2019', '09:47:57'),
(7, 2, 'absent', '22-07-2019', '09:48:00'),
(8, 6, 'present', '22-07-2019', '09:48:00'),
(9, 4, 'present', '22-07-2019', '09:48:03'),
(10, 5, 'present', '22-07-2019', '09:48:11'),
(11, 2, 'absent', '23-07-2019', '09:31:19'),
(12, 6, 'present', '23-07-2019', '09:31:19'),
(13, 3, 'present', '23-07-2019', '09:31:23'),
(14, 4, 'present', '23-07-2019', '09:31:26'),
(15, 5, 'present', '23-07-2019', '09:31:30'),
(16, 1, 'present', '24-07-2019', '08:59:56'),
(17, 2, 'present', '24-07-2019', '09:00:05'),
(18, 6, 'absent', '24-07-2019', '09:00:05'),
(19, 3, 'absent', '24-07-2019', '09:00:08'),
(20, 4, 'present', '24-07-2019', '09:00:11'),
(21, 5, 'present', '24-07-2019', '09:00:14'),
(22, 1, 'absent', '25-07-2019', '12:08:12'),
(23, 2, 'present', '25-07-2019', '12:08:15'),
(24, 6, 'absent', '25-07-2019', '12:08:15'),
(25, 3, 'absent', '25-07-2019', '12:08:18'),
(26, 5, 'absent', '25-07-2019', '12:08:23');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_department`
--

CREATE TABLE IF NOT EXISTS `tbl_department` (
  `dept_id` int(11) NOT NULL AUTO_INCREMENT,
  `department` varchar(30) NOT NULL,
  `date` varchar(10) NOT NULL,
  PRIMARY KEY (`dept_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_department`
--

INSERT INTO `tbl_department` (`dept_id`, `department`, `date`) VALUES
(1, 'HR', '2019-07-20'),
(2, 'Marketing', '2019-07-20'),
(3, 'Inventory', '2019-07-20'),
(4, 'Workshop', '2019-07-20'),
(5, 'Account', '2019-07-20'),
(6, 'BD', '2019-07-25');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee`
--

CREATE TABLE IF NOT EXISTS `tbl_employee` (
  `emp_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `fname` varchar(60) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `pic` varchar(200) NOT NULL,
  `date` varchar(10) NOT NULL,
  `status` varchar(6) NOT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_employee`
--

INSERT INTO `tbl_employee` (`emp_id`, `name`, `fname`, `gender`, `email`, `password`, `dob`, `dept_id`, `address`, `mobile`, `pic`, `date`, `status`) VALUES
(1, 'VIKASH KUMAR GUPTA', 'R.S. Gupta', 'male', 'rsvkg143@gmail.com', 'vikash', '1999-01-09', 1, 'SARROIE BABU KALANA MIRZAPUR', '+918953313162', 'PicsArt_07-23-04.33.03.png', '2019-07-20', 'y'),
(2, 'Ankit Verma', 'Ankit k papa', 'male', 'ankitverma7398@gmail.com', 'ankit', '1999-02-02', 2, 'jhushi allahabad', '7398123905', 'IMG_20181006_153253_001.jpg', '2019-07-20', 'y'),
(3, 'Deepak', 'A.K.', 'male', 'deepak@gmail.com', 'deepak', '1998-02-02', 3, 'Pratapgarh Allahaad', '12345678', 'IMG-20180312-WA0045.jpg', '2019-07-20', 'y'),
(4, 'Somendra', 'R.M Yadav', 'male', 'somu@gmail.com', 'somendra', '1998-08-18', 4, 'Patapgarh Allahabad', '1234567890', 'IMG-20190109-WA0043.jpg', '2019-07-20', 'y'),
(5, 'Vinay Dubey', 'R . Dubey', 'male', 'vinay@gmail.com', 'vinay', '1997-06-10', 5, 'phaphamau allahabad', '9795162969', 'IMG-20190109-WA0030.jpg', '2019-07-20', 'y'),
(6, 'Sarvesh ', 'R Gupta', 'male', 'sarvesh@gmail.com', 'sarvesh', '1997-06-17', 2, 'jhalava allahabad', '', '240f6dee72aa5bd8018007463adb3dce.jpg', '2019-07-21', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notification`
--

CREATE TABLE IF NOT EXISTS `tbl_notification` (
  `not_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(60) NOT NULL,
  `type` varchar(20) NOT NULL,
  `discription` text NOT NULL,
  `status` varchar(10) NOT NULL,
  `date` varchar(10) NOT NULL,
  PRIMARY KEY (`not_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_notification`
--

INSERT INTO `tbl_notification` (`not_id`, `title`, `type`, `discription`, `status`, `date`) VALUES
(1, 'Apply For Job.', 'Public', 'For  Only PHP developer', 'show', '22-07-2019'),
(2, 'Rakshabandhan Offer', 'Private', 'Rakshabandhan', 'show', '22-07-2019'),
(3, 'Adhar Card Is compulsory.', 'Private', 'According to new rules of labour laws the Diwali Bonus is set only for those person who have enrolled their Adhar Card.', 'hide', '23-07-2019');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_question`
--

CREATE TABLE IF NOT EXISTS `tbl_question` (
  `ques_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) NOT NULL,
  `question` varchar(300) NOT NULL,
  `date` varchar(10) NOT NULL,
  PRIMARY KEY (`ques_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_question`
--

INSERT INTO `tbl_question` (`ques_id`, `emp_id`, `question`, `date`) VALUES
(1, 3, 'sdfsdag', '2019-07-22'),
(2, 1, 'what is paygrade of workshop department', '2019-07-23');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_salary`
--

CREATE TABLE IF NOT EXISTS `tbl_salary` (
  `sal_id` int(11) NOT NULL AUTO_INCREMENT,
  `dept_id` int(11) NOT NULL,
  `paygrade` varchar(100) NOT NULL,
  `basic` varchar(100) NOT NULL,
  PRIMARY KEY (`sal_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_salary`
--

INSERT INTO `tbl_salary` (`sal_id`, `dept_id`, `paygrade`, `basic`) VALUES
(1, 1, '1000', '30000'),
(2, 2, '500', '15000'),
(3, 3, '600', '18000'),
(4, 5, '700', '21000'),
(5, 4, '550', '16500');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shedule`
--

CREATE TABLE IF NOT EXISTS `tbl_shedule` (
  `shd_id` int(11) NOT NULL AUTO_INCREMENT,
  `app_id` int(11) NOT NULL,
  `venue` varchar(150) NOT NULL,
  `date` varchar(10) NOT NULL,
  `time` varchar(15) NOT NULL,
  `currentdate` varchar(10) NOT NULL,
  `selection` varchar(15) NOT NULL,
  PRIMARY KEY (`shd_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_shedule`
--

INSERT INTO `tbl_shedule` (`shd_id`, `app_id`, `venue`, `date`, `time`, `currentdate`, `selection`) VALUES
(1, 1, 'Marc HRMS hall 1', '2019-07-27', '05:57', '2019-07-23', 'done'),
(2, 2, 'Mark Hrms hall 2', '2019-07-31', '16:57', '2019-07-24', 'done'),
(3, 1, '', '', '', '2019-07-24', 'undone'),
(4, 1, 'Marc', '2019-07-25', '00:00', '2019-07-24', 'undone');
