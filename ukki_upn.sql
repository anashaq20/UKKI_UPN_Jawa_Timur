-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 27 Mar 2020 pada 13.09
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ukki_upn`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota_ukki`
--

CREATE TABLE `anggota_ukki` (
  `id_anggota` varchar(10) NOT NULL,
  `npm` varchar(11) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jenis_kelamin` char(1) DEFAULT NULL,
  `jurusan` varchar(30) DEFAULT NULL,
  `angkatan` varchar(4) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `alamat` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `anggota_ukki`
--

INSERT INTO `anggota_ukki` (`id_anggota`, `npm`, `nama`, `jenis_kelamin`, `jurusan`, `angkatan`, `status`, `tgl_lahir`, `alamat`) VALUES
('UKKI180003', '123123124', 'Ahmad Nashirul Haq', 'L', 'Teknik Kimia', '2018', 'Aktif', '2020-03-04', 'weasasdasdasd'),
('UKKI180007', '18082010029', 'Ahmad Nashirul Haq', 'L', 'Ekonomi Pembangunan', '2018', 'Aktif', '2020-03-04', ''),
('UKKI180008', '18025010104', 'Ahmad Nashirul Haq', 'L', 'Sistem Infomasi', '2018', 'Aktif', '2020-03-14', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengurus`
--

CREATE TABLE `pengurus` (
  `id_anggota` varchar(10) DEFAULT NULL,
  `npm` varchar(11) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `nama_departemen` varchar(12) DEFAULT NULL,
  `jurusan` varchar(30) DEFAULT NULL,
  `angkatan` varchar(4) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengurus`
--

INSERT INTO `pengurus` (`id_anggota`, `npm`, `nama`, `nama_departemen`, `jurusan`, `angkatan`, `tgl_lahir`) VALUES
('UKKI170001', '17013010019', 'Krismayanto Ragil Saputro', 'BPH', 'Akuntansi', '2017', '1998-07-19'),
('UKKI170002', '17041010063', 'Iqbal Nailul Murod', 'BPH', 'Administrasi Negara', '2017', '1998-07-11'),
('UKKI170003', '17013010137', 'Annahari Nur Aini', 'BPH', 'Akuntansi', '2017', '1998-06-27'),
('UKKI170004', '17013010126', 'Ariya Mutika', 'BPH', 'Akuntansi', '2017', '1998-02-12'),
('UKKI180001', '18011010052', 'Feni Uzlifatul Fuaidah', 'BPH', 'Ekonomi Pembangunan', '2018', '2000-03-04'),
('UKKI180002', '18012010066', 'Laeli Hidayati', 'BPH', 'Manajemen', '2018', '2000-02-24'),
('UKKI180003', '18034010927', 'Syarifudin Ahmad', 'Bakat Minat', 'Teknik Lingkungan', '2018', '1999-07-08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota_ukki`
--
ALTER TABLE `anggota_ukki`
  ADD PRIMARY KEY (`id_anggota`),
  ADD UNIQUE KEY `npm` (`npm`);

--
-- Indexes for table `pengurus`
--
ALTER TABLE `pengurus`
  ADD KEY `ID_nama_dep` (`nama_departemen`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
