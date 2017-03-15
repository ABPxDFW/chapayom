-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2017 at 03:20 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chapayom`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `cust_fname` varchar(255) NOT NULL,
  `cust_lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `drink`
--

CREATE TABLE `drink` (
  `id` int(11) NOT NULL,
  `drinkName` varchar(255) NOT NULL,
  `thai` varchar(500) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drink`
--

INSERT INTO `drink` (`id`, `drinkName`, `thai`, `image`, `price`) VALUES
(1, 'Naam Champoo', '', '', 25),
(3, 'Test2', '', NULL, 25),
(4, 'Test12', '', NULL, 25);

-- --------------------------------------------------------

--
-- Table structure for table `ingredient`
--

CREATE TABLE `ingredient` (
  `id` int(11) NOT NULL,
  `item` varchar(255) NOT NULL,
  `thai` varchar(500) DEFAULT NULL,
  `importTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ingredient`
--

INSERT INTO `ingredient` (`id`, `item`, `thai`, `importTime`) VALUES
(1, 'Pink Syrup', '', '2017-02-20 11:05:00'),
(2, 'Coffee Mate', '', '2017-02-20 11:07:18'),
(3, 'Sugar', 'à¸™à¹‰à¸³à¸•à¸²à¸¥', '2017-02-20 11:07:18'),
(4, 'Hot Water', 'à¸™à¹‰à¸³à¸£à¹‰à¸­à¸™', '2017-02-27 22:47:16'),
(5, 'Condense Milk', 'à¸™à¸¡à¸‚à¹‰à¸™à¸«à¸§à¸²à¸™', '2017-02-27 23:07:41');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id` int(11) NOT NULL,
  `volume` double NOT NULL,
  `price` double NOT NULL,
  `ingred_id` int(11) NOT NULL,
  `purchase_date` date NOT NULL,
  `purchase_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mismatch_user`
--

CREATE TABLE `mismatch_user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(40) NOT NULL,
  `join_date` datetime DEFAULT NULL,
  `first_name` varchar(32) DEFAULT NULL,
  `last_name` varchar(32) DEFAULT NULL,
  `gender` varchar(1) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `city` varchar(32) DEFAULT NULL,
  `state` varchar(2) DEFAULT NULL,
  `picture` varchar(32) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mismatch_user`
--

INSERT INTO `mismatch_user` (`user_id`, `username`, `password`, `join_date`, `first_name`, `last_name`, `gender`, `birthdate`, `city`, `state`, `picture`) VALUES
(1, '', '', '2008-06-03 14:51:46', 'Sidney', 'Kelsow', 'F', '1984-07-19', 'Tempe', 'AZ', 'sidneypic.jpg'),
(2, '', '', '2008-06-03 14:52:09', 'Nevil', 'Johansson', 'M', '1973-05-13', 'Reno', 'NV', 'nevilpic.jpg'),
(3, '', '', '2008-06-03 14:53:05', 'Alex', 'Cooper', 'M', '1974-09-13', 'Boise', 'ID', 'alexpic.jpg'),
(4, '', '', '2008-06-03 14:58:40', 'Susannah', 'Daniels', 'F', '1977-02-23', 'Pasadena', 'CA', 'susannahpic.jpg'),
(5, '', '', '2008-06-03 15:00:37', 'Ethel', 'Heckel', 'F', '1943-03-27', 'Wichita', 'KS', 'ethelpic.jpg'),
(6, '', '', '2008-06-03 15:00:48', 'Oscar', 'Klugman', 'M', '1968-06-04', 'Providence', 'RI', 'oscarpic.jpg'),
(7, '', '', '2008-06-03 15:01:08', 'Belita', 'Chevy', 'F', '1975-07-08', 'El Paso', 'TX', 'belitapic.jpg'),
(8, '', '', '2008-06-03 15:01:19', 'Jason', 'Filmington', 'M', '1969-09-24', 'Hollywood', 'CA', 'jasonpic.jpg'),
(9, '', '', '2008-06-03 15:01:51', 'Dierdre', 'Pennington', 'F', '1970-04-26', 'Cambridge', 'MA', 'dierdrepic.jpg'),
(10, '', '', '2008-06-03 15:02:02', 'Paul', 'Hillsman', 'M', '1964-12-18', 'Charleston', 'SC', 'paulpic.jpg'),
(11, '', '', '2008-06-03 15:02:13', 'Johan', 'Nettles', 'M', '1981-11-03', 'Athens', 'GA', 'johanpic.jpg'),
(12, 'jimi', '2aa36f17507f2c75df2e24aa63c7dabcaf86926e', '2017-02-12 20:27:38', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'Bobby', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', '2017-02-24 00:16:59', 'Bobby', 'Pu', 'M', '1982-02-24', 'Allen', 'TX', 'nopic.jpg'),
(14, 'Pen', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', '2017-02-24 21:52:36', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'Johnny', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', '2017-02-25 10:15:31', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'Sarah', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', '2017-03-14 21:56:41', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_cust`
--

CREATE TABLE `order_cust` (
  `id` int(11) NOT NULL,
  `drink_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `order_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `recipe`
--

CREATE TABLE `recipe` (
  `id` int(11) NOT NULL,
  `ingred_id` int(11) NOT NULL,
  `drink_id` int(11) NOT NULL,
  `tbsp` decimal(11,0) NOT NULL,
  `milliLiter` decimal(11,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drink`
--
ALTER TABLE `drink`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ingredient`
--
ALTER TABLE `ingredient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ingred_id` (`ingred_id`);

--
-- Indexes for table `mismatch_user`
--
ALTER TABLE `mismatch_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `order_cust`
--
ALTER TABLE `order_cust`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_myKey2` (`cust_id`),
  ADD KEY `FK_myKey3` (`drink_id`);

--
-- Indexes for table `recipe`
--
ALTER TABLE `recipe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_myKey` (`ingred_id`),
  ADD KEY `FK_myKey1` (`drink_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `drink`
--
ALTER TABLE `drink`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `ingredient`
--
ALTER TABLE `ingredient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mismatch_user`
--
ALTER TABLE `mismatch_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `order_cust`
--
ALTER TABLE `order_cust`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `recipe`
--
ALTER TABLE `recipe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `inventory`
--
ALTER TABLE `inventory`
  ADD CONSTRAINT `inventory_ibfk_1` FOREIGN KEY (`ingred_id`) REFERENCES `ingredient` (`id`);

--
-- Constraints for table `order_cust`
--
ALTER TABLE `order_cust`
  ADD CONSTRAINT `FK_myKey2` FOREIGN KEY (`cust_id`) REFERENCES `customer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_myKey3` FOREIGN KEY (`drink_id`) REFERENCES `drink` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `recipe`
--
ALTER TABLE `recipe`
  ADD CONSTRAINT `FK_myKey` FOREIGN KEY (`ingred_id`) REFERENCES `ingredient` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_myKey1` FOREIGN KEY (`drink_id`) REFERENCES `drink` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
