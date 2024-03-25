-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Jun-2023 às 02:35
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `prestador`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agenda`
--

CREATE TABLE `agenda` (
  `idagenda` int(10) UNSIGNED NOT NULL,
  `idservico` int(10) UNSIGNED NOT NULL,
  `idcliente` int(10) UNSIGNED NOT NULL,
  `data_agenda` date DEFAULT NULL,
  `horario` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `idcliente` int(10) UNSIGNED NOT NULL,
  `nome` varchar(80) DEFAULT NULL,
  `celular` varchar(30) DEFAULT NULL,
  `data` int(11) NOT NULL,
  `horario` int(11) NOT NULL,
  `descritivo` varchar(1500) NOT NULL,
  `prestadorservicos` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`idcliente`, `nome`, `celular`, `data`, `horario`, `descritivo`, `prestadorservicos`) VALUES
(1, 'Gabriel', '14 998999999', 23052023, 2138, 'Barbeiro', 'Carlos'),
(2, 'Sandra', NULL, 0, 0, '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `prestador`
--

CREATE TABLE `prestador` (
  `idprestador` int(10) UNSIGNED NOT NULL,
  `nome` varchar(80) DEFAULT NULL,
  `data` int(11) NOT NULL,
  `horario` int(11) NOT NULL,
  `descritivo` varchar(1500) NOT NULL,
  `prestadorservicos` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `servico`
--

CREATE TABLE `servico` (
  `idservico` int(10) UNSIGNED NOT NULL,
  `descritivo` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `servico_prestador`
--

CREATE TABLE `servico_prestador` (
  `idservico_prestador` int(10) UNSIGNED NOT NULL,
  `idprestador` int(10) UNSIGNED NOT NULL,
  `idservico` int(10) UNSIGNED NOT NULL,
  `preco` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`idagenda`),
  ADD KEY `agenda_FKIndex1` (`idcliente`),
  ADD KEY `agenda_FKIndex2` (`idservico`);

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idcliente`);

--
-- Índices para tabela `prestador`
--
ALTER TABLE `prestador`
  ADD PRIMARY KEY (`idprestador`);

--
-- Índices para tabela `servico`
--
ALTER TABLE `servico`
  ADD PRIMARY KEY (`idservico`);

--
-- Índices para tabela `servico_prestador`
--
ALTER TABLE `servico_prestador`
  ADD PRIMARY KEY (`idservico_prestador`),
  ADD KEY `servico_prestador_FKIndex1` (`idservico`),
  ADD KEY `servico_prestador_FKIndex2` (`idprestador`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `agenda`
--
ALTER TABLE `agenda`
  MODIFY `idagenda` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idcliente` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `prestador`
--
ALTER TABLE `prestador`
  MODIFY `idprestador` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `servico`
--
ALTER TABLE `servico`
  MODIFY `idservico` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `servico_prestador`
--
ALTER TABLE `servico_prestador`
  MODIFY `idservico_prestador` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `agenda`
--
ALTER TABLE `agenda`
  ADD CONSTRAINT `agenda_ibfk_1` FOREIGN KEY (`idcliente`) REFERENCES `cliente` (`idcliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `agenda_ibfk_2` FOREIGN KEY (`idservico`) REFERENCES `servico` (`idservico`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `servico_prestador`
--
ALTER TABLE `servico_prestador`
  ADD CONSTRAINT `servico_prestador_ibfk_1` FOREIGN KEY (`idservico`) REFERENCES `servico` (`idservico`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `servico_prestador_ibfk_2` FOREIGN KEY (`idprestador`) REFERENCES `prestador` (`idprestador`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
