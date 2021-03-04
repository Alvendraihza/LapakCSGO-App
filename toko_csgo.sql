-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Agu 2020 pada 14.16
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_csgo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(5) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_bukti`
--

CREATE TABLE `tbl_bukti` (
  `id_bukti` int(5) NOT NULL,
  `rkode` varchar(100) NOT NULL,
  `tanggal_upload` date NOT NULL,
  `waktu_upload` datetime NOT NULL,
  `foto_bukti` varchar(255) NOT NULL,
  `notlp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_bukti`
--

INSERT INTO `tbl_bukti` (`id_bukti`, `rkode`, `tanggal_upload`, `waktu_upload`, `foto_bukti`, `notlp`) VALUES
(1, '9242', '2019-11-13', '2019-11-13 03:30:58', 'struk1.jpg', '081234567801'),
(2, '9862', '2019-11-13', '2019-11-13 03:32:18', 'struk1.jpg', '081234567802'),
(3, '9862', '2019-11-13', '2019-11-13 03:33:36', 'struk1.jpg', '081234567802'),
(4, '', '2019-11-13', '2019-11-13 03:33:59', '', ''),
(5, '9242', '2019-11-13', '2019-11-13 03:34:11', 'struk1.jpg', '081234567801'),
(6, '1760', '2020-01-14', '2020-01-14 17:26:36', 'struk1.jpg', '081234567802'),
(7, '6744', '2020-03-17', '2020-03-17 11:18:34', 'struk1.jpg', '081234567805'),
(8, '1159', '2020-04-14', '2020-04-14 11:22:01', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kat` int(5) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kat`, `keterangan`) VALUES
(1, 'AWP'),
(2, 'RIFLE'),
(3, 'PISTOL'),
(4, 'SMG'),
(5, 'HEAVY');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pelanggan`
--

