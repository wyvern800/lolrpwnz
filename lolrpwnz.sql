-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 05-Jan-2019 às 15:46
-- Versão do servidor: 5.7.24
-- versão do PHP: 7.1.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lolrpwnz`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `commands`
--

CREATE TABLE `commands` (
  `id` int(11) NOT NULL,
  `commandname` varchar(25) NOT NULL,
  `action` varchar(255) NOT NULL,
  `category` varchar(50) NOT NULL,
  `example` varchar(255) DEFAULT NULL,
  `cooldown` smallint(6) NOT NULL,
  `price` double NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `commands`
--

INSERT INTO `commands` (`id`, `commandname`, `action`, `category`, `example`, `cooldown`, `price`, `created`, `modified`) VALUES
(1, 'pontos', 'Explica sobre o sistema de pontos', 'Geral', NULL, 2, 0, '2018-12-24 02:10:26', '2018-12-24 04:01:11'),
(3, 'tetapoints', 'Mostra informações sobre seus Teta Points', 'Geral', NULL, 5, 0, '2018-12-24 02:03:37', '2018-12-24 04:01:17'),
(5, 'uptime', 'Mostra há quanto tempo a stream está ligada', 'Geral', NULL, 3, 0, '2018-12-24 03:59:53', '2018-12-24 04:01:23'),
(7, 'comandos', 'Mostra essa página de comandos!', 'Geral', NULL, 3, 0, '2018-12-24 04:01:04', '2018-12-24 04:01:04'),
(8, 'givemoney', 'Dá dinheiro ao viewer', 'Geral', '!givemoney gabriel 123', 10, 0, '2018-12-24 04:26:49', '2019-01-04 18:20:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(40) NOT NULL,
  `role` int(255) NOT NULL,
  `realname` varchar(255) NOT NULL,
  `birthdate` varchar(30) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `mobile` varchar(30) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `realname`, `birthdate`, `address`, `email`, `phone`, `mobile`, `created`, `modified`, `active`) VALUES
(1, 'Wilderness', '1baee912abe0f3b981c059f56a0ba54f', 2, 'Matheus', '1996-11-27', 'Rua Três Corações, 2331', 'matheusguiferreira@hotmail.com', '36249588', '98540081', '2018-12-15 00:00:00', '2018-12-24 02:10:26', 1),
(3, 'MCNegoBaan', 'vvjhg', 0, 'Hugo de Sá Ferreira', '1965-12-13', 'Rua Três Corações', 'hugaoferreira@gmail.com', '44998540081', '44998540081', '2018-12-24 01:08:06', '2018-12-24 01:08:06', 1),
(4, 'shad0wjg', 'newwindow', 1, 'Gabriel Henrique Ferreira', '2003-05-15', 'Rua Três Corações', 'gabriel.h.ferreira@hotmail.com', '44998540081', '44998540081', '2018-12-24 02:02:12', '2018-12-25 23:24:02', 1),
(8, 'zeexys', '202cb962ac59075b964b07152d234b70', 3, 'Enzo', '1996-01-25', 'Rua Três Corações', 'kjnfasjknfk@gmail.com', '44998540081', '44998540081', '2019-01-03 22:19:41', '2019-01-04 18:18:59', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `commands`
--
ALTER TABLE `commands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `commands`
--
ALTER TABLE `commands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
