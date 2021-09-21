-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Sep 2021 pada 12.16
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kalibrasi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alat`
--

CREATE TABLE `alat` (
  `id` int(10) UNSIGNED NOT NULL,
  `alt_kode` int(11) NOT NULL,
  `alt_merk` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt_seri` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt_rentang` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt_res` decimal(4,3) NOT NULL,
  `alt_tgl` date NOT NULL,
  `divisi_id` int(10) NOT NULL,
  `kategori_id` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `alat`
--

INSERT INTO `alat` (`id`, `alt_kode`, `alt_merk`, `alt_seri`, `alt_rentang`, `alt_res`, `alt_tgl`, `divisi_id`, `kategori_id`, `created_at`, `updated_at`) VALUES
(31, 1, 'Mitutoyo', 'CD-12\" C / 1047946', '0 - 200 mm', '0.010', '2021-08-26', 2, 1, '2021-08-25 20:26:09', '2021-08-25 20:26:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `divisi`
--

CREATE TABLE `divisi` (
  `id` int(10) UNSIGNED NOT NULL,
  `div_nama` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `div pic` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `divisi`
--

INSERT INTO `divisi` (`id`, `div_nama`, `div pic`, `created_at`, `updated_at`) VALUES
(1, 'Molding', 'muarif', NULL, NULL),
(2, 'Quality Control', 'Rian F.', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `id` int(10) UNSIGNED NOT NULL,
  `alat_id` int(10) NOT NULL,
  `jdw_tgl` date NOT NULL,
  `jdw_kal` date NOT NULL,
  `jdw_sts` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`id`, `alat_id`, `jdw_tgl`, `jdw_kal`, `jdw_sts`, `created_at`, `updated_at`) VALUES
(2, 31, '2022-02-26', '1970-01-01', 0, '2021-08-25 20:26:09', '2021-08-25 20:26:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kalibrator`
--

CREATE TABLE `kalibrator` (
  `id` int(10) UNSIGNED NOT NULL,
  `klb_nama` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `klb_merk` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `klb_model` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `klb_seri` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `klb_capacity` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `klb_datang` date NOT NULL,
  `klb_period` int(11) NOT NULL,
  `klb_img` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kalibrator`
--

INSERT INTO `kalibrator` (`id`, `klb_nama`, `klb_merk`, `klb_model`, `klb_seri`, `klb_capacity`, `klb_datang`, `klb_period`, `klb_img`, `created_at`, `updated_at`) VALUES
(14, 'Caliper Checker', 'Mitutoyo', '515-555', '0700201', '300 mm', '2021-09-01', 24, 'Caliper Checker.jpg', '2021-09-01 01:25:50', '2021-09-01 01:25:50'),
(18, 'Gauge BLock', 'Mitutoyo', '516-106-10', '0700202', '2.5 ~ 25 mm', '2021-09-17', 24, 'gauge block.jpg', '2021-09-16 23:57:02', '2021-09-16 23:57:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kalibrator_detail`
--

CREATE TABLE `kalibrator_detail` (
  `id` int(10) UNSIGNED NOT NULL,
  `kalibrator_id` int(11) NOT NULL,
  `kalibrator_nominal` decimal(50,2) NOT NULL,
  `kalibrator_cor` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kalibrator_detail`
--

INSERT INTO `kalibrator_detail` (`id`, `kalibrator_id`, `kalibrator_nominal`, `kalibrator_cor`, `created_at`, `updated_at`) VALUES
(32, 14, '50.00', '1.90', '2021-09-01 01:25:50', '2021-09-01 01:25:50'),
(33, 14, '100.00', '1.00', '2021-09-01 01:25:50', '2021-09-01 01:25:50'),
(34, 14, '150.00', '0.80', '2021-09-01 01:25:51', '2021-09-01 01:25:51'),
(35, 14, '200.00', '0.50', '2021-09-01 01:25:51', '2021-09-01 01:25:51'),
(36, 14, '250.00', '0.40', '2021-09-01 01:25:51', '2021-09-01 01:25:51'),
(37, 14, '300.00', '0.50', '2021-09-01 01:25:51', '2021-09-01 01:25:51'),
(39, 18, '2.50', '1.90', '2021-09-16 23:57:02', '2021-09-16 23:57:02'),
(40, 18, '5.10', '1.00', '2021-09-16 23:57:02', '2021-09-16 23:57:02'),
(41, 18, '7.70', '1.40', '2021-09-16 23:57:02', '2021-09-16 23:57:02'),
(42, 18, '10.30', '0.80', '2021-09-16 23:57:02', '2021-09-16 23:57:02'),
(43, 18, '12.90', '0.50', '2021-09-16 23:57:02', '2021-09-16 23:57:02'),
(44, 18, '15.00', '0.40', '2021-09-16 23:57:02', '2021-09-16 23:57:02'),
(45, 18, '17.60', '0.50', '2021-09-16 23:57:03', '2021-09-16 23:57:03'),
(46, 18, '20.20', '-0.11', '2021-09-16 23:57:03', '2021-09-16 23:57:03'),
(47, 18, '22.80', '-0.13', '2021-09-16 23:57:03', '2021-09-16 23:57:03'),
(48, 18, '25.00', '0.00', '2021-09-16 23:57:03', '2021-09-16 23:57:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(10) UNSIGNED NOT NULL,
  `ktg_nama` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ktg_kode` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ktg_img` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ktg_period` int(11) NOT NULL,
  `ktg_klb` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `ktg_nama`, `ktg_kode`, `ktg_img`, `ktg_period`, `ktg_klb`, `created_at`, `updated_at`) VALUES
(1, 'Digimatic Caliper', 'DCA-', 'Digimatic_Caliper.jpg', 6, 1, NULL, NULL),
(2, 'Dial Thickness Gauge', 'DTG-', 'Dial Thickness Gauge.jpg', 6, 2, NULL, NULL),
(3, 'Digimatic Micrometer', 'DMC-', 'Digimatic_Micrometer.jpg', 6, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2021_08_10_032426_alat', 2),
(4, '2021_08_10_035740_kategori', 3),
(5, '2021_08_10_043312_divisi', 4),
(6, '2021_08_26_021846_jadwal', 5),
(8, '2021_08_26_035149_kalibrator', 6),
(9, '2021_08_26_043024_kalibrator_detail', 7),
(10, '2021_08_26_044735_sert_kalibrator', 8),
(11, '2021_09_02_090654_jdw_kalibrator', 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sert_kalibrator`
--

CREATE TABLE `sert_kalibrator` (
  `id` int(10) UNSIGNED NOT NULL,
  `kalibrator_id` int(11) NOT NULL,
  `sert_tgl` date NOT NULL,
  `sert_file` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sert_sts` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sert_kalibrator`
--

INSERT INTO `sert_kalibrator` (`id`, `kalibrator_id`, `sert_tgl`, `sert_file`, `sert_sts`, `created_at`, `updated_at`) VALUES
(2, 14, '2021-09-01', 'sertifikat caliper checker.jpg', 1, '2021-09-01 01:25:50', '2021-09-01 01:25:50'),
(4, 18, '2021-09-17', '1E 286 N=1 (B1X-E3635-00) 10-12-20 PAGE 5.pdf', 1, '2021-09-16 23:57:02', '2021-09-16 23:57:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alat`
--
ALTER TABLE `alat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kalibrator`
--
ALTER TABLE `kalibrator`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kalibrator_detail`
--
ALTER TABLE `kalibrator_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sert_kalibrator`
--
ALTER TABLE `sert_kalibrator`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT untuk tabel `alat`
--
ALTER TABLE `alat`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `divisi`
--
ALTER TABLE `divisi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kalibrator`
--
ALTER TABLE `kalibrator`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `kalibrator_detail`
--
ALTER TABLE `kalibrator_detail`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `sert_kalibrator`
--
ALTER TABLE `sert_kalibrator`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
