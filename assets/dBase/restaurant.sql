-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Počítač: localhost
-- Vytvořeno: Ned 13. srp 2017, 20:19
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
  `drinkNameCz` varchar(255) NOT NULL,
  `drinkNameEng` varchar(255) NOT NULL,
  `drinkPrice` int(5) NOT NULL,
  `content` varchar(8) NOT NULL,
  `drinkType` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Vypisuji data pro tabulku `drink`
--

INSERT INTO `drink` (`id`, `drinkNameCz`, `drinkNameEng`, `drinkPrice`, `content`, `drinkType`, `image`) VALUES
(1, 'Espresso', 'Espresso', 35, '', 1, ''),
(2, 'Espresso lungo', 'Espresso lungo', 35, '', 1, ''),
(3, 'Capuccino', 'Capuccino', 40, '', 1, ''),
(4, 'Vídeňská káva', 'Vídeňská káva', 45, '', 1, ''),
(5, 'Caffe latte', 'Caffe latte', 45, '', 1, ''),
(6, 'Čaj Ahmad', 'Ahmad tea', 30, '', 1, ''),
(7, 'Čaj z čerstvé máty', 'Fresh mint tea', 35, '', 1, ''),
(8, 'Aperol spritz', 'Aperol spritz', 70, '15 cl', 2, ''),
(9, 'Prosecco extra dry', 'Prosecco extra dry', 45, '10 cl', 2, ''),
(10, 'Martini extra dry', 'Martini extra dry', 55, '8 cl', 2, ''),
(11, 'Martini bianco', 'Martini bianco', 55, '8 cl', 2, ''),
(12, 'Martini rosso', 'Martini rosso', 55, '8 cl', 2, ''),
(13, 'Staropramen 10°', 'Staropramen 10°', 26, '0,5 l', 3, ''),
(14, 'Staropramen 10°', 'Staropramen 10°', 18, '0,3 l', 3, ''),
(15, 'Granát polotmavý 11°', 'Granát polotmavý 11°', 28, '0,4 l', 3, ''),
(16, 'Granát polotmavý 11°', 'Granát polotmavý 11°', 21, '0,3 l', 3, ''),
(17, 'Pilsner Urquell láhev', 'Pilsner Urquell bottle', 34, '0,5 l', 3, ''),
(18, 'Nealkoholické pivo', 'Non-alcoholic beer', 25, '0,5 l', 3, ''),
(19, 'Nealkoholické pivo', 'Non-alcoholic beer', 25, '0,3 l', 3, ''),
(20, 'Chardonnay voc La Cantina', 'Chardonnay voc La Cantina', 35, '15 cl', 4, ''),
(21, 'Ryzlink Vlašský', 'Ryzlink Vlašský', 35, '15 cl', 4, ''),
(22, 'Merlot doc La Cantina', 'Merlot doc La Cantina', 35, '15 cl', 4, ''),
(23, 'Aquila neperlivá', 'Aquila still mineral water', 25, '0,33 l', 5, ''),
(24, 'Aquila neperlivá', 'Aquila still mineral water', 48, '0,75 l', 5, ''),
(25, 'Mattoni perlivá', 'Mattoni sparkling mineral water', 25, '0,33 l', 5, ''),
(26, 'Mattoni perlivá', 'Mattoni sparkling mineral water', 48, '0,75 l', 5, ''),
(28, 'Mattoni jemně perlivá', 'Mattoni gently sparkling mineral water', 25, '0,33 l', 5, ''),
(29, 'Mattoni jemně perlivá', 'Mattoni gently sparkling mineral water', 48, '0,75 l', 5, ''),
(30, 'Tonic Schweppes', 'Tonic Schweppes', 30, '0,25 l', 5, ''),
(31, 'Ginger Ale Schweppes', 'Ginger Ale Schweppes', 30, '0,25 l', 5, ''),
(32, 'Cola Schweppes', 'Cola Schweppes', 30, '0,25 l', 5, ''),
(33, 'Džusy Granini dle nabídky', 'Juice Granini', 32, '0,2 l', 5, ''),
(34, 'Domácí limonáda dle nabídky', 'Homemade lemonade', 35, '0,4 l', 5, ''),
(35, 'Točená limonáda cola', 'Lemonade from the tap Cola flavour', 6, '0,1 l', 5, ''),
(36, 'Točená limonáda malina', 'Lemonade from the tap Raspberry flavour', 6, '0,1 l', 5, ''),
(37, 'Vodka', 'Vodka', 40, '4 cl', 6, ''),
(38, 'Rum Tuzemský', 'Rum Tuzemský', 28, '4 cl', 6, ''),
(39, 'Fernet Stock', 'Fernet Stock', 30, '4 cl', 6, ''),
(40, 'Fernet Stock Citrus', 'Fernet Stock Citrus', 30, '4cl', 6, ''),
(41, 'Jägermeister', 'Jägermeister', 45, '4 cl', 6, ''),
(42, 'Slivovice', 'Slivovice', 40, '4 cl', 6, ''),
(43, 'Hruškovice', 'Hruškovice', 40, '4 cl', 6, ''),
(44, 'Gin', 'Gin', 45, '4 cl', 6, ''),
(45, 'Havana rum', 'Havana rum', 45, '4 cl', 6, ''),
(46, 'Becherovka', 'Becherovka', 35, '4 cl', 6, ''),
(47, 'Jameson', 'Jameson', 45, '4 cl', 6, ''),
(49, 'Tullamore Dew', 'Tullamore Dew', 45, '4 cl', 6, ''),
(50, 'Peprmint likér', 'Peprmint likér', 28, '4 cl', 6, ''),
(51, 'Griotka', 'Griotka', 28, '4 cl', 6, ''),
(52, 'Jack Daniel‘s', 'Jack Daniel‘s', 55, '4 cl', 6, ''),
(53, 'Rum Matusalem', 'Rum Matusalem', 85, '4 cl', 6, ''),
(54, 'Hannessy VS', 'Hannessy VS', 85, '4 cl', 6, ''),
(55, 'Laphroaig Single Malt', 'Laphroaig Single Malt', 85, '4 cl', 6, ''),
(56, 'Bohemia sekt brut', 'Bohemia sekt brut', 260, '0,75 l', 7, ''),
(57, 'Prosecco extra dry', 'Prosecco extra dry', 270, '0,75 l', 7, ''),
(58, 'Veltlínské zelené Kosík', 'Veltlínské zelené Kosík', 235, '0,75 l', 7, ''),
(59, 'Pinot Grigio Corte delle rose', 'Pinot Grigio Corte delle rose', 235, '0,75 l', 7, ''),
(60, 'Frankovka rosé Veverka', 'Frankovka rosé Veverka', 220, '0,75 l', 7, ''),
(61, 'Modrý portugal Veverka', 'Modrý portugal Veverka', 195, '0,75 l', 7, ''),
(62, 'Primitivo Botter', 'Primitivo Botter', 290, '0,75 l', 7, '');

