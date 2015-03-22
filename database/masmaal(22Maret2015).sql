-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 22, 2015 at 11:25 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `masmaal`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_transaksi`
--

CREATE TABLE IF NOT EXISTS `data_transaksi` (
  `FLAG` varchar(1) NOT NULL,
  `NO_TRANSAKSI` varchar(20) NOT NULL,
  `USER_ID` varchar(30) NOT NULL,
  `KODE_KATEGORI` varchar(10) NOT NULL,
  `NAMA_PEMASUKAN` varchar(50) NOT NULL,
  `NAMA_PENGELUARAN` varchar(50) NOT NULL,
  `TANGGAL` date NOT NULL,
  `MASUK` int(50) NOT NULL,
  `KELUAR` int(50) NOT NULL,
  `KETERANGAN` varchar(200) NOT NULL,
  `BULAN_LAPORAN` varchar(10) NOT NULL,
  `TAHUN_LAPORAN` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_transaksi`
--


-- --------------------------------------------------------

--
-- Table structure for table `data_transaksi_donatur`
--

CREATE TABLE IF NOT EXISTS `data_transaksi_donatur` (
  `ID_TRANSAKSI` int(20) NOT NULL,
  `USER_ID` varchar(30) NOT NULL,
  `TANGGAL_TRANSAKSI` date NOT NULL,
  `NAMA_DONATUR` varchar(50) NOT NULL,
  `JUMLAH_DONASI_L` bigint(20) NOT NULL,
  `JUMLAH_DONASI_TL` bigint(20) NOT NULL,
  `KODE_DONATUR` varchar(50) NOT NULL,
  `KETERANGAN` varchar(50) NOT NULL,
  `BULAN_LAPORAN` varchar(10) NOT NULL,
  `TAHUN_LAPORAN` varchar(20) NOT NULL,
  PRIMARY KEY (`ID_TRANSAKSI`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_transaksi_donatur`
--

INSERT INTO `data_transaksi_donatur` (`ID_TRANSAKSI`, `USER_ID`, `TANGGAL_TRANSAKSI`, `NAMA_DONATUR`, `JUMLAH_DONASI_L`, `JUMLAH_DONASI_TL`, `KODE_DONATUR`, `KETERANGAN`, `BULAN_LAPORAN`, `TAHUN_LAPORAN`) VALUES
(1, 'm', '2015-03-30', 'Muhammad', 5000000, 0, '1', 'sudah membayar', '03', '2015'),
(2, 'm', '2015-03-08', 'Muhammad', 10000, 0, '1', 'sudah', '03', '2015'),
(3, 'm', '2015-03-16', 'Afrizal', 0, 20000000, '2', 'akan ditambah  2 hari lagi', '03', '2015'),
(4, 'm', '2015-04-01', 'Reza', 0, 10000000, '2', 'donasi dititipkan ke reza oleh afrizal', '04', '2015');

-- --------------------------------------------------------

--
-- Table structure for table `dim_time`
--

CREATE TABLE IF NOT EXISTS `dim_time` (
  `ID_TIME` varchar(10) NOT NULL,
  `BULAN` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dim_time`
--

INSERT INTO `dim_time` (`ID_TIME`, `BULAN`) VALUES
('01', 'Januari'),
('02', 'Februari'),
('03 ', 'Maret'),
('04', 'April'),
('05', 'Mei'),
('06', 'Juni'),
('07', 'Juli'),
('08', 'Agustus'),
('09', 'September'),
('10', 'Oktober'),
('11', 'November'),
('12 ', 'Desember');

-- --------------------------------------------------------

--
-- Table structure for table `kategory_donatur`
--

CREATE TABLE IF NOT EXISTS `kategory_donatur` (
  `KODE_DONATUR` varchar(50) NOT NULL,
  `NAMA_DONATUR` varchar(50) NOT NULL,
  `JUMLAH_DONASI` bigint(20) NOT NULL,
  `KETERANGAN` varchar(100) NOT NULL,
  PRIMARY KEY (`KODE_DONATUR`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategory_donatur`
--

INSERT INTO `kategory_donatur` (`KODE_DONATUR`, `NAMA_DONATUR`, `JUMLAH_DONASI`, `KETERANGAN`) VALUES
('1', 'Muhammad', 5000000, 'Setiap tanggal 5'),
('2', 'Afrizal', 7000000, 'Setiap hari Minggu');

-- --------------------------------------------------------

--
-- Table structure for table `kategory_pemasukan`
--

CREATE TABLE IF NOT EXISTS `kategory_pemasukan` (
  `KODE_PEMASUKAN` varchar(50) NOT NULL,
  `NAMA_PEMASUKAN` varchar(50) NOT NULL,
  PRIMARY KEY (`KODE_PEMASUKAN`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategory_pemasukan`
--

INSERT INTO `kategory_pemasukan` (`KODE_PEMASUKAN`, `NAMA_PEMASUKAN`) VALUES
('4200', 'INFAQ DARI CELENGAN JUMAT'),
('4300', 'INFAQ DARI CELENGAN RENOVASI'),
('4400', 'INFAQ UNTUK PROGRAM'),
('4500', 'PEMASUKAN LAIN-LAIN');

-- --------------------------------------------------------

--
-- Table structure for table `kategory_pengeluaran`
--

CREATE TABLE IF NOT EXISTS `kategory_pengeluaran` (
  `KODE_PENGELUARAN` varchar(50) NOT NULL,
  `NAMA_PENGELUARAN` varchar(50) NOT NULL,
  PRIMARY KEY (`KODE_PENGELUARAN`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategory_pengeluaran`
--

INSERT INTO `kategory_pengeluaran` (`KODE_PENGELUARAN`, `NAMA_PENGELUARAN`) VALUES
('5103', 'KEPERLUAN KANTOR'),
('5101', 'GAJI KARYAWAN'),
('5104', 'TRANSPORTASI'),
('5105', 'RENOVASI'),
('5106', 'DAKWAH'),
('5107', 'AKOMODASI'),
('5108', 'KONSUMSI'),
('5109', 'BIAYA TELEPON'),
('5110', 'PULSA SMS CENTER'),
('5111', 'BIAYA ADMINISTRASI BANK'),
('5112', 'BIAYA LAIN-LAIN');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
  `SALES_ID` int(10) NOT NULL,
  `NO_KTP_PEGAWAI` varchar(50) NOT NULL,
  `NAMA_PEGAWAI` varchar(100) NOT NULL,
  `USERNAME_PEGAWAI` varchar(100) NOT NULL,
  `PASSWORD_PEGAWAI` varchar(20) NOT NULL,
  `TEMPAT_LAHIR` varchar(50) DEFAULT NULL,
  `TANGGAL_LAHIR` date DEFAULT NULL,
  `HAK_AKSES_PEGAWAI` varchar(20) NOT NULL,
  `STATUS_PEGAWAI` varchar(20) NOT NULL,
  `STATUS_POSISI` varchar(50) NOT NULL,
  `ALAMAT_PEGAWAI` varchar(100) DEFAULT NULL,
  `NO_TELP_PEGAWAI` varchar(20) NOT NULL,
  `DATE_JOIN` date NOT NULL,
  PRIMARY KEY (`SALES_ID`),
  UNIQUE KEY `USERNAME_PEGAWAI` (`USERNAME_PEGAWAI`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`SALES_ID`, `NO_KTP_PEGAWAI`, `NAMA_PEGAWAI`, `USERNAME_PEGAWAI`, `PASSWORD_PEGAWAI`, `TEMPAT_LAHIR`, `TANGGAL_LAHIR`, `HAK_AKSES_PEGAWAI`, `STATUS_PEGAWAI`, `STATUS_POSISI`, `ALAMAT_PEGAWAI`, `NO_TELP_PEGAWAI`, `DATE_JOIN`) VALUES
(1, '123912309812432134', 'Muhammad', 'm', '1', 'Surabaya', '1950-01-01', 'Admin', 'Aktif', 'REGIONAL HEAD', 'Dinoyo 51', '085731600665', '2013-08-19');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
