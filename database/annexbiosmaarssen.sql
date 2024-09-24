-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2024 at 01:37 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

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
-- Table structure for table `api`
--

CREATE TABLE `api` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `last_updated` int(100) NOT NULL,
  `json` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `api`
--

INSERT INTO `api` (`id`, `name`, `last_updated`, `json`) VALUES
(3, 'movies', 1727176987, '[{\"id\":\"1\",\"title\":\"INTERSTELLAR (10TH ANNIVERSARY)\",\"description\":\"Onze tijd op aarde lijkt voorbij, dus begint een groep ontdekkingsreizigers aan de belangrijkste missie uit de geschiedenis van de mens. Ze gaan op zoek naar een plek in de ruimte waar de mensheid kan voortbestaan.\",\"rating\":\"4\",\"duration\":\"02:44:00\",\"release_date\":\"2020-06-04T00:00:00.000Z\",\"age_restriction\":\"12\",\"banner_path\":\"https://annexbios-server.onrender.com/img/k124e9ck123kmck/fkm123kvkm6210fkl204c.jpg\",\"price\":\"12\",\"actors\":[{\"id\":\"1\",\"firstname\":\"Matthew\",\"infix\":\"David\",\"lastname\":\"McConaughey\",\"date_of_birth\":\"1969-04-11T00:00:00.000Z\",\"origin\":\"USA\",\"image_path\":\"https://annexbios-server.onrender.com/img/k124e9ck123kmck/bkjbkjdg4t4.jpeg\"},{\"id\":\"3\",\"firstname\":\"Bryce\",\"infix\":\"Dallas\",\"lastname\":\"Howard\",\"date_of_birth\":\"1981-03-02T00:00:00.000Z\",\"origin\":\"USA\",\"image_path\":\"https://annexbios-server.onrender.com/img/k124e9ck123kmck/fesw4r3grbe.jpeg\"},{\"id\":\"4\",\"firstname\":\"Rafe\",\"infix\":\"\",\"lastname\":\"Spall\",\"date_of_birth\":\"1983-03-10T00:00:00.000Z\",\"origin\":\"UK\",\"image_path\":\"https://annexbios-server.onrender.com/img/k124e9ck123kmck/rgnbfdgcvb3r.jpeg\"},{\"id\":\"5\",\"firstname\":\"Josh\",\"infix\":\"\",\"lastname\":\"Brolin\",\"date_of_birth\":\"1968-02-12T00:00:00.000Z\",\"origin\":\"USA\",\"image_path\":\"https://annexbios-server.onrender.com/img/k124e9ck123kmck/sdfee4tg.jpeg\"},{\"id\":\"6\",\"firstname\":\"Zazie\",\"infix\":\"\",\"lastname\":\"Beetz\",\"date_of_birth\":\"1991-06-01T00:00:00.000Z\",\"origin\":\"Germany\",\"image_path\":\"https://annexbios-server.onrender.com/img/k124e9ck123kmck/dvfsresgvrs4.jpeg\"},{\"id\":\"7\",\"firstname\":\"James\",\"infix\":\"\",\"lastname\":\"Corden\",\"date_of_birth\":\"1978-08-22T00:00:00.000Z\",\"origin\":\"UK\",\"image_path\":\"https://annexbios-server.onrender.com/img/k124e9ck123kmck/345thbfvd.jpeg\"},{\"id\":\"8\",\"firstname\":\"Domhnall\",\"infix\":\"\",\"lastname\":\"Gleeson\",\"date_of_birth\":\"1983-05-12T00:00:00.000Z\",\"origin\":\"Ireland\",\"image_path\":\"https://annexbios-server.onrender.com/img/k124e9ck123kmck/asdf43t3.jpeg\"},{\"id\":\"9\",\"firstname\":\"Daisy\",\"infix\":\"\",\"lastname\":\"Ridley\",\"date_of_birth\":\"1992-04-10T00:00:00.000Z\",\"origin\":\"UK\",\"image_path\":\"https://annexbios-server.onrender.com/img/k124e9ck123kmck/gnfdcb54.jpeg\"},{\"id\":\"10\",\"firstname\":\"Alden\",\"infix\":\"\",\"lastname\":\"Ehrenreich\",\"date_of_birth\":\"1989-11-22T00:00:00.000Z\",\"origin\":\"USA\",\"image_path\":\"https://annexbios-server.onrender.com/img/k124e9ck123kmck/3dfgrdh4.jpeg\"},{\"id\":\"11\",\"firstname\":\"Woody\",\"infix\":\"\",\"lastname\":\"Harrelson\",\"date_of_birth\":\"1961-07-23T00:00:00.000Z\",\"origin\":\"USA\",\"image_path\":\"https://annexbios-server.onrender.com/img/k124e9ck123kmck/asdfe4tt.jpeg\"},{\"id\":\"12\",\"firstname\":\"Emilia\",\"infix\":\"\",\"lastname\":\"Clarke\",\"date_of_birth\":\"1986-10-23T00:00:00.000Z\",\"origin\":\"UK\",\"image_path\":\"https://annexbios-server.onrender.com/img/k124e9ck123kmck/sef4rwe5tyfb.jpeg\"}]},{\"id\":\"2\",\"title\":\"Fight Club\",\"description\":\"Een depressieve man die lijdt aan slapeloosheid, raakt verwikkeld in een ondergrondse vechtclub onder leiding van de charismatische Tyler Durden, wat leidt tot chaos en zelfdestructie.\",\"rating\":\"4.8\",\"duration\":\"02:19:00\",\"release_date\":\"1999-10-15T00:00:00.000Z\",\"age_restriction\":\"18\",\"banner_path\":\"https://annexbios-server.onrender.com/img/k124e9ck123kmck/vkm214mksv0a9m32.jpg\",\"price\":\"12\",\"actors\":[{\"id\":\"3\",\"firstname\":\"Bryce\",\"infix\":\"Dallas\",\"lastname\":\"Howard\",\"date_of_birth\":\"1981-03-02T00:00:00.000Z\",\"origin\":\"USA\",\"image_path\":\"https://annexbios-server.onrender.com/img/k124e9ck123kmck/fesw4r3grbe.jpeg\"},{\"id\":\"4\",\"firstname\":\"Rafe\",\"infix\":\"\",\"lastname\":\"Spall\",\"date_of_birth\":\"1983-03-10T00:00:00.000Z\",\"origin\":\"UK\",\"image_path\":\"https://annexbios-server.onrender.com/img/k124e9ck123kmck/rgnbfdgcvb3r.jpeg\"},{\"id\":\"5\",\"firstname\":\"Josh\",\"infix\":\"\",\"lastname\":\"Brolin\",\"date_of_birth\":\"1968-02-12T00:00:00.000Z\",\"origin\":\"USA\",\"image_path\":\"https://annexbios-server.onrender.com/img/k124e9ck123kmck/sdfee4tg.jpeg\"},{\"id\":\"6\",\"firstname\":\"Zazie\",\"infix\":\"\",\"lastname\":\"Beetz\",\"date_of_birth\":\"1991-06-01T00:00:00.000Z\",\"origin\":\"Germany\",\"image_path\":\"https://annexbios-server.onrender.com/img/k124e9ck123kmck/dvfsresgvrs4.jpeg\"},{\"id\":\"7\",\"firstname\":\"James\",\"infix\":\"\",\"lastname\":\"Corden\",\"date_of_birth\":\"1978-08-22T00:00:00.000Z\",\"origin\":\"UK\",\"image_path\":\"https://annexbios-server.onrender.com/img/k124e9ck123kmck/345thbfvd.jpeg\"},{\"id\":\"8\",\"firstname\":\"Domhnall\",\"infix\":\"\",\"lastname\":\"Gleeson\",\"date_of_birth\":\"1983-05-12T00:00:00.000Z\",\"origin\":\"Ireland\",\"image_path\":\"https://annexbios-server.onrender.com/img/k124e9ck123kmck/asdf43t3.jpeg\"},{\"id\":\"9\",\"firstname\":\"Daisy\",\"infix\":\"\",\"lastname\":\"Ridley\",\"date_of_birth\":\"1992-04-10T00:00:00.000Z\",\"origin\":\"UK\",\"image_path\":\"https://annexbios-server.onrender.com/img/k124e9ck123kmck/gnfdcb54.jpeg\"},{\"id\":\"10\",\"firstname\":\"Alden\",\"infix\":\"\",\"lastname\":\"Ehrenreich\",\"date_of_birth\":\"1989-11-22T00:00:00.000Z\",\"origin\":\"USA\",\"image_path\":\"https://annexbios-server.onrender.com/img/k124e9ck123kmck/3dfgrdh4.jpeg\"},{\"id\":\"11\",\"firstname\":\"Woody\",\"infix\":\"\",\"lastname\":\"Harrelson\",\"date_of_birth\":\"1961-07-23T00:00:00.000Z\",\"origin\":\"USA\",\"image_path\":\"https://annexbios-server.onrender.com/img/k124e9ck123kmck/asdfe4tt.jpeg\"},{\"id\":\"12\",\"firstname\":\"Emilia\",\"infix\":\"\",\"lastname\":\"Clarke\",\"date_of_birth\":\"1986-10-23T00:00:00.000Z\",\"origin\":\"UK\",\"image_path\":\"https://annexbios-server.onrender.com/img/k124e9ck123kmck/sef4rwe5tyfb.jpeg\"},{\"id\":\"1\",\"firstname\":\"Matthew\",\"infix\":\"David\",\"lastname\":\"McConaughey\",\"date_of_birth\":\"1969-04-11T00:00:00.000Z\",\"origin\":\"USA\",\"image_path\":\"https://annexbios-server.onrender.com/img/k124e9ck123kmck/bkjbkjdg4t4.jpeg\"}]},{\"id\":\"3\",\"title\":\"Jurassic World: Fallen Kingdom\",\"description\":\"When the islands dormant volcano begins roaring to life, Owen and Claire mount a campaign to rescue the remaining dinosaurs from this extinction-level event.\",\"rating\":\"4.1\",\"duration\":\"02:08:00\",\"release_date\":\"2018-06-06T00:00:00.000Z\",\"age_restriction\":\"12\",\"banner_path\":\"https://annexbios-server.onrender.com/img/k124e9ck123kmck/vki14v901mvk.jpeg\",\"price\":\"15\",\"actors\":[{\"id\":\"1\",\"firstname\":\"Matthew\",\"infix\":\"David\",\"lastname\":\"McConaughey\",\"date_of_birth\":\"1969-04-11T00:00:00.000Z\",\"origin\":\"USA\",\"image_path\":\"https://annexbios-server.onrender.com/img/k124e9ck123kmck/bkjbkjdg4t4.jpeg\"},{\"id\":\"3\",\"firstname\":\"Bryce\",\"infix\":\"Dallas\",\"lastname\":\"Howard\",\"date_of_birth\":\"1981-03-02T00:00:00.000Z\",\"origin\":\"USA\",\"image_path\":\"https://annexbios-server.onrender.com/img/k124e9ck123kmck/fesw4r3grbe.jpeg\"},{\"id\":\"4\",\"firstname\":\"Rafe\",\"infix\":\"\",\"lastname\":\"Spall\",\"date_of_birth\":\"1983-03-10T00:00:00.000Z\",\"origin\":\"UK\",\"image_path\":\"https://annexbios-server.onrender.com/img/k124e9ck123kmck/rgnbfdgcvb3r.jpeg\"},{\"id\":\"5\",\"firstname\":\"Josh\",\"infix\":\"\",\"lastname\":\"Brolin\",\"date_of_birth\":\"1968-02-12T00:00:00.000Z\",\"origin\":\"USA\",\"image_path\":\"https://annexbios-server.onrender.com/img/k124e9ck123kmck/sdfee4tg.jpeg\"},{\"id\":\"6\",\"firstname\":\"Zazie\",\"infix\":\"\",\"lastname\":\"Beetz\",\"date_of_birth\":\"1991-06-01T00:00:00.000Z\",\"origin\":\"Germany\",\"image_path\":\"https://annexbios-server.onrender.com/img/k124e9ck123kmck/dvfsresgvrs4.jpeg\"},{\"id\":\"7\",\"firstname\":\"James\",\"infix\":\"\",\"lastname\":\"Corden\",\"date_of_birth\":\"1978-08-22T00:00:00.000Z\",\"origin\":\"UK\",\"image_path\":\"https://annexbios-server.onrender.com/img/k124e9ck123kmck/345thbfvd.jpeg\"},{\"id\":\"8\",\"firstname\":\"Domhnall\",\"infix\":\"\",\"lastname\":\"Gleeson\",\"date_of_birth\":\"1983-05-12T00:00:00.000Z\",\"origin\":\"Ireland\",\"image_path\":\"https://annexbios-server.onrender.com/img/k124e9ck123kmck/asdf43t3.jpeg\"},{\"id\":\"9\",\"firstname\":\"Daisy\",\"infix\":\"\",\"lastname\":\"Ridley\",\"date_of_birth\":\"1992-04-10T00:00:00.000Z\",\"origin\":\"UK\",\"image_path\":\"https://annexbios-server.onrender.com/img/k124e9ck123kmck/gnfdcb54.jpeg\"},{\"id\":\"10\",\"firstname\":\"Alden\",\"infix\":\"\",\"lastname\":\"Ehrenreich\",\"date_of_birth\":\"1989-11-22T00:00:00.000Z\",\"origin\":\"USA\",\"image_path\":\"https://annexbios-server.onrender.com/img/k124e9ck123kmck/3dfgrdh4.jpeg\"},{\"id\":\"11\",\"firstname\":\"Woody\",\"infix\":\"\",\"lastname\":\"Harrelson\",\"date_of_birth\":\"1961-07-23T00:00:00.000Z\",\"origin\":\"USA\",\"image_path\":\"https://annexbios-server.onrender.com/img/k124e9ck123kmck/asdfe4tt.jpeg\"},{\"id\":\"12\",\"firstname\":\"Emilia\",\"infix\":\"\",\"lastname\":\"Clarke\",\"date_of_birth\":\"1986-10-23T00:00:00.000Z\",\"origin\":\"UK\",\"image_path\":\"https://annexbios-server.onrender.com/img/k124e9ck123kmck/sef4rwe5tyfb.jpeg\"}]},{\"id\":\"4\",\"title\":\"Pieter Konijn\",\"description\":\"Peter Rabbits feud with Mr. McGregor escalates to greater heights as both compete for the affections of the kind animal lover next door.\",\"rating\":\"3.8\",\"duration\":\"01:35:00\",\"release_date\":\"2018-03-21T00:00:00.000Z\",\"age_restriction\":\"6\",\"banner_path\":\"https://annexbios-server.onrender.com/img/k124e9ck123kmck/vkltop34123km12f9lf.jpeg\",\"price\":\"8\",\"actors\":[{\"id\":\"1\",\"firstname\":\"Matthew\",\"infix\":\"David\",\"lastname\":\"McConaughey\",\"date_of_birth\":\"1969-04-11T00:00:00.000Z\",\"origin\":\"USA\",\"image_path\":\"https://annexbios-server.onrender.com/img/k124e9ck123kmck/bkjbkjdg4t4.jpeg\"},{\"id\":\"3\",\"firstname\":\"Bryce\",\"infix\":\"Dallas\",\"lastname\":\"Howard\",\"date_of_birth\":\"1981-03-02T00:00:00.000Z\",\"origin\":\"USA\",\"image_path\":\"https://annexbios-server.onrender.com/img/k124e9ck123kmck/fesw4r3grbe.jpeg\"},{\"id\":\"4\",\"firstname\":\"Rafe\",\"infix\":\"\",\"lastname\":\"Spall\",\"date_of_birth\":\"1983-03-10T00:00:00.000Z\",\"origin\":\"UK\",\"image_path\":\"https://annexbios-server.onrender.com/img/k124e9ck123kmck/rgnbfdgcvb3r.jpeg\"},{\"id\":\"5\",\"firstname\":\"Josh\",\"infix\":\"\",\"lastname\":\"Brolin\",\"date_of_birth\":\"1968-02-12T00:00:00.000Z\",\"origin\":\"USA\",\"image_path\":\"https://annexbios-server.onrender.com/img/k124e9ck123kmck/sdfee4tg.jpeg\"},{\"id\":\"6\",\"firstname\":\"Zazie\",\"infix\":\"\",\"lastname\":\"Beetz\",\"date_of_birth\":\"1991-06-01T00:00:00.000Z\",\"origin\":\"Germany\",\"image_path\":\"https://annexbios-server.onrender.com/img/k124e9ck123kmck/dvfsresgvrs4.jpeg\"},{\"id\":\"7\",\"firstname\":\"James\",\"infix\":\"\",\"lastname\":\"Corden\",\"date_of_birth\":\"1978-08-22T00:00:00.000Z\",\"origin\":\"UK\",\"image_path\":\"https://annexbios-server.onrender.com/img/k124e9ck123kmck/345thbfvd.jpeg\"},{\"id\":\"8\",\"firstname\":\"Domhnall\",\"infix\":\"\",\"lastname\":\"Gleeson\",\"date_of_birth\":\"1983-05-12T00:00:00.000Z\",\"origin\":\"Ireland\",\"image_path\":\"https://annexbios-server.onrender.com/img/k124e9ck123kmck/asdf43t3.jpeg\"},{\"id\":\"9\",\"firstname\":\"Daisy\",\"infix\":\"\",\"lastname\":\"Ridley\",\"date_of_birth\":\"1992-04-10T00:00:00.000Z\",\"origin\":\"UK\",\"image_path\":\"https://annexbios-server.onrender.com/img/k124e9ck123kmck/gnfdcb54.jpeg\"},{\"id\":\"10\",\"firstname\":\"Alden\",\"infix\":\"\",\"lastname\":\"Ehrenreich\",\"date_of_birth\":\"1989-11-22T00:00:00.000Z\",\"origin\":\"USA\",\"image_path\":\"https://annexbios-server.onrender.com/img/k124e9ck123kmck/3dfgrdh4.jpeg\"},{\"id\":\"11\",\"firstname\":\"Woody\",\"infix\":\"\",\"lastname\":\"Harrelson\",\"date_of_birth\":\"1961-07-23T00:00:00.000Z\",\"origin\":\"USA\",\"image_path\":\"https://annexbios-server.onrender.com/img/k124e9ck123kmck/asdfe4tt.jpeg\"},{\"id\":\"12\",\"firstname\":\"Emilia\",\"infix\":\"\",\"lastname\":\"Clarke\",\"date_of_birth\":\"1986-10-23T00:00:00.000Z\",\"origin\":\"UK\",\"image_path\":\"https://annexbios-server.onrender.com/img/k124e9ck123kmck/sef4rwe5tyfb.jpeg\"}]},{\"id\":\"5\",\"title\":\"Deadpool 2\",\"description\":\"After surviving a near-fatal bovine attack, Wade Wilson struggles to fulfill his dream of becoming Mayberrys hottest bartender while also learning to cope with losing his sense of taste.\",\"rating\":\"4.0\",\"duration\":\"02:00:00\",\"release_date\":\"2018-05-17T00:00:00.000Z\",\"age_restriction\":\"16\",\"banner_path\":\"https://annexbios-server.onrender.com/img/k124e9ck123kmck/caslk4012v813jkv09.jpg\",\"price\":\"14\",\"actors\":[{\"id\":\"1\",\"firstname\":\"Matthew\",\"infix\":\"David\",\"lastname\":\"McConaughey\",\"date_of_birth\":\"1969-04-11T00:00:00.000Z\",\"origin\":\"USA\",\"image_path\":\"https://annexbios-server.onrender.com/img/k124e9ck123kmck/bkjbkjdg4t4.jpeg\"},{\"id\":\"3\",\"firstname\":\"Bryce\",\"infix\":\"Dallas\",\"lastname\":\"Howard\",\"date_of_birth\":\"1981-03-02T00:00:00.000Z\",\"origin\":\"USA\",\"image_path\":\"https://annexbios-server.onrender.com/img/k124e9ck123kmck/fesw4r3grbe.jpeg\"},{\"id\":\"4\",\"firstname\":\"Rafe\",\"infix\":\"\",\"lastname\":\"Spall\",\"date_of_birth\":\"1983-03-10T00:00:00.000Z\",\"origin\":\"UK\",\"image_path\":\"https://annexbios-server.onrender.com/img/k124e9ck123kmck/rgnbfdgcvb3r.jpeg\"},{\"id\":\"5\",\"firstname\":\"Josh\",\"infix\":\"\",\"lastname\":\"Brolin\",\"date_of_birth\":\"1968-02-12T00:00:00.000Z\",\"origin\":\"USA\",\"image_path\":\"https://annexbios-server.onrender.com/img/k124e9ck123kmck/sdfee4tg.jpeg\"},{\"id\":\"6\",\"firstname\":\"Zazie\",\"infix\":\"\",\"lastname\":\"Beetz\",\"date_of_birth\":\"1991-06-01T00:00:00.000Z\",\"origin\":\"Germany\",\"image_path\":\"https://annexbios-server.onrender.com/img/k124e9ck123kmck/dvfsresgvrs4.jpeg\"},{\"id\":\"7\",\"firstname\":\"James\",\"infix\":\"\",\"lastname\":\"Corden\",\"date_of_birth\":\"1978-08-22T00:00:00.000Z\",\"origin\":\"UK\",\"image_path\":\"https://annexbios-server.onrender.com/img/k124e9ck123kmck/345thbfvd.jpeg\"},{\"id\":\"8\",\"firstname\":\"Domhnall\",\"infix\":\"\",\"lastname\":\"Gleeson\",\"date_of_birth\":\"1983-05-12T00:00:00.000Z\",\"origin\":\"Ireland\",\"image_path\":\"https://annexbios-server.onrender.com/img/k124e9ck123kmck/asdf43t3.jpeg\"},{\"id\":\"9\",\"firstname\":\"Daisy\",\"infix\":\"\",\"lastname\":\"Ridley\",\"date_of_birth\":\"1992-04-10T00:00:00.000Z\",\"origin\":\"UK\",\"image_path\":\"https://annexbios-server.onrender.com/img/k124e9ck123kmck/gnfdcb54.jpeg\"},{\"id\":\"10\",\"firstname\":\"Alden\",\"infix\":\"\",\"lastname\":\"Ehrenreich\",\"date_of_birth\":\"1989-11-22T00:00:00.000Z\",\"origin\":\"USA\",\"image_path\":\"https://annexbios-server.onrender.com/img/k124e9ck123kmck/3dfgrdh4.jpeg\"},{\"id\":\"11\",\"firstname\":\"Woody\",\"infix\":\"\",\"lastname\":\"Harrelson\",\"date_of_birth\":\"1961-07-23T00:00:00.000Z\",\"origin\":\"USA\",\"image_path\":\"https://annexbios-server.onrender.com/img/k124e9ck123kmck/asdfe4tt.jpeg\"},{\"id\":\"12\",\"firstname\":\"Emilia\",\"infix\":\"\",\"lastname\":\"Clarke\",\"date_of_birth\":\"1986-10-23T00:00:00.000Z\",\"origin\":\"UK\",\"image_path\":\"https://annexbios-server.onrender.com/img/k124e9ck123kmck/sef4rwe5tyfb.jpeg\"}]},{\"id\":\"6\",\"title\":\"Inception\",\"description\":\"Een dief die dromen kan binnen dringen en ideeën steelt, wordt ingehuurd voor een onmogelijke taak: in plaats van iets te stelen, moet hij een idee inplanten.\",\"rating\":\"4.7\",\"duration\":\"02:28:00\",\"release_date\":\"2010-07-16T00:00:00.000Z\",\"age_restriction\":\"13\",\"banner_path\":\"https://annexbios-server.onrender.com/img/k124e9ck123kmck/iv51nf91md01k49vk1l.jpg\",\"price\":\"15\",\"actors\":[{\"id\":\"1\",\"firstname\":\"Matthew\",\"infix\":\"David\",\"lastname\":\"McConaughey\",\"date_of_birth\":\"1969-04-11T00:00:00.000Z\",\"origin\":\"USA\",\"image_path\":\"https://annexbios-server.onrender.com/img/k124e9ck123kmck/bkjbkjdg4t4.jpeg\"},{\"id\":\"3\",\"firstname\":\"Bryce\",\"infix\":\"Dallas\",\"lastname\":\"Howard\",\"date_of_birth\":\"1981-03-02T00:00:00.000Z\",\"origin\":\"USA\",\"image_path\":\"https://annexbios-server.onrender.com/img/k124e9ck123kmck/fesw4r3grbe.jpeg\"},{\"id\":\"4\",\"firstname\":\"Rafe\",\"infix\":\"\",\"lastname\":\"Spall\",\"date_of_birth\":\"1983-03-10T00:00:00.000Z\",\"origin\":\"UK\",\"image_path\":\"https://annexbios-server.onrender.com/img/k124e9ck123kmck/rgnbfdgcvb3r.jpeg\"},{\"id\":\"5\",\"firstname\":\"Josh\",\"infix\":\"\",\"lastname\":\"Brolin\",\"date_of_birth\":\"1968-02-12T00:00:00.000Z\",\"origin\":\"USA\",\"image_path\":\"https://annexbios-server.onrender.com/img/k124e9ck123kmck/sdfee4tg.jpeg\"},{\"id\":\"6\",\"firstname\":\"Zazie\",\"infix\":\"\",\"lastname\":\"Beetz\",\"date_of_birth\":\"1991-06-01T00:00:00.000Z\",\"origin\":\"Germany\",\"image_path\":\"https://annexbios-server.onrender.com/img/k124e9ck123kmck/dvfsresgvrs4.jpeg\"},{\"id\":\"7\",\"firstname\":\"James\",\"infix\":\"\",\"lastname\":\"Corden\",\"date_of_birth\":\"1978-08-22T00:00:00.000Z\",\"origin\":\"UK\",\"image_path\":\"https://annexbios-server.onrender.com/img/k124e9ck123kmck/345thbfvd.jpeg\"},{\"id\":\"8\",\"firstname\":\"Domhnall\",\"infix\":\"\",\"lastname\":\"Gleeson\",\"date_of_birth\":\"1983-05-12T00:00:00.000Z\",\"origin\":\"Ireland\",\"image_path\":\"https://annexbios-server.onrender.com/img/k124e9ck123kmck/asdf43t3.jpeg\"},{\"id\":\"9\",\"firstname\":\"Daisy\",\"infix\":\"\",\"lastname\":\"Ridley\",\"date_of_birth\":\"1992-04-10T00:00:00.000Z\",\"origin\":\"UK\",\"image_path\":\"https://annexbios-server.onrender.com/img/k124e9ck123kmck/gnfdcb54.jpeg\"},{\"id\":\"10\",\"firstname\":\"Alden\",\"infix\":\"\",\"lastname\":\"Ehrenreich\",\"date_of_birth\":\"1989-11-22T00:00:00.000Z\",\"origin\":\"USA\",\"image_path\":\"https://annexbios-server.onrender.com/img/k124e9ck123kmck/3dfgrdh4.jpeg\"},{\"id\":\"11\",\"firstname\":\"Woody\",\"infix\":\"\",\"lastname\":\"Harrelson\",\"date_of_birth\":\"1961-07-23T00:00:00.000Z\",\"origin\":\"USA\",\"image_path\":\"https://annexbios-server.onrender.com/img/k124e9ck123kmck/asdfe4tt.jpeg\"},{\"id\":\"12\",\"firstname\":\"Emilia\",\"infix\":\"\",\"lastname\":\"Clarke\",\"date_of_birth\":\"1986-10-23T00:00:00.000Z\",\"origin\":\"UK\",\"image_path\":\"https://annexbios-server.onrender.com/img/k124e9ck123kmck/sef4rwe5tyfb.jpeg\"}]}]');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `contact_title` char(50) NOT NULL,
  `contact_text` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `contact_title`, `contact_text`) VALUES
