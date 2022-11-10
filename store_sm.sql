-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2022 at 11:59 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

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

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_entrydate` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_entrydate`) VALUES
(1, 'Electronics1234', '2022-10-01'),
(2, 'Fruits', '2022-09-28'),
(3, 'Cosmetics', '2022-09-28'),
(4, 'melamines', '2022-09-30'),
(7, 'Books&Notes', '2022-09-29'),
(8, 'Soap Lux', '2022-11-09'),
(9, 'Soap Lifeboy', '2022-11-10'),
(10, 'Soap Glisarin', '2022-11-08'),
(11, 'Pouder cool', '2022-11-22'),
(12, 'Tv electronics', '2022-11-24'),
(13, 'Refrigerators walton', '2022-11-09'),
(14, 'stationary Foods', '2022-11-03'),
(15, 'Keyboard', '2022-11-15'),
(16, 'Mobile Oppo', '2022-11-21'),
(17, 'Mobile vivo', '2022-11-24'),
(18, 'Mobile sympony', '2022-11-26'),
(19, 'Hear Phone', '2022-11-25'),
(20, 'Head phone', '2022-11-07'),
(21, 'Monitor samsung', '2022-11-10'),
(22, 'Books ', '2022-11-27'),
(24, 'Computher', '2022-11-10'),
(25, 'biscuits', '2022-11-10'),
(28, 'FruitsFruits', '2022-11-10'),
(29, 'Sunglass', '2022-11-18'),
(30, 'Drags', '2022-11-15');

-- --------------------------------------------------------

--
-- Table structure for table `imageupload`
--

CREATE TABLE `imageupload` (
  `id` int(11) NOT NULL,
  `imagename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `imageupload`
--

INSERT INTO `imageupload` (`id`, `imagename`) VALUES
(1, 'got quations.png'),
(2, 'packageImage.png');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_category` int(5) NOT NULL,
  `product_code` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_entrydate` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_category`, `product_code`, `product_entrydate`) VALUES
(1, 'Apple', 2, 'apple001', '2022-09-30'),
(3, 'Mango', 2, 'man001 ', '2022-09-30'),
(4, 'Perfume', 3, 'per220', '2022-09-30'),
(5, 'plate', 4, 'pl321', '2022-09-30'),
(6, 'Electronics', 1, 'elc88', '2022-11-18'),
(7, 'Foods', 2, 'food123', '2022-11-01'),
(8, 'Soap', 9, 'soap123', '2022-11-18'),
(9, 'Soap', 10, 'soap4gs', '2022-11-25'),
(10, 'Apple', 2, 'apple001', '2022-09-30'),
(11, 'Mango', 2, 'man001 ', '2022-09-30'),
(12, 'Perfume', 3, 'per220', '2022-09-30'),
(13, 'plate', 4, 'pl321', '2022-09-30'),
(14, 'Electronics', 1, 'elc88', '2022-11-18'),
(15, 'Foods', 2, 'food123', '2022-11-01'),
(18, 'Foods', 2, 'food123', '2022-11-01'),
(19, 'plate', 4, 'pl321', '2022-09-30');

-- --------------------------------------------------------

--
-- Table structure for table `spend_product`
--

CREATE TABLE `spend_product` (
  `spend_product_id` int(11) NOT NULL,
  `spend_product_name` int(11) NOT NULL,
  `spend_product_quantity` int(11) NOT NULL,
  `spend_product_entrydate` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

CREATE TABLE `store_product` (
  `store_product_id` int(11) NOT NULL,
  `store_product_name` int(10) NOT NULL,
  `store_product_quantity` int(11) NOT NULL,
  `store_product_entrydate` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_first_name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_last_name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_password` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_first_name`, `user_last_name`, `user_email`, `user_password`) VALUES
(1, 'parvaz', 'reza', 'parvaz@gmail.com', '123456'),
(2, 'yeasin2', 'ahmed12', 'yeasin12@gmail.com', '123456123'),
(3, 'mhafuj', 'mhafuj', 'mhafuj@gmail.com', '1234567'),
(4, 'nayem', 'khan', 'naem@gmail.com', '123456'),
(5, 'zihad', 'islam', 'zihad12@gmail.com', '1234561123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `imageupload`
--
ALTER TABLE `imageupload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `spend_product`
--
ALTER TABLE `spend_product`
  ADD PRIMARY KEY (`spend_product_id`);

--
-- Indexes for table `store_product`
--
ALTER TABLE `store_product`
  ADD PRIMARY KEY (`store_product_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `imageupload`
--
ALTER TABLE `imageupload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `spend_product`
--
ALTER TABLE `spend_product`
  MODIFY `spend_product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `store_product`
--
ALTER TABLE `store_product`
  MODIFY `store_product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
