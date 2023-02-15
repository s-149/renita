-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 26 Agu 2021 pada 08.10
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `subangjaya`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ktp`
--

CREATE TABLE `ktp` (
  `IdKtp` int(11) NOT NULL,
  `Nik` varchar(30) NOT NULL,
  `Nama` varchar(150) NOT NULL,
  `TempatLahir` varchar(150) NOT NULL,
  `TanggalLahir` date NOT NULL,
  `JenisKelamin` varchar(50) NOT NULL,
  `Alamat` text NOT NULL,
  `RTRW` varchar(100) NOT NULL,
  `Desa` varchar(100) NOT NULL,
  `Kecamatan` varchar(100) NOT NULL,
  `Agama` varchar(100) NOT NULL,
  `StatusPerkawinan` varchar(100) NOT NULL,
  `Pekerjaan` varchar(100) NOT NULL,
  `Kewarganagaraan` varchar(30) NOT NULL,
  `UserName` varchar(225) NOT NULL,
  `Level` varchar(50) NOT NULL,
  `TanggalPengajuan` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Validasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ktp`
--
ALTER TABLE `ktp`
  ADD PRIMARY KEY (`IdKtp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ktp`
--
ALTER TABLE `ktp`
  MODIFY `IdKtp` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
