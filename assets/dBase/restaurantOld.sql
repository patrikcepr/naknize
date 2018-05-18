-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Počítač: localhost
-- Vytvořeno: Úte 01. srp 2017, 12:19
-- Verze serveru: 5.6.34-log
-- Verze PHP: 5.6.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `restaurant`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `drink`
--

CREATE TABLE `drink` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `nameEng` varchar(255) NOT NULL,
  `price` int(5) NOT NULL,
  `content` varchar(8) NOT NULL,
  `drinkType` int(11) NOT NULL,
  `image` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabulky `drinktype`
--

CREATE TABLE `drinktype` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `nameEng` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabulky `food`
--

CREATE TABLE `food` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `nameEng` varchar(255) NOT NULL,
  `price` int(5) NOT NULL,
  `weight` int(5) NOT NULL,
  `alergens` varchar(30) NOT NULL,
  `image` varchar(255) NOT NULL,
  `foodType` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabulky `foodtype`
--

CREATE TABLE `foodtype` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `nameEng` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Klíče pro exportované tabulky
--

--
-- Klíče pro tabulku `drink`
--
ALTER TABLE `drink`
  ADD PRIMARY KEY (`id`);

--
-- Klíče pro tabulku `drinktype`
--
ALTER TABLE `drinktype`
  ADD PRIMARY KEY (`id`);

--
-- Klíče pro tabulku `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Klíče pro tabulku `foodtype`
--
ALTER TABLE `foodtype`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `drink`
--
ALTER TABLE `drink`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pro tabulku `drinktype`
--
ALTER TABLE `drinktype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pro tabulku `food`
--
ALTER TABLE `food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pro tabulku `foodtype`
--
ALTER TABLE `foodtype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
