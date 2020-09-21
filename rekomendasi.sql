-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2020 at 09:58 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rekomendasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `keahlian`
--

CREATE TABLE `keahlian` (
  `ID_KEAHLIAN` int(11) NOT NULL,
  `ID_PRT` int(11) NOT NULL,
  `NAMA_PRT` varchar(100) NOT NULL,
  `NAMA_KEAHLIAN` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keahlian`
--

INSERT INTO `keahlian` (`ID_KEAHLIAN`, `ID_PRT`, `NAMA_PRT`, `NAMA_KEAHLIAN`) VALUES
(16, 1, 'Siska Sihombing', 'Memasak'),
(17, 2, 'Hana Uyainah', 'Memasak'),
(18, 3, 'Tika Maryati', 'Tata Graha'),
(19, 4, 'Diana Haryanti', 'Tata Graha'),
(20, 5, 'Olivia Zulaika', 'Penjagaan Balita'),
(21, 6, 'Lintang Lestari', 'Penjagaan Balita'),
(24, 9, 'Sakura Rahayu Maryati', 'Memasak'),
(25, 10, 'Clara Yuliarti', 'Memasak');

-- --------------------------------------------------------

--
-- Table structure for table `kontrak`
--

CREATE TABLE `kontrak` (
  `ID_KONTRAK` int(11) NOT NULL,
  `ID_PRT` int(11) NOT NULL,
  `NAMA_PRT` varchar(100) NOT NULL,
  `DURASI_KONTRAK` int(11) NOT NULL,
  `TANGGAL` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kontrak`
--

INSERT INTO `kontrak` (`ID_KONTRAK`, `ID_PRT`, `NAMA_PRT`, `DURASI_KONTRAK`, `TANGGAL`) VALUES
(1, 1, 'Siska Sihombing', 2, '2018-03-03'),
(2, 2, 'Hana Uyainah', 2, '2017-08-08'),
(4, 3, 'Tika Maryati', 2, '2019-01-01'),
(5, 4, 'Diana Haryanti', 1, '2018-01-03'),
(7, 5, 'Olivia Zulaika', 1, '2018-03-28'),
(9, 6, 'Lintang Lestari', 1, '2019-01-29'),
(12, 9, 'Sakura Rahayu Maryati', 1, '2018-09-09'),
(13, 10, 'Clara Yuliarti', 1, '2017-08-09');

-- --------------------------------------------------------

--
-- Table structure for table `majikan`
--

CREATE TABLE `majikan` (
  `ID_MAJIKAN` varchar(20) NOT NULL,
  `NAMA_MAJIKAN` varchar(100) NOT NULL,
  `JKEL_MAJIKAN` char(2) NOT NULL,
  `TL_MAJIKAN` date NOT NULL,
  `KOTA_LAHIR_MAJIKAN` varchar(100) NOT NULL,
  `ALAMAT_MAJIKAN` varchar(100) NOT NULL,
  `TELP_MAJIKAN` varchar(100) NOT NULL,
  `PENDAPATAN_MAJIKAN` bigint(20) NOT NULL,
  `NO_KK_MAJIKAN` bigint(20) NOT NULL,
  `NO_KTP_MAJIKAN` bigint(20) NOT NULL,
  `EMAIL_MAJIKAN` varchar(100) NOT NULL,
  `USERNAME_MAJIKAN` varchar(100) NOT NULL,
  `PASSWORD_MAJIKAN` varchar(100) NOT NULL,
  `FOTO_MAJIKAN` text NOT NULL DEFAULT 'http://localhost/riset/proses/file/avatar0.jpg',
  `FOTO_KTP_MAJIKAN` text NOT NULL,
  `FOTO_KK_MAJIKAN` text NOT NULL,
  `FOTO_SLIP_GAJI` text NOT NULL,
  `STATUS_MAJIKAN` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `majikan`
--

INSERT INTO `majikan` (`ID_MAJIKAN`, `NAMA_MAJIKAN`, `JKEL_MAJIKAN`, `TL_MAJIKAN`, `KOTA_LAHIR_MAJIKAN`, `ALAMAT_MAJIKAN`, `TELP_MAJIKAN`, `PENDAPATAN_MAJIKAN`, `NO_KK_MAJIKAN`, `NO_KTP_MAJIKAN`, `EMAIL_MAJIKAN`, `USERNAME_MAJIKAN`, `PASSWORD_MAJIKAN`, `FOTO_MAJIKAN`, `FOTO_KTP_MAJIKAN`, `FOTO_KK_MAJIKAN`, `FOTO_SLIP_GAJI`, `STATUS_MAJIKAN`) VALUES
('18072020M172924', 'Modarsono', 'L', '1975-04-13', 'Surabaya', 'Jl, Kebonsari Tengah 86', '0895342279156', 10000000, 111222, 111222, 'modarsono@gmail.com', 'modar', '12345', 'http://localhost/riset/proses/file/avatar0.jpg', '0', '0', '0', 0),
('18072020R204905', 'Rakha Luhur', 'L', '1970-08-04', 'Surabaya', 'Jl, Kebonsari Tengah 88', '0895342279156', 10000000, 111222333, 111222333, 'rakhaluhur@gmail.com', 'rakha', '12345', 'http://localhost/riset/proses/file/avatar0.jpg', 'http://localhost/rekomendasi/proses/file/', 'http://localhost/rekomendasi/proses/file/', 'http://localhost/rekomendasi/proses/file/', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_kompetensi`
--

CREATE TABLE `nilai_kompetensi` (
  `ID_NILAI_KOMPETENSI` int(11) NOT NULL,
  `ID_PRT` int(11) NOT NULL,
  `NAMA_PRT` varchar(100) NOT NULL,
  `NILAI_K1` int(11) NOT NULL,
  `NILAI_K2` int(11) NOT NULL,
  `NILAI_K3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai_kompetensi`
--

INSERT INTO `nilai_kompetensi` (`ID_NILAI_KOMPETENSI`, `ID_PRT`, `NAMA_PRT`, `NILAI_K1`, `NILAI_K2`, `NILAI_K3`) VALUES
(21, 1, 'Siska Sihombing', 5, 4, 4),
(22, 2, 'Hana Uyainah', 5, 3, 3),
(23, 3, 'Tika Maryati', 4, 5, 3),
(25, 4, 'Diana Haryanti', 4, 4, 4),
(26, 5, 'Olivia Zulaika', 4, 3, 3),
(27, 6, 'Lintang Lestari', 4, 4, 4),
(28, 7, 'Sakura Rahayu Maryati', 4, 4, 4),
(30, 8, 'Clara Yuliarti', 4, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_pengalaman`
--

CREATE TABLE `nilai_pengalaman` (
  `ID_NILAI_PENGALAMAN` int(11) NOT NULL,
  `ID_PRT` int(11) NOT NULL,
  `NAMA_PRT` varchar(100) NOT NULL,
  `NILAI_P1` int(11) NOT NULL,
  `NILAI_P2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai_pengalaman`
--

INSERT INTO `nilai_pengalaman` (`ID_NILAI_PENGALAMAN`, `ID_PRT`, `NAMA_PRT`, `NILAI_P1`, `NILAI_P2`) VALUES
(20, 1, 'Siska Sihombing', 5, 2),
(21, 2, 'Hana Uyainah', 4, 1),
(22, 3, 'Tika Maryati', 4, 4),
(23, 4, 'Diana Haryanti', 2, 1),
(24, 5, 'Olivia Zulaika', 1, 1),
(25, 6, 'Lintang Lestari', 2, 2),
(26, 7, 'Sakura Rahayu Maryati', 5, 2),
(27, 8, 'Clara Yuliarti', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `permintaan`
--

CREATE TABLE `permintaan` (
  `ID_PERMINTAAN` int(11) NOT NULL,
  `ID_PRT` int(11) NOT NULL,
  `ID_MAJIKAN` varchar(20) NOT NULL,
  `TGL_PERMINTAAN` date NOT NULL,
  `STATUS_PERMINTAAN` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permintaan`
--

INSERT INTO `permintaan` (`ID_PERMINTAAN`, `ID_PRT`, `ID_MAJIKAN`, `TGL_PERMINTAAN`, `STATUS_PERMINTAAN`) VALUES
(16, 1, '18072020R204905', '2020-08-30', 0),
(17, 1, '18072020R204905', '2020-09-02', 0);

-- --------------------------------------------------------

--
-- Table structure for table `profil_aktual`
--

CREATE TABLE `profil_aktual` (
  `ID_PROFIL` int(11) NOT NULL,
  `ID_PRT` int(11) NOT NULL,
  `NAMA_PRT` int(100) NOT NULL,
  `K1` int(11) NOT NULL,
  `K2` int(11) NOT NULL,
  `K3` int(11) NOT NULL,
  `P1` int(11) NOT NULL,
  `P2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `prt`
--

CREATE TABLE `prt` (
  `ID_PRT` int(11) NOT NULL,
  `NAMA_PRT` varchar(100) NOT NULL,
  `JKEL_PRT` char(2) NOT NULL,
  `TL_PRT` date NOT NULL,
  `KOTA_LAHIR_PRT` varchar(100) NOT NULL,
  `ALAMAT_PRT` varchar(100) NOT NULL,
  `TELP_PRT` varchar(100) NOT NULL,
  `NO_KTP_PRT` bigint(20) NOT NULL,
  `NO_KK_PRT` bigint(20) NOT NULL,
  `EMAIL_PRT` varchar(100) NOT NULL,
  `USERNAME_PRT` varchar(100) NOT NULL,
  `PASSWORD_PRT` varchar(100) NOT NULL,
  `FOTO_KTP_PRT` text NOT NULL,
  `FOTO_KK_PRT` text NOT NULL,
  `STATUS_PRT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prt`
--

INSERT INTO `prt` (`ID_PRT`, `NAMA_PRT`, `JKEL_PRT`, `TL_PRT`, `KOTA_LAHIR_PRT`, `ALAMAT_PRT`, `TELP_PRT`, `NO_KTP_PRT`, `NO_KK_PRT`, `EMAIL_PRT`, `USERNAME_PRT`, `PASSWORD_PRT`, `FOTO_KTP_PRT`, `FOTO_KK_PRT`, `STATUS_PRT`) VALUES
(1, 'Siska Sihombing', 'P', '1980-01-01', 'Surabaya', 'Jl Karang Anyar Raya Pert Karang Anyar Permai Bl C/15-18, Karang Anyar\r\n\r\nSawah, Jakarta', '123', 12345, 12345, 'siska1@gmail.com', 'siska1', '12345', 'http://localhost/riset/proses/file/avatar0.jpg', 'http://localhost/riset/proses/file/avatar0.jpg', 1),
(2, 'Hana Uyainah', 'P', '1985-01-01', 'Malang', 'Jl May Sabara 2288 A, Sumatera Selatan, Palembang', '123', 12345, 12345, 'hana2@gmail.com', 'hana1', '12345', 'http://localhost/riset/proses/file/avatar0.jpg', 'http://localhost/riset/proses/file/avatar0.jpg', 1),
(3, 'Tika Maryati', 'P', '1990-01-01', 'Jakarta', 'Jl Rajawali 3, Surabaya, Jawa TImur', '123', 12345, 12345, 'tika1@gmail.com', 'tika1', '12345', 'http://localhost/riset/proses/file/avatar0.jpg', 'http://localhost/riset/proses/file/avatar0.jpg', 1),
(4, 'Diana Haryanti', 'P', '1985-01-13', 'Surabaya', 'Jl Kebonsari Sawahan 02, Surabaya, Jawa TImur', '123', 12345, 12345, 'diana1@gmail.com', 'diana1', '12345', 'http://localhost/riset/proses/file/avatar0.jpg', 'http://localhost/riset/proses/file/avatar0.jpg', 1),
(5, 'Oliva Zulaika', 'P', '1991-07-14', 'Padang', 'Jl Ketintang Baru 2 27, Surabaya, Jawa TImur', '12345', 12345, 12345, 'olivazka@gmail.com', 'olivazka', '67e1019b', 'http://localhost/riset/proses/file/avatar0.jpg', 'http://localhost/riset/proses/file/avatar0.jpg', 1),
(6, 'Lintang Lestari', 'P', '1977-07-25', 'Padang', 'Jl Barata Jaya III 88, Gubeng, Surabaya', '12345', 12345, 12345, 'lintaari@gmail.com', 'lintaari', '090a27bc', 'http://localhost/riset/proses/file/avatar0.jpg', 'http://localhost/riset/proses/file/avatar0.jpg', 1),
(7, 'Sakura Rahayu Maryati', 'P', '1977-09-06', 'Sumatera Selatan', 'Jl Muara Karang Bl C Slt 36, Penjaringan, Jakarta', '12345', 12345, 12345, 'sakurakom@gmail.com', 'sakurakom', '9c20cbf1', 'http://localhost/riset/proses/file/avatar0.jpg', 'http://localhost/riset/proses/file/avatar0.jpg', 1),
(8, 'Clara Yuliarti', 'P', '1979-03-17', 'Banten', 'Jl Tambak Rejo V/6, Surabaya, Jawa TImur', '12345', 12345, 12345, 'claramti@gmail.com', 'claramti', 'cd6dcc94', 'http://localhost/riset/proses/file/avatar0.jpg', 'http://localhost/riset/proses/file/avatar0.jpg', 1),
(9, 'Eli Pertiwi', 'P', '1980-04-27', 'Sulawesi Utara', 'Jl Perak Timur 120, Surabaya, Jawa Timur', '12345', 12345, 12345, 'elipwi@gmail.com', 'elipwi', '79566d98', 'http://localhost/riset/proses/file/avatar0.jpg', 'http://localhost/riset/proses/file/avatar0.jpg', 1),
(10, 'Tari Mayasari', 'P', '1980-06-29', 'Kalimantan Barat', 'Jl Ketintang Madya 92, Surabaya, Jawa TImur', '12345', 12345, 12345, 'tarimaspd@gmail.com', 'tarimaspd', 'e8e6baea', 'http://localhost/riset/proses/file/avatar0.jpg', 'http://localhost/riset/proses/file/avatar0.jpg', 1),
(11, 'Aris Saptono', 'L', '1981-02-16', 'Samarinda', 'Jl Malioboro 171, Yogyakarta', '12345', 12345, 12345, 'arissono@gmail.com', 'arissono', '13b4364b', 'http://localhost/riset/proses/file/avatar0.jpg', 'http://localhost/riset/proses/file/avatar0.jpg', 1),
(12, 'Damar Zulkarnain', 'L', '1983-09-25', 'Denpasar', 'Jl Legian 350, Denpasar, Bali', '12345', 12345, 12345, 'damarzain@gmail.com', 'damarzain', 'a050f00e', 'http://localhost/riset/proses/file/avatar0.jpg', 'http://localhost/riset/proses/file/avatar0.jpg', 1),
(13, 'Nasrullah Gunawan', 'L', '1984-11-16', 'Pasuruan', 'Jl Tegal Wangi II/14, Denpasar, Bali', '12345', 12345, 12345, 'nasrumak@gmail.com', 'nasrumak', '5d0183e0', 'http://localhost/riset/proses/file/avatar0.jpg', 'http://localhost/riset/proses/file/avatar0.jpg', 1),
(14, 'Yosef Kusuma Setiawan', 'L', '1985-03-11', 'Sulawesi Utara', 'Jl Raya Tugu-Boja Ngalian, Semarang, Jawa Tengah', '12345', 12345, 12345, 'yosefwan@gmail.com', 'yosefwan', '28c3910f', 'http://localhost/riset/proses/file/avatar0.jpg', 'http://localhost/riset/proses/file/avatar0.jpg', 1),
(15, 'Nyana Lasmono Firgantoro', 'L', '1980-12-31', 'Bogor', 'Jl Kp Nias II/12, Padang, Sumatera Barat', '12345', 12345, 12345, 'nyanst@gmail.com', 'nyanst', '1db6b064', 'http://localhost/riset/proses/file/avatar0.jpg', 'http://localhost/riset/proses/file/avatar0.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `prt_baru`
--

CREATE TABLE `prt_baru` (
  `ID_PRT` int(11) NOT NULL,
  `NAMA_PRT` varchar(100) NOT NULL,
  `JKEL_PRT` char(2) NOT NULL,
  `TL_PRT` date NOT NULL,
  `KOTA_LAHIR_PRT` varchar(100) NOT NULL,
  `ALAMAT_PRT` varchar(100) NOT NULL,
  `TELP_PRT` varchar(100) NOT NULL,
  `NO_KTP_PRT` bigint(20) NOT NULL,
  `NO_KK_PRT` bigint(20) NOT NULL,
  `EMAIL_PRT` varchar(100) NOT NULL,
  `USERNAME_PRT` varchar(100) NOT NULL,
  `PASSWORD_PRT` varchar(100) NOT NULL,
  `FOTO_KTP_PRT` text NOT NULL,
  `FOTO_KK_PRT` text NOT NULL,
  `PENDIDIKAN_TERAKHIR` varchar(20) NOT NULL,
  `PENGALAMAN_BEKERJA` varchar(10) NOT NULL,
  `STATUS_PRT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prt_baru`
--

INSERT INTO `prt_baru` (`ID_PRT`, `NAMA_PRT`, `JKEL_PRT`, `TL_PRT`, `KOTA_LAHIR_PRT`, `ALAMAT_PRT`, `TELP_PRT`, `NO_KTP_PRT`, `NO_KK_PRT`, `EMAIL_PRT`, `USERNAME_PRT`, `PASSWORD_PRT`, `FOTO_KTP_PRT`, `FOTO_KK_PRT`, `PENDIDIKAN_TERAKHIR`, `PENGALAMAN_BEKERJA`, `STATUS_PRT`) VALUES
(1, 'Siska Sihombing', 'P', '1980-01-01', 'Surabaya', 'Jl Kebonsari Sawahan 02, Surabaya, Jawa TImur', '081987367829', 12345, 12345, 'siska1@gmail.com', 'siska1', '12345', '', '', '5', '3', 1),
(2, 'Hana Uyainah', 'P', '1981-01-01', 'Malang', 'Jl May Sabara 2288 A, Sumatera Selatan, Palembang', '89763889120', 12345, 12345, 'hana2@gmail.com', 'hana1', '12345', '', '', '5', '2', 1),
(3, 'Tika Maryati', 'P', '1990-01-01', 'Jakarta', 'Jl Rajawali 3, Surabaya, Jawa TImur', '082987786123', 12345, 12345, 'tika1@gmail.com', 'tika1', '12345', '', '', '4', '2', 1),
(4, 'Diana Haryanti', 'P', '1985-01-13', 'Surabaya', 'Jl Karang Anyar Raya Pert Karang Anyar Permai Bl C/15-18, Jakarta', '089234556721', 12345, 12345, 'diana1@gmail.com', 'diana1', '12345', '', '', '4', '1', 1),
(5, 'Olivia Zulaika', 'P', '1989-04-08', 'Padang', 'Jl Ketintang Baru 2 27, Surabaya, Jawa TImur', '088788729182', 12345, 12345, 'olivazka@gmail.com', 'olivazka', '67e1019b', '', '', '4', '0', 1),
(6, 'Lintang Lestari', 'P', '1980-04-07', 'Padang', 'Jl Barata Jaya III 88, Gubeng, Surabaya', '081898298372', 12345, 12345, 'lintaari@gmail.com', 'lintaari', '090a27bc', '', '', '4', '1', 1),
(9, 'Sakura Rahayu Maryati', 'P', '1977-09-06', 'Surabaya', 'Jl Perak Timur 120, Surabaya, Jawa Timur', '089766765122', 12345, 12345, 'sakurakom@gmail.com', 'sakurakom', '9c20cbf1', '', '', '4', '2', 1),
(10, 'Clara Yuliarti', 'P', '1980-03-17', 'Bali', 'Jl Tambak Rejo V/6, Surabaya, Jawa TImur', '089998765561', 12345, 12345, 'claramti@gmail.com', 'claramti', 'cd6dcc94', '', '', '3', '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sertifikat_pelatihan`
--

CREATE TABLE `sertifikat_pelatihan` (
  `ID_SERTIFIKAT_PELATIHAN` int(11) NOT NULL,
  `ID_PRT` int(11) NOT NULL,
  `NAMA_PRT` varchar(100) NOT NULL,
  `JUMLAH_SERTIFIKAT_PELATIHAN` int(11) NOT NULL,
  `DESKRIPSI` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sertifikat_pelatihan`
--

INSERT INTO `sertifikat_pelatihan` (`ID_SERTIFIKAT_PELATIHAN`, `ID_PRT`, `NAMA_PRT`, `JUMLAH_SERTIFIKAT_PELATIHAN`, `DESKRIPSI`) VALUES
(1, 1, 'Siska Sihombing', 2, 'Sertifikat Kompetensi Pelayanan Rumah Tangga - BNSP INDONESIA |\r\nSertifikat Kompetensi Masakan Keluarga - BNSP INDONESIA'),
(2, 2, 'Hana Uyainah', 1, 'Sertifikat Kompetensi Masakan Keluarga - BNSP INDONESIA'),
(3, 3, 'Tika Maryati', 4, 'Sertifikat Kompetensi Pelayanan Rumah Tangga - BNSP INDONESIA | Sertifikat Kompetensi Masakan Keluarga BNSP INDONESIA | Sertifikat Kompetensi Penjagaan Bayi - BNSP INDONESIA | Sertifikat Kompetensi Penjagaan Anak Balita - BNSP INDONESIA'),
(4, 4, 'Diana Haryanti', 1, 'Sertifikat Pelayanan Rumah Tangga - BNSP INDONESIA'),
(5, 5, 'Olivia Zulaika', 1, 'Sertifikat Komptensi Penjagaan Balita - BNSP INDONESIA'),
(6, 6, 'Lintang Lestari', 2, 'Sertifikat Komptensi Penjagaan Balita - BNSP INDONESIA | Sertifikat Komptensi Penjagaan Bayi - BNSP INDONESIA'),
(9, 9, 'Sakura Rahayu Maryati', 1, 'Sertifikat Kompetensi Masakan Keluarga - BNSP INDONESIA'),
(10, 10, 'Clara Yuliarti', 2, 'Sertifikat Kompetensi Pelayanan Rumah Tangga - BNSP INDONESIA | Sertifikat Kompetensi Masakan Keluarga - BNSP INDONESIA');

-- --------------------------------------------------------

--
-- Table structure for table `tes_keterampilan`
--

CREATE TABLE `tes_keterampilan` (
  `ID_TES_KETERAMPILAN` int(11) NOT NULL,
  `ID_PRT` int(11) NOT NULL,
  `NAMA_PRT` varchar(100) NOT NULL,
  `KETERAMPILAN_TATA_GRAHA` int(11) NOT NULL,
  `KETERAMPILAN_MEMASAK` int(11) NOT NULL,
  `KETERAMPILAN_JAGA_BALITA` int(11) NOT NULL,
  `KETERAMPILAN_JAGA_BAYI` int(11) NOT NULL,
  `KETERAMPILAN_JAGA_LANSIA` int(11) NOT NULL,
  `KETERAMPILAN_TATA_TAMAN` int(11) NOT NULL,
  `KETERAMPILAN_MENGEMUDI_KENDARAAN_KELUARGA` int(11) NOT NULL,
  `NILAI_TOTAL_KETERAMPILAN` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tes_keterampilan`
--

INSERT INTO `tes_keterampilan` (`ID_TES_KETERAMPILAN`, `ID_PRT`, `NAMA_PRT`, `KETERAMPILAN_TATA_GRAHA`, `KETERAMPILAN_MEMASAK`, `KETERAMPILAN_JAGA_BALITA`, `KETERAMPILAN_JAGA_BAYI`, `KETERAMPILAN_JAGA_LANSIA`, `KETERAMPILAN_TATA_TAMAN`, `KETERAMPILAN_MENGEMUDI_KENDARAAN_KELUARGA`, `NILAI_TOTAL_KETERAMPILAN`) VALUES
(4, 1, 'Siska Sihombing', 80, 80, 77, 80, 80, 90, 50, 77),
(5, 2, 'Hana Uyainah', 75, 77, 77, 75, 68, 30, 20, 60),
(6, 3, 'Tika Maryati', 96, 84, 88, 89, 84, 73, 55, 81),
(7, 4, 'Diana Haryanti', 88, 80, 82, 78, 82, 60, 40, 73),
(8, 5, 'Olivia Zulaika', 60, 60, 79, 73, 69, 40, 40, 60),
(9, 6, 'Lintang Lestari', 83, 84, 94, 88, 85, 65, 40, 77),
(12, 9, 'Sakura Rahayu Maryati', 80, 59, 90, 66, 88, 49, 40, 67),
(13, 10, 'Clara Yuliarti', 90, 40, 79, 80, 80, 40, 40, 64);

-- --------------------------------------------------------

--
-- Table structure for table `tes_pengetahuan`
--

CREATE TABLE `tes_pengetahuan` (
  `ID_TES_PENGETAHUAN` int(11) NOT NULL,
  `ID_PRT` int(11) NOT NULL,
  `NAMA_PRT` varchar(100) NOT NULL,
  `PENGETAHUAN_TATA_GRAHA` int(11) NOT NULL,
  `PENGETAHUAN_MEMASAK` int(11) NOT NULL,
  `PENGETAHUAN_JAGA_BALITA` int(11) NOT NULL,
  `PENGETAHUAN_JAGA_BAYI` int(11) NOT NULL,
  `PENGETAHUAN_JAGA_LANSIA` int(11) NOT NULL,
  `PENGETAHUAN_TATA_TAMAN` int(11) NOT NULL,
  `PENGETAHUAN_MENGEMUDI_KENDARAAN_KELUARGA` int(11) NOT NULL,
  `NILAI_TOTAL_PENGETAHUAN` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tes_pengetahuan`
--

INSERT INTO `tes_pengetahuan` (`ID_TES_PENGETAHUAN`, `ID_PRT`, `NAMA_PRT`, `PENGETAHUAN_TATA_GRAHA`, `PENGETAHUAN_MEMASAK`, `PENGETAHUAN_JAGA_BALITA`, `PENGETAHUAN_JAGA_BAYI`, `PENGETAHUAN_JAGA_LANSIA`, `PENGETAHUAN_TATA_TAMAN`, `PENGETAHUAN_MENGEMUDI_KENDARAAN_KELUARGA`, `NILAI_TOTAL_PENGETAHUAN`) VALUES
(2, 1, 'Siska Sihombing', 90, 90, 88, 85, 89, 70, 60, 82),
(14, 2, 'Hana Uyainah', 92, 77, 80, 86, 78, 78, 65, 79),
(15, 3, 'Tika Maryati', 93, 88, 85, 83, 81, 70, 60, 80),
(16, 4, 'Diana Haryanti', 88, 82, 79, 78, 83, 65, 40, 74),
(17, 5, 'Olivia Zulaika', 81, 78, 93, 85, 78, 65, 40, 74),
(18, 6, 'Lintang Lestari', 83, 85, 94, 88, 83, 65, 40, 77),
(21, 9, 'Sakura Rahayu Maryati', 77, 77, 77, 77, 77, 60, 40, 69),
(22, 10, 'Clara Yuliarti', 80, 55, 88, 77, 65, 40, 40, 64);

-- --------------------------------------------------------

--
-- Table structure for table `tes_sikap`
--

CREATE TABLE `tes_sikap` (
  `ID_TES_SIKAP` int(11) NOT NULL,
  `ID_PRT` int(11) NOT NULL,
  `NAMA_PRT` varchar(100) NOT NULL,
  `SIKAP_TATA_GRAHA` int(11) NOT NULL,
  `SIKAP_MEMASAK` int(11) NOT NULL,
  `SIKAP_JAGA_BALITA` int(11) NOT NULL,
  `SIKAP_JAGA_BAYI` int(11) NOT NULL,
  `SIKAP_JAGA_LANSIA` int(11) NOT NULL,
  `SIKAP_TATA_TAMAN` int(11) NOT NULL,
  `SIKAP_MENGEMUDI_KENDARAAN_KELUARGA` int(11) NOT NULL,
  `NILAI_TOTAL_SIKAP` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tes_sikap`
--

INSERT INTO `tes_sikap` (`ID_TES_SIKAP`, `ID_PRT`, `NAMA_PRT`, `SIKAP_TATA_GRAHA`, `SIKAP_MEMASAK`, `SIKAP_JAGA_BALITA`, `SIKAP_JAGA_BAYI`, `SIKAP_JAGA_LANSIA`, `SIKAP_TATA_TAMAN`, `SIKAP_MENGEMUDI_KENDARAAN_KELUARGA`, `NILAI_TOTAL_SIKAP`) VALUES
(1, 1, 'Siska Sihombing', 80, 80, 80, 80, 80, 80, 80, 80),
(2, 2, 'Hana Uyainah', 60, 60, 60, 60, 60, 60, 60, 60),
(4, 3, 'Tika Maryati', 93, 83, 84, 83, 86, 50, 40, 74),
(5, 4, 'Diana Haryanti', 88, 80, 82, 78, 80, 60, 40, 73),
(6, 5, 'Olivia Zulaika', 60, 65, 80, 69, 65, 40, 40, 60),
(7, 6, 'Lintang Lestari', 70, 75, 85, 76, 79, 50, 40, 68),
(10, 9, 'Sakura Rahayu Maryati', 77, 80, 66, 77, 80, 40, 40, 66),
(11, 10, 'Clara Yuliarti', 90, 80, 80, 80, 80, 40, 40, 70);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID_USER` int(11) NOT NULL,
  `NAMA_USER` varchar(20) NOT NULL,
  `USERNAME_USER` varchar(20) NOT NULL,
  `FOTO_USER` varchar(100) NOT NULL,
  `PASSWORD_USER` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID_USER`, `NAMA_USER`, `USERNAME_USER`, `FOTO_USER`, `PASSWORD_USER`) VALUES
(1, 'Admin', 'admin', 'http://localhost/riset/proses/file/avatar0.jpg', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `keahlian`
--
ALTER TABLE `keahlian`
  ADD PRIMARY KEY (`ID_KEAHLIAN`);

--
-- Indexes for table `kontrak`
--
ALTER TABLE `kontrak`
  ADD PRIMARY KEY (`ID_KONTRAK`);

--
-- Indexes for table `majikan`
--
ALTER TABLE `majikan`
  ADD PRIMARY KEY (`ID_MAJIKAN`);

--
-- Indexes for table `nilai_kompetensi`
--
ALTER TABLE `nilai_kompetensi`
  ADD PRIMARY KEY (`ID_NILAI_KOMPETENSI`);

--
-- Indexes for table `nilai_pengalaman`
--
ALTER TABLE `nilai_pengalaman`
  ADD PRIMARY KEY (`ID_NILAI_PENGALAMAN`);

--
-- Indexes for table `permintaan`
--
ALTER TABLE `permintaan`
  ADD PRIMARY KEY (`ID_PERMINTAAN`);

--
-- Indexes for table `profil_aktual`
--
ALTER TABLE `profil_aktual`
  ADD PRIMARY KEY (`ID_PROFIL`);

--
-- Indexes for table `prt`
--
ALTER TABLE `prt`
  ADD PRIMARY KEY (`ID_PRT`);

--
-- Indexes for table `prt_baru`
--
ALTER TABLE `prt_baru`
  ADD PRIMARY KEY (`ID_PRT`);

--
-- Indexes for table `sertifikat_pelatihan`
--
ALTER TABLE `sertifikat_pelatihan`
  ADD PRIMARY KEY (`ID_SERTIFIKAT_PELATIHAN`);

--
-- Indexes for table `tes_keterampilan`
--
ALTER TABLE `tes_keterampilan`
  ADD PRIMARY KEY (`ID_TES_KETERAMPILAN`);

--
-- Indexes for table `tes_pengetahuan`
--
ALTER TABLE `tes_pengetahuan`
  ADD PRIMARY KEY (`ID_TES_PENGETAHUAN`);

--
-- Indexes for table `tes_sikap`
--
ALTER TABLE `tes_sikap`
  ADD PRIMARY KEY (`ID_TES_SIKAP`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID_USER`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `keahlian`
--
ALTER TABLE `keahlian`
  MODIFY `ID_KEAHLIAN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `kontrak`
--
ALTER TABLE `kontrak`
  MODIFY `ID_KONTRAK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `nilai_kompetensi`
--
ALTER TABLE `nilai_kompetensi`
  MODIFY `ID_NILAI_KOMPETENSI` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `nilai_pengalaman`
--
ALTER TABLE `nilai_pengalaman`
  MODIFY `ID_NILAI_PENGALAMAN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `permintaan`
--
ALTER TABLE `permintaan`
  MODIFY `ID_PERMINTAAN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `profil_aktual`
--
ALTER TABLE `profil_aktual`
  MODIFY `ID_PROFIL` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prt`
--
ALTER TABLE `prt`
  MODIFY `ID_PRT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `prt_baru`
--
ALTER TABLE `prt_baru`
  MODIFY `ID_PRT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sertifikat_pelatihan`
--
ALTER TABLE `sertifikat_pelatihan`
  MODIFY `ID_SERTIFIKAT_PELATIHAN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tes_keterampilan`
--
ALTER TABLE `tes_keterampilan`
  MODIFY `ID_TES_KETERAMPILAN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tes_pengetahuan`
--
ALTER TABLE `tes_pengetahuan`
  MODIFY `ID_TES_PENGETAHUAN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tes_sikap`
--
ALTER TABLE `tes_sikap`
  MODIFY `ID_TES_SIKAP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID_USER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
