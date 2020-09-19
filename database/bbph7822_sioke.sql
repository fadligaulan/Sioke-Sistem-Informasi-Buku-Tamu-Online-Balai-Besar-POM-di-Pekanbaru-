-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 19, 2020 at 06:49 PM
-- Server version: 10.2.33-MariaDB-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bbph7822_sioke`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `id_biodata` int(11) NOT NULL,
  `id_layanan` int(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `NIP` varchar(512) DEFAULT NULL,
  `pangkat` varchar(300) DEFAULT NULL,
  `jabatan` varchar(300) DEFAULT NULL,
  `instansi` varchar(300) DEFAULT NULL,
  `tgl_surat` varchar(300) DEFAULT NULL,
  `sampel` varchar(300) DEFAULT NULL,
  `jenis_kelamin` varchar(20) DEFAULT NULL,
  `umur` varchar(12) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `pekerjaan` varchar(30) DEFAULT NULL,
  `keperluan` varchar(50) DEFAULT NULL,
  `jam` time DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `foto` varchar(500) NOT NULL,
  `nama_penerima` varchar(200) DEFAULT NULL,
  `nama_penjawab` varchar(200) DEFAULT NULL,
  `jawaban` varchar(512) NOT NULL,
  `status` varchar(200) NOT NULL,
  `no_surat` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`id_biodata`, `id_layanan`, `nama`, `NIP`, `pangkat`, `jabatan`, `instansi`, `tgl_surat`, `sampel`, `jenis_kelamin`, `umur`, `alamat`, `no_hp`, `pekerjaan`, `keperluan`, `jam`, `tanggal`, `foto`, `nama_penerima`, `nama_penjawab`, `jawaban`, `status`, `no_surat`) VALUES
(1, 3, 'Hendra', '', NULL, NULL, NULL, NULL, NULL, 'Pria', '50', 'Dr.sutomo no 51', '082391253377', 'swasta', 'ambil Sertifikat ', '09:31:12', '2020-08-31', '5f4c60f01ca6a.png', NULL, NULL, '', 'Sangat Puas', NULL),
(2, 1, 'Ario', '', NULL, NULL, NULL, NULL, NULL, 'Pria', '35', 'Sudirman 01', '081371009639', 'polri', 'Uji sample', '10:17:34', '2020-08-31', '5f4c62a5796df.png', 'Nur Isnai ', '-', '', 'Sangat Puas', NULL),
(3, 2, 'Rahma Yunita', NULL, NULL, NULL, NULL, NULL, NULL, 'Wanita', '31', 'jl.cipta karya gg.lengkepe blok b 20', '085216260037', 'swasta', 'Pengurusan izin edar minyak vco,dll', '08:43:38', '2020-09-01', '5f4c701685b72.png', 'Yudha Agus Pranata Barutu', 'Yudha Agus Pranata Barutu', '', '', NULL),
(4, 2, 'Marlina ak', NULL, NULL, NULL, NULL, NULL, NULL, 'Wanita', '52', 'jl.Gabus raya blok c7  rumbai pesisir pekanbaru', '081275180952', 'irt', 'perizinan usaha dapur nena  dan izin edar frozen f', '12:29:30', '2020-08-31', '5f4c711f43cdc.png', 'Yudha Agus Pranata Barutu', 'Yudha Agus Pranata Barutu', '', '', NULL),
(6, 1, 'Firdaus amin', '84041263', 'bripka', 'penyidik', 'bnnk pekanbaru', NULL, 'shabu', 'Pria', '35', 'Jl. Tengku zainal abidin', '081378102004', 'polri', 'ambil hasil', '14:20:30', '2020-08-31', '5f4c741c05f12.png', NULL, NULL, '', '', NULL),
(7, 4, 'ambok upek', NULL, NULL, NULL, NULL, NULL, NULL, 'Pria', '25', 'Jl. Taman Karya ', '081268346894', 'mahasiswa', 'Izin penelitian', '09:44:39', '2020-09-02', '5f4c7eb04f765.png', 'Nining', 'Nining', 'di arahkan ke TU', '', NULL),
(8, 1, 'Ronald', '81041230', 'aipda', 'Anggota polsek rumbai', 'polsek rumbai', NULL, 'shabu', 'Pria', '35', 'Yos sudarso km 08', '081275512508', 'polri', 'ambil hasil', '14:19:18', '2020-08-31', '5f4c86444a070.png', NULL, NULL, '', 'Sangat Puas', NULL),
(9, 1, 'Wahyu firmansyah', NULL, NULL, NULL, NULL, NULL, NULL, 'Pria', '34', 'Pematang Reba', '085265569889', 'Polri', 'Uji sample', '14:16:58', '2020-08-31', '5f4c98a24bef5.png', 'Nur Isnani', '-', '', '', NULL),
(10, 2, 'Irwan', NULL, NULL, NULL, NULL, NULL, NULL, 'Pria', '39', 'jl.kutilang sakti aa5 tampan', '081371605468', 'wiraswasta', 'informasi izin gula semut aren', '17:09:04', '2020-08-31', '5f4cbad7838a6.png', 'Yudha Agus Pranata Barutu', 'Yudha Agus Pranata Barutu', '', '', NULL),
(11, 1, 'Jekson Rinto Simanjuntak ', '79070296', 'Aipda ', 'Kanit Reskrim ', 'polres siak', '31 Agustus 2020', 'shabu', 'Pria', '41', 'Aspol Polsek Sungai Mandau', '081374254808', 'polri', 'Uji sample', '16:03:26', '2020-08-31', '5f4cbcde6ce59.png', NULL, NULL, '', 'Sangat Puas', '32414314'),
(12, 1, 'edri', '88020923', 'brigadir', 'ba satnarkoba', 'polres kampar', '31 Agustus 2020', 'shabu', 'Pria', '32', 'aspol kampar', '085265068888', 'polri', 'Uji sample', '09:48:32', '2020-09-01', '5f4db680d25dc.png', 'Nur Isnani', '-', '', 'Sangat Puas', 'PP.01.01.941.9.20.507'),
(13, 2, 'Tri rahayu', NULL, NULL, NULL, NULL, NULL, NULL, 'Wanita', '23', 'Kutilang sakti panam', '082386180680', 'Mahasiswi', 'Wawancara', '09:54:20', '2020-09-01', '5f4db7dc34096.png', NULL, NULL, '', '', NULL),
(14, 4, 'Rohmat budiyanta, skm', NULL, NULL, NULL, NULL, NULL, NULL, 'Pria', '39', 'pangkalan kerinci', '082386936666', 'pns', 'konsultasi pemusnahan obat', '09:43:23', '2020-09-02', '5f4dbd9e1b901.png', 'Ully Manda Sari', 'Ully Manda Sari', 'Koordinasi', 'Sangat Puas', NULL),
(15, 2, 'Irvan', NULL, NULL, NULL, NULL, NULL, NULL, 'Pria', '25', 'Pekanbaru', '08111111111', 'Wiraswasta', 'Kunjungan', '12:07:53', '2020-09-01', '5f4dd729091c7.png', NULL, NULL, '', '', NULL),
(16, 2, 'Eko Saputra ', NULL, NULL, NULL, NULL, NULL, NULL, 'Pria', '39', 'Jl. T.bey perum korem k.01', '08127141971', 'swasta', 'konsultasi', '09:40:37', '2020-09-02', '5f4de712261ba.png', NULL, '', '', 'Sangat Puas', NULL),
(17, 4, 'Yurisnan andri', NULL, NULL, NULL, NULL, NULL, NULL, 'Pria', '51', 'jl.sapta taruna no 3 pku', '0811757914 _ 0811754', 'humas april group (rapp)', 'silaturahmi', '09:51:35', '2020-09-02', '5f4f08b7b26fa.png', NULL, NULL, '', '', NULL),
(18, 2, 'Opik', NULL, NULL, NULL, NULL, NULL, NULL, 'Pria', '34', 'Kuok', '08127524902', 'peneliti (balitbang kuok)', 'konsultasi produk propolis,sabun,teh', '11:10:32', '2020-09-02', '5f4f0ebf9bf68.png', 'Sonya Annisa', 'Sonya Annisa', 'kepada yang bersangkutan dijelaskan terkait tahap awal pengurusan izin produk yg terdapat pada link bit.ly/SIROMO,, untuk teh dapat mengurus izin PIRT,, untuk kosmetik dijelaskan mengurus persetujuan denah bangunan,, untuk OT mengurus NIB sampai tahap 5 di DPMPTSP.... semua produk, tahap awal mesti ada izin berusahanya dulu dapat diurus secara online melalui oss.go.id/portal/', '', NULL),
(19, 4, 'Nur samsimar', NULL, NULL, NULL, NULL, NULL, NULL, 'Wanita', '25', 'Jl. Taman Karya ', '085265657044', 'swasta', 'Pengambilan surat', '11:06:01', '2020-09-02', '5f4f1a298acf6.png', NULL, NULL, '', '', NULL),
(20, 2, 'Rosna idris', NULL, NULL, NULL, NULL, NULL, NULL, 'Wanita', '60', 'jl.perum.pandau permai blok c no60', '082172388816', 'wirausaha', 'Izin edar  frozen food roti canai', '11:32:40', '2020-09-02', '5f4f1acd71ccf.png', 'Yenita', 'Yenita', 'Dijelaskan tentang persyaratan pengurusan izin edar MD yaitu dengan mempersiapkan terllebih dahulu sarana produksi yang terpisah dari dapur rumah tangga, NIB, NPWP, IUMK , Lay out dan SOP -SOP . Kepada yang bersangkutan jg diberikan form pengurusan izin MD dan link bit.ly/SIROMO.', 'Sangat Puas', NULL),
(21, 4, 'Yudhi ardiansyah', NULL, NULL, NULL, NULL, NULL, NULL, 'Pilih jenis kelamin', '23', 'Jl.kartama gg.nurasiah', '082283714863', 'mahasiswa', 'ambil surat penelitian', '11:34:28', '2020-09-02', '5f4f20d468883.png', NULL, NULL, '', 'Sangat Puas', NULL),
(23, 3, 'Oktafi Rozaldi', NULL, NULL, NULL, NULL, NULL, NULL, 'Pria', '46', 'Pandau Pasir Putih', '081363428470', 'Swasta', 'Konsultasi', '10:24:35', '2020-09-03', '5f50541d87972.png', 'Syahriani', 'Syahriani', 'Memberikan informasi cara pendaftaran produk (Rendang) di aplikasi ereg', '', NULL),
(24, 1, 'Edri', '88020923', 'brigadir', 'ba satnarkoba', 'polres kampar', '31 Agustus 2020', 'shabu', 'Pria', '32', 'aspol kampar', '081268278888', 'polri', 'Uji sample', '09:30:49', '2020-09-03', '5f50555995945.png', 'Nur Isnani', '-', '', 'Sangat Puas', 'PP.01.01.941.9.20.509 - 510'),
(25, 2, 'Sri Rahayu Ningsih', NULL, NULL, NULL, NULL, NULL, NULL, 'Wanita', '33', 'Jl.tengku Bey Perm.dewita Makmur', '08117602287', 'Irt', 'Pengurusan Izin Edar Frozen Food Bakso Dan Sarden', '10:43:06', '2020-09-03', '5f505d8b3e132.png', 'Maranata Parulian', 'Maranata Parulian', 'Kepada yang bersangkutan dijelaskan tentang persyaratan izin edar MD, seperti : mempunyai ruang produksi tersendiri, izin usaha ( IUMK) npwp, denah bangunan, lay out lokasi, daftar peralatan, alur produksi dan beberapa SOP', '', NULL),
(26, 4, 'Aling', NULL, NULL, NULL, NULL, NULL, NULL, 'Pria', '47', 'Bagan siapi api', '081370331682', 'wiraswasta', 'buk veramika', '10:07:28', '2020-09-03', '5f505df09b125.png', NULL, NULL, '', 'Sangat Puas', NULL),
(27, 3, 'Annisa', NULL, NULL, NULL, NULL, NULL, NULL, 'Wanita', '35', 'jl.pembangunan rumbai', '081322900255', 'wiraswasta', 'konsultasi', '10:54:44', '2020-09-03', '5f506904a0ef8.png', NULL, NULL, '', '', NULL),
(28, 2, 'Riza Novelia', NULL, NULL, NULL, NULL, NULL, NULL, 'Wanita', '26', 'Jl.dahlia Perm.villa Bunga Blok H No.3', '085374833321', 'Wirausaha', 'Informasi Izin Edar Minuman Es Mangjer Dan Es Sirs', '12:27:08', '2020-09-03', '5f506a610c9cd.png', 'Sabri', 'Sabri', 'Kepada yang bersangkutan dijelaskan tentang persyaratan izin edar untuk produk minuman seperti : mempunyai ruang produksi tersendiri, izn usaha ( IUMK ) npwp, denah bangunan, lay out lokasi , daftar peralatan, alur produksi dan beberapa SOP', 'Sangat Puas', NULL),
(29, 4, 'Younghanes', NULL, NULL, NULL, NULL, NULL, NULL, 'Pria', '35', 'Jl.udang 4 no 144', '081371001195', 'swasta', 'Uji sample', '11:31:12', '2020-09-03', '5f5071909371d.png', NULL, NULL, '', '', NULL),
(30, 2, 'Younghanes', NULL, NULL, NULL, NULL, NULL, NULL, 'Pria', '35', 'Jl.udang 4 No 144', '081371001195', 'Swasta', 'Info Izin Edar Madu', '12:23:14', '2020-09-03', '5f5075be08510.png', 'Maranata Parulian', 'Maranata Parulian', 'Kepada yang bersangkutan dijelaskan bahwa BBPOM di Pekanbaru tidak melakukan uji madu. Disarankan untuk menguji madunya ke Balai Pengembangan Produk dan Standarisasi Industri Jln. Hangtuah Ujung no. 124 Pekanbaru ', 'Sangat Puas', NULL),
(31, 2, 'Hazra Yuvendius', NULL, NULL, NULL, NULL, NULL, NULL, 'Pria', '41', 'Jl.damai No 23gobah', '085270767492', 'Wirausaha', 'Konsultasi Susu Kedelai &nugget', '12:17:05', '2020-09-03', '5f507a373afc1.png', 'Maranata Parulian', 'Maranata Parulian', 'Kepada yang bersangkutan dijelaskan tentang persyaratan izin edar untuk produk frozen ( nugget tempe ) dan minuman, seperti : mempunyai ruang produksi tersendiri, Izin usaha 9 IUMK ) ,  npwp, denah bangunan, lay out lokasi, daftar peralatan dan beberapa SOP , ', 'Sangat Puas', NULL),
(32, 4, 'Eddy setyawan', NULL, NULL, NULL, NULL, NULL, NULL, 'Pria', '25', 'Jl. Jend. Sudirman no. 14 CD', '082388980908', 'swasta', 'koordinasi MCU', '13:17:45', '2020-09-03', '5f508a89b18c9.png', NULL, NULL, '', '', NULL),
(33, 2, 'Delfia Eddy', NULL, NULL, NULL, NULL, NULL, NULL, 'Wanita', '37', 'Jl.marsan Sejahtera Panam', '085271119999', 'Wiraswasta', 'Konsultasi Izin Edar Minuman ', '15:50:47', '2020-09-03', '5f50ad2a4d0f0.png', 'Maranata Parulian', 'Maranata Parulian', 'Kepada yang bersangkutan dijelaskan tentang persyaratan izin edar MD. Seperti : mempunyai ruang produksi tersendiri., izin edar ( IUMK ) , denah bangunan, lay out lokasi, alur produksi , daftar peralatan dan beberapa SOP.', 'Sangat Puas', NULL),
(34, 1, 'Edri', '88020923', 'brigadir', 'ba satnarkoba', 'polres kampar', '04092020', 'shabu', 'Pria', '32', 'aspol kampar', '081268278888', 'polri', 'Uji sample', '09:18:29', '2020-09-04', '5f51a3f545b5d.png', 'Nur Isnani', '-', '', 'Sangat Puas', 'PP.01.01.941.9.20.511'),
(35, 2, 'Jack tommy', NULL, NULL, NULL, NULL, NULL, NULL, 'Pria', '43', 'jl.cendrawasih gg 2 no2 sukajadi', '085222154444', 'swasta', 'konsultasi', '09:27:11', '2020-09-04', '5f51a5ff45a60.png', NULL, NULL, '', '', NULL),
(36, 4, 'Teguh Mulyanto ', NULL, NULL, NULL, NULL, NULL, NULL, 'Pria', '32', 'Hotel Dafam', '082174871374', 'Swasta', 'Visit', '09:09:39', '2020-09-08', '5f51ae6fe7e4e.png', 'Sonya Annisa', 'Sonya Annisa', 'Konsultasi Penawaran hotel', '', NULL),
(37, 2, 'Hendrik', NULL, NULL, NULL, NULL, NULL, NULL, 'Pria', '68', 'Jln.Hangtuah', '-', 'Swasta', 'informasi pengujian', '16:39:50', '2020-09-04', '5f51b27de3508.png', 'Nunang Ganis Yatlinar', 'Nunang Ganis Yatlinar', 'Ybs membawa sampel berupa cairan bening berwarna putih dan kekuningan hasil penyulingan dari tanaman rumput yang tidak diketahui nama dan jenisnya. Ybs ingin mengujikan sampel tsb, apa zat yang terkandung di dalamnya? karena ybs sudah mencoba mengkonsumsi sendiri dan ternyata berkhasiat menyegarkan badannya.\r\nKepada ybs diinformasikan bahwa lab pengujian di BBPOM di Pekanbaru tidak melakukan uji terhadap sampel dari tanaman segar. Disarankan untuk menguji ke lab penelitian yang telah terakreditasi dengan me', '', NULL),
(38, 2, 'M Bahari Abdi', NULL, NULL, NULL, NULL, NULL, NULL, 'Pria', '40', 'Polsek Tampan', '081275225999', 'Polri', 'Konsultasi produk jamu Pegal Linu Husada KLANCENG ', '11:24:39', '2020-09-04', '5f51b84f738bf.png', 'Nunang Ganis Yatlinar', 'Nunang Ganis Yatlinar', 'setelah di cek di aplikasi cek produk diperoleh informasi :\r\nNama : Jamu Pegal Linu Husada (Klanceng)\r\nProdusen : CV Putri Husada, Jawa Timur\r\nNIE : TR 143 676 881\r\nStatus NIE : DIBATALKAN\r\nStatus terdaftar :TERDAFTAR\r\nBahan Kimia Obat Fenil Butazon\r\nKepada ybs diinformasikan data diatas.', 'Sangat Puas', NULL),
(39, 2, 'Rizal', NULL, NULL, NULL, NULL, NULL, NULL, 'Pria', '39', 'Pangkalan Kerinci', '081360909989', 'Swasta', 'Konsultasi', '09:00:55', '2020-09-09', '5f51e08b73b74.png', 'Yenita', 'Yenita', 'diberikan informasi', 'Sangat Puas', NULL),
(40, 2, 'Deki nusfirianda', NULL, NULL, NULL, NULL, NULL, NULL, 'Pria', '24', 'jl. Karya mandiri perumahan kartama raya, marpoyan', '085801647360', 'swasta', 'konsultasi', '14:25:59', '2020-09-04', '5f51ec0711a99.png', NULL, NULL, '', 'Sangat Puas', NULL),
(41, 2, 'Juwita Sari', NULL, NULL, NULL, NULL, NULL, NULL, 'Wanita', '27', 'jl.pandawa ', '082172641663', 'wirausaha', 'informasi izin keripik pisang coklat', '09:58:10', '2020-09-07', '5f55a1c26dcfe.png', NULL, NULL, '', '', NULL),
(42, 1, 'Sri Mardiah', 'Ay2018055', 'staff', 'kesling', 'RS.Awal bross A. Yani', NULL, 'makanan', 'Wanita', '25', 'Jl.a.yani no 73', '081371185492', 'swasta', 'Uji sample', '11:50:19', '2020-09-07', '5f55bc0bbc3a2.png', 'Nur Isnnai ', '-', '', '', 'PP.01.01.94.941.09.20.80'),
(43, 3, 'Jack Tommy ', NULL, NULL, NULL, NULL, NULL, NULL, 'Wanita', '43', 'Jl. Cendrawasih Gg 2 No 2 Sukajadi', '085222154444', 'Swasta', 'Konsultasi', '09:06:59', '2020-09-08', '5f55ea6ece71c.png', 'Syahriani', 'syahriani', 'konsultasi izin roti canai diberikan', '', NULL),
(44, 2, 'Asneliza', NULL, NULL, NULL, NULL, NULL, NULL, 'Wanita', '22', 'Jl.pinang Merah Marpoyan Damai', '081268373619', 'Mahasiswi', 'Wawancara', '09:58:49', '2020-09-08', '5f56e2e25fee6.png', 'Elvira Yolanda', 'Elvira Yolanda', '1. Strategi Pengawasan BPOM menggunakan perencanaan yang berdasarkan analisa resiko terhadap hasil pengawasan tahun sebelumnya\r\n2. Sanksi yang diberikan kepada pelaku usaha yang memiliki sarana TMK adalah sesuai dengan pedoman tindak lanjut hasil pengawsan OT, SK dan kosmetik\r\n3. Pelaku usaha yang diperiksa dan diberikan sanksi setelah diberikan penmgertian dan pembinaan dapat menerima tindak lanjut yang dilakukan\r\n4. Faktir penyebab masih terdapatnya kosmetik ilegal di wiolayah Riau dikarenakan posisi geog', '', NULL),
(45, 4, 'Susy Nurliza', NULL, NULL, NULL, NULL, NULL, NULL, 'Wanita', '46', 'Jl.pelangi', '08127697674', 'Pns', 'Ambil Sk', '09:08:52', '2020-09-08', '5f56e3acbff7a.png', 'Anugrah prananda', 'Anugrah prananda', 'SK Diberikan', '', NULL),
(46, 2, 'Khairil Gibran', NULL, NULL, NULL, NULL, NULL, NULL, 'Pria', '22', 'jl.t.bey', '082168105821', 'mahasiswa', 'Wawancara obat tradisional', '10:03:13', '2020-09-08', '5f56f47115405.png', NULL, NULL, '', '', NULL),
(47, 2, 'Edri', NULL, NULL, NULL, NULL, NULL, NULL, 'Pria', '32', 'aspol kampar', '081268278888', 'polri', 'Uji sample', '10:08:43', '2020-09-08', '5f56f5bbea15c.png', NULL, NULL, '', 'Sangat Puas', NULL),
(48, 2, 'Edri', NULL, NULL, NULL, NULL, NULL, NULL, 'Pria', '32', 'aspol kampar', '081268278888', 'polri', 'Uji sample', '10:19:05', '2020-09-08', '5f56f8290cc17.png', NULL, NULL, '', 'Sangat Puas', NULL),
(49, 2, 'Andi Oh', NULL, NULL, NULL, NULL, NULL, NULL, 'Pria', '33', 'Jl.riau No 18', '081322842200', 'Swasta', 'Informasi Uji Air sumur.', '15:42:25', '2020-09-08', '5f56f9a32aad7.png', 'Yenita', 'Yenita', 'Disarankan ke laboratorium kesehatan Daerah.', '', NULL),
(53, 1, 'Hervin hidayat', '1408032605000002', 'Kesling', 'kesling', 'RS.Awal Bross Sudirman', NULL, 'makanan', 'Pria', '20', 'jl.sudirman', '082284202145', 'swasta', 'Uji sample', '11:37:09', '2020-09-08', '5f570a754f7d3.png', NULL, NULL, '', '', NULL),
(54, 1, 'Reza Maulana', '84041250', 'Bripka', 'ps kaur mintu sat res narkoba polres inhu', 'polres inhu', NULL, 'shabu', 'Pria', '36', 'Aspol polres inhu', '085265661984', 'polri', 'Uji sample', '13:02:37', '2020-09-08', '5f571e7d06713.png', NULL, NULL, '', 'Sangat Puas', NULL),
(55, 2, 'Hengki', NULL, NULL, NULL, NULL, NULL, NULL, 'Pria', '36', 'Jl.padat Karya No.26', '08121462056', 'Swasta', 'Informasi Izin Edar Jamu Siap Minum', '15:38:10', '2020-09-08', '5f573dda7ef76.png', 'Yenita', 'Yenita', 'Dijelaskan tentang persyaratan izin edar pangan MD dan diberikan link bit.ly/SIROMO.', 'Sangat Puas', NULL),
(56, 1, 'Test nining cantik', '98554549', 'brigadir', 'kapolda', 'polda jawa', NULL, 'Kokain', 'Wanita', '25', 'jl. gunung papandayan', '85548885', 'polri', 'Uji sample', '08:45:55', '2020-09-09', '5f5833d31c17f.png', 'nani', '-', '', 'Sangat Puas', 'pp8'),
(57, 2, 'Subur', NULL, NULL, NULL, NULL, NULL, NULL, 'Pria', '55', 'jl.hangtuah no 328', '085355522228', 'wiraswasta', 'konsultasi izin minyak goreng sawit', '09:53:48', '2020-09-09', '5f5843bc1e5a8.png', NULL, NULL, '', 'Sangat Puas', NULL),
(58, 2, 'Johny', NULL, NULL, NULL, NULL, NULL, NULL, 'Pria', '52', 'Jl.delima Panam', '082283632682', 'Wiraswasta', 'Konsultasi Penjualan Obat Perorangan', '14:33:51', '2020-09-09', '5f58607643c0b.png', 'Maranata Parulian', 'Maranata Parulian', 'Kepada yang bersangkutan dijelaskan bahwa yang bersangkutan harus mempunyai izin Toko Obat, atau Apotik untuk dapat mendistribusikan obat obatan tersebut. Sebagai Toko Obat dapat menjual obat bebas dan obat bebas terbatas dan Apotik dapat menjual obat bebas, obat bebas terbatas, daftar G dan Psikotropika. Toko Obat harus mempunyai penanggung jawab minimal  Asisten Apoteker  D3 Farmasi tetapi kalau di Apotik mempunyai Apoteker sebagai Penanggung Jawab Apotik. Setiap jenis obat obatan tersebut harus mempunyai', '', NULL),
(59, 2, 'Asneliza', NULL, NULL, NULL, NULL, NULL, NULL, 'Wanita', '22', 'Jl.pinang Merah Marpoyan Damai', '081268373619', 'Mahasiswi', 'Wawancara', '11:34:17', '2020-09-10', '5f59cd2de4edc.png', '-', '-', '-', '', NULL),
(60, 1, 'Ario setiadi', '85100002', 'ipda', 'Panit reskrim', 'polsek pasir penyu', NULL, 'shabu', 'Pria', '35', 'jl.sudirman', '081371009639', 'polri', 'Uji sample', '14:13:19', '2020-09-10', '5f59d20f5e1cc.png', 'Nur Isnani', '-', '', '', 'PP.01.01.94.941.09.20.520'),
(61, 1, 'Jekson Rinto Simanjuntak ', NULL, NULL, NULL, NULL, NULL, NULL, 'Pria', '56', 'Aspol Polsek Sungai Mandau', '081374254808', 'Kapolsek', 'Ambil Hasil', '14:31:25', '2020-09-10', '5f59d64df3a60.png', 'Nur isnani', '-', '-', 'Sangat Puas', NULL),
(62, 1, 'reqrq', 'rewr', 'rerq', 'rtwetwe', 'rtwtw', NULL, 'trwtw', 'Pria', 'trwtwt', 'rtwtw', 'rtwtwtw', 'rtwtw', 'rtwtw', '15:21:27', '2020-09-11', '5f5b338751e98.png', NULL, NULL, '', 'Sangat Puas', NULL),
(63, 1, 'Edri', '88020923', 'brigadir', 'ba satnarkoba', 'polres kampar', NULL, 'shabu', 'Pria', '32', 'aspol kampar', '081268278888', 'polri', 'Uji sample', '09:14:13', '2020-09-14', '5f5ed1f51d99d.png', 'Nur ISnani', '-', '', 'Sangat Puas', 'PP.01.01.94.941.09.20.523'),
(64, 1, 'Yudianto YP', '97010109', 'bripda', 'bapolsek', 'polsek batang gansal', NULL, 'shabu dan inex', 'Pria', '23', 'Aspol sektor batang gansal', '082388872277', 'polri', 'Uji sample', '10:12:44', '2020-09-14', '5f5edfac331ef.png', 'Nur Isnanb', '-', '', 'Sangat Puas', 'PP.01.01.94.941.09.20.525'),
(65, 2, 'Elvarina permata sari', NULL, NULL, NULL, NULL, NULL, NULL, 'Wanita', '26', 'Pekanbaru', '085381223322', 'apoteker', 'konsultasi penyaluran oot', '10:27:37', '2020-09-14', '5f5ee3293cf5d.png', NULL, NULL, '', '', NULL),
(66, 2, 'Elvarina permata sari', NULL, NULL, NULL, NULL, NULL, NULL, 'Wanita', '26', 'Pekanbaru', '085381223322', 'apoteker', 'konsultasi penyaluran oot', '10:27:37', '2020-09-14', '5f5ee329d53a6.png', NULL, NULL, '', '', NULL),
(67, 4, 'Fatmadilla rahayu', NULL, NULL, NULL, NULL, NULL, NULL, 'Wanita', '22', 'jalan budi luhur', '087719756700', 'mahasiswa', 'permohonan magang', '11:34:41', '2020-09-14', '5f5ef2e1898fc.png', NULL, NULL, '', '', NULL),
(68, 3, 'Hendra', NULL, NULL, NULL, NULL, NULL, NULL, 'Pria', '36', 'jl.siak 2', '081266388782', 'jurnalis', 'koordinasi', '14:05:52', '2020-09-14', '5f5f16500533d.png', NULL, NULL, '', '', NULL),
(69, 4, 'Didi', NULL, NULL, NULL, NULL, NULL, NULL, 'Pria', '47', 'hotelpangeran jl.sudirman', '085278633488', 'swasta', 'koordinasi event', '14:17:16', '2020-09-14', '5f5f18fcb562c.png', NULL, NULL, '', '', NULL),
(70, 3, 'Winda sari tanjung', NULL, NULL, NULL, NULL, NULL, NULL, 'Wanita', '26', 'jl.jendral gg.sd no08', '81261639343', 'asisten apt', 'sosialisasi', '08:41:06', '2020-09-15', '5f601bb224694.png', NULL, NULL, '', 'Sangat Puas', NULL),
(71, 1, 'Yandri', '87010306', 'Bripka', 'staf BNNP Riau', 'BNNP Riau', NULL, 'shabu dan ekstasi', 'Pria', '33', 'Jl.pepaya', '081365981293', 'polri', 'Uji sample', '11:33:52', '2020-09-15', '5f6044306b1da.png', 'Nur Isnani', '-', '', 'Sangat Puas', 'PP.01.01.94.941.09.20.529 - 530'),
(72, 2, 'Adil R', NULL, NULL, NULL, NULL, NULL, NULL, 'Pria', '52', 'Jl. Gabus Raya Rumbai', '082172255969', 'Wiraswasta', 'Konsultasi Izin Edar Garam', '11:57:52', '2020-09-15', '5f6049d025b13.png', 'Marsabri', 'marsabri', 'sudah di tangani oleh loka tembilahan.karna pengurusan garamnya ada di pematang rebah. ', 'Sangat Puas', NULL),
(73, 2, 'Ahmad Martua Harahap', NULL, NULL, NULL, NULL, NULL, NULL, 'Pria', '27', 'Perumahan Guru Cendana Jln Siak 2 Blok Gandaria No', '082363753675', 'Wirausaha', 'Konsultasi Izin Minuman Susu Kedelai', '13:49:55', '2020-09-15', '5f60641384ecf.png', 'Marsabri', 'marsabri', 'Mempersiapkan berkas untuk ijin edar', 'Sangat Puas', NULL),
(74, 1, 'sdsafdas', 'dsfsafdas', 'dsafasf', 'dsfsaf', 'dsfasa', NULL, 'sgfsdgs', 'Pria', 'dasfas', 'dsfsafas', '563653653', 'sgfsdg', 'fgsfdsgsd', '14:26:52', '2020-09-15', '5f606cbc10da9.png', NULL, NULL, '', '', NULL),
(75, 4, 'Rojul', NULL, NULL, NULL, NULL, NULL, NULL, 'Pria', '39', 'Jl. Tengku zainal abidin', '081371498421', 'swasta', 'kunjungan', '14:57:21', '2020-09-15', '5f6073e129b69.png', NULL, NULL, '', 'Sangat Puas', NULL),
(76, 2, 'Donna', NULL, NULL, NULL, NULL, NULL, NULL, 'Wanita', '50', 'jl.merak no 19 tangkerang labuai', '081371147177', 'swasta', 'konsultasi izin minuman teh', '15:04:53', '2020-09-15', '5f6075a52eeea.png', NULL, NULL, '', '', NULL),
(77, 2, 'Nunang Fitra Zaki Amri', NULL, NULL, NULL, NULL, NULL, NULL, 'Pria', '23', 'Jl.pepaya No 16', '083186841239', 'Mahasiswa', 'Ambil Surat Balasan Riset', '14:11:56', '2020-09-16', '5f61babcf043f.png', 'Nunang Ganis', 'Nunang Ganis', 'diberikan surat izin riset', 'Sangat Puas', NULL),
(78, 4, 'Sumari', NULL, NULL, NULL, NULL, NULL, NULL, 'Pria', '50', 'jl.olora rt02\\rw04 kubang jaya siak hulu kampar', '085374457236', 'wiraswasta', 'bimtek  pangan', '10:17:49', '2020-09-17', '5f62d55d125ae.png', NULL, NULL, '', '', NULL),
(79, 2, 'Hazra Yuvendius', NULL, NULL, NULL, NULL, NULL, NULL, 'Pria', '42', 'jl . Damai 33', '085270767492', 'wirausaha', 'konsultasi', '11:03:45', '2020-09-17', '5f62e021f0a7e.png', NULL, NULL, '', 'Sangat Puas', NULL),
(80, 1, 'Dadang', '82110932', 'Bripka', 'staff brantas', 'BNN  Prov', NULL, 'shabu', 'Pria', '38', 'jl.pepaya no 65', '082172858292', 'polri', 'Uji sample', '14:46:11', '2020-09-17', '5f631443b7493.png', 'Nur Isnani', '-', '', 'Sangat Puas', 'PP.01.01.94.941.09.20.532'),
(81, 1, 'M.Sitinjak', '86056685', 'bripka', 'Banit Reskrim', 'polsek Perhentian Raja', NULL, 'shabu', 'Pria', '34', 'Aspol sek perhentian raja', '081365541896', 'polri', 'Uji sample', '15:21:49', '2020-09-17', '5f631c9d59803.png', 'Nur Isnani', '-', '', '', 'PP.01.01.94.941.09.20.533');

-- --------------------------------------------------------

--
-- Table structure for table `cukup_puas`
--

CREATE TABLE `cukup_puas` (
  `id_cukup_puas` int(12) NOT NULL,
  `id_petugas` int(12) NOT NULL,
  `jumlah_cukup_puas` int(12) NOT NULL,
  `id_biodata` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kurang_puas`
