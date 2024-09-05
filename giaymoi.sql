-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 19, 2023 lúc 03:01 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `giaymoi`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id` int(11) UNSIGNED NOT NULL,
  `bill_name` varchar(255) NOT NULL,
  `bill_address` varchar(255) NOT NULL,
  `bill_tel` varchar(50) NOT NULL,
  `bill_email` varchar(100) NOT NULL,
  `total` int(10) NOT NULL DEFAULT 0,
  `bill_status` tinyint(1) DEFAULT 0 COMMENT '0.Đơn hàng mới \r\n1.Đang xử lý\r\n2.Đang giao hàng\r\n3.Đã giao hàng',
  `receive_name` varchar(255) DEFAULT NULL,
  `receive_address` varchar(255) DEFAULT NULL,
  `receive_tel` varchar(50) DEFAULT NULL,
  `bill_pttt` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1.Thanh toán trực tiếp\r\n2.Thanh toán online',
  `ngaydathang` varchar(50) DEFAULT NULL,
  `iduser` int(11) DEFAULT 0,
  `thanhtoan` tinyint(1) DEFAULT 1 COMMENT '1. Chưa thanh toán\r\n2.Đã thanh toán'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id`, `bill_name`, `bill_address`, `bill_tel`, `bill_email`, `total`, `bill_status`, `receive_name`, `receive_address`, `receive_tel`, `bill_pttt`, `ngaydathang`, `iduser`, `thanhtoan`) VALUES
(296, 'Nguyễn Mạnh Tuấn', 'Ha Noi 2', '1234567891', 'tuan@gmail.com', 1020000, 4, NULL, NULL, NULL, 2, '03:08:31pm 08/12/2023', 17, 1),
(297, 'Nguyễn Mạnh Tuấn', 'Ha Noi 2', '1234567891', 'tuan@gmail.com', 1020000, 3, NULL, NULL, NULL, 2, '03:08:38pm 08/12/2023', 17, 2),
(298, 'Nguyễn Mạnh Tuấn', 'Ha Noi 2', '1234567891', 'tuan@gmail.com', 1020000, 1, NULL, NULL, NULL, 1, '03:08:45pm 08/12/2023', 17, 1),
(299, 'Nguyễn Mạnh Tuấn', 'Ha Noi 2', '1234567891', 'tuan@gmail.com', 1020000, 4, NULL, NULL, NULL, 1, '03:08:54pm 08/12/2023', 17, 1),
(300, 'Nguyễn Mạnh Tuấn', 'Ha Noi 2', '1234567891', 'tuan@gmail.com', 1020000, 0, NULL, NULL, NULL, 1, '03:39:35pm 08/12/2023', 17, 1),
(301, 'Nguyễn Mạnh Tuấn', 'Ha Noi 2', '1234567891', 'tuan@gmail.com', 1020000, 0, NULL, NULL, NULL, 1, '03:39:46pm 08/12/2023', 17, 1),
(302, 'Nguyễn Mạnh Tuấn', 'Ha Noi 2', '1234567891', 'tuan@gmail.com', 1020000, 1, NULL, NULL, NULL, 1, '03:39:53pm 08/12/2023', 17, 1),
(303, 'Nguyễn Mạnh Tuấn', 'Ha Noi 2', '1234567891', 'tuan@gmail.com', 1020000, 4, NULL, NULL, NULL, 2, '03:40:04pm 08/12/2023', 17, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id_bl` int(11) NOT NULL,
  `noidung_bl` varchar(255) NOT NULL,
  `date_bl` varchar(30) NOT NULL,
  `id_sp` int(11) UNSIGNED NOT NULL,
  `id_user` int(11) UNSIGNED NOT NULL,
  `ten_user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id_bl`, `noidung_bl`, `date_bl`, `id_sp`, `id_user`, `ten_user`) VALUES
(61, 'ddd', '12:17:46am 08/12/2023', 151, 17, 'tuan2004'),
(62, 'ddddddd', '12:19:59am 08/12/2023', 151, 17, 'tuan2004'),
(63, 'gugugu', '12:31:20am 08/12/2023', 151, 17, 'tuan2004'),
(64, 'gẹgiegiegeig', '12:33:27am 08/12/2023', 151, 17, 'tuan2004'),
(66, 'dfwfwf', '12:39:07am 08/12/2023', 151, 17, 'tuan2004'),
(67, 'ggrrg', '12:39:14am 08/12/2023', 151, 17, 'tuan2004');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(11) UNSIGNED NOT NULL,
  `iduser` int(11) UNSIGNED NOT NULL,
  `idpro` int(11) UNSIGNED NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` int(10) NOT NULL DEFAULT 0,
  `soluong` int(3) NOT NULL,
  `thanhtien` int(10) NOT NULL,
  `idbill` int(11) UNSIGNED NOT NULL,
  `size` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `iduser`, `idpro`, `img`, `name`, `price`, `soluong`, `thanhtien`, `idbill`, `size`) VALUES
