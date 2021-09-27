-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Set-2021 às 23:46
-- Versão do servidor: 10.4.20-MariaDB
-- versão do PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `hotel`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `quarto`
--

CREATE TABLE `quarto` (
  `id` int(10) NOT NULL,
  `nome` varchar(20) COLLATE utf8_general_ci NOT NULL,
  `descricao` varchar(500) COLLATE utf8_general_ci NOT NULL,
  `foto` varchar(100) COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `quarto`
--

INSERT INTO `quarto` (`id`, `nome`, `descricao`, `foto`) VALUES
(6, 'BANGALO', 'Apartamento com vista pro mar, acomoda casal e 2 criança até 10 anos', '082b8d14605b9750aa657d19ef0ebdc3.jpg'),
(7, 'LOFT', 'Apartamento com vista pro mar, suporta um casal.                                                                                    Adicionais: Jantar romântico', '44d97ca0e60020b0935aca3050275ba9.jpg'),
(8, 'HIDRO', 'Apartamento com vista pro mar, acomoda casal e 1 criança até 10 anos', '5696e0f3176ca2e4dda950edb13c3fb9.jpg');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `quarto`
--
ALTER TABLE `quarto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `quarto`
--
ALTER TABLE `quarto`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
