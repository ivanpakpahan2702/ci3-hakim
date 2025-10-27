-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.32-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.10.0.7000
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for subdit_hakim
CREATE DATABASE IF NOT EXISTS `subdit_hakim` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `subdit_hakim`;

-- Dumping structure for table subdit_hakim.drp_perikanan
CREATE TABLE IF NOT EXISTS `drp_perikanan` (
  `id` int(11) DEFAULT NULL,
  `id_pegawai` int(11) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `nip` varchar(50) DEFAULT NULL,
  `gol_ruang` varchar(100) DEFAULT NULL,
  `tp_tgl_lahir` varchar(255) DEFAULT NULL,
  `jenis_kelamin` varchar(20) DEFAULT NULL,
  `isteri_suami` varchar(255) DEFAULT NULL,
  `anak` int(11) DEFAULT NULL,
  `agama` varchar(50) DEFAULT NULL,
  `pendidikan` text DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `usulan` varchar(255) DEFAULT NULL,
  `hukuman` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `pengadilan` varchar(255) DEFAULT NULL,
  `riwayat_pekerjaan` text DEFAULT NULL,
  `keterangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table subdit_hakim.drp_perikanan: ~41 rows (approximately)
INSERT INTO `drp_perikanan` (`id`, `id_pegawai`, `nama`, `nip`, `gol_ruang`, `tp_tgl_lahir`, `jenis_kelamin`, `isteri_suami`, `anak`, `agama`, `pendidikan`, `email`, `usulan`, `hukuman`, `jabatan`, `pengadilan`, `riwayat_pekerjaan`, `keterangan`) VALUES
	(1, 13, 'Hendra Adi Pramono, S.H., M.H.', '3578090810760004', '-,', 'Banyuwangi, 08-10-1976', 'Pria', 'ELI TAURUSIA', 2, 'Islam', '2003 - UNIVERSITAS PUTRA BANGSA|1995 - SWASTA DHANISWARA|1992 - SMP NEGERI 30 SURABAYA|1989 - SD', 'hendra.pramono@mahkamahagung.go.id', '-', '-', 'Hakim Ad Hoc Perikanan', 'Pengadilan Negeri Jakarta Utara', '29-04-2025 - Hakim Ad Hoc Perikanan Pengadilan Negeri Jakarta Utara|14-04-2020 - Hakim Ad Hoc Perikanan Pengadilan Negeri Jakarta Utara', NULL),
	(2, 35, 'Warsita, S.H.', '3515082010720008', '-,', 'Sukoharjo, 20-10-1972', 'Pria', 'MARWA JUWITA AYU TUASAMU', 2, 'Islam', '1997 - Universitas Sebelas Maret', 'warsita@mahkamahagung.go.id', '-', '-', 'Hakim Ad Hoc Perikanan', 'Pengadilan Negeri Jakarta Utara', '21-12-2022 - Hakim Ad Hoc Perikanan Pengadilan Negeri Jakarta Utara', NULL),
	(3, 36, 'Ir. Arnofi', '1371082911630002', '-,', 'Padang, 29-11-1963', 'Pria', 'RAHMAWATI', 2, 'Islam', '1989 - UNIVERSITAS BUNG HATTA', 'arnofi@mahkamahagung.go.id', '-', '-', 'Hakim Ad Hoc Perikanan', 'Pengadilan Negeri Jakarta Utara', '21-12-2022 - Hakim Ad Hoc Perikanan Pengadilan Negeri Jakarta Utara', NULL),
	(4, 14, 'Sugeng Widodo, S.H.,.', '3515070202640005', '-, 22-04-2020', 'Kediri, 02-02-1964', 'Pria', 'Herdiana', 3, 'Islam', '1990 - UNIVERSITAS AIRLANGGA', 'sugengwidodo@mahkamahagung.go.id', '-', '-', 'Hakim Ad Hoc Perikanan', 'Pengadilan Negeri Medan', '23-04-2025 - Hakim Ad Hoc Perikanan Pengadilan Negeri Medan|05-02-2020 - Hakim Ad Hoc Perikanan Pengadilan Negeri Medan|04-02-2020 - Hakim Ad Hoc Perikanan Pengadilan Negeri Medan', NULL),
	(5, 15, 'Ir Robert Napitupulu, S.H.,MSc,.', '1271172509620001', '-, 04-05-2020', 'Medan, 25-09-1961', 'Pria', 'Ruth SF Tambunan', 4, 'Kristen Protestan', '1996 - The University of Newcastle, England|2024 - Universitas Panca Budi Medan|1986 - IPB', 'robertnapitupulu@mahkamahagung.go.id', '-', '-', 'Hakim Ad Hoc Perikanan', 'Pengadilan Negeri Medan', '23-04-2025 - Hakim Ad Hoc Perikanan Pengadilan Negeri Medan|05-02-2020 - Hakim Ad Hoc Perikanan Pengadilan Negeri Medan|04-02-2020 - Hakim Ad Hoc Perikanan Pengadilan Negeri Medan', NULL),
	(6, 7, 'Soniady Drajat Sadarisman, S.H., M.H.', '3273162705690002', 'IV/a, 31-12-2020', 'Bandung, 27-05-1969', 'Pria', 'SETIANINGSIH', 2, 'Islam', '2017 - UNIVERSITAS JAYABAYA|1996 - Univ. Pasundan|1988 - SMA NEGERI 9|1985 - SMP NEGERI 27|1982 - SD NEGERI BABAKAN SURABAYA IV (CENTRE)', 'soniadydrajat@mahkamahagung.go.id', '-', '-', 'Hakim Ad Hoc Perikanan', 'Pengadilan Negeri Medan', '31-03-2021 - Hakim Ad Hoc Perikanan Pengadilan Negeri Medan|31-12-2020 - Hakim Ad Hoc Perikanan Pengadilan Negeri Medan', 'Pelatihan Sertifikasi Hakim Pengadilan Perikanan (22-10-2020)'),
	(7, 8, 'Ir. Raja Pasaribu, M.Sc.', '3275022202600015', 'IV/a, 31-12-2020', 'Padangsidimpuan, 22-02-1960', 'Pria', 'GERTRUIDA JUWITA HUTABARAT', 3, 'Kristen Protestan', '1992 - Mississippi State University|1983 - Institut Pertanian Bogor', 'rajapasribu@mahkamahagung.go.id', '-', '-', 'Hakim Ad Hoc Perikanan', 'Pengadilan Negeri Medan', '31-03-2021 - Hakim Ad Hoc Perikanan Pengadilan Negeri Medan|31-12-2020 - Hakim Ad Hoc Perikanan Pengadilan Negeri Medan', 'Pelatihan Sertifikasi Hakim Pengadilan Perikanan (22-10-2020)'),
	(8, 9, 'Syaiful Anam, S.H., M.H.', '3578183101760001', 'IV/a, 31-12-2020', 'Tuban, 31-01-1976', 'Pria', 'AMALIA ULFA', 3, 'Islam', '2015 - Univ. Narotama|2008 - universitas narotama surabaya', 'syaifulanam310@mahkamahagung.go.id', '-', '-', 'Hakim Ad Hoc Perikanan', 'Pengadilan Negeri Medan', '31-03-2021 - Hakim Ad Hoc Perikanan Pengadilan Negeri Medan|31-12-2020 - Hakim Ad Hoc Perikanan Pengadilan Negeri Medan', 'Pelatihan Sertifikasi Hakim Pengadilan Perikanan (22-10-2020)'),
	(9, 18, 'Dr Urif Syarifudin, APi, MTA.', '7310042812700001', '-,', 'Jakarta Barat, 28-12-1970', 'Pria', '', 0, 'Islam', '1992 - Universitas Cokroaminoto Makassar, Makassar', 'urifsyarifudin@mahkamahagung.go.id', '-', '-', 'Hakim Ad Hoc Perikanan', 'Pengadilan Negeri Pontianak', '29-04-2025 - Hakim Ad Hoc Perikanan Pengadilan Negeri Pontianak|04-02-2020 - Hakim Ad Hoc Perikanan Pengadilan Negeri Pontianak', NULL),
	(10, 19, 'Edi Utomo, S.H., M.H.', '3578091704710001', '-,', 'Purworejo, 17-04-1971', 'Pria', 'AGUSTINA MELASARI', 3, 'Islam', '2018 - Universitas Hang Tuah Surabaya|1999 - Universitas Hang Tuah Surabaya|1990 - SMA NEGERI KUTOARJO|1987 - SMP NEGERI NGOMBOL|1984 - SD NEGERI WINGKOMULYO', 'ediutomo@mahkamahagung.go.id', '-', '-', 'Hakim Ad Hoc Perikanan', 'Pengadilan Negeri Pontianak', '04-02-2020 - Hakim Ad Hoc Perikanan Pengadilan Negeri Pontianak', 'PENDIDIKAN DAN PELATIHAN SERTIFIKASI HAKIM AD-HOC PENGADILAN PERIKANAN SELURUH INDONESIA (05-11-2019)'),
	(11, 25, 'Ir. Gatot Rudiyono, S.H., M.M.', '6171010301580001', '-,', 'Makassar, 03-01-1958', 'Pria', 'IR. ASTUTI NURTJAHYATI', 3, 'Katholik', '1997 - STEI|2007 - SEKOLAH TINGGI ILMU HUKUM IBLAM|1984 - UNIVERSITAS DIPONEGORO', 'gatotrudiyono@mahkamahagung.go.id', '-', '-', 'Hakim Ad Hoc Perikanan', 'Pengadilan Negeri Pontianak', '04-03-2021 - Hakim Ad Hoc Perikanan Pengadilan Negeri Pontianak', 'Pelatihan Kepemimpinan Administrator (13-12-2001)'),
	(12, 26, 'Dr. Nova Yuniarti, S.Pi., M.P.', '7371136506750009', '-,', 'Gowa, 25-06-1975', 'Wanita', 'ANTON', 0, 'Islam', '2013 - Universitas Hasanuddin Makassar|2003 - Universitas Hasanuddin Makassar|1998 - Universitas Hasanuddin Makassar|1993 - SMA NEGERI 2 UJUNG PANDANG|1990 - SMP NEGERI 1 UJUNG PANDANG|1987 - SD NEGERI GUNUNG SARI I UJUNG PANDANG', 'novayuniarti@mahkamahagung.go.id', '-', '-', 'Hakim Ad Hoc Perikanan', 'Pengadilan Negeri Pontianak', '04-03-2021 - Hakim Ad Hoc Perikanan Pengadilan Negeri Pontianak', NULL),
	(13, 40, 'Nur Syamsu, S.T., M.Eng', '7602122908750001', '-,', 'Ujung Pandang, 29-08-1975', 'Pria', 'Ratna Mutu Manikam Manara T., ST., M.Si.', 0, 'Islam', '2011 - Universitas Gadjah Mada|2000 - Universitas Hasanuddin Makassar|1994 - SMA NEGERI 5 UJUNG PANDANG|1991 - SMP NEGERI 7 UJUNG PANDANG|1988 - SD NUSANTARA', '', '-', '-', 'Hakim Ad Hoc Perikanan', 'Pengadilan Negeri Pontianak', '11-11-2022 - Hakim Ad Hoc Perikanan Pengadilan Negeri Pontianak', 'Pelatihan Sertifikasi Hakim Karir dan Hakim AdHoc Pengadilan Perikanan di Lingkungan Peradilan Umum Seluruh Indonesia (01-11-2022)'),
	(14, 21, 'Temmy Fetrozian, SSt,Pi, M.H.', '1806010803770003', '-,', 'Bandar Lampung, 08-03-1977', 'Pria', 'Ratna Dwi Restuti,SP', 3, 'Islam', '2009 - UNIVERSITAS BANDAR LAMPUNG', 'irsyad110704@mahkamahagung.go.id', '-', '-', 'Hakim Ad Hoc Perikanan', 'Pengadilan Negeri Bitung', '29-04-2025 - Hakim Ad Hoc Perikanan Pengadilan Negeri Bitung|04-02-2020 - Hakim Ad Hoc Perikanan Pengadilan Negeri Bitung', NULL),
	(15, 20, 'SUGENG TRIONO, S.H., M.H.', '3302270705780002', '-,', 'Banyumas, 07-05-1978', 'Pria', '', 0, 'Islam', '2019 - UNIVERSITAS INDONESIA|2000 - Univ. Wijaya Kusuma|1996 - Bruderan Purwokerto|1993 - Bruderan Purwokerto|1990 - Negeri 3 Purwokerto', 'sugengtriono@mahkamahagung.go.id', '-', '-', 'Hakim Ad Hoc Perikanan', 'Pengadilan Negeri Bitung', '29-04-2025 - Hakim Ad Hoc Perikanan Pengadilan Negeri Bitung|04-02-2020 - Hakim Ad Hoc Perikanan Pengadilan Negeri Bitung', NULL),
	(16, 24, 'Musdamin, S.Pi.', '7471060107770029', '-,', 'Kendari, 02-06-1977', 'Pria', 'SITTI RAHMADTIA', 1, 'Islam', '2002 - UNIVERSITAS HALUOLEO KENDARI', 'musdamin.spi@mahkamahagung.go.id', '-', '-', 'Hakim Ad Hoc Perikanan', 'Pengadilan Negeri Bitung', '14-01-2021 - Hakim Ad Hoc Perikanan Pengadilan Negeri Bitung', NULL),
	(17, 39, 'Ir. Ruslan, M.M.', '1963121902202211007', '-,', 'Sidenreng Rappang, 10-04-1965', 'Pria', 'ANDI SURYANI', 0, 'Islam', '1989 - Universitas Hasanuddin', 'ruslan.mm@mahkamahagung.go.id', '-', '-', 'Hakim Ad Hoc Perikanan', 'Pengadilan Negeri Bitung', '11-11-2022 - Hakim Ad Hoc Perikanan Pengadilan Negeri Bitung', NULL),
	(18, 22, 'Alex Tarugi Tobing, S.H., M.H.', '3275041004670019', '-,', 'Jakarta Timur, 10-04-1967', 'Pria', 'Silvia R. Hutagalung, SH., MKn', 3, '', '2007 - Universitas Krisnadwipayana|1996 - Universitas Tarumanegara', 'alex_tobing4@mahkamahagung.go.id', '-', '-', 'Hakim Ad Hoc Perikanan', 'Pengadilan Negeri Ambon', '29-04-2025 - Hakim Ad Hoc Perikanan Pengadilan Negeri Ambon|29-04-2020 - Hakim Ad Hoc Perikanan Pengadilan Negeri Ambon', NULL),
	(19, 28, 'Nursyamsi Junus, ST, M.Sc.', '7371105310730004', '-,', 'Makassar, 13-10-1973', 'Wanita', 'Pandu Murti Hardjo Suparman', 3, 'Islam', '2009 - Universitas Gadjah Mada|1998 - Universitas Hasanuddin Makassar', 'nunukp@mahkamahagung.go.id', '-', '-', 'Hakim Ad Hoc Perikanan', 'Pengadilan Negeri Ambon', '26-02-2021 - Hakim Ad Hoc Perikanan Pengadilan Negeri Ambon', NULL),
	(20, 29, 'Sitti Muslimah Bachrum, S.Pi., M.P.', '7371144506710008', '-,', 'Gowa, 05-06-1971', 'Wanita', 'Muhammad Nur Taqwim, S.Pt', 5, 'Islam', '2010 - Universitas Hasanuddin|1995 - Universitas Hasanuddin Makassar', 'imah.bachrum@mahkamahagung.go.id', '-', '-', 'Hakim Ad Hoc Perikanan', 'Pengadilan Negeri Ambon', '26-02-2021 - Hakim Ad Hoc Perikanan Pengadilan Negeri Ambon', NULL),
	(21, 1, 'Ir. Armain Naim, S.H., MSi.', '8271021807680001', 'IV/d, 01-10-2024', 'Halmahera Selatan, 18-07-1968', 'Pria', 'AIDA WAHID, SH', 4, 'Islam', '2010 - Universitas Terbuka', 'armain.naim@mahkamahagung.go.id', '-', '-', 'Hakim Ad Hoc Perikanan', 'Pengadilan Negeri Tual', '29-04-2025 - Hakim Ad Hoc Perikanan Pengadilan Negeri Tual|04-02-2020 - Hakim Ad Hoc Perikanan Pengadilan Negeri Tual|01-03-1995 - Fungsional Umum Instansi Luar', NULL),
	(22, 2, 'Dr. Ir. Irawan Muripto, M.Sc.', '3175042509510002', 'IV/d, 01-09-2016', 'Semarang, 25-09-1951', 'Pria', 'MA. Ida Hendraningrum, AMd.', 4, 'Islam', '2000 - Institut Pertanian Bogor|1988 - Kyushu University, Japan|1981 - Universitas Brawijaya', 'irawan@mahkamahagung.go.id', '-', '-', 'Hakim Ad Hoc Perikanan', 'Pengadilan Negeri Tual', '24-03-2021 - Hakim Ad Hoc Perikanan Pengadilan Negeri Tual|01-04-2007 - Dosen Badan Penelitian Dan Pengembangan Dan Pendidikan Dan Pelatihan Hukum Dan Peradilan|01-03-1976 - Analis Penelitian dan Pengembangan Instansi Luar', NULL),
	(23, 6, 'Saptoyo, S.E., M.Sc.', '6171020910690009', 'IV/b, 01-04-2022', 'Banyumas, 09-10-1969', 'Pria', 'DESI KARTIKA', 3, 'Islam', '2006 - Institut Pertanian Bogor|2000 - Universitas Tanjungpura|1993 - Sekolah Tinggi Perikanan Jakarta, Jakarta', 'saptoyo@mahkamahagung.go.id', '-', '-', 'Hakim Ad Hoc Perikanan', 'Pengadilan Negeri Tual', '24-03-2021 - Hakim Ad Hoc Perikanan Pengadilan Negeri Tual|01-04-1995 - Staf Instansi Luar|01-04-1994 - Pelaksana Instansi Luar', NULL),
	(24, 23, 'Unggul Senoaji, S.H.', '3201130912661001', '-, 01-04-2018', 'Banyumas, 09-12-1966', 'Pria', 'susanti', 1, 'Islam', '2007 - STIH IBLAM', 'unggulsenoaji@mahkamahagung.go.id', '-', '-', 'Hakim Ad Hoc Perikanan', 'Pengadilan Negeri Merauke', '29-04-2025 - Hakim Ad Hoc Perikanan Pengadilan Negeri Merauke|04-02-2020 - Hakim Ad Hoc Perikanan Pengadilan Negeri Merauke', NULL),
	(25, 30, 'Anthony Soediarto, S.H., M.Hum.', '3404101012550004', '-,', 'Pati, 10-12-1953', 'Pria', 'Endang Yayuk Andriani putri', 2, 'Kristen Protestan', '2001 - SEKOLAH TINGGI ILMU HUKUM IBLAM|1984 - Universitas Jember', 'anthonysoediarto1953@mahkamahagung.go.id', '-', '-', 'Hakim Ad Hoc Perikanan', 'Pengadilan Negeri Merauke', '01-03-2021 - Hakim Ad Hoc Perikanan Pengadilan Negeri Merauke', NULL),
	(26, 41, 'Aco Harsandi, S.H., M.H.', '7371081512770004', '-,', 'Ujung Pandang, 15-12-1977', 'Pria', 'Harpika Ayu', 4, 'Islam', '2021 - UNIVERSITAS MUSLIM INDONESIA', 'acoharsandi1977@mahkamahagung.go.id', '-', '-', 'Hakim Ad Hoc Perikanan', 'Pengadilan Negeri Merauke', '01-02-2023 - Hakim Ad Hoc Perikanan Pengadilan Negeri Merauke', NULL),
	(27, 37, 'Awaluddin, S.Pi', '1977031902202211004', '-,', 'Ujung Pandang, 19-03-1977', 'Pria', 'Siti Surya', 5, 'Islam', '2012 - Sekolah Tinggi Teknologi Kelautan Balik Diwa, Makassar|1998 - Politeknik Pertanian Negeri Pangkajene dan Kepulauan, Pangkajene Kepulauan|1995 - SUPM Negeri Tegal Jawa Tengah|1992 - SMP Pesantren IMMIM Ujungpandang|1989 - SD Neg.3 Sinjai', 'awal.awaluddin@mahkamahagung.go.id', '-', '-', 'Hakim Ad Hoc Perikanan', 'Pengadilan Negeri Sorong', '11-11-2022 - Hakim Ad Hoc Perikanan Pengadilan Negeri Sorong', NULL),
	(28, 3, 'Hunter Hosen, S.Pi., M.Si.', '7373090702680001', 'IV/c, 01-04-2023', 'Palopo, 07-02-1968', 'Pria', 'ROSMATI, S.Ag.', 3, 'Islam', '2009 - UNIVERSITAS HASANUDDIN|1994 - UNIVERSITAS HASANUDDIN|1988 - SMA Negeri Palopo|1985 - SMP Neg. 1 Palopo|1982 - SD Neg. No.79 Tappong', 'hunterhosen@mahkamahagung.go.id', '-', '-', 'Hakim Ad Hoc Perikanan', 'Pengadilan Negeri Sorong', '26-03-2021 - Hakim Ad Hoc Perikanan Pengadilan Negeri Sorong', 'Diklat Teknis Perencanaan ()'),
	(29, 5, 'Asriadi, S.Kel., M.Si.', '7371140105780006', 'IV/b, 01-04-2025', 'Bone, 01-05-1978', 'Pria', 'SINARDI, ST.,M.Si.', 4, 'Islam', '2008 - UNIVERSITAS HASANUDDIN|2003 - Universitas Hasanuddin|1996 - SMU Negeri 1 Watampone|1993 - SMP Negeri 2 Watampone|1990 - SDN No. 7 Watampone', 'asrisea@mahkamahagung.go.id', '-', '-', 'Hakim Ad Hoc Perikanan', 'Pengadilan Negeri Sorong', '29-04-2025 - Hakim Ad Hoc Perikanan Pengadilan Negeri Sorong|15-04-2020 - Hakim Ad Hoc Perikanan Pengadilan Negeri Sorong', NULL),
	(30, 16, 'Abdullah, APi, MMA.', '1271161211610003', '-,', 'Medan, 12-11-1961', 'Pria', 'Sri Rezeki, S.Sos.', 3, 'Islam', '2007 - Univ. Medan Area|1992 - Sekolah Tinggi Perikanan Jakarta, Jakarta', 'abdullah1@mahkamahagung.go.id', '-', '-', 'Hakim Ad Hoc Perikanan', 'Pengadilan Negeri Tanjung Pinang', '06-05-2025 - Hakim Ad Hoc Perikanan Pengadilan Negeri Tanjung Pinang|03-04-2020 - Hakim Ad Hoc Perikanan Pengadilan Negeri Tanjung Pinang', NULL),
	(31, 17, 'Wedy Novizar, S.H.', '3515072411690004', '-,', 'Sabang, 24-11-1969', 'Pria', 'NUNUK SULISTJANI', 2, 'Islam', '1995 - Universitas Syiah Kuala Banda Aceh', 'wedynovizar@mahkamahagung.go.id', '-', '-', 'Hakim Ad Hoc Perikanan', 'Pengadilan Negeri Tanjung Pinang', '06-05-2025 - Hakim Ad Hoc Perikanan Pengadilan Negeri Tanjung Pinang|03-06-2020 - Hakim Ad Hoc Perikanan Pengadilan Negeri Tanjung Pinang', NULL),
	(32, 27, 'Joko Supraptomo, A.Pi., M.M.', '3302260510630004', '-,', 'Jakarta Pusat, 05-10-1963', 'Pria', 'Nurhayati', 5, 'Islam', '2004 - UNP.Negeri Padang', 'jokosupraptomo01@mahkamahagung.go.id', '-', '-', 'Hakim Ad Hoc Perikanan', 'Pengadilan Negeri Tanjung Pinang', '01-04-2021 - Hakim Ad Hoc Perikanan Pengadilan Negeri Tanjung Pinang', NULL),
	(33, 31, 'Sigit Wibowo, S.Pi., M.Pi', '3313131809790001', '-,', 'Semarang, 18-09-1979', 'Pria', 'Rheny Budy Utamy', 3, 'Islam', '2019 - UNIVERSITAS DIPONEGORO|2004 - UNIVERSITAS DIPONEGORO|1998 - SMU N 1 Kudus|1995 - SMP N 1 Kudus|1992 - SD Barongan 3 Kudus', 'sigitwibowo01@mahkamahagung.go.id', '-', '-', 'Hakim Ad Hoc Perikanan', 'Pengadilan Negeri Tanjung Pinang', '08-12-2022 - Hakim Ad Hoc Perikanan Pengadilan Negeri Tanjung Pinang', NULL),
	(34, 32, 'Handono, S.H.', '3578130101650008', '-,', 'Malang, 01-01-1965', 'Pria', 'NINING DWI ARIANTY, SH', 2, 'Islam', '1995 - Universitas Gajah Mada Yogyakarta', 'handono01@mahkamahagung.go.id', '-', '-', 'Hakim Ad Hoc Perikanan', 'Pengadilan Negeri Tanjung Pinang', '08-12-2022 - Hakim Ad Hoc Perikanan Pengadilan Negeri Tanjung Pinang', NULL),
	(35, 33, 'Ir. Raymond RM Bako, MA., QIA', '3174070305630006', '-,', 'DKI Jakarta, 03-05-1963', 'Pria', 'ANI PRANANTI', 3, 'Islam', '1999 - Ehimee University, Japan', 'raymond1963@mahkamahagung.go.id', '-', '-', 'Hakim Ad Hoc Perikanan', 'Pengadilan Negeri Tanjung Pinang', '08-12-2022 - Hakim Ad Hoc Perikanan Pengadilan Negeri Tanjung Pinang', NULL),
	(36, 34, 'Devi Arnita, S.Pi.,M.Si.', '1871124109800003', '-,', 'Tanjung Karang, 01-09-1980', 'Wanita', '', 0, 'Islam', '2014 - Institut Pertanian Bogor|2004 - Universitas Riau|1999 - SEKOLAH MENENGAH UMUM NEGERI 1 BANDAR LAMPUNG|1996 - SEKOLAH MENENGAH PERTAMA NEGERI 4 TANJUNGKARANG|1993 - SEKOLAH DASAR NEGERI I KEBUN JERUK TANJUNGKARANG TIMUR', 'deviarnita01@gmail.co.id', '-', '-', 'Hakim Ad Hoc Perikanan', 'Pengadilan Negeri Tanjung Pinang', '08-12-2022 - Hakim Ad Hoc Perikanan Pengadilan Negeri Tanjung Pinang', 'Fokus Group Diskusi Hasil Kajian Hukum Direktorat Hukum dan Regulasi PPATK dengan judul "Problematika Penegakan Hukum Tindak Pidana Pencucian Uang dari Tindak Pidana Asal di Bidang Perikanan". (14-12-2022)|Pelatihan Sertifikasi Hakim Karir dan Calon Hakim Ad Hoc Pengadilan Perikanan Di Lingkungan Peradilan Umum Seluruh Indonesia Kerjasama Mahkamah Agung Republik Indonesia CQ Badan Litbang Diklat Kumdil Dengan Kementerian Kelautan dan Perikanan RI (26-09-2022)'),
	(37, 38, 'Dr. Halomoan Freddy Sitinjak Alexandra, S.H.,M.H.', '3175101312630005', '-,', 'Pematangsiantar, 13-12-1963', 'Pria', 'RINATA ADELINA SILABAN', 4, 'Katholik', '2021 - Universitas Islam Sultan Agung', 'halomoansitinjak@mahkamahagung.go.id', '-', '-', 'Hakim Ad Hoc Perikanan', 'Pengadilan Negeri Natuna', '11-11-2022 - Hakim Ad Hoc Perikanan Pengadilan Negeri Natuna', NULL),
	(38, 4, 'Sutriyadi, S.H., M.Si', '3578162705610002', 'IV/b, 01-05-2019', 'Sragen, 27-05-1961', 'Pria', 'SRININGSIH', 0, 'Islam', '2004 - UI|1996 - Univ. Merdeka Surabaya', 'sutriyadi296@mahkamahagung.go.id', '-', '-', 'Hakim Ad Hoc Perikanan', 'Pengadilan Negeri Natuna', '29-04-2025 - Hakim Ad Hoc Perikanan Pengadilan Negeri Natuna|04-02-2020 - Hakim Ad Hoc Perikanan Pengadilan Negeri Natuna', NULL),
	(39, 11, 'Endro Basuki Prabowo, A.Pi.', '1871132109620005', 'IV/a, 26-02-2021', 'Purwokerto, 21-09-1962', 'Pria', 'Arnila, SE', 1, 'Islam', '2014 - Universitas Lampung', 'endro_bonding@mahkamahagung.go.id', '-', '-', 'Hakim Ad Hoc Perikanan', 'Pengadilan Negeri Natuna', '26-02-2021 - Hakim Ad Hoc Perikanan Pengadilan Negeri Natuna|14-01-2021 - Hakim Ad Hoc Perikanan Pengadilan Negeri Natuna', NULL),
	(40, 10, 'Sirodjuddin, S.H., M.H.', '3578040206700007', 'IV/a, 01-10-2010', 'Semarang, 02-06-1970', 'Pria', 'EUIS DARLIYAH, SE', 2, 'Islam', '2013 - Universitas Sebelas Maret', 'sirodjuddin174@mahkamahagung.go.id', '-', '-', 'Hakim Ad Hoc Perikanan', 'Pengadilan Negeri Natuna', '28-04-2021 - Hakim Ad Hoc Perikanan Pengadilan Negeri Natuna', NULL),
	(41, 12, 'Suriadi, S.H.,M.H.', '1371040205780005', 'III/b, 01-10-2019', 'Langkat, 02-05-1978', 'Pria', 'PUTRI RAUDHATUL ZANNAH, S.H., M.H.', 2, 'Islam', '2024 - UNIVERSITAS MUHAMMADIYAH SUMATERA UTARA|2013 - Universitas Taman Siswa Padang', 'suriadihakim97@mahkamahagunggo.id', '-', '-', 'Hakim Ad Hoc Perikanan', 'Pengadilan Negeri Natuna', '08-03-2021 - Hakim Ad Hoc Perikanan Pengadilan Negeri Natuna', NULL);

-- Dumping structure for table subdit_hakim.hakim_adhoc_perikanan
CREATE TABLE IF NOT EXISTS `hakim_adhoc_perikanan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `nip_nrp` varchar(20) DEFAULT NULL,
  `nik` varchar(20) DEFAULT NULL,
  `tempat_lahir` varchar(100) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` char(1) DEFAULT NULL,
  `pendidikan_terakhir` varchar(10) DEFAULT NULL,
  `jabatan` varchar(100) DEFAULT NULL,
  `tmt_gol` date DEFAULT NULL,
  `golongan` varchar(10) DEFAULT NULL,
  `tmt_mutasi` date DEFAULT NULL,
  `id_pengadilan` int(11) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `asal_organisasi` varchar(255) DEFAULT NULL,
  `tgl_pelantikan` date DEFAULT NULL,
  `kepres` varchar(100) DEFAULT NULL,
  `tgl_kepres` date DEFAULT NULL,
  `sk_dirjen` varchar(100) DEFAULT NULL,
  `tgl_sk_dirjen` date DEFAULT NULL,
  `masa_jabatan` varchar(50) DEFAULT NULL,
  `status_perpanjangan` varchar(100) DEFAULT NULL,
  `tanggal_habis` date DEFAULT NULL,
  `tmt_pn` date DEFAULT NULL,
  `tmt_hk` date DEFAULT NULL,
  `tgl_perpanjangan_pred` date DEFAULT NULL,
  `tgl_perpanjangan` date DEFAULT NULL,
  `sk_perpanjangan` varchar(100) DEFAULT NULL,
  `tgl_sk_perpanjangan` date DEFAULT NULL,
  `sumber_foto` varchar(50) DEFAULT NULL,
  `tmt_jabatan` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table subdit_hakim.hakim_adhoc_perikanan: ~41 rows (approximately)
INSERT INTO `hakim_adhoc_perikanan` (`id`, `nama`, `nip_nrp`, `nik`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `pendidikan_terakhir`, `jabatan`, `tmt_gol`, `golongan`, `tmt_mutasi`, `id_pengadilan`, `foto`, `asal_organisasi`, `tgl_pelantikan`, `kepres`, `tgl_kepres`, `sk_dirjen`, `tgl_sk_dirjen`, `masa_jabatan`, `status_perpanjangan`, `tanggal_habis`, `tmt_pn`, `tmt_hk`, `tgl_perpanjangan_pred`, `tgl_perpanjangan`, `sk_perpanjangan`, `tgl_sk_perpanjangan`, `sumber_foto`, `tmt_jabatan`) VALUES
	(1, 'Ir. Armain Naim, S.H., MSi.', '8271021807680001', '8271021807680001', 'Halmahera Selatan', '1968-07-18', 'L', 'S-2', 'Hakim Ad Hoc Perikanan', '2024-10-01', 'IV/d', '2025-04-29', 16, '40982.jpeg', 'DITJEN PSDKP AMBON', '2020-04-27', 'KEPRES NO 128/P TAHUN 2019', '2019-11-21', '17/KMA/SK/II/2020', '2020-02-04', '2', 'Masa Jabatan 2 Kali - Berakhir: 29-04-2030', '2030-04-29', '2020-01-17', '2020-01-17', '2025-04-27', '2025-04-29', '31/P TAHUN 2025', '2025-03-04', 'sikep', '2025-04-29'),
	(2, 'Dr. Ir. Irawan Muripto, M.Sc.', '3175042509510002', '3175042509510002', 'Semarang', '1951-09-25', 'L', 'S-3', 'Hakim Ad Hoc Perikanan', '2016-09-01', 'IV/d', '2021-03-24', 1, '41245.bmp', NULL, '2021-03-24', 'KEPRES NO 137/P TAHUN 2020', '2020-12-30', '04/KMA/SK/I/2021', '2021-01-14', '1', 'Masa Jabatan 1 kali, akhir jabatan adalah 24-03-2026', '2026-03-24', '2021-01-14', '2021-01-14', '2026-03-24', NULL, NULL, NULL, 'sikep', '2021-03-24'),
	(3, 'Hunter Hosen, S.Pi., M.Si.', '7373090702680001', '7373090702680001', 'Palopo', '1968-02-07', 'L', 'S-2', 'Hakim Ad Hoc Perikanan', '2023-04-01', 'IV/c', '2021-03-26', 2, '41238.jpeg', NULL, '2021-03-26', 'KEPRES NO 137/P TAHUN 2020', '2020-12-30', '04/KMA/SK/I/2021', '2021-01-14', '1', 'Masa Jabatan 1 kali, akhir jabatan adalah 26-03-2026', '2026-03-26', '2021-01-14', '2021-01-14', '2026-03-26', NULL, NULL, NULL, 'sikep', '2021-03-26'),
	(4, 'Sutriyadi, S.H., M.Si', '3578162705610002', '3578162705610002', 'Sragen', '1961-05-27', 'L', 'S-2', 'Hakim Ad Hoc Perikanan', '2019-05-01', 'IV/b', '2025-04-29', 3, '40968.jpg', 'PUSDIKPOMAL KODIKDUKUM KODIKLATAL', '2020-04-23', 'KEPRES NO 128/P TAHUN 2019', '2019-11-21', '17/KMA/SK/II/2020', '2020-02-04', '2', 'Masa Jabatan 2 Kali - Berakhir: 29-04-2030', '2030-04-29', '2020-01-17', '2020-01-17', '2025-04-23', '2025-04-29', 'NOMOR 52/KMA/SK.KP1.2.3/IV/2025', '2025-04-08', 'sikep', '2025-04-29'),
	(5, 'Asriadi, S.Kel., M.Si.', '7371140105780006', '7371140105780006', 'Bone', '1978-05-01', 'L', 'S-2', 'Hakim Ad Hoc Perikanan', '2025-04-01', 'IV/b', '2025-04-29', 2, '40984.jpg', 'BALAI PENGELOLAAN SUMBERDAYA PESISIR DAN LAUT(BPSPL)', '2020-04-15', 'KEPRES NO 128/P TAHUN 2019', '2019-11-21', '17/KMA/SK/II/2020', '2020-02-04', '2', 'Masa Jabatan 2 Kali - Berakhir: 29-04-2030', '2030-04-29', '2020-01-17', '2020-01-17', '2025-04-15', '2025-04-29', '31/P TAHUN 2025', '2025-03-04', 'sikep', '2025-04-29'),
	(6, 'Saptoyo, S.E., M.Sc.', '6171020910690009', '6171020910690009', 'Banyumas', '1969-10-09', 'L', 'S-2', 'Hakim Ad Hoc Perikanan', '2022-04-01', 'IV/b', '2021-03-24', 1, '41243.jpg', NULL, '2021-03-24', 'KEPRES NO 137/P TAHUN 2020', '2020-12-30', '04/KMA/SK/I/2021', '2021-01-14', '1', 'Masa Jabatan 1 kali, akhir jabatan adalah 24-03-2026', '2026-03-24', '2021-01-14', '2021-01-14', '2026-03-24', NULL, NULL, NULL, 'sikep', '2021-03-24'),
	(7, 'Soniady Drajat Sadarisman, S.H., M.H.', '3273162705690002', '3273162705690002', 'Bandung', '1969-05-27', 'L', 'S-2', 'Hakim Ad Hoc Perikanan', '2020-12-31', 'IV/a', '2021-03-31', 4, '41231.jpg', NULL, '2021-04-01', 'KEPRES NO 137/P TAHUN 2020', '2020-12-30', '04/KMA/SK/I/2021', '2021-01-14', '1', 'Masa Jabatan 1 kali, akhir jabatan adalah 01-04-2026', '2026-04-01', '2021-01-14', '2021-01-14', '2026-04-01', NULL, NULL, NULL, 'sikep', '2021-03-31'),
	(8, 'Ir. Raja Pasaribu, M.Sc.', '3275022202600015', '3275022202600015', 'Padangsidimpuan', '1960-02-22', 'L', 'S-2', 'Hakim Ad Hoc Perikanan', '2020-12-31', 'IV/a', '2021-03-31', 4, '41232.jpeg', NULL, '2021-04-01', 'KEPRES NO 137/P TAHUN 2020', '2020-12-30', '04/KMA/SK/I/2021', '2021-01-14', '1', 'Masa Jabatan 1 kali, akhir jabatan adalah 01-04-2026', '2026-04-01', '2021-01-14', '2021-01-14', '2026-04-01', NULL, NULL, NULL, 'sikep', '2021-03-31'),
	(9, 'Syaiful Anam, S.H., M.H.', '3578183101760001', '3578183101760001', 'Tuban', '1976-01-31', 'L', 'S-2', 'Hakim Ad Hoc Perikanan', '2020-12-31', 'IV/a', '2021-03-31', 4, '41233.jpg', NULL, '2021-04-01', 'KEPRES NO 137/P TAHUN 2020', '2020-12-30', '04/KMA/SK/I/2021', '2021-01-14', '1', 'Masa Jabatan 1 kali, akhir jabatan adalah 01-04-2026', '2026-04-01', '2021-01-14', '2021-01-14', '2026-04-01', NULL, NULL, NULL, 'sikep', '2021-03-31'),
	(10, 'Sirodjuddin, S.H., M.H.', '3578040206700007', '3578040206700007', 'Semarang', '1970-06-02', 'L', 'S-2', 'Hakim Ad Hoc Perikanan', '2010-10-01', 'IV/a', '2021-04-28', 3, '41235.jpeg', NULL, '2021-04-28', 'KEPRES NO 137/P TAHUN 2020', '2020-12-30', '04/KMA/SK/I/2021', '2021-01-14', '1', 'Masa Jabatan 1 kali, akhir jabatan adalah 28-04-2026', '2026-04-28', '2021-01-14', '2021-01-14', '2026-04-28', NULL, NULL, NULL, 'sikep', '2021-04-28'),
	(11, 'Endro Basuki Prabowo, A.Pi.', '1871132109620005', '1871132109620005', 'Purwokerto', '1962-09-21', 'L', 'D-IV', 'Hakim Ad Hoc Perikanan', '2021-02-26', 'IV/a', '2021-02-26', 3, '41244.jpeg', NULL, '2021-02-26', 'KEPRES NO 137/P TAHUN 2020', '2020-12-30', '04/KMA/SK/I/2021', '2021-01-14', '1', 'Masa Jabatan 1 kali, akhir jabatan adalah 26-02-2026', '2026-02-26', '2021-01-14', '2021-01-14', '2026-02-26', NULL, NULL, NULL, 'sikep', '2021-02-26'),
	(12, 'Suriadi, S.H.,M.H.', '1371040205780005', '1371040205780005', 'Langkat', '1978-05-02', 'L', 'S-2', 'Hakim Ad Hoc Perikanan', '2019-10-01', 'III/b', '2021-03-08', 3, '41240.jpg', NULL, '2021-03-29', 'KEPRES NO 137/P TAHUN 2020', '2020-12-30', '04/KMA/SK/I/2021', '2021-01-14', '1', 'Masa Jabatan 1 kali, akhir jabatan adalah 29-03-2026', '2026-03-29', '2021-01-14', '2021-01-14', '2026-03-29', NULL, NULL, NULL, 'sikep', '2021-03-08'),
	(13, 'Hendra Adi Pramono, S.H., M.H.', '3578090810760004', '3578090810760004', 'Banyuwangi', '1976-10-08', 'L', 'S-1', 'Hakim Ad Hoc Perikanan', '0000-00-00', '-', '2025-04-29', 5, '40946.jpg', 'PUSDIKPOMAL KODIKDUKUM KODIKLATAL', '2020-04-14', 'KEPRES NO 128/P TAHUN 2019', '2019-11-21', '17/KMA/SK/II/2020', '2020-02-04', '2', 'Masa Jabatan 2 Kali - Berakhir: 29-04-2030', '2030-04-29', '2020-01-17', '2020-01-17', '2025-04-14', '2025-04-29', '31/P Tahun 2025', '2025-03-04', 'sikep', '2025-04-29'),
	(14, 'Sugeng Widodo, S.H.,.', '3515070202640005', '3515070202640005', 'Kediri', '1964-02-02', 'L', 'S-1', 'Hakim Ad Hoc Perikanan', '2020-04-22', '-', '2025-04-23', 4, '40954.jpeg', 'TNI AL', '2020-04-22', 'KEPRES NO 128/P TAHUN 2019', '2019-11-21', '17/KMA/SK/II/2020', '2020-02-04', '2', 'Masa Jabatan 2 Kali - Berakhir: 23-04-2030', '2030-04-23', '2020-01-17', '2020-01-17', '2025-04-22', '2025-04-23', '31/P Tahun 2025', '2025-03-04', 'sikep', '2025-04-23'),
	(15, 'Ir Robert Napitupulu, S.H.,MSc,.', '1271172509620001', '1271172509620001', 'Medan', '1961-09-25', 'L', 'S-2', 'Hakim Ad Hoc Perikanan', '2020-05-04', '-', '2025-04-23', 4, '40955.png', 'DINAS KELAUTAN DAN PERIKANAN', '2020-05-04', 'KEPRES NO 128/P TAHUN 2019', '2019-11-21', '17/KMA/SK/II/2020', '2020-02-04', '2', 'Masa Jabatan 2 Kali - Berakhir: 23-04-2030', '2030-04-23', '2020-01-17', '2020-01-17', '2025-05-04', '2025-04-23', '31/P Tahun 2025', '2025-03-04', 'sikep', '2025-04-23'),
	(16, 'Abdullah, APi, MMA.', '1271161211610003', '1271161211610003', 'Medan', '1961-11-12', 'L', 'S-2', 'Hakim Ad Hoc Perikanan', '0000-00-00', '-', '2025-05-06', 6, '40963.jpg', 'BALAI PELATIHAN DAN PENYULUHAN PERIKANAN MEDAN', '2020-04-03', 'KEPRES NO 128/P TAHUN 2019', '2019-11-21', '17/KMA/SK/II/2020', '2020-02-04', '2', 'Masa Jabatan 2 kali, akhir jabatan adalah 06-05-2030', '2030-05-06', '2020-01-17', '2020-01-17', '2025-04-03', '2025-05-06', '52/KMA/SK.KP1.2.3/IV/2025', '2025-04-08', 'sikep', '2025-05-06'),
	(17, 'Wedy Novizar, S.H.', '3515072411690004', '3515072411690004', 'Sabang', '1969-11-24', 'L', 'S-1', 'Hakim Ad Hoc Perikanan', '0000-00-00', '-', '2025-05-06', 6, '40964.jpeg', 'TNI AL', '2020-06-03', 'KEPRES NO 128/P TAHUN 2019', '2019-11-21', '17/KMA/SK/II/2020', '2020-02-04', '2', 'Masa Jabatan 2 Kali - Berakhir: 06-05-2030', '2030-05-06', '2020-01-17', '2020-01-17', '2025-06-03', '2025-05-06', '52/KMA/SK.KP1.2.3/IV/2025', '2025-04-08', 'sikep', '2025-05-06'),
	(18, 'Dr Urif Syarifudin, APi, MTA.', '7310042812700001', '7310042812700001', 'Jakarta Barat', '1970-12-28', 'L', 'D-IV', 'Hakim Ad Hoc Perikanan', '0000-00-00', '-', '2025-04-29', 7, '40974.jpg', 'BALAI PENGELOLAAN SUMBERDAYA PESISIR DAN LAUT MAKASSAR', '2020-04-13', 'KEPRES NO 128/P TAHUN 2019', '2019-11-21', '17/KMA/SK/II/2020', '2020-02-04', '2', 'Masa Jabatan 2 Kali - Berakhir: 29-04-2030', '2030-04-29', '2020-01-17', '2020-01-17', '2025-04-13', '2025-04-29', '52/KMA/SK.KP.1.2.3/IV/2025', '2025-04-08', 'sikep', '2025-04-29'),
	(19, 'Edi Utomo, S.H., M.H.', '3578091704710001', '3578091704710001', 'Purworejo', '1971-04-17', 'L', 'S-2', 'Hakim Ad Hoc Perikanan', '0000-00-00', '-', '2020-02-04', 7, '40975.jpg', 'TNI AL', '2020-04-13', 'KEPRES NO 128/P TAHUN 2019', '2019-11-21', '17/KMA/SK/II/2020', '2020-02-04', '2', 'Masa Jabatan 2 Kali - Berakhir: 28-04-2030', '2030-04-28', '2020-01-17', '2020-01-17', '2025-04-13', '2025-04-28', '52/KMA/SK.KP.1.2.3/IV/2025', '2025-04-08', 'sikep', '2020-02-04'),
	(20, 'SUGENG TRIONO, S.H., M.H.', '3302270705780002 ', '3302270705780002', 'BANYUMAS', '1978-05-07', 'L', 'S-2', 'Hakim Ad Hoc Perikanan', '0000-00-00', 'Mayor Laut', '2025-04-29', 8, '40954.jpeg', 'TNI AL', '2020-05-11', 'KEPRES NO 128/P TAHUN 2019', '2019-11-21', '17/KMA/SK/II/2020', '2020-02-04', '2', 'Masa Jabatan 2 Kali - Berakhir: 29-04-2030', '2030-04-29', '2020-01-17', '2020-01-17', '2025-05-11', '2025-04-29', '31/P TAHUN 2025', '2025-03-04', 'sikep', '2020-02-04'),
	(21, 'Temmy Fetrozian, SSt,Pi, M.H.', '1806010803770003', '1806010803770003', 'Bandar Lampung', '1977-03-08', 'L', 'S-2', 'Hakim Ad Hoc Perikanan', '0000-00-00', '-', '2025-04-29', 8, '40979.jpeg', 'PNS DINAS PENDIDIKAN PERIKANAN KABUPATEN TANGGAMUS', '2020-04-01', 'KEPRES NO 128/P TAHUN 2019', '2019-11-21', '17/KMA/SK/II/2020', '2020-02-04', '2', 'Masa Jabatan 2 Kali - Berakhir: 29-04-2030', '2030-04-29', '2020-01-17', '2020-01-17', '2025-04-01', '2025-04-29', '31/P Tahun 2025', '2025-04-03', 'sikep', '2025-04-29'),
	(22, 'Alex Tarugi Tobing, S.H., M.H.', '3275041004670019', '3275041004670019', 'Jakarta Timur', '1967-04-10', 'L', 'S-2', 'Hakim Ad Hoc Perikanan', '0000-00-00', '-', '2025-04-29', 9, '40988.jpg', 'KEMRNTRIAN KELAUTAN DAN PERIKANAN', '2020-04-29', 'KEPRES NO 128/P TAHUN 2019', '2019-11-21', '17/KMA/SK/II/2020', '2020-02-04', '2', 'Masa Jabatan 2 Kali - Berakhir: 29-04-2030', '2030-04-29', '2020-01-17', '2020-01-17', '2025-04-29', '2025-04-29', '31/P TAHUN 2025', '2025-03-04', 'sikep', '2025-04-29'),
	(23, 'Unggul Senoaji, S.H.', '3201130912661001', '3201130912661001', 'Banyumas', '1966-12-09', 'L', 'S-1', 'Hakim Ad Hoc Perikanan', '2018-04-01', '-', '2025-04-29', 10, '40991.png', 'STASIUN PENGAWASAN SUMBERDAYA KELAUTAN DAN PERIKANAN CILACAP', '2020-07-15', 'KEPRES NO 128/P TAHUN 2019', '2019-11-21', '17/KMA/SK/II/2020', '2020-02-04', '2', 'Masa Jabatan 2 Kali - Berakhir: 29-04-2030', '2030-04-29', '2020-01-17', '2020-01-17', '2025-07-15', '2025-04-29', '52/KMA/SK.KP1.2.3/IV/2025', '2025-04-08', 'sikep', '2025-04-29'),
	(24, 'Musdamin, S.Pi.', '7471060107770029', '7471060107770029', 'Kendari', '1977-06-02', 'L', 'S-1', 'Hakim Ad Hoc Perikanan', NULL, '-', '2021-01-14', 8, '41234.jpeg', NULL, '2021-03-01', 'KEPRES NO 137/P TAHUN 2020', '2020-12-30', '04/KMA/SK/I/2021', '2021-01-14', '1', 'Masa Jabatan 1 kali, akhir jabatan adalah 01-03-2026', '2026-03-01', '2021-01-14', '2021-01-14', '2026-03-01', NULL, NULL, NULL, 'sikep', '2021-01-14'),
	(25, 'Ir. Gatot Rudiyono, S.H., M.M.', '6171010301580001', '6171010301580001', 'Makassar', '1958-01-03', 'L', 'S-2', 'Hakim Ad Hoc Perikanan', NULL, '-', '2021-03-04', 7, '41236.jpg', NULL, '2021-03-04', 'KEPRES NO 137/P TAHUN 2020', '2020-12-30', '04/KMA/SK/I/2021', '2021-01-14', '1', 'Masa Jabatan 1 kali, akhir jabatan adalah 04-03-2026', '2026-03-04', '2021-01-14', '2021-01-14', '2026-03-04', NULL, NULL, NULL, 'sikep', '2021-03-04'),
	(26, 'Dr. Nova Yuniarti, S.Pi., M.P.', '7371136506750009', '7371136506750009', 'Gowa', '1975-06-25', 'P', 'S-3', 'Hakim Ad Hoc Perikanan', NULL, '-', '2021-03-04', 7, '41237.jpg', NULL, '2021-03-04', 'KEPRES NO 137/P TAHUN 2020', '2020-12-30', '04/KMA/SK/I/2021', '2021-01-14', '1', 'Masa Jabatan 1 kali, akhir jabatan adalah 04-03-2026', '2026-03-04', '2021-01-14', '2021-01-14', '2026-03-04', NULL, NULL, NULL, 'sikep', '2021-03-04'),
	(27, 'Joko Supraptomo, A.Pi., M.M.', '3302260510630004', '3302260510630004', 'Jakarta Pusat', '1963-10-05', 'L', 'S-2', 'Hakim Ad Hoc Perikanan', NULL, '-', '2021-04-01', 6, '41239.jpg', NULL, '2021-04-01', 'KEPRES NO 137/P TAHUN 2020', '2020-12-30', '04/KMA/SK/I/2021', '2021-01-14', '1', 'Masa Jabatan 1 kali, akhir jabatan adalah 01-04-2026', '2026-04-01', '2021-01-14', '2021-01-14', '2026-04-01', NULL, NULL, NULL, 'sikep', '2021-04-01'),
	(28, 'Nursyamsi Junus, ST, M.Sc.', '7371105310730004', '7371105310730004', 'Makassar', '1973-10-13', 'P', 'S-2', 'Hakim Ad Hoc Perikanan', NULL, '-', '2021-02-26', 9, '41241.jpg', NULL, '2021-02-26', 'KEPRES NO 137/P TAHUN 2020', '2020-12-30', '04/KMA/SK/I/2021', '2021-01-14', '1', 'Masa Jabatan 1 kali, akhir jabatan adalah 26-02-2026', '2026-02-26', '2021-01-14', '2021-01-14', '2026-02-26', NULL, NULL, NULL, 'sikep', '2021-02-26'),
	(29, 'Sitti Muslimah Bachrum, S.Pi., M.P.', '7371144506710008', '7371144506710008', 'Gowa', '1971-06-05', 'P', 'S-2', 'Hakim Ad Hoc Perikanan', NULL, '-', '2021-02-26', 9, '41242.jpeg', NULL, '2021-02-26', 'KEPRES NO 137/P TAHUN 2020', '2020-12-30', '04/KMA/SK/I/2021', '2021-01-14', '1', 'Masa Jabatan 1 kali, akhir jabatan adalah 26-02-2026', '2026-02-26', '2021-01-14', '2021-01-14', '2026-02-26', NULL, NULL, NULL, 'sikep', '2021-02-26'),
	(30, 'Anthony Soediarto, S.H., M.Hum.', '3404101012550004', '3404101012550004', 'Pati', '1953-12-10', 'L', 'S-2', 'Hakim Ad Hoc Perikanan', NULL, '-', '2021-03-01', 10, '41246.png', NULL, '2021-03-01', 'KEPRES NO 137/P TAHUN 2020', '2020-12-30', '04/KMA/SK/I/2021', '2021-01-14', '1', 'Masa Jabatan 1 kali, akhir jabatan adalah 01-03-2026', '2026-03-01', '2021-01-14', '2021-01-14', '2026-03-01', NULL, NULL, NULL, 'sikep', '2021-03-01'),
	(31, 'Sigit Wibowo, S.Pi., M.Pi', '3313131809790001', '3313131809790001', 'Semarang', '1979-09-18', 'L', 'S-2', 'Hakim Ad Hoc Perikanan', NULL, '-', '2022-12-08', 6, '45286.jpg', NULL, '2022-12-08', '96/P Tahun 2022', '2022-09-12', '326/KMA/SK/XI/2022', '2022-11-11', '1', 'Masa Jabatan 1 kali, akhir jabatan adalah 08-12-2027', '2027-12-08', '2022-11-11', '2022-11-11', '2027-12-08', NULL, NULL, NULL, 'sikep', '2022-12-08'),
	(32, 'Handono, S.H.', '3578130101650008', '3578130101650008', 'Malang', '1965-01-01', 'L', 'S-1', 'Hakim Ad Hoc Perikanan', NULL, '-', '2022-12-08', 6, '45289.jpg', NULL, '2022-12-08', '96/P Tahun 2022', '2022-09-12', '326/KMA/SK/XI/2022', '2022-11-11', '1', 'Masa Jabatan 1 kali, akhir jabatan adalah 08-12-2027', '2027-12-08', '2022-11-11', '2022-11-11', '2027-12-08', NULL, NULL, NULL, 'sikep', '2022-12-08'),
	(33, 'Ir. Raymond RM Bako, MA., QIA', '3174070305630006', '3174070305630006', 'DKI Jakarta', '1963-05-03', 'L', 'S-2', 'Hakim Ad Hoc Perikanan', NULL, '-', '2022-12-08', 6, '45291.jpg', NULL, '2022-12-08', '96/P Tahun 2022', '2022-09-12', '326/KMA/SK/XI/2022', '2022-11-11', '1', 'Masa Jabatan 1 kali, akhir jabatan adalah 08-12-2027', '2027-12-08', '2022-11-11', '2022-11-11', '2027-12-08', NULL, NULL, NULL, 'sikep', '2022-12-08'),
	(34, 'Devi Arnita, S.Pi.,M.Si.', '1871124109800003', '1871124109800003', 'Tanjung Karang', '1980-09-01', 'P', 'S-2', 'Hakim Ad Hoc Perikanan', NULL, '-', '2022-12-08', 6, '45292.jpg', NULL, '2022-12-08', '96/P Tahun 2022', '2022-09-12', '326/KMA/SK/XI/2022', '2022-11-11', '1', 'Masa Jabatan 1 kali, akhir jabatan adalah 08-12-2027', '2027-12-08', '2022-11-11', '2022-11-11', '2027-12-08', NULL, NULL, NULL, 'sikep', '2022-12-08'),
	(35, 'Warsita, S.H.', '3515082010720008', '3515082010720008', 'Sukoharjo', '1972-10-20', 'L', 'S-1', 'Hakim Ad Hoc Perikanan', NULL, '-', '2022-12-21', 5, '45297.jpg', NULL, '2022-12-21', '96/P Tahun 2022', '2022-09-12', '326/KMA/SK/XI/2022', '2022-11-11', '1', 'Masa Jabatan 1 kali, akhir jabatan adalah 21-12-2027', '2027-12-21', NULL, '2022-11-11', '2027-12-21', NULL, NULL, NULL, 'sikep', '2022-12-21'),
	(36, 'Ir. Arnofi', '1371082911630002', '1371082911630002', 'Padang', '1963-11-29', 'L', 'S-1', 'Hakim Ad Hoc Perikanan', NULL, '-', '2022-12-21', 5, '45302.jpg', NULL, '2022-12-21', '96/P Tahun 2022', '2022-09-12', '326/KMA/SK/XI/2022', '2022-11-11', '1', 'Masa Jabatan 1 kali, akhir jabatan adalah 21-12-2027', '2027-12-21', '2022-11-11', '2022-11-11', '2027-12-21', NULL, NULL, NULL, 'sikep', '2022-12-21'),
	(37, 'Awaluddin, S.Pi', '1977031902202211004', '7371061903770003', 'Ujung Pandang', '1977-03-19', 'L', 'S-1', 'Hakim Ad Hoc Perikanan', NULL, '-', '2022-11-11', 2, '45314.jpg', NULL, '2022-12-14', '96/P Tahun 2022', '2022-09-12', '326/KMA/SK/XI/2022', '2022-11-11', '1', 'Masa Jabatan 1 kali, akhir jabatan adalah 14-12-2027', '2027-12-14', '2022-11-11', '2022-11-11', '2027-12-14', NULL, NULL, NULL, 'sikep', '2022-11-11'),
	(38, 'Dr. Halomoan Freddy Sitinjak Alexandra, S.H.,M.H.', '3175101312630005', '3175101312630005', 'Pematangsiantar', '1963-12-13', 'L', 'S-3', 'Hakim Ad Hoc Perikanan', NULL, '-', '2022-11-11', 3, '45315.jpg', NULL, '2022-12-16', '96/P Tahun 2022', '2022-09-12', '326/KMA/SK/XI/2022', '2022-11-11', '1', 'Masa Jabatan 1 kali, akhir jabatan adalah 16-12-2027', '2027-12-16', '2022-11-11', '2022-11-11', '2027-12-16', NULL, NULL, NULL, 'sikep', '2022-11-11'),
	(39, 'Ir. Ruslan, M.M.', '1963121902202211007', '737104100465004', 'Sidenreng Rappang', '1965-04-10', 'L', 'S-1', 'Hakim Ad Hoc Perikanan', NULL, '-', '2022-11-11', 8, '45324.jpeg', NULL, '2022-12-15', '96/P Tahun 2022', '2022-09-12', '326/KMA/SK/XI/2022', '2022-11-11', '1', 'Masa Jabatan 1 kali, akhir jabatan adalah 15-12-2027', '2027-12-15', '2022-11-11', '2022-11-11', '2027-12-15', NULL, NULL, NULL, 'sikep', '2022-11-11'),
	(40, 'Nur Syamsu, S.T., M.Eng', '7602122908750001', '7602122908750001', 'Ujung Pandang', '1975-08-29', 'L', 'S-2', 'Hakim Ad Hoc Perikanan', NULL, '-', '2022-11-11', 7, '45335.png', NULL, '2023-06-02', '96/P Tahun 2022', '2022-09-12', '326/KMA/SK/XI/2022', '2022-11-11', '1', 'Masa Jabatan 1 kali, akhir jabatan adalah 02-06-2028', '2028-06-02', '2022-11-11', '2022-11-11', '2028-06-02', NULL, NULL, NULL, 'sikep', '2022-11-11'),
	(41, 'Aco Harsandi, S.H., M.H.', '7371081512770004', '7371081512770004', 'Ujung Pandang', '1977-12-15', 'L', 'S-2', 'Hakim Ad Hoc Perikanan', NULL, '-', '2023-02-01', 10, '45516.png', NULL, '2023-02-01', '96/P Tahun 2022', '2022-09-12', '326/KMA/SK/XI/2022', '2022-11-11', '1', 'Masa Jabatan 1 kali, akhir jabatan adalah 01-02-2028', '2028-02-01', '2022-11-11', '2022-11-11', '2028-02-01', NULL, NULL, NULL, 'sikep', '2023-02-01');

-- Dumping structure for table subdit_hakim.mutasi_perikanan
CREATE TABLE IF NOT EXISTS `mutasi_perikanan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pegawai` int(11) DEFAULT NULL,
  `id_pengadilan_asal` int(11) DEFAULT NULL,
  `id_pengadilan_hasil_tpm` int(11) DEFAULT NULL,
  `periode` varchar(50) DEFAULT NULL,
  `tanggal_tpm` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table subdit_hakim.mutasi_perikanan: ~1 rows (approximately)
INSERT INTO `mutasi_perikanan` (`id`, `id_pegawai`, `id_pengadilan_asal`, `id_pengadilan_hasil_tpm`, `periode`, `tanggal_tpm`) VALUES
	(17, 1, 16, 1, 'TPM 2025 Semester 4', '2025-10-24'),
	(18, 1, 1, 16, 'TPM 2025 Semester 1', '2025-10-27');

-- Dumping structure for table subdit_hakim.pengadilan_perikanan
CREATE TABLE IF NOT EXISTS `pengadilan_perikanan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pengadilan` varchar(255) DEFAULT NULL,
  `kelas` varchar(50) DEFAULT NULL,
  `wilayah` varchar(255) DEFAULT NULL,
  `carousel` longtext DEFAULT NULL,
  `jumlah_adhoc_sekarang` int(11) DEFAULT NULL,
  `perkara_2022` int(11) DEFAULT NULL,
  `perkara_2023` int(11) DEFAULT NULL,
  `perkara_2024` int(11) DEFAULT NULL,
  `rerata` int(11) DEFAULT NULL,
  `jumlah_adhoc_ideal` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table subdit_hakim.pengadilan_perikanan: ~12 rows (approximately)
INSERT INTO `pengadilan_perikanan` (`id`, `nama_pengadilan`, `kelas`, `wilayah`, `carousel`, `jumlah_adhoc_sekarang`, `perkara_2022`, `perkara_2023`, `perkara_2024`, `rerata`, `jumlah_adhoc_ideal`) VALUES
	(1, 'Pengadilan Negeri Tual', 'II', 'Pengadilan Tinggi Ambon', '', 2, 0, 0, 0, 1, 3),
	(2, 'Pengadilan Negeri Sorong', 'I B', 'Pengadilan Tinggi Papua Barat', '', 3, 0, 0, 0, 17, 3),
	(3, 'Pengadilan Negeri Natuna', 'II', 'Pengadilan Tinggi Kepulauan Riau', NULL, 5, 5, 8, 2, 5, 3),
	(4, 'Pengadilan Negeri Medan', 'I A Khusus', 'Pengadilan Tinggi Medan', NULL, 5, 10, 15, 8, 11, 3),
	(5, 'Pengadilan Negeri Jakarta Utara', 'I A Khusus', 'Pengadilan Tinggi Jakarta', NULL, 3, 0, 0, 0, 1, 3),
	(6, 'Pengadilan Negeri Tanjung Pinang', 'I A', 'Pengadilan Tinggi Kepulauan Riau', NULL, 7, 0, 0, 0, 18, 3),
	(7, 'Pengadilan Negeri Pontianak', 'I A', 'Pengadilan Tinggi Pontianak', NULL, 5, 0, 0, 0, 20, 3),
	(8, 'Pengadilan Negeri Bitung', 'I B', 'Pengadilan Tinggi Manado', NULL, 4, 0, 0, 0, 2, 3),
	(9, 'Pengadilan Negeri Ambon', 'I A', 'Pengadilan Tinggi Ambon', '', 3, 30, 35, 34, 33, 4),
	(10, 'Pengadilan Negeri Merauke', 'II', 'Pengadilan Tinggi Jayapura', NULL, 3, 0, 0, 0, 1, 3),
	(16, 'Pengadilan Negeri Bengkulu', 'I A', 'Pengadilan Tinggi Bengkulu', '68f6d66f3008f_tes.png,68f6dc29e5167_bot.png', 1, 1, 1, 1, 1, 1);

-- Dumping structure for table subdit_hakim.usulan_perikanan
CREATE TABLE IF NOT EXISTS `usulan_perikanan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pegawai` int(11) DEFAULT NULL,
  `id_pengadilan_usulan` int(11) DEFAULT NULL,
  `tanggal_usulan` date DEFAULT NULL,
  `nomor_surat` varchar(50) DEFAULT NULL,
  `tanggal_surat` date DEFAULT NULL,
  `keterangan_usulan` longtext DEFAULT NULL,
  `berkas` varchar(50) DEFAULT NULL,
  `_status_` enum('pending','diterima','ditolak') DEFAULT 'pending',
  `keterangan_status` varchar(50) DEFAULT NULL,
  `tanggal_diproses` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table subdit_hakim.usulan_perikanan: ~4 rows (approximately)
INSERT INTO `usulan_perikanan` (`id`, `id_pegawai`, `id_pengadilan_usulan`, `tanggal_usulan`, `nomor_surat`, `tanggal_surat`, `keterangan_usulan`, `berkas`, `_status_`, `keterangan_status`, `tanggal_diproses`) VALUES
	(8, 1, 16, '2025-10-23', '1212', '2025-10-23', 'Ingin dekat dengan keluarga', NULL, 'pending', '', '0000-00-00'),
	(9, 31, 16, '2025-10-23', '2702', '2025-10-23', 'Ingin pulang kampung', NULL, 'pending', '', '0000-00-00'),
	(10, 16, 9, '2025-10-24', '2702/KPN/09/2025', '2025-10-24', '-', NULL, 'pending', '', '0000-00-00'),
	(11, 19, 16, '2025-10-24', '1010', '2025-10-24', 'Ingin dekat keluarga', '68fadf02183a1_Untitledspreadsheet-GoogleSpreadshee', 'diterima', 'Oke', '2025-10-24'),
	(12, 11, 16, '2025-10-27', '2702', '2025-10-27', 'Ingin dekat dengan keluarga', NULL, 'pending', NULL, NULL),
	(13, 1, 1, '2025-10-27', '2702', '2025-10-30', 'k', NULL, 'pending', NULL, NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
