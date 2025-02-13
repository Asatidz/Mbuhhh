-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for sipp
DROP DATABASE IF EXISTS `sipp`;
CREATE DATABASE IF NOT EXISTS `sipp` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `sipp`;

-- Dumping structure for table sipp.pelanggaran
DROP TABLE IF EXISTS `pelanggaran`;
CREATE TABLE IF NOT EXISTS `pelanggaran` (
  `id_pelanggaran` int NOT NULL AUTO_INCREMENT,
  `nama_pelanggaran` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `jenis_pelanggaran` enum('ringan','sedang','berat') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `poin` int DEFAULT NULL,
  `kode` int DEFAULT NULL,
  PRIMARY KEY (`id_pelanggaran`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table sipp.pelanggaran: ~6 rows (approximately)
DELETE FROM `pelanggaran`;
INSERT INTO `pelanggaran` (`id_pelanggaran`, `nama_pelanggaran`, `jenis_pelanggaran`, `poin`, `kode`) VALUES
	(5, 'kiy', 'berat', 3, 5),
	(6, 'sadfdsaf', 'ringan', 2, 2),
	(7, 'aku kurang gizi', 'ringan', 5, 12),
	(8, 'mboh Males', 'berat', 45, 1),
	(9, 'dfgdfgdf', 'berat', 98, 45),
	(11, 'males sekolah', 'ringan', 66, 55);

-- Dumping structure for table sipp.riwayat_pelanggaran
DROP TABLE IF EXISTS `riwayat_pelanggaran`;
CREATE TABLE IF NOT EXISTS `riwayat_pelanggaran` (
  `id_riwayat` int NOT NULL AUTO_INCREMENT,
  `id_pelanggaran` int NOT NULL,
  `id_siswa` int NOT NULL,
  `tanggal_riw` date DEFAULT NULL,
  `nis` int DEFAULT NULL,
  `kode_pl` int DEFAULT NULL,
  `poin_plg` int DEFAULT NULL,
  PRIMARY KEY (`id_riwayat`),
  KEY `fk_riwayat_pelanggaran` (`id_pelanggaran`),
  KEY `kode` (`kode_pl`) USING BTREE,
  KEY `nis` (`nis`) USING BTREE,
  KEY `fk_riwayat_siswa` (`id_siswa`,`nis`) USING BTREE,
  CONSTRAINT `fk_riwayat_pelanggaran` FOREIGN KEY (`id_pelanggaran`) REFERENCES `pelanggaran` (`id_pelanggaran`) ON DELETE CASCADE,
  CONSTRAINT `fk_riwayat_siswa` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table sipp.riwayat_pelanggaran: ~0 rows (approximately)
DELETE FROM `riwayat_pelanggaran`;

-- Dumping structure for table sipp.siswa
DROP TABLE IF EXISTS `siswa`;
CREATE TABLE IF NOT EXISTS `siswa` (
  `id_siswa` int NOT NULL AUTO_INCREMENT,
  `foto` varchar(1000) NOT NULL,
  `nama_siswa` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nis` int NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `kelas` enum('10','11','12') NOT NULL,
  `jurusan` enum('AKL','PPLG') NOT NULL,
  `gender` enum('L','P') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `poin_sis` int DEFAULT NULL,
  PRIMARY KEY (`id_siswa`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table sipp.siswa: ~6 rows (approximately)
DELETE FROM `siswa`;
INSERT INTO `siswa` (`id_siswa`, `foto`, `nama_siswa`, `nis`, `tanggal_lahir`, `kelas`, `jurusan`, `gender`, `poin_sis`) VALUES
	(5, 'Screenshot 2025-02-08 105426.png', 'faruq arza', 123213213, '2025-02-12', '11', 'PPLG', 'P', NULL),
	(6, '', 'Fati', 3432423, '2024-06-05', '12', 'AKL', 'P', NULL),
	(7, 'Screenshot 2025-02-08 105426.png', 'astudzalhakimm', 9876, '2021-02-09', '11', 'PPLG', 'P', NULL),
	(8, '', '', 1234598, '2025-02-06', '12', 'PPLG', 'L', NULL),
	(9, '1057008.png', 'gihh', 13213213, '2025-02-12', '11', 'AKL', 'L', NULL),
	(10, '288256.png', 'astidzal HAkiim', 5784676, '2007-12-21', '11', 'PPLG', 'L', NULL);

-- Dumping structure for table sipp.user
DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(50) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `role` enum('55','66','77','88') DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table sipp.user: ~3 rows (approximately)
DELETE FROM `user`;
INSERT INTO `user` (`id_user`, `nama_lengkap`, `username`, `password`, `role`) VALUES
	(1, 'Asatidz', 'bulinda', '71ea389587521bb70d55c8ca86545725', '55'),
	(2, 'hakem', 'oper', 'fd154ffe305c26b5004231ff709bd1b8', '66'),
	(3, 'sdfdsg', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', '77'),
	(4, 'gfhdsf', 'owner', '72122ce96bfec66e2396d2e25225d70a', '88');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
