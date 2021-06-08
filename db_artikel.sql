-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2021 at 12:48 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_artikel`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_artikel`
--

CREATE TABLE `t_artikel` (
  `id` int(50) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` varchar(10000) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_artikel`
--

INSERT INTO `t_artikel` (`id`, `judul`, `isi`, `gambar`) VALUES
(21, 'Bonsai Jenis Satu', 'Bonsai adalah tanaman atau pohon yang dikerdilkan di dalam pot dangkal dengan tujuan membuat miniatur dari bentuk asli pohon besar yang sudah tua di alam bebas. Penanaman dilakukan di pot dangkal yang disebut bon. Istilah bonsai juga dipakai untuk seni tradisional Jepang dalam pemeliharaan tanaman atau pohon dalam pot dangkal, dan apresiasi keindahan bentuk dahan, daun, batang, dan akar pohon, serta pot dangkal yang menjadi wadah, atau keseluruhan bentuk tanaman atau pohon. Bonsai adalah pelafalan bahasa Jepang untuk penzai. &lt;br&gt;\r\nBonsai adalah tanaman atau pohon yang dikerdilkan di dalam pot dangkal dengan tujuan membuat miniatur dari bentuk asli pohon besar yang sudah tua di alam bebas. Penanaman dilakukan di pot dangkal yang disebut bon. Istilah bonsai juga dipakai untuk seni tradisional Jepang dalam pemeliharaan tanaman atau pohon dalam pot dangkal, dan apresiasi keindahan bentuk dahan, daun, batang, dan akar pohon, serta pot dangkal yang menjadi wadah, atau keseluruhan bentu', '0306202136241.jpg'),
(22, 'Bonsai Jenis Dua', 'Bonsai adalah tanaman atau pohon yang dikerdilkan di dalam pot dangkal dengan tujuan membuat miniatur dari bentuk asli pohon besar yang sudah tua di alam bebas. Penanaman dilakukan di pot dangkal yang disebut bon. Istilah bonsai juga dipakai untuk seni tradisional Jepang dalam pemeliharaan tanaman atau pohon dalam pot dangkal, dan apresiasi keindahan bentuk dahan, daun, batang, dan akar pohon, serta pot dangkal yang menjadi wadah, atau keseluruhan bentuk tanaman atau pohon. Bonsai adalah pelafalan bahasa Jepang untuk penzai. &lt;/br&gt;&lt;/br&gt;\r\nBonsai adalah tanaman atau pohon yang dikerdilkan di dalam pot dangkal dengan tujuan membuat miniatur dari bentuk asli pohon besar yang sudah tua di alam bebas. Penanaman dilakukan di pot dangkal yang disebut bon. Istilah bonsai juga dipakai untuk seni tradisional Jepang dalam pemeliharaan tanaman atau pohon dalam pot dangkal, dan apresiasi keindahan bentuk dahan, daun, batang, dan akar pohon, serta pot dangkal yang menjadi wadah, atau kesel', '0306202137122.jpg'),
(23, 'Bonsai Jenis Tiga', 'Bonsai adalah tanaman atau pohon yang dikerdilkan di dalam pot dangkal dengan tujuan membuat miniatur dari bentuk asli pohon besar yang sudah tua di alam bebas. Penanaman dilakukan di pot dangkal yang disebut bon. Istilah bonsai juga dipakai untuk seni tradisional Jepang dalam pemeliharaan tanaman atau pohon dalam pot dangkal, dan apresiasi keindahan bentuk dahan, daun, batang, dan akar pohon, serta pot dangkal yang menjadi wadah, atau keseluruhan bentuk tanaman atau pohon. Bonsai adalah pelafalan bahasa Jepang untuk penzai. &lt;/br&gt;&lt;/br&gt;Bonsai adalah tanaman atau pohon yang dikerdilkan di dalam pot dangkal dengan tujuan membuat miniatur dari bentuk asli pohon besar yang sudah tua di alam bebas. Penanaman dilakukan di pot dangkal yang disebut bon. Istilah bonsai juga dipakai untuk seni tradisional Jepang dalam pemeliharaan tanaman atau pohon dalam pot dangkal, dan apresiasi keindahan bentuk dahan, daun, batang, dan akar pohon, serta pot dangkal yang menjadi wadah, atau keselur', '0306202137513.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_artikel`
--
ALTER TABLE `t_artikel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_artikel`
--
ALTER TABLE `t_artikel`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
