-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2020 at 01:01 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


create Database `pecom`;
use `pecom`;


-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`roles`)),
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statu` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `roles`, `password`, `nom`, `prenom`, `tel`, `adress`, `statu`) VALUES
(1, 'emailAdmin@email.com', '[\"ROLE_ADMIN\"]', '$argon2id$v=19$m=65536,t=4,p=1$TzVhMGgyMTVIRXY4azkyWQ$BvnlxhEmJ5qtSL32o1EP4WSCGB609Y4jfp5ZCplvUKs', 'root', 'prenom', '06122345', 'adresss', 1),
(2, 'emailnormaluser@mail.com', '[\"ROLE_USER\"]', '$argon2id$v=19$m=65536,t=4,p=1$TzVhMGgyMTVIRXY4azkyWQ$BvnlxhEmJ5qtSL32o1EP4WSCGB609Y4jfp5ZCplvUKs', 'user', 'prenom', '0987654321', 'adresss', 1),
(3, 'y@youness.com', '[\"ROLE_USER\"]', '$argon2id$v=19$m=65536,t=4,p=1$MUYveGJ2cHNuVTFnRzh3bA$qUA0iBW1/uC2+HIaPNdRDBYqzyg/Af5dMO4xF+lBdDg', 'youness', 'youness', '09988888888', 'adress', 1),
(8, 'plz@tes.com', '[\"ROLE_USER\"]', '$argon2id$v=19$m=65536,t=4,p=1$Q0lBR25zOFRISjVOWUxNaA$WwS753ZurfoYwGQbsyuhosy6BJs09cfyhSecDMXIiEw', 'plz', 'prenom', '012345', 'adress', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
