-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 27, 2022 lúc 09:42 AM
-- Phiên bản máy phục vụ: 10.4.25-MariaDB
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `btl`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dsdangky`
--

CREATE TABLE `dsdangky` (
  `mamonhoc` varchar(50) CHARACTER SET latin1 NOT NULL,
  `masinhvien` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dstenmonhoc` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dsgiangvien` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dssotinchi` int(10) NOT NULL,
  `dshocphi` varchar(50) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khoa`
--

CREATE TABLE `khoa` (
  `makhoa` varchar(50) CHARACTER SET latin1 NOT NULL,
  `tenkhoa` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khoa`
--

INSERT INTO `khoa` (`makhoa`, `tenkhoa`) VALUES
('CNTT', 'Công Nghệ Thông Tin'),
('LKT', 'Luật Kinh Tế');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lophoc`
--

CREATE TABLE `lophoc` (
  `lop` varchar(50) CHARACTER SET latin1 NOT NULL,
  `makhoa` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `lophoc`
--

INSERT INTO `lophoc` (`lop`, `makhoa`) VALUES
('D08.48.01', 'CNTT'),
('D08.30.01', 'LKT');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `monhoc`
--

CREATE TABLE `monhoc` (
  `mamonhoc` varchar(50) CHARACTER SET latin1 NOT NULL,
  `tenmonhoc` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `giangvien` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `lichhoc` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `sotinchi` int(10) NOT NULL,
  `hocphi` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `makhoa` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `monhoc`
--

INSERT INTO `monhoc` (`mamonhoc`, `tenmonhoc`, `giangvien`, `lichhoc`, `sotinchi`, `hocphi`, `makhoa`) VALUES
('CT1', 'An Toàn Và Bảo Mật Thông Tin', 'Bùi Đức Tiến', '', 3, '', 'CNTT'),
('LKT1', 'Triết Học Mac-Lenin', 'Thu Hiền', '', 3, '2000000', 'LKT');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sinhvien`
--

CREATE TABLE `sinhvien` (
  `masinhvien` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(50) CHARACTER SET latin1 NOT NULL,
  `password` varchar(50) CHARACTER SET latin1 NOT NULL,
  `hoten` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ngaysinh` date NOT NULL,
  `gioitinh` varchar(50) CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL,
  `lop` varchar(50) CHARACTER SET latin1 NOT NULL,
  `quequan` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sinhvien`
--

INSERT INTO `sinhvien` (`masinhvien`, `username`, `password`, `hoten`, `ngaysinh`, `gioitinh`, `lop`, `quequan`, `avatar`) VALUES
('1954802010007', 'ldc', '123456', 'Lê Duy Cương', '2001-12-12', 'Nam', 'D08.48.01', 'Sóc Sơn', ''),
('1954802010011', 'ttd', '213051', 'Trịnh Trung Dũng', '2001-12-03', 'Nam', 'D08.48.01', 'HP', ''),
('1954802010012', 'nnd', '123456', 'Nguyễn Ngọc Dương', '2001-11-06', 'Nam', 'D08.48.01', 'Hà Nội', ''),
('1954802010013', 'phl', '123456', 'Phạm Hương Ly', '1999-05-25', 'Nữ', 'D08.30.01', 'Quảng Ninh', ''),
('1954802010014', 'vdd', '123456', 'Vương Đình Đạt', '2001-10-25', 'Nam', 'D08.48.01', 'Vĩnh Phúc', ''),
('1954802010016', 'nqd', '123456', 'Nguyễn Quang Đức', '2001-08-18', 'Nam', 'D08.48.01', 'Hà Nội', ''),
('1954802010029', 'vinhdo', '123456', 'Đỗ Quang Vinh', '2002-11-20', 'Nam', 'D08.48.01', 'Hà Nội', ''),
('1954802010030', 'ptdq', '123456', 'Phùng Thị Diễm Quỳnh', '2001-11-02', 'Nữ', 'D08.48.01', 'Hưng Yên', ''),
('1954802010042', 'nkl', '123456', 'Nguyễn Khánh Ly', '2001-10-11', 'Nam', 'D08.48.01', 'Hưng Yên', ''),
('1954802010049', 'ntt', '123456', 'Nguyễn Thu Trang', '2001-05-03', 'Nữ', 'D08.30.01', 'Vĩnh Phúc', ''),
('213051', 'dunggthee', '213051', 'Cao Thế Dũng', '2001-12-03', 'Nam', 'D08.48.01', 'Nghệ an', '../model/uploads/vaa.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `dsdangky`
--
ALTER TABLE `dsdangky`
  ADD PRIMARY KEY (`mamonhoc`),
  ADD KEY `masinhvien` (`masinhvien`);

--
-- Chỉ mục cho bảng `khoa`
--
ALTER TABLE `khoa`
  ADD PRIMARY KEY (`makhoa`);

--
-- Chỉ mục cho bảng `lophoc`
--
ALTER TABLE `lophoc`
  ADD PRIMARY KEY (`lop`),
  ADD KEY `makhoa` (`makhoa`);

--
-- Chỉ mục cho bảng `monhoc`
--
ALTER TABLE `monhoc`
  ADD KEY `makhoa` (`makhoa`);

--
-- Chỉ mục cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`masinhvien`),
  ADD KEY `lop` (`lop`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
