-- phpMyAdmin SQL Dump
-- version 3.3.0
-- https://www.phpmyadmin.net/
-- Host: 127.0.0.1
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";
--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `psw` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `name`, `psw`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `performer`
--

CREATE TABLE `performer` (
  `pid` int(11) NOT NULL,
  `wid` int(11) NOT NULL,
  `pname` varchar(30) NOT NULL,
  `usn` varchar(30) NOT NULL,
  `sem` varchar(10) NOT NULL,  
  `email` varchar(50) NOT NULL,
  `psw` varchar(20) NOT NULL,
  `dance_style` varchar(20) NOT NULL,
  `dtime` varchar(20) NOT NULL,
  `ddate` date NOT NULL,
  `bookingdate` date NOT NULL,
  `payment` varchar(30) NOT NULL,
  `section` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL
 
  
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `performer`
--

INSERT INTO `performer` (`pid`, `wid`, `pname`, `usn`, `sem`, `email`, `psw`, `dance_style`, `dtime`, `ddate`, `bookingdate`, `payment`,`section`,`gender`) VALUES
(18, 1, 'Sahana', '1DT20IS080', '5', 'sahanacreddy18@gmail.com', '123', 'MUSIC', '10 am', '2022-12-28', '2023-01-24', 'yes','b','Female'),
(19, 1, 'Nismitha', '1DT20IS058', '5', 'nishmithashettr25@gmail.com', '123', 'Dance', '10 am', '2022-12-28', '2023-01-24', 'yes','a','Female'),
(31, 1, 'nischal s', '1DT20IS057', '5', 'nischal57@gmail.com', '123', 'Technical', '10 am', '2022-12-28', '2023-01-24', 'yes','a','Male');

-- --------------------------------------------------------
-- Table structure for table `coach`
--

CREATE TABLE `coach` (
  `cid` int(11) NOT NULL,
  `wid` int(11) NOT NULL,
  `cname` varchar(30) NOT NULL,
  `usnc` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dstyle` varchar(30) NOT NULL,
  `psw` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cselect` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coach`
--

INSERT INTO `coach` (`cid`, `wid`, `cname`, `usnc`, `gender`, `dstyle`, `psw`, `email`, `cselect`) VALUES
(1, 1, 'aditi', '1dt20is005', 'Female', 'fashion', '123', 'aditi@gmail.com', 'Not Action'),
(2, 15, 'bhanav', '1dt20is020', 'Male', 'fashion', '123', 'bhanavhosapattan@gmail.com', 'Not Action'),
(3, 4, 'kavitha', '1dt20is69', 'Female', 'art & literature', '123', 'Kavitha02aradhya@gmail.com', 'Not Action');


-- --------------------------------------------------------
--
-- Table structure for table `workshop`
--

CREATE TABLE `workshop` (
  `wid` int(11) NOT NULL,
  `wname` varchar(40) NOT NULL,
  `wdate` date NOT NULL,
  `venue` varchar(50) NOT NULL, 
  `wshow` int(11) NOT NULL, 
  `wdesc` varchar(150) NOT NULL,
  `wtime` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workshop`
--

INSERT INTO `workshop` (`wid`, `wname`, `wdate`, `venue`,`wshow`, `wdesc`, `wtime`) VALUES
(1, 'ANTARAGNI', '2022-12-28', 'AMPHI THEATRE', '1', 'INTER-DEPARTMENT FEST', '10 AM');
(4,'Quiz','2023-01-20','C block- 2nd floor','0','OFF-STAGE EVENTS','9:00 am');


--
-- Triggers `workshop`
--
DELIMITER $$
CREATE TRIGGER `func` AFTER UPDATE ON `workshop` FOR EACH ROW UPDATE performer SET wid='0',payment='not'
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `func1` BEFORE UPDATE ON `workshop` FOR EACH ROW UPDATE coach SET wid='0',cselect='Not Action'
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `coach`
--
ALTER TABLE `coach`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `performer`
--
ALTER TABLE `performer`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `workshop`
--
ALTER TABLE `workshop`
  ADD PRIMARY KEY (`wid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `coach`
--
ALTER TABLE `coach`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `performer`
--
ALTER TABLE `performer`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `workshop`
--
ALTER TABLE `workshop`
  MODIFY `wid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

