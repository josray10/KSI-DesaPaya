-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Nov 16, 2023 at 06:39 PM
-- Server version: 10.5.20-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `desapaya`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` char(20) NOT NULL,
  `password` char(20) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `status`) VALUES
('admin1', 'danycmpg', 0),
('admin2', 'februari', 0),
('kkn119', 'icalitera', 0);

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `gambar` longblob NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `waktu` date NOT NULL,
  `dilihat` int(11) NOT NULL,
  `isi` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `gambar`, `penulis`, `waktu`, `dilihat`, `isi`) VALUES
(1, 'Penyerahan Website Profil Desa Campang Tiga Bersama Kelompok KKN ITERA 119', 0x696d6167652f617274696b656c2f47616d626172312e6a7067, 'Administrator', '2023-01-24', 20, 'Pada tanggal 24 Januari 2023, di Desa Campang Tiga Kec. Sidomulyo telah melaksanakan penyerahan Website pertamanya yang dapat diakses oleh seluruh masyarakat baik yang ada di desa tersebut maupun yang di luar desa. Penyerahan Website Profil Desa Campang Tiga ini dilaksanakan oleh pengembang yaitu Akhmad Fahrizal, pendesain yaitu Abdul Azis Nasution, serta pembuat konten Lembaga Desa Kelompok Wanita Tani (KWT) Bunda Milenieal Sejahtera (BMS) yaitu Immanuel Fabian Fantasia yang berasal dari Kelompok KKN ITERA 119 bersama dengan Sekretaris Desa yaitu Bapak Mardani.\r\n\r\nProses pembuatan website profil desa diawali dengan pengumpulan data dan informasi mengenai desa yang akan dibuat website-nya. Data tersebut kemudian digunakan untuk menyusun konten website yang akan dibangun. Selanjutnya, website dibuat dengan menggunakan teknologi web yang sesuai dan dirancang dengan desain yang sesuai dengan kebutuhan masyarakat.\r\n\r\nSetelah website selesai dibuat, dilakukan pengujian untuk memastikan bahwa website tersebut berfungsi dengan baik dan dapat digunakan dengan mudah oleh masyarakat. Setelah pengujian selesai, website dapat diserahkan kepada pihak yang berwenang untuk digunakan dan dikelola.\r\n\r\nPenyerahan website profil desa merupakan salah satu cara untuk memberikan informasi yang dibutuhkan masyarakat dan mempermudah akses informasi mengenai desa tersebut. Dengan adanya website ini, masyarakat dapat dengan mudah mengetahui informasi mengenai desa yang mereka tinggali, sehingga dapat membantu dalam pengembangan desa tersebut.'),
(2, 'Penyerahan Plakat dari Mahasiswa KKN ITERA Kepada Kepala Desa Campang Tiga', 0x696d6167652f617274696b656c2f47616d626172322e6a706567, 'MARDANI ( SEKRETARIS DESA CAMPANG TIGA', '2023-01-26', 2, 'Temu Pamit dan Penyerahan Plakat dari KKN Mahasiswa ITERA Kepaada Pemerintah Desa Campang Tiga , Kecamatan Sidomulyo Kab. Lampung selatan yang diterima oleh Kepala Desa Campang Tiga Bapak Masri Efendi dan Sekretaris Desa Mardani'),
(3, 'Fhoto Bersama dengan Mahasiswa KKN dari ITERA di Aula Kantor Desa Campang Tiga', 0x696d6167652f617274696b656c2f47616d626172332e6a706567, 'MARDANI ( SEKRETARIS DESA CAMPANG TIGA )', '2023-01-26', 0, 'Perpisahan / Temu pamit dan Fhoto Bersama dengan Mahasiswa KKN dari ITERA di Kantor Desa campang Tiga Kecamatan sidomulyo tanggal 25 januari 2023');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
