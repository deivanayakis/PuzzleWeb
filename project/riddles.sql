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
-- Table structure for table `riddles`
--

CREATE TABLE `riddles` (
  `id` int(11) NOT NULL,
  `question` varchar(1000) NOT NULL,
  `correct_answer` varchar(1000) NOT NULL,
  `hint` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `riddles`
--

INSERT INTO `riddles` (`id`, `question`, `correct_answer`, `hint`) VALUES
(73, 'What has a heart that doesn’t beat?', 'A artichoke', 'Think about things that have a metaphorical \"heart\".'),
(74, 'What comes once in a minute, twice in a moment, but never in a thousand years?', 'The letter \"M\"', 'Think about time and letters of the alphabet.'),
(75, 'What has keys but can\'t open locks?', 'A piano', 'Think about musical instruments.'),
(76, 'What is full of holes but still holds a lot of weight?', 'A net', 'Think about objects used for catching things.'),
(77, 'The more you take, the more you leave behind. What am I?', 'Footsteps', 'Think about what is left behind as you move forward.'),
(78, 'What has a head, a tail, is brown, and has no legs?', 'A penny', 'Think about coins.'),
(79, 'I speak without a mouth and hear without ears. I have no body, but I come alive with the wind. What am I?', 'An echo', 'Think about sounds and reflections.'),
(80, 'What begins and has no end?', 'A circle', 'Think about shapes.'),
(81, 'The person who makes it, sells it. The person who buys it never uses it. The person who uses it never knows they\'re using it. What is it?', 'A coffin', 'Think about items used in ceremonies and rituals.'),
(82, 'What has cities but no houses, forests but no trees, and rivers but no water?', 'A map', 'Think about representations of geographical features.'),
(83, 'Forward I am heavy, but backward I am not. What am I?', 'The word \"ton\"', 'Think about wordplay and spelling.'),
(84, 'What is so fragile that saying its name breaks it?', 'Silence', 'Think about concepts related to sound.'),
(85, 'The more you take, the more you leave behind. What am I?', 'Footsteps', 'Think about what is left behind as you move forward.'),
(86, 'What has one eye but can’t see?', 'A needle', 'Think about small, sharp objects.'),
(87, 'What can travel around the world while staying in a corner?', 'A stamp', 'Think about things used for mailing letters.'),
(88, 'I am taken from a mine and shut in a wooden case, from which I am never released, and yet I am used by almost every person. What am I?', 'A pencil lead', 'Think about writing tools and their components.'),
(89, 'I am always hungry. I must always be fed. The finger I touch, will soon turn red. What am I?', 'Fire', 'Think about elements that consume and spread.'),
(90, 'I am not alive, but I can grow. I don’t have lungs, but I need air. What am I?', 'Fire', 'Think about elements that consume and spread.'),
(91, 'I am taken from a mine and shut in a wooden case, from which I am never released, and yet I am used by almost every person. What am I?', 'A pencil lead', 'Think about writing tools and their components.'),
(92, 'I am always hungry. I must always be fed. The finger I touch, will soon turn red. What am I?', 'Fire', 'Think about elements that consume and spread.'),
(93, 'I am not alive, but I can grow. I don’t have lungs, but I need air. What am I?', 'Fire', 'Think about elements that consume and spread.'),
(94, 'The more you take, the more you leave behind. What am I?', 'Footsteps', 'Think about what is left behind as you move forward.'),
(95, 'What has one eye but can’t see?', 'A needle', 'Think about small, sharp objects.'),
(96, 'What can travel around the world while staying in a corner?', 'A stamp', 'Think about things used for mailing letters.'),
(97, 'Forward I am heavy, but backward I am not. What am I?', 'The word \"ton\"', 'Think about wordplay and spelling.'),
(98, 'What is so fragile that saying its name breaks it?', 'Silence', 'Think about concepts related to sound.'),
(99, 'I speak without a mouth and hear without ears. I have no body, but I come alive with the wind. What am I?', 'An echo', 'Think about sounds and reflections.'),
(100, 'What begins and has no end?', 'A circle', 'Think about shapes.'),
(101, 'The person who makes it, sells it. The person who buys it never uses it. The person who uses it never knows they\'re using it. What is it?', 'A coffin', 'Think about items used in ceremonies and rituals.'),
(102, 'I am not alive, but I grow; I don’t have lungs, but I need air. What am I?', 'A fire', 'Think about elements that consume and spread.'),
(103, 'What can travel around the world while staying in a corner?', 'A stamp', 'Think about items used for mailing letters.'),
(104, 'The more you take, the more you leave behind. What am I?', 'Footsteps', 'Think about what is left behind as you move forward.'),
(105, 'I speak without a mouth and hear without ears. I have no body, but I come alive with the wind. What am I?', 'An echo', 'Think about sounds and reflections.'),
(106, 'What has one eye but can’t see?', 'A needle', 'Think about small, sharp objects.'),
(107, 'Forward I am heavy, but backward I am not. What am I?', 'The word \"ton\"', 'Think about wordplay and spelling.'),
(108, 'What is so fragile that saying its name breaks it?', 'Silence', 'Think about concepts related to sound.'),
(109, 'What begins and has no end?', 'A circle', 'Think about shapes.'),
(110, 'The person who makes it, sells it. The person who buys it never uses it. The person who uses it never knows they\'re using it. What is it?', 'A coffin', 'Think about items used in ceremonies and rituals.'),
(111, 'What has a heart that doesn’t beat?', 'Artichoke', 'Think about vegetables and their parts.'),
(112, 'The more you take, the more you leave behind. What am I?', 'Footsteps', 'Think about what is left behind as you move forward.'),
(113, 'What has a neck but no head?', 'A bottle', 'Think about common objects with specific shapes.'),
(114, 'What has cities but no houses; forests, but no trees; and rivers but no water?', 'A map', 'Think about representations of geographic features.'),
(115, 'I am taken from a mine and shut in a wooden case, from which I am never released, and yet I am used by almost every person. What am I?', 'A pencil lead', 'Think about writing tools and their components.'),
(116, 'I am always hungry. I must always be fed. The finger I touch, will soon turn red. What am I?', 'Fire', 'Think about elements that consume and spread.'),
(117, 'I speak without a mouth and hear without ears. I have no body, but I come alive with the wind. What am I?', 'An echo', 'Think about sounds and reflections.'),
(118, 'The person who makes it, sells it. The person who buys it never uses it. The person who uses it never knows they\'re using it. What is it?', 'A coffin', 'Think about items used in ceremonies and rituals.'),
(119, 'What has a heart that doesn’t beat?', 'Artichoke', 'Think about vegetables and their parts.'),
(120, 'The more you take, the more you leave behind. What am I?', 'Footsteps', 'Think about what is left behind as you move forward.'),
(121, 'What has a neck but no head?', 'A bottle', 'Think about common objects with specific shapes.'),
(122, 'What has cities but no houses; forests, but no trees; and rivers but no water?', 'A map', 'Think about representations of geographic features.'),
(123, 'I speak without a mouth and hear without ears. I have no body, but I come alive with the wind. What am I?', 'An echo', 'Think about sounds and reflections.'),
(124, 'I am taken from a mine and shut in a wooden case, from which I am never released, and yet I am used by almost every person. What am I?', 'A pencil lead', 'Think about writing tools and their components.'),
(125, 'I am always hungry. I must always be fed. The finger I touch, will soon turn red. What am I?', 'Fire', 'Think about elements that consume and spread.'),
(126, 'I can fly without wings. I can cry without eyes. Whenever I go, darkness flies. What am I?', 'Cloud', 'Think about weather phenomena.'),
(127, 'The man who makes it, sells it. The man who buys it, never uses it. The man who uses it, never knows he’s using it. What is it?', 'Coffin', 'Think about items used in ceremonies and rituals.'),
(128, 'The one who makes it, sells it. The one who buys it, never uses it. The one who uses it never knows. What is it?', 'Coffin', 'Think about items related to life and death.'),
(129, 'I speak without a mouth and hear without ears. I have no body, but I come alive with the wind. What am I?', 'Echo', 'Think about sounds and reflections.'),
(130, 'I can be cracked, made, told, and played. What am I?', 'A joke', 'Think about things that can be shared and enjoyed.'),
(131, 'The more you take, the more you leave behind. What am I?', 'Footsteps', 'Think about what is left behind as you move forward.'),
(132, 'What has a neck but no head?', 'A bottle', 'Think about common objects with specific shapes.'),
(133, 'What has cities but no houses; forests, but no trees; and rivers but no water?', 'A map', 'Think about representations of geographic features.'),
(134, 'What has keys but can’t open locks?', 'A piano', 'Think about musical instruments and their components.'),
(135, 'I am taken from a mine and shut in a wooden case, from which I am never released, and yet I am used by almost every person every day. What am I?', 'A pencil', 'Think about common writing tools.'),
(136, 'I can travel around the world while staying in a corner. What am I?', 'A stamp', 'Think about objects used in mailing and communication.'),
(137, 'What has one eye but can’t see?', 'A needle', 'Think about small, pointed objects.'),
(138, 'I am not alive, but I can grow. I don’t have lungs, but I need air. What am I?', 'Fire', 'Think about a phenomenon related to combustion and oxygen.'),
(139, 'What has a heart that doesn’t beat?', 'Artichoke', 'Think about vegetables and their parts.'),
(140, 'The person who makes it sells it. The person who buys it never uses it. The person who uses it never knows they’re using it. What is it?', 'A coffin', 'Think about items used in rituals and ceremonies.'),
(141, 'What comes once in a minute, twice in a moment, but never in a thousand years?', 'The letter \"M\"', 'Think about letters and their frequency in words.'),
(142, 'I can be cracked, made, told, and played. What am I?', 'A joke', 'Think about forms of entertainment that involve words.'),
(143, 'What has a head, a tail, is brown, and has no legs?', 'A penny', 'Think about coins and their characteristics.'),
(144, 'What has a mouth but cannot eat, moves but has no legs, and has a bank but cannot put money in it?', 'A river', 'Think about natural features and their properties.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `riddles`
--
ALTER TABLE `riddles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `riddles`
--
ALTER TABLE `riddles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
