-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th10 03, 2020 lúc 11:48 AM
-- Phiên bản máy phục vụ: 10.4.10-MariaDB
-- Phiên bản PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ncp`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baiviet`
--

CREATE TABLE `baiviet` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tieude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinhanh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `domain`
--

CREATE TABLE `domain` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tendomain` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `giatien` double(10,2) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '0=chưa kích hoạt, 1=kích hoạt',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `domain`
--

INSERT INTO `domain` (`id`, `tendomain`, `giatien`, `status`, `created_at`, `updated_at`) VALUES
(1, 'nguyentrongchinh.com', 120000.00, 0, '2020-10-03 08:47:26', '2020-10-03 08:47:26');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `facebooks`
--

CREATE TABLE `facebooks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passwork` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hosting`
--

CREATE TABLE `hosting` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `diachiip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `giatien` double(10,2) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '0=chưa kích hoạt, 1=kích hoạt',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hosting`
--

INSERT INTO `hosting` (`id`, `diachiip`, `giatien`, `status`, `created_at`, `updated_at`) VALUES
(1, '22.33.44.55', 190000.00, 1, '2020-10-03 08:49:06', '2020-10-03 09:18:32'),
(2, '12.13.12.15', 200000.00, 1, '2020-10-03 09:21:08', '2020-10-03 09:21:21');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `domain_id` bigint(20) UNSIGNED DEFAULT NULL,
  `hosting_id` bigint(20) UNSIGNED DEFAULT NULL,
  `price` double(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nguoidung_id` int(11) NOT NULL,
  `date_register` date NOT NULL,
  `date_exprie` date NOT NULL,
  `cart_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`id`, `domain_id`, `hosting_id`, `price`, `created_at`, `updated_at`, `nguoidung_id`, `date_register`, `date_exprie`, `cart_id`) VALUES
(2, NULL, 1, 190000.00, '2020-10-03 09:18:32', '2020-10-03 09:18:32', 2, '2020-10-03', '2021-10-03', 1),
(3, NULL, 2, 200000.00, '2020-10-03 09:21:21', '2020-10-03 09:21:21', 2, '2020-10-03', '2021-10-03', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khoiphucmatkhau`
--

CREATE TABLE `khoiphucmatkhau` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2000_07_03_141811_create_domain_table', 1),
(2, '2000_07_03_142527_create_hosting_table', 1),
(3, '2010_07_03_142539_create_khachhang_table', 1),
(4, '2014_10_12_000000_create_nguoidung_table', 1),
(5, '2014_10_12_100000_create_khoiphucmatkhau_table', 1),
(6, '2020_07_03_234650_create_baiviet_table', 1),
(7, '2020_07_04_015738_create_contacts_table', 1),
(8, '2020_07_17_213914_create_regishosting_table', 1),
(9, '2020_09_26_165724_create_facebooks_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(11) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`id`, `name`, `username`, `phone`, `email`, `email_verified_at`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'chính', 'chinhnt', '09976544', 'chinh20091997@gmail.com', NULL, '$2y$10$p4m8dh16FHmjYTYQPS77je.qs8ZsFXBfPfGQ2yo670ZWZFsWDhJ0u', 0, NULL, '2020-10-03 07:48:18', '2020-10-03 07:48:24'),
(2, 'Chinh Nguyen', 'chinh1997', '09976544', 'chinh123@gmail.com', NULL, '$2y$10$LFAvcnSqVBSJSVG3DcK4geNNv5bxR0zQIBXsYx/9ZfofSP91Pkd6q', 0, NULL, '2020-10-03 07:49:26', '2020-10-03 07:52:46'),
(3, 'admin', 'admin', NULL, 'admin@gmail.com', NULL, '$2y$10$PI7wHjO5HH/3vwXj5k6loOoO4tn3qrypPfVM8SNXPmMokYZeBSvfm', 1, NULL, '2020-10-03 08:02:53', '2020-10-03 08:02:53');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `regishosting`
--

CREATE TABLE `regishosting` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nguoidung_id` int(11) NOT NULL,
  `loaihosting` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(11) NOT NULL COMMENT '0 = domain; 1 = host',
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '0 = chưa dk duyệt; 1 = đã duyệt',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `regishosting`
--

INSERT INTO `regishosting` (`id`, `nguoidung_id`, `loaihosting`, `type`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 'Start - 75.000VND', 1, 1, '2020-10-03 07:49:38', '2020-10-03 09:18:32'),
(2, 2, 'Professional - 175.000VND', 1, 1, '2020-10-03 07:52:37', '2020-10-03 09:21:21'),
(3, 2, 'Professional - 175.000VND', 1, 0, '2020-10-03 07:52:46', '2020-10-03 07:52:46');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `domain`
--
ALTER TABLE `domain`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `facebooks`
--
ALTER TABLE `facebooks`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hosting`
--
ALTER TABLE `hosting`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `khachhang_domain_id_foreign` (`domain_id`),
  ADD KEY `khachhang_hosting_id_foreign` (`hosting_id`);

--
-- Chỉ mục cho bảng `khoiphucmatkhau`
--
ALTER TABLE `khoiphucmatkhau`
  ADD KEY `khoiphucmatkhau_email_index` (`email`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nguoidung_username_unique` (`username`),
  ADD UNIQUE KEY `nguoidung_email_unique` (`email`);

--
-- Chỉ mục cho bảng `regishosting`
--
ALTER TABLE `regishosting`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `domain`
--
ALTER TABLE `domain`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `facebooks`
--
ALTER TABLE `facebooks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hosting`
--
ALTER TABLE `hosting`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `regishosting`
--
ALTER TABLE `regishosting`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
