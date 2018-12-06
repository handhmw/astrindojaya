-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2018 at 09:04 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `astrindojaya`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_agama`
--

CREATE TABLE `tb_agama` (
  `id_agama` int(11) NOT NULL,
  `agama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_agama`
--

INSERT INTO `tb_agama` (`id_agama`, `agama`) VALUES
(1, 'ISLAM'),
(2, 'KRISTEN'),
(3, 'PROTESTANT'),
(4, 'HINDU'),
(5, 'BUDHA'),
(6, 'KATOLIK'),
(7, 'KONGHUCU');

-- --------------------------------------------------------

--
-- Table structure for table `tb_all_mpp`
--

CREATE TABLE `tb_all_mpp` (
  `id_allmpp` int(20) NOT NULL,
  `bulan_allmpp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_counter`
--

CREATE TABLE `tb_counter` (
  `ip` varchar(2050) NOT NULL,
  `date` date NOT NULL,
  `hits` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_counter`
--

INSERT INTO `tb_counter` (`ip`, `date`, `hits`) VALUES
('10.88.25.1', '2016-01-16', 11),
('10.88.25.2', '2016-01-16', 3),
('10.88.25.3', '2016-01-17', 4),
('10.88.25.4', '2016-01-16', 11),
('10.88.25.5', '2016-02-16', 3),
('10.88.25.6', '2016-02-17', 4),
('10.88.25.10', '2016-02-23', 2),
('10.88.25.15', '2016-02-23', 1),
('10.88.25.13', '2016-03-16', 11),
('10.88.25.1', '2016-03-16', 3),
('10.88.25.5', '2016-03-17', 4),
('10.88.25.8', '2016-03-16', 11),
('10.88.25.10', '2016-03-16', 3),
('10.88.25.19', '2016-03-17', 4),
('10.88.25.27', '2016-04-23', 2),
('10.88.25.50', '2016-04-23', 1),
('10.88.25.6', '2016-04-16', 3),
('10.88.25.9', '2016-05-17', 4),
('10.88.25.11', '2016-05-23', 2),
('10.88.25.12', '2016-05-23', 1),
('10.88.25.16', '2016-05-16', 11),
('10.88.25.20', '2016-05-16', 3),
('10.88.25.32', '2016-06-17', 4),
('10.88.25.1', '2016-06-16', 11),
('10.88.25.35', '2016-06-16', 3),
('10.88.25.36', '2016-07-17', 4),
('10.88.25.26', '2016-07-23', 2),
('10.88.25.6', '2016-07-16', 3),
('10.88.25.9', '2016-08-17', 4),
('10.88.25.11', '2016-08-23', 2),
('10.88.25.12', '2016-08-23', 1),
('10.88.25.16', '2016-08-16', 11),
('10.88.25.20', '2016-08-06', 3),
('10.88.25.32', '2016-09-17', 4),
('10.88.25.1', '2016-09-16', 11),
('10.88.25.35', '2016-09-16', 3),
('10.88.25.36', '2016-09-17', 4),
('10.88.25.26', '2016-09-23', 2),
('10.88.25.16', '2016-10-16', 11),
('10.88.25.20', '2016-10-16', 3),
('10.88.25.32', '2016-10-17', 4),
('10.88.25.1', '2016-10-16', 11),
('10.88.25.35', '2016-11-16', 3),
('10.88.25.36', '2016-11-17', 4),
('10.88.25.26', '2016-11-23', 2),
('10.88.25.15', '2016-11-23', 1),
('10.88.25.13', '2016-12-16', 11),
('10.88.25.1', '2016-12-16', 3),
('10.88.25.5', '2016-12-17', 4),
('10.88.25.8', '2016-12-16', 11),
('10.88.25.10', '2016-12-16', 3),
('10.88.25.19', '2016-12-17', 4),
('10.88.25.27', '2016-12-23', 2),
('10.88.25.50', '2016-12-23', 1),
('10.88.25.6', '2016-12-16', 3),
('10.88.25.9', '2016-12-17', 4),
('10.88.25.11', '2016-12-23', 2),
('10.88.25.12', '2016-12-23', 1),
('10.88.25.20', '2016-12-25', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_departemen`
--

CREATE TABLE `tb_departemen` (
  `id` varchar(20) NOT NULL,
  `departemen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_departemen`
--

INSERT INTO `tb_departemen` (`id`, `departemen`) VALUES
('DPT-0001', 'AUDIT'),
('DPT-0002', 'MARKETING'),
('DPT-0003', 'PURCHASING'),
('DPT-0004', 'SALES'),
('DPT-0005', 'HR/GA'),
('DPT-0006', 'FINANCE'),
('DPT-0007', 'MARKETING SUPPORT'),
('DPT-0008', 'IT'),
('DPT-0009', 'LOGISTIK'),
('DPT-0010', 'OPERATIONAL'),
('DPT-0011', 'QA');

-- --------------------------------------------------------

--
-- Table structure for table `tb_divisi`
--

CREATE TABLE `tb_divisi` (
  `id` varchar(20) NOT NULL,
  `unik` varchar(10) DEFAULT NULL,
  `divisi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_divisi`
--

INSERT INTO `tb_divisi` (`id`, `unik`, `divisi`) VALUES
('DVS-0001', 'OPT', 'OPERATIONAL'),
('DVS-0002', 'SLS', 'SALES & MARKETING');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jabatan`
--

CREATE TABLE `tb_jabatan` (
  `id` varchar(20) NOT NULL,
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jabatan`
--

INSERT INTO `tb_jabatan` (`id`, `jabatan`) VALUES
('JBT-0001', 'ACCOUNTING'),
('JBT-0002', 'ADMIN FINANCE'),
('JBT-0003', 'ADMIN LOGISTIK'),
('JBT-0004', 'ADMIN SALES'),
('JBT-0005', 'ADMIN SERVICE & IT SUPPORT'),
('JBT-0006', '	\r\nTECHNICAL MARKETING SUPPORT'),
('JBT-0007', 'ADMIN TECHNICAL SUPPORT'),
('JBT-0008', 'AUDIT MANAGER'),
('JBT-0009', 'BRANCH MANAGER'),
('JBT-0010', 'CORPORATE ACCOUNT EXECUTIVE'),
('JBT-0011', 'DESIGN GRAPHIC'),
('JBT-0012', 'RECEPTIONIST'),
('JBT-0013', 'FINANCE'),
('JBT-0014', 'FINANCE AP'),
('JBT-0015', 'HELPER'),
('JBT-0016', 'LOGISTIK SUPERVISOR'),
('JBT-0017', 'MARKETING COMMUNICATION'),
('JBT-0018', 'MARKETING COMMUNICATION EVENT'),
('JBT-0019', 'MARKETING COMMUNICATION MANAGER'),
('JBT-0020', 'MARKETING SPECIALIST'),
('JBT-0021', 'PRE SALES ENGINEER'),
('JBT-0022', 'PRODUCT MANAGER'),
('JBT-0023', 'SALES EXECUTIVE'),
('JBT-0024', 'SALES MANAGER'),
('JBT-0025', 'SPB'),
('JBT-0026', 'ACCOUNT EXECUTIVE MANAGER');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jk`
--

CREATE TABLE `tb_jk` (
  `id` varchar(5) NOT NULL,
  `jk` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jk`
--

INSERT INTO `tb_jk` (`id`, `jk`) VALUES
('1', 'LAKI-LAKI'),
('2', 'PEREMPUAN');

-- --------------------------------------------------------

--
-- Table structure for table `tb_karyawan`
--

CREATE TABLE `tb_karyawan` (
  `id_kry` varchar(50) NOT NULL,
  `nama_kry` varchar(50) DEFAULT NULL,
  `nik_kry` varchar(20) DEFAULT NULL,
  `jabatan_kry` varchar(30) NOT NULL,
  `pangkat_kry` varchar(30) NOT NULL,
  `divisi_kry` varchar(30) NOT NULL,
  `dep_kry` varchar(50) NOT NULL,
  `lokasi_kry` varchar(50) NOT NULL,
  `panggilan_kry` varchar(50) NOT NULL,
  `identitas_kry` varchar(30) NOT NULL,
  `jk_kry` varchar(10) NOT NULL,
  `tempat_lahir_kry` varchar(50) NOT NULL,
  `tgl_lahir_kry` varchar(20) NOT NULL,
  `negara_kry` varchar(30) NOT NULL,
  `agama_kry` varchar(30) NOT NULL,
  `npwp_kry` varchar(30) NOT NULL,
  `alamat_kry` varchar(100) NOT NULL,
  `tlp_rumah_kry` varchar(30) DEFAULT NULL,
  `no_hp_kry` varchar(30) NOT NULL,
  `tgl_masuk_kry` varchar(30) NOT NULL,
  `status_kerja_kry` varchar(30) NOT NULL,
  `status_nikah_kry` varchar(20) NOT NULL,
  `email_kry` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_karyawan`
--

INSERT INTO `tb_karyawan` (`id_kry`, `nama_kry`, `nik_kry`, `jabatan_kry`, `pangkat_kry`, `divisi_kry`, `dep_kry`, `lokasi_kry`, `panggilan_kry`, `identitas_kry`, `jk_kry`, `tempat_lahir_kry`, `tgl_lahir_kry`, `negara_kry`, `agama_kry`, `npwp_kry`, `alamat_kry`, `tlp_rumah_kry`, `no_hp_kry`, `tgl_masuk_kry`, `status_kerja_kry`, `status_nikah_kry`, `email_kry`) VALUES
('1', 'SUPRIYATNA', '140901 ', 'MARKETING COMMUNICATION EVENT', 'MANAGER', 'OPERATIONAL', 'AUDIT', 'PUSAT', 'nama', '3276060303770000', 'LAKI-LAKI', 'DEPOK', '29-Mar-77', 'INDONESIA', 'ISLAM', '70.913.495.1-412.000', 'JL.MARGONDA RAYA GG.KERAMAT BATAS RT.003 RW.007 KEL.KEMIRIMUKA KEC.BEJI DEPOK', 'telpon', '087750500441', '1-Sep-14', 'KARYAWAN TETAP', 'MENIKAH', 'handrihmw@gmail.com'),
('2', 'MARIA HENDRADJAJA', '061201 ', 'MARKETING COMMUNICATION MANAGE', 'MANAGER', 'OPERATIONAL', 'PURCHASING', 'PUSAT', 'nama', '3173047103810011', 'LAKI-LAKI', 'JAKARTA', '31-Mar-81', 'INDONESIA', 'KATOLIK', '59.410.545.4-033.000', 'GG. BETET DALAM NO.20 RT.009 RW.002 TANAH SEREAL-TAMBORA JAKARTA BARAT', 'telpon', '0818-901109', '18-Dec-06', 'MAGANG', 'SINGLE', 'ria@astrindo.co.id'),
('3', 'YENI APRIANI', '070503 ', 'SALES EXECUTIVE', 'STAFF', 'SALES & MARKETING', 'SALES', 'Pusat', 'nama', '3201196704880001', 'F', 'JAKARTA', '10-Apr-88', 'INDONESIA', 'ISLAM', '81.172.229.7-004.000', 'JATINEGARA LIO, KAMPUNG LIO NO.34 RT.04 RW.04 JATINEGARA CAKUNG JAKARTA TIMUR DKI JAKARTA', 'telpon', '0812-61344557', '7-Apr-10', 'KARYAWAN TETAP', 'MENIKAH', 'yenni.apriani@astrindo.co.id'),
('4', 'MARLIANA', '130102 ', 'ACCOUNT EXECUTIVE MANAGER', 'MANAGER', 'SALES & MARKETING', 'SALES', 'Pusat', 'nama', '3173046603880006', 'F', 'JAKARTA', '26-Mar-88', 'INDONESIA', 'PROTESTANT', '34.209.136.0-033.000', 'TANAH SEREAL XVIII KRAMAT JALAN 1 NO 14 RT 002/ RW 07 JAKARTA BARAT', 'telpon', '0856-7000225', '21-Jan-13', 'KARYAWAN TETAP', 'MENIKAH', 'marliana@astrindo.co.id'),
('6', 'MARCO WIJAYA', '160601 ', 'PRODUCT MANAGER', 'MANAGER', 'SALES & MARKETING', 'MARKETING', 'Pusat', 'nama', '3173042608920011', 'M', 'JAKARTA', '12/11/1992', 'INDONESIA', 'PROTESTANT', '70.048.108.8-033.000', 'JL TSS SETIAMASA IV RT 007 RW 001 KEL DURI SELATAN KEC TAMBORA JAKARTA BARAT', 'telpon', '0812-97284078', '1-Jun-16', 'KARYAWAN TETAP', 'SINGLE', 'marco.wijaya@astrindo.co.id'),
('7', 'FAIZAL REZA', '140801 ', 'AUDIT STAFF', 'STAFF', 'OPERATIONAL', 'AUDIT', 'Pusat', 'nama', '3276042206820001', 'M', 'JAKARTA', '22-Jun-82', 'INDONESIA', 'ISLAM', '68.545.046.2-412.000', 'JL. RAYA PD.GEDE GG.GORDA RT.03 RW.01 NO.3 KEL.LUBANG BUAYA KEC.CIPAYUNG JAKARTA TIMUR', 'telpon', '0821-14663042', '4-Aug-14', 'KARYAWAN TETAP', 'MENIKAH', 'faizal.reza@astrindo.co.id'),
('8', 'MESNA MARISI MAGDALENA', '140706 ', 'A/R STAFF', 'STAFF', 'OPERATIONAL', 'FINANCE', 'Pusat', 'nama', '3175024211880005', 'F', 'JAKARTA', '12/11/2018', 'INDONESIA', 'PROTESTANT', '45.107.733.3-003.000', 'JL. KAYU MAS TENGAH NO.77 RT.11 RW.10 KEL. PULO GADUNG KEC. PULO GADUNG JAKARTA TIMUR', 'telpon', '0877-75521287', '10-Jul-14', 'KARYAWAN TETAP', 'SINGLE', 'finance-jkt2@astrindo.co.id'),
('EMP-0009', 'HANDRI', '189009', 'MARKETING COMMUNICATION', 'MANAGER', 'OPERATIONAL', 'MARKETING', 'PUSAT', 'da', '12', 'LAKI-LAKI', 'as', '06-11-2018', 'sa', 'KRISTEN', '12', 'as', '12', '087750500441', '05-11-2018', 'KARYAWAN KONTRAK', 'MENIKAH', 'handrihmw@gmail.com'),
('EMP-0010', 'SUTEJO', '14322', 'ADMIN SALES', 'STAFF', 'SALES & MARKETING', 'PURCHASING', 'CABANG SEMARANG', 'TEJO', '1', 'LAKI-LAKI', 'Q', '26-11-2018', 'Q', 'KRISTEN', '1', 'Q', '1', '1', '20-11-2018', 'KARYAWAN TETAP', 'MENIKAH', 'Q@mail.com'),
('EMP-0011', 'HERA', '43432', 'ADMIN TECHNICAL SUPPORT', 'SUPERVISOR', 'OPERATIONAL', 'MARKETING', 'CABANG SEMARANG', 'HERA', '321244332345554', 'PEREMPUAN', 'JAKARTA', '29-10-1975', 'INDONESIA', 'KRISTEN', '32123332111', 'JAKARTA', '02188273737', '087652524244', '15-05-2018', 'KARYAWAN TETAP', 'MENIKAH', 'hera@mail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tb_karyawan_baru`
--

CREATE TABLE `tb_karyawan_baru` (
  `id_pmhn` varchar(20) NOT NULL,
  `dep_pmhn` varchar(30) NOT NULL,
  `nama_pemohon_pmhn` varchar(30) NOT NULL,
  `jabatan_pemohon_pmhn` varchar(30) NOT NULL,
  `jabatan_pmhn` varchar(20) NOT NULL,
  `lokasi_pmhn` varchar(30) NOT NULL,
  `waktu_pmhn` varchar(20) NOT NULL,
  `status_kerja_pmhn` varchar(20) NOT NULL,
  `jumlah_pmhn` varchar(10) NOT NULL,
  `tanggal_pmhn` varchar(20) NOT NULL,
  `dasar_permohonan_pmhn` varchar(30) NOT NULL,
  `sumber_rekrutmen_pmhn` varchar(30) NOT NULL,
  `ringkasan_tugas_pmhn` varchar(100) NOT NULL,
  `gajih_pmhn` varchar(30) NOT NULL,
  `jk_pmhn` varchar(15) NOT NULL,
  `usia_pmhn` tinyint(5) NOT NULL,
  `pendidikan_pmhn` varchar(30) NOT NULL,
  `jurusan_pmhn` varchar(30) NOT NULL,
  `pengalaman_kerja_pmhn` varchar(100) NOT NULL,
  `bidang_pmhn` varchar(50) NOT NULL,
  `syarat_lain_pmhn` varchar(100) NOT NULL,
  `keterampilan_pmhn` varchar(100) NOT NULL,
  `tgl_bergabung_pmhn` varchar(15) NOT NULL,
  `office_equipment_pmhn` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_karyawan_baru`
--

INSERT INTO `tb_karyawan_baru` (`id_pmhn`, `dep_pmhn`, `nama_pemohon_pmhn`, `jabatan_pemohon_pmhn`, `jabatan_pmhn`, `lokasi_pmhn`, `waktu_pmhn`, `status_kerja_pmhn`, `jumlah_pmhn`, `tanggal_pmhn`, `dasar_permohonan_pmhn`, `sumber_rekrutmen_pmhn`, `ringkasan_tugas_pmhn`, `gajih_pmhn`, `jk_pmhn`, `usia_pmhn`, `pendidikan_pmhn`, `jurusan_pmhn`, `pengalaman_kerja_pmhn`, `bidang_pmhn`, `syarat_lain_pmhn`, `keterampilan_pmhn`, `tgl_bergabung_pmhn`, `office_equipment_pmhn`) VALUES
('NEW-0004', 'MARKETING SUPPORT', 'Q', 'Q', 'MARKETING COMMUNICAT', 'CABANG SEMARANG', '22-11-2018', 'KARYAWAN KONTRAK', '1', '29-11-2018', 'PERGANTIAN KARYAWAN RESIGN', 'DALAM PERUSAHAAN', 'Q', 'Q', 'LAKI-LAKI', 1, 'Q', 'Q', 'Q', 'Q', 'Q', 'Q', '28-11-2018', 'Q'),
('NEW-0005', 'IT', 'A', 'A', 'RECEPTIONIST', 'CABANG SEMARANG', '03-12-2018', 'MAGANG', '1', '13-11-2018', 'RENCANA / ANGGARAN TAHUNAN', 'LUAR PERUSAHAAN', 'A', 'A', 'LAKI-LAKI', 1, 'S2', 'A', 'A', 'A', 'A', 'A', '04-12-2018', 'A'),
('NEW-0006', 'MARKETING', 'XXX', 'XXX', 'FINANCE AP', 'CABANG SEMARANG', '06-12-2018', 'KARYAWAN KONTRAK', '1', '04-12-2018', 'PERGANTIAN KARYAWAN RESIGN', 'DALAM PERUSAHAAN', 'X', 'XXX', 'LAKI-LAKI', 1, 'S1', 'XXX', 'X', 'XXX', 'X', 'X', '02-12-2018', 'X');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kerja`
--

CREATE TABLE `tb_kerja` (
  `id` varchar(5) NOT NULL,
  `status_kerja` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kerja`
--

INSERT INTO `tb_kerja` (`id`, `status_kerja`) VALUES
('1', 'KARYAWAN TETAP'),
('2', 'KARYAWAN KONTRAK'),
('3', 'MAGANG');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mpp`
--

CREATE TABLE `tb_mpp` (
  `id_pp` varchar(20) NOT NULL,
  `jabatan_pp` varchar(50) NOT NULL,
  `dep_pp` varchar(50) NOT NULL,
  `area_pp` varchar(30) NOT NULL,
  `status_pp` varchar(30) NOT NULL,
  `jml_butuh_pp` int(5) NOT NULL,
  `sisa_pp` int(5) NOT NULL,
  `nama_pmh_pp` varchar(50) NOT NULL,
  `jabatan_pmh_pp` varchar(50) NOT NULL,
  `tgl_pmh_pp` varchar(20) NOT NULL,
  `tgl_tempo_pp` varchar(20) NOT NULL,
  `tgl_wawancara_pp` varchar(20) NOT NULL,
  `tgl_pmnh_pp` varchar(20) NOT NULL,
  `kcp_pmnh_pp` varchar(10) NOT NULL,
  `total_pp` int(20) NOT NULL,
  `tgl_masuk_pp` varchar(20) NOT NULL,
  `sumber_rek_pp` varchar(30) NOT NULL,
  `ket_pp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mpp`
--

INSERT INTO `tb_mpp` (`id_pp`, `jabatan_pp`, `dep_pp`, `area_pp`, `status_pp`, `jml_butuh_pp`, `sisa_pp`, `nama_pmh_pp`, `jabatan_pmh_pp`, `tgl_pmh_pp`, `tgl_tempo_pp`, `tgl_wawancara_pp`, `tgl_pmnh_pp`, `kcp_pmnh_pp`, `total_pp`, `tgl_masuk_pp`, `sumber_rek_pp`, `ket_pp`) VALUES
('MPP-0003', 'ADMIN SERVICE & IT SUPPORT', 'PURCHASING', '', 'N', 1, 1, 'DARTO', 'MARKETING COMMUNICATION', '15-11-2018', '27-11-2018', '27-11-2018', '26-11-2018', '3', 1, '20-11-2018', 'LUAR PERUSAHAAN', 'Q'),
('MPP-0004', 'MARKETING COMMUNICATION', 'IT', '', 'R', 1, 2, 'TAYO', 'MARKETING COMMUNICATION', '29-11-2018', '28-11-2018', '29-11-2018', '28-11-2018', '21', 2, '22-11-2018', 'DALAM PERUSAHAAN', 'ADA'),
('MPP-0005', 'CORPORATE ACCOUNT EXECUTIVE', 'PURCHASING', '', 'N', 3, 2, 'FERRY', 'ADMIN SERVICE & IT SUPPORT', '14-06-2018', '22-01-2018', '22-06-2017', '21-06-2017', '25', 2, '28-11-2018', 'DALAM PERUSAHAAN', 'ADA'),
('MPP-0006', 'DESIGN GRAPHIC', 'MARKETING', '', 'R', 2, 1, 'HERU', 'ADMIN SALES', '20-06-2018', '18-07-2018', '23-08-2018', '11-09-2018', '32', 1, '29-11-2018', 'DALAM PERUSAHAAN', 'ADA'),
('MPP-0007', 'FINANCE', 'FINANCE', '', 'N', 1, 1, 'SERA', 'ADMIN TECHNICAL SUPPORT', '21-06-2018', '17-07-2018', '16-08-2018', '10-09-2018', '33', 1, '07-11-2018', 'DALAM PERUSAHAAN', 'ADA'),
('MPP-0008', 'CORPORATE ACCOUNT EXECUTIVE', 'HR/GA', '910', 'N', 2, 1, 'DEMUSASHI', 'ADMIN LOGISTIK', '12-06-2018', '22-06-2017', '21-02-2018', '21-05-2018', '2121', 1, '04-12-2018', 'DALAM PERUSAHAAN', 'ADA');

-- --------------------------------------------------------

--
-- Table structure for table `tb_nikah`
--

CREATE TABLE `tb_nikah` (
  `id` varchar(5) NOT NULL,
  `status_nikah` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_nikah`
--

INSERT INTO `tb_nikah` (`id`, `status_nikah`) VALUES
('1', 'MENIKAH'),
('2', 'SINGLE');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pangkat`
--

CREATE TABLE `tb_pangkat` (
  `id` varchar(20) NOT NULL,
  `pangkat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pangkat`
--

INSERT INTO `tb_pangkat` (`id`, `pangkat`) VALUES
('PGK-0001', 'MANAGER'),
('PGK-0002', 'STAFF'),
('PGK-0003', 'OPERATOR'),
('PGK-0004', 'SUPERVISOR');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pemohon`
--

CREATE TABLE `tb_pemohon` (
  `id_pemohon` varchar(30) NOT NULL,
  `nama_pemohon` varchar(50) NOT NULL,
  `nik_pemohon` varchar(20) NOT NULL,
  `jabatan_pemohon` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pemohon`
--

INSERT INTO `tb_pemohon` (`id_pemohon`, `nama_pemohon`, `nik_pemohon`, `jabatan_pemohon`) VALUES
('ADJ-0002', 'MARCO WIJAYA', '160601 ', 'PRODUCT MANAGER'),
('ADJ-0004', 'MARLIANA SARI', '130102 ', 'ACCOUNT EXECUTIVE MANAGER');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pendidikan`
--

CREATE TABLE `tb_pendidikan` (
  `id` int(10) NOT NULL,
  `pendidikan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pendidikan`
--

INSERT INTO `tb_pendidikan` (`id`, `pendidikan`) VALUES
(1, 'S2'),
(2, 'S1'),
(3, 'D3'),
(4, 'SMA / SMA');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penilai`
--

CREATE TABLE `tb_penilai` (
  `id_penilai` varchar(20) NOT NULL,
  `nama_penilai` varchar(50) NOT NULL,
  `nik_penilai` varchar(20) NOT NULL,
  `jabatan_penilai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_penilai`
--

INSERT INTO `tb_penilai` (`id_penilai`, `nama_penilai`, `nik_penilai`, `jabatan_penilai`) VALUES
('VER-0002', 'SUPRIYATNA', '140901 ', 'RECEPTIONIST'),
('VER-0003', 'HANDRI', '189009', 'ADMIN SERVICE & IT SUPPORT');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penilaian`
--

CREATE TABLE `tb_penilaian` (
  `id_nl` varchar(20) NOT NULL,
  `nama_nl` varchar(50) NOT NULL,
  `nik_nl` varchar(20) NOT NULL,
  `dep_nl` varchar(50) NOT NULL,
  `tgl_masuk_nl` varchar(10) NOT NULL,
  `jabatan_nl` varchar(50) NOT NULL,
  `nama_penilai_nl` varchar(50) NOT NULL,
  `jabatan_penilai_nl` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_penilaian`
--

INSERT INTO `tb_penilaian` (`id_nl`, `nama_nl`, `nik_nl`, `dep_nl`, `tgl_masuk_nl`, `jabatan_nl`, `nama_penilai_nl`, `jabatan_penilai_nl`) VALUES
('ASM-0003', 'TAYO', '140801 ', 'AUDIT', '4-Aug-14', 'ACCOUNTING', 'MARLIANA', 'ACCOUNT EXECUTIVE MANAGER'),
('ASM-0004', 'MESNA MARISI MAGDALENA', '140706 ', 'FINANCE', '10-Jul-14', 'A/R STAFF', 'YENI APRIANI', 'SALES EXECUTIVE'),
('ASM-0005', 'Q', '1', 'AUDIT', '22-11-2018', 'ACCOUNTING', 'Q', 'ACCOUNTING');

-- --------------------------------------------------------

--
-- Table structure for table `tb_percobaan`
--

CREATE TABLE `tb_percobaan` (
  `id_cb` varchar(20) NOT NULL,
  `nama_cb` varchar(50) NOT NULL,
  `nik_cb` varchar(10) NOT NULL,
  `dep_cb` varchar(30) NOT NULL,
  `jabatan_cb` varchar(30) NOT NULL,
  `tgl_masuk_cb` varchar(10) NOT NULL,
  `jenis_cb` varchar(30) NOT NULL,
  `tgl_mulai_cb` varchar(10) NOT NULL,
  `tgl_selesai_cb` varchar(10) NOT NULL,
  `percobaan_cb` tinyint(5) NOT NULL,
  `catatan_hr_cb` varchar(100) NOT NULL,
  `catatan_atasan_cb` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_percobaan`
--

INSERT INTO `tb_percobaan` (`id_cb`, `nama_cb`, `nik_cb`, `dep_cb`, `jabatan_cb`, `tgl_masuk_cb`, `jenis_cb`, `tgl_mulai_cb`, `tgl_selesai_cb`, `percobaan_cb`, `catatan_hr_cb`, `catatan_atasan_cb`) VALUES
('TRY-0001', 'AADD', '1', 'AUDIT', 'ACCOUNTING', '28-11-2018', 'KARYAWAN KONTRAK', '21-11-2018', '21-11-2018', 1, 'B', 'B'),
('TRY-0002', 'QWERTY', '23', 'PURCHASING', 'ACCOUNTING', '22-11-2018', 'KARYAWAN TETAP', '22-11-2018', '22-11-2018', 2, 'A', 'A'),
('TRY-0003', 'A', '1', 'A', 'ADS', '04-12-2018', 'KARYAWAN TETAP', '08-10-2018', '04-12-2018', 2, 'A', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `tb_permohonan`
--

CREATE TABLE `tb_permohonan` (
  `id` tinyint(5) NOT NULL,
  `permohonan` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_permohonan`
--

INSERT INTO `tb_permohonan` (`id`, `permohonan`) VALUES
(1, 'RENCANA / ANGGARAN TAHUNAN'),
(2, 'PERGANTIAN KARYAWAN RESIGN'),
(3, 'PERGANTIAN KARYAWAN MUTASI');

-- --------------------------------------------------------

--
-- Table structure for table `tb_preq`
--

CREATE TABLE `tb_preq` (
  `id_preq` int(20) NOT NULL,
  `jns_preq` varchar(30) NOT NULL,
  `jml_preq` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_rekrutmen`
--

CREATE TABLE `tb_rekrutmen` (
  `id` tinyint(5) NOT NULL,
  `rekrutmen` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_rekrutmen`
--

INSERT INTO `tb_rekrutmen` (`id`, `rekrutmen`) VALUES
(1, 'DALAM PERUSAHAAN'),
(2, 'LUAR PERUSAHAAN'),
(3, 'Social Media'),
(4, 'Job Portal'),
(5, 'Referensi'),
(6, 'Job Fair');

-- --------------------------------------------------------

--
-- Table structure for table `tb_resign`
--

CREATE TABLE `tb_resign` (
  `id_rs` varchar(20) NOT NULL,
  `bulan_rs` varchar(20) NOT NULL,
  `nama_rs` varchar(50) NOT NULL,
  `pangkat_rs` varchar(30) NOT NULL,
  `jabatan_rs` varchar(50) NOT NULL,
  `dep_rs` varchar(30) NOT NULL,
  `tgl_masuk_rs` varchar(10) NOT NULL,
  `tgl_resign_rs` varchar(10) NOT NULL,
  `masa_bulan_rs` varchar(20) NOT NULL,
  `masa_tahun_rs` varchar(20) NOT NULL,
  `keterangan_rs` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_resign`
--

INSERT INTO `tb_resign` (`id_rs`, `bulan_rs`, `nama_rs`, `pangkat_rs`, `jabatan_rs`, `dep_rs`, `tgl_masuk_rs`, `tgl_resign_rs`, `masa_bulan_rs`, `masa_tahun_rs`, `keterangan_rs`) VALUES
('RSG-0001', '09-2018', 'ALBERTO', 'STAFF', 'MARKETING COMMUNICATION MANAGER', 'LOGISTIK', '12-06-2018', '08-11-2018', '1', '2', 'BAIK'),
('RSG-0002', '11-2018', 'MARIA HENDRADJAJA', 'MANAGER', 'MARKETING COMMUNICATION MANAGE', 'PURCHASING', '18-Dec-06', '14-11-2018', '23', '2', 'wfdewf');

-- --------------------------------------------------------

--
-- Table structure for table `tb_training`
--

CREATE TABLE `tb_training` (
  `id_tr` varchar(20) NOT NULL,
  `nama_pemohon_tr` varchar(50) NOT NULL,
  `nik_pemohon_tr` varchar(30) NOT NULL,
  `jabatan_pemohon_tr` varchar(30) NOT NULL,
  `dep_pemohon_tr` varchar(30) NOT NULL,
  `tgl_permohonan_tr` varchar(10) NOT NULL,
  `judul_training_tr` varchar(100) NOT NULL,
  `penyelenggara_tr` varchar(50) NOT NULL,
  `tgl_pelaksanaan_tr` varchar(10) NOT NULL,
  `tempat_pelaksanaan_tr` varchar(100) NOT NULL,
  `biaya_tr` varchar(30) NOT NULL,
  `pembayaran_tr` varchar(30) NOT NULL,
  `tgl_terima_tr` varchar(30) NOT NULL,
  `tgl_bayar_tr` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_training`
--

INSERT INTO `tb_training` (`id_tr`, `nama_pemohon_tr`, `nik_pemohon_tr`, `jabatan_pemohon_tr`, `dep_pemohon_tr`, `tgl_permohonan_tr`, `judul_training_tr`, `penyelenggara_tr`, `tgl_pelaksanaan_tr`, `tempat_pelaksanaan_tr`, `biaya_tr`, `pembayaran_tr`, `tgl_terima_tr`, `tgl_bayar_tr`) VALUES
('TRY-0002', 'Q', '2', 'MARKETING COMMUNICATION', 'QA', '19/12/2018', 'Q', 'Q', '04/12/2018', 'Q', '3', 'D', 'D', 'D'),
('TRY-0003', 'TAYO', '1', 'ACCOUNTING', 'AUDIT', '11/10/2018', 'ASASASAS', 'SASASASAS', '19/10/2018', 'ASASASAS', '12', 'ASASAS', '25/10/2018', '19/10/2018'),
('TRY-AST-0001', 'KAKAKADEK', '18094', 'PRODUCT MANAGER', 'PURCHASING', '11/10/2018', 'AD', 'AD', '19/10/2018', 'AD', '10000000', 'AD', '25/10/2018', '19/10/2018');

-- --------------------------------------------------------

--
-- Table structure for table `tb_unit`
--

CREATE TABLE `tb_unit` (
  `id` varchar(5) NOT NULL,
  `kode` varchar(20) NOT NULL,
  `unit` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_unit`
--

INSERT INTO `tb_unit` (`id`, `kode`, `unit`) VALUES
('1', 'HO', 'PUSAT'),
('2', '500', 'CABANG BALI'),
('3', '600', 'CABANG SEMARANG'),
('4', '700', 'CABANG MAKASSAR'),
('5', '800', 'CABANG MEDAN'),
('6', '910', 'CABANG BANJARMASIN');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` varchar(20) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(60) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL,
  `level` enum('admin','staff') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `name`, `email`, `password`, `level`) VALUES
('USR-AST-0001', 'admin', 'Handri Hermawan', 'satu@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
('USR-AST-0002', 'member', 'Ika Herawati', 'lima@mail.com', 'aa08769cdcb26674c6706093503ff0a3', 'staff'),
('USR-AST-0003', 'anin', 'Anindia', 'anin@mail.com', 'd9e7fa791825a4d7b41a58bcbecfd471', 'staff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_agama`
--
ALTER TABLE `tb_agama`
  ADD PRIMARY KEY (`id_agama`);

--
-- Indexes for table `tb_all_mpp`
--
ALTER TABLE `tb_all_mpp`
  ADD PRIMARY KEY (`id_allmpp`);

--
-- Indexes for table `tb_departemen`
--
ALTER TABLE `tb_departemen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_divisi`
--
ALTER TABLE `tb_divisi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_jk`
--
ALTER TABLE `tb_jk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  ADD PRIMARY KEY (`id_kry`),
  ADD UNIQUE KEY `id` (`id_kry`);

--
-- Indexes for table `tb_karyawan_baru`
--
ALTER TABLE `tb_karyawan_baru`
  ADD PRIMARY KEY (`id_pmhn`),
  ADD UNIQUE KEY `id` (`id_pmhn`);

--
-- Indexes for table `tb_kerja`
--
ALTER TABLE `tb_kerja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_mpp`
--
ALTER TABLE `tb_mpp`
  ADD PRIMARY KEY (`id_pp`);

--
-- Indexes for table `tb_nikah`
--
ALTER TABLE `tb_nikah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pangkat`
--
ALTER TABLE `tb_pangkat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pemohon`
--
ALTER TABLE `tb_pemohon`
  ADD PRIMARY KEY (`id_pemohon`);

--
-- Indexes for table `tb_pendidikan`
--
ALTER TABLE `tb_pendidikan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_penilai`
--
ALTER TABLE `tb_penilai`
  ADD PRIMARY KEY (`id_penilai`);

--
-- Indexes for table `tb_penilaian`
--
ALTER TABLE `tb_penilaian`
  ADD PRIMARY KEY (`id_nl`);

--
-- Indexes for table `tb_percobaan`
--
ALTER TABLE `tb_percobaan`
  ADD PRIMARY KEY (`id_cb`);

--
-- Indexes for table `tb_preq`
--
ALTER TABLE `tb_preq`
  ADD PRIMARY KEY (`id_preq`);

--
-- Indexes for table `tb_rekrutmen`
--
ALTER TABLE `tb_rekrutmen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_resign`
--
ALTER TABLE `tb_resign`
  ADD PRIMARY KEY (`id_rs`);

--
-- Indexes for table `tb_training`
--
ALTER TABLE `tb_training`
  ADD PRIMARY KEY (`id_tr`);

--
-- Indexes for table `tb_unit`
--
ALTER TABLE `tb_unit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_agama`
--
ALTER TABLE `tb_agama`
  MODIFY `id_agama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