(792, 17, 151, 'giay17.jpg', 'Hàng 1B', 350000, 2, 700000, 296, '38'),
(793, 17, 150, 'giay11.jpg', 'Hàng 1A', 320000, 1, 320000, 296, '39'),
(794, 17, 151, 'giay17.jpg', 'Hàng 1B', 350000, 2, 700000, 297, '38'),
(795, 17, 150, 'giay11.jpg', 'Hàng 1A', 320000, 1, 320000, 297, '39'),
(796, 17, 151, 'giay17.jpg', 'Hàng 1B', 350000, 2, 700000, 298, '38'),
(797, 17, 150, 'giay11.jpg', 'Hàng 1A', 320000, 1, 320000, 298, '39'),
(798, 17, 151, 'giay17.jpg', 'Hàng 1B', 350000, 2, 700000, 299, '38'),
(799, 17, 150, 'giay11.jpg', 'Hàng 1A', 320000, 1, 320000, 299, '39'),
(800, 17, 151, 'giay17.jpg', 'Hàng 1B', 350000, 2, 700000, 300, '38'),
(801, 17, 150, 'giay11.jpg', 'Hàng 1A', 320000, 1, 320000, 300, '39'),
(802, 17, 151, 'giay17.jpg', 'Hàng 1B', 350000, 2, 700000, 301, '38'),
(803, 17, 150, 'giay11.jpg', 'Hàng 1A', 320000, 1, 320000, 301, '39'),
(804, 17, 151, 'giay17.jpg', 'Hàng 1B', 350000, 2, 700000, 302, '38'),
(805, 17, 150, 'giay11.jpg', 'Hàng 1A', 320000, 1, 320000, 302, '39'),
(806, 17, 151, 'giay17.jpg', 'Hàng 1B', 350000, 2, 700000, 303, '38'),
(807, 17, 150, 'giay11.jpg', 'Hàng 1A', 320000, 1, 320000, 303, '39');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id_dm` int(11) UNSIGNED NOT NULL,
  `name_dm` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id_dm`, `name_dm`) VALUES
