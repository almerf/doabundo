-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Okt 2019 pada 15.19
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.2.12

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
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `nama` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `kontak` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `isi_paket`
--

CREATE TABLE `isi_paket` (
  `paket_id` int(5) NOT NULL,
  `item_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `keranjang`
--

CREATE TABLE `keranjang` (
  `user_id` int(5) NOT NULL,
  `paket_id` int(5) NOT NULL,
  `makanan_id` int(5) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `makanan`
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

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket_makanan`
--

CREATE TABLE `paket_makanan` (
  `paket_id` int(5) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
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
-- Struktur dari tabel `user`
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
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`, `alamat`, `kontak`, `user_id`, `jenis_kelamin`, `e-mail`, `foto_profil`) VALUES
('cecep', 'cecep', 'Jalan Telekomunikasi', '628070798', 1, 'Laki-laki', 'cecep@gmail.com', 'null.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
