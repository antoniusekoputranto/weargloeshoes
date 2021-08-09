-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Agu 2021 pada 16.39
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gloeshoes`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `accounts`
--

CREATE TABLE `accounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description_company` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_instagram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_tokopedia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_shopee` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `accounts`
--

INSERT INTO `accounts` (`id`, `description_company`, `link_whatsapp`, `link_facebook`, `link_instagram`, `link_tokopedia`, `link_shopee`, `created_at`, `updated_at`) VALUES
(3, 'Sepatu handmade berbahan kulit asli dengan di lengkapi anti jamur dan bebas kanker,\r\nBebas custom model apa saja dengan tingkat kemiripan 90-99% bahkan bisa lebih bagus\r\nLangsung di produksi oleh pengrajin- pengrajin kami dengan detail yang sangat rapi dan teliti ( handmade )\r\nLining / bagian dalam sepatu yang lembut dan hangat sangat cocok di pakai untuk winter dan autumn\r\n\r\nMemberikan garansi reparasi 1 tahun untuk semua produk sepatu kulit kami\r\nSol sepatu terbuat dari bahan rubber/karet anti slip\r\nBisa request ukuran sangat besar, bisa menyesuaikan bentuk kaki dan lebar kaki', '85856577395', 'https://www.facebook.com/gloeshoes.leather/', 'https://shopee.co.id/gloeshoes.leather', 'https://www.tokopedia.com/goodshoesleather', 'https://shopee.co.id/gloeshoes.leather', '2021-07-26 04:21:51', '2021-08-06 03:35:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `customerservices`
--

CREATE TABLE `customerservices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_customer_service` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `customerservices`
--

INSERT INTO `customerservices` (`id`, `image`, `description_customer_service`, `created_at`, `updated_at`) VALUES
(2, '1628505505.svg', 'EASY & SECURE PAYMENT', '2021-08-09 03:33:17', '2021-08-09 03:38:25'),
(3, '1628505520.svg', 'FREE SHIPPING ON ORDERS ABOVE 1JT', '2021-08-09 03:38:40', NULL),
(4, '1628505533.svg', '7 DAYS EXCHANGE', '2021-08-09 03:38:53', NULL),
(5, '1628505547.svg', 'PROUDLY MADE IN INDONESIA', '2021-08-09 03:39:07', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image_event` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `events`
--

INSERT INTO `events` (`id`, `image_event`, `link`, `created_at`, `updated_at`) VALUES
(11, '1627870152.jpeg', NULL, '2021-08-01 19:09:12', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `feeds`
--

CREATE TABLE `feeds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image_feed` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `feeds`
--

INSERT INTO `feeds` (`id`, `image_feed`, `link`, `active`, `created_at`, `updated_at`) VALUES
(7, '1627199337.jpg', 'https://www.instagram.com/p/CRI2iG-LsGg/', 1, '2021-07-25 00:48:57', NULL),
(8, '1627199400.jpg', 'https://www.instagram.com/p/CRJCTiTrFvy/', 1, '2021-07-25 00:50:00', NULL),
(9, '1627199458.jpg', 'https://www.instagram.com/p/CRL01BVLhll/', 1, '2021-07-25 00:50:58', NULL),
(10, '1627199541.jpg', 'https://www.instagram.com/p/CRTUVMersW7/', 1, '2021-07-25 00:52:21', NULL),
(11, '1627199583.jpg', 'https://www.instagram.com/p/CRTWKrGL58W/', 1, '2021-07-25 00:53:03', NULL),
(12, '1627199664.jpg', 'https://www.instagram.com/p/CRiSKkhrhWZ/', 1, '2021-07-25 00:54:24', NULL),
(13, '1627199757.jpg', 'https://www.instagram.com/p/CRn2-MPr5Au/', 1, '2021-07-25 00:55:57', NULL),
(14, '1627199811.jpg', 'https://www.instagram.com/p/CRqX7FLrN-8/', 1, '2021-07-25 00:56:51', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2021_06_13_070209_create_products_table', 1),
(5, '2021_06_13_080226_create_productcolourimages_table', 1),
(6, '2021_07_24_064118_create_feeds_table', 2),
(7, '2021_07_26_063434_create_events_table', 3),
(12, '2021_07_26_092521_create_accounts_table', 4),
(13, '2021_07_26_094508_add_link_instagram_to_accounts_table', 5),
(14, '2021_06_18_150113_create_orders_table', 6),
(15, '2021_06_18_150204_create_users_table', 7),
(16, '2021_07_29_075615_create_post_table', 8),
(18, '2021_08_06_102553_add_shopeedantokopedia_to_accounts', 9),
(19, '2021_08_09_063217_create_sizecartinfos_table', 10),
(21, '2021_08_09_075037_create_sizecarts_table', 11),
(22, '2021_08_09_094459_create_customerservices_table', 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_image` varchar(10000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `productcolourimages`
--

CREATE TABLE `productcolourimages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `colour` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heel_height` int(11) NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_type`, `featured`, `product_image`, `price`, `colour`, `heel_height`, `description`, `created_at`, `updated_at`) VALUES
(60, 'Sepatu Kulit Wanita Handwoven', 'flat', 'y', '1628231052.jpg', 500000, 'warna bisa request sendiri', 12, 'handwoven flat ( pre order ) \r\n- wajib cantumkan warna dan ukuran\r\n- ukur panjang telapak kaki dengan penggaris\r\n\r\nbahan : kulit asli (mill natural)\r\noutsole : karet\r\nsize : 36-42\r\n\r\nharga 500K\r\n\r\ngaransi reparasi 1 tahun', '2021-08-05 23:24:12', NULL),
(61, 'Sepatu Boot Kulit Asli - bannera boot', 'boots', 'n', '1628231140.jpg', 550000, 'Bisa custom', 12, 'Sepatu Boots Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun', '2021-08-05 23:25:40', NULL),
(62, 'Sepatu Boots Kulit - Lodie Boot', 'boots', 'n', '1628231267.jpg', 575000, 'Bisa custom', 12, 'Sepatu Boots Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol      : Karet \r\nGaransi Reparasi 1 tahun', '2021-08-05 23:27:47', NULL),
(63, 'Sepatu Kulit Asli - Sling Basic', 'boots', 'n', '1628231376.jpg', 475000, 'Bisa custom', 12, 'Sepatu Boots Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol      : Karet \r\nGaransi Reparasi 1 tahun', '2021-08-05 23:29:36', NULL),
(64, 'Sepatu Kulit Asli - Handwoven Hells', 'heels', 'n', '1628231464.jpg', 475000, 'Bisa custom', 12, 'Sepatu Boots Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol      : Karet \r\nGaransi Reparasi 1 tahun', '2021-08-05 23:31:04', NULL),
(65, 'Sepatu Kulit Asli - Ivory Oxford', 'boots', 'n', '1628231627.jpg', 475000, 'Bisa custom', 12, 'Sepatu Boots Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol      : Karet \r\nGaransi Reparasi 1 tahun', '2021-08-05 23:33:47', NULL),
(66, 'Sepatu Kulit Asli - Lesha Heels', 'heels', 'n', '1628318113.jpg', 475000, 'Bisa custom', 12, 'Sepatu Boots Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol      : Karet \r\nGaransi Reparasi 1 tahun\r\n\r\nSize Chart  ( Panjang telapak kaki )\r\n35 : 20cm\r\n36 : 21cm\r\n37 : 22cm\r\n38 : 23cm\r\n39 : 24cm\r\n40 : 25cm\r\n41 : 26cm\r\n42 : 27cm', '2021-08-06 23:35:13', NULL),
(67, 'Sepatu Kulit Asli - Mina Heels', 'heels', 'n', '1628318405.jpg', 475000, 'Bisa custom', 12, 'Sepatu Boots Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol      : Karet \r\nGaransi Reparasi 1 tahun', '2021-08-06 23:40:05', NULL),
(68, 'Sepatu Boot Kulit Asli - Noemi Boots', 'boots', 'y', '1628318495.jpg', 625000, 'Bisa custom', 12, 'Sepatu Boots Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun', '2021-08-06 23:41:35', NULL),
(69, 'Sepatu Boot Kulit Asli - Mira Boot', 'boots', 'n', '1628318705.jpg', 525000, 'Bisa custom', 12, 'Sepatu Boots Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun', '2021-08-06 23:45:05', NULL),
(70, 'Sepatu Boot Kulit Asli - Jodie Boots', 'boots', 'n', '1628318851.jpg', 575000, 'Bisa custom', 12, 'Sepatu Boots Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun', '2021-08-06 23:47:31', NULL),
(71, 'Sepatu Kulit Asli - Goodshoes Leather - Teya Dunlup/Wedges', 'wedges', 'n', '1628319149.jpg', 450000, 'Bisa custom', 12, 'Sepatu Boots Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun', '2021-08-06 23:52:29', NULL),
(72, 'Sepatu Heels Kulit - Goodshoes Leather - Lula Heels', 'heels', 'n', '1628319725.jpg', 475000, 'Bisa custom', 12, 'Sepatu Boots Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun', '2021-08-07 00:02:05', NULL),
(73, 'Sepatu Heels Kulit - Goodshoes Leather - Lesha Stiletto Heels 9cm', 'heels', 'n', '1628319828.jpg', 475000, 'Bisa custom', 12, 'Sepatu Boots Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun', '2021-08-07 00:03:48', NULL),
(74, 'Sepatu Kulit Wanita - Goodshoes Leather - Dione Wedges', 'wedges', 'n', '1628320176.jpg', 450000, 'Bisa costum sendiri', 12, 'Sepatu Kulit Wanita - Goodshoes Leather - Dione Wedges', '2021-08-07 00:09:36', NULL),
(75, 'Sepatu Kulit Wanita - Goodshoes Leather - Tzuna Woven', 'flat', 'n', '1628320296.jpg', 575000, 'Bisa custom', 12, 'Sepatu Boots Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun', '2021-08-07 00:11:36', NULL),
(76, 'Sepatu Heels Kulit - Gloeshoes Leather - Hana Heel', 'heels', 'n', '1628320444.jpg', 475000, 'Bisa costum sediri', 12, 'sepatu heels kulit asli', '2021-08-07 00:14:04', NULL),
(77, 'tali kulit', 'flat', 'n', '1628320627.jpg', 35000, 'tidak ada', 10, 'tali kulit asli panjang 70cm', '2021-08-07 00:17:07', NULL),
(78, 'Sepatu boot kulit - Goodshoes Leather - Donna Boot 7cm', 'boots', 'n', '1628320696.jpg', 550000, 'Bisa custom', 12, 'Sepatu Boots Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun', '2021-08-07 00:18:16', NULL),
(79, 'Sepatu Kulit Wanita - Goodshoes Leather - Tassel flat', 'flat', 'n', '1628320763.jpg', 450000, 'Bisa costum', 12, 'Sepatu Kulit Wanita - Goodshoes Leather - Tassel flat', '2021-08-07 00:19:23', NULL),
(80, 'Sepatu Wanita Kulit - Goodshoes Leather - Diona Wooden Wedges', 'wedges', 'n', '1628320930.jpg', 475000, 'Bisa costum', 12, 'Sepatu Wanita Kulit - Goodshoes Leather - Diona Wooden Wedges', '2021-08-07 00:22:10', NULL),
(81, 'sepatu wanita kulit - Gloeshoes Leather- Docmart Low Wanita', 'flat', 'n', '1628321095.jpg', 500000, 'Bisa custom', 12, 'Sepatu Boots Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun', '2021-08-07 00:24:55', NULL),
(82, 'Sepatu Wanita Kulit-Gloeshoes Leather-Madoka Woven', 'flat', 'n', '1628321186.jpg', 515000, 'Bisa custom', 12, 'Sepatu  Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun', '2021-08-07 00:26:26', NULL),
(83, 'Sepatu Wanita Kulit-Gloeshoes Leather-Chelsea Boots', 'boots', 'n', '1628321335.jpg', 550000, 'Bisa custom', 12, 'Sepatu Boots Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun\r\n\r\nUntuk info size bisa chat dulu sebelum chek out', '2021-08-07 00:28:55', NULL),
(84, 'Sepatu Wanita Kulit-Gloeshoes Leather-Ribbon Dunlup', 'flat', 'n', '1628321423.jpg', 425000, 'Bisa custom', 12, 'Sepatu Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun\r\n\r\nUntuk info size bisa chat dulu sebelum chek out', '2021-08-07 00:30:23', NULL),
(85, 'Sepatu Heel Kulit - Gloeshoes Leather - Alika Wooden Heels', 'heels', 'n', '1628321539.jpg', 470050, 'Bisa costum', 12, 'Sepatu Heel Kulit - Gloeshoes Leather - Alika Wooden Heels', '2021-08-07 00:32:19', NULL),
(86, 'Mila Boot - Gloeshoee Leather', 'boots', 'n', '1628321630.jpg', 475000, 'Bisa costum', 12, 'Mila Boot - Gloeshoee Leather', '2021-08-07 00:33:50', NULL),
(87, 'Sepatu Wanita Kulit - Gloeshoes Leather - Neida Handwoven', 'flat', 'n', '1628321751.jpg', 450000, 'Bisa custom', 12, 'Warna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun\r\n\r\nUntuk info size bisa chat dulu sebelum chek out', '2021-08-07 00:35:51', NULL),
(88, 'Sepatu Boot Kulit - Gloeshoes Leather - Millan Boot', 'boots', 'n', '1628321924.jpg', 450000, 'Bisa costum', 12, 'Sepatu Boot Kulit - Gloeshoes Leather - Millan Boot', '2021-08-07 00:38:44', NULL),
(89, 'Sepatu Boot Kulit - Gloeshoes Leather - Alica Boot', 'boots', 'n', '1628322011.jpg', 600000, 'Bisa custom', 12, 'Sepatu Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun\r\n\r\nUntuk info size bisa chat dulu sebelum chek out', '2021-08-07 00:40:11', NULL),
(90, 'Sepatu Heels Kulit Wanita - Gloeshoes Leather - Sling Basic Sandals', 'heels', 'n', '1628322115.jpg', 425000, 'Bisa custom', 12, 'Sepatu Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun\r\n\r\nUntuk info size bisa chat dulu sebelum chek out', '2021-08-07 00:41:55', NULL),
(91, 'Sepatu Heels Kulit Wanita - Gloeshoes Leather - Lesha Heels Platform', 'heels', 'n', '1628322323.jpg', 450000, 'Bisa custom', 12, 'Sepatu Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun\r\n\r\nUntuk info size bisa chat dulu sebelum chek out', '2021-08-07 00:45:23', NULL),
(92, 'Sepatu Kulit Wanita - Gloeshoes Leather - Oxford tree Colour', 'flat', 'n', '1628322539.jpg', 450000, 'Bisa custom', 12, 'Sepatu Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun\r\n\r\nUntuk info size bisa chat dulu sebelum chek out', '2021-08-07 00:48:59', NULL),
(93, 'Sepatu Boots Kulit Wanita - Gloeshoes Leather - High Boots', 'boots', 'n', '1628322657.jpg', 875000, 'Bisa custom', 12, 'Sepatu Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun\r\n\r\nUntuk info size bisa chat dulu sebelum chek out', '2021-08-07 00:50:57', NULL),
(94, 'Sepatu Heels Kulit Wanita - Gloeshoes Leather - Luna Heels', 'heels', 'n', '1628322752.jpg', 475000, 'Bisa custom', 12, 'Sepatu Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun\r\n\r\nUntuk info size bisa chat dulu sebelum chek out', '2021-08-07 00:52:32', NULL),
(95, 'Sepatu Kulit Wanita - Gloeshoes Leather - Lula Platform', 'flat', 'n', '1628322870.jpg', 475000, 'Bisa custom', 12, 'Sepatu Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun\r\n\r\nUntuk info size bisa chat dulu sebelum chek out', '2021-08-07 00:54:30', NULL),
(96, 'Sepatu Boots Kulit Wanita - Gloeshoes Leather - Donna Boots', 'boots', 'n', '1628323986.jpg', 550000, 'Bisa custom', 12, 'Sepatu Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun\r\n\r\nUntuk info size bisa chat dulu sebelum chek out', '2021-08-07 01:13:06', NULL),
(97, 'Sepatu Kulit Wanita - Gloeshoes Leather - Belt Mules Platform', 'flat', 'n', '1628324803.jpg', 500000, 'Bisa custom', 12, 'Sepatu Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun\r\n\r\nUntuk info size bisa chat dulu sebelum chek out', '2021-08-07 01:26:43', NULL),
(98, 'Sepatu Wanita Kulit - Gloeshoes Leather - Loodie Heels Boots', 'boots', 'n', '1628325031.jpg', 550000, 'Bisa custom', 12, 'Sepatu Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun\r\n\r\nUntuk info size bisa chat dulu sebelum chek out', '2021-08-07 01:30:31', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sizecartinfos`
--

CREATE TABLE `sizecartinfos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sizecartinfos`
--

INSERT INTO `sizecartinfos` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, '1628501304.jpeg', '2021-08-09 00:42:13', '2021-08-09 02:28:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sizecarts`
--

CREATE TABLE `sizecarts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `size` int(11) NOT NULL,
  `foot_length` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sizecarts`
--

INSERT INTO `sizecarts` (`id`, `size`, `foot_length`, `created_at`, `updated_at`) VALUES
(2, 35, 20, '2021-08-09 02:33:00', '2021-08-09 03:35:47'),
(3, 36, 21, '2021-08-09 03:36:11', NULL),
(4, 37, 22, '2021-08-09 03:36:24', NULL),
(5, 38, 23, '2021-08-09 03:36:41', NULL),
(6, 39, 24, '2021-08-09 03:36:59', NULL),
(7, 40, 25, '2021-08-09 03:37:17', NULL),
(8, 41, 26, '2021-08-09 03:37:32', NULL),
(9, 42, 27, '2021-08-09 03:37:50', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_post`
--

CREATE TABLE `tb_post` (
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `post_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_post`
--

INSERT INTO `tb_post` (`post_id`, `post_title`, `image`, `content`, `created_at`, `updated_at`) VALUES
(16, 'flat', '8466katalog2_210518_20.jpg', NULL, '2021-08-06 04:57:59', '2021-08-06 04:57:59'),
(17, 'heels', '1740katalog2_210518_27.jpg', NULL, '2021-08-06 04:59:39', '2021-08-06 04:59:39'),
(18, 'boots', '8839katalog2_210518_49.jpg', NULL, '2021-08-06 05:00:04', '2021-08-06 05:00:04'),
(23, 'wedges', '9329katalog2_210518_134.jpg', NULL, '2021-08-06 23:58:20', '2021-08-06 23:58:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `phone`, `password`) VALUES
(5, 'Gloeshoes Admin', 'admin@gloeshoes', '080808080808', '$2y$10$3uAXfzDXqVn5auo6yFA2IOR4FU5kCNRk.dZRn9WWC.NlYt5SkwO1G');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `customerservices`
--
ALTER TABLE `customerservices`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `feeds`
--
ALTER TABLE `feeds`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `productcolourimages`
--
ALTER TABLE `productcolourimages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productcolourimages_product_id_foreign` (`product_id`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sizecartinfos`
--
ALTER TABLE `sizecartinfos`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sizecarts`
--
ALTER TABLE `sizecarts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_post`
--
ALTER TABLE `tb_post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `customerservices`
--
ALTER TABLE `customerservices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `feeds`
--
ALTER TABLE `feeds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `productcolourimages`
--
ALTER TABLE `productcolourimages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT untuk tabel `sizecartinfos`
--
ALTER TABLE `sizecartinfos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `sizecarts`
--
ALTER TABLE `sizecarts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_post`
--
ALTER TABLE `tb_post`
  MODIFY `post_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `productcolourimages`
--
ALTER TABLE `productcolourimages`
  ADD CONSTRAINT `productcolourimages_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
