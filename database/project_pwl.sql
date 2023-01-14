-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Jan 2023 pada 08.33
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

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `presences`
--
ALTER TABLE `presences`
  ADD PRIMARY KEY (`id`),
  ADD KEY `CNSTRNT_presences_users` (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `presences`
--
ALTER TABLE `presences`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `presences`
--
ALTER TABLE `presences`
  ADD CONSTRAINT `CNSTRNT_presences_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
