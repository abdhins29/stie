-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2019 at 04:03 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_stie`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lulus`
--

CREATE TABLE IF NOT EXISTS `tbl_lulus` (
  `nim` int(12) NOT NULL,
  `nmmhs` varchar(30) NOT NULL,
  `noreglus` int(14) NOT NULL,
  `ipk` int(4) NOT NULL,
  `predikat` varchar(20) NOT NULL,
  `nmprodi` varchar(15) NOT NULL,
  `tahunlulus` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tracer`
--

CREATE TABLE IF NOT EXISTS `tbl_tracer` (
  `nmmhs` varchar(30) NOT NULL,
  `kodept` int(6) NOT NULL,
  `namapt` varchar(50) NOT NULL,
  `tahunlulus` year(4) NOT NULL,
  `kodeprodi` int(5) NOT NULL,
  `nmprodi` varchar(15) NOT NULL,
  `nohp` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `k1a` varchar(200) NOT NULL,
  `k1b` varchar(200) NOT NULL,
  `k1c` varchar(200) NOT NULL,
  `k1d` varchar(200) NOT NULL,
  `k1e` varchar(200) NOT NULL,
  `k1f` varchar(200) NOT NULL,
  `k1g` varchar(200) NOT NULL,
  `k2a` varchar(200) NOT NULL,
  `k3a` varchar(200) NOT NULL,
  `k4a` varchar(200) NOT NULL,
  `k5a` varchar(200) NOT NULL,
  `k6a` varchar(200) NOT NULL,
  `k7a` varchar(200) NOT NULL,
  `k8a` varchar(200) NOT NULL,
  `k9a` varchar(200) NOT NULL,
  `k10a` varchar(200) NOT NULL,
  `k11a` varchar(200) NOT NULL,
  `k12a` varchar(200) NOT NULL,
  `k13a` varchar(200) NOT NULL,
  `k14a` varchar(200) NOT NULL,
  `k15a` varchar(200) NOT NULL,
  `k16a` varchar(200) NOT NULL,
  `k17a` varchar(200) NOT NULL,
  `k18a` varchar(200) NOT NULL,
  `k19a` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
`id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 'ADMIN'),
(2, 'user', 'user', 'USER');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_lulus`
--
ALTER TABLE `tbl_lulus`
 ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `tbl_tracer`
--
ALTER TABLE `tbl_tracer`
 ADD PRIMARY KEY (`nmmhs`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
