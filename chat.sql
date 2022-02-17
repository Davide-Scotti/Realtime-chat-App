-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Feb 17, 2022 alle 11:52
-- Versione del server: 10.1.38-MariaDB
-- Versione PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat`
--
CREATE DATABASE IF NOT EXISTS `chat` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `chat`;

-- --------------------------------------------------------

--
-- Struttura della tabella `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(41, 987287229, 1418429071, '4PaVV8LtUijEYKDI0Js+Ew=='),
(42, 1418429071, 987287229, '4fqaXc6pUC6JcfWE'),
(43, 987287229, 1418429071, 'zfCaGIOoESvIJfDa14k4DPuBeZiL/0j41ug+4A=='),
(44, 1418429071, 987287229, 'xfaaUZqi'),
(45, 1418429071, 987287229, 'xvuSWZ2qUz6Rd+7a'),
(46, 987287229, 1418429071, 'xfCATIe5WA=='),
(47, 1418429071, 987287229, 'xeqaQoeiXyaW'),
(48, 987287229, 987287229, '0+2bTo/tXjLdYu/Syp0='),
(49, 146184221, 987287229, '4PaVV86gUDXAZKybx5U6SbqUa5iWtA=='),
(50, 1475385190, 987287229, '7vqHS4ft8u+JdenOhJw4Xu6CP8PW'),
(51, 987287229, 1475385190, '5tfUVIHtQiiJY+HYx5M4DOmEd5CZ5Afikw=='),
(52, 146184221, 1475385190, '8PCaV864X2fdcO+bw4g2Qv6CP5+e5QeM8qkTyN0='),
(53, 1475385190, 146184221, 'yvDUVoHt'),
(54, 987287229, 146184221, '4fqaXc6pUC6JcfWE'),
(55, 146184221, 987287229, '0PqZSJyoESZqt6DPy4p3QfuVdpg='),
(56, 987287229, 146184221, 'wveVUM6+XinGJaDYy5QjSfSTfg==');

-- --------------------------------------------------------

--
-- Struttura della tabella `users`
--

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `unique_id` int(200) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(400) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `users`
--

INSERT INTO `users` (`users_id`, `unique_id`, `fname`, `lname`, `email`, `password`, `img`, `status`) VALUES
(4, 987287229, 'Davide', 'Scotti', 'scotti.17115@gmail.com', 'x+yXV5q5WHea', '1644945829io.jpg', 'Active now'),
(5, 1418429071, 'Marta', 'Panichi', 'marta@gmail.com', 'zv6GTI8=', '1644945855marta.jpg', 'Active now'),
(6, 1475385190, 'Cristiano', 'Ronaldo', 'ronaldo@gmail.com', '0fCaWYKpXg==', '1645094401images.jpeg', 'Active now'),
(7, 146184221, 'Maria', 'De Filippi', 'maria@gmail.com', 'zv6GUY8=', '1645094470maria.jpeg', 'Active now');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indici per le tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT per la tabella `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
