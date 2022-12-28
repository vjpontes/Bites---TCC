-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:49887
-- Generation Time: Nov 22, 2020 at 11:33 AM
-- Server version: 5.7.9-log
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tcc`
--

-- --------------------------------------------------------

--
-- Table structure for table `cadacessorios`
--

CREATE TABLE `cadacessorios` (
  `id_produto` int(11) NOT NULL,
  `produto` varchar(255) NOT NULL,
  `preco` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cadacessorios`
--

INSERT INTO `cadacessorios` (`id_produto`, `produto`, `preco`, `img`) VALUES
(1, 'AirPods Pro - Apple', '$  1.709,05', 'img/airpods.png'),
(2, 'Redmi AirDots - Xiaomi', '$ 84,90', 'img/fonexiaomi.png'),
(3, 'Fone Bluetooth - Samsung', '$ 105,90', 'img/fonesansung.png'),
(4, 'Fone - Huawei', '$ 899,00', 'img/fonesla.png'),
(5, 'Fone - LG', '$ 18,90', 'img/fonelg.png'),
(6, 'EarPods - Apple', '$ 189,90', 'img/foneapple.png'),
(7, 'Carregador - Apple', '$ 124,90', 'img/carregadorapple.png'),
(8, 'Carregador - Xiaomi', '$ 38,90', 'img/carregadorxiaomi.png'),
(9, 'Carregador - Samsung', '$ 29,99', 'img/carregadorsansung.png'),
(10, 'Carregador - Motorola', '$ 36,00', 'img/carregadormotorola.png'),
(11, 'Carregador - Huawei', '$ 43,90', 'img/carregadorsla.png'),
(12, 'Carregador - LG', '$ 33,32', 'img/carregadorlg.png');

-- --------------------------------------------------------

--
-- Table structure for table `cadfuncionario`
--

