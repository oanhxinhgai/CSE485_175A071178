-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 22, 2019 at 06:10 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `cate`
--

CREATE TABLE `cate` 
(
  `danhmucid` int(11) UNSIGNED NOT NULL,
  `tendanhmuc` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cate`
--

INSERT INTO `cate` (`danhmucid`, `tendanhmuc`) VALUES
(2, 'Ahihi'),
(5, 'Y Học'),
(6, 'Tuyển Dụng');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `newid` int(11) UNSIGNED NOT NULL,
  `userid` int(10) UNSIGNED NOT NULL,
  `danhmucid` int(11) UNSIGNED NOT NULL,
  `tieude` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tomtat` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `noidung` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ngaydang` datetime NOT NULL,
  `image_jpg` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`newid`, `userid`, `danhmucid`, `tieude`, `tomtat`, `noidung`, `ngaydang`, `image_jpg`) VALUES
(1, 1, 2, 'Há há há', 'Tesst', '<p>Tessst</p>\r\n', '2019-10-21 00:20:28', 'test.png'),
(2, 35, 5, 'Ahihi', '1234', '<p>123</p>\r\n', '2019-10-18 00:58:22', 'test.png'),
(14, 1, 2, 'Ahihi', 'Ahihi', '<p>Ahihihi</p>\r\n', '2019-10-18 14:08:02', 'test.png'),
(15, 1, 2, 'Ahihi', 'Ahihi', '<p>Ahihihi</p>\r\n', '2019-10-18 14:08:56', 'test.png'),
(16, 35, 5, 'Ahihi', 'ahii', '<p>ahihi</p>\r\n', '2019-10-18 14:13:15', 'test.png'),
(18, 34, 2, 'Ahihi', 'AHihih', '<p>Ahihi</p>\r\n', '2019-10-18 14:39:33', 'test.png'),
(19, 35, 5, 'Ahihi', 'aaa', '<p>aaa</p>\r\n', '2019-10-18 14:41:30', 'test.png'),
(22, 1, 5, 'Trường ĐH Nguyễn Tất Thành đạt chuẩn 4 sao của tổ chức QS Stars Anh Quốc', 'NTTU - Trải qua quá trình nghiêm túc và độc lập trong việc thu thập số liệu và đánh giá hoạt động của Trường theo bộ tiêu chuẩn QS Stars, vừa qua Tổ chức QS chính thức công nhận Trường Đại học Nguyễn Tất Thành đạt chuẩn chất lượng 4 sao. Đây là trường ngoài công lập đầu tiên của Việt Nam được tổ chức QS đánh giá đạt chuẩn 4 sao', '<p><em><strong>NTTU - Trải qua qu&aacute; tr&igrave;nh nghi&ecirc;m t&uacute;c v&agrave; độc lập trong việc thu thập số liệu v&agrave; đ&aacute;nh gi&aacute; hoạt động của Trường theo bộ ti&ecirc;u chuẩn QS Stars, vừa qua Tổ chức QS ch&iacute;nh thức c&ocirc;ng nhận Trường Đại học Nguyễn Tất Th&agrave;nh đạt chuẩn chất lượng 4 sao. Đ&acirc;y l&agrave; trường ngo&agrave;i c&ocirc;ng lập đầu ti&ecirc;n của Việt Nam được tổ chức QS đ&aacute;nh gi&aacute; đạt chuẩn 4 sao</strong></em></p>\r\n\r\n<p><img alt=\"\" src=\"http://ntt.edu.vn/web/upload/images/3%2827%29.jpg\" /></p>\r\n\r\n<p><em>Cơ sở vật chất của Nh&agrave; trường được đ&aacute;nh gi&aacute; tối đa 5 sao</em></p>\r\n\r\n<p>Trường ĐH Nguyễn Tất Th&agrave;nh được đ&aacute;nh gi&aacute; theo 8 ti&ecirc;u chuẩn, bao gồm: Teaching/Chất lượng giảng dạy; Employability/Việc l&agrave;m của sinh vi&ecirc;n; Internationalization/Quốc tế h&oacute;a; Academic Development/Ph&aacute;t triển học thuật; Program Strength/Chất lượng chương tr&igrave;nh đ&agrave;o tạo; Facilities/Cơ sở vật chất; Social Responsibility/Tr&aacute;ch nhiệm x&atilde; hội; Inclusiveness/Ph&aacute;t triển to&agrave;n diện. Trong đ&oacute;, ti&ecirc;u chuẩn Quốc tế h&oacute;a v&agrave; ti&ecirc;u chuẩn Chất lượng Chương tr&igrave;nh đ&agrave;o tạo đạt 3 sao. Ti&ecirc;u chuẩn Chất lượng giảng dạy v&agrave; ti&ecirc;u chuẩn Tr&aacute;ch nhiệm x&atilde; hội được 4 sao. Đặc biệt, c&oacute; 4/8 ti&ecirc;u chuẩn đạt 5 sao l&agrave; ti&ecirc;u chuẩn Việc l&agrave;m của sinh vi&ecirc;n, ti&ecirc;u chuẩn Ph&aacute;t triển học thuật, ti&ecirc;u chuẩn Cơ sở vật chất v&agrave; ti&ecirc;u chuẩn Ph&aacute;t triển to&agrave;n diện của Nh&agrave; trường. So với kết quả đạt được năm 2016, Trường Đại học Nguyễn Tất Th&agrave;nh đ&atilde; thể hiện sự ph&aacute;t triển vượt bậc v&agrave; c&oacute; nhiều cải tiến nổi bật sau lần t&aacute;i đ&aacute;nh gi&aacute; theo ti&ecirc;u chuẩn QS Stars năm 2019.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"http://ntt.edu.vn/web/upload/images/Giay%20chung%20nhan%204%20sao%20QS%20Star_NTTU_FINAL%20-web%282%29.jpg\" /></p>\r\n\r\n<p><em>Giấy chứng nhận đạt chuẩn 4 sao của trường ĐH Nguyễn Tất Th&agrave;nh&nbsp;</em></p>\r\n\r\n<p>Hệ thống gắn sao QS Stars được ph&aacute;t triển từ Hệ thống xếp hạng QS World University Rankings của Tổ chức QS. Hệ thống n&agrave;y đ&aacute;nh gi&aacute; c&aacute;c trường đại học dựa tr&ecirc;n nhiều nh&oacute;m ti&ecirc;u chuẩn xuy&ecirc;n suốt c&aacute;c hoạt động ch&iacute;nh của trường v&agrave; được so s&aacute;nh với c&aacute;c ti&ecirc;u chuẩn quốc tế đ&atilde; được thiết lập trước đ&oacute;. Phạm vi c&aacute;c ti&ecirc;u ch&iacute; rộng hơn những bảng xếp hạng thế giới, QS Stars thắp s&aacute;ng sự xuất sắc v&agrave; t&iacute;nh đa dạng của Trường được gắn sao.</p>\r\n\r\n<p>Để đạt chuẩn 4 sao từ tổ chức kiểm định uy t&iacute;n n&agrave;y, Trường ĐH Nguyễn Tất Th&agrave;nh li&ecirc;n tục đảm bảo chất lượng b&ecirc;n trong, ph&aacute;t triển đội ngũ, cải tiến chương tr&igrave;nh đ&agrave;o tạo, mở rộng hợp t&aacute;c v&agrave; trao đổi quốc tế, đẩy mạnh nghi&ecirc;n cứu khoa học v&agrave; ho&agrave;n thiện cơ sở vật chất. Cụ thể l&agrave; trước đ&oacute; trường đ&atilde; tham gia đ&aacute;nh gi&aacute; chất lượng chương tr&igrave;nh đ&agrave;o tạo theo chuẩn trong nước v&agrave; khu vực.</p>\r\n\r\n<p>Th&aacute;ng 9/2019, 4 ng&agrave;nh đ&agrave;o tạo của Trường gồm: C&ocirc;ng nghệ Th&ocirc;ng tin, Quản trị Kinh doanh, T&agrave;i ch&iacute;nh &ndash; Kế to&aacute;n v&agrave; Ng&ocirc;n ngữ Anh ho&agrave;n th&agrave;nh đ&aacute;nh gi&aacute; theo ti&ecirc;u chuẩn chất lượng của AUN &ndash; QA. Sau đ&oacute;, th&aacute;ng 10/2019, Trường đ&atilde; đạt kiểm định 2 chương tr&igrave;nh đ&agrave;o tạo tr&igrave;nh độ đại học ng&agrave;nh C&ocirc;ng nghệ Kỹ thuật Điện &ndash; Điện tử v&agrave; ng&agrave;nh Quản trị kh&aacute;ch sạn theo Th&ocirc;ng tư 04 của Bộ Gi&aacute;o dục v&agrave; Đ&agrave;o tạo.</p>\r\n\r\n<p>Ngo&agrave;i tham gia kiểm định c&aacute;c chương tr&igrave;nh đ&agrave;o tạo, Trường ĐH Nguyễn Tất Th&agrave;nh c&ograve;n đẩy mạnh c&ocirc;ng t&aacute;c nghi&ecirc;n cứu khoa học. Đến nay, đ&atilde; c&oacute; hơn 25 đề t&agrave;i nghi&ecirc;n cứu cấp nh&agrave; nước, 32 đề t&agrave;i cấp bộ, 22 đề t&agrave;i cấp Sở, 4 đề t&agrave;i hợp t&aacute;c quốc tế, hơn 500 đề t&agrave;i nghi&ecirc;n cứu cấp trường được thực hiện. B&ecirc;n cạnh đ&oacute;, Trường cũng c&oacute; 670 đề t&agrave;i nghi&ecirc;n cứu đăng tr&ecirc;n tạp ch&iacute; ISI/ SCOPUS, 855 đề t&agrave;i đăng tr&ecirc;n c&aacute;c tạp ch&iacute; trong nước v&agrave; quốc tế.</p>\r\n\r\n<p><img alt=\"\" src=\"http://ntt.edu.vn/web/upload/images/bang-1566006072772209426715%20%281%29%281%29.jpg\" /></p>\r\n\r\n<p><em>Th&agrave;nh t&iacute;ch c&ocirc;ng bố ISI 7 th&aacute;ng đầu năm 2019 của c&aacute;c cơ sở đ&agrave;o tạo v&agrave; nghi&ecirc;n cứu h&agrave;ng đầu khối ASEAN (dữ liệu WoS 01/8/2019)</em></p>\r\n\r\n<p>Nh&agrave; trường cũng đẩy mạnh hợp t&aacute;c quốc tế với hơn 150 trường đại học, học viện của gần 20 quốc gia tr&ecirc;n thế giới như Anh, &Uacute;c, Mỹ, Canada, Malaysia, Th&aacute;i Lan, Đ&agrave;i Loan, H&agrave;n Quốc, Singapore, Hungary, Philippines, v.v. H&agrave;ng năm, Nh&agrave; trường đ&atilde; đưa sinh vi&ecirc;n vi&ecirc;n c&aacute;c khoa sang c&aacute;c nước như Nhật, Đức, Malaysia, Israel, Trung Quốc, v.v. để thực tập nhằm thiết lập c&aacute;c mối quan hệ quốc tế tạo điều kiện cho sinh vi&ecirc;n được cập nhật những kiến thức mới về c&aacute;c ng&agrave;nh nghề đ&agrave;o tạo của c&aacute;c quốc gia đồng thời tiếp nhận sinh vi&ecirc;n quốc tế tới theo học tại Trường.</p>\r\n\r\n<p>B&ecirc;n cạnh đ&oacute;, Nh&agrave; trường cũng t&iacute;ch cực tham dự c&aacute;c hội thảo, hội nghị như: Hội nghị QS World Class lần thứ 10 tại Đ&agrave;i Loan nhằm mở rộng hợp t&aacute;c v&agrave; x&acirc;y dựng mối quan hệ với c&aacute;c trường tham gia QS; Tham dự Hội nghị QS MAPLE lần thứ 7 tại Dubai nhằm t&igrave;m hiểu cơ hội hợp t&aacute;c với c&aacute;c trường thuộc khu vực Trung Đ&ocirc;ng; Tham dự Hội nghị QS APPLE lần thứ 13 tại Đ&agrave;i Loan v&agrave; lần thứ 14 tại H&agrave;n Quốc để tiếp tục học hỏi v&agrave; mở rộng giao lưu với c&aacute;c trường trong mạng lưới QS.</p>\r\n\r\n<p>Theo đ&aacute;nh gi&aacute; của QS Stars: &ldquo;Trường đại học được đ&aacute;nh gi&aacute; 4 sao l&agrave; trường c&oacute; t&iacute;nh quốc tế cao, thể hiện qua sự xuất sắc trong c&ocirc;ng t&aacute;c nghi&ecirc;n cứu khoa học v&agrave; đ&agrave;o tạo; l&agrave; m&ocirc;i trường dạy v&agrave; học l&yacute; tưởng cho giảng vi&ecirc;n v&agrave; sinh vi&ecirc;n&rdquo;. Đ&acirc;y l&agrave; một trong những kết quả của qu&aacute; tr&igrave;nh nỗ lực x&acirc;y dựng Trường Đại học Nguyễn Tất Th&agrave;nh theo định hướng ứng dụng thực h&agrave;nh suốt 20 năm qua.&nbsp;</p>\r\n', '2019-10-18 16:55:40', 'Logo QS-04.png'),
(23, 35, 5, 'Ahih0', '123', '<p>123</p>\r\n', '2019-10-20 23:54:01', '2.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) UNSIGNED NOT NULL,
  `first_name` varchar(30) CHARACTER SET utf8 NOT NULL,
  `last_name` varchar(40) CHARACTER SET utf8 NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `password` char(60) CHARACTER SET utf8 NOT NULL,
  `phone` varchar(11) CHARACTER SET utf8 NOT NULL,
  `address` varchar(255) CHARACTER SET utf8 NOT NULL,
  `registration_date` datetime NOT NULL,
  `avatar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_level` tinyint(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `first_name`, `last_name`, `email`, `password`, `phone`, `address`, `registration_date`, `avatar`, `user_level`) VALUES
(1, 'Đạt', 'Dương', 'minicatdd7@gmail.com', '$2y$10$OZ98nxFzzIjNVF6kHto/ge03GkhuOf1K4lTOWEHbfEDtRenxTmNKW', '0986018549', 'Hoàng Mai, Hà Nội', '2019-10-01 00:00:00', NULL, 1),
(33, 'Ahihi', 'Ahihi', 'ahihi@gmail.com', '$2y$10$47Ul.aY9hPPKmlk4Yx7CTOpEs1G/MOja1yQ4M192cKtVPsbZ9DBDu', '0349110169', 'Hà Nội', '2019-10-09 23:41:50', NULL, 1),
(34, 'Nguyễn Trung', 'Kiên', 'kien121999121999@gmai.com', '$2y$10$KpJ/FCxDS884aD0drqlvnuiJGLpJn.xRElrJ/Baphk809NsW6UIx6', '0349110169', 'Hà Nội', '2019-10-11 16:09:16', NULL, 1),
(35, 'admin', 'admin', 'admin@gmail.com', '$2y$10$94Nk8FmKywxjwl7QCR7rqOk37XEK9oXqbnBn9lKjQOD0c8X5dtXOm', '123123', 'Hà Nội', '2019-10-11 16:10:05', NULL, 1),
(36, 'test', 'test', 'test@gmail.com', '$2y$10$72.XgTQJgiYmQNka9iIGWuHzk444ajcuJOpzIkZgOG7DLTizJS92K', '0349110169', 'Hà Nội', '2019-10-21 22:58:28', NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cate`
--
ALTER TABLE `cate`
  ADD PRIMARY KEY (`danhmucid`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`newid`),
  ADD KEY `ahihi` (`userid`),
  ADD KEY `ahiho` (`danhmucid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `email_2` (`email`),
  ADD UNIQUE KEY `email_3` (`email`),
  ADD UNIQUE KEY `email_5` (`email`),
  ADD KEY `email_4` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cate`
--
ALTER TABLE `cate`
  MODIFY `danhmucid` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `newid` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `ahihi` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`),
  ADD CONSTRAINT `ahiho` FOREIGN KEY (`danhmucid`) REFERENCES `cate` (`danhmucid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
