-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 03, 2014 at 10:19 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `portfolio4`
--
CREATE DATABASE IF NOT EXISTS `portfolio4` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `portfolio4`;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `manu` varchar(100) DEFAULT NULL,
  `cpu` varchar(100) DEFAULT NULL,
  `hd` varchar(300) DEFAULT NULL,
  `operatingSystem` varchar(300) DEFAULT NULL,
  `RAM` varchar(300) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `VideoCard` varchar(300) DEFAULT NULL,
  `OpticalDrive` varchar(500) DEFAULT NULL,
  `Display` varchar(600) DEFAULT NULL,
  `Wireless` varchar(600) DEFAULT NULL,
  `ProductivitySoftware` varchar(1000) DEFAULT NULL,
  `SecuritySoftware` varchar(1000) DEFAULT NULL,
  `AccidentalDamageSupport` varchar(1000) DEFAULT NULL,
  `BatteryPrimary` varchar(500) DEFAULT NULL,
  `Regulatory` varchar(600) DEFAULT NULL,
  `image` varchar(600) DEFAULT NULL,
  `Warranty` varchar(600) DEFAULT NULL,
  `PortSlotsChasis` varchar(600) DEFAULT NULL,
  `instock` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
