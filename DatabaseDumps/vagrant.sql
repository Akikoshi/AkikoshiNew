-- phpMyAdmin SQL Dump
-- version 4.6.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Erstellungszeit: 20. Sep 2016 um 14:30
-- Server-Version: 10.0.26-MariaDB-0+deb8u1
-- PHP-Version: 5.6.24-0+deb8u1

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `vagrant`
--
CREATE DATABASE IF NOT EXISTS `vagrant` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `vagrant`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ComponentGroups`
--
-- Erstellt am: 20. Sep 2016 um 11:09
--

DROP TABLE IF EXISTS `ComponentGroups`;
CREATE TABLE IF NOT EXISTS `ComponentGroups` (
  `componentGroupId` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`componentGroupId`),
  KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='a hierarchy for the material library';

--
-- RELATIONEN DER TABELLE `ComponentGroups`:
--

--
-- TRUNCATE Tabelle vor dem Einfügen `ComponentGroups`
--

TRUNCATE TABLE `ComponentGroups`;
--
-- Daten für Tabelle `ComponentGroups`
--

INSERT INTO `ComponentGroups` (`componentGroupId`, `name`) VALUES
(14, 'Dressings'),
(9, 'Fisch'),
(3, 'Fleisch und Wurst'),
(5, 'Gemüse'),
(2, 'Getränke'),
(8, 'Gewürze'),
(1, 'Keine'),
(7, 'Käse'),
(12, 'Nudeln'),
(11, 'Nudelsoßen'),
(13, 'Salat'),
(4, 'Soßen'),
(10, 'Teigs'),
(6, 'sonstiges');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `Components`
--
-- Erstellt am: 20. Sep 2016 um 11:09
--

DROP TABLE IF EXISTS `Components`;
CREATE TABLE IF NOT EXISTS `Components` (
  `componentId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(150) COLLATE utf8_bin NOT NULL,
  `internalName` varchar(512) COLLATE utf8_bin NOT NULL,
  `unitType` enum('g','kg','l','ml','cl','stk','unit') COLLATE utf8_bin NOT NULL DEFAULT 'stk',
  `perUnit` int(7) DEFAULT NULL,
  `perUnitType` enum('g','kg','l','ml','cl','stk','unit') COLLATE utf8_bin DEFAULT NULL,
  `unitSize` int(7) NOT NULL DEFAULT '1',
  `unitPrice` float(7,2) NOT NULL DEFAULT '0.00',
  `componentGroup` int(11) NOT NULL DEFAULT '1',
  `internalComponentId` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`componentId`),
  KEY `materialGroup` (`componentGroup`)
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='these are the basic materials of a product';

--
-- RELATIONEN DER TABELLE `Components`:
--   `componentGroup`
--       `ComponentGroups` -> `componentGroupId`
--

--
-- TRUNCATE Tabelle vor dem Einfügen `Components`
--

TRUNCATE TABLE `Components`;
--
-- Daten für Tabelle `Components`
--

