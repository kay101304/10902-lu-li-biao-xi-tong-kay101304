-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-07-13 02:26:40
-- 伺服器版本： 10.4.13-MariaDB
-- PHP 版本： 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `resume`
--

-- --------------------------------------------------------

--
-- 資料表結構 `exp`
--

CREATE TABLE `exp` (
  `id` int(10) NOT NULL,
  `job` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tit` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdate` date NOT NULL,
  `edate` date NOT NULL,
  `exp` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `exp`
--

INSERT INTO `exp` (`id`, `job`, `tit`, `sdate`, `edate`, `exp`, `sh`) VALUES
(1, '泰山職訓', '學員', '2020-03-16', '2020-08-28', '學習程式語言、資料庫及電腦繪圖', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `hp`
--

CREATE TABLE `hp` (
  `id` int(10) UNSIGNED NOT NULL,
  `zone` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tit` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `hp`
--

INSERT INTO `hp` (`id`, `zone`, `tit`, `sh`) VALUES
(1, '桃園區', 'PHP程式設計師', 1),
(2, '桃園區', '後端工程師', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `intro`
--

CREATE TABLE `intro` (
  `id` int(10) NOT NULL,
  `intro` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `intro`
--

INSERT INTO `intro` (`id`, `intro`, `sh`) VALUES
(1, '目前正在努力學習程式語言，目標是轉職成為後端程式設計師。<br>並持續加強精進程式語言能力。', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `login`
--

CREATE TABLE `login` (
  `id` int(10) UNSIGNED NOT NULL,
  `acc` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pw` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `login`
--

INSERT INTO `login` (`id`, `acc`, `pw`) VALUES
(1, 'kk', '13');

-- --------------------------------------------------------

--
-- 資料表結構 `por`
--

CREATE TABLE `por` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fname` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exp` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `por`
--

INSERT INTO `por` (`id`, `img`, `type`, `fname`, `exp`, `url`, `sh`) VALUES
(1, 'BROCKEN.jpg', 'PS', 'BROCKEN', '破碎效果', 'http://220.128.133.15/s1090217/img/PS/BROCKEN.jpg', 1),
(2, 'Pamphlet.jpg', 'PS', 'Pamphlet', '旅遊文宣', 'http://220.128.133.15/s1090217/img/PS/Pamphlet.jpg', 1),
(3, 'Wine labels.jpg', 'PS', 'Wine labels', '酒標文宣', 'http://220.128.133.15/s1090217/img/PS/Wine%20labels.jpg', 1),
(4, 'koinobori.jpg', 'AI', 'koinobori', '鯉魚旗', 'http://220.128.133.15/s1090217/img/AI/koinobori.jpg', 1),
(5, 'fox.jpg', 'AI', 'fox', '狐狸漸層', 'http://220.128.133.15/s1090217/img/AI/fox.jpg', 1),
(6, 'bat.jpg', 'AI', 'bat', '蝙蝠漸層', 'http://220.128.133.15/s1090217/img/AI/bat.jpg', 1),
(8, 'oil_logo.jpg', 'AI', 'Oil_logo', '橄欖油 LOGO', 'http://220.128.133.15/s1090217/img/AI/oil_logo.jpg', 1),
(9, 'logo01.jpg', 'AI', 'logo01', '英文名字LOGO黑底反光效果', 'http://220.128.133.15/s1090217/img/AI/logo01.jpg', 1),
(10, 'logo02_1.jpg', 'AI', 'logo02_1', '英文名字LOGO燙金效果', 'http://220.128.133.15/s1090217/img/AI/logo02_1.jpg', 1),
(11, 'logo02_2.jpg', 'AI', 'logo02_2', '英文名字LOGO燙銀效果', 'http://220.128.133.15/s1090217/img/AI/logo02_2.jpg', 1),
(12, 'logo03.jpg', 'AI', 'logo03', '英文名字LOGO壓痕效果', 'http://220.128.133.15/s1090217/img/AI/logo03.jpg', 1),
(13, 'VI01.jpg', 'AI', 'VI01', '英文名字LOGO VI設計', 'http://220.128.133.15/s1090217/img/AI/VI01.jpg', 1),
(14, 'Calander.png', 'PHP', 'Calendar', '萬年曆', 'http://220.128.133.15/s1090217/img/PHP/Calander.png', 1),
(15, 'Invoice.png', 'PHP', 'Invoice', '發票對獎系統', 'http://220.128.133.15/s1090217/img/PHP/Invoice.png', 1),
(16, 'Gopher game.png', 'JS', 'Gopher game', '打地鼠小遊戲', 'http://220.128.133.15/s1090217/img/JS/Gopher%20game.png', 1),
(17, 'AnaloGclock.png', 'JS', 'AnalogClock', '類比時鐘', 'http://220.128.133.15/s1090217/img/JS/AnaloGclock.png', 1),
(18, 'StoryGame.png', 'JS', 'StoryGame', '以SWAL製作的2選1小遊戲', 'http://220.128.133.15/s1090217/JS/StoryGame/', 1),
(19, 'CD.png', 'CSS', 'CD', '以CSS製作專輯介紹', 'https://codepen.io/kay101304/full/LYVKwQw', 1),
(20, 'Animation.png', 'CSS', 'Animation', 'CSS Animation特效', 'https://codepen.io/kay101304/full/JjYKaRz', 1),
(21, 'hotel.png', 'BS', 'Hotel', 'BS hotel RWD web design', 'http://220.128.133.15/s1090217/BS/hotel/', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `profile`
--

CREATE TABLE `profile` (
  `id` int(10) NOT NULL,
  `name` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `interest` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sch` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dep` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `yd_s` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `yd_e` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `profile`
--

INSERT INTO `profile` (`id`, `name`, `birthday`, `interest`, `sch`, `dep`, `yd_s`, `yd_e`, `mail`) VALUES
(1, '楊育芃', '2020-10-13', '聽音樂．看動漫．學習程式語言', '健行科技大學', '資訊管理系', '2013-03', '2017-06', 'kay@gmail.com');

-- --------------------------------------------------------

--
-- 資料表結構 `skill`
--

CREATE TABLE `skill` (
  `id` int(10) UNSIGNED NOT NULL,
  `sk_name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `skill`
--

INSERT INTO `skill` (`id`, `sk_name`, `sh`) VALUES
(1, 'PHP', 1),
(2, 'JAVASCRIPT', 1),
(3, 'CSS', 1),
(4, 'HTML', 1),
(5, 'MySQL', 1),
(6, 'PhotoShop', 1),
(7, 'Illustrator', 1),
(8, 'Word', 1),
(9, 'Excel', 1),
(10, 'PowerPoint', 1);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `exp`
--
ALTER TABLE `exp`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `hp`
--
ALTER TABLE `hp`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `intro`
--
ALTER TABLE `intro`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `por`
--
ALTER TABLE `por`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `exp`
--
ALTER TABLE `exp`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `hp`
--
ALTER TABLE `hp`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `intro`
--
ALTER TABLE `intro`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `por`
--
ALTER TABLE `por`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `skill`
--
ALTER TABLE `skill`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
