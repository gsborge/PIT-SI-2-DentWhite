-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01/11/2025 às 01:08
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dentwhite`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL,
  `nome_cliente` varchar(100) DEFAULT NULL,
  `email_cliente` varchar(100) DEFAULT NULL,
  `total` decimal(10,2) DEFAULT NULL,
  `produtos` text NOT NULL,
  `data_pedido` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `pedidos`
--

INSERT INTO `pedidos` (`id`, `nome_cliente`, `email_cliente`, `total`, `produtos`, `data_pedido`) VALUES
(1, 'Gustavo Borges', 'gsborge@outlook.com', 530.00, '', '2025-10-27 20:00:40'),
(3, 'Cliente DentWhite', 'cliente@dentwhite.com', 1837.87, 'Alicate Perfurador Ainsworth - Golgran (x1) - R$ 129,99\nAlginato Tipo I Jeltrate Plus - Dentsply Sirona (x1) - R$ 60,99\nAnestésico Alphacaine 2% 1:100.000 - DFL (x1) - R$ 173,00\nTurbina AX1 LED PB - Gnatus (x1) - R$ 1.264,99\nRolo para Esterilização 30cm X 100m - Masterdent (x1) - R$ 208,90\n', '2025-10-29 19:28:21'),
(4, 'Neyde', 'neydels@outlook.com', 1426.96, 'Alicate Perfurador Ainsworth - Golgran (x1) - R$ 129,99\nPinça Clínica Para Algodão - Fava (x1) - R$ 12,99\nBráquete de Aço Roth Max 022 - Morelli (x1) - R$ 18,99\nTurbina AX1 LED PB - Gnatus (x1) - R$ 1.264,99\n', '2025-10-30 18:11:08'),
(6, 'Gabrielly Gonçalves', 'gabygoncalvez@gmail.com', 1384.89, 'Alicate Perfurador Ainsworth - Golgran (x9) - R$ 1.169,91\nLuva para Procedimento Látex com Pó - Medix (x1) - R$ 28,99\nAnestésico Alphacaine 2% 1:100.000 - DFL (x1) - R$ 173,00\nPinça Clínica Para Algodão - Fava (x1) - R$ 12,99\n', '2025-10-31 23:11:23');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `senha` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'Gustavo Borges', 'gsborge@outlook.com', '123'),
(4, 'neto', 'neto@gmail.com', '1234'),
(5, 'Neyde', 'neydels@outlook.com', '123'),
(6, 'Gabrielly Gonçalves', 'gabygoncalvez@gmail.com', 'gaby123');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
