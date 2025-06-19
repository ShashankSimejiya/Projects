-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2023 at 07:04 PM
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
-- Database: `jewellery`
--

-- --------------------------------------------------------

--
-- Table structure for table `carrier`
--

CREATE TABLE `carrier` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile no` int(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `select job` varchar(100) NOT NULL,
  `upload file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carrier`
--

INSERT INTO `carrier` (`id`, `name`, `mobile no`, `email`, `select job`, `upload file`) VALUES
(1, 'shashank', 12345, 'hjjh@gmil', 'Website', 'Untitled.png'),
(2, 'shashank', 12345, 'hjjh@gmil', 'Website', 'Untitled.png'),
(3, '', 12345, 'tttqq@gamil.com', 'Accountant', 'Untitled.png'),
(4, '', 12345, 'meet@gmail.com', 'CA', 'Untitled.png'),
(5, 'a', 235, 'tttqq@gamil.com', 'Website', 'Python_Unit-2.pdf'),
(6, 'ambar', 123456789, 'ambar@gmail.com', 'CA', 'Python Unit-1 1st PDF.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(100) NOT NULL,
  `unm` varchar(100) NOT NULL,
  `pnm` varchar(100) NOT NULL,
  `pimg` varchar(500) NOT NULL,
  `ptype` varchar(500) NOT NULL,
  `caret` varchar(200) NOT NULL,
  `pgweight` int(200) NOT NULL,
  `pnweight` int(200) NOT NULL,
  `price` int(255) NOT NULL,
  `qt` int(200) NOT NULL,
  `amt` int(200) NOT NULL,
  `stat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `unm`, `pnm`, `pimg`, `ptype`, `caret`, `pgweight`, `pnweight`, `price`, `qt`, `amt`, `stat`) VALUES
(13, 'meet', 'Earrings', 'Silver_Earring.jpeg', 'SILVER', '22k', 5, 5, 55000, 3, 165000, 'confirm'),
(14, 'meet', 'Earrings', 'Silver_Earring.jpeg', 'SILVER', '22k', 5010, 5450, 55000, 4, 220000, 'confirm'),
(15, 'meet', 'Necklaces', 'Necklaces_1.jpeg', 'GOLD', '22k', 51, 52, 150000, 2, 300000, 'confirm'),
(16, 'meet', 'Earrings', 'Earrings_2.jpeg', 'GOLD', '22k', 5200, 5500, 15000, 4, 60000, 'confirm'),
(17, 'meet', 'Earrings', 'Earrings_2.jpeg', 'GOLD', '22k', 5200, 5500, 15000, 2, 30000, 'pending'),
(23, 'akg', 'Bangals', 'Gold_Bangals_1.jpeg', 'GOLD', '22k', 51000, 52000, 140000, 3, 420000, 'confirm'),
(24, 'akg', 'Bracelet', 'Gold_Bracelet_1.jpeg', 'GOLD', '22k', 45000, 47000, 68000, 2, 136000, 'confirm'),
(25, 'akg', 'Diamond Chain', 'Diamond_Chain_1.jpeg', 'DIAMOND', '22k', 2300, 2500, 3100, 2, 6200, 'confirm'),
(27, 'raj', 'Bangals', 'Gold_Bangals_1.jpeg', 'GOLD', '22k', 51000, 52000, 140000, 1, 140000, 'confirm'),
(28, 'raj', 'Bangals', 'Gold_Bangals_2.jpeg', 'GOLD', '22k', 51000, 52000, 115000, 1, 115000, 'confirm'),
(29, 'raj', 'Bangals', 'Gold_Bangals_2.jpeg', 'GOLD', '22k', 51000, 52000, 115000, 1, 115000, 'confirm');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email` varchar(700) NOT NULL,
  `address` varchar(2500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `mobile`, `email`, `address`) VALUES
(2, 'RAJ', '9574104746', 'rajparmar0097@gmail.com', 'Junagadh');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile no` int(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `suggestion` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `mobile no`, `email`, `suggestion`) VALUES
(1, 'raj', 123, 'hjjh@gmil', '5555'),
(2, 'shashank', 12345, 'hjjh@gmil', 'meet'),
(4, 'shashank', 12345, 'meet@gmail.com', ''),
(5, 'raj', 123456789, 'tttqq@gamil.com', ''),
(6, 'a', 12345, 'meet@gmail.com', ''),
(7, 'aa', 235, 'ambar@gmail.com', ''),
(8, 'aaa', 12345, 'tttqq@gamil.com', 'ababababab'),
(9, 'shashank', 123456789, 'tttqq@gamil.com', 'This Website is Very Beautiful And Nice.\nYour Image is Very Cool.'),
(10, 'a', 12345, 'meet@gmail.com', 'njrnjncjdncjnf43fnjernjnfnrjcnejfnrfrjfnrferfnjernfjnferfiornfjnfjerfoiroenfjrnfjnfrnfjenfjnfrnfjwnrfjnfw');

-- --------------------------------------------------------

--
-- Table structure for table `jewellery`
--

