-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2023 at 12:31 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `divisions`
--

CREATE TABLE IF NOT EXISTS `divisions` (
  `id` bigint(20) NOT NULL,
  `name` varchar(64) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `divisions`
--

INSERT INTO `divisions` (`id`, `name`) VALUES
(1, 'Human Resource Development'),
(2, 'Finance'),
(3, 'Operation');

-- --------------------------------------------------------

--
-- Table structure for table `evaluations`
--

CREATE TABLE IF NOT EXISTS `evaluations` (
  `id` bigint(20) NOT NULL,
  `evaluation` text NOT NULL,
  `date_of_evaluation` date NOT NULL,
  `evaluation_for` bigint(20) NOT NULL,
  `evaluation_by` bigint(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `evaluations`
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
-- Table structure for table `notifications`
--

CREATE TABLE IF NOT EXISTS `notifications` (
  `id` bigint(20) NOT NULL,
  `title` varchar(64) NOT NULL,
  `notification_text` text,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_read` tinyint(1) NOT NULL DEFAULT '0',
  `notification_by` bigint(20) NOT NULL,
  `notification_for` bigint(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `title`, `notification_text`, `datetime`, `is_read`, `notification_by`, `notification_for`) VALUES
(1, 'Evaluasi oleh Ambon', 'Anda telah menerima notifikasi dari Ambon!!', '2023-01-13 12:17:34', 0, 1, 1),
(2, 'Evaluasi Laporan Selesai', 'Laporan Anda Telah Dinilai', '2023-01-14 06:45:31', 1, 2, 6),
(3, 'Feedback Laporan', '"Laporan Belum Selesai"', '2023-01-14 06:51:26', 0, 4, 10),
(4, 'Laporan Diterima', 'Laporan Anda Diterima olhe Ardiyono', '2023-01-14 06:52:07', 0, 5, 3),
(5, 'Laporan Diterima', 'Laporan telah selesai', '2023-01-14 07:18:38', 1, 3, 10),
(6, 'Laporan Diterima', 'Laporan telah Selesai', '2023-01-14 07:26:39', 0, 3, 5),
(7, 'Laporan Belum diterima', 'Audit Diperlukan', '2023-01-14 07:31:29', 1, 6, 8),
(8, 'Laporan Diterima', 'Laporan Sangat Baik', '2023-01-14 07:32:20', 0, 7, 5),
(9, 'Laporan Diterima', 'Laporan Baik', '2023-01-14 07:32:52', 1, 9, 3),
(10, 'Laporan Belum Diterima', 'Laporan Belum Selesai', '2023-01-14 07:33:27', 1, 8, 6),
(11, 'test', 'test', '2023-01-15 11:16:56', 0, 15, 16);

-- --------------------------------------------------------

--
-- Table structure for table `positions`
--

CREATE TABLE IF NOT EXISTS `positions` (
  `id` bigint(20) NOT NULL,
  `name` varchar(64) NOT NULL,
  `create_priv` tinyint(1) NOT NULL,
  `read_priv` tinyint(1) NOT NULL,
  `update_priv` tinyint(1) NOT NULL,
  `delete_priv` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `positions`
--

INSERT INTO `positions` (`id`, `name`, `create_priv`, `read_priv`, `update_priv`, `delete_priv`) VALUES
(1, 'Kepala', 1, 1, 1, 1),
(2, 'Karyawan', 1, 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `presences`
--

CREATE TABLE IF NOT EXISTS `presences` (
  `id` bigint(20) NOT NULL,
  `date_of_presence` datetime NOT NULL,
  `is_approved` tinyint(1) NOT NULL DEFAULT '0',
  `is_rejected` tinyint(1) NOT NULL DEFAULT '0',
  `is_pending` tinyint(1) NOT NULL DEFAULT '1',
  `user_id` bigint(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `presences`
--

INSERT INTO `presences` (`id`, `date_of_presence`, `is_approved`, `is_rejected`, `is_pending`, `user_id`) VALUES
(1, '2023-01-13 13:10:03', 1, 0, 0, 1),
(2, '2023-01-02 07:44:18', 0, 0, 1, 2),
(3, '2023-01-02 08:31:41', 0, 0, 1, 3),
(4, '2023-01-02 06:40:20', 0, 0, 1, 4),
(5, '2023-01-02 09:27:46', 0, 0, 1, 5),
(6, '2023-01-02 07:41:43', 0, 0, 1, 6),
(7, '2023-01-02 08:13:09', 0, 0, 1, 7),
(8, '2023-01-02 08:22:27', 0, 0, 1, 8),
(9, '2023-01-02 06:34:45', 0, 0, 1, 9),
(10, '2023-01-14 08:04:27', 0, 0, 1, 10),
(11, '2023-01-14 09:10:27', 0, 0, 1, 11),
(12, '2023-01-14 08:20:13', 0, 0, 1, 12),
(13, '2023-01-14 08:28:18', 0, 0, 1, 13),
(14, '2023-01-14 09:12:12', 0, 0, 1, 14),
(15, '2023-01-14 08:18:46', 0, 0, 1, 15);

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE IF NOT EXISTS `reports` (
  `id` bigint(20) NOT NULL,
  `file` text NOT NULL,
  `date_of_submission` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `is_approved` tinyint(1) NOT NULL DEFAULT '0',
  `is_rejected` tinyint(1) NOT NULL DEFAULT '0',
  `is_pending` tinyint(1) NOT NULL DEFAULT '1',
  `user_id` bigint(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `file`, `date_of_submission`, `is_approved`, `is_rejected`, `is_pending`, `user_id`) VALUES
(1, 'Laporan Git2_Benaya Adi S.D', '2023-01-15 09:40:39', 1, 0, 0, 1),
(2, 'Laporan Kehadiran.pdf', '2023-01-15 09:42:46', 1, 0, 1, 3),
(3, 'Laporan Keuangan Sebulan.pdf', '2023-01-15 08:26:05', 0, 0, 1, 6),
(4, 'Laporan Operasional.docx', '2023-01-15 08:26:06', 0, 0, 1, 5),
(5, 'Catatan atas Laporan Keuangan.pdf', '2023-01-15 08:26:08', 0, 0, 1, 12),
(6, 'Laporan Proyek Baru.pdf', '2023-01-15 08:26:12', 0, 0, 1, 14),
(7, 'laporan Jadwal Kerja Shift', '2023-01-15 08:26:14', 0, 0, 1, 11),
(8, 'Laporan Reimbursement.pdf', '2023-01-15 08:26:16', 0, 0, 1, 10),
(9, 'Laporan Performa Karyawan Operasional.pdf', '2023-01-15 08:26:18', 0, 0, 1, 7),
(10, 'Laporan Hasil Kunjung Customer Baru.docx', '2023-01-15 08:26:20', 0, 0, 1, 9),
(11, 'Laporan Gaji dan Lembur.pdf', '2023-01-15 08:26:23', 0, 0, 1, 2),
(12, 'Laporan Kegiatan Workshop.pdf', '2023-01-15 08:26:26', 0, 0, 1, 7),
(13, 'laporan keuangan piutang perusahaan.docx', '2023-01-15 08:26:29', 0, 0, 1, 13),
(14, 'test', '2023-01-15 09:31:38', 0, 0, 1, 6),
(15, 'asasdasd', '2023-01-15 09:35:15', 0, 0, 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL,
  `first_name` varchar(64) NOT NULL,
  `last_name` varchar(64) NOT NULL,
  `picture` text,
  `address` varchar(64) NOT NULL,
  `date_of_birth` date NOT NULL,
  `date_of_admission` datetime DEFAULT NULL,
  `position_id` bigint(20) NOT NULL,
  `division_id` bigint(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
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
(16, 'Ardi', 'ahmadardiyono', 'Ardi', 'Yono', 'user16.png', 'Jl Tawangmangu, Dki Jakarta, Indonesia', '1984-10-10', '2023-01-01 11:09:53', 1, 2),
(17, 'Rafi', 'refresh', 'Rafi', 'Sulaiman', NULL, 'Vila Dago Blok H3/19 RT 002/RW 022 Benda Baru, Pamulang', '2001-01-01', NULL, 1, 3),
(18, 'dava', 'asdfgh', 'dava', 'alif', NULL, 'asdsadsad', '2004-09-20', '2023-01-11 07:00:00', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `divisions`
--
ALTER TABLE `divisions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `evaluations`
--
ALTER TABLE `evaluations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `CNSTRNT_evaluations_users_for` (`evaluation_for`),
  ADD KEY `CNSTRNT_evaluations_users_by` (`evaluation_by`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `CNSTRNT_notifications_users` (`notification_for`),
  ADD KEY `CNSTRNT_notifications_users_by` (`notification_by`);

--
-- Indexes for table `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `presences`
--
ALTER TABLE `presences`
  ADD PRIMARY KEY (`id`),
  ADD KEY `CNSTRNT_presences_users` (`user_id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `CNSTRNT_reports_users` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `CNSTRNT_users_positions` (`position_id`),
  ADD KEY `CNSTRNT_users_divisions` (`division_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `divisions`
--
ALTER TABLE `divisions`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `evaluations`
--
ALTER TABLE `evaluations`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `positions`
--
ALTER TABLE `positions`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `presences`
--
ALTER TABLE `presences`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `evaluations`
--
ALTER TABLE `evaluations`
  ADD CONSTRAINT `CNSTRNT_evaluations_users_by` FOREIGN KEY (`evaluation_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `CNSTRNT_evaluations_users_for` FOREIGN KEY (`evaluation_for`) REFERENCES `users` (`id`);

--
-- Constraints for table `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `CNSTRNT_notifications_users_by` FOREIGN KEY (`notification_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `CNSTRNT_notifications_users_for` FOREIGN KEY (`notification_for`) REFERENCES `users` (`id`);

--
-- Constraints for table `presences`
--
ALTER TABLE `presences`
  ADD CONSTRAINT `CNSTRNT_presences_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `reports`
--
ALTER TABLE `reports`
  ADD CONSTRAINT `CNSTRNT_reports_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `CNSTRNT_users_divisions` FOREIGN KEY (`division_id`) REFERENCES `divisions` (`id`),
  ADD CONSTRAINT `CNSTRNT_users_positions` FOREIGN KEY (`position_id`) REFERENCES `positions` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
