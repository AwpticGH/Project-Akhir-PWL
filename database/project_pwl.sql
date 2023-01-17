-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2023 at 05:46 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

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
-- Table structure for table `divisions`
--

CREATE TABLE `divisions` (
  `id` bigint(20) NOT NULL,
  `name` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

CREATE TABLE `evaluations` (
  `id` bigint(20) NOT NULL,
  `evaluation` text NOT NULL,
  `date_of_evaluation` date NOT NULL,
  `evaluation_for` bigint(20) NOT NULL,
  `evaluation_by` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

CREATE TABLE `notifications` (
  `id` bigint(20) NOT NULL,
  `type` varchar(7) NOT NULL,
  `title` varchar(64) NOT NULL,
  `notification_text` text DEFAULT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_read` tinyint(1) NOT NULL DEFAULT 0,
  `notification_by` bigint(20) NOT NULL,
  `notification_for` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `title`, `notification_text`, `datetime`, `is_read`, `notification_by`, `notification_for`) VALUES
(1, 'Report', 'Evaluasi oleh Ambon', 'Anda telah menerima notifikasi dari Ambon!!', '2023-01-13 12:17:34', 0, 1, 1),
(2, 'Report', 'Evaluasi Laporan Selesai', 'Laporan Anda Telah Dinilai', '2023-01-14 06:45:31', 1, 2, 6),
(3, 'Report', 'Feedback Laporan', '\"Laporan Belum Selesai\"', '2023-01-14 06:51:26', 0, 4, 10),
(4, 'Report', 'Laporan Diterima', 'Laporan Anda Diterima olhe Ardiyono', '2023-01-14 06:52:07', 0, 5, 3),
(5, 'Report', 'Laporan Diterima', 'Laporan telah selesai', '2023-01-14 07:18:38', 1, 3, 10),
(6, 'Report', 'Laporan Diterima', 'Laporan telah Selesai', '2023-01-14 07:26:39', 0, 3, 5),
(7, 'Report', 'Laporan Belum diterima', 'Audit Diperlukan', '2023-01-14 07:31:29', 1, 6, 8),
(8, 'Report', 'Laporan Diterima', 'Laporan Sangat Baik', '2023-01-14 07:32:20', 0, 7, 5),
(9, 'Report', 'Laporan Diterima', 'Laporan Baik', '2023-01-14 07:32:52', 1, 9, 3),
(10, 'Report', 'Laporan Belum Diterima', 'Laporan Belum Selesai', '2023-01-14 07:33:27', 1, 8, 6),
(11, 'Report', 'test', 'test', '2023-01-15 11:16:56', 0, 15, 16),
(12, 'User', 'Penerimaan Karyawan Baru', 'Aku Tester Notif telah mendaftar sebagai karyawan di divisi anda. Terima atau Tolak?', '2023-01-17 15:20:27', 0, 19, 16),
(13, 'User', 'Penerimaan Karyawan Baru', 'Aku Tester Notif telah mendaftar sebagai karyawan di divisi anda. Terima atau Tolak?', '2023-01-17 15:20:27', 0, 19, 19),
(14, 'User', 'Penerimaan Karyawan Baru', 'Aku Tester Notif telah mendaftar sebagai karyawan di divisi anda. Terima atau Tolak?', '2023-01-17 15:20:27', 0, 19, 20);

-- --------------------------------------------------------

--
-- Table structure for table `positions`
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
-- Dumping data for table `positions`
--

INSERT INTO `positions` (`id`, `name`, `create_priv`, `read_priv`, `update_priv`, `delete_priv`) VALUES
(1, 'Kepala', 1, 1, 1, 1),
(2, 'Karyawan', 1, 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `presences`
--

CREATE TABLE `presences` (
  `id` bigint(20) NOT NULL,
  `date_of_presence` datetime NOT NULL,
  `is_approved` tinyint(1) NOT NULL DEFAULT 0,
  `is_rejected` tinyint(1) NOT NULL DEFAULT 0,
  `is_pending` tinyint(1) NOT NULL DEFAULT 1,
  `user_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

CREATE TABLE `reports` (
  `id` bigint(20) NOT NULL,
  `title` varchar(256) NOT NULL,
  `description` text NOT NULL,
  `date_of_submission` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `is_approved` tinyint(1) NOT NULL DEFAULT 0,
  `is_rejected` tinyint(1) NOT NULL DEFAULT 0,
  `is_pending` tinyint(1) NOT NULL DEFAULT 1,
  `user_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `title`, `description`, `date_of_submission`, `is_approved`, `is_rejected`, `is_pending`, `user_id`) VALUES
(1, '', '', '2023-01-15 09:40:39', 1, 0, 0, 1),
(2, '', '', '2023-01-17 13:55:35', 0, 1, 0, 3),
(3, '', '', '2023-01-15 08:26:05', 0, 0, 1, 6),
(4, '', '', '2023-01-15 08:26:06', 0, 0, 1, 5),
(5, '', '', '2023-01-15 08:26:08', 0, 0, 1, 12),
(6, '', '', '2023-01-15 08:26:12', 0, 0, 1, 14),
(7, '', '', '2023-01-17 13:55:31', 0, 1, 0, 11),
(8, '', '', '2023-01-17 13:55:38', 0, 1, 0, 10),
(9, '', '', '2023-01-15 08:26:18', 0, 0, 1, 7),
(10, '', '', '2023-01-15 08:26:20', 0, 0, 1, 9),
(11, '', '', '2023-01-17 13:55:33', 0, 1, 0, 2),
(12, '', '', '2023-01-15 08:26:26', 0, 0, 1, 7),
(13, '', '', '2023-01-15 08:26:29', 0, 0, 1, 13),
(14, '', '', '2023-01-15 09:31:38', 0, 0, 1, 6),
(15, '', '', '2023-01-15 09:35:15', 0, 0, 1, 5),
(16, 'asdas', 'asdaw', '2023-01-17 12:59:40', 0, 0, 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL,
  `first_name` varchar(64) NOT NULL,
  `last_name` varchar(64) NOT NULL,
  `picture` text DEFAULT NULL,
  `address` varchar(64) NOT NULL,
  `date_of_birth` date NOT NULL,
  `date_of_admission` datetime DEFAULT NULL,
  `position_id` bigint(20) NOT NULL,
  `division_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `first_name`, `last_name`, `picture`, `address`, `date_of_birth`, `date_of_admission`, `position_id`, `division_id`) VALUES
(1, 'Ben', 'benrazor', 'Ben', 'Adi', 'user1.png', 'Jl Ahmad Wonogiri 28, Jawa Utara, Undonesia', '2006-01-03', NULL, 2, 1),
(2, 'Ambon', 'ambonmanise22', 'Ammbonn', 'Manisee', 'user2.png', 'Jalan Raden Kian Santang 25, Karowono, Tangerang Tenggara.', '1999-01-08', '2023-01-10 19:11:01', 1, 1),
(3, 'Sammy', 'sammy2223', 'sammy', 'antonius', 'user3.png', '1150 Golden Ridge Road, New York, USA', '1996-01-02', '2023-01-01 21:50:28', 2, 1),
(4, 'Ilham', 'ilham12er', 'ilham', 'imam', 'user4.png', 'Jl Medan Merdeka Utr 2, DKI Jakarta, Indonesia', '1993-01-01', '2022-12-31 22:16:09', 2, 2),
(5, 'Sulaiman', 'umaradab11', 'Sulaiman', 'Umar', 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAMCAgMCAgMDAwMEAwMEBQgFBQQEBQoHBwYIDAoMDAsKCwsNDhIQDQ4RDgsLEBYQERMUFRUVDA8XGBYUGBIUFRT/2wBDAQMEBAUEBQkFBQkUDQsNFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBT/wAARCAJ3AncDASIAAhEBAxEB/8QAHwAAAQUBAQEBAQEAAAAAAAAAAAECAwQFBgcICQoL/8QAtRAAAgEDAwIEAwUFBAQAAAF9AQIDAAQRBRIhMUEGE1FhByJxFDKBkaEII0KxwRVS0fAkM2JyggkKFhcYGRolJicoKSo0NTY3ODk6Q0RFRkdISUpTVFVWV1hZWmNkZWZnaGlqc3R1dnd4eXqDhIWGh4iJipKTlJWWl5iZmqKjpKWmp6ipqrKztLW2t7i5usLDxMXGx8jJytLT1NXW19jZ2uHi4+Tl5ufo6erx8vP09fb3+Pn6/8QAHwEAAwEBAQEBAQEBAQAAAAAAAAECAwQFBgcICQoL/8QAtREAAgECBAQDBAcFBAQAAQJ3AAECAxEEBSExBhJBUQdhcRMiMoEIFEKRobHBCSMzUvAVYnLRChYkNOEl8RcYGRomJygpKjU2Nzg5OkNERUZHSElKU1RVVldYWVpjZGVmZ2hpanN0dXZ3eHl6goOEhYaHiImKkpOUlZaXmJmaoqOkpaanqKmqsrO0tba3uLm6wsPExcbHyMnK0tPU1dbX2Nna4uPk5ebn6Onq8vP09fb3+Pn6/9oADAMBAAIRAxEAPwD9U6KKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACkbpQ3Sqsl4lAEtFZer+ItK8P2c11qOpW1jbxr88lxIqJXzf46/wCCkfwG8Cav/Zl341j1GTHMmlWj3CRn3IqOWRB9TbqF6Vwfw3+NPgv4uaEureEfEdhr9mODJaScp/vL1rt0kWWmMs0UUVRQUUUUAFFFFABTHp9VruRY4+agCaivHvjf+1B8PP2e9I+3+MfEVtZHHyWEXz3U/wDuRV5f8Kv+ClPwT+KerPp6a/J4bvB0TXY/s6SfjRykn1hupaw9G8V6Rr9uk+n6naX8b/cktp0l/wDQa1o50l3bO1AFmiiirKCiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACiiigAooooAKKKKACkbpS0x6AGUUy5n+z27SelfN3xm/4KBfB74JpNb3/iKPX9XQ4/snRCLib8T0qOWRJ9JeYlcv48+J/hj4Z6Hcav4o1+w0DT4fv3F7IEAr8lvi5/wV4+I3jd57XwbY2vgazH/LVgLm6r4/8AGnxU8S/EzVJtR8V69qHiC8/5+L24ear5QP02+Nn/AAWE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Bq+l3uk3EmuzukV7avCe1fbH2NaRLRBJvo5gLlFMp9BYUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQAUUUUAFFFFABRRRQB/9k=', 'Jl Kedung Anyar VIII 14-16, Jawa Timur, Indonesia', '1970-12-01', '2023-01-01 22:17:50', 2, 3),
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
(18, 'dava', 'asdfgh', 'dava', 'alif', NULL, 'asdsadsad', '2004-09-20', '2023-01-11 07:00:00', 1, 1),
(19, 'Aku Tester', '1234', 'Aku Tester', 'Notif', NULL, 'Test Address', '2001-01-01', NULL, 1, 2),
(20, 'Aku Tester', '1234', 'Aku Tester', 'Notif', NULL, 'Test Address', '2001-01-01', NULL, 1, 2);

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
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `evaluations`
--
ALTER TABLE `evaluations`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `positions`
--
ALTER TABLE `positions`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `presences`
--
ALTER TABLE `presences`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
