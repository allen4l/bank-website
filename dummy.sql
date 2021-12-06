-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2021 at 05:49 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dummy`
--

-- --------------------------------------------------------

--
-- Table structure for table `cb_rates`
--

CREATE TABLE `cb_rates` (
  `id` int(11) NOT NULL,
  `currency` varchar(50) NOT NULL,
  `sell_cur` double NOT NULL,
  `sell_prev` double NOT NULL,
  `buy_cur` double NOT NULL,
  `buy_prev` double NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cb_rates`
--

INSERT INTO `cb_rates` (`id`, `currency`, `sell_cur`, `sell_prev`, `buy_cur`, `buy_prev`, `date`) VALUES
(1, 'dollar', 85.32, 45.55, 78.33, 23.55, '2021-05-05'),
(2, 'euro', 22.33, 55.88, 44.66, 45.55, '2021-05-12'),
(3, 'yuan', 44.22, 45.77, 45.66, 78.22, '2021-05-22');

-- --------------------------------------------------------

--
-- Table structure for table `rates`
--

CREATE TABLE `rates` (
  `id` int(11) NOT NULL,
  `currency` varchar(50) NOT NULL,
  `sell_cur` double NOT NULL,
  `sell_prev` double NOT NULL,
  `buy_cur` double NOT NULL,
  `buy_prev` double NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rates`
--

INSERT INTO `rates` (`id`, `currency`, `sell_cur`, `sell_prev`, `buy_cur`, `buy_prev`, `date`) VALUES
(1, 'dollar', 71.82, 70.12, 74.78, 75.64, '2021-03-31'),
(2, 'euro', 85.46, 85.41, 90.43, 88.77, '2021-05-20'),
(3, 'yuan', 10.55, 11.03, 9.58, 9.73, '2021-05-20');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
