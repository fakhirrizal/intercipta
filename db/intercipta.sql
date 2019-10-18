-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 17 Okt 2019 pada 18.09
-- Versi server: 10.3.18-MariaDB-cll-lve
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aplikasi_intercipta`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_absensi`
--

CREATE TABLE `tb_absensi` (
  `id` int(11) NOT NULL,
  `tgl_absensi` datetime NOT NULL,
  `nik_user` varchar(10) NOT NULL,
  `jam_masuk` time NOT NULL,
  `jam_keluar` time DEFAULT NULL,
  `foto` varchar(200) NOT NULL,
  `lat` varchar(80) NOT NULL,
  `lng` varchar(80) NOT NULL,
  `id_outlet` int(11) DEFAULT NULL,
  `telat` enum('ya','tidak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabel data absensi pengguna (Team Leader, Frontliner, Non-frontliner)';

--
-- Dumping data untuk tabel `tb_absensi`
--

INSERT INTO `tb_absensi` (`id`, `tgl_absensi`, `nik_user`, `jam_masuk`, `jam_keluar`, `foto`, `lat`, `lng`, `id_outlet`, `telat`) VALUES
(8, '2019-02-20 11:07:27', '3335261816', '11:07:27', '19:12:35', 'Rayfart Setyobaskoro.20190211_093737.jpg', '-7.0623997', '110.4442343', 1, 'ya'),
(9, '2019-02-20 09:19:12', '3335261816', '09:19:12', '09:20:27', 'Rayfart Setyobaskoro.20190217_074922.jpg', '-7.0580133', '110.4438977', 4, 'ya'),
(10, '2019-02-18 13:43:44', '3332638713', '13:43:44', '13:55:16', 'Rayfart Setyobaskoro.20190218_121803.jpg', '33.985805', '-118.25411166666666', 0, 'ya'),
(11, '2019-04-09 14:40:38', '3332638713', '14:40:38', NULL, 'Rayfart Setyobaskoro.20190409_131056.jpg', '-6.3844938', '106.9722383', 0, 'ya'),
(12, '2019-10-11 08:59:45', '3332638713', '08:59:58', NULL, 'Rayfart Setyobaskoro20191011_085958.jpg', '-7.0069281', '110.4584212', NULL, 'ya'),
(13, '2019-10-11 09:37:36', '3332638713', '09:37:50', NULL, 'Rayfart Setyobaskoro20191011_093750.jpg', '-7.058547199999999', '110.4432942', NULL, 'ya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_fl_to_outlet`
--

CREATE TABLE `tb_fl_to_outlet` (
  `id` int(9) NOT NULL,
  `id_project_region_to_outlet` int(9) NOT NULL,
  `id_fl` int(9) DEFAULT NULL,
  `id_shift` int(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_fl_to_outlet`
--

INSERT INTO `tb_fl_to_outlet` (`id`, `id_project_region_to_outlet`, `id_fl`, `id_shift`) VALUES
(2, 1, 1, 1),
(3, 6, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gaji`
--

CREATE TABLE `tb_gaji` (
  `id` int(11) NOT NULL,
  `tgl_gaji` datetime NOT NULL,
  `nik_user` varchar(10) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabel data gaji karyawan (PIC, Team Leader, Frontliner, dan Non-frontliner)';

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_lapor_fl`
--

CREATE TABLE `tb_lapor_fl` (
  `id` int(11) NOT NULL,
  `tgl_laporan` datetime NOT NULL,
  `id_outlet` int(10) NOT NULL,
  `nik_fl` varchar(10) NOT NULL COMMENT 'NIK frontliner',
  `kode_produk` varchar(10) NOT NULL,
  `kondisi` enum('return','rusak','kadaluarsa') NOT NULL,
  `jumlah` int(5) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `keterangan` text NOT NULL,
  `tgl_masuk` datetime NOT NULL,
  `tgl_keluar` datetime DEFAULT NULL,
  `tgl_kadaluarsa` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabel untuk menyimpan laporan Frontliner';

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_lapor_tl`
--

CREATE TABLE `tb_lapor_tl` (
  `id` int(11) NOT NULL,
  `tgl_laporan` datetime NOT NULL,
  `nik_user` varchar(10) NOT NULL COMMENT 'NIK team leader',
  `tipe_laporan` enum('sendiri','kompetitor') NOT NULL,
  `foto_kondisi` varchar(200) NOT NULL,
  `keterangan` text NOT NULL,
  `lat` varchar(80) NOT NULL,
  `lng` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabel untuk menyimpan laporan Team Leader';

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_lokasi`
--

CREATE TABLE `tb_lokasi` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `lat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lng` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_lokasi`
--

INSERT INTO `tb_lokasi` (`id`, `id_user`, `lat`, `lng`, `created_at`) VALUES
(1, 1, '1jj', 'Rizalkdkdkd', '2019-06-25 22:20:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_outlet`
--

CREATE TABLE `tb_outlet` (
  `id_outlet` int(11) NOT NULL,
  `nama_outlet` varchar(25) NOT NULL,
  `id_region` int(11) NOT NULL,
  `deleted` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabel data outlet untuk tempat jualan';

--
-- Dumping data untuk tabel `tb_outlet`
--

INSERT INTO `tb_outlet` (`id_outlet`, `nama_outlet`, `id_region`, `deleted`) VALUES
(1, 'Java Mall Semarang', 1, '0'),
(3, 'Luwes Swalayan Magelang', 3, '0'),
(4, 'Paragon Mall Semarang', 1, '0'),
(5, 'Kudus Extension Mall', 4, '0'),
(6, 'Matahari Mall Semarang', 1, '0'),
(30, 'TransMart Setiabudi', 1, '0'),
(31, 'Artos Mall Magelang', 3, '0'),
(32, 'Trio Plaza Magelang', 3, '0'),
(33, 'Pasar Rejowinangun', 3, '0'),
(34, 'Center Swalayan', 2, '0'),
(35, 'Pasar Pragolo Pati', 7, '0'),
(36, 'Ada Swalayan Semarang', 1, '0'),
(37, 'Ada Swalayan Pati', 7, '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penjualan`
--

CREATE TABLE `tb_penjualan` (
  `id` int(11) NOT NULL COMMENT 'ID penjualan',
  `nik_fl` varchar(10) NOT NULL COMMENT 'NIK frontliner = fk dari tb_user frontliner',
  `kode_produk` varchar(10) NOT NULL COMMENT 'kode produk = fk dari tb_produk',
  `stok_awal` int(5) NOT NULL COMMENT 'Jumlah stok masuk di outlet tertentu pada tanggal tertentu',
  `stok_akhir` int(5) NOT NULL COMMENT 'Jumlah stok sisa di outlet tertentu pada tanggal tertentu',
  `stok_add` int(5) NOT NULL COMMENT 'Jumlah stok tambahan di outlet tertentu pada tanggal tertentu',
  `tgl_penjualan` datetime NOT NULL COMMENT 'Tanggal report penjualan',
  `keterangan` text NOT NULL COMMENT 'Keterangan tambahan penjualan'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabel data penjualan produk dan stok';

--
-- Dumping data untuk tabel `tb_penjualan`
--

INSERT INTO `tb_penjualan` (`id`, `nik_fl`, `kode_produk`, `stok_awal`, `stok_akhir`, `stok_add`, `tgl_penjualan`, `keterangan`) VALUES
(1, '3332638713', 'PRD01', 10, 5, 5, '2019-06-04 10:00:00', 'Tes'),
(2, '3310349514', 'PRD02', 2, 2, 2, '2019-07-25 05:00:00', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id_produk` int(11) NOT NULL,
  `kode_produk` varchar(10) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `foto_produk` varchar(200) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `stok` int(5) NOT NULL,
  `kode_project` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabel data rincian produk';

--
-- Dumping data untuk tabel `tb_produk`
--

INSERT INTO `tb_produk` (`id_produk`, `kode_produk`, `nama_produk`, `foto_produk`, `harga_produk`, `deskripsi`, `stok`, `kode_project`) VALUES
(1, 'PRD01', 'ABC Sambal Asli (335ml)', 'abc_abc-sambal-asli--335ml--1112_full03.jpg', 12500, 'Sambal Asli\r\nMenghasilkan cita rasa yang khas, lezat, dan pedas\r\nHadir dengan kemasan botol yang praktis, sehingga siap digunakan kapanpun dan dimanapun\r\nIdeal dinikmati dengan makan dan cemilan\r\nBerat Bersih : 335 mL', 100, 'PRJ01'),
(2, 'PRD02', 'SGM Eksplor 1+ Presinutri Formula (900gr)', 'sari-husada_sgm-eksplor-1--presinutri-vanila-susu-formula--900gr-_full02.jpg', 81900, 'Susu formula lanjutan untuk batita berusia 1-3 tahun\r\nAge Product : 1 - 3 tahun\r\nRasa : Vanila\r\nSize : 1000 gram\r\nTanggal kadaluwarsa produk minimal 5 bulan dari tanggal pembelian.\r\nLayanan gratis pengiriman di kategori ini berlaku dengan minimum pembayaran Rp. 350.000', 50, 'PRJ02'),
(3, 'PRD03', 'TORABIKA Creamy Latte Kopi', 'torabika_torabika-creamy-latte-kopi--special-pack-free-mug-_full02.jpg', 33000, 'Kopi Instan\r\nTerbuat dari biji kopi pilihan\r\nRasa : Creamy Latte\r\nCocok untuk dinikmati saat santai bersama keluarga atau teman Anda', 200, 'PRJ03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_produk_outlet`
--

CREATE TABLE `tb_produk_outlet` (
  `id_produk_outlet` int(11) NOT NULL,
  `kode_produk` varchar(10) NOT NULL,
  `id_outlet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabel data produk yg dijual pada outlet';

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_project`
--

CREATE TABLE `tb_project` (
  `id_project` int(11) NOT NULL,
  `nik_pic` varchar(10) NOT NULL,
  `nik_client` varchar(10) NOT NULL,
  `kode_project` varchar(10) NOT NULL,
  `nama_project` varchar(100) NOT NULL,
  `status` enum('1','0') NOT NULL COMMENT '0=Tidak Aktif,1=Aktif',
  `deleted` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabel data project dari klien';

--
-- Dumping data untuk tabel `tb_project`
--

INSERT INTO `tb_project` (`id_project`, `nik_pic`, `nik_client`, `kode_project`, `nama_project`, `status`, `deleted`) VALUES
(2, '3371638164', '3310349783', 'PRJ01', 'PT. Garuda Indonesia', '1', '0'),
(3, '3310349576', '3310349753', 'PRJ02', 'Projek 1 PT Sentosa Persada', '1', '0'),
(4, '3324563913', '3135436471', 'PRJ03', 'Projek 1 PT Adidaya Makmur', '1', '0'),
(6, '3371638164', '3135436471', 'PRJ04', 'PT. Sinar Mas', '1', '0'),
(7, '3310349576', '3310349753', 'PRJ05', 'PT. EigerIndo Store - Bodypack', '1', '0'),
(8, '3371638164', '3310349753', 'PRJ015', 'PT. Mencoba Bersama', '1', '0'),
(9, '3371638164', '3310349783', 'PRJ06', 'PT. Unilever Indonesia', '1', '0'),
(10, '7781450098', '3310349783', 'TEST00011', 'PT. Selalu Bahagia Bersamaku', '1', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_project_region`
--

CREATE TABLE `tb_project_region` (
  `id` int(11) NOT NULL,
  `kode_project` varchar(10) NOT NULL COMMENT 'Kode project',
  `id_region` int(11) NOT NULL,
  `id_tl` int(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_project_region`
--

INSERT INTO `tb_project_region` (`id`, `kode_project`, `id_region`, `id_tl`) VALUES
(1, 'PRJ01', 1, 2),
(3, 'PRJ03', 2, NULL),
(4, 'PRJ01', 4, NULL),
(6, 'PRJ01', 3, NULL),
(7, 'PRJ04', 1, NULL),
(8, 'PRJ015', 1, NULL),
(9, 'PRJ015', 4, NULL),
(10, 'PRJ01', 5, NULL),
(11, 'PRJ01', 2, NULL),
(12, 'PRJ06', 1, NULL),
(13, 'PRJ01', 10, NULL),
(14, 'PRJ01', 6, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_project_region_to_outlet`
--

CREATE TABLE `tb_project_region_to_outlet` (
  `id_project_region_to_outlet` int(10) NOT NULL,
  `id_project_region` int(10) NOT NULL,
  `id_outlet` int(10) NOT NULL,
  `id_client` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_project_region_to_outlet`
--

INSERT INTO `tb_project_region_to_outlet` (`id_project_region_to_outlet`, `id_project_region`, `id_outlet`, `id_client`) VALUES
(1, 1, 1, 15),
(2, 1, 4, 15),
(6, 1, 6, 15),
(8, 4, 5, 15);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_region`
--

CREATE TABLE `tb_region` (
  `id` int(11) NOT NULL COMMENT 'id region/lokasi',
  `nama_region` varchar(30) NOT NULL COMMENT 'nama region/lokasi/kota',
  `provinsi` varchar(25) NOT NULL COMMENT 'provinsi dari lokasi/region',
  `deleted` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabel data region project';

--
-- Dumping data untuk tabel `tb_region`
--

INSERT INTO `tb_region` (`id`, `nama_region`, `provinsi`, `deleted`) VALUES
(1, 'Semarang', 'Jawa Tengah', '0'),
(2, 'Kendal', 'Jawa Tengah', '0'),
(3, 'Magelang', 'Jawa Tengah', '0'),
(4, 'Kudus', 'Jawa Tengah', '0'),
(5, 'Pekalongan', 'Jawa Tengah', '0'),
(6, 'Kebumen', 'Jawa Tengah', '0'),
(7, 'Pati', 'Jawa Tengah', '0'),
(8, 'Surakarta', 'Jawa Tengah', '0'),
(9, 'Salatiga', 'Jawa Tengah', '0'),
(10, 'Brebes', 'Jawa Tengah', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_report_aktivitas_fl`
--

CREATE TABLE `tb_report_aktivitas_fl` (
  `id_report_aktivitas_fl` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `foto_outlet` text DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `tgl` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_report_aktivitas_fl`
--

INSERT INTO `tb_report_aktivitas_fl` (`id_report_aktivitas_fl`, `id_user`, `foto_outlet`, `keterangan`, `tgl`) VALUES
(1, 20, 'http://intercipta.aplikasiku.online/assets/fl_report/20191010_170834.jpg', '11', '2019-11-11 11:11:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_report_competitor`
--

CREATE TABLE `tb_report_competitor` (
  `id_report_competitor` int(10) NOT NULL,
  `id_user` varchar(10) NOT NULL,
  `foto` text NOT NULL,
  `deskripsi` text NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_report_competitor`
--

INSERT INTO `tb_report_competitor` (`id_report_competitor`, `id_user`, `foto`, `deskripsi`, `waktu`) VALUES
(1, '1', 'k', 'n', '2019-07-09 07:00:00');

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
  `keterangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_shift`
--

CREATE TABLE `tb_shift` (
  `id` int(11) NOT NULL,
  `nama_shift` text NOT NULL,
  `jam_masuk` time NOT NULL,
  `jam_keluar` time NOT NULL,
  `deleted` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabel untuk menyimpan data shift';

--
-- Dumping data untuk tabel `tb_shift`
--

INSERT INTO `tb_shift` (`id`, `nama_shift`, `jam_masuk`, `jam_keluar`, `deleted`) VALUES
(1, 'Shift (08-15)', '08:00:00', '15:00:00', '0'),
(2, 'Shift (14-22)', '14:00:00', '22:00:00', '0'),
(4, 'Shift (08-02.30)', '08:00:00', '14:30:00', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tim`
--

CREATE TABLE `tb_tim` (
  `id_tim` int(11) NOT NULL,
  `nik_tl` varchar(10) NOT NULL,
  `nik_fl` varchar(10) NOT NULL,
  `kode_project` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabel data tim (berisi Team Leader dan Frontliner-nya)';

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nik` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(160) NOT NULL,
  `email` varchar(70) NOT NULL,
  `password` varchar(125) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `level` enum('admin','pic','tl','fl','client','non_fl','payroll') NOT NULL,
  `status_absen` enum('masuk','keluar') NOT NULL DEFAULT 'keluar',
  `absen_today` enum('ya','tidak') NOT NULL DEFAULT 'tidak',
  `id_shift` int(5) DEFAULT NULL COMMENT 'Shift Frontliner',
  `id_region` int(9) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `login_status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabel data pengguna (terdiri dari Admin, PIC, Team Leader, Frontliner, Non-frontliner, dan Klien)';

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nik`, `nama`, `alamat`, `email`, `password`, `nohp`, `level`, `status_absen`, `absen_today`, `id_shift`, `id_region`, `created_at`, `updated_at`, `login_status`) VALUES
(1, '3332638713', 'Rayfart Setyobaskoro', 'Jl. Jakarta Selatan', 'rayfart@gmail.com', '$2y$10$wfiL5/fEMyQrVhu0I1qFyu/MfSA/SRbUue7MNldVh/xwt2FAq48f6', '081223895047', 'fl', 'masuk', 'ya', 1, 1, '0000-00-00 00:00:00', '2019-10-04 14:22:01', '1'),
(2, '3335261816', 'Muhammad Misbahul Munir', 'Tembalang, Jawa Tengah', 'misbah@gmail.com', '$2y$10$.JD.lsQDTN8FfhIRhwrENOn8tI8Ck.Rw/Bg7/KBhBc9g8OWMUQq/a', '087664523870', 'tl', 'keluar', 'tidak', NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0'),
(3, '3371638164', 'Deny Prasetyo', 'Tembalang, Jawa Tengah', 'deny@gmail.com', '$2y$10$8ZaEDpaU28knmwrZIEmrUeOZflYp6k0JGizE66DsVQ0BTcvE51Uku', '087664682003', 'pic', 'keluar', 'tidak', NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0'),
(4, '3310349513', 'Nika Agung Wisesa', 'Jl Timoho Barat, Semarang, Jawa Tengah', 'nikaagung@gmail.com', '$2y$10$GXcbPrH3NmaSuOQ2EQK/t.ngQExgJO/q6YmziSvME1PoCjrfRCYM6', '083673173123', 'admin', 'keluar', 'tidak', NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0'),
(5, '3310349514', 'Ricky Reza', 'Jl Bulusan, Tembalang, Semarang', 'ricky@gmail.com', '$2y$10$LZ5xIIfClfS9RixP0VblouJIovaGalwdaRqk8yzaHg2CBjeC/BRpq', '083673173545', 'admin', 'keluar', 'tidak', NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0'),
(6, '3310349515', 'Muhammad Hilal', 'Jl Tirtasari, Tembalang, Semarang', 'hilal@gmail.com', '$2y$10$GjIG64yKzNhp6p96wQ9q6uION7baXIwsycJG0Idu7mzjMvNUHrKea', '083673173324', 'admin', 'keluar', 'tidak', NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0'),
(7, '3310349517', 'Erwyn Syahputra', 'Jl Balur, Banyumas, Jawa Tenhah', 'erwyn@gmail.com', '$2y$10$RLPQzkv/9rbtEG0sY8zCHO4QT.cHmMQHiGLDw005Co45AW5kxSo4e', '083673173565', 'tl', 'keluar', 'tidak', NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0'),
(8, '3310349518', 'Roni Herawan', 'Jl Bontang, Tegal, Jawa Tengah', 'roni@gmail.com', '$2y$10$LdnX6RTuNsrq8T/69dAbnuA1WbF2odkCVE96PLQpnYvm8/qQkBPb6', '083673173575', 'fl', 'keluar', 'tidak', 2, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1'),
(9, '3310349590', 'Tanggon Jodi', 'Jl Woltermongensidi, Semarang, Jawa Tengah', 'tanggon@gmail.com', '$2y$10$n0BY79SzYXeYyzo7uWny7uH2FVIpquUQrxRWExfTFztN.brWFNgiq', '083673173634', 'tl', 'keluar', 'tidak', NULL, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0'),
(10, '3341239845', 'Aris Riyanto', 'Jl Randublatung, Blora, Jawa Tengah', 'aris@gmail.com', '$2y$10$74/hOX8afN6gU0sVopS0te8PdPtBgKJCtgYHkrEoKBPH1Uez/jsz6', '085621452372', 'fl', 'keluar', 'tidak', 1, 1, '0000-00-00 00:00:00', '2019-10-04 14:28:04', '0'),
(11, '3310349576', 'Barqah Genardo', 'Jl Batuhitam, Lampung Selatan, Lampung', 'barqah@gmail.com', '$2y$10$6jaWByjkdFOR6Xyu4XRJh.k9GMSEYEPncm2zw1g71Hl48z3.FW8Oq', '083673173566', 'pic', 'keluar', 'tidak', NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0'),
(12, '3324563913', 'Reza Elfa', 'Jl Bundaran, Magelang, Jawa Tengah', 'rezaelfa@gmail.com', '$2y$10$.0..UM2bKww6qI1vMfDt..Xl/JpiNAdNsZAFJRtZuG8P9uXq06NQa', '085621452644', 'pic', 'keluar', 'tidak', NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0'),
(13, '3310349753', 'Joan Siregar', 'Jl Tanahkula, Tarutung, Sumatera Utara', 'joan@gmail.com', '$2y$10$HyJ/Uj1F821Jz/Ig8gPiFe4cMCV6pH4M4YYYS2nThq97aCCL1/.5u', '083673176541', 'client', 'keluar', 'tidak', NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0'),
(14, '3135436471', 'Daisy Gumilang', 'Jl R.Supratman, Bogor, Jawa Barat', 'daisy@gmail.com', '$2y$10$Vp1m3vvac4Q5WM9Ugo/ptuoOJa93xJHNOzazA1urqVMONmaJNGcDC', '085621452642', 'client', 'keluar', 'tidak', NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0'),
(15, '3310349783', 'Olivia Aulia Ardi', 'Jl Bawean, Temanggung, Jawa Tengah', 'olivia@gmail.com', '$2y$10$m9o2XtmCrFZik8v8E6VZ7ui/4RPMKiHmr1.AjLRbFaPZtAMyRq/Tu', '083673176442', 'client', 'keluar', 'tidak', NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0'),
(16, '3331347632', 'Fahmi Ulil', 'Jl Banjarsari, Kendal, Jawa Tengah', 'ulil@gmail.com', '$2y$10$lRXJprMzljrUo13nZzURnehS6BscvvUv6zP3OsvKRsJ2sUiFkQYBW', '085292314526', 'non_fl', 'keluar', 'tidak', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0'),
(17, '3367415573', 'Naryoko', 'Jl Bidjen Katamso, Kudus, Jawa Tengah', 'naryoko@gmail.com', '$2y$10$X/uI0B.ygkYtK14gh/KZnupIUMbqZcMkm8i10D9zXTc3vgqx6PCeW', '083673178721', 'non_fl', 'keluar', 'tidak', 2, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0'),
(18, '3334147561', 'Wahyu Priadi', 'Jl Banaran, Jakarta Timur, Jakarta', 'jupri@gmail.com', '$2y$10$v2dhd8tEOhB3SJqjedUcHObVP3qLZx/S/ML6pN10F.VfWrhs03TNy', '085621452651', 'non_fl', 'keluar', 'tidak', 2, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0'),
(19, '7781450098', 'M Erwin Ferdianto', 'Jl. Kalideres, Tambah Agung No. 45', 'erwin@intercipta.co.id', '$2y$10$QyvfUCuubkhXnxT9LCjWP.hRt.4nuKg09LyFjb/eBt2VfhllOUveu', '082312660911', 'pic', 'keluar', 'tidak', NULL, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0'),
(20, '123456789', 'rayyyyyt ok', 'test app 1', 'exviusexvius@gmail.com', '$2y$10$ZXyhlOS9oOjDSIX/kh1DMe0chJKsSF.JhXVfxra6nzYPcYByhhxYC', '081223895047', 'fl', 'keluar', 'tidak', 2, 10, '2019-09-18 12:31:46', '2019-10-04 14:08:16', '0'),
(24, '789456123', 'Wahyu Hidayat', 'Jl. Manggis Muda No 55', 'wahyu@gmail.com', '$2y$10$mnjq30HsB0uUp6N/iWLxnOP9ixkC8P8cLDLol6lNnOxVtyfqUKBe6', '085721136498', 'fl', 'keluar', 'tidak', 2, 1, '2019-10-10 06:07:05', '2019-10-10 06:07:29', '0');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_absensi`
--
ALTER TABLE `tb_absensi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nik_user` (`nik_user`),
  ADD KEY `id_outlet` (`id_outlet`);

--
-- Indeks untuk tabel `tb_fl_to_outlet`
--
ALTER TABLE `tb_fl_to_outlet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_outlet` (`id_project_region_to_outlet`),
  ADD KEY `fk_shift` (`id_shift`),
  ADD KEY `id_fl` (`id_fl`,`id_shift`);

--
-- Indeks untuk tabel `tb_gaji`
--
ALTER TABLE `tb_gaji`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_lapor_fl`
--
ALTER TABLE `tb_lapor_fl`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nik_fl` (`nik_fl`),
  ADD KEY `id_outlet` (`id_outlet`);

--
-- Indeks untuk tabel `tb_lapor_tl`
--
ALTER TABLE `tb_lapor_tl`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nik_user` (`nik_user`);

--
-- Indeks untuk tabel `tb_lokasi`
--
ALTER TABLE `tb_lokasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `tb_outlet`
--
ALTER TABLE `tb_outlet`
  ADD PRIMARY KEY (`id_outlet`),
  ADD KEY `id_region` (`id_region`);

--
-- Indeks untuk tabel `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nik_fl` (`nik_fl`),
  ADD KEY `kode_produk` (`kode_produk`);

--
-- Indeks untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD UNIQUE KEY `kode_produk` (`kode_produk`),
  ADD KEY `kode_project` (`kode_project`);

--
-- Indeks untuk tabel `tb_produk_outlet`
--
ALTER TABLE `tb_produk_outlet`
  ADD PRIMARY KEY (`id_produk_outlet`),
  ADD KEY `kode_produk` (`kode_produk`),
  ADD KEY `id_outlet` (`id_outlet`) USING BTREE;

--
-- Indeks untuk tabel `tb_project`
--
ALTER TABLE `tb_project`
  ADD PRIMARY KEY (`id_project`),
  ADD UNIQUE KEY `kode_project` (`kode_project`),
  ADD KEY `nik_pic` (`nik_pic`),
  ADD KEY `nik_client` (`nik_client`);

--
-- Indeks untuk tabel `tb_project_region`
--
ALTER TABLE `tb_project_region`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_region` (`id_region`),
  ADD KEY `kode_project` (`kode_project`) USING BTREE,
  ADD KEY `id_tl` (`id_tl`);

--
-- Indeks untuk tabel `tb_project_region_to_outlet`
--
ALTER TABLE `tb_project_region_to_outlet`
  ADD PRIMARY KEY (`id_project_region_to_outlet`),
  ADD KEY `id_project_region` (`id_project_region`),
  ADD KEY `id_outlet` (`id_outlet`),
  ADD KEY `id_user` (`id_client`);

--
-- Indeks untuk tabel `tb_region`
--
ALTER TABLE `tb_region`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_report_aktivitas_fl`
--
ALTER TABLE `tb_report_aktivitas_fl`
  ADD PRIMARY KEY (`id_report_aktivitas_fl`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `tb_report_competitor`
--
ALTER TABLE `tb_report_competitor`
  ADD PRIMARY KEY (`id_report_competitor`);

--
-- Indeks untuk tabel `tb_report_kadaluarsa`
--
ALTER TABLE `tb_report_kadaluarsa`
  ADD PRIMARY KEY (`id_report_kadaluarsa`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `kode_produk` (`kode_produk`);

--
-- Indeks untuk tabel `tb_report_penjualan_fl`
--
ALTER TABLE `tb_report_penjualan_fl`
  ADD PRIMARY KEY (`id_report_penjualan_fl`),
  ADD KEY `kode_produk` (`kode_produk`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `tb_shift`
--
ALTER TABLE `tb_shift`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_tim`
--
ALTER TABLE `tb_tim`
  ADD PRIMARY KEY (`id_tim`),
  ADD KEY `nik_tl` (`nik_tl`),
  ADD KEY `nik_fl` (`nik_fl`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `nik` (`nik`),
  ADD KEY `id_shift` (`id_shift`),
  ADD KEY `id_region` (`id_region`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_absensi`
--
ALTER TABLE `tb_absensi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tb_fl_to_outlet`
--
ALTER TABLE `tb_fl_to_outlet`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_gaji`
--
ALTER TABLE `tb_gaji`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_lapor_fl`
--
ALTER TABLE `tb_lapor_fl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_lapor_tl`
--
ALTER TABLE `tb_lapor_tl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_lokasi`
--
ALTER TABLE `tb_lokasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_outlet`
--
ALTER TABLE `tb_outlet`
  MODIFY `id_outlet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID penjualan', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_produk_outlet`
--
ALTER TABLE `tb_produk_outlet`
  MODIFY `id_produk_outlet` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_project`
--
ALTER TABLE `tb_project`
  MODIFY `id_project` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_project_region`
--
ALTER TABLE `tb_project_region`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tb_project_region_to_outlet`
--
ALTER TABLE `tb_project_region_to_outlet`
  MODIFY `id_project_region_to_outlet` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_region`
--
ALTER TABLE `tb_region`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id region/lokasi', AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_report_aktivitas_fl`
--
ALTER TABLE `tb_report_aktivitas_fl`
  MODIFY `id_report_aktivitas_fl` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_report_competitor`
--
ALTER TABLE `tb_report_competitor`
  MODIFY `id_report_competitor` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_report_kadaluarsa`
--
ALTER TABLE `tb_report_kadaluarsa`
  MODIFY `id_report_kadaluarsa` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_report_penjualan_fl`
--
ALTER TABLE `tb_report_penjualan_fl`
  MODIFY `id_report_penjualan_fl` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_shift`
--
ALTER TABLE `tb_shift`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_tim`
--
ALTER TABLE `tb_tim`
  MODIFY `id_tim` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_absensi`
--
ALTER TABLE `tb_absensi`
  ADD CONSTRAINT `fk_absensi_user` FOREIGN KEY (`nik_user`) REFERENCES `tb_user` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_lapor_fl`
--
ALTER TABLE `tb_lapor_fl`
  ADD CONSTRAINT `fk_laporan_frontliner` FOREIGN KEY (`nik_fl`) REFERENCES `tb_user` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_lapor_tl`
--
ALTER TABLE `tb_lapor_tl`
  ADD CONSTRAINT `fk_laporan_teamleader` FOREIGN KEY (`nik_user`) REFERENCES `tb_user` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_lokasi`
--
ALTER TABLE `tb_lokasi`
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_outlet`
--
ALTER TABLE `tb_outlet`
  ADD CONSTRAINT `fk_outlet_region` FOREIGN KEY (`id_region`) REFERENCES `tb_region` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  ADD CONSTRAINT `fk_penjualan_frontliner` FOREIGN KEY (`nik_fl`) REFERENCES `tb_user` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_penjualan_produk` FOREIGN KEY (`kode_produk`) REFERENCES `tb_produk` (`kode_produk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD CONSTRAINT `fk_produk_project` FOREIGN KEY (`kode_project`) REFERENCES `tb_project` (`kode_project`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_produk_outlet`
--
ALTER TABLE `tb_produk_outlet`
  ADD CONSTRAINT `fk_po_outlet` FOREIGN KEY (`id_outlet`) REFERENCES `tb_outlet` (`id_outlet`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_po_produk` FOREIGN KEY (`kode_produk`) REFERENCES `tb_produk` (`kode_produk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_project`
--
ALTER TABLE `tb_project`
  ADD CONSTRAINT `fk_project_client` FOREIGN KEY (`nik_client`) REFERENCES `tb_user` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_project_pic` FOREIGN KEY (`nik_pic`) REFERENCES `tb_user` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_project_region`
--
ALTER TABLE `tb_project_region`
  ADD CONSTRAINT `fk_projectregion_project` FOREIGN KEY (`kode_project`) REFERENCES `tb_project` (`kode_project`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_projectregion_region` FOREIGN KEY (`id_region`) REFERENCES `tb_region` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_tim`
--
ALTER TABLE `tb_tim`
  ADD CONSTRAINT `fk_tim_frontliner` FOREIGN KEY (`nik_fl`) REFERENCES `tb_user` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_tim_teamleader` FOREIGN KEY (`nik_tl`) REFERENCES `tb_user` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