--

CREATE TABLE `kurang_puas` (
  `id_kurang_puas` int(12) NOT NULL,
  `id_petugas` int(12) NOT NULL,
  `jumlah_kurang_puas` int(12) NOT NULL,
  `id_biodata` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kurang_puas`
--

INSERT INTO `kurang_puas` (`id_kurang_puas`, `id_petugas`, `jumlah_kurang_puas`, `id_biodata`) VALUES
(1, 5, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `id_layanan` int(12) NOT NULL,
  `nama_layanan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`id_layanan`, `nama_layanan`) VALUES
(1, 'pengujian'),
(2, 'konsultasi'),
(3, 'sertifikasi'),
(4, 'umum');

-- --------------------------------------------------------

--
-- Table structure for table `pengujian`
--

CREATE TABLE `pengujian` (
  `id_pengujian` int(12) NOT NULL,
  `id_biodata` varchar(12) NOT NULL,
  `nama` varchar(300) NOT NULL,
  `pangkat` varchar(300) NOT NULL,
  `jabatan` varchar(300) NOT NULL,
  `instansi` varchar(300) NOT NULL,
  `hp` varchar(300) NOT NULL,
  `tgl_surat` varchar(300) NOT NULL,
  `sampel` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengujian`
--

INSERT INTO `pengujian` (`id_pengujian`, `id_biodata`, `nama`, `pangkat`, `jabatan`, `instansi`, `hp`, `tgl_surat`, `sampel`) VALUES
(1, '2', 'Ario setiadi', '85100002', 'Panit reskrim', 'polsek pasir penyu', '081371009639', 'b/101/VIII/2020/reskrim', 'shabu'),
(2, '9', 'Wahyu firmansyah', 'BRIPKA/87090400', 'Banit Reskrim', 'Polsek Rengat Barat', '085265569889', 'B / 157 / VIII / 2020 / Reskrim', 'shabu');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(12) NOT NULL,
  `nama_petugas` varchar(50) NOT NULL,
  `id_layanan` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `id_layanan`) VALUES
(1, 'Sonya Annisa', 2),
(2, 'Yudha Agus Pranata Barutu', 2),
(3, 'Nunang Ganis Yatunar', 2),
(4, 'Yenita', 2),
(5, 'Maranata Parulian', 2),
(6, 'Marsabri', 2),
(7, 'Harri Wibowo', 2),
(8, 'Sabrila', 2),
(9, 'Evi Mardini', 3),
(10, 'Yossi Fitrianti', 3),
(11, 'Uci Ramadhani', 3),
(12, 'Syahriani', 3),
(13, 'Dori Ardianda', 3),
(14, 'Evi Mardini', 2),
(15, 'Yossi Fitrianti', 2),
(16, 'Uci Ramadhani', 2),
(17, 'Syahriani', 2),
(18, 'Dori Ardianda', 2),
(19, 'Nur Isnani', 1),
(20, 'Handiningtyas Devina', 4),
(21, 'Elvira Yolanda', 4);

-- --------------------------------------------------------

--
-- Table structure for table `puas`
--

CREATE TABLE `puas` (
  `id_puas` int(12) NOT NULL,
  `id_petugas` int(12) NOT NULL,
  `jumlah_puas` int(12) NOT NULL,
  `id_biodata` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `puas`
--

INSERT INTO `puas` (`id_puas`, `id_petugas`, `jumlah_puas`, `id_biodata`) VALUES
(1, 2, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sangat_puas`
--

CREATE TABLE `sangat_puas` (
  `id_sangat_puas` int(12) NOT NULL,
  `id_petugas` int(12) NOT NULL,
  `jumlah_sangat_puas` int(12) NOT NULL,
  `id_biodata` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sangat_puas`
--

INSERT INTO `sangat_puas` (`id_sangat_puas`, `id_petugas`, `jumlah_sangat_puas`, `id_biodata`) VALUES
(1, 12, 1, 1),
(2, 19, 1, 2),
(3, 2, 1, 8),
(4, 19, 2, 11),
(6, 19, 3, 12),
(7, 19, 4, 14),
(10, 3, 1, 16),
(11, 1, 1, 20),
(13, 4, 1, 21),
(15, 19, 5, 24),
(16, 17, 1, 26),
(18, 12, 2, 28),
(24, 5, 1, 30),
(25, 5, 2, 31),
(26, 5, 3, 33),
(27, 19, 6, 34),
(28, 3, 2, 38),
(29, 11, 1, 39),
(30, 16, 1, 40),
(31, 19, 7, 47),
(32, 19, 8, 48),
(33, 1, 2, 51),
(34, 19, 9, 54),
(35, 4, 2, 55),
(36, 19, 10, 56),
(37, 1, 3, 57),
(38, 19, 11, 61),
(39, 19, 12, 62),
(40, 19, 13, 63),
(41, 19, 14, 64),
(42, 17, 2, 70),
(43, 19, 15, 71),
(45, 6, 1, 72),
(46, 6, 2, 73),
(47, 17, 3, 75),
(48, 3, 3, 77),
(49, 20, 1, 79),
(50, 19, 16, 80);

-- --------------------------------------------------------

--
-- Table structure for table `survei`
--

CREATE TABLE `survei` (
  `id_survei` int(12) NOT NULL,
  `id_detail_petugas` int(12) NOT NULL,
  `id_hasil_survei` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `survei`
--

INSERT INTO `survei` (`id_survei`, `id_detail_petugas`, `id_hasil_survei`) VALUES
(1, 12, 1),
(2, 19, 2),
(3, 2, 1),
(4, 2, 3),
(5, 19, 4),
(6, 19, 6),
(7, 19, 7),
(8, 3, 10),
(9, 1, 11),
(10, 4, 13),
(11, 19, 15),
(12, 17, 16),
(13, 12, 18),
(14, 5, 24),
(15, 5, 25),
(16, 5, 26),
(17, 19, 27),
(18, 3, 28),
(19, 11, 29),
(20, 16, 30),
(21, 19, 31),
(22, 19, 32),
(23, 1, 33),
(24, 19, 34),
(25, 4, 35),
(26, 19, 36),
(27, 1, 37),
(28, 19, 38),
(29, 5, 1),
(30, 19, 39),
(31, 19, 40),
(32, 19, 41),
(33, 17, 42),
(34, 19, 43),
(35, 6, 45),
(36, 6, 46),
(37, 17, 47),
(38, 3, 48),
(39, 20, 49),
(40, 19, 50);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(12) NOT NULL,
  `id_layanan` int(12) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `aktif` enum('Y','T') NOT NULL,
  `level` int(12) NOT NULL,
  `status` enum('admin','user','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `id_layanan`, `nama_user`, `username`, `password`, `aktif`, `level`, `status`) VALUES
(1, 1, 'pengujian', 'pengujian', 'pengujian', 'Y', 1, 'admin'),
(2, 2, 'konsultasi', 'konsultasi', 'konsultasi', 'Y', 1, 'admin'),
(3, 3, 'sertifikasi', 'sertifikasi', 'sertifikasi', 'Y', 1, 'admin'),
(4, 4, 'umum', 'umum', 'umum', 'Y', 1, 'admin'),
(5, 5, 'admin', 'admin', 'admin', 'Y', 2, 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id_biodata`);

--
-- Indexes for table `cukup_puas`
--
ALTER TABLE `cukup_puas`
  ADD PRIMARY KEY (`id_cukup_puas`),
  ADD UNIQUE KEY `id_biodata` (`id_biodata`);

--
-- Indexes for table `kurang_puas`
--
ALTER TABLE `kurang_puas`
  ADD PRIMARY KEY (`id_kurang_puas`),
  ADD UNIQUE KEY `id_biodata` (`id_biodata`);

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id_layanan`);

--
-- Indexes for table `pengujian`
--
ALTER TABLE `pengujian`
  ADD PRIMARY KEY (`id_pengujian`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `puas`
--
ALTER TABLE `puas`
  ADD PRIMARY KEY (`id_puas`),
  ADD UNIQUE KEY `id_biodata` (`id_biodata`);

--
-- Indexes for table `sangat_puas`
--
ALTER TABLE `sangat_puas`
  ADD PRIMARY KEY (`id_sangat_puas`),
  ADD UNIQUE KEY `id_biodata` (`id_biodata`);

--
-- Indexes for table `survei`
--
ALTER TABLE `survei`
  ADD PRIMARY KEY (`id_survei`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id_biodata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `cukup_puas`
--
ALTER TABLE `cukup_puas`
  MODIFY `id_cukup_puas` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kurang_puas`
--
ALTER TABLE `kurang_puas`
  MODIFY `id_kurang_puas` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `layanan`
--
ALTER TABLE `layanan`
  MODIFY `id_layanan` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pengujian`
--
ALTER TABLE `pengujian`
  MODIFY `id_pengujian` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `puas`
--
ALTER TABLE `puas`
  MODIFY `id_puas` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sangat_puas`
--
ALTER TABLE `sangat_puas`
  MODIFY `id_sangat_puas` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `survei`
--
ALTER TABLE `survei`
  MODIFY `id_survei` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
