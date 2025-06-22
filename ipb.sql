-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2022 at 05:01 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ipb`
--

-- --------------------------------------------------------

--
-- Table structure for table `bom`
--

CREATE TABLE `bom` (
  `id_barang` int(100) NOT NULL,
  `jenis_bom` varchar(100) NOT NULL,
  `kode_material` varchar(100) NOT NULL,
  `no_dokumen` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `ambil_barang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bom`
--

INSERT INTO `bom` (`id_barang`, `jenis_bom`, `kode_material`, `no_dokumen`, `tanggal`, `ambil_barang`) VALUES
(26, 'FINISH GOOD 2', 'RM00022', 'BOM-TI.00001', '2022-08-08', '10'),
(27, 'FINISH GOOD', 'RM00022', 'BOM-TI.00001', '2022-08-08', '10'),
(28, 'FINISH GOOD', 'RM00022', 'BOM-TI.00001', '2022-08-08', '10'),
(30, 'FINISH GOOD', '2001', 'BOM-TI.00001', '2022-08-10', '5'),
(31, 'FINISH GOOD', 'RM00022', 'BOM-TI.00001', '2022-08-10', '5'),
(32, 'FINISH GOOD', 'RM00022', 'BOM-TI.00001', '2022-08-10', '5');

-- --------------------------------------------------------

--
-- Table structure for table `costumer_order`
--

CREATE TABLE `costumer_order` (
  `id_barang` int(100) NOT NULL,
  `kode_barang` varchar(100) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `stok_order` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `costumer_order`
--

INSERT INTO `costumer_order` (`id_barang`, `kode_barang`, `nama_barang`, `stok_order`) VALUES
(13, 'BRG0010', 'roti', 200),
(18, 'kmp321', 'donat', 300);

-- --------------------------------------------------------

--
-- Table structure for table `co_keluar`
--

CREATE TABLE `co_keluar` (
  `id_barang` int(100) NOT NULL,
  `kode_barang` varchar(100) NOT NULL,
  `nama_co` varchar(100) NOT NULL,
  `tgl_co` date NOT NULL,
  `jml_co` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `co_keluar`
--

INSERT INTO `co_keluar` (`id_barang`, `kode_barang`, `nama_co`, `tgl_co`, `jml_co`) VALUES
(5, 'kmp321', 'hika', '2022-09-14', 100);

-- --------------------------------------------------------

--
-- Table structure for table `co_stok`
--

CREATE TABLE `co_stok` (
  `id_barang` int(100) NOT NULL,
  `kode_barang` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `brg_msk` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `co_stok`
--

INSERT INTO `co_stok` (`id_barang`, `kode_barang`, `tanggal`, `brg_msk`) VALUES
(2, 'BRG0009', '2022-09-02', 200),
(4, 'BRG0010', '2022-09-02', 200),
(6, 'kmp321', '2022-09-02', 200);

-- --------------------------------------------------------

--
-- Table structure for table `co_user`
--

CREATE TABLE `co_user` (
  `id_customer` int(100) NOT NULL,
  `nama_co` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `co_user`
--

INSERT INTO `co_user` (`id_customer`, `nama_co`, `alamat`, `no_telp`) VALUES
(1, 'hika', 'bogor', 89),
(2, 'erlan', 'jl puncak cisarua', 98);

-- --------------------------------------------------------

--
-- Table structure for table `data_barang`
--

CREATE TABLE `data_barang` (
  `id_barang` int(100) NOT NULL,
  `kode_material` varchar(100) NOT NULL,
  `nama_material` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `total` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_barang`
--

INSERT INTO `data_barang` (`id_barang`, `kode_material`, `nama_material`, `kategori`, `jumlah`, `total`) VALUES
(1, 'RM00001', 'Preform 330ml', 'AMDK', 10, 10),
(2, 'RM00002', 'Preform 660 mL', 'AMDK', 20, 20),
(3, 'RM00003', 'Preform 1500 mL', 'AMDK', 10, 10),
(4, 'RM00004', 'Preform 350 mL', 'Minuman RTD', 0, 0),
(5, 'RM00005', 'Preform 500 mL', 'Minuman RTD', 0, 0),
(6, 'RM00006', 'Cap HDPE AMDK', 'AMDK', 0, 0),
(7, 'RM00007', 'Cap HDPE RTD', 'AMDK', 0, 0),
(8, 'RM00008', 'Karton AMDK 330 mL', 'AMDK', 0, 0),
(9, 'RM00009', 'Karton AMDK 660 mL', 'AMDK', 0, 0),
(10, 'RM00010', 'Karton AMDK 1500 mL', 'AMDK', 0, 0),
(11, 'RM00011', 'Karton RTD 350 mL', 'Minuman RTD', 0, 0),
(12, 'RM00012', 'Karton RTD 500 mL', 'Minuman RTD', 10, 10),
(13, 'RM00013', 'Label Botol AMDK 330 mL', 'AMDK', 0, 0),
(14, 'RM00014', 'Label Botol AMDK 660 mL', 'AMDK', 5, 5),
(15, 'RM00015', 'Label Botol AMDK 1500 mL', 'AMDK', 0, 0),
(16, 'RM00016', 'Label Botol RTD 350 mL', 'Minuman RTD', 0, 0),
(17, 'RM00017', 'Label Botol RTD 500 mL', 'Minuman RTD', 0, 0),
(18, 'RM00018', 'Lakban Kardus AMDK', 'AMDK', 10, 10),
(19, 'RM00019', 'Lakban Kardus Minuman RTD', 'Minuman RTD', 10, 10),
(20, 'RM00020', 'Air Baku AMDK', 'AMDK', 0, 0),
(21, 'RM00021', 'Gula Pasir', 'Minuman RTD', 0, 0),
(22, 'RM00022', 'Teh Hitam', 'Minuman RTD', 35, 35),
(24, '2001', 'kopi', 'AMDK', 30, 30);

