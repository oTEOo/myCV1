-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2021 at 02:57 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mycv`
--

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id_edu` int(11) NOT NULL,
  `user_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `education` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edu_description` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edu_image` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id_edu`, `user_name`, `education`, `edu_description`, `edu_image`) VALUES
(1, 'taehee1510', 'Thuy Loi University', 'Trường đại học Thủy lợi là một môi trường lý tưởng phát huy toàn bộ năng lực và trí tuệ của mình cho sự nghiệp đào tạo và phát triển, cung cấp những kiến thức cần thiết để sinh viên học tập và phát triển.', 'edu1.png'),
(2, 'taehee1510', 'mindX', 'Nơi đầu tiên có lộ trình học dài hạn bảo trợ việc làm tại Việt Nam và Quốc tế, dành cho mọi độ tuổi từ cấp 1 tới sinh viên và người đi làm ...', 'edu2.png'),
(4, 'taehee1510', 'aptech', 'FPT Aptech được thành lập vào 1999, là hệ thống đào tạo lập trình viên quốc tế đầu tiên và lâu đời nhất tại Việt Nam. Với 22 năm kinh nghiệm đào tạo Công Nghệ Thông Tin (CNTT) nói chung và lập trình nói riêng, FPT Aptech đã có hơn 20,000 sinh viên tốt nghiệp, đã và đang công tác tại nhiều công ty phần mềm lớn trong và ngoài nước. Đến nay FPT Aptech vẫn luôn là đơn vị tiên phong trong lĩnh vực đào tạo CNTT và là sự lựa chọn học tập số 1 của rất nhiều các bạn trẻ mong muốn làm việc trong lĩnh vực CNTT.', 'edu3.png');

-- --------------------------------------------------------

--
-- Table structure for table `expertise`
--

CREATE TABLE `expertise` (
  `id_exp` int(11) NOT NULL,
  `user_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expertise_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exp_description` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exp_image` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expertise`
--

INSERT INTO `expertise` (`id_exp`, `user_name`, `expertise_name`, `exp_description`, `exp_image`) VALUES
(1, 'taehee1510', 'Web Designing', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet ipsa temporibus voluptate delectus doloribus, tempore rem maiores dignissimos, ipsum facilis nobis, soluta totam quo quisquam! Totam quasi iste recusandae a!\r\n', 'exp1.png'),
(2, 'taehee1510', 'Digital Marketing', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet ipsa temporibus voluptate delectus doloribus, tempore rem maiores dignissimos, ipsum facilis nobis, soluta totam quo quisquam! Totam quasi iste recusandae a!\r\n', 'exp2.png'),
(3, 'taehee1510', 'Graphics Designing', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet ipsa temporibus voluptate delectus doloribus, tempore rem maiores dignissimos, ipsum facilis nobis, soluta totam quo quisquam! Totam quasi iste recusandae a!\r\n', 'exp3.png');

-- --------------------------------------------------------

--
-- Table structure for table `hobby`
--

CREATE TABLE `hobby` (
  `id` int(11) NOT NULL,
  `user_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hobby` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hob_image` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hobby`
--

INSERT INTO `hobby` (`id`, `user_name`, `hobby`, `hob_image`) VALUES
(2, 'taehee1510', 'video games', 'hobby1.png'),
(3, 'taehee1510', 'reading', 'hobby2.png\r\n'),
(4, 'taehee1510', 'Traveling', 'hobby3.png'),
(5, 'taehee1510', 'Eating', 'hobby4.png'),
(6, 'hieu2912', 'hobby1', 'hobby1.png');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id_pro` int(11) NOT NULL,
  `user_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_image` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id_pro`, `user_name`, `project`, `pro_image`) VALUES
(1, 'taehee1510', 'project 1', 'pro1.png'),
(2, 'taehee1510', 'project 2', 'pro2.png'),
(3, 'taehee1510', 'project 3', 'pro3.png'),
(4, 'taehee1510', 'project 4', 'pro4.png'),
(5, 'taehee1510', 'project 5', 'pro5.png'),
(6, 'taehee1510', 'project 6', 'pro6.png'),
(7, 'hieu2912', 'project 1', 'pro6.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `email`, `password`) VALUES
(1, 'taehee1510', 'taehee1510@gmail.com', 'd7cbf096dcb677a7faabbec1b185a6b2'),
(2, 'hieu2912', 'hieu2912@gmail.com', 'd7cbf096dcb677a7faabbec1b185a6b2');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `phone` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_image` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_name`, `name`, `age`, `phone`, `email`, `address`, `language`, `user_image`, `about`) VALUES
('hieu2912', 'Nguyễn Văn C', 123, '123', 'avcs@gmail.com', 'asd', 'englishsadasd', '5ab39a69f38ab640833c37da3d9285d3.png', 'test thông tin 2'),
('taehee1510', 'Nguyễn Trung Hiếu', 20, '0769650015', 'hieu2000CBG@gmail.com', 'Bac Giang city, Viet Nam', 'Vietnamese, English, Japanese', 'user.png', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem, molestiae error. Nam, voluptas dolore molestiae soluta officia vel architecto. Quos, perferendis sit? Qui, ad quas corporis saepe fugiat incidunt culpa.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id_edu`),
  ADD KEY `user_name` (`user_name`);

--
-- Indexes for table `expertise`
--
ALTER TABLE `expertise`
  ADD PRIMARY KEY (`id_exp`),
  ADD KEY `user_name` (`user_name`);

--
-- Indexes for table `hobby`
--
ALTER TABLE `hobby`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_name` (`user_name`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id_pro`),
  ADD KEY `user_name` (`user_name`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_name` (`user_name`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_name`),
  ADD KEY `user_name` (`user_name`),
  ADD KEY `user_name_2` (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id_edu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `expertise`
--
ALTER TABLE `expertise`
  MODIFY `id_exp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hobby`
--
ALTER TABLE `hobby`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id_pro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `education`
--
ALTER TABLE `education`
  ADD CONSTRAINT `education_ibfk_1` FOREIGN KEY (`user_name`) REFERENCES `user_info` (`user_name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `expertise`
--
ALTER TABLE `expertise`
  ADD CONSTRAINT `expertise_ibfk_1` FOREIGN KEY (`user_name`) REFERENCES `user_info` (`user_name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hobby`
--
ALTER TABLE `hobby`
  ADD CONSTRAINT `hobby_ibfk_1` FOREIGN KEY (`user_name`) REFERENCES `user_info` (`user_name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`user_name`) REFERENCES `user_info` (`user_name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_info`
--
ALTER TABLE `user_info`
  ADD CONSTRAINT `user_info_ibfk_1` FOREIGN KEY (`user_name`) REFERENCES `user` (`user_name`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
