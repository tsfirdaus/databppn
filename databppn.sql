-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2022 at 08:17 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `databppn`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `id` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`id`, `username`, `password`) VALUES
(1, '123', '123');

-- --------------------------------------------------------

--
-- Table structure for table `ang2021`
--

CREATE TABLE `ang2021` (
  `id` int(10) NOT NULL,
  `program` varchar(256) NOT NULL,
  `kegiatan` varchar(256) NOT NULL,
  `sub_kegiatan` varchar(256) NOT NULL,
  `alokasi` int(50) NOT NULL,
  `realisasi_rp` int(50) NOT NULL,
  `target` varchar(50) NOT NULL,
  `realisasi` varchar(50) NOT NULL,
  `kinerja` int(20) NOT NULL,
  `keterangan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ang2021`
--

INSERT INTO `ang2021` (`id`, `program`, `kegiatan`, `sub_kegiatan`, `alokasi`, `realisasi_rp`, `target`, `realisasi`, `kinerja`, `keterangan`) VALUES
(1, 'PROGRAM PENUNJANG URUSAN PEMERINTAHAN DAERAH KABUPATEN/KOTA', 'Administrasi Keuangan Perangkat Daerah', 'Penyediaan Gaji dan Tunjangan ASN sumber Pendanaan', 2147483647, 2147483647, '13 ASN selama 14 bulan', '13 ASN selama 14 bulan', 100, 'Selesai dilaksanakan'),
(6, 'PROGRAM PENUNJANG URUSAN PEMERINTAHAN DAERAH KABUPATEN/KOTA', 'Administrasi Kepegawaian Perangkat Daerah', 'Pengadaan Pakaian Dinas beserta Atribut Kelengkapannya', 11820000, 11397000, '12 stel', '12 stel', 100, 'Selesai dilaksanakan'),
(7, 'PROGRAM PENUNJANG URUSAN PEMERINTAHAN DAERAH KABUPATEN/KOTA', 'Administrasi Kepegawaian Perangkat Daerah', 'Bimbingan Teknis Implementasi Peraturan Perundang-undangan', 0, 0, '-', '-', 0, 'Tidak dilaksanakan');

-- --------------------------------------------------------

--
-- Table structure for table `ang2022`
--

CREATE TABLE `ang2022` (
  `id` int(10) NOT NULL,
  `program` varchar(256) NOT NULL,
  `kegiatan` varchar(256) NOT NULL,
  `sub_kegiatan` varchar(256) NOT NULL,
  `alokasi` int(50) NOT NULL,
  `realisasi_rp` int(50) NOT NULL,
  `target` varchar(50) NOT NULL,
  `realisasi` varchar(50) NOT NULL,
  `kinerja` int(20) NOT NULL,
  `keterangan` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ang2022`
--

INSERT INTO `ang2022` (`id`, `program`, `kegiatan`, `sub_kegiatan`, `alokasi`, `realisasi_rp`, `target`, `realisasi`, `kinerja`, `keterangan`) VALUES
(1, 'PROGRAM PENUNJANG URUSAN PEMERINTAHAN DAERAH KABUPATEN/KOTA', 'Administrasi Keuangan Perangkat Daerah', 'Penyediaan Gaji dan Tunjangan ASN sumber Pendanaan', 2141353075, 473548186, '24 ASN selama 14 bulan', '24 ASN sudah 3 bulan', 30, 'Selesai, sedang dan belum dilaksanakan'),
(4, 'PROGRAM PENUNJANG URUSAN PEMERINTAHAN DAERAH KABUPATEN/KOTA', 'Administrasi Kepegawaian Perangkat Daerah', 'Pengadaan Pakaian Dinas beserta Atribut Kelengkapannya', 13545000, 0, '21 stel', '-', 25, 'Belum dan sedang dilaksanakan'),
(5, 'PROGRAM PENUNJANG URUSAN PEMERINTAHAN DAERAH KABUPATEN/KOTA', 'Administrasi Kepegawaian Perangkat Daerah', 'Bimbingan Teknis Implementasi Peraturan Perundang-undangan', 50000000, 0, '10 orang', '-', 30, 'Selesai, sedang dan belum dilaksanakan');

-- --------------------------------------------------------

--
-- Table structure for table `langkah_2022`
--

CREATE TABLE `langkah_2022` (
  `id` int(10) NOT NULL,
  `program` varchar(255) NOT NULL,
  `kegiatan` varchar(255) NOT NULL,
  `sub_kegiatan` varchar(255) NOT NULL,
  `target` varchar(255) NOT NULL,
  `realisasi` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `langkah2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `langkah_2022`
--

INSERT INTO `langkah_2022` (`id`, `program`, `kegiatan`, `sub_kegiatan`, `target`, `realisasi`, `keterangan`, `langkah2`) VALUES
(1, 'PROGRAM PENUNJANG URUSAN PEMERINTAHAN DAERAH KABUPATEN/KOTA', 'Administrasi Keuangan Perangkat Daerah', 'Penyediaan Gaji dan Tunjangan ASN sumber Pendanaan', '24 ASN selama 14 bulan', '24 ASN sudah 3 bulan', 'Selesai, sedang dan belum dilaksanakan', 'Melakukan monitoring, evaluasi dan perencanaan terhadap kebutuhan riil pada tahun 2022'),
(3, 'PROGRAM PENUNJANG URUSAN PEMERINTAHAN DAERAH KABUPATEN/KOTA', 'Administrasi Kepegawaian Perangkat Daerah', 'Pengadaan Pakaian Dinas beserta Atribut Kelengkapannya', '21 stel', '', 'Belum dan sedang dilaksanakan', 'Melakukan monitoring, evaluasi dan perencanaan terhadap kebutuhan pakaian dinas pegawai pada tahun 2022');

-- --------------------------------------------------------

--
-- Table structure for table `masukan`
--

CREATE TABLE `masukan` (
  `id` int(15) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telp` varchar(30) NOT NULL,
  `komen` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `masukan`
--

INSERT INTO `masukan` (`id`, `Nama`, `email`, `telp`, `komen`) VALUES
(19, 'sda', 'sda', 'asd', 'dsa'),
(20, 'ad', 'ad', 'ad', 'ad'),
(21, 'ad', 'ad', 'ad', 'ad'),
(22, 'sda', 'dsa', 'asd', 'asd'),
(23, 'asd', 'sad', 'asd', 'sd'),
(24, 'asd', 'sda', 'asd', 'asd'),
(25, 'asd', 'sda', 'asd', 'asd'),
(26, 'das', 'sad', 'sad', 'sda'),
(27, 'sad', 'asd', 'sad', 'sad'),
(28, 'asd', 'asd', 'asd', 'sda'),
(29, 'asd', 'asd', 'asd', 'sda'),
(30, 'asd', 'sad', 'sad', 'sda'),
(31, 'sad', 'sad', 'sad', 'sda'),
(32, 'sad', 'sad', 'sda', 'sad'),
(33, 'sad', 'ad', 'dsads', 'sdadsa'),
(34, 'sda', 'sad', 'sad', 'da'),
(35, 'asd', 'dsa', 'sad', 'sad'),
(36, 'asd', 'dsa', 'sad', 'sad'),
(37, 'daw', 'adw', 'ad', 'ad'),
(38, 'daw', 'adw', 'ad', 'ad'),
(39, 'sad', 'asd', 'sad', 'sad'),
(40, 'sad', 'asd', 'sad', 'sad'),
(41, 'dsa', 'sda', 'sad', 'dsa'),
(42, 'dsa', 'sad', 'asd', ''),
(43, 'ads', 'sad', 'asd', ''),
(44, 'das', 'sda', 'asd', 'sad');

-- --------------------------------------------------------

--
-- Table structure for table `ormasbppn`
--

CREATE TABLE `ormasbppn` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `sifat` varchar(255) NOT NULL,
  `nosk` varchar(255) NOT NULL,
  `jab1` varchar(255) NOT NULL,
  `jab2` varchar(255) NOT NULL,
  `jab3` varchar(255) NOT NULL,
  `jab4` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tempat` varchar(244) NOT NULL,
  `notelp` varchar(255) NOT NULL,
  `npwp` varchar(255) NOT NULL,
  `skm` varchar(255) NOT NULL,
  `skm1` varchar(255) NOT NULL,
  `ket` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ormasbppn`
--

INSERT INTO `ormasbppn` (`id`, `nama`, `sifat`, `nosk`, `jab1`, `jab2`, `jab3`, `jab4`, `alamat`, `tempat`, `notelp`, `npwp`, `skm`, `skm1`, `ket`) VALUES
(6, 'Supremasi Ekosistem Dan Satwa', 'Kegiatan', '', 'Ismail Arrasid', '', 'Sari Arlin', 'Kristianti  Melinda', 'Sanggar Bhakti Pramuka Jl.telaga sari Rt 37 Balikpapan Kota', '0542-414711', '08125586822', '', '2001', '2005', 'Tidak Aktif'),
(26, 'DPD. Penggawa Adat Dayak Borneo Kota Balikpapan', 'Fungsi', '220.III.07.11.098                         19 Nopember 2007', 'Jon Juan Rinkay', '', 'Boby', 'Erny Emmer', 'Jl.MT. Haryono Rt 93 N0 76 Kec Balikpapan Selatan Kel. Sepinggan', '', '081346610047', '', '2007', '2011', 'Tidak Aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ang2021`
--
ALTER TABLE `ang2021`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ang2022`
--
ALTER TABLE `ang2022`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `langkah_2022`
--
ALTER TABLE `langkah_2022`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `masukan`
--
ALTER TABLE `masukan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ormasbppn`
--
ALTER TABLE `ormasbppn`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ang2021`
--
ALTER TABLE `ang2021`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ang2022`
--
ALTER TABLE `ang2022`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `langkah_2022`
--
ALTER TABLE `langkah_2022`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `masukan`
--
ALTER TABLE `masukan`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `ormasbppn`
--
ALTER TABLE `ormasbppn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
