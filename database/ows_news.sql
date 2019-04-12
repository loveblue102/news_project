-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2019 at 01:00 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ows_news`
--

-- --------------------------------------------------------

--
-- Table structure for table `category_news`
--

CREATE TABLE `category_news` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `category_parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category_news`
--

INSERT INTO `category_news` (`category_id`, `category_name`, `category_parent_id`) VALUES
(1, 'Thể Thao', 0),
(2, 'Công Nghệ', 0),
(3, 'Ăn Chơi', 0),
(4, 'Bóng Đá', 1),
(5, 'Bóng Bànn', 1),
(6, 'Linh Tinh', 2),
(7, 'Lang Nhang', 2),
(9, 'vo van', 2),
(10, 'test', 1),
(11, 'axczcz', 1);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL,
  `news_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment_date` date NOT NULL,
  `comment_content` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `comment_rep_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `news_id`, `user_id`, `comment_date`, `comment_content`, `comment_rep_id`) VALUES
(1, 4, 1, '2019-03-08', 'Hay Lam Nguoi Anh Em', 0),
(2, 4, 1, '2019-03-05', 'ok bro', 1),
(3, 4, 2, '2019-03-05', 'Bai nay co gi hay dau anh oi', 0),
(5, 3, 1, '2019-03-26', 'ok bro', 0),
(49, 3, 1, '2019-03-27', 'hom nay co gi hay khong anh', 0),
(50, 3, 1, '2019-03-27', 'bai nay cung binh thuong ma anh', 49),
(51, 3, 1, '2019-03-27', 'asdsda', 0),
(52, 3, 1, '2019-03-27', 'sada', 0),
(53, 3, 1, '2019-03-27', 'alo bro', 5),
(54, 3, 1, '2019-03-04', 'tra loi cho bai k hay', 49),
(55, 3, 1, '2019-03-27', 'trung dan don', 5),
(56, 3, 1, '2019-03-27', 'sadasddas', 0),
(57, 3, 1, '2019-03-27', 'saasdsa', 0),
(58, 3, 1, '2019-03-27', 'asddsaads', 0),
(59, 3, 1, '2019-03-27', 'asdasdas', 0),
(60, 3, 1, '2019-03-06', 'hello', 58),
(61, 3, 1, '2019-03-06', 'hello myfriends', 58),
(62, 3, 1, '2019-03-27', 'alo', 0),
(63, 3, 1, '2019-03-27', '123', 0),
(64, 3, 1, '2019-03-27', '123', 0),
(65, 3, 1, '2019-03-27', 'âsaaa', 0),
(66, 3, 1, '2019-03-27', 'saddassd', 0),
(67, 3, 1, '2019-03-27', 'áddsa', 5),
(68, 3, 1, '2019-03-27', '123', 5),
(69, 3, 1, '2019-03-27', '1231111', 0),
(70, 3, 1, '2019-03-27', '123', 69),
(71, 3, 1, '2019-03-27', 'sấd', 0),
(72, 3, 1, '2019-03-27', 'dsfdsdfsdfsd', 0),
(73, 3, 1, '2019-03-27', 'khong bao gio thua', 0),
(74, 3, 1, '2019-03-27', 'halo', 0),
(75, 3, 1, '2019-03-27', 'alo', 74),
(76, 3, 1, '2019-03-27', 'viet them gi khac biet', 0),
(77, 3, 1, '2019-03-27', 'vit the m 2', 0),
(80, 3, 1, '2019-03-28', 'alo\n', 0),
(87, 3, 1, '2019-03-28', 'ajaxa', 0),
(88, 3, 1, '2019-03-28', 'D?S?FDSf/ds/FSD', 87),
(89, 34, 2, '2019-04-01', 'test phan quyen ', 0),
(90, 34, 2, '2019-04-01', 'hello', 89),
(91, 3, 1, '2019-04-05', '', 87),
(92, 3, 1, '2019-04-05', '', 87),
(93, 3, 1, '2019-04-05', '', 87),
(94, 3, 1, '2019-04-05', 'sxsxsx', 87),
(95, 3, 1, '2019-04-05', 'trung', 87),
(96, 3, 1, '2019-04-05', 'adaada', 87),
(97, 3, 1, '2019-04-05', 'ssssssssss', 87),
(98, 3, 1, '2019-04-05', 'ddddddd', 87),
(99, 3, 1, '2019-04-05', 'qqqqqqqqqqqqq', 87),
(100, 3, 1, '2019-04-05', 'kkkkkkkkkkkkkk', 87),
(101, 3, 1, '2019-04-05', 'wdwsws', 87),
(102, 3, 1, '2019-04-05', 'swxswx', 87),
(103, 3, 1, '2019-04-05', 'swxswx', 87),
(104, 3, 1, '2019-04-05', 'ssssssssssssssssss', 87),
(105, 3, 1, '2019-04-05', 'hhhhhhhhhhhh', 87),
(106, 3, 1, '2019-04-05', 'qddasasa', 0),
(107, 3, 1, '2019-04-05', 'wqwqqw', 87),
(108, 3, 1, '2019-04-05', 'test', 0),
(109, 3, 1, '2019-04-05', 'test123', 0),
(110, 3, 1, '2019-04-05', '', 109),
(111, 3, 1, '2019-04-05', '', 109),
(112, 3, 1, '2019-04-05', '', 109),
(113, 3, 1, '2019-04-05', '', 109),
(114, 3, 1, '2019-04-05', '', 109),
(115, 3, 1, '2019-04-05', '', 109),
(116, 3, 1, '2019-04-05', '', 109),
(117, 3, 1, '2019-04-05', '', 109),
(118, 3, 1, '2019-04-05', '', 109),
(119, 3, 1, '2019-04-05', '', 109),
(120, 3, 1, '2019-04-05', 'dasd', 109),
(121, 3, 1, '2019-04-05', 'dsadasd', 109),
(122, 3, 1, '2019-04-05', 'sadas', 109),
(123, 3, 1, '2019-04-05', 'dsadas', 109),
(124, 3, 1, '2019-04-05', 'dasdas', 109),
(125, 3, 1, '2019-04-05', 'dsadas', 0),
(126, 3, 1, '2019-04-05', 'dasdsadsad', 0),
(127, 3, 1, '2019-04-05', 'dasdas', 109),
(128, 3, 1, '2019-04-05', 'dasdasd', 0),
(129, 3, 1, '2019-04-05', 'asaaaaaa', 0),
(130, 3, 1, '2019-04-05', 'okeeeee', 128),
(131, 3, 1, '2019-04-05', 'okeeeee````111', 128),
(132, 3, 1, '2019-04-05', 'alo', 128),
(133, 3, 1, '2019-04-05', '111111111111', 0),
(134, 3, 1, '2019-04-05', 'dasdasd', 0),
(135, 3, 1, '2019-04-05', 'aaaaaaa', 0),
(136, 3, 1, '2019-04-05', 'dasdasd', 0),
(137, 3, 1, '2019-04-05', '1', 0),
(138, 3, 1, '2019-04-05', '2', 0),
(139, 3, 1, '2019-04-05', 'dsdsadas', 138),
(140, 3, 1, '2019-04-05', '3', 0),
(141, 3, 1, '2019-04-05', '4', 140),
(142, 3, 1, '2019-04-05', '5', 0),
(143, 3, 1, '2019-04-05', '6', 142),
(144, 3, 1, '2019-04-05', '7', 0),
(145, 3, 1, '2019-04-05', '8', 144),
(146, 3, 1, '2019-04-05', 'dadsadsadsad', 0),
(147, 3, 1, '2019-04-05', '', 0),
(148, 3, 1, '2019-04-05', '7', 0),
(149, 3, 1, '2019-04-05', '9', 148),
(150, 3, 1, '2019-04-05', 'aa', 0),
(151, 3, 1, '2019-04-05', 'qeqwe', 0),
(152, 3, 1, '2019-04-05', 'eqeqe', 0),
(153, 3, 1, '2019-04-05', 'fffff', 0),
(154, 3, 1, '2019-04-05', 'hhhh', 0),
(155, 3, 1, '2019-04-05', 'lllll', 0),
(156, 3, 1, '2019-04-05', 'll', 0),
(157, 3, 1, '2019-04-05', '', 0),
(158, 3, 1, '2019-04-05', 'uu', 0),
(159, 3, 1, '2019-04-05', 'dsad', 0),
(160, 3, 1, '2019-04-05', 'dasda', 0),
(161, 3, 1, '2019-04-05', 'dsadada', 0),
(162, 3, 1, '2019-04-05', 'dsadddd', 0),
(163, 3, 1, '2019-04-05', '1', 0),
(164, 3, 1, '2019-04-05', '2', 0),
(165, 3, 1, '2019-04-05', 'eeee', 161),
(166, 3, 1, '2019-04-05', '6', 0),
(167, 3, 1, '2019-04-05', '7', 166),
(168, 3, 1, '2019-04-05', '1', 166),
(169, 3, 1, '2019-04-05', 'aaa', 0);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `news_title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `news_content` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `news_description` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `news_image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `news_status` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `news_kind` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `user_id`, `category_id`, `news_title`, `news_content`, `news_description`, `news_image`, `news_status`, `news_kind`) VALUES
(1, 1, 1, 'MacBook Air 2018 là sự đột phá về công nghệ và thiết kế.', '<p>Chiếc laptop si&ecirc;u mỏng được y&ecirc;u th&iacute;ch nhất T&igrave;nh y&ecirc;u d&agrave;nh cho MacBook Air đ&atilde; quay trở lại với thiết kế mới. Bạn sẽ c&oacute; 3 phi&ecirc;n bản m&agrave;u bạc, x&aacute;m v&agrave; v&agrave;ng. MacBook Air mới mỏng hơn, nhẹ hơn, sở hữu m&agrave;n h&igrave;nh Retina rực rỡ, cảm biến v&acirc;n tay Touch ID, b&agrave;n ph&iacute;m c&aacute;ch bướm thế hệ mới nhất v&agrave; b&agrave;n di chuột cảm ứng lực Force Touch. Với chất liệu l&agrave;m từ 100% nh', '<p>M&agrave;n h&igrave;nh Retina 4 triệu điểm ảnh, sắc n&eacute;t đến từng chi tiết Lần đầu ti&ecirc;n một chiếc MacBook Air được trang bị m&agrave;n h&igrave;nh Retina. Với độ ph&acirc;n giải 2560 x 1600 pixels cho hơn 4 triệu điểm ảnh, bạn sẽ được<', '15590057_668456096657426_3896827261192227417_n.jpg', 'Đã Đăng', 'Hot'),
(2, 2, 2, 'MacBook Pro 15 Touch Bar 2018 là chiếc laptop mạnh nhất hiện nay cho công việc, với sự hỗ trợ từ Touch Bar thông minh sẽ thay đổi thói quen sử dụng laptop của bạn.', '<p>Vi xử l&yacute; Intel Core i7 thế hệ thứ 8 MacBook Pro 15 Touch Bar 2018 được trang bị bộ vi xử l&yacute; Intel Core i7 thế hệ thứ 8 mới nhất với 6 nh&acirc;n cực mạnh, mạnh hơn tới 70% so với thế hệ trước. Với tốc độ 2,2GHz Turbo Boost 4,1GHz, MacBook Pro 15 c&oacute; hiệu năng CPU si&ecirc;u nhanh, xử l&yacute; tuyệt vời mọi t&aacute;c vụ chuy&ecirc;n dụng. Bạn c&oacute; thể thao t&aacute;c thoải m&aacute;i với những ứng dụng nặng như rending video 3D; th&ecirc;m c&aacute;c hiệu ứng đặc biệ', '<p>Xử l&yacute; đồ họa tuyệt đỉnh Sử dụng GPU đồ họa rời Radeon Pro 555X cực mạnh, MacBook Pro 15 Touch Bar 2018 l&agrave; một trong những chiếc laptop xử l&yacute; đồ họa tốt nhất hiện nay. GPU n&agrave;y c&oacute; bộ nhớ 4GB GDDR5, cho hiệu suất t&', '1.jpg', 'Đã Đăng', 'Hot'),
(3, 1, 4, 'Việt Nam - Brunei: Chênh lệch đẳng cấp', 'Việt Nam - Brunei: 20h hôm nay 22/3, trên VnExpress.\r\n\r\nTháng 1/2018, HLV Park Hang-seo cầm đội U23 Việt Nam tham dự vòng chung kết U23 châu Á trong ánh mắt nghi ngờ. Không nhiều người tin rằng lứa cầu thủ vừa bị loại ngay từ vòng bảng SEA Games 2017 cách đó vài tháng, dưới sự dẫn dắt của một HLV đang tính chuyện nghỉ hưu, lại có thể làm nên chuyện ở sân chơi châu lục. Tuy nhiên, họ đã đưa người hâm mộ đi hết từ bất ngờ này tới ngạc nhiên khác khi tiến tới trận chung kết và chỉ chịu thua Uzbekis', 'Phần thắng trong trận ra quân vòng loại U23 châu Á hôm nay nghiêng hoàn toàn về phía thầy trò Park Hang-seo, khi đối thủ Brunei yếu kém mọi mặt.', '1.jpg', 'Đã Đăng', 'Hot'),
(4, 1, 4, 'Việt Nam rơi vào nhóm hạt giống thấp nhất SEA Games 2019', 'Nằm cùng Nhóm 4 với Việt Nam là Lào, Campuchia, Brunei và Timor Leste', 'Hôm nay, chủ nhà SEA Games 2019 Philippines công bố danh sách bốn nhóm hạt giống ở môn bóng đá nam. Cách xếp nhóm dựa trên thành tích của các đội tuyển ở SEA Games 2017.\r\n\r\nTại giải đấu cách đây hai năm ở Malaysia, U22 Việt Nam được dẫn dắt bởi HLV N', '3.png', 'Đã Đăng', 'Hot'),
(5, 1, 4, 'Park Hang-seo thừa nhận áp lực giành HC vàng SEA Games 2019', 'Ông từng công khai ý định chỉ dẫn dắt một đội tuyển trong năm 2019. Nhưng bây giờ, ông kiêm nhiệm cả đội U22 dự SEA Games 2019 lẫn đội tuyển quốc gia dự vòng loại World cup 2022. Cụ thể sự việc đó thế nào?\r\n\r\n- Năm 2018, các đội tuyển của Việt Nam trải qua nhiều giải đấu, đều rất thách thức. Tôi thấy nếu tập trung cho một đội tuyển, chúng ta sẽ có kết quả tốt hơn, nhất là quá trình phân tích cầu thủ. Trong năm 2019, có hai giải quan trọng là SEA Games và World Cup, với lịch thi đấu gần nhau. Nếu', 'HLV người Hàn Quốc chia sẻ về các vấn đề mà ông đang đối mặt ở các đội tuyển Việt Nam, trong cuộc họp báo ở trụ sở VFF chiều 13/3.', '4.jpg', 'Đã Đăng', ''),
(6, 1, 4, 'HLV Park Hang-seo được giao nhiệm vụ giành HC vàng SEA Games', '\"Đội phải giành HC vàng SEA Games 30. Bao nhiêu năm qua, Việt Nam chưa đoạt được tấm HC vàng này, nên người hâm mộ rất mong mỏi. Tôi biết nói ra chỉ tiêu này có thể sẽ gây áp lực cho đội, nhưng không thể nói khác được\", Bộ trưởng Nguyễn Ngọc Thiện chia sẻ.\r\n\r\nU23 Việt Nam đang hội quân chuẩn bị cho vòng loại U23 châu Á 2020. Đây cũng chính là những cầu thủ được HLV Park Hang-seo chuẩn bị cho chiến dịch săn HC vàng SEA Games diễn ra vào cuối năm tại Philippines. \"Chúng ta đã có thành tích rất tốt', 'Bộ trưởng Bộ Văn hoá, Thể thao, Du lịch Nguyễn Ngọc Thiện đến thăm đội U23 Việt Nam, sáng nay 8/3.', '5.jpg', 'Đã Đăng', 'Hot'),
(7, 1, 4, 'Thái Lan - Indonesia: Ai là đối trọng của Việt Nam ở bảng K', 'Trận mở màn vòng loại U23 châu Á 2020 hôm nay sẽ phần nào chỉ ra đối thủ thực sự của thầy trò Park Hang-seo.', 'Indonesia vừa vô địch U22 Đông Nam Á, sau khi vượt qua Việt Nam và Thái Lan. HLV Indra Sjafri giữ lại 19 cầu thủ vừa đăng quang ở đấu trường khu vực, và bổ sung một số cầu thủ - trong đó có Egy Maulana. Maulana là đội trưởng của Indonesia vào tứ kết ', '2.png', 'Đã Đăng', 'Hot'),
(8, 1, 4, 'Park Hang-seo cầm quân ở cả SEA Games và vòng loại World Cup', '\"Sáng 5/3, Bộ trưởng Bộ Văn hoá, Thể thao và Du lịch Nguyễn Ngọc Thiện làm việc với Liên đoàn Bóng đá Việt Nam (VFF) và HLV Park Hang-seo, đánh giá về các giải đấu sắp tới. Sau khi được chia sẻ về việc cả SEA Games 30 lẫn vòng loại World Cup 2022 đều rất quan trọng với Việt Nam, HLV Park Hang-seo đã chủ động đứng lên xin nhận trách nhiệm dẫn dắt cả đội U22 và đội tuyển quốc gia chinh chiến ở hai giải này\", một lãnh đạo VFF chia sẻ với VnExpress.', 'HLV người Hàn Quốc đổi ý, chủ động xin nắm đội U22 Việt Nam và đội tuyển Việt Nam, với điều kiện có thêm hai trợ lý đồng hương.', '6.jpg', 'Đã Đăng', 'Hot'),
(9, 1, 3, 'Sắp đến Tết té nước, lên kế hoạch đi du lich Bangkok(Thai Lan) ngay và luôn', 'Songkran là lễ hội được tổ chức chào mừng năm mới tại Thái Lan, Lào và Myanmar, nhưng thân quen nhất với du khách Việt vẫn là Thái Lan. Lễ hội bắt nguồn như một nghi lễ tôn giáo từ thế kỷ thứ 13 với ý nghĩa gột rửa mọi tội lỗi, điều không may mắn từ năm trước để bắt đầu một năm mới trong lành và sạch sẽ. Đến nay, đây vẫn là lễ hội té nước lớn nhất thế giới. Trước kia người dân chỉ dùng những chiếc bát nhỏ đựng nước để làm lễ trong gia đình, nhưng nay họ sử dụng cả xô, súng bắn nước, vòi xịt để t', 'Tết té nước (Songkran) theo truyền thống diễn ra từ 13 đến 15/4 hằng năm, nhưng tùy địa điểm, lễ hội có thể kéo dài 10 ngày hoặc cả tháng.', '7.jpg', 'Đã Đăng', ''),
(10, 1, 3, 'Giới trẻ thi nhau tìm hố nước hình trái tim ở hang Rái - Ninh Thuận', 'Hang Rái, nằm trên cung đường tỉnh lộ 702, đường đi từ TP Phan Rang đến vịnh Vĩnh Hy, là một trong những điểm du lịch nổi tiếng ở Ninh Thuận. Tháng 11 đến tháng 3 năm sau là thời điểm ngắm cảnh đẹp nhất, khi biển không động, rêu xanh mướt phủ trên rạng san hô cổ, lý tưởng để chụp những góc ảnh đẹp như cảnh tiên.\r\nĐường vào hang Rái không khó đi. Đây là một bãi đá tự nhiên có hình thù kỳ quái, tạo nên nhiều hang nhỏ và là nơi sinh sống của loài rái cá, cùng nhiều cây rái mọc gần đó nên có tên gọi', 'Hố nhỏ nằm ẩn dưới làn nước mà tinh mắt lắm bạn mới có thể phát hiện ra.', '8.jpg', 'Đã Đăng', ''),
(11, 1, 3, 'nhiều loại thực phẩm cũng có nguy cơ sán tiềm ẩn', 'Nem chua là đặc sản không phải chỉ riêng của tỉnh thành nào mà có rất nhiều phiên bản ở các địa phương từ Bắc đến Nam. Nem chua mỗi vùng đều có hương vị riêng: nem chua Thanh Hóa, Đông Ba (Huế), nem Ninh Hòa (Khánh Hòa), nem Lai Vung (Đồng Tháp)...\r\n\r\nTuy cách đóng gói, công đoạn có nhiều điểm khác nhau nhưng nhìn chung đều làm từ thịt lợn và chỉ dùng thịt ở mông và thịt thăn băm nhuyễn hay giã bằng chày và cối. Sau đó, người ta cho các gia vị như muối, tiêu, đường, tỏi... trộn cùng bì lợn thái ', 'Nem chua, gỏi cá, sushi, rau sống, ốc hay ngao đều là những loại thực phẩm có thể chứa giun, sán.', '9.png', 'Đã Đăng', ''),
(12, 1, 3, 'Kinh nghiệm nấu ăn bí truyền của bếp trưởng hai sao Michelin', 'Đầu bếp Alain Dutournier, người sở hữu hai nhà hàng được gắn 2 sao Michelin tại Pháp và từng nấu ăn cho nhiều ngôi sao nổi tiếng, các chính trị gia, vừa quay trở lại Việt Nam để chia sẻ kinh nghiệm nấu nướng. Sinh ra và lớn lên trong một ngôi làng nhỏ thuộc miền tây nam nước Pháp, ngay từ thời thơ ấu, Alain Dutournier đã có đam mê du lịch và ẩm thực. Trải qua nhiều khó khăn trong cuộc sống và sự nghiệp, từng bôn ba nhiều nơi để học tập và nấu ăn, ông đã đạt được nhiều đỉnh cao trong nghề nghiệp.', 'Để tỏi bớt mùi hăng, ông thường chần trước khi xào. Ông cũng thường kết hợp tỏi với gừng khi nấu ăn vì tốt cho dạ dày.', '10.jpg', 'Đã Đăng', ''),
(15, 1, 7, 'test mod', '<p>hellllllllllllllllllllllllllll</p>\r\n', '<p>hellllllllllllllll</p>\r\n', '14212618_1747743395495308_5431670792513172327_n5.jpg', 'Ẩn', ''),
(17, 1, 2, 'aloalo12121', '<p>saasdassad</p>\r\n', '<p>asdasdsasadas</p>\r\n', '14721460_754453548026117_203554812709524443_n3.jpg', 'Đã Đăng', ''),
(18, 1, 6, 'test phan trang', '<p>sdad a</p>\r\n', '<p>asdsadsdads</p>\r\n', '51.jpg', 'Đã Đăng', 'Hot'),
(23, 1, 1, 'sadasds', '<p>sdaasdasadsdssasdasd</p>\r\n', '<p>sdasassd</p>\r\n', '2.jpg', 'Chờ Duyệt', 'Hot'),
(27, 1, 1, 'abc1', '<p>aaaaa</p>\r\n', '<p>a</p>\r\n', '907__6124-slide1.jpg', 'Ẩn', 'Hot'),
(30, 1, 2, 'Kênh YouTube hơn 2 triệu fan của \"Khá Bảnh\" chính thức bị xóa sổ', '<p>Thời gian qua, k&ecirc;nh<strong>&nbsp;YouTube &quot;Kh&aacute; Bảnh&quot;</strong>&nbsp;của Ng&ocirc; B&aacute; Kh&aacute; (ở Bắc Ninh) đ&atilde; g&acirc;y x&ocirc;n xao cộng đồng mạng bởi nhiều video ti&ecirc;u cực, g&acirc;y t&aacute;c động xấu tới x&atilde; hội. Mặc d&ugrave; c&oacute; nội dung xấu nhưng k&ecirc;nh YouTube lại n&agrave;y thu h&uacute;t hơn 2 triệu người theo d&otilde;i, chủ yếu l&agrave; c&aacute;c bạn trẻ. Trước thực trạng tr&ecirc;n, cơ quan quản l&yacute; đ&atilde; v&a', '<p>Đến s&aacute;ng 3/4, k&ecirc;nh &quot;Kh&aacute; Bảnh&quot; đ&atilde; kh&ocirc;ng c&ograve;n tồn tại tr&ecirc;n YouTube.</p>\r\n', 'abc.jpg', 'Chờ Duyệt', 'Hot'),
(31, 1, 2, 'Gỡ cài đặt UC Browser ngay lập tức để tránh bị tấn công từ xa', '<p>UC Browser được ph&aacute;t triển bởi UCWeb (thuộc sở hữu của Alibaba), đ&acirc;y l&agrave; một trong những tr&igrave;nh duyệt di động phổ biến nhất hiện nay với hơn 500 triệu người d&ugrave;ng tr&ecirc;n to&agrave;n thế giới, đặc biệt l&agrave; ở Trung Quốc v&agrave; Ấn Độ.</p>\r\n\r\n<p>Theo trang&nbsp;Hacker News, UC Browser hiện đang d&iacute;nh một lỗ hổng nghi&ecirc;m trọng, c&oacute; thể bị tin tặc lợi dụng để thực hiện c&aacute;c tấn c&ocirc;ng từ xa, thực thi m&atilde; t&ugrave;y &yacute', '<h2>Nếu đang sử dụng UC Browser tr&ecirc;n điện thoại, bạn h&atilde;y xem x&eacute;t đến việc gỡ c&agrave;i đặt ứng dụng ngay lập tức để tr&aacute;nh bị tấn c&ocirc;ng từ xa</h2>\r\n', 'cun.png', 'Đã Đăng', 'Hot'),
(32, 1, 1, 'Google Dịch: 5 mẹo “nằm lòng” ai cũng nên biết', '<p>Google Dịch l&agrave; dịch vụ miễn ph&iacute; của&nbsp;<a href=\"https://www.24h.com.vn/google-c407e4341.html\" title=\"Google\">Google</a>, dịch nhanh c&aacute;c từ, cụm từ v&agrave; trang web giữa tiếng Việt v&agrave; hơn 100 ng&ocirc;n ngữ kh&aacute;c. Kể từ th&aacute;ng 5/2017, Google Dịch phục vụ hơn 500 triệu người d&ugrave;ng mỗi ng&agrave;y. Nhờ c&oacute; c&ocirc;ng cụ n&agrave;y, ng&ocirc;n ngữ kh&ocirc;ng c&ograve;n l&agrave; r&agrave;o cản lớn như trước đ&acirc;y với những người &ldquo', '<h2>Google Dịch l&agrave; dịch vụ dịch thuật miễn ph&iacute; của Google. Bạn chỉ cần 5 mẹo cơ bản để tận dụng tối đa lợi &iacute;ch của Google Dịch.</h2>\r\n', '21.jpg', 'Đã Đăng', 'Hot'),
(33, 2, 11, 'Cựu Viện phó VKS sàm sỡ bé gái trong thang máy nói gì?', '<p>Chiều 3-4, x&aacute;c nhận với&nbsp;PLO.VN,&nbsp;&ocirc;ng&nbsp;Nguyễn Hữu Linh, cựu Viện ph&oacute; VKSND TP Đ&agrave; Nẵng cho biết thời điểm đi&nbsp;trong thang m&aacute;y, &ocirc;ng n&agrave;y kh&ocirc;ng sử dụng bia rượu.</p>\r\n\r\n<p>&Ocirc;ng Linh cho rằng m&igrave;nh chỉ nựng b&eacute; g&aacute;i v&agrave; từ chối n&oacute;i th&ecirc;m về l&yacute; do.</p>\r\n\r\n<p>Trước đ&oacute;, một nguồn tin c&oacute; thẩm quyền x&aacute;c nhận với&nbsp;PLO.VN&nbsp;rằng người c&oacute; h&agrave;nh vi&nb', '<h3><span style=\"font-family:Arial,Helvetica,sans-serif\">&Ocirc;ng Nguyễn Hữu Linh, cựu Viện ph&oacute; VKSND TP Đ&agrave; Nẵng x&aacute;c nhận &ocirc;ng ch&iacute;nh l&agrave; người xuất hiện trong clip &quot;s&agrave;m sỡ b&eacute; g&aacute;i ở quậ', 'bm.jpg', 'Đã Đăng', 'Hot'),
(34, 2, 2, 'Toàn bộ 3 quân chủng Ấn Độ sẵn sàng “dội bão lửa” Pakistan', '<p>Theo Sputnik, trong cuộc họp nội c&aacute;c h&ocirc;m 2.4, cố vấn an ninh quốc gia Ajit Doval n&oacute;i với Thủ tướng Ấn Độ Narendra Modi rằng, to&agrave;n bộ 3 qu&acirc;n chủng &ndash; lục qu&acirc;n, hải qu&acirc;n v&agrave; kh&ocirc;ng qu&acirc;n &ndash; đ&atilde; sẵn s&agrave;ng &ldquo;dội b&atilde;o lửa&rdquo; Pakistan.</p>\r\n\r\n<p>&Ocirc;ng Modi được cho l&agrave; đ&atilde; y&ecirc;u cầu qu&acirc;n đội đảm bảo rằng kh&ocirc;ng c&oacute; d&acirc;n thường ở c&aacute;c quốc gia l&aacute;ng ', '<h3>Th&ocirc;ng tin n&agrave;y xuất hiện trong bối cảnh Ấn Độ v&agrave; Pakistan đ&atilde; giao tranh &aacute;c liệt trong 3 ng&agrave;y li&ecirc;n tiếp v&agrave; chưa c&oacute; dấu hiệu dừng lại.</h3>\r\n', 'an.png', 'Đã Đăng', 'Hot');

