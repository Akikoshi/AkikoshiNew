-- phpMyAdmin SQL Dump
-- version 4.6.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Erstellungszeit: 26. Sep 2016 um 15:43
-- Server-Version: 10.0.26-MariaDB-0+deb8u1
-- PHP-Version: 5.6.24-0+deb8u1

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Datenbank: `vagrant`
--
CREATE DATABASE IF NOT EXISTS `vagrant` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `vagrant`;

-- --------------------------------------------------------
-- -----------------------------------------------------
-- Table `vagrant`.`Descriptions`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `vagrant`.`Descriptions` ;

CREATE TABLE IF NOT EXISTS `vagrant`.`Descriptions` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `shortDescription` TEXT CHARACTER SET 'utf8' NOT NULL,
  `longDescription` TEXT CHARACTER SET 'utf8' NOT NULL,
  `fk_products` INT(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `FK_Descriptions_Products` (`fk_products` ASC),
  CONSTRAINT `FK_Descriptions_Products`
    FOREIGN KEY (`fk_products`)
    REFERENCES `vagrant`.`Products` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_bin;

--
-- Tabellenstruktur für Tabelle `Addons`
--

DROP TABLE IF EXISTS `Addons`;
CREATE TABLE IF NOT EXISTS `Addons` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `type` enum('Alergics','Additives') DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `tag` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8 COMMENT='Zusatzstoffe und Alergene';

--
-- TRUNCATE Tabelle vor dem Einfügen `Addons`
--

TRUNCATE TABLE `Addons`;
--
-- Daten für Tabelle `Addons`
--

INSERT INTO `Addons` (`id`, `type`, `name`, `tag`) VALUES
  (1, 'Additives', 'Antioxidationsmittel', 'A'),
  (2, 'Additives', 'Backtriebmittel', 'B'),
  (3, 'Additives', 'Emulator', 'E'),
  (4, 'Additives', 'Farbstoff', 'F'),
  (5, 'Additives', 'Festigungsmittel', 'FM'),
  (6, 'Additives', 'Feuchthaltemittel', 'FH'),
  (7, 'Additives', 'Füllstoff', 'FÜ'),
  (8, 'Additives', 'Geliermittel', 'G'),
  (9, 'Additives', 'Geschmacksverstärker', 'GV'),
  (10, 'Additives', 'Konservierungsstoff', 'K'),
  (11, 'Additives', 'Mehlbehandlungsmittel', 'M'),
  (12, 'Additives', 'Modifizierte Stärke', 'MS'),
  (13, 'Additives', 'Säuerungsmittel', 'S'),
  (14, 'Additives', 'Säureregulator', 'SR'),
  (15, 'Additives', 'Stabilisator', 'ST'),
  (16, 'Additives', 'Süßungsmittel', 'SÜ'),
  (17, 'Additives', 'Trennmittel', 'TM'),
  (18, 'Additives', 'Verdickungsmittel', 'V'),
  (19, 'Alergics', 'Getreideprodukte (Glutenhaltig) ', '1'),
  (20, 'Alergics', 'Fisch ', '2'),
  (21, 'Alergics', 'Krebstiere', '3'),
  (22, 'Alergics', 'Schwefeldioxide und Sulfite', '4'),
  (23, 'Alergics', 'Sellerie', '5'),
  (24, 'Alergics', 'Milch und Laktose ', '6'),
  (25, 'Alergics', 'Sesamsamen ', '7'),
  (26, 'Alergics', 'Nüsse', '8'),
  (27, 'Alergics', 'Eier', '9'),
  (28, 'Alergics', 'Lupinen', '10'),
  (29, 'Alergics', 'Senf', '11'),
  (30, 'Alergics', 'Soja', '12'),
  (31, 'Alergics', 'Weichtiere', '13'),
  (32, 'Alergics', 'Erdnüsse', '14'),
  (33, 'Additives', 'Phosphat', 'P');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `AddonsToComponets`
--

DROP TABLE IF EXISTS `AddonsToComponets`;
CREATE TABLE IF NOT EXISTS `AddonsToComponets` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `fk_Addons` int(10) UNSIGNED DEFAULT NULL,
  `fk_Components` int(10) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_ADDONS` (`fk_Addons`),
  KEY `FK_COMPONENTS` (`fk_Components`)
) ENGINE=InnoDB AUTO_INCREMENT=93 DEFAULT CHARSET=utf8 COMMENT='Hilfstabelle ';

--
-- TRUNCATE Tabelle vor dem Einfügen `AddonsToComponets`
--

TRUNCATE TABLE `AddonsToComponets`;
--
-- Daten für Tabelle `AddonsToComponets`
--

INSERT INTO `AddonsToComponets` (`id`, `fk_Addons`, `fk_Components`) VALUES
  (1, 4, 2),
  (2, 24, 2),
  (3, 1, 4),
  (4, 10, 4),
  (5, 29, 4),
  (6, 33, 5),
  (7, 10, 5),
  (8, 1, 5),
  (9, 13, 7),
  (10, 30, 10),
  (11, 16, 12),
  (12, 4, 12),
  (13, 4, 14),
  (14, 19, 14),
  (15, 27, 18),
  (16, 13, 21),
  (17, 10, 22),
  (18, 1, 22),
  (19, 24, 17),
  (20, 30, 23),
  (21, 19, 23),
  (22, 24, 24),
  (23, 3, 24),
  (24, 4, 25),
  (25, 24, 25),
  (26, 1, 26),
  (27, 4, 26),
  (28, 14, 26),
  (29, 1, 27),
  (30, 9, 27),
  (31, 10, 27),
  (32, 13, 27),
  (33, 22, 27),
  (34, 31, 28),
  (35, 21, 28),
  (36, 20, 28),
  (37, 31, 29),
  (38, 21, 29),
  (39, 20, 29),
  (40, 10, 29),
  (41, 31, 30),
  (42, 21, 30),
  (43, 20, 30),
  (44, 10, 30),
  (45, 10, 31),
  (46, 20, 31),
  (47, 21, 31),
  (48, 31, 31),
  (49, 4, 33),
  (50, 9, 33),
  (51, 10, 33),
  (52, 23, 33),
  (53, 30, 34),
  (54, 24, 34),
  (55, 22, 34),
  (56, 18, 34),
  (57, 12, 34),
  (58, 10, 34),
  (59, 3, 35),
  (60, 6, 35),
  (61, 10, 35),
  (62, 22, 35),
  (63, 23, 35),
  (64, 24, 36),
  (65, 18, 36),
  (66, 10, 36),
  (67, 30, 37),
  (68, 26, 37),
  (69, 19, 37),
  (70, 18, 37),
  (71, 14, 37),
  (72, 10, 37),
  (73, 4, 37),
  (74, 1, 37),
  (75, 1, 38),
  (76, 10, 38),
  (77, 23, 38),
  (78, 1, 39),
  (79, 3, 39),
  (80, 9, 39),
  (81, 13, 39),
  (82, 16, 39),
  (83, 16, 40),
  (84, 13, 40),
  (85, 9, 40),
  (86, 3, 40),
  (87, 1, 40),
  (88, 1, 41),
  (89, 3, 41),
  (90, 9, 41),
  (91, 13, 41),
  (92, 16, 41);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `Campaign`
--

DROP TABLE IF EXISTS `Campaign`;
CREATE TABLE IF NOT EXISTS `Campaign` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `src` varchar(255) DEFAULT '0',
  `pictureUrl` varchar(255) DEFAULT '0',
  `headline` varchar(255) DEFAULT '0',
  `content` varchar(255) DEFAULT '0',
  `linkText` varchar(50) DEFAULT '0',
  `price` float(7,2) DEFAULT '0.00',
  `active` enum('Y','N') DEFAULT 'N',
  `position` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- TRUNCATE Tabelle vor dem Einfügen `Campaign`
--

TRUNCATE TABLE `Campaign`;
--
-- Daten für Tabelle `Campaign`
--

INSERT INTO `Campaign` (`id`, `src`, `pictureUrl`, `headline`, `content`, `linkText`, `price`, `active`, `position`) VALUES
  (1, 'data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==', 'campaign/index', 'Überschrift: Ranger', 'Text Text Text Text Text Text Text Text Text Text Text Text Text Text', 'Ranger', 12.99, 'Y', 1),
  (2, 'data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==', 'campaign/index', 'Überschrift: Phil', 'Text Text Text Text Text Text Text Text Text Text Text Text Text Text', 'Phil', 14.85, 'Y', 2),
  (3, 'data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==', 'campaign/index', 'Überschrift: Thomas', 'Text Text Text Text Text Text Text Text Text Text Text Text Text Text', 'Thomas', 44.85, 'Y', 3),
  (4, 'data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==', 'campaign/index', 'Überschrift: Carlo', 'Text Text Text Text Text Text Text Text Text Text Text Text Text Text', 'Carlo', 31.12, 'N', 4);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ComponentGroups`
--

DROP TABLE IF EXISTS `ComponentGroups`;
CREATE TABLE IF NOT EXISTS `ComponentGroups` (
  `componentGroupId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  PRIMARY KEY (`componentGroupId`),
  KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COMMENT='a hierarchy for the material library';

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
  (7, 'Käse'),
  (1, 'Keine'),
  (12, 'Nudeln'),
  (11, 'Nudelsoßen'),
  (13, 'Salat'),
  (6, 'sonstiges'),
  (4, 'Soßen'),
  (10, 'Teigs');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `Components`
--
DROP TABLE IF EXISTS `Components`;
CREATE TABLE IF NOT EXISTS `Components` (
  `componentId`         INT(10) UNSIGNED                                 NOT NULL AUTO_INCREMENT,
  `name`                VARCHAR(150)                                     NOT NULL,
  `internalName`        VARCHAR(512)                                     NOT NULL,
  `unitType`            ENUM ('g', 'kg', 'l', 'ml', 'cl', 'stk', 'unit') NOT NULL DEFAULT 'stk',
  `perUnit`             INT(7)                                                    DEFAULT NULL,
  `perUnitType`         ENUM ('g', 'kg', 'l', 'ml', 'cl', 'stk', 'unit')          DEFAULT NULL,
  `unitSize`            INT(7)                                           NOT NULL DEFAULT '1',
  `unitPrice`           FLOAT(7, 2)                                      NOT NULL DEFAULT '0.00',
  `componentGroup`      INT(10) UNSIGNED                                 NOT NULL DEFAULT '1',
  `internalComponentId` VARCHAR(50)                                               DEFAULT NULL,
  `fk_MediaFiles`       INT(10) UNSIGNED                                 NOT NULL,
  PRIMARY KEY (`componentId`),
  KEY `materialGroup` (`componentGroup`),
  KEY `FK_Components_MediaFiles` (`fk_MediaFiles`),
  CONSTRAINT `ComponentGroupRestriction` FOREIGN KEY (`componentGroup`) REFERENCES `ComponentGroups` (`componentGroupId`),
  CONSTRAINT `FK_Components_MediaFiles` FOREIGN KEY (`fk_MediaFiles`) REFERENCES `MediaFiles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=utf8 COMMENT='these are the basic materials of a product';

--
-- TRUNCATE Tabelle vor dem Einfügen `Components`
--

TRUNCATE TABLE `Components`;
--
-- Daten für Tabelle `Components`
--
DELETE FROM `Components`;
/*!40000 ALTER TABLE `Components`
  DISABLE KEYS */;
INSERT INTO `Components` (`componentId`, `name`, `internalName`, `unitType`, `perUnit`, `perUnitType`, `unitSize`, `unitPrice`, `componentGroup`, `internalComponentId`, `fk_MediaFiles`)
VALUES
  (1, 'Tomaten', 'Tomaten in Scheiben', 'stk', NULL, 'stk', 1, 0.02, 5, NULL, 1),
  (2, 'Käse', 'Mozarella gerieben', 'unit', 200, 'g', 1, 1.46, 7, NULL, 1),
  (3, 'Oregano', 'Oregano gerebelt', 'g', 1, 'stk', 1000, 8.00, 8, NULL, 1),
  (4, 'Salami', 'Edeka Salami', 'unit', 8, 'stk', 1, 1.55, 3, NULL, 1),
  (5, 'Schinken', 'Kochschinken von Edeka', 'unit', 8, 'stk', 1, 1.69, 3, NULL, 1),
  (6, 'Zwiebeln', 'Zwiebeln', 'kg', NULL, 'stk', 1, 2.29, 5, NULL, 1),
  (7, 'scharfe Pepperoni', 'Pepperoni, scharf', 'kg', NULL, 'stk', 1, 6.00, 5, NULL, 1),
  (8, 'Pilze', 'Champignons, weiß', 'kg', NULL, 'stk', 1, 4.00, 5, NULL, 1),
  (9, 'Paprika', 'Paprika, in Stifte geschnitten', 'kg', NULL, 'stk', 1, 2.99, 5, NULL, 1),
  (10, 'Thunfisch', 'Thunfisch aus Büchsen', 'unit', 220, 'g', 1, 2.30, 9, NULL, 1),
  (11, 'Broccoli', 'Broccoli, frisch', 'kg', NULL, NULL, 1, 3.00, 5, NULL, 1),
  (12, 'Ananas', 'Ananas, Büchse', 'unit', 800, 'g', 1, 1.99, 5, NULL, 1),
  (13, 'Artischocken', 'Artischoken, frisch', 'kg', NULL, NULL, 1, 4.00, 5, NULL, 1),
  (14, 'Bolognese', 'Bolognese-Sauce', 'l', NULL, NULL, 1, 6.00, 4, NULL, 1),
  (15, 'Spinat', 'Spinat, aufgetaut', 'kg', NULL, NULL, 1, 3.00, 5, NULL, 1),
  (16, 'Knoblauch', 'Knoblauch, in Öl', 'kg', NULL, NULL, 1, 6.00, 4, NULL, 1),
  (17, 'Gorgonzola', 'Gorgonzola vom Edeka', 'unit', 250, 'g', 1, 2.35, 7, NULL, 1),
  (18, 'Ei', 'Ei, gekocht', 'stk', NULL, NULL, 1, 0.30, 3, NULL, 1),
  (19, 'Gyros', 'Gyros, aus Geschnetzelten vorgebraten', 'kg', NULL, NULL, 1, 7.00, 3, NULL, 1),
  (20, 'Zuccini', 'Zuccini, in Scheiben', 'kg', NULL, NULL, 1, 3.00, 5, NULL, 1),
  (21, 'milde Pepperoni', 'Pepperoni, mild', 'kg', NULL, NULL, 1, 4.00, 5, NULL, 1),
  (22, 'Bacon', 'Schinken, geräuchert', 'kg', NULL, NULL, 1, 5.00, 3, NULL, 1),
  (23, 'Mais', 'Mais, aus Büchse', 'unit', 350, 'g', 1, 1.45, 5, NULL, 1),
  (24, 'Tzatziki', 'Tzaziki, Markenprodukt', 'unit', 250, 'g', 1, 1.55, 4, NULL, 1),
  (25, 'Mozarella', 'Mozarella, gerieben', 'unit', 200, 'g', 1, 1.48, 7, NULL, 1),
  (26, 'Kidneybohnen', 'Kidneybohnen, Büchse', 'unit', 800, 'g', 1, 800.00, 5, NULL, 1),
  (27, 'Spargel', 'Spargel, Büchse', 'unit', 450, 'g', 1, 1.89, 5, NULL, 1),
  (28, 'Sardellen', 'Sardellen, Büchse', 'unit', 250, 'g', 1, 1.56, 9, NULL, 1),
  (29, 'Scampis', 'Scampis, Büchse', 'unit', 250, 'g', 1, 4.00, 9, NULL, 1),
  (30, 'Meeresfrüchte', 'Meeresfrüchte, aufgetaut', 'unit', 1000, 'g', 1, 6.99, 9, NULL, 1),
  (31, 'Räucherlachs', 'Räucherlachs, in Scheiben', 'unit', 200, 'g', 1, 3.99, 9, NULL, 1),
  (32, 'Hähnchenbrust', 'Hähnchenbrust, in Stücken vorgebraten', 'kg', NULL, NULL, 1, 7.99, 3, NULL, 1),
  (33, 'Oliven', 'Oliven, aus dem Glas', 'unit', 450, 'g', 1, 3.29, 5, NULL, 1),
  (34, 'Schafskäse', 'Schafskäse, in Würfel geschnitten', 'unit', 200, 'g', 1, 1.45, 7, NULL, 1),
  (35, 'Meerrettich', 'Meerretich, als Paste aus dem Glas', 'unit', 100, 'g', 1, 1.55, 4, NULL, 1),
  (36, 'Creme Fraiche', 'Pott Creme Fraiche', 'unit', 200, 'g', 1, 0.79, 4, NULL, 1),
  (37, 'Barbecuesoße', 'Barbecuesoße von Heinz', 'unit', 500, 'ml', 1, 2.99, 4, NULL, 1),
  (38, 'Tabasco', 'Tabascosoße in Flasche', 'unit', 250, 'ml', 1, 0.00, 4, NULL, 1),
  (39, 'Flasche Cola', 'Cola, 0,33l in Glasflasche', 'unit', 0, 'l', 1, 0.53, 2, NULL, 1),
  (40, 'Flasche Fanta', 'Fanta, 0.33l in Glasflasche', 'unit', 0, 'l', 1, 0.53, 2, NULL, 1),
  (41, 'Flasche Sprite', 'Sprite, 0.33, in Glasflasche', 'unit', 0, 'l', 1, 0.53, 2, NULL, 1),
  (42, 'Pfand', 'Pfand für Mehrweg', 'stk', NULL, NULL, 1, 0.08, 2, NULL, 1),
  (43, 'Pfand', 'Pfand für Einweg', 'stk', NULL, NULL, 1, 0.25, 2, NULL, 1),
  (44, 'Mineralwasser', 'Wasser, 0.33, in Glasflasche', 'unit', 0, 'l', 1, 0.25, 2, NULL, 1),
  (45, 'Mixery', 'Mixery, 0,55, in Glasflasche', 'unit', 1, 'l', 1, 0.52, 2, NULL, 1),
  (46, 'Wiener', 'Wiener, von Eberswalder', 'unit', 8, 'stk', 1, 1.30, 3, NULL, 1),
  (47, 'Tomaten-Zwiebelsoße', 'Tomaten-Zwiebelsoße, vorgekocht', 'kg', NULL, NULL, 1, 6.00, 4, NULL, 1),
  (48, 'Tomaten-Zwiebel-Gehacktes-Soße', 'Tomaten-Zwiebel-Gehacktes-Soße, vorgekocht', 'kg', NULL, NULL, 1, 7.00, 4, NULL, 1),
  (49, 'Schinkensahnesoße', 'Schinkensahnesoße, vorgekocht', 'kg', NULL, NULL, 1, 5.00, 4, NULL, 1),
  (50, 'Schweinegulasch wie bei Muttern', 'Schweinegulasche, vorgekocht', 'kg', NULL, NULL, 1, 8.00, 11, NULL, 1),
  (51, 'Rigatoni', 'Rigatoni-Nudeln, vorgekocht', 'kg', NULL, NULL, 1, 2.00, 12, NULL, 1),
  (52, 'Spaghetti', 'Spaghetti, vorgekocht', 'kg', NULL, NULL, 2, 1.00, 12, NULL, 1),
  (53, 'Tortellini', 'Tortellini-Nudeln, vorgekocht', 'kg', NULL, NULL, 1, 2.00, 12, NULL, 1),
  (54, 'Sahnesoße', 'Sahnesoße, vorgekocht', 'kg', NULL, NULL, 1, 6.00, 4, NULL, 1),
  (55, 'Gorgonzolasoße', 'Gorgonzolasoße, vorgekocht', 'kg', NULL, NULL, 1, 3.50, 4, NULL, 1),
  (56, 'Krautsalat', 'Krautsalat im Plastefässchen', 'unit', 500, 'g', 1, 1.56, 13, NULL, 1),
  (57, 'Remoulade', 'Remouladensoße aus Plasteflasche', 'unit', 500, 'ml', 1, 2.99, 4, NULL, 1),
  (58, 'Salat', 'Kopfsalat', 'kg', NULL, NULL, 1, 1.69, 5, NULL, 1),
  (59, 'Gurke', 'Gurke für Salat, frisch in Stücken geschnitten', 'kg', NULL, NULL, 1, 1.24, 5, NULL, 1),
  (60, 'Gurke', 'Gurke, frisch, geschält und in Scheiben geschnitten', 'kg', NULL, NULL, 1, 1.80, 5, NULL, 1),
  (61, 'Basilikum', 'Basilikum, frisch abgeflückte Blätter', 'unit', 25, 'stk', 1, 1.50, 8, NULL, 1),
  (62, 'mit Käse überbacken', 'mit Edamer Käse überbacken', 'unit', 200, 'g', 1, 2.00, 7, NULL, 1),
  (63, 'Joghurt-Dressing', 'Joghurt-Dressing in Flasche', 'unit', NULL, 'l', 1, 2.50, 14, NULL, 1),
  (64, 'French-Dressing', 'French-Dressing in Flasche', 'unit', 1, 'l', 1, 2.50, 14, NULL, 1),
  (65, 'Knoblauch-Dressing', 'Knoblauch-Dressing in Plasteflasche', 'unit', 500, 'ml', 1, 2.99, 14, NULL, 1),
  (66, 'Essig-Öl-Kräuter-Dressing', 'Dressing Essig/Öl/Kräuter in Glassflasche', 'unit', 750, 'ml', 1, 3.50, 14, NULL, 1),
  (67, 'Lambrusco', 'Flasche Lambrusco "Markenname"', 'stk', NULL, NULL, 1, 2.70, 2, NULL, 1),
  (68, 'Rosso', 'Lambrusco Rosso von "Markenname"', 'stk', NULL, NULL, 1, 3.00, 2, NULL, 1),
  (69, 'Bier', 'Flasche Radeberger Bier', 'stk', NULL, NULL, 1, 0.79, 2, NULL, 1),
  (70, 'Bier', 'Kasten Radeberger Bier', 'unit', 20, 'stk', 1, 9.90, 2, NULL, 1),
  (71, 'Teig', 'Hefeteig, vorgegangen', 'kg', NULL, NULL, 1, 1.20, 10, NULL, 1),
  (72, 'Pizzasoße', 'Pizzasoße, Tomate', 'kg', NULL, NULL, 1, 4.00, 1, NULL, 1),
  (73, 'Cherrytomaten', 'Cherrytomaten', 'stk', NULL, NULL, 1, 0.05, 5, NULL, 1);
/*!40000 ALTER TABLE `Components`
  ENABLE KEYS */;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `Customer`
--

DROP TABLE IF EXISTS `Customer`;
CREATE TABLE IF NOT EXISTS `Customer` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `type` enum('customer','employee') NOT NULL DEFAULT 'customer',
  `customerGroup` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `active` enum('Y','N') NOT NULL DEFAULT 'Y',
  `blocked` enum('N','Y') NOT NULL DEFAULT 'N',
  `lastVisit` datetime DEFAULT NULL,
  `userPhone` varchar(100) NOT NULL,
  `userEmail` varchar(150) NOT NULL,
  `userName` varchar(250) NOT NULL,
  `userPass` varchar(250) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `customerGroup` (`customerGroup`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

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

DROP TABLE IF EXISTS `CustomerGroups`;
CREATE TABLE IF NOT EXISTS `CustomerGroups` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

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

-- Exportiere Struktur von Tabelle vagrant.MediaFiles
CREATE TABLE IF NOT EXISTS `MediaFiles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fk_product` int(10) unsigned NOT NULL,
  `mime` varchar(150) NOT NULL,
  `height` int(5) unsigned NOT NULL,
  `width` int(5) unsigned NOT NULL,
  `thumbHeight` int(5) unsigned NOT NULL,
  `thumbWidth` int(5) unsigned NOT NULL,
  `bigHeight` int(5) unsigned NOT NULL,
  `bigWidth` int(5) unsigned NOT NULL,
  `url` varchar(250) NOT NULL,
  `thumbUrl` varchar(250) NOT NULL,
  `bigUrl` varchar(250) NOT NULL,
  `titleTag` varchar(250) NOT NULL,
  `altTag` varchar(250) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_MediaFiles_Products` (`fk_product`),
  CONSTRAINT `FK_MediaFiles_Products` FOREIGN KEY (`fk_product`) REFERENCES `Products` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='the db of all image files';

-- Exportiere Daten aus Tabelle vagrant.MediaFiles: ~2 rows (ungefähr)
DELETE FROM `MediaFiles`;
/*!40000 ALTER TABLE `MediaFiles` DISABLE KEYS */;
INSERT INTO `MediaFiles` (`id`, `fk_product`, `mime`, `height`, `width`, `thumbHeight`, `thumbWidth`, `bigHeight`, `bigWidth`, `url`, `thumbUrl`, `bigUrl`, `titleTag`, `altTag`) VALUES
  (1, 1, 'image/jpeg', 450, 450, 100, 100, 1000, 1000, '/img/teller.jpg', '/img/teller-thumb.jpg', '/img/teller-big.jpg', 'Das ist ein Testbild', 'noImage'),
  (2, 1, 'image/jpeg', 800, 800, 100, 100, 1500, 1500, '/img/glass.jpg', '/img.bla.jpg', '/img/big.jpg', 'Das auch', 'a Tag');
/*!40000 ALTER TABLE `MediaFiles` ENABLE KEYS */;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `Menus`
--

DROP TABLE IF EXISTS `Menus`;
CREATE TABLE IF NOT EXISTS `Menus` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `parentId` int(10) UNSIGNED DEFAULT NULL,
  `position` int(3) DEFAULT '0',
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=utf8;

--
-- TRUNCATE Tabelle vor dem Einfügen `Menus`
--

TRUNCATE TABLE `Menus`;
--
-- Daten für Tabelle `Menus`
--

INSERT INTO `Menus` (`id`, `parentId`, `position`, `name`, `url`) VALUES
  (1, NULL, 0, 'mainMenu', ''),
  (2, 1, 0, 'Aktionen', '/campaigns/index'),
  (3, 1, 0, 'Pizza', '/productlist/index'),
  (4, 1, 0, 'Nudeln', '/productlist/index'),
  (5, 1, 0, 'Fingerfood', '/productlist/index'),
  (6, 3, 0, 'Alle einsehen', '/productlist/index'),
  (7, 3, 0, 'vegetarische Menüs', '/productlist/index'),
  (8, 3, 0, 'Klassiker', '/productlist/index'),
  (9, 4, 0, 'Alle einsehen', '/productlist/index'),
  (10, 4, 0, 'Vegetarische', '/productlist/index'),
  (11, 4, 0, 'Klassiker', '/productlist/index'),
  (12, 4, 0, 'Überbackenes', '/productlist/index'),
  (13, 4, 0, 'Saisonal', '/productlist/index'),
  (14, 5, 0, 'Alle einsehen', '/productlist/index'),
  (15, 5, 0, 'Anti Pasti', '/productlist/index'),
  (16, 5, 0, 'Klassiker', '/productlist/index'),
  (17, 5, 0, 'Burger', '/productlist/index'),
  (18, 1, 0, 'Salat', '/productlist/index'),
  (19, 18, 0, 'Alle einsehen', '/productlist/index'),
  (20, 18, 0, 'Vegetarisch', '/productlist/index'),
  (21, 18, 0, 'Klassiker', '/productlist/index'),
  (22, 18, 0, 'Laktosefrei', '/productlist/index'),
  (23, 18, 0, 'Warme', '/productlist/index'),
  (24, 1, 0, 'Desserts', '/productlist/index'),
  (25, 24, 0, 'Alle einsehen', '/productlist/index'),
  (26, 24, 0, 'Eis', '/productlist/index'),
  (27, 24, 0, 'Klassiker', '/productlist/index'),
  (28, 24, 0, 'Laktosefrei', '/productlist/index'),
  (29, 24, 0, 'Warme', '/productlist/index'),
  (30, 1, 0, 'Getränke', '/productlist/index'),
  (31, 30, 0, 'Nicht Alkoholische', '/productlist/index'),
  (32, 30, 0, 'Alkoholische', '/productlist/index'),
  (33, 30, 0, 'Koffeinhaltig', '/productlist/index'),
  (34, 31, 0, 'Softdrinks', '/productlist/index'),
  (35, 31, 0, 'Säfte', '/productlist/index'),
  (36, 32, 0, 'Vodka', '/productlist/index'),
  (37, 32, 0, 'Rum', '/productlist/index'),
  (38, 33, 0, 'EnergyDrinks', '/productlist/index'),
  (39, NULL, 0, 'FooterMenu', ''),
  (40, 39, 0, 'AGB', '/informations/gbt'),
  (41, 39, 0, 'Impressum', '/informations/imprint'),
  (42, 39, 0, 'Kontakte', '/informations/contact'),
  (43, 39, 0, 'Qualitätsrichtlinien', '/informations/quality'),
  (44, NULL, 0, 'Campaigns', ''),
  (45, 44, 0, 'Campaigns1', '/Campaigns/index'),
  (46, 44, 0, 'Campaigns2', '/Campaigns/index'),
  (47, NULL, 0, 'AccountMenu', ''),
  (48, 47, 0, 'Einloggen', '/account/login'),
  (49, 47, 0, 'Ausloggen', '/home/index'),
  (50, 47, 0, 'Registrieren', '/account/register'),
  (51, 47, 0, 'Passwort vergessen', '/account/lostpassword'),
  (52, NULL, 0, 'AccountSidebarMenu', ''),
  (53, 52, 0, 'Kundensonderangebote anzeigen', '/account/specialoffers'),
  (54, 52, 0, 'Favoriten', '/account/favorites'),
  (55, 52, 0, 'vergangene Bestellungen', '/account/lastorders'),
  (56, 52, 0, 'Profildaten bearbeiten', '/account/userconfig'),
  (57, 52, 0, 'Kundenkonto löschen', '/account/deleteuser'),
  (58, 52, 0, 'Ausloggen', '/home/index');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ProductGroups`
--

DROP TABLE IF EXISTS `ProductGroups`;
CREATE TABLE IF NOT EXISTS `ProductGroups` (
  `productGroupId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `productGroupPath` varchar(150) NOT NULL,
  `isIntern` enum('Y','N') NOT NULL DEFAULT 'Y',
  `name` varchar(150) NOT NULL,
  `parentId` int(10) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`productGroupId`),
  KEY `parentId` (`parentId`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='hear you can find the productGroup hierarchy';

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
  (4, '2,4', 'Y', 'Getränke', 2),
  (5, '2,5', 'Y', 'Pasta', 2);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ProductGroupTeaser`
--

DROP TABLE IF EXISTS `ProductGroupTeaser`;
CREATE TABLE IF NOT EXISTS `ProductGroupTeaser` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `content` varchar(255) NOT NULL DEFAULT '0',
  `headline` varchar(50) NOT NULL DEFAULT '0',
  `linkText` varchar(255) NOT NULL DEFAULT '0',
  `pictureUrl` varchar(255) NOT NULL DEFAULT '0',
  `active` enum('Y','N') NOT NULL DEFAULT 'N',
  `position` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- TRUNCATE Tabelle vor dem Einfügen `ProductGroupTeaser`
--

TRUNCATE TABLE `ProductGroupTeaser`;
--
-- Daten für Tabelle `ProductGroupTeaser`
--

INSERT INTO `ProductGroupTeaser` (`id`, `content`, `headline`, `linkText`, `pictureUrl`, `active`, `position`) VALUES
  (1, 'Irgend ein Text. Und noch ein bischen mehr Text für Thomas so nun aber jetzt also okay. nun okay.', 'ÜberschriftOne', 'campaigns/index', 'holder.js/500x500/auto/#555:#333/text:Dritte Folie', 'Y', 1),
  (2, 'Irgend ein Text. Und noch ein bischen mehr Text für Thomas so nun aber jetzt also okay. nun okay.', 'ÜberschriftTwo', 'campaigns/index', 'holder.js/500x500/auto/#555:#333/text:Dritte Folie', 'Y', 2),
  (3, 'Irgend ein Text. Und noch ein bischen mehr Text für Thomas so nun aber jetzt also okay. nun okay.', 'ÜberschriftThree', 'campaigns/index', 'holder.js/500x500/auto/#555:#333/text:Dritte Folie', 'Y', 3),
  (4, 'Irgend ein Text. Und noch ein bischen mehr Text für Thomas so nun aber jetzt also okay. nun okay.', 'ÜberschriftFour', 'campaigns/index', 'holder.js/500x500/auto/#555:#333/text:Dritte Folie', 'Y', 4);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `Products`
--

DROP TABLE IF EXISTS `Products`;
CREATE TABLE IF NOT EXISTS `Products` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `parentId` int(10) UNSIGNED DEFAULT NULL,
  `productGroup` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `name` varchar(150) NOT NULL,
  `nameExtension` varchar(150) DEFAULT NULL,
  `mediaFileId` int(10) UNSIGNED DEFAULT NULL,
  `internalName` varchar(512) NOT NULL,
  `grossPrice` float(7,2) DEFAULT NULL,
  `vat` int(3) UNSIGNED DEFAULT '19',
  `type` enum('basic','bundle','container','single') NOT NULL,
  PRIMARY KEY (`id`),
  KEY `productType` (`type`),
  KEY `parentId` (`parentId`),
  KEY `mediaFileId` (`mediaFileId`)
) ENGINE=InnoDB AUTO_INCREMENT=177 DEFAULT CHARSET=utf8 COMMENT='Hear are the basic products, the variants and the package pr';

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
  (4, NULL, 4, 'Cola', 'zzgl. Pfand', 1, 'Flasche Cola', NULL, 19, 'container'),
  (5, NULL, 3, 'Teig', NULL, 1, 'Hefeteig für Pizza 22cm', 0.70, NULL, 'basic'),
  (6, NULL, 1, 'Vollkornteig', NULL, 1, 'Vollkornteig für 22cm Pizza', 1.00, 19, 'basic'),
  (7, NULL, 1, 'Magharita', NULL, 1, 'Magharita', NULL, 19, 'container'),
  (8, NULL, 3, 'Funghi', NULL, 1, 'Funghi', NULL, 19, 'container'),
  (9, NULL, 3, 'Prosciutto', NULL, 1, 'Prosciutto', NULL, 19, 'container'),
  (10, NULL, 3, 'Hawai', NULL, 1, 'Hawai', NULL, 19, 'container'),
  (11, NULL, 3, 'Tonno', NULL, 1, 'Tonno', NULL, 19, 'container'),
  (12, NULL, 3, 'Calzone', NULL, 1, 'Calzone', NULL, 19, 'container'),
  (13, NULL, 3, 'Bolognese', NULL, 1, 'Bolognese', NULL, 19, 'container'),
  (14, NULL, 3, 'Spinati', NULL, 1, 'Spinati', NULL, 19, 'container'),
  (15, NULL, 3, 'Quadro Stationi', NULL, 1, 'Quadro Stationi', NULL, 19, 'container'),
  (16, NULL, 3, 'Formaggi', NULL, 1, 'Formaggi', NULL, 19, 'container'),
  (17, 7, 3, 'Magharita', 'klein', 1, 'kleine Magharita', 3.70, 19, 'bundle'),
  (18, 8, 3, 'Funghi', 'klein', 1, 'kleine Funghi', 3.70, 19, 'bundle'),
  (19, 9, 3, 'Prosciutto', 'klein', 1, 'kleine Prosciutto', 3.70, 19, 'bundle'),
  (20, 10, 3, 'Hawai', 'klein', 1, 'kleine Hawai', 3.70, 19, 'bundle'),
  (21, 11, 3, 'Tonno', 'klein', 1, 'kleine Tonno', 3.70, 19, 'bundle'),
  (22, 12, 3, 'Calzone', 'klein', 1, 'kleine Calzone', 3.70, 19, 'bundle'),
  (23, 13, 3, 'Bolognese', 'klein', 1, 'kleine Bolognese', 3.70, 19, 'bundle'),
  (24, 14, 3, 'Spinati', 'klein', 1, 'kleine Spinati', 3.70, 19, 'bundle'),
  (25, 15, 3, 'Quadro Stationi', 'klein', 1, 'kleine Quadro Stationi', 3.70, 19, 'bundle'),
  (26, 16, 3, 'Formaggi', 'klein', 1, 'kleine Formaggi', 3.70, 19, 'bundle'),
  (32, 7, 3, 'Magharita', 'gross', 1, 'grosse Magharita', 5.20, 19, 'bundle'),
  (33, 8, 3, 'Funghi', 'gross', 1, 'grosse Funghi', 5.20, 19, 'bundle'),
  (34, 9, 3, 'Prosciutto', 'gross', 1, 'grosse Prosciutto', 5.20, 19, 'bundle'),
  (35, 10, 3, 'Hawai', 'gross', 1, 'grosse Hawai', 5.20, 19, 'bundle'),
  (36, 11, 3, 'Tonno', 'gross', 1, 'grosse Tonno', 5.20, 19, 'bundle'),
  (37, 12, 3, 'Calzone', 'gross', 1, 'grosse Calzone', 5.20, 19, 'bundle'),
  (38, 13, 3, 'Bolognese', 'gross', 1, 'grosse Bolognese', 5.20, 19, 'bundle'),
  (39, 14, 3, 'Spinati', 'gross', 1, 'grosse Spinati', 5.20, 19, 'bundle'),
  (40, 15, 3, 'Quadro Stationi', 'gross', 1, 'grosse Quadro Stationi', 5.20, 19, 'bundle'),
  (41, 16, 3, 'Formaggi', 'gross', 1, 'grosse Formaggi', 5.20, 19, 'bundle'),
  (43, NULL, 1, 'Salat Green Garden', NULL, 1, 'Salat Green Garden', 5.99, 19, 'bundle'),
  (44, 4, 4, 'kleine Cola', '0,33l; zzgl. Pfand', 1, 'kleine Flasche Cola', 1.50, 19, 'single'),
  (45, 4, 4, 'mittlere Cola', '0,5l; zzgl. Pfand', 1, 'mittlere Flasche Cola', 2.50, 19, 'single'),
  (46, 4, 4, 'grosse Cola', '1,0l; zzgl. Pfand', 1, 'grosse Flasche Cola', 4.00, 19, 'single'),
  (47, NULL, 4, 'Fanta', 'zzgl. Pfand', 1, 'Flasche Fanta', NULL, 19, 'container'),
  (48, 47, 4, 'kleine Fanta', '0,33l; zzgl. Pfand', 1, 'kleine Flasche Fanta', 1.50, 19, 'single'),
  (49, 47, 4, 'mittlere Fanta', '0,5l; zzgl. Pfand', 1, 'mittlere Flasche Fanta', 2.50, 19, 'single'),
  (50, 47, 4, 'grosse Fanta', '1,0l; zzgl. Pfand', 1, 'grosse Flasche Fanta', 4.00, 19, 'single'),
  (51, NULL, 4, 'Sprite', 'zzgl. Pfand', 1, 'Flasche Fanta', NULL, 19, 'container'),
  (52, 51, 4, 'kleine Sprite', '0,33l; zzgl. Pfand', 1, 'kleine Flasche Fanta', 1.50, 19, 'single'),
  (53, 51, 4, 'mittlere Sprite', '0,5l; zzgl. Pfand', 1, 'mittlere Flasche Fanta', 2.50, 19, 'single'),
  (54, 51, 4, 'grosse Sprite', '1,0l; zzgl. Pfand', 1, 'grosse Flasche Fanta', 4.00, 19, 'single'),
  (55, NULL, 1, 'Salat Athena', NULL, 1, 'Salat Athena', 7.49, 19, 'bundle'),
  (56, NULL, 1, 'Salat Nizza', NULL, 1, 'Salat Nizza', 7.49, 19, 'bundle'),
  (57, NULL, 4, 'Wasser', 'zzgl. Pfand', 1, 'Flasche Wasser', NULL, 19, 'container'),
  (58, NULL, 1, 'Tiramisu Schoko', '100g', 1, 'Tiramisu Schoko', 3.19, 19, 'single'),
  (59, 57, 4, 'Wasser classic', 'mit Kohlensaeure; 0,5l; zzgl. Pfand', 1, 'Flasche Wasser mit Kohlensaeure', 2.00, 19, 'single'),
  (60, 57, 4, 'Wasser still', 'ohne Kohlensaeure; 0,5l; zzgl. Pfand', 1, 'Flasche Wasser ohne Kohlensaeure', 2.00, 19, 'single'),
  (61, NULL, 4, 'Hasseroeder Premium Pils', '0,5l; zzgl. Pfand', 1, 'Flasche Hasseroeder', 2.50, 19, 'single'),
  (63, NULL, 4, 'Holsten Pilsener', '0,5l; zzgl. Pfand', 1, 'Flasche Holsten', 2.50, 19, 'single'),
  (64, NULL, 4, 'Freiberger Pils', '0,5l; zzgl. Pfand', 1, 'Flasche Freiberger', 2.50, 19, 'single'),
  (65, NULL, 1, 'Tiramisu Erdbeer', '100g', 1, 'Tiramisu Erdbeer', 3.19, 19, 'single'),
  (66, NULL, 1, 'Tiramisu Apfel', '100g', 1, 'Tiramisu Apfel', 3.19, 19, 'single'),
  (67, NULL, 1, 'Salat Rocco', NULL, 1, 'Salat Rocco', 8.49, 19, 'bundle'),
  (68, NULL, 1, 'Salat Ceasar\'s Chicken', NULL, 1, 'Salat Ceasar\'s Chicken', 8.49, 19, 'bundle'),
  (69, NULL, 1, 'Schokoladeneis - Mr.CoolBrown', '200g', 1, 'Mr Cool Brown', 2.39, 19, 'single'),
  (70, NULL, 1, 'Eis Strawberry Cheesecake - Häagen-Dazs', '(NULL)', 1, 'Eine fruchtige Verschmelzung: feine Eiscreme mit frischer Erdbeersauce und Keksstückchen.', NULL, 19, 'container'),
  (72, NULL, 1, 'Salat Evergreen', NULL, 1, 'Salat Evergreen', 8.49, 19, 'bundle'),
  (79, NULL, 1, 'Eis Mango & Raspberry - Häagen-Dazs', NULL, 1, 'Fruchtig exotisch und himmlisch erfrischend: Mango-Eiscreme durchzogen mit fruchtiger Himbeersauce.', NULL, 19, 'container'),
  (81, NULL, 1, 'Ruccola', NULL, NULL, 'Ruccola für Salate', 0.30, 19, 'basic'),
  (82, NULL, 1, 'Cherrytomaten', NULL, NULL, 'Cherrytomaten für Salat', 0.30, 19, 'basic'),
  (83, 1, 3, 'Pizza Salami, gross', 'gross', 1, 'Pizza Salami, 26cm', 5.50, 19, 'bundle'),
  (84, NULL, 1, 'Eis Vanilla Caramel Brownie - Häagen-Dazs', NULL, 1, 'Vanille-Eiscreme mit köstlicher Karamellsauce und den begehrten Schokokuchen-Stückchen, fein kombiniert.', NULL, 19, 'container'),
  (85, NULL, 1, 'Muffin Chocoholic', '70g', 1, 'Muffin Chocoholic', 1.99, 19, 'single'),
  (86, NULL, 1, 'Muffin Crumbleberry', '70g', 1, 'Muffin Crumbleberry', 1.99, 19, 'single'),
  (87, NULL, 5, 'Pasta Bolognese', NULL, 1, 'Pasta Bolognese, Teller', 9.00, 19, 'bundle'),
  (88, NULL, 1, 'Eis Cookies & Cream - Häagen-Dazs', NULL, 1, 'Feinste, cremige Vanille-Eiscreme in Komination mit leckeren Schokoladenkeks-Stückchen.', NULL, 19, 'container'),
  (89, NULL, 5, 'Pasta Napoli', NULL, 1, 'Pasta Napoli,Portion', 9.00, 19, 'bundle'),
  (90, NULL, 5, 'Pasta Carbonara', NULL, 1, 'Pasta Carbonara,Portion', 9.00, 19, 'bundle'),
  (91, 88, 1, 'Eis Cookies & Cream - Häagen-Dazs', '100ml', 1, 'Cookies & Cream klein', 2.49, 19, 'single'),
  (92, NULL, 5, 'Pasta Tonno', NULL, 1, 'Pasta Tonno,Portion', 9.00, 19, 'bundle'),
  (93, 88, 1, 'Eis Cookies & Cream - Häagen-Dazs', '500ml', 1, 'Cookies & Cream groß', 6.99, 19, 'single'),
  (94, NULL, 5, 'Pasta Funghi', NULL, 1, 'Pasta Funghi,Portion', 9.00, 19, 'bundle'),
  (95, 79, 1, 'Eis Mango & Raspberry - Häagen-Dazs', '100ml', 1, 'Mango & Raspberry klein', 2.49, 19, 'single'),
  (96, NULL, 5, 'Pasta Murghi', NULL, 1, 'Pasta Murghi,Portion', 9.00, 19, 'bundle'),
  (97, 79, 1, 'Eis Mango & Raspberry - Häagen-Dazs', '500ml', 1, 'Mango & Raspberry groß', 6.99, 19, 'single'),
  (98, NULL, 4, 'Sternburg Export', '0,5l; zzgl. Pfand', 1, 'Flasche Sternburg', 1.00, 19, 'single'),
  (99, 84, 1, 'Eis Vanilla Caramel Brownie - Häagen-Dazs', '100ml', 1, 'Vanilla Caramel Brownie klein', 2.49, 19, 'single'),
  (100, NULL, 5, 'Pasta Frutti di Mare', NULL, 1, 'Pasta Frutti,Portion', 9.00, 19, 'bundle'),
  (101, 84, 1, 'Eis Vanilla Caramel Brownie - Häagen-Dazs', '500ml', 1, 'Vanilla Caramel Brownie groß', 6.99, 19, 'single'),
  (102, 70, 1, 'Eis Strawberry Cheesecake - Häagen-Dazs', '100ml', 1, 'Strawberry Cheesecake klein', 2.49, 19, 'single'),
  (103, 70, 1, 'Eis Strawberry Cheesecake - Häagen-Dazs', '500ml', 1, 'Strawberry Cheesecake groß', 6.99, 19, 'single'),
  (104, NULL, 1, 'Gurken', NULL, NULL, 'Gurken für Salate', 0.20, 19, 'basic'),
  (105, NULL, 1, 'Eis Cookie Dough - Ben&Jerrys', NULL, 1, 'Vanilleeiscreme mit Schokochips-Plätzchenstücken.', NULL, 19, 'container'),
  (106, 105, 1, 'Eis Cookie Dough - Ben&Jerrys', '150ml', 1, 'Cookie Dough klein', 3.29, 19, 'single'),
  (107, 105, 1, 'Eis Cookie Dough - Ben&Jerrys', '500ml', 1, 'Cookie Dough groß', 6.99, 19, 'single'),
  (108, NULL, 5, 'Spaghetti', NULL, NULL, 'Spaghetti für Pasta Teller', 1.00, 19, 'basic'),
  (109, NULL, 1, 'Eis Chocolate Fudge Brownie - Ben&Jerrys', NULL, 1, 'Schokoladen-Eiscreme mit Schokogebäckstücken.', NULL, 19, 'container'),
  (110, 109, 1, 'Eis Chocolate Fudge Brownie - Ben&Jerrys', '150ml', 1, 'Chocolate Fudge Brownie klein', 3.29, 19, 'single'),
  (111, NULL, 5, 'Bolognese Sauce', NULL, NULL, 'Bolognese Sauce für Pasta Teller', 1.50, 19, 'basic'),
  (112, 109, 1, 'Eis Chocolate Fudge Brownie - Ben&Jerrys', '500ml', 1, 'Chocolate Fudge Brownie groß', 6.99, 19, 'single'),
  (113, NULL, 1, 'Eis Peanut Butter Cup - Ben&Jerrys', NULL, 1, 'Erdnussbutter-Eiscreme mit Erdnusscreme-Stückchen.', NULL, 19, 'container'),
  (114, 113, 1, 'Eis Peanut Butter Cup - Ben&Jerrys', '150ml', 1, 'Peanut Butter Cup klein', 3.29, 19, 'single'),
  (115, 113, 1, 'Eis Peanut Butter Cup - Ben&Jerrys', '500ml', 1, 'Peanut Butter Cup groß', 6.99, 19, 'single'),
  (116, NULL, 1, 'Muffin Apfel-Zimt', '70g', 1, 'Muffin Apfel Zimt', 1.99, 19, 'single'),
  (117, NULL, 1, 'Paprika', NULL, NULL, 'Paprika für Salate', 0.20, 19, 'basic'),
  (118, NULL, 1, 'Frühlingszwiebeln', NULL, NULL, 'Frühlingszwiebeln für Salate', 0.80, 19, 'basic'),
  (119, NULL, 1, 'Muffin SchokoCrisp', '70g', 1, 'Muffin SchokoCrisp', 1.99, 19, 'single'),
  (120, NULL, 1, 'grüne Oliven', NULL, NULL, 'grüne Oliven für Salat', 0.15, 19, 'basic'),
  (121, NULL, 1, 'Sonnenblumenkerne', NULL, NULL, 'Sonnenblumenkerne für Salate', 0.08, 19, 'basic'),
  (122, NULL, 1, 'rote Zwiebeln', NULL, NULL, 'rote Zwiebeln für Salate', 0.10, 19, 'basic'),
  (123, NULL, 1, 'Hirtenkäse', NULL, NULL, 'Hirtenkäse für Salate', 0.20, 19, 'basic'),
  (124, NULL, 1, 'Thunfisch', NULL, NULL, 'Thunfisch für Salate', 0.25, 19, 'basic'),
  (125, NULL, 1, 'Mozzarella-Kugeln', NULL, NULL, 'Mozzarella-Kugeln für Salate', 0.45, 19, 'basic'),
  (127, NULL, 5, 'Napolisauce', '150g', 1, 'Napolisauce für Pasta', 1.00, 19, 'basic'),
  (128, NULL, 1, 'Serranoschinken', NULL, NULL, 'Serranoschinken für Salate', 0.55, 19, 'basic'),
  (129, NULL, 1, 'Eis Fairly Nuts - Ben&Jerrys', NULL, 1, 'Karamell-Eiscreme mit Karamellsauce und Mandel-Crispies.', NULL, 19, 'container'),
  (130, NULL, 5, 'Bolognesesauce', '150g', 1, 'Bolognosesauce für Pasta', 1.00, 19, 'basic'),
  (131, NULL, 1, 'Grana Padano', NULL, NULL, 'Grana Padano für Salate', 0.39, 19, 'basic'),
  (132, 129, 1, 'Eis Fairly Nuts - Ben&Jerrys', '100ml', 1, 'Fairly Nuts - klein', 3.29, 19, 'single'),
  (133, 129, 1, 'Eis Fairly Nuts - Ben&Jerrys', '500ml', 1, 'Fairly Nuts groß', 6.99, 19, 'single'),
  (134, NULL, 1, 'Römersalate', NULL, NULL, 'Römersalate für Salate', 0.12, 19, 'basic'),
  (135, NULL, 1, 'Hähnchenbrustfilet', NULL, NULL, 'Hähnchenbrustfilet für Salate', 0.27, 19, 'basic'),
  (136, NULL, 1, 'Croûtons', NULL, NULL, 'Croûtons für Salate', 0.08, 19, 'basic'),
  (137, NULL, 5, 'Carbonarasauce', NULL, 1, 'Carbonarasauce', 1.00, 19, 'basic'),
  (138, NULL, 1, 'Prosciutto Cotto', NULL, NULL, 'Prosciutto Cotto für Salate', 0.28, 19, 'basic'),
  (139, NULL, 1, 'Champignons', NULL, NULL, 'Champignons für Salate', 0.37, 19, 'basic'),
  (140, NULL, 1, 'Ei', NULL, NULL, 'Ei für Salate', 0.13, 19, 'basic'),
  (141, NULL, 5, 'Basilikum', '50g', 1, 'Basilikum für Pasta', 1.50, 19, 'basic'),
  (142, NULL, 1, 'Mais', NULL, NULL, 'Mais für Salate', 0.19, 19, 'basic'),
  (143, NULL, 5, 'Sahnesauce', '150g', 1, 'Sahnesauce für Pasta', 2.00, 19, 'basic'),
  (144, NULL, 5, 'Vorderschinken', '50g', 1, 'Vorderschinken für Pasta', 2.00, 19, 'basic'),
  (145, NULL, 1, 'Gouda-Käse', NULL, NULL, 'Gouda-Käse für Salate', 0.17, 19, 'basic'),
  (146, NULL, 5, 'Ei', '50g', 1, 'Ei für Pasta', 0.50, 19, 'basic'),
  (147, NULL, 5, 'Parmesan', '80g', 1, 'Parmesan für Pasta', 1.00, 19, 'basic'),
  (148, NULL, 5, 'Zwiebeln', '50g', 1, 'Zwiebeln für Pasta', 0.20, 19, 'basic'),
  (149, NULL, 5, 'Mozerella', '50g', 1, 'Mozerella für Pasta', 1.00, 19, 'basic'),
  (150, NULL, 5, 'Thunfisch', '80g', 1, 'Thunfisch für Pasta', 1.50, 19, 'basic'),
  (151, NULL, 5, 'Champignons', '100g', 1, 'Champignons für Pasta', 1.50, 19, 'basic'),
  (152, NULL, 5, 'Petersilie', '30g', 1, 'Petersilie für Pasta', 0.20, 19, 'basic'),
  (153, NULL, 5, 'Hänchenbrustfilet', '150g', 1, 'Hänchenbrustfilet für Pasta', 2.00, 19, 'basic'),
  (154, NULL, 5, 'Broccoli', '80g', 1, 'Broccoli für Pasta', 0.40, 19, 'basic'),
  (155, NULL, 5, 'Meeresfrüchte', '150g', 1, 'Meeresfrüchte für Pasta', 3.00, 19, 'basic'),
  (156, NULL, 5, 'Knoblauch', '3g', 1, 'Knoblauch für Pasta', 0.30, 19, 'basic'),
  (157, NULL, 5, 'Tomatenscheiben', '100g', 1, 'Tomatenscheiben für Pasta', 0.50, 19, 'basic'),
  (158, NULL, 5, 'Spaghetti', '90g', 1, 'Spaghetti für Pasta', 1.00, 19, 'basic'),
  (159, NULL, 5, 'Gnocchi', '90g', 1, 'Gnocchi für Pasta', 1.00, 19, 'basic'),
  (160, NULL, 5, 'Cannelloni', '90g', 1, 'Cannelloni für Pasta', 1.00, 19, 'basic'),
  (161, NULL, 5, 'Rigatoni', '90g', 1, 'Rigatoni für Pasta', 1.00, 19, 'basic'),
  (162, NULL, 5, 'Tagliatelle', '90g', 1, 'Tagliatelle für Pasta', 1.00, 19, 'basic'),
  (163, NULL, 5, 'Ravioli', '90g', 1, 'Ravioli für Pasta', 1.00, 19, 'basic'),
  (164, NULL, 5, 'Penne', '90g', 1, 'Penne für Pasta', 1.00, 19, 'basic'),
  (165, NULL, 5, 'Linguine', '90g', 1, 'Linguine für Pasta', 1.00, 19, 'basic'),
  (166, NULL, 5, 'Farfalle', '90g', 1, 'Farfalle für Pasta', 1.00, 19, 'basic'),
  (167, NULL, 5, 'Spaghetti Bolognese', NULL, 1, 'Spaghetti Bolognese 1x Portion', 9.00, 19, 'bundle'),
  (168, NULL, 5, 'Spaghetti Napoli', NULL, 1, 'Spaghetti Napoli 1x Portion', 9.00, 19, 'bundle'),
  (169, NULL, 5, 'Spaghetti Carbonara', NULL, 1, 'Spaghetti Carbonara 1x Portion', 9.00, 19, 'bundle'),
  (170, NULL, 5, 'Spaghetti Tonno', NULL, 1, 'Spaghetti Tonno 1x Portion', 9.00, 19, 'bundle'),
  (171, NULL, 5, 'Spaghetti Funghi', NULL, 1, 'Spaghetti Funghi 1x Portion', 9.00, 19, 'bundle'),
  (172, NULL, 5, 'Spaghetti Murghi', NULL, 1, 'Spaghetti Murghi 1x Portion', 9.00, 19, 'bundle'),
  (173, NULL, 5, 'Spaghetti Frutti di Mare', NULL, 1, 'Spaghetti Frutti di Mare 1x Portion', 9.00, 19, 'bundle'),
  (174, NULL, 1, 'Eis Karamel Sutra - Ben&Jerrys', NULL, 1, 'Karamel Sutra', NULL, 19, 'container'),
  (175, 174, 1, 'Eis Karamel Sutra - Ben&Jerrys', '150ml', 1, 'Karamel Sutra klein', 3.29, 19, 'single'),
  (176, 174, 1, 'Eis Karamel Sutra - Ben&Jerrys', '500ml', 1, 'Karamel Sutra groß', 6.99, 19, 'single');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ProductsToComponents`
--

DROP TABLE IF EXISTS `ProductsToComponents`;
CREATE TABLE IF NOT EXISTS `ProductsToComponents` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `productId` int(10) UNSIGNED NOT NULL,
  `componentId` int(10) UNSIGNED NOT NULL,
  `unitAmount` float(10,4) UNSIGNED NOT NULL,
  `ordering` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `replaceable` enum('N','Y') NOT NULL DEFAULT 'N',
  `removable` enum('N','Y') NOT NULL DEFAULT 'N',
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniqueForce` (`id`,`productId`),
  KEY `productId` (`productId`),
  KEY `materialId` (`componentId`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COMMENT='the n2n table for materials in products';

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
  (8, 3, 62, 60.0000, 4, 'N', 'N'),
  (9, 111, 14, 1.0000, 1, 'N', 'N');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ProductsToProductGroups`
--

DROP TABLE IF EXISTS `ProductsToProductGroups`;
CREATE TABLE IF NOT EXISTS `ProductsToProductGroups` (
  `productId` int(10) UNSIGNED NOT NULL,
  `productGroupId` int(10) UNSIGNED NOT NULL,
  UNIQUE KEY `uniqueForce` (`productId`,`productGroupId`),
  KEY `productId` (`productId`),
  KEY `productGroupId` (`productGroupId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='the n2n table for productGroups';

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
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

--
-- TRUNCATE Tabelle vor dem Einfügen `ProductToOptions`
--

TRUNCATE TABLE `ProductToOptions`;
--
-- Daten für Tabelle `ProductToOptions`
--

INSERT INTO `ProductToOptions` (`id`, `productId`, `optionProductId`, `unitAmount`, `maxAmount`) VALUES
  (2, 72, 81, 20.0000, 2),
  (3, 72, 82, 4.0000, 2),
  (5, 87, 111, 150.0000, 1),
  (6, 87, 108, 200.0000, 1),
  (7, 72, 104, 6.0000, 2),
  (9, 72, 19, 8.0000, 1),
  (10, 72, 139, 4.0000, 1),
  (11, 72, 140, 0.0000, 1),
  (12, 72, 142, 18.0000, 1),
  (13, 72, 145, 50.0000, 1),
  (14, 43, 81, 20.0000, 1),
  (15, 43, 118, 10.0000, 1),
  (19, 43, 82, 4.0000, 1),
  (20, 43, 104, 6.0000, 1),
  (23, 43, 117, 8.0000, 1),
  (24, 43, 120, 6.0000, 1),
  (25, 43, 121, 12.0000, 1);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `Slider`
--

DROP TABLE IF EXISTS `Slider`;
CREATE TABLE IF NOT EXISTS `Slider` (
  `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `src` varchar(255) DEFAULT '0',
  `headline` varchar(50) DEFAULT '0',
  `content` varchar(255) DEFAULT '0',
  `button` varchar(50) DEFAULT '0',
  `picUrl` varchar(255) DEFAULT '0',
  `position` tinyint(3) UNSIGNED DEFAULT '0',
  `active` enum('Y','N') DEFAULT 'N',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- TRUNCATE Tabelle vor dem Einfügen `Slider`
--

TRUNCATE TABLE `Slider`;
--
-- Daten für Tabelle `Slider`
--

INSERT INTO `Slider` (`ID`, `src`, `headline`, `content`, `button`, `picUrl`, `position`, `active`) VALUES
  (1, 'data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==', 'Ueberschrift', 'Text TextText TextText TextText TextText Text', 'ksadhfoi', 'campaigns/index', 5, 'Y'),
  (2, 'data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==', 'Ueberschrift1', 'Text TextText TextText TextText TextText Text', 'Ranger', 'campaigns/index', 2, 'Y'),
  (3, 'data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==', 'Ueberschrift2', 'Text TextText TextText TextText TextText Text', 'Thomas', 'campaigns/index', 3, 'Y'),
  (4, 'data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==', 'Ueberschrift3', 'Text TextText TextText TextText TextText Text', 'Philip', 'campaigns/index', 1, 'Y'),
  (5, 'data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==', 'Ueberschrift4', 'Text TextText TextText TextText TextText Text', 'Peter', 'campaigns/index', 1, 'Y');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `User`
--

DROP TABLE IF EXISTS `User`;
CREATE TABLE IF NOT EXISTS `User` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Logins and Stuff';

--
-- TRUNCATE Tabelle vor dem Einfügen `User`
--

TRUNCATE TABLE `User`;
--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `AddonsToComponets`
--
ALTER TABLE `AddonsToComponets`
  ADD CONSTRAINT `FK_ADDONS` FOREIGN KEY (`fk_Addons`) REFERENCES `Addons` (`id`),
  ADD CONSTRAINT `FK_COMPONENTS` FOREIGN KEY (`fk_Components`) REFERENCES `Components` (`componentId`);

--
-- Constraints der Tabelle `Components`
--
-- ALTER TABLE `Components`
--  ADD CONSTRAINT `ComponentGroupRestriction` FOREIGN KEY (`componentGroup`) REFERENCES `ComponentGroups` (`componentGroupId`);

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
