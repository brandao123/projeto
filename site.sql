-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 29-Jan-2018 às 23:29
-- Versão do servidor: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `site`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(4) NOT NULL,
  `nome` varchar(255) COLLATE utf8_bin NOT NULL,
  `cpf` bigint(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `senha` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fucionario`
--

CREATE TABLE `fucionario` (
  `id` int(4) NOT NULL,
  `nome` varchar(255) COLLATE utf8_bin NOT NULL,
  `cpf` bigint(11) NOT NULL,
  `idade` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id` int(4) NOT NULL,
  `nome` varchar(255) COLLATE utf8_bin NOT NULL,
  `descricao` varchar(255) COLLATE utf8_bin NOT NULL,
  `categoria` varchar(255) COLLATE utf8_bin NOT NULL,
  `foto` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id`, `nome`, `descricao`, `categoria`, `foto`) VALUES
(2, 'iphone6', 'Marca: Apple Sistema operacional: iOS Tamanho da tela: Tela de 4,7 polegadas ResoluÃ§Ã£o da cÃ¢mera traseira: 5 megapixels Recurso: 4G LTE', 'celular', 'cel1.jpg'),
(3, 'iphone6plus', 'Marca: Apple Sistema operacional: iOS Autonomia da bateria: 24 horas de conversaÃ§Ã£o Peso: 172 gramas MemÃ³ria interna: 16 GB NÃºmero de chips: 1 chip', 'celular', 'cel2.jpg'),
(5, 'pendrive', 'Pen Drives 8 GB SanDisk ', 'informatica', 'info1.jpg'),
(6, 'cartucho', 'cartucho tinta preta', 'informatica', 'info2.jpg'),
(7, 'pendrivee', '8gb', 'informatica', 'info3.jpg'),
(8, 'illuminati', 'Wilson conseguiu inverter todas as minhas polaridades mentais, como se me tivessem arrastado atravÃ©s do infinito.â€ Philip K. Dick â€œNada Ã© verdade. Tudo Ã© permissÃ­vel.â€ Hassan I Sabbah, fundador dos Illuminati em 1090 SerÃ¡ que toda a histÃ³ria n', 'livro', 'livro1.jpg'),
(9, 'imaginacao', 'Em A imaginaÃ§Ã£o, encontra-se um Sartre prÃ©-Existencialismo e prÃ©-Segunda Guerra Mundial, fazendo uso de seus estudos sobre a fenomenologia - mÃ©todo desenvolvido pelo filÃ³sofo alemÃ£o Edmund Husserl ', 'livro', 'livro2.jpg'),
(10, 'virando', 'Tudo se inicia quando AtÃ­lio, um espÃ­rito maligno e poderoso, lÃ­der de uma quadrilha de criminosos no submundo astral, decide que Mizael, seu protegido, deve reencarnar para levar o mal Ã  Terra. Afinal, o crime era a Ãºnica coisa que ele sabia fazer.', 'livro', 'livro3.jpg'),
(11, 'azus', 'Notebook Asus Vivobook X510UA-BR485T Intel Core i5 4GB 1TB Tela Nano Edge 15,6 Windows 10 - Vermelho', 'notebook', 'pc1.jpg'),
(12, 'iphone8', 'iPhone 8 Apple 64GB 4G Tela 4,7â€ - Retina CÃ¢m 12MP + Selfie 7MP iOS 11 Proc. Chip A11', 'celular', 'cel3.jpg'),
(13, 'camisaA', 'Camisa Preta, GG', 'camisa', 'camisa1.jpg'),
(14, 'camisaB', 'Camisa Preta, GG', 'camisa', 'camisa2.jpg'),
(15, 'camisaC', 'Camisa Preta, GG', 'camisa', 'camisa3.jpg'),
(16, 'POKI', 'Multiplayer', 'jogo', 'jogo1.jpg'),
(17, 'JM1', 'Jogos motais, Terror', 'jogo', 'jogo2.jpg'),
(18, 'angrybird', 'Infantil', 'jogo', 'jogo3.jpg'),
(19, 'samsung', 'Cinza', 'notebook', 'pc2.jpg'),
(20, 'dell', 'Cinza', 'notebook', 'pc3.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fucionario`
--
ALTER TABLE `fucionario`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fucionario`
--
ALTER TABLE `fucionario`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
