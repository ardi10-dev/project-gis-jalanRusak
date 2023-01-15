-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Jan 2023 pada 19.22
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gis`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bencana`
--

CREATE TABLE `bencana` (
  `id` int(11) NOT NULL,
  `kategori` varchar(70) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `latitude` varchar(100) NOT NULL,
  `longitude` varchar(100) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `gambar` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bencana`
--

INSERT INTO `bencana` (`id`, `kategori`, `kecamatan`, `keterangan`, `latitude`, `longitude`, `lokasi`, `gambar`) VALUES
(26, 'parah', 'Marpoyan Damai', 'Jalan Rusak Di Sekitaran Marpoyan Damai', '0.463829', '101.42173', 'Jalan Adisucipto, Kelurahan Sidomulyo Timur,Kecamatan Marpoyan Damai', 'https://res.cloudinary.com/dygdchiev/image/upload/v1670161049/Gis/Daffa/20221128_064232_PM_____map_tyug0x.jpg'),
(27, 'ringan', 'Marpoyan Damai', 'Luas Kerusakan 5 Meter', '0.451904', '101.421936', 'Jalan Surian,Kelurahan Sidomulyo Timur', 'https://res.cloudinary.com/dygdchiev/image/upload/v1670161050/Gis/Daffa/20221203_012044_PM____Indonesia__Riau__Kecamatan_Marpoyan_Damai__Jl._Kayu_Manis_No.555_Sidomulyo_Tim._Kec._Marpoyan_Damai_Kota_Pekanbaru_Riau_28289_Indonesia___0.451904_101.421934__0_27_6_N_101_25_18_E____map_korp3n.jpg'),
(28, 'sedang', 'Marpoyan Damai', 'Kerusakan 10 meter', '0.451039', '101.421898', 'Jalan Muslimin V,Kelurahan Sidomulyo Timur', 'https://res.cloudinary.com/dygdchiev/image/upload/v1670161050/Gis/Daffa/20221203_012259_PM____Indonesia__Riau__Kecamatan_Marpoyan_Damai__Jl._Surian_No.101_Sidomulyo_Tim._Kec._Marpoyan_Damai_Kota_Pekanbaru_Riau_28289_Indonesia___0.45104_101.421898__0_27_3_N_101_25_18_E____map_bkeoad.jpg'),
(29, 'parah', 'Marpoyan Damai', 'Luas 20 Meter', '0.449362', '101.420471', 'Jalan Muslimin,Kelurahan Sidomulyo Timur', 'https://res.cloudinary.com/dygdchiev/image/upload/v1670161052/Gis/Daffa/20221203_012524_PM____Indonesia__Riau__Kecamatan_Marpoyan_Damai__CCXC_M77_Jl._Muslimin_Gg._Pasaman_Sidomulyo_Tim._Kec._Marpoyan_Damai_Kota_Pekanbaru_Riau_28289_Indonesia___0.449362_101.42047__0_26_57_N_101_25_13_E____map_tlr8li.jpg'),
(30, 'parah', 'Marpoyan Damai', 'Luas kerusakan 30 Meter', '0.448672', '101.419388', 'Jalan Sairama,Kelurahan Sidomulyo Timur', 'https://res.cloudinary.com/dygdchiev/image/upload/v1670161050/Gis/Daffa/20221203_012719_PM____Indonesia__Riau__Kecamatan_Marpoyan_Damai__CCX9_FRP_Jl._Sairama_Sidomulyo_Tim._Kec._Marpoyan_Damai_Kota_Pekanbaru_Riau_28293_Indonesia___0.448672_101.419388__0_26_55_N_101_25_9_E____map_ji0ok7.jpg'),
(31, 'parah', 'Marpoyan Damai', 'Luas kerusakan 30 Meter', '0.446892', '101.424477', 'Jalan Handayani,Kelurahan Maharatu', 'https://res.cloudinary.com/dygdchiev/image/upload/v1670161052/Gis/Daffa/20221203_013143_PM____Indonesia__Riau__Kecamatan_Marpoyan_Damai__CCWF_PVJ_Maharatu_Kec._Marpoyan_Damai_Kota_Pekanbaru_Riau_Indonesia___0.446892_101.42448__0_26_48_N_101_25_28_E____map_ze8y12.jpg'),
(32, 'parah', 'Marpoyan Damai', 'Luas kerusakan 5 Meter', '0.434267', '101.428101', 'Jalan Garuda Raya,Kelurahan Maharatu', 'https://res.cloudinary.com/dygdchiev/image/upload/v1670161052/Gis/Daffa/20221203_013803_PM____Indonesia__Riau__Kecamatan_Marpoyan_Damai__CCMH_P62_Jl._Garuda_Raya_Maharatu_Kec._Marpoyan_Damai_Kota_Pekanbaru_Riau_28283_Indonesia___0.434268_101.428097__0_26_3_N_101_25_41_E____map_mepwai.jpg'),
(33, 'parah', 'Bukit Raya', 'Luas Kerusakan 10 Meter', '0.424659', '101.43811', 'Jalan Kaharuddin Nasution,Kecamatan Bukit Raya,Kelurahan Simpang Tiga', 'https://res.cloudinary.com/dygdchiev/image/upload/v1670161053/Gis/Daffa/20221203_014442_PM____Indonesia__Riau__Kecamatan_Bukit_Raya__Jl._Kaharuddin_Nst_No.6620_Simpang_Tiga_Kec._Bukit_Raya_Kota_Pekanbaru_Riau_28283_Indonesia___0.42466_101.438108__0_25_28_N_101_26_17_E____map_juh3u5.jpg'),
(34, 'parah', 'Marpoyan Damai', 'Luas Kerusakan 10 Meter', '0.443475', '101.443436', 'Jalan Kartama,Kelurahan Maharatu,Kecamatan Marpoyan Damai', 'https://res.cloudinary.com/dygdchiev/image/upload/v1670161053/Gis/Daffa/20221203_015538_PM____Indonesia__Riau__Kecamatan_Marpoyan_Damai__CCVV_996_Jl._Kartama_Maharatu_Kec._Marpoyan_Damai_Kota_Pekanbaru_Riau_28284_Indonesia___0.443475_101.443435__0_26_36_N_101_26_36_E____map_id5z1w.jpg'),
(35, 'parah', 'Marpoyan Damai', 'Luas Kerusakan 10 Meter', '0.452649', '101.424667', 'Jalan Inpres,Kelurahan Sidomulyo Timur,Kecamatan Marpoyan Damai', 'https://res.cloudinary.com/dygdchiev/image/upload/v1670161054/Gis/Daffa/20221203_020251_PM____Indonesia__Riau__Kecamatan_Marpoyan_Damai__FC3F_2VP_Maharatu_Kec._Marpoyan_Damai_Kota_Pekanbaru_Riau_28289_Indonesia___0.452649_101.424667__0_27_9_N_101_25_28_E____map_onzs5q.jpg'),
(36, 'parah', 'Marpoyan Damai', 'Luas Kerusakan 20 Meter', '0.474283', '101.427139', 'Jalan Rambutan,Sidomulyo Timur,Marpoyan Damai', 'https://res.cloudinary.com/dygdchiev/image/upload/v1670161056/Gis/Daffa/20221203_021155_PM____Indonesia__Riau__Kecamatan_Marpoyan_Damai__Jl._Rambutan_No.16_Sidomulyo_Tim._Kec._Marpoyan_Damai_Kota_Pekanbaru_Riau_28289_Indonesia___0.474284_101.42714__0_28_27_N_101_25_37_E____map_ewldpr.jpg'),
(37, 'parah', 'Marpoyan Damai', 'Luas Kerusakan 30 Meter', '0.490201', '101.438568', 'Jalan Paus,Tengkerang Tengah,Marpoyan Damai', 'https://res.cloudinary.com/dygdchiev/image/upload/v1670161054/Gis/Daffa/20221203_022856_PM____Indonesia__Riau__Kecamatan_Marpoyan_Damai__Jl._Paus_No.34_Tengkerang_Tengah_Kec._Marpoyan_Damai_Kota_Pekanbaru_Riau_28125_Indonesia___0.490201_101.438565__0_29_24_N_101_26_18_E____map_ehpksx.jpg'),
(38, 'parah', 'Sukajadi', 'Luas Kerusakan 5 Meter', '0.519718', '101.437943', 'Jalan KH.Ahmad Dahlan', 'https://res.cloudinary.com/dygdchiev/image/upload/v1670161057/Gis/Daffa/20221203_024729_PM____Indonesia__Riau__Kecamatan_Sukajadi__GC9Q_V5H_Jl._KH._Ahmad_Dahlan_Sukajadi_Kec._Sukajadi_Kota_Pekanbaru_Riau_28156_Indonesia___0.519718_101.437939__0_31_10_N_101_26_16_E____map_bp9xjn.jpg'),
(39, 'parah', 'Pekanbaru', 'Luas Kerusakan 10 Meter', '0.524694', '101.4422', 'Jalan Jend Ahmad Yani,Kota Baru,Pekanbaru Kota', 'https://res.cloudinary.com/dygdchiev/image/upload/v1670161057/Gis/Daffa/20221203_025103_PM____Indonesia__Riau__Kecamatan_Pekanbaru_Kota__GCFR_VVJ_Jl._Jend._Ahmad_Yani_Kota_Baru_Kec._Pekanbaru_Kota_Kota_Pekanbaru_Riau_28156_Indonesia___0.524695_101.442203__0_31_28_N_101_26_31_E____map_qkrqdi.jpg'),
(40, 'parah', 'Pekanbaru', 'Luas Kerusakan 20 Meter', '0.528473', '101.440407', 'Jalan Cempaka,Padang Bulan,Senapelan,Pekanbaru Kota', 'https://res.cloudinary.com/dygdchiev/image/upload/v1670161058/Gis/Daffa/20221203_025439_PM____Indonesia__Riau__Kecamatan_Senapelan__Jl._Cempaka_No.36_Padang_Bulan_Kec._Senapelan_Kota_Pekanbaru_Riau_28156_Indonesia___0.528473_101.440409__0_31_42_N_101_26_25_E____map_ybrguw.jpg'),
(41, 'ringan', 'Sukajadi', 'Luas Kerusakan 3 Meter', '0.523175', '101.440262', 'Jalan Teratai,Sukajadi,Sukajadi', 'https://res.cloudinary.com/dygdchiev/image/upload/v1670161058/Gis/Daffa/20221203_030046_PM____Indonesia__Riau__Kecamatan_Sukajadi__Jl._Teratai_Rumbai_No.150_Sukajadi_Kec._Sukajadi_Kota_Pekanbaru_Riau_28156_Indonesia___0.523175_101.440263__0_31_23_N_101_26_24_E____map_xzhfep.jpg'),
(42, 'sedang', 'Sukajadi', 'Luas Kerusakan 5 Meter', '0.526705', '101.437233', 'Jalan Melati,Sukajadi,Sukajadi', 'https://res.cloudinary.com/dygdchiev/image/upload/v1670161058/Gis/Daffa/20221203_030612_PM____Indonesia__Riau__Kecamatan_Sukajadi__GCGP_MVV_Harjosari_Kec._Sukajadi_Kota_Pekanbaru_Riau_28156_Indonesia___0.526705_101.437231__0_31_36_N_101_26_14_E____map_pxspdd.jpg'),
(43, 'sedang', 'Pekanbaru', 'Luas Kerusakan 5 Meter', '0.532269', '101.444382', 'Jalan Prof.Moh.Yamin,kota baru,Pekanbaru kota', 'https://res.cloudinary.com/dygdchiev/image/upload/v1670161060/Gis/Daffa/20221203_032424_PM____Indonesia__Riau__Kecamatan_Pekanbaru_Kota__Jl._Prof._Moh._Yamin_No.78_Kota_Baru_Kec._Pekanbaru_Kota_Kota_Pekanbaru_Riau_28155_Indonesia___0.532269_101.444384__0_31_56_N_101_26_39_E____map_mbvwem.jpg'),
(44, 'sedang', 'Pekanbaru', 'Luas Kerusakan 5 Meter', '0.530910', '101.44651', 'Jalan Gambir,Sukaramai,Pekanbaru kota', 'https://res.cloudinary.com/dygdchiev/image/upload/v1670161059/Gis/Daffa/20221203_033830_PM____Indonesia__Riau__Kecamatan_Pekanbaru_Kota__Jl._Gambir_No.2_Sukaramai_Kec._Pekanbaru_Kota_Kota_Pekanbaru_Riau_28155_Indonesia___0.53091_101.446508__0_31_51_N_101_26_47_E____map_mphulj.jpg'),
(45, 'parah', 'Limah Puluh', 'Luas Kerusakan 30 Meter', '0.539519', '101.453705', 'Jalan Sultan Syarif Qasim,Pesisir,Lima Puluh', 'https://res.cloudinary.com/dygdchiev/image/upload/v1670161060/Gis/Daffa/20221203_035039_PM____Indonesia__Riau__Kecamatan_Lima_Puluh__GFQ3_QFG_Jl._Sultan_Syarif_Qasim_Pesisir_Kec._Lima_Puluh_Kota_Pekanbaru_Riau_28155_Indonesia___0.539519_101.453709__0_32_22_N_101_27_13_E____map_rsohs4.jpg'),
(46, 'parah', 'Kec. Senapelan, Kota Pekanbaru, Riau', 'Parah', '0.537404', '101.431618', 'Jl. Kulim', 'https://res.cloudinary.com/dygdchiev/image/upload/v1670160899/Gis/Ardi/20221106_090024_AM____0.537404_101.431618__0_32_14_N_101_25_53_E____map_epfguu.jpg'),
(47, 'parah', 'Tampan', 'Terdapat kerusakan parah di Jl.Melati', '0.498287', '101.374756', 'Jl. Melati, Simpang Baru,Kota Pekanbaru', 'https://res.cloudinary.com/dygdchiev/image/upload/v1670160900/Gis/Ardi/20221106_095235_AM____0.463229_101.388146__0_27_47_N_101_23_17_E____map_sambjb.jpg'),
(48, 'parah', 'Tampan', 'Terdapat kerusakan jalan di Jl.Suka Karya 2-11', '0.463229', '101.388145', 'Jl. Suka Karya 2-11,Tuah Karya,Kota Pekanbaru, Riau', 'https://res.cloudinary.com/dygdchiev/image/upload/v1670160901/Gis/Ardi/20221106_095345_AM____0.462359_101.388185__0_27_44_N_101_23_17_E____map_dbpmsi.jpg'),
(49, 'parah', 'Tampan', 'Terdapat kerusakan jalan di Jl.Suka Karya No 3', '0.462358', '101.388184', 'Jl. Suka Karya No.3,Tuah Karya,Kota Pekanbaru, Riau', 'https://res.cloudinary.com/dygdchiev/image/upload/v1670160901/Gis/Ardi/20221106_092002_AM____0.498287_101.374758__0_29_53_N_101_22_29_E____map_wb6nwl.jpg'),
(50, 'parah', 'Tampan', 'Terdapat kerusakan jalan di Jl.Suka Karya1-18', '0.460069', '101.388092', 'Jl. Suka Karya 1-18, Tuah Karya,Kota Pekanbaru, Riau', 'https://res.cloudinary.com/dygdchiev/image/upload/v1670160902/Gis/Ardi/20221106_095936_AM____0.460069_101.388092__0_27_36_N_101_23_17_E____map_sz4gpx.jpg'),
(51, 'ringan', 'Tampan', 'Tidak terdapat kerusakan jalan', '0.447206', '101.385735', 'Jl. Tuah Karya,Kota Pekanbaru, Riau', 'https://res.cloudinary.com/dygdchiev/image/upload/v1670160902/Gis/Ardi/20221106_100107_AM____0.447206_101.385737__0_26_49_N_101_23_8_E____map_egou6i.jpg'),
(52, 'parah', 'Tampan', 'Terdapat kerusakan jalan di Jl Suka Karya 4-85 ', '0.444035', '101.385902', 'Jl. Suka Karya 4-85,Tuah Karya,Kota Pekanbaru, Riau', 'https://res.cloudinary.com/dygdchiev/image/upload/v1670160902/Gis/Ardi/20221106_100223_AM____0.444035_101.3859__0_26_38_N_101_23_9_E____map_rg8jrv.jpg'),
(53, 'parah', 'Tampan', 'Terdapat kerusakan jalan di Jl.Suka Karya.', '0.441676', '101.385712', 'Jl. Suka Karya,Tuah Karya,Kota Pekanbaru, Riau', 'https://res.cloudinary.com/dygdchiev/image/upload/v1670160903/Gis/Ardi/20221106_100626_AM____0.436642_101.38385__0_26_11_N_101_23_1_E____map_esta5d.jpg'),
(54, 'parah', 'Tampan', 'Terdapat kerusakan jalan di Jl.Suka Karya', '0.438882', '101.384384', 'Jl. Suka Karya,Tuah Karya,Kota Pekanbaru, Riau', 'https://res.cloudinary.com/dygdchiev/image/upload/v1670160904/Gis/Ardi/20221106_100332_AM____0.441676_101.385715__0_26_30_N_101_23_8_E____map_ericee.jpg'),
(55, 'parah', 'Tampan', 'Terdapat kerusakan jalan di Jl.Suka Karya', '0.436642', '101.38385', 'Jl. Suka Karya,Tuah Karya,Kota Pekanbaru, Riau', 'https://res.cloudinary.com/dygdchiev/image/upload/v1670160904/Gis/Ardi/20221106_100521_AM____0.438882_101.384382__0_26_19_N_101_23_3_E____map_mgxlzm.jpg'),
(56, 'parah', 'Tampan', 'Terdapat kerusakan jalan di Jl.Suka Karya', '0.435115', '101.383469', 'Jl. Suka Karya,Tuah Karya,Kota Pekanbaru, Riau', 'https://res.cloudinary.com/dygdchiev/image/upload/v1670160905/Gis/Ardi/20221106_101201_AM____0.435115_101.383472__0_26_6_N_101_23_0_E____map_ffl8fk.jpg'),
(57, 'parah', 'Tambang', 'Terdapat kerusakan jalan di Jl.Kubang Raya pada radius 1000 Km', '0.424496', '101.371513', 'Jl. Kubang Raya No.10, Tarai Bangun,Kabupaten Kampar, Riau', 'https://res.cloudinary.com/dygdchiev/image/upload/v1670160906/Gis/Ardi/20221106_101257_AM____0.424496_101.371516__0_25_28_N_101_22_17_E____map_zj2sfb.jpg'),
(58, 'parah', 'Tampan', 'Terdapat kerusakan jalan di Jl.Tuah Karya seluas 10 meter', '0.464203', '101.371033', 'Tuah Karya,Kota Pekanbaru, Riau', 'https://res.cloudinary.com/dygdchiev/image/upload/v1670160906/Gis/Ardi/20221106_102347_AM____0.464204_101.37103__0_27_51_N_101_22_15_E____map_snflvz.jpg'),
(59, 'parah', 'Tampan', 'Terdapat kerusakan jalan Pekanbaru seluas 5 meter', '0.470739', '101.374733', 'Pekanbaru, Simpang Baru,Kota Pekanbaru, Riau', 'https://res.cloudinary.com/dygdchiev/image/upload/v1670160905/Gis/Ardi/20221106_102710_AM____0.470739_101.374732__0_28_14_N_101_22_29_E____map_mphabs.jpg'),
(60, 'parah', 'Tampan', 'Terdapat kerusakan jalan di Jl.Bangau Sakti No.27 seluas 10 meter', '0.471230', '101.37468', 'Jl. Bangau Sakti No.27, Simpang Baru, Kota Pekanbaru, Riau', 'https://res.cloudinary.com/dygdchiev/image/upload/v1670160907/Gis/Ardi/20221106_103237_AM____0.471505_101.374738__0_28_17_N_101_22_29_E____map_qymljs.jpg'),
(61, 'parah', 'Tampan', 'Terdapat kerusakan jalan di Jl.Taman Karya seluas 10 meter', '0.463875', '101.376959', 'Jl. Taman Karya 20-2, Tuah Karya,Kota Pekanbaru, Riau', 'https://res.cloudinary.com/dygdchiev/image/upload/v1670160908/Gis/Ardi/20221106_103349_AM____0.461074_101.377099__0_27_39_N_101_22_37_E____map_j0fmqo.jpg'),
(62, 'parah', 'Tampan', 'Terdapat kerusakan jalan di Jl.Tama Karya seluas 50 meter', '0.461074', '101.377098', 'Jl. Taman Karya 18-8, Tuah Karya,Kota Pekanbaru, Riau', 'https://res.cloudinary.com/dygdchiev/image/upload/v1670160908/Gis/Ardi/20221106_103349_AM____0.461074_101.377099__0_27_39_N_101_22_37_E____map_j0fmqo.jpg'),
(63, 'parah', 'Tampan', 'Terdapat kerusakan di Jl.Kutilang Sakti seluas 100 meter', '0.467934', '101.39131', 'Jl. Kutilang Sakti, Simpang Baru,Kota Pekanbaru, Riau', 'https://res.cloudinary.com/dygdchiev/image/upload/v1670160909/Gis/Ardi/20221106_104459_AM____0.454827_101.380843__0_27_17_N_101_22_51_E____map_zgiaw7.jpg'),
(64, 'parah', 'Tampan', 'Terdapat kerusakan jalan di Jl.Kutilang Sakti seluas 50 meter', '0.467971', '101.391235', 'Jl. Kutilang Sakti, Simpang Baru,Kota Pekanbaru, Riau', 'https://res.cloudinary.com/dygdchiev/image/upload/v1670160910/Gis/Ardi/20221106_104537_AM____0.467971_101.391233__0_28_4_N_101_23_28_E____map_mq4jdz.jpg'),
(65, 'parah', 'Tampan', 'Terdapat kerusakan jalan di Jl.Kutilang Sakti seluas 30 meter', '0.472225', '101.391548', 'Jl. Kutilang Sakti, Simpang Baru,Kota Pekanbaru, Riau', 'https://res.cloudinary.com/dygdchiev/image/upload/v1670160909/Gis/Ardi/20221106_104644_AM____0.472225_101.391546__0_28_20_N_101_23_29_E____map_kteswn.jpg'),
(66, 'parah', 'Rumbai', 'Kerusakan jalan pada Jl.Kartika Sari No.14 seluas 5 meter', '0.569323', '101.420143', 'Jl. Kartika Sari No.14, Umban Sari, Kota Pekanbaru, Riau', 'https://res.cloudinary.com/dygdchiev/image/upload/v1670161125/Gis/Dayat/20221105_032906_PM_____map_o3jqss.jpg'),
(67, 'parah', 'Rumbai', 'Terdapat kerusakan jalan di Jl.Patria Sari No.25 seluas 10 meter', '0.574381', '101.423119', 'Jl. Patria Sari No.25, Umban Sari,kota Pekanbaru, Riau', 'https://res.cloudinary.com/dygdchiev/image/upload/v1670161123/Gis/Dayat/20221105_032951_PM_____map_iu2dtf.jpg'),
(68, 'parah', 'Rumbai', 'Terdapat kerusakan jalan di Jl.Umban Sari 83-87 seluas 10 meter', '0.569174', '101.423416', 'Jl. Umban Sari 83-87, Umban Sari,Kota Pekanbaru, Riau', 'https://res.cloudinary.com/dygdchiev/image/upload/v1670161125/Gis/Dayat/20221105_033853_PM_____map_p7kbiw.jpg'),
(69, 'parah', 'Rumbai', 'Terdapat kerusakan jalan di Jl. Umban Sari seluas 10 meter', '0.569148', '101.422885', 'Jl. Umban Sari, Umban Sari,Kota Pekanbaru, Riau', 'https://res.cloudinary.com/dygdchiev/image/upload/v1670161126/Gis/Dayat/20221105_033151_PM_____map_bpgorz.jpg'),
(70, 'parah', 'Rumbai', 'Terdapat kerusakan jalan di Jl.Umban Sari seluas 5 meter', '0.569179', '101.422851', 'Jl. Umban Sari, Umban Sari,Kota Pekanbaru, Riau', 'https://res.cloudinary.com/dygdchiev/image/upload/v1670161125/Gis/Dayat/20221105_033853_PM_____map_p7kbiw.jpg'),
(71, 'parah', 'Rumbai', 'Terdapat kerusakan jalan di Jl.Kartika Sari No.15 seluas 10 meter', '0.568635', '101.419209', 'Jl. Kartika Sari No.15, Umban Sari,Kota Pekanbaru, Riau', 'https://res.cloudinary.com/dygdchiev/image/upload/v1670161126/Gis/Dayat/20221105_033636_PM_____map_ftiqxy.jpg'),
(72, 'parah', 'Rumbai', 'Terdapat kerusakan jalan pada Jl.Umban Sari seluas 5 meter', '0.569088', '101.423508', 'Jl. Umban Sari 83-87, Umban Sari,Kota Pekanbaru, Riau', 'https://res.cloudinary.com/dygdchiev/image/upload/v1670161125/Gis/Dayat/20221105_033853_PM_____map_p7kbiw.jpg'),
(73, 'parah', 'Rumbai', 'Terdapat kerusakan jalan pada Jl.Umban Sari 47-55 seluas 10 meter', '0.568950', '101.425224', 'Jl. Umban Sari 47-55, Umban Sari,Kota Pekanbaru, Riau', 'https://res.cloudinary.com/dygdchiev/image/upload/v1670161127/Gis/Dayat/20221105_033953_PM_____map_iaycmq.jpg'),
(74, 'parah', 'Rumbai', 'Terdapat kerusakan jalan pada Jl.Umban Sari 47-55 seluas 10 meter', '0.568950', '101.425224', 'Jl. Umban Sari 47-55, Umban Sari,Kota Pekanbaru, Riau', 'https://res.cloudinary.com/dygdchiev/image/upload/v1670161127/Gis/Dayat/20221105_033953_PM_____map_iaycmq.jpg'),
(75, 'parah', 'Rumbai', 'Terdapat kerusakan jalan di Jl.Umban Sari seluas 5 meter', '0.569160', '101.427338', 'Jl. Umban Sari, Umban Sari,Kota Pekanbaru, Riau', 'https://res.cloudinary.com/dygdchiev/image/upload/v1670161128/Gis/Dayat/20221105_034127_PM_____map_gtw7vo.jpg'),
(76, 'parah', 'Rumbai', 'Terdapat kerusakan jalan di Jl.Umban Sari seluas 20 meter', '0.569201', '101.427399', 'Jl. Umban Sari, Umban Sari,Kota Pekanbaru, Riau', 'https://res.cloudinary.com/dygdchiev/image/upload/v1670161130/Gis/Dayat/20221105_034224_PM_____map_pwer1a.jpg'),
(77, 'ringan', 'Rumbai', 'Terdapat kerusakan jalan di Jl.Yos Sudarso No.KM 8 seluas 3 meter', '0.576071', '101.423447', 'Jl. Yos Sudarso No.KM 8, Umban Sari,Kota Pekanbaru, Riau', 'https://res.cloudinary.com/dygdchiev/image/upload/v1670161129/Gis/Dayat/20221105_034515_PM_____map_rt54cj.jpg'),
(78, 'parah', 'Rumbai Pesisir', 'Terdapat kerusakan jalan di Jl.Sekolah 8-2 seluas 10 meter', '0.559341', '101.434196', 'Jl. Sekolah 8-2, Meranti Pandak,Kota Pekanbaru, Riau', 'https://res.cloudinary.com/dygdchiev/image/upload/v1670161129/Gis/Dayat/20221105_035627_PM_____map_k5begb.jpg'),
(79, 'ringan', 'Rumbai Pesisir', 'Terdapat kerusakan jalan di Jl.Sekolah 15-19 seluas 3 meter', '0.559475', '101.435051', 'Jl. Sekolah 15-19, Meranti Pandak, Kota Pekanbaru, Riau', 'https://res.cloudinary.com/dygdchiev/image/upload/v1670161130/Gis/Dayat/20221105_035834_PM_____map_tmaxjh.jpg'),
(80, 'ringan', 'Rumbai Pesisir', 'Terdapat kerusakan jalan di Jl.Sekolah 78-76 seluas 3 meter', '0.560364', '101.439514', 'Jl. Sekolah 78-76, Meranti Pandak, Kota Pekanbaru, Riau', 'https://res.cloudinary.com/dygdchiev/image/upload/v1670161133/Gis/Dayat/20221105_035909_PM_____map_s3jumq.jpg'),
(81, 'ringan', 'Rumbai Pesisir', 'Terdapat kerusakan jalan di Jl.Sekolah seluas 3 meter', '0.560519', '101.44136', 'Jl. Sekolah, Meranti Pandak,Kota Pekanbaru, Riau', 'https://res.cloudinary.com/dygdchiev/image/upload/v1670161133/Gis/Dayat/20221105_035909_PM_____map_s3jumq.jpg'),
(82, 'parah', 'Rumbai Pesisir', 'Terdapat kerusakan jalan di Jl.Sekolah 11-7 seluas 10 meter', '0.560477', '101.44297', 'Jl. Sekolah 11-7, Meranti Pandak,Kota Pekanbaru, Riau', 'https://res.cloudinary.com/dygdchiev/image/upload/v1670161134/Gis/Dayat/20221105_040001_PM_____map_xf7edf.jpg'),
(83, 'parah', 'Rumbai Pesisir', 'Terdapat kerusakan jalan di Jl.Sekolah seluas 30 meter', '0.560606', '101.44445', 'Jl. Sekolah No.Kelurahan, Limbungan Baru,Kota Pekanbaru, Riau', 'https://res.cloudinary.com/dygdchiev/image/upload/v1670161133/Gis/Dayat/20221105_040056_PM_____map_xjbapw.jpg'),
(84, 'parah', 'Rumbai Pesisir', 'Terdapat kerusakan jalan di Jl.Sekolah seluas 5 meter', '0.560402', '101.447289', 'Jl. Sekolah, Limbungan Baru,Kota Pekanbaru, Riau', 'https://res.cloudinary.com/dygdchiev/image/upload/v1670161135/Gis/Dayat/20221105_040222_PM_____map_amaam8.jpg'),
(85, 'parah', 'Rumbai Pesisir', 'Terdapat kerusakan jalan di Jl.Sekolah seluas 5 meter', '0.560425', '101.447472', 'Jl. Sekolah, Limbungan Baru,Kota Pekanbaru, Riau', 'https://res.cloudinary.com/dygdchiev/image/upload/v1670161135/Gis/Dayat/20221105_040245_PM_____map_majc8x.jpg'),
(86, 'parah', 'Rumbai Pesisir', 'Terdapat kerusakan di jalan Pekanbaru seluas 5 meter', '0.570845', '101.446289', 'Pekanbaru, Lembah Damai,Kota Pekanbaru, Riau', 'https://res.cloudinary.com/dygdchiev/image/upload/v1670161136/Gis/Dayat/20221105_040532_PM_____map_srffre.jpg'),
(87, 'parah', 'Rumbai Pesisir', 'Terdapat kerusakan di jalan Pekanbaru seluas 6 meter', '0.575292', '101.432877', 'Pekanbaru, Lembah Damai,Kota Pekanbaru, Riau', 'https://res.cloudinary.com/dygdchiev/image/upload/v1670161138/Gis/Dayat/20221105_041054_PM_____map_cd9mql.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `idUsers` int(11) NOT NULL,
  `namaLengkap` varchar(150) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `status` enum('admin','users') NOT NULL,
  `md4` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`idUsers`, `namaLengkap`, `username`, `password`, `status`, `md4`) VALUES
(1, 'Adminstrator', 'admin', '$2y$10$U73DK4qGu7HDmu6iPv9kB.Ai9EC.mdsJ82XymCKXF/Cwkp4KZ5iEe', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(4, 'hidayatul Mukmin', 'dayat', '$2y$10$yO8MS9HlIhiF/5SuSjzL2uR5/RNPxvRVxxLaOLIpcrnKn.0Pt1oQy', 'users', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bencana`
--
ALTER TABLE `bencana`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUsers`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bencana`
--
ALTER TABLE `bencana`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `idUsers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
