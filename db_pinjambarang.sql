-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 19 Nov 2018 pada 01.58
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_pinjambarang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_detailpb`
--

CREATE TABLE IF NOT EXISTS `tbl_detailpb` (
  `no_spt` varchar(10) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `unit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_detailpb`
--

INSERT INTO `tbl_detailpb` (`no_spt`, `id_barang`, `unit`) VALUES
('1234567891', 2, 1),
('1234567890', 2, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_login`
--

CREATE TABLE IF NOT EXISTS `tbl_login` (
`id` int(10) NOT NULL,
  `username` varchar(8) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `tbl_login`
--

INSERT INTO `tbl_login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pinjambarang`
--

CREATE TABLE IF NOT EXISTS `tbl_pinjambarang` (
  `no_spt` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `nama1` varchar(30) NOT NULL,
  `nama2` varchar(30) NOT NULL,
  `nama3` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pinjambarang`
--

INSERT INTO `tbl_pinjambarang` (`no_spt`, `tanggal`, `nama1`, `nama2`, `nama3`) VALUES
('1234567890', '2018-11-30', 'siti', 'surti', 'lucky'),
('1234567891', '2018-11-30', 'siti', 'surti', 'lucky');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barang`
--

CREATE TABLE IF NOT EXISTS `tb_barang` (
`id_barang` int(11) NOT NULL,
  `kode_barang` varchar(50) DEFAULT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `merk` varchar(50) NOT NULL,
  `no_seri` varchar(50) DEFAULT NULL,
  `kondisi_barang` varchar(50) NOT NULL,
  `unit` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `kode_barang`, `nama_barang`, `merk`, `no_seri`, `kondisi_barang`, `unit`) VALUES
(1, '30303010437-', 'spektrum analyzer', 'anritsu ms 2720t', '1536028', 'Baik', 1),
(2, '3060324005', 'antena dipole', 'anritsu mp534b', '', 'baik', 1),
(3, NULL, 'gps garmin', 'montana 680', '30303010726', 'baik', 1),
(4, NULL, 'kabel 10 meter', '', NULL, 'baik', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_detail`
--
CREATE TABLE IF NOT EXISTS `view_detail` (
`no_spt` varchar(10)
,`id_barang` int(11)
,`kode_barang` varchar(50)
,`nama_barang` varchar(50)
,`merk` varchar(50)
,`no_seri` varchar(50)
,`kondisi_barang` varchar(50)
,`unit` int(11)
);
-- --------------------------------------------------------

--
-- Struktur untuk view `view_detail`
--
DROP TABLE IF EXISTS `view_detail`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_detail` AS select `a1`.`no_spt` AS `no_spt`,`a1`.`id_barang` AS `id_barang`,`a2`.`kode_barang` AS `kode_barang`,`a2`.`nama_barang` AS `nama_barang`,`a2`.`merk` AS `merk`,`a2`.`no_seri` AS `no_seri`,`a2`.`kondisi_barang` AS `kondisi_barang`,`a1`.`unit` AS `unit` from (`tbl_detailpb` `a1` join `tb_barang` `a2`) where (`a1`.`id_barang` = `a2`.`id_barang`);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_detailpb`
--
ALTER TABLE `tbl_detailpb`
 ADD KEY `id_barang` (`id_barang`), ADD KEY `no_spt` (`no_spt`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pinjambarang`
--
ALTER TABLE `tbl_pinjambarang`
 ADD PRIMARY KEY (`no_spt`), ADD KEY `no_spt` (`no_spt`);

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
 ADD PRIMARY KEY (`id_barang`), ADD KEY `id_barang` (`id_barang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_detailpb`
--
ALTER TABLE `tbl_detailpb`
ADD CONSTRAINT `tbl_detailpb_ibfk_2` FOREIGN KEY (`id_barang`) REFERENCES `tb_barang` (`id_barang`),
ADD CONSTRAINT `tbl_detailpb_ibfk_3` FOREIGN KEY (`no_spt`) REFERENCES `tbl_pinjambarang` (`no_spt`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
