-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 22, 2016 at 06:19 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(20) NOT NULL,
  `pwd` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `pwd`) VALUES
('admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');

-- --------------------------------------------------------

--
-- Table structure for table `backform`
--

CREATE TABLE IF NOT EXISTS `backform` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `subquantity` int(10) NOT NULL,
  `backFee` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `backform`
--

INSERT INTO `backform` (`id`, `subquantity`, `backFee`) VALUES
(1, 1, 400),
(2, 2, 800),
(3, 3, 1200);

-- --------------------------------------------------------

--
-- Table structure for table `improvementform`
--

CREATE TABLE IF NOT EXISTS `improvementform` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numofsub` int(5) NOT NULL,
  `impFee` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `improvementform`
--

INSERT INTO `improvementform` (`id`, `numofsub`, `impFee`) VALUES
(1, 1, 100),
(2, 2, 200),
(3, 3, 300),
(4, 4, 400),
(5, 5, 500),
(6, 6, 600);

-- --------------------------------------------------------

--
-- Table structure for table `leepfee`
--

CREATE TABLE IF NOT EXISTS `leepfee` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `sem` varchar(5) NOT NULL,
  `tuitionFee` float NOT NULL,
  `developmentFee` float NOT NULL,
  `developmentFeeR` float NOT NULL,
  `cautionMoney` float NOT NULL,
  `insuranceCharges` float NOT NULL,
  `total` float NOT NULL,
  `batch` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `leepfee`
--

INSERT INTO `leepfee` (`id`, `sem`, `tuitionFee`, `developmentFee`, `developmentFeeR`, `cautionMoney`, `insuranceCharges`, `total`, `batch`) VALUES
(1, 'III', 29500, 5665, 5656, 5656, 5665, 566, 2012),
(2, 'IV', 29500, 5500, 0, 0, 0, 35000, 2012),
(3, 'V', 56, 5, 65, 65, 45, 6, 2012),
(4, 'VI', 29500, 5500, 0, 0, 0, 35000, 2012),
(5, 'VII', 24500, 5500, 0, 0, 50, 30050, 2012),
(6, 'VIII', 24500, 5500, 0, 0, 0, 30000, 2012);

-- --------------------------------------------------------

--
-- Table structure for table `mainform`
--

CREATE TABLE IF NOT EXISTS `mainform` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mainFormFee` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `mainform`
--

INSERT INTO `mainform` (`id`, `mainFormFee`) VALUES
(1, 1200);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `notice` varchar(200) NOT NULL,
  `verify` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `date`, `notice`, `verify`) VALUES
