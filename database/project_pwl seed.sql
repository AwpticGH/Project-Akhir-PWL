-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Jan 2023 pada 08.38
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_pwl`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `divisions`
--

CREATE TABLE `divisions` (
  `id` bigint(20) NOT NULL,
  `name` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `divisions`
--

INSERT INTO `divisions` (`id`, `name`) VALUES
(1, 'Human Resource Development'),
(2, 'Finance'),
(3, 'Operation');

-- --------------------------------------------------------

--
-- Struktur dari tabel `evaluations`
--

CREATE TABLE `evaluations` (
  `id` bigint(20) NOT NULL,
  `evaluation` text NOT NULL,
  `date_of_evaluation` date NOT NULL,
  `evaluation_for` bigint(20) NOT NULL,
  `evaluation_by` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `evaluations`
--

INSERT INTO `evaluations` (`id`, `evaluation`, `date_of_evaluation`, `evaluation_for`, `evaluation_by`) VALUES
(1, 'Perlu ditingkatkan lagi', '2023-01-13', 1, 2),
(2, 'Kesalahan Audit keuangan', '2023-01-03', 6, 16),
(3, 'Laporan belum lengkap', '2023-01-09', 10, 7),
(4, 'Laporan Tepat Waktu', '2023-01-01', 9, 16),
(5, 'Laporan belum selesai', '2023-01-13', 6, 16),
(6, 'Laporan Baik', '2023-01-03', 3, 2),
(7, 'Laporan Sangat Baik', '2023-01-02', 5, 7),
(8, 'Laporan Belum Lengkap', '2023-01-02', 10, 2),
(9, 'Audit diperlukan', '2023-01-02', 8, 16),
(10, 'Laporan Telah selesai', '2023-01-02', 6, 2),
(11, 'Laporan Selesai', '2023-01-01', 3, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) NOT NULL,
  `title` varchar(64) NOT NULL,
  `notification_text` text DEFAULT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_read` tinyint(1) NOT NULL DEFAULT 0,
  `user_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `notifications`
--

INSERT INTO `notifications` (`id`, `title`, `notification_text`, `datetime`, `is_read`, `user_id`) VALUES
(1, 'Evaluasi oleh Ambon', 'Anda telah menerima notifikasi dari Ambon!!', '2023-01-13 12:17:34', 0, 1),
(2, 'Evaluasi Laporan Selesai', 'Laporan Anda Telah Dinilai', '2023-01-14 06:45:31', 1, 6),
(3, 'Feedback Laporan', '\"Laporan Belum Selesai\"', '2023-01-14 06:51:26', 0, 10),
(4, 'Laporan Diterima', 'Laporan Anda Diterima olhe Ardiyono', '2023-01-14 06:52:07', 0, 3),
(5, 'Laporan Diterima', 'Laporan telah selesai', '2023-01-14 07:18:38', 1, 10),
(6, 'Laporan Diterima', 'Laporan telah Selesai', '2023-01-14 07:26:39', 0, 5),
(7, 'Laporan Belum diterima', 'Audit Diperlukan', '2023-01-14 07:31:29', 1, 8),
(8, 'Laporan Diterima', 'Laporan Sangat Baik', '2023-01-14 07:32:20', 0, 5),
(9, 'Laporan Diterima', 'Laporan Baik', '2023-01-14 07:32:52', 1, 3),
(10, 'Laporan Belum Diterima', 'Laporan Belum Selesai', '2023-01-14 07:33:27', 0, 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `positions`
--

CREATE TABLE `positions` (
  `id` bigint(20) NOT NULL,
  `name` varchar(64) NOT NULL,
  `create_priv` tinyint(1) NOT NULL,
  `read_priv` tinyint(1) NOT NULL,
  `update_priv` tinyint(1) NOT NULL,
  `delete_priv` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `positions`
--

INSERT INTO `positions` (`id`, `name`, `create_priv`, `read_priv`, `update_priv`, `delete_priv`) VALUES
(1, 'Kepala', 1, 1, 1, 1),
(2, 'Karyawan', 1, 1, 1, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `presences`
--

CREATE TABLE `presences` (
  `id` bigint(20) NOT NULL,
  `date_of_presence` datetime NOT NULL,
  `is_confirmed` tinyint(1) NOT NULL DEFAULT 0,
  `user_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `presences`
--

