-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2020 at 09:32 PM
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
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `analize`
--

INSERT INTO `analize` (`CNP`, `WBC`, `LYM`, `GRA`, `HgB`, `Plt`, `MON`, `data`) VALUES
('1980619284570', 19, 2, 321, 2, 2, 0, '0000-00-00'),
('1980619284570', 12, 155, 938, 219, 1123, 0, '2015-06-19'),
('1980618284577', 12, 155, 456, 442, 123, 0, '2020-04-07'),
('1881126266671', 123, 456, 1123, 356, 1123, 0, '2020-06-12');

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
('Comanescu', 'Cristian', 'Neurologie', '2000', '5021202079701', 15, 'comanescuc@gmail.com', '11', '9c76711197'),
('Rebreanu', 'Liviu', 'Pediatrie', '2000', '1940310307240', 16, 'liviureb@gmail.com', '12', '816c7c8e40');

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
('1980618284577', '2b879a758e', 'Popescuion@gmail.com', '0722919283', 'Caloian', 'Amelia', 22, 185, 130, 'b1'),
('1980619284570', 'panasonic2', 'coneasorin@gmail.com', '0724702651', 'Conea ', 'Sorin', 21, 187, 76, 'b1'),
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
(1, 7, 8, '2020-06-20', '1980619284570'),
(2, 7, 9, '2020-06-20', '1980619284570'),
(3, 6, 10, '2020-06-20', '1980619284570'),
(4, 16, 9, '2020-07-20', '1980619284570'),
(5, 4, 10, '2020-09-20', '1980619284570'),
(6, 1, 8, '2020-06-20', '1980619284570'),
(7, 4, 12, '2020-06-20', '1980619284570'),
(8, 16, 11, '2020-10-20', '1881126266671'),
(9, 16, 11, '2020-07-20', '1881126266671'),
(10, 0, 0, '0000-00-00', ''),
(11, 0, 0, '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `reteta`
--

CREATE TABLE `reteta` (
  `cnp_medic` varchar(13) NOT NULL,
  `cnp_pacient` varchar(13) NOT NULL,
  `data` date NOT NULL,
  `diagnostic` text NOT NULL,
  `reteta` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(10673, 1822, 733, 1);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `medici`
--
ALTER TABLE `medici`
  MODIFY `ID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `programari`
--
ALTER TABLE `programari`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