(1, '2015-11-21 05:03:29', 'Submission of main exam fees of 5th semester starts from 22/dec/2015. last date of submission is 31/dec/2015', 1),
(2, '2015-11-21 05:01:30', ' last date for the submission of reval form fee for 3rd semester is 12 january 2016', 1),
(3, '2015-11-21 05:02:56', 'last date for submission of 7th semester fees is 23/dec/2015', 1);

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE IF NOT EXISTS `records` (
  `name` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `enr` varchar(12) NOT NULL,
  `batch` int(5) NOT NULL,
  `branch` varchar(5) NOT NULL,
  `year` varchar(5) NOT NULL,
  `sem` varchar(5) NOT NULL,
  `admissionT` varchar(20) NOT NULL,
  `seat` varchar(10) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `age` int(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` bigint(12) NOT NULL,
  `fphone` bigint(12) NOT NULL,
  `pwd` varchar(40) NOT NULL,
  PRIMARY KEY (`enr`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`name`, `lname`, `fname`, `enr`, `batch`, `branch`, `year`, `sem`, `admissionT`, `seat`, `sex`, `age`, `email`, `phone`, `fphone`, `pwd`) VALUES
('akshay', 'sharma', 'nand kishor', '12ectcs006', 2008, 'CSE', 'IV', 'VII', 'direct', 'SFS', 'Male', 21, 'akshay@gmail.com', 9828894644, 9828894644, 'b1d525b521eb566a5a8f1733fb7622'),
('Bhawna ', 'Sood', 'Rakesh Chandra Sood', '12ECTCS019', 2012, 'CSE', 'IV', 'VII', 'direct', 'SFS', 'Female', 21, 'soodbhawna87@gmail.com', 7597042741, 85471258742, 'cc3680dce80409159d6be9b74f7a2b596b0662e7'),
('Diksha ', 'Rajpurohit', 'Mr. Babulal Purohit', '12ectcs026', 2012, 'CSE', 'IV', 'VIII', 'direct', 'SFS', 'Female', 20, 'rajpurohitgirl.diksha@gmail.co', 9509322619, 9414080946, 'a392ed0c0ddcf7f9ae08b67935d68269edec9f6f'),
('Gourav ', 'Sharma', 'Mr. Vinod Kumar Shar', '12ectcs029', 2012, 'CSE', 'IV', 'VII', 'counselling', 'SFS', 'Male', 21, 'gurujigourav@gmail.com', 7733053043, 9462481892, 'redhat'),
('Hijab', 'Fatima', 'Mr. Hussain', '12ectcs030', 2012, 'CSE', 'IV', 'VII', 'direct', 'SFS', 'Female', 21, 'drama@hijab.com', 1234567890, 9874563210, '63b12989474b64a1b1f8c2035d6ef2a4640845c6'),
('irshaad', 'ali', 'mohd iqbal', '12ectcs031', 2012, 'CSE', 'IV', 'VII', 'direct', 'SFS', 'Male', 20, 'irshaadali14@gmail.com', 9828894644, 9414430535, 'd35be139e809a6751f35e5bfbe6cd4b1cd88937d'),
('jatin', 'soni', 'rajendra kumar soni', '12ectcs036', 2012, 'CSE', 'IV', 'VII', 'counselling', 'SFS', 'Male', 21, 'microsd.soni@gmail.com', 7023808322, 874006985, '246f3d60049c32f4b3a816ad86529cf52e2c1de5'),
('kuldeep ', 'yadav', 'om prakash yadav', '12ectcs050', 2012, 'CSE', 'IV', 'VII', 'counselling', 'SFS', 'Male', 20, 'yadavkuldeep938@gmail.com', 9782289517, 9982060255, 'dfeaf10390e560aea745ccba53e044'),
('Madhav', 'Sodhani', 'Hari Ram Sodhani', '12ECTCS051', 2012, 'CSE', 'IV', 'VII', 'counselling', 'SFS', 'Male', 21, 'madhav2302@gmail.com', 7568232292, 9314432833, 'f92fc749ce01091d1893dd61e813d8'),
('naveen', 'jagrat', 'shankar lal', '12ectcs060', 2012, 'CSE', 'IV', 'VII', 'counselling', 'SFS', 'Male', 21, 'naveenjagrat@gmail.com', 9950988983, 5869547585, '3d6763c3d71a5097cc04be5c4cc232a812990171'),
('Neeraj kumar', 'Rawal', 'Vinod kumar Rawal', '12ECTCS063', 2012, 'CSE', 'IV', 'VII', 'counselling', 'TFWS', 'Male', 20, 'neerajrawal56@gmail.com', 7597518150, 9828822873, '5f7b62f4fa4ba0a7ec82781dbc20148ea94f8da6'),
('anoop', 'passi', 'subhash chander pass', '12emecs006', 2012, 'CSE', 'IV', 'VII', 'direct', 'SFS', 'Male', 21, 'anooppassi55@gmail.com', 919828894644, 464646, '15fe5f944a0d4bb48bbe5e52cf32fc');

-- --------------------------------------------------------

--
-- Table structure for table `semfee`
--

CREATE TABLE IF NOT EXISTS `semfee` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `sem` varchar(5) NOT NULL,
  `tuitionFee` float NOT NULL,
  `developmentFee` float NOT NULL,
  `developmentFeeR` float NOT NULL,
  `cautionMoney` float NOT NULL,
  `insuranceCharges` float NOT NULL,
  `total` float NOT NULL,
  `batch` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `semfee`
--

INSERT INTO `semfee` (`id`, `sem`, `tuitionFee`, `developmentFee`, `developmentFeeR`, `cautionMoney`, `insuranceCharges`, `total`, `batch`) VALUES
(1, 'I', 29500, 5500, 2500, 7500, 50, 45050, 2012),
(2, 'II', 29500, 5500, 0, 0, 0, 35000, 2012),
(3, 'III', 29500, 5500, 0, 0, 50, 35050, 2012),
(4, 'IV', 29500, 5500, 0, 0, 0, 0, 2012),
(5, 'V', 24500, 5500, 0, 0, 50, 30050, 2012),
(6, 'VI', 24500, 5500, 0, 0, 0, 30000, 2012),
(7, 'VII', 24500, 5500, 0, 0, 50, 30050, 2012),
(8, 'VIII', 24500, 5500, 0, 0, 0, 30000, 2012);

-- --------------------------------------------------------

--
-- Table structure for table `tfwsfee`
--

CREATE TABLE IF NOT EXISTS `tfwsfee` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `sem` varchar(5) NOT NULL,
  `tuitionFee` float NOT NULL,
  `developmentFee` float NOT NULL,
  `developmentFeeR` float NOT NULL,
  `cautionMoney` float NOT NULL,
  `insuranceCharges` float NOT NULL,
  `total` float NOT NULL,
  `batch` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tfwsfee`
--

INSERT INTO `tfwsfee` (`id`, `sem`, `tuitionFee`, `developmentFee`, `developmentFeeR`, `cautionMoney`, `insuranceCharges`, `total`, `batch`) VALUES
(1, 'I', 0, 5500, 2500, 7500, 50, 15550, 2012),
(2, 'II', 0, 5500, 0, 0, 0, 5500, 2012),
(3, 'III', 0, 5500, 0, 0, 50, 5550, 2012),
(4, 'IV', 0, 5500, 0, 0, 0, 5500, 2012),
(5, 'V', 0, 5500, 0, 0, 50, 5550, 2012),
(6, 'VI', 0, 5500, 0, 0, 0, 5500, 2012),
(7, 'VII', 0, 5500, 0, 0, 50, 5550, 2012),
(8, 'VIII', 0, 5500, 0, 0, 0, 5500, 2012);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE IF NOT EXISTS `transaction` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `enr` varchar(50) NOT NULL,
  `sem` varchar(10) NOT NULL,
  `branch` varchar(10) NOT NULL,
  `transactionType` varchar(30) NOT NULL,
  `amount` int(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `name`, `enr`, `sem`, `branch`, `transactionType`, `amount`, `date`) VALUES
(1, 'Irshaad ali', '12ectcs031', 'VII', 'CSE', 'Main Form Fee', 1200, '2015-11-20 09:07:59'),
(8, 'Irshaad ali', '12ectcs031', 'VII', 'CSE', 'Main Form Fee', 1200, '2015-11-20 09:09:52'),
(9, 'Irshaad ali', '12ectcs031', 'VII', 'CSE', 'Main Form Fee', 1200, '2015-11-20 09:17:40'),
(10, 'Irshaad ali', '12ectcs031', 'VII', 'CSE', 'Main Form Fee', 1200, '2015-11-20 09:18:16'),
(11, 'Irshaad ali', '12ectcs031', 'VII', 'CSE', 'Main Form Fee', 1200, '2015-11-20 09:19:34'),
(12, 'Irshaad ali', '12ectcs031', 'VII', 'CSE', 'Main Form Fee', 1200, '2015-11-20 09:19:50'),
(13, 'Irshaad ali', '12ectcs031', 'VII', 'CSE', 'Main Form Fee', 1200, '2015-11-20 09:21:15'),
(14, 'Irshaad ali', '12ectcs031', 'VII', 'CSE', 'Main Form Fee', 1200, '2015-11-20 09:24:24'),
(15, 'Irshaad ali', '12ectcs031', 'VII', 'CSE', 'Semester Fee', 30050, '2015-11-20 09:57:14'),
(19, 'Irshaad ali', '12ectcs031', 'VII', 'CSE', 'Improvement Form Fee', 400, '2015-11-20 10:03:33'),
(20, 'Irshaad ali', '12ectcs031', 'VII', 'CSE', 'Back Form Fee', 800, '2015-11-20 10:05:36'),
(21, 'Irshaad ali', '12ectcs031', 'VII', 'CSE', 'Improvement Form Fee', 200, '2015-11-20 10:06:43'),
(22, 'Irshaad ali', '12ectcs031', 'VII', 'CSE', 'Main Form Fee', 1200, '2015-11-21 04:24:16'),
(23, 'Irshaad ali', '12ectcs031', 'VII', 'CSE', 'Main Form Fee', 1200, '2015-11-21 05:41:49'),
(24, 'Irshaad ali', '12ectcs031', 'VII', 'CSE', 'Semester Fee', 30050, '2015-11-21 06:09:14'),
(25, 'Irshaad ali', '12ectcs031', 'VII', 'CSE', 'Main Form Fee', 1200, '2015-11-21 09:36:44'),
(26, 'Diksha  Rajpurohit', '12ectcs026', 'VIII', 'CSE', 'Semester Fee', 30000, '2015-12-17 10:14:56'),
(27, 'Diksha  Rajpurohit', '12ectcs026', 'VIII', 'CSE', 'Main Form Fee', 1200, '2015-12-17 10:15:05'),
(28, 'Diksha  Rajpurohit', '12ectcs026', 'VIII', 'CSE', 'Semester Fee', 30000, '2015-12-17 10:15:25');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
