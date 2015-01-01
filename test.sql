-- phpMyAdmin SQL Dump
-- version 4.2.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2015 年 01 月 01 日 14:40
-- Server version: 5.6.13
-- PHP Version: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- 表的結構 `board`
--

CREATE TABLE IF NOT EXISTS `board` (
`board_id` int(10) unsigned NOT NULL,
  `board_title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `board_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `board_pic` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `board_email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `board_content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `board_date` datetime DEFAULT NULL,
  `board_re` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `board_redate` datetime DEFAULT NULL,
  `board_ip` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 轉存資料表中的資料 `board`
--

INSERT INTO `board` (`board_id`, `board_title`, `board_name`, `board_pic`, `board_email`, `board_content`, `board_date`, `board_re`, `board_redate`, `board_ip`) VALUES
(1, '測試標題1', '路人甲', 'face1.gif', 'test@test.com.tw', '哇!!好棒的留言版!!', '2010-03-24 00:00:00', NULL, NULL, '127.0.0.1'),
(2, '測試標題2', '路人乙', 'face1.gif', 'test@test.com.tw', '111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111\r\n\r\n22222222\r\n33333333\r\n<img src="http://www.joj.com.tw/lcc/evil.gif">', '2010-03-24 00:00:00', NULL, '2010-03-24 00:00:00', '127.0.0.1'),
(3, '測試標題3', '路人丙', 'face1.gif', 'test@test.com.tw', '哇!好棒的留言板功能~~', '2010-03-24 00:00:00', NULL, NULL, '127.0.0.1'),
(4, '測試標題4', '路人丁', 'face3.gif', NULL, '可以教我如何製作嗎?', '2010-03-24 00:00:00', '很簡單，只要使用Dreamweaver就可以輕鬆製作~~', '2010-03-24 00:00:00', '127.0.0.1');

-- --------------------------------------------------------

--
-- 表的結構 `collection`
--

CREATE TABLE IF NOT EXISTS `collection` (
`cID` int(2) unsigned NOT NULL,
  `cPic` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `cHead` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 轉存資料表中的資料 `collection`
--

INSERT INTO `collection` (`cID`, `cPic`, `cHead`) VALUES
(1, 'a1.png', '我的作品1'),
(2, 'a2.png', '我的作品2'),
(3, 'a3.png', '我的作品3'),
(4, 'a4.png', '我的作品4\r\n');

-- --------------------------------------------------------

--
-- 表的結構 `intro`
--

CREATE TABLE IF NOT EXISTS `intro` (
`iID` int(2) unsigned NOT NULL,
  `iPic` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `iHead` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `iScr` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- 轉存資料表中的資料 `intro`
--

INSERT INTO `intro` (`iID`, `iPic`, `iHead`, `iScr`) VALUES
(1, 'myPic.jpg', '我很好', '爸爸呢');

-- --------------------------------------------------------

--
-- 表的結構 `students`
--

CREATE TABLE IF NOT EXISTS `students` (
`cID` tinyint(2) unsigned zerofill NOT NULL,
  `cName` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `cPic` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `cSex` enum('F','M') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'F',
  `cBirthday` date NOT NULL,
  `cEmail` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cPhone` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cAddr` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 轉存資料表中的資料 `students`
--

INSERT INTO `students` (`cID`, `cName`, `cPic`, `cSex`, `cBirthday`, `cEmail`, `cPhone`, `cAddr`) VALUES
(01, '簡奉君', 'face1.gif', 'F', '1987-04-04', 'elven@superstar.com', '0922988876', '台北市濟洲北路12號'),
(02, '黃靖輪', 'face1.gif', 'M', '1987-07-01', 'jinglun@superstar.com', '0918181111', '台北市敦化南路93號5樓'),
(03, '潘四敬', 'face1.gif', 'M', '1987-08-11', 'sugie@superstar.com', '0914530768', '台北市中央路201號7樓'),
(04, '賴勝恩', 'face1.gif', 'M', '1984-06-20', 'shane@superstar.com', '0946820035', '台北市建國路177號6樓'),
(05, '黎楚寧', 'face1.gif', 'F', '1988-02-15', 'ivy@superstar.com', '0920981230', '台北市忠孝東路520號6樓'),
(06, '蔡中穎', 'face1.gif', 'M', '1987-05-05', 'zhong@superstar.com', '0951983366', '台北市三民路1巷10號'),
(07, '徐佳螢', 'face1.gif', 'F', '1985-08-30', 'lala@superstar.com', '0918123456', '台北市仁愛路100號'),
(08, '林雨媗', 'face1.gif', 'F', '1986-12-10', 'crystal@superstar.com', '0907408965', '台北市民族路204號'),
(09, '林心儀', 'face1.gif', 'F', '1988-12-01', 'peggy@superstar.com', '0916456723', '台北市建國北路10號'),
(10, '王燕博', 'face1.gif', 'M', '1993-08-10', 'albert@superstar.com', '0918976588', '台北市北環路2巷80號');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `board`
--
ALTER TABLE `board`
 ADD PRIMARY KEY (`board_id`);

--
-- Indexes for table `collection`
--
ALTER TABLE `collection`
 ADD PRIMARY KEY (`cID`);

--
-- Indexes for table `intro`
--
ALTER TABLE `intro`
 ADD PRIMARY KEY (`iID`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
 ADD PRIMARY KEY (`cID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `board`
--
ALTER TABLE `board`
MODIFY `board_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `collection`
--
ALTER TABLE `collection`
MODIFY `cID` int(2) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `intro`
--
ALTER TABLE `intro`
MODIFY `iID` int(2) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
MODIFY `cID` tinyint(2) unsigned zerofill NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
