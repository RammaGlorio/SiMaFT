-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2023 at 02:42 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_simaft`
--

-- --------------------------------------------------------

--
-- Table structure for table `disposisi_dekan`
--

CREATE TABLE `disposisi_dekan` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_surat` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `catatan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` enum('surat_keluar','surat_masuk') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `disposisi_dekan`
--

INSERT INTO `disposisi_dekan` (`id`, `id_surat`, `catatan`, `type`, `created_at`, `updated_at`) VALUES
('7114bb5b-9fb4-4caa-a9e6-9449d07062c1', 'c21042a1-e222-4b71-81a1-9dffbcd4a482', 'testing disposisi sk kompre dari dekan for pd1', 'surat_masuk', '2023-04-13 19:53:37', '2023-04-13 19:53:37'),
('7573ad4a-c092-42bf-95bf-9b34d7fd16b8', '5c1d1d2b-a302-4612-97f7-6a4727e7c3d1', 'Cek dan segera Proses', 'surat_masuk', '2023-04-16 05:31:34', '2023-04-16 05:31:34'),
('7e458c9b-bf6c-47fd-b030-0c7232313e40', 'e66094f6-2aab-4a27-8e92-c281360a2b29', 'buat segera', 'surat_masuk', '2023-04-15 10:52:20', '2023-04-15 10:52:20'),
('85de1381-a852-4b29-b9b9-ef2a66e5e84f', '4bd7885c-1b57-4f47-8e5a-a15a847e4b45', 'Segera diproses', 'surat_masuk', '2023-04-16 21:28:41', '2023-04-16 21:28:41'),
('87af33e4-ff0f-4a4c-a603-3ea7f8d25a79', '517bc7c0-d1e9-46af-936c-93f19467d7b7', 'Segera diproses', 'surat_masuk', '2023-04-16 21:16:33', '2023-04-16 21:16:33'),
('a3de1775-a58a-4adf-85a0-e433f899e6fc', 'b3b4c594-77ef-405b-a92d-5905c9d621a0', NULL, 'surat_keluar', '2023-04-16 21:41:09', '2023-04-16 21:41:09'),
('bddd8155-646f-4183-9416-397fdff3a6c5', '29c8546f-d04f-4438-bc94-bb731d74399f', NULL, 'surat_keluar', '2023-04-14 00:38:02', '2023-04-14 00:38:02'),
('e02455a5-fc27-496e-8fe8-405c9e6db6e7', 'ce4dd08b-3a9f-4c4b-b4a4-2e797d917a18', 'Segera Buat', 'surat_masuk', '2023-04-16 10:28:25', '2023-04-16 10:28:25'),
('e2edd8e3-c634-4afb-897f-2c7a612a49e4', 'df62e368-8d44-4103-a62e-00e7a33e6327', NULL, 'surat_keluar', '2023-04-15 11:11:02', '2023-04-15 11:11:02'),
('ee27a974-9f37-4206-8e84-d633df89351e', '2e05d1bd-a4b7-4515-a39c-c10a3019da34', 'Lanjutkan', 'surat_masuk', '2023-06-11 09:14:00', '2023-06-11 09:14:00');

-- --------------------------------------------------------

--
-- Table structure for table `disposisi_kabag`
--

CREATE TABLE `disposisi_kabag` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_surat` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `catatan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` enum('surat_keluar','surat_masuk') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `disposisi_kabag`
--

INSERT INTO `disposisi_kabag` (`id`, `id_surat`, `catatan`, `type`, `created_at`, `updated_at`) VALUES
('00c25bb1-3f7c-4456-947b-15d0ae534d78', 'ae6ba542-092e-4852-8756-cbe5e00cbfa1', 'Sudah dibuat sesuai arahan', 'surat_keluar', '2023-04-16 05:48:02', '2023-04-16 05:48:02'),
('23b2bce6-12b8-4429-a392-6c62a017ffbf', '5c1d1d2b-a302-4612-97f7-6a4727e7c3d1', 'Proses sesuai instruksi', 'surat_masuk', '2023-04-16 05:34:19', '2023-04-16 05:34:19'),
('5cf5972d-4e6b-4dfa-9d54-84643b4ef58a', 'df62e368-8d44-4103-a62e-00e7a33e6327', 'gas', 'surat_keluar', '2023-04-15 11:06:16', '2023-04-15 11:06:16'),
('76cebed4-6490-48b6-8531-c6b8e7926393', 'c21042a1-e222-4b71-81a1-9dffbcd4a482', 'testing disposisi sk kompre dari kabag', 'surat_masuk', '2023-04-13 19:58:00', '2023-04-13 19:58:00'),
('934d5a16-8206-47ec-99cf-bcdc48eae2b4', 'ce4dd08b-3a9f-4c4b-b4a4-2e797d917a18', 'Lanjutkan', 'surat_masuk', '2023-04-16 10:35:41', '2023-04-16 10:35:41'),
('a085411e-b3a5-4d73-a1ab-96b4fb83d23e', '29c8546f-d04f-4438-bc94-bb731d74399f', 'disposisi sk kompre dari kabag for pd1', 'surat_keluar', '2023-04-14 00:24:28', '2023-04-14 00:24:28'),
('a85d3e40-fe71-4dce-bb17-7434543f6800', 'e66094f6-2aab-4a27-8e92-c281360a2b29', 'okeyy', 'surat_masuk', '2023-04-15 10:57:08', '2023-04-15 10:57:08'),
('cb0c6904-09e7-482f-b9c6-5c56b49f77e0', 'b3b4c594-77ef-405b-a92d-5905c9d621a0', 'Aman', 'surat_keluar', '2023-04-16 21:38:34', '2023-04-16 21:38:34'),
('dc66593f-45bc-4437-9b9b-003190827f2d', '2698cbd2-d9f9-4c63-9780-383bb5abcd5b', 'Selesai', 'surat_keluar', '2023-04-16 10:46:44', '2023-04-16 10:46:44'),
('faf97f52-0d46-44c1-9fbb-c46eff210420', '4bd7885c-1b57-4f47-8e5a-a15a847e4b45', 'buatkan SK nya', 'surat_masuk', '2023-04-16 21:30:17', '2023-04-16 21:30:17');

-- --------------------------------------------------------

--
-- Table structure for table `disposisi_pd1`
--

CREATE TABLE `disposisi_pd1` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_surat` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `catatan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` enum('surat_keluar','surat_masuk') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `disposisi_pd1`
--

