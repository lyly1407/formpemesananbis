-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 20, 2022 at 08:25 AM
-- Server version: 10.5.16-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id17552573_sirly140703`
--

-- --------------------------------------------------------

--
-- Table structure for table `tiket3`
--

CREATE TABLE `tiket3` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `noidentitas` int(20) NOT NULL,
  `nohp` int(12) NOT NULL,
  `tanggal` date NOT NULL,
  `kelas` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `penumpang` int(12) NOT NULL,
  `penumpanglan` int(12) NOT NULL,
  `totalpen` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tiket3`
--

INSERT INTO `tiket3` (`id`, `nama`, `noidentitas`, `nohp`, `tanggal`, `kelas`, `penumpang`, `penumpanglan`, `totalpen`) VALUES
(1, 'Riska ', 290601, 623748657, '2022-07-20', 'eksekutif', 1, 1, 2),
(2, 'Sirly Amalia', 1202000027, 898765789, '2022-07-20', 'eksekutif', 1, 0, 1),
(3, 'Sirly Amalia', 1202000027, 898765789, '2022-07-20', 'eksekutif', 1, 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tiket3`
--
ALTER TABLE `tiket3`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tiket3`
--
ALTER TABLE `tiket3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