INSERT INTO `Components` (`componentId`, `name`, `internalName`, `unitType`, `perUnit`, `perUnitType`, `unitSize`, `unitPrice`, `componentGroup`, `internalComponentId`) VALUES
(1, 'Tomaten', 'Tomaten in Scheiben', 'stk', NULL, 'stk', 1, 0.02, 5, NULL),
(2, 'Käse', 'Mozarella gerieben', 'unit', 200, 'g', 1, 1.46, 7, NULL),
(3, 'Oregano', 'Oregano gerebelt', 'g', 1, 'stk', 1000, 8.00, 8, NULL),
(4, 'Salami', 'Edeka Salami', 'unit', 8, 'stk', 1, 1.55, 3, NULL),
(5, 'Schinken', 'Kochschinken von Edeka', 'unit', 8, 'stk', 1, 1.69, 3, NULL),
(6, 'Zwiebeln', 'Zwiebeln', 'kg', NULL, 'stk', 1, 2.29, 5, NULL),
(7, 'scharfe Pepperoni', 'Pepperoni, scharf', 'kg', NULL, 'stk', 1, 6.00, 5, NULL),
(8, 'Pilze', 'Champignons, weiß', 'kg', NULL, 'stk', 1, 4.00, 5, NULL),
(9, 'Paprika', 'Paprika, in Stifte geschnitten', 'kg', NULL, 'stk', 1, 2.99, 5, NULL),
(10, 'Thunfisch', 'Thunfisch aus Büchsen', 'unit', 220, 'g', 1, 2.30, 9, NULL),
(11, 'Broccoli', 'Broccoli, frisch', 'kg', NULL, NULL, 1, 3.00, 5, NULL),
(12, 'Ananas', 'Ananas, Büchse', 'unit', 800, 'g', 1, 1.99, 5, NULL),
(13, 'Artischocken', 'Artischoken, frisch', 'kg', NULL, NULL, 1, 4.00, 5, NULL),
(14, 'Bolognese', 'Bolognese-Sauce', 'l', NULL, NULL, 1, 6.00, 4, NULL),
(15, 'Spinat', 'Spinat, aufgetaut', 'kg', NULL, NULL, 1, 3.00, 5, NULL),
(16, 'Knoblauch', 'Knoblauch, in Öl', 'kg', NULL, NULL, 1, 6.00, 4, NULL),
(17, 'Gorgonzola', 'Gorgonzola vom Edeka', 'unit', 250, 'g', 1, 2.35, 7, NULL),
(18, 'Ei', 'Ei, gekocht', 'stk', NULL, NULL, 1, 0.30, 3, NULL),
(19, 'Gyros', 'Gyros, aus Geschnetzelten vorgebraten', 'kg', NULL, NULL, 1, 7.00, 3, NULL),
(20, 'Zuccini', 'Zuccini, in Scheiben', 'kg', NULL, NULL, 1, 3.00, 5, NULL),
(21, 'milde Pepperoni', 'Pepperoni, mild', 'kg', NULL, NULL, 1, 4.00, 5, NULL),
(22, 'Bacon', 'Schinken, geräuchert', 'kg', NULL, NULL, 1, 5.00, 3, NULL),
(23, 'Mais', 'Mais, aus Büchse', 'unit', 350, 'g', 1, 1.45, 5, NULL),
(24, 'Tzatziki', 'Tzaziki, Markenprodukt', 'unit', 250, 'g', 1, 1.55, 4, NULL),
(25, 'Mozarella', 'Mozarella, gerieben', 'unit', 200, 'g', 1, 1.48, 7, NULL),
(26, 'Kidneybohnen', 'Kidneybohnen, Büchse', 'unit', 800, 'g', 1, 800.00, 5, NULL),
(27, 'Spargel', 'Spargel, Büchse', 'unit', 450, 'g', 1, 1.89, 5, NULL),
(28, 'Sardellen', 'Sardellen, Büchse', 'unit', 250, 'g', 1, 1.56, 9, NULL),
(29, 'Scampis', 'Scampis, Büchse', 'unit', 250, 'g', 1, 4.00, 9, NULL),
(30, 'Meeresfrüchte', 'Meeresfrüchte, aufgetaut', 'unit', 1000, 'g', 1, 6.99, 9, NULL),
(31, 'Räucherlachs', 'Räucherlachs, in Scheiben', 'unit', 200, 'g', 1, 3.99, 9, NULL),
(32, 'Hähnchenbrust', 'Hähnchenbrust, in Stücken vorgebraten', 'kg', NULL, NULL, 1, 7.99, 3, NULL),
(33, 'Oliven', 'Oliven, aus dem Glas', 'unit', 450, 'g', 1, 3.29, 5, NULL),
(34, 'Schafskäse', 'Schafskäse, in Würfel geschnitten', 'unit', 200, 'g', 1, 1.45, 7, NULL),
(35, 'Meerrettich', 'Meerretich, als Paste aus dem Glas', 'unit', 100, 'g', 1, 1.55, 4, NULL),
(36, 'Creme Fraiche', 'Pott Creme Fraiche', 'unit', 200, 'g', 1, 0.79, 4, NULL),
(37, 'Barbecuesoße', 'Barbecuesoße von Heinz', 'unit', 500, 'ml', 1, 2.99, 4, NULL),
(38, 'Tabasco', 'Tabascosoße in Flasche', 'unit', 250, 'ml', 1, 0.00, 4, NULL),
(39, 'Flasche Cola', 'Cola, 0,33l in Glasflasche', 'unit', 0, 'l', 1, 0.53, 2, NULL),
(40, 'Flasche Fanta', 'Fanta, 0.33l in Glasflasche', 'unit', 0, 'l', 1, 0.53, 2, NULL),
(41, 'Flasche Sprite', 'Sprite, 0.33, in Glasflasche', 'unit', 0, 'l', 1, 0.53, 2, NULL),
(42, 'Pfand', 'Pfand für Mehrweg', 'stk', NULL, NULL, 1, 0.08, 2, NULL),
(43, 'Pfand', 'Pfand für Einweg', 'stk', NULL, NULL, 1, 0.25, 2, NULL),
(44, 'Mineralwasser', 'Wasser, 0.33, in Glasflasche', 'unit', 0, 'l', 1, 0.25, 2, NULL),
(45, 'Mixery', 'Mixery, 0,55, in Glasflasche', 'unit', 1, 'l', 1, 0.52, 2, NULL),
(46, 'Wiener', 'Wiener, von Eberswalder', 'unit', 8, 'stk', 1, 1.30, 3, NULL),
(47, 'Tomaten-Zwiebelsoße', 'Tomaten-Zwiebelsoße, vorgekocht', 'kg', NULL, NULL, 1, 6.00, 4, NULL),
(48, 'Tomaten-Zwiebel-Gehacktes-Soße', 'Tomaten-Zwiebel-Gehacktes-Soße, vorgekocht', 'kg', NULL, NULL, 1, 7.00, 4, NULL),
(49, 'Schinkensahnesoße', 'Schinkensahnesoße, vorgekocht', 'kg', NULL, NULL, 1, 5.00, 4, NULL),
(50, 'Schweinegulasch wie bei Muttern', 'Schweinegulasche, vorgekocht', 'kg', NULL, NULL, 1, 8.00, 11, NULL),
(51, 'Rigatoni', 'Rigatoni-Nudeln, vorgekocht', 'kg', NULL, NULL, 1, 2.00, 12, NULL),
(52, 'Spaghetti', 'Spaghetti, vorgekocht', 'kg', NULL, NULL, 2, 1.00, 12, NULL),
(53, 'Tortellini', 'Tortellini-Nudeln, vorgekocht', 'kg', NULL, NULL, 1, 2.00, 12, NULL),
(54, 'Sahnesoße', 'Sahnesoße, vorgekocht', 'kg', NULL, NULL, 1, 6.00, 4, NULL),
(55, 'Gorgonzolasoße', 'Gorgonzolasoße, vorgekocht', 'kg', NULL, NULL, 1, 3.50, 4, NULL),
(56, 'Krautsalat', 'Krautsalat im Plastefässchen', 'unit', 500, 'g', 1, 1.56, 13, NULL),
(57, 'Remoulade', 'Remouladensoße aus Plasteflasche', 'unit', 500, 'ml', 1, 2.99, 4, NULL),
(58, 'Salat', 'Kopfsalat', 'kg', NULL, NULL, 1, 1.69, 5, NULL),
(59, 'Gurke', 'Gurke für Salat, frisch in Stücken geschnitten', 'kg', NULL, NULL, 1, 1.24, 5, NULL),
(60, 'Gurke', 'Gurke, frisch, geschält und in Scheiben geschnitten', 'kg', NULL, NULL, 1, 1.80, 5, NULL),
(61, 'Basilikum', 'Basilikum, frisch abgeflückte Blätter', 'unit', 25, 'stk', 1, 1.50, 8, NULL),
(62, 'mit Käse überbacken', 'mit Edamer Käse überbacken', 'unit', 200, 'g', 1, 2.00, 7, NULL),
(63, 'Joghurt-Dressing', 'Joghurt-Dressing in Flasche', 'unit', NULL, 'l', 1, 2.50, 14, NULL),
(64, 'French-Dressing', 'French-Dressing in Flasche', 'unit', 1, 'l', 1, 2.50, 14, NULL),
(65, 'Knoblauch-Dressing', 'Knoblauch-Dressing in Plasteflasche', 'unit', 500, 'ml', 1, 2.99, 14, NULL),
(66, 'Essig-Öl-Kräuter-Dressing', 'Dressing Essig/Öl/Kräuter in Glassflasche', 'unit', 750, 'ml', 1, 3.50, 14, NULL),
(67, 'Lambrusco', 'Flasche Lambrusco "Markenname"', 'stk', NULL, NULL, 1, 2.70, 2, NULL),
(68, 'Rosso', 'Lambrusco Rosso von "Markenname"', 'stk', NULL, NULL, 1, 3.00, 2, NULL),
(69, 'Bier', 'Flasche Radeberger Bier', 'stk', NULL, NULL, 1, 0.79, 2, NULL),
(70, 'Bier', 'Kasten Radeberger Bier', 'unit', 20, 'stk', 1, 9.90, 2, NULL),
(71, 'Teig', 'Hefeteig, vorgegangen', 'kg', NULL, NULL, 1, 1.20, 10, NULL),
(72, 'Pizzasoße', 'Pizzasoße, Tomate', 'kg', NULL, NULL, 1, 4.00, 1, NULL);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `Customer`
--
-- Erstellt am: 20. Sep 2016 um 11:09
--

