-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2023 at 12:03 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

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
-- Error reading structure for table hotel.image_room: #1932 - Table 'hotel.image_room' doesn't exist in engine
-- Error reading data for table hotel.image_room: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `hotel`.`image_room`' at line 1

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
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `role` varchar(20) NOT NULL DEFAULT 'user'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`UserID`, `firstname`, `lastname`, `email`, `username`, `password`, `status`, `role`) VALUES
(010, 'sirinya', 'ausha', 'sirinyaannusah46@gmail.com', 'test', 'sirin', '1', 'user'),
(011, 'Admin', 'Bobo', '', 'admin', '81dc9bdb52d04dc20036dbd8313ed055', '1', 'admin'),
(012, 'yani', 'aomsin', 'noinnnnn@gmail.com', 'nuy', '12345', '1', 'user'),
(013, 'yanisa', 'aom', 'nnnnnn@gmail.com', 'noo', '1234', '1', 'user'),
(014, 'ya', 'ao', 'saisamorn.ainfinity@gmail.com', 'na', '81dc9bdb52d04dc20036dbd8313ed055', '1', 'user'),
(015, 'nuuuu', 'aommm', 'nuy@gmail.com', 'gom', 'e10adc3949ba59abbe56e057f20f883e', '1', 'user'),
(016, 'are', 'you', 'noinangnuy@hotmail.com', 'nmo', 'b59c67bf196a4758191e42f76670ceba', '1', 'user'),
(017, 'bbbb', 'aaaa', 'nnniuu@gmail.com', 'nan', '81dc9bdb52d04dc20036dbd8313ed055', '1', 'user'),
(018, 'anuchit', 'pokpok', 'nicnic@gmail.com', 'nictest', '827ccb0eea8a706c4c34a16891f84e7b', '1', 'user'),
(019, 'runya', 'aimaem', 'runya46@gmail.com', 'bob', '81dc9bdb52d04dc20036dbd8313ed055', '1', 'user'),
(020, 'sasina', 'aomsin', 'nnopniuu@gmail.com', 'sisa', '81dc9bdb52d04dc20036dbd8313ed055', '1', 'user'),
(021, 'nuuuuuu', 'oooooo', 'nnnjjjjiuu@gmail.com', 'yanirin', '827ccb0eea8a706c4c34a16891f84e7b', '1', 'user'),
(022, 'sssssss', 'sssssssss', 'sssssss@email.com', 'ya', '827ccb0eea8a706c4c34a16891f84e7b', '1', 'user'),
(023, 'purmpoon', 'llllll', 'mmm@email.com', 'pp', '81dc9bdb52d04dc20036dbd8313ed055', '1', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `order_room`
--
-- Error reading structure for table hotel.order_room: #1932 - Table 'hotel.order_room' doesn't exist in engine
-- Error reading data for table hotel.order_room: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `hotel`.`order_room`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `room`
--
-- Error reading structure for table hotel.room: #1932 - Table 'hotel.room' doesn't exist in engine
-- Error reading data for table hotel.room: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `hotel`.`room`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `type_room`
--
-- Error reading structure for table hotel.type_room: #1932 - Table 'hotel.type_room' doesn't exist in engine
-- Error reading data for table hotel.type_room: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `hotel`.`type_room`' at line 1

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `Username` (`firstname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `UserID` int(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