-- --------------------------------------------------------

--
-- Table structure for table `produksi`
--

CREATE TABLE `produksi` (
  `id_barang` int(100) NOT NULL,
  `kode_barang` varchar(100) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah` int(100) NOT NULL,
  `satuan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produksi`
--

INSERT INTO `produksi` (`id_barang`, `kode_barang`, `nama_barang`, `tanggal`, `jumlah`, `satuan`) VALUES
(1, 'BRG0009', 'Acer aspire 6', '2022-08-31', 550, 'Karton'),
(2, 'sdadas', 'ewing', '2022-08-04', 500, 'karton');

-- --------------------------------------------------------

--
-- Table structure for table `produksi_sortir`
--

CREATE TABLE `produksi_sortir` (
  `id_barang` int(100) NOT NULL,
  `kode_barang` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `hasil` int(100) NOT NULL,
  `reject` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produksi_sortir`
--

INSERT INTO `produksi_sortir` (`id_barang`, `kode_barang`, `tanggal`, `hasil`, `reject`) VALUES
(1, 'BRG0009', '2022-09-30', 100, 50);

-- --------------------------------------------------------

--
-- Table structure for table `produksi_tambah`
--

CREATE TABLE `produksi_tambah` (
  `id_barang` int(100) NOT NULL,
  `kode_barang` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `brg_msk` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produksi_tambah`
--

INSERT INTO `produksi_tambah` (`id_barang`, `kode_barang`, `tanggal`, `brg_msk`) VALUES
(4, 'sdadas', '2022-10-30', 100),
(5, 'BRG0009', '2022-09-02', 300),
(6, 'BRG0009', '2022-09-02', 50);

-- --------------------------------------------------------

--
-- Table structure for table `suplier`
--

CREATE TABLE `suplier` (
  `id_suplier` int(100) NOT NULL,
  `nama_suplier` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `kode_material` varchar(100) NOT NULL,
  `barang_masuk` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suplier`
--

INSERT INTO `suplier` (`id_suplier`, `nama_suplier`, `tanggal`, `kode_material`, `barang_masuk`) VALUES
(1, 'akua', '2022-08-22', '2001', 10),
(2, 'akua', '2022-08-22', '2001', 5),
(3, 'akua', '2022-08-22', '2001', 10),
(5, 'iwing', '2022-08-30', 'RM00019', 10),
(6, 'iwing', '2022-08-30', 'RM00014', 5),
(7, 'akua', '2022-08-30', 'RM00018', 10);

-- --------------------------------------------------------

--
-- Table structure for table `suplier_user`
--

CREATE TABLE `suplier_user` (
  `id_suplier2` int(100) NOT NULL,
  `nama_suplier` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suplier_user`
--

INSERT INTO `suplier_user` (`id_suplier2`, `nama_suplier`, `alamat`, `no_telp`) VALUES
(1, 'irwin', 'dramagon', 2147483647),
(2, 'akua', 'dramagon', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Aktif'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `level`, `status`) VALUES
(1, 'admin', 'admin', '123', 'administrator', 'Aktif'),
(3, 'irwin', 'ewing', '123', 'user', 'Aktif'),
(4, 'erlan', 'erlan', '123', 'administrator', 'Aktif'),
(5, 'hika', 'hika', '202cb962ac59075b964b07152d234b70', 'administrator', 'Aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bom`
--
ALTER TABLE `bom`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `kode_material` (`kode_material`);

--
-- Indexes for table `costumer_order`
--
ALTER TABLE `costumer_order`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `co_keluar`
--
ALTER TABLE `co_keluar`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `co_stok`
--
ALTER TABLE `co_stok`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `co_user`
--
ALTER TABLE `co_user`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `data_barang`
--
ALTER TABLE `data_barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `kode_material` (`kode_material`);

--
-- Indexes for table `produksi`
--
ALTER TABLE `produksi`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `produksi_sortir`
--
ALTER TABLE `produksi_sortir`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `produksi_tambah`
--
ALTER TABLE `produksi_tambah`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `suplier`
--
ALTER TABLE `suplier`
  ADD PRIMARY KEY (`id_suplier`);

--
-- Indexes for table `suplier_user`
--
ALTER TABLE `suplier_user`
  ADD PRIMARY KEY (`id_suplier2`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bom`
--
ALTER TABLE `bom`
  MODIFY `id_barang` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `costumer_order`
--
ALTER TABLE `costumer_order`
  MODIFY `id_barang` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `co_keluar`
--
ALTER TABLE `co_keluar`
  MODIFY `id_barang` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `co_stok`
--
ALTER TABLE `co_stok`
  MODIFY `id_barang` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `co_user`
--
ALTER TABLE `co_user`
  MODIFY `id_customer` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `data_barang`
--
ALTER TABLE `data_barang`
  MODIFY `id_barang` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `produksi`
--
ALTER TABLE `produksi`
  MODIFY `id_barang` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `produksi_sortir`
--
ALTER TABLE `produksi_sortir`
  MODIFY `id_barang` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `produksi_tambah`
--
ALTER TABLE `produksi_tambah`
  MODIFY `id_barang` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `suplier`
--
ALTER TABLE `suplier`
  MODIFY `id_suplier` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `suplier_user`
--
ALTER TABLE `suplier_user`
  MODIFY `id_suplier2` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