-- --------------------------------------------------------

--
-- Table structure for table `permission`
--

CREATE TABLE `permission` (
  `per_id` int(11) NOT NULL,
  `per_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `permission`
--

INSERT INTO `permission` (`per_id`, `per_name`) VALUES
(1, 'admin'),
(2, 'mod'),
(3, 'user'),
(13, 'mod'),
(15, 'mod'),
(17, 'mod'),
(19, 'mod');

-- --------------------------------------------------------

--
-- Table structure for table `permission_detail`
--

CREATE TABLE `permission_detail` (
  `per_detail_id` int(11) NOT NULL,
  `per_id` int(11) NOT NULL,
  `action_code` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `check_action` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `permission_detail`
--

INSERT INTO `permission_detail` (`per_detail_id`, `per_id`, `action_code`, `check_action`) VALUES
(1, 1, 'acount', '9'),
(2, 1, 'news', '9'),
(3, 1, 'category_news', '9'),
(4, 1, 'post', '9'),
(5, 1, 'comment', '1,4'),
(9, 1, 'my_news', '9'),
(10, 2, 'my_news', '9'),
(31, 13, 'acount', '2,1'),
(32, 13, 'news', '9'),
(33, 13, 'comment', '9'),
(35, 15, 'acount', '1'),
(36, 15, 'news', '1'),
(37, 15, 'category_news', '1'),
(38, 15, 'post', '1'),
(39, 15, 'comment', '1'),
(40, 15, 'my_news', '1'),
(42, 17, 'acount', '3'),
(74, 19, 'acount', '1'),
(75, 19, 'news', '1'),
(76, 19, 'category_news', '1'),
(77, 19, 'post', '1'),
(78, 19, 'comment', '1'),
(79, 19, 'my_news', '1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `per_id` int(11) NOT NULL,
  `user_image` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `email`, `fullname`, `per_id`, `user_image`) VALUES
(1, 'trunggg', 'e10adc3949ba59abbe56e057f20f883e', 'trung@gmail.com', 'Doan Trung', 1, '11.png'),
(2, 'modD', 'e10adc3949ba59abbe56e057f20f883e', 'mod@ows.com', 'AnTran', 2, 'mod.jpg'),
(3, 'UserD', 'e10adc3949ba59abbe56e057f20f883e', 'user@ows.com', 'BinhCao', 3, '2.jpg'),
(11, 'duong', 'e10adc3949ba59abbe56e057f20f883e', 'khongcoten19962014@gmail.com', 'Trung Đoàn', 13, '6.jpg'),
(13, 'Tuann1', 'e10adc3949ba59abbe56e057f20f883e', '', 'Trung Đoàn1', 15, '311.jpg'),
(15, 'trung', 'e10adc3949ba59abbe56e057f20f883e', 'ok@gmail.com', 'Trung Đoàn', 17, '31.jpg'),
(16, 'mod11', 'e10adc3949ba59abbe56e057f20f883e', '', 'moddddd', 19, '312.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category_news`
--
ALTER TABLE `category_news`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `permission`
--
ALTER TABLE `permission`
  ADD PRIMARY KEY (`per_id`);

--
-- Indexes for table `permission_detail`
--
ALTER TABLE `permission_detail`
  ADD PRIMARY KEY (`per_detail_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category_news`
--
ALTER TABLE `category_news`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `permission`
--
ALTER TABLE `permission`
  MODIFY `per_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `permission_detail`
--
ALTER TABLE `permission_detail`
  MODIFY `per_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
