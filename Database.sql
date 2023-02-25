-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2020 at 08:41 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `user` varchar(250) NOT NULL,
  `pass` varchar(500) NOT NULL,
  `name` varchar(250) NOT NULL,
  `admin` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `cash` double NOT NULL,
  `points` int(11) NOT NULL,
  `avatar` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `user`, `pass`, `name`, `admin`, `time`, `cash`, `points`, `avatar`) VALUES
(1, 'trieu', '2af1aa50647445b5a100830b6470806c', 'Lê Minh Triệu', 1, 1593129818, 492967.5, 192, 'img/userd.png'),
(2, 'BÃ© Dá»©a', 'ed7b54596b4e6ff634c75e796b6169cc', 'Vu Thi Thom', 1, 1590907640, 0, 0, 'img/thomvu.jpg'),
(8, 'inudaa', '2af1aa50647445b5a100830b6470806c', 'Le Minh Trieu', 1, 1591154320, 0.15, 0, 'img/lmt.jpg'),
(9, 'truongnhatruc', 'f24614fb41792b8a1445db99360a1dc7', 'Truong Nha Truc', 1, 1591154114, 4802.65, 0, 'img/truc.jpg'),
(10, 'trieuday', '2af1aa50647445b5a100830b6470806c', 'Le Minh Trieu', 1, 1592918816, 498900, 12, 'img/userd.jpg'),
(13, 'trieudayy', '2af1aa50647445b5a100830b6470806c', 'Lê Minh Triệu', 1, 1592541950, 499950, 12, 'img/userd.png'),
(12, 'van123', '50581f57854ce2065fb7a1107305da0f', 'Ng Thi Thanh Van', 1, 1592928801, 30551, 0, 'img/tvan.jpg'),
(14, 'trieune', 'e0c2beeaba15e8f300599dfadd0c6f0f', 'LÃª Minh Triá»‡u', 1, 1592922521, 0.15, 0, 'img/userd.png'),
(15, 'trieu2', 'e0c2beeaba15e8f300599dfadd0c6f0f', 'Lê Minh Triệu', 1, 1592968047, 49550, 12, 'img/userd.png'),
(16, 'admin1', 'e0c2beeaba15e8f300599dfadd0c6f0f', 'Lê Minh Triệu', 1, 1593289487, 4450, 12, 'img/userd.png'),
(17, 'vuthithom2001', '88ca8b49400a214a998faf33bd66f4ec', 'vuthithom', 0, 1593133979, 0.15, 0, 'img/userd.png');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `text` varchar(250) NOT NULL,
  `belong` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `text`, `belong`, `time`, `type`) VALUES
(451, ':D:D:D', 12, 1592465004, 0),
(452, 'FILE: <a href=\'img/uploads/01_Home_Corp.jpg\' target=\'_black\'>01_Home_Corp.jpg</a>', 1, 1592465082, 0),
(453, 'FILE: <a href=\'img/uploads/5d828d976f24eb1a752053b5.jpg\' target=\'_black\'>5d828d976f24eb1a752053b5.jpg</a>', 12, 1592465226, 0),
(454, 'vtriplet', 12, 1592465285, 1),
(455, 'hi', 1, 1592465299, 0),
(456, ':> V Triple T', 12, 1592466622, 1),
(457, 'OK', 1, 1592473579, 1),
(472, 'Hello class', 1, 1592536266, 1),
(475, 'Hello', 1, 1592539347, 0),
(476, 'sdaasij', 1, 1592539792, 0),
(477, 'asd', 1, 1592539828, 0),
(478, 'V Triple T', 10, 1592539938, 1),
(479, '</3<3<3', 1, 1592539993, 0),
(480, 'HELLO', 13, 1592542189, 0),
(481, ':)', 13, 1592542206, 0),
(482, ':d', 13, 1592542207, 0),
(483, '<3', 13, 1592542208, 0),
(484, ':D', 13, 1592542224, 0),
(485, 'hello', 13, 1592542362, 0),
(486, 'hello', 1, 1592560224, 0),
(487, '33', 1, 1592561281, 0),
(488, 'asd', 1, 1592568709, 0),
(489, 'eeeeeeeeeee', 1, 1592568969, 1),
(490, 'r', 1, 1592568971, 1),
(491, 't', 1, 1592568971, 1),
(492, 'V Triple T', 1, 1592568983, 0),
(493, 'V Triple T', 1, 1592568988, 1),
(494, '34', 1, 1592577834, 0),
(495, 'ee', 1, 1592799595, 0),
(496, 'ee', 1, 1592799598, 0),
(497, 'ee', 1, 1592799599, 0),
(498, 'ckao', 1, 1592923874, 0),
(499, '<3<3<3<3', 1, 1592924300, 0),
(500, 'Chào', 1, 1592933718, 0),
(501, 'Chào thầy cô', 16, 1593132088, 0),
(502, 'helo', 16, 1593135201, 0),
(503, 'asd', 16, 1593287893, 0);

