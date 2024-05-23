-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2024 at 02:25 PM
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
-- Database: `raihan_ps`
--

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `id` varchar(50) DEFAULT NULL,
  `nama_paket` varchar(50) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `keterangan` varchar(50) DEFAULT NULL,
  `harga` int(30) DEFAULT NULL,
  `nama_penyewa` varchar(50) DEFAULT NULL,
  `alamat_penyewa` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id`, `nama_paket`, `tanggal`, `keterangan`, `harga`, `nama_penyewa`, `alamat_penyewa`) VALUES
('ren-001', 'PS5 1 Hari', '2024-11-20', 'bawa pulang', 150000, 'annisa pebriani', 'jl. flamboyan III no 7b'),
('ren-002', 'PS5 5 jam', '2024-10-12', 'main di tempat', 50000, 'antinio', 'jl. ahmad yani km 5'),
('ren-003', 'PS 1 hari', '2024-11-24', 'bawa pulang', 100000, 'ahmad yani', 'jl. cendana 2'),
('paket-6038', 'ps 1 5jam', '2023-11-22', ' main di tempat', 15000, 'yanto', 'banjarmasin'),
('paket-7852', 'ps5 12jam', '2023-11-29', 'bawapulang', 300000, 'aries', 'sungai'),
('paket-5207', 'ps3 5jam', '2023-11-30', 'main di tempat', 50000, 'khairul', 'sungai andai'),
('paket-2235', 'ps4 5jam', '2023-11-09', 'main di tempat', 80000, 'haris', 'griya hamparan'),
('paket-4225', 'ps3 2jam', '2023-11-16', 'main di tempat', 30000, 'yoga', 'hksn');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
