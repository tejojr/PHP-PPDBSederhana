-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 19, 2018 at 10:14 PM
-- Server version: 10.0.34-MariaDB-0ubuntu0.16.04.1
-- PHP Version: 7.0.28-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(5) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `uname` varchar(40) NOT NULL,
  `pass` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `uname`, `pass`) VALUES
(1, 'Ammar Annajih Pasifky', 'admin', '660f2b89e0466e4666201d7cce3cd4d9'),
(2, 'Rasyid Salman', 'rasyid', 'bae46ce6405d58fec5eb87a145248a16'),
(3, 'Wasis Ramadhan', 'wasis', '054d4a4653a16b49c49c49e000075d10'),
(4, 'Juon', 'admin', 'c4685b3361a64ded9db11f1b05819441');

-- --------------------------------------------------------

--
-- Table structure for table `agama`
--

CREATE TABLE `agama` (
  `id` int(2) NOT NULL,
  `nama` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agama`
--

INSERT INTO `agama` (`id`, `nama`) VALUES
(1, 'Islam'),
(2, 'Kristen'),
(3, 'Katholik'),
(4, 'Hindu'),
(5, 'Budha'),
(6, 'Khong Huch');

-- --------------------------------------------------------

--
-- Table structure for table `buku_tamu`
--

CREATE TABLE `buku_tamu` (
  `id` int(5) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `email` varchar(20) NOT NULL,
  `judul` varchar(40) NOT NULL,
  `pesan` text NOT NULL,
  `tanggal` date NOT NULL,
  `ip` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Stand-in structure for view `calon_siswa`
--
CREATE TABLE `calon_siswa` (
`nisn` int(10)
,`nama` varchar(40)
,`jk` enum('L','P')
,`tmp_lahir` varchar(20)
,`tgl_lahir` date
,`alamat` varchar(90)
,`agama` varchar(10)
,`hp` varchar(13)
,`email` varchar(40)
,`asal_sek` varchar(30)
,`almt_sek` varchar(90)
,`mtk` int(3)
,`b_indo` int(3)
,`b_ing` int(3)
,`ipa` int(3)
,`total` int(4)
,`ayah` varchar(40)
,`p_ayah` varchar(40)
,`ibu` varchar(40)
,`p_ibu` varchar(40)
,`no_telp` varchar(13)
,`alamatOrtu` varchar(90)
);

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id` int(3) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `f_header`
--

CREATE TABLE `f_header` (
  `id` int(3) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `deskripsi` varchar(99) NOT NULL,
  `background` varchar(240) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `f_header`
--

INSERT INTO `f_header` (`id`, `nama`, `deskripsi`, `background`) VALUES
(1, 'SMP N 1 Kucing POi', 'Lorem Ipsum Doromghj', '1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `f_kontak`
--

CREATE TABLE `f_kontak` (
  `id` int(3) NOT NULL,
  `maps` varchar(500) NOT NULL,
  `jalan` varchar(100) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `website` varchar(40) NOT NULL,
  `fax` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `f_kontak`
--

INSERT INTO `f_kontak` (`id`, `maps`, `jalan`, `no_hp`, `website`, `fax`, `email`) VALUES
(1, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.8048801133978!2d110.59851331428419!3d-7.70407657844182!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a4409a3264d25%3A0xc22904099a0c2971!2sRSPD+Klaten!5e0!3m2!1sen!2sid!4v1520207197097', 'Apa Hayuuuuu', '0696969', 'www.CodeMendoan.blogspot.com', '0909909', 'apa@hayo.oo');

-- --------------------------------------------------------

--
-- Table structure for table `f_tentang`
--

CREATE TABLE `f_tentang` (
  `id` int(3) NOT NULL,
  `sejarah` tinytext NOT NULL,
  `gbr` varchar(240) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `f_tentang`
--

INSERT INTO `f_tentang` (`id`, `sejarah`, `gbr`, `visi`, `misi`) VALUES
(1, 'qwertyuiops;zkjkjkasjaksjaksj askjaskajskajskas asasaksaksja askajsanlhaldals caldha adhaldakla maklahdkalanakldkadnakl amdaldal sdasldhl', '4.jpg', '1. Mengembngkan IT\r\n2. Memjukan bangunan', '1. Mengembngkan IT\r\n2. Memjukan bangunan');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id` int(3) NOT NULL,
  `nisn` int(10) NOT NULL,
  `mtk` int(3) NOT NULL,
  `b_indo` int(3) NOT NULL,
  `b_ing` int(3) NOT NULL,
  `ipa` int(3) NOT NULL,
  `total` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id`, `nisn`, `mtk`, `b_indo`, `b_ing`, `ipa`, `total`) VALUES
(12, 1, 100, 100, 100, 100, 400),
(13, 2147483647, 100, 100, 100, 100, 400),
(14, 1232, 100, 100, 100, 100, 400),
(15, 82, 50, 90, 90, 50, 280),
(16, 1008, 100, 85, 70, 90, 345),
(17, 109, 100, 80, 90, 70, 340);

-- --------------------------------------------------------

--
-- Table structure for table `ortu`
--

CREATE TABLE `ortu` (
  `id` int(5) NOT NULL,
  `nisn` int(10) NOT NULL,
  `ayah` varchar(40) NOT NULL,
  `p_ayah` varchar(40) NOT NULL,
  `ibu` varchar(40) NOT NULL,
  `p_ibu` varchar(40) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `alamat` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ortu`
--

INSERT INTO `ortu` (`id`, `nisn`, `ayah`, `p_ayah`, `ibu`, `p_ibu`, `no_telp`, `alamat`) VALUES
(9, 1, 'Wasis', 'Pro-gamer  ', 'Rasyid  ', 'Ngelindur  ', '082123212311', 'Purbalingga'),
(10, 2147483647, 'Gunawan', 'Wiraswasta', 'Siti', 'Wiraswasta', '0816482749891', 'Jl. Prambanan No. 53 Pandean'),
(11, 1232, 'dsds', 'wqwq', 'dsds', 'csds', 'ds', 'dsds'),
(12, 82, 'awd', 'wjaid', 'awdaw', 'dawihdw', '28492849', 'jadwijdaiwj'),
(13, 1008, 'Herman', 'Guru', 'Siti', 'Ibu Rumah Tangga', '0819020930192', 'Jl. Panglima Mawar'),
(14, 109, 'Herman', 'Tani', 'Jinah', 'Ibu Rumh Tangga', '0819273294082', 'Jl. Kudus');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftar`
--

CREATE TABLE `pendaftar` (
  `nisn` int(10) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `tmp_lahir` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(90) NOT NULL,
  `id_agama` int(2) NOT NULL,
  `hp` varchar(13) NOT NULL,
  `email` varchar(40) NOT NULL,
  `asal_sek` varchar(30) NOT NULL,
  `almt_sek` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftar`
--

INSERT INTO `pendaftar` (`nisn`, `nama`, `jk`, `tmp_lahir`, `tgl_lahir`, `alamat`, `id_agama`, `hp`, `email`, `asal_sek`, `almt_sek`) VALUES
(1, 'QWERTY', 'L', 'Purbalingga', '2004-08-08', 'Kemangkon', 4, '06571344859', 'ammar.fiky@gmail.com', 'SD Negeri 1 Purbalingga  ', 'Jalan ala  '),
(82, 'AJI', 'L', 'Madiun', '2002-02-09', 'jadwijdaiwj', 3, '23247247284', 'ahdhw@hfha.com', 'adwiawh', 'hadwhi'),
(109, 'AMMAR', 'L', 'Jepara', '0000-00-00', 'Jl. Kudus', 1, '081920918292', 'Ammar@gmail.com', 'SDN 1 Jepara', 'Jl. Buntu'),
(1008, 'AMMAR', 'L', 'Jepara', '2002-09-20', 'Jl. Panglima Mawar', 5, '0813294029892', 'ammar@gmail.com', 'SDN 1 Jepara', 'Jl. Paran'),
(1232, 'AADA', 'L', 'sasasa', '2008-08-01', 'dsds', 4, '567890', 'Aa@dsds', 'asas', 'assa'),
(2147483647, 'HAFID', 'L', 'Madiun', '2000-09-05', 'Jl. Prambanan No. 53 Pandean', 1, '089209291829', 'hafid@gmail.com', 'SDN Mejayan 1', 'Jl. Panglima Sudirman No. 20 Kec. Mejayan');

--
-- Triggers `pendaftar`
--
DELIMITER $$
CREATE TRIGGER `after_update` AFTER UPDATE ON `pendaftar` FOR EACH ROW BEGIN
  INSERT INTO riwayat (keterangan, USER, old_data, new_data)
  VALUES (CONCAT('Update data pendaftar, nisn = ', NEW.nisn), USER(), NEW.nama, old.nama);
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `before_delete` BEFORE DELETE ON `pendaftar` FOR EACH ROW BEGIN
  INSERT INTO riwayat (keterangan, USER, old_data)
  VALUES (CONCAT('Delete data dari tabel pendaftar, nisn = ', OLD.nisn), USER(), OLD.nama);
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `setelah_simpan` AFTER INSERT ON `pendaftar` FOR EACH ROW BEGIN
  INSERT INTO riwayat (keterangan, user, new_data)
  VALUES (CONCAT('Insert data ke tabel pendaftar, nisn = ', NEW.nisn), USER(), NEW.nama);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `riwayat`
--

CREATE TABLE `riwayat` (
  `keterangan` text NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user` varchar(50) NOT NULL DEFAULT '',
  `old_data` varchar(25) NOT NULL DEFAULT '',
  `new_data` varchar(25) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `riwayat`
--

INSERT INTO `riwayat` (`keterangan`, `datetime`, `user`, `old_data`, `new_data`) VALUES
('Insert data ke tabel pendaftar, nisn = 32323', '2018-03-01 06:37:38', 'root@localhost', '', 'sddsds'),
('Update data pendaftar, nisn = 32323', '2018-03-01 06:45:25', 'root@localhost', 'Peang', 'sddsds'),
('Delete data dari tabel pendaftar, nisn = 32323', '2018-03-01 06:45:29', 'root@localhost', 'Peang', ''),
('Insert data ke tabel pendaftar, nisn = 0', '2018-03-01 08:13:28', 'root@localhost', '', 'WEWSTRD'),
('Delete data dari tabel pendaftar, nisn = 0', '2018-03-01 08:17:00', 'root@localhost', 'WEWSTRD', ''),
('Insert data ke tabel pendaftar, nisn = 23728328', '2018-03-01 08:18:14', 'root@localhost', '', 'RASYID SALMAN'),
('Update data pendaftar, nisn = 1', '2018-03-02 03:16:37', 'root@localhost', 'AMMAR ANNAJIH PASIFIKY', 'AMMAR ANNAJIH PASIFIKY'),
('Insert data ke tabel pendaftar, nisn = 12345', '2018-03-02 17:33:17', 'root@localhost', '', 'SDSD'),
('Delete data dari tabel pendaftar, nisn = 12345', '2018-03-02 17:34:15', 'root@localhost', 'SDSD', ''),
('Insert data ke tabel pendaftar, nisn = 123451', '2018-03-02 17:34:25', 'root@localhost', '', 'SDSD'),
('Delete data dari tabel pendaftar, nisn = 123451', '2018-03-02 17:35:46', 'root@localhost', 'SDSD', ''),
('Insert data ke tabel pendaftar, nisn = 123451', '2018-03-02 17:35:50', 'root@localhost', '', 'SDSD'),
('Insert data ke tabel pendaftar, nisn = 1234511', '2018-03-03 02:25:48', 'root@localhost', '', 'KECOA'),
('Insert data ke tabel pendaftar, nisn = 99090', '2018-03-03 02:59:37', 'root@localhost', '', 'ETSA'),
('Insert data ke tabel pendaftar, nisn = 0', '2018-03-03 03:41:06', 'root@localhost', '', 'KJKSJDK'),
('Delete data dari tabel pendaftar, nisn = 0', '2018-03-03 03:41:46', 'root@localhost', 'KJKSJDK', ''),
('Delete data dari tabel pendaftar, nisn = 99090', '2018-03-03 03:50:28', 'root@localhost', 'ETSA', ''),
('Insert data ke tabel pendaftar, nisn = 1314112008', '2018-03-05 03:37:00', 'root@localhost', '', 'PEANG PENJOL'),
('Delete data dari tabel pendaftar, nisn = 1', '2018-03-05 07:27:24', 'root@localhost', 'AMMAR ANNAJIH PASIFIKY', ''),
('Delete data dari tabel pendaftar, nisn = 123451', '2018-03-05 07:27:26', 'root@localhost', 'SDSD', ''),
('Delete data dari tabel pendaftar, nisn = 1234511', '2018-03-05 07:27:27', 'root@localhost', 'KECOA', ''),
('Delete data dari tabel pendaftar, nisn = 23728328', '2018-03-05 07:27:30', 'root@localhost', 'RASYID SALMAN', ''),
('Delete data dari tabel pendaftar, nisn = 909090921', '2018-03-05 07:27:31', 'root@localhost', 'ANDIRA DWI PRASETYAWAN', ''),
('Delete data dari tabel pendaftar, nisn = 1314112008', '2018-03-05 07:27:34', 'root@localhost', 'PEANG PENJOL', ''),
('Insert data ke tabel pendaftar, nisn = 1', '2018-03-05 08:37:06', 'root@localhost', '', 'AMMAR ANNAJIH PASIFIKY'),
('Update data pendaftar, nisn = 1', '2018-03-05 08:40:19', 'root@localhost', 'AMMAR ANNAJIH PASIFIKY', 'AMMAR ANNAJIH PASIFIKY'),
('Update data pendaftar, nisn = 1', '2018-03-05 08:40:46', 'root@localhost', 'QWERTY', 'AMMAR ANNAJIH PASIFIKY'),
('Insert data ke tabel pendaftar, nisn = 2147483647', '2018-03-06 03:55:34', 'root@localhost', '', 'HAFID'),
('Insert data ke tabel pendaftar, nisn = 1232', '2018-03-06 04:11:26', 'root@localhost', '', 'AADA'),
('Insert data ke tabel pendaftar, nisn = 82', '2018-03-06 04:13:42', 'root@localhost', '', 'AJI'),
('Insert data ke tabel pendaftar, nisn = 1008', '2018-03-06 09:06:18', 'root@localhost', '', 'AMMAR'),
('Insert data ke tabel pendaftar, nisn = 109', '2018-03-06 09:08:52', 'root@localhost', '', 'AMMAR');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(5) NOT NULL,
  `buka_daftar` datetime NOT NULL,
  `tutup_daftar` datetime NOT NULL,
  `buka_pengumuman` datetime NOT NULL,
  `tutup_pengumuman` datetime NOT NULL,
  `kuota` varchar(5) NOT NULL,
  `caradaftar` text NOT NULL,
  `syaratdaftar` text NOT NULL,
  `kunci` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `buka_daftar`, `tutup_daftar`, `buka_pengumuman`, `tutup_pengumuman`, `kuota`, `caradaftar`, `syaratdaftar`, `kunci`) VALUES
(1, '2018-03-02 01:00:00', '2018-03-07 01:00:00', '2018-03-03 01:00:00', '2018-03-08 01:00:00', '5', '1. masuk Ke Tab penddaftaran\r\n2. lll\r\n3. sdsds', '1. Lulus SD/MI sederajat\r\n2.  ppppp', '1');

-- --------------------------------------------------------

--
-- Structure for view `calon_siswa`
--
DROP TABLE IF EXISTS `calon_siswa`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `calon_siswa`  AS  select `pendaftar`.`nisn` AS `nisn`,`pendaftar`.`nama` AS `nama`,`pendaftar`.`jk` AS `jk`,`pendaftar`.`tmp_lahir` AS `tmp_lahir`,`pendaftar`.`tgl_lahir` AS `tgl_lahir`,`pendaftar`.`alamat` AS `alamat`,`agama`.`nama` AS `agama`,`pendaftar`.`hp` AS `hp`,`pendaftar`.`email` AS `email`,`pendaftar`.`asal_sek` AS `asal_sek`,`pendaftar`.`almt_sek` AS `almt_sek`,`nilai`.`mtk` AS `mtk`,`nilai`.`b_indo` AS `b_indo`,`nilai`.`b_ing` AS `b_ing`,`nilai`.`ipa` AS `ipa`,`nilai`.`total` AS `total`,`ortu`.`ayah` AS `ayah`,`ortu`.`p_ayah` AS `p_ayah`,`ortu`.`ibu` AS `ibu`,`ortu`.`p_ibu` AS `p_ibu`,`ortu`.`no_telp` AS `no_telp`,`ortu`.`alamat` AS `alamatOrtu` from (((`pendaftar` join `agama` on((`pendaftar`.`id_agama` = `agama`.`id`))) join `nilai` on((`pendaftar`.`nisn` = `nilai`.`nisn`))) join `ortu` on((`pendaftar`.`nisn` = `ortu`.`nisn`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agama`
--
ALTER TABLE `agama`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buku_tamu`
--
ALTER TABLE `buku_tamu`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `f_header`
--
ALTER TABLE `f_header`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `f_kontak`
--
ALTER TABLE `f_kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `f_tentang`
--
ALTER TABLE `f_tentang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nisn` (`nisn`);

--
-- Indexes for table `ortu`
--
ALTER TABLE `ortu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nisn` (`nisn`);

--
-- Indexes for table `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD PRIMARY KEY (`nisn`),
  ADD KEY `id_agama` (`id_agama`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `agama`
--
ALTER TABLE `agama`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `buku_tamu`
--
ALTER TABLE `buku_tamu`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `f_header`
--
ALTER TABLE `f_header`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `f_kontak`
--
ALTER TABLE `f_kontak`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `f_tentang`
--
ALTER TABLE `f_tentang`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `ortu`
--
ALTER TABLE `ortu`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `nilai_ibfk_1` FOREIGN KEY (`nisn`) REFERENCES `pendaftar` (`nisn`) ON DELETE CASCADE;

--
-- Constraints for table `ortu`
--
ALTER TABLE `ortu`
  ADD CONSTRAINT `ortu_ibfk_1` FOREIGN KEY (`nisn`) REFERENCES `pendaftar` (`nisn`) ON DELETE CASCADE;

--
-- Constraints for table `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD CONSTRAINT `pendaftar_ibfk_1` FOREIGN KEY (`id_agama`) REFERENCES `agama` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
