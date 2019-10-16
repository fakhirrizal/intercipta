-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 10 Okt 2019 pada 10.43
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
-- Struktur dari tabel `tb_report_penjualan_fl`
--

CREATE TABLE `tb_report_penjualan_fl` (
  `id_report_penjualan_fl` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `kode_produk` varchar(10) DEFAULT NULL,
  `stok_awal` int(10) DEFAULT NULL,
  `jumlah_tambahan` int(10) DEFAULT NULL,
  `stok_akhir` int(10) DEFAULT NULL,
  `tanggal_report` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_report_penjualan_fl`
--
ALTER TABLE `tb_report_penjualan_fl`
  ADD PRIMARY KEY (`id_report_penjualan_fl`),
  ADD KEY `kode_produk` (`kode_produk`),
  ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_report_penjualan_fl`
--
ALTER TABLE `tb_report_penjualan_fl`
  MODIFY `id_report_penjualan_fl` int(10) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
