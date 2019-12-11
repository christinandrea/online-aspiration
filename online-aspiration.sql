-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Nov 2019 pada 08.50
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online-aspiration`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` varchar(5) NOT NULL,
  `nama_admin` varchar(20) NOT NULL,
  `email_admin` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `email_admin`, `password`) VALUES
('A0001', 'Rea', 'rea@smktelkom-jkt.sch.id', 'reanana123'),
('A0002', 'Faiz', 'faiz@smktelkom-jkt.sch.id', ''),
('A0003', 'Mahesa', 'mahesa@smktelkom-jkt.sch.id', ''),
('A0004', 'Will ', 'will@smktelkom-jkt.sch.id', ''),
('A0005', 'Deva', 'deva@smktelkom-jkt.sch.id', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keluhan`
--

CREATE TABLE `keluhan` (
  `id_keluhan` varchar(5) NOT NULL,
  `jenis_keluhan` varchar(20) NOT NULL,
  `bidang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `keluhan`
--

INSERT INTO `keluhan` (`id_keluhan`, `jenis_keluhan`, `bidang`) VALUES
('C0001', 'Extracurricular', 'Kesiswaan'),
('C0002', 'Security', 'Keamanan'),
('C0003', 'Teacher', 'Kesiswaan'),
('C0004', 'Infrastructure', 'Sarana Prasarana'),
('C0005', 'Hygiene', 'Sarana Prasarana');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan`
--

CREATE TABLE `laporan` (
  `no_laporan` int(10) NOT NULL,
  `nis` int(8) NOT NULL,
  `id_keluhan` varchar(5) NOT NULL,
  `id_staff` varchar(5) NOT NULL,
  `status` varchar(10) NOT NULL,
  `tanggal_keluhan` date NOT NULL,
  `keluhan` varchar(355) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `staff`
--

CREATE TABLE `staff` (
  `id_staff` varchar(5) NOT NULL,
  `nama_staff` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `staff`
--

INSERT INTO `staff` (`id_staff`, `nama_staff`, `email`, `password`) VALUES
('S0001', 'Ardina', 'ardina@smktelkom-jkt.sch.id', ''),
('S0002', 'Dudung', 'dungdung@smktelkom-jkt.sch.id', ''),
('S0003', 'Naina', 'naina@smktelkom-jkt.sch.id', ''),
('S0004', 'Rendi', 'rendi@smktelkom-jkt.sch.id', ''),
('S0005', 'Ayu', 'Ayuar@smktelkom-jkt.sch,id', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `nis` int(8) NOT NULL,
  `nama_user` varchar(30) NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `email_user` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`nis`, `nama_user`, `alamat`, `email_user`, `password`) VALUES
(20177301, 'Ambrosia Nadia', 'Tangerang', '20173001@smktelkom-jkt.sch.id', 'brosia123'),
(20177341, 'Ahmad Muhammad', 'Jakarta Barat', '20177341@smktelkom-jkt.sch.id', 'madiamad'),
(20177390, 'Bagas Adi Putra', 'Jakarta Barat', '20177390@smktelkom-jkt.sch.id', 'gasgasgas'),
(20177391, 'Christina Andrea', 'Tangerang Selatan', '20177391@smktelkom-jkt.sch.id', 'nana2310'),
(20177392, 'Christian Adi Putra', 'Tangerang', '20177392@smktelkom-jkt.sch.id', 'tiantian23');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `keluhan`
--
ALTER TABLE `keluhan`
  ADD PRIMARY KEY (`id_keluhan`);

--
-- Indeks untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`no_laporan`),
  ADD KEY `nis` (`nis`),
  ADD KEY `id_keluhan` (`id_keluhan`),
  ADD KEY `id_staff` (`id_staff`);

--
-- Indeks untuk tabel `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id_staff`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`nis`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `laporan`
--
ALTER TABLE `laporan`
  MODIFY `no_laporan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD CONSTRAINT `id_keluhan` FOREIGN KEY (`id_keluhan`) REFERENCES `keluhan` (`id_keluhan`),
  ADD CONSTRAINT `id_staff` FOREIGN KEY (`id_staff`) REFERENCES `staff` (`id_staff`),
  ADD CONSTRAINT `nis` FOREIGN KEY (`nis`) REFERENCES `user` (`nis`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
