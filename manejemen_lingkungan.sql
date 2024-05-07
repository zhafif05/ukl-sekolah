-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2024 at 02:48 AM
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
-- Database: `manejemen_lingkungan`
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
  `jam` varchar(500) NOT NULL,
  `RT` int(100) DEFAULT NULL,
  `iduser` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jadwal_kebersihan`
--

INSERT INTO `jadwal_kebersihan` (`id`, `lokasi`, `tanggal`, `tugas`, `jam`, `RT`, `iduser`) VALUES
(1, 'dusun wates', '23 mar', 'membersikan  selokan', '07:00', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `laporan_masalah`
--

CREATE TABLE `laporan_masalah` (
  `idmasalah` int(100) NOT NULL,
  `nama_pelapor` varchar(255) NOT NULL,
  `laporan` text NOT NULL,
  `tanggal_waktu` varchar(255) NOT NULL,
  `iduser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `laporan_masalah`
--

INSERT INTO `laporan_masalah` (`idmasalah`, `nama_pelapor`, `laporan`, `tanggal_waktu`, `iduser`) VALUES
(2, 'p', 'p', 'p', 2),
(4, 'muh', 'tempat sampah nya banya yang rusak ', '23 Maret', 1),
(14, 'muh', 'sampah nya banya yang rusak', '23 Maret', 0);

-- --------------------------------------------------------

--
-- Table structure for table `laporan_sampah`
--

CREATE TABLE `laporan_sampah` (
  `id` int(100) NOT NULL,
  `jenis_sampah` varchar(500) NOT NULL,
  `berat_sampah` varchar(500) NOT NULL,
  `tanggal_waktu` varchar(500) NOT NULL,
  `lokasi_pembuangan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `laporan_sampah`
--

INSERT INTO `laporan_sampah` (`id`, `jenis_sampah`, `berat_sampah`, `tanggal_waktu`, `lokasi_pembuangan`) VALUES
(11, 'organik', '50 KG', '23 Maret', 'RNGKUT'),
(13, 'organik', '50 KG', '23 Maret', 'rungkut  njetes');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nama` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `iduser` int(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `RT` varchar(500) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nama`, `password`, `username`, `role`, `iduser`, `email`, `RT`, `alamat`) VALUES
('smk telkom', 'smktelkom', 'smk telkom', 'Ketua RT', 75, 'zhafifriz05@gmail.com', '', ''),
('lop', 'smktelkom', 'lopp', 'Ketua RT', 85, 'zhafifriz05@gmail.com', '06', 'lop'),
('fif', 'fif', 'fif', 'Ketua RT', 88, 'zhafifriz05@gmail.com', '06', 'lop'),
('', 'fi', 'fi', 'pengguna', 89, '', '5', ''),
('tol', 'tol', 'tol', 'Ketua RT', 90, 'zhafifriz05@gmail.com', 'tol', 'tol');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jadwal_kebersihan`
--
ALTER TABLE `jadwal_kebersihan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `iduser` (`iduser`);

--
-- Indexes for table `laporan_masalah`
--
ALTER TABLE `laporan_masalah`
  ADD PRIMARY KEY (`idmasalah`),
  ADD UNIQUE KEY `iduser` (`iduser`);

--
-- Indexes for table `laporan_sampah`
--
ALTER TABLE `laporan_sampah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

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
  MODIFY `idmasalah` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `laporan_sampah`
--
ALTER TABLE `laporan_sampah`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
