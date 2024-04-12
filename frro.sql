-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2023 at 03:43 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `frro`
--

-- --------------------------------------------------------

--
-- Table structure for table `accomodator`
--

CREATE TABLE IF NOT EXISTS `accomodator` (
  `aid` int(5) NOT NULL AUTO_INCREMENT,
  `aname` text NOT NULL,
  `apass` text NOT NULL,
  `aphone` text NOT NULL,
  `aphoto` text NOT NULL,
  `aemail` text NOT NULL,
  `aadhar` text NOT NULL,
  `addr` text NOT NULL,
  `city` text NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `accomodator`
--

INSERT INTO `accomodator` (`aid`, `aname`, `apass`, `aphone`, `aphoto`, `aemail`, `aadhar`, `addr`, `city`) VALUES
(1, 'accomodator', 'accomodator', '4323434', 'Chrysanthemum.jpg', 'accomodator@gmail.com', '234124234234', 'coimbatore', 'chennai');

-- --------------------------------------------------------

--
-- Table structure for table `askqueries`
--

CREATE TABLE IF NOT EXISTS `askqueries` (
  `aqid` int(5) NOT NULL AUTO_INCREMENT,
  `uname` text NOT NULL,
  `aquery` text NOT NULL,
  `descp` text NOT NULL,
  `reply` text NOT NULL,
  `aadhar` text NOT NULL,
  PRIMARY KEY (`aqid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `askqueries`
--

INSERT INTO `askqueries` (`aqid`, `uname`, `aquery`, `descp`, `reply`, `aadhar`) VALUES
(1, 'rohit@gmail.com', 'please approval for visa', 'done covid sheild 2nd dose vaccination', 'please come to office', '4653756745676');

-- --------------------------------------------------------

--
-- Table structure for table `central`
--

CREATE TABLE IF NOT EXISTS `central` (
  `cid` int(5) NOT NULL AUTO_INCREMENT,
  `fcname` text NOT NULL,
  `pnum` text NOT NULL,
  `vnum` int(11) NOT NULL,
  `vsdate` date NOT NULL,
  `vedate` date NOT NULL,
  `vtype` text NOT NULL,
  `nationality` text NOT NULL,
  `phone` text NOT NULL,
  `email` text NOT NULL,
  `sleft` text NOT NULL,
  `bnum` int(5) NOT NULL,
  `track` text NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `central`
--

INSERT INTO `central` (`cid`, `fcname`, `pnum`, `vnum`, `vsdate`, `vedate`, `vtype`, `nationality`, `phone`, `email`, `sleft`, `bnum`, `track`) VALUES
(1, 'rohit', '3241234123', 123456, '2018-03-24', '2021-11-01', 'tourist', 'american', '435234534', 'rohit@gmail.com', 'yes', 123112, '0'),
(2, 'praveen', '987654', 435345, '2018-03-01', '2018-05-30', 'tourist', 'african', '52525', 'praveen@gmail.com', 'no', 6475756, '-1');

-- --------------------------------------------------------

--
-- Table structure for table `cform`
--

CREATE TABLE IF NOT EXISTS `cform` (
  `cfid` int(5) NOT NULL AUTO_INCREMENT,
  `cpnum` text NOT NULL,
  `cformid` text NOT NULL,
  `cname` text NOT NULL,
  `cmail` text NOT NULL,
  `cphone` text NOT NULL,
  `cgrade` text NOT NULL,
  `ccity` text NOT NULL,
  `cstate` text NOT NULL,
  `caddr` text NOT NULL,
  `cphoto` text NOT NULL,
  PRIMARY KEY (`cfid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `cform`
--

INSERT INTO `cform` (`cfid`, `cpnum`, `cformid`, `cname`, `cmail`, `cphone`, `cgrade`, `ccity`, `cstate`, `caddr`, `cphoto`) VALUES
(1, '3241234123', 'C1', 'accomodator', 'accomodator@gmail.com', '4323434', 'house', 'chennai', '', 'coimbatore', 'Chrysanthemum.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `change_address`
--

CREATE TABLE IF NOT EXISTS `change_address` (
  `caid` int(5) NOT NULL AUTO_INCREMENT,
  `pnum` text NOT NULL,
  `cformid` text NOT NULL,
  `afile` text NOT NULL,
  `addr` text NOT NULL,
  `frid` text NOT NULL,
  `status` text NOT NULL,
  `city` text NOT NULL,
  PRIMARY KEY (`caid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `change_address`
--

INSERT INTO `change_address` (`caid`, `pnum`, `cformid`, `afile`, `addr`, `frid`, `status`, `city`) VALUES
(1, '3241234123', 'c1', 'Penguins.jpg', 'saibaba colony', '1', 'Approved by police', 'coimbatore');

-- --------------------------------------------------------

--
-- Table structure for table `foerigner_log`
--

CREATE TABLE IF NOT EXISTS `foerigner_log` (
  `flid` int(5) NOT NULL AUTO_INCREMENT,
  `pnum` text NOT NULL,
  `aesdate` date NOT NULL,
  `aeedate` date NOT NULL,
  `naesdate` date NOT NULL,
  `naeedate` date NOT NULL,
  PRIMARY KEY (`flid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `foerigner_log`
--

INSERT INTO `foerigner_log` (`flid`, `pnum`, `aesdate`, `aeedate`, `naesdate`, `naeedate`) VALUES
(1, '3241234123', '2018-03-20', '2018-03-25', '2018-04-20', '2018-04-25');

-- --------------------------------------------------------

--
-- Table structure for table `foreigner`
--

CREATE TABLE IF NOT EXISTS `foreigner` (
  `frid` int(5) NOT NULL AUTO_INCREMENT,
  `pnum` text NOT NULL,
  `uphone` text NOT NULL,
  `uname` text NOT NULL,
  `uphoto` text NOT NULL,
  `upass` text NOT NULL,
  `uemail` text NOT NULL,
  PRIMARY KEY (`frid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `foreigner`
--

INSERT INTO `foreigner` (`frid`, `pnum`, `uphone`, `uname`, `uphoto`, `upass`, `uemail`) VALUES
(1, '3241234123', '5342534534', 'rohit@gmail.com', 'Jellyfish.jpg', 'rohit', 'rohit@gmail.com'),
(4, '987654', '5252545678', 'praveen', 'Jellyfish.jpg', 'praveen', 'praveen@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `frro`
--

CREATE TABLE IF NOT EXISTS `frro` (
  `frfid` int(5) NOT NULL AUTO_INCREMENT,
  `frname` text NOT NULL,
  `frpass` text NOT NULL,
  `city` text NOT NULL,
  PRIMARY KEY (`frfid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `frro`
--

INSERT INTO `frro` (`frfid`, `frname`, `frpass`, `city`) VALUES
(1, 'frro-coimbatore', 'frro-coimbatore', 'coimbatore'),
(2, 'frro-hyderabad', 'frro-hyderabad', 'hyderabad'),
(3, 'frro-chennai', 'frro-chennai', 'chennai');

-- --------------------------------------------------------

--
-- Table structure for table `new_applicants`
--

CREATE TABLE IF NOT EXISTS `new_applicants` (
  `cid` int(5) NOT NULL AUTO_INCREMENT,
  `fcname` text NOT NULL,
  `pnum` text NOT NULL,
  `vnum` int(11) NOT NULL,
  `vsdate` date NOT NULL,
  `vedate` date NOT NULL,
  `vtype` text NOT NULL,
  `nationality` text NOT NULL,
  `addr` text NOT NULL,
  `newaddr` text NOT NULL,
  `phone` text NOT NULL,
  `email` text NOT NULL,
  `city` text NOT NULL,
  `cformid` text NOT NULL,
  `cfile` text NOT NULL,
  `rfile` text NOT NULL,
  `status` text NOT NULL,
  `dreason` text NOT NULL,
  `sfile` text NOT NULL,
  `payment` int(11) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `new_applicants`
--

INSERT INTO `new_applicants` (`cid`, `fcname`, `pnum`, `vnum`, `vsdate`, `vedate`, `vtype`, `nationality`, `addr`, `newaddr`, `phone`, `email`, `city`, `cformid`, `cfile`, `rfile`, `status`, `dreason`, `sfile`, `payment`) VALUES
(1, 'rohit', '3241234123', 123456, '2018-03-24', '2021-11-01', 'tourist', 'american', 'anna nagar', '', '435234534', 'rohit@gmail.com', 'coimbatore', 'c1', 'Desert.jpg', 'Lighthouse.jpg', 'Exit Permit Rejected', 'delayed for corona issues', 'Chrysanthemum.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `police`
--

CREATE TABLE IF NOT EXISTS `police` (
  `pid` int(5) NOT NULL AUTO_INCREMENT,
  `pname` text NOT NULL,
  `ppass` text NOT NULL,
  `city` text NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `police`
--

INSERT INTO `police` (`pid`, `pname`, `ppass`, `city`) VALUES
(2, 'police-coimbatore', 'police-coimbatore', 'coimbatore'),
(3, 'police-hyderabad', 'police-hyderabad', 'hyderabad'),
(4, 'police-chennai', 'police-chennai', 'chennai');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
