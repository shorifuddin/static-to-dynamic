-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2022 at 04:11 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pj1`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner_info`
--

CREATE TABLE `banner_info` (
  `banner_id` int(11) NOT NULL,
  `ban_title` varchar(250) NOT NULL,
  `ban_subtitle` text NOT NULL,
  `ban_btn1` varchar(250) NOT NULL,
  `ban_btn2` varchar(250) NOT NULL,
  `ban_url` varchar(50) NOT NULL,
  `ban_img` varchar(250) NOT NULL,
  `ban_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner_info`
--

INSERT INTO `banner_info` (`banner_id`, `ban_title`, `ban_subtitle`, `ban_btn1`, `ban_btn2`, `ban_url`, `ban_img`, `ban_active`) VALUES
(1, 'BEPS Help Finding Information Online', 'Help Finding Information Online.Every new computer that’s brought home from the store has an operating system installed onto it.', 'Read More', 'Learn More', '#', 'banner-1645461350202.jpg', 0),
(2, 'BEPS Finding Information OnlineHelp ', 'Lorem Every new computer that’s brought home from the store has an operating system installed onto it.', 'Read Me', 'Get Learn', '#', 'banner-1645461469713.jpg', 1),
(3, 'Lorem Read More ', 'Help Finding Information Online.Every new computer that’s brought home from the store has an operating system installed onto it.', 'Ok', 'Accah', '#', 'banner-1645471842113.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `con_info`
--

CREATE TABLE `con_info` (
  `con_id` int(11) NOT NULL,
  `con_name` varchar(50) NOT NULL,
  `con_email` varchar(50) NOT NULL,
  `con_phn` int(20) NOT NULL,
  `con_company` varchar(50) NOT NULL,
  `con_subj` varchar(50) NOT NULL,
  `con_mes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `con_info`
--

INSERT INTO `con_info` (`con_id`, `con_name`, `con_email`, `con_phn`, `con_company`, `con_subj`, `con_mes`) VALUES
(1, 'MD. SHORIF UDDIN', 'shorif@gmail.com', 123, 'shorif', 'MD. SHORIF UDDIN', 'MD. SHORIF UDDINMD. SHORIF UDDINMD. SHORIF UDDINMD. SHORIF UDDINMD. SHORIF UDDINMD. SHORIF UDDINMD. SHORIF UDDINMD. SHORIF UDDIN'),
(2, 'MD. SHORIF UDDIN', 'shorif@gmail.com', 123, 'shorif', 'MD. SHORIF UDDIN', 'MD. SHORIF UDDINMD. SHORIF UDDINMD. SHORIF UDDINMD. SHORIF UDDINMD. SHORIF UDDINMD. SHORIF UDDINMD. SHORIF UDDINMD. SHORIF UDDIN'),
(5, '&lt;h1&gt;hello&lt;/h1&gt;', 'shorif@gmail.com', 123, 'sagar', 'need money', 'lorem lorem, lpre'),
(6, 'TABAROK ULLAH TAREK', 'tarek@gmail.com', 17, 'shorif', 'need money', 'lorem');

-- --------------------------------------------------------

--
-- Table structure for table `features_info`
--

CREATE TABLE `features_info` (
  `f_id` int(11) NOT NULL,
  `f_title` text NOT NULL,
  `f_subtitle` text NOT NULL,
  `f_icon` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `features_info`
--

INSERT INTO `features_info` (`f_id`, `f_title`, `f_subtitle`, `f_icon`) VALUES
(1, 'Fast Everything', 'Having a baby can be a nerve wracking experience for new', 'fa fa-rocket'),
(2, 'Easy Work', 'Lorem Every new computer that’s brought home from the store ha.', 'fa fa-check'),
(3, 'Cheap Price', 'Okay, you’ve decided you want to make money with Affiliate', 'fa fa-bullhorn'),
(4, 'Editable Site', 'A Pocket PC is a handheld computer, which features many', 'fa fa-arrows');

-- --------------------------------------------------------

--
-- Table structure for table `partners_info`
--

CREATE TABLE `partners_info` (
  `partners_id` int(11) NOT NULL,
  `p_title` varchar(250) NOT NULL,
  `p_img` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `partners_info`
--

INSERT INTO `partners_info` (`partners_id`, `p_title`, `p_img`) VALUES
(1, '1', 'partners-1645650469153.png'),
(2, '2', 'partners-164565048014.png'),
(3, '3', 'partners-1645650484534.png'),
(4, '4', 'partners-1645650490460.png'),
(5, '5', 'partners-1645650494130.png');

-- --------------------------------------------------------

--
-- Table structure for table `rw_info`
--

CREATE TABLE `rw_info` (
  `rw_id` int(11) NOT NULL,
  `rw_title` varchar(250) NOT NULL,
  `rw_img` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rw_info`
--

INSERT INTO `rw_info` (`rw_id`, `rw_title`, `rw_img`) VALUES
(1, 'a', 'recentwork-1645644403452.png'),
(2, 's', 'recentwork-1645644410403.png'),
(3, 'd', 'recentwork-1645644415210.png'),
(4, 'f', 'recentwork-1645644420988.png'),
(5, 'g', 'recentwork-1645644426562.png'),
(6, 'h', 'recentwork-1645644432226.png');

-- --------------------------------------------------------

--
-- Table structure for table `service_info`
--

CREATE TABLE `service_info` (
  `sv_id` int(11) NOT NULL,
  `sv_icon` varchar(250) NOT NULL,
  `sv_title` varchar(250) NOT NULL,
  `sv_subtitle` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_info`
--

INSERT INTO `service_info` (`sv_id`, `sv_icon`, `sv_title`, `sv_subtitle`) VALUES
(2, 'service-1645645978102.svg', 'UI/UX Design', 'Hydroderm is the highly desired anti-aging cream on'),
(3, 'service-164564601149.svg', 'Web Design', 'Hydroderm is the highly desired anti-aging cream on'),
(4, 'service-1645646029565.svg', 'Motion Graphics', 'Hydroderm is the highly desired anti-aging cream on'),
(5, 'service-1645646044731.svg', 'Mobile UI/UX', 'Hydroderm is the highly desired anti-aging cream on'),
(6, 'service-1645646056698.svg', 'Web Applications', 'Hydroderm is the highly desired anti-aging cream on'),
(7, 'service-1645646065903.svg', 'SEO Marketing', 'Hydroderm is the highly desired anti-aging cream on');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial_info`
--

CREATE TABLE `testimonial_info` (
  `testimonial_id` int(11) NOT NULL,
  `t_rwn` varchar(250) NOT NULL,
  `t_rw` varchar(250) NOT NULL,
  `t_img` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonial_info`
--

INSERT INTO `testimonial_info` (`testimonial_id`, `t_rwn`, `t_rw`, `t_img`) VALUES
(1, 'Rony', 'If you are looking at blank cassettes on the web, you may be very confused at the difference in price.', 'service-1645647741598.jpg'),
(2, 'Sagar', 'If you are looking at blank cassettes on the web, you may be very confused at the difference in price.', 'service-1645647756927.jpg'),
(3, 'Tarek', 'If you are looking at blank cassettes on the web, you may be very confused at the difference in price.', 'service-1645647767231.jpg'),
(4, 'Somrat', 'If you are looking at blank cassettes on the web, you may be very confused at the difference in price.', 'service-1645647798776.jpg'),
(5, 'Shorif', 'If you are looking at blank cassettes on the web, you may be very confused at the difference in price.', 'service-164564780760.jpg'),
(6, 'Arif', 'If you are looking at blank cassettes on the web, you may be very confused at the difference in price.', 'service-1645647816884.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_phone` int(20) NOT NULL,
  `user_username` varchar(20) NOT NULL,
  `user_email` varchar(20) NOT NULL,
  `user_pas` varchar(50) NOT NULL,
  `role_id` int(11) NOT NULL,
  `user_photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `user_name`, `user_phone`, `user_username`, `user_email`, `user_pas`, `role_id`, `user_photo`) VALUES
(1, 'MD. SHORIF UDDIN', 1755, 'shorif', 'shorif@gmail.com', '6512bd43d9caa6e02c990b0a82652dca', 2, 'uplod1643833625-8248.png'),
(3, 'Naeem Rony', 178, 'rony', 'rony@gmail.com', '6512bd43d9caa6e02c990b0a82652dca', 1, 'uplod1643833788-1360.png'),
(4, 'TABAROK ULLAH TAREK', 18, 'tarek', 'tarek@gmail.com', '6512bd43d9caa6e02c990b0a82652dca', 4, ''),
(5, 'Sagar Nath', 12, 'sagar', 'sagar@gmail.com', '6512bd43d9caa6e02c990b0a82652dca', 3, 'upload1650474910223.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`role_id`, `role_name`) VALUES
(1, 'Admin'),
(3, 'Editor'),
(4, 'Subscribers'),
(2, 'Super Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner_info`
--
ALTER TABLE `banner_info`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `con_info`
--
ALTER TABLE `con_info`
  ADD PRIMARY KEY (`con_id`);

--
-- Indexes for table `features_info`
--
ALTER TABLE `features_info`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `partners_info`
--
ALTER TABLE `partners_info`
  ADD PRIMARY KEY (`partners_id`);

--
-- Indexes for table `rw_info`
--
ALTER TABLE `rw_info`
  ADD PRIMARY KEY (`rw_id`);

--
-- Indexes for table `service_info`
--
ALTER TABLE `service_info`
  ADD PRIMARY KEY (`sv_id`);

--
-- Indexes for table `testimonial_info`
--
ALTER TABLE `testimonial_info`
  ADD PRIMARY KEY (`testimonial_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`role_id`),
  ADD UNIQUE KEY `role_name` (`role_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner_info`
--
ALTER TABLE `banner_info`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `con_info`
--
ALTER TABLE `con_info`
  MODIFY `con_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `features_info`
--
ALTER TABLE `features_info`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `partners_info`
--
ALTER TABLE `partners_info`
  MODIFY `partners_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `rw_info`
--
ALTER TABLE `rw_info`
  MODIFY `rw_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `service_info`
--
ALTER TABLE `service_info`
  MODIFY `sv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `testimonial_info`
--
ALTER TABLE `testimonial_info`
  MODIFY `testimonial_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_info`
--
ALTER TABLE `user_info`
  ADD CONSTRAINT `user_info_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `user_role` (`role_id`),
  ADD CONSTRAINT `user_info_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `user_role` (`role_id`),
  ADD CONSTRAINT `user_info_ibfk_3` FOREIGN KEY (`role_id`) REFERENCES `user_role` (`role_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
