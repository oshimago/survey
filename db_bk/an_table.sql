-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- サーバのバージョン： 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `andb`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `an_table`
--

CREATE TABLE IF NOT EXISTS `an_table` (
`id` int(12) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `naiyou` text COLLATE utf8_unicode_ci,
  `indate` datetime NOT NULL,
  `age` int(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `an_table`
--

INSERT INTO `an_table` (`id`, `name`, `email`, `naiyou`, `indate`, `age`) VALUES
(1, 'テスト一郎', 'test1@test.jp', 'ちょっと暑いです。', '2030-09-22 07:28:23', 40),
(2, 'テスト二郎', 'test2@test.jp', 'メモ', '2030-09-22 16:02:47', 20),
(3, 'テスト三郎', 'test3@test.jp', 'メモ', '2030-09-22 16:06:42', 30),
(4, 'テスト四郎', 'test4@test.jp', 'メモ', '2030-09-22 16:07:48', 30),
(5, 'テスト五郎', 'test5@test.jp', 'メモ', '2030-09-22 16:07:48', 40),
(6, 'テスト六郎', 'test6@test.jp', 'メモ', '2030-09-22 16:07:48', 40),
(7, 'テスト七郎', 'test7@test.jp', 'テスト', '2030-09-22 17:14:36', 20),
(8, 'テスト八郎', 'test8@test.jp', 'テスト', '2030-09-22 17:59:31', 10),
(9, 'テスト九郎', 'test9@test.jp', 'テスト', '2030-09-22 18:13:28', 20),
(10, 'テスト十郎', 'test10@test.jp', 'テスト', '2030-09-29 05:19:42', 20),
(11, 'テスト十一郎', 'test11@test.jp', 'テスト', '2030-09-29 05:20:05', 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `an_table`
--
ALTER TABLE `an_table`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `an_table`
--
ALTER TABLE `an_table`
MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
