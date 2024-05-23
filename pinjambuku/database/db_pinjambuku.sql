-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2024 at 02:13 PM
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
-- Database: `db_pinjambuku`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` varchar(8) NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `jumlah_buku` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `judul_buku`, `kategori`, `jumlah_buku`) VALUES
('bku-0162', 'marlin kundang', 'novel', 13),
('bku-5386', 'bawang merah bawang putih', 'Novel', 12),
('bku-5579', 'secangkir kopi', 'antologi', 11);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` varchar(8) NOT NULL,
  `nama_kategori` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
('Ktg-3159', 'Antologi'),
('Ktg-6124', 'Novel'),
('Ktg-6814', 'cerita rakyat'),
('Ktg-7532', 'Majalah'),
('Ktg-8067', 'Cerpen');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_pinjam` varchar(8) NOT NULL,
  `id_user` varchar(8) NOT NULL,
  `id_buku` varchar(8) NOT NULL,
  `judul_buku` varchar(150) NOT NULL,
  `jumlah_buku` int(2) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_wajib_kembali` date NOT NULL,
  `kondisi_buku` varchar(6) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengembalian`
--

CREATE TABLE `pengembalian` (
  `id_kembalian` varchar(8) NOT NULL,
  `id_pinjam` varchar(8) NOT NULL,
  `id_user` varchar(8) NOT NULL,
  `id_buku` varchar(8) NOT NULL,
  `jumlah_buku` int(2) NOT NULL,
  `kondisi_buku` varchar(8) NOT NULL,
  `tgl_kembalian` date NOT NULL,
  `denda` varchar(70) NOT NULL,
  `konfirmasi` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` varchar(8) NOT NULL,
  `nama_lengkap` varchar(50) DEFAULT NULL,
  `kelas` varchar(8) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `passwords` varchar(255) DEFAULT NULL,
  `role` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_lengkap`, `kelas`, `username`, `passwords`, `role`) VALUES
('usr-01', 'administrator1', '', 'admin', '$2y$10$fOdQPL/AZowhbjVad5fEGOSd7XaUsEr2NnqJGuuryN9pwBELkr.VC', 'Admin'),
('usr-0368', 'adminisrator2', '-', 'admin2', '$2y$10$6mqf0T/kQws5GhQTbgdC/.5A4TE9F1QiI3lNNWKttZgWKQK7tYqCC', 'Admin'),
('usr-2864', 'lana', 'x-rpl', 'lana', '$2y$10$VcX/0D1HpBHiSLJIR4Rof.USSfNslcZlX4ShBLQ2tbHROVt1tX6Ta', 'Anggota'),
('usr-5261', 'edooo', 'xi-rpl', 'edoo', '$2y$10$n/qQbxgVdd44O1gXoNG22OCmemtwGBymuS.GC/RGfk3GKe2vfNyZC', 'Anggota'),
('usr-9154', 'yanto', 'XII-Rpl', 'raihan', '$2y$10$5YuoIcZmRXD0bBLPb72RQORrkafFut8XImfFaqtwPv4n8AJ8xU5D.', 'Anggota');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_pinjam`),
  ADD UNIQUE KEY `id_pinjam` (`id_pinjam`);

--
-- Indexes for table `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`id_kembalian`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
