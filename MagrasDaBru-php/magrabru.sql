-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Ago-2022 às 22:27
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `magrabru`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `bruna`
--

CREATE TABLE `bruna` (
  `nome` varchar(100) NOT NULL,
  `idade` varchar(100) NOT NULL,
  `tipagem_sang` varchar(100) NOT NULL,
  `profissao` varchar(100) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `cep` varchar(100) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `tel` varchar(100) NOT NULL,
  `cel` varchar(100) NOT NULL,
  `data_nasc` varchar(100) NOT NULL,
  `estado_ci` varchar(100) NOT NULL,
  `sexo` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `emergencia` varchar(100) NOT NULL,
  `queixa` varchar(100) NOT NULL,
  `duracao` varchar(100) NOT NULL,
  `peso` varchar(100) NOT NULL,
  `altura` varchar(100) NOT NULL,
  `tratamnet_est_ant` varchar(100) NOT NULL,
  `qual_trat_est` varchar(100) DEFAULT NULL,
  `uso_medi` varchar(100) NOT NULL,
  `qual_medi` varchar(100) DEFAULT NULL,
  `alergia` varchar(100) NOT NULL,
  `qual` varchar(100) DEFAULT NULL,
  `anticonce` varchar(100) NOT NULL,
  `qual_anticonce` varchar(100) DEFAULT NULL,
  `data_prim_mesntru` varchar(100) NOT NULL,
  `gestante` varchar(100) NOT NULL,
  `lactante` varchar(100) NOT NULL,
  `gestacoes` varchar(100) DEFAULT NULL,
  `quant_gest` varchar(100) DEFAULT NULL,
  `quant_temp` varchar(100) DEFAULT NULL,
  `convulsoes` varchar(100) NOT NULL,
  `frequen_convul` varchar(100) DEFAULT NULL,
  `problem_cardi` varchar(100) NOT NULL,
  `qual_cardi` varchar(100) DEFAULT NULL,
  `problem_renal` varchar(100) NOT NULL,
  `qual_renal` varchar(100) DEFAULT NULL,
  `problem_hepa` varchar(100) NOT NULL,
  `alter_psico` varchar(100) NOT NULL,
  `patologi_croni` varchar(100) NOT NULL,
  `qual_patolog` varchar(100) DEFAULT NULL,
  `disfun_hormonal` varchar(100) NOT NULL,
  `qual_disfun` varchar(100) DEFAULT NULL,
  `doenca_auto_imune` varchar(100) NOT NULL,
  `qual_doenca` varchar(100) DEFAULT NULL,
  `cirurgias` varchar(100) NOT NULL,
  `qual_cirurg` varchar(100) DEFAULT NULL,
  `cicatri_hipertrofica` varchar(100) NOT NULL,
  `anestesia_odontolo` varchar(100) NOT NULL,
  `reacao_qual` varchar(100) DEFAULT NULL,
  `tabagismo` varchar(100) NOT NULL,
  `quant_ciga_dia` varchar(100) DEFAULT NULL,
  `bebida_alcool` varchar(100) NOT NULL,
  `frequen_alcool` varchar(100) DEFAULT NULL,
  `ingest_agua` varchar(100) NOT NULL,
  `quant_agua_dia` varchar(100) NOT NULL,
  `dieta` varchar(100) NOT NULL,
  `qual_dieta` varchar(100) DEFAULT NULL,
  `atividade_fisica` varchar(100) NOT NULL,
  `tipo_ativ_fisi` varchar(100) DEFAULT NULL,
  `frequen_ativi` varchar(100) DEFAULT NULL,
  `rg` varchar(100) NOT NULL,
  `cpf` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `consulta`
--

CREATE TABLE `consulta` (
  `idConsulta` int(11) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `dia_consulta` varchar(40) NOT NULL,
  `hora_consulta` varchar(80) NOT NULL,
  `pago` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `consulta`
--

INSERT INTO `consulta` (`idConsulta`, `nome`, `dia_consulta`, `hora_consulta`, `pago`) VALUES
(4, 'Roberto', '2022-09-03T14:30', '', 0),
(5, 'Daiane', '2022-02-10T09:30', '', 0),
(8, 'Eduardo', '2000-02-21T10:00', '', 0),
(9, 'Patricia', '2022-08-06', '01:22', 0),
(10, 'Daiane', 'Daiane', '05:25', 0),
(11, 'Eduardo', 'Eduardo', '05:30', 0),
(12, 'Daniel', '2000-02-05', '05:50', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `email` varchar(80) NOT NULL,
  `senha` varchar(80) NOT NULL,
  `nome` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`email`, `senha`, `nome`) VALUES
('admin@gmail.com', '123456', 'admin'),
('drieli', '123456', 'Drieli'),
('solange@gmail.com', '123456', 'Solange');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `bruna`
--
ALTER TABLE `bruna`
  ADD PRIMARY KEY (`cpf`);

--
-- Índices para tabela `consulta`
--
ALTER TABLE `consulta`
  ADD PRIMARY KEY (`idConsulta`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `consulta`
--
ALTER TABLE `consulta`
  MODIFY `idConsulta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
