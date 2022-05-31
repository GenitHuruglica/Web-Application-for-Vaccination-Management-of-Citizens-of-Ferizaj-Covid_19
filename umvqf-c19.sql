-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2021 at 10:26 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `umvqf-c19`
--

-- --------------------------------------------------------

--
-- Table structure for table `faza_v`
--

CREATE TABLE `faza_v` (
  `ID_Faza` int(11) NOT NULL,
  `Faza` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faza_v`
--

INSERT INTO `faza_v` (`ID_Faza`, `Faza`) VALUES
(1, 'Parë  - I'),
(2, 'Dytë - II');

-- --------------------------------------------------------

--
-- Table structure for table `perdoruesit`
--

CREATE TABLE `perdoruesit` (
  `PID` int(11) NOT NULL,
  `perdoruesi` varchar(50) NOT NULL,
  `fjalkalimi` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `perdoruesit`
--

INSERT INTO `perdoruesit` (`PID`, `perdoruesi`, `fjalkalimi`, `email`) VALUES
(1, 'Genit', '123', '');

-- --------------------------------------------------------

--
-- Table structure for table `qytetaret`
--

CREATE TABLE `qytetaret` (
  `ID_Q` int(20) NOT NULL,
  `Numri_Personal` int(11) NOT NULL,
  `Emri` varchar(50) NOT NULL,
  `Mbiemri` varchar(50) NOT NULL,
  `Mosha` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Tel` int(11) NOT NULL,
  `ID_Vendbanimi` int(11) NOT NULL,
  `ID_Vaksina` int(11) NOT NULL,
  `ID_Faza` int(11) NOT NULL,
  `Data_A` timestamp NOT NULL DEFAULT current_timestamp(),
  `Data_V` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Triggers `qytetaret`
--
DELIMITER $$
CREATE TRIGGER `datavaksines_d` BEFORE INSERT ON `qytetaret` FOR EACH ROW SET NEW.Data_V = DATE_ADD(NEW.Data_A,
                          INTERVAL 20 HOUR)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `shtepia_a_tdh`
--

CREATE TABLE `shtepia_a_tdh` (
  `ID` int(11) NOT NULL,
  `shtepia_a` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tedhenat`
--

CREATE TABLE `tedhenat` (
  `ID_Tedhenat` int(11) NOT NULL,
  `Titulli` varchar(200) NOT NULL,
  `Pershkrimi` varchar(500) DEFAULT NULL,
  `Dosje` varchar(500) DEFAULT NULL,
  `Pamja_Faqes` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tedhenat`
--

INSERT INTO `tedhenat` (`ID_Tedhenat`, `Titulli`, `Pershkrimi`, `Dosje`, `Pamja_Faqes`) VALUES
(1, 'Adresa', '<h5>Rr. Ymer Gashi, Ferizaj, Kosovë,  70000<br>\r\n						Tel: +383 278-840-772<br>\r\n					    e-mail: info@umvqf.net</h5>', ' ', 'fundifaqes_Adresa'),
(2, 'E_Drejta_Autorit', '<h5>© UMVQF-C19. Te gjitha te drejtat jane te rezervuara. © Kreditet : templated.co per shabllonin falas .</h5>', NULL, 'fundifaqes_E_Drejta_Autorit'),
(3, 'Rrjete_Sociale', '<ul class=\"icons\">\r\n						<li><a href=\"#\" class=\"icon fa-twitter\"><span class=\"label\">Twitter</span></a></li>\r\n						<li><a href=\"#\" class=\"icon fa-facebook\"><span class=\"label\">Facebook</span></a></li>\r\n						<li><a href=\"#\" class=\"icon fa-instagram\"><span class=\"label\">Instagram</span></a></li>\r\n						<li><a href=\"#\" class=\"icon fa-snapchat\"><span class=\"label\">Snapchat</span></a></li>\r\n					</ul>', NULL, 'fundifaqes_RrjeteSociale'),
(4, 'Uebaplikacioni për Menaxhimin e Vaksinimit të Qytetarëve të Ferizajit - COVID_19', NULL, NULL, 'Koka.A'),
(5, 'Uebaplikacioni për Menaxhimin e Vaksinimit të Qytetarëve të Ferizajit - COVID_19', NULL, NULL, 'Koka.P'),
(6, 'Meny', '<nav id=\"menu\">\r\n<ul class=\"links\">\r\n	<li><a href=\"ballina.php\">Ballina</a></li>\r\n	<li><a href=\"kerkesat.php\">Të Dhënat e Regjistruara</a></li>\r\n        <li><a href=\"perdoruesit.php\">Përdoruesit</a></li>\r\n	<li><a href=\"ckycu.php\">Ckycu</a></li>\r\n</ul>\r\n</nav>\r\n', '  ', 'Meny_Administratorit'),
(7, 'Meny', '<nav id=\"menu\">\r\n				<ul class=\"links\">\r\n					<li><a href=\"index.php\">Ballina</a></li>\r\n					<li><a href=\"kerkese.php\">Regjistrohu</a></li>\r\n\r\n					\r\n				</ul>\r\n			</nav>', ' ', 'Meny_Perdoruesit');

-- --------------------------------------------------------

--
-- Table structure for table `vaksina`
--

CREATE TABLE `vaksina` (
  `ID_Vaksina` int(11) NOT NULL,
  `Vaksina` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vaksina`
--

INSERT INTO `vaksina` (`ID_Vaksina`, `Vaksina`) VALUES
(1, 'Pfizer-BioNTech'),
(2, 'Moderna'),
(3, 'Johnson & Johnson / Janssen');

-- --------------------------------------------------------

--
-- Table structure for table `vendbanimi`
--

CREATE TABLE `vendbanimi` (
  `ID_Vendbanimi` int(11) NOT NULL,
  `Vendbanimi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendbanimi`
--

INSERT INTO `vendbanimi` (`ID_Vendbanimi`, `Vendbanimi`) VALUES
(1, 'Ferizaj'),
(2, 'Talinoc M.'),
(3, 'Talinoc J.'),
(4, 'Softaj'),
(5, 'Zaskok'),
(6, 'Rahovic'),
(7, 'Sojev'),
(8, 'Greme');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faza_v`
--
ALTER TABLE `faza_v`
  ADD PRIMARY KEY (`ID_Faza`);

--
-- Indexes for table `perdoruesit`
--
ALTER TABLE `perdoruesit`
  ADD PRIMARY KEY (`PID`);

--
-- Indexes for table `qytetaret`
--
ALTER TABLE `qytetaret`
  ADD PRIMARY KEY (`ID_Q`),
  ADD KEY `VK_QYTETARET` (`ID_Vaksina`),
  ADD KEY `VQ_FERIZAJ` (`ID_Vendbanimi`),
  ADD KEY `FERIZAJ_V` (`ID_Faza`);

--
-- Indexes for table `shtepia_a_tdh`
--
ALTER TABLE `shtepia_a_tdh`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tedhenat`
--
ALTER TABLE `tedhenat`
  ADD PRIMARY KEY (`ID_Tedhenat`);

--
-- Indexes for table `vaksina`
--
ALTER TABLE `vaksina`
  ADD PRIMARY KEY (`ID_Vaksina`);

--
-- Indexes for table `vendbanimi`
--
ALTER TABLE `vendbanimi`
  ADD PRIMARY KEY (`ID_Vendbanimi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faza_v`
--
ALTER TABLE `faza_v`
  MODIFY `ID_Faza` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `perdoruesit`
--
ALTER TABLE `perdoruesit`
  MODIFY `PID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `qytetaret`
--
ALTER TABLE `qytetaret`
  MODIFY `ID_Q` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `shtepia_a_tdh`
--
ALTER TABLE `shtepia_a_tdh`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tedhenat`
--
ALTER TABLE `tedhenat`
  MODIFY `ID_Tedhenat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `vaksina`
--
ALTER TABLE `vaksina`
  MODIFY `ID_Vaksina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `vendbanimi`
--
ALTER TABLE `vendbanimi`
  MODIFY `ID_Vendbanimi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `qytetaret`
--
ALTER TABLE `qytetaret`
  ADD CONSTRAINT `FERIZAJ_V` FOREIGN KEY (`ID_Faza`) REFERENCES `faza_v` (`ID_Faza`),
  ADD CONSTRAINT `VK_QYTETARET` FOREIGN KEY (`ID_Vaksina`) REFERENCES `vaksina` (`ID_Vaksina`),
  ADD CONSTRAINT `VQ_FERIZAJ` FOREIGN KEY (`ID_Vendbanimi`) REFERENCES `vendbanimi` (`ID_Vendbanimi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
