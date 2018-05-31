-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 25, 2018 at 12:41 PM
-- Server version: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jsmrhrd`
--

-- --------------------------------------------------------

--
-- Table structure for table `jsmrhrd_employee`
--

CREATE TABLE `jsmrhrd_employee` (
  `ID` int(11) NOT NULL,
  `NPP` varchar(5) NOT NULL,
  `NAMA` varchar(100) NOT NULL,
  `GRADE_ID` int(11) NOT NULL,
  `JABATAN_ID` text NOT NULL,
  `STATUS_KARYAWAN` int(11) NOT NULL,
  `STATUS_NIKAH` text NOT NULL,
  `DIMILIKI` int(11) NOT NULL,
  `DITANGGUNG` int(11) NOT NULL,
  `GENDER` varchar(1) NOT NULL,
  `LOCATION_ID` text NOT NULL,
  `TANGGAL_LAHIR` date NOT NULL,
  `MULAI_KERJA` date NOT NULL,
  `PENSIUN` date NOT NULL,
  `AGAMA_ID` text NOT NULL,
  `ID_PENDIDIKAN_DIAKUI` text NOT NULL,
  `ID_PENDIDIKAN_DIMILIKI` text NOT NULL,
  `GOLONGAN_DARAH_ID` text NOT NULL,
  `ALAMAT` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jsmrhrd_employee`
--

