-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2024 at 03:00 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `the_moon`
--
CREATE DATABASE IF NOT EXISTS `the_moon` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `the_moon`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(7) NOT NULL,
  `a_name` varchar(100) NOT NULL,
  `a_pwd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_name`, `a_pwd`) VALUES
(1, 'moon1', '1eeec52a09fe71d4d9ddcbbd09a6caa7'),
(2, 'moon2', '553c826ff3e8bc2ea08ea2ed1ade2360');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(7) NOT NULL,
  `cat_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(1, 'FACE'),
(2, 'BODY'),
(3, 'HAIR'),
(4, 'PERFUME');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `c_id` int(7) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `c_name` varchar(100) NOT NULL,
  `c_password` varchar(100) NOT NULL,
  `c_email` varchar(100) NOT NULL,
  `c_address` varchar(100) NOT NULL,
  `c_phone` varchar(100) NOT NULL,
  `c_regDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `c_dob` date NOT NULL,
  `urole` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_id`, `gender`, `c_name`, `c_password`, `c_email`, `c_address`, `c_phone`, `c_regDate`, `update_at`, `c_dob`, `urole`) VALUES
(1, 'Male', 'Robert Johnson', '123456', 'robert@gmail.com', 'Phuket, Thailand', '0963165874', '2024-02-20 17:00:00', '2024-03-02 16:36:12', '2024-06-05', ''),
(2, 'Female', 'Rosaly Dary', '147852', 'rosaly@gmail.com', 'Bangkok,\r\nThailand\r\n', '0985745365', '2024-02-20 17:00:00', '2024-03-02 16:36:12', '2002-02-05', ''),
(7, 'Female', 'Liliya', '', 'lili@gmail.com', 'Florida, America', '0321528795', '2024-02-25 14:46:00', '2024-03-02 16:36:12', '2013-02-19', ''),
(10, 'Male', 'Reaksa na khab', '$2y$10$WVvyWmostGAmQ04w3ShjkelkfTF5nEweoF4Vy.RvF5XCbDcm/DlCi', 'maxio12@gmail.com', 'Bangkok,Thailand', '0960327024', '2024-02-28 17:29:16', '2024-03-02 16:36:12', '2024-03-08', 'user'),
(14, 'Male', 'Maxiora', '$2y$10$9LL.6zpIm6tCDHh2luIQ7umyzOuNSsasLTpYTu08vh6yVdaQktrKC', 'Genf@gmail.com', 'Bangkok', '032465798', '2024-02-29 14:04:07', '2024-03-02 16:36:12', '2024-03-01', 'user'),
(16, 'Male', 'MAXIORA', '$2y$10$kOV/L1ZJKH4JY1NFJQuZjeetVCOZLWzpjNcUA5irHLniM90JZcMXe', 'sazoo@gmail.com', 'Phnom Penh', '0960327024', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2024-03-20', 'user'),
(17, 'Female', 'Fency', '$2y$10$R3TglojHFoxQ/RDnFVzBXOC6ncx38vcMr4narG4PhxKdvAD9PBArm', 'fency@gmail.com', 'Kham Raing, Khantharakwichai, Maha Sarakham', '021321232', '2024-03-02 17:00:00', '2024-03-03 13:32:01', '2024-02-27', 'user'),
(18, 'Male', 'Hennery Dave', '', 'henry@gmail.com', 'Florida, America', '022312135', '2024-03-03 14:11:00', '2024-03-03 14:11:42', '2024-04-02', ''),
(19, 'Male', 'Devin Rock', '$2y$10$i9pxBUaiCeFdsz0v2ifO8OTSW6pMzcUJDD/eW2HYouDpFvXUyV2GW', 'devin@gmail.com', '12/30 Pala, Texeas, England', '021697852', '2024-03-03 16:07:07', '2024-03-03 16:07:07', '2015-03-05', 'user'),
(20, 'Male', 'Haya Busati', '$2y$10$qafSB/TQE6Xq9t9/BMPgiOw6PhQBolyYFaQK27Ba/HNpP6wNG/I1G', 'busati@gmail.com', 'Nadun Dormitory, Katharakwichia, Maha Sarkham', '0984563203', '2024-03-04 15:00:02', '2024-03-04 15:00:02', '2010-02-04', 'user'),
(23, 'Female', 'Maiya Tina', '$2y$10$U3i3FqBd5pdAZj501YOKWet1FaQr1Rp1Zcpobg8P.6IAWAQ/ha4/m', 'maiya@gmail.com', 'Kalaksin, Thailand', '0987562302', '2024-03-04 15:55:25', '2024-03-04 15:55:25', '2003-06-10', 'user'),
(24, 'Female', 'Angela Rosé', '$2y$10$VpPiCBuQYakCNK7S6gufseLfdwy0pwfHM9dP4dB6GTe6d2/xu7Ie6', 'angela@gmail.com', 'Los Angeles, America', '0594856111', '2024-03-05 14:10:19', '2024-03-05 14:10:19', '2001-06-05', 'user'),
(25, 'Female', 'Novem Berry', '$2y$10$KuEuVjV96X.TH94GvBTF4ep3.bM5Dyzf3UUWIGbp0/BBu.3/PhqX2', 'berry@gmail.com', 'Florida, America', '0564897504', '2024-03-06 14:50:20', '2024-03-06 14:50:20', '2014-01-28', 'user'),
(26, '', 'Reaksa Yi', '', 'maxioe@gmail.com', 'Bangkok', '0960327024', '2024-03-09 11:39:00', '2024-03-09 11:39:46', '2024-03-28', ''),
(27, 'Male', 'Genury', '$2y$10$OsWaNGe3fzK7zIfUbYUBV.apr/Sosln8QRWxP4hX0VFeMcAGri0OW', 'genry@gmail.com', 'Masarakham University', '032468570', '2024-03-09 15:09:58', '2024-03-09 15:09:58', '2024-02-28', 'user'),
(29, 'Female', 'Genny Rose', '$2y$10$K3mLGuFqpG3KcmTM0ECZ8e7pfkhFFZJXalVpzD6mwk4Tlqyc5LM1m', 'rosee@gmail.com', 'MBS, MSU, Thailand', '0960327024', '2024-03-10 04:05:10', '2024-03-10 04:05:10', '2024-02-29', 'user'),
(30, 'Female', 'Emmy', '$2y$10$kE103kVket1EuZ.nitA5Uufad9NEj8e9OndRX3lPQeeblCY4ey7NC', 'emma@gmail.com', 'Thailand', '0594856111', '2024-03-11 05:34:28', '2024-03-11 05:34:28', '2024-02-29', 'user'),
(31, 'Female', 'eyestory', '$2y$10$/fo5UAOzfO4irJNiaxHMd.sLvoKwLmrrzhTUMt4VBZh3zY47E.K/m', 'eye.com555@hotmail.com', 'msu', '0610794564', '2024-03-11 06:12:27', '2024-03-11 06:12:27', '2024-03-11', 'user'),
(32, 'Female', 'Gennry Rose', '$2y$10$S2eGLKYumkcMjD.cp2ibbejsMM/GeIEk1a3zVfcUhw7lWES3C4XhS', 'genneu@gmail.com', 'MBS, MSU, Thailand', '0322546464', '2024-03-11 07:20:36', '2024-03-11 07:20:36', '2024-03-07', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `o_id` int(7) NOT NULL,
  `c_id` int(7) NOT NULL,
  `to_amount` int(10) NOT NULL,
  `to_price` int(10) NOT NULL,
  `discount` int(10) NOT NULL,
  `net_price` int(10) NOT NULL,
  `o_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`o_id`, `c_id`, `to_amount`, `to_price`, `discount`, `net_price`, `o_date`) VALUES
