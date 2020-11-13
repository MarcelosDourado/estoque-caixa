-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 13-Nov-2020 às 14:01
-- Versão do servidor: 10.4.10-MariaDB
-- versão do PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `estoque`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `historico`
--

DROP TABLE IF EXISTS `historico`;
CREATE TABLE IF NOT EXISTS `historico` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `atualizacao` varchar(200) DEFAULT '0',
  `dia` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `historico`
--

INSERT INTO `historico` (`id`, `atualizacao`, `dia`) VALUES
(2, 'O livro Musashi foi inserido ', '2020-09-05 16:57:04'),
(3, 'O livro Torre negra 2 foi alterado ', '2020-09-05 17:28:51'),
(4, 'O livro Musashi foi inserido ', '2020-09-05 17:32:44'),
(5, 'O livro Ascenção foi inserido ', '2020-09-05 17:44:12'),
(6, 'O livro Ascenção foi inserido ', '2020-09-05 17:45:23'),
(7, 'O livro Ascenção foi inserido ', '2020-09-05 17:49:34'),
(8, 'O livro Ascenção foi inserido ', '2020-09-05 17:54:34');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` int(200) DEFAULT 0,
  `nome` varchar(50) DEFAULT '0',
  `dia` date NOT NULL,
  `descricao` varchar(200) DEFAULT '0',
  `valor` float DEFAULT 0,
  `qtd` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `codigo`, `nome`, `dia`, `descricao`, `valor`, `qtd`) VALUES
(1, 1, 'Insonia', '2019-08-22', 'Livro de Stephen King', 32, 5),
(2, 2, 'IT', '2020-07-21', 'Terror', 25, 4),
(3, 3, 'Torre negra 2', '2000-08-22', 'Suspense Trilogia meio podre', 29.9, 4),
(4, 4, 'Mitologia', '2020-08-18', 'história', 39.9, 5),
(5, 5, 'Lendas', '2020-08-15', 'história', 39.9, 4),
(6, 666, 'Misery', '2020-09-02', 'Uma trama sobre uma psicopata', 39.9, 6);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
