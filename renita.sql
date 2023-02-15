-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 19 Okt 2020 pada 13.14
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `renita`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `biografi`
--

CREATE TABLE `biografi` (
  `id` int(11) NOT NULL,
  `Konten` text NOT NULL,
  `Keterangan` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `biografi`
--

INSERT INTO `biografi` (`id`, `Konten`, `Keterangan`) VALUES
(1, 'adalah salah satu kelurahan di Kecamatan Cikole, Kota Sukabumi, Jawa Barat, Indonesia. Secara geografis Kecamatan Cikole terletak tengah pusat Kota Sukabumi dan merupakan Pusat Pemerintahan Kota Sukabumi. Kecamatan Cikole terdiri dari 6 (enam) wilayah Kelurahan, 68 RW dan 337 RT. Enam Kelurahan tersebut meliputi : Kelurahan Gunungparang, Kelurahan Selabatu, Kelurahan Cikole, Kelurahan Kebonjati, Kelurahan Cisarua dan Kelurahan Subangjaya. Luas wilayah Kecamatan Cikole + 701,1010 Ha merupakan dataran tinggi. Letak Kecamatan Cikole yang strategis merupakan wilayah yang sangat diminati oleh para pebisnis dan pengusaha untuk pengembangan usaha karena didukung oleh sarana infrastruktur yang cukup menunjang, yang memang secara ekonomis sangat menguntungkan karena dapat meningkatkan tarap perekonomian masyarakat baik sektor jasa, perdagangan maupun sektor lainnya. Potensi pengembangan wilayah di Kecamatan Cikole sesuai dengan Visi Kota Sukabumi berupaya untuk memberikan andil terutama dalam pengembangan kualitas pelayanan bidang pendidikan, kesehatan dan perdagangan sehingga penataan Rencana Tata Ruang Wilayah Kota Sukabumi sesuai RT RW pada tahun 2011 - 2031 sebagaimana potensi pengembangan dibagi menjadi 5 (lima) zona atau Sub Wilayah Kota (SWK) yang terdiri dari Kawasan Perdagangan dan Jasa termasuk Kecamatan Cikole sebagian besar ada di SWK I yaitu Kawasan Pendidikan dan Perkantoran dan sebagian lagi SWK IV yaitu Kawasan Perumahan dan Pertanian', '2020-10-18 23:59:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `daerah`
--

CREATE TABLE `daerah` (
  `id` int(11) NOT NULL,
  `Nama` text NOT NULL,
  `Alamat` text NOT NULL,
  `Telp` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Logo` varchar(225) NOT NULL,
  `Keterangan` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `daerah`
--

INSERT INTO `daerah` (`id`, `Nama`, `Alamat`, `Telp`, `Email`, `Logo`, `Keterangan`) VALUES
(1, 'Subang Jaya', 'sdssd', '1212', '32123fsdf', 'logo.png', '2020-10-18 22:13:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `Judul` text NOT NULL,
  `Tanggal` varchar(50) NOT NULL,
  `Catatan` text NOT NULL,
  `Fhoto` varchar(200) NOT NULL,
  `Keterangan` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id`, `Judul`, `Tanggal`, `Catatan`, `Fhoto`, `Keterangan`) VALUES
(1, 'judul1', '2020-10-17', 'catatan1', '1logo.png', '2020-10-18 23:42:12'),
(2, 'judul2', '2020-10-03', 'catatan2', '22020-10-22_zikrul.jpg', '2020-10-18 23:45:38'),
(3, 'judul3', '2020-10-17', 'catatan3', '3emaillogo.png', '2020-10-18 23:48:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `Judul` text NOT NULL,
  `Isi` text NOT NULL,
  `Keterangan` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `info`
--

INSERT INTO `info` (`id`, `Judul`, `Isi`, `Keterangan`) VALUES
(1, 'judul1', 'isi1', '2020-10-19 00:14:15');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id`, `Nama`, `Email`, `Judul`, `Komentar`, `Keterangan`) VALUES
(1, 'sabar', 's149@gmail.com', 'judul1', '', '2020-10-19 01:44:52'),
(2, 'sabar', 's149@gmail.com', 'judul1', 'Senang Bertemu Anda', '2020-10-19 01:45:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ktp`
--

CREATE TABLE `ktp` (
  `id` int(11) NOT NULL,
  `Judul` text NOT NULL,
  `Isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ktp`
--

INSERT INTO `ktp` (`id`, `Judul`, `Isi`) VALUES
(1, 'Surat Pengantat', 'Surat ini didapat dari rt');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `UserName` varchar(150) NOT NULL,
  `Password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `UserName`, `Password`) VALUES
(1, '149', '149');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pejabat`
--

CREATE TABLE `pejabat` (
  `id` int(11) NOT NULL,
  `Nama` varchar(150) NOT NULL,
  `Lahir` varchar(50) NOT NULL,
  `Jabatan` varchar(200) NOT NULL,
  `Gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pejabat`
--

INSERT INTO `pejabat` (`id`, `Nama`, `Lahir`, `Jabatan`, `Gambar`) VALUES
(1, 'sabar', '2020-10-15', 'Lurah Subang Jaya', '1gerakan-pramuka.png'),
(2, 'sabar', '2020-10-14', 'Lurah Subang Jaya', '22020-10-17zikrul.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penduduk`
--

CREATE TABLE `penduduk` (
  `id` int(11) NOT NULL,
  `Judul` text NOT NULL,
  `Jumlah` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penduduk`
--

INSERT INTO `penduduk` (`id`, `Judul`, `Jumlah`) VALUES
(1, 'Jumlah KK', '150');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biografi`
--
ALTER TABLE `biografi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daerah`
--
ALTER TABLE `daerah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ktp`
--
ALTER TABLE `ktp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pejabat`
--
ALTER TABLE `pejabat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biografi`
--
ALTER TABLE `biografi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `daerah`
--
ALTER TABLE `daerah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `ktp`
--
ALTER TABLE `ktp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pejabat`
--
ALTER TABLE `pejabat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
