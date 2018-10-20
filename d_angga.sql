-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Okt 2018 pada 05.05
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `d_angga`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_angga`
--

CREATE TABLE `t_angga` (
  `Nama` varchar(20) NOT NULL,
  `NIM` bigint(20) NOT NULL,
  `Tgl_lahir` date NOT NULL,
  `Jenis_kelamin` text NOT NULL,
  `Program_studi` text NOT NULL,
  `Fakultas` text NOT NULL,
  `Asal` text NOT NULL,
  `Moto_hidup` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_angga`
--

INSERT INTO `t_angga` (`Nama`, `NIM`, `Tgl_lahir`, `Jenis_kelamin`, `Program_studi`, `Fakultas`, `Asal`, `Moto_hidup`) VALUES
('Angga', 6701174012, '1999-08-06', 'Laki-Laki', 'Sistem Informasi', 'FIT', 'Semarang', 'Semangat Ini Untukmu!!!!!!!!'),
('Rayan', 6701170061, '1999-06-15', 'Perempuan', 'Manajemen Informatika', 'FIT', 'Majalahay', 'Bencong Jiwaku'),
('Yane', 6701174044, '2000-02-12', 'Laki-Laki', 'Teknik Informatika', 'FRI', 'maedan', 'semangat');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
