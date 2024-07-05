-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2015 at 04:10 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dlibrary`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE IF NOT EXISTS `tbladmin` (
  `aid` int(8) NOT NULL AUTO_INCREMENT,
  `a_username` varchar(50) NOT NULL,
  `a_password` varchar(64) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`aid`, `a_username`, `a_password`) VALUES
(1, 'Admin', 'dlibrary');

-- --------------------------------------------------------

--
-- Table structure for table `tblbooks`
--

CREATE TABLE IF NOT EXISTS `tblbooks` (
  `bid` bigint(8) NOT NULL AUTO_INCREMENT,
  `cid` bigint(8) NOT NULL,
  `b_title` varchar(100) NOT NULL,
  `b_author` varchar(50) NOT NULL,
  `b_url` varchar(255) NOT NULL,
  `date_uploaded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`bid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `tblbooks`
--

INSERT INTO `tblbooks` (`bid`, `cid`, `b_title`, `b_author`, `b_url`, `date_uploaded`) VALUES
(1, 1, 'Introduction to Visual Basic', 'O''relly', 'IntroductiontoVisualBasic-Orelly.pdf', '2015-07-20 08:14:20'),
(2, 1, 'Advance Java Programming with Database Application', 'Bambam', 'AdvanceJavaProgrammingwithDatabaseApplication-Bambam.pdf', '2015-07-20 08:20:10'),
(3, 7, 'Design and Implementation of Php Network Security', 'Olusegun', 'PhpNetworkSecurity-Olusegun.pdf', '2015-07-20 08:46:53'),
(4, 2, 'Introduction to Basic Networking', 'Adedotun', 'PhpNetworkSecurity-Bambam.pdf', '2015-07-20 08:47:41'),
(5, 2, 'Php Tutorial', 'Bambam', 'PhpTutorial-Bambam.pdf', '2015-07-20 08:48:31'),
(6, 3, 'office tutorial', 'Bambam', 'officetutorial-Bambam.pdf', '2015-07-20 08:59:31'),
(7, 0, 'Web Based Inventory Management', 'Bambam', 'WebBasedInventoryManagement-Bambam.pdf', '2015-07-20 09:00:37'),
(8, 2, 'OO Programming in PHP', 'Packt', 'OOProgramminginPHP-Packt.pdf', '2015-07-20 19:44:39'),
(9, 9, 'Java Networking', 'Bambam', 'JavaNetworking-Bambam.pdf', '2015-07-21 21:43:12'),
(10, 2, 'ASP Tutorial', 'Rick', 'ASPTutorial-Rick.pdf', '2015-07-21 21:45:28'),
(11, 2, 'VB.net tutorial ', 'Rick', 'VBnettutorial-Rick.pdf', '2015-07-21 21:45:58'),
(12, 2, 'Learn PHP by Code', 'Dietel', 'LearnPHPbyCode-Dietel.pdf', '2015-07-21 21:46:41'),
(13, 1, 'Learn VB ', 'Tim berner lee', 'LearnVB-Timbernerlee.pdf', '2015-07-21 21:47:09'),
(14, 2, 'Javascript Bible', 'Adedotun', 'JavascriptBible-Adedotun.pdf', '2015-07-21 21:47:27'),
(15, 2, 'JQuery Made Easy', 'Bambam', 'JQueryMadeEasy-Bambam.pdf', '2015-07-21 21:48:04'),
(16, 2, 'Using Actionscript', 'ade', 'UsingActionscript-ade.pdf', '2015-07-21 21:49:23'),
(17, 2, 'Using Flash', 'Bambam', 'UsingFlash-Bambam.pdf', '2015-07-21 21:49:44');

-- --------------------------------------------------------

--
-- Table structure for table `tblcategories`
--

CREATE TABLE IF NOT EXISTS `tblcategories` (
  `cid` bigint(8) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(50) NOT NULL,
  `c_description` varchar(255) NOT NULL,
  `data_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tblcategories`
--

INSERT INTO `tblcategories` (`cid`, `c_name`, `c_description`, `data_created`) VALUES
(1, 'Programming', 'All Books on Java, Visual Basic etc.', '2015-07-17 11:53:42'),
(2, 'Web Programming', 'Books like php, ASP, JSP, JSF, Ruby, Pear', '2015-07-17 11:58:13'),
(3, 'Desktop Applications ', 'Books like Microsoft Office, Excel, power point, browsing, Notepad,  WordPad', '2015-07-17 12:01:56'),
(4, 'Graphics', 'Books like Photoshop tutorial, corel drawl etc', '2015-07-17 12:05:09'),
(6, 'Journals', 'Journals by writers in the computer science', '2015-07-18 18:45:39'),
(7, 'Projects', 'List of all project done by past students', '2015-07-18 22:05:24'),
(8, 'Artificial Intelligence', 'All books on AI, Expert System, Data Minning', '2015-07-18 22:10:06'),
(9, 'Computer Hardware', 'books on hardware', '2015-07-21 14:33:04'),
(10, 'Networking', 'books on networking', '2015-07-21 14:39:25');

-- --------------------------------------------------------

--
-- Table structure for table `tblstudents`
--

CREATE TABLE IF NOT EXISTS `tblstudents` (
  `sid` bigint(8) NOT NULL AUTO_INCREMENT,
  `sname` varchar(30) NOT NULL,
  `oname` varchar(50) NOT NULL,
  `sex` varchar(6) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `email` varchar(60) NOT NULL,
  `matricno` varchar(13) NOT NULL,
  `password` varchar(64) NOT NULL,
  `s_question` varchar(50) NOT NULL,
  `s_answer` varchar(50) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sid`),
  UNIQUE KEY `matricno` (`matricno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tblstudents`
--

INSERT INTO `tblstudents` (`sid`, `sname`, `oname`, `sex`, `phone`, `email`, `matricno`, `password`, `s_question`, `s_answer`, `date_created`) VALUES
(1, 'BAMIDELE', 'Adedotun Olusegun', 'Male', '08088993955', 'sdsddsdsdsdd@YAHOO.COM', 'CS201100664PT', 'd8dd51eac18f7e14e9a52a9bdddd7b94', 'What is your pet''s name', 'peace', '2015-07-13 23:50:59'),
(2, 'Abolude ', 'Hammed Adedotun', 'Male', '08136678677', 'dutchman@gmail.com', 'CS201100551PT', 'df6e2a543c25be8b0fedbf2f73eed7bd', 'what is your password', 'omotola', '2015-07-14 10:07:37'),
(3, 'BAMIDELE', 'ADEDOTUN OLUSEGUN', 'Male', '08088993955', 'sdsddsdsdsdd@YAHOO.COM', 'CS201100604PT', '77de54ccf56eb6f7dbf99e4d3be949ab', 'what is your favourite name', 'bambam', '2015-07-14 10:13:50'),
(4, 'sdsd', 'Oluwaseun Ademuyiwa', 'Female', '08088993955', 'sdsddsdsdsdd@YAHOO.COM', 'CS201100694PT', '3aba7448fc1d6c2e0a23a6499ff51dd1', 'what is your favourite name', 'aerer', '2015-07-14 10:22:01'),
(5, 'Akanfe', 'Festus', 'Male', '08131021892', 'sdsddsdsdsdd@YAHOO.COM', 'CS20110238PT', 'a0777fead83e5e990af6fa52b8d091cf', 'what is your first name', 'akanfe', '2015-07-15 09:26:46');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
