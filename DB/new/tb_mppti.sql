-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2022 at 06:36 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tb_mppti`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_anggota` bigint(20) UNSIGNED NOT NULL,
  `id_rapat` bigint(20) UNSIGNED NOT NULL,
  `status_kehadiran` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `absensi`
--

INSERT INTO `absensi` (`id`, `id_anggota`, `id_rapat`, `status_kehadiran`, `created_at`, `updated_at`) VALUES
(2, 12, 6, 'Hadir', '2021-11-14 23:23:47', '2021-11-14 23:23:47'),
(3, 14, 8, 'Hadir', '2021-11-14 23:30:35', '2021-11-14 23:30:35'),
(4, 14, 8, 'Hadir', '2021-11-21 20:41:26', '2021-11-21 20:41:26'),
(5, 14, 9, 'Hadir', '2021-11-22 02:25:59', '2021-11-22 02:25:59'),
(6, 15, 6, 'Hadir', '2021-11-30 01:32:15', '2021-11-30 01:32:15'),
(7, 15, 9, 'Hadir', '2021-12-04 06:34:50', '2021-12-04 06:34:50'),
(8, 18, 2, 'Hadir', '2021-12-08 06:25:06', '2021-12-08 06:25:06'),
(9, 18, 6, 'Izin', '2021-12-08 06:25:21', '2021-12-08 06:25:21'),
(10, 13, 6, 'Hadir', '2022-04-08 06:49:28', '2022-04-08 06:49:28'),
(16, 16, 4, 'Hadir', '2022-04-08 08:23:24', '2022-04-08 08:23:24'),
(17, 16, 7, 'Hadir', '2022-04-08 08:23:37', '2022-04-08 08:23:37'),
(18, 16, 10, 'Hadir', '2022-04-08 08:23:43', '2022-04-08 08:23:43'),
(19, 20, 10, 'Hadir', '2022-04-08 10:27:57', '2022-04-08 10:27:57'),
(20, 20, 4, 'Hadir', '2022-04-09 05:56:57', '2022-04-09 05:56:57'),
(21, 20, 7, 'Izin', '2022-04-09 05:57:10', '2022-04-09 05:57:10');

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_divisi` bigint(20) UNSIGNED NOT NULL,
  `id_pesertaor` bigint(20) UNSIGNED DEFAULT NULL,
  `no_himpunan` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jabatan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `angkatan` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cv` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tahun_jabatan` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_keanggotaan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nim` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id`, `id_divisi`, `id_pesertaor`, `no_himpunan`, `nama`, `password`, `jabatan`, `jenis_kelamin`, `alamat`, `tempat_lahir`, `tgl_lahir`, `email`, `no_hp`, `angkatan`, `foto`, `cv`, `tahun_jabatan`, `jenis_keanggotaan`, `created_at`, `updated_at`, `nim`) VALUES
(12, 7, NULL, 'AX.6.2019', 'Distifia Oktari', '$2y$10$uTMRaXI19WHU3vtE3KnQIOoFpdlOIXIz9FxKE25kiOdWbmOAtq4T.', 'Bendahara Umum', 'Perempuan', 'Padangfndkjfiefldsf', 'Padang', '2021-06-13', 'disti@gmail.com', '08116565', '2019', 'bcd.png', 'cv.jpg', '2022', 'Anggota Biasa', '2021-11-12 17:49:25', '2021-11-12 17:49:25', '1911521009'),
(13, 1, 10, 'AX.3005.2019', 'William Wahyu', '$2y$10$qqoxTPtNC8logWY5A71w1e7lSCVeRy7zyWWjlaIoQ93/N3Uk.6qay', 'anggota', 'laki-laki', 'jalan jendral sudirman no 1001', 'jakarta', '2021-11-08', 'william@gmail.com', '013388779844', '2019', 'pict3.jpg', 'cv3.jpg', '2021', 'Anggota Biasa', '2021-11-14 19:13:16', '2021-11-14 19:13:16', '1911523005'),
(14, 5, 11, 'AX.1023.2019', 'Tasya Ade Karmila', '$2y$10$rGUZUSXMr8AWrHZscD8HwOzHUPz1AatEAmw5CSz5pXrC0tgesNTZe', 'anggota', 'perempuan', 'Jalan siteba nomor 20998', 'Medan', '2021-11-03', 'tasya@gmail.com', '054984651313', '2019', 'profpict3.jpg', 'cv2.jpg', '2021', 'Anggota Biasa', '2021-11-14 19:16:03', '2021-11-14 19:16:03', '1911521023'),
(15, 5, 14, 'AX.2007.2019', 'Intan Yuliana Putri', '$2y$10$OTWdvyCLnfLaUEnOdtk7teBn.NetcHnc6mZ8yORoPHNHi34agD84O', 'anggota', 'Perempuan', 'Kayu tanam', 'bukittingi', '2021-09-16', 'intan@gmail.com', '916446456465', '2019', 'https://res.cloudinary.com/nishia/image/upload/v1649515780/myg9nwygohmndju2mx7i.jpg', 'cv3.jpg', '2022', 'Anggota Biasa', '2021-11-14 19:34:27', '2021-11-14 19:34:27', '1911522007'),
(16, 3, 15, 'AX.1011.2019', 'Mutiara Raudhatul jannah', '$2y$10$QI3529YlRCTL3Gu26bfiVeNH0TzC4dGqEF8/G/O7W93wsVPHTG9qS', 'anggota', 'perempuan', 'jalan soekarno no 19', 'payakumbuh', '2021-08-10', 'tiara@gmail.com', '498556878956', '2019', 'profpict.jpg', 'cv3.jpg', '2021', 'Anggota Biasa', '2021-11-14 21:20:15', '2021-11-14 21:20:15', '1911521011'),
(17, 7, NULL, 'AX.2003.2018', 'Harley', '$2y$10$/GkKKArbyuFp/rrmwFKO/elVnbQKADPR1mo6YHofI2XTZHorVYBDC', 'Ketua Hima', 'Laki-laki', 'Belimbing Semangka Pepaya', 'Padang', '2021-09-07', 'harley@gmail.com', '123456789123', '2018', 'pict.jpg', 'cv6.png', '2021', 'Anggota Biasa', '2021-11-14 21:48:39', '2021-11-14 21:48:39', '1811522003'),
(18, 2, 17, 'AX.2017.2019', 'Immalatunil Kharia', '$2y$10$DyquzSFxgqetihe4om40ZuhH7SEijRCScuGjFEPl.MI23Bm07ASC.', 'anggota', 'perempuan', 'Bungus', 'Jambi', '2021-11-01', 'imma@gmail.com', '016484456133', '2019', 'pict3.jpg', 'cv4.jpg', '2021', 'Anggota Biasa', '2021-11-22 02:22:13', '2021-11-22 02:22:13', '1911522017'),
(19, 4, 19, 'AX.1015.2019', 'Fathania Zulfani', '$2y$10$sjOR.F8TpQ4CSWjp.Idbb.7oHD8B/FpncUvaZ06lVmJDTXrD2i1gq', 'anggota', 'perempuan', 'Jalan sudirman', 'Medan', '2021-09-30', 'thania@gmail.com', '414154561030', '2019', 'pict3.jpg', 'cv3.jpg', '2021', 'Anggota Biasa', '2021-12-08 06:21:29', '2021-12-08 06:21:29', '1911521015'),
(20, 3, 21, '1', 'Annisa Suprima', '$2y$10$mWiIvza/lHuzjBLPyAX1F.H1LLpvUZa/vo8kzxW6xECjLqhoMGvQW', 'Bendahara Divisi', 'Perempuan', 'Halaban', 'Solok', '2000-08-30', 'annisa.suprima@gmail.com', '082285265855', '2018', 'https://res.cloudinary.com/nishia/image/upload/v1649515676/sfsim6smpy9hkou4x0iq.jpg', '512-5121163_gambar-toga-wisuda-kartun-anak-muslim-png-download.png', '2022', 'Anggota Biasa', '2022-04-08 10:26:33', '2022-04-08 10:26:33', '1811521015'),
(22, 3, NULL, 'aidjsa', 'as', '$2y$10$meOIKbT2HD.i2dfoTnNHQes/NnXFc/ZWl3/U3yqv63oWiNNrSFSxG', 'Anggota Divisi', 'Laki-laki', 'aa', 'aa', '2022-05-05', 'aas@gmail.com', 'asda', '2018', 'bgtb.jpg', 'f1-abd57e1075c52f25a7d8d38f47766b61_600x400.jpg', '2022', 'Anggota Biasa', '2022-04-09 07:18:08', '2022-04-09 07:18:08', '12981923'),
(23, 3, NULL, '2131', 's', '$2y$10$9rL.5PtRmYmI9P.vWzwc5O4u5k5paOSBD6R.ApQ4s5iz26g4UBRWC', 'Bendahara Divisi', 'Perempuan', 'qwe', 'qw', '2022-04-27', 'as@gmail.com', '01829172', '2019', 'f1-abd57e1075c52f25a7d8d38f47766b61_600x400.jpg', 'meniti-tali-tebing-mengerikan_20160426_124504.jpg', '2022', 'Anggota Biasa', '2022-04-09 07:21:58', '2022-04-09 07:21:58', '18231793'),
(24, 4, NULL, '12zxasa', 'sd', '$2y$10$xxBufbnZJu64JP5pIb0YpewvDPzm7ruEw3Y1HMuotUHqyf7jsAdKW', 'Anggota Divisi', 'Perempuan', 'adsasf', 'adsas', '2022-05-05', 'afa@gmail.com', '123123', '2018', 'https://res.cloudinary.com/nishia/image/upload/v1649521471/ihnlt8zjgcvbdxyiiggv.jpg', 'bgtb.jpg', '2022', 'Anggota Biasa', '2022-04-09 07:26:42', '2022-04-09 07:26:42', '12314142'),
(25, 5, NULL, '143sasd', 'asda', '$2y$10$2YdObwVPe8I3WZjFVrz1iOge0u1rM2GPnMNVQPexPNBS95zu90gL2', 'Bendahara Umum', 'Perempuan', 'afsf', 'asdas', '2022-04-19', 'adsa@gmail.com', '319273923', '2018', 'aksi-soimah-dan-bulik-tini-menari-tarian-geol-saliter-2e4268.jpg', 'bgtb.jpg', '2022', 'Anggota Biasa', '2022-04-09 07:28:28', '2022-04-09 07:28:28', '1241514'),
(26, 5, NULL, 'uda19231', 'uda', '$2y$10$su7N8U8ILqKWBCuYoS3sTerWeFY0z23PdWqiSY.SsFxChNxOYJA3i', 'Anggota Divisi', 'Laki-laki', 'ada', 'asda', '2022-04-22', 'uda@gmail.com', '0812312314', '2018', 'https://res.cloudinary.com/nishia/image/upload/v1649514977/cwpnltt4w8fiifxopsw5.jpg', 'https://res.cloudinary.com/nishia/image/upload/v1649514980/wot5m3b6digrdbyct0sv.jpg', '2022', 'Anggota Biasa', '2022-04-09 07:36:22', '2022-04-09 07:36:22', '12931832'),
(27, 4, 23, '121asdada', 'Samsul', '$2y$10$VfNj0ykWXb9tAqubv1LF0u9mKbcRLI08STQ4qIvbOXFWKDFJZKVJm', 'anggota', 'Perempuan', 'sa', 'sa', '2022-04-29', 'samsul@gmail.com', '0819213', '2020', 'https://res.cloudinary.com/nishia/image/upload/v1649521250/ertgemfxvd5wu0vfjsin.jpg', 'https://res.cloudinary.com/nishia/image/upload/v1649521547/zzx637gbargytbhy6nej.jpg', '2022', 'Anggota Biasa', '2022-04-09 09:22:01', '2022-04-09 09:22:01', '1019281232');

-- --------------------------------------------------------

--
-- Table structure for table `divisi`
--

CREATE TABLE `divisi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_divisi` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_divisi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ket_divisi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `divisi`
--

INSERT INTO `divisi` (`id`, `kode_divisi`, `nama_divisi`, `ket_divisi`, `created_at`, `updated_at`) VALUES
(1, 'MHS', 'Kemahasiswaan', '-', '2021-10-27 22:31:29', '2021-10-27 22:31:29'),
(2, 'KWR', 'Kewirausahaan', '-', '2021-10-27 23:27:22', '2021-10-27 23:27:22'),
(3, 'PIT', 'Keprofesian dan IT', '-', '2021-10-27 23:28:06', '2021-10-27 23:28:06'),
(4, 'HMS', 'Hubungan Masyarakat', '-', '2021-10-27 23:28:28', '2021-10-27 23:28:28'),
(5, 'RTK', 'Rumah Tangga dan Kesekretariatan', '-', '2021-10-27 23:28:53', '2021-10-29 04:19:15'),
(7, 'Inti', 'Presidium', 'Kahim, Wakahim, Bendahara umum, sekretaris umum, Kabid, Sekre Kabid', '2021-11-05 19:29:35', '2021-11-14 20:09:08');

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
-- Table structure for table `kat_keuangan`
--

CREATE TABLE `kat_keuangan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kategori` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ket_kategori` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kat_keuangan`
--

INSERT INTO `kat_keuangan` (`id`, `kategori`, `nama_kategori`, `ket_kategori`, `created_at`, `updated_at`) VALUES
(1, 'K01', 'Kas Himpunan', 'kas masuk', NULL, NULL),
(2, 'K02', 'Galang Dana', 'kas masuk', NULL, NULL),
(3, 'K03', 'Dana Proker', 'kas keluar', NULL, NULL),
(4, 'K04', 'Donasi', 'kas keluar', NULL, NULL),
(5, 'K05', 'Dana Operasional', 'kas masuk', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `keuangan`
--

CREATE TABLE `keuangan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_anggota` bigint(20) UNSIGNED NOT NULL,
  `id_kategori` bigint(20) UNSIGNED NOT NULL,
  `tanggal_pembayaran` date NOT NULL,
  `jumlah_pembayaran` int(11) NOT NULL,
  `bukti_pembayaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_konfirmasi` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `keuangan`
--

INSERT INTO `keuangan` (`id`, `id_anggota`, `id_kategori`, `tanggal_pembayaran`, `jumlah_pembayaran`, `bukti_pembayaran`, `keterangan`, `status_konfirmasi`, `created_at`, `updated_at`) VALUES
(4, 14, 1, '2021-11-13', 12000, 'https://res.cloudinary.com/nishia/image/upload/v1649521652/oibfyhcrby28kelufoie.jpg', 'Lunas', 'Konfirm', '2021-11-12 21:21:41', '2021-11-12 21:21:41'),
(5, 15, 2, '2021-11-20', 15000, 'Cash', '-', 'Konfirm', '2021-11-13 08:10:38', '2021-11-13 08:10:38'),
(7, 15, 5, '2021-11-11', 50000, 'Cash', '-', 'Konfirm', '2021-11-13 08:50:41', '2021-11-13 08:50:41'),
(8, 14, 3, '2021-12-02', 32000, 'Cash', 'Untuk Dana Proker HMSI', 'Tolak', '2021-11-13 08:57:16', '2021-11-13 08:57:16'),
(10, 13, 3, '2021-11-16', 15000, 'D:\\xampp\\tmp\\phpF38F.tmp', 'Dana Mubes', 'Konfirm', '2021-11-13 22:48:09', '2021-11-13 22:48:09'),
(11, 16, 2, '2021-11-16', 5500, 'Belum', '-', 'Belum', '2021-11-14 06:04:09', '2021-11-14 06:04:09'),
(12, 12, 1, '2021-11-18', 32000, 'Cash', '-', 'Konfirm', '2021-11-14 06:06:06', '2021-11-14 06:06:06'),
(13, 19, 1, '2022-04-08', 9000, 'cash', 'lunas', 'Konfirm', '2022-04-08 08:36:21', '2022-04-08 08:36:21'),
(15, 12, 1, '2022-04-08', 120000, 'D:\\xampp\\tmp\\phpC72A.tmp', 'Bayar Uang Kas', 'Konfirm', '2022-04-08 10:18:56', '2022-04-08 10:18:56'),
(16, 20, 1, '2022-04-09', 12000, 'https://res.cloudinary.com/nishia/image/upload/v1649521766/mtnh8hpqmqxzojxzhwos.png', 'Lunas', 'Konfirm', '2022-04-08 10:27:40', '2022-04-08 10:27:40'),
(17, 22, 1, '2022-04-05', 12000, 'D:\\xampp\\tmp\\phpDC12.tmp', 'kas', 'Konfirm', '2022-04-09 08:13:04', '2022-04-09 08:13:04'),
(18, 24, 2, '2022-04-12', 5000, 'https://res.cloudinary.com/nishia/image/upload/v1649517566/u2w6hcx30vag9na1ldli.jpg', 'galang dana dari mana', 'Konfirm', '2022-04-09 08:17:56', '2022-04-09 08:17:56');

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
(5, '2021_10_25_143804_create_peserta_or_table', 1),
(6, '2021_10_25_143829_create_divisi_table', 1),
(7, '2021_10_25_144001_create_kat_keuangan_table', 1),
(8, '2021_10_25_144020_create_anggota_table', 1),
(9, '2021_10_25_144348_create_keuangan_table', 1),
(10, '2021_10_25_144426_create_rapat_table', 1),
(11, '2021_10_25_144511_create_absensi_table', 1),
(13, '2021_10_28_044524_create_divisis_table', 2),
(14, '2021_11_01_082405_add_no_himpunan_field_to_peserta_or_table', 2),
(16, '2021_11_06_064036_add_nim_field_to_anggota_table', 3);

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
-- Table structure for table `peserta_or`
--

CREATE TABLE `peserta_or` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nim` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `no_hp` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `angkatan` int(10) UNSIGNED NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `divis1` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alasan1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `divis2` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alasan2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai` int(10) UNSIGNED DEFAULT NULL,
  `status_or` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `no_himpunan` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `peserta_or`
--

INSERT INTO `peserta_or` (`id`, `nim`, `email`, `nama`, `jenis_kelamin`, `tempat_lahir`, `tgl_lahir`, `no_hp`, `angkatan`, `alamat`, `divis1`, `alasan1`, `divis2`, `alasan2`, `foto`, `cv`, `nilai`, `status_or`, `created_at`, `updated_at`, `no_himpunan`) VALUES
(8, '1911522009', 'miftah@gmail.com', 'Miftah Mussaumi Adi', 'perempuan', 'padang', '2021-11-01', '0846784566456', 2019, 'wisma pondok indah blok c4', 'Kewirausahaan', 'cari cuan', 'Keprofesian dan IT', 'bismillah', 'profpict3.jpg', 'cv2.jpg', 50, 'Tidak lulus', '2021-11-06 01:21:07', '2021-11-06 01:21:07', 'AX.1.2019'),
(10, '1911523005', 'william@gmail.com', 'William Wahyu', 'laki-laki', 'jakarta', '2021-11-08', '013388779844', 2019, 'jalan jendral sudirman no 1001', 'Kemahasiswaan', 'kayanya seru masuk divisi ini', 'Rumah Tangga dan Kesekretariatan', 'hmm.. suka suak aja sih', 'pict3.jpg', 'cv3.jpg', NULL, 'lulus', '2021-11-14 18:38:07', '2021-11-14 18:38:07', 'AX.3005.2019'),
(11, '1911521023', 'tasya@gmail.com', 'Tasya Ade Karmila', 'perempuan', 'Medan', '2021-11-03', '054984651313', 2019, 'Jalan siteba nomor 20998', 'Rumah Tangga dan Kesekretariatan', 'Ingin mengurus internal HMSI', 'Kewirausahaan', 'Pengen cari cuan', 'profpict3.jpg', 'cv2.jpg', NULL, 'lulus', '2021-11-14 18:41:28', '2021-11-14 18:41:28', 'AX.1023.2019'),
(13, '1911522019', 'rivonny@gmail.com', 'Rivonny Wulandari', 'perempuan', 'Padang', '2021-10-12', '946161987171', 2019, 'Lubuk Buaya nomor 1034293', 'Hubungan Masyarakat', 'Ingin bergabung meningkatkan silaturrahmi', 'Keprofesian dan IT', 'Kayanya seru', 'profpict3.jpg', 'cv3.jpg', NULL, 'Tidak lulus', '2021-11-14 18:47:14', '2021-11-14 18:47:14', 'AX.2019.2019'),
(14, '1911522007', 'intan@gmail.com', 'Intan Yuliana Putri', 'perempuan', 'bukittingi', '2021-09-16', '916446456465', 2019, 'Kayu tanam', 'Kewirausahaan', 'pengen cari cuan', 'Rumah Tangga dan Kesekretariatan', 'hmmm', 'pict2.jpg', 'cv3.jpg', NULL, 'lulus', '2021-11-14 19:24:37', '2021-11-14 19:24:37', 'AX.2007.2019'),
(15, '1911521011', 'tiara@gmail.com', 'Mutiara Raudhatul jannah', 'perempuan', 'payakumbuh', '2021-08-10', '498556878956', 2019, 'jalan soekarno no 19', 'Keprofesian dan IT', 'daa', 'Hubungan Masyarakat', 'asdasdas', 'profpict.jpg', 'cv3.jpg', 80, 'lulus', '2021-11-14 19:29:51', '2021-11-14 19:29:51', 'AX.1011.2019'),
(16, '1911523007', 'test@gmail.com', 'test', 'laki-laki', 'fghdfhg', '2021-10-18', '556575757', 2018, 'fgfhfg', 'Hubungan Masyarakat', 'fghdfgh', 'Kemahasiswaan', 'fghdfh', 'pict2.jpg', 'cv.jpg', NULL, 'Tidak lulus', '2021-11-14 19:37:44', '2021-11-14 19:37:44', 'AX.192012'),
(17, '1911522017', 'imma@gmail.com', 'Immalatunil Kharia', 'perempuan', 'Jambi', '2021-11-01', '016484456133', 2019, 'Bungus', 'Kewirausahaan', 'Cuan is everything', 'Keprofesian dan IT', 'Ingin berbagi ilmu dengan sesama khususnya IT', 'pict3.jpg', 'cv4.jpg', 90, 'lulus', '2021-11-14 22:10:12', '2021-11-14 22:10:12', 'AX.2017.2019'),
(18, '1911522029', 'arif@gmail.com', 'Arif Roska Perdana', 'laki-laki', 'padang', '2021-11-02', '484544453867', 2019, 'Padang', 'Hubungan Masyarakat', 'jdfkf', 'Rumah Tangga dan Kesekretariatan', 'fgdfhdghg', 'pict2.jpg', 'cv.jpg', 90, 'Tidak lulus', '2021-11-14 22:11:29', '2021-11-14 22:11:29', 'AX.2029.2019'),
(19, '1911521015', 'thania@gmail.com', 'Fathania Zulfani', 'perempuan', 'Medan', '2021-09-30', '414154561030', 2019, 'Jalan sudirman', 'Keprofesian dan IT', 'Ingin memanfaatkan skill IT yang dimiliki', 'Hubungan Masyarakat', 'Ingin berkontribusi memperkenalkan HMSI ke luar', 'pict3.jpg', 'cv3.jpg', NULL, 'lulus', '2021-11-21 21:06:53', '2021-11-21 21:06:53', 'AX.1015.2019'),
(20, '1234567995', 'saya@gmail.com', 'nama saya', 'laki-laki', 'Daerah saya', '2021-11-03', '081356978556', 2018, 'Alamat saya', 'Hubungan Masyarakat', 'Humas', 'Kemahasiswaan', 'Kemahasiswaan', 'pict10.jpg', 'cv10.jpg', NULL, 'Tidak lulus', '2021-11-30 01:28:13', '2021-11-30 01:28:13', 'AX.4.2021'),
(21, '1811521015', 'annisa.suprima@gmail.com', 'Annisa Suprima', 'Perempuan', 'Solok', '2000-08-30', '082285265855', 2018, 'Halaban', 'Keprofesian dan IT', 'karena', 'Kewirausahaan', 'karnea', '943240-meme-tom-jerry-telenovela.jpg', '512-5121163_gambar-toga-wisuda-kartun-anak-muslim-png-download.png', NULL, 'lulus', '2022-04-08 10:25:50', '2022-04-08 10:25:50', '1'),
(22, '1811521016', 'a@egmail.com', 'test', 'Perempuan', '-', '2022-04-27', '081316', 2019, '-', 'Kewirausahaan', 'a', 'Keprofesian dan IT', 'a', '0.-Biografi-Lengkap-Jack-Ma-Founder-Alibaba-Manusia-Rp-519-Triliun.jpg', '0.-Biografi-Lengkap-Jack-Ma-Founder-Alibaba-Manusia-Rp-519-Triliun.jpg', NULL, 'lulus', '2022-04-09 03:12:56', '2022-04-09 03:12:56', NULL),
(23, '1019281232', 'samsul@gmail.com', 'Samsul', 'Laki-laki', 'sa', '2022-04-29', '0819213', 2020, 'sa', 'Keprofesian dan IT', 'asa', 'Hubungan Masyarakat', 'asas', 'https://res.cloudinary.com/nishia/image/upload/v1649521250/ertgemfxvd5wu0vfjsin.jpg', 'https://res.cloudinary.com/nishia/image/upload/v1649521271/ceiz2zwnb1xxcu8tppza.jpg', NULL, 'lulus', '2022-04-09 09:21:12', '2022-04-09 09:21:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rapat`
--

