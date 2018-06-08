-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 14, 2016 at 06:10 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cus_complain`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_branch`
--

CREATE TABLE IF NOT EXISTS `tbl_branch` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `branch_code` varchar(5) NOT NULL,
  `branch_name` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `tbl_branch`
--

INSERT INTO `tbl_branch` (`id`, `branch_code`, `branch_name`, `address`) VALUES
(1, '1216A', 'Kafrul S & D Division', 'Kafrul S & D Division\r\nHouse No.- 4, Road No.-17, Block-C Section-l0, Mirpur, Dhaka-1216.'),
(2, '1216B', 'Monipur S & D Division', 'Monipur S & D Division\r\nHouse No.- 4, Road No.-17, Block-C Section-l0, Mirpur, Dhaka-1216.'),
(3, '1216C', 'Pallabi S & D Division', 'Pallabi S & D Division\r\nHouse No.-4, Road No.-17, Block-C Section-l0, Mirpur, Dhaka-1216.'),
(4, '1212A', 'Gulshan S & D Division', 'Gulshan S & D Division\r\nPlot No.-47, Road No.-134 Gulshan-l Dhaka-1212'),
(5, '1230A', 'Uttara (East) S & D Division ', 'Uttara (East) S & D Division \r\n20/21, Shahjalal Avenue Sector-6, \r\nUttara, Dhaka.'),
(6, '1230B', 'Dakshin Khan S & D Division', 'Dakshin Khan S & D Division\r\n Dag# 3503/3504, Mollah Para, \r\nDakshin Khan, Dhaka-1230.'),
(7, '1216D', 'Shah Ali S & D Division', 'Shah Ali S & D Division \r\nAs-Salam Tower, Plot no, 82 & 83, \r\nDhaka National Zoo Road, Block-A, \r\nMirpur-2, Dhaka-1216'),
(8, '1216E', 'Rupnagar S & D Division', 'Rupnagar S & D Division\r\nPlot-1/1, Road-07, Sec-07\r\nMirpur, Dhaka-1216'),
(9, '1207', 'Agargaon S & D Division', 'Agargaon S & D Division, \r\nBlock#D, (West side of Music College), Agargaon, Sher-E-Bangla Nagar, Dhaka-1207.'),
(10, '1230C', 'Uttar khan S & D Division', 'Uttar khan S & D Division\r\n40 Shah Kabir Majar Rd, Mazar Chowrasta, Uttarkhan, Dhaka-1230.'),
(11, '1212B', 'Joar Shahara S & D Division', 'Joar Shahara S & D Division\r\nPlot No.-47, Road No.-134 Gulshan-l Dhaka-1212');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_complain`
--

CREATE TABLE IF NOT EXISTS `tbl_complain` (
  `comp_id` int(15) NOT NULL AUTO_INCREMENT,
  `cust_id` int(10) NOT NULL,
  `comp_type` varchar(40) NOT NULL,
  `comp_title` varchar(200) NOT NULL,
  `comp_desc` varchar(500) NOT NULL,
  `comp_zone` varchar(100) NOT NULL,
  `comp_status` varchar(20) NOT NULL,
  `eng_id` int(10) NOT NULL,
  `create_date` varchar(30) NOT NULL,
  `close_date` varchar(30) NOT NULL,
  PRIMARY KEY (`comp_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `tbl_complain`
--

