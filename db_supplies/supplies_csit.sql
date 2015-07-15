-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2015 at 12:09 PM
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
-- Table structure for table `supplies_store`
--

CREATE TABLE IF NOT EXISTS `supplies_store` (
  `supp_id` int(11) NOT NULL,
  `supp_name` text NOT NULL,
  `supp_amount` int(11) NOT NULL,
  `supp_date` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `supplies_store`
--

INSERT INTO `supplies_store` (`supp_id`, `supp_name`, `supp_amount`, `supp_date`) VALUES
(1, 'ปากกา', 20, '14/07/2015'),
(2, 'ดินสอ', 50, '14/07/2015');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `supplies_store`
--
ALTER TABLE `supplies_store`
  ADD PRIMARY KEY (`supp_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `supplies_store`
--
ALTER TABLE `supplies_store`
  MODIFY `supp_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
