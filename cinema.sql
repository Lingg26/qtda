-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 20, 2022 lúc 05:01 AM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `cinema`
--

-- --------------------------------------------------------

--
-- Cấu trúc đóng vai cho view `st_511655459400`
-- (See below for the actual view)
--
CREATE TABLE `st_511655459400` (
`id_chair` varchar(3)
,`active_511655459400` varchar(255)
);

-- --------------------------------------------------------

--
-- Cấu trúc đóng vai cho view `st_511655574600`
-- (See below for the actual view)
--
CREATE TABLE `st_511655574600` (
`id_chair` varchar(3)
,`active_511655574600` varchar(255)
);

-- --------------------------------------------------------

--
-- Cấu trúc đóng vai cho view `st_511655729700`
-- (See below for the actual view)
--
CREATE TABLE `st_511655729700` (
`id_chair` varchar(3)
,`active_511655729700` varchar(255)
);

-- --------------------------------------------------------

--
-- Cấu trúc đóng vai cho view `st_531655488200`
-- (See below for the actual view)
--
CREATE TABLE `st_531655488200` (
`id_chair` varchar(3)
,`active_531655488200` varchar(255)
);

-- --------------------------------------------------------

--
-- Cấu trúc đóng vai cho view `st_531655646600`
-- (See below for the actual view)
--
CREATE TABLE `st_531655646600` (
`id_chair` varchar(3)
,`active_531655646600` varchar(255)
);

-- --------------------------------------------------------

--
-- Cấu trúc đóng vai cho view `st_531655707800`
-- (See below for the actual view)
--
CREATE TABLE `st_531655707800` (
`id_chair` varchar(3)
,`active_531655707800` varchar(255)
);

-- --------------------------------------------------------

--
-- Cấu trúc đóng vai cho view `st_611655538600`
-- (See below for the actual view)
--
CREATE TABLE `st_611655538600` (
`id_chair` varchar(3)
,`active_611655538600` varchar(255)
);

-- --------------------------------------------------------

--
-- Cấu trúc đóng vai cho view `st_611655740800`
-- (See below for the actual view)
--
CREATE TABLE `st_611655740800` (
`id_chair` varchar(3)
,`active_611655740800` varchar(255)
);

-- --------------------------------------------------------

--
-- Cấu trúc đóng vai cho view `st_631655466600`
-- (See below for the actual view)
--
CREATE TABLE `st_631655466600` (
`id_chair` varchar(3)
,`active_631655466600` varchar(255)
);

-- --------------------------------------------------------

--
-- Cấu trúc đóng vai cho view `st_631655628600`
-- (See below for the actual view)
--
CREATE TABLE `st_631655628600` (
`id_chair` varchar(3)
,`active_631655628600` varchar(255)
);

-- --------------------------------------------------------

--
-- Cấu trúc đóng vai cho view `st_631655815800`
-- (See below for the actual view)
--
CREATE TABLE `st_631655815800` (
`id_chair` varchar(3)
,`active_631655815800` varchar(255)
);

-- --------------------------------------------------------

--
-- Cấu trúc đóng vai cho view `st_641655499000`
-- (See below for the actual view)
--
CREATE TABLE `st_641655499000` (
`id_chair` varchar(3)
,`active_641655499000` varchar(255)
);

-- --------------------------------------------------------

--
-- Cấu trúc đóng vai cho view `st_741655621400`
-- (See below for the actual view)
--
CREATE TABLE `st_741655621400` (
`id_chair` varchar(3)
,`active_741655621400` varchar(255)
);

-- --------------------------------------------------------

--
-- Cấu trúc đóng vai cho view `st_741655733000`
-- (See below for the actual view)
--
CREATE TABLE `st_741655733000` (
`id_chair` varchar(3)
,`active_741655733000` varchar(255)
);

-- --------------------------------------------------------

