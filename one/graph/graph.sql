-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2018 at 09:18 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `graph`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblsales`
--

CREATE TABLE IF NOT EXISTS `tblsales` (
`SalesId` int(11) NOT NULL,
  `Product` varchar(90) NOT NULL,
  `TotalSales` double NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tblsales`
--

INSERT INTO `tblsales` (`SalesId`, `Product`, `TotalSales`) VALUES
(1, 'Surf Powder', 1400),
(2, 'Mr. Clean Powder', 7000),
(3, 'Tide Powder', 5052),
(4, 'Ariel Powder', 8030);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblsales`
--
ALTER TABLE `tblsales`
 ADD PRIMARY KEY (`SalesId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblsales`
--
ALTER TABLE `tblsales`
MODIFY `SalesId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