-- --------------------------------------------------------

--
-- Struktura tabulky `drinktype`
--

CREATE TABLE `drinktype` (
  `id` int(11) NOT NULL,
  `drinkTypeCz` varchar(255) NOT NULL,
  `drinkTypeEng` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Vypisuji data pro tabulku `drinktype`
--

INSERT INTO `drinktype` (`id`, `drinkTypeCz`, `drinkTypeEng`) VALUES
(1, 'Teplé népoje', 'Hot drinks'),
(2, 'Aperitivy', 'Aperitifs'),
(3, 'Pivo', 'Beer'),
(4, 'Rozlévaná vína', 'Wines by glass'),
(5, 'Nealkoholické nápoje', 'Non-alcoholic beverages'),
(6, 'Destiláty a likéry', 'Spirits'),
(7, 'Lahvová vína', 'Wine list');

-- --------------------------------------------------------

--
-- Struktura tabulky `food`
--

CREATE TABLE `food` (
  `id` int(11) NOT NULL,
  `foodNameCz` varchar(255) NOT NULL,
  `foodNameEng` varchar(255) NOT NULL,
  `foodPrice` int(5) NOT NULL,
  `weight` int(5) NOT NULL,
  `alergens` varchar(30) NOT NULL,
  `image` varchar(255) NOT NULL,
  `foodType` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Vypisuji data pro tabulku `food`
--

INSERT INTO `food` (`id`, `foodNameCz`, `foodNameEng`, `foodPrice`, `weight`, `alergens`, `image`, `foodType`) VALUES
(1, 'Řecký salát s balkánským sýrem a olivami', 'Greek salad with balcan cheese and olives', 109, 150, '', '', 1),
(2, 'Listový salát s grilovaným kuřecím masem, zeleninou, pestem a hoblinkami parmezánu', 'Grilled chicken salad with pesto and parmesan', 139, 150, '', '', 1),
(3, 'Mozzarella s rajčaty s bazalkovým pestem', 'Mozzarella and tomato salad', 89, 150, '', '', 1),
(4, 'Tlačenka světlá i tmavá s cibulí a octem, pečivo', 'Collared pork with onions and vinegar', 55, 150, '', '', 1),
(5, 'Grilovaná klobása, křen, hořčice, pečivo', 'Grilled sausage with mustard and horse raddish', 65, 150, '', '', 1),
(6, 'Nakládaný sýr s feferonkou', 'Pickled cheese with chilli peppers', 65, 100, '', '', 1),
(7, 'Kuřecí vývar s masem a zeleninou', 'Chicken broth with vegetable', 35, 150, '', '', 2),
(8, 'Dle denní nabídky', 'Soup of the day', 30, 150, '', '', 2),
(9, 'Konfitované kachní stehno s červeným zelím s jablky, variace knedlíků', 'Duck leg confit with red cabbage and variation of dumplings', 159, 150, '', '', 3),
(10, 'Schwarzenberský zvěřinový guláš s cibulkou a brusinkami, variace knedlíků', 'Venison goulash with onions, cramberries and variation of dumplings', 145, 150, '', '', 3),
(11, 'Smažený vepřový řízek s lehkým bramborovým salátem', 'Fried pork schnitzel with light potato salad', 140, 200, '', '', 3),
(12, 'Smažený Eidam, vařený brambor s máslem a pažitkou, tatarská omáčka', 'Fried cheese „Eidam“ with boiled potatoes and tartare sauce', 140, 150, '', '', 3),
(13, 'Kuřecí prso pečené s kůží s rajčatovou omáčkou s olivami a kuskusem', 'Chicken breast with tomato olives sauce and couscous', 165, 150, '', '', 4),
(14, 'Pikantní kuřecí kari s kokosovým mlékem a jasmínovou rýží', 'Spicy chicken curry with coconut milk and jasmine rice', 170, 150, '', '', 4),
(15, 'Marinovaná krkovice na grilu s bylinkami a pečenými rozmarýnovými bramborami', 'Marinated pork neck steak with rosemary potatoes', 185, 250, '', '', 4),
(16, 'Hovězí burger „Knížecí“ s cheddarem, barbecue nebo samurai omáčkou, steakové hranolky', 'Beef burger „Knížecí“ with cheddar cheese, barbecue or samurai sauce with fries', 175, 150, '', '', 4),
(17, 'Kuřecí plátek na grilu s bramborem nebo hranolkami, ovocný kompot', 'Chicken steak with potatoes or fries with fruit compote', 85, 100, '', '', 5),
(18, 'Ovocné knedlíky s máslem a tvarohem 3ks', 'Stuffed fruit dumplings with cottage cheese and butter 3pcs', 75, 100, '', '', 5),
(19, 'Palačinka s marmeládou a ovocem', 'Panecakes with marmelade, fruits and whipped cream', 65, 100, '', '', 6),
(20, 'Domácí koláč dle nabídky', 'Homemade pie', 55, 100, '', '', 6),
(21, 'Zmrzlina pohár s ovocem a šlehačkou', 'Cup of ice cream with fruits and whipped cream', 70, 100, '', '', 6);

-- --------------------------------------------------------

--
-- Struktura tabulky `foodtype`
--

CREATE TABLE `foodtype` (
  `id` int(11) NOT NULL,
  `foodTypeCz` varchar(255) NOT NULL,
  `foodTypeEng` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Vypisuji data pro tabulku `foodtype`
--

INSERT INTO `foodtype` (`id`, `foodTypeCz`, `foodTypeEng`) VALUES
(1, 'Saláty a předkrmy', 'Salads and starters'),
(2, 'Polévky', 'Soups'),
(3, 'Česká klasika', 'Czech classics'),
(4, 'Naše speciality', 'Chef\'s specials'),
(5, 'Dětská jídla', 'For kids'),
(6, 'Dezerty a zmrzliny', 'Desserts');

--
-- Klíče pro exportované tabulky
--

--
-- Klíče pro tabulku `drink`
--
ALTER TABLE `drink`
  ADD PRIMARY KEY (`id`),
  ADD KEY `drinkType` (`drinkType`);

--
-- Klíče pro tabulku `drinktype`
--
ALTER TABLE `drinktype`
  ADD PRIMARY KEY (`id`);

--
-- Klíče pro tabulku `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`),
  ADD KEY `foodType` (`foodType`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT pro tabulku `drinktype`
--
ALTER TABLE `drinktype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pro tabulku `food`
--
ALTER TABLE `food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT pro tabulku `foodtype`
--
ALTER TABLE `foodtype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Omezení pro exportované tabulky
--

--
-- Omezení pro tabulku `drink`
--
ALTER TABLE `drink`
  ADD CONSTRAINT `drink_ibfk_1` FOREIGN KEY (`drinkType`) REFERENCES `drinktype` (`id`);

--
-- Omezení pro tabulku `food`
--
ALTER TABLE `food`
  ADD CONSTRAINT `food_ibfk_1` FOREIGN KEY (`foodType`) REFERENCES `foodtype` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
