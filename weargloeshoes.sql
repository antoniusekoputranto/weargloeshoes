-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Jan 2022 pada 08.42
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `weargloeshoes`
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
(3, 'Sepatu handmade berbahan kulit asli dengan di lengkapi anti jamur dan bebas kanker,\r\nBebas custom model apa saja dengan tingkat kemiripan 90-99% bahkan bisa lebih bagus\r\nLangsung di produksi oleh pengrajin- pengrajin kami dengan detail yang sangat rapi dan teliti ( handmade )\r\nLining / bagian dalam sepatu yang lembut dan hangat sangat cocok di pakai untuk winter dan autumn\r\n\r\nMemberikan garansi reparasi 1 tahun untuk semua produk sepatu kulit kami\r\nSol sepatu terbuat dari bahan rubber/karet anti slip\r\nBisa request ukuran sangat besar, bisa menyesuaikan bentuk kaki dan lebar kaki', '85856577395', 'https://www.facebook.com/gloeshoes.leather/', 'https://www.instagram.com/gloeshoes.leather/', 'https://www.tokopedia.com/goodshoesleather', 'https://shopee.co.id/gloeshoes.leather', '2021-07-26 04:21:51', '2021-08-11 00:34:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_article` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contents` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `articles`
--

INSERT INTO `articles` (`id`, `title`, `image_article`, `contents`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Cara Merawat Sepatu High Heels Berbahan Kulit', '1636750030.jpg', '<p>Bersihkan Setelah Digunakan Sama dengan anda memakai baju atau busana kesayangan anda, sepatu high heels juga sama perawatannya.</p>\r\n<p>&nbsp;</p>\r\n<p>Setelah menggunakannya, anda harus membersihkan kotoran atau debu yang menempel di sepatu tersebut. Jangan gunakan air dulu! Lebih baik anda lap dengan tisu atau kain biasa. Setelahnya baru anda siapkan air hangat. Celupkan kain pembersih kemudian anda lap sepatu high heels anda.</p>\r\n<p>&nbsp;</p>\r\n<p>Keringkan sepatu dibawah sinar matahari sampai kering. Oleskan Moisturizer Setelah sepatu kulit anda kering, oleskan moisturizer atau pelembab sebelum anda menyimpan high heels anda. Kegunaan memberikan moisturizer pada sepatu adalah untuk menjaga warna sepatu agar tidak mudah pudar. Oleskan secara merata pada bagian sepatu. Kemudian, anda bisa menyimpannya.</p>\r\n<p>&nbsp;</p>\r\n<p>Tempat Sepatu Khusus Berikan tempat sepatu khusus untuk sepatu-sepatu anda. Dan untuk sepatu kulit, kalau bisa jangan ditumpuk dengan sepatu anda lainnya. Jangan sampai anda menyimpan sepatu kulit yang tidak benar-benar kering atau dalam keadaan lembab. Ini bisa menyebabkan timbulnya jamur dan sepatu yang pecah-pecah. Pastikan high heels anda kering sempurna, oleskan pelembab, kemudian bungkus dengan plastik dan masukan ke dalam kotak sepatu.</p>\r\n<p>&nbsp;</p>\r\n<p>Hanya tiga step untuk merawat sepatu high heels kesayangan anda. Heii, sekarang sepatu high heels berbahan kulit cukup mahal loh, jadi sayangkan kalau cepat rusak karena anda tidak pintar menjaganya. Rajin itulah kuncinya. Setelah dipakai biarkan sebentar, selagi menunggu anda juga bisa beristirahat, kemudian baru anda ikuti tiga cara diatas. Dan jika anda sedikit bingung tentang moisturizer atau pelembab untuk sepatu kulit anda, anda bisa menggantinya dengan lotion yang mengandung pelembab. Ini juga bagus untuk perawatan sepatu kulit.</p>\r\n<p>&nbsp;</p>\r\n<p>Nah, bagaimana apakah anda siap untuk mendapatkan sepatu kulit dan siap untuk menjaganya agar tetap indah walaupun sering anda pakai. Semoga artikel ini dapat membantu.</p>', 1, '2021-11-12 13:47:10', '2021-12-09 06:06:38'),
(2, 'Ini Dia Tips Merawat Sepatu Wanita Tanpa Repot', '1637628424.jpg', '<p>Bersihkan dengan Cara yang Tepat Dengan beragam jenis sepatu, tentu berbeda cara membersihkannya. Hal itu bergantung pada jenis materialnya.</p>\r\n<p>&nbsp;</p>\r\n<p>Namun, pada dasarnya, kamu tidak perlu sering-sering mencuci sepatu. Khawatir warnanya nanti akan pudar. Jika ingin membersihkan noda, kamu bisa terapkan hal berikut! Flat shoes berbahan kulit sintetis: Kamu bisa gunakan pembersih kaca untuk membersihkan flat shoes dari kulit sintesis ini.</p>\r\n<p>&nbsp;</p>\r\n<p>Sebab, kandungannya sama-sama cocok, yaitu untuk permuakaan yang licin. Sehingga mampu membersihkan noda dan menjadikannya mengkilap kembali. Suede shoes: Sebelum mengenakannya, pastikan kamu telah menyemprotkan spray pelindung kulit suede. Kemudian untuk membersihkannya kamu bisa menggunakan suede brush khusus. Karena bahan ini sangat rentan, pastikan kamu menggosoknya perlahan.</p>\r\n<p>&nbsp;</p>\r\n<p>Leather shoes: Keampuhan cuka dalam menghilangkan noda tidak bisa diragukan. Bukan hanya bisa menghilangkan noda untuk jeans, ternyata bisa juga diaplikasikan untuk sepatu berbahan kulit. Cukup campurkan cuka dengan air dan semprotkan di permukaan sepatu secara merata. Canvas shoes: Kalau untuk sepatu berbahan kanvas, kamu bisa gunakan baking soda. Caranya gunakan 1 sdm baking sodam 1 sdm cuka putih, serta 1 sdm air panas. Lalu kamu campurkan dan perlahan usapkan ke permukaan sepatu menggunakan sikat gigi.</p>', 1, '2021-11-22 17:47:04', '2021-12-09 06:06:07'),
(3, 'Tips Merawat Sepatu Kulit', '1637641110.jpg', '<p>Sepatu merupakan bagian dari fashion kita sehari-hari. Begitu beragam jenis dan bahan sepatu yang diproduksi, tak terkecuali sepatu boots. Sepatu boots memerlukan perawatan yang agak khusus dibandingkan sepatu lainnya.</p>\r\n<p>&nbsp;</p>\r\n<p>Bahan sepatu boots memang didesain supaya kaki terasa hangat dan terlindungi. Berikut tips-tips mudah untuk merawat sepatu boots agar tahan lama.</p>\r\n<p>&nbsp;</p>\r\n<p>Kenali Bahan Sepatu Bootsmu</p>\r\n<p>&nbsp;</p>\r\n<p>Ketika membeli sepatu boots, kenalilah dulu bahannya. Bahan yang berbeda membutuhkan perawatan berbeda. Kalau boots berbahan suede, maka kamu hanya perlu membersihkannya pakai lap kering atau sikat khusus sepatu.</p>\r\n<p>&nbsp;</p>\r\n<p>Apabila berbahan kulit, maka hindari terkena basah dan jemur di bawah terik matahari karena akan mengurangi umur sepatu boots. Yang pasti, sepatu boots sebaiknya tidak digunakan ketika musim penghujan.</p>\r\n<p>&nbsp;</p>\r\n<p>Pakailah Kaus Kaki yang Kering</p>\r\n<p>&nbsp;</p>\r\n<p>Tips kedua ini tidak hanya digunakan untuk merawat sepatu boots. Tapi dapat kamu gunakan untuk merawat bagian dalam sepatu yang tertutup, seperti sneakers. Kaus kaki yang basah membuat bagian dalam sepatumu menjadi lembab dan berbau.</p>\r\n<p>&nbsp;</p>\r\n<p>Selain bagian dalam sepatu menjadi lembab, kaus kaki yang basah dapat membuat kaki menjadi berbau tidak sedap. Kaus kaki basah juga membuat bagian dalam sepatumu mudah berjamur.</p>\r\n<p>&nbsp;</p>\r\n<p>Selalu Bersihkan Sepatu Sesudah Pemakaian</p>\r\n<p>Setelah beraktivitas seharian menggunakan sepatu, kadang kita malas membersihkan sepatu dan langsung saja menaruhnya di tempat sepatu. Tapi tahukah kamu, bahwa sepatu boots akan lebih awet kalau kamu membersihkannya setelah dipakai.</p>\r\n<p>&nbsp;</p>\r\n<p>Kalau sepatu boots tidak basah, kamu dapat membersihkannya menggunakan sikat khusus sepatu untuk membersihkan debu dan kotoran yang menempel di sepatu. Namun, apabila sepatu bootsmu basah, usahakan untuk menjemurnya di bawah sinar matahari terik.</p>\r\n<p>&nbsp;</p>\r\n<p>Selain untuk mengeringkan, sinar matahari dapat menghilangkan bau lembab di dalam sepatumu.</p>\r\n<p>&nbsp;</p>\r\n<p>Semprotkan Pewangi Khusus Sepatu ke Bagian Dalam Sepatu</p>\r\n<p>&nbsp;</p>\r\n<p>Jika kamu sudah menghindari pemakaian kaus kaki basah tapi bagian dalam sepatu masih berbau tidak sedap, maka yang harus kamu lakukan adalah menyemprotkan cairan pewangi khusus sepatu yang tersedia di toko atau supermarket.</p>\r\n<p>&nbsp;</p>\r\n<p>Sebaiknya penyemprotan cairan pewangi dilakukan saat boots benar-benar kering dan tidak sedang digunakan untuk berpergian.</p>\r\n<p>&nbsp;</p>\r\n<p>Simpanlah Boots di Dalam Kotak Sepatu</p>\r\n<p>Hal terakhir yang dapat kamu lakukan adalah menyimpan sepatu di dalam kotak sepatu yang terlebih dahulu diberikan silica gel. Mengapa Silica Gel sangat penting? Alasannya karena silica gel menyerap kelembaban sepatu dan menjaganya tetap kering, sehingga bebas dari jamur.</p>\r\n<p>&nbsp;</p>\r\n<p>Selain menjaga boots tetap awet, menyimpannya di dalam kotak membuat sepatumu rapi dan tertata. Kamu bisa mencoba tips ini di rumah, semoga bermanfaat!</p>\r\n<p>&nbsp;</p>\r\n<p>Jika kamu tertarik sepatu kulit, pesan sekarang juga di whatsapp 085856577395</p>', 1, '2021-11-22 17:47:15', '2021-12-09 07:34:49'),
(4, 'Liburan ke Luar Negeri Saat Musim Dingin? Beberapa Style Fashion Ini Wajib Kamu Pilih', '1637640999.jpg', '<p>Indonesia hanya memiliki dua jenis musim yakni musim penghujan dan musim kemarau. Sesekali, kamu bisa juga loh jika ingin menikmati musim lain selain hujan dan panas. Caranya adalah dengan berlibur ke negara yang memiliki 4 musim.</p>\r\n<p>&nbsp;</p>\r\n<p>Seperti di bulan-bulan akhir tahun seperti sekarang ini. Di negara dengan 4 musim seperti Korea dan Jepang, saat ini sedang musim dingin alias musim salju. Kamu yang ingin mencoba bagaimana rasanya musim dingin bisa mencoba liburan ke negara tersebut.</p>\r\n<p>&nbsp;</p>\r\n<p>Nah, untuk berwisata ke negara dengan musim dingin tentu saja kamu tak bisa memiliki persiapan yang minim. Kamu wajib memiliki persiapan matang agar siap menghadapi cuaca ekstrim yang dinginnya tentu berbeda dengan negara kita. Salah satu persiapan yang wajib kamu lakukan adalah persiapan pakaiannya.. Gloeshoes memberikan tips padu padan busana yang keren buat kamu nih!</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>Gaya Timeless dengan Padanan Jeans dan Coat Panjang</p>\r\n<p>Kalau sedang liburan tentu saja wajib mengambil foto sebagai kenang-kenangan. Apalagi di zaman serba sosial media seperti sekarang. sangat sayang kalu kemu ke luar negeri namun belum dipublikasikan.</p>\r\n<p>&nbsp;</p>\r\n<p>Supaya timeline sosial media kamu makin menarik, tentu saja kamu wajib memakai pakaian yang keren. Saat liburan selama musim dingin kamu bisa kenakan gaya timeless yang keren. Padankan saja celana jeans dengan coat panjang. Untuk coatnya kamu bisa pilih yang memiliki pattern supaya tak terkesan monoton. Sebagai dalam coat, kamu bisa kenakan sweater tebal atau baju berkerah turtleneck.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>Gaya Chic dengan Legging, Midi Skirt dan Trench Coat</p>\r\n<p>Liburan di musim dingin jangan sampai bikin kamu mati gaya ya. Meski hawa sedang dingin, kamu tetap bisa bergaya keren kok. Ada banyak outer yang bisa kamu kenakan untuk bikin gaya liburan kamu makin stylish.</p>\r\n<p>&nbsp;</p>\r\n<p>Contohnya, kamu bisa kenakan legging yang dikombinasi dengan midi skirt atau mini skirt. Selanjutnya padukan dengan turtleneck tee atau blouse. Jangan lupa kenakan cardigan yang bahannya bisa menghangatkan seperti wol. Kenakan beanie hat untuk melengkapi gaya chic kamu ya.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>Gaya Simpel dengan Skinny Jeans, Long Coat dan Boots</p>\r\n<p>Bagi kamu yang tak suka ribet dengan pemilihan fashion item, kamu juga tetap bisa keren kok. Caranya mudah banget. Kamu bisa bergaya simpel memakai skinny jeans dan long coats. Sebagai padanannya kamu bisa kenakan turtleneck long sleeve untuk atasan. Jangan lupa pakai sepatu boots supaya kaki kamu tetap hangat. Kenakan juga syal supaya leher kamu tetap hangat dan gaya kamu makin fashionable.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>Tampil feminin dengan Midi Skirt, Turtleneck Sweater dan Boots</p>\r\n<p>Mau tampil feminin di cuaca yang super dingin? Kamu bisa tetap kenakan rok loh saat liburan. Kombinasikan turtleneck sweater dengan midi skirt. Sebagai alas kakinya kenakan sepatu boots supaya kaki tetap hangat. Kamu bisa juga memakai sarung tangan bahan wol serta earmuffs supaya tubuh kamu tetap terasa hangat.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>Jaket Bulu Tebal Musim Dingin Wanita Winter Fur Jacket Coat Women</p>\r\n<p>Untuk berwisata saat musim dingin, mustahil rasanya jika kamu tak memakai jaket. Persiapkan jaket yang tepat untuk menghalau rasa dingin. Jangan samakan dinginnya dengan rasa dingin hujan di Indonesia ya, karena apstinya suhunya jauh lebih dingin.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>Nah, untuk model sepatu boot musim dingin kamu bisa custom model dengan bahan yang hangat seperti high boot dari Gloeshoes Leather :)</p>\r\n<p>&nbsp;</p>', 1, '2021-11-22 17:52:34', '2021-12-09 07:31:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `customerservices`
--

CREATE TABLE `customerservices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_customer_service` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `customerservices`
--

INSERT INTO `customerservices` (`id`, `image`, `description_customer_service`, `active`, `created_at`, `updated_at`) VALUES
(2, '1628505505.svg', 'EASY & SECURE PAYMENT', 1, '2021-08-09 03:33:17', '2021-08-09 03:38:25'),
(3, '1628505520.svg', 'FREE SHIPPING ON ORDERS ABOVE 1JT', 1, '2021-08-09 03:38:40', NULL),
(4, '1628505533.svg', '7 DAYS EXCHANGE', 1, '2021-08-09 03:38:53', NULL),
(5, '1628505547.svg', 'PROUDLY MADE IN INDONESIA', 1, '2021-08-09 03:39:07', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `customnotes`
--

CREATE TABLE `customnotes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description_note` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `customnotes`
--

INSERT INTO `customnotes` (`id`, `description_note`, `active`, `created_at`, `updated_at`) VALUES
(3, 'If you want to ask a question, please contact us through our Whatsapp number', 1, '2021-08-15 21:38:00', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `customtestimonies`
--

CREATE TABLE `customtestimonies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image_testimony` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `customtestimonies`
--

INSERT INTO `customtestimonies` (`id`, `image_testimony`, `active`, `created_at`, `updated_at`) VALUES
(1, '1629088738.jpg', 1, '2021-08-15 21:31:47', '2021-08-15 21:38:58'),
(2, '1629088724.jpg', 1, '2021-08-15 21:38:44', NULL),
(3, '1629088754.jpg', 1, '2021-08-15 21:39:14', NULL),
(4, '1629088771.jpg', 1, '2021-08-15 21:39:31', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image_event` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `events`
--

INSERT INTO `events` (`id`, `image_event`, `link`, `active`, `created_at`, `updated_at`) VALUES
(11, '1627870152.jpeg', NULL, 1, '2021-08-01 19:09:12', NULL),
(16, '1636572808.jpg', NULL, 1, '2021-11-10 12:33:28', NULL),
(17, '1636572814.jpg', NULL, 1, '2021-11-10 12:33:34', NULL),
(18, '1636572820.jpg', NULL, 1, '2021-11-10 12:33:40', NULL),
(19, '1636572828.jpg', NULL, 1, '2021-11-10 12:33:48', NULL);

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
-- Struktur dari tabel `imageproducts`
--

CREATE TABLE `imageproducts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `thumbnail` int(11) NOT NULL,
  `product` int(11) NOT NULL,
  `image_product_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_product_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_product_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `imageproducts`
--

INSERT INTO `imageproducts` (`id`, `thumbnail`, `product`, `image_product_1`, `image_product_2`, `image_product_3`, `created_at`, `updated_at`) VALUES
(1, 0, 2, '1629186658.jpg', '1629192720.katalog2_210518_7.jpg', '1629192737.katalog2_210518_21.jpg', '2021-08-17 00:50:58', '2021-08-17 02:32:17'),
(2, 0, 4, '1629187038.jpg', NULL, NULL, '2021-08-17 00:57:18', '2021-08-17 02:37:18'),
(4, 0, 7, '1629187568.jpg', '1629193057.katalog2_210518_22.jpg', NULL, '2021-08-17 01:06:08', '2021-08-17 02:37:37'),
(8, 0, 7, '1629188107.katalog2_210518_39.jpg', NULL, NULL, '2021-08-17 01:11:14', '2021-08-17 01:31:24'),
(9, 0, 9, '1629188250.katalog2_210518_0.jpg', NULL, NULL, '2021-08-17 01:17:30', NULL),
(10, 0, 10, '1629188280.katalog2_210518_34.jpg', NULL, NULL, '2021-08-17 01:18:00', '2021-08-17 01:31:30'),
(11, 0, 11, '1629188298.katalog2_210518_31.jpg', NULL, NULL, '2021-08-17 01:18:18', '2021-08-17 01:31:37'),
(12, 0, 135, '1629194129.katalog2_210518_19.jpg', '1629194129.katalog2_210518_24.jpg', NULL, '2021-08-17 02:55:29', NULL),
(13, 0, 135, '1629196143.katalog2_210518_3.jpg', NULL, NULL, '2021-08-17 03:29:03', NULL),
(23, 1, 60, '1628231052.jpg', '1636566076.02.jpg', NULL, '2021-11-06 01:18:02', '2021-11-10 12:11:00'),
(24, 1, 61, '1628231140.jpg', '1636565993.02.jpg', '1636565993.03.jpg', '2021-11-06 01:18:02', '2021-11-10 12:10:09'),
(25, 1, 62, '1628231267.jpg', '1636565940.02.jpg', NULL, '2021-11-06 01:18:02', '2021-11-10 12:09:23'),
(26, 1, 63, '1628231376.jpg', NULL, NULL, '2021-11-06 01:18:02', '2021-11-10 12:08:49'),
(27, 1, 64, '1628231464.jpg', NULL, NULL, '2021-11-06 01:18:02', '2021-11-10 12:08:21'),
(28, 1, 65, '1628231627.jpg', '1636565885.02.jpg', '1636565885.03.jpg', '2021-11-06 01:18:02', '2021-11-10 12:07:26'),
(29, 1, 66, '1628318113.jpg', NULL, NULL, '2021-11-06 01:18:02', '2021-11-10 12:06:25'),
(30, 1, 67, '1628318405.jpg', NULL, NULL, '2021-11-06 01:18:02', '2021-11-10 12:05:55'),
(31, 1, 68, '1628318495.jpg', '1636565821.02.jpg', NULL, '2021-11-06 01:18:02', '2021-11-10 12:05:20'),
(32, 1, 69, '1628318705.jpg', NULL, NULL, '2021-11-06 01:18:02', '2021-11-10 12:04:12'),
(33, 1, 70, '1628318851.jpg', NULL, NULL, '2021-11-06 01:18:02', '2021-11-10 12:03:26'),
(34, 1, 71, '1628319149.jpg', NULL, NULL, '2021-11-06 01:18:02', '2021-11-10 12:02:14'),
(35, 1, 72, '1628319725.jpg', NULL, NULL, '2021-11-06 01:18:02', '2021-11-10 12:01:07'),
(36, 1, 73, '1628319828.jpg', NULL, NULL, '2021-11-06 01:18:02', '2021-11-10 11:59:46'),
(37, 1, 74, '1628320176.jpg', NULL, NULL, '2021-11-06 01:18:02', '2021-11-10 11:58:50'),
(38, 1, 75, '1628320296.jpg', NULL, NULL, '2021-11-06 01:18:02', '2021-11-10 11:57:59'),
(39, 1, 76, '1628320444.jpg', NULL, NULL, '2021-11-06 01:18:02', '2021-11-10 11:57:03'),
(40, 1, 77, '1628320627.jpg', NULL, NULL, '2021-11-06 01:18:02', '2021-11-10 11:53:09'),
(41, 1, 78, '1628320696.jpg', NULL, NULL, '2021-11-06 01:18:02', '2021-11-10 11:52:02'),
(42, 1, 79, '1628320763.jpg', NULL, NULL, '2021-11-06 01:18:02', '2021-11-10 11:51:24'),
(43, 1, 80, '1628320930.jpg', NULL, NULL, '2021-11-06 01:18:02', '2021-11-10 11:50:51'),
(44, 1, 81, '1628321095.jpg', NULL, NULL, '2021-11-06 01:18:02', '2021-11-10 11:50:19'),
(45, 1, 82, '1628321186.jpg', NULL, NULL, '2021-11-06 01:18:02', '2021-11-10 11:49:07'),
(46, 1, 83, '1628321335.jpg', NULL, NULL, '2021-11-06 01:18:02', '2021-11-10 11:48:33'),
(47, 1, 84, '1628321423.jpg', '1636565702.02.jpg', NULL, '2021-11-06 01:18:02', '2021-11-10 11:46:16'),
(48, 1, 85, '1628321539.jpg', NULL, NULL, '2021-11-06 01:18:02', '2021-11-10 11:44:42'),
(49, 1, 86, '1628321630.jpg', NULL, NULL, '2021-11-06 01:18:02', '2021-11-10 11:43:25'),
(50, 1, 87, '1628321751.jpg', NULL, NULL, '2021-11-06 01:18:02', '2021-11-10 11:39:01'),
(51, 1, 88, '1628321924.jpg', NULL, NULL, '2021-11-06 01:18:02', '2021-11-10 11:38:34'),
(52, 1, 89, '1628322011.jpg', NULL, NULL, '2021-11-06 01:18:02', '2021-11-10 11:38:01'),
(53, 1, 90, '1628322115.jpg', NULL, NULL, '2021-11-06 01:18:02', '2021-11-10 11:37:29'),
(54, 1, 91, '1628322323.jpg', NULL, NULL, '2021-11-06 01:18:02', '2021-11-10 11:36:51'),
(55, 1, 92, '1628322539.jpg', NULL, NULL, '2021-11-06 01:18:02', '2021-11-10 11:36:22'),
(56, 1, 93, '1628322657.jpg', NULL, NULL, '2021-11-06 01:18:02', '2021-11-10 11:35:47'),
(57, 1, 94, '1628322752.jpg', NULL, NULL, '2021-11-06 01:18:02', '2021-11-10 11:33:14'),
(58, 1, 95, '1628322870.jpg', NULL, NULL, '2021-11-06 01:18:02', '2021-11-10 11:32:31'),
(59, 1, 96, '1628323986.jpg', NULL, NULL, '2021-11-06 01:18:02', '2021-11-10 11:31:39'),
(60, 1, 97, '1628324803.jpg', NULL, NULL, '2021-11-06 01:18:02', '2021-11-10 11:31:02'),
(61, 1, 104, '1628849308.jpg', NULL, NULL, '2021-11-06 01:18:02', '2021-11-10 11:30:30'),
(62, 1, 105, '1628857074.jpg', NULL, NULL, '2021-11-06 01:18:02', '2021-11-10 11:29:51'),
(63, 1, 106, '1628857136.jpg', NULL, NULL, '2021-11-06 01:18:02', '2021-11-10 11:29:11'),
(64, 1, 107, '1628857204.jpg', NULL, NULL, '2021-11-06 01:18:02', '2021-11-10 11:28:28'),
(65, 1, 108, '1628857255.jpg', NULL, NULL, '2021-11-06 01:18:02', '2021-11-10 11:27:45'),
(66, 1, 109, '1628857331.jpg', NULL, NULL, '2021-11-06 01:18:02', '2021-11-10 11:27:10'),
(67, 1, 110, '1628857400.jpg', NULL, NULL, '2021-11-06 01:18:02', '2021-11-10 11:14:36'),
(68, 1, 111, '1628857457.jpg', NULL, NULL, '2021-11-06 01:18:02', '2021-11-10 11:12:53'),
(69, 1, 112, '1628857520.jpg', NULL, NULL, '2021-11-06 01:18:03', '2021-11-10 11:12:07'),
(70, 1, 113, '1628857594.jpg', NULL, NULL, '2021-11-06 01:18:03', '2021-11-10 11:11:16'),
(71, 1, 114, '1628857661.jpg', NULL, NULL, '2021-11-06 01:18:03', '2021-11-10 11:10:46'),
(72, 1, 115, '1628857728.jpg', NULL, NULL, '2021-11-06 01:18:03', '2021-11-10 11:10:17'),
(73, 1, 116, '1628857792.jpg', NULL, NULL, '2021-11-06 01:18:03', '2021-11-10 11:09:41'),
(74, 1, 117, '1628857849.jpg', NULL, NULL, '2021-11-06 01:18:03', '2021-11-10 11:09:08'),
(75, 1, 118, '1628857935.jpg', NULL, NULL, '2021-11-06 01:18:03', '2021-11-10 11:08:38'),
(76, 1, 119, '1628858054.jpg', NULL, NULL, '2021-11-06 01:18:03', '2021-11-10 11:07:52'),
(77, 1, 120, '1628858133.jpg', NULL, NULL, '2021-11-06 01:18:03', '2021-11-10 11:07:13'),
(78, 1, 121, '1628858181.jpg', NULL, NULL, '2021-11-06 01:18:03', '2021-11-10 11:06:36'),
(79, 1, 122, '1628858248.jpg', NULL, NULL, '2021-11-06 01:18:03', '2021-11-10 11:04:31'),
(80, 1, 123, '1628858301.jpg', NULL, NULL, '2021-11-06 01:18:03', '2021-11-10 11:04:00'),
(81, 1, 124, '1628858374.jpg', NULL, NULL, '2021-11-06 01:18:03', '2021-11-10 11:03:27'),
(82, 1, 125, '1628858442.jpg', '1636565522.02.jpg', NULL, '2021-11-06 01:18:03', '2021-11-10 11:02:41'),
(83, 1, 126, '1628858499.jpg', NULL, NULL, '2021-11-06 01:18:03', '2021-11-10 11:00:51'),
(84, 1, 127, '1628858561.jpg', NULL, NULL, '2021-11-06 01:18:03', '2021-11-10 11:00:20'),
(85, 1, 128, '1628858627.jpg', NULL, NULL, '2021-11-06 01:18:03', '2021-11-10 10:59:49'),
(86, 1, 129, '1628858688.jpg', '1636565442.02.jpg', NULL, '2021-11-06 01:18:03', '2021-11-10 10:59:14'),
(87, 1, 130, '1628858764.jpg', NULL, NULL, '2021-11-06 01:18:03', '2021-11-10 10:58:37'),
(88, 1, 131, '1628858811.jpg', NULL, NULL, '2021-11-06 01:18:03', '2021-11-12 14:18:45'),
(89, 1, 132, '1628858871.jpg', NULL, NULL, '2021-11-06 01:18:03', '2021-11-12 14:18:34'),
(90, 1, 133, '1628858924.jpg', NULL, NULL, '2021-11-06 01:18:03', '2021-11-12 14:18:16'),
(91, 1, 134, '1628858974.jpg', '1636565048.02.jpg', NULL, '2021-11-06 01:18:03', '2022-01-04 00:55:39');

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
(22, '2021_08_09_094459_create_customerservices_table', 12),
(23, '2021_08_16_014323_create_customnotes_table', 13),
(24, '2021_08_16_034608_create_customtestimonies_table', 14),
(26, '2021_08_17_055258_create_imageproducts_table', 15),
(27, '2021_10_18_063855_add_thumbnail_to_imageproducts', 16),
(28, '2021_11_12_190846_create_articles_table', 17),
(29, '2021_11_12_210225_add_active_to_products', 18),
(30, '2021_11_12_214621_add_active_to_events', 19),
(31, '2021_11_15_054703_add_discount_to_products', 20),
(32, '2021_11_23_032357_add_active_to_sizecarts', 21),
(33, '2021_11_23_033706_add_active_to_customerservices', 22),
(34, '2021_11_23_034652_add_active_to_customnotes', 23),
(35, '2021_11_23_035021_add_active_to_customtestimonies', 24);

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
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) NOT NULL,
  `discount` int(11) DEFAULT NULL,
  `colour` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heel_height` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_type`, `featured`, `product_image`, `price`, `discount`, `colour`, `heel_height`, `description`, `active`, `created_at`, `updated_at`) VALUES
(60, 'Sepatu Kulit Wanita Handwoven', 'flat', 'n', '1628231052.jpg', 500000, NULL, 'warna bisa request sendiri', 'Sedang', 'handwoven flat ( pre order ) \r\n- wajib cantumkan warna dan ukuran\r\n- ukur panjang telapak kaki dengan penggaris\r\n\r\nbahan : kulit asli (mill natural)\r\noutsole : karet\r\nsize : 36-42\r\n\r\nharga 500K\r\n\r\ngaransi reparasi 1 tahun', 1, '2021-08-05 23:24:12', NULL),
(61, 'Sepatu Boot Kulit Asli - bannera boot', 'wedges', 'n', '1628231140.jpg', 550000, NULL, 'Bisa custom', 'Sedang', 'Sepatu Boots Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun', 1, '2021-08-05 23:25:40', NULL),
(62, 'Sepatu Boots Kulit - Lodie Boot', 'boots', 'n', '1628231267.jpg', 575000, NULL, 'Bisa custom', 'Sedang', 'Sepatu Boots Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol      : Karet \r\nGaransi Reparasi 1 tahun', 1, '2021-08-05 23:27:47', NULL),
(63, 'Sepatu Kulit Asli - Sling Basic', 'heels', 'n', '1628231376.jpg', 475000, NULL, 'Bisa custom', 'Sedang', 'Sepatu Boots Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol      : Karet \r\nGaransi Reparasi 1 tahun', 1, '2021-08-05 23:29:36', NULL),
(64, 'Sepatu Kulit Asli - Handwoven Hells', 'flat', 'n', '1628231464.jpg', 475000, NULL, 'Bisa custom', 'Sedang', 'Sepatu Boots Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol      : Karet \r\nGaransi Reparasi 1 tahun', 1, '2021-08-05 23:31:04', NULL),
(65, 'Sepatu Kulit Asli - Ivory Oxford', 'wedges', 'n', '1628231627.jpg', 475000, NULL, 'Bisa custom', 'Sedang', 'Sepatu Boots Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol      : Karet \r\nGaransi Reparasi 1 tahun', 1, '2021-08-05 23:33:47', NULL),
(66, 'Sepatu Kulit Asli - Lesha Heels', 'boots', 'n', '1628318113.jpg', 475000, NULL, 'Bisa custom', 'Sedang', 'Sepatu Boots Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol      : Karet \r\nGaransi Reparasi 1 tahun\r\n\r\nSize Chart  ( Panjang telapak kaki )\r\n35 : 20cm\r\n36 : 21cm\r\n37 : 22cm\r\n38 : 23cm\r\n39 : 24cm\r\n40 : 25cm\r\n41 : 26cm\r\n42 : 27cm', 1, '2021-08-06 23:35:13', NULL),
(67, 'Sepatu Kulit Asli - Mina Heels', 'heels', 'n', '1628318405.jpg', 475000, NULL, 'Bisa custom', 'Sedang', 'Sepatu Boots Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol      : Karet \r\nGaransi Reparasi 1 tahun', 1, '2021-08-06 23:40:05', NULL),
(68, 'Sepatu Boot Kulit Asli - Noemi Boots', 'flat', 'n', '1628318495.jpg', 625000, NULL, 'Bisa custom', 'Rendah', 'Sepatu Boots Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun', 1, '2021-08-06 23:41:35', NULL),
(69, 'Sepatu Boot Kulit Asli - Mira Boot', 'wedges', 'n', '1628318705.jpg', 525000, NULL, 'Bisa custom', 'Rendah', 'Sepatu Boots Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun', 1, '2021-08-06 23:45:05', NULL),
(70, 'Sepatu Boot Kulit Asli - Jodie Boots', 'boots', 'n', '1628318851.jpg', 575000, NULL, 'Bisa custom', 'Rendah', 'Sepatu Boots Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun', 1, '2021-08-06 23:47:31', NULL),
(71, 'Sepatu Kulit Asli - Goodshoes Leather - Teya Dunlup/Wedges', 'heels', 'n', '1628319149.jpg', 450000, NULL, 'Bisa custom', 'Rendah', 'Sepatu Boots Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun', 1, '2021-08-06 23:52:29', NULL),
(72, 'Sepatu Heels Kulit - Goodshoes Leather - Lula Heels', 'flat', 'n', '1628319725.jpg', 475000, NULL, 'Bisa custom', 'Rendah', 'Sepatu Boots Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun', 1, '2021-08-07 00:02:05', NULL),
(73, 'Sepatu Heels Kulit - Goodshoes Leather - Lesha Stiletto Heels 9cm', 'wedges', 'n', '1628319828.jpg', 475000, NULL, 'Bisa custom', 'Sedang', 'Sepatu Boots Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun', 1, '2021-08-07 00:03:48', NULL),
(74, 'Sepatu Kulit Wanita - Goodshoes Leather - Dione Wedges', 'boots', 'n', '1628320176.jpg', 450000, NULL, 'Bisa costum sendiri', 'Sedang', 'Sepatu Kulit Wanita - Goodshoes Leather - Dione Wedges', 1, '2021-08-07 00:09:36', NULL),
(75, 'Sepatu Kulit Wanita - Goodshoes Leather - Tzuna Woven', 'heels', 'n', '1628320296.jpg', 575000, NULL, 'Bisa custom', 'Sedang', 'Sepatu Boots Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun', 1, '2021-08-07 00:11:36', NULL),
(76, 'Sepatu Heels Kulit - Gloeshoes Leather - Hana Heel', 'flat', 'n', '1628320444.jpg', 475000, NULL, 'Bisa costum sediri', 'Rendah', 'sepatu heels kulit asli', 1, '2021-08-07 00:14:04', NULL),
(77, 'tali kulit', 'wedges', 'n', '1628320627.jpg', 35000, NULL, 'tidak ada', 'tidak ada', 'tali kulit asli panjang 70cm', 1, '2021-08-07 00:17:07', NULL),
(78, 'Sepatu boot kulit - Goodshoes Leather - Donna Boot 7cm', 'boots', 'n', '1628320696.jpg', 550000, NULL, 'Bisa custom', 'Sedang', 'Sepatu Boots Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun', 1, '2021-08-07 00:18:16', NULL),
(79, 'Sepatu Kulit Wanita - Goodshoes Leather - Tassel flat', 'heels', 'n', '1628320763.jpg', 450000, NULL, 'Bisa costum', 'Rendah', 'Sepatu Kulit Wanita - Goodshoes Leather - Tassel flat', 1, '2021-08-07 00:19:23', NULL),
(80, 'Sepatu Wanita Kulit - Goodshoes Leather - Diona Wooden Wedges', 'flat', 'n', '1628320930.jpg', 475000, NULL, 'Bisa costum', 'Rendah', 'Sepatu Wanita Kulit - Goodshoes Leather - Diona Wooden Wedges', 1, '2021-08-07 00:22:10', NULL),
(81, 'sepatu wanita kulit - Gloeshoes Leather- Docmart Low Wanita', 'wedges', 'n', '1628321095.jpg', 500000, NULL, 'Bisa custom', 'Rendah', 'Sepatu Boots Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun', 1, '2021-08-07 00:24:55', NULL),
(82, 'Sepatu Wanita Kulit-Gloeshoes Leather-Madoka Woven', 'boots', 'n', '1628321186.jpg', 515000, NULL, 'Bisa custom', 'Rendah', 'Sepatu  Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun', 1, '2021-08-07 00:26:26', NULL),
(83, 'Sepatu Wanita Kulit-Gloeshoes Leather-Chelsea Boots', 'heels', 'n', '1628321335.jpg', 550000, NULL, 'Bisa custom', 'Rendah', 'Sepatu Boots Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun\r\n\r\nUntuk info size bisa chat dulu sebelum chek out', 1, '2021-08-07 00:28:55', NULL),
(84, 'Sepatu Wanita Kulit-Gloeshoes Leather-Ribbon Dunlup', 'flat', 'n', '1628321423.jpg', 425000, NULL, 'Bisa custom', 'Rendah', 'Sepatu Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun\r\n\r\nUntuk info size bisa chat dulu sebelum chek out', 1, '2021-08-07 00:30:23', NULL),
(85, 'Sepatu Heel Kulit - Gloeshoes Leather - Alika Wooden Heels', 'wedges', 'n', '1628321539.jpg', 470050, NULL, 'Bisa costum', 'Sedang', 'Sepatu Heel Kulit - Gloeshoes Leather - Alika Wooden Heels', 1, '2021-08-07 00:32:19', NULL),
(86, 'Mila Boot - Gloeshoee Leather', 'boots', 'n', '1628321630.jpg', 475000, NULL, 'Bisa costum', 'Rendah', 'Mila Boot - Gloeshoee Leather', 1, '2021-08-07 00:33:50', NULL),
(87, 'Sepatu Wanita Kulit - Gloeshoes Leather - Neida Handwoven', 'heels', 'n', '1628321751.jpg', 450000, NULL, 'Bisa custom', 'Rendah', 'Warna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun\r\n\r\nUntuk info size bisa chat dulu sebelum chek out', 1, '2021-08-07 00:35:51', NULL),
(88, 'Sepatu Boot Kulit - Gloeshoes Leather - Millan Boot', 'flat', 'n', '1628321924.jpg', 450000, NULL, 'Bisa costum', 'Rendah', 'Sepatu Boot Kulit - Gloeshoes Leather - Millan Boot', 1, '2021-08-07 00:38:44', NULL),
(89, 'Sepatu Boot Kulit - Gloeshoes Leather - Alica Boot', 'wedges', 'n', '1628322011.jpg', 600000, NULL, 'Bisa custom', 'Rendah', 'Sepatu Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun\r\n\r\nUntuk info size bisa chat dulu sebelum chek out', 1, '2021-08-07 00:40:11', NULL),
(90, 'Sepatu Heels Kulit Wanita - Gloeshoes Leather - Sling Basic Sandals', 'boots', 'n', '1628322115.jpg', 425000, NULL, 'Bisa custom', 'Sedang', 'Sepatu Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun\r\n\r\nUntuk info size bisa chat dulu sebelum chek out', 1, '2021-08-07 00:41:55', NULL),
(91, 'Sepatu Heels Kulit Wanita - Gloeshoes Leather - Lesha Heels Platform', 'heels', 'n', '1628322323.jpg', 450000, NULL, 'Bisa custom', 'Sedang', 'Sepatu Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun\r\n\r\nUntuk info size bisa chat dulu sebelum chek out', 1, '2021-08-07 00:45:23', NULL),
(92, 'Sepatu Kulit Wanita - Gloeshoes Leather - Oxford tree Colour', 'flat', 'n', '1628322539.jpg', 450000, NULL, 'Bisa custom', 'Sedang', 'Sepatu Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun\r\n\r\nUntuk info size bisa chat dulu sebelum chek out', 1, '2021-08-07 00:48:59', NULL),
(93, 'Sepatu Boots Kulit Wanita - Gloeshoes Leather - High Boots', 'wedges', 'n', '1628322657.jpg', 875000, NULL, 'Bisa custom', 'Sedang', 'Sepatu Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun\r\n\r\nUntuk info size bisa chat dulu sebelum chek out', 1, '2021-08-07 00:50:57', NULL),
(94, 'Sepatu Heels Kulit Wanita - Gloeshoes Leather - Luna Heels', 'boots', 'n', '1628322752.jpg', 475000, NULL, 'Bisa custom', 'Sedang', 'Sepatu Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun\r\n\r\nUntuk info size bisa chat dulu sebelum chek out', 1, '2021-08-07 00:52:32', NULL),
(95, 'Sepatu Kulit Wanita - Gloeshoes Leather - Lula Platform', 'heels', 'n', '1628322870.jpg', 475000, NULL, 'Bisa custom', 'Rendah', 'Sepatu Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun\r\n\r\nUntuk info size bisa chat dulu sebelum chek out', 1, '2021-08-07 00:54:30', NULL),
(96, 'Sepatu Boots Kulit Wanita - Gloeshoes Leather - Donna Boots', 'flat', 'n', '1628323986.jpg', 550000, NULL, 'Bisa custom', 'Sedang', 'Sepatu Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun\r\n\r\nUntuk info size bisa chat dulu sebelum chek out', 1, '2021-08-07 01:13:06', NULL),
(97, 'Sepatu Kulit Wanita - Gloeshoes Leather - Belt Mules Platform', 'wedges', 'n', '1628324803.jpg', 500000, NULL, 'Bisa custom', 'Rendah', 'Sepatu Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun\r\n\r\nUntuk info size bisa chat dulu sebelum chek out', 1, '2021-08-07 01:26:43', NULL),
(104, 'Sepatu Wanita Kulit - Gloeshoes Leather - Loodie Heels Boots', 'boots', 'n', '1628849308.jpg', 550000, NULL, 'Bisa custom', 'Rendah', 'Sepatu Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun\r\n\r\nUntuk info size bisa chat dulu sebelum chek out', 1, '2021-08-13 03:08:28', NULL),
(105, 'Sepatu Kulit Wanita - Gloeshoes Leather - Nuela Mules', 'heels', 'n', '1628857074.jpg', 475000, NULL, 'Bisa custom', 'Rendah', 'Sepatu Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun\r\n\r\nUntuk info size bisa chat dulu sebelum chek out', 1, '2021-08-13 05:17:54', NULL),
(106, 'Sepatu Kulit Wanita - Gloeshoes Leather - Alesta Heels', 'flat', 'n', '1628857136.jpg', 475000, NULL, 'Bisa custom', 'Rendah', 'Sepatu Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun\r\n\r\nUntuk info size bisa chat dulu sebelum chek out', 1, '2021-08-13 05:18:56', NULL),
(107, 'Sepatu Kulit Wanita - Gloeshoes Leather - Tassel Shoes', 'wedges', 'n', '1628857204.jpg', 395000, NULL, 'Bisa custom', 'Rendah', 'Sepatu Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun\r\n\r\nUntuk info size bisa chat dulu sebelum chek out', 1, '2021-08-13 05:20:04', NULL),
(108, 'Sepatu Wanita Kulit - Gloeshoes Leather - Lula Woden Heels', 'boots', 'n', '1628857255.jpg', 475000, NULL, 'Bisa custom', 'Rendah', 'Sepatu Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun\r\n\r\nUntuk info size bisa chat dulu sebelum chek out', 1, '2021-08-13 05:20:55', NULL),
(109, 'Sepatu Wanita Kulit - Gloeshoes Leather - Lova Oxford', 'heels', 'n', '1628857331.jpg', 475000, NULL, 'Bisa custom', 'Rendah', 'Sepatu Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun\r\n\r\nUntuk info size bisa chat dulu sebelum chek out', 1, '2021-08-13 05:22:11', NULL),
(110, 'Sepatu Wanita Kulit - Gloedshoes Leather - Black Handwoven', 'flat', 'n', '1628857400.jpg', 575000, NULL, 'Bisa custom', 'Sedang', 'Sepatu Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun\r\n\r\nUntuk info size bisa chat dulu sebelum chek out', 1, '2021-08-13 05:23:20', NULL),
(111, 'Sepatu Wanita Kulit - Gloeshoes Leather - Belt Moules Dunlup', 'wedges', 'n', '1628857457.jpg', 425000, NULL, 'Bisa custom', 'Sedang', 'Sepatu Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun\r\n\r\nUntuk info size bisa chat dulu sebelum chek out', 1, '2021-08-13 05:24:17', NULL),
(112, 'Sepatu Wanita Kulit - Gloeshoes Leather - Nami Heels Boots', 'boots', 'n', '1628857520.jpg', 475000, NULL, 'Bisa custom', 'Sedang', 'Sepatu Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun\r\n\r\nUntuk info size bisa chat dulu sebelum chek out', 0, '2021-08-13 05:25:20', NULL),
(113, 'Sepatu Wanita Kulit - Gloeshoes Leather - Mimi Colour', 'heels', 'n', '1628857594.jpg', 350000, NULL, 'Bisa custom', 'Rendah', 'Sepatu Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun\r\n\r\nUntuk info size bisa chat dulu sebelum chek out', 0, '2021-08-13 05:26:34', NULL),
(114, 'Sepatu Wanita Kulit - Gloeshoes Leather - Alana Shoes', 'flat', 'n', '1628857661.jpg', 500000, NULL, 'Bisa custom', 'Rendah', 'Sepatu Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun\r\n\r\nUntuk info size bisa chat dulu sebelum chek out', 0, '2021-08-13 05:27:41', NULL),
(115, 'Sepatu Wanita Kulit - Gloeshoes Leather - Sabrina Heels', 'wedges', 'n', '1628857728.jpg', 575000, NULL, 'Bisa custom', 'Rendah', 'Sepatu Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun\r\n\r\nUntuk info size bisa chat dulu sebelum chek out', 0, '2021-08-13 05:28:48', NULL),
(116, 'Sepatu Wanita Kulit - Gloeshoes Leather - Kay Shoes', 'boots', 'n', '1628857792.jpg', 475000, NULL, 'Bisa custom', 'Sedang', 'Sepatu Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun\r\n\r\nUntuk info size bisa chat dulu sebelum chek out', 0, '2021-08-13 05:29:52', NULL),
(117, 'Sepatu Wanita Kulit - Gloeshoes Leather - Nivia Platsform', 'heels', 'n', '1628857849.jpg', 500000, NULL, 'Bisa custom', 'Sedang', 'Sepatu Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun\r\n\r\nUntuk info size bisa chat dulu sebelum chek out', 0, '2021-08-13 05:30:49', NULL),
(118, 'Sepatu Wanita Kulit - Gloeshoes Leather - Milano Woven', 'flat', 'n', '1628857935.jpg', 500000, NULL, 'Bisa custom', 'Rendah', 'Sepatu Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun\r\n\r\nUntuk info size bisa chat dulu sebelum chek out', 1, '2021-08-13 05:32:15', NULL),
(119, 'Sepatu Wanita Kulit - Gloeshoes Leather - Hana Heels', 'wedges', 'n', '1628858054.jpg', 450000, NULL, 'Bisa custom', 'Rendah', 'Sepatu Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun\r\n\r\nUntuk info size bisa chat dulu sebelum chek out', 1, '2021-08-13 05:34:14', NULL),
(120, 'Sepatu Wanita Kulit-Gloeshoes Leather-Mila boot in black', 'boots', 'n', '1628858133.jpg', 525000, NULL, 'Bisa custom', 'Sedang', 'Sepatu Boots Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun\r\n\r\nUntuk info size bisa chat dulu sebelum chek out', 1, '2021-08-13 05:35:33', NULL),
(121, 'Sepatu Kulit Gloeshoes Leather - Luna Heels', 'heels', 'n', '1628858181.jpg', 475000, NULL, 'Bisa custom', 'Sedang', 'Sepatu Boots Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol      : Karet \r\nGaransi Reparasi 1 tahun', 1, '2021-08-13 05:36:21', NULL),
(122, 'Sepatu Heels Kulit - Gloeshoes Leather - Madoka Heels', 'flat', 'n', '1628858248.jpg', 515000, NULL, 'Warna bisa request sendiri', 'Sedang', 'Sepatu Heels Kulit - Gloeshoes Leather - Madoka Heels', 1, '2021-08-13 05:37:28', NULL),
(123, 'Sepatu Kulit Wanita - Gloeshoes Leather - Mira Oxford', 'wedges', 'n', '1628858301.jpg', 450000, NULL, 'Bisa custom', 'Sedang', 'Sepatu Boots Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun', 1, '2021-08-13 05:38:21', NULL),
(124, 'Pelunasan pesanan sepatu boot a.n Shaviera', 'boots', 'n', '1628858374.jpg', 275000, NULL, 'Warna bisa request sendiri', 'Sedang', 'Pelunasan pesanan sepatu boot a.n Shaviera', 1, '2021-08-13 05:39:34', NULL),
(125, 'Sepatu Wanita Kulit - Gloeshoes Leather - Luna Heels', 'heels', 'n', '1628858442.jpg', 450000, NULL, 'Bisa custom', 'Sedang', 'Sepatu Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun\r\n\r\nUntuk info size bisa chat dulu sebelum chek out', 1, '2021-08-13 05:40:42', NULL),
(126, 'Sepatu Wanita Kulit - Gloeshoes Leather - Mary Jane Platform', 'flat', 'n', '1628858499.jpg', 475000, NULL, 'Bisa custom', 'Sedang', 'Sepatu Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun\r\n\r\nUntuk info size bisa chat dulu sebelum chek out', 1, '2021-08-13 05:41:39', NULL),
(127, 'Sepatu Boot Wanita Kulit - Gloeshoes Leather - Ankle Belt', 'wedges', 'n', '1628858561.jpg', 575000, NULL, 'Bisa custom', 'Sedang', 'Sepatu Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun\r\n\r\nUntuk info size bisa chat dulu sebelum chek out', 1, '2021-08-13 05:42:41', NULL),
(128, 'Sepatu Wanita Kulit - Gloeshoes Leather - Sakura Flat Shoes', 'boots', 'n', '1628858627.jpg', 425000, NULL, 'Bisa custom', 'Sedang', 'Sepatu Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun\r\n\r\nUntuk info size bisa chat dulu sebelum chek out', 1, '2021-08-13 05:43:47', NULL),
(129, 'Sepatu wanita kulit-Gloeshoes Leather-Mjwoven heels iratan', 'heels', 'n', '1628858688.jpg', 450000, NULL, 'Bisa custom', 'Sedang', 'Sepatu  Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun\r\n\r\nUntuk info size bisa chat dulu sebelum chek out', 1, '2021-08-13 05:44:48', NULL),
(130, 'Sepatu Heels Kulit - Gloeshoes Leather - Black Basic Platform', 'flat', 'n', '1628858764.jpg', 475000, NULL, 'Bisa custom', 'Sedang', 'Sepatu Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun\r\n\r\nUntuk info size bisa chat dulu sebelum chek out', 1, '2021-08-13 05:46:04', NULL),
(131, 'Sepatu Heel Kulit - Gloeshoes Leather - Mary Jane Platform', 'wedges', 'n', '1628858811.jpg', 475000, NULL, 'Warna bisa request sendiri', 'Sedang', 'Sepatu Heel Kulit - Gloeshoes Leather - Mary Jane Platform', 1, '2021-08-13 05:46:51', NULL),
(132, 'Sepatu Boot Kulit - Gloeshoes Leather - Kirana Boot', 'boots', 'n', '1628858871.jpg', 550000, NULL, 'Bisa custom', 'Sedang', 'Sepatu Boot Kulit - Gloeshoes Leather - Kirana Boot \r\nSepatu Boots Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun', 1, '2021-08-13 05:47:51', NULL),
(133, 'Sepatu Boot Kulit - Goodshoes Leather - Mila Boot', 'heels', 'n', '1628858924.jpg', 525000, NULL, 'Bisa custom', 'Sedang', 'Sepatu Boots Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun', 1, '2021-08-13 05:48:44', NULL),
(134, 'Sepatu Boot Kulit - Gloeshoes Leather - Kilya Boot', 'flat', 'y', '1628858974.jpg', 500000, 10, 'Warna bisa request sendiri', 'Sedang', 'size 38 \r\nbahan kulit pull up\r\nhak iratan 5cm\r\ngaransi reparasi 1 tahun', 1, '2021-08-13 05:49:34', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `products123`
--

CREATE TABLE `products123` (
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
-- Dumping data untuk tabel `products123`
--

INSERT INTO `products123` (`id`, `product_name`, `product_type`, `featured`, `product_image`, `price`, `colour`, `heel_height`, `description`, `created_at`, `updated_at`) VALUES
(60, 'Sepatu Kulit Wanita Handwoven', 'flat', 'y', '1628231052.jpg', 500000, 'warna bisa request sendiri', 12, 'handwoven flat ( pre order ) \r\n- wajib cantumkan warna dan ukuran\r\n- ukur panjang telapak kaki dengan penggaris\r\n\r\nbahan : kulit asli (mill natural)\r\noutsole : karet\r\nsize : 36-42\r\n\r\nharga 500K\r\n\r\ngaransi reparasi 1 tahun', '2021-08-05 23:24:12', NULL),
(61, 'Sepatu Boot Kulit Asli - bannera boot', 'boots', 'n', '1628231140.jpg', 550000, 'Bisa custom', 12, 'Sepatu Boots Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun', '2021-08-05 23:25:40', NULL),
(62, 'Sepatu Boots Kulit - Lodie Boot', 'boots', 'n', '1628231267.jpg', 575000, 'Bisa custom', 12, 'Sepatu Boots Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol      : Karet \r\nGaransi Reparasi 1 tahun', '2021-08-05 23:27:47', NULL),
(63, 'Sepatu Kulit Asli - Sling Basic', 'boots', 'n', '1628231376.jpg', 475000, 'Bisa custom', 12, 'Sepatu Boots Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol      : Karet \r\nGaransi Reparasi 1 tahun', '2021-08-05 23:29:36', NULL),
(64, 'Sepatu Kulit Asli - Handwoven Hells', 'heels', 'n', '1628231464.jpg', 475000, 'Bisa custom', 12, 'Sepatu Boots Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol      : Karet \r\nGaransi Reparasi 1 tahun', '2021-08-05 23:31:04', NULL),
(65, 'Sepatu Kulit Asli - Ivory Oxford', 'boots', 'n', '1628231627.jpg', 475000, 'Bisa custom', 12, 'Sepatu Boots Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol      : Karet \r\nGaransi Reparasi 1 tahun', '2021-08-05 23:33:47', NULL),
(66, 'Sepatu Kulit Asli - Lesha Heels', 'heels', 'n', '1628318113.jpg', 475000, 'Bisa custom', 12, 'Sepatu Boots Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol      : Karet \r\nGaransi Reparasi 1 tahun\r\n\r\nSize Chart  ( Panjang telapak kaki )\r\n35 : 20cm\r\n36 : 21cm\r\n37 : 22cm\r\n38 : 23cm\r\n39 : 24cm\r\n40 : 25cm\r\n41 : 26cm\r\n42 : 27cm', '2021-08-06 23:35:13', NULL),
(67, 'Sepatu Kulit Asli - Mina Heels', 'heels', 'n', '1628318405.jpg', 475000, 'Bisa custom', 12, 'Sepatu Boots Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol      : Karet \r\nGaransi Reparasi 1 tahun', '2021-08-06 23:40:05', NULL),
(68, 'Sepatu Boot Kulit Asli - Noemi Boots', 'flat', 'n', '1628318495.jpg', 625000, 'Bisa custom', 12, 'Sepatu Boots Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun', '2021-08-06 23:41:35', NULL),
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
(104, 'Sepatu Wanita Kulit - Gloeshoes Leather - Loodie Heels Boots', 'boots', 'n', '1628849308.jpg', 550000, 'Bisa custom', 5, 'Sepatu Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun\r\n\r\nUntuk info size bisa chat dulu sebelum chek out', '2021-08-13 03:08:28', NULL),
(105, 'Sepatu Kulit Wanita - Gloeshoes Leather - Nuela Mules', 'flat', 'n', '1628857074.jpg', 475000, 'Bisa custom', 3, 'Sepatu Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun\r\n\r\nUntuk info size bisa chat dulu sebelum chek out', '2021-08-13 05:17:54', NULL),
(106, 'Sepatu Kulit Wanita - Gloeshoes Leather - Alesta Heels', 'heels', 'n', '1628857136.jpg', 475000, 'Bisa custom', 2, 'Sepatu Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun\r\n\r\nUntuk info size bisa chat dulu sebelum chek out', '2021-08-13 05:18:56', NULL),
(107, 'Sepatu Kulit Wanita - Gloeshoes Leather - Tassel Shoes', 'flat', 'n', '1628857204.jpg', 395000, 'Bisa custom', 4, 'Sepatu Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun\r\n\r\nUntuk info size bisa chat dulu sebelum chek out', '2021-08-13 05:20:04', NULL),
(108, 'Sepatu Wanita Kulit - Gloeshoes Leather - Lula Woden Heels', 'heels', 'n', '1628857255.jpg', 475000, 'Bisa custom', 6, 'Sepatu Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun\r\n\r\nUntuk info size bisa chat dulu sebelum chek out', '2021-08-13 05:20:55', NULL),
(109, 'Sepatu Wanita Kulit - Gloeshoes Leather - Lova Oxford', 'flat', 'n', '1628857331.jpg', 475000, 'Bisa custom', 7, 'Sepatu Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun\r\n\r\nUntuk info size bisa chat dulu sebelum chek out', '2021-08-13 05:22:11', NULL),
(110, 'Sepatu Wanita Kulit - Gloedshoes Leather - Black Handwoven', 'flat', 'n', '1628857400.jpg', 575000, 'Bisa custom', 9, 'Sepatu Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun\r\n\r\nUntuk info size bisa chat dulu sebelum chek out', '2021-08-13 05:23:20', NULL),
(111, 'Sepatu Wanita Kulit - Gloeshoes Leather - Belt Moules Dunlup', 'flat', 'n', '1628857457.jpg', 425000, 'Bisa custom', 3, 'Sepatu Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun\r\n\r\nUntuk info size bisa chat dulu sebelum chek out', '2021-08-13 05:24:17', NULL),
(112, 'Sepatu Wanita Kulit - Gloeshoes Leather - Nami Heels Boots', 'boots', 'n', '1628857520.jpg', 475000, 'Bisa custom', 5, 'Sepatu Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun\r\n\r\nUntuk info size bisa chat dulu sebelum chek out', '2021-08-13 05:25:20', NULL),
(113, 'Sepatu Wanita Kulit - Gloeshoes Leather - Mimi Colour', 'flat', 'n', '1628857594.jpg', 350000, 'Bisa custom', 4, 'Sepatu Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun\r\n\r\nUntuk info size bisa chat dulu sebelum chek out', '2021-08-13 05:26:34', NULL),
(114, 'Sepatu Wanita Kulit - Gloeshoes Leather - Alana Shoes', 'flat', 'n', '1628857661.jpg', 500000, 'Bisa custom', 6, 'Sepatu Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun\r\n\r\nUntuk info size bisa chat dulu sebelum chek out', '2021-08-13 05:27:41', NULL),
(115, 'Sepatu Wanita Kulit - Gloeshoes Leather - Sabrina Heels', 'heels', 'n', '1628857728.jpg', 575000, 'Bisa custom', 6, 'Sepatu Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun\r\n\r\nUntuk info size bisa chat dulu sebelum chek out', '2021-08-13 05:28:48', NULL),
(116, 'Sepatu Wanita Kulit - Gloeshoes Leather - Kay Shoes', 'flat', 'n', '1628857792.jpg', 475000, 'Bisa custom', 8, 'Sepatu Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun\r\n\r\nUntuk info size bisa chat dulu sebelum chek out', '2021-08-13 05:29:52', NULL),
(117, 'Sepatu Wanita Kulit - Gloeshoes Leather - Nivia Platsform', 'flat', 'n', '1628857849.jpg', 500000, 'Bisa custom', 8, 'Sepatu Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun\r\n\r\nUntuk info size bisa chat dulu sebelum chek out', '2021-08-13 05:30:49', NULL),
(118, 'Sepatu Wanita Kulit - Gloeshoes Leather - Milano Woven', 'flat', 'n', '1628857935.jpg', 500000, 'Bisa custom', 4, 'Sepatu Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun\r\n\r\nUntuk info size bisa chat dulu sebelum chek out', '2021-08-13 05:32:15', NULL),
(119, 'Sepatu Wanita Kulit - Gloeshoes Leather - Hana Heels', 'heels', 'n', '1628858054.jpg', 450000, 'Bisa custom', 8, 'Sepatu Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun\r\n\r\nUntuk info size bisa chat dulu sebelum chek out', '2021-08-13 05:34:14', NULL),
(120, 'Sepatu Wanita Kulit-Gloeshoes Leather-Mila boot in black', 'flat', 'n', '1628858133.jpg', 525000, 'Bisa custom', 5, 'Sepatu Boots Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun\r\n\r\nUntuk info size bisa chat dulu sebelum chek out', '2021-08-13 05:35:33', NULL),
(121, 'Sepatu Kulit Gloeshoes Leather - Luna Heels', 'heels', 'n', '1628858181.jpg', 475000, 'Bisa custom', 6, 'Sepatu Boots Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol      : Karet \r\nGaransi Reparasi 1 tahun', '2021-08-13 05:36:21', NULL),
(122, 'Sepatu Heels Kulit - Gloeshoes Leather - Madoka Heels', 'heels', 'n', '1628858248.jpg', 515000, 'Warna bisa request sendiri', 3, 'Sepatu Heels Kulit - Gloeshoes Leather - Madoka Heels', '2021-08-13 05:37:28', NULL),
(123, 'Sepatu Kulit Wanita - Gloeshoes Leather - Mira Oxford', 'flat', 'n', '1628858301.jpg', 450000, 'Bisa custom', 4, 'Sepatu Boots Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun', '2021-08-13 05:38:21', NULL),
(124, 'Pelunasan pesanan sepatu boot a.n Shaviera', 'boots', 'n', '1628858374.jpg', 275000, 'Warna bisa request sendiri', 5, 'Pelunasan pesanan sepatu boot a.n Shaviera', '2021-08-13 05:39:34', NULL),
(125, 'Sepatu Wanita Kulit - Gloeshoes Leather - Luna Heels', 'heels', 'n', '1628858442.jpg', 450000, 'Bisa custom', 7, 'Sepatu Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun\r\n\r\nUntuk info size bisa chat dulu sebelum chek out', '2021-08-13 05:40:42', NULL),
(126, 'Sepatu Wanita Kulit - Gloeshoes Leather - Mary Jane Platform', 'flat', 'n', '1628858499.jpg', 475000, 'Bisa custom', 4, 'Sepatu Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun\r\n\r\nUntuk info size bisa chat dulu sebelum chek out', '2021-08-13 05:41:39', NULL),
(127, 'Sepatu Boot Wanita Kulit - Gloeshoes Leather - Ankle Belt', 'flat', 'n', '1628858561.jpg', 575000, 'Bisa custom', 4, 'Sepatu Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun\r\n\r\nUntuk info size bisa chat dulu sebelum chek out', '2021-08-13 05:42:41', NULL),
(128, 'Sepatu Wanita Kulit - Gloeshoes Leather - Sakura Flat Shoes', 'flat', 'n', '1628858627.jpg', 425000, 'Bisa custom', 7, 'Sepatu Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun\r\n\r\nUntuk info size bisa chat dulu sebelum chek out', '2021-08-13 05:43:47', NULL),
(129, 'Sepatu wanita kulit-Gloeshoes Leather-Mjwoven heels iratan', 'heels', 'n', '1628858688.jpg', 450000, 'Bisa custom', 5, 'Sepatu  Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun\r\n\r\nUntuk info size bisa chat dulu sebelum chek out', '2021-08-13 05:44:48', NULL),
(130, 'Sepatu Heels Kulit - Gloeshoes Leather - Black Basic Platform', 'flat', 'n', '1628858764.jpg', 475000, 'Bisa custom', 5, 'Sepatu Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun\r\n\r\nUntuk info size bisa chat dulu sebelum chek out', '2021-08-13 05:46:04', NULL),
(131, 'Sepatu Heel Kulit - Gloeshoes Leather - Mary Jane Platform', 'flat', 'n', '1628858811.jpg', 475000, 'Warna bisa request sendiri', 5, 'Sepatu Heel Kulit - Gloeshoes Leather - Mary Jane Platform', '2021-08-13 05:46:51', NULL),
(132, 'Sepatu Boot Kulit - Gloeshoes Leather - Kirana Boot', 'boots', 'n', '1628858871.jpg', 550000, 'Bisa custom', 6, 'Sepatu Boot Kulit - Gloeshoes Leather - Kirana Boot \r\nSepatu Boots Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun', '2021-08-13 05:47:51', NULL),
(133, 'Sepatu Boot Kulit - Goodshoes Leather - Mila Boot', 'boots', 'n', '1628858924.jpg', 525000, 'Bisa custom', 7, 'Sepatu Boots Wanita Dari Kulit Asli \r\nWarna : Bisa custom\r\nSize: 35-43\r\nBahan : Kulit Sapi\r\nSol Karet \r\nGaransi Reparasi 1 tahun', '2021-08-13 05:48:44', NULL),
(134, 'Sepatu Boot Kulit - Gloeshoes Leather - Kilya Boot', 'boots', 'n', '1628858974.jpg', 500000, 'Warna bisa requst sendiri', 4, 'size 38 \r\nbahan kulit pull up\r\nhak iratan 5cm\r\ngaransi reparasi 1 tahun', '2021-08-13 05:49:34', NULL),
(139, '1', 'flat', 'n', '1629197415.jpg', 1, '1', 1, '1', '2021-08-17 03:50:15', NULL);

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
  `active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sizecarts`
--

INSERT INTO `sizecarts` (`id`, `size`, `foot_length`, `active`, `created_at`, `updated_at`) VALUES
(2, 35, 20, 1, '2021-08-09 02:33:00', '2021-08-09 03:35:47'),
(3, 36, 21, 1, '2021-08-09 03:36:11', NULL),
(4, 37, 22, 1, '2021-08-09 03:36:24', NULL),
(5, 38, 23, 1, '2021-08-09 03:36:41', NULL),
(6, 39, 24, 1, '2021-08-09 03:36:59', NULL),
(7, 40, 25, 1, '2021-08-09 03:37:17', NULL),
(8, 41, 26, 1, '2021-08-09 03:37:32', NULL),
(9, 42, 27, 1, '2021-08-09 03:37:50', NULL);

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
(16, 'flat', '4155WhatsApp Image 2021-08-14 at 15.46.10.jpeg', NULL, '2021-08-06 04:57:59', '2021-08-14 01:49:46'),
(17, 'heels', '8327WhatsApp Image 2021-08-14 at 15.46.09 (1).jpeg', NULL, '2021-08-06 04:59:39', '2021-08-14 01:50:05'),
(18, 'boots', '4058WhatsApp Image 2021-08-14 at 15.46.09.jpeg', NULL, '2021-08-06 05:00:04', '2021-08-14 01:50:19'),
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
(5, 'Weargloeshoes Admin', 'admin@weargloeshoes', '080808080808', '$2y$10$3uAXfzDXqVn5auo6yFA2IOR4FU5kCNRk.dZRn9WWC.NlYt5SkwO1G');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `customerservices`
--
ALTER TABLE `customerservices`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `customnotes`
--
ALTER TABLE `customnotes`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `customtestimonies`
--
ALTER TABLE `customtestimonies`
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
-- Indeks untuk tabel `imageproducts`
--
ALTER TABLE `imageproducts`
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
-- Indeks untuk tabel `products123`
--
ALTER TABLE `products123`
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
-- AUTO_INCREMENT untuk tabel `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `customerservices`
--
ALTER TABLE `customerservices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `customnotes`
--
ALTER TABLE `customnotes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `customtestimonies`
--
ALTER TABLE `customtestimonies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `feeds`
--
ALTER TABLE `feeds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `imageproducts`
--
ALTER TABLE `imageproducts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;

--
-- AUTO_INCREMENT untuk tabel `products123`
--
ALTER TABLE `products123`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

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
  MODIFY `post_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

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
