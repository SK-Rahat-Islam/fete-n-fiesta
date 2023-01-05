-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2023 at 12:37 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fete`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name1` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `num` varchar(11) NOT NULL,
  `sub` varchar(100) NOT NULL,
  `msg` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name1`, `email`, `num`, `sub`, `msg`) VALUES
(1, 'rahat', 'rahat@gmail.com', '01765432798', 'wedding', 'want to book.'),
(11, 'jon', 'jon@gmail.com', '01765432798', 'wedding', 'want to book.\r\n'),
(12, 'regone', 'regone@gmail.com', '01765432799', 'birthday', 'Please book this event for me.'),
(13, 'Apurbo', 'apurbo@gmail.com', '01765432799', 'Concert', 'I want to book a concert schedule.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `l_name` varchar(100) NOT NULL,
  `u_name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `d_birth` varchar(100) NOT NULL,
  `p_num` varchar(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `u_type` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `c_pass` varchar(100) NOT NULL,
  `agree` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `f_name`, `l_name`, `u_name`, `gender`, `d_birth`, `p_num`, `email`, `u_type`, `pass`, `c_pass`, `agree`) VALUES
(8, 'rahat', 'islam', 'Rahat', 'Male', '2022-12-02', '01918172783', 'rahat@gmail.com', 'Admin', '8b0ea36027df253cda508fcefd8372b8', '8b0ea36027df253cda508fcefd8372b8', 'checked'),
(10, 'peu', 'peu', 'Peu12', 'Female', '2022-08-05', '01918172783', 'peu@gmail.com', 'Admin', '6264f1169f202c8b4bcf62c4948d3e1e', '6264f1169f202c8b4bcf62c4948d3e1e', 'checked'),
(11, 'jon', 'dep', 'jondep', 'Male', '2022-12-10', '01918172783', 'jon@gmail.com', 'User', '049fa9a0390a737c14245a5fb0ee9df7', '049fa9a0390a737c14245a5fb0ee9df7', 'checked'),
(13, 'apu', 'da', 'apu', 'Male', '2022-11-28', '42455646655', 'apu@gmail.com', 'User', '24a3a04c3c25a0a9336334ff482c10c1', '24a3a04c3c25a0a9336334ff482c10c1', 'checked'),
(14, 'muffin', 'bunny', 'mb', 'Female', '2017-01-24', '01871628838', 'muffin@gmail.com', 'User', '166e473a14eaa4925588224b487d82fa', '166e473a14eaa4925588224b487d82fa', 'checked'),
(15, 'Md Regone', 'Hossain', 'Regone', 'Male', '1997-06-27', '01918172783', 'regone@gmail.com', 'Admin', 'a799085de2e406f64927d698a4156a60', 'a799085de2e406f64927d698a4156a60', 'checked');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
