-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1:33061
-- 生成日期： 2019-12-13 11:34:47
-- 服务器版本： 10.1.37-MariaDB
-- PHP 版本： 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `mytest`
--
CREATE DATABASE IF NOT EXISTS `mytest` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `mytest`;

-- --------------------------------------------------------

--
-- 表的结构 `tb_content`
--

CREATE TABLE `tb_content` (
  `id` int(11) NOT NULL,
  `contents` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tb_content`
--

INSERT INTO `tb_content` (`id`, `contents`) VALUES
(1, 'sdfgsdg'),
(2, 'sdfvsdfvsfdvsdfb'),
(3, 'rgbsdf'),
(4, 'å•Š'),
(5, 'wAD'),
(6, 'æ’’æ—¦å®˜æ–¹vå‘');

-- --------------------------------------------------------

--
-- 表的结构 `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`, `phone`, `email`) VALUES
(0, 'admin', '1', '18218437088', '767797270@QQ.COM');

--
-- 转储表的索引
--

--
-- 表的索引 `tb_content`
--
ALTER TABLE `tb_content`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `tb_content`
--
ALTER TABLE `tb_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
