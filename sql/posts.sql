-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 15, 2020 lúc 05:27 AM
-- Phiên bản máy phục vụ: 10.4.8-MariaDB
-- Phiên bản PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `newspage`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id_post` int(11) NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `descr` text COLLATE utf8_unicode_ci NOT NULL,
  `url_thumb` text COLLATE utf8_unicode_ci NOT NULL,
  `slug` text COLLATE utf8_unicode_ci NOT NULL,
  `keywords` text COLLATE utf8_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8_unicode_ci NOT NULL,
  `cate_1_id` int(11) NOT NULL,
  `cate_2_id` int(11) NOT NULL,
  `cate_3_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `view` int(11) NOT NULL,
  `date_posted` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`id_post`, `title`, `descr`, `url_thumb`, `slug`, `keywords`, `body`, `cate_1_id`, `cate_2_id`, `cate_3_id`, `author_id`, `status`, `view`, `date_posted`) VALUES
(3, 'Nam đẹp trai', 'Không có', 'http://localhost/newspage1/upload/2020/10/13/0b7e639863a0cab7dd4a28ab57370567.gif', 'nam-dep-trai', 'Không có luôn', '&lt;p&gt;Hi hi&lt;/p&gt;', 5, 9, 10, 1, 1, 0, '2020-10-13 16:04:44'),
(5, 'hi', 'g', 'http://localhost/newspage1/upload/2020/10/13/01b949e6a344ece3164827fd091d3475.jpg', 'hi', 'f', '&lt;p&gt;&lt;a id=&quot;d&quot; name=&quot;d&quot;&gt;&lt;/a&gt;hi&lt;/p&gt;\n\n&lt;p&gt;iiiii&lt;/p&gt;', 5, 7, 8, 1, 1, 0, '2020-10-13 16:04:56');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id_post`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
