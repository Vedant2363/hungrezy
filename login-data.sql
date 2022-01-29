-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 02, 2021 at 04:05 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login-data`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `email` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `password`, `status`) VALUES
('sharvani.psalgaonkar@gmail.com', '$2y$10$i2pzSB60o4IeF63ri250OeyOAG6JfW5DGZT3efS7/1Pk8.3GuvUve', 1),
('shivam.d1118@gmail.com', '$2y$10$FNp9oGM3TpIB9WDkF8L/fuUTWAkAyAmmeqo2SxkDUpMOwg6AHcx/m', 1),
('vsm1099@icloud.com', '$2y$10$QH4o8QL2M.NzpK9fr0YgQ.TdbhuXngNUk6Lh87H9XhyFP4mjspSP2', 1),
('vsm1099@outlook.com', '$2y$10$gdUHPXf4u8rbNxRysXWT1.Ix1CKz7dxCVFMAFuiP9I/VRjwtpxvgC', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
