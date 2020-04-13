-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2019 at 06:25 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dataunivrab`
--

-- --------------------------------------------------------

--
-- Table structure for table `fakultas`
--

CREATE TABLE `fakultas` (
  `id_fakultas` tinyint(2) NOT NULL,
  `nm_fakultas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hitung`
--

CREATE TABLE `hitung` (
  `id_hitung` int(5) NOT NULL,
  `id_jj` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jabatan_staff`
--

CREATE TABLE `jabatan_staff` (
  `id_js` int(11) NOT NULL,
  `id_jj` int(11) NOT NULL,
  `id_staff` varchar(35) NOT NULL,
  `create_at` datetime NOT NULL,
  `modified_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jabfung`
--

CREATE TABLE `jabfung` (
  `id_jabfung` int(11) NOT NULL,
  `nm_jabfung` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_jabatan`
--

CREATE TABLE `jenis_jabatan` (
  `id_jj` int(11) NOT NULL,
  `nm_jabatan` varchar(50) NOT NULL,
  `create_at` datetime NOT NULL,
  `modified_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_jabatan`
--

INSERT INTO `jenis_jabatan` (`id_jj`, `nm_jabatan`, `create_at`, `modified_at`) VALUES
(13, 'Ketua LP3M', '2019-09-20 16:01:12', '0000-00-00 00:00:00'),
(14, ' Dosen Tetap (Paket)', '2019-09-20 16:01:19', '0000-00-00 00:00:00'),
(15, ' Staff LPPM', '2019-09-20 16:01:23', '0000-00-00 00:00:00'),
(16, ' Koor. Lab FKIK', '2019-09-20 16:01:27', '0000-00-00 00:00:00'),
(17, ' Sek. Prodi', '2019-09-20 16:01:30', '0000-00-00 00:00:00'),
(18, ' Ka. Prodi', '2019-09-20 16:01:34', '0000-00-00 00:00:00'),
(19, ' Staf LDPI', '2019-09-20 16:01:38', '0000-00-00 00:00:00'),
(20, ' Dosen Tetap', '2019-09-20 16:01:53', '0000-00-00 00:00:00'),
(21, ' Direktur', '2019-09-20 16:01:59', '0000-00-00 00:00:00'),
(22, ' Staff LP3M', '2019-09-20 16:02:08', '0000-00-00 00:00:00'),
(23, ' Ka. P2K', '2019-09-20 16:02:15', '0000-00-00 00:00:00'),
(24, ' Ka. Lab Bahasa', '2019-09-20 16:02:26', '0000-00-00 00:00:00'),
(25, ' Dosen Tetap (Sewa)', '2019-09-20 16:02:34', '0000-00-00 00:00:00'),
(26, ' Ka. Prodi (PD)', '2019-09-20 16:02:45', '0000-00-00 00:00:00'),
(27, ' Sek Prodi (PD)', '2019-09-20 16:02:52', '0000-00-00 00:00:00'),
(28, ' NIDK', '2019-09-20 16:03:08', '0000-00-00 00:00:00'),
(29, ' Wadek I', '2019-09-20 16:03:12', '0000-00-00 00:00:00'),
(30, ' Dekan FKIK', '2019-09-20 16:03:19', '0000-00-00 00:00:00'),
(31, ' Sek. Prodi (PSPD)', '2019-09-20 16:03:27', '0000-00-00 00:00:00'),
(32, ' Staf LDPI', '2019-09-20 16:03:31', '0000-00-00 00:00:00'),
(33, ' Fungsional', '2019-09-20 16:03:36', '0000-00-00 00:00:00'),
(34, ' Warek II', '2019-09-20 16:03:41', '0000-00-00 00:00:00'),
(35, ' Staff Yayasan', '2019-09-20 16:03:44', '0000-00-00 00:00:00'),
(36, ' Ka. Lab TI', '2019-09-20 16:03:49', '0000-00-00 00:00:00'),
(37, ' Ketua Puskom', '2019-09-20 16:03:53', '0000-00-00 00:00:00'),
(38, ' Staf Renbang', '2019-09-20 16:03:59', '0000-00-00 00:00:00'),
(39, ' Dosen Kopertis', '2019-09-20 16:04:02', '0000-00-00 00:00:00'),
(40, ' Ka. Pustaka', '2019-09-20 16:04:06', '0000-00-00 00:00:00'),
(41, ' Ka.PAK', '2019-09-20 16:04:12', '0000-00-00 00:00:00'),
(42, ' Dekan Teknik', '2019-09-20 16:04:18', '0000-00-00 00:00:00'),
(43, ' Ka. Lab Ikom', '2019-09-20 16:04:25', '0000-00-00 00:00:00'),
(44, ' Ka. Marketing', '2019-09-20 16:04:29', '0000-00-00 00:00:00'),
(45, ' Dekan', '2019-09-20 16:04:37', '0000-00-00 00:00:00'),
(46, ' Warek III', '2019-09-20 16:04:43', '0000-00-00 00:00:00'),
(47, ' Dekan FISIPOL', '2019-09-20 16:04:48', '0000-00-00 00:00:00'),
(48, ' Ka. Bag. Humas', '2019-09-20 16:04:53', '0000-00-00 00:00:00'),
(49, ' Ka. Psi Center', '2019-09-20 16:04:59', '0000-00-00 00:00:00'),
(50, ' Wakil Dekan', '2019-09-20 16:05:05', '0000-00-00 00:00:00'),
(51, ' Staff Yayasan (Media Center)', '2019-09-20 16:05:12', '0000-00-00 00:00:00'),
(52, ' Sekertaris WR III', '2019-09-20 16:05:17', '0000-00-00 00:00:00'),
(53, ' Staf Sapra', '2019-09-20 16:05:24', '0000-00-00 00:00:00'),
(54, ' Listrik', '2019-09-20 16:05:30', '0000-00-00 00:00:00'),
(55, ' Staf CS', '2019-09-20 16:05:33', '0000-00-00 00:00:00'),
(56, ' Sek. Warek I', '2019-09-20 16:05:39', '0000-00-00 00:00:00'),
(57, ' AC', '2019-09-20 16:05:43', '0000-00-00 00:00:00'),
(58, ' Driver', '2019-09-20 16:05:55', '0000-00-00 00:00:00'),
(59, ' Staff Humas', '2019-09-20 16:06:09', '0000-00-00 00:00:00'),
(60, ' Staff Marketing', '2019-09-20 16:06:13', '0000-00-00 00:00:00'),
(61, ' Sek. Rektor', '2019-09-20 16:06:23', '0000-00-00 00:00:00'),
(62, ' Rektor', '2019-09-20 16:06:30', '0000-00-00 00:00:00'),
(63, ' Staf TU', '2019-09-20 16:06:38', '0000-00-00 00:00:00'),
(64, ' LPPM', '2019-09-20 16:06:45', '0000-00-00 00:00:00'),
(65, ' Puket I', '2019-09-20 16:06:53', '0000-00-00 00:00:00'),
(66, ' Ketua STEI', '2019-09-20 16:06:57', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `id_prodi` tinyint(2) NOT NULL,
  `nm_prodi` varchar(50) NOT NULL,
  `id_fakultas` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id_staff` varchar(35) NOT NULL,
  `nm_staff` varchar(50) NOT NULL,
  `no_ktp` int(20) NOT NULL,
  `nidn` varchar(35) NOT NULL,
  `id_prodi` int(11) NOT NULL,
  `id_jabfung` int(11) NOT NULL,
  `instansi` varchar(30) NOT NULL,
  `status` varchar(20) NOT NULL,
  `pend_terakhir` varchar(50) NOT NULL,
  `lanjut_studi` varchar(50) NOT NULL,
  `perguruan_tinggi` varchar(50) NOT NULL,
  `sls_studi` int(4) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `st` varchar(3) NOT NULL,
  `tmt` date NOT NULL,
  `masa_kerja` varchar(30) NOT NULL,
  `gol` varchar(2) NOT NULL,
  `tmt_aa` date NOT NULL,
  `tmt_leltor_200` date NOT NULL,
  `tmt_leltor_300` date NOT NULL,
  `ket` varchar(300) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `create_at` datetime NOT NULL,
  `modified_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `last_login` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `last_login`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`id_fakultas`);

--
-- Indexes for table `hitung`
--
ALTER TABLE `hitung`
  ADD PRIMARY KEY (`id_hitung`);

--
-- Indexes for table `jabatan_staff`
--
ALTER TABLE `jabatan_staff`
  ADD PRIMARY KEY (`id_js`);

--
-- Indexes for table `jabfung`
--
ALTER TABLE `jabfung`
  ADD PRIMARY KEY (`id_jabfung`);

--
-- Indexes for table `jenis_jabatan`
--
ALTER TABLE `jenis_jabatan`
  ADD PRIMARY KEY (`id_jj`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id_prodi`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id_staff`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fakultas`
--
ALTER TABLE `fakultas`
  MODIFY `id_fakultas` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hitung`
--
ALTER TABLE `hitung`
  MODIFY `id_hitung` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `jabatan_staff`
--
ALTER TABLE `jabatan_staff`
  MODIFY `id_js` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=168;

--
-- AUTO_INCREMENT for table `jabfung`
--
ALTER TABLE `jabfung`
  MODIFY `id_jabfung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jenis_jabatan`
--
ALTER TABLE `jenis_jabatan`
  MODIFY `id_jj` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id_prodi` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