-- --------------------------------------------------------

--
-- Table structure for table `code`
--

CREATE TABLE `code` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `belong` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `auth` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `buy` int(11) NOT NULL,
  `fullname` varchar(250) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `cmnd` varchar(15) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `bod` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `carid` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `code`
--

INSERT INTO `code` (`id`, `name`, `belong`, `time`, `auth`, `status`, `date`, `buy`, `fullname`, `phone`, `cmnd`, `gender`, `bod`, `address`, `email`, `carid`) VALUES
(72, '480ENJ-HJ54L9-0RPOP1', 1, 1, 10, 0, 1623678762, 1592142762, 'LÃª Minh Triá»‡u', '0903898708', '000000000000', 'Nam', '2000-08-23', 'Nguyá»…n ÄÃ¬nh Chiá»ƒu Q3 TPHCM', 'trieu6542@gmail.com', ''),
(71, 'GCI8LW-QNT260-9CLEU3', 1, 1, 1, 0, 1623615525, 1592079525, 'Le Minh Trieu', '0903898708', '000000000000', 'Nam', '2000-08-23', 'nguyen dinh chieu hehe\r\n', 'trieu6542@gmail.com', ''),
(73, 'XWQOR9-8C706Z-YURO74', 1, 1, 1, 0, 1623730050, 1592194050, 'Lê Minh Triệu', '0903898708', '000000000000', 'Nam', '2000-08-23', 'Nguyễn Đình CHiểu Q3 TPHCM', 'trieu6542@gmail.com', ''),
(74, 'XD4ZN2-ACZ5MF-WOHX76', 1, 1, 1, 0, 1623730823, 1592194823, 'Lê Minh Triệu', '0903898708', '000000000000', 'Nam', '2000-08-23', 'Nguyễn Đình CHiểu Q3', 'trieu6542@gmail.com', ''),
(75, '26R6JA-RQQZDZ-WJLGI5', 1, 1, 10, 0, 1623740611, 1592204611, 'Le Minh Trieu', '0903898708', '000000000000', 'Nam', '2000-08-23', 'Ngeeeeeeee', 'trieu6542@gmail.com', ''),
(76, '0AM1KA-I3Y179-UXHFN6', 1, 1, 10, 0, 1623740766, 1592204766, 'eeeeeeeeeeee', '0903898708', '000000000000', 'Nam', '2000-08-23', 'oaskdaoskdoasd', 'trieu@gi.com', ''),
(77, 'UAQ86G-JKWZTI-WNOACA', 1, 1, 1, 0, 1623859841, 1592323841, 'LÃª Minh Triá»‡u', '0903898708', '000000000000', 'Nam', '2000-08-23', 'Nguyá»…n ÄÃ¬nh ChiÃªu', 'trieu6542@gmail.com', ''),
(78, 'VU2RTD-5JY5CN-ERCQQT', 1, 1, 12, 0, 1624001608, 1592465608, 'Nguyá»…n Thá»‹ Thanh VÃ¢n', '0826096937', '123454667', 'Nu', '1999-08-19', 'p tÃ¢n thá»›i nháº¥t, quáº­n 12', 'gfhdfh@gmail.com', ''),
(79, 'Q2GVJK-O9WHBQ-72CLTI', 1, 1, 12, 0, 1624002163, 1592466163, 'Nguyen Ngoc Yen Thao', '73678902', '7545688799', 'Nu', '1990-11-11', 'Khu Pho 2, Phuong 1, Thi xa Tay Ninh, Tay Ninh', 'yennguyenthingoc66@gmail.com', ''),
(80, 'OFAZOU-PB81ON-JX0863', 1, 1, 1, 0, 1624002460, 1592466460, 'Yáº¾N NGUYá»„N THá»Š NGá»ŒC Yáº¾N', '73678902', '000000000000', 'Nam', '2000-02-08', 'tÃ‚y ninh', 'yennguyenthingoc66@gmail.com', ''),
(81, 'AGPEOR-1OYX0I-LJK0RN', 1, 1, 1, 0, 1624042827, 1592506827, 'LÃª Minh Triá»‡u', '0903898708', '000000000000', 'Nam', '2000-08-23', 'Nguyá»…n ÄÃ¬nh Chiá»ƒu\r\n', 'trieu6542@gmail.com', ''),
(82, '0VKIJA-J4B5O5-S0GK32', 1, 1, 1, 0, 1624045551, 1592509551, 'LÃª Minh Triá»‡u', '0903898708', '000000000000', 'Nam', '2000-08-23', '3333333333333', 'trieu6542@gmail.com', ''),
(83, '8C3934-EVVZC5-FG46YN', 1, 1, 1, 0, 1624073580, 1592537580, 'LÊ minh triệu', '0903898708', '000000000000', 'Nam', '2000-08-23', 'Nguyễn đình chiểu', 'trieu6542@gmail.com', ''),
(84, 'AJBJIJ-9S4EDO-CRJR8D', 1, 1, 13, 0, 1624078141, 1592542141, 'LÊ MINH TRIỆU', '0903898708', '000000000000', 'Nam', '2000-08-09', 'NGUYENDINHCHIEU\r\n', 'TRIEU6542@GMAIL.CO,M', ''),
(85, 'D4GKJS-LUBJFC-RH4QH1', 1, 1, 1, 0, 1624454528, 1592918528, 'LÃª nÃ¨', '000000000000000', '000000000000', 'Nam', '2000-02-03', 'nguyen dinh chieu', 'trieu6542@gmail.com', ''),
(86, 'XNO9CO-9F7BQ1-A7QNV8', 3, 1, 1, 0, 1624454661, 1592918661, 'LÃª NÃ¨', '00000000000000', '000000000000', 'Nam', '2000-02-03', 'nguyen dinh chieu', '22i@aiikd.com', ''),
(87, '95AAAU-U3MGGJ-PZTVDI', 1, 1, 10, 0, 1624454842, 1592918842, 'LÃª nÃ¨', '00000000000', '000000000000', 'Nam', '2000-08-30', 'triá»‡u Ä‘Ã¢y nÃ¨\r\n', 'trieu@iam.com', ''),
(88, '5NJAVK-9PP85Y-89XN0U', 7, 1, 1, 0, 1624459541, 1592923541, 'LÃª Minh Triá»‡u', '000000000000', '000000000000', 'Nam', '2000-08-23', 'Nguyen Dinh Chieu\r\n', 'trieu@gmail.com', ''),
(89, '1O25S8-WS7RQT-0W8HEN', 1, 1, 1, 0, 1624469904, 1592933904, 'Lê Minh Triệu', '00000000000', '000000000000', 'Nam', '2000-08-23', 'Nguyen Dinh Chieu', 'trieu@im.com', ''),
(90, '760H6F-78TWVH-F2GP75', 1, 1, 15, 0, 1624501781, 1592965781, 'Lê Triệu', '0000000000', '000000000000', 'Nam', '2000-08-23', 'Nguyen Dinh Chieu', 'trieu6542@gmail.com', ''),
(91, '5SBWBK-2P0DUH-F4TQL8', 4, 1, 1, 0, 1624666760, 1593130760, 'Lê Triệu', '0903898708', '000000000000', 'Nam', '2020-06-12', 'Nguyễn Đình Chiểu', 'trieu6542@gmail.com', '00000000000000'),
(92, '8FB1O2-B8R7A4-V479NE', 3, 1, 16, 0, 1624670568, 1593134568, 'Lê Triệu', '0903898708', '123456789', 'Nam', '2020-06-04', '24 Phan Liem', 'trieu@gmail.com', '56-hdjedkq');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `admin` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `name`, `image`, `admin`) VALUES
(1, 'Zurich Company', 'zurich.png', 12),
(2, 'icar Company', 'icar.jpg', 1),
(3, 'Safe Company', 'safe.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `groupchat`
--

CREATE TABLE `groupchat` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `data` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groupchat`
--

INSERT INTO `groupchat` (`id`, `name`, `data`) VALUES
(1, 'V Triple T', 0);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `time` int(11) NOT NULL,
  `buyer` int(11) NOT NULL,
  `belong` int(11) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `name`, `time`, `buyer`, `belong`, `price`) VALUES
(12, 'History', 1591013484, 1, 0, 15),
(13, 'Revenue', 1591013484, 0, 1, 12.75),
(14, 'History', 1591013686, 1, 0, 15),
(15, 'Revenue', 1591013686, 0, 1, 12.75),
(16, 'History', 1591013801, 1, 0, 15),
(17, 'Revenue', 1591013801, 0, 0, 12.75),
(18, 'History', 1591014005, 1, 0, 15),
(19, 'Revenue', 1591014005, 0, 1, 12.75),
(20, 'History', 1591014013, 1, 0, 15),
(21, 'Revenue', 1591014013, 0, 1, 12.75),
(22, 'History', 1591014134, 1, 0, 15),
(23, 'Revenue', 1591014134, 0, 1, 12.75),
(24, 'History', 1591021227, 1, 0, 15),
(25, 'Revenue', 1591021227, 0, 1, 12.75),
(26, 'History', 1591021263, 1, 0, 15),
(27, 'Revenue', 1591021263, 0, 1, 12.75),
(28, 'History', 1591153440, 1, 0, 50),
(29, 'Revenue', 1591153440, 0, 1, 42.5),
(30, 'History', 1591154065, 1, 0, 50),
(31, 'Revenue', 1591154065, 0, 1, 42.5),
(32, 'History', 1591154155, 1, 0, 150),
(33, 'Revenue', 1591154155, 0, 9, 127.5),
(34, 'History', 1591157561, 1, 0, 150),
(35, 'Revenue', 1591157561, 0, 9, 127.5),
(36, 'History', 1591178120, 1, 0, 150),
(37, 'Revenue', 1591178120, 0, 9, 127.5),
(38, 'History', 1591178235, 1, 0, 150),
(39, 'Revenue', 1591178235, 0, 9, 127.5),
(40, 'History', 1591178324, 1, 0, 150),
(41, 'Revenue', 1591178324, 0, 9, 127.5),
(42, 'History', 1591255143, 1, 0, 50),
(43, 'Revenue', 1591255143, 0, 9, 42.5),
(44, 'History', 1592040632, 1, 0, 15),
(45, 'History', 1592040752, 1, 0, 50),
(46, 'Revenue', 1592040752, 0, 9, 42.5),
(47, 'History', 1592040846, 1, 0, 50),
(48, 'Revenue', 1592040846, 0, 9, 42.5),
(49, 'History', 1592041085, 1, 0, 50),
(50, 'Revenue', 1592041085, 0, 9, 42.5),
(51, 'History', 1592041326, 1, 0, 500),
(52, 'History', 1592041417, 1, 0, 500),
(53, 'History', 1592041424, 1, 0, 500),
(54, 'History', 1592041475, 1, 0, 500),
(55, 'History', 1592041800, 11, 0, 50),
(56, 'Revenue', 1592041800, 0, 9, 42.5),
(57, 'History', 1592041999, 11, 0, 150),
(58, 'Revenue', 1592041999, 0, 9, 127.5),
(59, 'History', 1592042126, 11, 0, 50),
(60, 'Revenue', 1592042126, 0, 9, 42.5),
(61, 'History', 1592042234, 11, 0, 50),
(62, 'Revenue', 1592042234, 0, 9, 42.5),
(63, 'History', 1592042243, 11, 0, 50),
(64, 'Revenue', 1592042243, 0, 9, 42.5),
(65, 'History', 1592042249, 11, 0, 50),
(66, 'Revenue', 1592042249, 0, 9, 42.5),
(67, 'History', 1592042311, 11, 0, 50),
(68, 'Revenue', 1592042311, 0, 9, 42.5),
(69, 'History', 1592042364, 11, 0, 50),
(70, 'Revenue', 1592042364, 0, 9, 42.5),
(71, 'History', 1592042375, 11, 0, 50),
(72, 'Revenue', 1592042375, 0, 9, 42.5),
(73, 'History', 1592042395, 11, 0, 50),
(74, 'Revenue', 1592042395, 0, 9, 42.5),
(75, 'History', 1592042479, 11, 0, 50),
(76, 'Revenue', 1592042479, 0, 9, 42.5),
(77, 'History', 1592042551, 11, 0, 50),
(78, 'Revenue', 1592042551, 0, 9, 42.5),
(79, 'History', 1592042683, 11, 0, 50),
(80, 'Revenue', 1592042683, 0, 9, 42.5),
(81, 'History', 1592042725, 11, 0, 50),
(82, 'Revenue', 1592042725, 0, 9, 42.5),
(83, 'History', 1592079525, 1, 0, 50),
(84, 'Revenue', 1592079525, 0, 9, 42.5),
(85, 'History', 1592142762, 10, 0, 50),
(86, 'Revenue', 1592142762, 0, 9, 42.5),
(87, 'History', 1592194050, 1, 0, 500),
(88, 'Revenue', 1592194050, 0, 9, 425),
(89, 'History', 1592194823, 1, 0, 500),
(90, 'Revenue', 1592194823, 0, 9, 425),
(91, 'History', 1592204611, 10, 0, 500),
(92, 'Revenue', 1592204611, 0, 9, 425),
(93, 'History', 1592204766, 10, 0, 500),
(94, 'Revenue', 1592204766, 0, 9, 425),
(95, 'History', 1592323841, 1, 0, 500),
(96, 'Revenue', 1592323841, 0, 9, 425),
(97, 'History', 1592465608, 12, 0, 500),
(98, 'Revenue', 1592465608, 0, 9, 425),
(99, 'History', 1592466163, 12, 0, 700),
(100, 'Revenue', 1592466163, 0, 9, 595),
(101, 'History', 1592466460, 1, 0, 700),
(102, 'Revenue', 1592466460, 0, 12, 595),
(103, 'History', 1592506827, 1, 0, 150),
(104, 'Revenue', 1592506827, 0, 12, 127.5),
(105, 'History', 1592509551, 1, 0, 700),
(106, 'Revenue', 1592509551, 0, 12, 595),
(107, 'History', 1592537580, 1, 0, 50),
(108, 'Revenue', 1592537580, 0, 12, 42.5),
(109, 'History', 1592542141, 13, 0, 50),
(110, 'Revenue', 1592542141, 0, 12, 42.5),
(111, 'History', 1592918528, 1, 0, 150),
(112, 'Revenue', 1592918528, 0, 12, 127.5),
(113, 'History', 1592918661, 1, 0, 150),
(114, 'Revenue', 1592918661, 0, 12, 127.5),
(115, 'History', 1592918842, 10, 0, 50),
(116, 'Revenue', 1592918842, 0, 12, 42.5),
(117, 'History', 1592923541, 1, 0, 150),
(118, 'History', 1592933904, 1, 0, 450),
(119, 'History', 1592965781, 15, 0, 450),
(120, 'History', 1593130760, 1, 0, 10),
(121, 'Revenue', 1593130760, 0, 12, 8.5),
(122, 'History', 1593134568, 16, 0, 50),
(123, 'Revenue', 1593134568, 0, 12, 42.5);

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `belong` int(11) NOT NULL,
  `auth` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `belong`, `auth`, `status`) VALUES
(24, 7, 14, 1),
(25, 5, 14, 0),
(26, 3, 1, 0),
(27, 1, 15, 1),
(28, 1, 1, 1),
(29, 4, 1, 1),
(30, 4, 16, 1),
(31, 2, 16, 1),
(32, 1, 16, 0),
(33, 3, 16, 0);

-- --------------------------------------------------------

--
-- Table structure for table `packet`
--

CREATE TABLE `packet` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `belong` int(11) NOT NULL,
  `vehicle` int(11) NOT NULL,
  `image` varchar(250) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `coupon` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `likes` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `packet`
--

INSERT INTO `packet` (`id`, `name`, `price`, `quantity`, `belong`, `vehicle`, `image`, `description`, `coupon`, `total`, `likes`) VALUES
(1, 'Zurich 01', 450, 498, 1, 1, 'zurich.png', '4 Wheels 80% Cover If have an accident about Register Insurance for that car', 1, 51400, 503),
(2, 'Zurich 02', 50, 50, 1, 2, 'zurich.png', '25% Cover', 3, 2000, 2),
(3, 'Zurich 03', 50, 499, 1, 2, 'zurich.png', '2 Wheels 55% Cover If have an accident about Register Insurance for that car', 2, 2500, 145),
(4, 'Zurich 04', 10, 499, 1, 2, 'zurich.png', '2 Wheels 25% Cover If have an accident about Register Insurance for that car', 0, 1512, 4),
(5, 'Zurich 05', 10, 500, 1, 2, 'zurich.png', '2 Wheels 25% Cover If have an accident about Register Insurance for that car', 0, 3150, 3),
(7, 'ICar 1', 150, 499, 2, 1, 'icar.jpg', '4 Wheels 25% Cover If have an accident about Register Insurance for that car', 0, 150, 4),
(8, 'Safe 01', 50, 50, 3, 1, 'safe.jpg', '25% Cover', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `rate`
--

CREATE TABLE `rate` (
  `id` int(11) NOT NULL,
  `belong` int(11) NOT NULL,
  `auth` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `text` varchar(250) NOT NULL,
  `star` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rate`
--

INSERT INTO `rate` (`id`, `belong`, `auth`, `title`, `text`, `star`) VALUES
(23, 1, 15, 'Sản phẩm tốt', '5 sao,5 sao,5 sao,5 sao,5 sao,', 5),
(24, 3, 1, '333', '333', 5),
(25, 1, 1, 'Bảo hiểm không tốt !!!', '1 sao1 sao1 sao1 sao1 sao1 sao1 sao1 sao1 sao1 sao1 sao1 sao1 sao', 1),
(26, 3, 16, 'tot', '5 sao', 5);

-- --------------------------------------------------------

--
-- Table structure for table `thememenu`
--

CREATE TABLE `thememenu` (
  `id` int(11) NOT NULL,
  `nameVN` varchar(250) NOT NULL,
  `nameEN` varchar(250) NOT NULL,
  `href` varchar(250) NOT NULL,
  `data` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf16;

--
-- Dumping data for table `thememenu`
--

INSERT INTO `thememenu` (`id`, `nameVN`, `nameEN`, `href`, `data`) VALUES
(1, 'Trang Chủ', 'Home', 'main.php', 'VN'),
(2, 'Bảo Hiểm', 'Insurance', 'insurance.php?h=1&s=', 'VN'),
(5, 'Liên Hệ', 'Contact Us', 'contact.php?h=4', 'VN'),
(6, 'Chính Sách', 'Term', 'term.php?h=5', 'VN');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`id`, `name`) VALUES
(1, '4 Wheels'),
(2, '2 Wheels');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `code`
--
ALTER TABLE `code`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groupchat`
--
ALTER TABLE `groupchat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packet`
--
ALTER TABLE `packet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rate`
--
ALTER TABLE `rate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thememenu`
--
ALTER TABLE `thememenu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=504;

--
-- AUTO_INCREMENT for table `code`
--
ALTER TABLE `code`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `groupchat`
--
ALTER TABLE `groupchat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `packet`
--
ALTER TABLE `packet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `rate`
--
ALTER TABLE `rate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `thememenu`
--
ALTER TABLE `thememenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