INSERT INTO `disposisi_pd1` (`id`, `id_surat`, `catatan`, `type`, `created_at`, `updated_at`) VALUES
('2760f998-7043-4149-8b05-0e587b4aa6f3', 'c21042a1-e222-4b71-81a1-9dffbcd4a482', 'testing disposisi sk kompre dari pd1 for kabag', 'surat_masuk', '2023-04-13 19:55:35', '2023-04-13 19:55:35'),
('4545dccf-edca-4cf2-870e-33d9ad57da61', '517bc7c0-d1e9-46af-936c-93f19467d7b7', 'Tindak lanjuti', 'surat_masuk', '2023-04-16 21:17:27', '2023-04-16 21:17:27'),
('5fba69a8-ae7f-4347-8b72-0439ae600128', '5c1d1d2b-a302-4612-97f7-6a4727e7c3d1', 'Tindak lanjuti', 'surat_masuk', '2023-04-16 05:33:10', '2023-04-16 05:33:10'),
('7cf10a06-76d2-4d96-b5ab-91bd69a5d39d', 'e66094f6-2aab-4a27-8e92-c281360a2b29', 'gaskeenn\n', 'surat_masuk', '2023-04-15 10:55:20', '2023-04-15 10:55:20'),
('817e26b8-a189-423e-94bc-b29beae7b1f6', '2698cbd2-d9f9-4c63-9780-383bb5abcd5b', NULL, 'surat_keluar', '2023-04-16 10:48:41', '2023-04-16 10:48:41'),
('b656cbe9-5f66-465d-a703-3b939bfdf92c', '29c8546f-d04f-4438-bc94-bb731d74399f', 'disposisi sk kompre dari pd1 for dekan', 'surat_keluar', '2023-04-14 00:31:05', '2023-04-14 00:31:05'),
('c3d4b57e-b038-449d-8a0d-cab5bf4209b3', 'ce4dd08b-3a9f-4c4b-b4a4-2e797d917a18', 'Tindak Lanjuti', 'surat_masuk', '2023-04-16 10:30:46', '2023-04-16 10:30:46'),
('d25db32b-5983-4c89-9bfd-aa6728fc9980', 'ae6ba542-092e-4852-8756-cbe5e00cbfa1', NULL, 'surat_keluar', '2023-04-16 05:50:32', '2023-04-16 05:50:32'),
('d3bebdcc-429e-4a88-861d-3d4dcd2bd556', 'b3b4c594-77ef-405b-a92d-5905c9d621a0', 'dokumen untuk ditanda tangani', 'surat_keluar', '2023-04-16 21:40:25', '2023-04-16 21:40:25'),
('df6aab32-e96f-49d2-ae71-55735de6aed2', '4bd7885c-1b57-4f47-8e5a-a15a847e4b45', 'Tindak lanjuti', 'surat_masuk', '2023-04-16 21:29:25', '2023-04-16 21:29:25'),
('f40f7c4e-4353-4be0-bc61-0da0450b6c9b', 'df62e368-8d44-4103-a62e-00e7a33e6327', 'okey\n', 'surat_keluar', '2023-04-15 11:09:12', '2023-04-15 11:09:12');

-- --------------------------------------------------------

--
-- Table structure for table `disposisi_pd2`
--