(1, 'Customer Support', 'Available 24/7'),
(2, 'Ticket Sales', 'Book tickets online'),
(3, 'General Inquiry', 'Contact us via email');

-- --------------------------------------------------------

--
-- Table structure for table `movieagenda`
--

CREATE TABLE `movieagenda` (
  `movie_id` varchar(50) NOT NULL,
  `agenda_startdate` date NOT NULL,
  `agenda_enddate` date NOT NULL,
  `tijdstip` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movieagenda`
--

INSERT INTO `movieagenda` (`movie_id`, `agenda_startdate`, `agenda_enddate`, `tijdstip`) VALUES
('1', '2024-09-24', '2024-09-24', '19:00:00'),
('2', '2024-09-24', '2024-09-24', '19:00:00'),
('3', '2024-09-24', '2024-09-24', '19:00:00'),
('4', '2024-09-24', '2024-09-24', '19:00:00'),
('5', '2024-09-24', '2024-09-24', '19:00:00'),
('6', '2024-09-24', '2024-09-24', '19:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` varchar(50) NOT NULL,
  `movie_image` varchar(255) NOT NULL,
  `movie` varchar(255) NOT NULL,
  `release_date` date NOT NULL,
  `description` text NOT NULL,
  `genre` varchar(100) DEFAULT NULL,
  `movie_length` varchar(10) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `imbd_score` decimal(3,1) DEFAULT NULL,
  `director` varchar(255) DEFAULT NULL,
  `actors_1` varchar(255) DEFAULT NULL,
  `actors_2` varchar(255) DEFAULT NULL,
  `actors_3` varchar(255) DEFAULT NULL,
  `actors_4` varchar(255) DEFAULT NULL,
  `actor_pictures_1` varchar(255) DEFAULT NULL,
  `actor_pictures_2` varchar(255) DEFAULT NULL,
  `actor_pictures_3` varchar(255) DEFAULT NULL,
  `actor_pictures_4` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `movie_image`, `movie`, `release_date`, `description`, `genre`, `movie_length`, `country`, `imbd_score`, `director`, `actors_1`, `actors_2`, `actors_3`, `actors_4`, `actor_pictures_1`, `actor_pictures_2`, `actor_pictures_3`, `actor_pictures_4`) VALUES
