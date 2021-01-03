-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jan 2021 pada 08.03
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
  `PASSWORD` varchar(255) DEFAULT NULL
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
  `IDPOST` int(11) NOT NULL,
  `GAMBAR` varchar(30) DEFAULT NULL,
  `DESKRIPSI` varchar(255) DEFAULT NULL,
  `TANGGALPOST` date DEFAULT NULL,
  `JUMLAHLIKE` int(11) DEFAULT NULL,
  `IDKATEGORI` varchar(30) DEFAULT NULL,
  `USERNAME` varchar(30) DEFAULT NULL,
  `TITLE` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `post`
--


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

ALTER TABLE `post`
  MODIFY `IDPOST` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;



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
