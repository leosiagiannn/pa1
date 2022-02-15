-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2022 at 06:25 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pa01`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id_akun` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id_akun`, `username`, `password`, `email`, `role`) VALUES
(1, 'admin', 'admin', 'admin@yahoo.com', 'admin'),
(2, 'leo', 'leo', 'leo@gmail.com', 'pengguna'),
(3, 'putri', 'putri', 'putri@gmail.com', 'pengguna');

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(11) NOT NULL,
  `nim` varchar(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nim`, `nama`, `status`, `foto`) VALUES
(1, '11319017', 'Leonardo Siagian', 'Anggota', '15022022182424leonardo.png');

-- --------------------------------------------------------

--
-- Table structure for table `data_iuran`
--

CREATE TABLE `data_iuran` (
  `id_iuran` int(11) NOT NULL,
  `nama_penyetor` varchar(200) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_pengeluaran`
--

CREATE TABLE `data_pengeluaran` (
  `id_pengeluaran` int(11) NOT NULL,
  `tujuan` text NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tanggal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pengeluaran`
--

INSERT INTO `data_pengeluaran` (`id_pengeluaran`, `tujuan`, `jumlah`, `tanggal`) VALUES
(1, 'beli kertas karton', 10000, '2022-02-03'),
(2, 'beli lem', 1000, '2022-02-17');

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `id_informasi` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `informasi` text NOT NULL,
  `file_tambahan` varchar(250) DEFAULT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`id_informasi`, `judul`, `informasi`, `file_tambahan`, `tanggal`) VALUES
(1, 'Pemberian Sertifikat', 'kali ini playlist favorite saya jatuh pada eclat story, ini adalah kumpulan lagu-lagu terbaru dari eclat. \r\n\r\nyuk komen dibawah lagu apalagi yang pengen kalian denger dari chanel ini :) jangan lupa subscribe, share, like, dan komen yaaa!\r\nc uuuuu, love!', '11062020123912DSC_0011.JPG', '2020-06-12');

-- --------------------------------------------------------

--
-- Table structure for table `kelas_tutor`
--

CREATE TABLE `kelas_tutor` (
  `id_kelas` int(11) NOT NULL,
  `topik` varchar(200) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `kuota` int(11) NOT NULL,
  `pengajar` int(50) NOT NULL,
  `tanggal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas_tutor`
--

INSERT INTO `kelas_tutor` (`id_kelas`, `topik`, `kelas`, `kuota`, `pengajar`, `tanggal`) VALUES
(1, 'UI', '714', 1000, 1, '2020-06-10'),
(2, 'Kesenjangan masyarakat', 'asd', 2, 2, '2022-02-11');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `id_akun` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `komentar` text NOT NULL,
  `reply` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `id_akun`, `nama`, `komentar`, `reply`) VALUES
(1, 10, 'putri', 'bagus', 'menunggu balasan');

-- --------------------------------------------------------

--
-- Table structure for table `notifikasi`
--

CREATE TABLE `notifikasi` (
  `id_notifikasi` int(11) NOT NULL,
  `id_akun` int(11) NOT NULL,
  `judul_notifikasi` varchar(200) NOT NULL,
  `notifikasi` text NOT NULL,
  `tanggal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengurus`
--

CREATE TABLE `pengurus` (
  `id_pengurus` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `nim` int(11) NOT NULL,
  `jabatan` varchar(200) NOT NULL,
  `foto` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengurus`
--

INSERT INTO `pengurus` (`id_pengurus`, `nama`, `nim`, `jabatan`, `foto`) VALUES
(1, 'Haris', 11319044, 'Ketua', '11062020081845DSC_0007.JPG'),
(2, 'Grace', 11319040, 'Sekretaris', '11062020081902DSC_0005.JPG'),
(3, 'Sarah', 11319004, 'Bendahara', '11062020081910DSC_0001.JPG'),
(4, 'Pasgi', 11319023, 'Penasehat', '11062020081918DSC_0019.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `software`
--

CREATE TABLE `software` (
  `id_software` int(11) NOT NULL,
  `nama_software` varchar(200) NOT NULL,
  `gambar` varchar(200) DEFAULT NULL,
  `file` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `software`
--

INSERT INTO `software` (`id_software`, `nama_software`, `gambar`, `file`) VALUES
(1, 'Leoanardo', '11062020203037DSC_0006.JPG', '11062020203037DSC_0007.JPG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `data_iuran`
--
ALTER TABLE `data_iuran`
  ADD PRIMARY KEY (`id_iuran`);

--
-- Indexes for table `data_pengeluaran`
--
ALTER TABLE `data_pengeluaran`
  ADD PRIMARY KEY (`id_pengeluaran`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id_informasi`);

--
-- Indexes for table `kelas_tutor`
--
ALTER TABLE `kelas_tutor`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `notifikasi`
--
ALTER TABLE `notifikasi`
  ADD PRIMARY KEY (`id_notifikasi`);

--
-- Indexes for table `pengurus`
--
ALTER TABLE `pengurus`
  ADD PRIMARY KEY (`id_pengurus`);

--
-- Indexes for table `software`
--
ALTER TABLE `software`
  ADD PRIMARY KEY (`id_software`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `data_iuran`
--
ALTER TABLE `data_iuran`
  MODIFY `id_iuran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `data_pengeluaran`
--
ALTER TABLE `data_pengeluaran`
  MODIFY `id_pengeluaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id_informasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kelas_tutor`
--
ALTER TABLE `kelas_tutor`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `notifikasi`
--
ALTER TABLE `notifikasi`
  MODIFY `id_notifikasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pengurus`
--
ALTER TABLE `pengurus`
  MODIFY `id_pengurus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `software`
--
ALTER TABLE `software`
  MODIFY `id_software` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
