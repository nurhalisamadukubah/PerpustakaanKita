-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Feb 2021 pada 07.38
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_perpus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `uname` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `uname`, `password`) VALUES
(8887, 'gita', 'd8578edf8458ce06fbc5bb76a58c5ca4'),
(8888, 'admin', '827ccb0eea8a706c4c34a16891f84e7b'),
(8889, 'frida', 'd8578edf8458ce06fbc5bb76a58c5ca4');

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(11) NOT NULL,
  `foto_anggota` varchar(100) NOT NULL,
  `nama_anggota` varchar(25) NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `tlp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `foto_anggota`, `nama_anggota`, `alamat`, `tlp`) VALUES
(3002, 'lisa.jpg', 'lisa', 'jl. gunung jati', '345679'),
(3004, 'rose.jpg', 'Mawar', 'Jl. bunga, 12', '345688');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `isbn` varchar(25) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `nama_penulis` varchar(100) NOT NULL,
  `nama_penerbit` varchar(50) NOT NULL,
  `nama_kategori` varchar(25) NOT NULL,
  `th_terbit` date NOT NULL,
  `jumlah_buku` int(11) NOT NULL,
  `foto_sampul` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id_buku`, `isbn`, `judul`, `nama_penulis`, `nama_penerbit`, `nama_kategori`, `th_terbit`, `jumlah_buku`, `foto_sampul`) VALUES
(4001, 'AA-2211', 'Bahasa Indonesia untuk Perguruan Tinggi', 'I Ketut Dibia', 'Gramedia', 'Bahasa', '2006-05-01', 13, 'Bahasa-Indonesia-Untuk-Perguruan-Tinggi.jpg'),
(4003, '442211', '24 Jam Belajar PHP', 'Edy Winarno', 'Elex Media', 'Komputer', '2018-10-17', 8, '24jamphp.jpg'),
(4005, '887766', 'Tree Growth in Brooklyn', 'betty smith', 'bentang', 'Novel Terjemahan', '2021-02-02', 7, 'TreeGrowsInBrooklyn.jpg'),
(4006, '779988', 'Dunia Sophie', 'Jostein Gaarder', 'Gramedia', 'Filsafat', '2016-05-03', 18, 'duniasophie.jpg'),
(4008, '990087', 'Bumi Manusia', 'Pramoedya Ananta Toer', 'Bentang', 'Novel Lokal', '2013-01-01', 9, 'bumimanusia.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(25) NOT NULL,
  `lokasi` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `lokasi`) VALUES
(1001, 'Bahasa', 'Rak A-1'),
(1002, 'Komputer', 'Rak A-1'),
(1003, 'Filsafat', 'Rak C-1'),
(1004, 'Novel Lokal', 'Rak B-1'),
(1005, 'Novel Terjemahan', 'Rak B-2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kembali`
--

CREATE TABLE `kembali` (
  `id_kembali` int(11) NOT NULL,
  `id_pinjam` int(11) NOT NULL,
  `tgl_kembali` date NOT NULL,
  `denda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kembali`
--

INSERT INTO `kembali` (`id_kembali`, `id_pinjam`, `tgl_kembali`, `denda`) VALUES
(1101, 9002, '2021-02-06', 0),
(1102, 9008, '2021-02-03', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pinjam`
--

CREATE TABLE `pinjam` (
  `id_pinjam` int(11) NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_batas` date NOT NULL,
  `tgl_kembali` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pinjam`
--

INSERT INTO `pinjam` (`id_pinjam`, `id_anggota`, `id_buku`, `tgl_pinjam`, `tgl_batas`, `tgl_kembali`, `id_admin`) VALUES
(9002, 3002, 4003, '2021-01-30', '2021-02-06', 0, 8888),
(9008, 3004, 4002, '2021-02-02', '2021-02-05', 0, 8887);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `kembali`
--
ALTER TABLE `kembali`
  ADD PRIMARY KEY (`id_kembali`);

--
-- Indeks untuk tabel `pinjam`
--
ALTER TABLE `pinjam`
  ADD PRIMARY KEY (`id_pinjam`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
