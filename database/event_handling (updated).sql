-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2024 at 09:40 AM
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
-- Database: `lokutthan`
--

-- --------------------------------------------------------

--
-- Table structure for table `event_handling`
--

CREATE TABLE `event_handling` (
  `id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `image_name` varchar(220) NOT NULL,
  `server_date_time` datetime NOT NULL,
  `seq` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event_handling`
--

INSERT INTO `event_handling` (`id`, `event_id`, `image_name`, `server_date_time`, `seq`) VALUES
(1, 1, 'swadeshi02.jpeg', '2024-07-17 11:54:05', 1),
(2, 1, 'swadeshi06.jpeg', '2024-07-17 12:04:58', 2),
(3, 1, 'swadeshi07.jpeg', '2024-07-17 12:04:58', 3),
(4, 1, 'swadeshi03.jpeg', '2024-07-17 11:54:05', 4),
(5, 1, 'swadeshi01.jpeg', '2024-07-17 11:54:05', 5),
(6, 1, 'swadeshi04.jpeg', '2024-07-17 11:54:05', 6),
(7, 1, 'swadeshi05.jpeg', '2024-07-17 11:54:05', 7),
(8, 2, 'yukti05.jpeg', '2024-07-17 12:17:11', 2),
(9, 2, 'yukti02.jpeg', '2024-07-17 12:17:11', 3),
(10, 2, 'yukti03.jpeg', '2024-07-17 12:17:11', 5),
(11, 2, 'yukti01.jpeg', '2024-07-17 12:17:11', 4),
(12, 2, 'yukti04.jpeg', '2024-07-17 12:17:11', 1),
(13, 3, 'thanksgiving01.jpeg', '2024-07-18 07:48:17', 1),
(14, 3, 'thanksgiving02.jpeg', '2024-07-18 07:48:17', 2),
(15, 3, 'thanksgiving03.jpeg', '2024-07-18 07:48:17', 3),
(16, 3, 'thanksgiving04.jpeg', '2024-07-18 07:48:17', 4),
(17, 3, 'thanksgiving05.jpeg', '2024-07-18 07:48:17', 5),
(19, 2, 'yukti06.jpeg', '2024-07-17 12:17:11', 6),
(20, 3, 'thanksgiving06.jpeg', '2024-07-18 07:48:17', 6),
(21, 4, 'tranning01.jpeg', '2024-07-17 12:17:11', 1),
(22, 4, 'tranning02.jpeg', '2024-07-17 12:17:11', 2),
(23, 4, 'tranning03.jpeg', '2024-07-17 12:17:11', 3),
(24, 4, 'tranning04.jpeg', '2024-07-17 12:17:11', 4),
(25, 5, 'prize07.jpeg', '2024-07-17 11:54:05', 1),
(26, 5, 'prize06.jpeg', '2024-07-17 11:54:05', 2),
(27, 5, 'prize04.jpeg', '2024-07-17 11:54:05', 3),
(28, 5, 'prize01.jpeg', '2024-07-17 11:54:05', 4),
(29, 5, 'prize02.jpeg', '2024-07-17 11:54:05', 5),
(30, 5, 'prize03.jpeg', '2024-07-17 11:54:05', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event_handling`
--
ALTER TABLE `event_handling`
  ADD PRIMARY KEY (`id`),
  ADD KEY `event_id` (`event_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event_handling`
--
ALTER TABLE `event_handling`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
