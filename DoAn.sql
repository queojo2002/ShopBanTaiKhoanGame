-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 18, 2022 at 11:15 AM
-- Server version: 10.3.35-MariaDB-log-cll-lve
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ghvkijyehosting_DoAnTest`
--

-- --------------------------------------------------------

--
-- Table structure for table `his_toup`
--

CREATE TABLE `his_toup` (
  `id` int(11) NOT NULL,
  `username_login_toup` tinytext DEFAULT NULL,
  `info_mathe` tinytext DEFAULT NULL,
  `info_seri` tinytext DEFAULT NULL,
  `info_loaithe` tinytext DEFAULT NULL,
  `info_thucnhan` varchar(255) DEFAULT NULL,
  `info_menhgia` varchar(255) DEFAULT NULL,
  `info_toup_type` tinytext DEFAULT NULL,
  `result_toup` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `request_id` text DEFAULT NULL,
  `time_toup` tinytext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `his_trans`
--

CREATE TABLE `his_trans` (
  `id` int(11) NOT NULL,
  `id_account_buy` int(11) DEFAULT NULL,
  `username_login_buy` tinytext DEFAULT NULL,
  `status_buy` tinytext CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `time_buy` tinytext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `account_type` tinytext DEFAULT NULL,
  `username_posts` tinytext DEFAULT NULL,
  `password_posts` tinytext DEFAULT NULL,
  `info_account` tinytext CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `info_ghichu` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `info_gtdh` float DEFAULT NULL,
  `info_bp_trang_fo4` float DEFAULT NULL,
  `info_rank` tinytext DEFAULT NULL,
  `info_skins` int(11) DEFAULT NULL,
  `info_champ` int(11) DEFAULT NULL,
  `info_maychu` tinytext CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `info_server` tinytext CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `info_lop` tinytext DEFAULT NULL,
  `info_pet` tinytext DEFAULT NULL,
  `info_sovip_cf` int(11) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `price_atm` varchar(255) DEFAULT NULL,
  `price_momo` varchar(255) DEFAULT NULL,
  `price_card` varchar(255) DEFAULT NULL,
  `image_posts` text DEFAULT NULL,
  `status_posts` tinytext CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `time_up_posts` tinytext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `top`
--

CREATE TABLE `top` (
  `id` int(11) NOT NULL,
  `username_login` tinytext DEFAULT NULL,
  `cash_money_show` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username_login` tinytext DEFAULT NULL,
  `password_login` tinytext DEFAULT NULL,
  `email` tinytext DEFAULT NULL,
  `phone_number` tinytext DEFAULT NULL,
  `cash_money` varchar(255) DEFAULT NULL,
  `account_type` tinytext DEFAULT NULL,
  `status_account` tinytext CHARACTER SET utf8 COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `Account_ChucVu` tinytext DEFAULT NULL,
  `time_login_account` tinytext DEFAULT NULL,
  `fullname_login_facebook` tinytext DEFAULT NULL,
  `uid_login_facebook` varchar(255) DEFAULT NULL,
  `time_make_account` tinytext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `wheel_history`
--

CREATE TABLE `wheel_history` (
  `id` int(11) NOT NULL,
  `fb` text COLLATE utf8_unicode_ci NOT NULL,
  `text` longtext COLLATE utf8_unicode_ci NOT NULL,
  `text_us` longtext COLLATE utf8_unicode_ci NOT NULL,
  `date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `his_toup`
--
ALTER TABLE `his_toup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `his_trans`
--
ALTER TABLE `his_trans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `top`
--
ALTER TABLE `top`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wheel_history`
--
ALTER TABLE `wheel_history`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `his_toup`
--
ALTER TABLE `his_toup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `his_trans`
--
ALTER TABLE `his_trans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `top`
--
ALTER TABLE `top`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wheel_history`
--
ALTER TABLE `wheel_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
