-- --------------------------------------------------------
-- Host:                         pma.pizza-mamamia.local
-- Server Version:               10.0.26-MariaDB-0+deb8u1 - (Debian)
-- Server Betriebssystem:        debian-linux-gnu
-- HeidiSQL Version:             9.3.0.5083
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Exportiere Datenbank Struktur für vagrant
CREATE DATABASE IF NOT EXISTS `vagrant` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_bin */;
USE `vagrant`;

-- Exportiere Struktur von Tabelle vagrant.Menues
CREATE TABLE IF NOT EXISTS `Menues` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parentId` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `url` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Exportiere Daten aus Tabelle vagrant.Menues: ~38 rows (ungefähr)
DELETE FROM `Menues`;
/*!40000 ALTER TABLE `Menues` DISABLE KEYS */;
INSERT INTO `Menues` (`id`, `parentId`, `name`, `url`) VALUES
	(1, NULL, 'mainMenu', ''),
	(2, 1, 'Aktionen', '/campaigns/index'),
	(3, 1, 'Pizza', '/productlist/index'),
	(4, 1, 'Nudeln', '/productlist/index'),
	(5, 1, 'Fingerfood', '/productlist/index'),
	(6, 3, 'Alle einsehen', '/productlist/index'),
	(7, 3, 'vegetarische Menüs', '/productlist/index'),
	(8, 3, 'Klassiker', '/productlist/index'),
	(9, 4, 'Alle einsehen', '/productlist/index'),
	(10, 4, 'Vegetarische', '/productlist/index'),
	(11, 4, 'Klassiker', '/productlist/index'),
	(12, 4, 'Überbackenes', '/productlist/index'),
	(13, 4, 'Saisonal', '/productlist/index'),
	(14, 5, 'Alle einsehen', '/productlist/index'),
	(15, 5, 'Anti Pasti', '/productlist/index'),
	(16, 5, 'Klassiker', '/productlist/index'),
	(17, 5, 'Burger', '/productlist/index'),
	(18, 1, 'Salat', '/productlist/index'),
	(19, 18, 'Alle einsehen', '/productlist/index'),
	(20, 18, 'Vegetarisch', '/productlist/index'),
	(21, 18, 'Klassiker', '/productlist/index'),
	(22, 18, 'Laktosefrei', '/productlist/index'),
	(23, 18, 'Warme', '/productlist/index'),
	(24, 1, 'Desserts', '/productlist/index'),
	(25, 24, 'Alle einsehen', '/productlist/index'),
	(26, 24, 'Eis', '/productlist/index'),
	(27, 24, 'Klassiker', '/productlist/index'),
	(28, 24, 'Laktosefrei', '/productlist/index'),
	(29, 24, 'Warme', '/productlist/index'),
	(30, 1, 'Getränke', '/productlist/index'),
	(31, 30, 'Nicht Alkoholische', '/productlist/index'),
	(32, 30, 'Alkoholische', '/productlist/index'),
	(33, 30, 'Koffeinhaltig', '/productlist/index'),
	(34, 31, 'Softdrinks', '/productlist/index'),
	(35, 31, 'Säfte', '/productlist/index'),
	(36, 32, 'Weine', '/productlist/index'),
	(37, 32, 'Mix', '/productlist/index'),
	(38, 33, 'EnergyDrinks', '/productlist/index');
/*!40000 ALTER TABLE `Menues` ENABLE KEYS */;

-- Exportiere Struktur von Tabelle vagrant.User
CREATE TABLE IF NOT EXISTS `User` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `username` varchar(100) COLLATE utf8_bin NOT NULL,
  `password` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Logins and Stuff';

-- Exportiere Daten aus Tabelle vagrant.User: ~0 rows (ungefähr)
DELETE FROM `User`;
/*!40000 ALTER TABLE `User` DISABLE KEYS */;
/*!40000 ALTER TABLE `User` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
