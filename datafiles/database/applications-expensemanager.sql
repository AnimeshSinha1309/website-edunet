-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2015 at 02:24 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `applications-expensemanager`
--

-- --------------------------------------------------------

--
-- Table structure for table `expensemanager`
--

CREATE TABLE IF NOT EXISTS `expensemanager` (
`id` int(11) NOT NULL,
  `userid` varchar(128) NOT NULL,
  `head` varchar(128) NOT NULL,
  `category` varchar(128) NOT NULL,
  `amount` int(11) NOT NULL,
  `comments` varchar(1024) DEFAULT NULL,
  `list` varchar(2048) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `recurrence` varchar(64) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `expensemanager`
--

INSERT INTO `expensemanager` (`id`, `userid`, `head`, `category`, `amount`, `comments`, `list`, `date`, `recurrence`) VALUES
(3, '1', 'Grocery', 'Food', 250, '', NULL, '2015-01-07', NULL),
(4, '1', 'School Fees', 'Education', 600, '', NULL, '2015-01-07', NULL),
(5, '1', 'Insurance', 'Investments', 5211, '', NULL, '2015-01-07', NULL),
(6, '1', 'Non Veg', 'Food', 500, '', NULL, '2015-01-07', NULL),
(7, '1', 'Internet', 'Education', 1800, '', NULL, '2015-01-07', NULL),
(8, '1', 'RMO Exam Fees', 'Education', 100, '', NULL, '2014-12-01', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `expensemanager`
--
ALTER TABLE `expensemanager`
 ADD PRIMARY KEY (`id`), ADD KEY `category` (`category`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `expensemanager`
--
ALTER TABLE `expensemanager`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
