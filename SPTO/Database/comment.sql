-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 16, 2022 lúc 02:59 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`username`, `c_id`, `comment`) VALUES
('Yen', '3', 'Dễ dàng cho việc bắt đầu học java của tôi'),
('Yen', '14', 'Hi vọng có nhiều bài học kiểu này hơn'),
('HY', '2', 'Bài viết ngắn gọn, dễ hiểu'),
('HY', '9', 'Tôi đã thử nhưng hơi khó khăn với người mới bắt đầu như tôi'),
('HY', '9', 'Nếu có thêm ví dụ sẽ dễ áp dụng hơn'),
('HY', '17', 'Hình như nó hoạt động kiểu này:\r\npublic static void main(String[] args) {\r\n    int i, sum = 0;\r\n    Scanner scanner = new Scanner(System.in);   \r\n     \r\n    do {\r\n        System.out.println(\"Nhập vào số:\");\r\n        i = scanner.nextInt();\r\n \r\n        /*\r\n         * Nếu số nhập < 0 thì sẽ kết thúc vòng lặp \r\n         * và thực hiện câu lệnh bên ngoài vòng lặp.\r\n         */\r\n        if (i < 0) {\r\n            break;\r\n        }\r\n        sum += i;\r\n    } while (i >= 0);    // i còn lớn hơn hoặc bằng 0 thì còn tiếp tục\r\n         \r\n    System.out.println(\"Kết quả = \" + sum);\r\n}'),
('Lanh', '3', 'Vẫn chưa hiểu lắm, chắc phải tìm hiểu thêm'),
('HY', '33', 'Rất hữu ích'),
('admin1', '7', 'Thật bổ ích');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