(46, 'Giày Loại 1'),
(47, 'Giày Loại 2'),
(48, 'Giày Loại 3'),
(49, 'Giày Loại 4'),
(50, 'Giày Loại 5'),
(52, 'Giày loại 6');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sp` int(11) UNSIGNED NOT NULL,
  `img_sp` varchar(255) DEFAULT NULL,
  `name_sp` varchar(255) NOT NULL,
  `soluong_sp` int(100) DEFAULT NULL,
  `mota_sp` text DEFAULT NULL,
  `price_sp` double(10,2) NOT NULL DEFAULT 0.00,
  `id_dm` int(11) UNSIGNED NOT NULL,
  `luotxem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id_sp`, `img_sp`, `name_sp`, `soluong_sp`, `mota_sp`, `price_sp`, `id_dm`, `luotxem`) VALUES
(140, '1-193.jpg', 'Hàng 6A', NULL, 'Ra mắt vào năm 1982 bởi nhà thiết kế Bruce Kilgore, ngay lập tức mẫu giày Nike Air Force 1 (AF1) đã trở thành một ‘hit’ mạnh trên khắp thế giới khi ‘sold out’ ngay trong ngày đầu trình làng.', 25000000.00, 52, 0),
(141, 'giay2.jpg', 'Hàng 6B', NULL, 'Ra mắt vào năm 1982 bởi nhà thiết kế Bruce Kilgore, ngay lập tức mẫu giày Nike Air Force 1 (AF1) đã trở thành một ‘hit’ mạnh trên khắp thế giới khi ‘sold out’ ngay trong ngày đầu trình làng.', 29000000.00, 52, 0),
(142, 'giay3.jpg', 'Hàng 5A', NULL, 'Ra mắt vào năm 1982 bởi nhà thiết kế Bruce Kilgore, ngay lập tức mẫu giày Nike Air Force 1 (AF1) đã trở thành một ‘hit’ mạnh trên khắp thế giới khi ‘sold out’ ngay trong ngày đầu trình làng.', 300000.00, 50, 0),
(143, 'giay4.jpg', 'Hàng 5B', NULL, 'Ra mắt vào năm 1982 bởi nhà thiết kế Bruce Kilgore, ngay lập tức mẫu giày Nike Air Force 1 (AF1) đã trở thành một ‘hit’ mạnh trên khắp thế giới khi ‘sold out’ ngay trong ngày đầu trình làng.', 300000.00, 50, 0),
(144, 'giay5.jpg', 'Hàng 4A', NULL, 'Ra mắt vào năm 1982 bởi nhà thiết kế Bruce Kilgore, ngay lập tức mẫu giày Nike Air Force 1 (AF1) đã trở thành một ‘hit’ mạnh trên khắp thế giới khi ‘sold out’ ngay trong ngày đầu trình làng.', 200000.00, 49, 0),
(145, 'giay6.png', 'Hàng 4B', NULL, 'Ra mắt vào năm 1982 bởi nhà thiết kế Bruce Kilgore, ngay lập tức mẫu giày Nike Air Force 1 (AF1) đã trở thành một ‘hit’ mạnh trên khắp thế giới khi ‘sold out’ ngay trong ngày đầu trình làng.', 250000.00, 49, 100),
(146, 'giay7.jpg', 'Hàng 3A', NULL, 'Ra mắt vào năm 1982 bởi nhà thiết kế Bruce Kilgore, ngay lập tức mẫu giày Nike Air Force 1 (AF1) đã trở thành một ‘hit’ mạnh trên khắp thế giới khi ‘sold out’ ngay trong ngày đầu trình làng.', 250000.00, 48, 0),
(147, 'giay8.jpg', 'Hàng 3B', NULL, 'Ra mắt vào năm 1982 bởi nhà thiết kế Bruce Kilgore, ngay lập tức mẫu giày Nike Air Force 1 (AF1) đã trở thành một ‘hit’ mạnh trên khắp thế giới khi ‘sold out’ ngay trong ngày đầu trình làng.', 250000.00, 48, 0),
(148, 'giay9.jpg', 'Hàng 2A', NULL, 'Ra mắt vào năm 1982 bởi nhà thiết kế Bruce Kilgore, ngay lập tức mẫu giày Nike Air Force 1 (AF1) đã trở thành một ‘hit’ mạnh trên khắp thế giới khi ‘sold out’ ngay trong ngày đầu trình làng.', 400000.00, 47, 0),
(149, 'giay10.jpg', 'Hàng 2B', NULL, 'Ra mắt vào năm 1982 bởi nhà thiết kế Bruce Kilgore, ngay lập tức mẫu giày Nike Air Force 1 (AF1) đã trở thành một ‘hit’ mạnh trên khắp thế giới khi ‘sold out’ ngay trong ngày đầu trình làng.', 450000.00, 47, 0),
(150, 'giay11.jpg', 'Hàng 1A', NULL, 'Ra mắt vào năm 1982 bởi nhà thiết kế Bruce Kilgore, ngay lập tức mẫu giày Nike Air Force 1 (AF1) đã trở thành một ‘hit’ mạnh trên khắp thế giới khi ‘sold out’ ngay trong ngày đầu trình làng.', 320000.00, 46, 0),
(151, 'giay17.jpg', 'Hàng 1B', NULL, 'Ra mắt vào năm 1982 bởi nhà thiết kế Bruce Kilgore, ngay lập tức mẫu giày Nike Air Force 1 (AF1) đã trở thành một ‘hit’ mạnh trên khắp thế giới khi ‘sold out’ ngay trong ngày đầu trình làng.', 350000.00, 46, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `size_giay`
--

CREATE TABLE `size_giay` (
  `id_size` int(11) NOT NULL,
  `id_sp` int(11) UNSIGNED NOT NULL,
  `size_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `size_giay`
--

