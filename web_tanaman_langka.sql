-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2024 at 04:58 AM
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
-- Database: `web tanaman langka`
--

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_kebersihan`
--

CREATE TABLE `jadwal_kebersihan` (
  `id` int(255) NOT NULL,
  `lokasi` varchar(500) NOT NULL,
  `tanggal` varchar(500) NOT NULL,
  `tugas` varchar(500) NOT NULL,
  `jam` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jadwal_kebersihan`
--

INSERT INTO `jadwal_kebersihan` (`id`, `lokasi`, `tanggal`, `tugas`, `jam`) VALUES
(1, 'dusun wates', '23 mar', 'membersikan  selokan', '07:00');

-- --------------------------------------------------------

--
-- Table structure for table `laporan_masalah`
--

CREATE TABLE `laporan_masalah` (
  `id` int(100) NOT NULL,
  `nama_pelapor` varchar(255) NOT NULL,
  `laporan` text NOT NULL,
  `rt` varchar(255) NOT NULL,
  `tanggal_waktu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `laporan_masalah`
--

INSERT INTO `laporan_masalah` (`id`, `nama_pelapor`, `laporan`, `rt`, `tanggal_waktu`) VALUES
(1, 'muh', '', '0', ''),
(2, 'muh', 'sampah nya banya yang rusak', '0', ''),
(3, 'muh', 'sampah nya banya yang rusak', '', ''),
(4, 'muh', 'sampah nya banya yang rusak', '98', ''),
(5, '', '', '', ''),
(6, '', '', '', ''),
(7, '', '', '', ''),
(8, '', '', '', '23 Maret'),
(9, '', '', '', '23 Maret'),
(10, '', '', '', '23 Maret');

-- --------------------------------------------------------

--
-- Table structure for table `laporan_sampah`
--

CREATE TABLE `laporan_sampah` (
  `id` int(100) NOT NULL,
  `jenis_sampah` varchar(500) NOT NULL,
  `berat_sampah` varchar(500) NOT NULL,
  `tanggal_waktu` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `laporan_sampah`
--

INSERT INTO `laporan_sampah` (`id`, `jenis_sampah`, `berat_sampah`, `tanggal_waktu`) VALUES
(1, 'organik', '1kg', '23 mar 07:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nama` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `id` int(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `RT` varchar(500) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nama`, `password`, `username`, `role`, `id`, `email`, `RT`, `alamat`) VALUES
('sabar', 'c168c2f78558ed3a3b69a5ec3574cf11', 'sabar', '', 67, 'zhafifriz05@gmail.com', '', ''),
('sabarr', 'e71e076fd7deb03f911cf68cb8e9922c', 'sau', '', 68, 'zhafifriz05@gmail.com', '', ''),
('sayu', 'makanan', 'sau', 'user', 69, 'zhafifriz05@gmail.com', '', ''),
('ygiu6', 'ZHAFIF', 'u7t87t867', '', 73, 'zhafifriz05@gmail.com', '', ''),
('zhafif', 'ZHAFIF', 'ZHAFIFF', '', 74, 'zhafifriz05@gmail.com', '', ''),
('smk telkom', 'smktelkom', 'smk telkom', 'Ketua RT', 75, 'zhafifriz05@gmail.com', '', ''),
('lop', 'lop', 'lop', 'lop', 84, 'zhafifriz05@gmail.com', 'lop', 'Array'),
('lop', 'smktelkom', 'lopp', 'Ketua RT', 85, 'zhafifriz05@gmail.com', '06', 'lop'),
('fif', 'fif', 'fif', 'Ketua RT', 88, 'zhafifriz05@gmail.com', '06', 'lop'),
('', 'fi', 'fi', 'pengguna', 89, '', '5', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jadwal_kebersihan`
--
ALTER TABLE `jadwal_kebersihan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporan_masalah`
--
ALTER TABLE `laporan_masalah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporan_sampah`
--
ALTER TABLE `laporan_sampah`
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
-- AUTO_INCREMENT for table `jadwal_kebersihan`
--
ALTER TABLE `jadwal_kebersihan`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `laporan_masalah`
--
ALTER TABLE `laporan_masalah`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `laporan_sampah`
--
ALTER TABLE `laporan_sampah`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
