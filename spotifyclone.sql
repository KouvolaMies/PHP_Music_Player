-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2024 at 09:55 AM
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
-- Database: `spotifyclone`
--

-- --------------------------------------------------------

--
-- Table structure for table `id7`
--

CREATE TABLE `id7` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(30) DEFAULT NULL,
  `artist` varchar(30) DEFAULT NULL,
  `src` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `id7`
--

INSERT INTO `id7` (`id`, `title`, `artist`, `src`) VALUES
(1, 'test', NULL, 'test.mp3'),
(2, 'test2', NULL, 'test2.mp3');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `passwd` varchar(64) NOT NULL,
  `creationdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `firstname`, `lastname`, `email`, `passwd`, `creationdate`) VALUES
(7, 'lehmä', 'lehmä', 'lehmä', 'lehma.lehma@gmail.com', '$2y$10$AiFZ9F1VTHHjMHuTH6EokOLqb6wmQOO4n9m4yKuP3mmWENNqRqJiO', '2024-09-09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `id7`
--
ALTER TABLE `id7`
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
-- AUTO_INCREMENT for table `id7`
--
ALTER TABLE `id7`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
