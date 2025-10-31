-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 28, 2025 at 12:49 AM
-- Server version: 5.6.23
-- PHP Version: 8.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mahasiswa` bigint(20) UNSIGNED NOT NULL,
  `nim` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `angkatan` int(11) NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mahasiswa`, `nim`, `nama`, `jurusan`, `angkatan`, `id_user`, `email`, `created_at`, `updated_at`) VALUES
(201, '2151001', 'Budi Santoso 1', 'Manajemen', 2022, 1, 'budi.santoso1@example.com', '2025-10-27 04:08:20', '2025-10-27 17:40:41'),
(202, '2151002', 'Citra Lestari', 'Teknik Informatika', 2021, 2, 'citra.lestari2@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(203, '2231003', 'Agus Wijaya', 'Manajemen', 2022, 3, 'agus.wijaya3@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(204, '2252004', 'Dewi Anggraini', 'Sistem Informasi', 2022, 1, 'dewi.anggraini4@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(205, '2311005', 'Eka Putra', 'Hukum', 2023, 2, 'eka.putra5@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(206, '2032006', 'Fajar Nugroho', 'Akuntansi', 2020, 3, 'fajar.nugroho6@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(207, '2121007', 'Gita Permata', 'Ilmu Komunikasi', 2021, 1, 'gita.permata7@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(208, '2241008', 'Hadi Wibowo', 'DKV', 2022, 2, 'hadi.wibowo8@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(209, '2322009', 'Indah Cahyani', 'Psikologi', 2023, 3, 'indah.cahyani9@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(210, '2051010', 'Joko Susanto', 'Teknik Informatika', 2020, 1, 'joko.susanto10@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(211, '2131011', 'Kiki Amelia', 'Manajemen', 2021, 2, 'kiki.amelia11@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(212, '2252012', 'Lina Marlina', 'Sistem Informasi', 2022, 3, 'lina.marlina12@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(213, '2311013', 'Mega Prasetyo', 'Hukum', 2023, 1, 'mega.prasetyo13@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(214, '2032014', 'Nina Handayani', 'Akuntansi', 2020, 2, 'nina.handayani14@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(215, '2121015', 'Oscar Maulana', 'Ilmu Komunikasi', 2021, 3, 'oscar.maulana15@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(216, '2241016', 'Putra Pratama', 'DKV', 2022, 1, 'putra.pratama16@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(217, '2322017', 'Rina Wati', 'Psikologi', 2023, 2, 'rina.wati17@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(218, '2051018', 'Sari Dewi', 'Teknik Informatika', 2020, 3, 'sari.dewi18@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(219, '2131019', 'Teguh Firmansyah', 'Manajemen', 2021, 1, 'teguh.firmansyah19@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(220, '2252020', 'Vina Yuliana', 'Sistem Informasi', 2022, 2, 'vina.yuliana20@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(221, '2311021', 'Wahyu Saputra', 'Hukum', 2023, 3, 'wahyu.saputra21@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(222, '2032022', 'Yulia Kurnia', 'Akuntansi', 2020, 1, 'yulia.kurnia22@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(223, '2121023', 'Zaki Ramadhan', 'Ilmu Komunikasi', 2021, 2, 'zaki.ramadhan23@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(224, '2241024', 'Ani Suryani', 'DKV', 2022, 3, 'ani.suryani24@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(225, '2322025', 'Bayu Setiawan', 'Psikologi', 2023, 1, 'bayu.setiawan25@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(226, '2051026', 'Cahya Gumelar', 'Teknik Informatika', 2020, 2, 'cahya.gumelar26@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(227, '2131027', 'Dian Pratiwi', 'Manajemen', 2021, 3, 'dian.pratiwi27@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(228, '2252028', 'Edo Febriansyah', 'Sistem Informasi', 2022, 1, 'edo.febriansyah28@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(229, '2311029', 'Fitriani', 'Hukum', 2023, 2, 'fitriani29@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(230, '2032030', 'Galih Purnama', 'Akuntansi', 2020, 3, 'galih.purnama30@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(231, '2121031', 'Hesti Rahayu', 'Ilmu Komunikasi', 2021, 1, 'hesti.rahayu31@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(232, '2241032', 'Irfan Hakim', 'DKV', 2022, 2, 'irfan.hakim32@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(233, '2322033', 'Jeni Karmila', 'Psikologi', 2023, 3, 'jeni.karmila33@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(234, '2051034', 'Kevin Sanjaya', 'Teknik Informatika', 2020, 1, 'kevin.sanjaya34@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(235, '2131035', 'Lia Wulandari', 'Manajemen', 2021, 2, 'lia.wulandari35@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(236, '2252036', 'Mila Rosa', 'Sistem Informasi', 2022, 3, 'mila.rosa36@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(237, '2311037', 'Nanda Rizky', 'Hukum', 2023, 1, 'nanda.rizky37@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(238, '2032038', 'Opik Hidayat', 'Akuntansi', 2020, 2, 'opik.hidayat38@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(239, '2121039', 'Putri Ayu', 'Ilmu Komunikasi', 2021, 3, 'putri.ayu39@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(240, '2241040', 'Qory Sandioriva', 'DKV', 2022, 1, 'qory.sandioriva40@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(241, '2322041', 'Rian Ardianto', 'Psikologi', 2023, 2, 'rian.ardianto41@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(242, '2051042', 'Siska Hartati', 'Teknik Informatika', 2020, 3, 'siska.hartati42@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(243, '2131043', 'Toni Kusuma', 'Manajemen', 2021, 1, 'toni.kusuma43@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(244, '2252044', 'Umar Bakri', 'Sistem Informasi', 2022, 2, 'umar.bakri44@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(245, '2311045', 'Vicky Febri', 'Hukum', 2023, 3, 'vicky.febri45@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(246, '2032046', 'Wawan Gunawan', 'Akuntansi', 2020, 1, 'wawan.gunawan46@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(247, '2121047', 'Xena Warrior', 'Ilmu Komunikasi', 2021, 2, 'xena.warrior47@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(248, '2241048', 'Yoga Pratama', 'DKV', 2022, 3, 'yoga.pratama48@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(249, '2322049', 'Zulham Zamrun', 'Psikologi', 2023, 1, 'zulham.zamrun49@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(250, '2051050', 'Amanda Manopo', 'Teknik Informatika', 2020, 2, 'amanda.manopo50@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(251, '2131051', 'Bambang Pamungkas', 'Manajemen', 2021, 3, 'bambang.pamungkas51@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(252, '2252052', 'Cindy Gulla', 'Sistem Informasi', 2022, 1, 'cindy.gulla52@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(253, '2311053', 'Dedi Kusnandar', 'Hukum', 2023, 2, 'dedi.kusnandar53@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(254, '2032054', 'Evan Dimas', 'Akuntansi', 2020, 3, 'evan.dimas54@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(255, '2121055', 'Febri Hariyadi', 'Ilmu Komunikasi', 2021, 1, 'febri.hariyadi55@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(257, '2322057', 'Hansamu Yama', 'Psikologi', 2023, 3, 'hansamu.yama57@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(258, '2051058', 'I Gede Sukadana', 'Teknik Informatika', 2020, 1, 'i.gede.sukadana58@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(259, '2131059', 'Jajang Mulyana', 'Manajemen', 2021, 2, 'jajang.mulyana59@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(260, '2252060', 'Kurnia Meiga', 'Sistem Informasi', 2022, 3, 'kurnia.meiga60@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(261, '2311061', 'Lilipaly', 'Hukum', 2023, 1, 'lilipaly61@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(262, '2032062', 'Manahati Lestusen', 'Akuntansi', 2020, 2, 'manahati.lestusen62@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(263, '2121063', 'Novri Setiawan', 'Ilmu Komunikasi', 2021, 3, 'novri.setiawan63@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(264, '2241064', 'Osvaldo Haay', 'DKV', 2022, 1, 'osvaldo.haay64@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(265, '2322065', 'Pratama Arhan', 'Psikologi', 2023, 2, 'pratama.arhan65@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(266, '2051066', 'Riko Simanjuntak', 'Teknik Informatika', 2020, 3, 'riko.simanjuntak66@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(267, '2131067', 'Septian David', 'Manajemen', 2021, 1, 'septian.david67@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(268, '2252068', 'Teja Paku Alam', 'Sistem Informasi', 2022, 2, 'teja.paku.alam68@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(269, '2311069', 'Victor Igbonefo', 'Hukum', 2023, 3, 'victor.igbonefo69@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(270, '2032070', 'Witan Sulaeman', 'Akuntansi', 2020, 1, 'witan.sulaeman70@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(271, '2121071', 'Yanto Basna', 'Ilmu Komunikasi', 2021, 2, 'yanto.basna71@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(272, '2241072', 'Zulfiandi', 'DKV', 2022, 3, 'zulfiandi72@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(273, '2322073', 'Abednego', 'Psikologi', 2023, 1, 'abednego73@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(274, '2051074', 'Christian Gonzales', 'Teknik Informatika', 2020, 2, 'christian.gonzales74@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(275, '2131075', 'Dendy Sulistyawan', 'Manajemen', 2021, 3, 'dendy.sulistyawan75@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(276, '2252076', 'Egy Maulana', 'Sistem Informasi', 2022, 1, 'egy.maulana76@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(277, '2311077', 'Firza Andika', 'Hukum', 2023, 2, 'firza.andika77@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(278, '2032078', 'Gavin Kwan', 'Akuntansi', 2020, 3, 'gavin.kwan78@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(279, '2121079', 'Hamka Hamzah', 'Ilmu Komunikasi', 2021, 1, 'hamka.hamzah79@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(280, '2241080', 'Ilija Spasojevic', 'DKV', 2022, 2, 'ilija.spasojevic80@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(281, '2322081', 'Jordi Amat', 'Psikologi', 2023, 3, 'jordi.amat81@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(282, '2051082', 'Koko Ari', 'Teknik Informatika', 2020, 1, 'koko.ari82@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(283, '2131083', 'Marc Klok', 'Manajemen', 2021, 2, 'marc.klok83@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(284, '2252084', 'Nadeo Argawinata', 'Sistem Informasi', 2022, 3, 'nadeo.argawinata84@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(285, '2311085', 'Otavio Dutra', 'Hukum', 2023, 1, 'otavio.dutra85@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(286, '2032086', 'Putu Gede', 'Akuntansi', 2020, 2, 'putu.gede86@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(287, '2121087', 'Rachmat Irianto', 'Ilmu Komunikasi', 2021, 3, 'rachmat.irianto87@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(288, '2241088', 'Sandy Walsh', 'DKV', 2022, 1, 'sandy.walsh88@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(289, '2322089', 'Todd Ferre', 'Psikologi', 2023, 2, 'todd.ferre89@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(290, '2051090', 'Yacob Sayuri', 'Teknik Informatika', 2020, 3, 'yacob.sayuri90@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(291, '2131091', 'Zainudin Amali', 'Manajemen', 2021, 1, 'zainudin.amali91@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(292, '2252092', 'Adinda Azani', 'Sistem Informasi', 2022, 2, 'adinda.azani92@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(293, '2311093', 'Bella Graceva', 'Hukum', 2023, 3, 'bella.graceva93@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(294, '2032094', 'Chelsea Islan', 'Akuntansi', 2020, 1, 'chelsea.islan94@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(295, '2121095', 'Dian Sastro', 'Ilmu Komunikasi', 2021, 2, 'dian.sastro95@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(296, '2241096', 'Eva Celia', 'DKV', 2022, 3, 'eva.celia96@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(297, '2322097', 'Febby Rastanty', 'Psikologi', 2023, 1, 'febby.rastanty97@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(298, '2051098', 'Gita Gutawa', 'Teknik Informatika', 2020, 2, 'gita.gutawa98@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(299, '2131099', 'Hannah Al Rashid', 'Manajemen', 2021, 3, 'hannah.al.rashid99@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(300, '2252100', 'Isyana Sarasvati', 'Sistem Informasi', 2022, 1, 'isyana.sarasvati100@example.com', '2025-10-27 04:08:20', '2025-10-27 04:08:20'),
(301, '2025010001', 'Reza', 'Ilmu Komunikasi', 2023, 1, '2025010001@email.com', '2025-10-27 17:45:18', '2025-10-27 17:45:18');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '2025_10_27_014142_create_mahasiswa_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('mXchmrY8F8DSH0cmEPeftMeoqVcuAxiucyJgRJUW', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoickU5UzI1cHJrYjk2bGROcXdrMHhvN0ZGQlhTSmpHajlGb1FWT28ycyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7czo1OiJyb3V0ZSI7czo1OiJsb2dpbiI7fX0=', 1761612399);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@example.com', '2025-10-26 20:18:08', '$2y$12$XnyZEjc.VhTgHWpnFtHjJ.ht0cW5b9PC5f5PEWwo6ttTzWRsuYLki', 'fSy3VWb92iUPFSgBLPV0KYCWMiqlycz7Xj7zyqdXDrlbVYg5oCyS8idYSmJu', '2025-10-26 20:18:08', '2025-10-26 20:18:08'),
(2, 'Admin2', 'admin2@example.com', '2025-10-26 21:08:01', '$2y$12$2KpLE51SSU4Nozd6.bDy..ZSMAvXVaFSf5rDTXcDldUaiu/Lq6NXC', 'ENwCOIERE0RtqQsCbgBRBzhnWu5JJVb3wNpCAIkDKL5WmLf5xMjwLAbKvDUG', '2025-10-26 21:08:01', '2025-10-26 21:08:01'),
(3, 'Admin3', 'admin3@example.com', '2025-10-26 21:08:14', '$2y$12$0hX5Z5AvgdtSHJBkfAp7VuiAAi8Sd5rHRQA6HMhE8x47VmfcgORWK', 'JTNBqGhofo', '2025-10-26 21:08:15', '2025-10-26 21:08:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`),
  ADD UNIQUE KEY `mahasiswa_nim_unique` (`nim`),
  ADD UNIQUE KEY `mahasiswa_email_unique` (`email`),
  ADD KEY `mahasiswa_id_user_foreign` (`id_user`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mahasiswa` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=302;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
