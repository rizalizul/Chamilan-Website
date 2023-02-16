-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 11 Mar 2019 pada 09.07
-- Versi Server: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_chamilan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `harga` int(13) NOT NULL,
  `deskripsi1` varchar(255) NOT NULL,
  `deskripsi2` varchar(255) NOT NULL,
  `kategori` enum('-','Asin','Manis','Pedas') NOT NULL,
  `stok` int(12) NOT NULL,
  `gambar` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `nama_produk`, `harga`, `deskripsi1`, `deskripsi2`, `kategori`, `stok`, `gambar`) VALUES
(20, 'Rin-bee', 3000, 'Terbuat dari keju alami', 'Rin-bee adalah makanan ringan yang banyak di gemari oleh seluruh masyarakat Indonesia. Rin-bee juga salah satu makanan ringan yang murah dan memiliki cita rasa yang enak dan aman.', 'Asin', 24, 0x31702e6a7067),
(21, 'Shoops', 7000, 'Terbuat dari keju alami dan bahan-bahan tanpa pengawet.', 'Shoops adalah makanan ringan yang memiliki berbagai macan rasa yang enak.', 'Manis', 10, 0x3170702e6a7067),
(22, 'Oishi Caramel POPCORN | Rasa Karamel', 7500, 'Terbuat dari jagung pilihan dan campuran bahan-bahan alami tanpa pengawet.', 'Oishi Caramel Popcorn adalah makanan yang murah.', 'Manis', 5, 0x317070702e676966),
(23, 'Kriuk Kriuk', 4500, 'Terbuat dari gandum dan bahan campuran alami', 'Kriuk Kriuk adalah makanan murah', 'Asin', 20, 0x31707070702e6a7067),
(24, 'Tempe Goreng Kering', 12000, 'Terbuat dari tempe alami', 'Tempe Goreng Kering makanan yang sangat menantang.', 'Pedas', 11, 0x74656d70652e6a7067),
(25, 'Kripik Pedas', 17000, 'Terbuat dari singkong alami', 'Kripik Pedas adalah makanan khas sunda.', 'Pedas', 31, 0x70656461732e706e67),
(26, 'Pastel Goreng', 12000, 'Terbuat dari Bahan Alamai tanpa pengawet.', 'Pastel yang sangat gurih dan renyah.', 'Asin', 12, 0x31612e6a7067),
(27, 'Pota Bee', 9000, 'Terbuat dari kentang alami', 'Pota Bee adalah makanan yang praktis', 'Asin', 10, 0x3161612e706e67),
(28, 'Pisang Kering', 7000, 'Terbuat dari pisang alami dan bahan tanpa pengawet.', 'Pisang Kering adalah makanan khas jawabarat.', 'Manis', 12, 0x3162622e6a7067);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `lvl` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama_lengkap`, `email`, `lvl`) VALUES
(1, 'bilalm7', 'bilal123', 'Bilal Maulana Sudrajat', 'bilalmaulanas4@gmail.com', 0),
(2, 'admin', 'admin', 'admin', 'admin@gmail.com', 1),
(3, 'rizal', 'rizal123', 'Muhamad Rizal', 'rizalizul@gmail.com', 0),
(4, 'admin2', 'admin2', 'admin2', 'admin2@gmail.com', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
