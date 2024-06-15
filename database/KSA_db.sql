-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: April 19, 2024 at 08:26 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+03:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `KSA_db`
--

-- --------------------------------------------------------


--
-- Table structure for table `founders`
--

CREATE TABLE `founders` (
  `id` int(30) NOT NULL,
  `title` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `upload_path` text DEFAULT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `founders`
--

INSERT INTO `founders` (`id`, `title`, `description`, `upload_path`, `date_created`) VALUES
(1, 'Sheikh Mohammed bin Abdulwahhab', 'A prominent Islamic scholar and theologian, Sheikh Mohammed bin Abdulwahhab is best known for his role in the founding of the religious movement often referred to as Wahhabism. His teachings emphasized the importance of a strict adherence to the Quran and Sunnah, and he formed a pivotal alliance with the House of Saud, which played a significant role in the establishment of the First Saudi State.', 'uploads/founder_1', '2024-04-18 10:31:03'),
(7, 'Imam Turki bin Abdullah', 'As the founder of the Second Saudi State, Imam Turki bin Abdullah was a key figure in the re-establishment of Saudi rule after the fall of the First Saudi State. His leadership was marked by the recapture of Riyadh and the restoration of Saudi authority in the region, setting the stage for the future unification of the Kingdom.', 'uploads/founder_7', '2024-04-18 11:17:11'),
(8, 'King Abdulaziz Al Saud (Ibn Saud)', 'The founder of the modern Kingdom of Saudi Arabia, King Abdulaziz Al Saud, also known as Ibn Saud, was a visionary leader whose conquests and diplomatic skills led to the unification of the disparate regions of the Arabian Peninsula into a single nation. His reign saw the discovery of oil and the beginning of Saudi Arabias transformation into a global energy powerhouse.', 'uploads/founder_8', '2024-04-18 13:34:08');

-- --------------------------------------------------------


--
-- Table structure for table `system_info`
--

CREATE TABLE `system_info` (
  `id` int(30) NOT NULL,
  `meta_field` text NOT NULL,
  `meta_value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `system_info`
--

INSERT INTO `system_info` (`id`, `meta_field`, `meta_value`) VALUES
(1, 'name', 'KSA Map'),
(6, 'short_name', 'KSA Map'),
(11, 'logo', 'uploads/1623978900_masskara.png'),
(13, 'user_avatar', 'uploads/user_avatar.jpg'),
(14, 'cover', 'uploads/cover.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `avatar` text DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 0,
  `date_added` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `founders`
--
ALTER TABLE `founders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_info`
--
ALTER TABLE `system_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `founders`
--
ALTER TABLE `founders`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `system_info`
--

ALTER TABLE `system_info`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
