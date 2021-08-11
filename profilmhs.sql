-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2021 at 10:50 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendaftaran-mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `npm` varchar(12) NOT NULL,
  `email` varchar(200) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--
INSERT INTO `mahaiswa` (`id`, `nama`, `nim`, `email`, `jurusan`, `gambar`) VALUES (NULL, 'ANAS ALIHI', '190102013', 'anas@gmail.com', 'S1 SISTEM INFORMASI', 'anas.jfif'), (NULL, 'BOY OLASATER LATUWAEL', '190102025', 'boy@gmail.com', 'S1 SISTEM INFORMASI', 'boy.jfif'), (NULL, 'LINDA WAGOLA ', '190102080', 'linda@gmail.com', 'S1 SISTEM INFORMASI', 'linda.jpg'), (NULL, 'WIDYANINGSIH WAHAB WAEL ', '160102098', 'widyan@gmail.com', 'S1 SISTEM INFORMASI', 'wid.jpg'), (NULL, 'MUHAMMAD SYAFRIL AGUNG AZATI', '190102092', 'azati@gmail.com', 'S1 SISTEM INFORMASI', 'apit.jpg')

-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--
INSERT INTO `user` (`id`, `username`, `password`) VALUES 
(1, 'user', '$2y$10$s1OqiwNk3FE7R2feTaHXvOeQb6VI.lLXrKTfggsHfPtW9gNf0yIoa'), 
(2, 'admin', '$2y$10$wlOtf9P/enuytV2nf6drouo7VK/.3WrXzjQfMWz7ar8E6ibIeBcwC')

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
