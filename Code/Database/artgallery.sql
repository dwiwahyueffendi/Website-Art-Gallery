-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Des 2020 pada 04.53
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `artgallery`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `USERNAME` varchar(30) NOT NULL,
  `EMAIL` varchar(20) DEFAULT NULL,
  `PASSWORD` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`USERNAME`, `EMAIL`, `PASSWORD`) VALUES
('cakra', 'cakra@gmail.com', 'admin5'),
('dimasrehan', 'rehanbabiel@gmail.co', 'admin2'),
('dwiwahyu', 'dwiwahyueffendi22@gm', 'admin1'),
('jukyo', 'jukyo@gmail.com', 'admin3'),
('kevin', 'kevin@gmail.com', 'admin4');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `IDKATEGORI` varchar(30) NOT NULL,
  `NAMAKATEGORI` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`IDKATEGORI`, `NAMAKATEGORI`) VALUES
('1', 'animal'),
('2', 'anime'),
('3', 'city'),
('4', 'nature'),
('5', 'photography');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `IDKOMENTAR` varchar(30) NOT NULL,
  `ISIKOMENTAR` varchar(255) DEFAULT NULL,
  `TANGGALKOMENTAR` date DEFAULT NULL,
  `JAMKOMENTAR` time DEFAULT NULL,
  `IDPOST` varchar(30) DEFAULT NULL,
  `USERNAME` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`IDKOMENTAR`, `ISIKOMENTAR`, `TANGGALKOMENTAR`, `JAMKOMENTAR`, `IDPOST`, `USERNAME`) VALUES
('1', 'mantapppppp betull', '2020-12-31', '18:11:17', '1', 'dimasrehan'),
('2', 'amazingggggg', '2020-12-31', '17:11:17', '2', 'dwiwahyu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `post`
--

CREATE TABLE `post` (
  `IDPOST` varchar(30) NOT NULL,
  `GAMBAR` varchar(30) DEFAULT NULL,
  `DESKRIPSI` varchar(255) DEFAULT NULL,
  `TANGGALPOST` date DEFAULT NULL,
  `JUMLAHLIKE` int(11) DEFAULT NULL,
  `IDKATEGORI` varchar(30) DEFAULT NULL,
  `USERNAME` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `post`
--

INSERT INTO `post` (`IDPOST`, `GAMBAR`, `DESKRIPSI`, `TANGGALPOST`, `JUMLAHLIKE`, `IDKATEGORI`, `USERNAME`) VALUES
('1', 'Image/img/Rusa.jpg', 'wahh rusaa', '2020-12-30', 100, '1', 'dwiwahyu'),
('10', 'Image/img/anime3.jpg', 'anime three', '2020-12-28', 17, '2', 'dimasrehan'),
('11', 'Image/img/anime4.jpg', 'anime four', '2020-12-24', 12, '2', 'jukyo'),
('12', 'Image/img/anime5.jpg', 'anime five', '2020-12-29', 14, '2', 'dwiwahyu'),
('13', 'Image/img/anime6.jpg', 'anime six', '2020-12-31', 14, '2', 'dwiwahyu'),
('14', 'Image/img/anime7.jpg', 'anime seven', '2020-12-28', 12, '2', 'kevin'),
('2', 'Image/img/Tupai.jpg', 'wahhh tupaii', '2020-12-30', 200, '1', 'dimasrehan'),
('3', 'Image/img/pinguin.jpg', 'wahh pinguinn', '2020-12-30', 300, '1', 'dwiwahyu'),
('4', 'Image/img/kelinci.jpg', 'wahh kelinci', '2020-12-30', 10, '1', 'jukyo'),
('5', 'Image/img/lumba.jpg', 'lumba lumbaa', '2020-12-30', 20, '1', 'kevin'),
('6', 'Image/img/rubah.jpg', 'waww rubah', '2020-12-30', 40, '1', 'cakra'),
('7', 'Image/img/monyet.jpg', 'waww monyett', '2020-12-30', 400, '1', 'cakra'),
('8', 'Image/img/anime1.jpg', 'anime one', '2020-12-31', 11, '2', 'jukyo'),
('9', 'Image/img/anime2.jpg', 'anime two', '2020-12-28', 121, '2', 'dimasrehan');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`USERNAME`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`IDKATEGORI`);

--
-- Indeks untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`IDKOMENTAR`),
  ADD KEY `IDPOST` (`IDPOST`),
  ADD KEY `USERNAME` (`USERNAME`);

--
-- Indeks untuk tabel `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`IDPOST`),
  ADD KEY `IDKATEGORI` (`IDKATEGORI`),
  ADD KEY `USERNAME` (`USERNAME`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `komentar_ibfk_1` FOREIGN KEY (`IDPOST`) REFERENCES `post` (`IDPOST`),
  ADD CONSTRAINT `komentar_ibfk_2` FOREIGN KEY (`USERNAME`) REFERENCES `akun` (`USERNAME`);

--
-- Ketidakleluasaan untuk tabel `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`IDKATEGORI`) REFERENCES `kategori` (`IDKATEGORI`),
  ADD CONSTRAINT `post_ibfk_2` FOREIGN KEY (`USERNAME`) REFERENCES `akun` (`USERNAME`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
