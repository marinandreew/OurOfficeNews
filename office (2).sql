-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 17, 2021 at 12:58 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `office`
--

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(600) NOT NULL,
  `user_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `title`, `description`, `user_id`) VALUES
(17, 'Повишаване на заплата', 'Повишават ти заплата на 10 стотинки)', 'Alex100');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(100) CHARACTER SET utf8 NOT NULL,
  `description` varchar(255) CHARACTER SET utf8 NOT NULL,
  `news_type` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `user_id`, `title`, `description`, `news_type`) VALUES
(17, 0, 'ООН(с нова безконтактна функционалност)', 'модерната технология вече е достъпна над 20 банкомата и устройства', '1'),
(18, 0, 'Работно време', 'Работното време на 01.01.2021 ще бъде променено', '1'),
(19, 0, 'Нова версия на сайта!', 'ОЧАКВАЙТЕ СКОРО! 31.01.2021г.', '1'),
(20, 0, 'Нова тарифа за физически лица', 'считан от 2021 година ООН ще прилага нова Тарифа за таксите и комисионните за физически лица', '1'),
(21, 0, 'Хелп!', 'Развали се климатика в 56 зала', '2'),
(22, 0, 'Събрание!', 'Събрание на всички служители на 25.01.2021г. от 18ч. в зала 11', '1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `firstName` varchar(255) CHARACTER SET utf8 NOT NULL,
  `middleName` varchar(255) CHARACTER SET utf8 NOT NULL,
  `lastName` varchar(255) CHARACTER SET utf8 NOT NULL,
  `position` varchar(250) CHARACTER SET utf8 NOT NULL,
  `phoneNumber` int(10) NOT NULL,
  `username` varchar(11) CHARACTER SET utf8 NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `password` varchar(100) CHARACTER SET utf32 NOT NULL,
  `department` int(40) NOT NULL,
  `time` int(25) NOT NULL,
  `userKey` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `middleName`, `lastName`, `position`, `phoneNumber`, `username`, `email`, `password`, `department`, `time`, `userKey`) VALUES
(1, 'Alex', 'gf1', '1234', '1', 1111111, 'Alex100', 'jannadom2@rambler.ru', '$2y$10$LTvbBt.l4OU8ANAC4gr0UuNxmU.c8u3kKnQWPBJf1TrVCvMNxC9OK', 1, 1610862550, 'f157a8f7b2ece544dc46f8169e420f1b'),
(10, 'Кирилл ', 'Домрачев', 'Алексеевич', 'fff', 123123, 'Firots', 'jannadom8@gmail.com', '$2y$10$JvEt3iQFNJHrt9/53wzU5udhvgeeqaSQAhHj13jmThQFqfDU87bNK', 0, 1610855630, 'cf19d3fde4ed8a1df5937ad1c12c334a'),
(13, 'AAAAAA', 'BBBBBB', 'CCCCCCCC', 'EEEEEEEEE', 111111111, 'DDDDDDDDDDD', 'benjaminrosas21@gmail.com', '$2y$10$ODK7qL7OXrfcO59j1dgqqeADMZRHdl1lGtg78ZBd0LsBqLixb53I2', 0, 1610885026, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
