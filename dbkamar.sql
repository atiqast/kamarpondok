-- phpMyAdmin SQL Dump
-- version 4.7.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 20 Jul 2019 pada 07.59
-- Versi server: 10.1.29-MariaDB
-- Versi PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbkamar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(15) NOT NULL,
  `namad` varchar(50) DEFAULT NULL,
  `namab` varchar(50) DEFAULT NULL,
  `kontak` varchar(13) DEFAULT NULL,
  `jk` enum('L','P') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`, `level`, `namad`, `namab`, `kontak`, `jk`) VALUES
(0, 'admin', 'admin', 'super', 'ad', 'min', '0811', 'L'),
(1, 'admin', 'admin', 'super', 'ad', 'min', '0811', 'L');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kamar`
--

CREATE TABLE `kamar` (
  `idkmr` int(11) NOT NULL,
  `namakmr` varchar(30) NOT NULL,
  `dayatampung` int(2) NOT NULL,
  `karpet` varchar(2) NOT NULL,
  `kasur` varchar(2) NOT NULL,
  `almari` varchar(2) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kamar`
--

INSERT INTO `kamar` (`idkmr`, `namakmr`, `dayatampung`, `karpet`, `kasur`, `almari`, `keterangan`) VALUES
(15, 'ahmad dhlan', 8, 'T', 'T', 'T', 'diisi sana sini'),
(16, 'danisd', 4, 'T', 'Y', 'T', 'bismillah'),
(18, 'baru', 6, 'Y', 'Y', 'Y', 'masih dirapikan'),
(19, 'makanan asing', 5, 'T', 'Y', 'Y', 'makanan gudang'),
(21, 'bismillah', 5, 'T', 'Y', 'Y', 'mudah'),
(24, 'ff', 2, 'T', 'T', 'Y', 'fff'),
(25, 'ff', 2, 'T', 'T', 'Y', 'fff'),
(28, 'ha', 3, 'Y', 'T', 'T', 'u'),
(29, 'bijak', 1, 'Y', 'Y', 'Y', 'ya'),
(30, 'bijak', 1, 'Y', 'Y', 'Y', 'ya');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`idkmr`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kamar`
--
ALTER TABLE `kamar`
  MODIFY `idkmr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
