-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jun 2021 pada 09.31
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
-- Database: `dataanggota`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabelanggota`
--

CREATE TABLE `tabelanggota` (
  `nama` varchar(200) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `jeniskelamin` enum('Pria','Wanita') NOT NULL,
  `tanggal` int(2) NOT NULL,
  `bulan` int(2) NOT NULL,
  `tahun` int(4) NOT NULL,
  `negara` varchar(200) NOT NULL,
  `kota` enum('Banda Aceh','Jakarta','Yogyakarta','Surabaya') NOT NULL,
  `biografi` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabelanggota`
--

INSERT INTO `tabelanggota` (`nama`, `username`, `password`, `email`, `jeniskelamin`, `tanggal`, `bulan`, `tahun`, `negara`, `kota`, `biografi`) VALUES
('Ahmad Bilal', 'bilalahmad567', 'GalaxyNote21', 'ahmadbilal@rocketmail.com', 'Pria', 13, 7, 2001, 'Brunei Darussalam', 'Banda Aceh', 'Saya seorang mahasiswa.'),
('Ahmad Faris', 'farisahmad890', 'qwerty', 'farisahmad@gmail.com', 'Pria', 13, 1, 2004, 'Indonesia', 'Yogyakarta', 'Saya adalah seorang mahasiswa yang baik.'),
('Fiza Ahmad', 'fizmad456', 'madfiz23', 'fizaahmad@gmail.com', 'Wanita', 13, 9, 1999, 'Indonesia', 'Surabaya', 'Saya adalah seorang warga negara yang baik.'),
('Alfie Ramadhan', 'ilfieeeee', 'alfieram789', 'alfimafhan@yahoo.com', 'Pria', 12, 1, 2004, 'Indonesia', 'Surabaya', 'Saya seorang yang unik dan mudah bergaul.'),
('Prabowo Subianto', 'jokowi', 'jokowi1234', 'jokowi@gmail.com', 'Pria', 21, 6, 1961, 'Indonesia', 'Banda Aceh', 'Saya adalah seorang calon presiden sebelumnya.'),
('Muhammad Urfan Adjie Pratama', 'pratama47', 'pratama47', 'pratamaurfan@gmail.com', 'Pria', 17, 1, 2002, 'Indonesia', 'Banda Aceh', 'Saya seorang mahasiswa UTY.'),
('Kim Tae Hyung', 'taehyung234', 'hyungtae567', 'kimtaehyung@yahoo.com', 'Pria', 12, 2, 2001, 'Korea', 'Jakarta', 'Saya sebagai artis kpop.'),
('Kim Young Dae', 'youngdae890', 'daeyum567', 'youngde@yahoo.com', 'Pria', 14, 23, 1997, 'Korea', 'Yogyakarta', 'Saya seorang mahasiswa.');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tabelanggota`
--
ALTER TABLE `tabelanggota`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
