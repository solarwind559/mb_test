-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2021 at 12:04 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emails_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `emails`
--

CREATE TABLE `emails` (
  `id` int(11) NOT NULL,
  `address` varchar(256) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emails`
--

INSERT INTO `emails` (`id`, `address`, `time`) VALUES
(8, 'hogwarts@history.co.uk', '0000-00-00 00:00:00'),
(11, 'out_look@outlook.co', '2021-03-03 20:18:29'),
(12, 'oogle@google.com', '2021-03-03 20:18:11'),
(16, 'two@yahoo.com', '2021-03-03 20:17:32'),
(17, 'hubspot@hubspot.com', '2021-03-03 20:17:11'),
(18, 'google@gmail.com', '2021-03-03 20:15:56'),
(26, 'yahoo@yahoo.com', '2021-03-03 20:16:14'),
(28, 'outlook@outlook.com', '2021-03-03 20:16:32'),
(39, 'zzz@zZz.zz', '0000-00-00 00:00:00'),
(47, 'zzz@zZzZz.zz', '0000-00-00 00:00:00'),
(50, 'letsgo@zZz.oh', '0000-00-00 00:00:00'),
(52, 'areyou@empty.qu', '0000-00-00 00:00:00'),
(56, 'zzz@zZz.zz', '0000-00-00 00:00:00'),
(64, 'getsomesleep@zzz.zz', '0000-00-00 00:00:00'),
(73, 'hhh@ggc.co', '0000-00-00 00:00:00'),
(74, 'hhh@ggc.co', '0000-00-00 00:00:00'),
(75, 'ai@nu.lv', '0000-00-00 00:00:00'),
(76, 'hhh@ggc.co', '0000-00-00 00:00:00'),
(79, 'hhh@ggc.co', '0000-00-00 00:00:00'),
(80, 'hhh@ggc.co', '0000-00-00 00:00:00'),
(84, 'zzz@zZz.zz', '0000-00-00 00:00:00'),
(86, 'zzz@zZz.zz', '0000-00-00 00:00:00'),
(89, 'hogwarts@history.co.uk', '0000-00-00 00:00:00'),
(90, 'why@not.lv', '0000-00-00 00:00:00'),
(91, 'test@test.tt', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emails`
--
ALTER TABLE `emails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
