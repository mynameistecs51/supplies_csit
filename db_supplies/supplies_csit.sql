-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2015 at 09:23 AM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `supplies_csit`
--

-- --------------------------------------------------------

--
-- Table structure for table `list_withdraw`
--

CREATE TABLE IF NOT EXISTS `list_withdraw` (
  `list_id` int(11) NOT NULL,
  `list_name` text NOT NULL,
  `list_amount` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `list_date` text NOT NULL,
  `list_detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `supplies_store`
--

CREATE TABLE IF NOT EXISTS `supplies_store` (
  `supp_id` int(11) NOT NULL,
  `supp_name` text NOT NULL,
  `supp_amount` int(11) NOT NULL,
  `supp_date` varchar(16) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `supplies_store`
--

INSERT INTO `supplies_store` (`supp_id`, `supp_name`, `supp_amount`, `supp_date`) VALUES
(1, 'ปากกา', 20, '14/07/2015'),
(2, 'ดินสอ', 50, '14/07/2015'),
(3, 'ยางลบ', 20, '15/07/2015 11:36');

-- --------------------------------------------------------

--
-- Table structure for table `user_supplies`
--

CREATE TABLE IF NOT EXISTS `user_supplies` (
  `user_id` int(11) NOT NULL,
  `user_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `list_withdraw`
--
ALTER TABLE `list_withdraw`
  ADD PRIMARY KEY (`list_id`);

--
-- Indexes for table `supplies_store`
--
ALTER TABLE `supplies_store`
  ADD PRIMARY KEY (`supp_id`);

--
-- Indexes for table `user_supplies`
--
ALTER TABLE `user_supplies`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `list_withdraw`
--
ALTER TABLE `list_withdraw`
  MODIFY `list_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `supplies_store`
--
ALTER TABLE `supplies_store`
  MODIFY `supp_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user_supplies`
--
ALTER TABLE `user_supplies`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
