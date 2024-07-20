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
-- Table structure for table `event_main`
--

CREATE TABLE `event_main` (
  `id` int(11) NOT NULL,
  `name` varchar(220) NOT NULL,
  `title` varchar(220) NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1:active||2:de-active||9:deleted',
  `seq` int(11) NOT NULL,
  `base_path` text NOT NULL DEFAULT 'assets/image/'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event_main`
--

INSERT INTO `event_main` (`id`, `name`, `title`, `description`, `created_at`, `created_by`, `updated_at`, `updated_by`, `status`, `seq`, `base_path`) VALUES
(1, 'सब मेला उत्सव', 'Swadeshi jagran', '', '2024-07-17 11:53:04', 0, '2024-07-17 11:53:04', 0, 1, 2, 'assets/image/swadeshi/'),
(2, 'युक्ति', 'yukti1.0', '', '2024-07-17 12:15:15', 0, '2024-07-17 12:15:15', 0, 1, 3, 'assets/image/yukti/'),
(3, ' धन्यवाद समारोह', 'Thanks Giving धन्यवाद समारोह', '', '2024-07-17 12:15:15', 0, '2024-07-17 12:15:15', 0, 1, 4, 'assets/image/Thanksgiving/'),
(4, 'Training', 'Training', '', '2024-07-17 12:15:15', 0, '2024-07-17 12:15:15', 0, 1, 5, 'assets/image/Tranning/'),
(5, 'Prize Ceremony', 'Prize Ceremony', '', '2024-07-17 11:53:04', 0, '2024-07-17 11:53:04', 0, 1, 1, 'assets/image/prize-ceremony/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event_main`
--
ALTER TABLE `event_main`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event_main`
--
ALTER TABLE `event_main`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
