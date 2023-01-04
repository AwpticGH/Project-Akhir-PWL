-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2023 at 01:37 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) NOT NULL,
  `type` varchar(64) NOT NULL,
  `notification_text` text DEFAULT NULL,
  `is_read` tinyint(1) NOT NULL DEFAULT 0,
  `user_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `user_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `picture` text NOT NULL,
  `address` varchar(64) NOT NULL,
  `date_of_birth` date NOT NULL,
  `date_of_admission` datetime DEFAULT NULL,
  `position_id` bigint(20) NOT NULL,
  `division_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  ADD KEY `CNSTRNT_notifications_users` (`user_id`);

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
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `positions`
--
ALTER TABLE `positions`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `presences`
--
ALTER TABLE `presences`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

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
  ADD CONSTRAINT `CNSTRNT_notifications_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `presences`
--
ALTER TABLE `presences`
  ADD CONSTRAINT `CNSTRNT_presences_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

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