CREATE TABLE `disposisi_pd2` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_surat` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `catatan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` enum('surat_keluar','surat_masuk') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `disposisi_pd3`
--

CREATE TABLE `disposisi_pd3` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_surat` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `catatan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` enum('surat_keluar','surat_masuk') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lacak_surats`
--

CREATE TABLE `lacak_surats` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_surat` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('surat_masuk','surat_keluar') COLLATE utf8mb4_unicode_ci NOT NULL,
  `posisi` enum('dekan','pd1','pd2','pd3','kabag','umum','kemahasiswaan','pendidikan') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lacak_surats`
--

INSERT INTO `lacak_surats` (`id`, `id_surat`, `type`, `posisi`, `created_at`, `updated_at`) VALUES
('03ac5140-102f-40b2-8e6c-36227ae4bbb0', 'c21042a1-e222-4b71-81a1-9dffbcd4a482', 'surat_masuk', 'pd1', '2023-04-13 19:53:37', '2023-04-13 19:53:37'),
('0663c9ef-bc3f-4ef8-aff6-c18e39331ec2', 'c21042a1-e222-4b71-81a1-9dffbcd4a482', 'surat_masuk', 'kabag', '2023-04-13 19:55:35', '2023-04-13 19:55:35'),
('07c441ec-ee07-4c47-823e-b513e099c452', '4bd7885c-1b57-4f47-8e5a-a15a847e4b45', 'surat_masuk', 'pendidikan', '2023-04-16 21:30:17', '2023-04-16 21:30:17'),
('0bfd383d-684f-4f4c-8b74-ac646ab28f2b', '5c1d1d2b-a302-4612-97f7-6a4727e7c3d1', 'surat_keluar', 'kabag', '2023-04-16 05:41:42', '2023-04-16 05:41:42'),
('14b6de2e-f6f9-4b27-92fe-51b973eca63a', '5c1d1d2b-a302-4612-97f7-6a4727e7c3d1', 'surat_keluar', 'pd1', '2023-04-16 05:48:02', '2023-04-16 05:48:02'),
('15cd88fd-6be2-423a-bd5c-a79a14cd5b0e', '2e05d1bd-a4b7-4515-a39c-c10a3019da34', 'surat_masuk', 'umum', '2023-04-16 10:15:43', '2023-04-16 10:15:43'),
('1acf2115-5d15-4300-848b-f3e4fc8b96e3', '5c1d1d2b-a302-4612-97f7-6a4727e7c3d1', 'surat_masuk', 'dekan', '2023-04-16 05:29:37', '2023-04-16 05:29:37'),
('2067c34d-69bb-4410-911f-55c01ccf6172', '5c1d1d2b-a302-4612-97f7-6a4727e7c3d1', 'surat_keluar', 'umum', '2023-04-16 05:50:32', '2023-04-16 05:50:32'),
('23a0d667-7d7c-42eb-a8b1-abd03cd3c360', 'ce4dd08b-3a9f-4c4b-b4a4-2e797d917a18', 'surat_masuk', 'dekan', '2023-04-16 10:22:23', '2023-04-16 10:22:23'),
('2c65d72c-d70c-4ce8-bd9d-6e52618666f9', 'e66094f6-2aab-4a27-8e92-c281360a2b29', 'surat_masuk', 'kabag', '2023-04-15 10:55:20', '2023-04-15 10:55:20'),
('3194f97b-29ee-40d1-a93b-8a10cdd5f514', '517bc7c0-d1e9-46af-936c-93f19467d7b7', 'surat_masuk', 'dekan', '2023-04-16 21:15:25', '2023-04-16 21:15:25'),
('3303eeef-abc9-484f-9323-cdf7ef76d6fc', '5c1d1d2b-a302-4612-97f7-6a4727e7c3d1', 'surat_keluar', 'pendidikan', '2023-04-16 05:39:12', '2023-04-16 05:39:12'),
('3440442c-cf51-4ea5-9fa4-71c8587c382b', 'ce4dd08b-3a9f-4c4b-b4a4-2e797d917a18', 'surat_masuk', 'pendidikan', '2023-04-16 10:35:41', '2023-04-16 10:35:41'),
('378d7fab-d0ca-49cc-8e3b-0c493ec6d870', 'c21042a1-e222-4b71-81a1-9dffbcd4a482', 'surat_keluar', 'umum', '2023-04-14 00:38:02', '2023-04-14 00:38:02'),
('4cd945f6-bcf3-4f74-9fa2-d7132a72caf9', '4bd7885c-1b57-4f47-8e5a-a15a847e4b45', 'surat_keluar', 'kabag', '2023-04-16 21:37:47', '2023-04-16 21:37:47'),
('5daeff45-8af6-4b45-b131-f89eb08cb2d8', 'c21042a1-e222-4b71-81a1-9dffbcd4a482', 'surat_keluar', 'kabag', '2023-04-13 23:41:20', '2023-04-13 23:41:20'),
('5eabb675-a21a-4909-bfce-b6023e915ec2', '517bc7c0-d1e9-46af-936c-93f19467d7b7', 'surat_masuk', 'umum', '2023-04-16 21:15:08', '2023-04-16 21:15:08'),
('6040c6be-e005-4111-a5aa-f23c074354d7', '4bd7885c-1b57-4f47-8e5a-a15a847e4b45', 'surat_keluar', 'pendidikan', '2023-04-16 21:33:33', '2023-04-16 21:33:33'),
('6375c549-f9ad-4345-af16-6ae1c5d749d4', 'e66094f6-2aab-4a27-8e92-c281360a2b29', 'surat_keluar', 'pendidikan', '2023-04-15 11:02:07', '2023-04-15 11:02:07'),
('6a5ed807-0c6b-4247-be1a-f0d408b2d62b', '5c1d1d2b-a302-4612-97f7-6a4727e7c3d1', 'surat_masuk', 'kabag', '2023-04-16 05:33:10', '2023-04-16 05:33:10'),
('86b15ada-6f01-4e95-829b-ecd4506ad08d', 'c21042a1-e222-4b71-81a1-9dffbcd4a482', 'surat_masuk', 'dekan', '2023-04-13 19:49:17', '2023-04-13 19:49:17'),
('879783b9-50e6-4087-bed0-9c0bd96975ba', '5c1d1d2b-a302-4612-97f7-6a4727e7c3d1', 'surat_masuk', 'umum', '2023-04-16 05:29:26', '2023-04-16 05:29:26'),
('90a5c8c5-2b2e-4721-959e-21e94dc49d59', '4bd7885c-1b57-4f47-8e5a-a15a847e4b45', 'surat_keluar', 'dekan', '2023-04-16 21:40:25', '2023-04-16 21:40:25'),
('90d36ddd-f4e9-450e-8f99-896a0933c422', '4bd7885c-1b57-4f47-8e5a-a15a847e4b45', 'surat_masuk', 'kabag', '2023-04-16 21:29:25', '2023-04-16 21:29:25'),
('91ef68b7-a944-4b8e-9850-c75de7a58089', 'e66094f6-2aab-4a27-8e92-c281360a2b29', 'surat_keluar', 'kabag', '2023-04-15 11:05:34', '2023-04-15 11:05:34'),
('9b89a887-cca2-4639-9dc8-aa42689e265a', '5c1d1d2b-a302-4612-97f7-6a4727e7c3d1', 'surat_masuk', 'pendidikan', '2023-04-16 05:34:19', '2023-04-16 05:34:19'),
('9d9ac3ff-493e-408b-a86d-8fef1723588c', 'ce4dd08b-3a9f-4c4b-b4a4-2e797d917a18', 'surat_keluar', 'pendidikan', '2023-04-16 10:41:12', '2023-04-16 10:41:12'),
('9e7e5a6e-9d24-42da-ab20-6e4a0f32a86a', 'e66094f6-2aab-4a27-8e92-c281360a2b29', 'surat_masuk', 'umum', '2023-04-15 10:49:41', '2023-04-15 10:49:41'),
('a7924c0b-4800-4783-a2c6-b74d653d45f2', 'e66094f6-2aab-4a27-8e92-c281360a2b29', 'surat_keluar', 'umum', '2023-04-15 11:11:02', '2023-04-15 11:11:02'),
('a8bcaa5e-45d8-4990-b0d2-aeaa1b988f6c', '4bd7885c-1b57-4f47-8e5a-a15a847e4b45', 'surat_masuk', 'umum', '2023-04-16 21:24:38', '2023-04-16 21:24:38'),
('a9865dff-b92d-4ded-b5a6-0516e70bca5f', 'e66094f6-2aab-4a27-8e92-c281360a2b29', 'surat_masuk', 'pendidikan', '2023-04-15 10:57:08', '2023-04-15 10:57:08'),
('abef3d31-624a-4c2c-ae13-27f342beaf57', 'c21042a1-e222-4b71-81a1-9dffbcd4a482', 'surat_keluar', 'pd1', '2023-04-14 00:24:28', '2023-04-14 00:24:28'),
('acbe04c3-bf4d-45d7-99ca-0d2786df0056', 'c21042a1-e222-4b71-81a1-9dffbcd4a482', 'surat_masuk', 'umum', '2023-04-13 19:48:19', '2023-04-13 19:48:19'),
('b10d225d-ce20-46e4-ad49-a1ec1cf1e5c1', 'e66094f6-2aab-4a27-8e92-c281360a2b29', 'surat_masuk', 'dekan', '2023-04-15 10:50:27', '2023-04-15 10:50:27'),
('b65cf800-ddfc-4c89-928c-cdc3b5a0f5d5', '4bd7885c-1b57-4f47-8e5a-a15a847e4b45', 'surat_keluar', 'pd1', '2023-04-16 21:38:34', '2023-04-16 21:38:34'),
('b7ed7e4d-240e-4191-89e5-d6d3bd830c5c', 'c21042a1-e222-4b71-81a1-9dffbcd4a482', 'surat_masuk', 'pendidikan', '2023-04-13 19:58:00', '2023-04-13 19:58:00'),
('b8e8d172-a5ee-43cb-9880-c7d2f21ea336', '2e05d1bd-a4b7-4515-a39c-c10a3019da34', 'surat_masuk', 'dekan', '2023-04-16 12:11:48', '2023-04-16 12:11:48'),
('bca44264-ed19-45c7-bf48-e5db7c9b93e8', '2e05d1bd-a4b7-4515-a39c-c10a3019da34', 'surat_masuk', 'pd1', '2023-06-11 09:14:00', '2023-06-11 09:14:00'),
('bf181e85-6d38-4686-a69e-e90b59fb29fc', '517bc7c0-d1e9-46af-936c-93f19467d7b7', 'surat_masuk', 'kabag', '2023-04-16 21:17:27', '2023-04-16 21:17:27'),
('c995e948-6ec5-445c-bc28-d4eddc1c989f', '5c1d1d2b-a302-4612-97f7-6a4727e7c3d1', 'surat_masuk', 'pd1', '2023-04-16 05:31:34', '2023-04-16 05:31:34'),
('ca699cf3-5112-4b6c-8235-ad2a8d38fed8', 'ce4dd08b-3a9f-4c4b-b4a4-2e797d917a18', 'surat_masuk', 'pd1', '2023-04-16 10:28:25', '2023-04-16 10:28:25'),
('cf2d8a4d-2f5e-4cd6-bd43-48481259f52b', 'e66094f6-2aab-4a27-8e92-c281360a2b29', 'surat_keluar', 'pd1', '2023-04-15 11:06:16', '2023-04-15 11:06:16'),
('cf98e73b-0dc2-4987-a480-0f953ee893e9', 'ce4dd08b-3a9f-4c4b-b4a4-2e797d917a18', 'surat_keluar', 'kabag', '2023-04-16 10:45:09', '2023-04-16 10:45:09'),
('d30f7e8a-69b8-49fd-8353-e5fb8cb1761c', 'ce4dd08b-3a9f-4c4b-b4a4-2e797d917a18', 'surat_keluar', 'umum', '2023-04-16 10:48:41', '2023-04-16 10:48:41'),
('d39817f8-14d6-44f4-b848-0c9654a432c8', '4bd7885c-1b57-4f47-8e5a-a15a847e4b45', 'surat_keluar', 'umum', '2023-04-16 21:41:09', '2023-04-16 21:41:09'),
('e3dc8409-c82d-40ea-ae96-78d23c7ce4ef', 'c21042a1-e222-4b71-81a1-9dffbcd4a482', 'surat_keluar', 'dekan', '2023-04-14 00:31:05', '2023-04-14 00:31:05'),
('e72ea8f8-1115-4e66-ac99-6a974143d5a2', 'ce4dd08b-3a9f-4c4b-b4a4-2e797d917a18', 'surat_masuk', 'umum', '2023-04-16 10:22:09', '2023-04-16 10:22:09'),
('e907b892-1c70-4a7f-b6ab-7e64842c916b', '517bc7c0-d1e9-46af-936c-93f19467d7b7', 'surat_masuk', 'pd1', '2023-04-16 21:16:33', '2023-04-16 21:16:33'),
('efcdaf29-abcd-439b-8412-8b8a531fcb57', '4bd7885c-1b57-4f47-8e5a-a15a847e4b45', 'surat_masuk', 'pd1', '2023-04-16 21:28:41', '2023-04-16 21:28:41'),
('f0e4f36a-a1b7-4a14-9b33-94a647f5b3d7', 'ce4dd08b-3a9f-4c4b-b4a4-2e797d917a18', 'surat_masuk', 'kabag', '2023-04-16 10:30:46', '2023-04-16 10:30:46'),
('f52aae89-7bb7-47ee-88b1-e7ebc2b39344', 'e66094f6-2aab-4a27-8e92-c281360a2b29', 'surat_masuk', 'pd1', '2023-04-15 10:52:20', '2023-04-15 10:52:20'),
('f607c1af-273f-4ea8-b744-6369ebe9547e', 'ce4dd08b-3a9f-4c4b-b4a4-2e797d917a18', 'surat_keluar', 'pd1', '2023-04-16 10:46:44', '2023-04-16 10:46:44'),
('f688675c-f69b-4b01-a32d-ae755f963b94', '4bd7885c-1b57-4f47-8e5a-a15a847e4b45', 'surat_masuk', 'dekan', '2023-04-16 21:25:06', '2023-04-16 21:25:06'),
('f7e95535-dbb6-44b1-949f-0c84131a4cd9', 'c21042a1-e222-4b71-81a1-9dffbcd4a482', 'surat_keluar', 'pendidikan', '2023-04-13 20:32:46', '2023-04-13 20:32:46'),
('f9260337-1d0f-4053-af53-14916ba2d186', 'e66094f6-2aab-4a27-8e92-c281360a2b29', 'surat_keluar', 'dekan', '2023-04-15 11:09:12', '2023-04-15 11:09:12');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_10_04_114829_create_surat_masuk_umums_table', 1),
(6, '2021_12_05_112216_create_disposisi_pd1s_table', 1),
(7, '2021_12_05_113614_create_disposisi_dekans_table', 1),
(8, '2021_12_05_114154_create_disposisi_pd2s_table', 1),
(9, '2021_12_05_114202_create_disposisi_pd3s_table', 1),
(10, '2021_12_05_114214_create_disposisi_kabags_table', 1),
(11, '2022_01_13_142331_create_surat_keluar_kartu_mahasiswas_table', 1),
(12, '2023_02_20_055226_create_lacak_surats_table', 1),
(13, '2023_02_25_105840_create_surat_keluar_sk_proposals_table', 1),
(14, '2023_03_18_130440_create_surat_keluar_sk_ujian_hasils_table', 1),
(15, '2023_04_02_035404_create_surat_keluar_sk_pembimbing_skripsis_table', 1),
(17, '2023_04_14_040338_create_surat_keluar_sk_kompres_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `surat_keluar_kartu_mahasiswas`
--

CREATE TABLE `surat_keluar_kartu_mahasiswas` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_surat` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_surat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_mhs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan_prodi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('dekan','pd1','pd2','pd3','kemahasiswaan','kabag','umum') COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_selesai` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanda_tangan` enum('dekan','pd1','pd2','pd3') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `surat_keluar_sk_kompres`
--

