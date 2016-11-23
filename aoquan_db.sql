-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2016 at 05:15 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aoquan_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id_account` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `passwords` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id_category` int(11) NOT NULL,
  `name_category` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_category`, `name_category`) VALUES
(2, 'Ão thun nam'),
(3, 'Ão Thun Ná»¯'),
(4, 'Ão dáº¡ há»™i'),
(5, 'Thá»i Trang Nam Ão KhoÃ¡c'),
(6, 'Thá»i Trang Ná»¯ VÃ¡y'),
(7, 'Thá»i Trang Nam Jean'),
(8, 'SÆ¡ mi nam');

-- --------------------------------------------------------

--
-- Table structure for table `category_news`
--

CREATE TABLE `category_news` (
  `id_category_news` int(100) NOT NULL,
  `name_category_news` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(10) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `name_customer` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `username`, `password`, `name_customer`, `birthday`, `gender`, `address`, `phone`, `email`) VALUES
(4, 'locnguyen123', '123', 'Báº£o Lá»™c', '2016-10-06', 1, '75 lÃª Ä‘Ã¬nh lÃ­', '1668115501', 'loclunglinh94@gmail.com'),
(5, 'locnguyen1', '123', 'Báº£o Lá»™c', '2016-10-06', 1, '75 lÃª Ä‘Ã¬nh lÃ­', '1668115501', 'loclunglinh94@gmail.com'),
(7, 'admin1', '123', 'lá»™c nguyá»…n', '2016-10-20', 1, '192 Nguyá»…n VÄƒn Linh', '1668115501', 'loclunglinh94@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id_news` int(11) NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `id_category_news` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id_order` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `date_order` date NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `id_product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id_order_detail` int(11) NOT NULL,
  `name_customer` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_price` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `name_product` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_product` int(255) NOT NULL,
  `name_product` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `status` text COLLATE utf8_unicode_ci NOT NULL,
  `day_added` date DEFAULT NULL,
  `hinh_product` text COLLATE utf8_unicode_ci NOT NULL,
  `is_featured` bit(1) NOT NULL,
  `id_category` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name_category` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_product`, `name_product`, `description`, `price`, `quantity`, `status`, `day_added`, `hinh_product`, `is_featured`, `id_category`, `name_category`) VALUES
(6, 'Ão KhoÃ¡c Nam', 'nam', '700', 3, 'New', '2016-10-20', '/uploads/1.jpg', b'1', '5', NULL),
(7, 'Ão KhoÃ¡c Nam', 'nam', '600', 12, 'New', '2016-10-21', '/uploads/2.jpg', b'1', '5', NULL),
(8, 'Ão KhoÃ¡c Nam', 'nam', '450', 21, 'New', '2016-10-27', '/uploads/3.jpg', b'1', '5', NULL),
(9, 'Ão KhoÃ¡c Nam', 'nam', '550', 11, 'New', '2016-10-21', '/uploads/4.jpg', b'1', '5', NULL),
(10, 'Ão KhoÃ¡c Nam', 'nam', '550', 21, 'New', '2016-10-20', '/uploads/5.jpg', b'1', '5', NULL),
(11, 'Ão KhoÃ¡c Nam', 'nam', '350', 21, 'New', '2016-10-12', '/uploads/6.jpg', b'1', '5', NULL),
(12, 'VÃ¡y Ná»¯', 'nu', '430', 22, 'New', '2016-10-31', '/uploads/vay1.jpg', b'1', '6', NULL),
(13, 'VÃ¡y Ná»¯', 'nu', '340', 21, 'New', '2016-10-31', '/uploads/vay2.jpg', b'1', '6', NULL),
(14, 'VÃ¡y Ná»¯', 'nu', '230', 22, 'New', '2016-10-31', '/uploads/vay3.jpg', b'1', '6', NULL),
(15, 'VÃ¡y Ná»¯', 'nu', '560', 11, 'New', '2016-10-31', '/uploads/vay4.jpg', b'1', '6', NULL),
(16, 'VÃ¡y Ná»¯', 'nu', '340', 67, 'New', '2016-10-31', '/uploads/vay5.jpg', b'1', '6', NULL),
(17, 'VÃ¡y Ná»¯', 'nu', '220', 33, 'New', '2016-10-31', '/uploads/vay6.jpg', b'1', '6', NULL),
(18, 'Jean Name', 'nam', '440', 43, 'New', '2016-10-14', '/uploads/jeannam1.jpg', b'1', '7', NULL),
(19, 'Jean Nam', 'nam', '650', 32, 'New', '2016-10-24', '/uploads/jeannam2.jpg', b'1', '7', NULL),
(20, 'Jean Nam', 'nam', '980', 21, 'New', '2016-10-26', '/uploads/jeannam3.jpg', b'1', '7', NULL),
(21, 'Jean Nam', 'nam', '430', 21, 'New', '2016-11-18', '/uploads/jeannam4.jpg', b'1', '7', NULL),
(22, 'Jean Nam', 'nam', '320', 21, 'New', '2016-11-20', '/uploads/jeannam5.jpg', b'1', '7', NULL),
(23, 'Jean Nam', 'nam', '210', 54, 'New', '2016-11-26', '/uploads/jeannam6.jpg', b'1', '7', NULL),
(24, 'SÆ¡ mi nam', 'nam', '320', 12, 'New', '2016-11-24', '/uploads/somi1.jpg', b'1', '8', NULL),
(25, 'SÆ¡ mi nam', 'nam', '440', 32, 'New', '2016-11-25', '/uploads/somi2.jpg', b'1', '8', NULL),
(26, 'SÆ¡ mi nam', 'nam', '445', 32, 'New', '2016-11-02', '/uploads/somi3.jpg', b'1', '8', NULL),
(27, 'SÆ¡ mi nam', 'nam', '660', 32, 'New', '2016-11-23', '/uploads/somi4.jpeg', b'1', '8', NULL),
(28, 'Ão Thun nam', 'nam', '220', 34, 'New', '2016-10-28', '/uploads/aothun1.jpg', b'1', '2', NULL),
(29, 'Ão Thun nam', 'nam', '450', 22, 'New', '2016-11-26', '/uploads/aothun3.jpg', b'1', '2', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id_account`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `category_news`
--
ALTER TABLE `category_news`
  ADD PRIMARY KEY (`id_category_news`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_news`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id_order_detail`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id_account` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `category_news`
--
ALTER TABLE `category_news`
  MODIFY `id_category_news` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id_news` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id_order_detail` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
