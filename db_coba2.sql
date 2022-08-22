-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2022 at 04:34 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_coba2`
--

-- --------------------------------------------------------

--
-- Table structure for table `datasantri`
--

CREATE TABLE `datasantri` (
  `id` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kamar` enum('1 (Pa)','1 (Pi)','2 (Pa)','2 (Pi)','3 (Pa)','3 (Pi)','4 (Pa)','4 (Pi)','5 (Pa)','5 (Pi)','6 (Pa)','6 (Pi)','7 (Pa)','7 (Pi)','8 (Pa)','8 (Pi)','9 (Pa)','9 (Pi)','10(Pa)','10(Pi)','11 (Pa)','11 (Pi)') NOT NULL,
  `nis` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datasantri`
--

INSERT INTO `datasantri` (`id`, `nama`, `kamar`, `nis`) VALUES
(12, 'zidni ', '1 (Pi)', 123456789),
(21, 'ilman zidni', '1 (Pa)', 1010101010),
(27, 'somad', '1 (Pa)', 2020202020),
(28, 'zamzami', '4 (Pi)', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datasantri`
--
ALTER TABLE `datasantri`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datasantri`
--
ALTER TABLE `datasantri`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
