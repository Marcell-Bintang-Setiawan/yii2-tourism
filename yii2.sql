-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Jun 2022 pada 16.10
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yii2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_assignment`
--

CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) NOT NULL,
  `user_id` varchar(64) NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('tambah-produk', '1', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_item`
--

CREATE TABLE `auth_item` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text DEFAULT NULL,
  `rule_name` varchar(64) DEFAULT NULL,
  `data` text DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('tambah-produk', 1, 'Memperbolehkan user untuk menambah produk', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_item_child`
--

CREATE TABLE `auth_item_child` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_rule`
--

CREATE TABLE `auth_rule` (
  `name` varchar(64) NOT NULL,
  `data` text DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id`, `nama`, `email`, `user_id`) VALUES
(1, 'coba_satu', 'coba_satu@coba.com', 1),
(2, 'coba_dua', 'coba_dua@coba.com', 2),
(3, 'coba_tiga', 'coba_tiga@coba.com', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `img_url` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `item`
--

INSERT INTO `item` (`id`, `nama`, `harga`, `img_url`, `category_id`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 'Sapu', 10000, 'sapu.6277a6c9b13f1.png', 1, NULL, 1652008649, NULL, 1),
(2, 'Payung', 10000, 'payung.6277a5793aa32.png', 1, 1648358063, 1652008313, NULL, 1),
(3, 'Toples', 5000, 'toples.6277a5ced0bf5.png', 3, 1648358290, 1652008398, 5, 1),
(4, 'Topi', 15000, 'topi.6277a5ff4e588.png', 4, 1648360294, 1652008447, 5, 1),
(7, 'Komik', 25000, 'semaphore.6277a6334188e.png', 5, 1650809600, 1652008499, NULL, 1),
(8, 'Laptop', 10000000, 'unggun fix.6277a5398f991.png', 2, 1650873848, 1652008249, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `item_category`
--

CREATE TABLE `item_category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `parent_category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `item_category`
--

INSERT INTO `item_category` (`id`, `name`, `parent_category`) VALUES
(1, 'Alat Kebersihan', 1),
(2, 'Komputer', 2),
(3, 'Makanan', 3),
(4, 'Outfit', 4),
(5, 'Buku', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nrp` char(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nrp`, `nama`, `email`) VALUES
(6, '3120521056', 'ABNA', 'abc@gmail.com'),
(7, '3120521057', 'VVTI', 'dbc@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa2`
--

CREATE TABLE `mahasiswa2` (
  `id` int(11) NOT NULL,
  `nrp` char(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1646560167),
('m130524_201442_init', 1646560216),
('m190124_110200_add_verification_token_column_to_user_table', 1646560216);

-- --------------------------------------------------------

--
-- Struktur dari tabel `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `date` datetime DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `order`
--

INSERT INTO `order` (`id`, `date`, `customer_id`) VALUES
(1, '2022-04-09 00:00:00', 1),
(2, '2022-04-10 00:00:00', 2),
(3, '2022-04-11 00:00:00', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `order_item`
--

CREATE TABLE `order_item` (
  `order_id` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `order_item`
--

INSERT INTO `order_item` (`order_id`, `item_id`) VALUES
(1, 2),
(2, 3),
(3, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `statistics`
--

CREATE TABLE `statistics` (
  `id` int(11) NOT NULL,
  `access_time` datetime DEFAULT current_timestamp(),
  `user_ip` varchar(50) DEFAULT NULL,
  `user_host` varchar(50) DEFAULT NULL,
  `path_info` varchar(50) DEFAULT NULL,
  `query_string` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `statistics`
--

INSERT INTO `statistics` (`id`, `access_time`, `user_ip`, `user_host`, `path_info`, `query_string`) VALUES
(5, '2022-03-27 11:36:09', '::1', NULL, '', ''),
(6, '2022-03-27 11:36:42', '::1', NULL, 'item/index', ''),
(7, '2022-03-27 11:37:39', '::1', 'localhost', 'item/index', ''),
(8, '2022-03-27 11:44:42', '::1', 'localhost', 'item/index', ''),
(9, '2022-03-27 11:45:39', '::1', 'localhost', 'item/index', ''),
(10, '2022-03-27 11:47:01', '::1', 'localhost', 'item/index', ''),
(11, '2022-03-27 11:47:12', '::1', 'localhost', 'item/view', 'id=1'),
(12, '2022-03-27 07:00:15', '::1', 'localhost', 'item', ''),
(13, '2022-03-27 07:11:19', '::1', 'localhost', '', ''),
(14, '2022-03-27 07:12:30', '::1', 'localhost', '', ''),
(15, '2022-03-27 12:12:58', '::1', 'localhost', '', ''),
(16, '2022-03-27 12:13:18', '::1', 'localhost', '', ''),
(17, '2022-03-27 12:14:24', '::1', 'localhost', 'item/view', 'id=2'),
(18, '2022-03-27 12:15:53', '::1', 'localhost', '', ''),
(19, '2022-03-27 12:16:22', '::1', 'localhost', 'item/view', 'id=2'),
(20, '2022-03-27 12:17:39', '::1', 'localhost', 'item/index', ''),
(21, '2022-03-27 12:18:10', '::1', 'localhost', 'item/view', 'id=3'),
(22, '2022-03-27 12:36:07', '::1', 'localhost', '', ''),
(23, '2022-03-27 12:43:25', '::1', 'localhost', '', ''),
(24, '2022-03-27 12:48:53', '::1', 'localhost', '', ''),
(25, '2022-03-27 12:49:59', '::1', 'localhost', '', ''),
(26, '2022-03-27 12:51:34', '::1', 'localhost', 'item/view', 'id=4'),
(27, '2022-03-27 12:59:51', '::1', 'localhost', 'item/view', 'id=4'),
(28, '2022-03-27 12:59:53', '::1', 'localhost', 'item/index', ''),
(30, '2022-03-27 13:00:22', '::1', 'localhost', 'item/view', 'id=5'),
(31, '2022-03-27 13:00:46', '::1', 'localhost', 'item/index', ''),
(32, '2022-03-27 13:00:53', '::1', 'localhost', 'item/update', 'id=5'),
(33, '2022-03-27 13:01:09', '::1', 'localhost', 'item/view', 'id=5'),
(34, '2022-03-27 13:01:29', '::1', 'localhost', 'item/', ''),
(35, '2022-03-27 13:01:53', '::1', 'localhost', 'item/', ''),
(36, '2022-03-27 13:02:22', '::1', 'localhost', 'item/', ''),
(37, '2022-03-27 13:03:31', '::1', 'localhost', 'item/', ''),
(38, '2022-03-27 19:51:38', '::1', 'DESKTOP-DBHDOE4', '', ''),
(39, '2022-03-27 19:53:18', '::1', 'localhost', '', ''),
(40, '2022-03-27 19:54:50', '::1', 'localhost', 'item/create', ''),
(41, '2022-03-27 19:55:11', '::1', 'localhost', 'item/view', 'id=6'),
(42, '2022-03-27 19:55:24', '::1', 'localhost', 'item/index', ''),
(43, '2022-03-27 19:55:39', '::1', 'localhost', 'item/update', 'id=6'),
(44, '2022-03-27 19:55:44', '::1', 'localhost', 'item/view', 'id=6'),
(45, '2022-03-27 19:56:06', '::1', 'localhost', 'item/index', ''),
(46, '2022-03-27 19:57:09', '::1', 'localhost', 'item/index', ''),
(47, '2022-03-27 19:57:17', '::1', 'localhost', 'item/delete', 'id=5'),
(48, '2022-03-27 19:57:18', '::1', 'localhost', 'item/index', ''),
(49, '2022-03-28 10:35:48', '::1', 'localhost', '', ''),
(50, '2022-03-28 10:46:24', '::1', 'localhost', 'item/create', ''),
(51, '2022-03-28 10:47:03', '::1', 'localhost', '', ''),
(52, '2022-03-28 10:47:17', '::1', 'localhost', 'item/index', ''),
(53, '2022-03-28 10:57:16', '::1', 'localhost', 'item/delete', 'id=6'),
(54, '2022-03-28 10:57:17', '::1', 'localhost', 'item/index', ''),
(55, '2022-03-28 11:26:49', '::1', 'localhost', 'item/create', ''),
(56, '2022-03-28 12:18:03', '::1', 'localhost', '', ''),
(57, '2022-03-28 19:55:56', '::1', 'localhost', '', ''),
(58, '2022-03-29 09:49:50', '::1', 'localhost', '', ''),
(59, '2022-03-29 10:29:13', '::1', 'localhost', '', ''),
(60, '2022-03-29 10:29:52', '::1', 'localhost', '', ''),
(61, '2022-03-29 10:30:34', '::1', 'localhost', '', ''),
(62, '2022-04-11 14:00:53', '::1', 'localhost', '', ''),
(63, '2022-04-11 14:00:53', '::1', 'localhost', '', ''),
(64, '2022-04-17 07:44:45', '::1', 'localhost', '', ''),
(65, '2022-04-17 07:46:31', '::1', 'localhost', '', ''),
(66, '2022-04-17 07:46:43', '::1', 'localhost', '', ''),
(67, '2022-04-17 08:33:55', '::1', 'localhost', '', ''),
(68, '2022-04-17 08:34:10', '::1', 'localhost', '', ''),
(69, '2022-04-17 08:34:42', '::1', 'localhost', '', ''),
(70, '2022-04-17 08:57:12', '::1', 'localhost', '', ''),
(71, '2022-04-17 08:57:52', '::1', 'localhost', '', ''),
(72, '2022-04-17 09:03:40', '::1', 'localhost', '', ''),
(73, '2022-04-17 09:03:57', '::1', 'localhost', '', ''),
(74, '2022-04-17 09:19:28', '::1', 'localhost', '', ''),
(75, '2022-04-17 09:19:29', '::1', 'localhost', '', ''),
(76, '2022-04-17 17:20:38', '::1', 'localhost', '', ''),
(77, '2022-04-17 17:23:41', '::1', 'localhost', '', ''),
(78, '2022-04-18 13:07:34', '::1', 'localhost', '', ''),
(79, '2022-04-18 14:47:12', '::1', 'localhost', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `statistik`
--

CREATE TABLE `statistik` (
  `id` int(11) NOT NULL,
  `access_time` datetime NOT NULL DEFAULT current_timestamp(),
  `user_ip` varchar(100) DEFAULT NULL,
  `user_host` varchar(100) DEFAULT NULL,
  `path_info` varchar(100) DEFAULT NULL,
  `query_string` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 10,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`) VALUES
(1, 'admin', 'PRbm85UWybgVrADuDaUKZalpGcKX3CGZ', '$2y$13$3RReSEA6Fj7PYmWSKFUrvePEDLHBP7TSGXVIHaTflySnEwSqwaPA2', NULL, 'admin@admin.id', 10, 1650156389, 1650156389, 'xYU-AOI0ej0Xc62hkxkZ1Feb3kQTb_ER_1650156389'),
(2, 'coba', 'qyY8FZCKBlTBCaVqQFVO3rIiboD7cTEn', '$2y$13$XDEagXv3qugZFv/WFs9XnutfBxgFd9yj/dlP6SqIr0X/ngmM8KhFW', NULL, 'coba@email.com', 10, 1650159249, 1650159249, '1o19l7Of4mKaRl4LWpnraaMq4A7Y6aFr_1650159249'),
(3, 'example', 'qrwFcQvFuI38XlxOGtpeeSjlTT-xVMr1', '$2y$13$FljEdPxXIGxtIpwVH.95vu4srJ7OACw/3b3HpSMoU./JrLA8Amrn.', NULL, 'example@gmail.com', 10, 1650160671, 1650160671, 'BfgaMLAYznJeF1T30iZbgD9MuciG31Mm_1650160671'),
(4, 'coba2', 'jPnYVfSN2f27UTuPsSB9mRFYjPkLUp6N', '$2y$13$DhhljDSbYph/SQ.N6s0MBOoyC9Zxw7Siq/415pfqBWLm77DB/CBy6', NULL, 'coba2@email.com', 10, 1650161019, 1650161019, 'IwW5nLe7tXQXKnKDh8bPopMr6sghXhzx_1650161019'),
(5, 'coba3', 'h2HfEQuhRYO_5LsOqNzY3HWZ-2-CDdG8', '$2y$13$nVpq2OR1IeXk6dJ.hlNUKeWacUtwwAh7r5.qNF2PmURkOmbC0CFxq', NULL, 'coba3@gmail.com', 10, 1652696345, 1652696345, 'iXuORbv5d9BdjdYuJz7lsGKP7AK3coxe_1652696345');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`);

--
-- Indeks untuk tabel `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `type` (`type`);

--
-- Indeks untuk tabel `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Indeks untuk tabel `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`name`);

--
-- Indeks untuk tabel `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `item_category`
--
ALTER TABLE `item_category`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mahasiswa2`
--
ALTER TABLE `mahasiswa2`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indeks untuk tabel `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `statistics`
--
ALTER TABLE `statistics`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `statistik`
--
ALTER TABLE `statistik`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `item_category`
--
ALTER TABLE `item_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `mahasiswa2`
--
ALTER TABLE `mahasiswa2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `statistics`
--
ALTER TABLE `statistics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT untuk tabel `statistik`
--
ALTER TABLE `statistik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
