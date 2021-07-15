-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 05-Set-2019 às 21:48
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projetofinal`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(40) NOT NULL,
  `nome_sobrenome` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `senha` varchar(15) NOT NULL,
  `cidade` varchar(20) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `data_cadastro` datetime NOT NULL,
  `modificado` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome_sobrenome`, `email`, `senha`, `cidade`, `estado`, `data_cadastro`, `modificado`) VALUES
(1, 'administrador', 'administrador@teste.com.br', 'adm1234', 'Campinas', 'SP', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Sibele Ribeiro Campos Martins', 'sibelemartins@yahoo.com.br', '123456', 'Campinas', 'SP', '2019-08-06 19:39:04', '0000-00-00 00:00:00'),
(3, 'Joao da Silva', 'joaosilva@hotmail.com', '12345', 'Sao Paulo', 'SP', '2019-08-08 01:00:00', '0000-00-00 00:00:00'),
(4, 'Renato Augusto', 'renato.augusto@terra.com.br', 'decacampeao', 'Campinas', 'SP', '2019-08-08 01:06:34', '0000-00-00 00:00:00'),
(5, 'Ronaldo', 'ronaldo@gmail.com', '56789', 'Sao Paulo', 'SP', '2019-08-08 01:49:07', '0000-00-00 00:00:00'),
(6, 'Fabio', 'fabio@yahoo.com.br', 'sala', 'Belo Horizonte ', 'MG', '2019-08-08 02:02:34', '0000-00-00 00:00:00'),
(7, 'Gustavo', 'gustavo@hotmail.com', 'palmeiras', 'Campinas', 'SP', '2019-08-08 02:08:45', '2019-09-05 10:29:39'),
(8, 'Claudio Fernandes', 'claudio@bol.com.br', '123456', 'Vinhedo', 'SP', '2019-08-08 02:13:22', '2019-08-20 01:00:11'),
(9, 'teste', 'teste@teste.com.br', 'cobra', 'Sao Paulo', 'SP', '2019-08-08 03:06:04', '2019-08-22 22:50:53'),
(10, 'Joao Batista', 'joaob@gmail.com', 'ferro', 'Valinhos', 'SP', '2019-08-08 03:10:58', '0000-00-00 00:00:00'),
(21, 'Fabio Augusto', 'fabioaugusto@gmail.com', '12345', 'Campinas', 'SP', '2019-08-26 19:21:01', '2019-08-26 21:03:49'),
(23, 'teste3', 'teste3@teste.com.br', '12345678', 'campinas', 'SP', '2019-08-29 20:50:28', '2019-08-29 20:50:46'),
(24, 'Suarez Martins', 'smartins@teste.com.br', '1234', 'Porto Alegre', 'RS', '2019-09-05 16:36:22', '2019-09-05 16:44:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
