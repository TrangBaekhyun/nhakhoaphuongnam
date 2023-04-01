-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2021 at 02:18 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nhakhoaphuongnam_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bac_si`
--

CREATE TABLE `tbl_bac_si` (
  `tbl_bac_si` int(10) NOT NULL,
  `id_co_so` int(10) NOT NULL,
  `ho_ten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gioi_tinh` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` int(10) NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_bac_si`
--

INSERT INTO `tbl_bac_si` (`tbl_bac_si`, `id_co_so`, `ho_ten`, `gioi_tinh`, `sdt`, `email`) VALUES
(1, 1, 'Vũ Đình Công', 'Nam', 986385437, 'vudinhcong@gmail.com'),
(2, 2, 'Trần Minh Hiệp', 'Nam', 975784878, 'tranminhhiep@gmail.com'),
(3, 3, 'Văn Huyền Giang', 'Nữ', 984592098, 'vangianghuyen@gmail.com'),
(4, 3, 'Thái Quốc Long', 'Nam', 943267347, 'thaiquoclong@gmail.com'),
(5, 1, 'Đỗ Thị Mỹ Hoa', 'Nữ', 986386544, 'dothimyhoa@gmail.com'),
(6, 4, 'Phạm Thị Hạnh', 'Nữ', 876476365, 'phamthihanh@gmail.com'),
(7, 4, 'Mai Thế Thanh', 'Nam', 934778498, 'maithethanh@gmail.com'),
(8, 6, 'Phan Văn Tuấn', 'Nam', 975567844, 'phanvantuan@gmail.com'),
(9, 6, 'Lê Thị Hải', 'Nữ', 984854855, 'lethihai@gmail.com'),
(10, 7, 'Phan Tiến Hoài', 'Nam', 945867859, 'phantienanh@gmail.com'),
(11, 9, 'Hồ Hiệp Anh Tuấn', 'Nam', 898788675, 'hohieptuananh@gmail.com'),
(12, 10, 'Nguyễn Thế Khoa', 'Nam', 975975487, 'nguyenthekhoa@gmai.com'),
(13, 11, 'Lê Thị Quỳnh Giang', 'Nữ', 984595464, 'lethiquynhgiang@gmail.com'),
(14, 5, 'Nguyễn Ngọc Linh', 'Nam', 979985478, 'nguyenngoclinh@gmail.com'),
(15, 8, 'Hoàng Thế Lâm', 'Nam', 845729498, 'hoangthelam@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_co_so`
--

