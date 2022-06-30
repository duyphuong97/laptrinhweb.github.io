-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 30, 2019 lúc 04:22 AM
-- Phiên bản máy phục vụ: 10.1.34-MariaDB
-- Phiên bản PHP: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlbanhang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdathang`
--

CREATE TABLE `chitietdathang` (
  `SoDonDH` int(11) NOT NULL,
  `MSHH` int(11) NOT NULL,
  `SoLuong` int(8) NOT NULL,
  `GiaDatHang` int(12) NOT NULL,
  `GiamGia` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `chitietdathang`
--

INSERT INTO `chitietdathang` (`SoDonDH`, `MSHH`, `SoLuong`, `GiaDatHang`, `GiamGia`) VALUES
(5163360, 51, 6, 1500000, 0),
(4260267, 42, 1, 250000, 0),
(5652157, 56, 1, 585000, 0),
(6242807, 62, 1, 175000, 0),
(7855955, 78, 1, 275000, 0),
(6098437, 60, 1, 295000, 0),
(5265079, 52, 1, 585000, 0),
(6982699, 69, 1, 215000, 0),
(4799692, 47, 1, 250000, 0),
(7532219, 75, 1, 425000, 0),
(4245705, 42, 1, 250000, 0),
(4380848, 43, 1, 250000, 0),
(4310497, 43, 1, 250000, 0),
(7728099, 77, 1, 375000, 0),
(8079754, 80, 1, 295000, 0),
(4220939, 42, 1, 250000, 0),
(4373174, 43, 1, 250000, 0),
(4212941, 42, 1, 250000, 0),
(7822194, 78, 4, 1100000, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `client`
--

CREATE TABLE `client` (
  `fullname` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pass` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `client`
--

INSERT INTO `client` (`fullname`, `email`, `pass`) VALUES
('Danh Phuong Thao', 'admin', 'a12345'),
('Nguyen Nguyen Duy Phuong', 'admih', '12345a'),
('Nguyen Duy Phuong', 'adminhk', 'a12345');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dathang`
--

CREATE TABLE `dathang` (
  `SoDonDH` int(11) NOT NULL,
  `MSKH` int(11) NOT NULL,
  `NgayDH` datetime NOT NULL,
  `NgayGH` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `dathang`
--

INSERT INTO `dathang` (`SoDonDH`, `MSKH`, `NgayDH`, `NgayGH`) VALUES
(4212941, 1002490194, '2019-04-30 00:00:00', '2019-05-03 00:00:00'),
(4220939, 1310020497, '2019-04-09 00:00:00', '2019-04-12 00:00:00'),
(4245705, 1894860215, '2019-04-09 00:00:00', '2019-04-12 00:00:00'),
(4260267, 1632813672, '2019-04-09 00:00:00', '2019-04-12 00:00:00'),
(4310497, 1817124710, '2019-04-09 00:00:00', '2019-04-12 00:00:00'),
(4373174, 2064363525, '2019-04-09 00:00:00', '2019-04-12 00:00:00'),
(4380848, 1104683438, '2019-04-09 00:00:00', '2019-04-12 00:00:00'),
(4799692, 1721239759, '2019-04-09 00:00:00', '2019-04-12 00:00:00'),
(5163360, 2147483647, '2019-04-09 00:00:00', '2019-04-12 00:00:00'),
(5265079, 1990910310, '2019-04-09 00:00:00', '2019-04-12 00:00:00'),
(5652157, 1342447386, '2019-04-09 00:00:00', '2019-04-12 00:00:00'),
(6098437, 1694690875, '2019-04-09 00:00:00', '2019-04-12 00:00:00'),
(6242807, 1242545288, '2019-04-09 00:00:00', '2019-04-12 00:00:00'),
(6982699, 1478738377, '2019-04-09 00:00:00', '2019-04-12 00:00:00'),
(7532219, 1332897377, '2019-04-09 00:00:00', '2019-04-12 00:00:00'),
(7728099, 1087849707, '2019-04-09 00:00:00', '2019-04-12 00:00:00'),
(7822194, 1336759380, '2019-04-30 00:00:00', '2019-05-03 00:00:00'),
(7855955, 1856380177, '2019-04-09 00:00:00', '2019-04-12 00:00:00'),
(8079754, 1711689749, '2019-04-09 00:00:00', '2019-04-12 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hanghoa`
--

