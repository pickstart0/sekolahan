-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2024 at 02:26 PM
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
-- Database: `staycation`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_hotel`
--

CREATE TABLE `tb_hotel` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `location` varchar(100) NOT NULL,
  `price` int(10) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_hotel`
--

INSERT INTO `tb_hotel` (`id`, `name`, `location`, `price`, `image`) VALUES
(1, 'Aparthotel Stare Miasto', 'Kraków, Poland', 2345000, 'Aparthotel-Stare-Miasto.jpg'),
(2, '7Seasons Apartments Budapest', 'Budapest, Hungary', 2870000, '7Seasons-Apartments-Budapest.jpg'),
(3, 'Bob W Hyde Park', 'London, United Kingdom', 3451000, 'Bob-W-Hyde-Park.jpg'),
(4, 'Flora Chiado Apartments', 'Lisbon, Portugal', 3890000, 'Flora-Chiado-Apartments.jpg'),
(5, 'Flora-Chiado-Apartments', 'Banjar raya', 250000, 'country-herirage.jpg'),
(6, 'ocean-land', 'Bandung City', 380000, 'ocean-land.png'),
(7, 'vinna-vill', 'Semarang', 1000000, 'vinna-vill.png'),
(8, 'strak-house', 'Bali', 1900000, 'strak-house.png'),
(9, 'bobox', 'Afganistan', 560000, 'bobox.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_message`
--

CREATE TABLE `tb_message` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_message`
--

INSERT INTO `tb_message` (`id`, `fullname`, `email`, `message`) VALUES
(1, 'raihan', 'firmansyahraihan770@gmail.com', 'raihan firmansyah friamsnuarjasr4'),
(2, 'raihan', 'firmansyahraihan770@gmail.com', 'iaehrekfhjafhjksdjksd'),
(3, '', 'nadhirafirmasnyah84@gmail.com', ''),
(4, 'raihan', 'nadhirafirmansyah84@gmail.com', 'ajlsflaksf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_hotel`
--
ALTER TABLE `tb_hotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_message`
--
ALTER TABLE `tb_message`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_hotel`
--
ALTER TABLE `tb_hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_message`
--
ALTER TABLE `tb_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
