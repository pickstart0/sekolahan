-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2024 at 02:24 PM
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
-- Database: `sekolah_raihan`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `mapel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id`, `nama`, `jenis_kelamin`, `mapel`) VALUES
('guru-001', 'Amrina Rosada S.Pd', 'Perempuan', 'Basis Data'),
('guru-002', 'M. Endi Apriandi, S.Si', 'Laki-laki', 'Informatika'),
('guru-003', 'Nara Augustin S.Pd', 'Perempuan', 'Pemrograman Web'),
('guru-004', 'Yunika Perdana M.Pd', 'Perempuan', 'Kewirausahaan');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jumlah_kelas` int(11) NOT NULL,
  `tahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id`, `nama`, `jumlah_kelas`, `tahun`) VALUES
('jurusan', 'RPL', 2, 2015),
('jurusan-002', 'FARMASI', 3, 1997),
('jurusan-1ny7ktao4rs28vdl', 'tkkr', 2, 2000);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nama`, `email`, `alamat`) VALUES
('siswa-001', 'ganjar subroto', 'ganjargaming@gmail.com', 'famboyan'),
('siswa-b2ol5cst7e0pyian', 'raihan', 'nadhirafirmansyah84@gmail.com', 'banjarmasin'),
('siswa-h7ygp9x8qmzfl1wo', 'yanto', 'nadhirafirmansyah84@gmail.com', 'banjarmasin'),
('siswa-j7tzebo5ic0f9y6a', 'raihan', 'firmansyah@gmail.com', 'banjarmasin'),
('siswa-mfb06gvaulw1cek4', 'raihan', 'nadhirafirmasnyah84@gmail.com', 'banjarmasin'),
('siswa-pxqrtuce9fnia3os', 'raihan', 'firmansyah@gmail.com', 'banjarmasin');

-- --------------------------------------------------------

--
-- Table structure for table `waktu`
--

CREATE TABLE `waktu` (
  `tanggal` date DEFAULT NULL,
  `waktu` time DEFAULT NULL,
  `tw` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `waktu`
--

INSERT INTO `waktu` (`tanggal`, `waktu`, `tw`) VALUES
('2004-12-11', '00:20:23', '0000-00-00 00:00:00'),
('0000-00-00', '00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