CREATE TABLE `hanghoa` (
  `MSHH` int(11) NOT NULL,
  `image` varchar(250) NOT NULL,
  `TenHH` varchar(30) NOT NULL,
  `QuyCach` varchar(40) NOT NULL,
  `Gia` int(12) NOT NULL,
  `SoLuongHang` int(10) NOT NULL,
  `GhiChu` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `hanghoa`
--

INSERT INTO `hanghoa` (`MSHH`, `image`, `TenHH`, `QuyCach`, `Gia`, `SoLuongHang`, `GhiChu`) VALUES
(42, 'ASM001.jpg', 'Ao So Mi Trang', '', 250000, 30, 'Trong luong 240gram, loai vai: chat lieu kate, min, mat vao mat me thoai mai.'),
(56, 'GTT000.jpg', 'Giay The Thao Mau Den', '', 585000, 30, 'Giay mang thoai mai, em chan, thuan tien cho viec di lai. Mang phong cach the thao'),
(70, 'QS002.jpg', 'Quan Short Jean Xam Trang QS15', '', 285000, 30, 'Chat jean day dan, ben, co do co dan nhe, tham hut tot. Kieu dang nang dong, thoai mai,bui bam, ngau. Form ong suong don gian de phoi cung ao thun, so mi ngan tay, ao khoac,giay the thao, giay moi...'),
(78, 'VD000.jpg', 'Vi Da Nau BV224', '', 275000, 30, 'Vi da nau BV224 chat lieu da bo mem cao cap, chac chan, cung nhieu ngan ben trong giup bao quan tot tien bac, giay to,the atm, anzh ki niem. Thiet ke kieu dang dung gon nhe nhang cho vao tui quan, tui ao.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `MSKH` int(11) NOT NULL,
  `HoTenKH` varchar(30) NOT NULL,
  `DiaChi` varchar(100) NOT NULL,
  `SDT` varchar(11) NOT NULL,
  `SoFax` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`MSKH`, `HoTenKH`, `DiaChi`, `SDT`, `SoFax`) VALUES
(1002490194, 'Nguyen Duy', 'Ap Long Hung - Xa Long Thuan - Huyen Hong Ngu - Tinh Dong Thap', '0919854586', 'nguyenthiet20062010@yahoo.com'),
(1087849707, 'Duy Phuong', 'Ap Long Hung - Xa Long Thuan - Huyen Hong Ngu - Tinh Dong Thap', '0919854586', 'phuongb1609943@student.ctu.edu.vn'),
(1104683438, 'Phuong Trang', 'Ap Long Hung - Xa Long Thuan - Huyen Hong Ngu - Tinh Dong Thap', '0828811711', 'phuongb1609943@student.ctu.edu.vn'),
(1242545288, 'thien', 'Binh Minh - Vinh Long', '0828811711', 'thienb16099'),
(1310020497, 'khanh12222', 'Long thuan - Hong Ngu - Dong Thap', '0919854586', 'phuongb1609943@student.ctu.edu.vn'),
(1332897377, 'Nguyen Nguyen Nha Phuong2222', 'Ap Long Hung - Xa Long Thuan - Huyen Hong Ngu - Tinh Dong Thap', '0949444373', 'phuongb1609943@student.ctu.edu.vn'),
(1336759380, 'Duy Phuong', 'Ap Long Hung - Xa Long Thuan - Huyen Hong Ngu - Tinh Dong Thap', '0919854586', 'phuongb1609943@student.ctu.edu.vn'),
(1342447386, 'Nguyen Nguyen Duy Phuong', 'Ap Long Hung - Xa Long Thuan - Huyen Hong Ngu - Tinh Dong Thap', '0828811711', 'phuongb1609'),
(1478738377, 'Le Tan Phuc', 'Lai Vung-Dong Thap', '0828811765', 'phucb1609943@student.ctu.edu.vn'),
(1632813672, 'Danh Phuong Thao', 'Long My - Hau Giang', '0886226881', 'thaob160715'),
(1694690875, 'duy phuongfdfdf', 'Long thuan - Hong Ngu - Dong Thap', '0919854586', 'admin'),
(1711689749, 'Duy Phuong2222', 'Ap Long Hung - Xa Long Thuan - Huyen Hong Ngu - Tinh Dong Thap', '0919854586', 'admin'),
(1721239759, 'Duong2222', 'Vi Thuy - Hau Giang', '0918956748', 'duongb1607063@student.ctu.edu.vn'),
(1817124710, 'Van Tri', 'Ap Long Hung - Xa Long Thuan - Huyen Hong Ngu - Tinh Dong Thap', '0919994329', 'admin'),
(1856380177, 'minh thien', 'Binh Minh - Vinh Long', '0123456789', 'thienb16099'),
(1894860215, 'Duy Phuong', 'Ap Long Hung - Xa Long Thuan - Huyen Hong Ngu - Tinh Dong Thap', '0919854586', 'admin'),
(1990910310, 'Minh Kha', 'Long thuan - Hong Ngu - Dong Thap', '0919854586', 'khab1609956@student.ctu.edu.vn'),
(2064363525, 'thien', 'Ap Long Hung - Xa Long Thuan - Huyen Hong Ngu - Tinh Dong Thap', '0919854586', 'phuongb1609943@student.ctu.edu.vn'),
(2147483647, 'Nguyen Nguyen Duy Phuong', 'Ap Long Hung - Xa Long Thuan - Huyen Hong Ngu - Tinh Dong Thap', '0828811711', 'phuongb1609');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `MSNV` int(11) NOT NULL,
  `HoTenNV` varchar(30) NOT NULL,
  `ChucVu` varchar(12) NOT NULL,
  `DiaChi` varchar(40) NOT NULL,
  `SDT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`MSNV`, `HoTenNV`, `ChucVu`, `DiaChi`, `SDT`) VALUES
(2, 'Không Thị Có', 'Chủ Tịch', '12345', 123333455);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietdathang`
--
ALTER TABLE `chitietdathang`
  ADD KEY `FK_CHITIET_DATHANG` (`SoDonDH`),
  ADD KEY `FK_CHITIET_HANGHOA` (`MSHH`);

--
-- Chỉ mục cho bảng `dathang`
--
ALTER TABLE `dathang`
  ADD PRIMARY KEY (`SoDonDH`),
  ADD KEY `MSKH` (`MSKH`);

--
-- Chỉ mục cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD PRIMARY KEY (`MSHH`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MSKH`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`MSNV`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `dathang`
--
ALTER TABLE `dathang`
  MODIFY `SoDonDH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8079755;

--
-- AUTO_INCREMENT cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  MODIFY `MSHH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `MSNV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
