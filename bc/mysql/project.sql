-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- 主機: localhost
-- 產生時間： 2017-06-21 13:40:43
-- 伺服器版本: 5.7.17-log
-- PHP 版本： 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `project`
--
CREATE DATABASE IF NOT EXISTS `project` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `project`;

-- --------------------------------------------------------

--
-- 資料表結構 `about`
--

CREATE TABLE `about` (
  `about` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `about`
--

INSERT INTO `about` (`about`, `datetime`) VALUES
('臺灣南方最繁華的國際城市─『高雄市』，為2009世界運動會主辦城市，因受海洋氣候調節，全年陽光普照、氣候宜人，有獨特的「海洋首都」特性。近年來大力推展觀光事業，已成為全臺最美麗的城市之一。\r\n\r\n高雄除了愛河、壽山、西子灣、蓮池潭、旗津、左營舊城等知名景點外，融合了福佬人、客家人、平埔族、鄒族、魯凱族、布農族、排灣族、以及眷村文化，是個 『山、海、河港、人文、古跡』的城市。來到高雄，您不僅可以體驗自然生態、品嘗珍饈佳饌，還能欣賞客家美濃紙傘、內門宋江陣、大樹佛光山…等多元的民族文化，更別提擁有全臺最大的購物中心，及著名的觀光夜市，可說是全部旅遊元素一應俱全，實在值得您深度造訪。\r\n\r\n高雄人的熱情，就像南方和煦的陽光。誠摯的歡迎大家到高雄作客！', '2017-06-21 17:15:23');

-- --------------------------------------------------------

--
-- 資料表結構 `area`
--

CREATE TABLE `area` (
  `id` int(11) NOT NULL,
  `placename` char(100) COLLATE utf8_unicode_ci NOT NULL,
  `viewpoint` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `pic` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `posted` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `message` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `reply` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(36) COLLATE utf8_unicode_ci NOT NULL,
  `site` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `WebSite` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `datetimes` datetime NOT NULL,
  `replydatetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `area`
--

INSERT INTO `area` (`id`, `placename`, `viewpoint`, `pic`, `posted`, `message`, `reply`, `email`, `site`, `WebSite`, `datetimes`, `replydatetime`) VALUES
(2, '苓雅區', '85大樓', 'bc/view/place/images/1.jpg', '蘇湧盛', '這地方好漂亮~', '你喜歡就好', 'd7339803@gmail.com', '', '../../../../project/areas.php?id=39&viewpoint=85大樓&place_name=苓雅區', '2016-12-05 02:01:16', '2016-12-05 04:56:58'),
(3, '鳥松區', '澄清湖', 'bc/view/place/images/7.jpg', '蘇湧盛', 'sss', '', 'd7339803@gmail.com', '', '../../../../project/areas.php?id=40&viewpoint=澄清湖&place_name=鳥松區', '2016-12-07 10:00:01', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- 資料表結構 `carousel`
--

CREATE TABLE `carousel` (
  `id` char(100) CHARACTER SET latin1 NOT NULL,
  `place` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `name` char(100) COLLATE utf8_unicode_ci NOT NULL,
  `path` char(100) COLLATE utf8_unicode_ci NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `carousel`
--

INSERT INTO `carousel` (`id`, `place`, `name`, `path`, `datetime`) VALUES
('0', '85大樓', '1.jpg', 'about/carousel/images/', '2017-06-20 21:47:07'),
('1', '高雄圖書總館', '6.jpg', 'about/carousel/images/', '2016-11-21 15:11:55'),
('2', '蓮池潭', '2.jpg', 'about/carousel/images/', '2016-11-21 15:12:05'),
('3', '美麗島', '3.jpg', 'about/carousel/images/', '2016-11-21 15:12:10'),
('4', '愛河', '4.jpg', 'about/carousel/images/', '2016-11-21 15:12:17'),
('5', '真愛碼頭', '5.jpg', 'about/carousel/images/', '2016-11-21 15:12:27');

-- --------------------------------------------------------

--
-- 資料表結構 `favorite`
--

CREATE TABLE `favorite` (
  `Account` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `place` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `PicName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `PicPath` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `WebSite` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `forum`
--

CREATE TABLE `forum` (
  `id` int(100) NOT NULL,
  `theme` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `posted` varchar(36) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `message` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `reply` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `acccount` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `account` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(36) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `level` enum('admin','member','','') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'member',
  `datetime` datetime NOT NULL,
  `jointime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `member`
--

INSERT INTO `member` (`id`, `account`, `password`, `email`, `name`, `level`, `datetime`, `jointime`) VALUES
(1, 'admin', 'admin', '', '', 'admin', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'aaaaa', 'aaaaa', 'd7339803@gmail.com', '蘇湧盛', 'member', '2017-06-21 15:44:08', '0000-00-00 00:00:00'),
(12, 'bbbb', 'bbbbb', 'aa@dc.dom', 'a', 'member', '2017-06-21 15:57:03', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- 資料表結構 `place`
--

CREATE TABLE `place` (
  `id` int(11) NOT NULL,
  `place` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `Introduction` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `name` char(100) COLLATE utf8_unicode_ci NOT NULL,
  `path` char(100) COLLATE utf8_unicode_ci NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `place`
--

INSERT INTO `place` (`id`, `place`, `Introduction`, `name`, `path`, `datetime`) VALUES
(38, '苓雅區', '', '1.jpg', 'about/place/images/', '2016-11-21 17:05:03'),
(39, '鳥松區', '', '7.jpg', 'about/place/images/', '2016-11-28 02:48:29');

-- --------------------------------------------------------

--
-- 資料表結構 `places`
--

CREATE TABLE `places` (
  `id` int(11) NOT NULL,
  `place` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `viewpoint` char(100) COLLATE utf8_unicode_ci NOT NULL,
  `attractions` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `arrival` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `name` char(100) COLLATE utf8_unicode_ci NOT NULL,
  `path` char(100) COLLATE utf8_unicode_ci NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `places`
--

INSERT INTO `places` (`id`, `place`, `viewpoint`, `attractions`, `arrival`, `name`, `path`, `datetime`) VALUES
(48, '苓雅區', '85大樓', '高雄85大樓位於高雄市苓雅區東側為自強路，南側為新光路，北側為三多路，西邊只隔半條街與成功路相毗鄰，與高雄港、高雄市小港機場、高雄市火車站和新光碼頭距離相近，又稱東帝士85國際廣場或東帝士建臺大樓，於西元1997年完工、由建築師李祖原設計，是南台灣最高的摩天大樓、全台灣第2高樓，目前是世界第13高的摩天大樓。', '★ 搭乘大眾運輸：1、捷運：(1)、搭乘捷運紅線至R8三多商圈站，出2號出口往新光路15:40 2017/6/21方向步行約8分鐘即可抵達。', '1.jpg', 'view/place/images/', '2017-06-21 17:21:27'),
(49, '鳥松區', '澄清湖', '澄清湖原名「大埤」，係曹公圳之一支流，初為調節農田灌溉之用。至日本據台末期，為因應軍事及重工業生產用水需要，乃於民國29年開始利用曹公圳，將原水引儲湖內，並增建供水設備。 本省光復之後，於民國36年奉省令成立「高雄工業給水工務所」，開始整修設備，恢復供水，惟大部分土地被附近居民佔用濫墾，樹木多被砍伐，大量泥沙淤積，每日出水量不足1萬公噸，僅維持聯勤兵工廠，台灣鋁廠及台肥等工業用水。', '自行開車：高雄交流道下，大順路轉右，左轉澄清路，即可抵達澄清湖。', '2.jpg', 'view/place/images/', '2017-06-21 17:23:54');

-- --------------------------------------------------------

--
-- 資料表結構 `slider`
--

CREATE TABLE `slider` (
  `id` char(100) CHARACTER SET latin1 NOT NULL,
  `name` char(100) COLLATE utf8_unicode_ci NOT NULL,
  `path` char(100) COLLATE utf8_unicode_ci NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `slider`
--

INSERT INTO `slider` (`id`, `name`, `path`, `datetime`) VALUES
('0', '1.jpg', 'index/slider/images/', '2017-06-20 21:55:03'),
('1', '3.jpg', 'index/slider/images/', '2017-06-20 21:55:03'),
('2', '4.jpg', 'index/slider/images/', '2017-06-20 21:55:03'),
('3', '5.jpg', 'index/slider/images/', '2017-06-20 21:55:04'),
('4', '6.jpg', 'index/slider/images/', '2017-06-20 21:55:04'),
('5', '8.jpg', 'index/slider/images/', '2017-06-20 21:55:04');

-- --------------------------------------------------------

--
-- 資料表結構 `top`
--

CREATE TABLE `top` (
  `id` char(100) CHARACTER SET latin1 NOT NULL,
  `place` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `name` char(100) COLLATE utf8_unicode_ci NOT NULL,
  `path` char(100) COLLATE utf8_unicode_ci NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `top`
--

INSERT INTO `top` (`id`, `place`, `name`, `path`, `datetime`) VALUES
('0', '85大樓夜景', '1.jpg', 'index/top6/images/', '2017-06-20 21:57:09'),
('1', '愛河夜景', '4.jpg', 'index/top6/images/', '2017-06-20 21:57:21'),
('2', '真愛碼頭', '5.jpg', 'index/top6/images/', '2017-06-20 21:57:27'),
('3', '圖書總館', '6.jpg', 'index/top6/images/', '2017-06-20 21:57:37'),
('4', '彩虹教堂', '8.jpg', 'index/top6/images/', '2017-06-20 21:57:50'),
('5', '駁二', '9.jpg', 'index/top6/images/', '2017-06-20 21:57:55');

-- --------------------------------------------------------

--
-- 資料表結構 `view`
--

CREATE TABLE `view` (
  `id` int(11) NOT NULL,
  `viewpoint` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `picname` char(100) COLLATE utf8_unicode_ci NOT NULL,
  `path` char(100) COLLATE utf8_unicode_ci NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `view`
--

INSERT INTO `view` (`id`, `viewpoint`, `picname`, `path`, `datetime`) VALUES
(0, '高雄85大樓', '1.jpg', 'view/view/images/', '2016-11-25 14:26:00'),
(1, '高雄蓮池潭', '2.jpg', 'view/view/images/', '2016-11-24 09:58:47'),
(2, '美麗島', '3.jpg', 'view/view/images/', '2016-11-25 14:26:09'),
(3, '高雄愛河', '4.jpg', 'view/view/images/', '2016-11-25 14:26:17'),
(4, '真愛碼頭', '5.jpg', 'view/view/images/', '2016-11-25 14:26:36'),
(5, '高雄圖書總館', '6.jpg', 'view/view/images/', '2016-11-25 14:26:45'),
(6, '澄清湖', '7.jpg', 'view/view/images/', '2016-11-22 16:30:23'),
(7, '彩虹', '8.jpg', 'view/view/images/', '2016-12-05 01:59:13'),
(8, '駁二', '9.jpg', 'view/view/images/', '2016-12-05 02:00:05');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `favorite`
--
ALTER TABLE `favorite`
  ADD KEY `account` (`Account`);

--
-- 資料表索引 `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`id`),
  ADD KEY `login_acccount` (`acccount`);

--
-- 資料表索引 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`),
  ADD KEY `account` (`account`),
  ADD KEY `account_2` (`account`);

--
-- 資料表索引 `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`id`),
  ADD KEY `place` (`place`);

--
-- 資料表索引 `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`id`),
  ADD KEY `place` (`place`);

--
-- 資料表索引 `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `top`
--
ALTER TABLE `top`
  ADD PRIMARY KEY (`id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `area`
--
ALTER TABLE `area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- 使用資料表 AUTO_INCREMENT `forum`
--
ALTER TABLE `forum`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- 使用資料表 AUTO_INCREMENT `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- 使用資料表 AUTO_INCREMENT `place`
--
ALTER TABLE `place`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
--
-- 使用資料表 AUTO_INCREMENT `places`
--
ALTER TABLE `places`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- 已匯出資料表的限制(Constraint)
--

--
-- 資料表的 Constraints `favorite`
--
ALTER TABLE `favorite`
  ADD CONSTRAINT `account` FOREIGN KEY (`Account`) REFERENCES `member` (`account`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的 Constraints `forum`
--
ALTER TABLE `forum`
  ADD CONSTRAINT `login_acccount` FOREIGN KEY (`acccount`) REFERENCES `member` (`account`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的 Constraints `places`
--
ALTER TABLE `places`
  ADD CONSTRAINT `place` FOREIGN KEY (`place`) REFERENCES `place` (`place`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
