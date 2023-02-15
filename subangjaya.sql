-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 24 Agu 2021 pada 12.02
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
-- Struktur dari tabel `kegiatan`
--

CREATE TABLE `kegiatan` (
  `IdKegiatan` int(11) NOT NULL,
  `Kelurahan` varchar(225) NOT NULL,
  `Rw` varchar(225) NOT NULL,
  `RkSelesai` varchar(225) NOT NULL,
  `RkProses` varchar(225) NOT NULL,
  `RkBelum` varchar(225) NOT NULL,
  `Keterangan` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kegiatan`
--

INSERT INTO `kegiatan` (`IdKegiatan`, `Kelurahan`, `Rw`, `RkSelesai`, `RkProses`, `RkBelum`, `Keterangan`) VALUES
(1, 'Subangjaya', '01', '1_1.png', '1_2.png', '1_3.png', 'TPT (Penadulan) RT.003 RW.001'),
(2, 'Subangjaya', '02', '2_1.png', '2_2.png', '2_3.png', 'Rehabilitasi (RBT) Pengerasan Jalan Lingkunagn RT.004 RW.02'),
(3, 'Subangjaya', '02', '2_4.png', '2_5.png', '2_6.png', 'RUTILAHU (Rumah Tidak Layak Huni Ibu Zenab Fatimah) RT.005 RW.02'),
(4, 'Subangjaya', '02', '2_7.png', '2_8.png', '2_9.png', 'Keranda Mayat (RW.02)'),
(5, 'Subangjaya', '03', '3_1.png', '3_2.png', '3_3.png', 'Pembangunan Pos Serbaguna (RT.05 RW.03)'),
(6, 'Subangjaya', '04', '4_1.png', '4_2.png', '4_3.png', 'Pengadaan Kursi Plastik, Sound System (RW 04) dan Pengadaan Kebutuhan Pos Yandu (RW.04)'),
(7, 'Subangjaya', '05', '5_1.png', '5_2.png', '5_3.png', 'Rehabilitas Sekretariat RW 05, RBT dan Talud Penyangga Jalan'),
(8, 'Subangjaya', '05', '5_4.png', '5_5.png', '5_6.png', 'Sarana Olah Raga Pemuda (RW 05)'),
(9, 'Subangjaya', '06', '6_1.png', '6_2.png', '6_3.png', 'Pengadaan Karpet Masjid Jami (RT 03)'),
(10, 'Subangjaya', '06', '6_4.png', '6_5.png', '6_6.png', 'Pengadaan TPSS (RW 06)'),
(11, 'Subangjaya', '07', '7_1.png', '7_2.png', '7_3.png', 'Pem. Saluran Air, dan Rehabilitasi RBT (RT 01)'),
(12, 'Subangjaya', '07', '7_4.png', '7_5.png', '7_6.png', 'Rehabilitasi RBT (RT 03)'),
(13, 'Subangjaya', '08', '8_1.png', '8_2.png', '8_3.png', 'Pembuatan TPSS, Pemasangan Pavingblok Jalan Gang.'),
(14, 'Subangjaya', '08', '8_4.png', '8_5.png', '8_6.png', 'Perbaikan Drainase dan Plat Decter'),
(15, 'subangjaya', '02', 'organigram.png', 'Desert.jpg', 'Koala.jpg', 'terealisai'),
(16, '01', '12', '1.jpeg', '1.PNG', '2.PNG', 'pengajuan'),
(17, '01', '12', '1.jpeg', '1.PNG', '8.PNG', 'pengajuan'),
(18, '01', '12', '1.jpeg', '1.PNG', '4.PNG', 'pengajuan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id` int(11) NOT NULL,
  `Nama` text NOT NULL,
  `Email` text NOT NULL,
  `Judul` text NOT NULL,
  `Komentar` text NOT NULL,
  `Keterangan` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
  `Level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ktp`
--

INSERT INTO `ktp` (`IdKtp`, `Nik`, `Nama`, `TempatLahir`, `TanggalLahir`, `JenisKelamin`, `Alamat`, `RTRW`, `Desa`, `Kecamatan`, `Agama`, `StatusPerkawinan`, `Pekerjaan`, `Kewarganagaraan`, `UserName`, `Level`) VALUES
(2, '123', 'SABAR', 'smi', '2021-08-26', 'L', '  bojong', '01', 'ccc', 'prkda', 'islam', 'BELUM KAWIN', 'pelajar1', 'WNI', '', ''),
(3, '123', 'SABAR', 'smi', '2021-08-26', 'L', 'bojong', '01', 'ccc', 'prkd', 'islam', 'BELUM KAWIN', 'pelajar', 'WNI', '', ''),
(4, '123', 'SABAR', 'smi', '2021-08-25', 'L', ' az', '01', 'ccc', 'prkda', 'islam', 'BELUM KAWIN', 'pelajar123', 'WNI', 'admin1', 'user'),
(5, '123', 'sabar', 'sukabumi', '2021-08-25', 'L', 'dddd', '01', '01', 'parungkuda', 'islam', 'BELUM KAWIN', 'nganggur', 'WNI', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `UserName` varchar(50) NOT NULL,
  `Password` varchar(225) NOT NULL,
  `Level` varchar(50) NOT NULL,
  `Fhoto` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`UserName`, `Password`, `Level`, `Fhoto`) VALUES
('admin', 'admin', 'admin', 'admin.jpg'),
('admin1', 'admin', 'user', 'user.png'),
('penduduk', 'penduduk', 'user', 'user.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `usulankegiatan`
--

CREATE TABLE `usulankegiatan` (
  `idUsulan` int(11) NOT NULL,
  `Rw` varchar(225) NOT NULL,
  `NoRekening` varchar(225) NOT NULL,
  `NamaKetuaRw` varchar(225) NOT NULL,
  `NoHp` varchar(225) NOT NULL,
  `JumlahDanaP2rw` varchar(225) NOT NULL,
  `KegiatanYangDibiayaiP2rw` varchar(225) NOT NULL,
  `Keterangan` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `usulankegiatan`
--

INSERT INTO `usulankegiatan` (`idUsulan`, `Rw`, `NoRekening`, `NamaKetuaRw`, `NoHp`, `JumlahDanaP2rw`, `KegiatanYangDibiayaiP2rw`, `Keterangan`) VALUES
(2, '1', '0059902296100', 'LINDA HERLIANA', '085793728356', '20000000', 'TPT(PENALUDAN)RT.03,01', ''),
(3, '2', '0059960601100', 'TATANG SUPRIATNA,S.Ip', '085721084232', '22000000', 'Pengerasan Jalan Lingkungan', 'Jara 2 TK kelurahan'),
(4, '2', '0059960601100', 'TATANG SUPRIATNA,S.Ip', '085721084232', '0', 'RUTILAHU (Rumah Tidak Layak Huni)', ''),
(5, '2', '0059960601100', 'TATANG SUPRIATNA,S.Ip', '085721084232', '0', 'KerandaMayat', ''),
(6, '3', '0059790986100', 'YOSEP SUMARNO', '085793435301', '23500000', 'Pembangunan Pos Serbaguna', 'Juara 1 Tk kelurahan'),
(7, '3', '0059790986100', 'YOSEP SUMARNO', '085793435301', '0', 'Pengadaan Keranda Mayat', ''),
(8, '3', '0059790986100', 'YOSEP SUMARNO', '085793435301', '0', 'Pengadaan Leptop', ''),
(9, '4', '0060008795100', 'IKHSAN FIRDAUS,SH', '085624157276', '20000000', 'Pengadaan Kursi Plastik, Sound System dan', ''),
(10, '4', '0060008795100', 'IKHSAN FIRDAUS,SH', '085624157276', '0', 'Pengadaan Kebutuhan Pos Yandu', ''),
(11, '5', '0060224080100', 'ABDUL AZIZ', '085723790969', '20000000', 'Rehabilitasi Sekretariat RW.05', ''),
(12, '5', '0060224080100', 'ABDUL AZIZ', '085723790969', '0', 'Sarana Olah Raga Pemuda', ''),
(13, '5', '0060224080100', 'ABDUL AZIZ', '085723790969', '0', 'RBT dan Talud Penyangga Jalan', ''),
(14, '6', '0059772473100', 'RIDWAN FIRMANSYAH,SS', '085759403051', '20000000', 'Pengadaan Karpet Masjid Jami', ''),
(15, '6', '0059772473100', 'RIDWAN FIRMANSYAH,SS', '085759403051', '0', 'TPSS', ''),
(16, '7', '0060774048100', 'GUN GUN GUNAWAN', '081572872071', '20000000', 'Pem.Saluran Air / Plat Decker', ''),
(17, '7', '0060774048100', 'GUN GUN GUNAWAN', '081572872071', '0', 'RBT (Pengerasan Jalan Lingkungan)0', ''),
(18, '8', '0060046697100', 'ARIEF SUKHARLAN,S.Ip', '085793676109', '20000000', 'Pembuatan TPSS', ''),
(19, '8', '0060046697100', 'ARIEF SUKHARLAN,S.Ip', '085793676109', '0', 'Pemasangan Pavingblok Jalan Gang', ''),
(20, '8', '0060046697100', 'ARIEF SUKHARLAN,S.Ip', '085793676109', '0', 'Perbaikan  Drainase dan Plat Beton', ''),
(21, '8', '0060046697100', 'ARIEF SUKHARLAN,S.Ip', '085793676109', '0', 'Pengadaan Sound System', ''),
(22, '9', '0059816667100', 'Hj.RODIAH,S.Pd', '085861813300', '20000000', 'Pembangunan Plat Decker', ''),
(23, '10', '0059796747100', 'TATANG KURNAEDI,S.Pd', '085861312828', '20000000', 'Rehabilitasi Pembangunan Atap Posyandu', ''),
(24, '10', '0059796747100', 'TATANG KURNAEDI,S.Pd', '085861312828', '0', 'dan Madrasah', ''),
(25, '11', '0059857061100', 'YUYU JUWITA', '081563270777', '20000000', 'Pem.Drainase', ''),
(26, '11', '0059857061100', 'YUYU JUWITA', '081563270777', '0', 'Pengaman Pintu Gerbang BCI', ''),
(27, '12', '0060423581100', 'YOYO HERDIANTO', '085861414181', '20000000', 'Pem.Peningkatan Jalan Lingkungan', ''),
(28, '13', '0059721623100', 'ENDANG RIDWAN', '085871454384', '20000000', 'Plat Decker', ''),
(29, '13', '0059721623100', 'ENDANG RIDWAN', '085871454384', '0', 'Rehabilitasi RBT (Pengerasaan Jalan Lingkungan)', ''),
(30, '14', '0060067694100', 'ASEP ADI SURYA', '085780123555', '20000000', 'Pem. Pasangan Saluran Air Tahap 2', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`IdKegiatan`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ktp`
--
ALTER TABLE `ktp`
  ADD PRIMARY KEY (`IdKtp`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserName`);

--
-- Indexes for table `usulankegiatan`
--
ALTER TABLE `usulankegiatan`
  ADD PRIMARY KEY (`idUsulan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `IdKegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `ktp`
--
ALTER TABLE `ktp`
  MODIFY `IdKtp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `usulankegiatan`
--
ALTER TABLE `usulankegiatan`
  MODIFY `idUsulan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
