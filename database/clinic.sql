-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 29, 2018 at 09:30 PM
-- Server version: 5.7.22-0ubuntu0.16.04.1
-- PHP Version: 7.0.30-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clinic`
--

-- --------------------------------------------------------

--
-- Table structure for table `accident`
--

CREATE TABLE `accident` (
  `id` int(11) NOT NULL,
  `id_type_accident` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `observations` text,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accident`
--

INSERT INTO `accident` (`id`, `id_type_accident`, `id_user`, `observations`, `datetime`) VALUES
(1, 1, 1, 'Observaciones del accidente', '2018-07-25 08:34:36'),
(2, 1, 1, 'Observaciones agregadas dinamicamente', '2018-07-28 16:07:38'),
(3, 3, 1, 'Observaciones agregadas dinamicamente', '2018-07-28 17:07:00'),
(4, 1, 1, 'Texto agregado desde Postman', '2018-07-29 11:07:31'),
(5, 1, 1, 'Texto agregado desde Postman', '2018-07-29 11:07:36'),
(6, 1, 1, 'asd asdasd', '2018-07-29 20:07:56'),
(7, 7, 2, 'Esta fuerte', '2018-07-29 20:07:08'),
(8, 1, 1, 'asdasd', '2018-07-29 21:07:25'),
(9, 1, 1, 'Vaya vata', '2018-07-29 21:07:28'),
(10, 4, 2, 'asd asdasd', '2018-07-29 21:07:56'),
(11, 1, 1, 'Observaciones', '2018-07-29 21:07:30');

-- --------------------------------------------------------

--
-- Table structure for table `type_accident`
--

CREATE TABLE `type_accident` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `nickname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type_accident`
--

INSERT INTO `type_accident` (`id`, `name`, `nickname`) VALUES
(1, 'Caída', 'caida'),
(3, 'Paro cardÃ­aco', 'paro_cardiaco'),
(4, 'Caida escalera', 'caida_escalera'),
(7, 'Sangrado', 'sangrado');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` text,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `password`) VALUES
(1, 'Administrador', 'admin', 'admin'),
(2, 'Arturo', 'arturo', 'arturo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accident`
--
ALTER TABLE `accident`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_type_accident` (`id_type_accident`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `type_accident`
--
ALTER TABLE `type_accident`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accident`
--
ALTER TABLE `accident`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `type_accident`
--
ALTER TABLE `type_accident`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `accident`
--
ALTER TABLE `accident`
  ADD CONSTRAINT `FK_1` FOREIGN KEY (`id_type_accident`) REFERENCES `type_accident` (`id`),
  ADD CONSTRAINT `FK_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
