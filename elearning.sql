-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2024 at 06:36 PM
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
-- Database: `elearning`
--

-- --------------------------------------------------------

--
-- Table structure for table `banksoal`
--

CREATE TABLE `banksoal` (
  `id_soal` int(11) NOT NULL,
  `kode_soal` varchar(255) NOT NULL,
  `pertanyaan` varchar(255) NOT NULL,
  `pilihan_a` varchar(255) NOT NULL,
  `pilihan_b` varchar(255) NOT NULL,
  `pilihan_c` varchar(255) NOT NULL,
  `pilihan_d` varchar(255) NOT NULL,
  `jawaban_benar` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banksoal`
--

INSERT INTO `banksoal` (`id_soal`, `kode_soal`, `pertanyaan`, `pilihan_a`, `pilihan_b`, `pilihan_c`, `pilihan_d`, `jawaban_benar`) VALUES
(0, '202401', '1+1', '2', '4', '3', '1', 'b');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tgl_daftar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru`, `nama`, `nip`, `username`, `password`, `email`, `tgl_daftar`) VALUES
(1, 'Yan', '', '', '', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `laporana`
--

CREATE TABLE `laporana` (
  `id` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `1` int(9) NOT NULL DEFAULT 0,
  `2` int(9) NOT NULL DEFAULT 0,
  `3` int(9) NOT NULL DEFAULT 0,
  `4` int(9) NOT NULL DEFAULT 0,
  `5` int(9) NOT NULL DEFAULT 0,
  `6` int(9) NOT NULL DEFAULT 0,
  `7` int(9) NOT NULL DEFAULT 0,
  `8` int(9) NOT NULL DEFAULT 0,
  `9` int(9) NOT NULL DEFAULT 0,
  `10` int(9) NOT NULL DEFAULT 0,
  `11` int(9) NOT NULL DEFAULT 0,
  `12` int(9) NOT NULL DEFAULT 0,
  `13` int(9) NOT NULL DEFAULT 0,
  `14` int(9) NOT NULL DEFAULT 0,
  `15` int(9) NOT NULL DEFAULT 0,
  `16` int(9) NOT NULL DEFAULT 0,
  `17` int(9) NOT NULL DEFAULT 0,
  `18` int(9) NOT NULL DEFAULT 0,
  `19` int(9) NOT NULL DEFAULT 0,
  `20` int(9) NOT NULL DEFAULT 0,
  `21` int(9) NOT NULL DEFAULT 0,
  `22` int(9) NOT NULL DEFAULT 0,
  `23` int(9) NOT NULL DEFAULT 0,
  `24` int(9) NOT NULL DEFAULT 0,
  `25` int(9) NOT NULL DEFAULT 0,
  `26` int(9) NOT NULL DEFAULT 0,
  `27` int(9) NOT NULL DEFAULT 0,
  `28` int(9) NOT NULL DEFAULT 0,
  `29` int(9) NOT NULL DEFAULT 0,
  `30` int(9) NOT NULL DEFAULT 0,
  `31` int(9) NOT NULL DEFAULT 0,
  `32` int(9) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `laporanb`
--

CREATE TABLE `laporanb` (
  `id` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `1` int(9) NOT NULL DEFAULT 0,
  `2` int(9) NOT NULL DEFAULT 0,
  `3` int(9) NOT NULL DEFAULT 0,
  `4` int(9) NOT NULL DEFAULT 0,
  `5` int(9) NOT NULL DEFAULT 0,
  `6` int(9) NOT NULL DEFAULT 0,
  `7` int(9) NOT NULL DEFAULT 0,
  `8` int(9) NOT NULL DEFAULT 0,
  `9` int(9) NOT NULL DEFAULT 0,
  `10` int(9) NOT NULL DEFAULT 0,
  `11` int(9) NOT NULL DEFAULT 0,
  `12` int(9) NOT NULL DEFAULT 0,
  `13` int(9) NOT NULL DEFAULT 0,
  `14` int(9) NOT NULL DEFAULT 0,
  `15` int(9) NOT NULL DEFAULT 0,
  `16` int(9) NOT NULL DEFAULT 0,
  `17` int(9) NOT NULL DEFAULT 0,
  `18` int(9) NOT NULL DEFAULT 0,
  `19` int(9) NOT NULL DEFAULT 0,
  `20` int(9) NOT NULL DEFAULT 0,
  `21` int(9) NOT NULL DEFAULT 0,
  `22` int(9) NOT NULL DEFAULT 0,
  `23` int(9) NOT NULL DEFAULT 0,
  `24` int(9) NOT NULL DEFAULT 0,
  `25` int(9) NOT NULL DEFAULT 0,
  `26` int(9) NOT NULL DEFAULT 0,
  `27` int(9) NOT NULL DEFAULT 0,
  `28` int(9) NOT NULL DEFAULT 0,
  `29` int(9) NOT NULL DEFAULT 0,
  `30` int(9) NOT NULL DEFAULT 0,
  `31` int(9) NOT NULL DEFAULT 0,
  `32` int(9) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `laporanc`
--

CREATE TABLE `laporanc` (
  `id` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `1` int(9) NOT NULL DEFAULT 0,
  `2` int(9) NOT NULL DEFAULT 0,
  `3` int(9) NOT NULL DEFAULT 0,
  `4` int(9) NOT NULL DEFAULT 0,
  `5` int(9) NOT NULL DEFAULT 0,
  `6` int(9) NOT NULL DEFAULT 0,
  `7` int(9) NOT NULL DEFAULT 0,
  `8` int(9) NOT NULL DEFAULT 0,
  `9` int(9) NOT NULL DEFAULT 0,
  `10` int(9) NOT NULL DEFAULT 0,
  `11` int(9) NOT NULL DEFAULT 0,
  `12` int(9) NOT NULL DEFAULT 0,
  `13` int(9) NOT NULL DEFAULT 0,
  `14` int(9) NOT NULL DEFAULT 0,
  `15` int(9) NOT NULL DEFAULT 0,
  `16` int(9) NOT NULL DEFAULT 0,
  `17` int(9) NOT NULL DEFAULT 0,
  `18` int(9) NOT NULL DEFAULT 0,
  `19` int(9) NOT NULL DEFAULT 0,
  `20` int(9) NOT NULL DEFAULT 0,
  `21` int(9) NOT NULL DEFAULT 0,
  `22` int(9) NOT NULL DEFAULT 0,
  `23` int(9) NOT NULL DEFAULT 0,
  `24` int(9) NOT NULL DEFAULT 0,
  `25` int(9) NOT NULL DEFAULT 0,
  `26` int(9) NOT NULL DEFAULT 0,
  `27` int(9) NOT NULL DEFAULT 0,
  `28` int(9) NOT NULL DEFAULT 0,
  `29` int(9) NOT NULL DEFAULT 0,
  `30` int(9) NOT NULL DEFAULT 0,
  `31` int(9) NOT NULL DEFAULT 0,
  `32` int(9) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `murid`
--

CREATE TABLE `murid` (
  `id_murid` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nisn` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `tgl_daftar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `praktikum`
--

CREATE TABLE `praktikum` (
  `id_praktikum` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `deadline` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE `uploads` (
  `id` int(11) NOT NULL,
  `tgl_upload` datetime NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `file_size` int(20) NOT NULL,
  `file_type` varchar(10) NOT NULL,
  `klik` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`id`, `tgl_upload`, `file_name`, `file_size`, `file_type`, `klik`) VALUES
(162, '2024-05-12 00:00:00', 'profil.jpg', 25579, 'jfif', 0),
(163, '2024-05-17 00:00:00', 'profil.jpg', 29864, 'jpg', 0),
(164, '2024-05-17 00:00:00', 'profil.jpg', 29864, 'jpg', 0),
(165, '2024-05-17 00:00:00', 'profil.jpg', 6280, 'jpg', 0),
(166, '2024-05-17 00:00:00', 'profil.jpg', 41615, 'png', 0),
(167, '2024-05-17 00:00:00', 'profil.jpg', 41615, 'png', 0),
(168, '2024-05-17 00:00:00', 'profil.jpg', 5185, 'png', 0),
(169, '2024-05-17 00:00:00', 'profil.jpg', 5185, 'png', 0),
(170, '2024-05-17 00:00:00', 'profil.jpg', 5185, 'png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  `nip` varchar(50) DEFAULT NULL,
  `nisn` varchar(50) DEFAULT NULL,
  `jenjang` varchar(50) NOT NULL,
  `grade` varchar(50) DEFAULT NULL,
  `kategori` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `tgl_daftar`, `nama`, `level`, `nip`, `nisn`, `jenjang`, `grade`, `kategori`, `email`, `username`, `password`) VALUES
(90, '2024-05-30', 'syabila qinara sakhi', 'guru', '36417651864188134', '', '', '', '', 'syabila@gmail.com', 'syabila', '81dc9bdb52d04dc20036dbd8313ed055'),
(91, '2024-05-30', 'shaqila askana sakhi', 'murid', '', '762714651641', 'sd', 'V', NULL, 'shaqila@gmail.com', 'shaqila', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `laporana`
--
ALTER TABLE `laporana`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporanb`
--
ALTER TABLE `laporanb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporanc`
--
ALTER TABLE `laporanc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `murid`
--
ALTER TABLE `murid`
  ADD PRIMARY KEY (`id_murid`);

--
-- Indexes for table `praktikum`
--
ALTER TABLE `praktikum`
  ADD PRIMARY KEY (`id_praktikum`);

--
-- Indexes for table `uploads`
--
ALTER TABLE `uploads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `laporana`
--
ALTER TABLE `laporana`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laporanb`
--
ALTER TABLE `laporanb`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laporanc`
--
ALTER TABLE `laporanc`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `murid`
--
ALTER TABLE `murid`
  MODIFY `id_murid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `praktikum`
--
ALTER TABLE `praktikum`
  MODIFY `id_praktikum` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=171;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