INSERT INTO `jsmrhrd_employee` (`ID`, `NPP`, `NAMA`, `GRADE_ID`, `JABATAN_ID`, `STATUS_KARYAWAN`, `STATUS_NIKAH`, `DIMILIKI`, `DITANGGUNG`, `GENDER`, `LOCATION_ID`, `TANGGAL_LAHIR`, `MULAI_KERJA`, `PENSIUN`, `AGAMA_ID`, `ID_PENDIDIKAN_DIAKUI`, `ID_PENDIDIKAN_DIMILIKI`, `GOLONGAN_DARAH_ID`, `ALAMAT`) VALUES
(1, '10313', 'JOHANNES MANCELLY', 1, '1', 1, '1', 2, 2, 'L', '1', '1972-12-17', '2003-10-06', '2028-12-17', '1', '1', 'S2', '1', 'Jl. Raya Tengah Gang Remaja RT 05 RW 03 Gedong Pasar Rebo Jakarta Timur '),
(2, '4067', 'ZAIMIL', 2, '2', 1, '1', 2, 1, 'L', '2', '1964-07-14', '1986-12-15', '2020-07-14', '2', '1', '1', '2', 'Dayung III C No. 7 RT 004/ RW 006 Kelapa Dua Kabupaten Tangerang Banten'),
(3, '9550', 'AGUS BUDIYANA', 3, '3', 1, '1', 1, 1, 'L', '3', '1975-08-22', '1998-01-13', '2031-08-22', '2', '1', '1', '3', ' JL. Sevilla Utama Blok T 26/04 Rt  003/007 Desa Ciakar Kec Panongan Tangerang Banten'),
(4, '8260', 'JUMADI', 4, '4', 1, '1', 2, 2, 'L', '4', '1971-04-17', '1995-12-01', '2027-04-17', '2', '2', '8', '3', 'Taring. RT.008 RW.001 Wonodoyo, Copogo, Boyolali'),
(5, '4998', 'AGNES YUDHI ASTUTI', 4, '5', 1, '1', 1, 1, 'P', '5', '1966-04-24', '1988-05-06', '2022-04-24', '2', '3', '1', '3', 'Jl.Kepodang Timur V Kav.B No.200 RT.006 RW.012 Pudakpayung Banyumanik Semarang'),
(6, '8346', 'RONNI ERMAWAN', 4, '6', 1, '1', 2, 2, 'L', '6', '1976-08-06', '1995-12-19', '2032-08-06', '2', '3', '1', '2', 'Jl.Galungan 3/83 RT.002 RW.006 Krapyak,Semarang Barat'),
(7, '7063', 'MUJI SETIYANTO', 4, '7', 1, '1', 3, 3, 'L', '7', '1966-01-10', '1992-07-13', '2022-01-10', '2', '2', '1', '3', 'Penaruban RT.003 RW.007 WeleriKab.Kendal'),
(8, '4630', 'SUHARTONO', 4, '8', 1, '1', 2, 1, 'L', '8', '1964-02-12', '1987-09-05', '2020-02-12', '2', '4', '1', '3', 'Dk Kedungpane RT.001 RW.002 , Kedungpane, Mijen '),
(9, '9520', 'INDRIYANI HARTANTI', 5, '9', 1, '1', 2, 2, 'P', '5', '1979-05-07', '1998-01-12', '2035-05-07', '2', '2', '1', '3', 'Pondok Jangli Indah No.9 RT.008RW.001 Jangli Tembalang  Semarang'),
(10, '7843', 'RIYONO', 4, '10', 1, '1', 2, 2, 'L', '9', '1974-10-16', '1995-01-02', '2030-10-16', '2', '5', '1', '3', 'Jl.Durian Dalam II BL.A No.28  RT.006 RW.001 Srondol Wetan Banyumanik Semarang'),
(11, '4640', 'CHRISTINA RETNO YULIATI', 4, '11', 1, '2', 2, 2, 'L', '10', '1968-07-19', '1987-09-05', '2024-07-19', '2', '2', '1', '3', 'Jl.Ngesrep Barat V No.31-32 RT.008 RW.008 Srondol Kulon Banyumanik Semarang '),
(12, '6894', 'SUGIYANTO', 6, '12', 1, '1', 2, 1, 'L', '11', '1965-06-01', '1991-11-01', '2021-06-01', '2', '6', 'SLTP', '3', 'Kalibening RT.003 RW.001 Tirtomartani, Kalasan Sleman, Yogyakarta'),
(13, '2217', 'SUNARSO', 3, '13', 1, '1', 4, 1, 'L', '12', '1962-07-05', '1983-07-04', '2018-07-05', '2', '1', '1', '3', 'Jl.Perintis Kemerdekaan Perum. Griya Pulisen RT.002 RW.012 , Boyolali'),
(14, '2215', 'BUDI WARDHANA', 4, '14', 1, '1', 2, 2, 'L', '5', '1963-09-09', '1983-07-04', '2019-09-09', '2', '2', '8', '3', ' JL. Karonsih Timur IX / 344 Ngaliyan Semarang'),
(15, '2218', 'TUTI IRIANI', 4, '15', 1, '2', 2, 2, 'P', '13', '1962-07-15', '1983-07-04', '2018-07-15', '2', '2', '8', '2', 'Jl Puri D3 No 13-14 Padangsari Banyumanik Semarang'),
(16, '3870', 'SUSILO ANGGRAINI', 4, '15', 1, '2', 1, 1, 'P', '5', '1966-04-23', '1986-11-01', '2022-04-23', '2', '2', '8', '1', 'Jl.Cemara 6/12C RT.001 RW.008 Padangsari , Banyumanik'),
(17, '4678', 'MARTINI', 4, '14', 1, '1', 2, 2, 'P', '5', '1967-03-24', '1987-09-05', '2023-03-24', '2', '3', '8', '3', 'Beringin Kulon RT.003 RW.009 Tambakaji Ngaliyan Semarang'),
(18, '6813', 'SRI MULYONO', 4, '16', 1, '1', 2, 1, 'L', '12', '1963-11-24', '1991-10-16', '2019-11-24', '2', '2', '1', '1', 'Gempol RT.003 RW.004 Leyangan Ungaran Kab.Semarang'),
(19, '9287', 'HIDAYAT', 5, '9', 1, '1', 3, 3, 'L', '14', '1975-09-16', '1997-09-18', '2031-09-16', '2', '7', '8', '3', 'Ds Kenangkan Rt 06 Rw 07 Bergas Kidul Bergas Semarang'),
(20, '4666', 'AJI SUPRIOHADI', 3, '17', 1, '1', 3, 1, 'L', '15', '1964-01-18', '1987-09-05', '2020-01-18', '2', '1', '1', '2', 'Perum Rumpun Diponegoro Jl Elang II/B-37 Rt05 Rw04 Mangunharjo Tembalang Smg'),
(21, '4627', 'SLAMET SANTOSO', 4, '18', 1, '1', 3, 3, 'L', '16', '1963-07-27', '1987-09-05', '2019-07-27', '2', '2', '1', '3', 'Kesatrian G-3Jatingaleh Candisari Semarang'),
(22, '4641', 'RINI MARDIANI', 4, '19', 1, '1', 3, 3, 'P', '5', '1967-09-19', '1987-09-05', '2023-09-19', '2', '2', '1', '1', 'Jl Albesia No 43/961 Rt03 Rw 08 Plamongansari Pedurungan Smg'),
(23, '4776', 'EDI HASTAYOGA', 4, '20', 1, '1', 3, 1, 'L', '8', '1964-11-17', '1987-12-01', '2020-11-17', '2', '4', '1', '1', 'Jln.Candi Pawon VI/25 RT.001RW.003 Kalipancur, Ngaliyan, Semarang'),
(24, '9540', 'WAHYU EKO PURNOMO', 5, '9', 1, '1', 2, 2, 'L', '6', '1974-09-11', '1998-01-12', '2030-09-11', '2', '2', '8', '1', 'Jl.Kruwing Barat Dalam II/59 RT.002 RW.003 Srondol Wetan Banyumanik Semarang'),
(25, '9902', 'SAAT DUDIN TAFTAYANI', 5, '9', 1, '1', 2, 2, 'L', '5', '1977-07-17', '1999-12-20', '2033-07-17', '2', '2', '8', '-', 'Kalisari Kidul RT04 RW06 Kelurahan Langensari  Kec. Ungaran Barat'),
(26, '9521', 'DUGI LESTARI', 5, '9', 1, '1', 0, 0, 'P', '17', '1975-11-09', '1998-01-12', '2031-11-09', '2', '3', '8', '3', 'Jl Ngesrep Timur III No 32 Rt 09 Rw 01 Sumurboto Banyumanik Semarang'),
(27, '6527', 'AGUS PRIYANTO', 2, '21', 1, '1', 3, 3, 'L', '1', '1971-08-13', '1991-02-20', '2027-08-13', '2', '1', '1', '3', 'Jl. Mawar Merah VI/6 No 12 RT 007 RW 007 Malaka Jaya Duren Sawit Jakarta Timur'),
(28, '4190', 'TRI MULYANI', 3, '22', 1, '2', 2, 2, 'P', '18', '1967-12-19', '1987-04-13', '2023-12-19', '2', '1', '1', '4', 'Jl. Abd. Rahman Saleh 268 RT.006 RW.010 Manyaran Semarang Barat'),
(29, '2231', 'CECILIA KUSMIYATI', 4, '23', 1, '2', 3, 3, 'P', '5', '1963-01-27', '1983-07-04', '2019-01-27', '1', '3', '8', '3', 'Jl.Kawung VII No.28 RT.005 RW.014. Tlogosari Kulon.  Pedurungan, Semarang'),
(30, '3388', 'AMINAH', 4, '24', 1, '1', 3, 3, 'P', '5', '1963-05-18', '1986-03-01', '2019-05-18', '2', '2', '1', '2', 'Karangrejo IV/3 RT.005 RW.007  Srondol Wetan Banyumanik, Semarang'),
(31, '9516', 'CHATARINA CAHYANING T', 5, '9', 1, '3', 0, 0, 'P', '5', '1976-11-08', '1998-01-12', '2032-11-08', '2', '8', '1', '3', 'Jl. Erowati Raya No. 60 RT 004 RW 003 Bulu Lor Semarang'),
(32, '7622', 'R.HUSNI AGUS DRAJAT R', 4, '25', 1, '1', 2, 2, 'L', '19', '1975-08-09', '1994-11-10', '2031-08-09', '2', '2', '1', '3', 'Jln.Darmo Indah Sel 1/MM-11 RT.001 RW.005 Tandes'),
(33, '5039', 'HADI MAKMURARTO', 3, '26', 1, '1', 2, 2, 'L', '1', '1965-05-22', '1988-09-01', '2021-05-22', '2', '1', '1', '-', 'Perum Puri Babatan Asri Rt04 Rw04 Beji Ungaran Semarang'),
(34, '3382', 'MURDIYATI', 4, '27', 1, '1', 1, 1, 'P', '11', '1966-09-30', '1986-01-27', '2022-09-30', '2', '3', '8', '1', 'Jl.Teuku Umar 106B RT.001 RW.004 Tinjomulyo Banyumanik Semarang'),
(35, '7447', 'SLAMET RIADI', 4, '28', 1, '1', 2, 2, 'L', '20', '1971-05-15', '1994-07-18', '2027-05-15', '2', '2', '1', '3', 'Jl.Toras III Perum P4A Blok B1/21 RT.006 RW.011 Pudakpayung, Banyumanik'),
(36, '8674', 'BUDI SANTOSO', 5, '9', 1, '1', 2, 2, 'L', '21', '1973-07-13', '1996-06-12', '2029-07-13', '2', '3', '1', '2', 'Mantren RT.009 RW.003 Mantren Karangrejo Kab.Magetan'),
(37, '8347', 'APRIMON', 0, '', 1, '1', 1, 1, 'L', '22', '1974-04-16', '1995-12-19', '2030-04-16', '2', '1', '1', '3', 'Perum Setu Indah Blok V No. 8 Setu Cipayung Jakarta Timur'),
(38, '10428', 'RIFKA ARYANSYACH PARAMITA', 3, '29', 1, '1', 1, 1, 'P', '1', '1988-07-29', '2012-07-02', '2044-07-29', '2', '1', '1', '', 'Jl. Cipinang Empang No. 6, RT. 003 RW. 015'),
(39, '7692', 'MOHAMAD HADI SUPENO', 4, '30', 1, '1', 2, 2, 'L', '23', '1974-12-30', '1994-11-10', '2030-12-30', '2', '5', '1', '3', 'Jl.Panasan V/3 RT.003 RW.003 Beji Ungaran Timur'),
(40, '9538', 'NYOMAN WINAYA', 5, '9', 1, '1', 2, 2, 'L', '5', '1976-02-09', '1998-01-12', '2032-02-09', '3', '2', '1', '3', 'Perum Griya Payung Asri Kav.37 RT.001 RW.016 Pudak Payung Banyumanik Semarang'),
(41, '9024', 'BUDI IDRIAL', 7, '31', 1, '1', 2, 2, 'L', '24', '1975-07-20', '1996-09-17', '2031-07-20', '2', '1', '1', '3', 'KP. Baru RT 006 / 005 Sukabumi  Selatan Kebon Jeruk Jakarta Barat'),
(42, '8205', 'SURYO SUBONO', 4, '32', 1, '1', 3, 3, 'L', '13', '1971-06-03', '1995-09-15', '2027-06-03', '2', '2', '1', '1', 'Perum.Dinar Mas Utara I/68 RT.001 RW.019 Meteseh Tembalang Semarang'),
(43, '4658', 'BAMBANG SUTIYONO', 4, '33', 1, '1', 2, 2, 'L', '15', '1963-03-05', '1987-09-05', '2019-03-05', '2', '5', '1', '2', 'Jl.Panasan VI/15 RT.003 RW.013 Beji Ungaran Kab.Semarang'),
(44, '4684', 'AL.CATUR MARTIN P', 0, '', 1, '1', 1, 1, 'L', '25', '1965-09-27', '1987-09-07', '2021-09-27', '1', '2', '8', '-', 'Patosan RT.001 RW.008 Sedayu Muntilan Kab.Magelang'),
(45, '5159', 'NINIK SURYAWATI', 4, '34', 1, '2', 2, 2, 'P', '26', '1967-07-22', '1988-09-01', '2023-07-22', '2', '3', '8', '2', 'Jl Megaraya No 220 Rt03 Rw07 Bringin Ngalian Semarang'),
(46, '10453', 'ALVIN ANDITUAHTA SINGARIMBUN', 3, '35', 1, '1', 0, 0, 'L', '27', '1988-08-28', '2012-07-02', '2044-08-28', '4', '1', '1', '-', 'Jl. HM. Rafi\'i No.8, RT. 023 RW. 005 Madurejo, Kotawaringin Barat, KALIMANTAN TENGAH'),
(47, '4413', 'ERMAWATI', 4, '36', 1, '1', 2, 2, 'P', '28', '1966-12-01', '1987-04-09', '2022-12-01', '2', '2', '1', '4', 'Jl. Rasamala Barat I No. 168 RT.001 RW.004, Srondol Wetan, Banyumanik, Semarang'),
(48, '4572', 'MARGONO', 4, '37', 1, '4', 3, 1, 'L', '29', '1966-12-10', '1987-08-03', '2022-12-10', '2', '2', '1', '2', 'Pedukuhan VIII RT.032 RW.016  Gotakan, Panjatan, Kulon Progo'),
(49, '9530', 'BUDI HERMAWAN', 4, '38', 1, '1', 3, 3, 'L', '18', '1975-02-07', '1998-01-12', '2031-02-07', '2', '2', '1', '2', 'Jl.Rorojonggrang Timur X RT.008 RW.010 Manyaran Semarang Barat'),
(50, '7578', 'JUWADI', 5, '39', 1, '1', 2, 2, 'L', '30', '1970-07-09', '1994-10-03', '2026-07-09', '2', '5', '8', '2', 'DK.Kecubung DS Gondang RT.006 RW.002 Gondang-Subah '),
(51, '9514', 'TITIK AMBARWATI', 5, '40', 1, '1', 3, 3, 'P', '5', '1976-09-23', '1998-01-12', '2032-09-23', '2', '2', '1', '-', 'Jl Wonodri Krajan Rt 04./01 Wonodri semarang'),
(52, '7667', 'MANYUK IRWAN DANUS', 3, '41', 1, '1', 2, 2, 'L', '19', '1970-02-17', '1994-11-10', '2026-02-17', '2', '1', '1', '3', 'Jl. Pang Hidayat 12 RT 7 RW 2 Bulu sidokare Sidoarjo - Jawa Timur'),
(53, '2195', 'ANASTASIA ROCHANA (MPP)', 0, '', 1, '1', 2, 1, 'P', '31', '1962-02-22', '1983-07-04', '2018-02-22', '1', '2', 'D3', '3', 'JL. Jangli Perbalan No.60 RT.009 RW.006 Ngesrep Banyumanik, Semarang'),
(54, '4652', 'EKO JUNAEDI MARYANTO', 4, '42', 1, '1', 4, 3, 'L', '5', '1964-06-23', '1987-09-05', '2020-06-23', '2', '5', '1', '-', 'Jl Candi Penataran I Rt 08. Rw 03 Kalipancur Ngalian Smg'),
(55, '8256', 'YOSEPH TUAHNA RASKITA', 4, '43', 1, '1', 1, 1, 'L', '32', '1973-03-15', '1995-11-20', '2029-03-15', '4', '2', 'D3', '2', 'Jurangombo Utara Magelang '),
(56, '7688', 'YOSEP RUSWITO', 4, '44', 1, '1', 2, 2, 'L', '33', '1974-03-27', '1994-11-10', '2030-03-27', '1', '5', '1', '2', 'Jl.Sinar Mas IV/972C RT.012  RW.001 Kedungmundu Tembalang'),
(57, '4625', 'SUPRIYO', 8, '45', 1, '1', 2, 2, 'L', '5', '1964-07-03', '1987-09-05', '2020-07-03', '2', '2', '8', '3', 'Pakintelan RT.003 RW.002  Pakintelan, Gunungpati Semarang'),
(58, '4673', 'MURTIONO', 8, '45', 1, '1', 3, 2, 'L', '5', '1963-02-27', '1987-09-05', '2019-02-27', '2', '2', '8', '2', 'Gemahsari V No.178 RT.001 RW.004 Kedungmundu, Tembalang, Semarang'),
(59, '8261', 'DIDIK WAHYUDI', 8, '45', 1, '1', 2, 2, 'L', '34', '1972-09-19', '1995-08-11', '2028-09-19', '2', '5', '1', '3', 'Jl. Rorojonggrang XIX RT.004 RW.010 Manyaran ,  Semarang Barat'),
(60, '7606', 'TITO CHRISDIAN ANDRIANTO', 8, '45', 1, '1', 2, 2, 'L', '35', '1972-12-11', '1994-11-10', '2028-12-11', '4', '2', '1', '3', 'Jl.Argo Mulyo Mukti III/D-137 RT.001 RW.010 Tlogomulyo, Pedurungan '),
(61, '7614', 'MOCH.LUTFI', 8, '45', 1, '1', 1, 1, 'L', '36', '1970-03-03', '1994-11-10', '2026-03-03', '2', '2', '8', '3', 'Jl.Kalimantan 325 RT.007 Rw.009 Gedang Anak Ungaran'),
(62, '2227', 'DARYANTO (MPP)', 9, '46', 1, '1', 3, 1, 'L', '5', '1962-03-11', '1983-07-04', '2018-03-11', '2', '2', '1', '3', 'JL. Jomblang Barat 520 RT.004 RW.003  Candi,Candisari Semarang'),
(63, '4624', 'TRISNO PURWANTO', 9, '46', 1, '1', 3, 2, 'L', '37', '1964-06-01', '1987-09-05', '2020-06-01', '2', '2', '1', '2', 'Jl. Panasan V/14 RT.003 RW.013  Beji Ungaran'),
(64, '4661', 'PUTUT WAHYUDI', 9, '46', 1, '1', 2, 2, 'L', '5', '1964-04-02', '1987-09-05', '2020-04-02', '2', '5', '8', '1', 'Pringsari RT.001 RW.002 Pringsari Pringapus/Klepu Kab.Semarang'),
(65, '6791', 'NURCHOLID', 0, '', 1, '1', 2, 2, 'L', '15', '1971-03-28', '1991-10-16', '2027-03-28', '2', '2', '8', '1', 'Jl.Candi Penataran Utara I RT.002 RW.012 Kalipancur Ngaliyan'),
(66, '7438', 'SLAMET WIBOWO', 9, '46', 1, '1', 3, 3, 'L', '38', '1969-01-12', '1994-06-15', '2025-01-12', '2', '2', '8', '-', 'Komp.Jaka Kencana A/86 RT.002  RW.004 Jaka Setya Bekasi Selatan'),
(67, '8415', 'AGUS BUDI SETIYO PRIYONO', 9, '46', 1, '1', 1, 1, 'L', '39', '1976-01-07', '1996-02-01', '2032-01-07', '2', '2', '8', '2', 'Puri Asri Jl.Merdeka III No.16  RT.004 RW.004 Beji Ungaran Timur'),
(68, '4883', 'SUMENENG', 10, '47', 1, '1', 3, 3, 'L', '40', '1970-06-14', '1988-04-02', '2026-05-14', '2', '6', 'SLTP', '3', 'Tegalmelik RT.003 RW.002 Gebugan Bergas Kab.Semarang'),
(69, '4676', 'SUDIRO', 11, '48', 1, '1', 2, 1, 'L', '5', '1965-05-03', '1987-09-05', '2021-05-03', '2', '2', '1', '4', 'Jl.Kenanga Raya 28 Rejosari RT.005 RW.002 Genuk Ungaran'),
(70, '4884', 'BUDIYONO', 11, '48', 1, '1', 4, 2, 'L', '5', '1967-06-07', '1988-04-02', '2023-06-07', '2', '2', '8', '4', 'Jl. Waru Timur II RT.009 RW.001Pedalangan Banyumanik, Semarang'),
(71, '5372', 'PARIJAN', 11, '48', 1, '1', 2, 1, 'L', '11', '1965-06-01', '1989-01-16', '2021-06-01', '2', '5', '8', '3', 'Jl.Brantas I No.4 RT.002 RW.013 Beji Ungaran Timur'),
(72, '7404', 'DJOKO', 11, '48', 1, '1', 1, 1, 'L', '5', '1971-01-29', '1994-02-14', '2027-01-29', '2', '2', '8', '3', 'Jl Mugas DalamVI/14Rt 08 Rw 03 Mugassari Semarang'),
(73, '7616', 'GUNADI', 0, '', 1, '1', 2, 2, 'L', '33', '1971-05-10', '1994-11-10', '2027-05-10', '2', '2', '1', '1', 'Perum Ungaran Baru A.133 RT.002 RW.012 Leyangan Ungaran Timur'),
(74, '8259', 'SUHARTO', 11, '48', 1, '1', 3, 3, 'L', '30', '1972-06-03', '1990-12-01', '2029-06-03', '2', '2', '8', '-', 'jl Jatisari Rt04 Rw 01Jatisari Subah Batang'),
(75, '8617', 'HARIYANTO', 12, '49', 1, '1', 2, 2, 'L', '29', '1976-11-16', '1996-08-12', '2032-06-04', '2', '3', '8', '1', 'Puri Dinar Elok F13 No.2 RT.008 RW.021 Meteseh Tembalang Semarang'),
(76, '9539', 'HADI PRASTOWO', 12, '49', 1, '1', 2, 2, 'L', '5', '1974-03-02', '1998-01-12', '2030-03-02', '2', '2', '8', '-', 'Jl Satria Selatan V Bl H No 362A Rt 08 Rw 04 Plombokan Semarang'),
(77, '9315', 'SLAMET TRIO DARSITO', 0, '', 1, '1', 2, 2, 'L', '35', '1976-05-08', '1997-09-18', '2032-05-08', '2', '5', '8', '-', 'Mutiara gading Timur Blok H-5 No 30 Bantar Gebang Bekasi'),
(78, '9997', 'SUGENG ARIYANTO', 12, '49', 1, '1', 2, 2, 'L', '41', '1981-09-12', '2000-07-13', '2037-09-12', '2', '2', '8', '-', 'Kintelan Lor RT.003 RW.003 Candi Rejo Tuntang Semarang'),
(79, '10160', 'MARYADI', 12, '49', 1, '1', 2, 2, 'L', '42', '1978-11-22', '2001-04-16', '2034-11-22', '2', '2', '8', '4', 'Dsn. Jambu Lor RT.006 RW.001 Jambu Kab.Semarang'),
(80, '10308', 'AGUS PRIYADI', 12, '49', 1, '1', 1, 1, 'L', '12', '1979-08-12', '2002-09-11', '2035-08-12', '2', '2', '8', '-', 'Dk Mirenglor Rt 07 Rw 03 Mireng Trucuk Klaten Jawa tengah'),
(81, '4664', 'KUSDIYONO', 13, '50', 1, '1', 5, 3, 'L', '8', '1965-10-10', '1987-09-05', '2022-10-10', '2', '2', '1', '2', 'Plamongan Indah Blok H4 No.14 RT.006 RW.031 Batursari Mranggen Demak'),
(82, '7682', 'PENDI SETYO NOGROHO', 9, '51', 1, '1', 1, 1, 'L', '5', '1975-10-19', '1994-11-10', '2031-10-19', '2', '5', '1', '4', 'Wonolopo RT 2 RW 8 wonolopo Mijen, Semarang 50215'),
(83, '3766', 'ARI PRIBADI', 9, '51', 1, '1', 3, 2, 'L', '33', '1963-09-19', '1986-07-10', '2019-09-19', '2', '5', '1', '2', 'Jl.Tmn Borobudur Utara RT.003 RW.010 Kembangarum Semarang Barat'),
(84, '5883', 'ENI KUSRINI', 9, '51', 1, '2', 1, 1, 'P', '5', '1970-08-23', '1989-12-18', '2026-08-23', '2', '2', 'S2', '3', 'Karangrejo Raya 10 RT.001 RW.005 Banyumanik Semarang'),
(85, '7641', 'JANSEN JAYA ROLAS H', 9, '51', 1, '1', 2, 2, 'L', '43', '1976-01-12', '1994-11-10', '2032-01-12', '2', '2', '1', '-', 'P4A  Blok F-123 JL Gambyong 007/011 Semarang '),
(86, '6480', 'YUNI BUDI KUSWORO', 4, '15', 1, '1', 2, 2, 'L', '44', '1969-06-02', '1990-12-19', '2025-06-02', '2', '2', '8', '-', 'Griya Payung Asri Kav.105 RT.008 RW.013 Pudakpayung  Banyumanik Semarang'),
(87, '9517', 'HERA SUSANTI', 9, '51', 1, '1', 1, 1, 'P', '5', '1979-07-27', '1998-01-12', '2035-07-27', '2', '2', '8', '3', 'Jl.Jatiluhur No.256 RT.003 RW.005 Ngesrep Banyumanik'),
(88, '7685', 'SISWANTO', 8, '52', 1, '1', 3, 3, 'L', '33', '1972-03-07', '1994-11-10', '2028-03-07', '2', '5', '1', '3', 'Jl Bangun Harjo II/39 RT 08 Rw 03Kedung Mundu Tembalang'),
(89, '8265', 'YULI DWI ADIHARSONO', 9, '51', 1, '1', 2, 2, 'L', '5', '1975-07-24', '1995-12-14', '2031-07-24', '2', '2', '8', '-', 'Jl.Muria No.12 RT.003 RW.007 Bendan Pekalongan Barat'),
(90, '7870', 'HERY MURYANTO', 9, '51', 1, '1', 3, 3, 'L', '18', '1975-07-03', '1995-03-01', '2031-07-03', '2', '2', '8', '-', 'Jl. R.A Kartini no.12 RT.001 RW.008 Slawi Kulon, Slawi, Kab.Tegal'),
(91, '9522', 'MARDIANI SUSILOWATI R', 5, '53', 1, '1', 2, 2, 'P', '5', '1979-01-20', '1998-01-12', '2035-01-20', '2', '3', '1', '1', 'Jl.Dr.Kariadi 531 RT.003 RW.006 Randusari Semarang Selatan'),
(92, '2971', 'SUKAMTA', 11, '54', 1, '1', 3, 3, 'L', '45', '1963-07-04', '1984-12-18', '2019-07-04', '2', '2', '8', '2', 'Jl.Pucang Peni I no.3 RT.002 RW.011 Batursari Meranggen Kab.Demak'),
(93, '4672', 'KUSMIN', 11, '54', 1, '1', 2, 2, 'L', '5', '1963-12-14', '1987-09-05', '2019-12-14', '2', '5', '8', '3', 'Jl.Maos Pati Raya No.27 RT.004 RW.013 Beji Ungaran kab.Semarang'),
(94, '6031', 'SRI ARIYANI', 11, '54', 1, '1', 3, 3, 'P', '46', '1968-09-11', '1990-06-20', '2024-09-11', '2', '2', '8', '1', 'Jl. Yudistira V/No.08 RT.002 RW.010 Lerep, Ungaran Barat, Kab. Semarang'),
(95, '6123', 'JUWANTO', 11, '54', 1, '1', 3, 3, 'L', '47', '1967-06-04', '1990-10-22', '2023-06-04', '2', '2', '8', '1', 'Jl.Raya Ngemplak RT.010 RW.001 Ngemplak Mranggen Demak'),
(96, '6454', 'JON EFENDI', 11, '54', 1, '1', 1, 1, 'L', '48', '1967-05-26', '1990-12-17', '2023-05-26', '4', '5', '1', '1', 'Jl.Puspowarno Selatan II/19A RT.002 RW.005 Salaman mloyo Semarang Barat'),
(97, '7161', 'SUTOMO', 11, '54', 1, '1', 3, 3, 'L', '5', '1970-04-14', '1993-02-22', '2026-04-14', '4', '2', '1', '4', 'Jl.Kamiluto IX/7 RT.001 RW.021Muktiharjo Kidul, PedurunganSemarang'),
(98, '7196', 'ANNAS HIDAYAH ROFII', 11, '54', 1, '1', 2, 2, 'L', '5', '1971-09-26', '1993-03-01', '2027-09-26', '2', '2', '1', '1', 'Gergaji Balekambang 29 RT.004 RW.007 Mugasari Semarang Selatan'),
(99, '7237', 'ANJAR BUDIANTO', 11, '54', 1, '1', 1, 1, 'L', '33', '1971-04-24', '1993-03-06', '2027-04-24', '1', '2', '8', '-', 'Jl Mataram II No 3 Banyuanyar Solo'),
(100, '7483', 'SUTARTO', 11, '54', 1, '1', 0, 0, 'L', '49', '1969-08-12', '1994-09-13', '2025-08-12', '2', '2', '8', '-', 'KejenanRt01 Rw08 Bangsi Karangpandan Smg'),
(101, '7489', 'ABDOEL MOEIS BOEDIJONO', 5, '9', 1, '1', 2, 2, 'L', '50', '1968-12-31', '1994-10-01', '2024-12-31', '2', '5', '1', '3', 'Jl.Parikesit Raya RT.010 RW.002 Banyumanik Semarang'),
(102, '7500', 'MUSTAFID', 11, '54', 1, '1', 2, 2, 'L', '47', '1972-05-01', '1994-10-01', '2028-03-01', '2', '2', '8', '3', 'Tlogorejo Rt 01 Rw11 Karangawen Semarang'),
(103, '7651', 'RICKY NELSON SIBARANI', 11, '54', 1, '1', 2, 2, 'L', '1', '1972-09-26', '1994-11-10', '2028-09-26', '4', '2', '8', '4', 'JL. Tlogo Mulyo Pesona Asri II blok F.11'),
(104, '7824', 'PRIYANTO', 11, '54', 1, '1', 3, 3, 'L', '23', '1973-11-22', '1995-01-02', '2029-11-22', '2', '5', '8', '3', 'Griya Payung Asri Kav.93 RT.003 RW.006 Pudakpayung Banyumanik Semarang'),
(105, '8016', 'R. GAGAT PANCASIWI', 0, '', 1, '1', 2, 2, 'L', '26', '1973-03-24', '1995-06-20', '2029-03-24', '2', '2', '8', '2', 'Kalialang Lama RT.004 RW.001 Sukorejo Gunung Pati Semarang'),
(106, '8195', 'SURIP KUNTADI', 12, '54', 1, '1', 3, 3, 'L', '51', '1973-03-01', '1995-09-14', '2029-03-01', '2', '5', '1', '2', 'Puri Dinar Elok C4 No.5 RT.008RW.020 Meteseh Tembalang Semarang'),
(107, '8328', 'SUKAMTO', 0, '', 1, '1', 3, 3, 'L', '29', '1974-08-01', '1996-01-02', '2030-08-01', '2', '5', '8', '1', 'Puri Dinar Elok H5 No.5 RT.006 RW.021 Meteseh Tembalang Semarang'),
(108, '8359', 'EDY SUPRIONO', 11, '54', 1, '1', 1, 1, 'L', '5', '1971-09-29', '1996-02-01', '2027-09-29', '2', '2', '8', '1', 'Jl delikrejo Rt 07 Rw 11 Tandang Kec  Tembalang Semarang'),
(109, '8369', 'EKO BUDIONO', 11, '54', 1, '1', 1, 1, 'L', '6', '1976-07-25', '1996-01-04', '2032-07-28', '2', '2', '8', '-', 'DK Karang RT 01 RW 08 Jekulo Kudus'),
(110, '8741', 'RENO LILIK SUNARNO', 12, '54', 1, '1', 2, 2, 'L', '6', '1973-12-20', '1996-06-25', '2029-12-20', '2', '2', '1', '3', 'Bojanegara RT.001 RW.004 Bojanegara Padamara Purwalingga'),
(111, '8973', 'HERI KARTONO', 5, '9', 1, '1', 1, 1, 'L', '52', '1972-04-21', '1996-09-17', '2028-04-21', '2', '2', '1', '-', 'Perum Kutilang Sari 3 RT.008 RW.004 Susukan Ungaran Timur'),
(112, '9069', 'AGUS SENOPRATOMO', 12, '54', 1, '1', 2, 1, 'L', '26', '1971-08-28', '1996-09-27', '2029-08-28', '2', '5', '8', '4', 'Kemiri Lor RT.002 RW.003 , Kemiri Lor, Kemiri, Kab.Purworejo'),
(113, '9523', 'PUJI WINARSIH', 12, '54', 1, '1', 2, 2, 'P', '53', '1978-04-19', '1998-01-12', '2034-04-19', '2', '2', '8', '4', 'Dusun Krajan RT.002 RW.002 Bebengan Boja Kab.Kendal'),
(114, '9524', 'SRI HARTATI', 5, '53', 1, '1', 2, 2, 'P', '5', '1976-04-03', '1998-01-12', '2032-04-03', '2', '2', 'D3', '3', 'Jl.Merbau I No.16 RT.005 RW.007 Padangsari Banyumanik, Semarang'),
(115, '9527', 'CORNELIUS SETYO PAMBUDI', 12, '54', 1, '1', 3, 3, 'L', '5', '1976-09-08', '1998-01-12', '2032-09-08', '1', '5', '8', '4', 'Jl Kalilangse No 837 Rt 07 Rw 03  Gajah Mungkur Semarang'),
(116, '9531', 'SOLEMAN LASNO', 12, '54', 1, '1', 2, 2, 'L', '31', '1976-12-10', '1998-01-12', '2032-12-10', '2', '2', '8', '3', 'Jl.anjasmoro VI/41 RT.007 RW.003 Karangayu Semarang Barat'),
(117, '9534', 'BUDI PRABOWO', 0, '', 1, '1', 3, 2, 'L', '5', '1974-08-17', '1998-01-12', '2030-08-17', '2', '5', '8', '3', 'Jl kaliwiru VI No 459 RT 06 Rw 02Candisari Semarang'),
(118, '9535', 'AGUNG SULISTIYO', 12, '54', 1, '1', 2, 2, 'L', '5', '1973-02-20', '1998-01-12', '2029-02-20', '2', '2', '8', '2', 'Jl. Sriyatno Dalam no.20 RT.006 RW.004 Purwoyoso Ngaliyan Semarang'),
(119, '9543', 'DANANG NOVIANTO', 12, '54', 1, '1', 2, 2, 'L', '5', '1975-11-30', '1998-01-12', '2031-11-30', '2', '2', '8', '1', 'JL.Tusam Timur 14B RT.002 RW.001 pedalangan Banyumanik Semarang'),
(120, '4626', 'ANDIT HARIS CAHYONO', 8, '52', 1, '1', 3, 3, 'L', '5', '1964-03-03', '1987-09-05', '2020-03-03', '2', '2', '1', '3', 'Bukit Cempaka III Blok C no.203 RT.001 RW.021 Sendangmulyo '),
(121, '4629', 'R.MARDI PRIYANTO', 8, '52', 1, '1', 2, 2, 'L', '17', '1966-05-09', '1987-09-05', '2022-05-09', '1', '3', '1', '3', 'Jl Wonodri Krajan II/454-A Rt05 Rw 01 Wonodri Semarang'),
(122, '7502', 'MARYONO', 9, '51', 1, '1', 3, 3, 'L', '4', '1973-03-05', '1994-10-01', '2028-03-05', '2', '2', '8', '-', 'Randusari RT.005 RW.005 Tambak Mojosongo Boyolali'),
(123, '6005', 'SUHARYONO', 8, '52', 1, '1', 2, 2, 'L', '5', '1967-12-05', '1990-06-06', '2023-12-05', '2', '5', '8', '4', 'Wonodri Kopen Timur III/7 RT.007  RW.004 Wonodri Semarang Selatan'),
(124, '7693', 'AGOES SUMARSONO', 9, '51', 1, '1', 2, 2, 'L', '33', '1972-08-17', '1994-11-10', '2028-08-17', '2', '5', '1', '2', 'Jl.Seudati II Blok C12 P.4A RT.004 RW.011 Pudakpayung BanyumanikSemarang'),
(125, '8745', 'SUDARMONO', 9, '51', 1, '1', 2, 2, 'L', '31', '1975-05-15', '1996-06-25', '2031-05-15', '2', '3', '1', '-', 'Perum P4 A Bl C1 No 20 Rt 10 Rw 11 Pudakpayung Banyumanik semarang'),
(126, '7672', 'BUDI HARYAWAN', 8, '52', 1, '1', 2, 2, 'L', '33', '1971-06-29', '1994-11-10', '2027-06-29', '2', '2', '1', '3', 'Jl.Medoho Ria no.33 RT.001 RW.005 Sambirejo GayamsariSemarang'),
(127, '9667', 'MULATO', 9, '51', 1, '1', 2, 2, 'L', '14', '1979-03-06', '1998-06-04', '2035-03-06', '2', '3', '1', '3', 'Perum Griya Payung Asri Kav.64 RT.001 RW.016 Pudak Payung Banyumanik Semarang'),
(128, '4638', 'SRI WINARTI', 5, '53', 1, '1', 2, 2, 'P', '5', '1965-08-01', '1987-09-05', '2021-08-01', '2', '2', '8', '4', 'Jl.Karangrejo V, Karangrejo Asri B3  RT.003 Rw.003 Banyumanik,  Semarang');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jsmrhrd_employee`
--
ALTER TABLE `jsmrhrd_employee`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jsmrhrd_employee`
--
ALTER TABLE `jsmrhrd_employee`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
