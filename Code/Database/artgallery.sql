-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jan 2021 pada 17.02
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
  `EMAIL` varchar(50) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`USERNAME`, `EMAIL`, `PASSWORD`) VALUES
('newdwiwahyu', 'newdwiwahyu@gmail.com', '$2y$10$q.4ZkqAExpTEkXd0KaXzzO/szq9R3a/IO7M9KavJ/PubM/TIh2kbO'),
('rehan', 'rehan@gmail.com', '$2y$10$yaz1uzHEDDU3np0nKGTgL.ltMH7Kg8wDmpakuMEtwaKLp3jRn2SCK');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `IDKATEGORI` int(11) NOT NULL,
  `NAMAKATEGORI` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`IDKATEGORI`, `NAMAKATEGORI`) VALUES
(1, 'Abstrak'),
(2, 'Animal'),
(3, 'Anime'),
(4, 'City'),
(5, 'Klasisme'),
(6, 'Nature'),
(7, 'Photoghraphy'),
(8, 'Pop'),
(9, 'Romantisme'),
(10, 'Surealisme');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `IDKOMENTAR` int(11) NOT NULL,
  `ISIKOMENTAR` varchar(255) NOT NULL,
  `TANGGALKOMENTAR` date NOT NULL,
  `JAMKOMENTAR` time NOT NULL,
  `IDPOST` int(11) NOT NULL,
  `USERNAME` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`IDKOMENTAR`, `ISIKOMENTAR`, `TANGGALKOMENTAR`, `JAMKOMENTAR`, `IDPOST`, `USERNAME`) VALUES