INSERT INTO `tbl_complain` (`comp_id`, `cust_id`, `comp_type`, `comp_title`, `comp_desc`, `comp_zone`, `comp_status`, `eng_id`, `create_date`, `close_date`) VALUES
(43, 1, 'Short Time', 'Service Wire Stealing.', 'My Service Wire Stealing Yesterday.....', 'Pallabi S & D Division', 'Working', 87654321, '09-6-2016', '12-6-2016');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE IF NOT EXISTS `tbl_customer` (
  `cust_id` int(10) NOT NULL AUTO_INCREMENT,
  `cust_name` varchar(30) NOT NULL,
  `user_name` varchar(10) NOT NULL,
  `password` int(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `mobile` int(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `conn_type` varchar(30) NOT NULL,
  `meter_id` int(20) NOT NULL,
  `branch_name` varchar(30) NOT NULL,
  PRIMARY KEY (`cust_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`cust_id`, `cust_name`, `user_name`, `password`, `address`, `mobile`, `email`, `conn_type`, `meter_id`, `branch_name`) VALUES
(1, 'Md Hasan Imam', 'hasan', 123456, 'Plot#16, Block#D. Road#4, Aftabnagar R/A, Badda,  (Beside Lohar Bridge)', 1911517621, 'hasan@gmail.com', 'ST', 12345678, '1216C'),
(2, 'Md Rahim Noor', 'rahim', 123456, 'House-26, Road-7, Sector-12 Uttara, Dhaka-1230.', 1987654321, 'rahim@gmail.com', 'ST', 12345699, '1230A'),
(3, 'Md Burhan Uddin.', 'burhan', 123456, 'Plot-1/1, Road-07, Sec-07\r\nMirpur, Dhaka-1216', 1911517622, 'burhan@gmail.com', 'LT', 12345675, '1216E'),
(4, 'Md Rafiq Hasan', 'rafiq', 123456, 'House-26, Road-7, Sector-12 Uttara, Dhaka-1230', 1819654321, 'rafiq@gmail.com', 'LT', 98765422, '1207'),
(5, 'Md Sabbir Hossain.', 'sabbir', 123456, 'Plot No.-47, Road No.-134 Gulshan-l Dhaka-1212', 1713234512, 'sabbir@yahoo.com', 'ST', 98765432, '1230C'),
(6, 'Md. Mahmudul Hasan', 'mahmudul', 123456, 'House No.-4, Road No.-17, Block-C Section-l0, Mirpur, Dhaka-1216.', 1918765432, 'mahmudul@gmail.com', 'LT', 12345678, '1216E');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_engineer`
--

CREATE TABLE IF NOT EXISTS `tbl_engineer` (
  `eng_id` int(10) NOT NULL,
  `eng_name` varchar(30) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `address` varchar(200) NOT NULL,
  `mobile` int(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `join_date` varchar(30) NOT NULL,
  `branch_name` varchar(30) NOT NULL,
  PRIMARY KEY (`eng_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_engineer`
--

INSERT INTO `tbl_engineer` (`eng_id`, `eng_name`, `designation`, `user_name`, `password`, `address`, `mobile`, `email`, `join_date`, `branch_name`) VALUES
(87654321, 'Mr Mahidul Islam', 'Senior Engineer', 'mahi', '123456', 'House No.- 4, Road No.-17, Block-C Section-l0, Mirpur, Dhaka-1216.', 1987654322, 'mahi@yahoo.com', '11-03-2012', '1216C'),
(87654322, 'Mr Ashraful Islam', 'Assistant Engineer', 'ashraful', '123456', 'Plot No.-47, Road No.-134 Gulshan-l Dhaka-1212', 1987654323, 'ashraful@yahoo.com', '11-03-2012', '1216C'),
(113078, 'Mr Touhid Hasan', 'Sub-Assistant Engineer', 'touhid', '123456', 'Plot No.-47, Road No.-134 Gulshan-l Dhaka-1212.', 1911765433, 'touhid@gmail.com', '12-03-2012', '1216E'),
(445987, 'Mr Rafi Hasan', 'Assistant Engineer', 'rafi', '123456', 'Plot No.-47, Road No.-134 Gulshan-l Dhaka-1212', 1817654321, 'rafi@gmail.com', '12-09-2011', '1230C'),
(123455, 'Mr Abu Yousuf', 'Sub-Assistant Engineer', 'yousuf', '123456', 'As-Salam Tower, Plot no, 82 & 83, Dhaka National Zoo Road, Block-A, Mirpur-2, Dhaka-1216', 1765432199, 'yousuf@gmail.com', '12-03-2015', '1216E');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_report`
--

CREATE TABLE IF NOT EXISTS `tbl_report` (
  `report_id` int(15) NOT NULL AUTO_INCREMENT,
  `complain_id` int(11) NOT NULL,
  `serv_name` varchar(200) NOT NULL,
  `description` varchar(500) NOT NULL,
  `serv_charge` double NOT NULL,
  PRIMARY KEY (`report_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tbl_report`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
