-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2020 at 02:18 PM
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
('1980619284570', 12, 155, 938, 219, 1123, 0, '2015-06-19');

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
  `ID` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medici`
--

INSERT INTO `medici` (`Numele`, `Prenumele`, `Specializare`, `Absolvit`, `CNP`, `ID`) VALUES
('Popescu', 'Ion', 'Chirurg', '2015', '19802459928', 1),
('Constantinescu', 'Marinel', 'Neurolog', '2013', '190456792812', 2),
('CLEMENT', 'MIHAELA - LARISA', 'Neurochirurg', '2000', '1921025193381', 4),
('FARAUANU', 'IONUT - CORNELIU', 'Pediatru', '2013', '2911011286074', 5),
('MAGUREANU', 'MIHNEA - ANDREI', 'Pediatru', '1980', '1850516398550', 6),
('CURELEA', 'ILIE - DANUT ', 'Pneumolog', '1980', '1961116120215', 7);

-- --------------------------------------------------------

--
-- Table structure for table `pacienti`
--

CREATE TABLE `pacienti` (
  `CNP` varchar(13) NOT NULL,
  `Parola` text NOT NULL,
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

INSERT INTO `pacienti` (`CNP`, `Parola`, `Nume`, `Prenume`, `Varsta`, `Inaltime`, `Greutate`, `Grupa_sange`) VALUES
('1230123712983', 'nuostiu', 'Popescu', 'Ioana', 25, 190, 91, 'bou'),
('1980619284570', 'panasonic1', 'Conea ', 'Sorin', 21, 185, 92, 'b1');

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
(10663, 1822, 733, 1);

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
  MODIFY `ID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
