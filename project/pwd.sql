-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Des 2019 pada 08.12
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pwd`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pwd2`
--

CREATE TABLE `pwd2` (
  `nim` varchar(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `jenis_kelamin` enum('l','p') DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `asal` varchar(50) DEFAULT NULL,
  `ttl` date DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pwd2`
--

INSERT INTO `pwd2` (`nim`, `username`, `jenis_kelamin`, `alamat`, `asal`, `ttl`, `email`) VALUES
('123456', 'UAD', 'l', 'yogyakarta', 'yogyakarta', '2019-12-04', 'uad@gmail.com'),
('1234567890', 'TIF', 'p', 'kampus4uad', 'Purworejo, Jawa Tengah', '2019-12-12', 'tif@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_lengkap` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `password`, `nama_lengkap`, `email`, `level`) VALUES
(1, 'gontang01', 'gntang01', 'gontang02@gmail.com', 'dosen'),
(8, 'gontang', 'gontang', 'gontangprakasa02@gmail.com', 'mahasiswa');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pwd2`
--
ALTER TABLE `pwd2`
  ADD PRIMARY KEY (`nim`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
