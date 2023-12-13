-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2023 at 04:38 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lifecod`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(5) NOT NULL,
  `nama_admin` varchar(100) DEFAULT NULL,
  `username` varchar(15) DEFAULT NULL,
  `password` char(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `nama_admin`, `username`, `password`) VALUES
(1, 'Farhan', 'farhan', 'farhan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_pesanan`
--

CREATE TABLE `tbl_detail_pesanan` (
  `id_detail` int(11) NOT NULL,
  `id_pesanan` int(11) DEFAULT NULL,
  `id_produk` int(11) DEFAULT NULL,
  `total_harga` int(11) DEFAULT NULL,
  `harga_pesanan` int(10) DEFAULT NULL,
  `jumlah_pesanan` int(10) DEFAULT NULL,
  `subtotal_pesanan` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gambar`
--

CREATE TABLE `tbl_gambar` (
  `id_gambar` int(5) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kategori` int(5) NOT NULL,
  `nama_kategori` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Sneakers'),
(2, 'Lari');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member`
--

CREATE TABLE `tbl_member` (
  `id_member` int(5) NOT NULL,
  `nama_member` varchar(100) NOT NULL,
  `username` varchar(15) DEFAULT NULL,
  `password` char(8) DEFAULT NULL,
  `no_telp` varchar(15) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `alamat` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_member`
--

INSERT INTO `tbl_member` (`id_member`, `nama_member`, `username`, `password`, `no_telp`, `email`, `alamat`) VALUES
(1, 'farhan', 'hansss', '1212121', '089620886009', 'farhan@gmail.com', 'bantul'),
(2, 'yanto', 'yantooooo', '123', '1892198291', 'yanto@gmail.com', 'sleman');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pesanan`
--

CREATE TABLE `tbl_pesanan` (
  `id_pesanan` int(5) NOT NULL,
  `id_member` int(5) DEFAULT NULL,
  `tgl_pesanan` date DEFAULT NULL,
  `harga_pesanan` int(10) DEFAULT NULL,
  `jumlah_pesanan` int(10) DEFAULT NULL,
  `total_harga` int(10) DEFAULT NULL,
  `subtotal_pesanan` int(10) DEFAULT NULL,
  `status_pembayaran` enum('sudah dibayar') DEFAULT NULL,
  `status_pesanan` enum('selesai') DEFAULT NULL,
  `ongkir` int(10) DEFAULT NULL,
  `kurir` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_produk`
--

CREATE TABLE `tbl_produk` (
  `id_produk` int(5) NOT NULL,
  `id_kategori` int(5) NOT NULL,
  `id_gambar` int(5) DEFAULT NULL,
  `nama_produk` varchar(100) DEFAULT NULL,
  `gambar` varchar(255) NOT NULL,
  `ukuran_produk` int(5) DEFAULT NULL,
  `warna_produk` varchar(255) DEFAULT NULL,
  `harga_produk` int(10) DEFAULT NULL,
  `stok` int(10) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_produk`
--

INSERT INTO `tbl_produk` (`id_produk`, `id_kategori`, `id_gambar`, `nama_produk`, `gambar`, `ukuran_produk`, `warna_produk`, `harga_produk`, `stok`, `deskripsi`) VALUES
(18, 1, NULL, 'Reebok', 'reebok.jpg', 43, 'putih', 400000, 3, 'merk reebok mantap'),
(19, 1, NULL, 'New Balance', 'new-balance.jpg', 43, 'Hitam', 500000, 3, 'mantap'),
(20, 2, NULL, 'Ortuseight', 'ortuseight.jpg', 40, 'Oren', 300000, 1, 'Sepatu ringan cocok buat jogging'),
(22, 1, NULL, 'a', 'a.jpeg', 28, 'Hitam', 600000, 3, 'Sepatu running');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_detail_pesanan`
--
ALTER TABLE `tbl_detail_pesanan`
  ADD PRIMARY KEY (`id_detail`),
  ADD UNIQUE KEY `id_pesanan` (`id_pesanan`);

--
-- Indexes for table `tbl_gambar`
--
ALTER TABLE `tbl_gambar`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tbl_member`
--
ALTER TABLE `tbl_member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `tbl_pesanan`
--
ALTER TABLE `tbl_pesanan`
  ADD PRIMARY KEY (`id_pesanan`),
  ADD UNIQUE KEY `id_member` (`id_member`);

--
-- Indexes for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD UNIQUE KEY `id_kategori` (`id_kategori`,`id_gambar`),
  ADD KEY `id_gambar` (`id_gambar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kategori` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_member`
--
ALTER TABLE `tbl_member`
  MODIFY `id_member` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  MODIFY `id_produk` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_detail_pesanan`
--
ALTER TABLE `tbl_detail_pesanan`
  ADD CONSTRAINT `tbl_detail_pesanan_ibfk_1` FOREIGN KEY (`id_pesanan`) REFERENCES `tbl_pesanan` (`id_pesanan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_gambar`
--
ALTER TABLE `tbl_gambar`
  ADD CONSTRAINT `tbl_gambar_ibfk_1` FOREIGN KEY (`id_gambar`) REFERENCES `tbl_produk` (`id_gambar`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
