-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2024 at 05:56 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tasteexplorer`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `rdate` date NOT NULL,
  `fid` varchar(50) NOT NULL,
  `hid` varchar(50) NOT NULL,
  `rate` decimal(20,0) NOT NULL,
  `review` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `email`, `rdate`, `fid`, `hid`, `rate`, `review`) VALUES
(3, 'annand@gmail.com', '2024-07-12', 'f505', 'H1005', 5, ' very tasty Food');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `idf` int(20) NOT NULL,
  `hid` varchar(50) NOT NULL,
  `fid` varchar(20) NOT NULL,
  `price` int(20) NOT NULL,
  `rate` decimal(20,1) NOT NULL,
  `foodpic` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'InActive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`idf`, `hid`, `fid`, `price`, `rate`, `foodpic`, `status`) VALUES
(10, 'H1001', 'f502', 50, 5.0, 'food/dosa1.JPG', 'Active'),
(13, 'H1001', 'f503', 50, 2.5, 'food/d3.JPG', 'Active'),
(14, 'H1003', 'f504', 50, 0.0, 'food/b6.JPG', 'Active'),
(15, 'H1002', 'f502', 50, 5.0, 'food/dosa1.JPG', 'Active'),
(16, 'H1001', 'f505', 40, 4.0, 'food/b6.JPG', 'Active'),
(17, 'H1005', 'f506', 300, 4.0, 'food/mutter_curry.PNG', 'Active'),
(19, 'H1005', 'f505', 50, 4.0, 'food/b4.JPG', 'Active'),
(20, 'H1005', 'f501', 50, 2.3, 'food/v1.JPG', 'Active'),
(21, 'H1001', 'f501', 50, 2.3, 'food/v1.JPG', 'Active'),
(22, 'H1006', 'f506', 120, 0.0, 'food/mutter_curry.PNG', 'Active'),
(23, '', 'f502', 50, 0.0, 'food/d4.JPG', 'InActive'),
(24, 'H1006', 'f501', 50, 0.0, 'food/d4.JPG', 'Active'),
(25, 'H1002', 'f501', 50, 0.0, 'food/v1.JPG', 'Active'),
(26, 'H1002', 'f503', 60, 0.0, 'food/poori.PNG', 'Active'),
(28, 'HH1032', 'f502', 60, 0.0, 'food/d4.JPG', 'Active'),
(29, 'HH1032', 'f501', 60, 0.0, 'food/v1.JPG', 'Active'),
(30, 'HH1032', 'f503', 60, 0.0, 'food/poori.PNG', 'Active'),
(31, 'H1031', 'f501', 60, 0.0, 'food/v1.JPG', 'Active'),
(32, 'H1031', 'f502', 60, 0.0, 'food/d4.JPG', 'Active'),
(33, 'HH1030', 'f501', 60, 0.0, 'food/v1.JPG', 'Active'),
(34, '', 'f503', 50, 0.0, 'food/poori.PNG', 'InActive'),
(35, 'HH1030', 'f502', 50, 0.0, 'food/d4.JPG', 'Active'),
(36, 'HH1030', 'f503', 50, 0.0, 'food/poori.PNG', 'Active'),
(37, 'H1029', 'f501', 50, 0.0, 'food/v1.JPG', 'Active'),
(38, 'H1029', 'f502', 60, 0.0, 'food/d4.JPG', 'Active'),
(39, 'H1029', 'f503', 60, 0.0, 'food/poori.PNG', 'Active'),
(40, 'H1026', 'f501', 60, 0.0, 'food/v1.JPG', 'Active'),
(41, 'H1026', 'f502', 50, 0.0, 'food/d4.JPG', 'Active'),
(42, 'H1026', 'f503', 60, 0.0, 'food/poori.PNG', 'Active'),
(43, 'H1025', 'f501', 50, 0.0, 'food/v1.JPG', 'Active'),
(44, 'H1025', 'f502', 60, 0.0, 'food/d4.JPG', 'Active'),
(45, 'H1025', 'f503', 60, 0.0, 'food/poori.PNG', 'Active'),
(46, 'H1017', 'f501', 60, 0.0, 'food/v1.JPG', 'Active'),
(47, 'H1017', 'f502', 50, 0.0, 'food/d4.JPG', 'Active'),
(48, 'H1017', 'f503', 50, 0.0, 'food/poori.PNG', 'Active'),
(49, 'H1016', 'f501', 50, 0.0, 'food/v1.JPG', 'Active'),
(50, 'H1016', 'f502', 50, 0.0, 'food/d4.JPG', 'Active'),
(51, 'H1011', 'f501', 60, 0.0, 'food/v1.JPG', 'Active'),
(52, 'H1011', 'f502', 60, 0.0, 'food/d4.JPG', 'Active'),
(53, 'HH1032', 'f507', 60, 0.0, 'food/d3.JPG', 'Active'),
(55, 'H1031', 'f508', 30, 0.0, 'food/thatte-idli.jpg', 'Active'),
(57, '', 'f508', 40, 0.0, 'food/thatte-idli.jpg', 'InActive'),
(59, 'H1011', 'f507', 50, 0.0, 'food/d3.JPG', 'Active'),
(61, 'H1010', 'f508', 50, 0.0, 'food/thatte-idli.jpg', 'Active'),
(62, 'HH1032', 'f509', 60, 0.0, 'food/id vada.jpg', 'Active'),
(63, 'HH1030', 'f509', 40, 0.0, 'food/id vada.jpg', 'Active'),
(64, 'H1029', 'f509', 50, 0.0, 'food/id vada.jpg', 'Active'),
(65, 'H1028', 'f501', 60, 0.0, 'food/v1.JPG', 'Active'),
(66, 'H1028', 'f502', 60, 0.0, 'food/d4.JPG', 'Active'),
(67, 'H1028', 'f503', 60, 0.0, 'food/poori.PNG', 'Active'),
(68, 'H1028', 'f509', 50, 0.0, 'food/id vada.jpg', 'Active'),
(69, 'H1027', 'f501', 60, 0.0, 'food/v1.JPG', 'Active'),
(70, 'H1027', 'f502', 60, 0.0, 'food/d4.JPG', 'Active'),
(71, 'H1027', 'f503', 60, 0.0, 'food/poori.PNG', 'Active'),
(72, 'H1027', 'f509', 60, 0.0, 'food/id vada.jpg', 'Active'),
(73, 'H1026', 'f509', 50, 0.0, 'food/id vada.jpg', 'Active'),
(74, 'H1025', 'f509', 60, 0.0, 'food/id vada.jpg', 'Active'),
(75, 'H1017', 'f509', 50, 0.0, 'food/id vada.jpg', 'Active'),
(76, 'H1016', 'f509', 50, 0.0, 'food/id vada.jpg', 'Active'),
(77, 'H1011', 'f509', 50, 0.0, 'food/id vada.jpg', 'Active'),
(78, 'HH1032', 'f510', 60, 0.0, 'food/Bisi_Bele_Bath_Bisibelebath-scaled.jpeg', 'Active'),
(79, 'HH1030', 'f510', 50, 0.0, 'food/Bisi_Bele_Bath_Bisibelebath-scaled.jpeg', 'Active'),
(80, 'H1028', 'f510', 60, 0.0, 'food/Bisi_Bele_Bath_Bisibelebath-scaled.jpeg', 'Active'),
(81, 'H1027', 'f507', 60, 0.0, 'food/d3.JPG', 'Active'),
(82, 'H1026', 'f507', 50, 0.0, 'food/d3.JPG', 'Active'),
(83, 'H1026', 'f510', 60, 0.0, 'food/Bisi_Bele_Bath_Bisibelebath-scaled.jpeg', 'Active'),
(84, 'H1025', 'f508', 40, 0.0, 'food/thatte-idli.jpg', 'Active'),
(85, 'H1025', 'f510', 60, 0.0, 'food/Bisi_Bele_Bath_Bisibelebath-scaled.jpeg', 'Active'),
(86, 'H1017', 'f510', 60, 0.0, 'food/Bisi_Bele_Bath_Bisibelebath-scaled.jpeg', 'Active'),
(87, 'H1011', 'f510', 60, 0.0, 'food/Bisi_Bele_Bath_Bisibelebath-scaled.jpeg', 'Active'),
(88, 'HH1032', 'f511', 60, 0.0, 'food/Karnataka rice bath.JPG', 'Active'),
(89, 'H1031', 'f511', 50, 0.0, 'food/Karnataka rice bath.JPG', 'Active'),
(90, 'HH1030', 'f511', 50, 0.0, 'food/Karnataka rice bath.JPG', 'Active'),
(91, 'H1029', 'f511', 50, 0.0, 'food/Karnataka rice bath.JPG', 'Active'),
(92, 'H1026', 'f511', 50, 0.0, 'food/Karnataka rice bath.JPG', 'Active'),
(93, 'H1010', 'f502', 50, 0.0, 'food/d4.JPG', 'Active'),
(94, 'HH1030', 'f512', 50, 0.0, 'food/chow-chow-bath.jpg', 'Active'),
(95, 'H1025', 'f512', 50, 0.0, 'food/chow-chow-bath.jpg', 'Active'),
(96, 'H1017', 'f512', 50, 0.0, 'food/chow-chow-bath.jpg', 'Active'),
(97, 'H1011', 'f512', 50, 0.0, 'food/chow-chow-bath.jpg', 'Active'),
(98, 'HH1032', 'f513', 60, 0.0, 'food/Roti.jpg', 'Active'),
(99, 'HH1032', 'f514', 60, 0.0, 'food/naan.jpg', 'Active'),
(100, 'H1028', 'f513', 60, 0.0, 'food/Roti.jpg', 'Active'),
(101, 'H1028', 'f514', 60, 0.0, 'food/naan.jpg', 'Active'),
(102, 'H1027', 'f513', 60, 0.0, 'food/Roti.jpg', 'Active'),
(103, 'H1027', 'f514', 60, 0.0, 'food/naan.jpg', 'Active'),
(104, 'H1026', 'f513', 60, 0.0, 'food/Roti.jpg', 'Active'),
(105, 'H1026', 'f514', 50, 0.0, 'food/naan.jpg', 'Active'),
(106, 'H1025', 'f513', 50, 0.0, 'food/Roti.jpg', 'Active'),
(107, 'H1024', 'f513', 50, 0.0, 'food/Roti.jpg', 'Active'),
(108, 'H1024', 'f514', 50, 0.0, 'food/naan.jpg', 'Active'),
(109, 'H1021', 'f513', 50, 0.0, 'food/Roti.jpg', 'Active'),
(110, 'H1021', 'f514', 50, 0.0, 'food/naan.jpg', 'Active'),
(111, 'H1019', 'f513', 50, 0.0, 'food/Roti.jpg', 'Active'),
(112, 'H1033', 'f501', 50, 0.0, 'food/v1.JPG', 'Active'),
(113, 'H1033', 'f502', 50, 0.0, 'food/d4.JPG', 'Active'),
(114, 'H1033', 'f503', 60, 0.0, 'food/poori.PNG', 'Active'),
(115, 'H1033', 'f509', 80, 0.0, 'food/id vada.jpg', 'Active'),
(116, 'H1033', 'f513', 85, 0.0, 'food/Roti.jpg', 'Active'),
(117, 'H1033', 'f514', 90, 0.0, 'food/naan.jpg', 'Active'),
(118, 'H1014', 'f513', 85, 0.0, 'food/Roti.jpg', 'Active'),
(119, 'H1014', 'f514', 90, 0.0, 'food/naan.jpg', 'Active'),
(120, 'H1013', 'f513', 85, 0.0, 'food/Roti.jpg', 'Active'),
(121, 'H1013', 'f514', 90, 0.0, 'food/naan.jpg', 'Active'),
(122, 'H1033', 'f515', 180, 0.0, 'food/kaju.JPG', 'Active'),
(123, 'H1033', 'f516', 195, 0.0, 'food/Malai-Kofta-2.jpg', 'Active'),
(124, 'H1033', 'f517', 215, 0.0, 'food/shahi paneerr.jpg', 'Active'),
(125, 'HH1032', 'f515', 160, 0.0, 'food/kaju.JPG', 'Active'),
(126, '', 'f516', 185, 0.0, 'food/Malai-Kofta-2.jpg', 'InActive'),
(127, '', 'f517', 210, 0.0, 'food/shahi paneerr.jpg', 'InActive'),
(128, 'HH1032', 'f516', 185, 0.0, 'food/Malai-Kofta-2.jpg', 'Active'),
(129, 'HH1032', 'f517', 210, 0.0, 'food/shahi paneerr.jpg', 'Active'),
(130, 'H1028', 'f515', 210, 0.0, 'food/kaju.JPG', 'Active'),
(131, 'H1028', 'f516', 240, 0.0, 'food/Malai-Kofta-2.jpg', 'Active'),
(132, 'H1028', 'f517', 260, 0.0, 'food/shahi paneerr.jpg', 'Active'),
(133, 'H1027', 'f515', 160, 0.0, 'food/kaju.JPG', 'Active'),
(134, 'H1027', 'f516', 160, 0.0, 'food/Malai-Kofta-2.jpg', 'Active'),
(135, 'H1027', 'f517', 185, 0.0, 'food/shahi paneerr.jpg', 'Active'),
(136, 'H1026', 'f515', 135, 0.0, 'food/kaju.JPG', 'Active'),
(137, 'H1025', 'f515', 135, 0.0, 'food/kaju.JPG', 'Active'),
(138, 'H1025', 'f517', 160, 0.0, 'food/shahi paneerr.jpg', 'Active'),
(140, 'H1024', 'f515', 160, 0.0, 'food/kaju.JPG', 'Active'),
(141, 'H1024', 'f517', 195, 0.0, 'food/shahi paneerr.jpg', 'Active'),
(142, 'H1021', 'f515', 135, 0.0, 'food/Roti.jpg', 'Active'),
(143, 'H1021', 'f517', 135, 0.0, 'food/shahi paneerr.jpg', 'Active'),
(144, 'H1019', 'f514', 50, 0.0, 'food/naan.jpg', 'Active'),
(145, 'H1019', 'f515', 160, 0.0, 'food/kaju.JPG', 'Active'),
(146, 'H1019', 'f517', 185, 0.0, 'food/shahi paneerr.jpg', 'Active'),
(147, 'H1013', 'f515', 135, 0.0, 'food/kaju.JPG', 'Active'),
(148, 'H1013', 'f516', 185, 0.0, 'food/Malai-Kofta-2.jpg', 'Active'),
(149, 'H1013', 'f517', 195, 0.0, 'food/shahi paneerr.jpg', 'Active'),
(150, 'H1033', 'f521', 180, 0.0, 'food/sim.jpg', 'Active'),
(151, 'H1033', 'f522', 210, 0.0, 'food/nim.jpg', 'Active'),
(152, 'HH1032', 'f519', 120, 0.0, 'food/veg-fried-.jpg', 'Active'),
(153, 'HH1032', 'f518', 195, 0.0, 'food/veg-hyderabadi-biryani.jpg', 'Active'),
(154, 'HH1032', 'f521', 120, 0.0, 'food/sim.jpg', 'Active'),
(155, 'HH1032', 'f522', 160, 0.0, 'food/nim.jpg', 'Active'),
(156, 'HH1032', 'f520', 85, 0.0, 'food/south-indian-curd-rice-2.jpg', 'Active'),
(157, 'H1033', 'f518', 240, 0.0, 'food/veg-hyderabadi-biryani.jpg', 'Active'),
(158, 'H1033', 'f519', 160, 0.0, 'food/veg-fried-.jpg', 'Active'),
(159, 'H1033', 'f520', 135, 0.0, 'food/south-indian-curd-rice-2.jpg', 'Active'),
(160, 'H1028', 'f518', 260, 0.0, 'food/veg-hyderabadi-biryani.jpg', 'Active'),
(161, 'H1028', 'f519', 185, 0.0, 'food/veg-fried-.jpg', 'Active'),
(162, 'H1028', 'f520', 135, 0.0, 'food/south-indian-curd-rice-2.jpg', 'Active'),
(163, 'H1028', 'f521', 160, 0.0, 'food/sim.jpg', 'Active'),
(164, 'H1028', 'f522', 240, 0.0, 'food/nim.jpg', 'Active'),
(165, 'H1027', 'f518', 210, 0.0, 'food/veg-hyderabadi-biryani.jpg', 'Active'),
(166, 'H1027', 'f519', 185, 0.0, 'food/veg-fried-.jpg', 'Active'),
(167, 'H1027', 'f520', 160, 0.0, 'food/south-indian-curd-rice-2.jpg', 'Active'),
(168, 'H1027', 'f521', 135, 0.0, 'food/sim.jpg', 'Active'),
(169, 'H1027', 'f522', 185, 0.0, 'food/nim.jpg', 'Active'),
(170, 'H1026', 'f519', 120, 0.0, 'food/veg-fried-.jpg', 'Active'),
(171, 'H1026', 'f520', 110, 0.0, 'food/south-indian-curd-rice-2.jpg', 'Active'),
(172, 'H1026', 'f521', 130, 0.0, 'food/sim.jpg', 'Active'),
(173, 'H1025', 'f519', 80, 0.0, 'food/veg-fried-.jpg', 'Active'),
(174, 'H1025', 'f520', 60, 0.0, 'food/south-indian-curd-rice-2.jpg', 'Active'),
(175, 'H1025', 'f521', 120, 0.0, 'food/sim.jpg', 'Active'),
(176, 'H1025', 'f522', 140, 0.0, 'food/nim.jpg', 'Active'),
(177, 'H1021', 'f519', 60, 0.0, 'food/veg-fried-.jpg', 'Active'),
(178, 'H1021', 'f520', 50, 0.0, 'food/south-indian-curd-rice-2.jpg', 'Active'),
(179, 'H1017', 'f520', 60, 0.0, 'food/south-indian-curd-rice-2.jpg', 'Active'),
(180, 'H1016', 'f520', 50, 0.0, 'food/south-indian-curd-rice-2.jpg', 'Active'),
(181, 'H1011', 'f521', 90, 0.0, 'food/sim.jpg', 'Active'),
(182, 'H1011', 'f520', 60, 0.0, 'food/south-indian-curd-rice-2.jpg', 'Active'),
(183, 'H1028', 'f524', 120, 0.0, 'food/chicken-kabab-recipe-main-photo.jpg', 'Active'),
(184, 'H1028', 'f525', 250, 0.0, 'food/tandoori.jpg', 'Active'),
(185, 'H1028', 'f526', 180, 0.0, 'food/Hyderabadi-chicken-Biryani-1.jpg', 'Active'),
(186, 'H1028', 'f527', 240, 0.0, 'food/mutton biryani.jpg', 'Active'),
(187, 'H1028', 'f528', 200, 0.0, 'food/mutter_curry.PNG', 'Active'),
(188, 'H1028', 'f529', 170, 0.0, 'food/Chicken-Curry-Thumbnail.jpg', 'Active'),
(189, 'H1024', 'f506', 210, 0.0, 'food/mutter_curry.PNG', 'Active'),
(190, 'H1024', 'f524', 160, 0.0, 'food/chicken-kabab-recipe-main-photo.jpg', 'Active'),
(191, 'H1024', 'f525', 310, 0.0, 'food/tandoori.jpg', 'Active'),
(192, 'H1024', 'f527', 250, 0.0, 'food/mutton biryani.jpg', 'Active'),
(193, 'H1024', 'f526', 180, 0.0, 'food/Hyderabadi-chicken-Biryani-1.jpg', 'Active'),
(194, 'H1024', 'f528', 245, 0.0, 'food/mutter_curry.PNG', 'Active'),
(195, 'H1024', 'f529', 215, 0.0, 'food/Chicken-Curry-Thumbnail.jpg', 'Active'),
(196, 'H1023', 'f506', 200, 0.0, 'food/mutter_curry.PNG', 'Active'),
(197, 'H1023', 'f520', 60, 0.0, 'food/south-indian-curd-rice-2.jpg', 'Active'),
(198, 'H1023', 'f524', 110, 0.0, 'food/chicken-kabab-recipe-main-photo.jpg', 'Active'),
(199, 'H1023', 'f526', 150, 0.0, 'food/Hyderabadi-chicken-Biryani-1.jpg', 'Active'),
(200, 'H1023', 'f527', 220, 0.0, 'food/mutton biryani.jpg', 'Active'),
(201, 'H1023', 'f529', 150, 0.0, 'food/Chicken-Curry-Thumbnail.jpg', 'Active'),
(202, 'H1022', 'f524', 110, 0.0, 'food/chicken-kabab-recipe-main-photo.jpg', 'Active'),
(203, 'H1022', 'f526', 120, 0.0, 'food/Hyderabadi-chicken-Biryani-1.jpg', 'Active'),
(204, 'H1022', 'f527', 180, 0.0, 'food/mutton biryani.jpg', 'Active'),
(205, 'H1022', 'f528', 200, 0.0, 'food/mutter_curry.PNG', 'Active'),
(206, 'H1022', 'f529', 180, 0.0, 'food/Chicken-Curry-Thumbnail.jpg', 'Active'),
(207, 'H1021', 'f526', 130, 0.0, 'food/Hyderabadi-chicken-Biryani-1.jpg', 'Active'),
(208, 'H1021', 'f527', 200, 0.0, 'food/mutton biryani.jpg', 'Active'),
(209, 'H1021', 'f524', 120, 0.0, 'food/chicken-kabab-recipe-main-photo.jpg', 'Active'),
(210, 'H1020', 'f523', 150, 0.0, 'food/chicken-kabab-recipe-main-photo.jpg', 'Active'),
(211, 'H1020', 'f524', 120, 0.0, 'food/chicken-kabab-recipe-main-photo.jpg', 'Active'),
(212, 'H1020', 'f525', 350, 0.0, 'food/tandoori.jpg', 'Active'),
(213, 'H1020', 'f526', 130, 0.0, 'food/Hyderabadi-chicken-Biryani-1.jpg', 'Active'),
(214, 'H1020', 'f529', 110, 0.0, 'food/Chicken-Curry-Thumbnail.jpg', 'Active'),
(215, 'H1019', 'f524', 120, 0.0, 'food/chicken-kabab-recipe-main-photo.jpg', 'Active'),
(216, 'H1019', 'f526', 185, 0.0, 'food/Hyderabadi-chicken-Biryani-1.jpg', 'Active'),
(217, 'H1018', 'f506', 220, 0.0, 'food/mutter_curry.PNG', 'Active'),
(218, 'H1018', 'f523', 160, 0.0, 'food/chicken-kabab-recipe-main-photo.jpg', 'Active'),
(219, 'H1018', 'f526', 185, 0.0, 'food/Hyderabadi-chicken-Biryani-1.jpg', 'Active'),
(220, 'H1018', 'f527', 240, 0.0, 'food/mutton biryani.jpg', 'Active'),
(221, 'H1018', 'f529', 160, 0.0, 'food/Chicken-Curry-Thumbnail.jpg', 'Active'),
(222, 'H1018', 'f528', 240, 0.0, 'food/mutton biryani.jpg', 'Active'),
(223, 'H1010', 'f509', 60, 0.0, 'food/id vada.jpg', 'Active'),
(224, 'H1010', 'f511', 60, 0.0, 'food/Karnataka rice bath.JPG', 'Active'),
(225, 'H1013', 'f524', 120, 0.0, 'food/chicken-kabab-recipe-main-photo.jpg', 'Active'),
(226, 'H1013', 'f525', 400, 0.0, 'food/tandoori.jpg', 'Active'),
(227, 'H1013', 'f526', 185, 0.0, 'food/Hyderabadi-chicken-Biryani-1.jpg', 'Active'),
(228, 'H1013', 'f527', 240, 0.0, 'food/mutton biryani.jpg', 'Active'),
(229, 'H1013', 'f528', 210, 0.0, 'food/mutter_curry.PNG', 'Active'),
(230, 'H1013', 'f529', 185, 0.0, 'food/Chicken-Curry-Thumbnail.jpg', 'Active'),
(231, 'H1014', 'f515', 260, 0.0, 'food/kaju.JPG', 'Active'),
(232, 'H1014', 'f516', 240, 0.0, 'food/Malai-Kofta-2.jpg', 'Active'),
(233, 'H1014', 'f517', 310, 0.0, 'food/shahi paneerr.jpg', 'Active'),
(234, 'H1014', 'f524', 240, 0.0, 'food/chicken-kabab-recipe-main-photo.jpg', 'Active'),
(235, 'H1014', 'f525', 350, 0.0, 'food/tandoori.jpg', 'Active'),
(236, 'H1014', 'f526', 240, 0.0, 'food/Hyderabadi-chicken-Biryani-1.jpg', 'Active'),
(237, 'H1014', 'f527', 310, 0.0, 'food/mutton biryani.jpg', 'Active'),
(238, 'H1014', 'f528', 240, 0.0, 'food/mutter_curry.PNG', 'Active'),
(239, 'H1014', 'f529', 210, 0.0, 'food/Chicken-Curry-Thumbnail.jpg', 'Active'),
(240, 'H1015', 'f524', 120, 0.0, 'food/chicken-kabab-recipe-main-photo.jpg', 'Active'),
(241, 'H1015', 'f526', 160, 0.0, 'food/Hyderabadi-chicken-Biryani-1.jpg', 'Active'),
(242, 'H1015', 'f527', 310, 0.0, 'food/mutton biryani.jpg', 'Active'),
(243, 'H1015', 'f528', 240, 0.0, 'food/mutter_curry.PNG', 'Active'),
(244, 'H1015', 'f529', 185, 0.0, 'food/Chicken-Curry-Thumbnail.jpg', 'Active'),
(245, 'H1034', 'f532', 150, 0.0, 'food/Grilled-Chicken-Sandwich-750x750.jpg', 'Active'),
(246, 'H1034', 'f533', 120, 0.0, 'food/Vegetable-Sandwich.jpg', 'Active'),
(247, 'H1034', 'f534', 150, 0.0, 'food/paneer-sandwich-recipe.jpg', 'Active'),
(248, 'H1034', 'f535', 120, 0.0, 'food/Chicken-momos.jpg', 'Active'),
(249, 'H1034', 'f536', 150, 0.0, 'food/Chicken-momos.jpg', 'Active'),
(250, 'H1033', 'f533', 160, 0.0, 'food/Vegetable-Sandwich.jpg', 'Active'),
(251, 'H1033', 'f534', 185, 0.0, 'food/paneer-sandwich-recipe.jpg', 'Active'),
(252, 'HH1032', 'f533', 120, 0.0, 'food/Vegetable-Sandwich.jpg', 'Active'),
(253, 'H1028', 'f533', 160, 0.0, 'food/Vegetable-Sandwich.jpg', 'Active'),
(254, 'H1028', 'f532', 240, 0.0, 'food/Grilled-Chicken-Sandwich-750x750.jpg', 'Active'),
(255, 'H1028', 'f534', 185, 0.0, 'food/paneer-sandwich-recipe.jpg', 'Active'),
(256, 'H1027', 'f533', 160, 0.0, 'food/Vegetable-Sandwich.jpg', 'Active'),
(257, 'H1027', 'f534', 185, 0.0, 'food/paneer-sandwich-recipe.jpg', 'Active'),
(258, 'H1034', 'f537', 80, 0.0, 'food/b4.JPG', 'Active'),
(259, 'H1034', 'f538', 100, 0.0, 'food/b6.JPG', 'Active'),
(260, 'H1033', 'f537', 160, 0.0, 'food/b4.JPG', 'Active'),
(261, 'H1033', 'f538', 185, 0.0, 'food/b6.JPG', 'Active'),
(262, 'HH1032', 'f538', 120, 0.0, 'food/b6.JPG', 'Active'),
(263, 'HH1032', 'f537', 100, 0.0, 'food/b4.JPG', 'Active'),
(264, 'HH1032', 'f539', 60, 0.0, 'food/masala puri.jpg', 'Active'),
(265, 'HH1032', 'f540', 85, 0.0, 'food/Dahi-Puri-2-3.jpg', 'Active'),
(266, 'H1033', 'f539', 85, 0.0, 'food/masala puri.jpg', 'Active'),
(267, 'H1033', 'f540', 110, 0.0, 'food/Dahi-Puri-2-3.jpg', 'Active'),
(268, 'H1028', 'f537', 85, 0.0, 'food/b4.JPG', 'Active'),
(269, 'H1028', 'f538', 160, 0.0, 'food/b6.JPG', 'Active'),
(270, 'H1028', 'f539', 80, 0.0, 'food/masala puri.jpg', 'Active'),
(271, 'H1028', 'f540', 120, 0.0, 'food/Dahi-Puri-2-3.jpg', 'Active');

-- --------------------------------------------------------

--
-- Stand-in structure for view `hotefood`
-- (See below for the actual view)
--
CREATE TABLE `hotefood` (
`hid` varchar(20)
,`hname` varchar(50)
,`address` varchar(100)
,`pic` varchar(50)
,`fid` varchar(20)
,`price` int(20)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `hotefood1`
-- (See below for the actual view)
--
CREATE TABLE `hotefood1` (
`hid` varchar(20)
,`hname` varchar(50)
,`address` varchar(100)
,`pic` varchar(50)
,`fid` varchar(20)
,`price` int(20)
,`rate` decimal(20,1)
);

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `ID` int(20) NOT NULL,
  `hid` varchar(20) NOT NULL,
  `hname` varchar(50) NOT NULL,
  `ph` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `rate` decimal(5,1) NOT NULL,
  `reviews` int(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `loc` varchar(200) NOT NULL,
  `pic` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`ID`, `hid`, `hname`, `ph`, `address`, `rate`, `reviews`, `lname`, `loc`, `pic`, `status`) VALUES
(9, 'H1010', 'MAMU IDLI ', '8855996632', ' 234W+6XF, Chikka Garadi St, Penshan Mohalla, Hassan, Karnataka 573201', 3.5, 8, 'Penshan Mohalla', 'https://www.google.com/maps/dir//234W%2B6XF,+Chikka+Garadi+St,+Penshan+Mohalla,+Hassan,+Karnataka+573201/@13.0055483,76.0150225,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3ba5483d2da4c63f:0xe9822ba2b483734e!2m', 'hotels/2023-06-27.jpg', 'Active'),
(10, 'H1011', 'SANMAN HOTEL', '8855663214', '23, Old Bus Stand Rd, Ammeer Mohalla, Hassan, Karnataka 573201', 4.0, 5, 'Old Bus Stand Rd', 'https://www.google.com/maps/dir//23,+Old+Bus+Stand+Rd,+Ammeer+Mohalla,+Hassan,+Karnataka+573201/@13.0038391,76.0170874,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3ba5483d7b6f2cd7:0x2d123cde3c3ce652!2m2!1d76.09', 'hotels/ra78-Hotel-Sanman-interior-2022-07.jpg', 'Active'),
(12, 'H1013', 'MERIDIAN', '9966325698', '2452+8G3, Rangoli Halla, Hassan, Karnataka 573201', 4.5, 4, 'Rangoli Halla', 'https://www.google.com/maps/dir//2452%2B8G3,+Rangoli+Halla,+Hassan,+Karnataka+573201/@13.0082492,76.0188895,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3ba5483c725d5e53:0x3cb9b36dd0dc131b!2m2!1d76.1012773!2d13.', 'hotels/meri.jpg', 'Active'),
(13, 'H1014', 'LIQUID LOUNGE ', '9886633610', ' rama, 2nd floor, Hotel, Bangalore - Mangalore Hwy, Thanniruhalla, Hassan, Karnataka 573201', 4.5, 8, 'Thanniruhalla', 'https://www.google.com/maps/dir/13.0285568,76.1069568/liquid+lounge+hassan+map/@13.0119723,76.0759462,14z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x3ba537e2718ec447:0xc0fe54d4d6c784b0!2m2!1d76.0849967', 'hotels/ll.jpg', 'Active'),
(14, 'H1015', 'MAMATHA Hotel', '8896569364', '2424+W8P, Bangalore - Mangalore Rd, Beside Bhanu Theater, Karigowda Colony, Rangoli Halla, Hassan, K', 4.0, 8, 'Rangoli Halla', 'https://www.google.com/maps/dir//2424%2BW8P,+Bangalore+-+Mangalore+Rd,+Beside+Bhanu+Theater,+Karigowda+Colony,+Rangoli+Halla,+Hassan,+Karnataka+573201/@13.0023196,76.0234369,12z/data=!4m8!4m7!1m0!1m5!', 'hotels/mamatha hotel.jpg', 'Active'),
(15, 'H1016', 'VAIBHAV REFRESHMENTS', '9966885632', ' Salagame Rd,  Vidyuthnagara,  Hassan, Karnataka 573201', 3.8, 5, ' Salagame Rd', 'https://www.google.com/maps/dir/13.0167584,76.1182123/Vaibhav+refreshments+hassan/@13.0213441,76.0994757,15z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x3ba549f5a76710a1:0x83995e61127cdb56!2m2!1d76.1015', 'hotels/vaib.jpg', 'Active'),
(16, 'H1017', 'SUDHA HOTEL', '8855669910', 'Sahyadri circle near Maharaja park Hassan', 4.2, 8, 'Sahyadri circle', 'https://www.google.co.in/maps/place/Sudha+Hotel/@13.0098543,76.0970154,17z/data=!3m1!4b1!4m9!3m8!1s0x3ba5483b70fa8767:0x4e6af2e7067e2524!5m2!4m1!1i2!8m2!3d13.0098543!4d76.0995903!16s%2Fg%2F1tfp0x6l?en', 'hotels/sudhahotel.PNG', 'Active'),
(17, 'H1018', 'Akshay  Dum Biryani', '8695369875', 'Shop No 9, Vivekanagar Hassan, Circle, near Diary, Vivekanagara, Hassan, Karnataka 573201', 3.8, 5, 'Vivekanagara', 'https://www.google.com/maps/dir//Shop+No+9,+Vivekanagar+Hassan,+Circle,+near+Diary,+Vivekanagara,+Hassan,+Karnataka+573201/@13.0167609,76.0326456,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3ba5490811185727:0x1', 'hotels/adb.jpg', 'Active'),
(18, 'H1019', 'NASH', '9685748965', '2434+7XR, Krishnaraja Pura, Hassan, Karnataka 573201', 3.5, 3, 'Krishnaraja Pura', 'https://www.google.com/maps/dir//2434%2B7XR,+Krishnaraja+Pura,+Hassan,+Karnataka+573201/@13.003223,76.0250016,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3ba54815601ddac1:0xdcc1b78b2593ea97!2m2!1d76.1074035!2d1', 'hotels/nash.jpg', 'Active'),
(19, 'H1020', 'SHIVANNA KABAB', '8896987452', '2484+V5H, Rangoli Halla, Hassan, Karnataka 573201', 3.8, 10, 'Rangoli Halla', 'https://www.google.com/maps/dir//2484%2BV5H,+Rangoli+Halla,+Hassan,+Karnataka+573201/@13.0171865,76.0230671,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3ba5483705ebfee1:0x9fd8024a5d7f88cb!2m2!1d76.105469!2d13.0', 'hotels/sk.jpg', 'Active'),
(20, 'H1021', 'TASTE ME ', '8959621450', 'Housing Board, Krishnaraja Pura, Hassan, Karnataka 573201', 4.0, 12, 'Krishnaraja Pura', 'https://www.google.com/maps/dir//Bilal+masjid,+RR+Towers,+near+manjunatha+kalyana+mantappa,+Housing+Board,+Krishnaraja+Pura,+Hassan,+Karnataka+573201/@13.0094611,76.0278849,12z/data=!4m8!4m7!1m0!1m5!1', 'hotels/taste me.jpg', 'Active'),
(21, 'H1022', 'DONNE BIRYANI MANE', '8889659653', 'Race Course Rd, opposite Govt high school, opposite to Hassan, Rangoli Halla, Hassan, Karnataka 5732', 4.0, 8, 'Race Course Rd', 'https://www.google.com/maps/dir//2453%2B828,+Race+Course+Rd,+opposite+Govt+high+school,+opposite+to+Hassan,+Rangoli+Halla,+Hassan,+Karnataka+573201/@13.0073838,76.0199851,12z/data=!4m8!4m7!1m0!1m5!1m1', 'hotels/dbm.jpg', 'Active'),
(22, 'H1023', 'PILLAI MESS', '9265986398', 'Sahyadri Theatre, Near, Hosaline Rd, Penshan Mohalla, Hassan, Karnataka 573201', 4.0, 10, 'Penshan Mohalla', 'https://www.google.com/maps/dir//Sahyadri+Theatre,+Near,+Hosaline+Rd,+Penshan+Mohalla,+Hassan,+Karnataka+573201/@13.0092328,76.0136934,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3ba54824a414d751:0xa129e69980f7', 'hotels/pillai.jpg', 'Active'),
(23, 'H1024', 'EATS OF ARAB', '9869874100', 'Samskruth Bhavan Road, Hassan, Karnataka 573201', 4.6, 8, 'Samskruth Bhavan Road', 'https://www.google.com/maps/dir//Samskruth+Bhavan+Road,+Hassan,+Karnataka+573201/@13.0122493,76.0181159,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3ba5483a53c93e35:0x3276815a77d30322!2m2!1d76.1005178!2d13.0122', 'hotels/eoa.jpg', 'Active'),
(24, 'H1025', 'UDUPI THINDI', '8899665420', 'Ring Road Sai Pushpa Arcade, Hassan, Karnataka 573201', 4.0, 5, 'Jaya Nagar', 'https://www.google.com/maps/dir//Ring+Road+Sai+Pushpa+Arcade,+Hassan,+Karnataka+573201/@13.0267286,76.0247393,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3ba5498cf5bf93d9:0x7e8c8ca374ee0275!2m2!1d76.1071412!2d1', 'hotels/bnr1.jpg', 'Active'),
(25, 'H1026', 'SHRUTHI HOTEL', '9869210360', 'bus stand, Kasturi Ba Rd, behind city, Penshan Mohalla, Hassan, Karnataka 573201', 3.9, 8, 'Penshan Mohalla', 'https://www.google.com/maps/dir//bus+stand,+Kasturi+Ba+Rd,+behind+city,+Penshan+Mohalla,+Hassan,+Karnataka+573201/@13.0060892,76.015844,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3ba5492c435d394b:0xf4ff6558830', 'hotels/img-20180308-wa0009_1.jpg', 'Active'),
(26, 'H1027', 'SUVARNA SAGAR', '8965993210', 'Suvarna Arcade, No. 97, Bangalore - Mangalore Rd, Ammeer Mohalla, Hassan, Karnataka 573201', 3.2, 10, 'BM Road', 'https://www.google.com/maps/dir//Suvarna+Arcade,+No.+97,+Bangalore+-+Mangalore+Rd,+Ammeer+Mohalla,+Hassan,+Karnataka+573201/@13.0018707,76.0160476,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3ba5481795f66d97:0x', 'hotels/su sa.jpg', 'Active'),
(27, 'H1028', 'HOTEL ASHOKA', '9966885321', 'BM Road hassan', 4.1, 8, 'BM Road', 'https://www.google.co.in/maps/place/The+Ashhok+Hassan/@13.0023832,76.0996757,17z/data=!3m1!4b1!4m9!3m8!1s0x3ba5482155555555:0x255bba559df08929!5m2!4m1!1i2!8m2!3d13.0023832!4d76.1022506!16s%2Fg%2F1tfbr', 'hotels/hassan-ashok-hotel.jpg', 'Active'),
(28, 'H1029', 'GAJANANA REFRESHMENTS', '9687549620', '24F4+GJ5, MG Rd, Vidhya Nagar, Hassan, Karnataka 573201', 4.2, 6, 'Sampige road', 'https://www.google.com/maps/dir//Krishnaraja+Puram+5th+cross+st,+Sampige+Road,+Hassan,+Karnataka+573201/@13.0074233,76.0247177,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3ba5483f12449309:0xe6e1441acf9af3e2!2m2', 'hotels/c613-Restaurant-New-Gajanana-refreshments-p', 'Active'),
(29, 'HH1030', 'HOTEL GOMMATADRI ', '9869521300', '24F4+GJ5, MG Rd, Vidhya Nagar, Hassan, Karnataka 573201', 3.4, 5, 'Sampige road', 'https://www.google.com/maps/dir//24F4%2BGJ5,+MG+Rd,+Vidhya+Nagar,+Hassan,+Karnataka+573201/@13.0237601,76.0242063,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3ba54834e65809d5:0xe3f16e5c3418c732!2m2!1d76.1066082', 'hotels/maxresdefault.jpg', 'Active'),
(30, 'H1031', 'HVR ', '8699963210', 'Ground Floor, Basettikoppal Main Rd, Krishnaraja Pura, Near sampige road Hassan, Karnataka 573201', 4.0, 7, 'Sampige road', 'https://www.google.com/maps/dir//Shop+1,Madhu+Complex,+Ground+Floor,+Basettikoppal+Main+Rd,+Krishnaraja+Pura,+Hassan,+Karnataka+573201/@13.0117727,76.0260929,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3ba54838', 'hotels/r47a-menu-HVR-Veg.jpg', 'Active'),
(31, 'HH1032', 'PANJURLI GRAND VEG', '8888965210', '2484+V5H, Rangoli Halla, Hassan, Karnataka 573201', 4.7, 12, 'Rangoli Halla', 'https://www.google.com/maps/dir//Race+Course+Rd,+Rangoli+Halla,+Hassan,+Karnataka+573201/@13.0086177,76.0201049,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x3ba549df97b9b149:0x5454c85380b508b!2m2!1d76.1025068!2d', 'hotels/c77e-Panjurli-Grand-Veg-Hassan-dessert.jpg', 'Active'),
(32, 'H1033', 'HOTEL RAAMA ', '9998568510', 'Thanniruhalla ,hassan -573201', 4.2, 10, 'Thanniruhalla', 'https://www.google.co.in/maps/place/Hotel+Raama/@12.9949542,76.0822652,17z/data=!3m1!4b1!4m9!3m8!1s0x3ba537e2887185f7:0xa0d718b34d14f8fe!5m2!4m1!1i2!8m2!3d12.9949542!4d76.0848401!16s%2Fg%2F11b7q9tjgy?', 'hotels/Hotel_Raama-Hassan-Info-16-901466.jpg', 'Active'),
(33, 'H1034', 'Lassi Pluss', '9869865412', 'Mg Road hasssan', 3.9, 5, 'mg road', 'https://www.google.co.in/maps/place/Lassi+%26+Cafe/@13.0115773,76.1035178,17z/data=!3m1!4b1!4m6!3m5!1s0x3ba5493ad18d261f:0x3f86ba35babf04bc!8m2!3d13.0115773!4d76.1060927!16s%2Fg%2F11hyt9vmdc?entry=ttu', 'hotels/lassi.jpeg', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(20) NOT NULL,
  `fid` varchar(20) NOT NULL,
  `group1` varchar(20) NOT NULL DEFAULT 'Veg',
  `fcat` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `fimage` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `fid`, `group1`, `fcat`, `fname`, `fimage`) VALUES
(1, 'f501', 'Veg', 'Dosa', 'Masala Dosa', 'food/v1.JPG'),
(2, 'f502', 'Veg', 'Dosa', 'Plain Dosa', 'food/d4.JPG'),
(3, 'f503', 'Veg', 'Poori', 'Poori Sagu ', 'food/poori.png'),
(4, 'f504', 'Non Veg', 'Rice', 'Birayani', 'food/n5.jpg'),
(5, 'f505', 'Snacks and Bevrages', 'Cold Drinks', 'Cola Cold Drinks', 'food/b5.JPG'),
(6, 'f506', 'Non Veg', 'CURRY', 'MUTTER CURRY', 'food/mutter_curry.PNG'),
(7, 'f507', 'Veg', 'idli', 'rava idli', 'food/d3.JPG'),
(8, 'f508', 'Veg', 'idli', 'thatte idli', 'food/thatte-idli.jpg'),
(9, 'f509', 'Veg', 'idli', 'idli/vada', 'food/id vada.jpg'),
(10, 'f510', 'Veg', 'Rice', 'Bisibele bath', 'food/Bisi_Bele_Bath_Bisibelebath-scaled.jpeg'),
(11, 'f511', 'Veg', 'Rice', 'Rice bath', 'food/Karnataka rice bath.JPG'),
(12, 'f512', 'Veg', 'Rice', 'chow chow bath', 'food/chow-chow-bath.jpg'),
(13, 'f513', 'Veg', 'Roti', 'roti', 'food/Roti.jpg'),
(14, 'f514', 'Veg', 'Roti', 'Naan', 'food/naan.jpg'),
(15, 'f515', 'Veg', 'Curry', 'Kaju masala', 'food/kaju.JPG'),
(16, 'f516', 'Veg', 'Curry', 'Malai Kofta', 'food/Malai-Kofta-2.jpg'),
(17, 'f517', 'Veg', 'Curry', 'Shahi Paneer', 'food/shahi paneerr.jpg'),
(18, 'f518', 'Veg', 'Rice', 'hyderabadi  Veg Biryani', 'food/veg-hyderabadi-biryani.jpg'),
(19, 'f519', 'Veg', 'Rice', 'Veg Fried Rice ', 'food/veg-fried-.jpg'),
(20, 'f520', 'Veg', 'Rice', 'Curd Rice', 'food/south-indian-curd-rice-2.jpg'),
(21, 'f521', 'Veg', 'Meals', 'South Indian ', 'food/sim.jpg'),
(22, 'f522', 'Veg', 'Meals', 'North Indian', 'food/nim.jpg'),
(23, 'f523', 'Non Veg', 'Dry items', 'Garlic kabab', 'food/chicken-kabab-recipe-main-photo.jpg'),
(24, 'f524', 'Non Veg', 'Dry items', 'kabab', 'food/chicken-kabab-recipe-main-photo.jpg'),
(25, 'f525', 'Non Veg', 'Dry items', 'chicken thandoori', 'food/tandoori.jpg'),
(26, 'f526', 'Non Veg', 'Rice', 'Chicken Biryani', 'food/Hyderabadi-chicken-Biryani-1.jpg'),
(27, 'f527', 'Non Veg', 'Rice', 'Mutton Biryani', 'food/mutton biryani.jpg'),
(28, 'f528', 'Non Veg', 'Curry', 'Mutton masala', 'food/mutter_curry.PNG'),
(29, 'f529', 'Non Veg', 'Curry', 'Chicken masala', 'food/Chicken-Curry-Thumbnail.jpg'),
(32, 'f532', 'Snacks  and Bevrages', 'Sandwich', 'Chicken Sandwich', 'food/Grilled-Chicken-Sandwich-750x750.jpg'),
(33, 'f533', 'Snacks  and Bevrages', 'Sandwich', 'Veg sandwich', 'food/Vegetable-Sandwich.jpg'),
(34, 'f534', 'Snacks  and Bevrages', 'Sandwich', 'Paneer sandwich', 'food/paneer-sandwich-recipe.jpg'),
(35, 'f535', 'Snacks  and Bevrages', 'Momo', 'Veg Momo', 'food/Chicken-momos.jpg'),
(36, 'f536', 'Snacks  and Bevrages', 'Momo', 'Chicken Momo', 'food/Chicken-momos.jpg'),
(37, 'f537', 'Snacks  and Bevrages', 'juice', 'Fresh Fruit Juice ', 'food/b4.JPG'),
(38, 'f538', 'Snacks  and Bevrages', 'Juice', 'Milk Shakes', 'food/b6.JPG'),
(39, 'f539', 'Snacks  and Bevrages', 'Dry items', 'Masala Puri', 'food/masala puri.jpg'),
(40, 'f540', 'Snacks  and Bevrages', 'Dry items', 'Dahi Puri', 'food/Dahi-Puri-2-3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(20) NOT NULL,
  `usn` varchar(20) NOT NULL,
  `psw` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `usn`, `psw`, `status`) VALUES
(1, 'Admin', '1234', 'Active');

-- --------------------------------------------------------

--
-- Structure for view `hotefood`
--
DROP TABLE IF EXISTS `hotefood`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `hotefood`  AS SELECT `h`.`hid` AS `hid`, `h`.`hname` AS `hname`, `h`.`address` AS `address`, `h`.`pic` AS `pic`, `f`.`fid` AS `fid`, `f`.`price` AS `price` FROM (`food` `f` join `hotels` `h` on(`f`.`hid` = `h`.`hid`)) ;

-- --------------------------------------------------------

--
-- Structure for view `hotefood1`
--
DROP TABLE IF EXISTS `hotefood1`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `hotefood1`  AS SELECT `h`.`hid` AS `hid`, `h`.`hname` AS `hname`, `h`.`address` AS `address`, `h`.`pic` AS `pic`, `f`.`fid` AS `fid`, `f`.`price` AS `price`, `f`.`rate` AS `rate` FROM (`food` `f` join `hotels` `h` on(`f`.`hid` = `h`.`hid`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`idf`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `idf` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=272;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
