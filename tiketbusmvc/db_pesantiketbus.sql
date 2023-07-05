-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2023 at 01:34 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pesantiketbus`
--

-- --------------------------------------------------------

--
-- Table structure for table `penumpang`
--

CREATE TABLE `penumpang` (
  `id_penumpang` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penumpang`
--

INSERT INTO `penumpang` (`id_penumpang`, `nama`, `password`, `gender`, `tgl_lahir`, `alamat`) VALUES
(5, 'admin', 'admin', 'laki', '2022-11-01', 'situ'),
(6, 'abiyyu', '123', 'laki laki', '2002-02-15', 'krian'),
(7, 'adhyastarozak', '123', 'laki laki', '2002-02-15', 'sidoarjo krian'),
(8, 'abiyyurozak', '123', 'laki laki', '2002-02-15', 'krian'),
(9, 'ivan', '123', 'laki laki', '2023-01-12', 'krian'),
(10, 'rozakabiyu', '1234', 'laki laki', '2023-01-25', 'klagen, tropodo'),
(11, 'rozakabiyu', '1234', 'laki laki', '2023-01-25', 'klagen, tropodo'),
(12, 'rozakabiyu', '111', 'laki laki', '2023-01-25', 'klagen, tropodo'),
(13, 'abiyyyu', '123', 'laki laki', '2023-01-26', 'sidoarjo'),
(14, 'greg', '123', 'laki laki', '2023-01-26', 'pakis'),
(15, 'greg', '123', 'laki laki', '2023-01-26', 'pakis'),
(16, 'Ivan', '123', 'laki laki', '2002-04-10', 'Tanggulangin');

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

CREATE TABLE `tiket` (
  `id_tiket` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `terminal_awal` varchar(20) DEFAULT NULL,
  `terminal_akhir` varchar(20) DEFAULT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tiket`
--

INSERT INTO `tiket` (`id_tiket`, `nama`, `terminal_awal`, `terminal_akhir`, `tanggal`) VALUES
(6, 'Krcamatan Krian', 'terminal krian', 'terminal purabaya', '2022-01-06'),
(7, 'Waru', 'terminal purabaya', 'terminal joyoboy', '2022-01-07'),
(21, 'Kota Krian', 'terminal krian', 'terminal mojokerto', '2023-01-19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `penumpang`
--
ALTER TABLE `penumpang`
  ADD PRIMARY KEY (`id_penumpang`);

--
-- Indexes for table `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`id_tiket`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `penumpang`
--
ALTER TABLE `penumpang`
  MODIFY `id_penumpang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tiket`
--
ALTER TABLE `tiket`
  MODIFY `id_tiket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