('1', 'https://annexbios-server.onrender.com/img/k124e9ck123kmck/fkm123kvkm6210fkl204c.jpg', 'INTERSTELLAR (10TH ANNIVERSARY)', '2020-06-04', 'Onze tijd op aarde lijkt voorbij, dus begint een groep ontdekkingsreizigers aan de belangrijkste missie uit de geschiedenis van de mens. Ze gaan op zoek naar een plek in de ruimte waar de mensheid kan voortbestaan.', '', '02:44:00', 'USA', 4.0, '', 'Matthew McConaughey', 'Bryce Howard', 'Rafe Spall', 'Josh Brolin', 'https://annexbios-server.onrender.com/img/k124e9ck123kmck/bkjbkjdg4t4.jpeg', 'https://annexbios-server.onrender.com/img/k124e9ck123kmck/fesw4r3grbe.jpeg', 'https://annexbios-server.onrender.com/img/k124e9ck123kmck/rgnbfdgcvb3r.jpeg', 'https://annexbios-server.onrender.com/img/k124e9ck123kmck/sdfee4tg.jpeg'),
('2', 'https://annexbios-server.onrender.com/img/k124e9ck123kmck/vkm214mksv0a9m32.jpg', 'Fight Club', '1999-10-15', 'Een depressieve man die lijdt aan slapeloosheid, raakt verwikkeld in een ondergrondse vechtclub onder leiding van de charismatische Tyler Durden, wat leidt tot chaos en zelfdestructie.', '', '02:19:00', 'USA', 4.8, '', 'Bryce Howard', 'Rafe Spall', 'Josh Brolin', 'Zazie Beetz', 'https://annexbios-server.onrender.com/img/k124e9ck123kmck/fesw4r3grbe.jpeg', 'https://annexbios-server.onrender.com/img/k124e9ck123kmck/rgnbfdgcvb3r.jpeg', 'https://annexbios-server.onrender.com/img/k124e9ck123kmck/sdfee4tg.jpeg', 'https://annexbios-server.onrender.com/img/k124e9ck123kmck/dvfsresgvrs4.jpeg'),
('3', 'https://annexbios-server.onrender.com/img/k124e9ck123kmck/vki14v901mvk.jpeg', 'Jurassic World: Fallen Kingdom', '2018-06-06', 'When the islands dormant volcano begins roaring to life, Owen and Claire mount a campaign to rescue the remaining dinosaurs from this extinction-level event.', '', '02:08:00', 'USA', 4.1, '', 'Matthew McConaughey', 'Bryce Howard', 'Rafe Spall', 'Josh Brolin', 'https://annexbios-server.onrender.com/img/k124e9ck123kmck/bkjbkjdg4t4.jpeg', 'https://annexbios-server.onrender.com/img/k124e9ck123kmck/fesw4r3grbe.jpeg', 'https://annexbios-server.onrender.com/img/k124e9ck123kmck/rgnbfdgcvb3r.jpeg', 'https://annexbios-server.onrender.com/img/k124e9ck123kmck/sdfee4tg.jpeg'),
('4', 'https://annexbios-server.onrender.com/img/k124e9ck123kmck/vkltop34123km12f9lf.jpeg', 'Pieter Konijn', '2018-03-21', 'Peter Rabbits feud with Mr. McGregor escalates to greater heights as both compete for the affections of the kind animal lover next door.', '', '01:35:00', 'USA', 3.8, '', 'Matthew McConaughey', 'Bryce Howard', 'Rafe Spall', 'Josh Brolin', 'https://annexbios-server.onrender.com/img/k124e9ck123kmck/bkjbkjdg4t4.jpeg', 'https://annexbios-server.onrender.com/img/k124e9ck123kmck/fesw4r3grbe.jpeg', 'https://annexbios-server.onrender.com/img/k124e9ck123kmck/rgnbfdgcvb3r.jpeg', 'https://annexbios-server.onrender.com/img/k124e9ck123kmck/sdfee4tg.jpeg'),
('5', 'https://annexbios-server.onrender.com/img/k124e9ck123kmck/caslk4012v813jkv09.jpg', 'Deadpool 2', '2018-05-17', 'After surviving a near-fatal bovine attack, Wade Wilson struggles to fulfill his dream of becoming Mayberrys hottest bartender while also learning to cope with losing his sense of taste.', '', '02:00:00', 'USA', 4.0, '', 'Matthew McConaughey', 'Bryce Howard', 'Rafe Spall', 'Josh Brolin', 'https://annexbios-server.onrender.com/img/k124e9ck123kmck/bkjbkjdg4t4.jpeg', 'https://annexbios-server.onrender.com/img/k124e9ck123kmck/fesw4r3grbe.jpeg', 'https://annexbios-server.onrender.com/img/k124e9ck123kmck/rgnbfdgcvb3r.jpeg', 'https://annexbios-server.onrender.com/img/k124e9ck123kmck/sdfee4tg.jpeg'),
('6', 'https://annexbios-server.onrender.com/img/k124e9ck123kmck/iv51nf91md01k49vk1l.jpg', 'Inception', '2010-07-16', 'Een dief die dromen kan binnen dringen en ideeën steelt, wordt ingehuurd voor een onmogelijke taak: in plaats van iets te stelen, moet hij een idee inplanten.', '', '02:28:00', 'USA', 4.7, '', 'Matthew McConaughey', 'Bryce Howard', 'Rafe Spall', 'Josh Brolin', 'https://annexbios-server.onrender.com/img/k124e9ck123kmck/bkjbkjdg4t4.jpeg', 'https://annexbios-server.onrender.com/img/k124e9ck123kmck/fesw4r3grbe.jpeg', 'https://annexbios-server.onrender.com/img/k124e9ck123kmck/rgnbfdgcvb3r.jpeg', 'https://annexbios-server.onrender.com/img/k124e9ck123kmck/sdfee4tg.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `purchase_id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `purchase_date` date NOT NULL,
  `purchase_timestamp` time NOT NULL,
  `purchase_seats` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `purchase_name` varchar(20) NOT NULL,
  `purchase_last_name` varchar(20) NOT NULL,
  `purchase_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`purchase_id`, `movie_id`, `purchase_date`, `purchase_timestamp`, `purchase_seats`, `purchase_name`, `purchase_last_name`, `purchase_email`) VALUES
(53, 1, '2024-09-24', '19:00:00', '[\"{\"seat\": [11, 10], \"ticketType\": \"0\"}\"]', 'asdf', 'sadfa', 'dasf');

-- --------------------------------------------------------

--
-- Table structure for table `shipments`
--

CREATE TABLE `shipments` (
  `shipment_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `shipment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shipments`
--

INSERT INTO `shipments` (`shipment_id`, `order_id`, `shipment_date`) VALUES
(1, 201, '2024-09-01'),
(2, 202, '2024-09-02'),
(3, 203, '2024-09-03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `api`
--
ALTER TABLE `api`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movieagenda`
--
ALTER TABLE `movieagenda`
  ADD PRIMARY KEY (`movie_id`,`agenda_startdate`,`agenda_enddate`,`tijdstip`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`purchase_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `api`
--
ALTER TABLE `api`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `purchase_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `movieagenda`
--
ALTER TABLE `movieagenda`
  ADD CONSTRAINT `movieagenda_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
