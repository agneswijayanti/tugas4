-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2020 at 03:49 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `larahub`
--

-- --------------------------------------------------------

--
-- Table structure for table `jawaban`
--

CREATE TABLE `jawaban` (
  `idjawaban` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `tgl_dibuat` date NOT NULL,
  `tgl_diperbarui` date NOT NULL,
  `idpertanyaan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jawaban`
--

INSERT INTO `jawaban` (`idjawaban`, `judul`, `isi`, `tgl_dibuat`, `tgl_diperbarui`, `idpertanyaan`) VALUES
(1, 'laravel 1sds', 'nama file anda harus file.blade.php', '2020-07-01', '0000-00-00', 1),
(2, 'laravel1 view tidak tampil', 'karena nama file anda salah, harus ada bladenya', '2020-07-01', '0000-00-00', 1),
(3, 'scdsd', 'sfdsf', '2020-07-02', '2020-07-02', 1),
(4, 'sdsdsdsd', 'cdfvdfd', '2020-07-02', '2020-07-02', 1),
(5, 'hay', 'xfdsf', '2020-07-02', '2020-07-02', 1),
(6, 'sdsdsdsd', 'dfcdfd', '2020-07-02', '2020-07-02', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `idpertanyaan` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `tgl_dibuat` date NOT NULL,
  `tgl_diperbarui` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pertanyaan`
--

INSERT INTO `pertanyaan` (`idpertanyaan`, `judul`, `isi`, `tgl_dibuat`, `tgl_diperbarui`) VALUES
(1, 'laravel 1', 'kenapa saya tidak bisa mengambil view?', '2020-07-01', '0000-00-00'),
(2, 'laravel1', 'kenapa saya tidak bisa menggunakan route?', '2020-07-01', '2020-07-02'),
(3, 'hay', 'sdcsd', '2020-07-02', '2020-07-02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jawaban`
--
ALTER TABLE `jawaban`
  ADD PRIMARY KEY (`idjawaban`);

--
-- Indexes for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD PRIMARY KEY (`idpertanyaan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jawaban`
--
ALTER TABLE `jawaban`
  MODIFY `idjawaban` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  MODIFY `idpertanyaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
