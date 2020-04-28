-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2020 at 08:38 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `licenta`
--

-- --------------------------------------------------------

--
-- Table structure for table `analize`
--

CREATE TABLE `analize` (
  `CNP` varchar(13) NOT NULL,
  `WBC` float NOT NULL,
  `LYM` float NOT NULL,
  `GRA` float NOT NULL,
  `HgB` float NOT NULL,
  `Plt` float NOT NULL,
  `MON` float NOT NULL,
  `data` date NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `analize`
--

INSERT INTO `analize` (`CNP`, `WBC`, `LYM`, `GRA`, `HgB`, `Plt`, `MON`, `data`, `ID`) VALUES
('1980619284570', 19, 2, 321, 2, 2, 91, '2020-07-30', 1),
('1980619284570', 12, 155, 938, 219, 1123, 31, '2015-06-19', 2),
('1980618284577', 12, 155, 456, 442, 123, 13, '2020-04-07', 3),
('1881126266671', 123, 456, 1123, 356, 1123, 426, '2020-06-12', 4),
('1980619284579', 1233, 321, 112, 234, 13, 155, '2020-06-22', 5),
('1980619284570', 8, 35, 50, 200, 122, 0, '2020-07-24', 6);

-- --------------------------------------------------------

--
-- Table structure for table `medici`
--

CREATE TABLE `medici` (
  `Numele` varchar(255) NOT NULL,
  `Prenumele` varchar(255) NOT NULL,
  `Specializare` text NOT NULL,
  `Absolvit` varchar(255) NOT NULL,
  `CNP` varchar(255) NOT NULL,
  `ID` int(2) NOT NULL,
  `Email` varchar(28) NOT NULL,
  `nr_cabinet` varchar(8) NOT NULL,
  `parola` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medici`
--

INSERT INTO `medici` (`Numele`, `Prenumele`, `Specializare`, `Absolvit`, `CNP`, `ID`, `Email`, `nr_cabinet`, `parola`) VALUES
('Poescu', 'Ion', 'Oncologie', '2015', '19802459928', 1, '', '1', '123456'),
('Constantinescu', 'Marinel', 'Pneumologie', '2013', '190456792812', 2, '', '2', '123456'),
('CLEMENT', 'MIHAELA - LARISA', 'Cardiologie', '2000', '1921025193381', 4, '', '3', '123456'),
('FARAUANU', 'IONUT - CORNELIU', 'Pediatrie', '2013', '2911011286074', 5, '', '4', '123456'),
('MAGUREANU', 'MIHNEA - ANDREI', 'Pediatrie', '1980', '1850516398550', 6, '', '5', '123456'),
('CURELEA', 'ILIE - DANUT ', 'Neurologie', '1980', '1961116120215', 7, '', '6', '123456'),
('Conea ', 'Ion', 'Hematologie', '1970', '1231231234567', 14, 'spikehack3r@gmail.com', '3', '5fa570070e'),
('Comanescu', 'Cristian', 'Neurologie', '2000', '1980619284570', 15, 'comanescuc@gmail.com', '11', 'panasonic1'),
('Rebreanu', 'Liviu', 'Pediatrie', '2000', '1940310307240', 16, 'liviureb@gmail.com', '12', '816c7c8e40'),
('Gheorghita', 'Diana', 'Pediatrie', '1965', '1970106053076', 17, 'diana_g100@gmail.com', '8', '56e28d0a65');

-- --------------------------------------------------------

--
-- Table structure for table `pacienti`
--

CREATE TABLE `pacienti` (
  `CNP` varchar(13) NOT NULL,
  `Parola` text NOT NULL,
  `Email` text NOT NULL,
  `Numar_telefon` char(11) NOT NULL,
  `Nume` text NOT NULL,
  `Prenume` text NOT NULL,
  `Varsta` int(11) NOT NULL,
  `Inaltime` int(11) NOT NULL,
  `Greutate` float NOT NULL,
  `Grupa_sange` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pacienti`
--

INSERT INTO `pacienti` (`CNP`, `Parola`, `Email`, `Numar_telefon`, `Nume`, `Prenume`, `Varsta`, `Inaltime`, `Greutate`, `Grupa_sange`) VALUES
('1881126266671', 'bec381bf3c', 'baciucucristian@gmail.com', '0724702650', 'Cristian-Valeriu', 'Baciucu', 32, 176, 65, 'b1'),
('1980618284577', '2b879a758e', 'caloianamela@gmail.com', '0722919283', 'Caloian', 'Amelia', 22, 185, 130, 'b1'),
('1980619284570', 'panasonic1', 'coneasorin@gmail.com', '0724702651', 'Conea ', 'Sorin', 21, 187, 76, 'b1'),
('1980619284577', 'e9ca7b2f59', 'spikehack3r@gmail.com', '0239128379', 'Popescu', 'Ionut', 22, 185, 85, 'b1');

-- --------------------------------------------------------

--
-- Table structure for table `programari`
--

CREATE TABLE `programari` (
  `ID` int(11) NOT NULL,
  `ID_Medic` int(11) NOT NULL,
  `Ora` int(11) NOT NULL,
  `Data` date NOT NULL,
  `CNP_PACIENT` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `programari`
--

INSERT INTO `programari` (`ID`, `ID_Medic`, `Ora`, `Data`, `CNP_PACIENT`) VALUES
(4, 7, 8, '2020-04-27', '1980619284570'),
(5, 15, 9, '2020-04-27', '1980619284570'),
(6, 5, 9, '2020-04-27', '1980619284570'),
(7, 15, 10, '2020-04-27', '1980619284570'),
(8, 15, 11, '2020-04-27', '1980618284577'),
(9, 15, 14, '2020-04-27', '1980619284577'),
(10, 15, 14, '2020-04-28', '1980619284570'),
(11, 15, 15, '2020-04-27', '1980619284570'),
(12, 15, 13, '2020-04-27', '1881126266671'),
(13, 0, 0, '0000-00-00', ''),
(14, 0, 0, '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `reteta`
--

CREATE TABLE `reteta` (
  `cnp_medic` varchar(13) NOT NULL,
  `cnp_pacient` varchar(13) NOT NULL,
  `data` date NOT NULL,
  `diagnostic` text NOT NULL,
  `reteta` text NOT NULL,
  `observatii` text NOT NULL,
  `id_reteta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reteta`
--

INSERT INTO `reteta` (`cnp_medic`, `cnp_pacient`, `data`, `diagnostic`, `reteta`, `observatii`, `id_reteta`) VALUES
('1970106053076', '1980619284570', '2020-07-20', 'Otita ', ' 2 picături ulei esențial de Busuioc\r\n2 picături ulei esențial de Lavandă\r\n1 picătură ulei esențial de Mușețel Roman\r\n2 picături ulei esențial de Arbore de ceai', 'A nu se depasi doza zilnica.', 1),
('1980619284570', '1980619284570', '2020-06-20', ' Raceala', 'Paracetamol 3 ori pe zi', 'A nu se depasi doza zilnica.', 2),
('1980619284570', '1980619284570', '2020-04-27', ' Abces dentar', ' ABACAVIR SANDOZ 300 mg\r\nACCUPRO 5 mg\r\nACCUZIDE 10 mg/12,5 mg', 'A nu se depasi doza zilnica.', 3),
('1980619284570', '1980619284570', '2020-02-05', ' Grip', 'Paracetamol ', 'A nu se depasi doza zilnica.', 4);

-- --------------------------------------------------------

--
-- Table structure for table `statistici`
--

CREATE TABLE `statistici` (
  `p_infectate` int(11) NOT NULL,
  `p_vindecate` int(11) NOT NULL,
  `p_decedate` int(11) NOT NULL,
  `p_testate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `statistici`
--

INSERT INTO `statistici` (`p_infectate`, `p_vindecate`, `p_decedate`, `p_testate`) VALUES
(10023, 2072, 583, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'spikecsi', '$2y$10$TINBzOA0udVpGec1/v/FDuEyatcwEHFme8kRl2iE4zcQ1ixsHmL8C', '2020-03-02 13:35:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `analize`
--
ALTER TABLE `analize`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `medici`
--
ALTER TABLE `medici`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `pacienti`
--
ALTER TABLE `pacienti`
  ADD PRIMARY KEY (`CNP`);

--
-- Indexes for table `programari`
--
ALTER TABLE `programari`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `reteta`
--
ALTER TABLE `reteta`
  ADD PRIMARY KEY (`id_reteta`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `analize`
--
ALTER TABLE `analize`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `medici`
--
ALTER TABLE `medici`
  MODIFY `ID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `programari`
--
ALTER TABLE `programari`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `reteta`
--
ALTER TABLE `reteta`
  MODIFY `id_reteta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