(1, 'mantapppppp betull', '2020-12-31', '18:11:17', 1, 'rehan'),
(2, 'amazingggggg', '2020-12-31', '17:11:17', 2, 'newdwiwahyu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `post`
--

CREATE TABLE `post` (
  `IDPOST` int(11) NOT NULL,
  `GAMBAR` varchar(125) NOT NULL,
  `DESKRIPSI` varchar(255) NOT NULL,
  `TANGGALPOST` date NOT NULL,
  `JUMLAHLIKE` int(11) NOT NULL,
  `IDKATEGORI` int(11) NOT NULL,
  `USERNAME` varchar(30) NOT NULL,
  `TITLE` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `post`
--

INSERT INTO `post` (`IDPOST`, `GAMBAR`, `DESKRIPSI`, `TANGGALPOST`, `JUMLAHLIKE`, `IDKATEGORI`, `USERNAME`, `TITLE`) VALUES
(1, 'Image/img/Rusa.jpg', 'wahh rusaa', '2020-12-30', 100, 2, 'newdwiwahyu', 'Hewan Rusa'),
(2, 'Image/img/anime3.jpg', 'anime three', '2020-12-28', 17, 3, 'rehan', 'Anime 3'),
(3, 'Image/img/anime4.jpg', 'anime four', '2020-12-24', 12, 3, 'newdwiwahyu', 'Anime 4'),
(4, 'Image/img/anime5.jpg', 'anime five', '2020-12-29', 14, 3, 'newdwiwahyu', 'Anime 5'),
(5, 'Image/img/anime6.jpg', 'anime six', '2020-12-31', 14, 3, 'newdwiwahyu', 'Anime 6'),
(6, 'Image/img/anime7.jpg', 'anime seven', '2020-12-28', 12, 3, 'newdwiwahyu', 'Anime 7'),
(7, 'Image/img/anime8.jpg', 'Anime Eight', '2021-01-01', 14, 3, 'rehan', 'Anime 8'),
(8, 'Image/img/city1.jpg', 'Highlights of Christmas in New York City, including where to visit, eat, and shop to avoid the crowds. Also sharing a few lesser known activities!', '2021-01-02', 100, 4, 'rehan', 'Modern City'),
(9, 'Image/img/city2.jpg', 'Highlights of Christmas in New York City, including where to visit, eat, and shop to avoid the crowds. Also sharing a few lesser known activities!', '2021-01-02', 100, 4, 'rehan', 'New York City'),
(10, 'Image/img/city3.jpg', 'Highlights of Christmas in New York City, including where to visit, eat, and shop to avoid the crowds. Also sharing a few lesser known activities!', '2021-01-02', 400, 4, 'newdwiwahyu', 'New York City'),
(11, 'Image/img/city4.jpg', 'Highlights of Christmas in New York City, including where to visit, eat, and shop to avoid the crowds. Also sharing a few lesser known activities!', '2021-01-02', 600, 4, 'newdwiwahyu', 'New York City'),
(12, 'Image/img/Tupai.jpg', 'wahhh tupaii', '2020-12-30', 200, 2, 'rehan', 'Hewan Tupai'),
(13, 'Image/img/city5.jpg', 'Highlights of Christmas in New York City, including where to visit, eat, and shop to avoid the crowds. Also sharing a few lesser known activities!', '2021-01-02', 100, 4, 'newdwiwahyu', 'New York City'),
(14, 'Image/img/city6.jpg', 'Highlights of Christmas in New York City, including where to visit, eat, and shop to avoid the crowds. Also sharing a few lesser known activities!', '2021-01-02', 53, 4, 'newdwiwahyu', 'New York City'),
(15, 'Image/img/city7.jpg', 'Highlights of Christmas in New York City, including where to visit, eat, and shop to avoid the crowds. Also sharing a few lesser known activities!', '2021-01-02', 43, 4, 'rehan', 'New York City'),
(16, 'Image/img/city8.jpg', 'Highlights of Christmas in New York City, including where to visit, eat, and shop to avoid the crowds. Also sharing a few lesser known activities!', '2021-01-02', 42, 4, 'newdwiwahyu', 'New York City'),
(17, 'Image/img/city9.jpg', 'Highlights of Christmas in New York City, including where to visit, eat, and shop to avoid the crowds. Also sharing a few lesser known activities!', '2021-01-01', 12, 4, 'newdwiwahyu', 'New York City'),
(18, 'Image/img/city10.jpg', 'Highlights of Christmas in New York City, including where to visit, eat, and shop to avoid the crowds. Also sharing a few lesser known activities!', '2021-01-02', 41, 4, 'newdwiwahyu', 'New York City'),
(19, 'Image/img/nature1.jpg', 'This massive park can be found on Kentuckys border and is definitely one of the most beautiful in the nation.', '2021-01-02', 123, 6, 'rehan', 'Beautiful Scenery'),
(20, 'Image/img/nature2.jpg', 'This massive park can be found on Kentucky\'s border and is definitely one of the most beautiful in the nation.', '2021-01-02', 532, 6, 'rehan', 'Beautiful Scenery'),
(21, 'Image/img/nature3.jpg', 'This massive park can be found on Kentucky\'s border and is definitely one of the most beautiful in the nation.', '2021-01-02', 23, 6, 'rehan', 'Beautiful Scenery'),
(22, 'Image/img/nature4.jpg', 'This massive park can be found on Kentucky\'s border and is definitely one of the most beautiful in the nation.', '2021-01-02', 531, 6, 'rehan', 'Beautiful Scenery'),
(23, 'Image/img/pinguin.jpg', 'wahh pinguinn', '2020-12-30', 300, 2, 'newdwiwahyu', 'Hewan Pinguin'),
(24, 'Image/img/nature5.jpg', 'This massive park can be found on Kentucky\'s border and is definitely one of the most beautiful in the nation.', '2021-01-02', 200, 6, 'rehan', 'Beautiful Scenery'),
(25, 'Image/img/nature6.jpg', 'This massive park can be found on Kentucky\'s border and is definitely one of the most beautiful in the nation.', '2021-01-02', 435, 6, 'newdwiwahyu', 'Beautiful Scenery'),
(26, 'Image/img/nature7.jpg', 'This massive park can be found on Kentucky\'s border and is definitely one of the most beautiful in the nation.', '2021-01-02', 100, 6, 'newdwiwahyu', 'Beautiful Scenery'),
(27, 'Image/img/nature8.jpg', 'This massive park can be found on Kentucky\'s border and is definitely one of the most beautiful in the nation.', '2021-01-02', 200, 6, 'newdwiwahyu', 'Beautiful Scenery'),
(28, 'Image/img/nature9.jpg', 'This massive park can be found on Kentucky\'s border and is definitely one of the most beautiful in the nation.', '2021-01-02', 400, 6, 'newdwiwahyu', 'City 2'),
(29, 'Image/img/nature10.jpg', 'This massive park can be found on Kentucky\'s border and is definitely one of the most beautiful in the nation.', '2021-01-02', 450, 6, 'newdwiwahyu', 'Beautiful Scenery'),
(30, 'Image/img/nature11.jpg', 'This massive park can be found on Kentucky\'s border and is definitely one of the most beautiful in the nation.', '2021-01-02', 200, 6, 'newdwiwahyu', 'Beautiful Scenery'),
(31, 'Image/img/nature12.jpg', 'This massive park can be found on Kentucky\'s border and is definitely one of the most beautiful in the nation.', '2021-01-02', 40, 6, 'newdwiwahyu', 'Beautiful Scenery'),
(32, 'Image/img/photo1.jpg', 'Are you aiming to break into the exciting world of fashion photography? There are many paths you can take—from starting your own street fashion photography blog to pursuing a career...', '2021-01-02', 100, 7, 'newdwiwahyu', 'Photography Poses'),
(33, 'Image/img/photo2.jpg', 'Are you aiming to break into the exciting world of fashion photography? There are many paths you can take—from starting your own street fashion photography blog to pursuing a career...', '2021-01-02', 100, 7, 'newdwiwahyu', 'Photography Poses'),
(34, 'Image/img/kelinci.jpg', 'wahh kelinci', '2020-12-30', 10, 2, 'newdwiwahyu', 'Hewan Kelinci'),
(35, 'Image/img/photo3.jpg', 'Are you aiming to break into the exciting world of fashion photography? There are many paths you can take—from starting your own street fashion photography blog to pursuing a career...', '2021-01-02', 100, 7, 'rehan', 'Photography Poses'),
(36, 'Image/img/photo4.jpg', 'Are you aiming to break into the exciting world of fashion photography? There are many paths you can take—from starting your own street fashion photography blog to pursuing a career...', '2021-01-02', 100, 7, 'newdwiwahyu', 'Photography Poses'),
(37, 'Image/img/photo5.jpg', 'Are you aiming to break into the exciting world of fashion photography? There are many paths you can take—from starting your own street fashion photography blog to pursuing a career...', '2021-01-02', 100, 7, 'newdwiwahyu', 'Photography Poses'),
(38, 'Image/img/photo6.jpg', 'Are you aiming to break into the exciting world of fashion photography? There are many paths you can take—from starting your own street fashion photography blog to pursuing a career...', '2021-01-02', 11, 7, 'rehan', 'Photography Poses'),
(39, 'Image/img/photo7.jpg', 'Are you aiming to break into the exciting world of fashion photography? There are many paths you can take—from starting your own street fashion photography blog to pursuing a career...', '2021-01-02', 455, 7, 'rehan', 'Photography Poses'),
(40, 'Image/img/photo8.jpg', 'Are you aiming to break into the exciting world of fashion photography? There are many paths you can take—from starting your own street fashion photography blog to pursuing a career...', '2021-01-02', 677, 7, 'newdwiwahyu', 'Photography Poses'),
(41, 'Image/img/photo9.jpg', 'Are you aiming to break into the exciting world of fashion photography? There are many paths you can take—from starting your own street fashion photography blog to pursuing a career...', '2021-01-02', 3444, 7, 'rehan', 'Photography Poses'),
(42, 'Image/img/photo10.jpg', 'Are you aiming to break into the exciting world of fashion photography? There are many paths you can take—from starting your own street fashion photography blog to pursuing a career...', '2021-01-02', 788, 7, 'rehan', 'Photography Poses'),
(43, 'Image/img/photo11.jpg', 'Are you aiming to break into the exciting world of fashion photography? There are many paths you can take—from starting your own street fashion photography blog to pursuing a career...', '2021-01-02', 453, 7, 'newdwiwahyu', 'Photography Poses'),
(44, 'Image/img/photo12.jpg', 'Are you aiming to break into the exciting world of fashion photography? There are many paths you can take—from starting your own street fashion photography blog to pursuing a career...', '2021-01-02', 726, 7, 'newdwiwahyu', 'Photography Poses'),
(45, 'Image/img/lumba.jpg', 'lumba lumbaa', '2020-12-30', 20, 2, 'newdwiwahyu', 'Hewan Lumba Lumba'),
(46, 'Image/img/photo13.jpg', 'Are you aiming to break into the exciting world of fashion photography? There are many paths you can take—from starting your own street fashion photography blog to pursuing a career...', '2021-01-02', 378, 7, 'rehan', 'Photography Poses'),
(47, 'Image/img/photo14.jpg', 'Are you aiming to break into the exciting world of fashion photography? There are many paths you can take—from starting your own street fashion photography blog to pursuing a career...', '2021-01-02', 999, 7, 'rehan', 'Photography Poses'),
(48, 'Image/img/rubah.jpg', 'waww rubah', '2020-12-30', 40, 2, 'rehan', 'Hewan Rubah'),
(49, 'Image/img/monyet.jpg', 'waww monyett', '2020-12-30', 400, 2, 'rehan', 'Hewan Monyet'),
(50, 'Image/img/anime1.jpg', 'anime one', '2020-12-31', 11, 3, 'newdwiwahyu', 'Anime 1'),
(51, 'Image/img/anime2.jpg', 'anime two', '2020-12-28', 121, 3, 'rehan', 'Anime 2'),
(52, 'Image/img/abs2.jpg', 'See amazing artworks of Displate artists printed on metal. Easy mounting, no power tools needed.', '2021-01-14', 100, 1, 'newdwiwahyu', 'Modern Minimalist'),
(54, 'Image/img/abs3.jpg', 'See amazing artworks of Displate artists printed on metal. Easy mounting, no power tools needed.', '2021-01-07', 21, 1, 'newdwiwahyu', 'Special Wallpaper Abstrack Art'),
(55, 'Image/img/abs4.jpg', 'See amazing artworks of Displate artists printed on metal. Easy mounting, no power tools needed.', '2021-01-15', 30, 1, 'newdwiwahyu', 'Special Wallpaper Abstrack Art'),
(56, 'Image/img/abs5.jpg', 'See amazing artworks of Displate artists printed on metal. Easy mounting, no power tools needed.', '2021-01-02', 344, 1, 'newdwiwahyu', 'Special Wallpaper Abstrack Art'),
(57, 'Image/img/abs6.jpg', 'See amazing artworks of Displate artists printed on metal. Easy mounting, no power tools needed.', '2021-01-04', 356, 1, 'newdwiwahyu', 'Abstrack Lockscreen'),
(58, 'Image/img/abs7.jpg', 'See amazing artworks of Displate artists printed on metal. Easy mounting, no power tools needed.', '2021-01-06', 54, 1, 'rehan', 'Special Wallpaper Abstrack Art'),
(59, 'Image/img/abs8.jpg', 'See amazing artworks of Displate artists printed on metal. Easy mounting, no power tools needed.', '2021-01-07', 23, 1, 'rehan', 'Modern Minimalist'),
(60, 'Image/img/abs9.jpg', 'See amazing artworks of Displate artists printed on metal. Easy mounting, no power tools needed.', '2021-01-07', 34, 1, 'rehan', 'Special Wallpaper Abstrack Art'),
(61, 'Image/img/abs10.jpg', 'See amazing artworks of Displate artists printed on metal. Easy mounting, no power tools needed.', '2021-01-07', 56, 1, 'rehan', 'Special Wallpaper Abstrack Art'),
(62, 'Image/img/abs11.jpg', 'See amazing artworks of Displate artists printed on metal. Easy mounting, no power tools needed.', '2021-01-15', 43, 1, 'rehan', 'Modern Minimalist'),
(63, 'Image/img/abs12.jpg', 'See amazing artworks of Displate artists printed on metal. Easy mounting, no power tools needed.', '2021-01-14', 66, 1, 'rehan', 'Special Wallpaper Abstrack Art'),
(64, 'Image/img/abs1.jpg', 'See amazing artworks of Displate artists printed on metal. Easy mounting, no power tools needed.', '2021-01-11', 120, 1, 'newdwiwahyu', 'Special Wallpaper Abstrack Art'),
(65, 'Image/img/klas1.jpg', '”Mit hoved er firkantet og ikke rundt”, forklarer Frederik Nellemann på spørgsmålet om hvorfor han ikke selv er designer. For det kan umiddelbart undre – han ligner nemlig en herretøjsdesigner af d…', '2021-01-05', 100, 5, 'rehan', 'Inspiration Design Room'),
(66, 'Image/img/klas2.jpg', 'Farverne er afdæmpede, møblerne er klassiske og stilen stram i Aya og Mikes lejlighed. Men små overraskelser i form af elskede arvestykker, grønne planter og et farvestrålende tæppe bryder de rene linjer og giver rummene liv.', '2021-01-06', 200, 5, 'rehan', 'The Future Design House'),
(67, 'Image/img/klas3.jpg', 'Boligredaktionen giver dig her nogle gode råd til, hvordan du undgår de 5 klassiske indretningsfejl.', '2021-01-07', 200, 5, 'rehan', 'Design Classic House'),
(68, 'Image/img/klas4.jpg', 'Funkishuset fra 1937 er indrettet med klassiske designmøbler, men man må gerne sætte et glas rødvin på marmorbordet og spise chokolade i sofaen – for det vigtigste er, at her er rart at være, mener ejeren.', '2021-01-08', 200, 5, 'newdwiwahyu', 'Modern House'),
(69, 'Image/img/klas5.jpg', 'Funkishuset fra 1937 er indrettet med klassiske designmøbler, men man må gerne sætte et glas rødvin på marmorbordet og spise chokolade i sofaen – for det vigtigste er, at her er rart at være, mener ejeren.', '2021-01-09', 100, 5, 'rehan', 'Implement Klasisme Art House'),
(70, 'Image/img/pop1.jpg', 'Marylin Monroe WPAP Pop Art poster by Ahmad Nusyirwan. Our posters are produced on acid-free papers using archival inks to guarantee that they last a lifetime without fading or loss of color. All posters include a 1\" white border around the image to allow', '2021-01-06', 100, 8, 'newdwiwahyu', 'Marylin Monroe Pop Art'),
(71, 'Image/img/pop2.jpg', 'If art is all about movements, then there aren’t many bigger than Contemporary and Pop Art. The early 20th century provided us with some truly iconic pieces, and many of them were associated with some of the most prolific artists in history that could be ', '2021-01-14', 200, 8, 'newdwiwahyu', 'Women Red Glasses'),
(72, 'Image/img/pop3.jpg', 'Remote work, self-isolation for weeks, social singing on balconies, bizarre home-made face masks, toilet paper crisis — can this year be any crazier?', '2021-01-03', 122, 8, 'newdwiwahyu', 'Antisipate Corona Virus'),
(73, 'Image/img/pop4.jpg', 'As a short and succinct background, a Midwestern centered christian denomination recently annexed one of their, now former, churches and pastors because of their affirming stance on the wider breadth…', '2021-01-03', 22, 8, 'newdwiwahyu', 'Women Cry Pop Art'),
(74, 'Image/img/pop5.jpg', 'Discover thousands of Premium vectors available in AI and EPS formats', '2021-01-04', 444, 8, 'newdwiwahyu', 'Eating Burger'),
(75, 'Image/img/pop6.jpg', 'Perhaps it was Carrie Bradshaw who first posed this philosophical love question for the world\'s women to ponder: \"Did I ever really love Big, or was I...\r\n', '2021-01-08', 766, 8, 'newdwiwahyu', 'Women Cry'),
(76, 'Image/img/pop7.jpg', 'Original Art Mista/Acrylic Painting, measuring: 75W x 100H x 5D cm, by: Juca Maximo (Brazil). Styles: Abstract Expressionism, Conceptual, Expressionism, Portraiture, Pop Art. Subject: Portrait…', '2021-01-08', 455, 8, 'newdwiwahyu', 'Juza Maximo'),
(77, 'Image/img/roman1.jpg', '100% hand-painted high quality oil painting on artist grade canvas with high quality oil paints.- Additional 2 inch blank border around the edge.- No printing or digital imaging techniques are used.- No middle people, directly ship to the world. - Send yo', '2021-01-13', 1000, 9, 'rehan', 'The Love Couple Greece'),
(78, 'Image/img/roman2.jpg', 'Ron Hicks was born in Columbus, Ohio but spent most of his childhood growing up in the modest and friendly neighborhood of Park Hill in Denver, Colorado. He shared a dream with a close childhood friend early on... \"He just always knew he would go to colle', '2021-01-11', 200, 9, 'rehan', 'The Couple Sitting On Vespa'),
(79, 'Image/img/roman3.jpg', 'Los enamorados pueden andar sobre las telas de araña que se mecen en el tibio calor del verano, así de leve es la ilusión. Ojos, mirad por última vez. Brazos, dad vuestro ultimo abrazo. Y labios, que…', '2021-01-06', 200, 9, 'rehan', 'The Death of Love'),
(80, 'Image/img/roman4.jpg', 'Рыжеволосая красота в картинах знаменитых художников', '2021-01-06', 400, 9, 'rehan', 'Flower Kissed'),
(81, 'Image/img/sure1.jpg', 'Polish artist Pawel Kuczynski offers an honest look into our modern world through his brilliantly intelligent artwork that touches on globally important social, political, and economic issues.', '2021-01-11', 100, 10, 'newdwiwahyu', 'Addict Gadget'),
(82, 'Image/img/sure2.jpg', 'Le symbolisme de la porte, et de façon générale tous les symboles de franchissement, sont particulièrement intéressants à étudier en rêve. Dans la vie courante, franchir une porte pour la première fois est souvent synonyme d’un renouveau. Il y a la porte ', '2021-01-13', 100, 10, 'newdwiwahyu', 'The Nature in The Sky'),
(83, 'Image/img/sure3.jpg', 'John Holcroft, évoqué précédemment, est un illustrateur britannique ayant, dès son plus jeune âge, toujours rêvé d’être un artiste. Après avoir quit', '2021-01-10', 100, 10, 'newdwiwahyu', 'The Queen of Sea'),
(84, 'Image/img/sure4.jpg', 'From Srisasanti Syndicate, Roby Dwi Antono, Endearment (2016), Oil on Canvas, 200 × 150 cm', '2021-01-06', 400, 10, 'newdwiwahyu', 'Crisis Africa'),
(85, 'Image/img/sure5.jpg', 'Paint the Future Painting by Andrew Judd', '2021-01-13', 763, 10, 'newdwiwahyu', 'Paint the Future'),
(86, 'Image/img/sure6.jpg', 'Caroline: Een kunstbegrip: surrealisme', '2021-01-06', 100, 10, 'rehan', 'Butterfly or Apple?'),
(87, 'Image/img/sure7.jpg', 'Created By Devian Art', '2021-01-13', 100, 10, 'rehan', 'Wasting Time'),
(88, 'Image/img/sure8.jpg', 'An der Grenze zweier Wirklichkeiten lässt der kanadische Künstler eine dritte Realität entstehen.', '2021-01-12', 400, 10, 'rehan', 'Forrest or City?');

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
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `IDKATEGORI` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `post`
--
ALTER TABLE `post`
  MODIFY `IDPOST` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

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
