-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 11, 2018 at 07:47 PM
-- Server version: 5.6.33-0ubuntu0.14.04.1
-- PHP Version: 7.0.30-1+ubuntu14.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `Phpassignment`
--
CREATE DATABASE IF NOT EXISTS `Phpassignment` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `Phpassignment`;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` int(20) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(50) NOT NULL,
  PRIMARY KEY (`cat_id`),
  KEY `cat_id` (`cat_id`),
  KEY `cat_id_2` (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(26, 'mobile'),
(27, 'laptops');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `cat_id` int(20) NOT NULL,
  `p_id` int(20) NOT NULL AUTO_INCREMENT,
  `p_name` varchar(50) NOT NULL,
  `p_price` float(15,2) NOT NULL,
  `p_path` varchar(50) NOT NULL,
  PRIMARY KEY (`p_id`),
  KEY `cat_id` (`cat_id`),
  KEY `cat_id_2` (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- RELATIONS FOR TABLE `product`:
--   `cat_id`
--       `category` -> `cat_id`
--

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`cat_id`, `p_id`, `p_name`, `p_price`, `p_path`) VALUES
(27, 6, 'acad', 46546.00, 'laptop1.png'),
(27, 8, 'abc', 12000.00, 'Lenovo.jpg'),
(27, 9, 'LenovoG5080', 45000.00, 'laptop1.png'),
(26, 10, 'asasa', 10000.00, 'noimages.jpeg');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `cat_id` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
