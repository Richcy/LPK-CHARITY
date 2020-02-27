-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2020 at 02:29 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lpk`
--

-- --------------------------------------------------------

--
-- Table structure for table `murid`
--

CREATE TABLE `murid` (
  `id_murid` int(11) NOT NULL,
  `username_murid` varchar(100) NOT NULL,
  `nik_murid` varchar(25) NOT NULL,
  `jadwal_murid` date NOT NULL,
  `tempat_lahir_murid` varchar(50) NOT NULL,
  `tanggal_lahir_murid` date NOT NULL,
  `jenis_kelamin_murid` varchar(10) NOT NULL,
  `alamat_murid` text NOT NULL,
  `email_murid` varchar(100) NOT NULL,
  `no_hp_murid` varchar(15) NOT NULL,
  `status_murid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `murid`
--

INSERT INTO `murid` (`id_murid`, `username_murid`, `nik_murid`, `jadwal_murid`, `tempat_lahir_murid`, `tanggal_lahir_murid`, `jenis_kelamin_murid`, `alamat_murid`, `email_murid`, `no_hp_murid`, `status_murid`) VALUES
(2, 'test doang', '', '0000-00-00', '', '0000-00-00', '', '', '', '', ''),
(3, 'okesiap', 'okesiap', '0000-00-00', '', '0000-00-00', '', '', '', '', ''),
(4, 'asdf', 'asdf', '2020-01-01', '', '0000-00-00', '', '', '', '', ''),
(5, 'radio', 'radio', '0000-00-00', '', '0000-00-00', '', '', '', '', ''),
(6, 'ah', 'ah', '0000-00-00', '', '0000-00-00', '', '', '', '', ''),
(7, 'asadd', 'asasd', '2020-01-03', '', '0000-00-00', '', '', '', '', ''),
(8, 'test2', 'test2', '1970-01-01', '', '0000-00-00', 'on', '', '', '', ''),
(9, 'Richcy Dian Sukma', '3273060505980001', '2020-03-02', 'Bandung', '0000-00-00', 'laki-laki', 'Komplek Taman Cileunyi Blok 2E No. 334 Desa Cileunyi Kulon Kecamatan Cileunyi Kabupaten Bandung', 'richcyveliz2@gmail.com', '087700221261', 'aktif'),
(10, 'tgl lahir', 'asda', '2020-02-25', 'asda', '2020-02-04', 'perempuan', 'asd', 'asasd@sf', 'asd', 'aktif'),
(11, 'tgl lahir', '123123', '2020-01-12', 'Bandung', '0000-00-00', '', 'asdad', 'tgllahir@sdd', 'def', 'aktif'),
(12, 'eki', '1234567890', '2020-02-27', 'bandung', '2000-01-01', 'laki-laki', 'xvbnm', 'asdadsa@asdadsa', '', 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftar`
--

CREATE TABLE `pendaftar` (
  `id_pendaftar` int(11) NOT NULL,
  `username_pendaftar` varchar(50) NOT NULL,
  `nik_pendaftar` varchar(25) NOT NULL,
  `tanggal_booking` date NOT NULL,
  `tanggal_daftar` datetime NOT NULL,
  `tempat_lahir_pendaftar` varchar(50) NOT NULL,
  `tanggal_lahir_pendaftar` date NOT NULL,
  `jenis_kelamin_pendaftar` varchar(25) NOT NULL,
  `alamat_ktp_pendaftar` text NOT NULL,
  `alamat_domisili_pendaftar` text NOT NULL,
  `pendidikan_akhir_pendaftar` varchar(20) NOT NULL,
  `email_pendaftar` varchar(100) NOT NULL,
  `bukti_transfer` varchar(100) NOT NULL,
  `hp_pendaftar` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftar`
--

INSERT INTO `pendaftar` (`id_pendaftar`, `username_pendaftar`, `nik_pendaftar`, `tanggal_booking`, `tanggal_daftar`, `tempat_lahir_pendaftar`, `tanggal_lahir_pendaftar`, `jenis_kelamin_pendaftar`, `alamat_ktp_pendaftar`, `alamat_domisili_pendaftar`, `pendidikan_akhir_pendaftar`, `email_pendaftar`, `bukti_transfer`, `hp_pendaftar`) VALUES
(3, 'sukma', 'sukma', '0000-00-00', '2020-01-20 07:47:03', '', '0000-00-00', 'on', '', '', '', 'sukma@gmail.com', '', '098765432198'),
(4, 'okesiap', 'okesiap', '0000-00-00', '2020-01-20 01:50:18', '', '0000-00-00', 'on', '', '', '', 'okesiap@gmail.com', '', '765483749123'),
(5, 'daftar', 'DAFTAR', '0000-00-00', '2020-01-20 13:53:52', '', '0000-00-00', 'on', '', '', '', 'daftar@gmail.com', '', '123412341212'),
(6, 'asdf', 'asdf', '2020-01-01', '2020-01-20 14:06:30', '', '0000-00-00', 'on', '', '', '', 'asdf@gmail.com', '', '234218976456'),
(7, 'test', 'test', '2001-06-01', '2020-01-20 14:18:45', '', '0000-00-00', 'on', '', '', '', 'test@gmail.com', '', '12318371981'),
(8, 'coba', 'coba', '2020-04-01', '2020-01-20 14:19:46', '', '0000-00-00', 'on', '', '', '', 'coba@gmail.com', '', '123456788765'),
(9, 'asadd', 'asasd', '2020-01-03', '2020-01-20 14:22:15', '', '0000-00-00', 'on', '', '', '', 'asadd@gmail.com', '', '765456787654'),
(10, 'ah', 'ah', '0000-00-00', '2020-01-20 14:25:41', '', '0000-00-00', 'on', '', '', '', 'ah@gmail.com', '', '123'),
(11, 'test2', 'test2', '1970-01-01', '2020-01-20 14:34:06', '', '0000-00-00', 'on', '', '', '', 'test2@gmail.com', '', '123'),
(13, '', '', '1970-01-01', '2020-01-20 14:37:18', '', '0000-00-00', 'on', '', '', '', 'aaa@gmail.com', '', ''),
(14, 'testlagi', 'asdf', '2020-03-01', '2020-01-20 14:44:35', '', '0000-00-00', 'on', '', '', '', 'test3@gmail.com', '', '1232738'),
(15, 'asdf', 'asdf', '2020-03-01', '2020-01-20 14:50:39', '', '0000-00-00', 'on', '', '', '', 'asdf2@gmail.com', '', '1312123'),
(16, 'radio', 'radio', '2020-04-01', '2020-01-20 14:53:31', '', '0000-00-00', 'laki-laki', '', '', '', 'radio@gmail.com', '', '1231213123'),
(17, 'Richcy Dian Sukma', 'richcy', '1970-01-01', '2020-01-21 17:17:39', 'Bandung', '0000-00-00', '', '', '', '', 'richcyveliz@yahoo.com', '', '087700221261'),
(18, 'fix', 'fix', '2020-12-01', '2020-01-21 17:21:01', 'Bandung', '0000-00-00', 'laki-laki', 'Bandung', 'Cianjur', 'SMA', 'fix@gmail.com', 'nanti', '123456789123'),
(19, '', '', '1970-01-01', '2020-01-21 17:24:40', '', '0000-00-00', '', '', '', '', 'a@huh', '', ''),
(20, '', '', '1970-01-01', '2020-01-21 17:29:05', '', '0000-00-00', '', '', '', '', 'lahir@coba', '', ''),
(21, 'tes tanggal booking', 'tes', '0000-00-00', '2020-01-27 18:08:53', 'Bandung', '0000-00-00', 'laki-laki', 'Bandung', 'Cianjur', 'SD', 'tesbooking@gmail.com', 'nanti', '123456789123'),
(22, 'tes tanggal booking', 'asd', '0000-00-00', '2020-01-27 18:13:52', 'asdsads', '0000-00-00', 'laki-laki', 'Bandung', 'Cianjur', 'SMP', 'oke@game', 'nanti', '123412341212'),
(23, 'ngakak', 'awkakwk', '1970-01-01', '2020-01-27 18:15:27', 'apaweh', '0000-00-00', 'laki-laki', 'Bandung', 'Cianjur', 'SMA', 'asdad@asdd', 'nanti', '123412341212'),
(24, 'dian', 'koiioj', '2020-01-03', '2020-01-27 18:24:42', 'bandung', '0000-00-00', 'laki-laki', 'Bandung', 'Cianjur', 'SMP', 'asd@aaa', 'nanti', '123412341212'),
(25, 'tes hari', 'asd', '2020-02-08', '2020-02-03 12:23:34', 'Bandung', '0000-00-00', 'perempuan', 'Bandung', 'Cianjur', 'SMP', 'asd@asddddd', 'nanti', '123456789123'),
(26, 'cek lagi', 'asdsd', '2020-02-03', '2020-02-03 12:24:25', 'apaweh', '0000-00-00', 'perempuan', 'Bandung', 'Cianjur', 'SMP', 'asasd@adasd', 'nanti', '123'),
(27, 'cek logic fix', 'DSADASD', '2020-02-14', '2020-02-03 12:37:20', 'bandung', '0000-00-00', 'laki-laki', 'Bandung', 'Cianjur', 'SMP', 'cek@cek', 'nanti', '765483749123'),
(28, 'eki', 'eki', '2020-02-07', '2020-02-08 20:54:40', 'Bandung', '0000-00-00', 'laki-laki', 'Bandung', 'Cianjur', 'SMA', 'eki@eki', 'nanti', '123456789123'),
(29, 'test lagi', '1234567890', '2020-02-08', '2020-02-10 17:43:29', 'bandung', '0000-00-00', 'laki-laki', 'Bandung', 'Cianjur', 'SMA', 'test@coba', 'nanti', '765483749123'),
(30, 'asdf', 'asdf', '2020-01-04', '2020-02-10 18:43:12', 'asdfg', '0000-00-00', 'laki-laki', 'sdfgh', 'sdfg', 'SMP', 'asdf@asdfgh', 'asdfgh', '123456'),
(31, 'asdfghj', 'dfghj', '2020-01-04', '2020-02-10 18:44:39', 'werty', '0000-00-00', 'perempuan', 'zxm', 'xvbnm', 'SMP', 'dghj@df', 'fghjkl;', '098'),
(32, 'asd', 'sdfg', '2020-01-15', '2020-02-10 18:49:59', 'ghjk', '0000-00-00', 'laki-laki', 'ghjkl', 'ghjk', 'Sarjana', 'fghj@dfghj', 'ghjk', '56789'),
(33, 'testapa', '6789', '2020-01-21', '2020-02-10 18:54:48', 'asdsads', '0000-00-00', 'laki-laki', 'Bandung', 'Cianjur', 'Diploma', 'asd@ad', 'nanti', '123456789123'),
(34, 'test foto', '12324', '2020-02-11', '2020-02-11 08:40:29', 'Bandung', '0000-00-00', 'perempuan', 'zxm', 'Cianjur', 'Diploma', 'foto@foto', '', '765483749123'),
(35, 'foto lagi', '123', '2020-02-11', '2020-02-11 08:43:15', 'sumedang', '0000-00-00', 'laki-laki', 'Bandung', 'Cianjur', 'Sarjana', 'lagi@lagi', 'cleint.png', '123456789123'),
(37, 'Richcy Dian Sukma', '3273060505980001', '2020-03-02', '2020-02-23 19:15:10', 'Bandung', '0000-00-00', 'laki-laki', 'Jl. Teluk Buyung No. 3 RT 03 RW 03 Kelurahan Arjuna Kecamatan Cicendo Kota Bandung', 'Komplek Taman Cileunyi Blok 2E No. 334 Desa Cileunyi Kulon Kecamatan Cileunyi Kabupaten Bandung', 'Sarjana', 'richcyveliz2@gmail.com', 'coba.png', '087700221261'),
(39, 'tgl lahir', 'asda', '2020-02-25', '2020-02-23 20:54:11', 'asda', '2020-02-04', 'perempuan', 'asd', 'asd', 'Diploma', 'asasd@sf', '', 'asd'),
(41, 'antin', '123', '2020-01-02', '2020-02-27 19:30:58', 'Bandung', '1998-01-01', 'perempuan', 'Bandung', 'xvbnm', 'Sarjana', 'antin@khdksd', 'asdd.png', '098765432198');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level_user` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level_user`) VALUES
(1, 'richcy', 'richcy', 'owner'),
(2, 'dian', 'dian', 'staff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `murid`
--
ALTER TABLE `murid`
  ADD PRIMARY KEY (`id_murid`);

--
-- Indexes for table `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD PRIMARY KEY (`id_pendaftar`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `murid`
--
ALTER TABLE `murid`
  MODIFY `id_murid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pendaftar`
--
ALTER TABLE `pendaftar`
  MODIFY `id_pendaftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
