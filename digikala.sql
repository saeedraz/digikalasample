-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2018 at 11:08 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digikala`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `fname` varchar(20) COLLATE utf8mb4_persian_ci NOT NULL,
  `lname` varchar(30) COLLATE utf8mb4_persian_ci NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_persian_ci NOT NULL,
  `password` varchar(20) COLLATE utf8mb4_persian_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fname`, `lname`, `username`, `password`) VALUES
(1, 'علی', 'علوی', 'mohammadreza', '321200');

-- --------------------------------------------------------

--
-- Table structure for table `basket`
--

CREATE TABLE `basket` (
  `id` int(11) NOT NULL,
  `product` varchar(10) COLLATE utf8_persian_ci NOT NULL,
  `user` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `date` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `code` varchar(10) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `basket`
--

INSERT INTO `basket` (`id`, `product`, `user`, `date`, `code`) VALUES
(27, '8', '::1', 'فروردین', '775000'),
(28, '8', '::1', 'فروردین', '260455'),
(29, '15', '::1', 'فروردین', '798510'),
(30, '14', '::1', 'فروردین', '639236'),
(31, '16', '::1', 'فروردین', '800570'),
(32, '16', '::1', 'فروردین', '128729'),
(38, '8', 'mre106@yahoo.com', 'فروردین', '427117'),
(39, '15', 'mre106@yahoo.com', 'فروردین', '303329'),
(40, '29', '::1', 'فروردین', '');

-- --------------------------------------------------------

--
-- Table structure for table `cat`
--

CREATE TABLE `cat` (
  `id` int(10) NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_persian_ci NOT NULL,
  `subcat` varchar(5) COLLATE utf8mb4_persian_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `cat`
--

INSERT INTO `cat` (`id`, `name`, `subcat`) VALUES
(27, 'اپل', '19'),
(26, 'سامسونگ', '19'),
(25, 'تبلت', '18'),
(19, 'موبایل', '18'),
(18, 'کالای دیجیتال', '0');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `from` varchar(30) COLLATE utf8_persian_ci NOT NULL,
  `to` varchar(30) COLLATE utf8_persian_ci NOT NULL,
  `text` text COLLATE utf8_persian_ci NOT NULL,
  `reply` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `time` varchar(30) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `from`, `to`, `text`, `reply`, `time`) VALUES
(60, 'admin', 'mre106@yahoo.com', 'سلام', '0', '12:22:56'),
(61, 'mre106@yahoo.com', 'admin', 'علیک سلام', '60', '14 : 40 : 52 '),
(62, 'admin', 'mre106@yahoo.com', 'اگر مشکلی دارید بنده در خدمتم', '0', '12:26:22'),
(64, 'mre106@yahoo.com', 'admin', 'خیر', '62', '14 : 46 : 27 ');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `user` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `text` text COLLATE utf8_persian_ci NOT NULL,
  `kala` varchar(10) COLLATE utf8_persian_ci NOT NULL,
  `keifiat` varchar(1) COLLATE utf8_persian_ci NOT NULL,
  `arzesh` varchar(1) COLLATE utf8_persian_ci NOT NULL,
  `state` varchar(1) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `user`, `text`, `kala`, `keifiat`, `arzesh`, `state`) VALUES
