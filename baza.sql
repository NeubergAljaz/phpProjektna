-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Gostitelj: 127.0.0.1
-- Čas nastanka: 10. jan 2021 ob 22.03
-- Različica strežnika: 10.4.17-MariaDB
-- Različica PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Zbirka podatkov: `dsr`
--

-- --------------------------------------------------------

--
-- Struktura tabele `kategorija`
--

CREATE TABLE `kategorija` (
  `Id_Kategorija` int(11) NOT NULL,
  `Naziv_Kategorije` varchar(10) COLLATE ucs2_slovenian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_slovenian_ci;

--
-- Odloži podatke za tabelo `kategorija`
--

INSERT INTO `kategorija` (`Id_Kategorija`, `Naziv_Kategorije`) VALUES
(1, 'Predjed'),
(2, 'Glavna jed'),
(3, 'Sladica'),
(4, 'Priloga');

-- --------------------------------------------------------

--
-- Struktura tabele `ocene_ponudba`
--

CREATE TABLE `ocene_ponudba` (
  `Id_Ocena_Ponudba` int(11) NOT NULL,
  `Ocena` int(10) NOT NULL,
  `FK_Uporabnik` int(10) NOT NULL,
  `FK_Ponudba` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_slovenian_ci;

--
-- Odloži podatke za tabelo `ocene_ponudba`
--

INSERT INTO `ocene_ponudba` (`Id_Ocena_Ponudba`, `Ocena`, `FK_Uporabnik`, `FK_Ponudba`) VALUES
(1, 1, 1, 1),
(2, 2, 2, 2),
(3, 3, 3, 3),
(4, 4, 4, 4);

-- --------------------------------------------------------

--
-- Struktura tabele `ponudba`
--

CREATE TABLE `ponudba` (
  `Id_Ponudba` int(10) NOT NULL,
  `Naziv` varchar(50) COLLATE ucs2_slovenian_ci NOT NULL,
  `Opis` varchar(500) COLLATE ucs2_slovenian_ci NOT NULL,
  `Sestavine` varchar(500) COLLATE ucs2_slovenian_ci NOT NULL,
  `FK_Kategorija` int(10) NOT NULL,
  `Cena` int(10) NOT NULL,
  `Slika` varchar(100) COLLATE ucs2_slovenian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_slovenian_ci;

--
-- Odloži podatke za tabelo `ponudba`
--

INSERT INTO `ponudba` (`Id_Ponudba`, `Naziv`, `Opis`, `Sestavine`, `FK_Kategorija`, `Cena`, `Slika`) VALUES
(1, 'Chop Suey', 'Chop suey s svinjino je pravi azijski žur na krožniku. Začinjeno, mehko meso z obilico hrustljave zelenjave. Priprava je zelo hitra in preprosta, poleg tega ponudi pravo eksplozijo okusov.', 'Puran, paprika, čebula, gobe-širaku, kalčki, bambus, sojina omaka.\r\nZačimbe: Poper, sol, limonska trava.', 2, 7, 'chopp.jpg'),
(2, 'Spomladanski zavitek', 'Klasična predjed iz kitajske restavracije z zelenjavo ter mletim mesom.', 'Kalčki, korenček, čebula, mleto meso(svinina) zavito v listnatem testu ter praženo. \r\nZačimbe: Sol.', 1, 3, 'sz.jpg'),
(3, 'Sladko kisla juha', 'Kislo pekoča juha je ena najbolj priljubljenih kitajskih jedi. Je posebej priljubljena zaradi svojega edinstvenega sladko-kislega okusa. V kitajskih restavracijah dobimo juho s piščančjim mesom. Vegetarijanska kislo pekoča juha po tem receptu pa je primerna tudi za vegetarijance oziroma ljudi, ki ne marajo mesa.', 'Piščančja jušna osnova, sezamovo olje, čebula, ingver, korenje, kalčki, gobe, jajce, beli kis.\r\nZačimbe: Sol.', 1, 2, 'sladkoK.jpg'),
(4, 'Solata s kalčki', 'Tradicionalna kitajska priloga, oziroma solata.', 'Kalčki, sojina omaka, mlada čebula, kis, sezamovo olje.', 4, 2, 'kalcki.jpg'),
(5, 'Piščanec v sladko kisli omaki', 'Popražen piščanec skupaj z zelenjavo v sladko kisli omaki.', 'Piščančje prsi, olje, paprika, jabolčni kis, sojina omaka, ananas.\r\nZačimbe:Poper, sol, sladkor.', 2, 5, 'skp.jpg'),
(13, 'Kitajski rezanci z govedino', 'Kitajski rezanci z govedino ali stir fry je hitro in zelo slastno azijsko kosilo, polno vitaminov, bogatega okusa.', 'Govejo meso, paprika, čebula, sojina omaka, sezam. Začimbe:Sol, sladkor.', 2, 7, 'govedina.jpg'),
(17, 'Pražene banane ', 'Pražene banane v listnatem testu prelite s čikolado.', 'Banana, listnato testo, sladkor.', 3, 3, 'banane.jpg'),
(18, 'Pražen sladoled', 'Vanilijev, čokoladen ter jagoden sladoled pražen v olju.', 'Sladoled, sladkor, preliv.', 3, 2, 'sladoled.jpg'),
(19, 'ftf', 'ftzfz', 'ftf', 1, 5, 'nekaj.jpg');

-- --------------------------------------------------------

--
-- Struktura tabele `ponudba_uporabnik`
--

CREATE TABLE `ponudba_uporabnik` (
  `Id_Ponudba_Uporabnik` int(10) NOT NULL,
  `FK_Uporabnik` int(10) NOT NULL,
  `FK_Ponudba` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_slovenian_ci;

-- --------------------------------------------------------

--
-- Struktura tabele `uporabnik`
--

CREATE TABLE `uporabnik` (
  `Id_Uporabnik` int(10) NOT NULL,
  `Ime` varchar(50) COLLATE ucs2_slovenian_ci NOT NULL,
  `Priimek` varchar(50) COLLATE ucs2_slovenian_ci NOT NULL,
  `Mail` varchar(50) COLLATE ucs2_slovenian_ci NOT NULL,
  `Uporabnisko_Ime` varchar(10) COLLATE ucs2_slovenian_ci NOT NULL,
  `Geslo` varchar(10) COLLATE ucs2_slovenian_ci NOT NULL,
  `Tip_Uporabnika` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_slovenian_ci;

--
-- Odloži podatke za tabelo `uporabnik`
--

INSERT INTO `uporabnik` (`Id_Uporabnik`, `Ime`, `Priimek`, `Mail`, `Uporabnisko_Ime`, `Geslo`, `Tip_Uporabnika`) VALUES
(1, 'Jaka', 'Novak', 'jaka.novak@gmail.com', 'Jaka1', 'ju', 0),
(2, 'Jana', 'Posel', 'jana.posel@gmail.com', 'Jana1', 'huih', 0),
(3, 'Ivan', 'Čerkezović', 'ivan.cerkezovic@gmail.com', 'Ivan1', 'huihu', 0),
(4, 'Ivanka', 'Kocbek', 'ivanka.kocbek@gmail.com', 'Ivanka1', 'huihiuhui', 0),
(10, 'aljaz', 'n', 'a.n@gmail.com', 'gzgzgz', '123', 0),
(11, 'Uros', 'Grabusnik', 'uros.grabusnik@gmail.com', 'Uros123', 'Geslonekaj', 0),
(12, 'Uros', 'Grabusnik', 'uros.grabusnik@gmail.com', 'Uros123', '1233', 0),
(13, 'f5tf5', 'f5f5f', 'a@gzgzg', 'gzgz', 'gz', 0),
(19, 'Aljaz', 'Neuberg', 'aljaz.neuberg@student.um.si', 'aljaz123', 'geslo123', 0),
(20, 'Igor', 'Gorjub', 'i.g@nekajj.com', 'Igor123', '$2y$12$WdD', 0),
(21, 'nekaj', 'ijjioji', 'a@erfjrio', 'jijij', '$2y$12$hR7', 0),
(22, 'aljaz', 'neuberg', 'a@mail', 'aljaz.n', '$2y$12$B1J', 0);

--
-- Indeksi zavrženih tabel
--

--
-- Indeksi tabele `kategorija`
--
ALTER TABLE `kategorija`
  ADD PRIMARY KEY (`Id_Kategorija`);

--
-- Indeksi tabele `ocene_ponudba`
--
ALTER TABLE `ocene_ponudba`
  ADD PRIMARY KEY (`Id_Ocena_Ponudba`),
  ADD KEY `FK_Uporabnik` (`FK_Uporabnik`,`FK_Ponudba`),
  ADD KEY `FK_Ponudba` (`FK_Ponudba`);

--
-- Indeksi tabele `ponudba`
--
ALTER TABLE `ponudba`
  ADD PRIMARY KEY (`Id_Ponudba`),
  ADD KEY `FKKategorija1` (`FK_Kategorija`);

--
-- Indeksi tabele `ponudba_uporabnik`
--
ALTER TABLE `ponudba_uporabnik`
  ADD PRIMARY KEY (`Id_Ponudba_Uporabnik`),
  ADD KEY `FKUporabnik1` (`FK_Uporabnik`),
  ADD KEY `FKPonudba1` (`FK_Ponudba`);

--
-- Indeksi tabele `uporabnik`
--
ALTER TABLE `uporabnik`
  ADD PRIMARY KEY (`Id_Uporabnik`);

--
-- AUTO_INCREMENT zavrženih tabel
--

--
-- AUTO_INCREMENT tabele `kategorija`
--
ALTER TABLE `kategorija`
  MODIFY `Id_Kategorija` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT tabele `ocene_ponudba`
--
ALTER TABLE `ocene_ponudba`
  MODIFY `Id_Ocena_Ponudba` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT tabele `ponudba`
--
ALTER TABLE `ponudba`
  MODIFY `Id_Ponudba` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT tabele `ponudba_uporabnik`
--
ALTER TABLE `ponudba_uporabnik`
  MODIFY `Id_Ponudba_Uporabnik` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT tabele `uporabnik`
--
ALTER TABLE `uporabnik`
  MODIFY `Id_Uporabnik` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Omejitve tabel za povzetek stanja
--

--
-- Omejitve za tabelo `ocene_ponudba`
--
ALTER TABLE `ocene_ponudba`
  ADD CONSTRAINT `ocene_ponudba_ibfk_1` FOREIGN KEY (`FK_Ponudba`) REFERENCES `ponudba` (`Id_Ponudba`),
  ADD CONSTRAINT `ocene_ponudba_ibfk_2` FOREIGN KEY (`FK_Uporabnik`) REFERENCES `uporabnik` (`Id_Uporabnik`);

--
-- Omejitve za tabelo `ponudba`
--
ALTER TABLE `ponudba`
  ADD CONSTRAINT `FKKategorija1` FOREIGN KEY (`FK_Kategorija`) REFERENCES `kategorija` (`Id_Kategorija`);

--
-- Omejitve za tabelo `ponudba_uporabnik`
--
ALTER TABLE `ponudba_uporabnik`
  ADD CONSTRAINT `FKPonudba1` FOREIGN KEY (`FK_Ponudba`) REFERENCES `ponudba` (`Id_Ponudba`),
  ADD CONSTRAINT `FKUporabnik1` FOREIGN KEY (`FK_Uporabnik`) REFERENCES `uporabnik` (`Id_Uporabnik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
