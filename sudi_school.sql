-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 18, 2025 at 03:43 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sudi_school`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignments`
--

CREATE TABLE `assignments` (
  `id` int NOT NULL,
  `description` varchar(5000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `due_date` date DEFAULT NULL,
  `category_id` int DEFAULT NULL,
  `subject_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `assignments`
--

INSERT INTO `assignments` (`id`, `description`, `due_date`, `category_id`, `subject_id`, `created_at`, `updated_at`) VALUES
(25, 'Summative Test TP 4', '2025-11-13', 3, 3, '2025-11-11 12:12:18', '2025-11-11 12:12:18'),
(26, 'Presentasi 10 Metode Klasifikasi dan Klastering', '2025-11-13', 5, 5, '2025-11-11 12:12:44', '2025-11-11 12:12:44'),
(27, 'Mengumpulkan proses SAS minggu 2', '2025-11-17', 5, 6, '2025-11-11 12:13:14', '2025-11-11 12:13:14'),
(29, 'Menyelesaikan Tugas Akhir ', '2025-11-21', 5, 9, '2025-11-11 12:14:26', '2025-11-11 12:14:26'),
(30, 'Menghitung hasil penjualan stiker', '2025-11-12', 5, 11, '2025-11-11 12:14:51', '2025-11-11 12:14:51'),
(31, 'Membuat infografis tentang perjuangan penduduk Indonesia', '2025-11-12', 5, 12, '2025-11-11 12:15:24', '2025-11-11 12:15:24'),
(32, 'Sumatif TP 5,6,7', '2025-11-13', 3, 14, '2025-11-11 12:15:56', '2025-11-11 12:15:56'),
(33, 'Remedial SAS', '2025-11-14', 5, 1, '2025-11-12 02:13:22', '2025-11-12 02:13:22');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `create_at` timestamp NOT NULL,
  `update_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `create_at`, `update_at`) VALUES
(1, 'Latihan', '2025-10-21 09:42:58', '2025-10-21 09:42:58'),
(2, 'Formatif', '2025-10-21 09:42:58', '2025-10-21 09:42:58'),
(3, 'Sumatif', '2025-10-21 09:42:58', '2025-10-21 09:42:58'),
(4, 'STS', '2025-10-21 09:42:58', '2025-10-21 09:42:58'),
(5, 'SAS', '2025-10-21 11:03:04', '2025-10-21 11:03:04');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `icons` varchar(255) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `name`, `icons`, `created_at`, `updated_at`) VALUES
(1, 'TLJ', 'Foto/TLJ.png', '1945-08-17', '2025-08-27'),
(2, 'PPL', 'Foto/PPL.png', '1945-08-18', '2025-08-27'),
(3, 'Inggris', 'Foto/ING.png', '1945-08-19', '2025-08-27'),
(4, 'PP', 'Foto/PP.png', '1945-08-20', '2025-08-27'),
(5, 'DAMI', 'Foto/DAMI.png', '1945-08-21', '2025-08-27'),
(6, 'PDL', 'Foto/PDL.png', '1945-08-22', '2025-08-27'),
(7, 'Agama', 'Foto/AGM.png', '1945-08-23', '2025-08-27'),
(8, 'BI', 'Foto/BI.png', '1945-08-24', '2025-08-27'),
(9, 'PWL', 'Foto/PWL.png', '1945-08-25', '2025-08-27'),
(10, 'PJOK', 'Foto/PJOK.png', '1945-08-26', '2025-08-27'),
(11, 'PKdK', 'Foto/PKdK.png', '1945-08-27', '2025-08-27'),
(12, 'Sejarah', 'Foto/SJRH.png', '1945-08-28', '2025-08-27'),
(13, 'MAN', 'Foto/MAN.png', '1945-08-29', '2025-08-27'),
(14, 'MTK', 'Foto/MTK.png', '1945-08-30', '2025-08-27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `created_at`) VALUES
(21, 'ASD@gmail.com', '$2y$10$GhlpewdLolpphPNu8p64LOI2jHc6M2T1WT0gvikSM8i/ozWiXcNiO', '2025-10-15 01:41:37'),
(22, 'PUJI@gmail.com', '$2y$10$t1EFfzxWBGTexhMP.5lio.n6gC0.SuEZ0rXGEBKixZXil9S2Ye0LW', '2025-10-21 07:01:42'),
(23, 'yanto@gmail.com', '$2y$10$v5su0Bp/aTIA/VQvd.7MiOiw2XnK4o2iaqinjgUrEyG2tuq.Oc9F6', '2025-11-12 04:59:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignments`
--
ALTER TABLE `assignments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_subject` (`subject_id`),
  ADD KEY `fk_category` (`category_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assignments`
--
ALTER TABLE `assignments`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assignments`
--
ALTER TABLE `assignments`
  ADD CONSTRAINT `fk_category` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_subject` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
