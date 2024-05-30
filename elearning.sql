-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2024 at 12:31 PM
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
  `sekolah` varchar(50) NOT NULL,
  `kelas` varchar(11) DEFAULT NULL,
  `kelas_paud` varchar(50) DEFAULT NULL,
  `kelas_tk` varchar(50) DEFAULT NULL,
  `kelas_sd` varchar(50) DEFAULT NULL,
  `kelas_smp` varchar(50) DEFAULT NULL,
  `kelas_sma` varchar(50) DEFAULT NULL,
  `kategori` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `tgl_daftar`, `nama`, `level`, `nip`, `nisn`, `sekolah`, `kelas`, `kelas_paud`, `kelas_tk`, `kelas_sd`, `kelas_smp`, `kelas_sma`, `kategori`, `email`, `username`, `password`) VALUES
(39, '2018-02-28', 'ADMIN', 'guru', '', NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', 'bagushikmahwan@gmail.com', 'bagus2', '8297e07addb27a237123bd059bfb8fac'),
(41, '2024-05-16', 'Yan', 'guru', '', NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '', 'Yan', '81dc9bdb52d04dc20036dbd8313ed055'),
(43, '2024-05-16', 'Wisik', 'guru', '1111', NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', '', 'Wisik', '81dc9bdb52d04dc20036dbd8313ed055'),
(44, '2024-05-16', 'Alfinki', 'murid', '1122020004', NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', 'alfinki@gmail.com', 'Alfinki', '81dc9bdb52d04dc20036dbd8313ed055'),
(45, '2024-05-16', 'Agustina', 'murid', '1122020001', NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', 'agustina@gmail.com', 'Agustina', '81dc9bdb52d04dc20036dbd8313ed055'),
(46, '2024-05-16', 'Krisna', 'murid', '1122020069', NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', 'krisna@gmail.com', 'Krisna', '81dc9bdb52d04dc20036dbd8313ed055'),
(47, '2024-05-17', 'Wahyu', 'murid', '1122020056', NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', 'wahyu@gmail.com', 'Wahyu', '81dc9bdb52d04dc20036dbd8313ed055'),
(48, '2024-05-17', 'Rendi', 'murid', '1122026969', NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', 'rendi@gmail.com', 'Rendi', '81dc9bdb52d04dc20036dbd8313ed055'),
(49, '2024-05-17', 'Amanda', 'murid', '1122020006', NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', 'amanda@gmail.com', 'Amanda', '81dc9bdb52d04dc20036dbd8313ed055'),
(50, '2024-05-17', 'Chito', 'murid', '1122026970', NULL, '', '', NULL, NULL, NULL, NULL, NULL, '', 'chito@gmail.com', 'Chito', '81dc9bdb52d04dc20036dbd8313ed055'),
(51, '2024-05-17', 'Tes', 'murid', '', '1122026971', '', '', NULL, NULL, NULL, NULL, NULL, '', 'tes@gmail.com', 'Tes', '81dc9bdb52d04dc20036dbd8313ed055'),
(52, '2024-05-17', 'Tes', 'murid', '', '1122026971', '', '', NULL, NULL, NULL, NULL, NULL, '', 'tes@gmail.com', 'Tes', '81dc9bdb52d04dc20036dbd8313ed055'),
(53, '2024-05-17', 'Tes2', 'guru', '1112', '', '', '', NULL, NULL, NULL, NULL, NULL, '', 'tes2@gmail.com', 'Tes2', '81dc9bdb52d04dc20036dbd8313ed055'),
(56, '2024-05-17', 'Dafa', 'guru', '1113', '', '', '', NULL, NULL, NULL, NULL, NULL, '', 'dafa@gmail.com', 'Dafa', '81dc9bdb52d04dc20036dbd8313ed055'),
(57, '2024-05-17', 'Fajar', 'guru', '1114', '', '', '', NULL, NULL, NULL, NULL, NULL, '', 'fajar@gmail.com', 'Fajar', '81dc9bdb52d04dc20036dbd8313ed055'),
(59, '2024-05-17', 'Ridho', 'guru', '1115', '', '', '', NULL, NULL, NULL, NULL, NULL, '', 'ridho@gmail.com', 'Ridho', '81dc9bdb52d04dc20036dbd8313ed055'),
(60, '2024-05-17', 'Alfian', 'murid', '', '1122026972', '', 'X', NULL, NULL, NULL, NULL, NULL, '', 'alfian@gmail.com', 'Alfian', '81dc9bdb52d04dc20036dbd8313ed055'),
(61, '2024-05-17', 'Arvin', 'guru', '1116', '', '', '', NULL, NULL, NULL, NULL, NULL, '', 'arvin@gmail.com', 'Arvin', '81dc9bdb52d04dc20036dbd8313ed055'),
(62, '2024-05-17', 'Henry', 'murid', '', '1122026973', '', 'XI', NULL, NULL, NULL, NULL, NULL, '', 'henry@gmail.com', 'Henry', '81dc9bdb52d04dc20036dbd8313ed055'),
(63, '2024-05-17', 'Dinar', 'murid', '', '1122026974', '', 'XII', NULL, NULL, NULL, NULL, NULL, 'A', 'dinar@gmail.com', 'Dinar', '81dc9bdb52d04dc20036dbd8313ed055'),
(66, '2024-05-17', 'Bagas', 'murid', '', '1122026975', '', 'XI', NULL, NULL, NULL, NULL, NULL, 'C', 'bagas@gmail.com', 'Bagas', '81dc9bdb52d04dc20036dbd8313ed055'),
(67, '2024-05-17', 'Kalis', 'murid', '', '1122026976', '', 'X', NULL, NULL, NULL, NULL, NULL, 'C', 'kalis@gmail.com', 'Kalis', '81dc9bdb52d04dc20036dbd8313ed055'),
(68, '2024-05-17', 'Tania', 'murid', '', '1122026901', '', 'X', NULL, NULL, NULL, NULL, NULL, '', 'tania@gmail.com', 'Tania', '81dc9bdb52d04dc20036dbd8313ed055'),
(69, '2024-05-17', 'Karinina', 'guru', '1117', '', '', '', NULL, NULL, NULL, NULL, NULL, '', 'karinina@gmail.com', 'Karinina', '81dc9bdb52d04dc20036dbd8313ed055'),
(70, '2024-05-17', 'Selvi', 'murid', '', '1122026902', '', 'XI', NULL, NULL, NULL, NULL, NULL, '', 'selvi@gmail.com', 'Selvi', '81dc9bdb52d04dc20036dbd8313ed055'),
(71, '2024-05-26', 'AnakPaud1', 'murid', '', '101', 'paud', '', NULL, NULL, NULL, NULL, NULL, '', 'anakpaud1@gmail.com', 'anakpaud1', '81dc9bdb52d04dc20036dbd8313ed055'),
(72, '2024-05-26', 'AnakSma1', 'murid', '', '501', 'sma', '', NULL, NULL, NULL, NULL, NULL, '', 'anaksma1@gmail.com', 'AnakSma1', '81dc9bdb52d04dc20036dbd8313ed055'),
(73, '2024-05-26', 'AnakSma2', 'murid', '', '502', 'sma', '', NULL, NULL, NULL, NULL, NULL, '', 'anaksma2@gmail.com', 'anaksma2', '81dc9bdb52d04dc20036dbd8313ed055'),
(74, '2024-05-26', 'anaksmp1', 'murid', '', '401', 'smp', '', NULL, NULL, NULL, NULL, NULL, '', 'anaksmp1@gmail.com', 'anaksmp1', '81dc9bdb52d04dc20036dbd8313ed055'),
(75, '2024-05-26', 'anaksmp2', 'murid', '', '402', 'smp', '', NULL, NULL, NULL, NULL, NULL, '', 'anaksmp2@gmail.com', 'anaksmp2', '81dc9bdb52d04dc20036dbd8313ed055'),
(78, '2024-05-26', 'anaksmp3', 'murid', '', '403', 'smp', '', NULL, NULL, NULL, NULL, NULL, '', 'anaksmp3@gmail.com', 'anaksmp3', '81dc9bdb52d04dc20036dbd8313ed055'),
(80, '2024-05-26', 'anaksmp4', 'murid', '', '404', 'smp', '', NULL, NULL, NULL, NULL, NULL, '', 'anaksmp4@gmail.com', 'anaksmp4', '81dc9bdb52d04dc20036dbd8313ed055'),
(81, '2024-05-26', 'anaksmp5', 'murid', '', '405', 'smp', '', NULL, NULL, NULL, NULL, NULL, '', 'anaksmp5@gmail.com', 'anaksmp5', '81dc9bdb52d04dc20036dbd8313ed055'),
(82, '2024-05-26', 'anakpaud2', 'murid', '', '102', 'paud', '', NULL, NULL, NULL, NULL, NULL, '', 'anakpaud2@gmail.com', 'anakpaud2', '81dc9bdb52d04dc20036dbd8313ed055'),
(84, '2024-05-26', 'anakpaud3', 'murid', '', '103', '', '', NULL, NULL, NULL, NULL, NULL, '', 'anakpaud3@gmail.com', 'anakpaud3', '81dc9bdb52d04dc20036dbd8313ed055'),
(85, '2024-05-26', 'anaksma3', 'murid', '', '503', '', 'XII', NULL, NULL, NULL, NULL, NULL, '', 'anaksma3@gmail.com', 'anaksma3', '81dc9bdb52d04dc20036dbd8313ed055'),
(86, '2024-05-26', 'anakpaud4', 'murid', '', '104', 'paud', '', 'Kelompok A', '', '', '', '', '', 'anakpaud4@gmail.com', 'anakpaud4', '81dc9bdb52d04dc20036dbd8313ed055'),
(87, '2024-05-26', 'anaksma4', 'murid', '', '504', 'sma', '', '', '', '', '', 'XII IPS', 'A', 'anaksma4@gmail.com', 'anaksma4', '81dc9bdb52d04dc20036dbd8313ed055'),
(88, '2024-05-30', 'shaqila', 'murid', '', '5631418531515', 'sd', '', '', '', 'III', '', '', '', 'shaqila@gmail.com', 'shaqila', '81dc9bdb52d04dc20036dbd8313ed055');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