INSERT INTO `size_giay` (`id_size`, `id_sp`, `size_name`) VALUES
(40, 140, '36'),
(41, 140, '37'),
(42, 140, '38'),
(43, 140, '39'),
(44, 140, '40'),
(45, 140, '41'),
(46, 140, '42'),
(47, 141, '37'),
(48, 141, '38'),
(49, 141, '39'),
(50, 142, '36'),
(51, 142, '37'),
(52, 142, '39'),
(53, 142, '40'),
(54, 142, '42'),
(55, 143, '37'),
(56, 143, '38'),
(57, 144, '36'),
(58, 144, '37'),
(59, 144, '38'),
(60, 144, '39'),
(61, 144, '40'),
(62, 144, '41'),
(63, 144, '42'),
(64, 145, '36'),
(65, 145, '37'),
(66, 145, '38'),
(67, 145, '39'),
(68, 145, '40'),
(69, 145, '41'),
(70, 145, '42'),
(71, 146, '36'),
(72, 146, '37'),
(73, 146, '38'),
(74, 146, '39'),
(75, 146, '40'),
(76, 146, '41'),
(77, 146, '42'),
(78, 147, '36'),
(79, 147, '37'),
(80, 147, '38'),
(81, 147, '39'),
(82, 148, '36'),
(83, 148, '37'),
(84, 148, '41'),
(85, 148, '42'),
(86, 149, '36'),
(87, 149, '37'),
(88, 149, '39'),
(89, 149, '40'),
(90, 149, '41'),
(91, 149, '42'),
(92, 150, '36'),
(93, 150, '37'),
(94, 150, '38'),
(95, 150, '39'),
(96, 150, '40'),
(97, 150, '41'),
(98, 151, '36'),
(99, 151, '37'),
(100, 151, '38'),
(101, 151, '39'),
(102, 151, '41');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanhtoan`
--

CREATE TABLE `thanhtoan` (
  `id_thanhtoan` int(11) UNSIGNED NOT NULL,
  `pt_thanhtoan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `id_tintuc` int(11) UNSIGNED NOT NULL,
  `title_tintuc` text NOT NULL,
  `content_tintuc` text NOT NULL,
  `date_tintuc` varchar(30) NOT NULL,
  `id_sp` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id_user` int(11) UNSIGNED NOT NULL,
  `ten_user` varchar(100) NOT NULL,
  `tentaikhoan` varchar(50) NOT NULL,
  `matkhau` varchar(50) NOT NULL,
  `sdt` int(20) DEFAULT NULL,
  `gmail` varchar(255) NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0,
  `diachi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id_user`, `ten_user`, `tentaikhoan`, `matkhau`, `sdt`, `gmail`, `role`, `diachi`) VALUES
(17, 'tuan2004', 'Nguyễn Mạnh Tuấn', '123456', 1234567891, 'tuan@gmail.com', 1, 'Ha Noi 2'),
(30, 'ducngao', '', '123', NULL, 'duc@gmail.com', 0, NULL),
(31, 'ducver1', '', '123', NULL, 'duc@gmail.com', 0, NULL),
(32, 'ducv1', '', '1234', NULL, 'duc@gmail.com', 1, NULL),
(38, 'tttt', '', '123', NULL, 'tuannmph36192@fpt.edu.vn', 0, NULL),
(39, 'gugugu', '', '111', NULL, 'tuannmph36192@fpt.edu.vn', 0, NULL),
(40, 'tuan', '', '123', NULL, 'tuan1@fpt.edu.vn', 0, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id_bl`),
  ADD KEY `id_sp` (`id_sp`,`id_user`),
  ADD KEY `id_user` (`id_user`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_bill` (`idbill`),
  ADD KEY `cart_sanpham` (`idpro`),
  ADD KEY `cart_user` (`iduser`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id_dm`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sp`),
  ADD KEY `id_dm` (`id_dm`);

--
-- Chỉ mục cho bảng `size_giay`
--
ALTER TABLE `size_giay`
  ADD PRIMARY KEY (`id_size`),
  ADD KEY `id_sp` (`id_sp`);

--
-- Chỉ mục cho bảng `thanhtoan`
--
ALTER TABLE `thanhtoan`
  ADD PRIMARY KEY (`id_thanhtoan`);

--
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`id_tintuc`),
  ADD KEY `id_sp` (`id_sp`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=304;

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id_bl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=808;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id_dm` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sp` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;

--
-- AUTO_INCREMENT cho bảng `size_giay`
--
ALTER TABLE `size_giay`
  MODIFY `id_size` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT cho bảng `thanhtoan`
--
ALTER TABLE `thanhtoan`
  MODIFY `id_thanhtoan` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `id_tintuc` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`id_sp`) REFERENCES `sanpham` (`id_sp`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `binhluan_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`idbill`) REFERENCES `bill` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`iduser`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `cart_ibfk_3` FOREIGN KEY (`idpro`) REFERENCES `sanpham` (`id_sp`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `size_giay`
--
ALTER TABLE `size_giay`
  ADD CONSTRAINT `size_giay_ibfk_1` FOREIGN KEY (`id_sp`) REFERENCES `sanpham` (`id_sp`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
