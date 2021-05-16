-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14-Maio-2021 às 19:48
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `pet`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `itens`
--

CREATE TABLE `itens` (
  `id` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `price` varchar(10) NOT NULL,
  `caminho` varchar(30) NOT NULL,
  `star` int(2) NOT NULL,
  `tag` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `itens`
--

INSERT INTO `itens` (`id`, `nome`, `price`, `caminho`, `star`, `tag`) VALUES
(14, 'Alan Henrique Silva', '10', '/public/products/7JL942Hm.jpg', 6, 'Prime'),
(15, 'teste', '10,99', '/public/products/tUxx3sBb.png', 7, 'teste'),
(16, 'teste', '10,99', '/public/products/4eDsVNqX.jpg', 7, 'teste');

-- --------------------------------------------------------

--
-- Estrutura da tabela `nav`
--

CREATE TABLE `nav` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `tag` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `nav`
--

INSERT INTO `nav` (`id`, `nome`, `tag`) VALUES
(15, 'Comida', 'prime');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nick` varchar(30) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `email` varchar(30) NOT NULL,
  `cargo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id`, `nick`, `pass`, `email`, `cargo`) VALUES
(1, 'Alan Henrique', '202cb962ac59075b964b07152d234b70', 'allanhivdc@gmail.com', 'admin'),
(2, 'Leonardo', '202cb962ac59075b964b07152d234b70', 'leonardocampos303@gmail.com', 'user'),
(3, 'asdasd', '7815696ecbf1c96e6894b779456d330e', 'asddasd@sadasd', 'user'),
(4, 'ASDSA', '202cb962ac59075b964b07152d234b70', 'SADSDA@SADSAD', 'user'),
(5, 'aaa', '202cb962ac59075b964b07152d234b70', 'aa@aa', 'user'),
(6, 'qwe', '76d80224611fc919a5d54f0ff9fba446', 'brunomarsusxd@gmail.com', 'user'),
(7, 'teste', '202cb962ac59075b964b07152d234b70', 'teste@teste', 'user'),
(8, 'user', '202cb962ac59075b964b07152d234b70', 'rse@ts', 'user');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `itens`
--
ALTER TABLE `itens`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `nav`
--
ALTER TABLE `nav`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `itens`
--
ALTER TABLE `itens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `nav`
--
ALTER TABLE `nav`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
