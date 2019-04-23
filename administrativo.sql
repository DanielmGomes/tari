-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 06-Mar-2019 às 15:25
-- Versão do servidor: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `administrativo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `dependente`
--

CREATE TABLE `dependente` (
  `idDependente` int(10) UNSIGNED NOT NULL,
  `dependente` varchar(40) NOT NULL,
  `responsavel` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `dependente`
--



-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedor`
--

CREATE TABLE `fornecedor` (
  `idFornecedor` int(11) NOT NULL,
  `razaoSocial` varchar(60) NOT NULL,
  `fantasia` varchar(45) NOT NULL,
  `endereco` varchar(45) NOT NULL,
  `numero` varchar(5) DEFAULT NULL,
  `bairro` varchar(45) NOT NULL,
  `estado` varchar(45) NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `cep` varchar(9) NOT NULL,
  `telefone` varchar(14) NOT NULL,
  `celular` varchar(17) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `cnpj` varchar(18) NOT NULL,
  `inscricaoEstadual` varchar(15) NOT NULL,
  `atividade` varchar(45) NOT NULL,
  `contato` varchar(45) NOT NULL,
  `funcao` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `idFuncionario` int(11) NOT NULL,
  `cracha` varchar(5) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `empresa` varchar(45) NOT NULL,
  `pis` varchar(16) NOT NULL,
  `registro` varchar(5) DEFAULT NULL,
  `ctps` int(11) NOT NULL,
  `serie` varchar(10) NOT NULL,
  `funcao` varchar(45) NOT NULL,
  `departamento` varchar(45) NOT NULL,
  `setor` varchar(45) NOT NULL,
  `centroCusto` varchar(45) NOT NULL,
  `admissao` int(11) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `eleitor` varchar(14) DEFAULT NULL,
  `reservista` varchar(6) DEFAULT NULL,
  `estadoCivil` varchar(45) DEFAULT NULL,
  `nascimento` varchar(10) NOT NULL,
  `sexo` char(1) NOT NULL,
  `rg` varchar(8) NOT NULL,
  `orgaoEmissor` varchar(3) NOT NULL,
  `cnh` varchar(12) DEFAULT NULL,
  `inicioExperiencia` int(11) NOT NULL,
  `fimExperiencia` int(11) NOT NULL,
  `endereco` varchar(45) NOT NULL,
  `bairro` varchar(45) NOT NULL,
  `estado` varchar(45) NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `cep` varchar(45) NOT NULL,
  `telefone` varchar(14) NOT NULL,
  `celular` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `escolaridade` varchar(45) NOT NULL,
  `salario` varchar(10) NOT NULL,
  `numero` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `funcionario`
--


--
-- Indexes for dumped tables
--

--
-- Indexes for table `dependente`
--
ALTER TABLE `dependente`
  ADD PRIMARY KEY (`idDependente`);

--
-- Indexes for table `fornecedor`
--
ALTER TABLE `fornecedor`
  ADD PRIMARY KEY (`idFornecedor`);

--
-- Indexes for table `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`idFuncionario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dependente`
--
ALTER TABLE `dependente`
  MODIFY `idDependente` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `fornecedor`
--
ALTER TABLE `fornecedor`
  MODIFY `idFornecedor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `idFuncionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
