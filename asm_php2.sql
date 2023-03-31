-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 31, 2023 lúc 07:36 AM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `asm_php2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bills`
--

CREATE TABLE `bills` (
  `id` int(11) NOT NULL,
  `price_total` float NOT NULL,
  `name_user` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL,
  `status` int(11) DEFAULT 1 COMMENT '1 là đang giao,2 là giao thất bại,3 là giao thành công',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `bills`
--

INSERT INTO `bills` (`id`, `price_total`, `name_user`, `phone`, `address`, `id_user`, `status`, `created_at`) VALUES
(9, 23600000, 'thanh nguyen', 343112464, 'hanoi', 3, 3, '2022-12-05 11:23:53'),
(10, 23344000, 'thanh nguyen', 343112464, 'hanoi', 3, 2, '2022-12-05 11:23:53'),
(11, 19200000, 'fff', 343112464, 'hanoi', 3, 1, '2022-12-05 11:23:53'),
(12, 21600000, 'thanh nguyen', 343112464, 'hanoi', 3, 3, '2022-12-05 11:23:53'),
(13, 3100000, 'Vũ', 356277440, '18 phố kiều mai số 2, Trịnh văn bô trường fpt polytechnic', 3, 2, '2022-12-05 11:23:53'),
(14, 8000000, 'duongss', 356277440, '18 phố kiều mai số 2, Trịnh văn bô trường fpt polytechnic', 3, 3, '2022-12-05 11:23:53'),
(15, 8000000, 'Vũ', 356277440, '18 phố kiều mai số 2, Trịnh văn bô trường fpt polytechnic', 1, 1, '2022-12-05 11:23:53'),
(16, 8400000, 'Vũ', 356277440, '18 phố kiều mai số 2, Trịnh văn bô trường fpt polytechnic', 1, 2, '2022-12-05 11:23:53'),
(17, 8000000, 'Vũ', 356277440, '18 phố kiều mai số 2, Trịnh văn bô trường fpt polytechnic', 7, 1, '2022-12-05 11:23:53'),
(18, 8000000, 'fdf', 33232, 'dsdsds', 1, 1, '2022-12-05 11:23:53'),
(19, 26000000, 'Vũ', 356277440, '18 phố kiều mai số 2, Trịnh văn bô trường fpt polytechnic', 3, 1, '2022-12-05 11:23:53'),
(20, 2800000, 'Vũ', 356277440, '18 phố kiều mai số 2, Trịnh văn bô trường fpt polytechnic', 7, 1, '2022-12-05 11:23:53'),
(21, 2800000, 'Vũ', 356277440, '18 phố kiều mai số 2, Trịnh văn bô trường fpt polytechnic', 3, 1, '2022-12-05 11:26:11'),
(22, 8400000, 'thanh nguyen', 343112464, 'hanoi', 3, 1, '2022-12-07 16:54:25'),
(23, 8400000, 'thanh nguyen', 343112464, 'hanoi', 3, 1, '2022-12-07 16:55:43'),
(24, 56800000, 'thanh nguyen', 343112464, 'hanoi', 3, 1, '2022-12-07 18:04:54'),
(25, 8000000, 'Vũ', 356277440, '18 phố kiều mai số 2, Trịnh văn bô trường fpt polytechnic', 1, 1, '2022-12-15 17:42:19');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill_detail`
--

CREATE TABLE `bill_detail` (
  `id` int(11) NOT NULL,
  `id_products` int(11) NOT NULL,
  `id_bill` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price_total` float NOT NULL,
  `price` int(11) NOT NULL,
  `type_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(23, 'laptop gaming'),
(24, 'laptop học tập');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_pro` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `comments`
--

INSERT INTO `comments` (`id`, `description`, `id_user`, `id_pro`, `created_at`) VALUES
(31, 'ehem', 3, 121, '2023-02-17 10:44:51'),
(32, 'oho', 3, 121, '2023-02-17 10:45:05');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `description` text NOT NULL,
  `images` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `view` int(11) DEFAULT 0,
  `sold` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `title`, `price`, `description`, `images`, `quantity`, `category_id`, `view`, `sold`) VALUES
