-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Set-2020 às 22:53
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `tcc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadacessorios`
--

CREATE TABLE `cadacessorios` (
  `id_produto` int(11) NOT NULL,
  `produto` varchar(255) NOT NULL,
  `preco` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadacessorios`
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
-- Estrutura da tabela `cadcliente`
--

CREATE TABLE `cadcliente` (
  `nome` varchar(15) NOT NULL,
  `sobrenome` varchar(20) NOT NULL,
  `cpf_cnpj` int(20) NOT NULL,
  `data_nasc` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `num_cel` int(13) NOT NULL,
  `cep` bigint(15) NOT NULL,
  `estado` varchar(23) NOT NULL,
  `cidade` varchar(23) NOT NULL,
  `bairro` varchar(23) NOT NULL,
  `endereco` varchar(89) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadcliente`
--

INSERT INTO `cadcliente` (`nome`, `sobrenome`, `cpf_cnpj`, `data_nasc`, `email`, `num_cel`, `cep`, `estado`, `cidade`, `bairro`, `endereco`) VALUES
('vinicius ', 'pontes', 123, '0000-00-00', '', 0, 0, '', '', '', ''),
('', '', 131, '0000-00-00', '', 0, 0, '', '', '', ''),
('Teste', 'Teste', 12058, '2020-08-15', 'Teste@Teste', 123, 5698, 'Sp', 'Sp', '', ''),
('ppo', 'ppo', 12324, '0000-00-00', '', 0, 0, '', '', '', ''),
('vinicius pontes', 'pontes', 23423, '2020-08-25', 'vinnypts@gmail.com', 2147483647, 32132131, 'so', 'wfewf', 'wefwe', 'wew'),
('', '', 3423423, '2020-10-02', '', 0, 0, '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadfuncionario`
--

CREATE TABLE `cadfuncionario` (
  `nome` varchar(25) NOT NULL,
  `sobrenome` varchar(25) NOT NULL,
  `data_nasc` date NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `rg` int(15) NOT NULL,
  `cpf` int(13) NOT NULL,
  `cep` int(15) NOT NULL,
  `estado` varchar(23) NOT NULL,
  `cidade` varchar(23) NOT NULL,
  `bairro` varchar(23) NOT NULL,
  `endereco` varchar(89) NOT NULL,
  `cargo` varchar(10000) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contato` int(15) NOT NULL,
  `admissao` varchar(255) NOT NULL,
  `salario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadpedido`
--

CREATE TABLE `cadpedido` (
  `id_pedido` int(11) NOT NULL,
  `nomecomprador` varchar(50) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `preco` varchar(255) NOT NULL,
  `dataentrega` varchar(255) NOT NULL,
  `formapagamento` varchar(255) NOT NULL,
  `numerocartao` int(11) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadpedido`
--

INSERT INTO `cadpedido` (`id_pedido`, `nomecomprador`, `tipo`, `preco`, `dataentrega`, `formapagamento`, `numerocartao`, `img`) VALUES
(27, 'Vinicius Pontes', 'Galaxy Note 9 - Samsung', '$ 4.099,00', '2020-09-25', 'Cartão de débito', 24151, ''),
(28, 'aaaaa', 'Galaxy Note 9 - Samsung', '$ 4.099,00', '2020-10-10', 'Cartão de crédito', 123123, ''),
(29, 'erwr', 'G8 Play - Motorola', '$ 1.099,00', '2020-10-01', 'Cartão de crédito', 21321, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadproduto`
--

CREATE TABLE `cadproduto` (
  `id_produto` int(11) NOT NULL,
  `produto` varchar(75) NOT NULL,
  `preco` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadproduto`
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
(13, 'Mi A3 - Xiaomi', '$ 1.629,00', 'img/mia3.jpg'),
(14, 'iPhone 8 Plus - Apple', '$ 3.299,00', 'img/iphone8p.jpg'),
(15, 'G8S ThinQ - LG', '$ 2.654,10', 'img/lgg8s.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadprodutonovo`
--

CREATE TABLE `cadprodutonovo` (
  `id_produto` int(11) NOT NULL,
  `produto` varchar(255) NOT NULL,
  `preco` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadprodutonovo`
--

INSERT INTO `cadprodutonovo` (`id_produto`, `produto`, `preco`, `img`) VALUES
(1, 'Galaxy Note10 - Samsung', '$ 3.149,10', 'img/galaxyn10.jpg'),
(2, 'Galaxy A71 - Samsung', '$ 2.026,47', 'img/a71.jpg'),
(3, 'P20 Lite - Huawei', '$ 1.899,90', 'img/p20l.jpg'),
(4, 'iPhone 6 Plus - Apple', '$ 1.620,00 usado', 'img/iphone6p.jpg'),
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
-- Estrutura da tabela `cadvenda`
--

CREATE TABLE `cadvenda` (
  `datavenda` date NOT NULL,
  `dataentrega` date NOT NULL,
  `nomecliente` varchar(255) NOT NULL,
  `cpfcnpj` int(11) NOT NULL,
  `pedido` varchar(255) NOT NULL,
  `valor` int(11) NOT NULL,
  `formapagamento` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadvenda`
--

INSERT INTO `cadvenda` (`datavenda`, `dataentrega`, `nomecliente`, `cpfcnpj`, `pedido`, `valor`, `formapagamento`) VALUES
('0000-00-00', '0000-00-00', '24242', 242, '', 0, 'Dinheiro'),
('0000-00-00', '0000-00-00', '', 1234, '', 0, 'Dinheiro'),
('0000-00-00', '0000-00-00', 'ta maruco', 4324, 'fsf', 243234, 'Dinheiro'),
('2020-08-14', '2020-08-18', 'igor bizutti kkkkk', 99999, 'CACHORR', 1000, 'Cartão de crédito');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `usuario_id` int(11) NOT NULL,
  `usuario` varchar(200) DEFAULT NULL,
  `senha` int(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`usuario_id`, `usuario`, `senha`) VALUES
(1, 'bites', 7);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadacessorios`
--
ALTER TABLE `cadacessorios`
  ADD PRIMARY KEY (`id_produto`);

--
-- Índices para tabela `cadcliente`
--
ALTER TABLE `cadcliente`
  ADD PRIMARY KEY (`cpf_cnpj`);

--
-- Índices para tabela `cadfuncionario`
--
ALTER TABLE `cadfuncionario`
  ADD PRIMARY KEY (`cpf`);

--
-- Índices para tabela `cadpedido`
--
ALTER TABLE `cadpedido`
  ADD PRIMARY KEY (`id_pedido`);

--
-- Índices para tabela `cadproduto`
--
ALTER TABLE `cadproduto`
  ADD PRIMARY KEY (`id_produto`);

--
-- Índices para tabela `cadprodutonovo`
--
ALTER TABLE `cadprodutonovo`
  ADD PRIMARY KEY (`id_produto`);

--
-- Índices para tabela `cadvenda`
--
ALTER TABLE `cadvenda`
  ADD PRIMARY KEY (`cpfcnpj`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadacessorios`
--
ALTER TABLE `cadacessorios`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `cadpedido`
--
ALTER TABLE `cadpedido`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de tabela `cadproduto`
--
ALTER TABLE `cadproduto`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `cadprodutonovo`
--
ALTER TABLE `cadprodutonovo`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
