-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2023 at 08:33 PM
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
-- Database: `gaminity`
--

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `id` int(11) NOT NULL,
  `game_image` varchar(50) NOT NULL,
  `game_name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `featured` enum('Y','N','','') NOT NULL,
  `recommended` enum('Y','N','','') NOT NULL,
  `game_page` varchar(50) NOT NULL,
  `game_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id`, `game_image`, `game_name`, `price`, `featured`, `recommended`, `game_page`, `game_description`) VALUES
(1, 'img/yugioh.png', 'Yu-gi-oh! Master Duel', 0, 'Y', 'Y', 'game-detail.php', 'This is Game Description 1'),
(2, 'img/apex_legends.png', 'Apex Legends', 0, 'Y', 'Y', 'game-detail.php', 'This is Game Description 2'),
(3, 'img/brawlhalla.png', 'Brawlhalla', 0, 'Y', 'Y', 'game-detail.php', 'This is Game Description 3'),
(4, 'img/dota2.png', 'Dota 2', 0, 'Y', 'Y', 'game-detail.php', 'This is Game Description 4'),
(5, 'img/elden_ring.png', 'Elden Ring', 419300, 'Y', 'Y', 'game-detail.php', 'This is Game Description 5'),
(6, 'img/gow.png', 'God Of War', 437400, 'Y', 'Y', 'game-detail.php', 'This is Game Description 6'),
(7, 'img/honkai.png', 'Honkai Impact 3rd', 0, 'Y', 'Y', 'game-detail.php', 'This is Game Description 7'),
(8, 'img/3c.png', 'Choo-Choo Charles', 99599, 'N', 'Y', 'game-detail.php', 'This is Game Description 8'),
(9, 'img/hogwarts_legacy.png', 'Hogwarts Legacy', 599200, 'Y', 'N', 'game-detail.php', 'This is Game Description 9'),
(10, 'img/forza.png', 'Forza Horizon 5', 349500, 'N', 'Y', 'game-detail.php', 'This is Game Description 10'),
(11, 'img/c2077.png', 'Cyberpunk 2077', 350000, 'Y', 'N', 'game-detail.php', 'This is Game Description 11'),
(12, 'img/sof.png', 'Sons Of The Forest', 200000, 'N', 'Y', 'game-detail.php', 'This is Game Description 12'),
(13, 'img/gtav.png', 'Grand Theft Auto V', 160000, 'N', 'Y', 'game-detail.php', 'This is Game Description 13'),
(14, 'img/sot.png', 'Sea of Thieves', 130000, 'N', 'Y', 'game-detail.php', 'This is Game Description 14'),
(15, 'img/d2.png', 'Destiny 2', 0, 'N', 'Y', 'game-detail.php', 'This is Game Description 15'),
(16, 'img/tabs.png', 'Totally Accurate Battle Simulator', 38000, 'N', 'Y', 'game-detail.php', 'This is Game Description 16'),
(17, 'img/wf.png', 'Warframe', 0, 'N', 'Y', 'game-detail.php', 'This is Game Description 17'),
(18, 'img/phas.png', 'Phasmophobia', 72000, 'N', 'Y', 'game-detail.php', 'This is Game Description 18'),
(19, 'img/ark.png', 'ARK: Survival Evolved', 30000, 'N', 'Y', 'game-detail.php', 'This is Game Description 19'),
(20, 'img/ds3.png', 'DARK SOULS III', 300000, 'N', 'Y', 'game-detail.php', 'This is Game Description 20'),
(21, 'img/bg3.png', 'Baldur`s Gate 3', 700000, 'N', 'Y', 'game-detail.php', 'This is Game Description 21'),
(22, 'img/dbd.png', 'Dead by Daylight', 60000, 'N', 'Y', 'game-detail.php', 'This is Game Description 22');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('Admin','User','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `email`, `password`, `role`) VALUES
(4, 'Yin', 'Yan', 'yin2@gmail.com', '$2y$10$xr/xYZYFHYLXXAecpgbQt.MVjhpbTLXoU3IFyN1INLO3k3aJ5PgW2', 'Admin'),
(5, 'Riko Gimin', 'Dwi Putra', 'riko@gmail.com', '$2y$10$0Uh6jVL3ZTATaU0FnupaK.XH5Pis1giaSkuCJOpQaSCyRZhBhxnW6', 'Admin'),
(6, 'Vincent', 'Cianata', 'vincentcianata@gmail.com', '$2y$10$kddI7aqR4JVJF8vTPBSEsur3kDN14Z80jUIdOD4Yt0xko.ne3T5KC', 'Admin'),
(8, 'v', 'c', 'vc1@gmail.com', '$2y$10$hIhADOoISQyQHOpj8vIyau40i8LAUQ03ZNe2UZigvwp1N1ltIZwGi', 'User'),
(9, 'vc', 'vc', 'vc2@gmail.com', '$2y$10$qlgQn1skRoSa66K3zs.5XO8kl.jf.BbTzlCP/3kNBBFzaJnc1CtlC', 'User'),
(10, 'vc', 'vc', 'vc2@gmail.com', '$2y$10$qlgQn1skRoSa66K3zs.5XO8kl.jf.BbTzlCP/3kNBBFzaJnc1CtlC', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `game` varchar(255) NOT NULL,
  `harga` bigint(30) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `payment_method` varchar(255) DEFAULT NULL,
  `game_image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `email`, `game`, `harga`, `status`, `payment_method`, `game_image`) VALUES
(3, 'yin2@gmail.com', 'Bakso Simulator', 150000, 'Wishlist', NULL, ''),
(9, 'riko@gmail.com', 'Game 1', 100000, 'Success', NULL, ''),
(10, 'vincentc@gmail.com', 'Game 1', 100000, 'Wishlist', NULL, ''),
(11, 'vincentc@gmail.com', 'Game 1', 100000, 'Wishlist', NULL, ''),
(26, 'vc1@gmail.com', 'Totally Accurate Battle Simulator', 38000, 'Success', NULL, 'img/tabs.png'),
(27, 'vc1@gmail.com', 'Sea of Thieves', 130000, 'Success', NULL, 'img/sot.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
