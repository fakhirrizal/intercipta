-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 17 Okt 2019 pada 13.08
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `intercipta`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_report_kadaluarsa`
--

CREATE TABLE `tb_report_kadaluarsa` (
  `id_report_kadaluarsa` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `foto` text NOT NULL,
  `kode_produk` varchar(100) NOT NULL,
  `jumlah` int(9) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tgl_kadaluarsa` date NOT NULL,
  `keterangan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_report_kadaluarsa`
--
ALTER TABLE `tb_report_kadaluarsa`
  ADD PRIMARY KEY (`id_report_kadaluarsa`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `kode_produk` (`kode_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_report_kadaluarsa`
--
ALTER TABLE `tb_report_kadaluarsa`
  MODIFY `id_report_kadaluarsa` int(10) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
