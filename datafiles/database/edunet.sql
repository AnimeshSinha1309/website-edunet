-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2015 at 02:18 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `edunet`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
`id` int(11) NOT NULL,
  `subject` varchar(64) NOT NULL,
  `name` varchar(128) NOT NULL,
  `description` varchar(512) DEFAULT NULL,
  `instructor` varchar(32) DEFAULT NULL,
  `school` varchar(64) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `class` varchar(32) DEFAULT NULL,
  `cost` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `subject`, `name`, `description`, `instructor`, `school`, `rating`, `class`, `cost`) VALUES
(1, 'English Literature', 'The Merchant of Venice', 'This standard school course covers Shakespeare''s famous drama ''The Merchant of Venice''', 'Pushpanjali Miss', 'St. Thomas', 60, '9 and 10', 0),
(2, 'English Language', 'ICSE Preparatory Course', 'A 4 week preparatory course in English Grammar based on the ICSE pattern. Filled with excercises.', 'Monica Miss', 'St. Thomas', 55, '9 and 10', 0),
(3, 'Physics', 'Electricity and Magnetism', 'A short course on the real world applications of Electricity and Magnetism.', 'Omesh Sir', 'ST. Thomas', 25, '9 and 10', 0);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `title` varchar(64) NOT NULL,
  `id` int(11) NOT NULL,
  `formId` int(11) NOT NULL,
  `infoId` int(11) NOT NULL,
  `dataId` int(11) NOT NULL,
  `comptetitionDate` date NOT NULL,
  `registerationDate` date NOT NULL,
  `charge` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`title`, `id`, `formId`, `infoId`, `dataId`, `comptetitionDate`, `registerationDate`, `charge`) VALUES
('National Standardized Examination in Junior Science', 1, 1, 1, 1, '2014-11-24', '2014-09-15', 100);

-- --------------------------------------------------------

--
-- Table structure for table `postbook`
--

CREATE TABLE IF NOT EXISTS `postbook` (
`id` int(11) NOT NULL,
  `sender` varchar(64) NOT NULL,
  `post` varchar(1024) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `title` varchar(32) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `postbook`
--

INSERT INTO `postbook` (`id`, `sender`, `post`, `date`, `title`) VALUES
(1, 'Animesh Sinha', 'Hello, lets see if we can insert our posts here into our database. Even if it works one way, this is the first step.', '2015-01-25 09:42:39', 'First Post'),
(2, 'Animesh Sinha', 'Posting here to check if we are out of the woods and in the clear, or have we got a good deal of work to do, even now. Of course, the column balancing is still left, and then the implementation of groups. But still, this would be a big step forward, and then its no turning back from here.', '2015-01-25 10:30:02', 'Out of the Woods'),
(3, 'Animesh Sinha', 'For the sake of rendering the posts and balancing the columns, we have to do few more posts. Just so that we can analyse the actual behaviour and solve this problem of columns height balancing.', '2015-01-25 10:48:29', 'Render''s Sake'),
(4, 'Animesh Sinha', 'Looks like the column balancer is working, so lets just try it out. Small post.', '2015-01-25 10:55:13', 'Looks like it.'),
(5, 'Manish Sinha', 'Study before you think always doesn''t work well; think and think deep before you read or study works better. Look at your surroundings meticulously and try identifying a problem, then investigate and study in depth and resolve issues; certainly such an algo would lead to something really out of the box -- innovation -- our country needs it ---- make it in INDIA.', '2015-01-25 11:19:36', 'Out of the box'),
(6, 'Animesh Sinha', 'So small, two could fit in one.', '2015-01-25 12:17:20', 'So small'),
(7, 'Animesh Sinha', 'Just see.', '2015-01-25 12:17:41', 'And see the balancing');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) unsigned NOT NULL,
  `fname` varchar(32) NOT NULL,
  `lname` varchar(32) DEFAULT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  `mobile` varchar(16) DEFAULT NULL,
  `access` varchar(16) DEFAULT NULL,
  `googleAcc` varchar(64) NOT NULL,
  `facebookAcc` varchar(64) DEFAULT NULL,
  `githubAcc` varchar(64) DEFAULT NULL,
  `stackoverflowAcc` varchar(64) DEFAULT NULL,
  `microsoftAcc` varchar(64) DEFAULT NULL,
  `introYoutube` varchar(32) DEFAULT NULL,
  `introText` varchar(512) DEFAULT NULL,
  `interestTags` varchar(128) DEFAULT NULL,
  `interestPrimary` varchar(32) DEFAULT NULL,
  `profilePic` varchar(128) DEFAULT NULL,
  `school` varchar(128) DEFAULT NULL,
  `class` varchar(32) DEFAULT NULL,
  `birthday` date DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `username`, `password`, `mobile`, `access`, `googleAcc`, `facebookAcc`, `githubAcc`, `stackoverflowAcc`, `microsoftAcc`, `introYoutube`, `introText`, `interestTags`, `interestPrimary`, `profilePic`, `school`, `class`, `birthday`) VALUES
(1, 'Animesh', 'Sinha', 'AnimeshSinha', '$1$XX4.U9..$Njg6YWkqF0nLKMugH1dEF.', '7763915655', 'Developer', 'AnimeshSinha1309@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Physics', NULL, NULL, NULL, NULL),
(2, 'Gaurav', 'Anand', 'GauravAnand', '$1$XX4.U9..$Njg6YWkqF0nLKMugH1dEF.', NULL, 'Student', 'GauravAnand563@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Electronics', NULL, NULL, NULL, NULL),
(3, 'Yash', 'Kumar', 'YashKumar', '$1$XX4.U9..$Njg6YWkqF0nLKMugH1dEF.', NULL, 'Student', 'yashsts@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Physics', NULL, NULL, NULL, NULL),
(9, 'Smita', 'Sinha', 'SmitaSinha', '$1$PI3.sO0.$pxVQuZ0A9XJqHf4KpHijT.', '', 'Developer', 'SmitaSinha2312@gmail.com', '', '', '', '', '', '', '', '+ [Select from this list]', NULL, '', '', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `postbook`
--
ALTER TABLE `postbook`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `username` (`username`), ADD UNIQUE KEY `googleAcc` (`googleAcc`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `postbook`
--
ALTER TABLE `postbook`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
