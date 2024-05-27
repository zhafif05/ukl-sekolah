-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2024 at 05:41 AM
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
  `nama` varchar(200) NOT NULL,
  `RT` int(100) NOT NULL,
  `lokasi` varchar(500) NOT NULL,
  `tanggal` date NOT NULL,
  `tugas` varchar(500) NOT NULL,
  `jam` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jadwal_kebersihan`
--

INSERT INTO `jadwal_kebersihan` (`id`, `nama`, `RT`, `lokasi`, `tanggal`, `tugas`, `jam`) VALUES
(5, 'zhafif', 4, 'dusun wates ', '2024-05-19', 'membersikan latar masjid', '19:07:00');

-- --------------------------------------------------------

--
-- Table structure for table `laporan_masalah`
--

CREATE TABLE `laporan_masalah` (
  `idmasalah` int(100) NOT NULL,
  `laporan` text NOT NULL,
  `tanggal_waktu` date NOT NULL,
  `iduser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `laporan_masalah`
--

INSERT INTO `laporan_masalah` (`idmasalah`, `laporan`, `tanggal_waktu`, `iduser`) VALUES
(49, 'Gotnya Mampet', '2024-05-16', 106),
(50, 'sampah nya banyak yang rusak', '2024-05-20', 106);

-- --------------------------------------------------------

--
-- Table structure for table `laporan_sampah`
--

CREATE TABLE `laporan_sampah` (
  `id` int(100) NOT NULL,
  `iduserr` int(11) NOT NULL,
  `jenis_sampah` varchar(500) NOT NULL,
  `berat_sampah` varchar(500) NOT NULL,
  `tanggal_waktu` date NOT NULL,
  `lokasi_pembuangan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `laporan_sampah`
--

INSERT INTO `laporan_sampah` (`id`, `iduserr`, `jenis_sampah`, `berat_sampah`, `tanggal_waktu`, `lokasi_pembuangan`) VALUES
(19, 103, 'organik', '60 KG', '2024-05-12', 'Kertosono,Nganjuk'),
(20, 95, 'organik', '60 KG', '0000-00-00', 'Kertosono,Nganjuk');

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
('kol', 'kol', 'kol', 'Ketua RT', 91, 'zhafifriz05@gmail.com', '06', 'sidoarjo'),
('zhafif', 'zhafif', 'zhafif', 'Ketua RT', 95, 'zhafifriz05@gmail.com', '6', 'Tanggulangi , wates ,kedensari'),
('apip', 'apip', 'apip', 'pengguna', 96, 'zhafifriz05@gmail.com', '6', 'Tanggulangi , wates ,kedensari'),
('akuelek', 'akuelek', 'akuelek', 'pengguna', 97, 'zhafifriz05@gmail.com', '6', 'Tanggulangi , wates ,kedensari'),
('opo', 'opo', 'opo', 'pengguna', 98, 'zhafifriz05@gmail.com', '6', 'Tanggulangi , wates ,kedensari'),
('opo', 'opo', 'kun', 'pengguna', 99, 'zhafifriz05@gmail.com', '6', 'Tanggulangi , wates ,kedensari'),
('opo', 'fi', 'fi', 'Ketua RT', 100, 'zhafifriz05@gmail.com', '6', 'Tanggulangi , wates ,kedensari'),
('opo', 'fi', 'kunn', 'Ketua RT', 101, 'zhafifriz05@gmail.com', '6', 'Tanggulangi , wates ,kedensari'),
('opo', 'fi', 'kunnn', 'Ketua RT', 102, 'zhafifriz05@gmail.com', '6', 'Tanggulangi , wates ,kedensari'),
('opo', 'fi', 'kunnnn', 'Ketua RT', 103, 'zhafifriz05@gmail.com', '6', 'Tanggulangi , wates ,kedensari'),
('mantap', 'mantap', 'mantap', 'Ketua RT', 104, 'zhafifriz06@gmail.com', '6', 'Tanggulangi , wates ,kedensari'),
('mantapp', 'fi', 'fi', 'Ketua RT', 105, 'zhafifriz07@gmail.com', '6', 'Tanggulangi , wates ,kedensari'),
('mantapp', 'mantapp', 'mantapp', 'pengguna', 106, 'zhafifriz08@gmail.com', '6', 'Tanggulangi , wates ,kedensari');

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
  ADD PRIMARY KEY (`idmasalah`),
  ADD KEY `fk_iduser` (`iduser`);

--
-- Indexes for table `laporan_sampah`
--
ALTER TABLE `laporan_sampah`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`iduserr`);

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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `laporan_masalah`
--
ALTER TABLE `laporan_masalah`
  MODIFY `idmasalah` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `laporan_sampah`
--
ALTER TABLE `laporan_sampah`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `laporan_masalah`
--
ALTER TABLE `laporan_masalah`
  ADD CONSTRAINT `fk_iduser` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`);

--
-- Constraints for table `laporan_sampah`
--
ALTER TABLE `laporan_sampah`
  ADD CONSTRAINT `id` FOREIGN KEY (`iduserr`) REFERENCES `user` (`iduser`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
