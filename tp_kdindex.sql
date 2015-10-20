-- phpMyAdmin SQL Dump
-- version 4.4.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2015-09-18 11:22:16
-- 服务器版本： 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tp_kdindex`
--

-- --------------------------------------------------------

--
-- 表的结构 `tp_about`
--

CREATE TABLE IF NOT EXISTS `tp_about` (
  `id` int(10) NOT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '标题',
  `main` text COLLATE utf8_unicode_ci NOT NULL COMMENT '内容',
  `time` int(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='关于我们';

--
-- 转存表中的数据 `tp_about`
--

INSERT INTO `tp_about` (`id`, `title`, `main`, `time`) VALUES
(1, '关于我们', '成都文扬国际货运有限公司成立于2008年，公司经营国际快递、空运、海运综合运输服务企业。代理DHL、UPS、FedEx、TNT的最低折扣。公司优势：台湾、日本、韩国、新加坡、马来西亚、迪拜专线。公司以客户为尊，量身设计运输方案，为企业节约时间和成本，诚信经营，服务周到。 当天取件，当天上网。价格实惠，方便快捷。可走大小货、粉末、液体、食品、电池、化妆品等等均可出口。只有你想不到的，没有我们做不到的，欢迎询价！', 0);

-- --------------------------------------------------------

--
-- 表的结构 `tp_andorther`
--

CREATE TABLE IF NOT EXISTS `tp_andorther` (
  `id` int(10) NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `paixu` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='合作单位';

--
-- 转存表中的数据 `tp_andorther`
--

INSERT INTO `tp_andorther` (`id`, `name`, `link`, `paixu`) VALUES
(1, '', '', 0),
(3, '成都众淘信息技术有限公司', 'http://www.ztlele.com', 2);

-- --------------------------------------------------------

--
-- 表的结构 `tp_keyword`
--

CREATE TABLE IF NOT EXISTS `tp_keyword` (
  `id` int(10) NOT NULL,
  `description` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `keyword` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `tp_keyword`
--

INSERT INTO `tp_keyword` (`id`, `description`, `keyword`) VALUES
(1, '成都文扬国际货运有限公司', '关键字1，关键字2，快递，国际快递');

-- --------------------------------------------------------

--
-- 表的结构 `tp_lianxi`
--

CREATE TABLE IF NOT EXISTS `tp_lianxi` (
  `id` int(11) NOT NULL,
  `gongsi` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `lianxi` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `usertel` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `orther` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `tp_lianxi`
--

INSERT INTO `tp_lianxi` (`id`, `gongsi`, `lianxi`, `usertel`, `orther`) VALUES
(1, '成都文扬国际货运有限公司', '麻洪新', '15202885218', 'nav');

-- --------------------------------------------------------

--
-- 表的结构 `tp_login`
--

CREATE TABLE IF NOT EXISTS `tp_login` (
  `id` int(10) NOT NULL,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `psw` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `logintime` int(30) NOT NULL,
  `loginip` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `tp_login`
--

INSERT INTO `tp_login` (`id`, `username`, `psw`, `logintime`, `loginip`) VALUES
(1, 'admin', '123', 1442541706, '192.168.1.11');

-- --------------------------------------------------------

--
-- 表的结构 `tp_news`
--

CREATE TABLE IF NOT EXISTS `tp_news` (
  `id` int(10) NOT NULL,
  `title` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `main` text COLLATE utf8_unicode_ci NOT NULL,
  `time` int(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='新闻中心';

--
-- 转存表中的数据 `tp_news`
--



-- --------------------------------------------------------

--
-- 表的结构 `tp_num`
--

CREATE TABLE IF NOT EXISTS `tp_num` (
  `id` int(30) NOT NULL,
  `num` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '快递单号',
  `kdgs` varchar(30) COLLATE utf8_unicode_ci NOT NULL COMMENT '快递公司',
  `fuser` varchar(30) COLLATE utf8_unicode_ci NOT NULL COMMENT '发件人',
  `suser` varchar(30) COLLATE utf8_unicode_ci NOT NULL COMMENT '收件人',
  `fadd` varchar(60) COLLATE utf8_unicode_ci NOT NULL COMMENT '发件地址',
  `sadd` varchar(60) COLLATE utf8_unicode_ci NOT NULL COMMENT '收件地址',
  `ftel` varchar(30) COLLATE utf8_unicode_ci NOT NULL COMMENT '发件电话',
  `stel` varchar(30) COLLATE utf8_unicode_ci NOT NULL COMMENT '收件电话',
  `time` int(20) NOT NULL COMMENT '时间'
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='快递单';

--
-- 转存表中的数据 `tp_num`
--



--
-- 表的结构 `tp_wuliu`
--

CREATE TABLE IF NOT EXISTS `tp_wuliu` (
  `id` int(30) NOT NULL,
  `num` varchar(30) COLLATE utf8_unicode_ci NOT NULL COMMENT '单号',
  `time` int(20) NOT NULL COMMENT '时间',
  `status` int(10) NOT NULL COMMENT '状态',
  `message` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT '信息'
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='快递信息';



-- --------------------------------------------------------

--
-- 表的结构 `tp_yewu`
--

CREATE TABLE IF NOT EXISTS `tp_yewu` (
  `id` int(10) NOT NULL,
  `title` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '标题',
  `main` text COLLATE utf8_unicode_ci NOT NULL COMMENT '内容',
  `time` int(20) NOT NULL COMMENT '添加时间'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='主营业务';

--
-- 转存表中的数据 `tp_yewu`
--

INSERT INTO `tp_yewu` (`id`, `title`, `main`, `time`) VALUES
(1, '主营业务', '快递&lt;br&gt;海运&lt;br&gt;海运地区&lt;br&gt;台湾、日本、新加坡、俄罗斯', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tp_about`
--
ALTER TABLE `tp_about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tp_andorther`
--
ALTER TABLE `tp_andorther`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tp_keyword`
--
ALTER TABLE `tp_keyword`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tp_lianxi`
--
ALTER TABLE `tp_lianxi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tp_login`
--
ALTER TABLE `tp_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tp_news`
--
ALTER TABLE `tp_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tp_num`
--
ALTER TABLE `tp_num`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tp_wuliu`
--
ALTER TABLE `tp_wuliu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tp_yewu`
--
ALTER TABLE `tp_yewu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tp_about`
--
ALTER TABLE `tp_about`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tp_andorther`
--
ALTER TABLE `tp_andorther`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tp_keyword`
--
ALTER TABLE `tp_keyword`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tp_lianxi`
--
ALTER TABLE `tp_lianxi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tp_login`
--
ALTER TABLE `tp_login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tp_news`
--
ALTER TABLE `tp_news`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tp_num`
--
ALTER TABLE `tp_num`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tp_wuliu`
--
ALTER TABLE `tp_wuliu`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tp_yewu`
--
ALTER TABLE `tp_yewu`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