CREATE TABLE `surat_keluar_sk_kompres` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_surat` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_surat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_mhs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan_prodi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `memperhatikan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_surat` date NOT NULL,
  `tanggal_ujian` date NOT NULL,
  `waktu_ujian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_ujian` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sekertaris` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wakil_sekertaris` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul_skripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dosen_penguji` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('dekan','pd1','pd2','pd3','pendidikan','kabag','umum') COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_selesai` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanda_tangan` enum('dekan','pd1','pd2','pd3') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `surat_keluar_sk_kompres`
--

INSERT INTO `surat_keluar_sk_kompres` (`id`, `id_surat`, `nomor_surat`, `nama_mhs`, `nim`, `jurusan_prodi`, `memperhatikan`, `tanggal_surat`, `tanggal_ujian`, `waktu_ujian`, `tempat_ujian`, `sekertaris`, `wakil_sekertaris`, `judul_skripsi`, `dosen_penguji`, `status`, `status_selesai`, `tanda_tangan`, `created_at`, `updated_at`) VALUES
('29c8546f-d04f-4438-bc94-bb731d74399f', 'c21042a1-e222-4b71-81a1-9dffbcd4a482', '222', 'refandi andika runtu', '16210019', 'teknik informatika', 'Surat Rektor Nomor : 2586/UN41/PS/2021', '2023-04-26', '2023-04-26', '10.00 - 11.00', 'Ruang ujian', 'Alfrina Mewengkang, S.Kom, M.Eng', 'Olivia E. S. Liando, ST, M.Sc, M.Pd', 'sistem informasi badan usaha milik desa', '[\"andika\",\"refandi\",\"runtu\",\"testing\"]', 'umum', 'selesai', 'dekan', '2023-04-13 20:32:46', '2023-04-14 00:44:13');

