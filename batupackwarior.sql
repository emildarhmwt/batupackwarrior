-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2024 at 01:57 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `batupackwarior`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `batu`
--

CREATE TABLE `batu` (
  `id` int(11) NOT NULL,
  `team` varchar(255) NOT NULL,
  `satuan` varchar(255) NOT NULL,
  `total_tonase` double DEFAULT NULL,
  `point_complain` double DEFAULT NULL,
  `total_point` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `batu`
--

INSERT INTO `batu` (`id`, `team`, `satuan`, `total_tonase`, `point_complain`, `total_point`) VALUES
(2, 'AM OP.PENANGANAN BATUBARA 1', 'PENBARA (BLOK BARAT)', 0, 0, 0),
(3, 'AM OP.PENANGANAN BATUBARA 2', 'PENBARA (BLOK BARAT)', 0, 0, 0),
(4, 'AM OP.PENANGANAN BATUBARA SP BWE MTB', 'PENBARA (BLOK BARAT)', 0, 0, 0),
(5, 'AM OP.PENANGANAN BATUBARA INPIT TAL', 'PENBARA (BLOK BARAT)', 0, 0, 0),
(6, 'AM OP.PENANGANAN BATUBARA 3', 'PENBARA (BLOK TIMUR)', 0, 0, 0),
(7, 'AM OP.PENANGANAN BATUBARA 4', 'PENBARA (BLOK TIMUR)', 0, 0, 0),
(8, 'AM OP.PENANGANAN BATUBARA 5', 'PENBARA (BLOK TIMUR)', 0, 0, 0),
(9, 'AM OP.PENANGANAN BATUBARA CHF PLTU SUMSEL 8', 'PENBARA (BLOK TIMUR)', 0, 0, 0),
(10, 'AM REHANDLING BATUBARA', 'PENBARA (BLOK TIMUR)', 0, 0, 0),
(11, 'AM ANGKUTAN BATUBARA TANJUNG ENIM', 'ANGKUTAN BATUBARA', 0, 0, 0),
(12, 'AM ANGKUTAN BATUBARA KERTAPATI', 'ANGKUTAN BATUBARA', 0, 0, 0),
(13, 'AM ANGKUTAN BATUBARA TARAHAN', 'ANGKUTAN BATUBARA', 0, 0, 0),
(14, 'AM PENAMBANGAN AIR LAYA 1', 'PENAMBANGAN AIR LAYA', 0, 0, 0),
(15, 'AM PENAMBANGAN AIR LAYA 2', 'PENAMBANGAN AIR LAYA', 0, 0, 0),
(16, 'AM TEMPORARY STOCKPILE AIR LAYA', 'PENAMBANGAN AIR LAYA', 0, 0, 0),
(17, 'AM MUARA TIGA BESAR 1', 'PENAMBANGAN MUARA TIGA BESAR', 0, 0, 0),
(18, 'AM MUARA TIGA BESAR 2', 'PENAMBANGAN MUARA TIGA BESAR', 0, 0, 0),
(19, 'AM TEMPORARY STOCKPILE MTB', 'PENAMBANGAN MUARA TIGA BESAR', 0, 0, 0),
(20, 'AM PENAMBANGAN ELEKTRIFIKASI 1', 'PENAMBANGAN SWAKELOLA 1', 0, 0, 0),
(21, 'AM PENAMBANGAN SHOVEL & TRUCK 1', 'PENAMBANGAN SWAKELOLA 1', 0, 0, 0),
(22, 'AM PIT SERVICE & TEMP.SP SWAKELOLA 1', 'PENAMBANGAN SWAKELOLA 1', 0, 0, 0),
(23, 'AM PENAMBANGAN ELEKTRIFIKASI 2', 'PENAMBANGAN SWAKELOLA 2', 0, 0, 0),
(24, 'AM PENAMBANGAN SHOVEL & TRUCK 2', 'PENAMBANGAN SWAKELOLA 2', 0, 0, 0),
(25, 'AM PIT SERVICE & TEMP.SP SWAKELOLA 2', 'PENAMBANGAN SWAKELOLA 2', 0, 0, 0),
(26, 'AM PENAMBANGAN BANKO 1A', 'PENAMBANGAN BANKO 1', 0, 0, 0),
(27, 'AM PENAMBANGAN BANKO 1B', 'PENAMBANGAN BANKO 1', 0, 0, 0),
(28, 'AM TEMPORARY STOCKPILE BANKO 1', 'PENAMBANGAN BANKO 1', 0, 0, 0),
(29, 'AM PENAMBANGAN BANKO 2A', 'PENAMBANGAN BANKO 2', 0, 0, 0),
(30, 'AM PENAMBANGAN BANKO 2B', 'PENAMBANGAN BANKO 2', 0, 0, 0),
(31, 'AM TEMPORARY STOCKPILE BANKO 2', 'PENAMBANGAN BANKO 2', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `batu_avp`
--

CREATE TABLE `batu_avp` (
  `id` int(11) NOT NULL,
  `team` varchar(255) NOT NULL,
  `satuan` varchar(255) NOT NULL,
  `total_tonase` double DEFAULT NULL,
  `point_complain` double DEFAULT NULL,
  `total_point` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `batu_avp`
--

INSERT INTO `batu_avp` (`id`, `team`, `satuan`, `total_tonase`, `point_complain`, `total_point`) VALUES
(1, 'AVP PENAMBANGAN BANKO 2', 'PENAMBANGAN (BLOK TIMUR)', 0, 0, 0),
(5, 'AVP PENAMBANGAN SWAKELOLA 1', 'PENAMBANGAN (BLOK TIMUR)', 0, 0, 0),
(6, 'AVP PENAMBANGAN SWAKELOLA 2', 'PENAMBANGAN (BLOK TIMUR)', 0, 0, 0),
(7, 'AVP PENAMBANGAN BANKO 1', 'PENAMBANGAN (BLOK TIMUR)', 0, 0, 0),
(8, 'AVP PENAMBANGAN AIR LAYA', 'PENAMBANGAN (BLOK BARAT)', 0, 0, 0),
(9, 'AVP PENAMBANGAN MUARA TIGA BESAR', 'PENAMBANGAN (BLOK BARAT)', 0, 0, 0),
(10, 'AVP PENBARA BLOK TIMUR', 'PAB (BLOK TIMUR)', 0, 0, 0),
(11, 'AVP PENBARA BLOK BARAT', 'PAB (BLOK BARAT)', 0, 0, 0),
(12, 'AVP ANGKUTAN BATUBARA', 'PAB', 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `batu`
--
ALTER TABLE `batu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `batu_avp`
--
ALTER TABLE `batu_avp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `batu`
--
ALTER TABLE `batu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `batu_avp`
--
ALTER TABLE `batu_avp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
