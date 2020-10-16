-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2020 at 05:17 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bacaandigital`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `gambar` varchar(64) NOT NULL,
  `file_buku` varchar(64) NOT NULL,
  `judul_buku` varchar(64) NOT NULL,
  `penulis_buku` varchar(32) NOT NULL,
  `penerbit_buku` varchar(64) NOT NULL,
  `tahun_buku` char(4) NOT NULL,
  `kategori_buku` varchar(32) NOT NULL,
  `logo_kategori` varchar(14) NOT NULL,
  `status_buku` varchar(10) NOT NULL,
  `sinopsis_buku` varchar(500) NOT NULL,
  `rating_buku` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `gambar`, `file_buku`, `judul_buku`, `penulis_buku`, `penerbit_buku`, `tahun_buku`, `kategori_buku`, `logo_kategori`, `status_buku`, `sinopsis_buku`, `rating_buku`) VALUES
(1, 'novel1.png', 'novel1.pdf', 'Dilan 1990: Dia adalah Dilanku', 'Pidi Baiq', 'PT Mizan Pustaka', '2015', 'novel', 'novel.png', 'free', 'Novel Dilan ini menceritakan sebuah kisah seorang perempuan yang bernama Milea. Milea merupakan seorang murid yang baru saja pindah dari Jakarta. Ketika Milea pergi menuju sekolahnya, dia bertemu dengan teman yang kebetulan satu sekolahan dengannya. temannya itu adalah seorang yang suka meramal.', '4.9'),
(2, 'novel2.png', 'novel2.pdf', 'Dilan 1991', 'Pidi Baiq', 'Pastel Books', '2015', 'novel', 'novel.png', 'pro', 'Akhirnya Milea kembali menceritakan kisah cintanya dengan dilan , sebagaimana sepasang kekasih yang baru jadian, tentu saja Milea dan Dilan mengalami masa-masa SMA yang indah. Ketika sudah resmi menjadi pacarnya Dilan, Di bawah guyuran hujan Dilan melaju dengan motor CB-nya bersama Milea yang berada di belakangnya , milea yang di gonceng sambil memeluk erat Dilan menyusuri Jalan Buah Batu sambil tertawa oleh lelucon Dilan yang selalu berhasil membuat Milea merasa nyaman dan istimewa', '4.6'),
(3, 'novel3.png', 'novel3.pdf', 'Bumi Manusia', 'Pramoedya Ananta T', 'Hasta Mitra', '1980', 'novel', 'novel.png', 'pro', 'Buku ini melingkupi masa kejadian antara tahun 1898 hingga tahun 1918, masa ini adalah masa munculnya pemikiran politik etis dan masa awal periode Kebangkitan Nasional. Masa ini juga menjadi awal masuknya pemikiran rasional ke Hindia Belanda, masa awal pertumbuhan organisasi-organisasi modern yang juga merupakan awal kelahiran demokrasi pola Revolusi Prancis. ', '4.5'),
(5, 'biografi3.png', 'biografi3.pdf', 'Biografi Steve Jobs', 'Walter Isaacson', 'Simon & Schuster', '2011', 'biografi', 'biografi.png', 'free', 'Steve Jobs adalah sosok jenius dan temperamen dalam hal inovasi teknologi. Berbagai macam produk hasil ide dan pemikirannya menghasilkan budaya yang berkembang di masyarakat digital. Beberapa perusahaan yang dikelolanya dengan sukses yaitu Apple, Next, dan Pixar. Sejarah dan kisah-kisah pendirian perusahaan tersebut dijelaskan secara gamblang dalam buku ini.', '4.1'),
(6, 'novel6.png', 'novel6.pdf', 'Tenggelamnya Kapal Van Der Wijck', 'Buya Hamka', 'Balai Pustaka', '2013', 'novel', 'novel.png', 'free', 'Novel roman Tenggelamnya Kapal Van der Wijck  adalah novel yang diakui sebagai karya terbaik Buya Hamka. Awalnya bentukny adalah berupa cerita bersambung pada majalah Pedoman Masyarakat terbitan tahun 1938. Kemudian disatukan menjadi novel pada tahun 1962. Sampai saat sekarang sudah banyak diterjemahkan kedalam berbagai bahasa dan dicetak kembali.\r\n\r\nTema cerita yang diangkat sangat kental dengan budaya Minangkabau. Menampilkan keelokan alam dan budaya minang.', '4.9'),
(7, 'biografi1.png', 'biografi.pdf', 'Ki Hajar Dewantara', 'Suhartono Wiryopranoto', 'Museum Kebangkitan Nasional', '2017', 'biografi', 'biografi.png', 'pro', 'Sosok Ki Hajar Dewantara merupakan seorang tokoh yang sangat penting bagi bangsa Indonesia. Dalam buku ini ditulis secara lengkap tentang Ki Hajar Dewantara mulai dari beliau lahir hingga pemikiran-pemikiran serta sepak terjangnya dalam sejarah bangsa Indonesia. Buku ini di terbitkan oleh Museum Kebangkitan Nasional Direktorat Jenderal Kebudayaan Kementerian', '4.5'),
(8, 'biografi2.jpg', 'biografi2.pdf', 'The Story Mahatma Gandhi', 'Mohandas Karamchand Gandhi ', 'Public Affairs Press', '1983', 'biografi', 'biografi.png', 'pro', 'Gambaran eksperimen dalam ilmu Satyagraha, bukan untuk mengatakan betapa baiknya saya. \"Satyagraha, gerakan protes tanpa kekerasan Gandhi (satya = benar, agraha = ketegasan), berdiri, seperti penciptanya, sebagai prinsip moral dan seruan; prinsipnya adalah kebenaran dan kebebasan menangis. Kehidupan Gandhi telah memberi api dan serat bagi pejuang kemer', '4.2'),
(9, 'sejarah1.png', 'sejarah1.pdf', 'Mein Kampf Hitler', 'Adolf Hitler', 'Franz Eher Nachfolger', '1925', 'sejarah', 'sejarah.png', 'pro', 'Buku ini ditulis Hitler saat berada dalam penjara (setelah putsch yang gagal, pada 1923). Dalam buku ini, ia menggambarkan (berbicara tentang) pandangannya atas Jerman masa depan. Ia juga menggambarkan rencana masa depannya untuk bangsa Yahudi. Saat ia naik ke puncak kekuasaan, pada 1933, ia mewujudkan beberapa isi buku itu, berakibat dalam Holocaust. Buku ini tersedia bebas di kantor-kantor sipil selama masa pemerintahan Nazi di Jerman.', '4.3'),
(11, 'sejarah3.png', 'sejarah3.pdf', 'SURVIVORS OF STALINGRAD', 'Frontline Books', 'Frontline Books', '2014', 'sejarah', 'sejarah.png', 'pro', 'In November 1942 – in a devastating counter-attack from outside the city – Soviet forces smashed the German siege and encircled Stalingrad, trapping some 290,000 soldiers of the 6th Army inside. For almost three months, during the harshest part of the Russian winter, the German troops endured atrocious conditions. Freezing cold and reliant on dwindling food supplies from Luftwaffe air drops, thousands died from starvation, frostbite or infection if not from the fighting itself', '4.5'),
(13, 'edukasi1.png', 'edukasi1.pdf', 'Head First Python', 'Paul Barry', 'O\'Reilly Media', '2010', 'edukasi', 'edukasi.png', 'pro', 'Ever wished you could learn Python from a book? Head First Python is a complete learning experience for Python that helps you learn the language through a unique method that goes beyond syntax and how-to manuals, helping you understand how to be a great Python programmer. You\'ll quickly learn the language\'s fundamentals, then move onto persistence, exception handling, web development, SQLite, data wrangling, and Google App Engine. You\'ll also learn how to write mobile apps for Android, all thank', '4.1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(16) NOT NULL,
  `nama_user` varchar(128) NOT NULL,
  `password` varchar(255) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `nama_user`, `password`, `tgl_daftar`, `level`) VALUES
('cahyo', 'cahyo', '80715ba0abd1519336db98136658f1b8657ad053', '2020-02-05', 'user'),
('iam', 'aku', '29bd05c8b22538163b7cdba729c43efe6e596c47', '2020-10-16', 'user'),
('ilhhasap', 'ilham', 'da7ff8b966c24a855dfd1184ac053053427a4cd9', '2020-02-05', 'user'),
('qwe', 'qwe', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2020-02-05', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
