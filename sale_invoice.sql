-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2024 at 09:46 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sale invoice`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `si_num` int(11) NOT NULL,
  `si_date` date DEFAULT NULL,
  `term` varchar(255) DEFAULT NULL,
  `sold_to` varchar(200) DEFAULT NULL,
  `tin` int(255) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `buss_style` varchar(250) NOT NULL,
  `particulars` varchar(250) NOT NULL,
  `vatable_sale` int(11) NOT NULL,
  `vat_exempt_sale` int(11) NOT NULL,
  `zero_rated_sale` int(11) NOT NULL,
  `total_sale` varchar(255) DEFAULT NULL,
  `vat` varchar(2555) DEFAULT NULL,
  `total_amount_payable` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `si_num`, `si_date`, `term`, `sold_to`, `tin`, `address`, `buss_style`, `particulars`, `vatable_sale`, `vat_exempt_sale`, `zero_rated_sale`, `total_sale`, `vat`, `total_amount_payable`) VALUES
(35, 70982, '2024-08-01', '0', 'NATIONAL TAX RESEARCH CENTER', 1, '8F. EDPC Building, BSP Complex, Roxas Boulevard Cor., Pablo Ocampo St., Manila', ' ', ' ', 0, 0, 0, '6429', '771', '7200'),
(36, 223, '2024-08-07', '444', '4444', 4444, '444', '444', '444', 0, 0, 0, '4', '0', '4'),
(37, 223, '2024-08-07', '444', '4444', 4444, '444', '444', '444', 0, 0, 0, '4', '0', '4'),
(38, 1234, '2024-07-31', '2131234', '1234', 2132144, '222', '222', '222', 0, 0, 0, '4', '0', '4'),
(39, 123, '2024-08-13', '0', '123123', 123213, '123213', '', '', 0, 0, 0, '4', '0', '4'),
(40, 123, '2024-08-13', '0', '123123', 123213, '123213', '', '', 0, 0, 0, '4', '0', '4'),
(41, 0, '1970-01-01', '0', '', 0, '', '', '', 0, 0, 0, '4', '0', '4'),
(42, 0, '1970-01-01', '0', '', 0, '', '', '', 0, 0, 0, '4', '0', '4'),
(43, 0, '1970-01-01', '0', '', 0, '', '', '', 0, 0, 0, '0', '0', '0'),
(44, 0, '1970-01-01', '0', '', 0, '', '', '', 0, 0, 0, '0', '0', '0'),
(45, 0, '1970-01-01', '', '', 0, '', '', '', 0, 0, 0, '', '', ''),
(46, 0, '1970-01-01', '', '', 0, '', '', '', 0, 0, 0, '', '', ''),
(47, 0, '1970-01-01', '', '', 0, '', '', '', 0, 0, 0, '', '', ''),
(48, 0, '1970-01-01', '', '', 0, '', '', '', 0, 0, 0, '', '', ''),
(49, 0, '1970-01-01', '', '', 0, '', '', '', 0, 0, 0, '', '', ''),
(50, 0, '1970-01-01', '', '', 0, '', '', '', 0, 0, 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sales_2`
--

CREATE TABLE `sales_2` (
  `id` int(11) NOT NULL,
  `quantity` varchar(250) DEFAULT NULL,
  `units` varchar(255) DEFAULT NULL,
  `item_description` varchar(250) DEFAULT NULL,
  `unit_price` varchar(255) DEFAULT NULL,
  `total_price` varchar(255) DEFAULT NULL,
  `info_key` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sales_2`
--

INSERT INTO `sales_2` (`id`, `quantity`, `units`, `item_description`, `unit_price`, `total_price`, `info_key`) VALUES
(89, '1', '0', 'Billing Period as of July 01 to 31, 2024', '0', '7200', 35),
(90, '0', '0', '', '0', '0', 35),
(91, '0', '0', 'Pls. See Attached Billing Statement', '0', '0', 35),
(92, '1', '0', 'qqqq', '4', '4', 36),
(93, '0', '0', 'pls see attached billing statement', '0', '0', 36),
(94, '1', '0', 'qqqq', '4', '4', 37),
(95, '0', '0', 'pls see attached billing statement', '0', '0', 37),
(96, '4', '0', '444', '1', '4', 38),
(97, '0', '0', 'Please see billing statement', '0', '0', 38),
(98, '1', '0', 'nibba', '4', '4', 39),
(99, '0', '0', 'attached na', '0', '0', 39),
(100, '1', '', 'nibba', '4', '4.00', 40),
(101, '', '', 'attached na', '', '', 40),
(102, '1', '', '2', '4', '4.00', 41),
(103, '', '', 'See Attached File', '', '0.00', 41),
(104, '1', '', 'hehe', '4', '4.00', 42),
(105, '', '', 'Please please please', '', '', 42),
(106, '', '', '', '', '', 43),
(107, '', '', '', '', '', 43),
(108, '', '', '', '', '', 44),
(109, '', '', '', '', '', 44),
(110, '', '', '', '', '', 45),
(111, '', '', '', '', '', 45),
(112, '', '', '', '', '', 46),
(113, '', '', '', '', '', 46),
(114, '', '', '', '', '', 47),
(115, '', '', '', '', '', 47),
(116, '', '', '', '', '', 48),
(117, '', '', '', '', '', 48),
(118, '', '', '', '', '', 49),
(119, '', '', '', '', '', 49),
(120, '', '', '', '', '', 50),
(121, '', '', '', '', '', 50);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales_2`
--
ALTER TABLE `sales_2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `sales_2`
--
ALTER TABLE `sales_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
