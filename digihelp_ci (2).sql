-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2022 at 09:11 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digihelp_ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `expiry_date` varchar(50) NOT NULL,
  `created_at` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `auth_tokens`
--

INSERT INTO `auth_tokens` (`id`, `user_id`, `token`, `expiry_date`, `created_at`) VALUES
(1, 3, 'a564bb6aecac02a214134c72d0848226418ff8bde28bc630d17cc332e6071a80', '2022-12-02 19:26:27', '2022-12-01 19:26');

-- --------------------------------------------------------

--
-- Table structure for table `penerima`
--

CREATE TABLE `penerima` (
  `id` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nohprt` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penerima`
--

INSERT INTO `penerima` (`id`, `nik`, `nama`, `kecamatan`, `alamat`, `nohprt`) VALUES
(10, '1234567456765339', 'Auliya cahya', 'Bogor Utara', 'Jl. Kiku 45989', 6282762562759),
(11, '1234567456765340', 'Sumandiya', 'Bogor Barat', 'Jl. Merdeka 55', 6284624245536),
(43, '1234567456765340', 'Sumandiya', 'Bogor Barat', 'Jl. Merdeka 55', 8776545756),
(44, '1234567459875660', 'test12', 'Bogor Utara', 'jalan jalan', 8777654545),
(45, '5625387243809898', 'test1', 'Bogor Utara', 'jalan jalan', 8554345567),
(46, '7623765832587329', 'test5', 'Bogor Utara', 'jalmmm', 8776554267),
(47, '7647364738378438', 'test0', 'Bogor Barat', 'jalmmm', 8123212322),
(48, '6289348394893849', 'test7', 'Bogor Barat', 'hhhhhhh', 8777641345),
(49, '1234567456765340', 'Sumandiya', 'Bogor Barat', 'Jl. Merdeka 55', 628776545756),
(50, '1234567459875660', 'test12', 'Bogor Utara', 'jalan jalan', 628777654545),
(51, '5625387243809898', 'test1', 'Bogor Utara', 'jalan jalan', 62554345567),
(52, '7623765832587329', 'test5', 'Bogor Utara', 'jalmmm', 62776554267),
(53, '7647364738378438', 'test0', 'Bogor Barat', 'jalmmm', 62123212322),
(54, '6289348394893849', 'test7', 'Bogor Barat', 'hhhhhhh', 62777641367),
(57, '1234567456765340', 'Sumandiya', 'Bogor Barat', 'Jl. Merdeka 55', 628776545756),
(58, '1234567459875660', 'test12', 'Bogor Utara', 'jalan jalan', 628777654545),
(59, '5625387243809898', 'test1', 'Bogor Utara', 'jalan jalan', 62554345567),
(60, '7623765832587329', 'test5', 'Bogor Utara', 'jalmmm', 62776554267),
(61, '7647364738378438', 'test0', 'Bogor Barat', 'jalmmm', 62123212322),
(62, '6289348394893849', 'test7', 'Bogor Barat', 'hhhhhhh', 62777641367);

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `jenis_barang` varchar(50) DEFAULT NULL,
  `id_penerima` varchar(3) DEFAULT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `photo_barang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `nama_barang`, `jenis_barang`, `id_penerima`, `deskripsi`, `photo_barang`) VALUES
(8, 'Setrika Listrik Tegangan Rendah', 'Elektronik', '50', 'Bu Yena membutuhkan setrika untuk membuka laundry demi memenuhi kebutuhan sekolah ke-empat anaknya', 'courses-11.png'),
(9, 'Kompor Berharga untuk Bu Tum', 'Alat Sekolah', '43', 'Hidup di kota tanpa kompor membuat Bu Tum kesulitan untuk mengurus keperluan makan sehari-hari', 'courses-2.png'),
(10, 'Sepasang Sepatu untuk Budi', 'Alat Sekolah', '46', 'Budi siswa tingkat 3 SDN Bantarjati 6 yang berasal dari keluarga kurang mampu membutuhkan sepatu baru', 'courses-3.png'),
(11, 'Ranjang dan Kasur untuk Fadil', 'Furnitur', '51', 'Fadil harus memulai hidup mandiri setelah kedua orang tuanya meninggal, Fadil harus menyewa sebuah rumah kosong setelah menjual semua harta benda peninggalan orang tuanya untuk melunasi hutang', 'courses-4.png'),
(12, 'Tas untuk Dinda', 'Alat Sekolah', '48', 'Tas sederhana layak pakai dibutuhkan oleh Dinda untuk menunjang keperluan sekolahnya, dengan tas sederhana yang bisa dipakai untuk membawa buku, Dinda pasti menjadi lebih bersemangat untuk sekolah', 'courses-51.png'),
(13, 'Lemari untuk Keluarga Bapak Winar', 'Furnitur', '10', 'Rumah kecil berukuran 5mx5m tersebut ditempati oleh keluarga pak winar yang terdiri dari 8 orang, membutuhkan sebuah lemari untuk menampung baju mereka yang bertumpuk di pojok rumah', 'courses-6.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_donasi`
--

CREATE TABLE `tb_donasi` (
  `id_donasi` int(11) NOT NULL,
  `tanggal_donasi` date NOT NULL,
  `nama_donatur` varchar(50) NOT NULL,
  `nohp` varchar(14) DEFAULT NULL,
  `alamat` varchar(255) NOT NULL,
  `id_barang` varchar(3) NOT NULL,
  `nama_penerima` varchar(50) NOT NULL,
  `jenis_barang` varchar(50) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `gb_depan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_donasi`
--

INSERT INTO `tb_donasi` (`id_donasi`, `tanggal_donasi`, `nama_donatur`, `nohp`, `alamat`, `id_barang`, `nama_penerima`, `jenis_barang`, `nama_barang`, `gb_depan`) VALUES
(8, '2022-12-05', 'Dhila Aprilianti', '6287729471424', 'Jl. Kiku 45989', '13', '', 'Furnitur', 'Lemari untuk Keluarga Bapak Winar', 'courses-62.jpg'),
(9, '2022-12-07', 'ewdefe', 'g5g5g', 'g4g4g', '12', '', 'Alat Sekolah', 'Tas untuk Dinda', '????.jpg'),
(10, '2022-12-07', 'ewdefe', 'g5g5g', 'g4g4g', '12', '', 'Alat Sekolah', 'Tas untuk Dinda', 'download.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_donatur`
--

CREATE TABLE `tb_donatur` (
  `id_donatur` int(11) NOT NULL,
  `nama_donatur` varchar(50) NOT NULL,
  `nohp` varchar(14) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_donatur`
--

INSERT INTO `tb_donatur` (`id_donatur`, `nama_donatur`, `nohp`, `alamat`) VALUES
(1, 'Mutiara Jasmine', '6287729471424', 'jl galak'),
(4, 'sqllllll', 'efrgrf', 'yuhu'),
(5, 'desy', 'desy', 'desy');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penerima`
--

CREATE TABLE `tb_penerima` (
  `id` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nohprt` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(3, 'dhilakim', 'dhila@gmail.com', 'd033e22ae348aeb5660fc2140aec35850c4da997'),
(6, 'aprilkim', 'autumn@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penerima`
--
ALTER TABLE `penerima`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `tb_donasi`
--
ALTER TABLE `tb_donasi`
  ADD PRIMARY KEY (`id_donasi`);

--
-- Indexes for table `tb_donatur`
--
ALTER TABLE `tb_donatur`
  ADD PRIMARY KEY (`id_donatur`);

--
-- Indexes for table `tb_penerima`
--
ALTER TABLE `tb_penerima`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `penerima`
--
ALTER TABLE `penerima`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_donasi`
--
ALTER TABLE `tb_donasi`
  MODIFY `id_donasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_donatur`
--
ALTER TABLE `tb_donatur`
  MODIFY `id_donatur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_penerima`
--
ALTER TABLE `tb_penerima`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