(5, 'mre106@yahoo.com', 'واقعا موبایل عالیه . من که ازش راضیم و دارم یه سال استفادش میکنم', '15', '2', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `like`
--

CREATE TABLE `like` (
  `id` int(11) NOT NULL,
  `product-id` varchar(10) COLLATE utf8_persian_ci NOT NULL,
  `user` varchar(100) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `like`
--

INSERT INTO `like` (`id`, `product-id`, `user`) VALUES
(14, 'Test', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `pic` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `text` text COLLATE utf8_persian_ci NOT NULL,
  `date` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `state` varchar(10) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `pic`, `text`, `date`, `state`) VALUES
(21, '123', '7cacbd26adc674f1127ad9bd277a6620n.png', '<p>456</p>\r\n', 'خرداد', '1'),
(23, '456', '671d5fc413db1fa9e346c91aee26c3d0e.png', '<p>789</p>\r\n', 'خرداد', '1'),
(24, '123456', '19ebfebb4df6c78d560e05e17b3008b61.jpg', '<p>67890</p>\r\n', '10 مرداد 96', '1'),
(25, '123456', 'ef0974be80fc54d91f3bd8940a8808031.jpg', '<p>67890</p>\r\n', '10 مرداد 96', '1');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_persian_ci NOT NULL,
  `gheymat` varchar(20) COLLATE utf8mb4_persian_ci NOT NULL,
  `takhfif` varchar(10) COLLATE utf8mb4_persian_ci NOT NULL,
  `picture` varchar(100) COLLATE utf8mb4_persian_ci NOT NULL,
  `daste` varchar(100) COLLATE utf8mb4_persian_ci NOT NULL,
  `tozihat` text COLLATE utf8mb4_persian_ci NOT NULL,
  `naghd` text COLLATE utf8mb4_persian_ci NOT NULL,
  `date` varchar(20) COLLATE utf8mb4_persian_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `gheymat`, `takhfif`, `picture`, `daste`, `tozihat`, `naghd`, `date`) VALUES
(29, 'آیفون 7    ', '2300000', '150000', '../picture/kala/fadd8a20d4e05107ef5cd92441e4febb0.jpg', '27', 'پر فروش ترین تلفن همراه شرکت اپل', '<p>بی نظیر در طراحی با تخفیفی باور نکردنی</p>\r\n', '19 مهر 96');

-- --------------------------------------------------------

--
-- Table structure for table `sefaresh`
--

CREATE TABLE `sefaresh` (
  `id` int(10) NOT NULL,
  `fname` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `lname` varchar(30) COLLATE utf8_persian_ci NOT NULL,
  `phone` varchar(11) COLLATE utf8_persian_ci NOT NULL,
  `adress` text COLLATE utf8_persian_ci NOT NULL,
  `tozihat` text COLLATE utf8_persian_ci NOT NULL,
  `code` varchar(10) COLLATE utf8_persian_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_persian_ci NOT NULL,
  `state` varchar(10) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `sefaresh`
--

INSERT INTO `sefaresh` (`id`, `fname`, `lname`, `phone`, `adress`, `tozihat`, `code`, `email`, `state`) VALUES
(22, 'محمدرضا', 'ابراهیمی', '09123456789', 'مازندارن', '', '303329', 'mre106@yahoo.com', '0');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `pic` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `text` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `slider-number` varchar(1) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `pic`, `text`, `slider-number`) VALUES
(3, 'slider1/4320f57bcb9a8527009c83a0d3b994c53.jpg', 'تصویر1', '1'),
(4, 'slider1/bfb55862e6201717f072a711db3797851.jpg', 'تصویر2', '1'),
(5, 'slider1/da74b4a0b09dc4164e89756679e7b9da2.jpg', 'تصویر3', '1'),
(6, 'slider1/0b3cd79549ad6ea734a5d346599ae2cf4.jpg', 'تصویر4', '1'),
(8, 'slider1/726569716fd17f8601244be782d656c05.jpg', 'تصویر5', '1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(20) COLLATE utf8mb4_persian_ci NOT NULL,
  `lname` varchar(20) COLLATE utf8mb4_persian_ci NOT NULL,
  `phone` varchar(11) COLLATE utf8mb4_persian_ci NOT NULL,
  `register_date` varchar(20) COLLATE utf8mb4_persian_ci NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_persian_ci NOT NULL,
  `password` varchar(20) COLLATE utf8mb4_persian_ci NOT NULL,
  `state` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `phone`, `register_date`, `username`, `password`, `state`) VALUES
(78, '1', '2', '3', '16 خرداد 96', '4', '5', 0),
(79, 'علی', 'علوی', '', '16 خرداد 96', 'ali', 'alavi', 0),
(80, 'محمد', 'رضایی', '', '16 خرداد 96', 'mohammad1', 'rezaee', 0),
(86, 'محمدرضا', 'ابراهیمی', '09123456789', '17 مرداد 96', 'mre106@yahoo.com', '123456', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cat`
--
ALTER TABLE `cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `like`
--
ALTER TABLE `like`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sefaresh`
--
ALTER TABLE `sefaresh`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `basket`
--
ALTER TABLE `basket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `cat`
--
ALTER TABLE `cat`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `like`
--
ALTER TABLE `like`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `sefaresh`
--
ALTER TABLE `sefaresh`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