(1, 1, 100, 100, 20, 80, '2024-02-14 00:26:55');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `oid` int(7) UNSIGNED ZEROFILL NOT NULL,
  `ototal` int(7) NOT NULL,
  `odate` datetime NOT NULL,
  `member_id` int(7) NOT NULL,
  `status` varchar(100) NOT NULL,
  `payment` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`oid`, `ototal`, `odate`, `member_id`, `status`, `payment`) VALUES
(0000007, 199, '2024-02-19 22:22:33', 14, 'Delivered', ''),
(0000008, 14180, '2024-02-26 13:20:01', 14, 'Delivered', ''),
(0000009, 3088, '2024-02-26 14:09:06', 14, 'Processing', ''),
(0000033, 107, '2024-03-02 00:17:31', 14, 'Shipping', ''),
(0000034, 23, '2024-03-02 00:38:09', 14, 'Pending', ''),
(0000035, 92, '2024-03-02 00:44:51', 14, 'Pending', ''),
(0000036, 44, '2024-03-02 00:46:21', 14, 'Pending', ''),
(0000037, 190, '2024-03-02 00:49:49', 14, 'Pending', ''),
(0000038, 219, '2024-03-03 00:49:11', 14, 'Pending', ''),
(0000039, 39, '2024-03-03 01:32:11', 14, 'Pending', ''),
(0000040, 113, '2024-03-03 01:35:36', 14, 'Pending', ''),
(0000041, 71, '2024-03-03 01:38:17', 14, 'Pending', ''),
(0000042, 71, '2024-03-03 01:38:52', 14, 'Pending', ''),
(0000043, 168, '2024-03-03 01:51:33', 14, 'Pending', '16'),
(0000044, 170, '2024-03-03 01:54:00', 16, 'Pending', ''),
(0000045, 32, '2024-03-03 02:00:05', 16, 'Shipping', ''),
(0000046, 32, '2024-03-03 02:00:07', 16, 'Pending', ''),
(0000047, 32, '2024-03-03 02:00:40', 16, 'Pending', ''),
(0000048, 163, '2024-03-03 02:17:11', 16, 'Pending', ''),
(0000049, 153, '2024-03-03 02:19:55', 16, 'Pending', ''),
(0000055, 91, '2024-03-03 22:46:56', 17, 'Pending', ''),
(0000053, 40, '2024-03-03 22:18:17', 17, 'Pending', ''),
(0000051, 266, '2024-03-03 20:38:22', 17, 'Processing', ''),
(0000052, 201, '2024-03-03 21:26:25', 17, 'Pending', ''),
(0000059, 501, '2024-03-04 23:13:33', 23, 'Delivered', ''),
(0000071, 4, '2024-03-09 17:37:20', 25, 'Pending', ''),
(0000054, 117, '2024-03-03 22:33:18', 17, 'Pending', ''),
(0000056, 178, '2024-03-03 23:08:09', 19, 'Pending', ''),
(0000057, 234, '2024-03-03 23:09:01', 19, 'Pending', ''),
(0000058, 316, '2024-03-03 23:10:37', 19, 'Pending', ''),
(0000060, 520, '2024-03-04 23:17:22', 23, 'Pending', ''),
(0000061, 150, '2024-03-04 23:18:49', 23, 'Delivered', ''),
(0000062, 190, '2024-03-04 23:24:17', 23, 'Processing', ''),
(0000063, 61, '2024-03-04 23:27:35', 20, 'Delivered', ''),
(0000064, 744, '2024-03-05 21:13:27', 24, 'Processing', ''),
(0000065, 299, '2024-03-05 21:27:17', 24, 'Delivered', ''),
(0000066, 100, '2024-03-05 21:34:33', 24, 'Pending', ''),
(0000067, 198, '2024-03-06 21:55:05', 25, 'Delivered', ''),
(0000068, 258, '2024-03-06 22:00:14', 25, 'Shipping', ''),
(0000069, 478, '2024-03-06 22:14:51', 25, 'Shipping', ''),
(0000070, 117, '2024-03-06 22:19:30', 25, 'Pending', ''),
(0000072, 184, '2024-03-09 18:35:25', 25, 'Pending', ''),
(0000073, 75, '2024-03-09 18:38:43', 25, 'Processing', ''),
(0000074, 391, '2024-03-09 22:18:36', 27, 'Pending', ''),
(0000075, 116, '2024-03-09 22:19:54', 27, 'Processing', ''),
(0000076, 92, '2024-03-09 22:33:06', 25, 'Pending', ''),
(0000077, 120, '2024-03-10 09:57:43', 25, 'Pending', ''),
(0000078, 274, '2024-03-10 11:13:26', 29, 'Shipping', ''),
(0000079, 446, '2024-03-10 11:17:57', 29, 'Processing', ''),
(0000080, 70, '2024-03-11 12:39:17', 30, 'Pending', ''),
(0000081, 25, '2024-03-11 12:39:47', 30, 'Pending', ''),
(0000082, 416, '2024-03-11 12:41:12', 30, 'Pending', ''),
(0000083, 113, '2024-03-11 13:13:29', 31, 'Pending', ''),
(0000084, 322, '2024-03-11 14:26:03', 32, 'Processing', ''),
(0000085, 243, '2024-03-11 14:27:13', 32, 'Pending', ''),
(0000086, 163, '2024-03-11 20:47:12', 25, 'Pending', ''),
(0000087, 4, '2024-03-11 20:47:20', 25, 'Pending', ''),
(0000088, 176, '2024-03-11 20:47:58', 25, 'Processing', '');

