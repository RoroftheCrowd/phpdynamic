-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2017 at 12:32 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hardware_sales`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
  `client_id` int(6) DEFAULT NULL,
  `client_name` varchar(50) DEFAULT NULL,
  `client_address` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`client_id`, `client_name`, `client_address`) VALUES
(200000, 'Eric Fitzgerald', 'The Business Centre 61 Wellfield Road Roath Cardiff CF24 3DG'),
(200001, 'Ronald Yelnats', '91 Western Road Brighton East Sussex England BN1 2NW'),
(200002, 'Jacob Kerrang', '71 Eastern Road Brighton West Sussex England DM2 4OP'),
(200003, 'Eugene Harold', '27 Colmore Row Birmingham England B3 2EW'),
(200004, 'Bob Tuttle', '56 Kipling Street Bath England Y7  903');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE IF NOT EXISTS `purchase` (
  `purchase_id` int(5) DEFAULT NULL,
  `date_of_purchase` varchar(12) DEFAULT NULL,
  `quantity_purchased` varchar(90) DEFAULT NULL,
  `other_purchase_details` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`purchase_id`, `date_of_purchase`, `quantity_purchased`, `other_purchase_details`) VALUES
(55555, '17/03/09', '80000', 0),
(44444, '08/11/06', '40000', 0),
(33333, '09/12/02', '70000', 0),
(22222, '05/09/08', '50000', 0),
(11111, '30/04/03', '60000', 0);

-- --------------------------------------------------------

--
-- Table structure for table `staffmembers`
--

CREATE TABLE IF NOT EXISTS `staffmembers` (
  `staff_member_code` int(6) DEFAULT NULL,
  `staff_member_name` varchar(30) DEFAULT NULL,
  `other_staff_member_details` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staffmembers`
--

INSERT INTO `staffmembers` (`staff_member_code`, `staff_member_name`, `other_staff_member_details`) VALUES
(100000, 'mike adams', 'NULL'),
(100001, 'albert king', 'NULL'),
(100002, 'scott orwell', 'NULL');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `item_code` int(30) DEFAULT NULL,
  `item_name` varchar(60) DEFAULT NULL,
  `item_quantity_avalible` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`item_code`, `item_name`, `item_quantity_avalible`) VALUES
(300000, 'keyboard', 800),
(300001, 'mouse', 700),
(300002, 'external hard drive', 600),
(300003, 'monitor', 500);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
