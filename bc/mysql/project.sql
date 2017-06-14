-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2017-02-23 08:00:57
-- 伺服器版本: 10.1.21-MariaDB
-- PHP 版本： 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `project`
--

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
('高雄市位於臺灣西南部東經120.15度、北緯22.31度，面積為153.6029平方公里，是臺灣第二大都市，也是台灣人口密度最高與重工業最發達的都市；而位於臺灣西南部東經120.24度、北緯22.3度，面積2792.6744平方公里的高雄縣，北鄰南投縣、東鄰嘉義縣和台南市、南鄰屏東縣、東鄰花蓮縣和台東縣，為臺灣第四大都市，在2010年12月25日五都改制後與高雄市合併，並與台北市、新北市(原台北縣)、台中市、台南市並列臺灣五大直轄市。合併後的高雄市行政區域劃分除原有的楠梓區、左營區、鼓山區、三民區、苓雅區、新興區、前金區、鹽埕區、小港區、旗津區、前鎮區之外，另新增鳳山區、岡山區、旗山區、美濃區、大寮區、茄萣區、永安區、大園區、大社區、杉林區、仁武區、田寮區、燕巢區、路竹區、阿蓮區、甲仙區、大樹區、湖內區、桃源區、鳥松區、彌陀區、那瑪夏區(原三民鄉)、梓官區、內門區、茂林區、橋頭區、六龜區、林園區等共39個行政區，為五都中最多行政區的直轄市。', '2016-10-18 02:01:04'),
('ssssss', '2016-10-18 19:47:45'),
('高雄市位於臺灣西南部東經120.15度、北緯22.31度，面積為153.6029平方公里', '2016-11-21 15:10:56'),
('高雄市是中華民國的直轄市，位於臺灣本島西南部的都市，由原高雄直轄市與原高雄縣於2010年12月25日合併而來。其轄域東北至中央山脈以及玉山主峰，西南至南海上之南沙太平島、中洲島，以及東沙群島。順時針方向與臺南市、嘉義縣、南投縣、花蓮縣、臺東縣、屏東縣等縣市相鄰。面積達2,952平方公里；戶籍人口約278萬人，為台灣重要的商港及軍港乃至重工業中心。', '2016-12-05 04:37:48');

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
('0', '85大樓夜景', '1.jpg', 'about/carousel/images/', '2016-11-21 15:06:32'),
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
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `forum`
--

INSERT INTO `forum` (`id`, `theme`, `posted`, `email`, `message`, `reply`, `datetime`) VALUES
(4, '網站', '蘇湧盛', 'd7339803@gmail.com', '網站很讚哦~', '謝謝', '2016-12-05 04:56:20');

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
(2, 'ssss', 'sssss', 'sss@gmail.com', 'ssss', 'member', '2017-02-22 15:24:49', '0000-00-00 00:00:00');

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
(38, '苓雅區', '苓雅區為臺灣高雄市一市轄區，位於市內西南部，市中心中部，北臨三民區，西北連新興區、前金區，西隔愛河與鹽埕區、鼓山區為界，南接前鎮區，東鄰鳳山區，是高雄市政府四維行政中心的所在地。', '1.jpg', 'about/place/images/', '2016-11-21 17:05:03'),
(39, '鳥松區', '鳥松濕地公園位於澄清湖風景區門口東側，原本是自來水公司澄清湖淨水場的沉沙地，於1999年動工、2000年完工成為台灣第一座以人工濕地為主題的自然生態公園；鳥松濕地公園佔地約為3公頃，陸地和水路面積各占三分之一和三分之二，豐富的地形地貌孕育出許多種植物，包含約90種鳥類、250種以上的昆蟲和340種以上的植物，加上鄰近澄清湖因此是高雄是相當不錯的戶外教學和自然觀察的好場所，目前鳥松濕地公園社團法人高雄市野鳥學會所認養。', '7.jpg', 'about/place/images/', '2016-11-28 02:48:29'),
(40, 'TEST', 'TEST', '', 'about/place/images/', '2016-12-08 14:06:07');

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
(39, '苓雅區', '85大樓', '高雄85大樓位於高雄市苓雅區東側為自強路，南側為新光路，北側為三多路，西邊只隔半條街與成功路相毗鄰，與高雄港、高雄市小港機場、高雄市火車站和新光碼頭距離相近，又稱東帝士85國際廣場或東帝士建臺大樓，於西元1997年完工、由建築師李祖原設計，是南台灣最高的摩天大樓、全台灣第2高樓，目前是世界第13高的摩天大樓。', '★ 搭乘大眾運輸：1、捷運：(1)、搭乘捷運紅線至R8三多商圈站，出2號出口往新光路方向步行約8分鐘即可抵達。', '1.jpg', 'view/place/images/', '2016-12-07 13:56:28'),
(40, '鳥松區', '澄清湖', '鳥松濕地公園位於澄清湖風景區門口東側，原本是自來水公司澄清湖淨水場的沉沙地，於1999年動工、2000年完工成為台灣第一座以人工濕地為主題的自然生態公園；鳥松濕地公園佔地約為3公頃，陸地和水路面積各占三分之一和三分之二，豐富的地形地貌孕育出許多種植物，包含約90種鳥類、250種以上的昆蟲和340種以上的植物，加上鄰近澄清湖因此是高雄是相當不錯的戶外教學和自然觀察的好場所，目前鳥松濕地公園社團法人高雄市野鳥學會所認養。', '自行開車：\n\n高雄交流道下，大順路轉右，左轉澄清路，即可抵達澄清湖。', '7.jpg', 'view/place/images/', '2016-12-07 13:56:11'),
(46, '苓雅區', 'ss', 'ss', 'ss', '', '', '2016-12-10 21:56:14'),
(47, '鳥松區', 'test', 'tes', 'tes', '', '', '2016-12-11 00:07:22');

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
('0', '1.jpg', 'index/slider/images/', '2016-12-11 17:48:41'),
('1', '2.jpg', 'index/slider/images/', '2016-12-11 17:49:50'),
('2', '3.jpg', 'index/slider/images/', '2016-12-11 17:49:50'),
('3', '4.jpg', 'index/slider/images/', '2016-12-11 17:49:50'),
('4', '5.jpg', 'index/slider/images/', '2016-12-11 17:49:50'),
('5', '6.jpg', 'index/slider/images/', '2016-12-11 17:49:50');

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
('0', '', '115431.jpg', 'index/top6/images/', '2017-02-23 09:12:35'),
('1', '', '2.jpg', 'index/top6/images/', '2016-12-11 17:32:58'),
('2', '', '3.jpg', 'index/top6/images/', '2016-12-11 17:32:58'),
('3', '', '4.jpg', 'index/top6/images/', '2016-12-11 17:32:58'),
('4', '', '5.jpg', 'index/top6/images/', '2016-12-11 17:32:58'),
('5', '', '6.jpg', 'index/top6/images/', '2016-12-11 17:32:58');

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
-- 資料表索引 `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- 使用資料表 AUTO_INCREMENT `forum`
--
ALTER TABLE `forum`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- 使用資料表 AUTO_INCREMENT `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- 使用資料表 AUTO_INCREMENT `place`
--
ALTER TABLE `place`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- 使用資料表 AUTO_INCREMENT `places`
--
ALTER TABLE `places`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
