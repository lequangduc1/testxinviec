-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th9 28, 2021 lúc 05:35 AM
-- Phiên bản máy phục vụ: 10.4.10-MariaDB
-- Phiên bản PHP: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `testcv`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `truyen`
--

DROP TABLE IF EXISTS `truyen`;
CREATE TABLE IF NOT EXISTS `truyen` (
  `ID_Product` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Content` text NOT NULL,
  `Likes` int(11) NOT NULL,
  `NotLike` int(11) NOT NULL,
  PRIMARY KEY (`ID_Product`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `truyen`
--

INSERT INTO `truyen` (`ID_Product`, `Name`, `Content`, `Likes`, `NotLike`) VALUES
(1, 'truyen thu nhat', 'Một đứa trẻ hỏi cha mình: \"Con người được sinh ra như thế nào?\" Vì vậy, cha ông ta nói, \"A-đam và Ê-va tạo ra trẻ sơ sinh, sau đó trẻ sơ sinh của họ trở thành người lớn và tạo ra trẻ sơ sinh, v.v.\"\r\n\r\nSau đó, đứa trẻ đến gặp mẹ, hỏi bà câu hỏi tương tự và bà nói với nó, \"Chúng tôi là khỉ, sau đó chúng tôi tiến hóa để trở thành như bây giờ.\"\r\n\r\nĐứa trẻ chạy lại chỗ bố và nói: \"Bố đã nói dối con!\" Cha anh trả lời: \"Không, mẹ anh đang nói về khía cạnh gia đình của cô ấy.\"', 21, 1),
(2, 'truyen thu hai', 'Cô giáo: \"Các con ơi, con gà cho các con làm gì?\" Học sinh: \"Thịt!\" Cô giáo: \"Tốt lắm! Bây giờ con lợn cho cô cái gì?\" Học sinh: \"Thịt ba rọi!\" Cô giáo: \"Tuyệt vời! Và con bò béo cho bạn cái gì?\" Học sinh: \"Bài tập về nhà!\"', 1, 1),
(3, 'truyen thu ba', 'Giáo viên hỏi Jimmy, \"Tại sao con mèo của bạn ở trường hôm nay Jimmy?\" Jimmy khóc lóc đáp lại, \"Bởi vì tôi nghe bố tôi nói với mẹ tôi, \'Tôi sẽ ăn cái âm hộ đó khi Jimmy đi học hôm nay!\'\"\r\n\r\n', 2, 2),
(4, 'truyen thu tư', 'Một bà nội trợ, một kế toán và một luật sư đã được hỏi \"2 + 2 là bao nhiêu?\" Bà nội trợ đáp: \"Bốn!\". Kế toán nói: \"Tôi nghĩ đó là 3 hoặc 4. Hãy để tôi chạy những số liệu đó qua bảng tính của mình một lần nữa.\" Luật sư kéo rèm, làm mờ đèn và hỏi bằng một giọng kín tiếng, \"Anh muốn nó là bao nhiêu?\"', 2, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
