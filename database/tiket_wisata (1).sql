-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Jun 2022 pada 16.25
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tiket_wisata`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pemesanan`
--

CREATE TABLE `tb_pemesanan` (
  `IDPemesanan` int(5) NOT NULL,
  `IDWisata` int(5) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `tanggal_kunjungan` date NOT NULL,
  `pengunjung_dewasa` int(2) NOT NULL,
  `pengunjung_anak` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pemesanan`
--

INSERT INTO `tb_pemesanan` (`IDPemesanan`, `IDWisata`, `nama_lengkap`, `nik`, `no_hp`, `tanggal_kunjungan`, `pengunjung_dewasa`, `pengunjung_anak`) VALUES
(18, 1, 'Ahmad Harun', '1504041108000005', '085156194420', '2022-07-08', 1, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_wisata`
--

CREATE TABLE `tb_wisata` (
  `IDWisata` int(2) NOT NULL,
  `nama_wisata` varchar(50) NOT NULL,
  `review_wisata` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_wisata`
--

INSERT INTO `tb_wisata` (`IDWisata`, `nama_wisata`, `review_wisata`) VALUES
(1, 'Candi Muara Takus', 'https://www.youtube.com/watch?v=IdeK1SF79HQ'),
(2, 'Istana Siak Sri Indrapura', 'https://www.youtube.com/watch?v=72O9TfUCCjc'),
(3, 'Riau Fantasi', 'https://www.youtube.com/watch?v=y6wlbByNKik');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  ADD PRIMARY KEY (`IDPemesanan`);

--
-- Indeks untuk tabel `tb_wisata`
--
ALTER TABLE `tb_wisata`
  ADD PRIMARY KEY (`IDWisata`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  MODIFY `IDPemesanan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `tb_wisata`
--
ALTER TABLE `tb_wisata`
  MODIFY `IDWisata` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
