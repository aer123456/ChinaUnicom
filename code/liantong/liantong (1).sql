-- phpMyAdmin SQL Dump
-- version 4.4.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-08-15 01:49:19
-- 服务器版本： 5.6.25
-- PHP Version: 5.5.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `liantong`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `pass` text NOT NULL,
  `name` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- 表的结构 `gameinfo`
--

CREATE TABLE IF NOT EXISTS `gameinfo` (
  `uid` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `time` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `gameinfo`
--

INSERT INTO `gameinfo` (`uid`, `score`, `id`, `time`) VALUES
(1, 7, 1, '1470615904'),
(1, 48, 2, '1470615922'),
(1, 32, 3, '1471188648'),
(1, 32, 4, '1471188651'),
(1, 32, 5, '1471188684'),
(1, -29, 6, '1471188787'),
(1, -29, 7, '1471195552'),
(2, -34, 8, '1471195857'),
(2, -34, 9, '1471196215'),
(2, -34, 10, '1471196263'),
(2, -29, 11, '1471196364'),
(2, -26, 12, '1471196402'),
(2, -1, 13, '1471196478'),
(2, -1, 14, '1471196484'),
(2, 0, 15, '1471196504'),
(3, -32, 16, '1471223776'),
(3, -29, 17, '1471223859');

-- --------------------------------------------------------

--
-- 表的结构 `invite`
--

CREATE TABLE IF NOT EXISTS `invite` (
  `uid` int(11) NOT NULL,
  `phone` text NOT NULL,
  `state` int(11) NOT NULL,
  `time` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `invite`
--

INSERT INTO `invite` (`uid`, `phone`, `state`, `time`, `id`) VALUES
(1, '1892323222', 2, '1470882135', 4),
(1, '1892323222', 1, '1470882154', 5),
(1, '1892323222', 1, '1470884152', 6),
(1, '11111', 2, '1471192595', 7),
(2, '1812312312', 1, '1471195431', 8),
(3, '123123123', 1, '1471225433', 9);

-- --------------------------------------------------------

--
-- 表的结构 `poketmon`
--

CREATE TABLE IF NOT EXISTS `poketmon` (
  `name` text NOT NULL,
  `pic` text NOT NULL,
  `info` text NOT NULL,
  `good` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `poketmon`
--

INSERT INTO `poketmon` (`name`, `pic`, `info`, `good`, `id`) VALUES
('小火龙', 'img/pica/pica1.png', '小火龙', 0, 1),
('杰尼龟', 'img/pica/pica2.png', '杰尼龟', 0, 2),
('胖丁', 'img/pica/pica3.png', '胖丁', 0, 3),
('伊布', 'img/pica/pica4.png', '伊布', 0, 4),
('蚊香蛙', 'img/pica/pica5.png', '蚊香蛙', 1, 5),
('妙蛙种子', 'img/pica/pica6.png', '妙蛙种子', 1, 6),
('皮卡丘', 'img/pica/pica7.png', '皮卡丘', 1, 7);

-- --------------------------------------------------------

--
-- 表的结构 `team`
--

CREATE TABLE IF NOT EXISTS `team` (
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `time` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `team`
--

INSERT INTO `team` (`uid`, `pid`, `time`, `id`) VALUES
(1, 1, '1471188787', 9),
(1, 2, '1471195552', 10),
(2, 1, '1471195857', 11),
(2, 2, '1471196215', 12),
(2, 3, '1471196364', 13),
(2, 4, '1471196484', 14),
(3, 1, '1471223859', 15),
(3, 5, '1471225443', 16);

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `phone` text NOT NULL,
  `pass` text NOT NULL,
  `pic` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`phone`, `pass`, `pic`, `id`) VALUES
('asdasccs', 'dk', 'http://avatar.csdn.net/F/2/A/1_hguisu.jpg', 1),
('18981932715', 'e10adc3949ba59abbe56e057f20f883e', 'a', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gameinfo`
--
ALTER TABLE `gameinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invite`
--
ALTER TABLE `invite`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `poketmon`
--
ALTER TABLE `poketmon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gameinfo`
--
ALTER TABLE `gameinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `invite`
--
ALTER TABLE `invite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `poketmon`
--
ALTER TABLE `poketmon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