-- --------------------------------------------------------

--
-- Table structure for table `orders_detail`
--

CREATE TABLE `orders_detail` (
  `od_id` int(6) NOT NULL,
  `oid` int(7) UNSIGNED ZEROFILL NOT NULL,
  `pid` int(7) NOT NULL,
  `item` int(7) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `orders_detail`
--

INSERT INTO `orders_detail` (`od_id`, `oid`, `pid`, `item`) VALUES
(1, 0000001, 7, 2),
(2, 0000001, 1, 1),
(3, 0000001, 9, 3),
(4, 0000002, 6, 2),
(5, 0000002, 4, 1),
(6, 0000003, 1, 4),
(7, 0000003, 6, 1),
(8, 0000004, 7, 3),
(9, 0000004, 9, 2),
(10, 0000004, 6, 1),
(11, 0000005, 9, 3),
(12, 0000005, 7, 2),
(13, 0000005, 1, 1),
(14, 0000006, 2, 2),
(15, 0000006, 5, 1),
(16, 0000007, 7, 1),
(17, 0000008, 1, 1),
(18, 0000008, 2, 1),
(19, 0000008, 3, 1),
(20, 0000009, 1, 1),
(21, 0000009, 7, 2),
(22, 0000010, 1, 1),
(23, 0000010, 2, 1),
(24, 0000010, 4, 2),
(25, 0000011, 1, 1),
(26, 0000011, 2, 1),
(27, 0000012, 1, 1),
(28, 0000013, 1, 1),
(29, 0000013, 5, 1),
(30, 0000013, 8, 1),
(31, 0000014, 37, 1),
(32, 0000015, 37, 2),
(33, 0000015, 33, 1),
(34, 0000015, 42, 1),
(35, 0000016, 43, 2),
(36, 0000017, 33, 1),
(37, 0000018, 37, 2),
(38, 0000018, 42, 1),
(39, 0000019, 33, 1),
(40, 0000020, 43, 1),
(41, 0000021, 33, 1),
(42, 0000022, 42, 1),
(43, 0000022, 43, 1),
(44, 0000023, 43, 1),
(45, 0000024, 37, 1),
(46, 0000025, 42, 1),
(47, 0000026, 33, 1),
(48, 0000027, 37, 1),
(49, 0000028, 37, 2),
(50, 0000028, 33, 1),
(51, 0000028, 42, 1),
(52, 0000028, 43, 1),
(53, 0000029, 37, 1),
(54, 0000030, 37, 1),
(55, 0000031, 42, 1),
(56, 0000032, 37, 1),
(57, 0000033, 42, 1),
(58, 0000033, 37, 1),
(59, 0000033, 33, 1),
(60, 0000034, 37, 2),
(61, 0000034, 33, 1),
(62, 0000035, 42, 1),
(63, 0000035, 37, 1),
(64, 0000036, 37, 1),
(65, 0000036, 33, 1),
(66, 0000036, 43, 1),
(67, 0000037, 3, 1),
(68, 0000037, 5, 1),
(69, 0000037, 2, 1),
(70, 0000037, 43, 4),
(71, 0000038, 37, 4),
(72, 0000038, 33, 1),
(73, 0000038, 43, 1),
(74, 0000038, 42, 1),
(75, 0000038, 2, 3),
(76, 0000039, 1, 1),
(77, 0000039, 37, 1),
(78, 0000040, 42, 1),
(79, 0000040, 43, 1),
(80, 0000041, 4, 1),
(81, 0000041, 43, 1),
(82, 0000041, 27, 1),
(83, 0000042, 4, 1),
(84, 0000042, 43, 1),
(85, 0000042, 27, 1),
(86, 0000043, 3, 1),
(87, 0000043, 42, 1),
(88, 0000043, 43, 1),
(89, 0000043, 37, 2),
(90, 0000043, 33, 1),
(91, 0000044, 3, 1),
(92, 0000044, 42, 1),
(93, 0000044, 43, 2),
(94, 0000045, 3, 1),
(95, 0000046, 3, 1),
(96, 0000047, 3, 1),
(97, 0000048, 2, 2),
(98, 0000048, 42, 1),
(99, 0000048, 43, 1),
(100, 0000049, 42, 1),
(101, 0000049, 43, 2),
(102, 0000049, 33, 1),
(103, 0000050, 42, 2),
(104, 0000050, 37, 2),
(105, 0000051, 43, 2),
(106, 0000051, 42, 2),
(107, 0000051, 37, 2),
(108, 0000051, 3, 1),
(109, 0000052, 42, 2),
(110, 0000052, 43, 1),
(111, 0000053, 3, 1),
(112, 0000053, 37, 2),
(113, 0000054, 42, 1),
(114, 0000054, 37, 1),
(115, 0000054, 43, 1),
(116, 0000055, 4, 1),
(117, 0000055, 42, 1),
(118, 0000056, 3, 1),
(119, 0000056, 43, 1),
(120, 0000056, 29, 1),
(121, 0000056, 27, 1),
(122, 0000056, 30, 1),
(123, 0000057, 5, 1),
(124, 0000057, 42, 1),
(125, 0000057, 43, 3),
(126, 0000057, 21, 1),
(127, 0000057, 16, 1),
(128, 0000058, 2, 1),
(129, 0000058, 37, 1),
(130, 0000058, 42, 2),
(131, 0000058, 43, 4),
(132, 0000058, 19, 1),
(133, 0000059, 43, 1),
(134, 0000059, 23, 1),
(135, 0000059, 28, 1),
(136, 0000059, 50, 1),
(137, 0000059, 40, 1),
(138, 0000060, 42, 5),
(139, 0000060, 43, 3),
(140, 0000060, 39, 1),
(141, 0000061, 2, 3),
(142, 0000061, 46, 1),
(143, 0000062, 43, 5),
(144, 0000062, 22, 1),
(145, 0000062, 9, 1),
(146, 0000063, 3, 1),
(147, 0000063, 43, 1),
(148, 0000063, 37, 1),
(149, 0000064, 43, 2),
(150, 0000064, 49, 2),
(151, 0000064, 44, 2),
(152, 0000065, 18, 2),
(153, 0000065, 22, 1),
(154, 0000065, 16, 2),
(155, 0000065, 30, 1),
(156, 0000065, 46, 1),
(157, 0000065, 43, 3),
(158, 0000065, 27, 1),
(159, 0000065, 34, 1),
(160, 0000066, 43, 4),
(161, 0000067, 43, 2),
(162, 0000067, 27, 1),
(163, 0000067, 26, 1),
(164, 0000067, 21, 1),
(165, 0000067, 6, 2),
(166, 0000068, 3, 1),
(167, 0000068, 42, 2),
(168, 0000068, 43, 2),
(169, 0000069, 5, 1),
(170, 0000069, 15, 1),
(171, 0000069, 52, 1),
(172, 0000069, 49, 2),
(173, 0000070, 37, 1),
(174, 0000070, 43, 1),
(175, 0000070, 42, 1),
(176, 0000071, 37, 1),
(177, 0000072, 37, 2),
(178, 0000072, 42, 2),
(179, 0000073, 43, 3),
(180, 0000074, 42, 4),
(181, 0000074, 43, 1),
(182, 0000074, 16, 2),
(183, 0000075, 6, 1),
(184, 0000075, 37, 2),
(185, 0000075, 42, 1),
(186, 0000076, 37, 1),
(187, 0000076, 42, 1),
(188, 0000077, 3, 1),
(189, 0000077, 42, 1),
(190, 0000078, 37, 4),
(191, 0000078, 3, 1),
(192, 0000078, 42, 2),
(193, 0000078, 43, 2),
(194, 0000079, 6, 1),
(195, 0000079, 12, 1),
(196, 0000079, 50, 1),
(197, 0000079, 49, 1),
(198, 0000080, 2, 1),
(199, 0000080, 41, 1),
(200, 0000081, 43, 1),
(201, 0000082, 50, 2),
(202, 0000083, 2, 1),
(203, 0000083, 42, 1),
(204, 0000084, 43, 2),
(205, 0000084, 42, 3),
(206, 0000084, 37, 2),
(207, 0000085, 3, 1),
(208, 0000085, 50, 1),
(209, 0000085, 4, 1),
(210, 0000086, 2, 1),
(211, 0000086, 42, 1),
(212, 0000086, 43, 2),
(213, 0000087, 37, 1),
(214, 0000088, 42, 2);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(7) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `p_detail` varchar(650) NOT NULL,
  `p_price` int(10) NOT NULL,
  `p_stock` int(10) NOT NULL,
  `p_brand` varchar(100) NOT NULL,
  `cat_id` int(7) NOT NULL,
  `p_expire` date NOT NULL,
  `p_ext` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_name`, `p_detail`, `p_price`, `p_stock`, `p_brand`, `cat_id`, `p_expire`, `p_ext`) VALUES
(1, 'Glowing brightest serum', 'A concentrated dose of benefit-rich nutrients deliver radiant results. Argan Oil restores moisture, Borage Oil soothes and Cranberry and Pumpkin Seed Oils add antioxidant protection.Includes one 1 fluid ounce bottle of Amazon Basics Brightening Vitam C, Polyhydroxy Acids (PHAs)\r\nFormulated without fragrance, Vitamin C helps to reduce signs of aging while Hyaluronic Acid delivers deep hydration to skin\r\nApply 2-3 drops to clean face, morning and night.', 35, 20, 'Glowing', 1, '2025-02-01', 'jpg'),
(2, 'Senergy Facial Cleanser', 'Delicate, soft and bubbly mousse cleanser (ideal as a second step in double cleansing) that features an amino acid-based formula to gently cleanse even the most sensitive skin types.\r\nThe 100% non-irritating, low pH foam is enriched with oxygen and herbal extracts that remove impurities while maintaining moisture levels leaving your skin fresh and hydrated. \r\nS-ENERGY™ Complex\r\nShangpree’s exclusive formula of Scullcap Callus Culture, Oxygen (powerful antibacterial and anti-inflammatory, helps stimulate collagen), and Violet Herb Complex (balances sebum, soothes and hydrates) helps energize your skin and facilitate regeneration.\r\n\r\n', 25, 20, 'Glowing', 1, '2026-02-11', 'jpg'),
(3, 'G-Sleeping Mask', 'Also known as sleep masks and night masks, overnight masks are designed to be applied to your face before bed and worn throughout the night. They often provide deep hydration and help support your skin’s natural repair processes, leaving you with a fresher, more radiant appearance come sunrise. Some have other benefits, as well—it all comes down to the formula. Ahead, we’re breaking down everything you need to know about adding an overnight face mask to your skincare routine. Read on for a deep dive into the benefits of overnight masking, plus discover two of Kiehl’s must-have sleep masks to bolster your nighttime skincare routine.', 32, 21, 'Glowing', 1, '2027-02-02', 'jpg'),
(4, 'G-Bright Eye Firming Mask', 'G -Bright Eye Firming Mask. Concentrated specialty masks invigorate the delicate area around the eye, helping you look renewed and refreshed. Made with a light floral scent, the eye patches awaken eyes no matter how much sleep you got.\r\nTackle Under-Eye Bags On-the-Go. These under eye patches firm and lift the look of skin while hydrating under the eyes. Whether you’re at home or traveling, sooth the skin around the eyes to get a more youthful look.\r\nAdvanced Alchemy for Healthy Skin. A blend of chamomile extract, algae extract and hyaluronic acid sooth and hydrate the skin around the eye. Matrixyl 3000 mimics collagen and works with peptides', 3, 50, 'Glowing', 1, '2025-11-12', 'jpg'),
(5, 'G-Cleansing Musse', 'The Cleansing Mousse is an oil and water based mousse cleanser that effectively cleanses the skin of make up, sunscreen and excess oils leaving the skin soft, nourished and refined. Tiny spherical micelles attract and remove excess sebum and dirt from the skin, whilst lactic and ascorbic acids gently exfoliate and brighten the skin. This product can be used as as single cleanser or as the second cleanser in a nightly double cleanse routine.', 33, 44, 'Glowing', 1, '2026-10-14', 'jpg'),
(6, 'G-Toner HA+30%', 'Give the proper hydration and excellent balance. Purify and tighten pores. Control facial excess oil. Perfect combination with anti-acne medications.\r\nA light, soothing moisturization toner.\r\nA wiping soothing toner that cares for keratin.\r\nSuitable for the skin that needs both gentle exfoliation and soothing care at the same time, sensitive skin with rough and uneven texture, and skin that requires hydration and calming from the first step of skincare are suitable.\r\nAccording to the reviews, the product shows a calming sensation on the skin at 99%, a moisturizing feeling at 96%, an overall satisfaction rate of 100%, and a gentle effect on th', 20, 33, 'Glowing', 1, '2026-07-15', 'jpg'),
(7, 'G-Scrub BHA Body', 'It make the skin are smooth and also help to  increase brightness for skin. \r\nThis intensive formula contains skin-refining ingredients, including bamboo charcoal to polish skin and a combination of salicylic, lactic, and glycolic acids to remove blackhead-inducing sweat, oil, and dirt.', 23, 2, 'Glowing', 2, '2025-10-14', 'jpg'),
(8, 'G-Cleansing Solution ', 'Boost the fatigue acne skin to its healthiest level. Soothe and calm skin from redness and blemishes. Reduce pimples. Prevent future breakouts.\r\nNo matter how much you skimp on your skin care routine, you should always wash your face at least once a day. Those with oily or combination skin may benefit from twice daily washes (morning and night) while drier skin may be fine with just a nightly wash. Use a gentle but thoroughly cleanser to whisk away dirt, grease and grime without stripping the skin of moisture.', 2, 2, 'Glowing', 1, '2025-10-15', 'jpg'),
(9, 'G-Brightness serum night', 'Night serum with very high vitamin C content for use on tired skin, dark spots and bumps for a revitalised, fresher appearance\r\nResult: smoother, smoother, revitalised and recovered skin after 1 use, brighter and healthier looking skin after 3 nights, effective against dark spots and bumps after 2 months\r\nApplication: Apply 3-4 drops to cleansed face before the usual skin care routine in the evening, suitable for all skin types\r\nVegan formula with 10% pure vitamin C of natural origin, no silicone and no alcohol', 33, 3, 'Glowing', 2, '2027-06-15', 'jpg'),
(11, 'Rachi Body Bright UV Protection', 'Rachi Body Bright UV Protection SPF50 PA+++ 80g Sun protection product for the body from Rachi helps protect against UVA and UVB rays with spf50pa+++ and deeply nourishes the skin. Adjust your skin tone to be 1 level brighter.', 11, 23, 'Rachi ', 2, '2025-11-12', 'jpg'),
(12, 'Neutrogena Body Oil Light Sesame', 'Neutrogena Body Oil Light Sesame 250ml. Body oil that combines the value of sesame oil extract from Neutrogena. Light texture and gentle fragrance. Helps restore dry, rough skin to look healthy and glowing. Smooth, soft, and moisturized for a long ti', 16, 23, 'Neutrogena', 2, '2025-10-14', 'jpg'),
(13, 'DIOR PRESTIGE LA CRÈME', 'With excellent nourishment and care, Dior Prestige La Crème Mains de Rose is a hand cream. The first Dior rose scent to contain natural ingredients. 94%* that combines the power of concentrated Rose de Granville', 82, 41, ' DIOR', 2, '2025-07-17', 'jpg'),
(14, 'Oriental Beauty Blooming Violet', 'Shower cream formulated to maintain moisture balance. Gentle cleaning Fresh scent Like a blooming flower Reveals naturally radiant skin with the value of natural extracts.\r\nCherry Extract is rich in vitamin C.', 4, 30, 'Oriental', 2, '2026-06-18', 'jpg'),
(15, 'Dr.PONG 28D WHITENING DRONE', '2 in 1 deodorant spray, protects confidently all day long, with ingredients Niacinamide and Dr.PONG 28D whitening drone to nourish the skin for white, radiant, healthy underarm skin. Odorless formula, no perfume added. Can be used to deodorize both m', 28, 30, ' Dr.PONG', 2, '2026-07-28', 'jpg'),
(16, 'Beauty Buffet Scentio Raspberry', 'Beauty Buffet Scentio Raspberry Pore Minimizing Sherbet Scrub 350ml Freshly squeezed from nature to your skin with exfoliating salt scrub from Beauty Buffet, rich in natural scrub beads. Helps remove dead skin cells. Combined with raspberry fruit ext', 7, 20, 'Beauty', 2, '2026-07-28', 'jpg'),
(17, 'Mizumi body sunscreen', 'Light body sunscreen. Helps exfoliate skin cells to make it smooth and radiant. Mizumi Uv Bright Body Serum is a sunscreen that combines hybrid', 11, 21, 'Mizumi', 2, '2026-11-18', 'jpg'),
(18, 'Beauty Buffet Scentio Avocado', 'Beauty Buffet Scentio Avocado Brightening Sherbet Scrub 350ml, freshly squeezed from nature to your skin with a salt scrub from Beauty Buffet, rich in natural scrub beads. Helps shed dead outer skin cells. Combined with avocado extracts Helps nourish', 7, 30, 'Beauty', 2, '2026-12-30', 'jpg'),
(19, 'Cute Press CI-LAB SENSITIVE', 'Cute Press Ci-Lab Sensitiv Moisture Repair Shower Cream 490ml No. 1 for gentleness The first time of a gentle shower cream from Cute Press that uses 100% natural plant cleansing agents with an appropriate pH value to keep the skin from being dry and ', 11, 13, 'Cute Press CI-LAB', 2, '2026-05-20', 'jpg'),
(20, 'Shokubutsu pink shower cream', 'Shokubutsu pink shower cream Shokubutsu Monogatari Shower Cream, formula for soft and moisturized skin like a milk bath, contains 99% of natural plant cleansing ingredients. Helps gently cleanse the skin, suitable for all skin types.', 4, 20, 'Shokubutsu', 2, '2026-08-13', 'jpg'),
(21, 'The Ordinary AHA 30%', 'Ordinary AHA 30% + BHA 2% Peeling Solution 30ml Peeling the Ordinary, a great product from England that foreign bloggers use in every clip! Helps get rid of dirt very well. Reduce blockage and acne. Wrinkles look faded Adjust the skin to be bright an', 31, 20, 'The Ordinary', 1, '2025-07-23', 'jpg'),
(22, 'La Roche Posay Acne Cleansing', 'Posay Acne Cleansing Effaclar Gel 400ml reveals healthy skin as desired. With a special gentle formula facial cleansing gel. Clear gel texture, light and comfortable. Helps reduce the accumulation of bacteria and care for the skin precisely to elimin', 32, 30, 'La Roche Posay', 1, '2027-12-03', 'jpg'),
(23, 'Eucerin spotless brightening', 'Manage sun blemishes and difficult-to-resolve dark spots in 2 \r\nReduce sun spots, deep-seated dark spots that are difficult to \r\nBreak the cycle of sunburn New dark spots with licochalcon \r\nSerum texture is light, non-greasy, absorbs faster.', 58, 30, 'Eucerin', 1, '2025-07-08', 'jpg'),
(24, 'Estee Lauder Advanced', 'Helps the skin look glowing. and embraces the skin to be deeply moisturized. It miraculously reduces various signs of skin aging.\r\nHelps promote recovery for maximum efficiency. WithChronoluxCB1 technology.', 13, 30, 'Estee Lauder', 1, '2027-07-07', 'jpg'),
(25, 'Vichy Liftactiv B3', 'Manage signs of deep-seated dark spot formation+ with Transmic Acid.Effectively reduce dark spots on the skin with Vitamin CG. Break the cycle of new dark spot problems with Niacinamide (B3).', 52, 20, 'Vichy', 1, '2026-11-18', 'jpg'),
(26, 'Smooth E 24K', 'Contains the main ingredients of Anti aging Supreme Serum that are highly effective. ARGAN OIL has 3 times more vitamin E than in olive oil, helping to fight free radicals. Helps retain moisture on the skin up to 1,000 times.', 34, 30, 'Smooth E', 1, '2026-07-16', 'jpg'),
(27, 'La Roche-Posay Pure', 'Manage and reduce deep-seated dark spots from acne at the source+ and prevent new dark spots from emerging.\r\nExfoliate deep-seated dark spots from acne+currently with HEPES. Prevent new dark spots with NIACINAMIDE 88%.', 43, 30, 'La Roche-Posay', 1, '2027-07-08', 'jpg'),
(28, 'La Mer The Treatment', 'La Mer The Treatment Lotion 150ml for the next step of nourishment, take care of it with a water-based skin care lotion from La Mer, giving a feeling of vitality to the skin with Liquid Energy that helps the product absorb into the skin quickly. ', 191, 20, 'La Mer', 1, '2026-07-15', 'jpg'),
(29, 'Vichy Mineral 89 Serum', 'Serum, clear face serum, skin care serum Serum for healthy-looking skin Mineral 89 concentrated mineral water serum for bouncy, soft, moisturized, glowing skin. Wrinkles appear reduced.\r\nContains 89% concentrated Visie mineral water that is rich in m', 50, 30, 'Vichy Mineral', 1, '2027-11-18', 'jpg'),
(30, 'Dr.Pong 28D whitening', 'Facial serum Solve the problem of dark circles, dark spots, and acne scars on the face. With drone technology, the substance is brought to bind to the MC1 receptor on melanocyte cells that produce pigment. Make the substance reduce the pigment.', 28, 30, 'Dr.Pong', 1, '2026-07-15', 'jpg'),
(31, 'L\'Oreal Paris Elseve', 'Hair food in spray form, easy to use Just spray it every time before styling your hair and that\'s it. No matter what style you curl, straighten, or outdoor activities, you don\'t have to be afraid of damaging your hair! Protects hair from heat and che', 10, 23, 'L\'Oreal', 3, '0000-00-00', 'jpg'),
(32, 'L\'Oreal Paris Elseve Extraordinary', 'Provide relaxation Light and comfortable for hair with the value of lavender flowers. Helps nourish dry hair to be soft and moisturized. It has weight and is easy to style. Smooth fragrance that lasts 72 hours* Light oil texture, not sticky.', 23, 23, 'L\'Oreal Paris', 3, '2024-03-07', 'jpg'),
(33, 'Eucerin DermoCapillaire', 'Reduce hair loss problems with Thinning Hair Treatment from Eucerin, nourishing the scalp to be strong and balanced. Ready to nourish the hair and provide a stable base for the hair roots. Reduce shedding', 15, 13, 'Eucerin', 3, '2026-07-08', 'jpg'),
(34, 'Mielle Organics Rosemary', 'Get ready for sweet locks with Mielle Organics Rosemary Mint Scalp and Hair Strengthening Oil. This 2 ounce bottle is filled with organic ingredients to promote hair growth and nourish your scalp.', 18, 12, 'Mielle', 3, '2025-07-23', 'jpg'),
(35, 'Chommpinn Hair Serum', 'To prevent fungi and bacteria that may form on the scalp, Chommpinn Hair Oil Repar Serum. also helps maintain the health of the scalp in a balanced state. Effectively reduces the problem of dry, scaly scalp.', 13, 25, 'Chommpinn', 3, '2026-07-15', 'jpg'),
(36, 'TRESemmé Shampoo & Hair', 'TRESemme Shampoo Hair Fall Control Tresemme brings backstage professional expertise at your fingertips. For salon quality smooth hair everyday. TRESemme - Professional Everyday. ', 5, 28, 'TRESemmé', 3, '2026-11-18', 'jpg'),
(37, 'Caring Mermaid Super Silky', 'Hair care products (No need to rinse) Innovative concentrated keratin and plankton from the sea. Create soft, beautiful hair like a mermaid immediately after use.', 4, 19, 'Caring', 3, '2024-10-16', 'jpg'),
(38, 'Pantene Pro-V Daily Leave-In Hair Oil', 'he color gloss hair oil helps to repair color damage to the hair surface. The molecular refilling technology provides targeted damaged hair fibres, repairs, smooths and nourishes\r\n', 12, 34, 'Pantene Pro-V', 3, '2025-10-14', 'jpg'),
(39, 'Care Shampoo Care Original Baby', 'Baby Care Original Shampoo, gentle, does not irritate the eyes when washing.Gentle cleaning Preserves hair and scalp', 5, 25, 'Care', 3, '2026-11-17', 'jpg'),
(40, 'KUNDAL Baby Powder Anti-Hair Loss', 'Promotes healthy hair growth by nourishing and strengthening from root to tip and contains powerful caffeine to reduce hair loss and thinning by stimulating Scalp and hair follicles', 19, 25, 'KUNDAL', 3, '2027-02-02', 'jpg'),
(41, 'Lacoste L.12.12', 'Lacoste L.12.12 Blanc Eau de Toilette is a playful men\'s fragrance that evokes the crisp, unforgettably cool feel of a white polo shirt. The fragrance opens with an initial blast of citrus and spicy cardamom, which embody the good-natured side of thi', 45, 24, 'Lacoste', 4, '2025-06-11', 'jpg'),
(42, 'Pour HOMME EDT', 'The masculine fragrance has been created from essential Mediterranean ingredients with aromatic notes, including a vibrant citrus blend of bergamot and geranium for a sense of lightness, balanced with deep and sensual base notes of amber and musk\r\n', 88, 44, 'Pour', 4, '2025-10-14', 'jpg'),
(43, 'Victoria\'s Secret Pure Seduction', 'The joy of gifting. Our mini mist and lotion duo is the perfect pair for layering on Pure Seduction. 75 ml/2.5 fl oz comfortable vanilla for a fiery interpretation of the original scent.\r\n', 25, 33, 'Victoria\'s Secret', 4, '2027-03-04', 'jpg'),
(44, 'Spicebomb Extreme Eau de Parfum', 'Seductive. Intense. Overly sexy. Approach at your own risk. Spicebomb Extreme is an explosive composition highlighting aromatic lavender in a unique way—by mixing it with caraway and black pepper. The fragrance leaves a trail of hotness above masculi', 145, 12, 'Spicebomb ', 4, '0000-00-00', 'jpg'),
(45, 'Eau de Parfum Giordani Gold Man da Oriflame', 'Zesty, refreshing facets of Bergamot and responsibly sourced Mandarin meld with spicy Black Pepper and Petitgrain to open the fragrance with a bright and powerful first impression. Subtle fresh floral notes of Jasmine and Neroli are contrasted by a m', 84, 13, 'Oriflame', 4, '2026-06-10', 'jpg'),
(46, 'Lanvin Eclat d\'Arpege EDP', 'Perfume for women from Long Wang, fulfilling the sweetness of a cute young girl. With the gentle, light scent of peony flowers. Lilacs and other flowers Provides knowledge of relaxation and comfort throughout the day.', 75, 13, 'Lanvin', 4, '2025-06-10', 'jpg'),
(47, 'VALENTINO Uomo Born In Roma EDT', 'An ode to today\'s arrogant thoughts. is the aromatic aroma of woody vetiver grass. Combined with salty undertones Mineral Accord', 132, 11, 'VALENTINO', 4, '2026-06-09', 'jpg'),
(48, 'Signature Eau De Parfum', 'Perfume for women that gives a feeling of luxury and freshness with the scent of various flowers, including roses, peony, freesia, combined with the freshness of lychees. Including the classy fragrance from amber. and cedarwood Born as a fragrance fo', 183, 22, 'Chole', 4, '2026-06-09', 'jpg'),
(49, 'GUCCI Pour Femme EDP', 'Spray GUCCI Guilty Pour Femme EDP perfume on pulse points such as the nape of the neck, wrists, and crooks of the arms and can add fragrance to clothing. For a scent that lasts all day', 202, 11, 'GUCCI', 4, '2025-10-29', 'jpg'),
(50, 'Chanel No.5 Range', 'to be effective Perfumer Ernest Beaux breaks with traditional perfumery conventions and offers new scents.\r\nGabrielle Chanel named it Number Five, a name that made other perfume names seem obsolete. 1978 interpreted the sparkle and created N°5 EAU PR', 208, 14, 'Chanel', 4, '2026-11-18', 'jpg'),
(51, 'Belli & Balm Body Lotion', 'Soothe dry, chapped skin with Belli Beauty All Day Moisture Body Lotion, a luxurious cream that deeply hydrates and relieves dry skin. Medically researched to avoid ingredients that may be harmful during pregnancy or nursing, the moisturising lotion is cleared and recommended  by OB/GYN and dermatologists. Packed with Vitamin E, the milky lotion is enriched with soothing Chamomile whilst Lemon Oil provides uplifting aromatherapy.\r\n\r\nOB/GYN & Dermatologist recommended. Allergy tested.\r\n\r\nFree from parabens, gluten, artificial dyes  and fragrances.\r\n\r\nCruelty-free. ', 12, 22, 'Belli & Balm', 2, '2026-10-13', 'jpg'),
(52, 'SKIN1004 Centella Ampoule', 'SKIN1004 Madagascar Centella Ampoule 55 ml Madagascar Centella Ampoule 55 ml helps restore and nourish. Ready to soothe the skin with the power of Centella, a pure extract from Madagascar. Suitable for acne-prone skin.', 13, 33, 'Ampoule', 1, '2024-03-22', 'jpg');

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `id` int(11) NOT NULL,
  `userEmail` varchar(255) DEFAULT NULL,
  `userip` binary(16) DEFAULT NULL,
  `loginTime` timestamp NULL DEFAULT current_timestamp(),
  `logout` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `userEmail`, `userip`, `loginTime`, `logout`, `status`) VALUES
(2, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-02-26 11:29:33', '', 1),
(3, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-02-26 11:30:11', '', 1),
(4, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-02-26 15:00:23', '26-02-2017 11:12:06 PM', 1),
(5, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-02-26 18:08:58', '', 0),
(6, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-02-26 18:09:41', '', 0),
(7, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-02-26 18:10:04', '', 0),
(8, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-02-26 18:10:31', '', 0),
(9, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-02-26 18:13:43', '', 1),
(10, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-02-27 18:52:58', '', 0),
(11, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-02-27 18:53:07', '', 1),
(12, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-03-03 18:00:09', '', 0),
(13, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-03-03 18:00:15', '', 1),
(14, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-03-06 18:10:26', '', 1),
(15, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-03-07 12:28:16', '', 1),
(16, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-03-07 18:43:27', '', 1),
(17, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-03-07 18:55:33', '', 1),
(18, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-03-07 19:44:29', '', 1),
(19, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-03-08 19:21:15', '', 1),
(20, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-03-15 17:19:38', '', 1),
(21, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-03-15 17:20:36', '15-03-2017 10:50:39 PM', 1),
(22, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-03-16 01:13:57', '', 1),
(23, 'hgfhgf@gmass.com', 0x3a3a3100000000000000000000000000, '2018-04-29 09:30:40', '', 1),
(24, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2023-02-09 22:23:13', NULL, 1),
(25, 'chivorn@ccc.com', 0x3a3a3100000000000000000000000000, '2024-02-28 15:41:56', '28-02-2024 09:40:47 PM', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`o_id`),
  ADD KEY `c_id_fk` (`c_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `orders_detail`
--
ALTER TABLE `orders_detail`
  ADD PRIMARY KEY (`od_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `cat_fk` (`cat_id`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `c_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `o_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `oid` int(7) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `orders_detail`
--
ALTER TABLE `orders_detail`
  MODIFY `od_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=215;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `customer_fk` FOREIGN KEY (`c_id`) REFERENCES `customer` (`c_id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `cat_fk` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