-- --------------------------------------------------------

--
-- Table structure for table `surat_keluar_sk_pembimbing_skripsis`
--

CREATE TABLE `surat_keluar_sk_pembimbing_skripsis` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_surat` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_surat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_mhs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan_prodi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `memperhatikan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_surat` date NOT NULL,
  `judul_skripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dosen_pembimbing` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('dekan','pd1','pd2','pd3','pendidikan','kabag','umum') COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_selesai` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanda_tangan` enum('dekan','pd1','pd2','pd3') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `surat_keluar_sk_proposals`
--

CREATE TABLE `surat_keluar_sk_proposals` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_surat` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_surat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_mhs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan_prodi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `memperhatikan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_surat` date NOT NULL,
  `sekertaris` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul_skripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dosen_penguji` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('dekan','pd1','pd2','pd3','pendidikan','kabag','umum') COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_selesai` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanda_tangan` enum('dekan','pd1','pd2','pd3') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `surat_keluar_sk_proposals`
--

INSERT INTO `surat_keluar_sk_proposals` (`id`, `id_surat`, `nomor_surat`, `nama_mhs`, `nim`, `jurusan_prodi`, `memperhatikan`, `tanggal_surat`, `sekertaris`, `judul_skripsi`, `dosen_penguji`, `status`, `status_selesai`, `tanda_tangan`, `created_at`, `updated_at`) VALUES
('2698cbd2-d9f9-4c63-9780-383bb5abcd5b', 'ce4dd08b-3a9f-4c4b-b4a4-2e797d917a18', '001/UN41/FT/IV/2023', 'Ramma Tombuku', '16210062', 'Teknik Informatika', 'Surat Korprodi TI', '2023-04-01', 'Vivi Rantung', 'Perancangan dan Implementasi Sistem Informasi Manajemen Administrasi Berbasis Website di Fakultas Teknik UNIMA', '[\"Gladly Rorimpandey\",\"Kristofel Santa\",\"Quido Kainde\"]', 'umum', 'selesai', 'pd1', '2023-04-16 10:41:12', '2023-04-16 10:53:48'),
('ae6ba542-092e-4852-8756-cbe5e00cbfa1', '5c1d1d2b-a302-4612-97f7-6a4727e7c3d1', '001/UN.41/FT/IV/2023', 'Ramma Tombuku', '16210062', 'Teknik Informatika', 'Surat Korprodi TI FT UNIMA Nomor : 000/UN41.2/TI/2023', '2023-04-01', 'Vivi Rantung, ST, MISD', 'Sistem Informasi Manajemen Administrasi Fakultas Teknik', '[\"Ferdinand Sangkop\",\"Quido Kainde\",\"Gladly Rorimpandey\"]', 'umum', 'selesai', 'pd1', '2023-04-16 05:39:12', '2023-04-16 05:56:14'),
('b3b4c594-77ef-405b-a92d-5905c9d621a0', '4bd7885c-1b57-4f47-8e5a-a15a847e4b45', '01/UN.41/FT/2023', 'Ramma Tombuku', '16210062', 'Teknik Informatika', 'Surat Korprodi TI Nomor 01/UN41.2/TI/IV/2023', '2023-04-17', 'Vivi Rantung,ST, MISD', 'Sistem Informasi Manajemen Administrasi Fakultas', '[\"Gladly Rorimpandey\",\"Olivia Kembuan\"]', 'umum', 'selesai', 'dekan', '2023-04-16 21:33:33', '2023-04-16 21:45:56');

-- --------------------------------------------------------

--
-- Table structure for table `surat_keluar_sk_ujian_hasils`
--

CREATE TABLE `surat_keluar_sk_ujian_hasils` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_surat` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_surat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_mhs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan_prodi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `memperhatikan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_surat` date NOT NULL,
  `sekertaris` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wakil_sekertaris` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul_skripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dosen_penguji` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('dekan','pd1','pd2','pd3','pendidikan','kabag','umum') COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_selesai` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanda_tangan` enum('dekan','pd1','pd2','pd3') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `surat_keluar_sk_ujian_hasils`