(121, 'Laptop Gaming Acer Aspire 7 A715 42G R05G', 15000000, '                                          Acer Aspire 7 2020 A715 42G tích hợp card đồ họa NVIDIA GTX1650 4GB GDDR6, là laptop chơi game tốt nhất phân khúc. Không chỉ vậy, phiên bản này còn mang thiết kế mới gọn gàng và sexy hơn.&#13;&#10;                                                                                                                ', 'gearvn-laptop-gaming-acer-aspire-7-a715-42g-r05g-3_2e28b40eaf6a425199803e3c4b780a62.webp', 2, 23, 0, 0),
(122, 'Laptop gaming ASUS TUF A15 FA506ICB HN355W', 18000000, '                                                        Laptop gaming ASUS TUF A15 FA506ICB HN355W là sự kết hợp giữ bộ xử lý AMD Ryzen 5 và card đồ họa NVIDIA GeForce RTX 3050 mang đến hiệu năng vượt trội mà ít mẫu laptop nào có được. Khung máy được thiết kế nhỏ gọn, hỗ trợ màn hình FHD 144Hz với Adaptive-Sync và tỷ lệ màn hình 16:9 tạo cảm giác rất thoải mái khi sử dụng.&#13;&#10;                                                                                                                                            ', '1676629197gearvn-laptop-gaming-acer-aspire-7-a715-42g-r05g-3_2e28b40eaf6a425199803e3c4b780a62.webp', 88, 23, 0, 0),
(123, 'Laptop Lenovo IdeaPad Gaming 3 15IAH7 82S9006YV', 20000000, '              Laptop Lenovo Gaming 3 15IAH7 82S9006YVN là một trong những laptop chơi game thế hệ mới. Gây ấn tượng mạnh với dòng laptop mỏng nhẹ, Lenovo lại một lần nữa khuấy đảo thị trường laptop gaming với Ideapad gaming 3. Ngôn ngữ thiết kế đột phá, hiệu năng ấn tượng chính là điểm thu hút một khối lượng lớn người dùng.&#13;&#10;                                                        ', '1676629220gearvn-laptop-gaming-acer-aspire-7-a715-42g-r05g-3_2e28b40eaf6a425199803e3c4b780a62.webp', 333, 23, 0, 0),
(124, 'Laptop Gaming Gigabyte G5 GE 51VN263SH', 21000000, 'GIGABYTE, thương hiệu đi lên với những sản phẩm linh kiện máy tính chất lượng. Hướng đến thị trường gaming đang vô cùng sôi động, GIGABYTE còn mang đến những chiếc laptop gaming chất lượng. Và hôm nay chúng ta sẽ cùng tìm hiểu chiếc laptop với tên Gigabyte G5 GE 51VN263SH - một mẫu laptop gaming mới ra mắt và hứa hẹn khuấy đảo cộng đồng game thủ thời gian sắp tới.&#13;&#10;                            ', '1676629282gearvn-laptop-gaming-acer-aspire-7-a715-42g-r05g-3_2e28b40eaf6a425199803e3c4b780a62.webp', 555, 23, 0, 0),
(125, 'Laptop gaming ASUS ROG Strix G15 G513IE HN246W', 21000000, '&#13;&#10;                            Là một sản phẩm laptop gaming, không có gì lạ khi ASUS ROG Strix G15 G513IE-HN246W sở hữu vẻ ngoài bụ bẫm, mạnh mẽ phù hợp với những game thủ. Nếu bạn đang tìm cho mình dòng laptop gaming có thể đáp ứng mọi nhu cầu sử dụng thì Asus ROG Strix G15 sẽ là nhân vật đáng để bạn lưu tâm.', '1676629366a.webp', 3, 23, 0, 0),
(126, 'Laptop gaming Lenovo Legion 5 15ARH7H 82RE0036VN', 30000000, 'Lenovo Legion 5 là một trong dòng laptop gaming đình đám của nhà Lenovo. Nếu bạn đang tìm kiếm một chiếc laptop vừa xử lý nhanh chóng các tác vụ công việc hằng ngày vừa chiến được mọi tựa game cực căng thì bạn không nên bỏ qua Lenovo Legion 5 15ARH7H 82RE0036VN nhé. Với thiết kế bắt mắt và hiệu năng siêu khủng, Lenovo Legion 5 hứa hẹn gây bão cộng đồng game thủ thời gian sắp tới.&#13;&#10;                            ', '1676629424a.webp', 100, 23, 0, 0),
(127, 'Laptop gaming ASUS TUF A15 FA507RR HN835W', 45000000, 'Laptop gaming ASUS TUF A15 FA507RR HN835W là phiên bản nâng cấp mạnh mẽ của dòng TUF Gaming trong năm 2022 với kích thước nhỏ hơn 4,5% so với các mẫu năm ngoái. Màn hình NanoEdge thế hệ mới mới sở hữu viền mỏng chỉ 6.5mm. Phần logo TUF được chạm nổi và điêu khắc bằng laser là phần tạo điểm nhấn đáng chú ý trên mặt lưng máy.&#13;&#10;                            ', '1676629479a.webp', 100, 23, 0, 0),
(128, 'Laptop gaming MSI Crosshair 17 B12UEZ 272VN', 50000000, 'MSI Crosshair 17 B12UEZ 272VN được trang bị vi xử lý Intel Core H-series thế hệ 12 mới nhất, mang trong mình 14 nhân 20 luồng đảm bảo có thể phát huy hiệu suất tối đa trong việc xử lý game, phần mềm văn phòng và các tác vụ đa nhiệm.&#13;&#10;                            ', '1676629528a.webp', 8, 23, 0, 0),
(129, 'Laptop Lenovo V14 G2 ITL 82KA00RRVN', 10000000, 'Lenovo V14 G2 ITL 82KA00RRVN là trợ thủ đắc lực trong công việc và học tập hằng ngày. Là chiếc laptop văn phòng chỉn chu từ thiết kế, hoàn thiện về cấu hình sẽ không làm các bạn học sinh - sinh viên thất vọng.&#13;&#10;                            ', '1676629617a.webp', 100, 24, 0, 0),
(130, 'Laptop MSI Modern 14 B11MOU 1065VN', 15000000, 'MSI Modern 14 B11MOU 1065VN có CPU i7 thế hệ thứ 11 và SSD cực nhanh. Cung cấp khả năng tính toán tuyệt vời, thời gian khởi động ngay lập tức. Phù hợp cho người dùng đang tìm kiếm các dòng laptop học tập - làm việc tầm trung nhưng vẫn đáp ứng đủ yêu cầu về kĩ thuật và tính năng, hỗ trợ cho mọi công việc nhanh chóng và chuyên nghiệp. &#13;&#10;                            ', '1676629685a.webp', 100, 24, 0, 0),
(131, 'Laptop Lenovo IdeaPad 5 Pro 14ITL6 82L300M9VN', 17000000, 'Laptop Lenovo IdeaPad 5 Pro 14ITL6 82L300M9VN là một trong những dòng sản phẩm trong phân khúc laptop cho sinh viên học tập và làm việc thuộc series Lenovo IdeaPad Pro. Sở hữu thiết kế mỏng nhẹ với vỏ kim loại cùng những đường nét máy được bo tròn một cách tinh tế, sắc sảo. Hiệu năng ổn định cũng là một điểm mạnh khiến dòng laptop này không ngừng hot trên thị trường.&#13;&#10;                            ', '1676629896a.webp', 100, 24, 0, 0),
(132, 'Laptop Asus ZenBook 14X OLED UM5401QA KN209W', 20000000, 'Ngoại hình của dòng Asus Zenbook vốn là điều không thể không nhắc tới và ZenBook 14X OLED UM5401QA KN209W không phải là ngoại lệ. Vỏ ngoài của Zenbook 14X được tạo nên từ kim loại giúp cho phần máy trở nên nhẹ hơn, khoác lên lớp màu Jade Black mạnh mẽ và mặt A mang đến điểm nhấn từ logo ASUS với mặt phay xước tạo nên hiệu ứng bóng tụ về logo. Với chỉ 1.4 kg và mỏng 1.59 cm, bạn có thế mang theo ZenBook 14X OLED UM5401QA KN209W đi mọi nơi mình muốn chỉ với một chiếc balo.&#13;&#10;&#13;&#10;&#13;&#10;                            ', '1676629948a.webp', 8, 24, 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(10) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `role` int(11) NOT NULL DEFAULT 1,
  `image` varchar(255) NOT NULL DEFAULT 'login.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `phone`, `pass`, `role`, `image`) VALUES
(1, 'Vũffacvvvácascácfa', 'admin@gmail.com', 23333, 'admin', 2, 'a.jpg'),
(3, 'client', 'client@gmail.com', 999999999, 'client', 1, '1676629685a.webp'),
(4, 'o', 'duong@gmail.com', 99999999, 'duong', 1, '1676629685a.webp'),
(5, 'Lê Quý Dươngss', 'quyduong@gmail.com', 99999999, 'quyduong', 1, '1676629685a.webp'),
(7, 'Nguyễn Văn ', 'thivpph24307@fpt.edu.vn', 123456789, 'Vuphuthi114477', 1, '1676629685a.webp'),
(10, 'duynguyen', 'duy@gmail.com', 13123343, 'duycon2003', 1, '1676629685a.webp'),
(14, 'avcerger', 'thanhnhph2343@fptre.edu.vn', 0, 'admin', 1, 'a.jpg'),
(15, 'rerger', 'afff@gmail.com', 0, '123456', 1, 'login.png');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bills_fk0` (`id_user`);

--
-- Chỉ mục cho bảng `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bill_detail_fk0` (`id_products`),
  ADD KEY `bill_detail_fk1` (`id_bill`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_fk0` (`id_user`),
  ADD KEY `comments_ibfk_1` (`id_pro`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_ibfk_2` (`category_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bills`
--
ALTER TABLE `bills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `bill_detail`
--
ALTER TABLE `bill_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bills`
--
ALTER TABLE `bills`
  ADD CONSTRAINT `bills_fk0` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD CONSTRAINT `bill_detail_fk0` FOREIGN KEY (`id_products`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `bill_detail_fk1` FOREIGN KEY (`id_bill`) REFERENCES `bills` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_fk0` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`id_pro`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
