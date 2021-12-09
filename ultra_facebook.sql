-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2015 at 05:34 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ultra_facebook`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `commentid` varchar(10) NOT NULL,
  `content` text NOT NULL,
  `name` varchar(300) NOT NULL,
  `pakadtoan` varchar(30) NOT NULL,
  `created` varchar(30) NOT NULL,
  `postcat` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `commentid`, `content`, `name`, `pakadtoan`, `created`, `postcat`) VALUES
(2, '3', 'asasasass', '2', '3', '', ''),
(9, '3', 'huhhhu', '2', '3', '', ''),
(11, '1', 'jjjjjj', '1', '1', '', ''),
(12, '1', 'zZz', '1', '1', '', ''),
(13, '1', 'cdffdfd', '1', '1', '', ''),
(15, '1', 'nkjkjk iujijij ihjhjh jhjhjh jhjhjh jhjh jhjh jhjh jh j hj hj h jh j hj hj hj h jh j hj hj hj hjhjh j h jhj hj hj hjhjh jhjhj jhjj hj hj hj h', '1', '1', '', ''),
(16, '1', '45454545455', '1', '1', '', ''),
(18, '4', '5trtr', '4', '4', '', ''),
(20, '1', 'argie', '1', '1', '', ''),
(22, '1', 'szxdsdsdsdsdsds  sdsdsdsd cv sasdas sdsdsd', '1', '1', '', ''),
(25, '1', 'asasa', '1', '1', '', ''),
(27, '1', '"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."', '1', '1', '', ''),
(28, '2', 'xszdzdsd', '2', '2', '1334853619', ''),
(29, '2', 'rt5t5t5', '2', '2', '1334855461', ''),
(30, '2', 'testing101', '2', '2', '1334855613', ''),
(31, '2', 'zxzxzx', '2', '2', '1334855654', ''),
(32, '5', 'grrtrtrt', '2', '5', '1334855810', ''),
(33, '5', 'rt', '2', '5', '1334855870', ''),
(34, '2', 'sdsdsd', '2', '2', '1334857748', ''),
(37, '2', 'sa', '2', '2', '1334858659', ''),
(45, '1', 'gw lapar ', '1', '1', '1423194513', ''),
(46, '1', 'Jasa Pembuatan Website \r\nHanya di ultraviolet developer yang termurah dan terbaik Free konsultasi \r\nCP 087722-836-330 VerlyAnanda\r\nYuk di order bray', '1', '1', '1423196520', ''),
(47, '1', 'postphoto/Ultra-6.png', '1', '1', '1423196637', 'photos'),
(48, '1', 'ji', '2', '1', '1423196876', '');

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE IF NOT EXISTS `friends` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `addedby` int(11) NOT NULL,
  `requested` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`id`, `addedby`, `requested`, `status`) VALUES
(1, 3, 2, 'accepted'),
(2, 2, 3, 'accepted'),
(3, 1, 2, 'accepted'),
(4, 2, 1, 'accepted'),
(5, 2, 4, 'accepted'),
(6, 1, 4, 'accepted'),
(7, 4, 2, 'accepted'),
(8, 4, 1, 'accepted'),
(9, 5, 2, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `address` varchar(300) NOT NULL,
  `city` varchar(100) NOT NULL,
  `contact` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(20) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `bday` varchar(100) NOT NULL,
  `profilepic` varchar(100) NOT NULL,
  `coverphoto` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `fname`, `lname`, `address`, `city`, `contact`, `email`, `password`, `gender`, `bday`, `profilepic`, `coverphoto`) VALUES
(1, 'Verly', 'Ananda', 'Cimahi', 'Cimahi', 0, 'verlyananda@gmail.com', 'verlyananda', 'Male', '03/07/2012', 'profilepic/verlyava.jpg', 'coverphotos/Ultra1.png'),
(2, 'Dadang', 'Sanjaya', 'di sumur', 'terpencil', 0, 'dadang@gmail.com', 'dadang', 'Male', '03/06/2012', 'profilepic/friends.png', 'coverphotos/Clouds_1080_P_Halasa.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ginhalinan` varchar(200) NOT NULL,
  `pakadtoan` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `status` varchar(200) NOT NULL,
  `created` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `ginhalinan`, `pakadtoan`, `content`, `status`, `created`) VALUES
(6, '1', '2', 'lg ngapain', 'read', '');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE IF NOT EXISTS `photos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uploadedby` varchar(100) NOT NULL,
  `location` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `uploadedby`, `location`) VALUES
(1, '2', 'photos/envelope.png'),
(2, '2', 'photos/submit.png'),
(3, '2', 'photos/applications_internet.png');

-- --------------------------------------------------------

--
-- Table structure for table `subcomment`
--

CREATE TABLE IF NOT EXISTS `subcomment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subcommentid` varchar(10) NOT NULL,
  `subcommentname` varchar(100) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `subcomment`
--

INSERT INTO `subcomment` (`id`, `subcommentid`, `subcommentname`, `content`) VALUES
(1, '2', '3', 'saasasa'),
(2, '4', '2', 'kjkjk'),
(3, '7', '2', 'QWERTYUIASDFGHYHNTGBRFVEDC'),
(4, '4', '2', 'CVBNM,'),
(5, '9', '3', 'ijijii'),
(6, '21', '1', '4rt45'),
(7, '23', '1', 'sdsddss'),
(8, '14', '1', 'xdsdsd'),
(9, '23', '1', 'cvcvcvcvcvcvcv'),
(10, '26', '1', '"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."'),
(11, '26', '1', 'cxcxcxcxcxcx sdsds sd sd sd sd sd sd sd sd sd sd sd sd sd sd sd sd sd sd sd s ds d sd'),
(12, '27', '1', 'cgfdfdfdfdf sdsdsd sdsdsdsd sdsdsdsd sdsdsd sdsdsd sdsdsd sdsdsd sdsdsd sdsdsd sdsdsd sdsdsd sdsds dsdsds dsdsd sdsdsd sdsd'),
(13, '27', '1', '"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."'),
(14, '21', '1', 'xzzxzxzx'),
(15, '19', '1', 'sdfghj dfghj cfvgbhj vghbjk ghjk ghjkl fghjk fghjk'),
(16, '19', '1', 'nkjkjk iujijij ihjhjh jhjhjh jhjhjh jhjh jhjh jhjh jh j hj hj h jh j hj hj hj h jh j hj hj hj hjhjh j h jhj hj hj hjhjh jhjhj jhjj hj hj hj h'),
(17, '28', '2', 'asaas'),
(18, '28', '2', 'ssasasa'),
(19, '43', '2', 'kanami'),
(20, '44', '5', 'x'),
(21, '45', '1', 'up'),
(22, '46', '1', 'Up bray'),
(23, '25', '1', 'test komeng bray'),
(24, '37', '2', 'geje lo ver'),
(25, '46', '1', 'ngapain bray'),
(26, '48', '1', 'geje lo dang');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
