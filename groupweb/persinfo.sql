-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2023 at 02:01 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `personalinfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `persinfo`
--

CREATE TABLE `persinfo` (
  `first name` text NOT NULL,
  `last name` text NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `persinfo`
--

INSERT INTO `persinfo` (`first name`, `last name`, `email`, `password`) VALUES
('Murugi', 'Munyi', 'Murugimunyi1@gmail.com', 'yummymummy'),
('Murugi', 'Munyi', 'Murugimunyi1@gmail.com', 'yummymummy'),
('Murugi', 'Munyi', 'Murugimunyi1@gmail.com', 'yummymummy'),
('Murugi', 'Munyi', 'Murugimunyi1@gmail.com', 'yummymummy'),
('victor', 'mangi', 'mangi@gmail.com', '12345678'),
('maureen', 'wanjiru', 'moshiz@gmail.com', '09876543'),
('maureen', 'wanjiru', 'moshiz@gmail.com', '09876543'),
('nicole', 'waithera', 'nicole@gmail.com', '12345678910'),
('joy', 'jojo', 'jojo@gmail.com', 'joyjojo'),
('joy', 'jojo', 'jojo@gmail.com', 'joyjojo'),
('collins', 'injera', 'injera@gmail.com', 'colloinje'),
('collins', 'injera', 'injera@gmail.com', ''),
('jack', 'wambugu', 'jack@gamil.com', 'jackfushi'),
('jack', 'Wambugu', 'jack@gmail.com', ''),
('Gloria', 'Kalendi', 'Kalendi@gmail.com', 'ilovekalendi'),
('Gloria', 'Kalendi', 'Kalendi@gmail.com', ''),
('Fred', 'Muthuri', 'Muthuri@gmail.com', '1234567'),
('Fred', 'Muthuri', 'Muthuri@gmail.com', ''),
('Christine', 'Macira', 'Christine@gmail.com', 'macira123'),
('Christine', 'Macira', 'Christine@gmail.com', ''),
('Gerald', 'Gisore', 'Gisore@gmail.com', '12345678'),
('Gerald', 'Gisore', 'Gisore@gmail.com', ''),
('Gerry', 'Beans', 'beansg@gmail.com', 'GU8pXSVdr8ay!Y!'),
('Edith', 'Ngesa', 'Ngesaedith02@gmail.com', '4G46peN@F7EiCT@'),
('Edith', 'Ngesa', 'Ngesaedith02@gmail.com', ''),
('Edith', 'Ngesa', 'Ngesaedith02@gmail.com', ''),
('Edith', 'Ngesa', 'Ngesaedith02@gmail.com', ''),
('Edith', 'Ngesa', 'Ngesaedith02@gmail.com', ''),
('Edith', 'Ngesa', 'Ngesaedith02@gmail.com', ''),
('Edith', 'Ngesa', 'Ngesaedith02@gmail.com', ''),
('Katumbo', 'kavb', 'katush@gmail.com', '$2y$10$HAzneEXGU1tK.4liBXp6be9.gtIscLCYURoGnfdmNp77mAcJPT3vG'),
('Katumbo', 'kavb', 'katush@gmail.com', '$2y$10$k.aqZVZWSUw078kAic7NxuTIFANq.zUHaKK/IYT80OKLbrHcUMpMS'),
('Infinix', 'ecla', 'ecla8@gmail.com', '$2y$10$eBL5DRNYkqfaMVndP4wNUehpfDUuR29SyYluwUgvz9ETUn5x5g8/m'),
('ice', 'maji', 'maji1@gmail.com', '$2y$10$mURRFgqXzdNzAirj70BqROcH9zHIhe9gpqkfwXnIXnrWCZBnTXn8q'),
('Clara', 'baby', 'baby@gmail.com', 'babyclara'),
('Clara', 'baby', 'baby@gmail.com', 'babyclara'),
('Clara', 'baby', 'baby@gmail.com', ''),
('Clara', 'baby', 'baby@gmail.com', ''),
('Clara', 'baby', 'baby@gmail.com', ''),
('Abel ', 'mutua', 'mutua@gmail.com', '123456'),
('Abel ', 'mutua', 'mutua@gmail.com', ''),
('Brayo', 'kabs', 'kabs@gmail.com', ''),
('Edith', 'Ngesa', 'Ngesaedith02@gmail.com', ''),
('King', 'Kalala', 'kalala@gmail.com', '1357911'),
('King', 'Kalala', 'kalala@gmail.com', ''),
('Mark', 'Mugo', 'Markbmugo@gmail.com', '1234');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
