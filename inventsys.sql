-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 25, 2021 at 12:16 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.22

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
  `contact` varchar(15) NOT NULL,
  `expense_amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contract`
--

INSERT INTO `contract` (`company_name`, `contract_amount`, `date_created`, `materials`, `contact`, `expense_amount`) VALUES
('Vijana Mtaani', 7878787, '2021-01-20', 'Doors', '071212522525', 7852422);

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `ename` varchar(10) NOT NULL,
  `quantity` int(5) NOT NULL,
  `pin_no` int(5) NOT NULL,
  `date` date NOT NULL,
  `amount` int(8) NOT NULL,
  `expense_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`ename`, `quantity`, `pin_no`, `date`, `amount`, `expense_id`) VALUES
('Wood', 2, 323423, '2021-01-20', 400, 1);

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
(1, 17, 'Kuku', 500),
(2, -6, 'Wooden Chair', 500),
(3, 34, 'qwwqeqweqweqwe', 45454);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_no` int(10) NOT NULL,
  `email` varchar(60) NOT NULL,
  `order_type` varchar(50) NOT NULL,
  `amount` int(20) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_no`, `email`, `order_type`, `amount`, `date`) VALUES
(1, 'hokello34@gmail.com', 'Wooden Chair', 23, '2021-01-20'),
(2, 'hokello34@gmail.com', 'Wooden Chair', 12, '2021-01-20'),
(3, 'hokello34@gmail.comqwqw', 'Wooden Chair', 12, '2021-01-25'),
(4, 'hoookello34@gmail.com', 'Wooden Chair', 15, '2021-01-25'),
(5, 'hokello34@gmail.com', 'Kuku', 13, '2021-01-25'),
(6, 'okello@mtaa.com', 'Kuku', 12, '2021-01-25'),
(7, 'qweqw@dd.c', 'Wooden Chair', 12, '2021-01-25'),
(8, 'qweqw@dd.c', 'Wooden Chair', 12, '2021-01-25');

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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_no`);

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
  MODIFY `expense_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