INSERT INTO `presences` (`id`, `date_of_presence`, `is_confirmed`, `user_id`) VALUES
(1, '2023-01-13 13:10:03', 0, 1),
(2, '2023-01-02 07:44:18', 0, 2),
(3, '2023-01-02 08:31:41', 0, 3),
(4, '2023-01-02 06:40:20', 0, 4),
(5, '2023-01-02 09:27:46', 0, 5),
(6, '2023-01-02 07:41:43', 0, 6),
(7, '2023-01-02 08:13:09', 0, 7),
(8, '2023-01-02 08:22:27', 0, 8),
(9, '2023-01-02 06:34:45', 0, 9),
(10, '2023-01-14 08:04:27', 0, 10),
(11, '2023-01-14 09:10:27', 0, 11),
(12, '2023-01-14 08:20:13', 0, 12),
(13, '2023-01-14 08:28:18', 0, 13),
(14, '2023-01-14 09:12:12', 0, 14),
(15, '2023-01-14 08:18:46', 0, 15);

-- --------------------------------------------------------

--
-- Struktur dari tabel `reports`
--

CREATE TABLE `reports` (
  `id` bigint(20) NOT NULL,
  `file` text NOT NULL,
  `date_of_submission` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `reports`
--

INSERT INTO `reports` (`id`, `file`, `date_of_submission`, `user_id`) VALUES
(1, 'Laporan Git2_Benaya Adi S.D', '2023-01-12 12:13:29', 1),
(2, 'Laporan Kehadiran.pdf', '2023-01-14 03:54:34', 3),
(3, 'Laporan Keuangan Sebulan.pdf', '2023-01-14 03:55:51', 6),
(4, 'Laporan Operasional.docx', '2023-01-14 03:57:58', 5),
(5, 'Catatan atas Laporan Keuangan.pdf', '2023-01-14 04:03:44', 12),
(6, 'Laporan Proyek Baru.pdf', '2023-01-14 04:21:26', 14),
(7, 'laporan Jadwal Kerja Shift', '2023-01-14 04:23:19', 11),
(8, 'Laporan Reimbursement.pdf', '2023-01-14 04:24:06', 10),
(9, 'Laporan Performa Karyawan Operasional.pdf', '2023-01-14 04:24:58', 7),
(10, 'Laporan Hasil Kunjung Customer Baru.docx', '2023-01-14 04:25:49', 9),
(11, 'Laporan Gaji dan Lembur.pdf', '2023-01-14 04:36:28', 2),
(12, 'Laporan Kegiatan Workshop.pdf', '2023-01-14 04:37:28', 7),
(13, 'laporan keuangan piutang perusahaan.docx', '2023-01-14 04:39:04', 13);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL,
  `first_name` varchar(64) NOT NULL,
  `last_name` varchar(64) NOT NULL,
  `picture` text NOT NULL,
  `address` varchar(64) NOT NULL,
  `date_of_birth` date NOT NULL,
  `date_of_admission` datetime DEFAULT NULL,
  `position_id` bigint(20) NOT NULL,
  `division_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `first_name`, `last_name`, `picture`, `address`, `date_of_birth`, `date_of_admission`, `position_id`, `division_id`) VALUES
(1, 'Ben', 'benrazor', 'Ben', 'Adi', 'user1.png', 'Jl Ahmad Wonogiri 28, Jawa Utara, Undonesia', '2006-01-03', NULL, 2, 1),
(2, 'Ambon', 'ambonmanise22', 'Ammbonn', 'Manisee', 'user2.png', 'Jalan Raden Kian Santang 25, Karowono, Tangerang Tenggara.', '1999-01-08', '2023-01-10 19:11:01', 1, 1),
(3, 'Sammy', 'sammy2223', 'sammy', 'antonius', 'user3.png', '1150 Golden Ridge Road, New York, USA', '1996-01-02', '2023-01-01 21:50:28', 2, 1),
(4, 'Ilham', 'ilham12er', 'ilham', 'imam', 'user4.png', 'Jl Medan Merdeka Utr 2, DKI Jakarta, Indonesia', '1993-01-01', '2022-12-31 22:16:09', 2, 2),
(5, 'Sulaiman', 'umaradab11', 'Sulaiman', 'Umar', 'user5.png', 'Jl Kedung Anyar VIII 14-16, Jawa Timur, Indonesia', '1970-12-01', '2023-01-01 22:17:50', 2, 3),
(6, 'Anwar', 'rahmanrahman', 'Anwar', 'Rahman', 'user6.png', '1013 Geylang East Ave 3 #05-120,  Singapore', '1990-04-02', '2023-01-01 22:19:34', 2, 2),
(7, 'Dian', 'diankece213', 'Dian', 'Hariyah', 'user7.png', 'Psr Melawai Bl A Los 1, Dki Jakarta, Indonesia', '1986-02-13', '2022-11-12 14:22:26', 1, 3),
(8, 'Hidayat', 'amburahhidayat', 'Marwata ', 'Hidayat', 'user8.png', 'Jl Raya Hankam 26 RT 001/03 Ds Jatiwarna, Jawa Barat, Indonesia', '1988-10-05', '2022-12-15 16:33:18', 2, 2),
(9, 'IndraM', 'indramar12', 'Indra', 'Marpaung', 'user9.png', 'Jl Singaperbangsa 103, Jawa Barat, Indonesia', '1995-06-23', '2023-01-11 03:23:31', 2, 3),
(10, 'baktian', 'baktianbaktian', 'Baktiadi ', 'Anggriawan ', 'user10.png', '2A 5 Jln Pandan 2/3 Taman Pandan Jaya, Kuala Lumpur', '1985-10-03', '2023-01-09 03:25:50', 2, 1),
(11, 'gadarasa', 'gadajasa', 'Gada ', 'Rajasa', 'user11.png', 'Gg. Sutarto No. 798, Gorontalo 11339, KalTeng, Indonesia', '1989-09-15', '2023-01-03 03:28:06', 2, 1),
(12, 'sakalaono', 'saka12saka', 'Saka', 'Latupuono', 'user12.png', 'Gg. Adisumarmo No. 259, Ambon 76814, Jawa Barat, Indonesia', '1981-04-18', '2023-01-09 04:30:13', 2, 2),
(13, 'raditpwo', 'pworadit', 'Radit', 'Prabowo', 'user13.png', 'Jl Daan Mogot 6 AO RT 005/03, Dki Jakarta, Indonesia', '1993-08-17', '2023-01-08 03:31:54', 2, 2),
(14, 'ianhaim', 'halimora1245', 'Ian ', 'Halim', 'user14.png', 'Jl Boulevard Brt Raya Kompl Plaza Pasifik Bl B-2/29, Dki Jakarta', '1992-03-18', '2023-01-07 06:22:11', 2, 3),
(15, 'galuhodo', 'galuhorang145', 'Galuh ', 'Widodo', 'user15.png', 'Dk. Moch. Toha No. 978, Depok 42403, Jogjakarta, Indonesia', '1988-10-14', '2023-01-09 15:22:05', 2, 3),
(16, 'Ardi', 'ahmadardiyono', 'Ardi', 'Yono', 'user16.png', 'Jl Tawangmangu, Dki Jakarta, Indonesia', '1984-10-10', '2023-01-01 11:09:53', 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `divisions`
--
ALTER TABLE `divisions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `evaluations`
--
ALTER TABLE `evaluations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `CNSTRNT_evaluations_users_for` (`evaluation_for`),
  ADD KEY `CNSTRNT_evaluations_users_by` (`evaluation_by`);

--
-- Indeks untuk tabel `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `CNSTRNT_notifications_users` (`user_id`);

--
-- Indeks untuk tabel `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `presences`
--
ALTER TABLE `presences`
  ADD PRIMARY KEY (`id`),
  ADD KEY `CNSTRNT_presences_users` (`user_id`);

--
-- Indeks untuk tabel `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `CNSTRNT_reports_users` (`user_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `CNSTRNT_users_positions` (`position_id`),
  ADD KEY `CNSTRNT_users_divisions` (`division_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `divisions`
--
ALTER TABLE `divisions`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `evaluations`
--
ALTER TABLE `evaluations`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `positions`
--
ALTER TABLE `positions`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `presences`
--
ALTER TABLE `presences`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `reports`
--
ALTER TABLE `reports`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `evaluations`
--
ALTER TABLE `evaluations`
  ADD CONSTRAINT `CNSTRNT_evaluations_users_by` FOREIGN KEY (`evaluation_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `CNSTRNT_evaluations_users_for` FOREIGN KEY (`evaluation_for`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `CNSTRNT_notifications_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `presences`
--
ALTER TABLE `presences`
  ADD CONSTRAINT `CNSTRNT_presences_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `reports`
--
ALTER TABLE `reports`
  ADD CONSTRAINT `CNSTRNT_reports_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `CNSTRNT_users_divisions` FOREIGN KEY (`division_id`) REFERENCES `divisions` (`id`),
  ADD CONSTRAINT `CNSTRNT_users_positions` FOREIGN KEY (`position_id`) REFERENCES `positions` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
