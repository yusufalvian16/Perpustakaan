-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Jan 2023 pada 15.12
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `penulis_buku` varchar(50) NOT NULL,
  `sinopsis` varchar(500) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id_buku`, `judul_buku`, `penulis_buku`, `sinopsis`, `tahun`, `stok`) VALUES
(3, 'Ensiklopedi Gunungkidul: Dari Mitos menggapai Etos', 'Kantor Perpustakaan dan Arsip Daerah Kabupaten Gun', 'Ensiklopedi Gunungkidul ini merupakan katarsis antara alam, manusia, dan kebudayaan yang dalam waktu ribuan tahun telah membentuk memori kolektif masyarakat Kabupaten Gunungkidul, Daerah Istimewa Yogyakarta. Keindahan pantai, pegunungan, gua, hutan hingga tradisi masyarakat dari masa purba hingga tersentuh kebudayaan modern saat ini, terekam dalam buku ensiklopedi ini.\r\n\r\nMelalui buku ini, terkuak jati diri dan identitas sosial manusia Indonesia yang merupakan anugerah Tuhan Yang Maha Kuasa. Akh', '2013', 2),
(5, 'Ibu Memimpin Bumi Handayani Dengan Hati', 'Satriyo Wicaksono', '-', '2020', 21),
(6, 'Harmoni Sang Wakil', 'Satriyo Wicaksono', '-', '2020', 4),
(7, 'Celoteh Dari Negeri Batu', 'Forum Penulis Negeri Batu', '-', '2013', 6),
(8, 'Geopark Nasional Gunung Sewu, Sebingkai Potret Warisan Bumi', 'Hanang Samodra', '-', '2015', 7),
(9, 'Menguak Sejarah Melacak Hari Jadi Kabupaten Gunungkidul', 'Pemerintah Kabupaten Daerah Tingkat II Gunungkidul', '-', '-', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(8) NOT NULL,
  `email` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `nama`, `password`, `email`, `jenis_kelamin`, `keterangan`) VALUES
('mugammadilham12', 'Muhammad Ilham Abdu Sholeh', '12345678', 'muhammadilham8353@gmail.com', 'Laki-laki', '-'),
('muhammadimam', 'Muhammad Nurul Imam', '12345678', 'muhammadimam12@gmail.com', 'Laki-laki', '-'),
('yusufalvian', 'Yusuf Alvian', '12345678', 'yusufalvian16@gmail.com', 'Laki-laki', '-'),
('etik', 'Etik Nadfizah', '12345678', 'etiknadfz@gmail.com', 'Perempuan', '-');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
