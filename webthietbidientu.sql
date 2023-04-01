-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 11, 2022 lúc 10:36 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webthietbidientu`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_chitietgiohang`
--

CREATE TABLE `tbl_chitietgiohang` (
  `ma` int(9) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `soluongmua` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_chitietgiohang`
--

INSERT INTO `tbl_chitietgiohang` (`ma`, `id_sanpham`, `soluongmua`) VALUES
(333, 14, '1'),
(2805, 3, '1'),
(4156, 15, '2'),
(5205, 27, '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_giohang`
--

CREATE TABLE `tbl_giohang` (
  `id_giohang` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ma` int(9) NOT NULL,
  `tinhtrang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_giohang`
--

INSERT INTO `tbl_giohang` (`id_giohang`, `email`, `ma`, `tinhtrang`) VALUES
(11, '15', 4156, '1'),
(12, '', 5205, '1'),
(13, '15', 333, '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_menu`
--

CREATE TABLE `tbl_menu` (
  `id_menu` int(11) NOT NULL,
  `ten_menu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_menu`
--

INSERT INTO `tbl_menu` (`id_menu`, `ten_menu`) VALUES
(4, 'Điện Thoại'),
(5, 'Laptop'),
(6, 'Phụ Kiện');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `id_sanpham` int(11) NOT NULL,
  `ten_sanpham` varchar(100) NOT NULL,
  `anh_sanpham` varchar(100) NOT NULL,
  `gia_sanpham` varchar(50) NOT NULL,
  `soluong` varchar(255) NOT NULL,
  `id_menu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`id_sanpham`, `ten_sanpham`, `anh_sanpham`, `gia_sanpham`, `soluong`, `id_menu`) VALUES
(8, 'Điện Thoại iPhone 6s 32GB – Hàng Chính Hãng', '1651686127_dt1.jpg', '30000', '12', 4),
(9, 'Điện Thoại iPhone 7 32GB – Hàng Chính Hãng', '1651686163_dt2.jpg', '20000', '1', 4),
(10, ' Điện Thoại iPhone 8 Plus 64GB – Chính Hãng', '1651686187_dt3.jpg', '30000', '12', 4),
(11, 'Điện Thoại iPhone X 64GB', '1651686404_dt4.jpg', '30000', '12', 4),
(12, 'IPhone X 256GB', '1651686252_dt5.jpg', '150000', '12', 4),
(13, 'IPhone XR 64GB', '1651686284_dt6.jpg', '150000', '1', 4),
(14, 'IPhone XS 64GB', '1651686306_dt7.jpg', '30000', '1', 4),
(15, 'IPhone XS 64GB Max', '1651686328_dt8.jpg', '30000', '12', 4),
(16, 'Apple Macbook Air 2017 13.3 inch MQD32 – Hàng Chính Hãng', '1651686371_lap1.jpg', '30000', '1', 5),
(17, 'Apple Macbook Pro 2017 13.3 Inch Touch Bar & ID MPXW2 ', '1651686450_lap2.jpg', '2500000', '1', 5),
(18, ' Laptop Asus Rog G752VS-BA263 – Core i7-7700HQ/Freedos', '1651686482_lap3.jpg', '30000', '1', 5),
(19, ' Laptop ASUS ROG Strix SCAR GL503VS-EI037T Core i7-7700HQ', '1651686521_lap4.jpg', '150000', '1', 5),
(20, 'Laptop Dell Inspiron 7567 N7567A – Core i7-7700HQ/Win10', '1651686545_lap5.jpg', '30000', '1', 5),
(21, 'Bao Da iPad Pro 10.5 inch UAG Metropolis – Hàng Chính Hãng', '1651686700_phukien1.jpg', '30000', '12', 6),
(22, 'Keyboard Corsair K70 MK2 Low Profile Cherry Red Switch', '1651686787_phukien2.jpg', '30000', '1', 6),
(23, 'Loa Bluetooth Sony SRS-X11 10W', '1651686868_phukien3.jpg', '30000', '1', 6),
(24, 'Loa vi tính Logitech Z906 5.1', '1651686904_phukien4.jpg', '30000', '1', 6),
(25, 'Mouse Logitech G903 Lightspeed Wireless Gaming', '1651686953_phukien5.jpg', '30000', '12', 6),
(26, 'SPIGEN Galaxy S10 Case Silicone Fit Black', '1651686985_phukien6.jpg', '150000', '1', 6),
(27, 'SPIGEN Galaxy S10 E Case Liquid Air Matte Black', '1651687006_phukien7.jpg', '30000', '12', 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_taikhoan`
--

CREATE TABLE `tbl_taikhoan` (
  `id` int(11) NOT NULL,
  `email` varchar(555) NOT NULL,
  `ho` varchar(255) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `matkhau` varchar(50) NOT NULL,
  `ma` int(11) NOT NULL,
  `xacminh` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_taikhoan`
--

INSERT INTO `tbl_taikhoan` (`id`, `email`, `ho`, `ten`, `matkhau`, `ma`, `xacminh`) VALUES
(30, 'truongkp70305@gmail.com', 'truong', 'me', '202cb962ac59075b964b07152d234b70', 6292, 'Chưa xác minh'),
(31, 'truongkp750305@gmail.com', 'truong', 'hoang', '202cb962ac59075b964b07152d234b70', 4393, 'Chưa xác minh');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Chỉ mục cho bảng `tbl_chitietgiohang`
--
ALTER TABLE `tbl_chitietgiohang`
  ADD PRIMARY KEY (`ma`);

--
-- Chỉ mục cho bảng `tbl_giohang`
--
ALTER TABLE `tbl_giohang`
  ADD PRIMARY KEY (`id_giohang`),
  ADD KEY `ma` (`ma`);

--
-- Chỉ mục cho bảng `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Chỉ mục cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`id_sanpham`);

--
-- Chỉ mục cho bảng `tbl_taikhoan`
--
ALTER TABLE `tbl_taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_chitietgiohang`
--
ALTER TABLE `tbl_chitietgiohang`
  MODIFY `ma` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6622;

--
-- AUTO_INCREMENT cho bảng `tbl_giohang`
--
ALTER TABLE `tbl_giohang`
  MODIFY `id_giohang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `tbl_menu`
--
ALTER TABLE `tbl_menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `tbl_taikhoan`
--
ALTER TABLE `tbl_taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
