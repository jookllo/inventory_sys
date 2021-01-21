-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2021 at 02:44 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.3.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventsys`
--

-- --------------------------------------------------------

--
-- Table structure for table `contract`
--

CREATE TABLE `contract` (
  `company_name` varchar(60) NOT NULL,
  `contract_amount` int(8) NOT NULL,
  `date_created` date NOT NULL,
  `materials` varchar(10) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `expense_amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `name` varchar(10) NOT NULL,
  `quantity` int(5) NOT NULL,
  `pin_no` int(5) NOT NULL,
  `date` date NOT NULL,
  `amount` int(8) NOT NULL,
  `expense_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `product_id` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`product_id`, `quantity`, `product_name`, `price`) VALUES
(1, 400, 'Cypress', 300);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_no` int(10) DEFAULT NULL,
  `email` varchar(60) NOT NULL,
  `order_type` varchar(50) NOT NULL,
  `amount` int(20) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `passreset_request`
--

CREATE TABLE `passreset_request` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` int(10) UNSIGNED NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `passreset_request`
--

INSERT INTO `passreset_request` (`id`, `email`, `token`) VALUES
(1, 0, 'c736f8f637c4ca909006aa41201b788f2b43820b0f85febad77d1d2e15d54505f73b99dd227c42184dae577f6bbf68263a05'),
(2, 0, 'bb5bd5a2c6e20c1feb611aabf0b75953606158b70114b169b591706c3f1bf2d4327e1876c341e727c2a10f225c8463b8e71b'),
(3, 0, 'c8468cbbadcbfc0b96444eccc89e5baee0de67fe049f4bf4c967e72a016622cb661397185ddc66371cf4a63a222056b22441'),
(4, 0, 'caf0b1f16c5b25217efad0135e312516061b199c24592bb6ca6047537976860358a9d8c40d37f0511b2eeed9f1166c909edd'),
(5, 0, '9f25e7a2c566fb16d3f68c4dd9ac81997467870cfb5c1b26a4a08d8c963f31026e06828841ab4d3183d7212d97e95a357278'),
(6, 0, '657d098eef7170f04c76fff9a8c1381c63bc51c3d110759297b50e38032f32686ac3509f671ae834397a65846f53c6feb469'),
(7, 0, '7ea78b0c7b8f8796484efc16b747fd8f83c64f4424b078f34007f118b200ca05beaa9b14c755ef439a31341ab7eb3d658b7c'),
(8, 0, 'd2a44fda792a9af313d19786fd091aa20916461af9c6ce59f424270442515a03f6a93bd5d02a186a2daced9176e8e69b3cd9'),
(9, 0, '0cd80e93e022797419f0ed8480b4398a356f9cccd143f45aa478abf20f815b2014216410332c4387d038a7592dc8f36b5ae4');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `uname` varchar(60) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `utype` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uname`, `email`, `pass`, `utype`) VALUES
(1, 'qwertyt', 'hokello@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', 0),
(2, 'admin', 'hokello34@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', 0),
(3, 'asdfg', 'jookllo32@gmail.com', '67cb06d870d2fb109c7a04b75242f341', 0),
(4, 'okello', 'okello@mtaa.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', 0),
(5, 'admin12', 'qweqw@dd.c', 'a384b6463fc216a5f8ecb6670f86456a', 0),
(6, 'qwertytq', 'hokello@gmail.comq', '47cc2036221175855d0b2ecf2765ac1c', 0),
(7, 'ad5', 'hokello@gmail.comui', 'd8578edf8458ce06fbc5bb76a58c5ca4', 0),
(9, 'okelloqwe', 'hookello@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', 0),
(11, 'okelloqw', 'okelloqw@gmail.com', '2b71936f2753b324d3b08ecc3c9db35f', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`expense_id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `passreset_request`
--
ALTER TABLE `passreset_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uname` (`uname`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `expense_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `passreset_request`
--
ALTER TABLE `passreset_request`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
