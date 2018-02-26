-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 22-Fev-2018 às 23:53
-- Versão do servidor: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Estrutura da tabela `celular`
--

CREATE TABLE `celular` (
  `id` int(4) NOT NULL,
  `nome` varchar(255) COLLATE utf8_bin NOT NULL,
  `descricao` varchar(255) COLLATE utf8_bin NOT NULL,
  `categoria` varchar(255) COLLATE utf8_bin NOT NULL,
  `foto` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `celular`
--

INSERT INTO `celular` (`id`, `nome`, `descricao`, `categoria`, `foto`) VALUES
(1, 'Iphone 6', 'Rose', 'celular', 'cel1.jpg'),
(2, 'Iphone 6 Plus', 'Cinza Espacial', 'celular', 'cel2.jpg'),
(3, 'Iphone 8', 'Branco', 'celular', 'cel3.jpg');

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
-- Estrutura da tabela `computador`
--

CREATE TABLE `computador` (
  `id` int(4) NOT NULL,
  `nome` varchar(255) COLLATE utf8_bin NOT NULL,
  `descricao` varchar(255) COLLATE utf8_bin NOT NULL,
  `categoria` varchar(255) COLLATE utf8_bin NOT NULL,
  `foto` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `computador`
--

INSERT INTO `computador` (`id`, `nome`, `descricao`, `categoria`, `foto`) VALUES
(1, 'Notebook Asus', 'I5, 8gb de memoria 1TB', 'computador', 'pc1.jpg'),
(2, 'Notebook Sansumg', 'I5, 8gb 1tb', 'computador', 'pc2.jpg'),
(3, 'Notebook Dell', 'I3, 8gb 1tb', 'computador', 'pc3.jpg');

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
-- Estrutura da tabela `informatica`
--

CREATE TABLE `informatica` (
  `id` int(4) NOT NULL,
  `nome` varchar(255) COLLATE utf8_bin NOT NULL,
  `descricao` varchar(255) COLLATE utf8_bin NOT NULL,
  `categoria` varchar(255) COLLATE utf8_bin NOT NULL,
  `foto` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `informatica`
--

INSERT INTO `informatica` (`id`, `nome`, `descricao`, `categoria`, `foto`) VALUES
(1, 'Pen Driver sandisk', '8GB, Preto e vermelho', 'informatica', 'info1.jpg'),
(2, 'Pen Drive Multilaser ', '16GB', 'informatica', 'info2.jpg'),
(3, 'Pen Drive Sony', '8GB, Preto', 'informatica', 'info3.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogo`
--

CREATE TABLE `jogo` (
  `id` int(4) NOT NULL,
  `nome` varchar(255) COLLATE utf8_bin NOT NULL,
  `descricao` varchar(255) COLLATE utf8_bin NOT NULL,
  `categoria` varchar(255) COLLATE utf8_bin NOT NULL,
  `foto` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `jogo`
--

INSERT INTO `jogo` (`id`, `nome`, `descricao`, `categoria`, `foto`) VALUES
(1, 'POKI', 'Aventura', 'jogo', 'jogo1.jpg'),
(2, 'Jogos Mortais', 'Terror', 'jogo', 'jogo2.jpg'),
(3, 'Angry Birds', 'Infantil', 'jogo', 'jogo3.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `livro`
--

CREATE TABLE `livro` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) COLLATE utf8_bin NOT NULL,
  `descricao` varchar(255) COLLATE utf8_bin NOT NULL,
  `categoria` varchar(255) COLLATE utf8_bin NOT NULL,
  `foto` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `livro`
--

INSERT INTO `livro` (`id`, `nome`, `descricao`, `categoria`, `foto`) VALUES
(1, 'Illuminati', 'Ficcao Cientifica', 'livro', 'livro1.jpg'),
(2, 'Imaginacao', 'Aventura', 'livro', 'livro2.jpg'),
(3, 'Virando o Jogo', 'Acao', 'livro', 'livro3.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `roupa`
--

CREATE TABLE `roupa` (
  `id` int(4) NOT NULL,
  `nome` varchar(255) COLLATE utf8_bin NOT NULL,
  `descricao` varchar(255) COLLATE utf8_bin NOT NULL,
  `categoria` varchar(255) COLLATE utf8_bin NOT NULL,
  `foto` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `roupa`
--

INSERT INTO `roupa` (`id`, `nome`, `descricao`, `categoria`, `foto`) VALUES
(1, 'Camisa Black', 'Preta, GG', 'roupa', 'camisa1.jpg'),
(2, 'Casaco Black', 'Preto, GG', 'roupa', 'camisa2.jpg'),
(3, 'Camisa Colorida', 'Colorida, GG', 'roupa', 'camisa3.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `celular`
--
ALTER TABLE `celular`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `computador`
--
ALTER TABLE `computador`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fucionario`
--
ALTER TABLE `fucionario`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `informatica`
--
ALTER TABLE `informatica`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jogo`
--
ALTER TABLE `jogo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `livro`
--
ALTER TABLE `livro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roupa`
--
ALTER TABLE `roupa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `celular`
--
ALTER TABLE `celular`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `computador`
--
ALTER TABLE `computador`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `fucionario`
--
ALTER TABLE `fucionario`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `informatica`
--
ALTER TABLE `informatica`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `jogo`
--
ALTER TABLE `jogo`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `livro`
--
ALTER TABLE `livro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `roupa`
--
ALTER TABLE `roupa`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
