-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 04, 2016 at 07:29 PM
-- Server version: 5.5.48
-- PHP Version: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iitunow`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment_table`
--

CREATE TABLE IF NOT EXISTS `comment_table` (
  `comment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `video_id` int(11) NOT NULL,
  `comment_text` text NOT NULL,
  `comment_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comment_table`
--

INSERT INTO `comment_table` (`comment_id`, `user_id`, `video_id`, `comment_text`, `comment_date`) VALUES
(3, 2, 2, 'cool!!!!!!!!!!', '2016-04-24 17:16:05'),
(4, 1, 4, 'Good song!', '2016-04-24 18:44:52'),
(5, 2, 5, 'Nice))', '2016-04-24 18:47:14'),
(6, 7, 6, 'Cool! He has good voice', '2016-04-24 18:53:24'),
(7, 7, 3, 'Looks funny^^', '2016-04-24 18:56:21'),
(8, 7, 2, 'ouch O_O', '2016-04-24 18:56:51');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE IF NOT EXISTS `user_table` (
  `id` int(11) NOT NULL,
  `user_name` varchar(40) NOT NULL,
  `user_email` varchar(60) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_active` int(1) NOT NULL DEFAULT '1',
  `user_photo` varchar(100) DEFAULT 'default.png'
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`id`, `user_name`, `user_email`, `password`, `user_active`, `user_photo`) VALUES
(1, 'symbat', 'symbat01011996@gmail.com', '7c222fb2927d828af22f592134e8932480637c0d', 1, 'pic01.jpg'),
(2, 'saltanat', 'sako25@mail.ru', '7c222fb2927d828af22f592134e8932480637c0d', 1, 'pic02.jpg'),
(4, 'azamat', 'azamat@gmail.com', '36db6ef1df864c5706876799039c886523f891f2', 1, 'pic03.jpg'),
(5, 'togzhan', 'toogzhan@mail.ru', 'c7f8d752610f234c03255301636229e18fbc4a07', 1, 'pic04.jpg'),
(6, 'erkebulan', 'erkebulan@gmail.com', 'cb6640ad3d1941d6d3c564e031e2a141c9d66aac', 1, 'pic05.jpg'),
(7, 'nurbay', 'nurbai_simbat@mail.ru', '3f0eef737780435e6fb0cd7fa9f8de024526ced5', 1, 'pic08.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `video_table`
--

CREATE TABLE IF NOT EXISTS `video_table` (
  `video_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `video_desc` text NOT NULL,
  `video_link` varchar(50) NOT NULL,
  `add_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `video_table`
--

INSERT INTO `video_table` (`video_id`, `user_id`, `video_desc`, `video_link`, `add_date`) VALUES
(3, 5, 'Sberbank. Uptown Funk', 'first.mp4', '2016-04-24 18:28:42'),
(4, 2, 'Ed Sheeran - Photograph (Capital FM Session)', 'Ed Sheeran - Photograph (Capital FM Session).mp4', '2016-04-24 18:34:59'),
(6, 6, 'Ed Sheeran - Thinking out loud and Dont at Australia X Factor in 2014. Live Perfomance', 'Ed Sheeran - Thinking out loud - Dont', '2016-04-24 18:40:57'),
(7, 1, 'Lukas Graham - 7 Years (Live  Version)', 'Lukas Graham - 7 Years (Live  Vevo).mp4', '2016-04-24 18:44:29'),
(8, 2, 'A Comme Amour by Richard Clayderman. Piano Version', 'A Comme Amour - Richard Clayderman.mp4', '2016-04-24 18:46:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment_table`
--
ALTER TABLE `comment_table`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique` (`user_name`),
  ADD UNIQUE KEY `unique2` (`user_email`);

--
-- Indexes for table `video_table`
--
ALTER TABLE `video_table`
  ADD PRIMARY KEY (`video_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment_table`
--
ALTER TABLE `comment_table`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `video_table`
--
ALTER TABLE `video_table`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
