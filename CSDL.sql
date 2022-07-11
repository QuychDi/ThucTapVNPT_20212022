-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 11, 2022 lúc 09:56 AM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlycongvan`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiet_congvan`
--

CREATE TABLE `chitiet_congvan` (
  `ID_CHITIEUCONGVAN` int(11) NOT NULL,
  `CONGTHUC` text NOT NULL,
  `CAULENHSQL` text NOT NULL,
  `NGAYTAO` varchar(25) DEFAULT NULL,
  `NGAYCAPNHAT` varchar(25) DEFAULT NULL,
  `ID_CONGVAN` int(11) NOT NULL,
  `ID_CHITIEU` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chitiet_congvan`
--

INSERT INTO `chitiet_congvan` (`ID_CHITIEUCONGVAN`, `CONGTHUC`, `CAULENHSQL`, `NGAYTAO`, `NGAYCAPNHAT`, `ID_CONGVAN`, `ID_CHITIEU`) VALUES
(1, 'Tỷ lệ\r\nhoàn thành chỉ tiêu =\r\nTổ𝑛𝑔 𝐷𝑇 𝑡ℎự𝑐 ℎ𝑖ệ𝑛 𝑙𝑢ỹ 𝑘ế đế𝑛 ℎế𝑡 𝑘ỳ đá𝑛ℎ 𝑔𝑖á\r\n𝑇ổ𝑛𝑔 𝐷𝑇 𝑘ế ℎ𝑜ạ𝑐ℎ 𝑙𝑢ỹ 𝑘ế đế𝑛 ℎế𝑡 𝑘ỳ đá𝑛ℎ 𝑔𝑖á\r\nx 100%', 'SELECT * FROM `chitiet_congvan`\r\nTRUNCATE TABLE `chitiet_congvan`', '2022-06-22 00:56:27', '2022-06-22 01:01:00', 22, 5),
(2, 'Tỷ lệ\r\nhoàn thành chỉ tiêu =\r\nTổ𝑛𝑔 𝐷𝑇 𝑡ℎự𝑐 ℎ𝑖ệ𝑛 𝑙𝑢ỹ 𝑘ế đế𝑛 ℎế𝑡 𝑘ỳ đá𝑛ℎ 𝑔𝑖á\r\n𝑇ổ𝑛𝑔 𝐷𝑇 𝑘ế ℎ𝑜ạ𝑐ℎ 𝑙𝑢ỹ 𝑘ế đế𝑛 ℎế𝑡 𝑘ỳ đá𝑛ℎ 𝑔𝑖á\r\nx 100%', 'SELECT * FROM `chitiet_congvan`\r\nTRUNCATE TABLE `chitiet_congvan`', '2022-06-22 00:56:27', '2022-06-22 01:01:00', 23, 5),
(3, 'Tỷ lệ\r\nhoàn thành chỉ tiêu =\r\nTổ𝑛𝑔 𝐷𝑇 𝑡ℎự𝑐 ℎ𝑖ệ𝑛 𝑙𝑢ỹ 𝑘ế đế𝑛 ℎế𝑡 𝑘ỳ đá𝑛ℎ 𝑔𝑖á\r\n𝑇ổ𝑛𝑔 𝐷𝑇 𝑘ế ℎ𝑜ạ𝑐ℎ 𝑙𝑢ỹ 𝑘ế đế𝑛 ℎế𝑡 𝑘ỳ đá𝑛ℎ 𝑔𝑖á\r\nx 100%', 'SELECT * FROM `chitiet_congvan`\r\nTRUNCATE TABLE `chitiet_congvan`', '2022-06-22 00:56:59', '2022-06-22 01:01:00', 25, 5),
(4, 'Tỷ lệ\r\nhoàn thành chỉ tiêu =\r\nTổ𝑛𝑔 𝐷𝑇 𝑡ℎự𝑐 ℎ𝑖ệ𝑛 𝑙𝑢ỹ 𝑘ế đế𝑛 ℎế𝑡 𝑘ỳ đá𝑛ℎ 𝑔𝑖á\r\n𝑇ổ𝑛𝑔 𝐷𝑇 𝑘ế ℎ𝑜ạ𝑐ℎ 𝑙𝑢ỹ 𝑘ế đế𝑛 ℎế𝑡 𝑘ỳ đá𝑛ℎ 𝑔𝑖á\r\nx 100%', 'SELECT * FROM `chitiet_congvan`\r\nTRUNCATE TABLE `chitiet_congvan`', '2022-06-22 00:56:59', '2022-06-22 01:01:00', 26, 5),
(5, 'Tỷ lệ\r\nhoàn thành chỉ tiêu =\r\nTổ𝑛𝑔 𝐷𝑇 𝑡ℎự𝑐 ℎ𝑖ệ𝑛 𝑙𝑢ỹ 𝑘ế đế𝑛 ℎế𝑡 𝑘ỳ đá𝑛ℎ 𝑔𝑖á\r\n𝑇ổ𝑛𝑔 𝐷𝑇 𝑘ế ℎ𝑜ạ𝑐ℎ 𝑙𝑢ỹ 𝑘ế đế𝑛 ℎế𝑡 𝑘ỳ đá𝑛ℎ 𝑔𝑖á\r\nx 100%', 'SELECT * FROM `chitiet_congvan`\r\nTRUNCATE TABLE `chitiet_congvan`', '2022-06-22 01:01:00', '', 38, 5),
(6, 'GDP = C + I + G + ( X – M )', 'SELECT*FROM CHITIEU', '2022-06-29 14:07:59', '', 38, 8);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chi_tieu`
--

CREATE TABLE `chi_tieu` (
  `ID_CHITIEU` int(11) NOT NULL,
  `TEN_CHITIEU` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chi_tieu`
--

INSERT INTO `chi_tieu` (`ID_CHITIEU`, `TEN_CHITIEU`) VALUES
(7, 'Bán hàng'),
(8, 'Doanh thu địa bàn'),
(9, 'Doanh thu di động'),
(10, 'Doanh thu MyTV');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cong_van`
--

CREATE TABLE `cong_van` (
  `ID_CONGVAN` int(11) NOT NULL,
  `TEN_CONGVAN` varchar(120) NOT NULL,
  `FILE_CONGVAN` varchar(255) DEFAULT NULL,
  `NGAY_TAO` datetime DEFAULT NULL,
  `NGAY_CAP_NHAT` datetime DEFAULT NULL,
  `ID_DV` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `cong_van`
--

INSERT INTO `cong_van` (`ID_CONGVAN`, `TEN_CONGVAN`, `FILE_CONGVAN`, `NGAY_TAO`, `NGAY_CAP_NHAT`, `ID_DV`) VALUES
(34, 'Đánh giá thực hiện chỉ tiêu vnpt', '150676_Huong dan cac chi tieu BSC 2022_1_7239.pdf', '2022-06-21 09:30:07', '2022-06-29 11:21:42', 1),
(38, 'V/v Quy định đánh giá các chỉ tiêu kế hoạch BSC năm 2022.', '150676_Huong dan cac chi tieu BSC 2022_1_2517.pdf', '2022-06-22 00:58:52', NULL, 10);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donvi_apdung`
--

CREATE TABLE `donvi_apdung` (
  `ID_DONVIAPDUNG` int(11) NOT NULL,
  `ID_CONGVAN` int(11) NOT NULL,
  `ID_DV` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `donvi_apdung`
--

INSERT INTO `donvi_apdung` (`ID_DONVIAPDUNG`, `ID_CONGVAN`, `ID_DV`) VALUES
(20, 37, 7),
(21, 37, 8),
(22, 37, 9),
(23, 37, 10),
(24, 37, 11),
(25, 37, 13),
(26, 38, 7),
(27, 38, 8),
(28, 38, 9),
(29, 38, 10),
(30, 41, 1),
(31, 41, 7),
(32, 41, 8),
(33, 34, 1),
(34, 34, 7),
(35, 34, 8),
(36, 34, 9);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `don_vi`
--

CREATE TABLE `don_vi` (
  `ID_DV` int(11) NOT NULL,
  `Ten_DV` varchar(120) NOT NULL,
  `ACC` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `don_vi`
--

INSERT INTO `don_vi` (`ID_DV`, `Ten_DV`, `ACC`) VALUES
(1, 'ĐƠN VỊ SOẠN THẢO CÔNG VĂN', 1),
(7, 'Tổng Công ty VNPT-Vinaphone 1', 2),
(8, 'Tổng Công ty VNPT-Net', 2),
(9, 'Tổng Công ty VNPT-Media', 2),
(10, 'Công ty VNPT-IT CAN tho', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phong_ban`
--

CREATE TABLE `phong_ban` (
  `ID_PHONGBAN` int(11) NOT NULL,
  `Ten_PhongBan` varchar(120) NOT NULL,
  `ID_DV` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `phong_ban`
--

INSERT INTO `phong_ban` (`ID_PHONGBAN`, `Ten_PhongBan`, `ID_DV`) VALUES
(1, 'Phòng Nhân Sự', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Hai Dang', 'admin@gmail.com', NULL, '$2y$10$1i1cCJGH5ZXsJCfB0gMTL.tCFHWZScHCJGZZEMFbLiXdEMhMprjam', NULL, '2022-06-06 08:25:42', '2022-06-06 08:25:42');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitiet_congvan`
--
ALTER TABLE `chitiet_congvan`
  ADD PRIMARY KEY (`ID_CHITIEUCONGVAN`);

--
-- Chỉ mục cho bảng `chi_tieu`
--
ALTER TABLE `chi_tieu`
  ADD PRIMARY KEY (`ID_CHITIEU`);

--
-- Chỉ mục cho bảng `cong_van`
--
ALTER TABLE `cong_van`
  ADD PRIMARY KEY (`ID_CONGVAN`);

--
-- Chỉ mục cho bảng `donvi_apdung`
--
ALTER TABLE `donvi_apdung`
  ADD PRIMARY KEY (`ID_DONVIAPDUNG`);

--
-- Chỉ mục cho bảng `phong_ban`
--
ALTER TABLE `phong_ban`
  ADD PRIMARY KEY (`ID_PHONGBAN`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chitiet_congvan`
--
ALTER TABLE `chitiet_congvan`
  MODIFY `ID_CHITIEUCONGVAN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `chi_tieu`
--
ALTER TABLE `chi_tieu`
  MODIFY `ID_CHITIEU` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `cong_van`
--
ALTER TABLE `cong_van`
  MODIFY `ID_CONGVAN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT cho bảng `donvi_apdung`
--
ALTER TABLE `donvi_apdung`
  MODIFY `ID_DONVIAPDUNG` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `phong_ban`
--
ALTER TABLE `phong_ban`
  MODIFY `ID_PHONGBAN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
