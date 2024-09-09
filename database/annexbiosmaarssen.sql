-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 09 sep 2024 om 09:54
-- Serverversie: 10.4.32-MariaDB
-- PHP-versie: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `annexbiosmaarssen`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `contact_title` char(50) NOT NULL,
  `contact_text` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `contacts`
--

INSERT INTO `contacts` (`id`, `contact_title`, `contact_text`) VALUES
(1, 'Customer Support', 'Available 24/7'),
(2, 'Ticket Sales', 'Book tickets online'),
(3, 'General Inquiry', 'Contact us via email');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `movieagenda`
--

CREATE TABLE `movieagenda` (
  `agenda_id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `agenda_startdate` date NOT NULL,
  `agenda_enddate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `movieagenda`
--

INSERT INTO `movieagenda` (`agenda_id`, `movie_id`, `agenda_startdate`, `agenda_enddate`) VALUES
(1, 101, '2024-09-01', '2024-09-07'),
(2, 102, '2024-09-08', '2024-09-14'),
(3, 103, '2024-09-15', '2024-09-21');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `movie_image` char(255) NOT NULL,
  `movie` char(50) NOT NULL,
  `release_date` date NOT NULL,
  `description` text NOT NULL,
  `genre` varchar(255) NOT NULL,
  `movie_length` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `imbd_score` char(255) NOT NULL,
  `director` char(255) NOT NULL,
  `actors_1` varchar(255) NOT NULL,
  `actors_2` char(255) NOT NULL,
  `actors_3` char(255) NOT NULL,
  `actors_4` char(255) NOT NULL,
  `actor_pictures_1` varchar(255) NOT NULL,
  `actor_pictures_2` char(255) NOT NULL,
  `actor_pictures_3` char(255) NOT NULL,
  `actor_pictures_4` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `movies`
--

INSERT INTO `movies` (`id`, `movie_image`, `movie`, `release_date`, `description`, `genre`, `movie_length`, `country`, `imbd_score`, `director`, `actors_1`, `actors_2`, `actors_3`, `actors_4`, `actor_pictures_1`, `actor_pictures_2`, `actor_pictures_3`, `actor_pictures_4`) VALUES
(1, 'images/film_images/Jurassic-World_-Fallen-Kingdom.jpg', 'Jurassic world: Fallen Kingdom', '2018-07-06', 'test teks hahahhaahhahaha gehaktbal', 'Actie', '128 Minutes', 'USA', '8.3/10', 'Juan Antonio Bayona', 'Bryce Dallas Howard\r\n', 'Chris Pratt', 'Rafe Spall', 'Toby Jones', 'images/actors/brycedallashoward.jpg', 'images/actors/chrispratt.jpg', 'images/actors/rafespall.jpg', 'images/actors/tobyjones.jpg');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `purchases`
--

CREATE TABLE `purchases` (
  `purchase_id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `agenda_id` int(11) NOT NULL,
  `purchase_seats` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`purchase_seats`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `purchases`
--

INSERT INTO `purchases` (`purchase_id`, `movie_id`, `agenda_id`, `purchase_seats`) VALUES
(1, 101, 1, '[{\"row\": \"A\", \"seat\": 1}, {\"row\": \"A\", \"seat\": 2}]'),
(2, 102, 2, '[{\"row\": \"B\", \"seat\": 3}, {\"row\": \"B\", \"seat\": 4}]'),
(3, 103, 3, '[{\"row\": \"C\", \"seat\": 5}, {\"row\": \"C\", \"seat\": 6}]');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `shipments`
--

CREATE TABLE `shipments` (
  `shipment_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `shipment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `shipments`
--

INSERT INTO `shipments` (`shipment_id`, `order_id`, `shipment_date`) VALUES
(1, 201, '2024-09-01'),
(2, 202, '2024-09-02'),
(3, 203, '2024-09-03');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `movieagenda`
--
ALTER TABLE `movieagenda`
  ADD PRIMARY KEY (`agenda_id`);

--
-- Indexen voor tabel `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`purchase_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT voor een tabel `movieagenda`
--
ALTER TABLE `movieagenda`
  MODIFY `agenda_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT voor een tabel `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT voor een tabel `purchases`
--
ALTER TABLE `purchases`
  MODIFY `purchase_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
