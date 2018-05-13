-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 14, 2018 at 12:52 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `i_siswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `is_siswa`
--

CREATE TABLE IF NOT EXISTS `is_siswa` (
  `npm` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `kelas` varchar(2) NOT NULL,
  `prodi` enum('S1','D3') NOT NULL,
  `matkul1` varchar(50) NOT NULL,
  `matkul2` varchar(50) NOT NULL,
  PRIMARY KEY (`npm`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `is_siswa`
--

INSERT INTO `is_siswa` (`npm`, `nama`, `kelas`, `prodi`, `matkul1`, `matkul2`) VALUES
('1617051059', 'Anastasya Cindy', 'A', 'S1', 'Multimedia', 'Pemrograman Sistem');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