--

INSERT INTO `surat_keluar_sk_ujian_hasils` (`id`, `id_surat`, `nomor_surat`, `nama_mhs`, `nim`, `jurusan_prodi`, `memperhatikan`, `tanggal_surat`, `sekertaris`, `wakil_sekertaris`, `judul_skripsi`, `dosen_penguji`, `status`, `status_selesai`, `tanda_tangan`, `created_at`, `updated_at`) VALUES
('df62e368-8d44-4103-a62e-00e7a33e6327', 'e66094f6-2aab-4a27-8e92-c281360a2b29', '01/UN.41/FT/IV/2023', 'Ronaldo Kiroyan', '16210048', 'Teknik Informatika', 'memperhatikan skaliii', '2023-04-16', 'Vivi Rantung', 'Arje Djamen', 'Pengaruh Senyum Sapi Terhadap Pertumbuhan Jagung', '[\"Gladly Rorimpandey\",\"Ivan Sangkop\",\"Natanael Lukas\"]', 'umum', 'selesai', 'dekan', '2023-04-15 11:02:07', '2023-04-15 11:13:45');

-- --------------------------------------------------------

--
-- Table structure for table `surat_masuk_umums`
--

CREATE TABLE `surat_masuk_umums` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_surat_masuk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_terima` date NOT NULL,
  `tanggal_surat` date NOT NULL,
  `pengirim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `perihal_surat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_surat` enum('ket_kartu_mhs','sk_proposal','sk_pembimbing_skripsi','sk_ujian_hasil','sk_kompre') COLLATE utf8mb4_unicode_ci NOT NULL,
  `sifat_surat` enum('Biasa','Segera','Sangat Segera','Penting','Rahasia') COLLATE utf8mb4_unicode_ci NOT NULL,
  `scan_file_surat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('umum','dekan','pd1','pd2','pd3','kabag','pendidikan','kemahasiswaan','subumum') COLLATE utf8mb4_unicode_ci NOT NULL,
  `disposisi_pd` enum('pd1','pd2','pd3') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `surat_masuk_umums`
--

INSERT INTO `surat_masuk_umums` (`id`, `no_surat_masuk`, `tanggal_terima`, `tanggal_surat`, `pengirim`, `perihal_surat`, `jenis_surat`, `sifat_surat`, `scan_file_surat`, `status`, `disposisi_pd`, `created_at`, `updated_at`) VALUES
('2e05d1bd-a4b7-4515-a39c-c10a3019da34', '003', '2023-04-17', '2023-04-17', 'Ralph Pascoal', 'Permohonan SK Skripsi', 'sk_ujian_hasil', 'Sangat Segera', 'surat-masuk/643c2d3f1d1f0.pdf', 'pd1', NULL, '2023-04-16 10:15:43', '2023-06-11 09:13:59'),
('4bd7885c-1b57-4f47-8e5a-a15a847e4b45', '001', '2023-04-17', '2023-04-16', 'Ramma Tombuku', 'Permohonan SK Propoosal', 'sk_proposal', 'Sangat Segera', 'surat-masuk/643cca06adeda.pdf', 'pendidikan', 'pd1', '2023-04-16 21:24:38', '2023-04-16 21:30:17'),
('517bc7c0-d1e9-46af-936c-93f19467d7b7', '002', '2023-04-17', '2023-04-16', 'Ramma Tombuku', 'Permohohonan SK Proposal', 'sk_proposal', 'Rahasia', 'surat-masuk/643cc7cc1d262.pdf', 'kabag', 'pd1', '2023-04-16 21:15:08', '2023-04-16 21:17:27'),
('5c1d1d2b-a302-4612-97f7-6a4727e7c3d1', '002', '2023-04-16', '2023-04-16', 'Ramma Tombuku', 'Permohonan SK Proposal', 'sk_proposal', 'Sangat Segera', 'surat-masuk/643bea26660c7.pdf', 'pendidikan', 'pd1', '2023-04-16 05:29:26', '2023-04-16 05:34:19'),
('c21042a1-e222-4b71-81a1-9dffbcd4a482', '1122', '2023-04-14', '2023-04-15', 'andika runtu', 'beking sk kompre', 'sk_kompre', 'Biasa', 'surat-masuk/6438cd031acf7.pdf', 'pendidikan', 'pd1', '2023-04-13 19:48:19', '2023-04-13 19:58:00'),
('ce4dd08b-3a9f-4c4b-b4a4-2e797d917a18', '004/UN41.2/TI/FT/IV/2023', '2023-04-17', '2023-04-17', 'Ramma Tombuku', 'Permohoonan SK Proposal', 'sk_proposal', 'Penting', 'surat-masuk/643c2ec1b9960.pdf', 'pendidikan', 'pd1', '2023-04-16 10:22:09', '2023-04-16 10:35:41'),
('e66094f6-2aab-4a27-8e92-c281360a2b29', '001', '2023-04-16', '2023-04-16', 'Padz', 'SK Skripsi', 'sk_ujian_hasil', 'Sangat Segera', 'surat-masuk/643ae3b5f09f9.pdf', 'pendidikan', 'pd1', '2023-04-15 10:49:41', '2023-04-15 10:57:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('Dekan','PD1','PD2','PD3','Kabag','Umum','Pendidikan','Kemahasiswaan','Admin','Sub-Umum') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanda_tangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `tanda_tangan`, `remember_token`, `created_at`, `updated_at`) VALUES
('0435cc7c-e1ed-41a6-a81e-f54b464a2625', 'Umum', 'umum@gmail.com', NULL, '$2y$10$SwD.GMv.5UY8X7cCP11tyOjOaJo4yhsqrjjEKse5i8YK8QABgQs5G', 'Umum', NULL, NULL, '2023-04-15 09:16:33', '2023-04-15 09:16:33'),
('19581114-6413-4480-87b8-91f71dc47cb7', 'Koordinator Administrasi', 'kooradmin@gmail.com', NULL, '$2y$10$o4mG30OiydBCLeJHowf2Fu3ziKWyVwjnR9Q4UbQ4yuk6aSo7SYgrO', 'Kabag', NULL, NULL, '2023-04-15 09:16:33', '2023-04-15 09:16:33'),
('3fc1aee5-44a5-469e-ba48-83675f9baa7f', 'Pendidikan', 'pendidikan@gmail.com', NULL, '$2y$10$XrGTDC0xuyFRz0vI80xM9.oY/5bMZhqGDeRFBqYBj52Ou8u3YLrty', 'Pendidikan', NULL, NULL, '2023-04-15 09:16:33', '2023-04-15 09:16:33'),
('658ab8a8-5c27-445c-a0f4-14295262a3a9', 'Wakil Dekan 2', 'pd2@gmail.com', NULL, '$2y$10$Y.wxd8eQsY2yEBxwTZP/Je1G10PnilB/bKXttLv/wIa059mQ.58gu', 'PD2', NULL, NULL, '2023-04-15 09:16:33', '2023-04-15 09:16:33'),
('6fde4a50-d3c2-47eb-84cc-7b4e6ff0f101', 'Wakil Dekan 3', 'wakildekan3@gmail.com', NULL, '$2y$10$tAMMcfNOta44BvlWD1EPhe4AVTFmlg9RLFt1SA4MJvmpFvA.J4xX2', 'PD3', 'tanda-tangan/643ae21b8a3c6.jpg', NULL, '2023-04-15 09:16:33', '2023-04-15 10:43:12'),
('8507e7ca-0866-4b80-995d-666f44b85e63', 'Admin', 'admin@gmail.com', NULL, '$2y$10$3NhsF1s4Kndzl29EwvzZsuZnk/D9o0hyxRHmedPDEenCmKRCPSq/K', 'Admin', NULL, NULL, '2023-04-15 09:16:33', '2023-04-15 09:16:33'),
('96dccf29-17fe-4bba-9f87-c5442d3e4b02', 'Sub Umum', 'subumum@gmail.com', NULL, '$2y$10$GmOak4.iEXLKcXVlxhSPPeA2woePjhAsqix3qCU6YKjNbyGikmaWu', 'Sub-Umum', NULL, NULL, '2023-04-15 09:16:33', '2023-04-15 09:16:33'),
('a3b6ff34-8612-4a1e-8a6f-602c0e8ac2eb', 'Kemahasiswaan', 'kemahasiswaan@gmail.com', NULL, '$2y$10$zDMC2ckmr1bfz7fgEBoShuzNma/x6uAGNNaAahHVHWHjuhYN/N41q', 'Kemahasiswaan', NULL, NULL, '2023-04-15 09:16:33', '2023-04-15 09:16:33'),
('c7c406ae-0bee-4273-a34d-bf60b467ec26', 'Wakil Dekan 1', 'wakildekan1@gmail.com', NULL, '$2y$10$kfNWPDsD0J10t0bOFXtOj.dR2TTTwh3O6DJr270/WotGhnGdSHmlC', 'PD1', 'tanda-tangan/643c30ddcd2b8.jpg', NULL, '2023-04-15 09:16:32', '2023-04-16 10:31:09'),
('cf792f0d-8436-4c1f-92e7-23678db3f2df', 'Dekan', 'dekan@gmail.com', NULL, '$2y$10$VWXJllxn0pe6TmZay8ts7eadt12hG9lDdja2AF4F/.Q2LyFq6U4qy', 'Dekan', 'tanda-tangan/643c2fd4b326a.jpg', NULL, '2023-04-15 09:16:32', '2023-04-16 10:26:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `disposisi_dekan`
--
ALTER TABLE `disposisi_dekan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `disposisi_kabag`
--
ALTER TABLE `disposisi_kabag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `disposisi_pd1`
--
ALTER TABLE `disposisi_pd1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `disposisi_pd2`
--
ALTER TABLE `disposisi_pd2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `disposisi_pd3`
--
ALTER TABLE `disposisi_pd3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `lacak_surats`
--
ALTER TABLE `lacak_surats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `surat_keluar_kartu_mahasiswas`
--
ALTER TABLE `surat_keluar_kartu_mahasiswas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat_keluar_sk_kompres`
--
ALTER TABLE `surat_keluar_sk_kompres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat_keluar_sk_pembimbing_skripsis`
--
ALTER TABLE `surat_keluar_sk_pembimbing_skripsis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat_keluar_sk_proposals`
--
ALTER TABLE `surat_keluar_sk_proposals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat_keluar_sk_ujian_hasils`
--
ALTER TABLE `surat_keluar_sk_ujian_hasils`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat_masuk_umums`
--
ALTER TABLE `surat_masuk_umums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
