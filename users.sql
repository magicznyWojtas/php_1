-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2018 at 04:40 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `forename` varchar(40) COLLATE utf8mb4_polish_ci NOT NULL,
  `surname` varchar(40) COLLATE utf8mb4_polish_ci NOT NULL,
  `email` varchar(40) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `forename`, `surname`, `email`) VALUES
(12, 'Wojtas', 'gdfg', 'dfhdf'),
(13, 'hdf', 'hdf', 'hdfhdf'),
(14, 'dfhdfhdf', 'fdhdfhfd', 'h'),
(15, 'dfhdfhdf', 'fdhdfhfd', 'h'),
(16, 'dfhdfhdf', 'dfhdfh', 'hdf'),
(17, 'dfhdfhdf', 'dfhdfh', 'hdf'),
(19, 'fdhdfhdf', 'dfhdf', 'hdfhfdh'),
(20, 'sdgsdgsg', 'gsdgsdgdsg', 'dsgsdgsd'),
(22, 'sdgdsgdsags', 'sdgsdfgsdg', 'sdgsdgds'),
(23, 'gdsgdsg', 'gdsgadg', 'dsgsdgdsg'),
(24, 'gsdgasga', 'sgsdgsd', 'gdsgdsg'),
(25, 'dsaggsdgdagdsg', 'dsgdsgdsg', 'dsgdsgdsg'),
(26, 'dsgdsgdsagads', 'gadsgdsg', 'dasgdgd'),
(27, 'dsgdsagadsg', 'sgadsgd', 'gdsg'),
(28, 'dsgdSGsg', 'dsgdsg', 'dgdgds'),
(29, 'sdgdsgd', 'gdsgadgds', 'gdsgdsg'),
(30, 'sgsdgGDS', 'gdsgGDGdGGzgfgdfg', 'zdfgzfdgzfdg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