CREATE TABLE `cadfuncionario` (
  `nome` varchar(25) NOT NULL,
  `sobrenome` varchar(25) NOT NULL,
  `data_nasc` varchar(200) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `cpf` int(13) NOT NULL,
  `estado` varchar(23) NOT NULL,
  `cidade` varchar(23) NOT NULL,
  `bairro` varchar(23) NOT NULL,
  `endereco` varchar(89) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cadfuncionario`
--

INSERT INTO `cadfuncionario` (`nome`, `sobrenome`, `data_nasc`, `sexo`, `cpf`, `estado`, `cidade`, `bairro`, `endereco`, `email`) VALUES
('Vinicius', 'Pontes', '2003-07-11', 'Masculino', 2424, 'SP', 'SumarÃ©', 'Paruqe Villa Flores', 'Rua da Fazenda, 25', 'pontes.vjp@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `cadpedido`
--

CREATE TABLE `cadpedido` (
  `id_pedido` int(11) NOT NULL,
  `nomecomprador` varchar(50) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `preco` varchar(255) NOT NULL,
  `dataentrega` varchar(255) NOT NULL,
  `formapagamento` varchar(255) NOT NULL,
  `numerocartao` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cadproduto`
--

CREATE TABLE `cadproduto` (
  `id_produto` int(11) NOT NULL,
  `produto` varchar(75) NOT NULL,
  `preco` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cadproduto`
--

INSERT INTO `cadproduto` (`id_produto`, `produto`, `preco`, `img`) VALUES
(4, 'iPhone 11 Pro Max - Apple', '$ 7.789,05', 'img/iphone11pm.jpg'),
(5, 'Galaxy S20 Ultra - Samsung', '$ 7.199,10', 'img/s20ultra.jpg'),
(6, 'Galaxy Note 9 - Samsung', '$ 4.099,00', 'img/galaxyn9.jpg'),
(7, 'G8 Play - Motorola', '$ 1.099,00', 'img/g8play.jpg'),
(8, 'P30 Pro - Huawei', '$ 3.779,10', 'img/p30.jpg'),
(9, 'iPhone XS - Apple', '$ 6.649,00', 'img/iphonexs.jpg'),
(10, 'Galaxy S10 - Samsung', '$ 2.849,05', 'img/s10.jpg'),
(11, 'Galaxy Z Fold 2 - Samsung', '$ 5.999,00', 'img/gz2f.jpg'),
(12, 'Mate 10 Pro - Huawei', '$ 5.580,80', 'img/hm10p.jpg'),
(14, 'iPhone 8 Plus - Apple', '$ 3.299,00', 'img/iphone8p.jpg'),
(15, 'G8S ThinQ - LG', '$ 2.654,10', 'img/lgg8s.jpg'),
(16, 'Galaxy M31 - Samsung', 'R$ 1.799,10', 'img/m30.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cadprodutonovo`
--

CREATE TABLE `cadprodutonovo` (
  `id_produto` int(11) NOT NULL,
  `produto` varchar(255) NOT NULL,
  `preco` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cadprodutonovo`
--

INSERT INTO `cadprodutonovo` (`id_produto`, `produto`, `preco`, `img`) VALUES
(1, 'Galaxy Note10 - Samsung', '$ 3.149,10', 'img/galaxyn10.jpg'),
(2, 'Galaxy A71 - Samsung', '$ 2.026,47', 'img/a71.jpg'),
(3, 'P20 Lite - Huawei', '$ 1.899,90', 'img/p20l.jpg'),
(4, 'iPhone 6 Plus - Apple', '$ 1.620,00', 'img/iphone6p.jpg'),
(5, 'K10 - LG', '$ 1.499,00', 'img/lgk10.jpg'),
(6, 'P30 Lite - Huawei', '$ 1.899,90', 'img/p30l.jpg'),
(7, 'P20 Pro - Huawei', '$ 372,08', 'img/p20p.jpg'),
(8, 'iPhone 7 Plus - Apple', '$ 1.270,00', 'img/iphone7p.jpg'),
(9, 'Galaxy A51 - Samsung', '$ 1.709,10', 'img/a51.jpg'),
(10, 'Redmi Note 9 - Xiaomi', '$ 1.468,07', 'img/minote9.jpg'),
(11, 'One - Motorola', '$ 1.199,00', 'img/motoone.jpg'),
(12, 'Q6 - LG', '$ 1.390,00', 'img/lgq6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contato`
--

CREATE TABLE `contato` (
  `id_contato` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `sobrenome` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `endereco` varchar(200) NOT NULL,
  `cidade` varchar(200) NOT NULL,
  `estado` varchar(200) NOT NULL,
  `mensagem` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contato`
--

INSERT INTO `contato` (`id_contato`, `nome`, `sobrenome`, `email`, `endereco`, `cidade`, `estado`, `mensagem`) VALUES
(10, 'Carlos', 'Eduardo', 'carlosedu@gmail.com', 'Espanha', 'Sumare', 'AM', 'OlÃ¡, gostaria de parabenizar o serviÃ§o de vocÃªs, muito bom!!!'),
(11, 'Roberto', 'Dinamite', 'robertao@gmail.com', 'Villa Flora', 'SumarÃ©', 'SP', 'Fala mano! Amei seu produto, chegou seguro aqui em casa. Ã“timo serviÃ§o !!!');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `usuario_id` int(11) NOT NULL,
  `usuario` varchar(200) DEFAULT NULL,
  `senha` int(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`usuario_id`, `usuario`, `senha`) VALUES
(1, 'bites', 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cadacessorios`
--
ALTER TABLE `cadacessorios`
  ADD PRIMARY KEY (`id_produto`);

--
-- Indexes for table `cadfuncionario`
--
ALTER TABLE `cadfuncionario`
  ADD PRIMARY KEY (`cpf`);

--
-- Indexes for table `cadpedido`
--
ALTER TABLE `cadpedido`
  ADD PRIMARY KEY (`id_pedido`);

--
-- Indexes for table `cadproduto`
--
ALTER TABLE `cadproduto`
  ADD PRIMARY KEY (`id_produto`);

--
-- Indexes for table `cadprodutonovo`
--
ALTER TABLE `cadprodutonovo`
  ADD PRIMARY KEY (`id_produto`);

--
-- Indexes for table `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`id_contato`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cadacessorios`
--
ALTER TABLE `cadacessorios`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `cadpedido`
--
ALTER TABLE `cadpedido`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cadproduto`
--
ALTER TABLE `cadproduto`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `cadprodutonovo`
--
ALTER TABLE `cadprodutonovo`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `contato`
--
ALTER TABLE `contato`
  MODIFY `id_contato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