CREATE TABLE `tbl_co_so` (
  `id_co_so` int(10) NOT NULL,
  `dia_chi` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_co_so`
--

INSERT INTO `tbl_co_so` (`id_co_so`, `dia_chi`) VALUES
(1, 'Số 110-112 Bà Triệu, Hoàn Kiếm, Hà Nội'),
(2, 'Số 12 Thái Thịnh, Đống Đa, Hà Nội'),
(3, 'Số 212 Kim Mã, Ba Đình, Hà Nội'),
(4, 'Số 386 Tô Hiệu, Phường Hồ Nam, Lê Chân, Hải Phòng'),
(5, 'Shop House 6-7, KĐT Times Garden, Lê Thánh Tông, Bạch Đằng, Quảng Ninh\r\n'),
(6, 'Số 143, Nguyễn Văn Cừ, TP Vinh'),
(7, 'Số 261-263 đường Hoàng Diệu, Phường Nam Dương, Q. Hải Châu, Đà Nẵng'),
(8, '688A Đường Cách Mạng Tháng 8,\r\nChánh Nghĩa'),
(9, 'Số 179C, Đường 3/2, P11, Q10, TP.HCM'),
(10, 'Số 97 Cộng Hòa, P4, Q.Tân Bình,TP.HCM'),
(11, '87 Nguyễn Thái Học, P. Cầu Ông Lãnh, Q. 1, TP HCM');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dat_lich`
--

CREATE TABLE `tbl_dat_lich` (
  `id_dat_lich` int(10) NOT NULL,
  `id_co_so` int(10) NOT NULL,
  `ho_ten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sđt` int(10) NOT NULL,
  `ngay` date NOT NULL,
  `thoi_gian` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_khach_hang`
--

CREATE TABLE `tbl_khach_hang` (
  `id_khach_hang` int(10) NOT NULL,
  `ho_ten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` int(10) NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_khach_hang`
--

INSERT INTO `tbl_khach_hang` (`id_khach_hang`, `ho_ten`, `sdt`, `email`) VALUES
(1, 'Nguyễn Thùy Linh ', 987987633, 'ntlinh@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lien_he`
--

CREATE TABLE `tbl_lien_he` (
  `id_lien_he` int(10) NOT NULL,
  `ho_ten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` int(10) NOT NULL,
  `messege` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_lien_he`
--

INSERT INTO `tbl_lien_he` (`id_lien_he`, `ho_ten`, `email`, `sdt`, `messege`) VALUES
(1, 'Đỗ Thị Hoa', 'dothihoa@gmail.com', 986385874, 'Hi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tin_tuc`
--

CREATE TABLE `tbl_tin_tuc` (
  `id_tin_tuc` int(10) NOT NULL,
  `tieu_de` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `noi_dung` text COLLATE utf8_unicode_ci NOT NULL,
  `anh_minh_hoa` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `so_luot_doc` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_tin_tuc`
--

INSERT INTO `tbl_tin_tuc` (`id_tin_tuc`, `tieu_de`, `noi_dung`, `anh_minh_hoa`, `so_luot_doc`) VALUES
(1, 'CHĂM SÓC, VỆ SINH RĂNG ĐEO MẮC CÀI', 'Khi đang đeo mắc cài, trẻ cần tiếp tục duy trì chăm sóc răng miệng thường xuyên – chải răng đúng phương pháp theo chỉ định của bác sĩ chỉnh nha; vệ sinh kẽ răng mỗi ngày; và thăm khám bác sĩ điều trị chỉnh nha định kỳ.\r\nNhìn chung, niềng răng bằng mắc cài không ảnh hưởng nhiều đến chu trình vệ sinh răng miệng thông thường của trẻ như chúng ta vẫn nghĩ. Chỉ cần bỏ thêm một chút thời gian và tâm trí để giữ răng thật sạch sẽ! Mục đích chính là để giữ mắc cài cũng như răng không bị lưu lại các mảng bám. Nếu mảng bám không được loại bỏ, hậu quả cuối cùng không tránh khỏi là sâu răng và ố màu răng lâu dài.\r\nCần chú trọng dinh dưỡng cho trẻ và duy trì chế độ ăn cân bằng, cung cấp chất dinh dưỡng cho xương và các mô đáp ứng với sự thay đổi thể trạng của cơ thể trong suốt thời gian niềng răng là rất quan trọng.\r\nBác sĩ chỉnh nha có thể sẽ dặn dò trẻ nên tránh xa những thức ăn cứng có nguy cơ làm hỏng mắc cài, bẻ cong dây cung; đá, các loại hạt ngũ cốc, bắp rang, các loại kẹo cứng như kẹo đậu phộng đều là những thức ăn nên loại bỏ trong quá trình niềng răng. Cắt các loại thức ăn như táo, cà rốt, và bánh mì thành những miếng nhỏ vừa ăn sẽ giúp trẻ dễ dàng và thuận tiện hơn trong việc ăn nhai. Những loại thức ăn dẻo, chứa nhiều đường như kẹo sing-gum cũng là “đối thủ” của mắc cài trong quá trình điều trị. Bạn nên tư vấn chi tiết với bác sĩ chỉnh nha về các loại thức ăn tốt cũng như không tốt cho trẻ.', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_bac_si`
--
ALTER TABLE `tbl_bac_si`
  ADD PRIMARY KEY (`tbl_bac_si`),
  ADD KEY `id_co_so` (`id_co_so`);

--
-- Indexes for table `tbl_co_so`
--
ALTER TABLE `tbl_co_so`
  ADD PRIMARY KEY (`id_co_so`);

--
-- Indexes for table `tbl_dat_lich`
--
ALTER TABLE `tbl_dat_lich`
  ADD PRIMARY KEY (`id_dat_lich`),
  ADD KEY `id_co_so` (`id_co_so`);

--
-- Indexes for table `tbl_khach_hang`
--
ALTER TABLE `tbl_khach_hang`
  ADD PRIMARY KEY (`id_khach_hang`);

--
-- Indexes for table `tbl_lien_he`
--
ALTER TABLE `tbl_lien_he`
  ADD PRIMARY KEY (`id_lien_he`);

--
-- Indexes for table `tbl_tin_tuc`
--
ALTER TABLE `tbl_tin_tuc`
  ADD PRIMARY KEY (`id_tin_tuc`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_bac_si`
--
ALTER TABLE `tbl_bac_si`
  MODIFY `tbl_bac_si` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_co_so`
--
ALTER TABLE `tbl_co_so`
  MODIFY `id_co_so` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_dat_lich`
--
ALTER TABLE `tbl_dat_lich`
  MODIFY `id_dat_lich` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_khach_hang`
--
ALTER TABLE `tbl_khach_hang`
  MODIFY `id_khach_hang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_lien_he`
--
ALTER TABLE `tbl_lien_he`
  MODIFY `id_lien_he` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_tin_tuc`
--
ALTER TABLE `tbl_tin_tuc`
  MODIFY `id_tin_tuc` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_bac_si`
--
ALTER TABLE `tbl_bac_si`
  ADD CONSTRAINT `FK_Bac_si_Co_so` FOREIGN KEY (`id_co_so`) REFERENCES `tbl_co_so` (`id_co_so`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `tbl_dat_lich`
--
ALTER TABLE `tbl_dat_lich`
  ADD CONSTRAINT `FK_Dat_lich_Co_so` FOREIGN KEY (`id_co_so`) REFERENCES `tbl_co_so` (`id_co_so`) ON DELETE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
