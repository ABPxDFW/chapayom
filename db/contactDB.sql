-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Mar 17, 2017 at 07:50 AM
-- Server version: 5.6.23-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `infini18_chapayom`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactDB`
--

CREATE TABLE IF NOT EXISTS `contactDB` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(26) NOT NULL,
  `email` varchar(35) NOT NULL,
  `message` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `contactDB`
--

INSERT INTO `contactDB` (`id`, `full_name`, `email`, `message`, `date`) VALUES
(1, 'Bobby Pu', 'Bobby.P@infinitesoaring.com', 'Just making sure this db works.', '2017-01-12 22:02:44'),
(9, 'Bobby Pu', 'abpupeerapitug@yahoo.com', 'Nice place to get ice cold drinks when it is hot outside.', '2017-01-14 20:29:36'),
(11, 'Babe Pu', 'BabePu@whatever.com', 'This place is the bomb!', '2017-01-15 01:11:25'),
(15, 'Orm', 'nonzenze.jkk@gmail.com', 'Looks nice! I will taste every menu you have someday.', '2017-01-15 21:32:34'),
(16, 'Ingrid', 'ibazile@cheerfulcom', 'The new drink looks really good. Can u send one to Texas?', '2017-01-17 12:53:43');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
