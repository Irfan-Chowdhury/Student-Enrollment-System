-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2019 at 04:43 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_student_enrolment`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `admin_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `admin_phone`, `created_at`, `updated_at`) VALUES
(1, 'Irfan Chowdhury', 'irfanchowdhury80@gmail.com', '202cb962ac59075b964b07152d234b70', '01829498634', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_05_02_121555_create_admin_tbl_table', 1),
(4, '2019_05_03_190752_create_student_tbl_table', 2),
(5, '2019_05_07_043226_create_teacher_tbl_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_tbl`
--

CREATE TABLE `student_tbl` (
  `student_id` int(10) UNSIGNED NOT NULL,
  `student_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_roll` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_fathername` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_mothername` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_department` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_admissionyear` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_tbl`
--

INSERT INTO `student_tbl` (`student_id`, `student_name`, `student_roll`, `student_fathername`, `student_mothername`, `student_email`, `student_phone`, `student_address`, `student_image`, `student_password`, `student_department`, `student_admissionyear`) VALUES
(1, 'Irfan Chowdhury Fahim', 'C161016', 'Jamalus Sattar Chy', 'Monoara Begum', 'irfanchowdhury80@gmail.com', '01829498634', 'Muradpur', 'image/QeKuQuxEucVriio7zZOj.jpg', 'd9b1d7db4cd6e70935368a1efb10e377', '1', '2019-05-04'),
(2, 'Arman Ul Alam', 'C161015', 'Father of Arman', 'Mother of Arman', 'arman@gmail.com', '123456789', 'Aturar Dipu, Chittagong', 'image/CBbNX0WMlA2NKx2NWr0b.jpg', 'd9b1d7db4cd6e70935368a1efb10e377', '1', '2019-05-03'),
(3, 'Al Mamun', 'ET161015', 'Mamun\'s Father', 'Mamun\'s Mother', 'mamun@gmail.com', '123456789', 'Rangunia', 'image/G4omzL6kon3vFTScZww9.jpg', 'd9b1d7db4cd6e70935368a1efb10e377', '4', '2019-04-11'),
(4, 'Kazi Niaz Uddin', 'M151025', 'Niaz Father', 'Niaz  Mother', 'niaz@gmail.com', '123456789', 'Halishohor', 'image/8fXgvJ1XNsJv6TVB3pZs.jpg', '7363a0d0604902af7b70b271a0b96480', '5', '2019-05-01'),
(5, 'Mohammad Shakil', 'B161001', 'Shakil\'s Father', 'Shakil\'s Mother', 'shakil@gmail.com', '123456789', 'Aman Bazar', 'image/e7mejhHgopeV46PrUSUV.jpg', 'd9b1d7db4cd6e70935368a1efb10e377', '2', '2019-05-06'),
(6, 'Robiul Hossain', 'T161018', 'Robiul  Father', 'Robiul Mother', 'robiul@gmail.com', '123456789', 'Chawkbazar', 'image/ibaBng97W6Q4nVuOWNmi.jpg', '202cb962ac59075b964b07152d234b70', '3', '2019-05-31');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_tbl`
--

CREATE TABLE `teacher_tbl` (
  `teacher_id` int(10) UNSIGNED NOT NULL,
  `teacher_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_department` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teacher_tbl`
--

INSERT INTO `teacher_tbl` (`teacher_id`, `teacher_name`, `teacher_phone`, `teacher_address`, `teacher_department`, `teacher_image`, `created_at`, `updated_at`) VALUES
(1, 'Mahadi Hasan', '123456789', 'Agrabad', 'CSE', 'image/3Y03EOGJAg4Kq95eJfN1.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `student_tbl`
--
ALTER TABLE `student_tbl`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `teacher_tbl`
--
ALTER TABLE `teacher_tbl`
  ADD PRIMARY KEY (`teacher_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student_tbl`
--
ALTER TABLE `student_tbl`
  MODIFY `student_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `teacher_tbl`
--
ALTER TABLE `teacher_tbl`
  MODIFY `teacher_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
