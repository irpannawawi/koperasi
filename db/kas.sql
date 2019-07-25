-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 31 Okt 2017 pada 14.41
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kas`
--

CREATE TABLE IF NOT EXISTS `kas` (
`kode` int(11) NOT NULL,
  `keterangan` varchar(300) NOT NULL,
  `tgl` date NOT NULL,
  `jumlah` varchar(10) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `keluar` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=135 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kas`
--

INSERT INTO `kas` (`kode`, `keterangan`, `tgl`, `jumlah`, `jenis`, `keluar`) VALUES
(114, 'Pendapatan Harian', '2017-09-14', '180000', 'Masuk', ''),
(116, 'Pendapatan Harian', '2017-09-15', '610000', 'Masuk', ''),
(117, 'Pendapatan Harian', '2017-09-16', '210000', 'Masuk', ''),
(118, 'Pendapatan Harian', '2017-09-18', '1810000', 'Masuk', ''),
(119, 'Pendapatan Harian', '2017-09-19', '250000', 'Masuk', ''),
(120, 'Pendapatan Harian', '2017-09-20', '220000', 'Masuk', ''),
(121, 'Beli Keranjang 3bh (Rp.40,000,-/bh)', '2017-09-19', '', 'Keluar', '120000'),
(122, 'Pendapatan Harian', '2017-09-23', '115000', 'Masuk', ''),
(123, 'Beli Kemoceng 5bh (Rp.22,000,-/bh)', '2017-09-24', '', 'Keluar', '110000'),
(124, 'Beli Buku Gambar A4 Sidu 10pk (Rp.11,500,-/pk)', '2017-10-09', '', 'Keluar', '115000'),
(125, 'Beli Refil Pen Fancy 5pk (Rp.10,000,-/pk)', '2017-10-09', '', 'Keluar', '50000'),
(126, 'Beli Gunting Tren MM 2bh (Rp.25,000,-/bh)', '2017-10-09', '', 'Keluar', '50000'),
(127, 'Beli Buku Gambar A4 Sidu 7pk (Rp.11,500,-/pk)', '2017-10-10', '', 'Keluar', '80500'),
(128, 'Beli Pena Joyko Tryco 3kotak (Rp.40,000,-/kotak)', '2017-10-10', '', 'Keluar', '120000'),
(129, 'Beli Pena Yoker Fensi 3kotak (Ro.15,500,-/kotak)', '2017-10-10', '', 'Keluar', '46500'),
(130, 'Beli Buku Tulis Sidu 58 4pk (Rp.26,000,-/pk)', '2017-10-10', '', 'Keluar', '104000'),
(131, 'Pendapatan Harian', '2017-10-11', '141000', 'Masuk', ''),
(132, 'Pendapatan Harian', '2017-10-12', '82000', 'Masuk', ''),
(133, 'Pendapatan Harian', '2017-10-17', '315000', 'Masuk', ''),
(134, 'Pendapatan Harian', '2017-10-21', '427000', 'Masuk', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE IF NOT EXISTS `login` (
`kd_user` int(11) NOT NULL,
  `username` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`kd_user`, `username`, `password`, `nama`, `alamat`) VALUES
(12, 'tegar', 'tegarsantosa', 'Muhammad Tegar Santo', 'Jl. Palapa 3 No. 45 15A Kota Metro');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kas`
--
ALTER TABLE `kas`
 ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`kd_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kas`
--
ALTER TABLE `kas`
MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=135;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
MODIFY `kd_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