DROP TABLE IF EXISTS `Customer`;
CREATE TABLE IF NOT EXISTS `Customer` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `type` enum('customer','employee') COLLATE utf8_bin NOT NULL DEFAULT 'customer',
  `customerGroup` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `active` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'Y',
  `blocked` enum('N','Y') COLLATE utf8_bin NOT NULL DEFAULT 'N',
  `lastVisit` datetime DEFAULT NULL,
  `userPhone` varchar(100) COLLATE utf8_bin NOT NULL,
  `userEmail` varchar(150) COLLATE utf8_bin NOT NULL,
  `userName` varchar(250) COLLATE utf8_bin NOT NULL,
  `userPass` varchar(250) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `customerGroup` (`customerGroup`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- RELATIONEN DER TABELLE `Customer`:
--   `customerGroup`
--       `CustomerGroups` -> `id`
--

--
-- TRUNCATE Tabelle vor dem Einfügen `Customer`
--

TRUNCATE TABLE `Customer`;
--
-- Daten für Tabelle `Customer`
--

INSERT INTO `Customer` (`id`, `type`, `customerGroup`, `active`, `blocked`, `lastVisit`, `userPhone`, `userEmail`, `userName`, `userPass`) VALUES
(1, 'customer', 1, 'Y', 'N', NULL, '', 'mail@christian-biedermann.de', 'biedermann', 'passwort');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `CustomerGroups`
--
-- Erstellt am: 20. Sep 2016 um 11:09
--

DROP TABLE IF EXISTS `CustomerGroups`;
CREATE TABLE IF NOT EXISTS `CustomerGroups` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(250) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- RELATIONEN DER TABELLE `CustomerGroups`:
--

--
-- TRUNCATE Tabelle vor dem Einfügen `CustomerGroups`
--

TRUNCATE TABLE `CustomerGroups`;
--
-- Daten für Tabelle `CustomerGroups`
--

INSERT INTO `CustomerGroups` (`id`, `name`) VALUES
(1, 'keine');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `MediaFiles`
--
-- Erstellt am: 20. Sep 2016 um 11:09
--

DROP TABLE IF EXISTS `MediaFiles`;
CREATE TABLE IF NOT EXISTS `MediaFiles` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `mime` varchar(150) COLLATE utf8_bin NOT NULL,
  `height` int(5) UNSIGNED NOT NULL,
  `width` int(5) UNSIGNED NOT NULL,
  `thumbHeight` int(5) UNSIGNED NOT NULL,
  `thumbWidth` int(5) UNSIGNED NOT NULL,
  `bigHeight` int(5) UNSIGNED NOT NULL,
  `bigWidth` int(5) UNSIGNED NOT NULL,
  `url` varchar(250) COLLATE utf8_bin NOT NULL,
  `thumbUrl` varchar(250) COLLATE utf8_bin NOT NULL,
  `bigUrl` varchar(250) COLLATE utf8_bin NOT NULL,
  `titleTag` varchar(250) COLLATE utf8_bin NOT NULL,
  `altTag` varchar(250) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='the db of all image files';

--
-- RELATIONEN DER TABELLE `MediaFiles`:
--

--
-- TRUNCATE Tabelle vor dem Einfügen `MediaFiles`
--

TRUNCATE TABLE `MediaFiles`;
--
-- Daten für Tabelle `MediaFiles`
--

INSERT INTO `MediaFiles` (`id`, `mime`, `height`, `width`, `thumbHeight`, `thumbWidth`, `bigHeight`, `bigWidth`, `url`, `thumbUrl`, `bigUrl`, `titleTag`, `altTag`) VALUES
(1, 'image/jpeg', 450, 450, 100, 100, 1000, 1000, '/img/teller.jpg', '/img/teller-thumb.jpg', '/img/teller-big.jpg', 'Das ist ein Testbild', 'noImage');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `Menues`
--
-- Erstellt am: 19. Sep 2016 um 13:33
--

DROP TABLE IF EXISTS `Menues`;
CREATE TABLE IF NOT EXISTS `Menues` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `parentId` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `url` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- RELATIONEN DER TABELLE `Menues`:
--

--
-- TRUNCATE Tabelle vor dem Einfügen `Menues`
--

TRUNCATE TABLE `Menues`;
--
-- Daten für Tabelle `Menues`
--

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
(36, 32, 'Vodka', '/productlist/index'),
(37, 32, 'Rum', '/productlist/index'),
(38, 33, 'EnergyDrinks', '/productlist/index');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ProductGroups`
--
-- Erstellt am: 20. Sep 2016 um 11:09
--

DROP TABLE IF EXISTS `ProductGroups`;
CREATE TABLE IF NOT EXISTS `ProductGroups` (
  `productGroupId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `productGroupPath` varchar(150) COLLATE utf8_bin NOT NULL,
  `isIntern` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'Y',
  `name` varchar(150) COLLATE utf8_bin NOT NULL,
  `parentId` int(11) DEFAULT NULL,
  PRIMARY KEY (`productGroupId`),
  KEY `parentId` (`parentId`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='hear you can find the productGroup hierarchy';

--
-- RELATIONEN DER TABELLE `ProductGroups`:
--

--
-- TRUNCATE Tabelle vor dem Einfügen `ProductGroups`
--

TRUNCATE TABLE `ProductGroups`;
--
-- Daten für Tabelle `ProductGroups`
--

INSERT INTO `ProductGroups` (`productGroupId`, `productGroupPath`, `isIntern`, `name`, `parentId`) VALUES
(1, '', 'Y', 'ohne Gruppe', NULL),
(2, '', 'Y', 'products', NULL),
(3, '2,3', 'Y', 'Pizzen', 2),
(4, '2,4', 'Y', 'Getränke', 2);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `Products`
--
-- Erstellt am: 20. Sep 2016 um 11:09
--

DROP TABLE IF EXISTS `Products`;
CREATE TABLE IF NOT EXISTS `Products` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `parentId` int(11) DEFAULT NULL,
  `productGroup` int(11) NOT NULL DEFAULT '1',
  `name` varchar(150) COLLATE utf8_bin NOT NULL,
  `nameExtension` varchar(150) COLLATE utf8_bin DEFAULT NULL,
  `mediaFileId` int(10) UNSIGNED DEFAULT NULL,
  `internalName` varchar(512) COLLATE utf8_bin NOT NULL,
  `grossPrice` float(7,2) DEFAULT NULL,
  `vat` int(3) UNSIGNED DEFAULT '19',
  `type` enum('basic','bundle','container','single') COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `productType` (`type`),
  KEY `parentId` (`parentId`),
  KEY `mediaFileId` (`mediaFileId`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hear are the basic products, the variants and the package pr';

--
-- RELATIONEN DER TABELLE `Products`:
--   `mediaFileId`
--       `MediaFiles` -> `id`
--

--
-- TRUNCATE Tabelle vor dem Einfügen `Products`
--

TRUNCATE TABLE `Products`;
--
-- Daten für Tabelle `Products`
--

INSERT INTO `Products` (`id`, `parentId`, `productGroup`, `name`, `nameExtension`, `mediaFileId`, `internalName`, `grossPrice`, `vat`, `type`) VALUES
(1, NULL, 3, 'Pizza Salami', NULL, 1, 'Pizza Salami', NULL, NULL, 'container'),
(2, 1, 3, 'Pizza Salami, klein', 'klein', 1, 'Pizza Salami, 22cm', 3.70, 19, 'bundle'),
(3, 1, 3, 'Pizza Salami, gross', 'gross', 1, 'Pizza Salami, 26cm', 5.50, 19, 'bundle'),
(4, NULL, 4, 'kleine Cola', '0.33, zzgl. Pfand', 1, 'Flasche Cola, 0,33l', 1.50, 19, 'single'),
(5, NULL, 3, 'Teig', NULL, 1, 'Hefeteig für Pizza 22cm', 0.70, NULL, 'basic'),
(6, NULL, 1, 'Vollkornteig', NULL, 1, 'Vollkornteig für 22cm Pizza', 1.00, 19, 'basic');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ProductsToComponents`
--
-- Erstellt am: 20. Sep 2016 um 11:09
--

DROP TABLE IF EXISTS `ProductsToComponents`;
CREATE TABLE IF NOT EXISTS `ProductsToComponents` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `productId` int(10) UNSIGNED NOT NULL,
  `componentId` int(10) UNSIGNED NOT NULL,
  `unitAmount` float(10,4) UNSIGNED NOT NULL,
  `ordering` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `replaceable` enum('N','Y') COLLATE utf8_bin NOT NULL DEFAULT 'N',
  `removable` enum('N','Y') COLLATE utf8_bin NOT NULL DEFAULT 'N',
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniqueForce` (`id`,`productId`),
  KEY `productId` (`productId`),
  KEY `materialId` (`componentId`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='the n2n table for materials in products';

--
-- RELATIONEN DER TABELLE `ProductsToComponents`:
--   `componentId`
--       `Components` -> `componentId`
--   `productId`
--       `Products` -> `id`
--

--
-- TRUNCATE Tabelle vor dem Einfügen `ProductsToComponents`
--

TRUNCATE TABLE `ProductsToComponents`;
--
-- Daten für Tabelle `ProductsToComponents`
--

INSERT INTO `ProductsToComponents` (`id`, `productId`, `componentId`, `unitAmount`, `ordering`, `replaceable`, `removable`) VALUES
(1, 2, 71, 0.3000, 1, 'N', 'N'),
(2, 2, 72, 0.0300, 2, 'N', 'N'),
(3, 2, 4, 4.0000, 3, 'N', 'N'),
(4, 2, 62, 40.0000, 1, 'N', 'N'),
(5, 3, 71, 0.5000, 1, 'N', 'N'),
(6, 3, 72, 0.0500, 2, 'N', 'N'),
(7, 3, 4, 6.0000, 3, 'N', 'N'),
(8, 3, 62, 60.0000, 4, 'N', 'N');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ProductsToProductGroups`
--
-- Erstellt am: 20. Sep 2016 um 11:09
--

DROP TABLE IF EXISTS `ProductsToProductGroups`;
CREATE TABLE IF NOT EXISTS `ProductsToProductGroups` (
  `productId` int(10) UNSIGNED NOT NULL,
  `productGroupId` int(10) UNSIGNED NOT NULL,
  UNIQUE KEY `uniqueForce` (`productId`,`productGroupId`),
  KEY `productId` (`productId`),
  KEY `productGroupId` (`productGroupId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='the n2n table for productGroups';

--
-- RELATIONEN DER TABELLE `ProductsToProductGroups`:
--   `productGroupId`
--       `ProductGroups` -> `productGroupId`
--   `productId`
--       `Products` -> `id`
--

--
-- TRUNCATE Tabelle vor dem Einfügen `ProductsToProductGroups`
--

TRUNCATE TABLE `ProductsToProductGroups`;
--
-- Daten für Tabelle `ProductsToProductGroups`
--

INSERT INTO `ProductsToProductGroups` (`productId`, `productGroupId`) VALUES
(1, 3);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ProductToOptions`
--
-- Erstellt am: 20. Sep 2016 um 11:09
--

DROP TABLE IF EXISTS `ProductToOptions`;
CREATE TABLE IF NOT EXISTS `ProductToOptions` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `productId` int(10) UNSIGNED NOT NULL,
  `optionProductId` int(10) UNSIGNED NOT NULL,
  `unitAmount` float(10,4) UNSIGNED NOT NULL,
  `maxAmount` int(10) UNSIGNED NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `productId_2` (`productId`,`optionProductId`),
  KEY `productId` (`productId`),
  KEY `optionProductId` (`optionProductId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- RELATIONEN DER TABELLE `ProductToOptions`:
--   `productId`
--       `Products` -> `id`
--   `optionProductId`
--       `Products` -> `id`
--

--
-- TRUNCATE Tabelle vor dem Einfügen `ProductToOptions`
--

TRUNCATE TABLE `ProductToOptions`;
-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `User`
--
-- Erstellt am: 19. Sep 2016 um 13:33
--

DROP TABLE IF EXISTS `User`;
CREATE TABLE IF NOT EXISTS `User` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `username` varchar(100) COLLATE utf8_bin NOT NULL,
  `password` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Logins and Stuff';

--
-- RELATIONEN DER TABELLE `User`:
--

--
-- TRUNCATE Tabelle vor dem Einfügen `User`
--

TRUNCATE TABLE `User`;
--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `Components`
--
ALTER TABLE `Components`
  ADD CONSTRAINT `ComponentGroupRestriction` FOREIGN KEY (`componentGroup`) REFERENCES `ComponentGroups` (`componentGroupId`);

--
-- Constraints der Tabelle `Customer`
--
ALTER TABLE `Customer`
  ADD CONSTRAINT `Customer_ibfk_1` FOREIGN KEY (`customerGroup`) REFERENCES `CustomerGroups` (`id`);

--
-- Constraints der Tabelle `Products`
--
ALTER TABLE `Products`
  ADD CONSTRAINT `MediaFileId` FOREIGN KEY (`mediaFileId`) REFERENCES `MediaFiles` (`id`);

--
-- Constraints der Tabelle `ProductsToComponents`
--
ALTER TABLE `ProductsToComponents`
  ADD CONSTRAINT `ComponentRestriction` FOREIGN KEY (`componentId`) REFERENCES `Components` (`componentId`),
  ADD CONSTRAINT `ProductRestriction` FOREIGN KEY (`productId`) REFERENCES `Products` (`id`);

--
-- Constraints der Tabelle `ProductsToProductGroups`
--
ALTER TABLE `ProductsToProductGroups`
  ADD CONSTRAINT `ProductGroupRestiction` FOREIGN KEY (`productGroupId`) REFERENCES `ProductGroups` (`productGroupId`),
  ADD CONSTRAINT `ProductId` FOREIGN KEY (`productId`) REFERENCES `Products` (`id`);

--
-- Constraints der Tabelle `ProductToOptions`
--
ALTER TABLE `ProductToOptions`
  ADD CONSTRAINT `ProductToOptions_ibfk_1` FOREIGN KEY (`productId`) REFERENCES `Products` (`id`),
  ADD CONSTRAINT `ProductToOptions_ibfk_2` FOREIGN KEY (`optionProductId`) REFERENCES `Products` (`id`);
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
