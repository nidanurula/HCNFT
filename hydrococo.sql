-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2018 at 05:31 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hydrococo`
--

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `idJadwal` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `lokasi` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `idkota` char(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `idkota` char(3) NOT NULL,
  `namakota` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`idkota`, `namakota`) VALUES
('BDG', 'Bandung'),
('BDL', 'Bandar Lampung'),
('BGR', 'Bogor'),
('BJM', 'Banjarmasin'),
('BKS', 'Bekasi'),
('BPP', 'Balikpapan'),
('BTM', 'Batam'),
('CRB', 'Cirebon'),
('DPR', 'Denpasar'),
('JAP', 'Jayapura'),
('JKT', 'Jakarta'),
('JMR', 'Jember'),
('MDN', 'Medan'),
('MKS', 'Makasar'),
('MLG', 'Malang'),
('MND', 'Manado'),
('MTR', 'Mataram'),
('PAD', 'Padang'),
('PBR', 'Pekanbaru'),
('PLG', 'Palembang'),
('PTK', 'Pontianak'),
('PWT', 'Purwokerto'),
('SBY', 'Surabaya'),
('SLO', 'Solo'),
('SMG', 'Semarang'),
('SMR', 'Samarinda'),
('TNG', 'Tangerang'),
('TSM', 'Tasikmalaya'),
('YYK', 'Yogyakarta');

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE `peserta` (
  `idPeserta` int(11) NOT NULL,
  `namaPendaftar` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `notelpPeserta` char(12) NOT NULL,
  `noIdentitas` varchar(25) NOT NULL,
  `posisi` varchar(10) NOT NULL,
  `asalSekolah` varchar(30) NOT NULL,
  `idkota` char(3) NOT NULL,
  `ikutSerta` varchar(5) NOT NULL,
  `namaTim` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`idPeserta`, `namaPendaftar`, `email`, `notelpPeserta`, `noIdentitas`, `posisi`, `asalSekolah`, `idkota`, `ikutSerta`, `namaTim`) VALUES
(2, 'Yera Desriyanti', 'yerades@gmail.com', '081233445434', '084756333333333', 'Pelatih', 'MAN 1 Bekasi', 'BKS', 'Belum', 'madline');

-- --------------------------------------------------------

--
-- Table structure for table `tim`
--

CREATE TABLE `tim` (
  `idTim` int(1) NOT NULL,
  `namaTim` varchar(20) NOT NULL,
  `idPeserta` int(1) NOT NULL,
  `asalSekolah` varchar(30) NOT NULL,
  `idkota` char(3) NOT NULL,
  `logo` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tim`
--

INSERT INTO `tim` (`idTim`, `namaTim`, `idPeserta`, `asalSekolah`, `idkota`, `logo`) VALUES
(1, 'Garuda', 2, '', 'BKS', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `namaUser` varchar(30) NOT NULL,
  `tgllahirUser` date NOT NULL,
  `alamatUser` text NOT NULL,
  `status` varchar(7) NOT NULL,
  `notelpUser` char(12) NOT NULL,
  `idkota` char(3) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(8) NOT NULL,
  `fotoUser` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`namaUser`, `tgllahirUser`, `alamatUser`, `status`, `notelpUser`, `idkota`, `username`, `password`, `fotoUser`) VALUES
('Admin', '0000-00-00', '', '', '', '', 'admin', '1234', ''),
('Nida Nurul Awaliah', '1997-05-26', '', 'admin', '', 'bgr', 'nid', '1234', ''),
('tes', '0000-00-00', '', '3', '021', 'bgr', 'tes', 'tes', ''),
('u', '0000-00-00', '', 'Panitia', '8', 'crb', 'u', 'u', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`idJadwal`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`idkota`);

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`idPeserta`),
  ADD KEY `idkota` (`idkota`);

--
-- Indexes for table `tim`
--
ALTER TABLE `tim`
  ADD PRIMARY KEY (`idTim`),
  ADD KEY `idPeserta` (`idPeserta`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `idJadwal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `peserta`
--
ALTER TABLE `peserta`
  MODIFY `idPeserta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tim`
--
ALTER TABLE `tim`
  MODIFY `idTim` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `peserta`
--
ALTER TABLE `peserta`
  ADD CONSTRAINT `peserta_ibfk_1` FOREIGN KEY (`idkota`) REFERENCES `kota` (`idkota`);

--
-- Constraints for table `tim`
--
ALTER TABLE `tim`
  ADD CONSTRAINT `tim_ibfk_1` FOREIGN KEY (`idPeserta`) REFERENCES `peserta` (`idPeserta`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
