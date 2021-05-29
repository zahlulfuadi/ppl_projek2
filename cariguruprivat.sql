-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Bulan Mei 2021 pada 05.45
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cariguruprivat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id_akun` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `foto_profil` varchar(255) NOT NULL,
  `role` int(11) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_updated` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id_akun`, `email`, `password`, `foto_profil`, `role`, `is_active`, `date_created`, `date_updated`) VALUES
(1, 'faisalhasyim@gmail.com', '12345678', '', 1, 1, '2021-05-27 15:50:17', '2021-05-27 15:50:17'),
(2, 'muhammad.aldy@gmail.com', '12345678', '', 1, 1, '2021-05-27 15:52:19', '2021-05-27 15:52:19'),
(3, 'prasetya@gmail.com', '12345678', '', 1, 1, '2021-05-27 15:52:45', '2021-05-27 15:52:45'),
(4, 'ameliaputri@gmail.com', '12345678', '', 1, 1, '2021-05-27 15:53:22', '2021-05-27 15:53:22'),
(5, 'trisnaningsih@gmail.com', '12345678', '', 1, 1, '2021-05-27 15:55:04', '2021-05-27 15:55:04'),
(6, 'defrygunawan@gmail.com', '12345678', '', 1, 1, '2021-05-27 15:55:34', '2021-05-27 15:55:34'),
(7, 'cintyahapsari@gmail.com', '12345678', '', 1, 1, '2021-05-27 15:56:01', '2021-05-27 15:56:01'),
(8, 'nandabima@gmail.com', '12345678', '', 1, 1, '2021-05-27 15:56:24', '2021-05-27 15:56:24'),
(9, 'muh.samham@gmail.com', '12345678', '', 1, 1, '2021-05-27 15:57:09', '2021-05-27 15:57:09'),
(10, 'rifkyandri@gmail.com', '12345678', '', 1, 1, '2021-05-27 15:58:18', '2021-05-27 15:58:18'),
(11, 'ovin.nada@gmail.com', '12345678', '', 2, 1, '2021-05-27 15:59:40', '2021-05-27 15:59:40'),
(12, 'jessicanadyla@gmail.com', '12345678', '', 2, 1, '2021-05-27 16:00:21', '2021-05-27 16:00:21'),
(13, 'nabilazahra@gmail.com', '12345678', '', 2, 1, '2021-05-27 16:02:18', '2021-05-27 16:02:18'),
(14, 'putrirosalina@gmail.com', '12345678', '', 2, 1, '2021-05-27 16:03:03', '2021-05-27 16:03:03'),
(15, 'andreans@gmail.com', '12345678', '', 2, 1, '2021-05-27 16:03:03', '2021-05-27 16:03:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(11) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `lokasi_guru` varchar(255) NOT NULL,
  `biaya_guru` int(11) NOT NULL,
  `deskripsi_guru` varchar(255) NOT NULL,
  `rating_guru` float NOT NULL,
  `jml_ulasan` int(11) NOT NULL DEFAULT 0,
  `id_akun` int(11) NOT NULL,
  `id_subjek` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id_guru`, `nama_guru`, `lokasi_guru`, `biaya_guru`, `deskripsi_guru`, `rating_guru`, `jml_ulasan`, `id_akun`, `id_subjek`) VALUES
(1, 'Faisal Hasyim', 'Jakarta Timur', 100000, '1. Mengajar secara online, belajar melalui aplikasi Zoom atau Google Meet.\r\n2. Materi belajar bisa dari siswa atau dari Tutor.\r\n3. Menerima jasa penyelesaian tugas beserta pembahasan online mengenai tugas tersebut\r\n4. Saya mengajar menggunakan Pen Tablet ', 0, 0, 1, 1),
(2, 'Muhammad Aldy', 'Bogor', 125000, 'Fokus saya adalah membuat murid enjoy belajar serta penguatan konsep dasar hingga matang, baru kemudian latihan soal. Saya percaya dengan penguasaan konsep yang matang, 50 variasi soal bahkan soal SBMPTN 10 tahun terakhir bukan jadi masalah.', 0, 0, 2, 2),
(3, 'Prasetya', 'Bandung', 50000, 'Perkenalkan, Nama Saya adalah Prasetya.\r\nSaya adalah seorang Dosen, Guru sekolah, sekaligus Tutor belajar.\r\nMetode Pembelajaran saya adalah komunikatif, Interaktif, dan Menyenangkan.', 0, 0, 3, 1),
(4, 'Amelia Putri', 'Bekasi', 200000, 'Saya berpengalaman memberikan privat sendiri atau berkelompok bagi SMA dan Persiapan Masuk PTN sejak 2016, dan rutin mengajar sebagai pekerjaan sampingan sembari mahasiswa.\r\n', 0, 0, 4, 3),
(5, 'Trisna Ningsih', 'Jakarta', 100000, '1. Waktu pembelajaran dapat dilakukan secara fleksibel\r\n2. Pertemuan pertama akan memahami basic theory terlebih dahulu disertai dengan praktik.\r\n3. Gaya pengajaran akan disesuaikan dengan siswa dan dapat me-request materi', 0, 0, 5, 4),
(6, 'Defry Gunawan', 'Surabaya', 100000, 'Saya biasanya mengajar siswa-siswa Sekolah Dasar yang baru belajar membaca maupun tentang tugas perhitungan dasar maupun pengetahuan alam.\r\nSaya mengutamakan apapun yang membuat siswa dapat belajar dengan baik dan nyaman', 0, 0, 6, 5),
(7, 'Cintya Hapsari', 'Semarang', 150000, 'Pengalaman pertama saya adalah mengajar matematika IPA untuk persiapan SBMPTN di Bimbingan Antar Teman, bimbel gratis yang dibuat alumni OSN DIY 2015 dan terakhir mengajar di salah satu platform edukasi online terbaik di Indonesia.\r\n', 0, 0, 7, 6),
(8, 'Nanda Bima', 'Bogor', 100000, 'Saya menggunakan pendekatan gabungan, yaitu teacher centers dan students center. Saya akan menjelaskan semua materi secara detail kemudian saya memberikan tugas atau memberi pertanyaan dan games untuk mengevaluasi tingkat pemahaman murid saya', 0, 0, 8, 7),
(9, 'Muhammad Samham', 'Bandung', 150000, 'Saya mempunyai banyak pengalaman di bidang mengajar seperti menjadi tutor anatomy fisiologi, prinsipal basic nursing, fundamental nursing dan pre nursing pada kelas besar maupun kelas kecil', 0, 0, 9, 8),
(10, 'Rifky Andri', 'Magelang', 75000, 'Metode pengajaran yang saya terapkan yaitu fun learning. Di sini saya akan menyesuaikan cara belajar dengan masing-masing karakter siswa. Dengan metode ini saya yakin dapat menuntaskan apa yang kurang dipahami oleh siswa', 0, 0, 10, 9);

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
  `id_subjek` int(5) NOT NULL,
  `nama_subjek` varchar(50) NOT NULL,
  `id_mapel` int(5) NOT NULL,
  `date_created` varchar(255) NOT NULL,
  `date_updated` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `subjek`
--

INSERT INTO `subjek` (`id_subjek`, `nama_subjek`, `id_mapel`, `date_created`, `date_updated`) VALUES
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

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indeks untuk tabel `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id_mapel`);

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
  ADD PRIMARY KEY (`id_subjek`),
  ADD KEY `id_mapel` (`id_mapel`) USING BTREE;

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
  MODIFY `id_subjek` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
