-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2021 at 05:30 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `image_room`
--

CREATE TABLE `image_room` (
  `id_image` int(11) NOT NULL,
  `name_image` varchar(255) DEFAULT NULL,
  `id_room` int(11) DEFAULT NULL,
  `url` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `image_room`
--

INSERT INTO `image_room` (`id_image`, `name_image`, `id_room`, `url`) VALUES
(1, 'TEST', 101, 'https://s3.amazonaws.com/xcaliber/images/649/o/9f1cf64f-619c-4a22-ad9f-2ad8c2611549_Grand_Superior_210616_13.jpg'),
(2, 'TEST2', 101, 'https://s3.amazonaws.com/xcaliber/images/649/o/156417ab-b22e-459e-a527-60b7fbe7f17f_Grand_Superior_210616_14.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `UserID` int(3) UNSIGNED ZEROFILL NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phonenumber` int(11) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `role` varchar(20) NOT NULL DEFAULT 'user'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`UserID`, `firstname`, `lastname`, `email`, `username`, `password`, `phonenumber`, `status`, `role`) VALUES
(010, 'sirinya', 'ausha', 'sirinyaannusah46@gmail.com', 'test', '81dc9bdb52d04dc20036dbd8313ed055', 0, '1', 'user'),
(011, 'Admin', 'Bobo', '', 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 0, '1', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `order_room`
--

CREATE TABLE `order_room` (
  `id_order` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `datestart` date NOT NULL,
  `dateend` date NOT NULL,
  `price` int(11) NOT NULL,
  `payment_status` enum('0','1','2') NOT NULL DEFAULT '0',
  `status` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_room`
--

INSERT INTO `order_room` (`id_order`, `room_id`, `member_id`, `datestart`, `dateend`, `price`, `payment_status`, `status`) VALUES
(11, 101, 10, '2021-10-13', '2021-10-16', 8100, '0', '1'),
(13, 101, 10, '2021-10-14', '2021-10-15', 200, '0', '1');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id_room` int(11) NOT NULL,
  `type_room` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `status` enum('on','off') NOT NULL DEFAULT 'on',
  `size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id_room`, `type_room`, `price`, `status`, `size`) VALUES
(101, 1, 2700, 'off', 18),
(102, 1, 3000, 'off', 20),
(103, 2, 2000, 'on', 16);

-- --------------------------------------------------------

--
-- Table structure for table `type_room`
--

CREATE TABLE `type_room` (
  `id_type` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type_bed` varchar(100) NOT NULL,
  `size_start` int(10) NOT NULL,
  `wifi` enum('yes','no') NOT NULL DEFAULT 'yes',
  `people` int(11) NOT NULL,
  `price_start` int(11) NOT NULL,
  `status` enum('on','off') NOT NULL DEFAULT 'on',
  `head_pic` text NOT NULL,
  `buttom_pic` text NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `type_room`
--

INSERT INTO `type_room` (`id_type`, `name`, `type_bed`, `size_start`, `wifi`, `people`, `price_start`, `status`, `head_pic`, `buttom_pic`, `text`) VALUES
(1, 'Grand Superior', 'Double Bed', 18, 'yes', 2, 27000, 'on', 'https://images.mrandmrssmith.com/images/1736x1302/4705779-soori-bali-bali-indonesia.jpg', 'https://images.mrandmrssmith.com/images/1736x1302/4705779-soori-bali-bali-indonesia.jpg', 'Grand Superior rooms offer the perfect place to unwind and enjoy a pleasant night’s sleep.'),
(2, 'Standard Room', 'Double Bed', 16, 'yes', 0, 2001, 'on', 'abc.jpg', 'https://images.mrandmrssmith.com/images/1736x1302/4705779-soori-bali-bali-indonesia.jpg', 'modern room with amenities for a peaceful stay.'),
(3, 'ads', 'das', 255, 'yes', 2, 1500, 'on', 'images/32295.png', 'images/iMac_24-in_Orange_4-port_PDP_Image_Position-1__TH.png', 'asdsad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `image_room`
--
ALTER TABLE `image_room`
  ADD PRIMARY KEY (`id_image`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `Username` (`firstname`);

--
-- Indexes for table `order_room`
--
ALTER TABLE `order_room`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id_room`);

--
-- Indexes for table `type_room`
--
ALTER TABLE `type_room`
  ADD PRIMARY KEY (`id_type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `image_room`
--
ALTER TABLE `image_room`
  MODIFY `id_image` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `UserID` int(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `order_room`
--
ALTER TABLE `order_room`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id_room` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1012;

--
-- AUTO_INCREMENT for table `type_room`
--
ALTER TABLE `type_room`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
