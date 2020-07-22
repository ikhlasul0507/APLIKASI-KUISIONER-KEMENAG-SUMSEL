-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 28 Agu 2019 pada 08.47
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kemenag`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`) VALUES
(14, 'mimi', '123'),
(15, 'manager', '123'),
(16, 'wahyu', '12345'),
(17, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kuisioner`
--

CREATE TABLE `tbl_kuisioner` (
  `id_kuisioner` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `handphone` varchar(128) NOT NULL,
  `nilai1` varchar(1) NOT NULL,
  `nilai2` varchar(1) NOT NULL,
  `nilai3` varchar(1) NOT NULL,
  `nilai4` varchar(1) NOT NULL,
  `nilai5` varchar(1) NOT NULL,
  `nilai6` varchar(1) NOT NULL,
  `nilai7` varchar(1) NOT NULL,
  `nilai8` varchar(1) NOT NULL,
  `nilai9` varchar(1) NOT NULL,
  `nilai10` varchar(1) NOT NULL,
  `nilai11` varchar(1) NOT NULL,
  `nilai12` varchar(1) NOT NULL,
  `nilai13` varchar(1) NOT NULL,
  `nilai14` varchar(1) NOT NULL,
  `saran` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kuisioner`
--

INSERT INTO `tbl_kuisioner` (`id_kuisioner`, `nama`, `handphone`, `nilai1`, `nilai2`, `nilai3`, `nilai4`, `nilai5`, `nilai6`, `nilai7`, `nilai8`, `nilai9`, `nilai10`, `nilai11`, `nilai12`, `nilai13`, `nilai14`, `saran`) VALUES
(10, 'asdsa', '132321', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'qwq'),
(11, 'adsad', '1212', 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'asdsa'),
(12, 'amal', '13213', 'c', 'c', 'c', 'c', 'c', 'c', 'c', 'c', 'c', 'c', 'c', 'c', 'c', 'c', '1212'),
(13, 'okti', '213123', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', ''),
(14, 'adsda', '121', 's', 's', 's', 's', 's', 's', 's', 's', 's', 's', 's', 's', 's', 's', ''),
(16, 'ddfffd', '1232', 't', 't', 't', 't', 't', 't', 't', 't', 't', 't', 't', 't', 't', 't', ''),
(17, 'asadsad', '23223', 'd', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(20, 'weew', '2323', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(21, 'we', '2323', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(22, 'qeqw', '12', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(23, 'mimi', '12345', 'a', 'a', 'a', 'a', 'a', 'a', 'c', 'a', 'a', 'a', 'b', 'd', 'a', 'd', 'keren'),
(24, 'evi', '081222222', 'c', 'c', 'a', 'b', 'b', 'b', 'a', 'a', 'd', 'c', 'b', 'c', 'c', 'c', 'good');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `perusahaan` varchar(128) NOT NULL,
  `umur` int(3) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `pendidikan_terakhir` varchar(128) NOT NULL,
  `pekerjaan_utama` varchar(128) NOT NULL,
  `handphone` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama`, `perusahaan`, `umur`, `jenis_kelamin`, `pendidikan_terakhir`, `pekerjaan_utama`, `handphone`, `password`) VALUES
(3, 'ikhlas', 'qwqw', 12, 'Laki-Laki', 'Tidak Sekolah', 'PNS', '2147483647', '123'),
(4, 'ABC', 'sa', 12, 'Laki-Laki', 'Tidak Sekolah', 'PNS', '2147483647', '123'),
(5, 'Ikhlasul Amal', 'were', 13, 'Laki-Laki', 'Tidak Sekolah', 'PNS', '082280524264', '123'),
(6, 'okti', 'qwqw', 12, 'Laki-Laki', 'Tidak Sekolah', 'PNS', '082280524264', '123'),
(7, 'entodd', 'polsri', 20, 'Laki-Laki', 'Tidak Sekolah', 'PNS', '11111111', '1111'),
(9, 'man', 'wali', 12, 'Laki-Laki', 'Tidak Sekolah', 'PNS', '57689', 'hjhh'),
(10, 'SDFD', 'SDFDSF', 121, 'Laki-Laki', 'Tidak Sekolah', 'PNS', '123123', '123'),
(11, 'WERRE', 'SDDF', 121, 'Laki-Laki', 'Tidak Sekolah', 'PNS', '1212', '123'),
(12, 'QWEQWE', 'QWEWQE', 1212, 'Laki-Laki', 'Tidak Sekolah', 'PNS', '12121', '123'),
(13, 'SADSADSA', 'QEWEW', 12, 'Laki-Laki', 'Tidak Sekolah', 'PNS', '121212', '123'),
(14, 'QWEWQE', 'EWQWE', 121, 'Laki-Laki', 'Tidak Sekolah', 'PNS', '123123', '123'),
(16, 'ERWER', 'EREWR', 121, 'Laki-Laki', 'Tidak Sekolah', 'PNS', '123123', '123'),
(18, 'rahman', 'walikota', 12, 'Laki-Laki', 'Tidak Sekolah', 'PNS', '1234567890', '1234567890'),
(19, 'agung', 'polsri', 12, 'Laki-Laki', 'SMP/SLTP', 'TNI/POLRI', '0182081', '123'),
(20, 'mimi', 'polsri', 26, 'Perempuan', 'SARJANA(S1)', 'PNS', '12345', '12345'),
(21, 'evi', 'polsri', 17, 'Perempuan', 'PASCA SARJANA(S2/S3)', 'PELAJAR/MAHASISWA', '081222222', '123'),
(22, 'wahyu', 'bina darma', 13, 'Laki-Laki', 'DIPLOMA (D1/D2/D3/D4)', 'TNI/POLRI', '12345', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `tbl_kuisioner`
--
ALTER TABLE `tbl_kuisioner`
  ADD PRIMARY KEY (`id_kuisioner`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `tbl_kuisioner`
--
ALTER TABLE `tbl_kuisioner`
  MODIFY `id_kuisioner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
