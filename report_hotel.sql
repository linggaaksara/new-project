-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Jan 2019 pada 08.05
-- Versi server: 10.1.33-MariaDB
-- Versi PHP: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `report_hotel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('lingga', '123'),
('lutfi', 'lutfi'),
('Edi', 'dipo123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `departemen`
--

CREATE TABLE `departemen` (
  `id_departmen` int(20) NOT NULL,
  `departemen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `departemen`
--

INSERT INTO `departemen` (`id_departmen`, `departemen`) VALUES
(1, 'HRD'),
(2, 'Finance and Accounting'),
(3, 'House Keeping'),
(4, 'Front Office');

-- --------------------------------------------------------

--
-- Struktur dari tabel `report`
--

CREATE TABLE `report` (
  `tanggal` date NOT NULL,
  `nama` varchar(20) DEFAULT NULL,
  `departmen` varchar(200) NOT NULL,
  `jenis_kerusakan` varchar(10) DEFAULT NULL,
  `kerusakan` varchar(15) DEFAULT NULL,
  `id_report` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `report`
--

INSERT INTO `report` (`tanggal`, `nama`, `departmen`, `jenis_kerusakan`, `kerusakan`, `id_report`) VALUES
('2019-01-25', 'Ema. R', 'HRD', 'Hardware', 'cpu', 33),
('2019-01-25', 'Wuri Hato Wibowo', 'HRD', 'Software', 'wifi', 34);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `riwayat`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `riwayat` (
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_info`
--

CREATE TABLE `user_info` (
  `nama` varchar(30) NOT NULL,
  `departmen` varchar(20) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `id_user` int(4) NOT NULL,
  `username` varchar(15) DEFAULT NULL,
  `password` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_info`
--

INSERT INTO `user_info` (`nama`, `departmen`, `jk`, `id_user`, `username`, `password`) VALUES
('Wuri Hato Wibowo', 'HRD', 'Pr', 6, 'wuri', 'wuri1'),
('Ema. R', 'HRD', 'Wa', 7, 'ema', 'ema2'),
('Wiwi marwiyah', 'HRD', 'Wa', 9, 'wiwi', 'wiwi3'),
('Endang Sugiarto', 'HRD', 'Pr', 10, 'endang', 'endang4'),
('Asep Us Us', 'HRD', 'Pr', 11, 'asep', 'asep5'),
('Arie Pramudyanto', 'Finance & Accounting', 'Pr', 12, 'arie', 'arie6'),
('Heri Surya', 'Finance & Accounting', 'Pr', 13, 'heri', 'heri7'),
('Tedi Sutardi', 'Finance & Accounting', 'Pr', 14, 'tedi', 'tedi8'),
('Erwin Isyakyudin', 'Finance & Accounting', 'Pr', 15, 'erwin', 'erwin9'),
('Ade', 'Finance & Accounting', 'Pr', 16, 'ade', 'ade10'),
('Budi Kusnaedi', 'Finance & Accounting', 'Pr', 17, 'budi', 'budi11'),
('Widiyana', 'Finance & Accounting', 'Pr', 18, 'widiyana', 'widiyana12'),
('Siti Rizkia', 'Finance & Accounting', 'Pr', 19, 'rizkia', 'rizkia13'),
('Ahmad Sumiratna', 'Finance & Accounting', 'Pr', 20, 'ahmads', 'ahmads14'),
('Koko Sanjaya', 'Finance & Accounting', 'Pr', 21, 'koko', 'koko15'),
('Alham Harun', 'Finance & Accounting', 'Pr', 22, 'alham', 'alham16'),
('Ahmad Sambudi', 'Finance & Accounting', 'Pr', 23, 'sambudi', 'sambudi17'),
('Suroso', 'House Keeping', 'Pr', 24, 'suroso', 'suroso18'),
('Iwan Setiawan', 'House Keeping', 'Pr', 25, 'iwan', 'iwan19'),
('Frederik Tempesey', 'House Keeping', 'Pr', 26, 'frederik', 'frederik20'),
('Hendra', 'House Keeping', 'Pr', 27, 'hendra', 'hendra21'),
('Lilis Mulyani', 'House Keeping', 'Wa', 28, 'lilis', 'lilis22'),
('Sapta Reni', 'Front Office', 'Wa', 29, 'sapta', 'sapta23'),
('Annisa Putri', 'Front Office', 'Wa', 30, 'annisa', 'annisa24'),
('Lisnawati', 'Front Office', 'Wa', 31, 'lisnawati', 'lisnawati25'),
('Cecep Saefudin', 'Front Office', 'Pr', 32, 'cecep', 'cecep26'),
('Ihwan', 'Front Office', 'Pr', 33, 'ihwan', 'ihwan27'),
('Adri', 'Sales Marketing', 'Pr', 34, 'adri', 'adri28'),
('Laskhmi', 'Sales Marketing', 'Wa', 35, 'laskhmi', 'laskhmi29'),
('Glorianti', 'Sales Marketing', 'Wa', 36, 'glorianti', 'glorianti30'),
('Dewi Anggraeni', 'Sales Marketing', 'Wa', 37, 'dewianggraeni', 'dewi31'),
('Yeni Rosnayati', 'Sales Marketing', 'Wa', 38, 'yenirosnayati', 'yeni32'),
('Tiar Suparlan', 'Sales Marketing', 'Pr', 39, 'tiarsuparlan', 'tiar33'),
('Usi Firdaus', 'F & B Sevice', 'Pr', 40, 'usifirdaus', 'usi34'),
('Thoriq', 'F & B Sevice', 'Pr', 41, 'thoriq', 'thoriq35'),
('Asih', 'F & B Sevice', 'Wa', 42, 'asih', 'asih36'),
('Agus Gunawan', 'F & B Sevice', 'Pr', 43, 'agusgunawan', 'agus37'),
('Asep Nurdin', 'F & B Sevice', 'Pr', 44, 'asepnurdin', 'asep38'),
('Elan', 'F & B Sevice', 'Pr', 45, 'elan', 'elan38'),
('Firman', 'F & B Sevice', 'Pr', 46, 'firman', 'firman40'),
('Andri', 'F & B Product', 'Pr', 47, 'andri', 'andri41'),
('Kadiman', 'F & B Product', 'Pr', 48, 'kadiman', 'kadiman42'),
('Engkon Komarudin', 'F & B Product', 'Pr', 49, 'engkon', 'engkon43'),
('Ahmad Sanusi', 'Lead Indonesia', 'Pr', 50, 'ahmadsanusi', 'ahmadsanusi44'),
('Aginta', 'Lead Indonesia', 'Pr', 51, 'aginta', 'aginta45'),
('Diding', 'Lead Indonesia', 'Pr', 52, 'diding', 'diding46'),
('Yayan Suryana', 'Project', 'Pr', 53, 'yayansuryana', 'yayan47'),
('Riyan', 'Project', 'Pr', 54, 'riyan', 'riyan48'),
('Herdi', 'Project', 'Pr', 55, 'herdi', 'herdi49'),
('Didi', 'Project', 'Pr', 56, 'didi', 'didi50'),
('Jemmy', 'Project', 'Pr', 57, 'jemmy', 'jemmy51'),
('Tedi', 'Project', 'Pr', 58, 'tedi', 'tedi52'),
('Budi Purnomo', 'Project', 'Pr', 59, 'budipurnomo', 'budi53'),
('Firman', 'Project', 'Pr', 60, 'firman', 'firman54'),
('Agung', 'Project', 'Pr', 61, 'agung', 'agung55'),
('Monang', 'Project', 'Pr', 62, 'monang', 'monang56'),
('Iyan', 'Project', 'Pr', 63, 'iyan', 'iyan57');

-- --------------------------------------------------------

--
-- Struktur untuk view `riwayat`
--
DROP TABLE IF EXISTS `riwayat`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `riwayat`  AS  select `user_info`.`id_user` AS `id_user`,`user_info`.`departmen` AS `departmen`,`user_info`.`jk` AS `jk`,`report`.`jenis_kerusakan` AS `jenis_kerusakan`,`report`.`kerusakan` AS `kerusakan`,`report`.`tgl_rusak` AS `tgl_rusak`,`report`.`tgl_ganti` AS `tgl_ganti` from (`user_info` join `report`) where (`user_info`.`nama` = `report`.`nama`) ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `departemen`
--
ALTER TABLE `departemen`
  ADD PRIMARY KEY (`id_departmen`);

--
-- Indeks untuk tabel `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id_report`);

--
-- Indeks untuk tabel `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `departemen`
--
ALTER TABLE `departemen`
  MODIFY `id_departmen` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `report`
--
ALTER TABLE `report`
  MODIFY `id_report` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id_user` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