CREATE TABLE `tbl_pelanggan` (
  `id_pelanggan` int(5) NOT NULL,
  `email_pelanggan` varchar(100) NOT NULL,
  `password_pelanggan` text NOT NULL,
  `nama_pelanggan` varchar(100) NOT NULL,
  `telepon_pelanggan` varchar(20) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pelanggan`
--

INSERT INTO `tbl_pelanggan` (`id_pelanggan`, `email_pelanggan`, `password_pelanggan`, `nama_pelanggan`, `telepon_pelanggan`, `alamat`) VALUES
(2, 'agus@gmail.com', 'agus123', 'Moh. Agus Setiawan', '081254658187', 'Lebeteng, Tarub'),
(3, 'anas@gmail.com', 'anas123', 'anas setiawan', '081254658185', 'Bekasi'),
(4, 'ucok@gmail.com', 'ucok123', 'ucok', '081254658122', 'Tambun'),
(5, 'fahmi@gmail.com', 'fahmi123', 'fahmi ariq', '081254658166', 'Bekasi'),
(6, '', '', 'fgrgr', '', ''),
(7, '', '', '', '', ''),
(8, '', '', '', '', ''),
(9, '', '', '', '', ''),
(10, '', '', 'sss', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pembelian`
--

CREATE TABLE `tbl_pembelian` (
  `id_pembelian` int(5) NOT NULL,
  `id_pelanggan` int(5) NOT NULL,
  `id_produk` int(5) NOT NULL,
  `tanggal_pembelian` date NOT NULL,
  `waktu` datetime NOT NULL,
  `total_pembelian` int(11) NOT NULL,
  `rkode` varchar(100) NOT NULL,
  `status_pembayaran` enum('Menunggu','Dibayar') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pembelian`
--

INSERT INTO `tbl_pembelian` (`id_pembelian`, `id_pelanggan`, `id_produk`, `tanggal_pembelian`, `waktu`, `total_pembelian`, `rkode`, `status_pembayaran`) VALUES
(1, 2, 5, '2019-11-08', '2019-11-08 09:37:18', 1200000, '3887', 'Menunggu'),
(2, 2, 5, '2019-11-08', '2019-11-08 09:37:18', 1200000, '3887', 'Menunggu'),
(3, 2, 5, '2019-11-08', '2019-11-08 09:37:18', 1200000, '3887', 'Menunggu'),
(4, 2, 6, '2019-11-08', '2019-11-08 09:38:10', 1000000, '5015', 'Menunggu'),
(5, 2, 6, '2019-11-08', '2019-11-08 09:38:10', 1000000, '5015', 'Menunggu'),
(6, 2, 6, '2019-11-08', '2019-11-08 09:39:30', 1000000, '9862', 'Dibayar'),
(7, 2, 5, '2019-11-08', '2019-11-08 09:55:38', 200000, '9242', 'Dibayar'),
(8, 2, 8, '2019-11-14', '2019-11-14 09:07:43', 300000, '9010', 'Dibayar'),
(9, 2, 8, '2020-01-14', '2020-01-14 23:24:50', 300000, '1760', 'Dibayar'),
(10, 3, 7, '2020-03-17', '2020-03-17 17:17:08', 850000, '6744', 'Dibayar'),
(11, 3, 8, '2020-04-14', '2020-04-14 16:21:46', 300000, '1159', 'Menunggu'),
(12, 3, 6, '2020-04-14', '2020-04-14 21:16:03', 21450000, '2605', 'Menunggu'),
(13, 2, 10, '2020-07-20', '2020-07-20 23:38:00', 150000, '7046', 'Menunggu'),
(14, 2, 6, '2020-07-21', '2020-07-21 23:47:54', 21300000, '1485', 'Menunggu'),
(15, 2, 6, '2020-07-22', '2020-07-22 00:27:38', 21150000, '7474', 'Menunggu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pembelian_produk`
--

CREATE TABLE `tbl_pembelian_produk` (
  `id_pembelian_produk` int(5) NOT NULL,
  `id_pelanggan` int(5) NOT NULL,
  `id_pembelian` int(5) NOT NULL,
  `id_produk` int(5) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pembelian_produk`
--

INSERT INTO `tbl_pembelian_produk` (`id_pembelian_produk`, `id_pelanggan`, `id_pembelian`, `id_produk`, `jumlah`) VALUES
(1, 2, 6, 6, 1),
(2, 2, 7, 5, 1),
(3, 2, 8, 8, 1),
(4, 2, 9, 8, 1),
(5, 3, 10, 8, 2),
(6, 3, 10, 7, 1),
(7, 3, 11, 8, 1),
(8, 3, 12, 10, 1),
(9, 3, 12, 8, 1),
(10, 3, 12, 6, 1),
(11, 2, 13, 10, 1),
(12, 2, 14, 8, 1),
(13, 2, 14, 6, 1),
(14, 2, 15, 10, 1),
(15, 2, 15, 6, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_produk`
--

CREATE TABLE `tbl_produk` (
  `id_produk` int(5) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `deskripsi_produk` text NOT NULL,
  `kategori_produk` int(5) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_produk`
--

INSERT INTO `tbl_produk` (`id_produk`, `nama_produk`, `harga_produk`, `deskripsi_produk`, `kategori_produk`, `foto`) VALUES
(6, 'AWP - Dragon Lore', 21000000, 'Skin yang sangat di sukai oleh kebanyakan player csgo, skin ini sangatlah langka, merupakan sultan - tier weapon!', 1, 's422.png'),
(8, 'AK-47 - Aquamarine', 300000, 'Skin yang sangat di sukai oleh kebanyakan pemain csgo, anda harus memilikinya sekarang juga!', 2, '360fx360f1.png'),
(10, 'AK-47', 150000, 'Skin yang sangat di sukai oleh kebanyakan pemain csgo, anda harus memilikinya sekarang juga!', 2, '360fx360f1.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tbl_bukti`
--
ALTER TABLE `tbl_bukti`
  ADD PRIMARY KEY (`id_bukti`);

--
-- Indeks untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id_kat`);

--
-- Indeks untuk tabel `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indeks untuk tabel `tbl_pembelian`
--
ALTER TABLE `tbl_pembelian`
  ADD PRIMARY KEY (`id_pembelian`);

--
-- Indeks untuk tabel `tbl_pembelian_produk`
--
ALTER TABLE `tbl_pembelian_produk`
  ADD PRIMARY KEY (`id_pembelian_produk`);

--
-- Indeks untuk tabel `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_bukti`
--
ALTER TABLE `tbl_bukti`
  MODIFY `id_bukti` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kat` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
  MODIFY `id_pelanggan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tbl_pembelian`
--
ALTER TABLE `tbl_pembelian`
  MODIFY `id_pembelian` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tbl_pembelian_produk`
--
ALTER TABLE `tbl_pembelian_produk`
  MODIFY `id_pembelian_produk` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tbl_produk`
--
ALTER TABLE `tbl_produk`
  MODIFY `id_produk` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
