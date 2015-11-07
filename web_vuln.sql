-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 18, 2014 at 07:22 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `web_vuln`
--
CREATE DATABASE IF NOT EXISTS `web_vuln` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `web_vuln`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE IF NOT EXISTS `tbl_products` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` double NOT NULL,
  `description` varchar(200) NOT NULL,
  `image` varchar(100) NOT NULL,
  `category` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`id`, `name`, `price`, `description`, `image`, `category`) VALUES
(1, 'Samsung', 10000000, 'Hàng tốt', 'image/samsung.jpg', 1),
(2, 'Lenovo', 13000000, 'Xử lý đồ họa mạnh, chip tốc độ cao', 'image/lenovo.jpg', 1),
(3, 'Sony vaio', 23000000, 'Chip core i7', 'image/vaio.jpg', 1),
(4, 'Chuot quang HP', 250000, 'Hàng tốt', 'image/chuot.jpg', 2),
(5, 'Headphone', 550000, 'Âm thanh chất lượng', 'image/headphone.jpg', 2),
(6, 'Loa mini', 230000, 'Hàng chất lượng', 'image/loa.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `birthday` varchar(200) NOT NULL,
  `nationality` varchar(200) NOT NULL,
  `job` varchar(200) NOT NULL,
  `balance` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `uname`, `pass`, `fullname`, `birthday`, `nationality`, `job`, `balance`) VALUES
(1, 'longvt', 'longvt', 'Vu Tien Long <script>alert(1)</script>', '04.04.1991', 'Viet Nam', 'researcher', 40000000),
(6, 'hoangth', 'hoangth', 'Tran Tien hoang', '04.03.1982', 'Viet Nam', 'IT', 2000000);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
