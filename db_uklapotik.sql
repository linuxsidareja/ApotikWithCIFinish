-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2017 at 03:04 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_uklapotik`
--
CREATE DATABASE IF NOT EXISTS `db_uklapotik` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_uklapotik`;

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `USERNAME` varchar(255) NOT NULL,
  `NIP_KARYAWAN` int(11) DEFAULT NULL,
  `PASSWORD` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`USERNAME`),
  KEY `FK_RELATIONSHIP_2` (`NIP_KARYAWAN`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`USERNAME`, `NIP_KARYAWAN`, `PASSWORD`) VALUES
('admin', 10, 'admin'),
('asdf', 11, 'asdf'),
('hendro', 6, 'admin'),
('prisma', 8, 'admin'),
('superadmin', 1, 'superadmin');

-- --------------------------------------------------------

--
-- Table structure for table `data_transaksi`
--

CREATE TABLE IF NOT EXISTS `data_transaksi` (
  `ID_TRANSAKSI` int(11) NOT NULL AUTO_INCREMENT,
  `NIP_KARYAWAN` int(11) DEFAULT NULL,
  `NAMA_PEMBELI` varchar(255) DEFAULT NULL,
  `TGL_BELI` varchar(255) DEFAULT NULL,
  `TOTAL_HARGA` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_TRANSAKSI`),
  KEY `FK_RELATIONSHIP_4` (`NIP_KARYAWAN`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `data_transaksi`
--

INSERT INTO `data_transaksi` (`ID_TRANSAKSI`, `NIP_KARYAWAN`, `NAMA_PEMBELI`, `TGL_BELI`, `TOTAL_HARGA`) VALUES
(5, 1, 'Setiawan Dwi', '2017-05-22', 10000),
(6, 4, 'sadsadsasdasad', '2017-05-22', 782000),
(7, 6, 'Pembeli Hendro', '2017-05-22', 25000),
(8, 6, 'Pembeli Hendro', '2017-05-22', 345000),
(9, 6, 'Pembeli Hendro', '2017-05-22', 5000),
(10, 6, 'wawan', '2017-05-23', 34000),
(11, 1, 'wak breng', '2017-05-23', 351000),
(12, 6, 'hendro', '2017-05-23', 15000);

-- --------------------------------------------------------

--
-- Table structure for table `detil_transaksi`
--

CREATE TABLE IF NOT EXISTS `detil_transaksi` (
  `ID_TRANSAKSI` int(11) DEFAULT NULL,
  `ID_OBAT` int(11) DEFAULT NULL,
  `JUMLAH_PEMBELIAN` int(11) DEFAULT NULL,
  `NAM_OBAT` varchar(255) DEFAULT NULL,
  `HARGA_PEROBAT` int(11) DEFAULT NULL,
  KEY `FK_RELATIONSHIP_6` (`ID_TRANSAKSI`),
  KEY `FK_RELATIONSHIP_7` (`ID_OBAT`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detil_transaksi`
--

INSERT INTO `detil_transaksi` (`ID_TRANSAKSI`, `ID_OBAT`, `JUMLAH_PEMBELIAN`, `NAM_OBAT`, `HARGA_PEROBAT`) VALUES
(5, 1, 10, 'Paramex', 1000),
(6, 5, 23, 'asdasddsaasd', 34000),
(7, 6, 5, 'Bodrex Hendro', 5000),
(8, 6, 69, 'Bodrex Hendro', 5000),
(9, 6, 1, 'Bodrex Hendro', 5000),
(10, 1, 34, 'Paramex', 1000),
(11, 7, 78, 'Asam Mefenamat', 4500),
(12, 3, 5, 'Mixagrip Flu', 3000);

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE IF NOT EXISTS `karyawan` (
  `NIP_KARYAWAN` int(11) NOT NULL AUTO_INCREMENT,
  `NAMA_KARYAWAN` varchar(255) DEFAULT NULL,
  `FOTO_KARYAWAN` text,
  `JK_KARYAWAN` varchar(50) DEFAULT NULL,
  `ALAMAT_KARYAWAN` text,
  `TTL_KARYAWAN` date DEFAULT NULL,
  `STATUS_KARYAWAN` varchar(100) DEFAULT NULL,
  `ROLE_KARYAWAN` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`NIP_KARYAWAN`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`NIP_KARYAWAN`, `NAMA_KARYAWAN`, `FOTO_KARYAWAN`, `JK_KARYAWAN`, `ALAMAT_KARYAWAN`, `TTL_KARYAWAN`, `STATUS_KARYAWAN`, `ROLE_KARYAWAN`) VALUES
(1, 'setiawan dwi prasetiyo', 'foto.jpg', 'Laki-laki', 'Sidoarjo', '1999-11-29', 'aktif', 'superadmin'),
(3, 'Fandi Khusnu', '31.jpg', 'Laki-laki', 'Blitar', '1999-01-01', 'tidak aktif', 'admin'),
(4, 'shifa', '4.jpg', 'Perempuan', 'jakshdjkihasjkdhaskjda', '1995-12-23', 'tidak aktif', 'admin'),
(5, 'Hendro Karyawan', '6.jpg', 'Laki-laki', 'Malang', '1890-10-16', 'tidak aktif', 'superadmin'),
(6, 'Hendro Karyawan', '61.jpg', 'Laki-laki', 'Malang', '2017-01-01', 'aktif', 'superadmin'),
(8, 'Prisma Ratnadewi', '33.jpg', 'Perempuan', 'Jl. Raya Kedondong', '2000-01-23', 'aktif', 'superadmin'),
(10, 'hendro2 karyawan', '11.jpg', 'Laki-laki', 'akjshdhjsakd', '2017-01-01', 'aktif', 'admin'),
(11, 'asdasdad', '4.png', 'Laki-laki', 'saddsasadasd', '2017-01-01', 'aktif', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE IF NOT EXISTS `obat` (
  `ID_OBAT` int(11) NOT NULL AUTO_INCREMENT,
  `ID_SUPLIER` int(11) DEFAULT NULL,
  `PRODUSEN_OBAT` varchar(255) DEFAULT NULL,
  `HARGA_OBAT` int(11) DEFAULT NULL,
  `NAMA_OBAT` varchar(255) DEFAULT NULL,
  `STATUS` varchar(50) DEFAULT NULL,
  `FOTO_OBAT` text,
  `STOCK_OBAT` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_OBAT`),
  KEY `FK_RELATIONSHIP_9` (`ID_SUPLIER`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`ID_OBAT`, `ID_SUPLIER`, `PRODUSEN_OBAT`, `HARGA_OBAT`, `NAMA_OBAT`, `STATUS`, `FOTO_OBAT`, `STOCK_OBAT`) VALUES
(1, 1, 'Kimia Farma', 1000, 'Paramex', 'ada', '3.jpg', 20),
(2, 1, 'jhbasjhdbashjd', 8000, 'Oskadon', 'hapus', '31.jpg', 0),
(3, 5, 'Kimia Farma', 3000, 'Mixagrip Flu', 'ada', '1.jpg', 196),
(4, 1, 'adasdasd', 80000, 'asdasdas', 'hapus', '11.jpg', 0),
(5, 1, 'asdsasaddas', 34000, 'asdasddsaasd', 'hapus', '6.jpg', 0),
(6, 6, 'Kimia Farma', 5000, 'Bodrex Hendro', 'ada', '2.jpg', 68),
(7, 5, 'PT. Promedrahardjo Farmasi Industri', 4500, 'Asam Mefenamat', 'ada', '5.jpg', 10),
(8, 1, 'PT. Dankos Farma', 1500, 'Amoxicillin', 'ada', '61.jpg', 89);

-- --------------------------------------------------------

--
-- Table structure for table `suplier`
--

CREATE TABLE IF NOT EXISTS `suplier` (
  `ID_SUPLIER` int(11) NOT NULL AUTO_INCREMENT,
  `NAMA_SUPLIER` varchar(255) DEFAULT NULL,
  `ALAMAT_SUPLIER` text,
  `KOTA_SUPLIER` text,
  `TELP_SUPLIER` varchar(255) DEFAULT NULL,
  `STATUS_SUPLIER` varchar(20) NOT NULL,
  PRIMARY KEY (`ID_SUPLIER`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `suplier`
--

INSERT INTO `suplier` (`ID_SUPLIER`, `NAMA_SUPLIER`, `ALAMAT_SUPLIER`, `KOTA_SUPLIER`, `TELP_SUPLIER`, `STATUS_SUPLIER`) VALUES
(1, 'setiawan', 'Jl. Wijaya Kusuma 2', 'Sidoarjo', '0882176466332', 'aktif'),
(5, 'Prisma Ratnadewi', 'Jl. Raya Kedondong G1/12', 'Jember', '0856213819978', 'aktif'),
(6, 'Hendro Suplier', 'Sawojajar', 'Surabaya', '0873735638156', 'aktif'),
(7, 'akjshndjkash', 'sjhgdjkhasjkd', 'jkashdjkhas', '8923647826', 'tidak aktif'),
(8, 'Hendro2 Suplier', 'awojajar', 'malang', '0863872628', 'tidak aktif');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `FK_RELATIONSHIP_2` FOREIGN KEY (`NIP_KARYAWAN`) REFERENCES `karyawan` (`NIP_KARYAWAN`);

--
-- Constraints for table `data_transaksi`
--
ALTER TABLE `data_transaksi`
  ADD CONSTRAINT `FK_RELATIONSHIP_4` FOREIGN KEY (`NIP_KARYAWAN`) REFERENCES `karyawan` (`NIP_KARYAWAN`);

--
-- Constraints for table `detil_transaksi`
--
ALTER TABLE `detil_transaksi`
  ADD CONSTRAINT `FK_RELATIONSHIP_6` FOREIGN KEY (`ID_TRANSAKSI`) REFERENCES `data_transaksi` (`ID_TRANSAKSI`),
  ADD CONSTRAINT `FK_RELATIONSHIP_7` FOREIGN KEY (`ID_OBAT`) REFERENCES `obat` (`ID_OBAT`);

--
-- Constraints for table `obat`
--
ALTER TABLE `obat`
  ADD CONSTRAINT `FK_RELATIONSHIP_9` FOREIGN KEY (`ID_SUPLIER`) REFERENCES `suplier` (`ID_SUPLIER`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