CREATE TABLE `rapat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_divisi` bigint(20) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `waktu_mulai` time NOT NULL,
  `waktu_selesai` time NOT NULL,
  `topik` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hasil` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rapat`
--

INSERT INTO `rapat` (`id`, `id_divisi`, `tanggal`, `waktu_mulai`, `waktu_selesai`, `topik`, `hasil`, `created_at`, `updated_at`) VALUES
(2, 2, '2021-10-21', '16:59:00', '17:00:00', 'edit topik', '<h1>Heading 1</h1><p>suka suka gue mau isi apaan</p><p><strong>ini huruf bold</strong></p><p><em>ini huruf italic</em></p><p><strong><em>ini huruf bold italic</em></strong></p><ol><li><strong><em>cobain angka 1</em></strong></li><li>cobain angka 2</li><li><em>cobain angka 3</em></li></ol><ul><li>dffd</li><li>dfg</li><li>dfgd</li><li>dfg</li></ul>', '2021-10-29 03:01:01', '2021-11-07 21:45:37'),
(4, 3, '2021-10-21', '16:59:00', '17:00:00', 'topiknya udah diedit nih', '<p>y</p>', '2021-10-29 04:02:57', '2022-03-21 08:38:25'),
(6, 7, '2021-11-14', '21:10:00', '21:50:00', 'presidium', '<p>iuggukjjhiuguh</p>', '2021-11-14 01:24:07', '2021-11-14 01:24:07'),
(7, 3, '2021-11-08', '21:50:00', '22:01:00', 'Rapat kedua', '<p>sdfdfgfjt</p>', '2021-11-14 21:50:08', '2021-11-14 21:50:08'),
(8, 5, '2021-11-01', '08:10:00', '09:00:00', 'Rapat pertama', '<p>gfghfjhjgjghdf</p>', '2021-11-14 21:51:36', '2021-11-14 21:51:36'),
(9, 7, '2021-11-10', '10:00:00', '00:00:00', 'Global nih', '<p>dsfgdfgn</p>', '2021-11-14 21:52:40', '2021-11-14 21:52:40'),
(10, 3, '2022-04-14', '10:00:00', '00:00:00', 'g', '<p>aaaaa</p>', '2022-04-08 06:57:28', '2022-04-08 06:57:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin2', 'admin2@gmail.com', NULL, '12345', NULL, NULL, NULL),
(2, 'admin', 'admin@gmail.com', NULL, '$2y$10$8raxJ5iaOwCi4gH0cldmbu8G4qdiTJDscABZJ0lj6tp5UOKNBsOSe', 'L5MzJKaGdAY3PIGsiTUeTMqwNueYFvlPQlMqYtHy1PGzGYcmUGfeuMaTf7RV', '2021-11-12 04:35:16', '2021-11-12 04:35:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `absensi_id_anggota_foreign` (`id_anggota`),
  ADD KEY `absensi_id_rapat_foreign` (`id_rapat`);

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`),
  ADD KEY `anggota_id_divisi_foreign` (`id_divisi`),
  ADD KEY `anggota_id_pesertaor_foreign` (`id_pesertaor`);

--
-- Indexes for table `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kat_keuangan`
--
ALTER TABLE `kat_keuangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keuangan`
--
ALTER TABLE `keuangan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `keuangan_id_anggota_foreign` (`id_anggota`),
  ADD KEY `keuangan_id_kategori_foreign` (`id_kategori`);

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
-- Indexes for table `peserta_or`
--
ALTER TABLE `peserta_or`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rapat`
--
ALTER TABLE `rapat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rapat_id_divisi_foreign` (`id_divisi`);

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
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `divisi`
--
ALTER TABLE `divisi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kat_keuangan`
--
ALTER TABLE `kat_keuangan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `keuangan`
--
ALTER TABLE `keuangan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

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

--
-- AUTO_INCREMENT for table `peserta_or`
--
ALTER TABLE `peserta_or`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `rapat`
--
ALTER TABLE `rapat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `absensi`
--
ALTER TABLE `absensi`
  ADD CONSTRAINT `absensi_id_anggota_foreign` FOREIGN KEY (`id_anggota`) REFERENCES `anggota` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `absensi_id_rapat_foreign` FOREIGN KEY (`id_rapat`) REFERENCES `rapat` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `anggota`
--
ALTER TABLE `anggota`
  ADD CONSTRAINT `anggota_id_divisi_foreign` FOREIGN KEY (`id_divisi`) REFERENCES `divisi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `anggota_id_pesertaor_foreign` FOREIGN KEY (`id_pesertaor`) REFERENCES `peserta_or` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rapat`
--
ALTER TABLE `rapat`
  ADD CONSTRAINT `rapat_id_divisi_foreign` FOREIGN KEY (`id_divisi`) REFERENCES `divisi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
