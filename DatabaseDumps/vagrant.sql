-- phpMyAdmin SQL Dump
-- version 4.6.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Erstellungszeit: 19. Sep 2016 um 13:26
-- Server-Version: 10.0.26-MariaDB-0+deb8u1
-- PHP-Version: 5.6.24-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `vagrant`
--
use vagrant;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `Menues`
--

CREATE TABLE `Menues` (
  `id` int(10) UNSIGNED NOT NULL,
  `parentId` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `url` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Daten für Tabelle `Menues`
--

INSERT INTO `Menues` (`id`, `parentId`, `name`, `url`) VALUES
(1, NULL, 'mainMenu', ''),
(2, 1, 'Aktionen', ''),
(3, 1, 'Pizza', ''),
(4, 1, 'Nudeln', ''),
(5, 1, 'Fingerfood', ''),
(6, 3, 'Alle einsehen', ''),
(7, 3, 'vegetarische Menüs', ''),
(8, 3, 'Klassiker', '');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `User`
--

CREATE TABLE `User` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `username` varchar(100) COLLATE utf8_bin NOT NULL,
  `password` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Logins and Stuff';

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `Menues`
--
ALTER TABLE `Menues`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `Menues`
--
ALTER TABLE `Menues`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT für Tabelle `User`
--
ALTER TABLE `User`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
