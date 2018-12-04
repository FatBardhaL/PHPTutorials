-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2018 at 11:44 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gallery_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `filename` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `title`, `description`, `filename`, `type`, `size`) VALUES
(15, 'Foto1', 'Foto e pinguinave', 'Penguins.jpg', 'jpg', 759),
(16, 'Foto1', 'Foto e pinguinave', 'Penguins.jpg', 'jpg', 759),
(17, 'Title', 'Pershkrimi i ID 17', '', '', 0),
(18, 'Title', 'Description', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `first_name`, `last_name`) VALUES
(1, 'rico', '123', 'John', 'Doe'),
(2, 'shkurtesa', 'pass', 'Filan', 'Fisteku'),
(3, 'username3', 'pass3', 'firstname3', 'lastname3\r\n'),
(4, 'test', 'test', 'test', 'test'),
(35, 'Example_username', 'Example_password', 'Update-uar first_name', 'Update-uar last_name'),
(36, 'Example_username', 'Example_password', 'Example_first_name', 'Update-uar'),
(47, 'Example_username', 'Example_password', 'Example_first_name', 'Example_last_name'),
(58, 'Ex_username', 'Ex_password', 'Ex_first_name', 'Ex_last_name'),
(59, 'useri 1', 'Ex_password', 'Ex_first_name', 'Ex_last_name'),
(62, 'useri 2', 'Ex_password', 'Ex_first_name', 'Ex_last_name'),
(88, 'useri 100', '', '', ''),
(107, 'Ex_user', 'Ex_pass', 'Update f_name', 'Update l_name'),
(108, 'Ex_username', 'Ex_password', 'Ex_first_name', 'Ex_last_name'),
(111, 'User..', 'Pass..', 'F_name...', 'L_name...'),
(114, 'User..2', 'Pass..2', 'F_name..2', 'L_name..2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
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
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
