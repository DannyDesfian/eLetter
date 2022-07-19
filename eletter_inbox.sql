-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2017 at 08:13 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eletter_inbox`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `tglLaporan` varchar(50) NOT NULL,
  `laporan` varchar(300) NOT NULL,
  `upload` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kasie1`
--

CREATE TABLE `kasie1` (
  `id` int(10) NOT NULL,
  `nomor` varchar(50) NOT NULL,
  `tglSurat` varchar(50) NOT NULL,
  `perihal` varchar(50) NOT NULL,
  `ringkasan` varchar(300) NOT NULL,
  `tglDisposisi` varchar(50) NOT NULL,
  `isiDisposisi` varchar(300) NOT NULL,
  `upload` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kasie2`
--

CREATE TABLE `kasie2` (
  `id` int(10) NOT NULL,
  `nomor` varchar(50) NOT NULL,
  `tglSurat` varchar(50) NOT NULL,
  `perihal` varchar(50) NOT NULL,
  `ringkasan` varchar(50) NOT NULL,
  `tglDisposisi` varchar(50) NOT NULL,
  `isiDisposisi` varchar(50) NOT NULL,
  `upload` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kasie3`
--

CREATE TABLE `kasie3` (
  `id` int(10) NOT NULL,
  `nomor` varchar(50) NOT NULL,
  `tglSurat` varchar(50) NOT NULL,
  `perihal` varchar(50) NOT NULL,
  `ringkasan` varchar(50) NOT NULL,
  `tglDisposisi` varchar(50) NOT NULL,
  `isiDisposisi` varchar(50) NOT NULL,
  `upload` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kasie1`
--
ALTER TABLE `kasie1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kasie2`
--
ALTER TABLE `kasie2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kasie3`
--
ALTER TABLE `kasie3`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kasie1`
--
ALTER TABLE `kasie1`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kasie2`
--
ALTER TABLE `kasie2`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kasie3`
--
ALTER TABLE `kasie3`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
