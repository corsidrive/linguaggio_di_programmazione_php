-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Nov 06, 2023 alle 09:50
-- Versione del server: 10.4.28-MariaDB
-- Versione PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `museo`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `museo`
--

DROP TABLE IF EXISTS `museo`;
CREATE TABLE `museo` (
  `museo_id` int(10) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `museo`
--

INSERT INTO `museo` (`museo_id`, `slug`, `nome`) VALUES
(2, 'mao', 'M.A.O. Museo D\'arte Orientale'),
(3, 'gam', 'G.A.M. Galleria D\'arte Moderna');

-- --------------------------------------------------------

--
-- Struttura della tabella `opera`
--

DROP TABLE IF EXISTS `opera`;
CREATE TABLE `opera` (
  `opera_id` int(10) NOT NULL,
  `autore` varchar(255) DEFAULT NULL,
  `titolo` varchar(255) NOT NULL,
  `datazione` varchar(50) DEFAULT NULL,
  `tecnica` varchar(50) DEFAULT NULL,
  `dimensioni` varchar(50) DEFAULT NULL,
  `immagine` varchar(255) NOT NULL,
  `museo_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `museo`
--
ALTER TABLE `museo`
  ADD PRIMARY KEY (`museo_id`);

--
-- Indici per le tabelle `opera`
--
ALTER TABLE `opera`
  ADD PRIMARY KEY (`opera_id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `museo`
--
ALTER TABLE `museo`
  MODIFY `museo_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la tabella `opera`
--
ALTER TABLE `opera`
  MODIFY `opera_id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
