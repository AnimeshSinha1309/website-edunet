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
-- Database: `applications-stocksfinance`
--

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE IF NOT EXISTS `history` (
  `id` int(10) NOT NULL,
  `type` varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `symbol` varchar(63) COLLATE utf8_unicode_ci NOT NULL,
  `shares` int(10) NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `type`, `timestamp`, `symbol`, `shares`, `price`) VALUES
(10, 'BUY', '2014-11-03 07:57:31', 'GOOG', 5, 559),
(1, 'BUY', '2015-01-03 08:28:26', 'GOOG', 10, 525),
(1, 'BUY', '2015-01-03 08:34:27', 'FB', 20, 78),
(1, 'BUY', '2015-01-03 08:35:04', 'MSFT', 5, 47);

-- --------------------------------------------------------

--
-- Table structure for table `shares`
--

CREATE TABLE IF NOT EXISTS `shares` (
  `id` int(10) unsigned NOT NULL,
  `symbol` varchar(63) COLLATE utf8_unicode_ci NOT NULL,
  `shares` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `shares`
--

INSERT INTO `shares` (`id`, `symbol`, `shares`) VALUES
(1, 'FB', 20),
(1, 'GOOG', 10),
(1, 'MSFT', 5),
(3, 'HBIO', 46),
(4, 'AAPL', 75),
(4, 'FB', 60),
(6, 'DVN.V', 13),
(6, 'HBIO', 10),
(7, 'MSFT', 30),
(10, 'GOOG', 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) unsigned NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cash` int(10) unsigned NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `hash`, `cash`) VALUES
(1, 'caesar', '$1$50$GHABNWBNE/o4VL7QjmQ6x0', 2949),
(2, 'hirschhorn', '$1$50$lJS9HiGK6sphej8c4bnbX.', 10000),
(3, 'jharvard', '$1$50$RX3wnAMNrGIbgzbRYrxM1/', 10000),
(4, 'malan', '$1$HA$azTGIMVlmPi9W9Y12cYSj/', 10000),
(5, 'milo', '$1$HA$6DHumQaK4GhpX8QE23C8V1', 10000),
(6, 'skroob', '$1$50$euBi4ugiJmbpIbvTTfmfI.', 10000),
(7, 'zamyla', '$1$50$uwfqB45ANW.9.6qaQ.DcF.', 10000),
(10, 'animesh', '$1$ERznLfCt$PMXWOEDMZxVFo0IyG90nQ.', 7205);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history`
--
ALTER TABLE `history`
 ADD PRIMARY KEY (`timestamp`);

--
-- Indexes for table `shares`
--
ALTER TABLE `shares`
 ADD PRIMARY KEY (`id`,`symbol`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
