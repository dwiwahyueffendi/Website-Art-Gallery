-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Jan 2021 pada 07.14
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
  `USERNAME` varchar(30) DEFAULT NULL,
  `TITLE` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `post`
--

INSERT INTO `post` (`IDPOST`, `GAMBAR`, `DESKRIPSI`, `TANGGALPOST`, `JUMLAHLIKE`, `IDKATEGORI`, `USERNAME`, `TITLE`) VALUES
('1', 'Image/img/Rusa.jpg', 'wahh rusaa', '2020-12-30', 100, '1', 'dwiwahyu', 'Hewan Rusa'),
('10', 'Image/img/anime3.jpg', 'anime three', '2020-12-28', 17, '2', 'dimasrehan', 'Anime 3'),
('11', 'Image/img/anime4.jpg', 'anime four', '2020-12-24', 12, '2', 'jukyo', 'Anime 4'),
('12', 'Image/img/anime5.jpg', 'anime five', '2020-12-29', 14, '2', 'dwiwahyu', 'Anime 5'),
('13', 'Image/img/anime6.jpg', 'anime six', '2020-12-31', 14, '2', 'dwiwahyu', 'Anime 6'),
('14', 'Image/img/anime7.jpg', 'anime seven', '2020-12-28', 12, '2', 'kevin', 'Anime 7'),
('15', 'Image/img/anime8.jpg', 'Anime Eight', '2021-01-01', 14, '2', 'cakra', 'Anime 8'),
('16', 'Image/img/city1.jpg', 'Highlights of Christmas in New York City, including where to visit, eat, and shop to avoid the crowds. Also sharing a few lesser known activities!', '2021-01-02', 100, '3', 'cakra', 'Modern City'),
('17', 'Image/img/city2.jpg', 'Highlights of Christmas in New York City, including where to visit, eat, and shop to avoid the crowds. Also sharing a few lesser known activities!', '2021-01-02', 100, '3', 'dimasrehan', 'New York City'),
('18', 'Image/img/city3.jpg', 'Highlights of Christmas in New York City, including where to visit, eat, and shop to avoid the crowds. Also sharing a few lesser known activities!', '2021-01-02', 400, '3', 'dwiwahyu', 'New York City'),
('19', 'Image/img/city4.jpg', 'Highlights of Christmas in New York City, including where to visit, eat, and shop to avoid the crowds. Also sharing a few lesser known activities!', '2021-01-02', 600, '3', 'dwiwahyu', 'New York City'),
('2', 'Image/img/Tupai.jpg', 'wahhh tupaii', '2020-12-30', 200, '1', 'dimasrehan', 'Hewan Tupai'),
('20', 'Image/img/city5.jpg', 'Highlights of Christmas in New York City, including where to visit, eat, and shop to avoid the crowds. Also sharing a few lesser known activities!', '2021-01-02', 100, '3', 'jukyo', 'New York City'),
('21', 'Image/img/city6.jpg', 'Highlights of Christmas in New York City, including where to visit, eat, and shop to avoid the crowds. Also sharing a few lesser known activities!', '2021-01-02', 53, '3', 'kevin', 'New York City'),
('22', 'Image/img/city7.jpg', 'Highlights of Christmas in New York City, including where to visit, eat, and shop to avoid the crowds. Also sharing a few lesser known activities!', '2021-01-02', 43, '3', 'cakra', 'New York City'),
('23', 'Image/img/city8.jpg', 'Highlights of Christmas in New York City, including where to visit, eat, and shop to avoid the crowds. Also sharing a few lesser known activities!', '2021-01-02', 42, '3', 'kevin', 'New York City'),
('24', 'Image/img/city9.jpg', 'Highlights of Christmas in New York City, including where to visit, eat, and shop to avoid the crowds. Also sharing a few lesser known activities!', '2021-01-01', 12, '3', 'dwiwahyu', 'New York City'),
('25', 'Image/img/city10.jpg', 'Highlights of Christmas in New York City, including where to visit, eat, and shop to avoid the crowds. Also sharing a few lesser known activities!', '2021-01-02', 41, '3', 'kevin', 'New York City'),
('26', 'Image/img/nature1.jpg', 'This massive park can be found on Kentucky\'s border and is definitely one of the most beautiful in the nation.', '2021-01-02', 123, '4', 'cakra', 'Beautiful Scenery'),
('27', 'Image/img/nature2.jpg', 'This massive park can be found on Kentucky\'s border and is definitely one of the most beautiful in the nation.', '2021-01-02', 532, '4', 'cakra', 'Beautiful Scenery'),
('28', 'Image/img/nature3.jpg', 'This massive park can be found on Kentucky\'s border and is definitely one of the most beautiful in the nation.', '2021-01-02', 23, '4', 'dimasrehan', 'Beautiful Scenery'),
('29', 'Image/img/nature4.jpg', 'This massive park can be found on Kentucky\'s border and is definitely one of the most beautiful in the nation.', '2021-01-02', 531, '4', 'dimasrehan', 'Beautiful Scenery'),
('3', 'Image/img/pinguin.jpg', 'wahh pinguinn', '2020-12-30', 300, '1', 'dwiwahyu', 'Hewan Pinguin'),
('30', 'Image/img/nature5.jpg', 'This massive park can be found on Kentucky\'s border and is definitely one of the most beautiful in the nation.', '2021-01-02', 200, '4', 'dimasrehan', 'Beautiful Scenery'),
('31', 'Image/img/nature6.jpg', 'This massive park can be found on Kentucky\'s border and is definitely one of the most beautiful in the nation.', '2021-01-02', 435, '4', 'dwiwahyu', 'Beautiful Scenery'),
('32', 'Image/img/nature7.jpg', 'This massive park can be found on Kentucky\'s border and is definitely one of the most beautiful in the nation.', '2021-01-02', 100, '4', 'dwiwahyu', 'Beautiful Scenery'),
('33', 'Image/img/nature8.jpg', 'This massive park can be found on Kentucky\'s border and is definitely one of the most beautiful in the nation.', '2021-01-02', 200, '4', 'dwiwahyu', 'Beautiful Scenery'),
('34', 'Image/img/nature9.jpg', 'This massive park can be found on Kentucky\'s border and is definitely one of the most beautiful in the nation.', '2021-01-02', 400, '4', 'jukyo', NULL),
('35', 'Image/img/nature10.jpg', 'This massive park can be found on Kentucky\'s border and is definitely one of the most beautiful in the nation.', '2021-01-02', 450, '4', 'jukyo', 'Beautiful Scenery'),
('36', 'Image/img/nature11.jpg', 'This massive park can be found on Kentucky\'s border and is definitely one of the most beautiful in the nation.', '2021-01-02', 200, '4', 'jukyo', 'Beautiful Scenery'),
('37', 'Image/img/nature12.jpg', 'This massive park can be found on Kentucky\'s border and is definitely one of the most beautiful in the nation.', '2021-01-02', 40, '4', 'kevin', 'Beautiful Scenery'),
('38', 'Image/img/photo1.jpg', 'Are you aiming to break into the exciting world of fashion photography? There are many paths you can take—from starting your own street fashion photography blog to pursuing a career...', '2021-01-02', 100, '5', 'jukyo', 'Photography Poses'),
('39', 'Image/img/photo2.jpg', 'Are you aiming to break into the exciting world of fashion photography? There are many paths you can take—from starting your own street fashion photography blog to pursuing a career...', '2021-01-02', 100, '5', 'jukyo', 'Photography Poses'),
('4', 'Image/img/kelinci.jpg', 'wahh kelinci', '2020-12-30', 10, '1', 'jukyo', 'Hewan Kelinci'),
('40', 'Image/img/photo3.jpg', 'Are you aiming to break into the exciting world of fashion photography? There are many paths you can take—from starting your own street fashion photography blog to pursuing a career...', '2021-01-02', 100, '5', 'dimasrehan', 'Photography Poses'),
('41', 'Image/img/photo4.jpg', 'Are you aiming to break into the exciting world of fashion photography? There are many paths you can take—from starting your own street fashion photography blog to pursuing a career...', '2021-01-02', 100, '5', 'dwiwahyu', 'Photography Poses'),
('42', 'Image/img/photo5.jpg', 'Are you aiming to break into the exciting world of fashion photography? There are many paths you can take—from starting your own street fashion photography blog to pursuing a career...', '2021-01-02', 100, '5', 'jukyo', 'Photography Poses'),
('43', 'Image/img/photo6.jpg', 'Are you aiming to break into the exciting world of fashion photography? There are many paths you can take—from starting your own street fashion photography blog to pursuing a career...', '2021-01-02', 11, '5', 'dimasrehan', 'Photography Poses'),
('44', 'Image/img/photo7.jpg', 'Are you aiming to break into the exciting world of fashion photography? There are many paths you can take—from starting your own street fashion photography blog to pursuing a career...', '2021-01-02', 455, '5', 'cakra', 'Photography Poses'),
('45', 'Image/img/photo8.jpg', 'Are you aiming to break into the exciting world of fashion photography? There are many paths you can take—from starting your own street fashion photography blog to pursuing a career...', '2021-01-02', 677, '5', 'jukyo', 'Photography Poses'),
('46', 'Image/img/photo9.jpg', 'Are you aiming to break into the exciting world of fashion photography? There are many paths you can take—from starting your own street fashion photography blog to pursuing a career...', '2021-01-02', 3444, '5', 'cakra', 'Photography Poses'),
('47', 'Image/img/photo10.jpg', 'Are you aiming to break into the exciting world of fashion photography? There are many paths you can take—from starting your own street fashion photography blog to pursuing a career...', '2021-01-02', 788, '5', 'dimasrehan', 'Photography Poses'),
('48', 'Image/img/photo11.jpg', 'Are you aiming to break into the exciting world of fashion photography? There are many paths you can take—from starting your own street fashion photography blog to pursuing a career...', '2021-01-02', 453, '5', 'kevin', 'Photography Poses'),
('49', 'Image/img/photo12.jpg', 'Are you aiming to break into the exciting world of fashion photography? There are many paths you can take—from starting your own street fashion photography blog to pursuing a career...', '2021-01-02', 726, '5', 'dwiwahyu', 'Photography Poses'),
('5', 'Image/img/lumba.jpg', 'lumba lumbaa', '2020-12-30', 20, '1', 'kevin', 'Hewan Lumba Lumba'),
('50', 'Image/img/photo13.jpg', 'Are you aiming to break into the exciting world of fashion photography? There are many paths you can take—from starting your own street fashion photography blog to pursuing a career...', '2021-01-02', 378, '5', 'dimasrehan', 'Photography Poses'),
('51', 'Image/img/photo14.jpg', 'Are you aiming to break into the exciting world of fashion photography? There are many paths you can take—from starting your own street fashion photography blog to pursuing a career...', '2021-01-02', 999, '5', 'cakra', 'Photography Poses'),
('6', 'Image/img/rubah.jpg', 'waww rubah', '2020-12-30', 40, '1', 'cakra', 'Hewan Rubah'),
('7', 'Image/img/monyet.jpg', 'waww monyett', '2020-12-30', 400, '1', 'cakra', 'Hewan Monyet'),
('8', 'Image/img/anime1.jpg', 'anime one', '2020-12-31', 11, '2', 'jukyo', 'Anime 1'),
('9', 'Image/img/anime2.jpg', 'anime two', '2020-12-28', 121, '2', 'dimasrehan', 'Anime 2');

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
