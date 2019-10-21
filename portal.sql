-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2019 at 08:48 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `info_tb`
--

CREATE TABLE IF NOT EXISTS `info_tb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lastname` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `userdate` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `phonenumber` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `userpix` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `faculty` text NOT NULL,
  `dept` text NOT NULL,
  PRIMARY KEY (`lastname`,`firstname`,`middlename`,`userdate`,`gender`,`userpix`,`password`,`id`),
  UNIQUE KEY `id` (`id`,`username`),
  UNIQUE KEY `phone_number` (`phonenumber`,`email`),
  KEY `id_2` (`id`),
  KEY `id_3` (`id`),
  FULLTEXT KEY `faculty` (`faculty`,`dept`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=180117 ;

--
-- Dumping data for table `info_tb`
--

INSERT INTO `info_tb` (`id`, `lastname`, `firstname`, `middlename`, `userdate`, `gender`, `phonenumber`, `email`, `userpix`, `username`, `password`, `faculty`, `dept`) VALUES
(180047, 'Adegboyega', 'Blessing', 'Olamide', '2000-11-11', 'Male', '09038263925', 'adegboyegablessing@gmail.com', 0, 'trailblazetr', '793f970c52ded1276b9264c742f19d1888cbaf73', 'Faculty of Engineering', 'Computer Science and Engineering'),
(180046, 'Afolabi', 'Favour', 'Oluwatobi', '2018-11-11', 'Male', '07081655359', 'afolabifavouroluwatobi@gmail.com', 0, 'fav', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Faculty of Engineering', 'Computer Science and Engineering'),
(180116, 'AFOLABIii', 'favourii', 'vil', '2018-12-05', 'Male', '75709876', 'fknhl@sqi.edu.ng', 0, 'trio', 'trio', 'Faculty of Agric', ''),
(180115, 'Dev', 'Tolu', 'T', '2018-12-06', 'Male', '07077777777', 'devt@sqi.edu.ng', 0, 'devT', '1234', 'Faculty of Engineering', ''),
(180063, 'Noah', 'Williams', 'Oluwatosin', '1997-09-13', 'Male', '08188337803', 'williamscotch20@gmail.com', 0, 'willybrain', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Faculty of Agric', 'Department of Agricultural Economics');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
