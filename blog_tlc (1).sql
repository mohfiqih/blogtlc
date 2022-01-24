-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2021 at 02:33 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog_tlc`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_beranda`
--

CREATE TABLE `tb_beranda` (
  `id` int(11) NOT NULL,
  `foto` text NOT NULL,
  `judul` text NOT NULL,
  `isi` text NOT NULL,
  `more` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_beranda`
--

INSERT INTO `tb_beranda` (`id`, `foto`, `judul`, `isi`, `more`) VALUES
(22, '240930321_993290611462430_7847317620773168565_n3.jpg', 'TLC Donasi', 'UTBK merupakan seleksi masuk PTN yang berbasis ujian. Tiap tahunnya ribuan pejuang perguruan tinggi berusaha, belajar, dan berdoa dengan bersungguh-sungguh agar bisa menggapai mimpinya masing-masing yaitu masuk ke PTN yang diimpikan. Namun, apa yang terjadi jika kita sudah berusaha, belajar mati-matian tetapi semua itu akan terasa sia-sia karena terhalang masalah ekonomi.', 'https://www.instagram.com/p/CTTZrxFhcTk/'),
(23, 'aktiviti1.jpg', 'Activity Member', 'Berikut adalah jadwal TLC bahas soal, ya! Catat tanggalnya biar ga ketinggalan buat join. Semangat terus dan sampai jumpa di sesi TLC Bahas Soal!', 'https://www.instagram.com/p/CS5s7Q1hqjd/'),
(28, '241307262_3011314712523609_1413992493397243716_n1.jpg', 'Tryout UTBK', 'Berikut adalah jadwal TLC bahas soal, ya! Catat tanggalnya biar ga ketinggalan buat join. Semangat terus dan sampai jumpa di sesi TLC Bahas Soal!', 'https://www.instagram.com/p/CS5s7Q1hqjd/');

-- --------------------------------------------------------

--
-- Table structure for table `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id_berita` int(5) NOT NULL,
  `foto_berita` varchar(500) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `judul_berita` text NOT NULL,
  `isi_berita` text NOT NULL,
  `tgl_berita` varchar(50) NOT NULL,
  `detail_berita` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_berita`
--

INSERT INTO `tb_berita` (`id_berita`, `foto_berita`, `kategori`, `judul_berita`, `isi_berita`, `tgl_berita`, `detail_berita`) VALUES
(2, '241307262_3011314712523609_1413992493397243716_n.jpg', 'Teknologi', 'TLC Juaraaaa', 'TLC Juara 2 Krenova Kota Tegalll', '21-09-2021', 'More Infooo'),
(3, '241307262_3011314712523609_1413992493397243716_n1.jpg', 'Pendidikan', 'TLC Donasi', 'Donasi', '21-09-2021', 'More Info'),
(4, '240930321_993290611462430_7847317620773168565_n.jpg', 'Umum', 'TLC Donasi', 'Donasi', '21-09-2021', 'More Info');

-- --------------------------------------------------------

--
-- Table structure for table `tb_cerita`
--

CREATE TABLE `tb_cerita` (
  `id_cerita` int(5) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `isi_cerita` text NOT NULL,
  `tgl_cerita` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_cerita`
--

INSERT INTO `tb_cerita` (`id_cerita`, `nama_lengkap`, `isi_cerita`, `tgl_cerita`) VALUES
(1, 'Moh. Fiqih Erinsyahhh', 'Masuk TLC Seru banget lohhh:v', '10-09-2021'),
(2, 'Moh. Fiqih Erinsyah', 'Masuk TLC Seru banget loh:v', '10-09-2021'),
(3, 'Moh. Fiqih Erinsyah', 'Masuk TLC Seru banget loh:v', '10-09-2021');

-- --------------------------------------------------------

--
-- Table structure for table `tb_galeri`
--

CREATE TABLE `tb_galeri` (
  `id_galeri` int(5) NOT NULL,
  `galeri_tlc` varchar(500) NOT NULL,
  `nama_kegiatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_galeri`
--

INSERT INTO `tb_galeri` (`id_galeri`, `galeri_tlc`, `nama_kegiatan`) VALUES
(3, '241307262_3011314712523609_1413992493397243716_n4.jpg', 'Makrab TLC');

-- --------------------------------------------------------

--
-- Table structure for table `tb_relawan`
--

CREATE TABLE `tb_relawan` (
  `id` int(5) NOT NULL,
  `divisi` varchar(100) NOT NULL,
  `ketua` varchar(50) NOT NULL,
  `info` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_relawan`
--

INSERT INTO `tb_relawan` (`id`, `divisi`, `ketua`, `info`) VALUES
(1, 'Divisi IT', 'Azhamm', 'tegallearningcenter.id'),
(2, 'Divisi Finance', 'Ketua Finance', 'tegallearningcenter.id'),
(3, 'Divisi Media Digital', 'Ketua Media Digital', 'tegallearningcenter.id'),
(4, 'Divisi Sociopreneur', 'Ketua Sociopreneur', 'tegallearningcenter.id'),
(5, 'Divisi Mentor', 'Ketua Mentor', 'tegallearningcenter.id'),
(6, 'Divisi OR', 'Ketua OR', 'tegallearningcenter.id'),
(7, 'Divisi Pengajar', 'Ketua Pengajar', 'tegallearningcenter.id'),
(8, 'Divisi PR', 'Ketua PR', 'tegallearningcenter.id'),
(9, 'Divisi Project Director (SMA)', 'Ketua PD SMA', 'tegallearningcenter.id'),
(10, 'Divisi Project Director (SMK)', 'Ketua PD SMK', 'tegallearningcenter.id'),
(11, 'Divisi Project Director (UMUM)', 'Ketua PD Umum', 'tegallearningcenter.id');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` enum('admin','divisi','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `role`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_beranda`
--
ALTER TABLE `tb_beranda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `tb_cerita`
--
ALTER TABLE `tb_cerita`
  ADD PRIMARY KEY (`id_cerita`);

--
-- Indexes for table `tb_galeri`
--
ALTER TABLE `tb_galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `tb_relawan`
--
ALTER TABLE `tb_relawan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_beranda`
--
ALTER TABLE `tb_beranda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id_berita` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_cerita`
--
ALTER TABLE `tb_cerita`
  MODIFY `id_cerita` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_galeri`
--
ALTER TABLE `tb_galeri`
  MODIFY `id_galeri` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_relawan`
--
ALTER TABLE `tb_relawan`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
