-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2022 at 07:46 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store_sm`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_entrydate` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_entrydate`) VALUES
(1, 'Electronics1234', '2022-10-01'),
(2, 'Fruits', '2022-09-28'),
(3, 'Cosmetics', '2022-09-28'),
(4, 'melamines', '2022-09-30'),
(7, 'Books&Notes', '2022-09-29');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_category` int(5) NOT NULL,
  `product_code` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_entrydate` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_category`, `product_code`, `product_entrydate`) VALUES
(1, 'Apple', 2, 'apple001', '2022-09-30'),
(3, 'Mango', 2, 'man001 ', '2022-09-30'),
(4, 'Perfume', 3, 'per220', '2022-09-30'),
(5, 'plate', 4, 'pl321', '2022-09-30');

-- --------------------------------------------------------

--
-- Table structure for table `spend_product`
--

CREATE TABLE IF NOT EXISTS `spend_product` (
  `spend_product_id` int(11) NOT NULL AUTO_INCREMENT,
  `spend_product_name` int(11) NOT NULL,
  `spend_product_quantity` int(11) NOT NULL,
  `spend_product_entrydate` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`spend_product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `spend_product`
--

INSERT INTO `spend_product` (`spend_product_id`, `spend_product_name`, `spend_product_quantity`, `spend_product_entrydate`) VALUES
(1, 1, 35, '2022-10-01'),
(2, 3, 50, '2022-09-13'),
(3, 4, 10, '2022-10-04');

-- --------------------------------------------------------

--
-- Table structure for table `store_product`
--

CREATE TABLE IF NOT EXISTS `store_product` (
  `store_product_id` int(11) NOT NULL AUTO_INCREMENT,
  `store_product_name` int(10) NOT NULL,
  `store_product_quantity` int(11) NOT NULL,
  `store_product_entrydate` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`store_product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `store_product`
--

INSERT INTO `store_product` (`store_product_id`, `store_product_name`, `store_product_quantity`, `store_product_entrydate`) VALUES
(1, 1, 100, '2022-09-30'),
(2, 3, 54, '2022-09-30'),
(3, 5, 68, '2022-09-30');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_first_name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_last_name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_password` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_first_name`, `user_last_name`, `user_email`, `user_password`) VALUES
(1, 'parvaz', 'reza', 'parvaz@gamil.com', '123456'),
(2, 'yeasin2', 'ahmed12', 'yeasin12@gmail.com', '123456123'),
(3, 'mhafuj', 'mhafuj', 'mhafuj@gmail.com', '1234567'),
(4, 'nayem', 'khan', 'naem@gmail.com', '123456'),
(5, 'zihad', 'islam', 'zihad12@gmail.com', '1234561123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
