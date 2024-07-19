-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 19, 2024 lúc 02:19 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duanmaufpoly`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(10) NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idpro` int(11) NOT NULL,
  `ngaybinhluan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id`, `noidung`, `iduser`, `idpro`, `ngaybinhluan`) VALUES
(124, 'Sản phẩm đẹp lắm', 2, 42, '2023-10-28'),
(125, 'Sản phẩm chất lượng đến từ Phạm Tuân', 2, 43, '2023-10-28');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`) VALUES
(32, 'Giày Nike'),
(33, 'Giày Adidas'),
(34, 'Giày MLB'),
(35, 'Giày Luxury'),
(39, 'Giày Jordan');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double(10,2) DEFAULT 0.00,
  `img` varchar(255) DEFAULT NULL,
  `mota` text DEFAULT NULL,
  `luotxem` int(11) DEFAULT 0,
  `iddm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `price`, `img`, `mota`, `luotxem`, `iddm`) VALUES
(17, 'Giày Nike Air Jordan 1 Low ‘Panda’ 2023 (W) Like Auth', 1999999.00, 'product1.jpg', 'Giày chất lượng cực tốt', 199, 32),
(19, 'Nike Air Jordan 1 Low Travis Scott x Fragment Like Auth', 1699999.00, 'product3.jpg', 'Jordan đã từng khiến biết bao mọi người mê', 18, 32),
(22, 'Giày MLB Chunky Liner Mid Lux New York Yankees Black Like Auth', 1111111.00, 'mlb1.jpg', 'MLB tự hào thương hiệu Pháp', 77, 34),
(23, 'Giày MLB Chunky Liner Mid New York Yankees Green Like Auth', 990000.00, 'mlb2.jpg', '66', 0, 34),
(24, 'Giày Alexander Mcqueen Gót Blue Trong Like Auth', 300000.00, 'luxury1.jpg', 'Giày đẹp nhất VN', 0, 35),
(28, 'Giày Nike Air Jordan 4 Retro ‘Frozen Moments’ Like Auth', 1999999.00, 'jodan1.jpg', 'Cam kết chất lượng như hình ảnh, video đăng tải trên Web Double Box kèm chống sốc khi giao hàng Giao hàng nhanh 60 phút trong nội thành Hà Nội và tp Hcm Nhận hàng và kiểm tra trước khi thanh toán. Hỗ Trợ đổi trả size linh hoạt', 0, 39),
(29, 'Giày Nike Air Jordan 1 Retro High OG ‘Blue Moon’ Like Auth', 1250000.00, 'jodan2.jpg', 'Cam kết chất lượng như hình ảnh, video đăng tải trên Web Double Box kèm chống sốc khi giao hàng Giao hàng nhanh 60 phút trong nội thành Hà Nội và tp Hcm Nhận hàng và kiểm tra trước khi thanh toán. Hỗ Trợ đổi trả size linh hoạt', 0, 39),
(30, 'Giày Nike Air Jordan 1 Retro High ‘Yellow Ochre’ Like Auth', 2950000.00, 'jodan3.jpg', 'Cam kết chất lượng như hình ảnh, video đăng tải trên Web Double Box kèm chống sốc khi giao hàng Giao hàng nhanh 60 phút trong nội thành Hà Nội và tp Hcm Nhận hàng và kiểm tra trước khi thanh toán. Hỗ Trợ đổi trả size linh hoạt', 0, 39),
(31, 'Giày Nike Air Jordan 1 Retro High Track ‘Red’ Like Auth', 3000000.00, 'jodan4.jpg', 'Giày Nike Air Jordan 1 Retro High Track ‘Red’ Like Auth Cam kết chất lượng như hình ảnh, video đăng tải trên Web Double Box kèm chống sốc khi giao hàng Giao hàng nhanh 60 phút trong nội thành Hà Nội và tp Hcm Nhận hàng và kiểm tra trước khi thanh toán. Hỗ Trợ đổi trả size linh hoạt', 0, 39),
(32, 'Giày Adidas Forum 84 Low White Black', 1100000.00, 'adidas1.jpg', '', 0, 33),
(33, 'Giày Adidas Forum 84 Low ‘Off White’', 2000000.00, 'adidas3.jpg', 'Cam kết chất lượng như hình ảnh, video đăng tải trên Web Double Box kèm chống sốc khi giao hàng Giao hàng nhanh 60 phút trong nội thành Hà Nội và tp Hcm Nhận hàng và kiểm tra trước khi thanh toán. Hỗ Trợ đổi trả size linh hoạt', 0, 33),
(34, 'Giày Adidas Forum 84 Low White Brown', 1000000.00, 'adidas5.jpg', '', 0, 33),
(35, 'Giày Adidas Samba Vegan Black Gum', 848000.00, 'adidas6.jpg', 'vjp nhất VN\r\n', 0, 33),
(36, 'Giày Nike Air Jordan 1 Retro High Golf Eastside Golf 1961 Like Auth', 3000000.00, 'jodan6.jpg', 'Jordan phiên bản giới hạn', 0, 39),
(37, 'Giày Nike Air Jordan 1 Retro High OG SP Union LA Bephies Beauty Supply The Summer of ‘96 Like Auth', 199999.00, 'jodan7.jpg', 'Hà Nội xịn ', 0, 39),
(38, 'Giày Alexander Mcqueen Gót Blue Trong Like Auth', 400000.00, 'luxury2.jpg', '', 0, 35),
(39, 'Giày Alexander Mcqueen Gót Tím Trong Like Auth 1', 999999.00, 'luxury3.jpg', '', 0, 35),
(40, 'Giày MLB BigBall Chunky A Gradient Classic Monogram New York Yankees ‘Ivory’ Like Auth', 400000.00, 'mlb2.jpg', '', 0, 34),
(41, 'Giày MLB BigBall Chunky Saffiano Diamond Monogram New York Yankees Black Like Auth', 1500000.00, 'mlb3.jpg', '', 0, 34),
(42, 'Giày MLB BigBall Chunky Saffiano Diamond Monogram Boston Red Sox Beige Like Auth', 1200000.00, 'mlb5.jpg', 'chiến lắm\r\n', 0, 34),
(43, 'Giày MLB BigBall Chunky Monotive Boston Red Sox Brown Like Auth', 1050000.00, 'mlb6.jpg', 'Hi Phạm Tuân chào mọi người', 0, 34);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `user`, `pass`, `email`, `address`, `tel`, `role`) VALUES
(1, 'admin', '123', 'phamtuan1724@gmail.com', 'HN', '0388929518', 1),
(2, 'phamtuan', '12', 'tuanpvph38554@fpt.edu.vn', 'HN-VN', '0328518575', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_sanpham_danhmuc` (`iddm`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `lk_sanpham_danhmuc` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
