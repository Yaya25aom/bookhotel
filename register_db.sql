-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2021 at 05:13 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register_db`
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
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`UserID`, `firstname`, `lastname`, `email`, `username`, `password`) VALUES
(005, 'firstname', 'lastname', 'email', 'username', 'password'),
(006, 'wer', 'wer', 'noirenangnuy@hotmail.com', 'yut', '92d06f151d61fc2d4e64dae37577d3d2'),
(007, 'gyu', 'io', 'sirinyaausahuh46@gmail.com', 'sirinyaau', '674f3c2c1a8a6f90461e8a66fb5550ba'),
(008, 'hui', 'koo', 'sirinyajioausah46@gmail.com', 'nuo', '748a3b3c0f37f26ba794132ceb5a2961'),
(009, 'ji', 'ko', 'sirinyaaujiosah46@gmail.com', 'mni', '68053af2923e00204c3ca7c6a3150cf7'),
(010, 'sirinya', 'ausha', 'sirinyaannusah46@gmail.com', 'mirror', '81dc9bdb52d04dc20036dbd8313ed055');

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
(101, 1, 2700, 'on', 18),
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
(1, 'Grand Superior', 'Double Bed', 18, 'yes', 2, 2700, 'on', 'https://images.mrandmrssmith.com/images/1736x1302/4705779-soori-bali-bali-indonesia.jpg', 'https://images.mrandmrssmith.com/images/1736x1302/4705779-soori-bali-bali-indonesia.jpg', 'Grand Superior rooms offer the perfect place to unwind and enjoy a pleasant night’s sleep.'),
(2, 'Standard Room', 'Double Bed', 16, 'yes', 2, 2000, 'on', 'abc.jpg', 'https://images.mrandmrssmith.com/images/1736x1302/4705779-soori-bali-bali-indonesia.jpg', 'modern room with amenities for a peaceful stay.');

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
  MODIFY `UserID` int(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id_room` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `type_room`
--
ALTER TABLE `type_room`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
