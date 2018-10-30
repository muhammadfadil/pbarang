-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2018 at 06:21 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

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
-- Table structure for table `tbl_login`
--

CREATE TABLE IF NOT EXISTS `tbl_login` (
  `id` int(10) NOT NULL,
  `username` varchar(8) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pinjambarang`
--

CREATE TABLE IF NOT EXISTS `tbl_pinjambarang` (
  `id_pb` int(11) NOT NULL,
  `no_spt` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `barang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE IF NOT EXISTS `tb_barang` (
`id_barang` int(11) NOT NULL,
  `kode_barang` varchar(50) DEFAULT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `merk` varchar(50) NOT NULL,
  `no_seri` varchar(50) DEFAULT NULL,
  `kondisi_barang` varchar(50) NOT NULL,
  `unit` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `kode_barang`, `nama_barang`, `merk`, `no_seri`, `kondisi_barang`, `unit`) VALUES
(1, '30303010437-', 'spektrum analyzer', 'anritsu ms 2720t', '1536028', 'baik', 1),
(2, '3060324005', 'antena dipole', 'anritsu mp534b', '', 'baik', 1),
(3, NULL, 'gps garmin', 'montana 680', '30303010726', 'baik', 1),
(4, NULL, 'kabel 10 meter', '', NULL, 'baik', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pinjambarang`
--
ALTER TABLE `tbl_pinjambarang`
 ADD PRIMARY KEY (`id_pb`);

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
 ADD PRIMARY KEY (`id_barang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
