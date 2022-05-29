-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2022 at 10:11 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `enigma`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `App_ID` int(11) NOT NULL,
  `App_Name` varchar(255) NOT NULL,
  `App_Mail` varchar(255) NOT NULL,
  `App_Phone` varchar(20) NOT NULL,
  `App_Comments` text NOT NULL,
  `App_Checked` tinyint(4) NOT NULL,
  `App_DateTime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`App_ID`, `App_Name`, `App_Mail`, `App_Phone`, `App_Comments`, `App_Checked`, `App_DateTime`) VALUES
(1, 'Serhiy Paziuk', 'paz.serhiy@gmail.com', '+380950218131', '', 0, '2022-05-29 20:28:45'),
(2, 'Serhiy Paziuk', 'paz.serhiy@gmail.com', '+380950218131', 'sdasdasddadsaa', 0, '2022-05-29 20:30:48'),
(3, 'Serhiy Paziuk', 'paz.serhiy@gmail.com', '+380950218131', 'asdasd', 1, '2022-05-29 20:48:25');

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE `config` (
  `config_id` int(11) NOT NULL,
  `config_key` varchar(255) NOT NULL,
  `config_value` varchar(255) NOT NULL,
  `config_timeAdd` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`config_id`, `config_key`, `config_value`, `config_timeAdd`) VALUES
(1, 'phone', '+17735921952', '2022-05-26 22:46:19'),
(4, 'location', '575 Lincoln Ave, Winnetka, IL 60093, USA', '2022-05-26 22:49:06'),
(5, 'mail', 'Dterlian2@gmail.com', '2022-05-26 22:50:10'),
(6, 'facebook', 'https://www.facebook.com', '2022-05-26 22:52:39'),
(7, 'instagram', 'https://www.instagram.com', '2022-05-26 22:53:10'),
(8, 'siteDescription', 'Enigma skin care offers the full spectrum of innovative, age-reversing treatments geared to rejuvenateyour complexion and replenish lost stores of collagen and elastin, restoring youthfulness and joie de vivre in the process!', '2022-05-26 22:56:15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `isAdmin` tinyint(4) NOT NULL,
  `username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `isAdmin`, `username`, `Password`) VALUES
(5, 1, 'admin', '$2y$12$eLxrOMz0ygK2vUyWALjLP.oMkq3GHO.upEURiSpeioMytxpc5A5WW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`App_ID`);

--
-- Indexes for table `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`config_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `App_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `config`
--
ALTER TABLE `config`
  MODIFY `config_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