CREATE TABLE `jewellery` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(1500) NOT NULL,
  `type` varchar(250) NOT NULL,
  `caret` varchar(50) NOT NULL,
  `gweight` varchar(50) NOT NULL,
  `nweight` varchar(50) NOT NULL,
  `price` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jewellery`
--

INSERT INTO `jewellery` (`id`, `name`, `image`, `type`, `caret`, `gweight`, `nweight`, `price`) VALUES
(1, 'Bangals', 'Gold_Bangals_1.jpeg', 'GOLD', '22k', '51000', '52000', 140000),
(2, 'Bangals', 'Gold_Bangals_2.jpeg', 'GOLD', '22k', '51000', '52000', 115000),
(3, 'Bracelet', 'Gold_Bracelet_1.jpeg', 'GOLD', '22k', '45000', '47000', 68000),
(5, 'Bracelet', 'Gold_Bracelet_2.jpeg', 'GOLD', '22k', '5200', '5500', 15000),
(6, 'Earrings', 'Gold_Earrings_1.jpeg', 'GOLD', '22k', '7800', '8100', 112000),
(7, 'Earrings', 'Gold_Earrings_2.jpeg', 'GOLD', '22k', '5400', '5900', 35000),
(8, 'Ladies Rign', 'Gold_Ladies_Ring_1.jpeg', 'GOLD', '22k', '3200', '3600', 20000),
(9, 'Ladies Rign', 'Gold_Ladies_Ring_2.jpeg', 'GOLD', '22k', '3500', '3800', 21000),
(10, 'Mangalsutra', 'Gold_Mangalsutra_1.jpeg', 'GOLD', '22k', '19500', '20500', 80000),
(11, 'Mangalsutra', 'Gold_Mangalsutra_2.jpeg', 'GOLD', '22k', '18000', '19500', 78000),
(12, 'Necklaces', 'Gold_Necklaces_5.jpeg', 'GOLD', '22k', '51.000', '53000', 145000),
(13, 'Necklaces', 'Gold_Necklaces_3.jpeg', 'GOLD', '22k', '45000', '48500', 154000),
(14, 'Pendants Set', 'Gold_pendant-set_1.jpeg', 'GOLD', '22k', '46000', '47500', 156000),
(15, 'Pendants Set', 'Gold_pendant-set_2.jpeg', 'GOLD', '22k', '45800', '49300', 158000),
(16, 'Unique Pendant', 'Gold_Unique_Pendant_1.jpeg', 'GOLD', '22k', '24000', '26500', 165000),
(17, 'Unique Pendant', 'Gold_Unique_Pendant_2.jpeg', 'GOLD', '22k', '29200', '32500', 168000),
(18, 'Unique Pendant', 'Gold_Unique_Pendant_3.jpeg', 'GOLD', '22k', '26800', '27900', 169000),
(19, 'Diamond Chain', 'Diamond_Chain_1.jpeg', 'DIAMOND', '22k', '2300', '2500', 3100),
(20, 'Diamond Earring', 'Diamond_Earring_1.jpeg', 'DIAMOND', '22k', '2650', '2800', 3550),
(21, 'Diamond Earring', 'Diamond_Earring_2.jpeg', 'DIAMOND', '22k', '2900', '3250', 2500),
(22, 'Diamond Earring', 'Diamond_Earring_3.jpeg', 'DIAMOND', '18k', '7850', '8350', 51000),
(23, 'Diamond Ring', 'Diamond_Rings_1.jpeg', 'DIAMOND', '18k', '4550', '4780', 5200),
(24, 'Diamond Ring', 'Diamond_Rings_2.jpeg', 'DIAMOND', '18k', '4890', '5210', 6800),
(25, 'Silver Bangals', 'Silver_Bangles_1.jpeg', 'SILVER', '18k', '2500', '2900', 5600),
(26, 'Silver Bangals', 'Silver_Bangles_2.jpeg', 'SILVER', '18k', '5980', '6700', 9500),
(27, 'Silver Bracelet', 'Silver_Bracelets_1.jpeg', 'SILVER', '22k', '5700', '6120', 4700),
(28, 'Silver Bracelet', 'Silver_Bracelets_2.jpeg', 'SILVER', '22k', '5010', '5690', 6500),
(29, 'Silver Earring', 'Silver_Earring_1.jpeg', 'SILVER', '18k ', '6020', '6540', 4870),
(30, 'Silver Earring', 'Silver_Earring_2.jpeg', 'SILVER', '18k', '5060', '7800', 4870),
(31, 'Silver Earring', 'Silver_Earring_3.jpeg', 'SILVER', '18k', '7140', '7690', 5970);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `surname` varchar(150) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` int(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(350) NOT NULL,
  `contect` varchar(50) NOT NULL,
  `type` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `surname`, `username`, `password`, `email`, `address`, `contect`, `type`) VALUES
(2, 'shashank', 'simejiya', 'shashank', 5852, 'shashanksimejiya@rediffmail.com', 'junagadh', '96986753', 'admin'),
(4, 'akg', 'gohel', 'akg', 1225, 'a@gamil.com', 'junagadh', '9080706541', 'user'),
(6, 'RS', 'RS', 'admin', 12345, 'admin@gmail.com', 'Junagadh', '9087606578', 'admin'),
(7, 'meet', 'thakarar', 'meet', 123, 'meet@gmail.com', 'Junagadh', '123456789', 'user'),
(8, 'sapna', 'shri', 'sapna', 147, 'sapna@gmail.com', 'junagadh', '123456789', 'user'),
(9, 'raj', 'parmar', 'raj', 1111, 'rajparmar0097@gmail.com', 'junagadh', '9574104746', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carrier`
--
ALTER TABLE `carrier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jewellery`
--
ALTER TABLE `jewellery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carrier`
--
ALTER TABLE `carrier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `jewellery`
--
ALTER TABLE `jewellery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
