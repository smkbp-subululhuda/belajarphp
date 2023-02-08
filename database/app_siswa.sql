-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for app_siswa
CREATE DATABASE IF NOT EXISTS `app_siswa` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `app_siswa`;

-- Dumping structure for table app_siswa.data_siswa
CREATE TABLE IF NOT EXISTS `data_siswa` (
  `id_siswa` int(11) NOT NULL AUTO_INCREMENT,
  `nis` varchar(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `kelas` varchar(3) NOT NULL,
  `jurusan` varchar(3) NOT NULL,
  PRIMARY KEY (`id_siswa`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- Dumping data for table app_siswa.data_siswa: ~5 rows (approximately)
/*!40000 ALTER TABLE `data_siswa` DISABLE KEYS */;
INSERT INTO `data_siswa` (`id_siswa`, `nis`, `nama`, `jk`, `kelas`, `jurusan`) VALUES
	(4, '2001', 'Nahri Ilham', 'L', 'XI', 'RPL'),
	(5, '2002', 'Ahmad Arbain', 'L', 'XI', 'RPL'),
	(6, '2003', 'Suqya Rohmatin', 'P', 'XI', 'RPL'),
	(7, '2004', 'Sevira Damayanti', 'P', 'XI', 'RPL'),
	(8, '2005', 'Uhailul Munawwar', 'L', 'XI', 'RPL'),
	(13, '2005', 'una', 'P', 'X', 'PBS');
/*!40000 ALTER TABLE `data_siswa` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
