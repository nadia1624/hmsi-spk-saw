-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Okt 2023 pada 17.09
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk_aiesec`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alternatif`
--

CREATE TABLE `alternatif` (
  `id_alternatif` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `alternatif`
--

INSERT INTO `alternatif` (`id_alternatif`, `nama`) VALUES
(35, 'Syakina Triyana'),
(38, 'Ghina Fitri Hidayah'),
(39, 'Hasya Zikra Alfrena'),
(40, 'Arieska Kharzani'),
(41, 'Karin Oktariani Effendi'),
(42, 'Fayza Zeefania Putri');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil`
--

CREATE TABLE `hasil` (
  `id_hasil` int(11) NOT NULL,
  `id_alternatif` int(11) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hasil`
--

INSERT INTO `hasil` (`id_hasil`, `id_alternatif`, `nilai`) VALUES
(1, 35, 0.35),
(2, 38, 0.3),
(3, 39, 0.3475),
(4, 40, 0.4),
(5, 41, 0.3375),
(6, 42, 0.2975);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `type` enum('Benefit','Cost') NOT NULL,
  `bobot` float NOT NULL,
  `ada_pilihan` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `nama`, `type`, `bobot`, `ada_pilihan`) VALUES
(16, 'Kriteria Satu', 'Benefit', 0.15, 1),
(17, 'Kriteria Dua', 'Cost', 0.05, 1),
(18, 'Kriteria Tiga', 'Benefit', 0.2, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penilaian`
--

CREATE TABLE `penilaian` (
  `id_penilaian` int(11) NOT NULL,
  `id_alternatif` int(10) NOT NULL,
  `id_kriteria` int(10) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penilaian`
--

INSERT INTO `penilaian` (`id_penilaian`, `id_alternatif`, `id_kriteria`, `nilai`) VALUES
(538, 35, 16, 18),
(539, 35, 17, 22),
(540, 35, 18, 100),
(541, 38, 16, 19),
(542, 38, 17, 22),
(543, 38, 18, 90),
(544, 39, 16, 18),
(545, 39, 17, 23),
(546, 39, 18, 95),
(547, 40, 16, 17),
(548, 40, 17, 24),
(549, 40, 18, 100),
(550, 41, 16, 18),
(551, 41, 17, 23),
(552, 41, 18, 90),
(553, 42, 16, 19),
(554, 42, 17, 23),
(555, 42, 18, 85);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sub_kriteria`
--

CREATE TABLE `sub_kriteria` (
  `id_sub_kriteria` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sub_kriteria`
--

INSERT INTO `sub_kriteria` (`id_sub_kriteria`, `id_kriteria`, `nama`, `nilai`) VALUES
(17, 16, 'Sangat Baik (91 - 100)', 5),
(18, 16, 'Baik (81-90)', 4),
(19, 16, 'Cukup (71-80)', 3),
(20, 16, 'Kurang (61-70)', 2),
(21, 16, 'Sangat Kurang (50-60)', 1),
(22, 17, 'Sangat Baik  (91 - 100)', 5),
(23, 17, 'Baik (81-90)', 4),
(24, 17, 'Cukup (71-80)', 3),
(25, 17, 'Kurang (61-70)', 2),
(26, 17, 'Sangat Kurang (50-60)', 1),
(27, 18, 'Sangat Baik  (91 - 100)', 5),
(28, 18, 'Baik (81-90)', 4),
(29, 18, 'Cukup (71-80)', 3),
(30, 18, 'Kurang (61-70)', 2),
(31, 18, 'Sangat Kurang (50-60)', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indeks untuk tabel `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`id_hasil`);

--
-- Indeks untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  ADD UNIQUE KEY `id_kriteria` (`id_kriteria`);

--
-- Indeks untuk tabel `penilaian`
--
ALTER TABLE `penilaian`
  ADD PRIMARY KEY (`id_penilaian`);

--
-- Indeks untuk tabel `sub_kriteria`
--
ALTER TABLE `sub_kriteria`
  ADD PRIMARY KEY (`id_sub_kriteria`) USING BTREE;

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `alternatif`
--
ALTER TABLE `alternatif`
  MODIFY `id_alternatif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT untuk tabel `hasil`
--
ALTER TABLE `hasil`
  MODIFY `id_hasil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `penilaian`
--
ALTER TABLE `penilaian`
  MODIFY `id_penilaian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=556;

--
-- AUTO_INCREMENT untuk tabel `sub_kriteria`
--
ALTER TABLE `sub_kriteria`
  MODIFY `id_sub_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
