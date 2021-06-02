-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Jun 2021 pada 11.01
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppl2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'guru@stis.ac.id', 2, '2021-06-01 23:42:27', 1),
(2, '::1', 'guru@gmail.com', 5, '2021-06-02 00:04:53', 1),
(3, '::1', 'guru@gmail.com', 5, '2021-06-02 00:05:10', 1),
(4, '::1', 'guru@gmail.com', 5, '2021-06-02 00:05:34', 1),
(5, '::1', 'zahlul@gmail.com', 6, '2021-06-02 00:44:06', 1),
(6, '::1', 'zahlul@gmail.com', 6, '2021-06-02 00:44:24', 1),
(7, '::1', 'zahlul@gmail.com', NULL, '2021-06-02 00:44:44', 0),
(8, '::1', 'zahlul@gmail.com', 6, '2021-06-02 00:44:58', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `biaya_belajar` int(11) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `rating` float NOT NULL,
  `jml_ulasan` int(11) NOT NULL DEFAULT 0,
  `id_user` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id`, `nama`, `lokasi`, `biaya_belajar`, `deskripsi`, `rating`, `jml_ulasan`, `id_user`) VALUES
(5, 'Trisna Ningsih', 'Jakarta', 100000, '1. Waktu pembelajaran dapat dilakukan secara fleksibel\r\n2. Pertemuan pertama akan memahami basic theory terlebih dahulu disertai dengan praktik.\r\n3. Gaya pengajaran akan disesuaikan dengan siswa dan dapat me-request materi', 0, 0, 5),
(6, 'Defry Gunawan', 'Surabaya', 100000, 'Saya biasanya mengajar siswa-siswa Sekolah Dasar yang baru belajar membaca maupun tentang tugas perhitungan dasar maupun pengetahuan alam.\r\nSaya mengutamakan apapun yang membuat siswa dapat belajar dengan baik dan nyaman', 0, 0, 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru_subjek`
--

CREATE TABLE `guru_subjek` (
  `id` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `id_subjek` int(11) NOT NULL,
  `date_created` varchar(255) NOT NULL,
  `date_updated` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `guru_subjek`
--

INSERT INTO `guru_subjek` (`id`, `id_guru`, `id_subjek`, `date_created`, `date_updated`) VALUES
(1, 5, 5, '2021-06-02 00:04:29', NULL),
(2, 5, 6, '2021-06-02 00:04:29', NULL),
(3, 6, 1, '2021-06-02 00:04:29', NULL),
(4, 6, 2, '2021-06-02 00:04:29', NULL),
(5, 6, 4, '2021-06-02 00:04:29', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapel`
--

CREATE TABLE `mapel` (
  `id_mapel` int(5) NOT NULL,
  `nama_mapel` varchar(50) NOT NULL,
  `date_created` varchar(225) NOT NULL,
  `date_updated` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mapel`
--

INSERT INTO `mapel` (`id_mapel`, `nama_mapel`, `date_created`, `date_updated`) VALUES
(1, 'Matematika', '27 Mei 2021', '27 Mei 2021'),
(2, 'Bahasa Inggris', '27 Mei 2021', '27 Mei 2021'),
(3, 'Bahasa Pemrograman', '27 Mei 2021', '27 Mei 2021'),
(4, 'Akuntansi', '27 Mei 2021', '27 Mei 2021'),
(5, 'Biologi', '27 Mei 2021', '27 Mei 2021');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1622608347, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `murid`
--

CREATE TABLE `murid` (
  `id_murid` int(5) NOT NULL,
  `nama_murid` varchar(50) NOT NULL,
  `lokasi_murid` varchar(100) NOT NULL,
  `jml_mapel_diikuti` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `murid`
--

INSERT INTO `murid` (`id_murid`, `nama_murid`, `lokasi_murid`, `jml_mapel_diikuti`) VALUES
(1, 'Ovin Nada', 'Jakarta', 0),
(2, 'Jessica Nadyla', 'Bandung', 0),
(3, 'Nabila Zahra', 'Bogor', 0),
(4, 'Putri Rosalina', 'Bekasi', 0),
(5, 'Andrean Syah', 'Jakarta', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_reservasi` int(11) NOT NULL,
  `sudah_dibayar` varchar(50) NOT NULL,
  `date_created` varchar(255) NOT NULL,
  `date_updated` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `report`
--

CREATE TABLE `report` (
  `id_report` int(11) NOT NULL,
  `alasan` enum('membuat kesal','spam','tidak menyelesaikan transaksi','mengirim sesuatu menyinggung','akun palsu','lainnya') NOT NULL,
  `detail` varchar(255) NOT NULL,
  `id_murid` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `date_created` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `reservasi`
--

CREATE TABLE `reservasi` (
  `id_reservasi` int(11) NOT NULL,
  `status_konfirmasi` tinyint(1) NOT NULL,
  `hari_konfirmasi` varchar(255) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `id_murid` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `date_created` varchar(255) NOT NULL,
  `date_updated` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `review`
--

CREATE TABLE `review` (
  `id_ulasan` int(5) NOT NULL,
  `id_guru` int(5) NOT NULL,
  `id_murid` int(5) NOT NULL,
  `ulasan` varchar(200) NOT NULL,
  `skor_rating` int(2) NOT NULL,
  `date_created` varchar(255) NOT NULL,
  `date_updated` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `review`
--

INSERT INTO `review` (`id_ulasan`, `id_guru`, `id_murid`, `ulasan`, `skor_rating`, `date_created`, `date_updated`) VALUES
(1, 1, 1, 'Materinya menarik dan mudah di pahami', 5, '28 mei 2021', '28 mei 2021');

-- --------------------------------------------------------

--
-- Struktur dari tabel `subjek`
--

CREATE TABLE `subjek` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `date_created` varchar(255) NOT NULL,
  `date_updated` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `subjek`
--

INSERT INTO `subjek` (`id`, `nama`, `id_mapel`, `date_created`, `date_updated`) VALUES
(1, 'Aljabar', 1, '27 Mei 2021', '27 Mei 2021'),
(2, 'Aritmatika', 1, '27 Mei 2021', '27 Mei 2021'),
(3, 'Trigonometri', 1, '27 Mei 2021', '27 Mei 2021'),
(4, 'Kalkulus', 1, '27 Mei 2021', '27 Mei 2021'),
(5, 'Grammar', 2, '27 Mei 2021', '27 Mei 2021'),
(6, 'TOEFL', 2, '27 Mei 2021', '27 Mei 2021'),
(7, 'C++', 3, '27 Mei 2021', '27 Mei 2021'),
(8, 'Java', 3, '27 Mei 2021', '27 Mei 2021'),
(9, 'Genetika', 5, '27 Mei 2021', '27 Mei 2021'),
(10, 'Botani', 5, '27 Mei 2021', '27 Mei 2021'),
(11, 'Biologi seluler', 5, '27 Mei 2021', '27 Mei 2021');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `profile_picture` varchar(255) NOT NULL DEFAULT 'default.png',
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `role` varchar(255) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `fullname`, `profile_picture`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `role`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(5, 'guru@gmail.com', 'guru', 'default.png', '$2y$10$p/wKjG8HKqvVQ7cvtoM.felXa1VTIwBalDq6BmR04nS6VcWSgidPq', NULL, NULL, NULL, NULL, 'guru', NULL, NULL, 1, 0, '2021-06-02 00:04:29', '2021-06-02 00:04:29', NULL),
(6, 'zahlul@gmail.com', 'zahlul', 'default.png', '$2y$10$ZeDCOBsQtTln6iFXU4GHH.29JKq.FWNd7LyIGVMlIIe7ilhw1ldgG', NULL, NULL, NULL, NULL, 'guru', NULL, NULL, 1, 0, '2021-06-02 00:38:27', '2021-06-02 00:38:27', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indeks untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indeks untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indeks untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FOREIGN` (`id_user`);

--
-- Indeks untuk tabel `guru_subjek`
--
ALTER TABLE `guru_subjek`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_guru` (`id_guru`),
  ADD KEY `id_subjek` (`id_subjek`);

--
-- Indeks untuk tabel `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `murid`
--
ALTER TABLE `murid`
  ADD PRIMARY KEY (`id_murid`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indeks untuk tabel `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id_report`),
  ADD UNIQUE KEY `id_murid` (`id_murid`),
  ADD UNIQUE KEY `id_guru` (`id_guru`);

--
-- Indeks untuk tabel `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`id_reservasi`);

--
-- Indeks untuk tabel `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id_ulasan`),
  ADD UNIQUE KEY `id_guru` (`id_guru`),
  ADD UNIQUE KEY `id_murid` (`id_murid`);

--
-- Indeks untuk tabel `subjek`
--
ALTER TABLE `subjek`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_mapel` (`id_mapel`) USING BTREE;

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `guru_subjek`
--
ALTER TABLE `guru_subjek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `murid`
--
ALTER TABLE `murid`
  MODIFY `id_murid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `report`
--
ALTER TABLE `report`
  MODIFY `id_report` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `reservasi`
--
ALTER TABLE `reservasi`
  MODIFY `id_reservasi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `review`
--
ALTER TABLE `review`
  MODIFY `id_ulasan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `subjek`
--
ALTER TABLE `subjek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD CONSTRAINT `guru_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `guru_subjek`
--
ALTER TABLE `guru_subjek`
  ADD CONSTRAINT `guru_subjek_ibfk_1` FOREIGN KEY (`id_guru`) REFERENCES `guru` (`id`),
  ADD CONSTRAINT `guru_subjek_ibfk_2` FOREIGN KEY (`id_subjek`) REFERENCES `subjek` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
