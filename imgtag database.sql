-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 20, 2012 at 04:16 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `imgtag`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `imageId` int(11) NOT NULL AUTO_INCREMENT,
  `imageUrl` varchar(200) NOT NULL,
  PRIMARY KEY (`imageId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`imageId`, `imageUrl`) VALUES
(16, 'pszdblvwgq6faf5o38mo.jpg'),
(20, 'sv9jgrff9yaauaidmyzu.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `imagetag`
--

CREATE TABLE IF NOT EXISTS `imagetag` (
  `imageTagId` int(11) NOT NULL AUTO_INCREMENT,
  `imageId` int(11) NOT NULL,
  `tagId` int(11) NOT NULL,
  PRIMARY KEY (`imageTagId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `imagetag`
--

INSERT INTO `imagetag` (`imageTagId`, `imageId`, `tagId`) VALUES
(1, 16, 4),
(2, 16, 5),
(3, 16, 6),
(7, 16, 7),
(11, 20, 7),
(12, 16, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
  `tagId` int(11) NOT NULL AUTO_INCREMENT,
  `tagDesc` varchar(50) NOT NULL,
  PRIMARY KEY (`tagId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`tagId`, `tagDesc`) VALUES
(1, 'Sample One'),
(2, 'Sample Two'),
(3, 'SampleB'),
(4, 'a'),
(5, ' d'),
(6, ' f'),
(7, ' pat');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