--
-- Cấu trúc đóng vai cho view `st_831655454900`
-- (See below for the actual view)
--
CREATE TABLE `st_831655454900` (
`id_chair` varchar(3)
,`active_831655454900` varchar(255)
);

-- --------------------------------------------------------

--
-- Cấu trúc đóng vai cho view `st_941655484600`
-- (See below for the actual view)
--
CREATE TABLE `st_941655484600` (
`id_chair` varchar(3)
,`active_941655484600` varchar(255)
);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_bill`
--

CREATE TABLE `tbl_bill` (
  `id_bill` int(11) NOT NULL,
  `id_cus` int(11) NOT NULL,
  `id_st` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `id_bdt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_bill`
--

INSERT INTO `tbl_bill` (`id_bill`, `id_cus`, `id_st`, `total`, `id_bdt`) VALUES
(13, 1, 32, 480000, 338),
(14, 1, 34, 480000, 1864),
(15, 1, 36, 600000, 764),
(16, 1, 38, 840000, 1689),
(17, 1, 40, 480000, 749),
(18, 1, 37, 360000, 881),
(19, 1, 43, 240000, 1441),
(20, 1, 46, 360000, 1067),
(21, 1, 47, 240000, 526);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_billdetail`
--

CREATE TABLE `tbl_billdetail` (
  `id` int(11) NOT NULL,
  `id_bdt` int(11) NOT NULL,
  `id_chair` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_billdetail`
--

INSERT INTO `tbl_billdetail` (`id`, `id_bdt`, `id_chair`) VALUES
(9, 338, 'C05'),
(10, 338, 'C06'),
(11, 338, 'D05'),
(12, 338, 'D06'),
(13, 1864, 'A01'),
(14, 1864, 'A02'),
(15, 1864, 'A03'),
(16, 1864, 'A04'),
(17, 764, 'C03'),
(18, 764, 'C04'),
(19, 764, 'D03'),
(20, 764, 'D04'),
(21, 764, 'D07'),
(22, 1689, 'A03'),
(23, 1689, 'A04'),
(24, 1689, 'A05'),
(25, 1689, 'A06'),
(26, 1689, 'B03'),
(27, 1689, 'B04'),
(28, 1689, 'B05'),
(29, 749, 'A03'),
(30, 749, 'A04'),
(31, 749, 'A06'),
(32, 749, 'A07'),
(33, 881, 'C04'),
(34, 881, 'C05'),
(35, 881, 'D04'),
(36, 1441, 'D04'),
(37, 1441, 'D05'),
(38, 1067, 'A02'),
(39, 1067, 'A03'),
(40, 1067, 'A04'),
(41, 526, 'F04'),
(42, 526, 'F05');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id_cat` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_category`
--

INSERT INTO `tbl_category` (`id_cat`, `name`) VALUES
(1, 'Phim Đang Chiếu'),
(2, 'Phim Sắp Chiếu');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_chair`
--

CREATE TABLE `tbl_chair` (
  `id_chair` varchar(3) NOT NULL,
  `active_511655459400` varchar(255) NOT NULL DEFAULT 'No',
  `active_531655488200` varchar(255) NOT NULL DEFAULT 'No',
  `active_631655466600` varchar(255) NOT NULL DEFAULT 'No',
  `active_641655499000` varchar(255) NOT NULL DEFAULT 'No',
  `active_511655574600` varchar(255) NOT NULL DEFAULT 'No',
  `active_611655538600` varchar(255) NOT NULL DEFAULT 'No',
  `active_741655621400` varchar(255) NOT NULL DEFAULT 'No',
  `active_531655646600` varchar(255) NOT NULL DEFAULT 'No',
  `active_631655628600` varchar(255) NOT NULL DEFAULT 'No',
  `active_511655729700` varchar(255) NOT NULL DEFAULT 'No',
  `active_531655707800` varchar(255) NOT NULL DEFAULT 'No',
  `active_611655740800` varchar(255) NOT NULL DEFAULT 'No',
  `active_741655733000` varchar(255) NOT NULL DEFAULT 'No',
  `active_631655815800` varchar(255) NOT NULL DEFAULT 'No',
  `active_831655454900` varchar(255) NOT NULL DEFAULT 'No',
  `active_941655484600` varchar(255) NOT NULL DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_chair`
--

INSERT INTO `tbl_chair` (`id_chair`, `active_511655459400`, `active_531655488200`, `active_631655466600`, `active_641655499000`, `active_511655574600`, `active_611655538600`, `active_741655621400`, `active_531655646600`, `active_631655628600`, `active_511655729700`, `active_531655707800`, `active_611655740800`, `active_741655733000`, `active_631655815800`, `active_831655454900`, `active_941655484600`) VALUES
('A01', 'No', 'No', 'Yes', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No'),
('A02', 'No', 'No', 'Yes', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Yes', 'No'),
('A03', 'No', 'No', 'Yes', 'No', 'No', 'No', 'Yes', 'No', 'Yes', 'No', 'No', 'No', 'No', 'No', 'Yes', 'No'),
('A04', 'No', 'No', 'Yes', 'No', 'No', 'No', 'Yes', 'No', 'Yes', 'No', 'No', 'No', 'No', 'No', 'Yes', 'No'),
('A05', 'No', 'No', 'No', 'No', 'No', 'No', 'Yes', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No'),
('A06', 'No', 'No', 'No', 'No', 'No', 'No', 'Yes', 'No', 'Yes', 'No', 'No', 'No', 'No', 'No', 'No', 'No'),
('A07', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Yes', 'No', 'No', 'No', 'No', 'No', 'No', 'No'),
('A08', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No'),
('A09', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No'),
('A10', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No'),
('B01', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No'),
('B02', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No'),
('B03', 'No', 'No', 'No', 'No', 'No', 'No', 'Yes', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No'),
('B04', 'No', 'No', 'No', 'No', 'No', 'No', 'Yes', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No'),
('B05', 'No', 'No', 'No', 'No', 'No', 'No', 'Yes', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No'),
('B06', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No'),
('B07', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No'),
('B08', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No'),
('B09', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No'),
('B10', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No'),
('C01', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No'),
('C02', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No'),
('C03', 'No', 'No', 'No', 'No', 'Yes', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No'),
('C04', 'No', 'No', 'No', 'No', 'Yes', 'Yes', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No'),
('C05', 'Yes', 'No', 'No', 'No', 'No', 'Yes', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No'),
('C06', 'Yes', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No'),
('C07', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No'),
('C08', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No'),
('C09', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No'),
('C10', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No'),
('D01', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No'),
('D02', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No'),
('D03', 'No', 'No', 'No', 'No', 'Yes', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No'),
('D04', 'No', 'No', 'No', 'No', 'Yes', 'Yes', 'No', 'No', 'No', 'No', 'No', 'Yes', 'No', 'No', 'No', 'No'),
('D05', 'Yes', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Yes', 'No', 'No', 'No', 'No'),
('D06', 'Yes', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No'),
('D07', 'No', 'No', 'No', 'No', 'Yes', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No'),
('D08', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No'),
('D09', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No'),
('D10', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No'),
('E01', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No'),
('E02', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No'),
('E03', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No'),
('E04', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No'),
('E05', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No'),
('E06', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No'),
('E07', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No'),
('E08', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No'),
('E09', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No'),
('E10', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No'),
('F01', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No'),
('F02', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No'),
('F03', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No'),
('F04', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Yes'),
('F05', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Yes'),
('F06', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No'),
('F07', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No'),
('F08', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No'),
('F09', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No'),
('F10', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `id_cus` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `phonenumber` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password_cus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_customer`
--

INSERT INTO `tbl_customer` (`id_cus`, `fullname`, `phonenumber`, `email`, `password_cus`) VALUES
(1, 'Nguyễn Thị Thùy Linh', 971100019, 'nttl261101@gmail.com', '900150983cd24fb0d6963f7d28e17f72');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_film`
--

CREATE TABLE `tbl_film` (
  `id_film` int(11) NOT NULL,
  `id_cat` int(11) NOT NULL,
  `name_film` varchar(255) NOT NULL,
  `name_director` varchar(255) NOT NULL,
  `name_actor` varchar(255) NOT NULL,
  `film_genre` varchar(255) NOT NULL,
  `premiere_date` date NOT NULL,
  `film_time` int(11) NOT NULL,
  `film_rate` varchar(255) NOT NULL,
  `film_intro` varchar(500) NOT NULL,
  `film_trailer` varchar(255) NOT NULL,
  `img_banner` varchar(255) NOT NULL,
  `film_img` varchar(255) NOT NULL,
  `active` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_film`
--

INSERT INTO `tbl_film` (`id_film`, `id_cat`, `name_film`, `name_director`, `name_actor`, `film_genre`, `premiere_date`, `film_time`, `film_rate`, `film_intro`, `film_trailer`, `img_banner`, `film_img`, `active`) VALUES
(5, 1, 'SPIDERMAN: NO WAY HOME', 'Jon Watts', 'Tom Holland, Tobey Maguire, Zendaya', 'Hành Động, Phiêu Lưu', '2022-06-18', 148, 'C18', 'Người Nhện: Không còn nhà - Spider-Man: No Way Home (2021) là bộ phim thuộc thể loại hành động, giả tưởng của Mỹ phỏng theo nhân vật Peter Parker của Marvel Comics, do Columbia Pictures và Marvel Studios đồng sản xuất và được phân phối bởi Sony Pictures Releasing. Phim do Jon Watts chịu trách nhiệm chỉ đạo, với sự tham gia của các diễn viên Tom Holland trong vai Peter Parker cùng với Zendaya, Benedict Cumberbatch, Jacob Batalon, Jon Favreau, Jamie Foxx, Willem Dafoe, Alfred Molina, Benedict Wong', 'https://www.youtube.com/embed/OB3g37GTALc', 'TL-4860.jpg', 'TL-5991.jpg', 'Yes'),
(6, 1, 'EM VÀ TRỊNH', 'Phan Gia Nhật Linh', 'Trần Lực, Avin Lu, Akari Nakatani, Bùi Lan Hương, Hoàng Hà, Lan Thy, Nhật Linh, Phạm Quỳnh Anh…', 'Tình cảm', '2022-06-17', 136, 'C13', 'Cuộc gặp gỡ định mệnh giữa Trịnh Công Sơn và nữ sinh viên Nhật Bản Michiko tại Paris năm 1990 đã mở ra một mối duyên kỳ ngộ. Từ đây bắt đầu hành trình ngược dòng thời gian, khám phá tuổi thanh xuân và tình yêu của người nhạc sĩ tài hoa với các nàng thơ Thanh Thuý, Bích Diễm, Dao Ánh, Khánh Ly, và những tình khúc mà họ lưu lại trong trái tim ông. Bộ phim lãng mạn, mở ra thế giới nhạc Trịnh quyến rũ với những mảnh ghép tình yêu đa sắc, lung linh tuyệt đẹp.', 'https://www.youtube.com/watch?v=IosqnBOkk2I', 'TL-2760.jpg', 'TL-5012.jfif', 'Yes'),
(7, 1, 'THẾ GIỚI KHỦNG LONG: LÃNH ĐỊA', 'Colin Trevorrow', 'Chris Pratt, Bryce Dallas Howard, Isabella Sermon, Omar Sy, Sam Neill', 'Hài, Hoạt Hình, Phiêu Lưu', '2022-06-10', 147, 'C13', 'Bốn năm sau kết thúc Jurassic World: Fallen Kingdom, những con khủng long đã thoát khỏi nơi giam cầm và tiến vào thế giới loài người. Giờ đây, chúng xuất hiện ở khắp mọi nơi. Sinh vật to lớn ấy không còn chỉ ở trên đảo như trước nữa mà gần ngay trước mắt, thậm chí còn có thể chạm tới. Owen Grady may mắn gặp lại cô khủng long mà anh và khán giả vô cùng yêu mến - Blue. Tuy nhiên, Blue không đi một mình mà còn đem theo một chú khủng long con khác. Điều này khiến Owen càng quyết tâm bảo vệ mẹ con cô', 'https://www.youtube.com/watch?v=3y0KM5jUnmk', 'TL-8845.jpg', 'TL-2356.jfif', 'Yes'),
(8, 1, 'TOP GUN MAVERICK', 'Joseph Kosinski', 'Tom Cruise, Justin Marks, Peter Craig, Eric Warren Singer', 'Hành Động, Phiêu Lưu', '2022-05-27', 130, 'C13', 'Sau hơn ba mươi năm phục vụ, Pete “Maverick” Mitchell từng nổi danh là một phi công thử nghiệm quả cảm hàng đầu của Hải quân, né tránh cơ hội thăng chức, điều khiến anh cảm thấy bị bó buộc, để trở về làm chính mình.', 'https://www.youtube.com/watch?v=giXco2jaZ_4', 'TL-9672.jpg', 'TL-5801.jfif', 'Yes'),
(9, 1, 'LIGHT YEAR', 'Angus MacLane', 'Evans Soules, Keke Palmer, Peter Sohn', 'Animation', '2022-06-17', 105, 'P-Phim Dành Cho Mọi Đối Tượng', 'Bộ phim kể về chuyến hành trình hành động kết hợp khoa học viễn tưởng nhằm giới thiệu câu chuyện về nguồn gốc của nhân vật Buzz Lightyear — người anh hùng đã truyền cảm hứng sáng tạo ra đồ chơi. “Lightyear” sẽ theo chân Cảnh Sát Vũ Trụ huyền thoại trong cuộc hành trình bước ra ngoài không gian cùng với một nhóm chiến binh đầy tham vọng và người bạn đồng hành là chú mèo máy Sox.', 'https://www.youtube.com/watch?v=BwZs3H_UN3k', 'TL-4437.jpg', 'TL-1804.png', 'Yes'),
(10, 2, 'DÂN CHƠI KHÔNG SỢ CON RƠI', 'Huỳnh Đông', 'Vân Trang, Tiến Luật, bé Bảo Thy', 'Comedy', '2022-06-29', 110, 'P-Phim Dành Cho Mọi Đối Tượng', 'Quân, 1 dân chơi miệt vườn về tài sát gái thượng hạng, bỗng 1 ngày phải gánh lấy \"cục nợ con rơi\" từ bạn gái cũ. Được sự trợ giúp\" 3 phần trợ giúp, 7 phần phá hoại\" của Tám Mánh, Quần dần trở thành người cha hoàn hảo của bé Thỏ..bỗng 1 ngày mẹ bé quay về.', 'https://youtu.be/W6hk59e5_C0', 'TL-1052.jpg', 'TL-6830.jfif', 'Yes'),
(11, 2, 'THÁM TỬ LỪNG DANH CONAN: NÀNG DÂU HALLOWEEN', 'Gosho Aoyama, Susumu Mitsunaka', 'Minami Takayama, Chafûrin, Tôru Furuya', 'Hoạt Hình', '2022-06-22', 0, 'P-Phim Dành Cho Mọi Đối Tượng', 'Tại Shibuya náo nhiệt mùa Halloween, Thiếu úy Sato Miwako khoác lên mình chiếc váy cưới tinh khôi trong tiệc cưới như cổ tích, và người đàn ông bên cạnh cô không ai khác ngoài Trung sĩ Takagi Wataru. Trong giây phút trọng đại, một nhóm người xấu ập vào tấn công, Trung sĩ Takagi liều mình bảo vệ Sato. Anh tai qua nạn khỏi, nhưng Sato chết lặng khi nhìn thấy bóng ma Thần Chết trong giây phút sinh tử của Takagi. Điều này khiến cô nhớ lại cái chết của đồng nghiệp, cũng là người cô từng yêu trước đây', 'https://youtu.be/SqSJPzWvcLc', 'TL-576.jpg', 'TL-6028.jpg', 'Yes'),
(12, 2, 'MINIONS: SỰ TRỖI DẬY CỦA GRU', 'Kyle Balda, Brad Ableson, Jonathan del Val', 'Steve Carell, Lucy Lawless, Michelle Yeoh...', 'Hài, Hoạt Hình, Phiêu Lưu', '2022-07-01', 90, 'P-Phim Dành Cho Mọi Đối Tượng', 'Rất lâu trước khi trở thành một phản diện chuyên nghiệp, Gru chỉ là một cậu bé 12 tuổi sống ở vùng ngoại ô vào những năm 1970, với ước mơ một ngày sẽ làm “bá chủ” thế giới. Và 3 “quả chuối” vàng biết đi từ trên trời rơi xuống đã là những đồng đội đầu tiên của Gru, bên cạnh ủng hộ cậu bé, cùng nhau thiết kế những vũ khí đầu tiên, thực hiện những phi vụ đầu tiên.', 'https://youtu.be/dTQXlDV16SY', 'TL-6411.jpg', 'TL-3444.jfif', 'Yes');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_room`
--

CREATE TABLE `tbl_room` (
  `id_room` int(11) NOT NULL,
  `name_room` varchar(255) NOT NULL,
  `active` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_room`
--

INSERT INTO `tbl_room` (`id_room`, `name_room`, `active`) VALUES
(1, 'A1', 'Yes'),
(3, 'A2', 'Yes'),
(4, 'A3', 'Yes');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_showtime`
--

CREATE TABLE `tbl_showtime` (
  `id_st` int(11) NOT NULL,
  `id_film` int(11) NOT NULL,
  `id_room` int(11) NOT NULL,
  `datetime` datetime NOT NULL,
  `id_view` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_showtime`
--

INSERT INTO `tbl_showtime` (`id_st`, `id_film`, `id_room`, `datetime`, `id_view`) VALUES
(32, 5, 1, '2022-06-17 11:50:00', '511655459400'),
(33, 5, 3, '2022-06-17 19:50:00', '531655488200'),
(34, 6, 3, '2022-06-17 13:50:00', '631655466600'),
(35, 6, 4, '2022-06-17 22:50:00', '641655499000'),
(36, 5, 1, '2022-06-18 19:50:00', '511655574600'),
(37, 6, 1, '2022-06-18 09:50:00', '611655538600'),
(38, 7, 4, '2022-06-19 08:50:00', '741655621400'),
(39, 5, 3, '2022-06-19 15:50:00', '531655646600'),
(40, 6, 3, '2022-06-19 10:50:00', '631655628600'),
(41, 5, 1, '2022-06-20 14:55:00', '511655729700'),
(42, 5, 3, '2022-06-20 08:50:00', '531655707800'),
(43, 6, 1, '2022-06-20 18:00:00', '611655740800'),
(44, 7, 4, '2022-06-20 15:50:00', '741655733000'),
(45, 6, 3, '2022-06-21 14:50:00', '631655815800'),
(46, 8, 3, '2022-06-17 10:35:00', '831655454900'),
(47, 9, 4, '2022-06-17 18:50:00', '941655484600');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc cho view `st_511655459400`
--
DROP TABLE IF EXISTS `st_511655459400`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `st_511655459400`  AS SELECT `tbl_chair`.`id_chair` AS `id_chair`, `tbl_chair`.`active_511655459400` AS `active_511655459400` FROM `tbl_chair` ;

-- --------------------------------------------------------

--
-- Cấu trúc cho view `st_511655574600`
--
DROP TABLE IF EXISTS `st_511655574600`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `st_511655574600`  AS SELECT `tbl_chair`.`id_chair` AS `id_chair`, `tbl_chair`.`active_511655574600` AS `active_511655574600` FROM `tbl_chair` ;

-- --------------------------------------------------------

--
-- Cấu trúc cho view `st_511655729700`
--
DROP TABLE IF EXISTS `st_511655729700`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `st_511655729700`  AS SELECT `tbl_chair`.`id_chair` AS `id_chair`, `tbl_chair`.`active_511655729700` AS `active_511655729700` FROM `tbl_chair` ;

-- --------------------------------------------------------

--
-- Cấu trúc cho view `st_531655488200`
--
DROP TABLE IF EXISTS `st_531655488200`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `st_531655488200`  AS SELECT `tbl_chair`.`id_chair` AS `id_chair`, `tbl_chair`.`active_531655488200` AS `active_531655488200` FROM `tbl_chair` ;

-- --------------------------------------------------------

--
-- Cấu trúc cho view `st_531655646600`
--
DROP TABLE IF EXISTS `st_531655646600`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `st_531655646600`  AS SELECT `tbl_chair`.`id_chair` AS `id_chair`, `tbl_chair`.`active_531655646600` AS `active_531655646600` FROM `tbl_chair` ;

-- --------------------------------------------------------

--
-- Cấu trúc cho view `st_531655707800`
--
DROP TABLE IF EXISTS `st_531655707800`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `st_531655707800`  AS SELECT `tbl_chair`.`id_chair` AS `id_chair`, `tbl_chair`.`active_531655707800` AS `active_531655707800` FROM `tbl_chair` ;

-- --------------------------------------------------------

--
-- Cấu trúc cho view `st_611655538600`
--
DROP TABLE IF EXISTS `st_611655538600`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `st_611655538600`  AS SELECT `tbl_chair`.`id_chair` AS `id_chair`, `tbl_chair`.`active_611655538600` AS `active_611655538600` FROM `tbl_chair` ;

-- --------------------------------------------------------

--
-- Cấu trúc cho view `st_611655740800`
--
DROP TABLE IF EXISTS `st_611655740800`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `st_611655740800`  AS SELECT `tbl_chair`.`id_chair` AS `id_chair`, `tbl_chair`.`active_611655740800` AS `active_611655740800` FROM `tbl_chair` ;

-- --------------------------------------------------------

--
-- Cấu trúc cho view `st_631655466600`
--
DROP TABLE IF EXISTS `st_631655466600`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `st_631655466600`  AS SELECT `tbl_chair`.`id_chair` AS `id_chair`, `tbl_chair`.`active_631655466600` AS `active_631655466600` FROM `tbl_chair` ;

-- --------------------------------------------------------

--
-- Cấu trúc cho view `st_631655628600`
--
DROP TABLE IF EXISTS `st_631655628600`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `st_631655628600`  AS SELECT `tbl_chair`.`id_chair` AS `id_chair`, `tbl_chair`.`active_631655628600` AS `active_631655628600` FROM `tbl_chair` ;

-- --------------------------------------------------------

--
-- Cấu trúc cho view `st_631655815800`
--
DROP TABLE IF EXISTS `st_631655815800`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `st_631655815800`  AS SELECT `tbl_chair`.`id_chair` AS `id_chair`, `tbl_chair`.`active_631655815800` AS `active_631655815800` FROM `tbl_chair` ;

-- --------------------------------------------------------

--
-- Cấu trúc cho view `st_641655499000`
--
DROP TABLE IF EXISTS `st_641655499000`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `st_641655499000`  AS SELECT `tbl_chair`.`id_chair` AS `id_chair`, `tbl_chair`.`active_641655499000` AS `active_641655499000` FROM `tbl_chair` ;

-- --------------------------------------------------------

--
-- Cấu trúc cho view `st_741655621400`
--
DROP TABLE IF EXISTS `st_741655621400`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `st_741655621400`  AS SELECT `tbl_chair`.`id_chair` AS `id_chair`, `tbl_chair`.`active_741655621400` AS `active_741655621400` FROM `tbl_chair` ;

-- --------------------------------------------------------

--
-- Cấu trúc cho view `st_741655733000`
--
DROP TABLE IF EXISTS `st_741655733000`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `st_741655733000`  AS SELECT `tbl_chair`.`id_chair` AS `id_chair`, `tbl_chair`.`active_741655733000` AS `active_741655733000` FROM `tbl_chair` ;

-- --------------------------------------------------------

--
-- Cấu trúc cho view `st_831655454900`
--
DROP TABLE IF EXISTS `st_831655454900`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `st_831655454900`  AS SELECT `tbl_chair`.`id_chair` AS `id_chair`, `tbl_chair`.`active_831655454900` AS `active_831655454900` FROM `tbl_chair` ;

-- --------------------------------------------------------

--
-- Cấu trúc cho view `st_941655484600`
--
DROP TABLE IF EXISTS `st_941655484600`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `st_941655484600`  AS SELECT `tbl_chair`.`id_chair` AS `id_chair`, `tbl_chair`.`active_941655484600` AS `active_941655484600` FROM `tbl_chair` ;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_bill`
--
ALTER TABLE `tbl_bill`
  ADD PRIMARY KEY (`id_bill`),
  ADD KEY `id_cus` (`id_cus`),
  ADD KEY `id_st` (`id_st`);

--
-- Chỉ mục cho bảng `tbl_billdetail`
--
ALTER TABLE `tbl_billdetail`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id_cat`);

--
-- Chỉ mục cho bảng `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`id_cus`);

--
-- Chỉ mục cho bảng `tbl_film`
--
ALTER TABLE `tbl_film`
  ADD PRIMARY KEY (`id_film`),
  ADD KEY `id_cat` (`id_cat`);

--
-- Chỉ mục cho bảng `tbl_room`
--
ALTER TABLE `tbl_room`
  ADD PRIMARY KEY (`id_room`);

--
-- Chỉ mục cho bảng `tbl_showtime`
--
ALTER TABLE `tbl_showtime`
  ADD PRIMARY KEY (`id_st`),
  ADD KEY `id_film` (`id_film`),
  ADD KEY `id_room` (`id_room`);

--
-- Chỉ mục cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_bill`
--
ALTER TABLE `tbl_bill`
  MODIFY `id_bill` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `tbl_billdetail`
--
ALTER TABLE `tbl_billdetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `id_cus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_film`
--
ALTER TABLE `tbl_film`
  MODIFY `id_film` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `tbl_room`
--
ALTER TABLE `tbl_room`
  MODIFY `id_room` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tbl_showtime`
--
ALTER TABLE `tbl_showtime`
  MODIFY `id_st` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_bill`
--
ALTER TABLE `tbl_bill`
  ADD CONSTRAINT `tbl_bill_ibfk_1` FOREIGN KEY (`id_cus`) REFERENCES `tbl_customer` (`id_cus`),
  ADD CONSTRAINT `tbl_bill_ibfk_2` FOREIGN KEY (`id_st`) REFERENCES `tbl_showtime` (`id_st`);

--
-- Các ràng buộc cho bảng `tbl_film`
--
ALTER TABLE `tbl_film`
  ADD CONSTRAINT `tbl_film_ibfk_1` FOREIGN KEY (`id_cat`) REFERENCES `tbl_category` (`id_cat`);

--
-- Các ràng buộc cho bảng `tbl_showtime`
--
ALTER TABLE `tbl_showtime`
  ADD CONSTRAINT `tbl_showtime_ibfk_1` FOREIGN KEY (`id_room`) REFERENCES `tbl_room` (`id_room`),
  ADD CONSTRAINT `tbl_showtime_ibfk_2` FOREIGN KEY (`id_film`) REFERENCES `tbl_film` (`id_film`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
