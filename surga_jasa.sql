-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2023 at 06:12 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `surga_jasa`
--

-- --------------------------------------------------------

--
-- Table structure for table `bengkel`
--

CREATE TABLE `bengkel` (
  `id_bengkel` int(11) NOT NULL,
  `nama_bengkel` varchar(100) DEFAULT NULL,
  `alamat_bengkel` varchar(100) DEFAULT NULL,
  `no_hp_bengkel` char(50) DEFAULT NULL,
  `gambar` blob DEFAULT NULL,
  `deskripsi_bengkel` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bengkel`
--

INSERT INTO `bengkel` (`id_bengkel`, `nama_bengkel`, `alamat_bengkel`, `no_hp_bengkel`, `gambar`, `deskripsi_bengkel`) VALUES
(2, 'Bengkel Lotech', 'Kota Bandung', '02424242455', 0x6c6f746563682e706e67, 'Layanan Pelanggan: Bengkel motor di Bandung umumnya memberikan pelayanan yang baik kepada pelanggan. Mereka dapat memberikan perkiraan biaya perbaikan yang jelas dan transparan, memberikan penjelasan mendalam mengenai pekerjaan yang akan dilakukan, serta memberikan saran dan rekomendasi yang sesuai untuk perawatan motor pelanggan.'),
(3, 'Bengkel Daya', 'Kota Bandung', '082343536444', 0x646179612e706e67, 'Layanan Pelanggan: Bengkel motor di Bandung umumnya memberikan pelayanan yang baik kepada pelanggan. Mereka dapat memberikan perkiraan biaya perbaikan yang jelas dan transparan, memberikan penjelasan mendalam mengenai pekerjaan yang akan dilakukan, serta memberikan saran dan rekomendasi yang sesuai untuk perawatan motor pelanggan.'),
(4, 'Bengkel Ditech', 'Kota Bandung', '083453534', 0x6469746563682e706e67, 'Adapun bengkel kami di dukung oleh tenaga ahli yang sudah berpengalaman dalam bidangnya dan kami menerima perawatan dan perbaikan hampir seluruh jenis kendaraan dari mulai kendaraan Eropa dan Asia, kami bekerja sama dengan jaringan mekanik');

-- --------------------------------------------------------

--
-- Table structure for table `catering`
--

CREATE TABLE `catering` (
  `id_catering` int(11) NOT NULL,
  `nama_catering` varchar(100) DEFAULT NULL,
  `alamat_catering` varchar(100) DEFAULT NULL,
  `no_hp_catering` char(50) DEFAULT NULL,
  `gambar` blob DEFAULT NULL,
  `deskripsi_catering` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `catering`
--

INSERT INTO `catering` (`id_catering`, `nama_catering`, `alamat_catering`, `no_hp_catering`, `gambar`, `deskripsi_catering`) VALUES
(1, 'D Yummy', 'Kota Bandung', '082342443433', 0x6479756d6d79312e706e67, 'Ada ratusan Catering di Bandung yang bisa anda datangi atau anda temukan dari search engine google. Tapi kenapa saat ini anda ketemu dengan D\'Yummy Catering? Mungkin memang inilah solusi yang sedang anda cari'),
(2, 'Catering Mami', 'Kota Bandung', '08495894832', 0x6d616d692e706e67, 'Chef Catering Mami Berpengalaman Menghandle Salah satu hotel bintang 4. Cara Pesan Minimal H-7. Apabila Memesan Mendekati Hari Pengirimanan maka dibayarkan penuh di depan.'),
(3, 'Catering Soewardono ', 'Kota Bandung', '08234242432', 0x736f6577617264616e612e706e67, 'Kami menyajikan beragam pilihan aneka hidangan, dekorasi catering dan juga tema pelaminan.\r\nSemua pilihan dapat disesuaikan dengan tema dan nuansa acara ataupun resepsi pernikahan Anda.\r\nJika Anda berencana mencari jasa catering dan dekorasi, Anda berada di situs yang tepat.');

-- --------------------------------------------------------

--
-- Table structure for table `laundry`
--

CREATE TABLE `laundry` (
  `id_laundry` int(11) NOT NULL,
  `nama_laundry` varchar(100) DEFAULT NULL,
  `alamat_laundry` varchar(100) DEFAULT NULL,
  `no_hp_laundry` char(50) DEFAULT NULL,
  `gambar` blob DEFAULT NULL,
  `deskripsi_laundry` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `laundry`
--

INSERT INTO `laundry` (`id_laundry`, `nama_laundry`, `alamat_laundry`, `no_hp_laundry`, `gambar`, `deskripsi_laundry`) VALUES
(1, 'Amala Laundry', 'Jalan Amir Machmud 700', '013213312414', 0x616d616c612e706e67, 'Penyedia jasa laundry adalah pihak yang memiliki fasilitas dan keahlian dalam mencuci, menyetrika, dan merawat pakaian pelanggan. Mereka menerima pakaian kotor, mencuci sesuai dengan instruksi dan kebutuhan pelanggan, dan mengembalikan pakaian yang bersih, harum, dan terawat dengan baik.'),
(3, 'P H Laundry', 'Kota Bandung', '02342342343', 0x70686669782e706e67, 'Penyedia jasa laundry yang baik akan menggunakan peralatan modern dan deterjen yang tepat, serta memperhatikan jenis kain dan instruksi khusus. Mereka dapat memberikan layanan jemput-antar, menjaga keamanan pakaian, dan memberikan pelayanan yang ramah dan efisien kepada pelanggan.'),
(4, 'Sorcha Laundry Kosambi', 'Kota Bandung', '02342424242', 0x73622e706e67, 'Sorcha Laundry Kosambi merupakan cabang dari Sorcha Laundry yang melayani area Bandung dan sekitarnya. \r\nSorcha Laundry Kosambi menerima Laundry Kiloan, Premium Satuan, Bed Cover, Sepatu, Tas, Baby Stroller, dan lain-lain.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'Usep Marpuah', 'hilmanmahasiswa@gmail.com', 'default.jpg', '$2y$10$YxF4Nx28K.lOWbu8wsGFUO54NDpMqtHDzfTni8YET7fzPv4uiS1AG', 2, 1, 1686668713),
(2, 'Entis', 'entis@gmail.com', 'default.jpg', '$2y$10$MJVandnEV/fTWkAqIzVJGehATBODdtxYk1Mj9YgGuEMOz98Kc7h6u', 2, 1, 1686854750);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `url` varchar(200) NOT NULL,
  `icon` varchar(200) NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bengkel`
--
ALTER TABLE `bengkel`
  ADD PRIMARY KEY (`id_bengkel`);

--
-- Indexes for table `catering`
--
ALTER TABLE `catering`
  ADD PRIMARY KEY (`id_catering`);

--
-- Indexes for table `laundry`
--
ALTER TABLE `laundry`
  ADD PRIMARY KEY (`id_laundry`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bengkel`
--
ALTER TABLE `bengkel`
  MODIFY `id_bengkel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `catering`
--
ALTER TABLE `catering`
  MODIFY `id_catering` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `laundry`
--
ALTER TABLE `laundry`
  MODIFY `id_laundry` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
