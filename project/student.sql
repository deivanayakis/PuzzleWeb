-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2023 at 07:07 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `puzzle`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Firstname` varchar(40) NOT NULL,
  `Lastname` varchar(40) NOT NULL,
  `DOB` date NOT NULL,
  `Qualification` varchar(40) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phoneno` mediumint(9) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Points` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Firstname`, `Lastname`, `DOB`, `Qualification`, `Email`, `Phoneno`, `Password`, `Points`) VALUES
('Deiva', 'nayaki', '2023-01-18', '12th', 'deivanayaki20@gmail.com', 8388607, '$2y$10$rpFH9YFMbC76qLj/gV.YQOrIBaWD75d4DEpakUEuFCmVcy.mpeq9e', 0),
('Subramanian', 'S', '2009-09-16', 'other', 'harish@gmail.com', 8388607, '$2y$10$ECZl0wtSTNY0WlF5HeJ.sezdp9OoAnSCADrwYSyH2eLRvD3WJM0re', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
