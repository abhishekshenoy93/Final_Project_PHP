-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2020 at 02:42 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homefinder`
--

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `id` int(11) NOT NULL,
  `state` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `zip` int(11) DEFAULT NULL,
  `hometype1` varchar(255) DEFAULT NULL,
  `homeprice1` varchar(255) DEFAULT NULL,
  `hometype2` varchar(255) DEFAULT NULL,
  `homeprice2` varchar(255) DEFAULT NULL,
  `hometype3` varchar(255) DEFAULT NULL,
  `homeprice3` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `state`, `address`, `zip`, `hometype1`, `homeprice1`, `hometype2`, `homeprice2`, `hometype3`, `homeprice3`) VALUES
(1, 'Georgia', 'Atlanta', 30302, 'Building', '$9500000', 'Condominium', '$475000', 'Row House', '$350000'),
(2, 'New York', 'One Pace Plaza', 10001, 'Commercial Building', '$10000000', 'Condominium', '$1500000', 'Row House', '$1000000'),
(3, 'California', 'Los Angeles', 90231, 'Building', '$7500000', 'Condominium', '$375000', 'Row House', '$290000'),
(4, 'New Jersey', 'Jersey City', 73040, 'Building', '$12000000', 'Condominium', '$250000', 'Row House', '$175000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
