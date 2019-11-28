-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2019 at 06:11 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doabundo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `nama` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `kontak` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `isi_paket`
--

CREATE TABLE `isi_paket` (
  `paket_id` int(5) NOT NULL,
  `item_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `user_id` int(5) NOT NULL,
  `paket_id` int(5) NOT NULL,
  `makanan_id` int(5) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `makanan`
--

CREATE TABLE `makanan` (
  `item_id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `harga` int(12) NOT NULL,
  `rating` float NOT NULL,
  `jumlah_terjual` int(20) NOT NULL,
  `stok` int(5) NOT NULL,
  `komposisi` varchar(255) NOT NULL,
  `gizi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `makanan`
--

INSERT INTO `makanan` (`item_id`, `nama`, `deskripsi`, `harga`, `rating`, `jumlah_terjual`, `stok`, `komposisi`, `gizi`) VALUES
(1, 'Nasi', 'Nasi', 10000, 4.99, 333, 2, 'Nasi', 'C6H12O6'),
(2, 'Nasi Goreng', 'Nasi', 99999, 5, 333, 2, 'Nasi', 'C6H12O6');

-- --------------------------------------------------------

--
-- Table structure for table `paket_makanan`
--

CREATE TABLE `paket_makanan` (
  `paket_id` int(5) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `rating` float NOT NULL DEFAULT 0,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket_makanan`
--

INSERT INTO `paket_makanan` (`paket_id`, `nama`, `rating`, `harga`) VALUES
(1, 'Nasi Bakarrrr', 0, 88888);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `transaksi_id` int(3) NOT NULL,
  `tanggal` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `paket_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `kontak` varchar(20) NOT NULL,
  `user_id` int(5) NOT NULL,
  `jenis_kelamin` varchar(9) NOT NULL,
  `e-mail` varchar(20) NOT NULL,
  `foto_profil` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `alamat`, `kontak`, `user_id`, `jenis_kelamin`, `e-mail`, `foto_profil`) VALUES
('cecep', 'cecep', 'Jalan Telekomunikasi', '628070798', 1, 'Laki-laki', 'cecep@gmail.com', 'null.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `makanan`
--
ALTER TABLE `makanan`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `paket_makanan`
--
ALTER TABLE `paket_makanan`
  ADD PRIMARY KEY (`paket_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `makanan`
--
ALTER TABLE `makanan`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `paket_makanan`
--
ALTER TABLE `paket_makanan`
  MODIFY `paket_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
