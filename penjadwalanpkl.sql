-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Jul 2020 pada 01.19
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penjadwalanpkl`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kampus`
--

CREATE TABLE `tbl_kampus` (
  `id_kampus` int(20) NOT NULL,
  `nama_kampus` varchar(30) NOT NULL,
  `kota_kampus` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_kampus`
--

INSERT INTO `tbl_kampus` (`id_kampus`, `nama_kampus`, `kota_kampus`) VALUES
(4132, 'UIN', 'MALANG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_keahlian`
--

CREATE TABLE `tbl_keahlian` (
  `id_keahlian` int(11) NOT NULL,
  `nama_keahlian` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_keahlian`
--

INSERT INTO `tbl_keahlian` (`id_keahlian`, `nama_keahlian`) VALUES
(1, 'animasi'),
(2, 'frontand'),
(3, 'apps');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_keahlianmahasiswa`
--

CREATE TABLE `tbl_keahlianmahasiswa` (
  `id_keahlianmahasiswa` int(11) NOT NULL,
  `id_mahasiswa` int(11) NOT NULL,
  `id_keahlian` int(11) NOT NULL,
  `nilai` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_keahlianmahasiswa`
--

INSERT INTO `tbl_keahlianmahasiswa` (`id_keahlianmahasiswa`, `id_mahasiswa`, `id_keahlian`, `nilai`) VALUES
(1, 54135, 1, 133),
(2, 54135, 3, 677),
(3, 54135, 2, 78);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_mahasiswa`
--

CREATE TABLE `tbl_mahasiswa` (
  `id_mahasiswa` int(20) NOT NULL,
  `id_kampus` int(20) NOT NULL,
  `nama_lengkapmahasiswa` varchar(50) NOT NULL,
  `nama_panggilanmahasiswa` varchar(20) NOT NULL,
  `NIM` int(15) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `jurusan_mahasiswa` varchar(30) NOT NULL,
  `file_fotomahasiswa` text NOT NULL,
  `nama_kelompok` varchar(30) NOT NULL,
  `no_hp` int(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `instagram` varchar(30) NOT NULL,
  `file_cv` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_mahasiswa`
--

INSERT INTO `tbl_mahasiswa` (`id_mahasiswa`, `id_kampus`, `nama_lengkapmahasiswa`, `nama_panggilanmahasiswa`, `NIM`, `tgl_mulai`, `tgl_selesai`, `jurusan_mahasiswa`, `file_fotomahasiswa`, `nama_kelompok`, `no_hp`, `email`, `instagram`, `file_cv`) VALUES
(54135, 4132, 'larasati', 'sasa', 1567, '2020-07-08', '2020-07-31', 'TI', '', 'asiap', 4136, 'abcde', 'aaa', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_kampus`
--
ALTER TABLE `tbl_kampus`
  ADD PRIMARY KEY (`id_kampus`);

--
-- Indeks untuk tabel `tbl_keahlian`
--
ALTER TABLE `tbl_keahlian`
  ADD PRIMARY KEY (`id_keahlian`);

--
-- Indeks untuk tabel `tbl_keahlianmahasiswa`
--
ALTER TABLE `tbl_keahlianmahasiswa`
  ADD PRIMARY KEY (`id_keahlianmahasiswa`),
  ADD KEY `id_keahlian_4` (`id_keahlian`),
  ADD KEY `id_mahasiswa_2` (`id_mahasiswa`);

--
-- Indeks untuk tabel `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`),
  ADD KEY `id_kampus_2` (`id_kampus`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_kampus`
--
ALTER TABLE `tbl_kampus`
  MODIFY `id_kampus` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4133;

--
-- AUTO_INCREMENT untuk tabel `tbl_keahlian`
--
ALTER TABLE `tbl_keahlian`
  MODIFY `id_keahlian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_keahlianmahasiswa`
--
ALTER TABLE `tbl_keahlianmahasiswa`
  MODIFY `id_keahlianmahasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  MODIFY `id_mahasiswa` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54136;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_keahlianmahasiswa`
--
ALTER TABLE `tbl_keahlianmahasiswa`
  ADD CONSTRAINT `tbl_keahlianmahasiswa_ibfk_2` FOREIGN KEY (`id_mahasiswa`) REFERENCES `tbl_mahasiswa` (`id_mahasiswa`),
  ADD CONSTRAINT `tbl_keahlianmahasiswa_ibfk_3` FOREIGN KEY (`id_keahlian`) REFERENCES `tbl_keahlian` (`id_keahlian`);

--
-- Ketidakleluasaan untuk tabel `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  ADD CONSTRAINT `tbl_mahasiswa_ibfk_1` FOREIGN KEY (`id_kampus`) REFERENCES `tbl_kampus` (`id_kampus`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
