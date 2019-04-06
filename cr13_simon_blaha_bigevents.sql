-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 06. Apr 2019 um 16:46
-- Server-Version: 10.1.38-MariaDB
-- PHP-Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `cr13_simon_blaha_bigevents`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `eventName` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `eventDate` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `eventImage` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `eventCapacity` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `eventEmail` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `eventPhone` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `eventAddress` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `eventZIP` int(11) NOT NULL,
  `eventCity` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `eventURL` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `eventType` varchar(55) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Daten für Tabelle `events`
--

INSERT INTO `events` (`id`, `eventName`, `eventDate`, `eventImage`, `eventCapacity`, `eventEmail`, `eventPhone`, `eventAddress`, `eventZIP`, `eventCity`, `eventURL`, `eventType`) VALUES
(1, 'Donauinselfest', '2019-06-13 08:00:00', 'https://gastronews.wien/wp-content/uploads/2017/06/c-Donauinselfest-Florian-Wieser.jpg', '1000', 'donauinsel-fest@wien.at', '+43 1 255 255', 'Donauinsel 1', 1220, 'Vienna', 'www.donauinselfest.at', 'Music'),
(2, 'Tomorrowland', '2019-04-24 00:00:00', 'https://www.tomorrowland.com/src/Frontend/Themes/tomorrowland/Core/Layout/images/timeline/2018-1.jpg', '1500', 'tomorrowland@domain.eu', '+44 2 255 255', 'Festivalstreet', 7898, 'Amsterdam', 'www.tomorrowland.eu', 'Music'),
(4, 'Nova Rock', '2019-06-13 12:00:00', 'https://www.novarock.at/wp-content/uploads/sites/15/the-prodigy-billy-idol-und-tolle-weitere-bandbestaetigungen-default.jpeg', '2000', 'nova@rock.at', '123456', 'Feld 1', 2999, 'Burgenland', 'www.novarock.at', 'Music'),
(5, '90s Party', '2019-04-24 20:00:00', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTc8RNMo8a_B6fK5_Xkt5zsESo6cHhLG8JpBv1t-N0HwKSLkXHkHw', '200', 'events@event.at', '1232456', 'Koppstraße 2', 1220, 'Vienna', 'www.events.at', 'Music');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
