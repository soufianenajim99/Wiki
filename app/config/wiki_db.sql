-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2024 at 05:12 PM
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
-- Database: `wiki_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_desc`) VALUES
(1, 'new', 'new'),
(10, 'test2', 'rerre'),
(11, 'test3', 'opopo'),
(13, 'cate3', 'sgrg');

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE `tag` (
  `tag_id` int(11) NOT NULL,
  `tag_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tag`
--

INSERT INTO `tag` (`tag_id`, `tag_name`) VALUES
(1, 'jiojoijerf'),
(2, 'iiii'),
(6, 'sc'),
(7, 'acs'),
(8, 'da');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_fullname` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_pwd` varchar(255) NOT NULL,
  `user_role` enum('author','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_fullname`, `user_email`, `user_pwd`, `user_role`) VALUES
(1, 'soufiane marco', 'sou@gmail', 'pppppppppp', 'author'),
(2, 'ioiioj', 'soufianenajim20@gmail.com', '$2y$10$WEp7hAx3nAY3e0RYcR5KkO72Jhcxbg5qnmu2D.D0ocfrPG/fBJoFm', 'author'),
(3, 'admin', 'admin@admin.com', '$2y$10$JPvJQ3kUWlYdeVs5KWur5.yN68iAG03Igo8Vd292YcMxeRAlnOShC', 'admin'),
(4, 'client', 'client@client.com', '$2y$10$xwiWls8IDb0TGcdxJCg6Bu2Ul0ng.hWfpPnsZaGkJpoH7IUqiDNiG', 'author'),
(5, 'author', 'author@gmail.com', '$2y$10$hZr4qADdiNynax2IL87kX.D0GID4G8iPmKAzGWkxVk1nYxJttu33a', 'author');

-- --------------------------------------------------------

--
-- Table structure for table `wiki`
--

CREATE TABLE `wiki` (
  `wiki_id` int(11) NOT NULL,
  `wiki_image` varchar(255) NOT NULL,
  `wiki_title` varchar(255) NOT NULL,
  `wiki_content` longtext NOT NULL,
  `wiki_desc` text NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `wiki_statut` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wiki`
--

INSERT INTO `wiki` (`wiki_id`, `wiki_image`, `wiki_title`, `wiki_content`, `wiki_desc`, `created_at`, `category_id`, `user_id`, `wiki_statut`) VALUES
(21, 'http://localhost/Wiki/public/img/Wallpaper new (81).jpg', 'sfdds', 'hoihio', 'dsvfi', '2024-01-12', 10, 4, 1),
(22, 'http://localhost/Wiki/public/img/Wallpaper new (81).jpg', 'fsdfd', 'iohoih', 'dvdf', '2024-01-12', 10, 4, 1),
(23, 'http://localhost/Wiki/public/img/Zephyrus Duo 15 x MDJ_top screen.jpg', 'adsds', 'cdsds', 'cdcd', '2024-01-12', 10, 4, 1),
(24, 'http://localhost/Wiki/public/img/Zephyrus Duo 15 x MDJ_top screen.jpg', 'fdfvdvf', 'niunui', 'fvdf', '2024-01-12', 10, 4, 1),
(25, 'http://localhost/Wiki/public/img/Zephyrus Duo 15 x MDJ_top screen.jpg', 'adsds', 'cdsds', 'cdcd', '2024-01-12', 10, 4, 1),
(26, 'http://localhost/Wiki/public/img/Wallpaper new (81).jpg', 'cdsd', 'dfdf', 'fvddf', '2024-01-12', 10, 4, 1),
(27, 'http://localhost/Wiki/public/img/Wallpaper new (81).jpg', 'cdsd', 'dfdf', 'fvddf', '2024-01-12', 10, 4, 1),
(28, 'http://localhost/Wiki/public/img/Wallpaper new (81).jpg', 'adsdas', 'dasasd', 'dasas', '2024-01-12', 10, 4, 1),
(29, 'http://localhost/Wiki/public/img/Wallpaper new (81).jpg', 'ormeiorem', 'geer', 'egre', '2024-01-12', 10, 5, 1),
(30, 'http://localhost/Wiki/public/img/IMG_1334.PNG', 'lopkpokpokokp', 'dewdewdededewdedeewdedeedwedewdewddewdewdededewdedeewdedeedwedewdewddewdewdededewdedeewdedeedwedewdewddewdewdededewdedeewdedeedwedewdewddewdewdededewdedeewdedeedwedewdewddewdewdededewdedeewdedeedwedewdewddewdewdededewdedeewdedeedwedewdewddewdewdededewdedeewdedeedwedewdewddewdewdededewdedeewdedeedwedewdewddewdewdededewdedeewdedeedwedewdewddewdewdededewdedeewdedeedwedewdewddewdewdededewdedeewdedeedwedewdewddewdewdededewdedeewdedeedwedewdewddewdewdededewdedeewdedeedwedewdewddewdewdededewdedeewdedeedwedewdewddewdewdededewdedeewdedeedwedewdewddewdewdededewdedeewdedeedwedewdewddewdewdededewdedeewdedeedwedewdewddewdewdededewdedeewdedeedwedewdewddewdewdededewdedeewdedeedwedewdewddewdewdededewdedeewdedeedwedewdewddewdewdededewdedeewdedeedwedewdewddewdewdededewdedeewdedeedwedewdewddewdewdededewdedeewdedeedwedewdewddewdewdededewdedeewdedeedwedewdewddewdewdededewdedeewdedeedwedewdewddewdewdededewdedeewdedeedwedewdewddewdewdededewdedeewdedeedwedewdewd', 'dewdewdededewdedeewdedeedwedewdewd', '2024-01-12', 10, 4, 1),
(31, 'http://localhost/Wiki/public/img/Zephyrus Duo 15 x MDJ_top screen.jpg', 'dasdasdas', 'buibuibubuibuibibubaudbueifbwuibuifbuwebfuewbibuibuibubuibuibibubaudbueifbwuibuifbuwebfuewbibuibuibubuibuibibubaudbueifbwuibuifbuwebfuewbibuibuibubuibuibibubaudbueifbwuibuifbuwebfuewbibuibuibubuibuibibubaudbueifbwuibuifbuwebfuewbibuibuibubuibuibibubaudbueifbwuibuifbuwebfuewbibuibuibubuibuibibubaudbueifbwuibuifbuwebfuewbibuibuibubuibuibibubaudbueifbwuibuifbuwebfuewbibuibuibubuibuibibubaudbueifbwuibuifbuwebfuewbibuibuibubuibuibibubaudbueifbwuibuifbuwebfuewbibuibuibubuibuibibubaudbueifbwuibuifbuwebfuewbibuibuibubuibuibibubaudbueifbwuibuifbuwebfuewbibuibuibubuibuibibubaudbueifbwuibuifbuwebfuewbi', 'buibuibubuibuibibubaudbueifbwuibuifbuwebfuewbibuibuibubuibuibibubaudbueifbwuibuifbuwebfuewbibuibuibubuibuibibubaudbueifbwuibuifbuwebfuewbibuibuibubuibuibibubaudbueifbwuibuifbuwebfuewbibuibuibubuibuibibubaudbueifbwuibuifbuwebfuewbibuibuibubuibuibibubaudbueifbwuibuifbuwebfuewbibuibuibubuibuibibubaudbueifbwuibuifbuwebfuewbibuibuibubuibuibibubaudbueifbwuibuifbuwebfuewbibuibuibubuibuibibubaudbueifbwuibuifbuwebfuewbibuibuibubuibuibibubaudbueifbwuibuifbuwebfuewbibuibuibubuibuibibubaudbueifbwuibuifbuwebfuewbibuibuibubuibuibibubaudbueifbwuibuifbuwebfuewbibuibuibubuibuibibubaudbueifbwuibuifbuwebfuewbi', '2024-01-12', 10, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `wikitags`
--

CREATE TABLE `wikitags` (
  `wiki_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wikitags`
--

INSERT INTO `wikitags` (`wiki_id`, `tag_id`) VALUES
(27, 1),
(27, 2),
(27, 8),
(28, 2),
(28, 6),
(28, 8),
(29, 2),
(29, 6),
(29, 8),
(30, 1),
(30, 2),
(30, 7),
(31, 6),
(31, 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`tag_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `wiki`
--
ALTER TABLE `wiki`
  ADD PRIMARY KEY (`wiki_id`),
  ADD KEY `usr_fnk` (`user_id`),
  ADD KEY `cat_fnk` (`category_id`);

--
-- Indexes for table `wikitags`
--
ALTER TABLE `wikitags`
  ADD KEY `wiki_fnk` (`wiki_id`),
  ADD KEY `tags_fnk` (`tag_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tag`
--
ALTER TABLE `tag`
  MODIFY `tag_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `wiki`
--
ALTER TABLE `wiki`
  MODIFY `wiki_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `wiki`
--
ALTER TABLE `wiki`
  ADD CONSTRAINT `cat_fnk` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usr_fnk` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `wikitags`
--
ALTER TABLE `wikitags`
  ADD CONSTRAINT `tags_fnk` FOREIGN KEY (`tag_id`) REFERENCES `tag` (`tag_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `wiki_fnk` FOREIGN KEY (`wiki_id`) REFERENCES `wiki` (`wiki_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
