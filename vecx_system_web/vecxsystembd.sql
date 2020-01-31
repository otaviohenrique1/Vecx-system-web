-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Nov-2019 às 02:59
-- Versão do servidor: 10.4.8-MariaDB
-- versão do PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `vecxsystembd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(20) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `sexo` varchar(255) NOT NULL,
  `data_nascimento` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `numero` varchar(255) NOT NULL,
  `estado` varchar(255) NOT NULL,
  `cidade` varchar(255) NOT NULL,
  `bairro` varchar(255) NOT NULL,
  `complemento` varchar(255) NOT NULL,
  `referencia` varchar(255) NOT NULL,
  `cep` varchar(255) NOT NULL,
  `cpf` varchar(255) NOT NULL,
  `rg` varchar(255) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  `celular` varchar(255) NOT NULL,
  `codigo` varchar(255) NOT NULL,
  `funcionario_nome` varchar(255) NOT NULL,
  `data_cadastro` date NOT NULL,
  `hora_cadastro` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

CREATE TABLE `empresa` (
  `id` int(20) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `cnpj` varchar(255) NOT NULL,
  `razao_social` varchar(255) NOT NULL,
  `inscricao_estadual` varchar(255) NOT NULL,
  `inscricao_numero` varchar(255) NOT NULL,
  `tipo_empresa` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `numero` varchar(255) NOT NULL,
  `estado` varchar(255) NOT NULL,
  `cidade` varchar(255) NOT NULL,
  `bairro` varchar(255) NOT NULL,
  `complemento` varchar(255) NOT NULL,
  `referencia` varchar(255) NOT NULL,
  `cep` varchar(255) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  `codigo` varchar(255) NOT NULL,
  `funcionario` varchar(255) NOT NULL,
  `data_cadastro` date NOT NULL,
  `hora_cadastro` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `id` int(20) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `sexo` varchar(255) NOT NULL,
  `data_nascimento` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `numero` varchar(255) NOT NULL,
  `estado` varchar(255) NOT NULL,
  `cidade` varchar(255) NOT NULL,
  `bairro` varchar(255) NOT NULL,
  `complemento` varchar(255) NOT NULL,
  `referencia` varchar(255) NOT NULL,
  `cep` varchar(255) NOT NULL,
  `cpf` varchar(255) NOT NULL,
  `rg` varchar(255) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  `celular` varchar(255) NOT NULL,
  `cargo` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `carteira_trabalho` varchar(255) NOT NULL,
  `salario` decimal(20,2) NOT NULL,
  `codigo` varchar(255) NOT NULL,
  `funcionario_nome` varchar(255) NOT NULL,
  `data_cadastro` date NOT NULL,
  `hora_cadastro` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`id`, `nome`, `sexo`, `data_nascimento`, `email`, `endereco`, `numero`, `estado`, `cidade`, `bairro`, `complemento`, `referencia`, `cep`, `cpf`, `rg`, `telefone`, `celular`, `cargo`, `login`, `senha`, `carteira_trabalho`, `salario`, `codigo`, `funcionario_nome`, `data_cadastro`, `hora_cadastro`) VALUES
(1, 'Funcionario1', 'Feminino', '1990-05-01', 'funcionario1@email.com', 'Funcionario 1 Endereco', '98', 'SP', 'Sao paulo', 'Alto da Lapa', 'Casa', 'Perto da padaria', '50590-000', '678.901.243-45', '54.321.098-6', '(12)3145-8798', '(12)99124-7829', 'Gerente', 'funcionario1', 'funcionario1', '0242648874', '4000.00', '1458792015', 'Admin', '2019-09-30', '22:58:46'),
(2, 'Funcionario2', 'Masculino', '1989-10-16', 'funcionario2@email.com', 'Funcionario 2 Endereco', '99', 'SP', 'Sao paulo', 'Alto da Lapa', 'Casa', 'Perto da padaria', '50590-000', '123.456.789-01', '09.876.543-1', '(12)3145-2784', '(12)99124-5782', 'Atendente', 'funcionario2', 'funcionario2', '2808764403', '3000.00', '1457859140', 'Admin', '2019-09-30', '23:03:49'),
(3, 'Funcionario3', 'Masculino', '1990-07-21', 'funcionario3@email.com', 'Funcionario 3 Endereco', '92', 'SP', 'Sao paulo', 'Alto da Lapa', 'Casa', 'Perto da padaria', '50590-000', '857.469.156-87', '54.321.098-6', '(12)3144-5112', '(12)99124-7829', 'Estoque', 'funcionario3', 'funcionario3', '8541233669', '2000.00', '8546975421', 'Admin', '2019-10-01', '21:40:47'),
(4, 'Funcionario4', 'Feminino', '1990-05-10', 'funcionario4@email.com', 'Funcionario 4 Endereco', '91', 'SP', 'Sao paulo', 'Alto da Lapa', 'Casa', 'Perto da padaria', '50590-000', '854.754.879-68', '98.856.477-2', '(12)319-84887', '(12)99188-9974', 'Administrador', 'funcionario4', 'funcionario4', '0468454657', '3000.00', '1458792015', 'Admin', '2019-09-30', '21:00:50'),
(5, 'Funcionario5', 'Masculino', '1989-10-26', 'funcionario5@email.com', 'Funcionario 5 Endereco', '90', 'SP', 'Sao paulo', 'Alto da Lapa', 'Casa', 'Perto da padaria', '50590-000', '998.855.674-45', '77.455.441-3', '(12)3157-4145', '(12)99125-8445', 'Carregador', 'funcionario5', 'funcionario5', '0844034557', '2000.00', '1457859140', 'Admin', '2019-09-30', '21:05:40');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id` int(20) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `marca` varchar(255) NOT NULL,
  `quantidade` varchar(255) NOT NULL,
  `garantia` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `fornecedor_nome` varchar(255) NOT NULL,
  `tipo_produto` varchar(255) NOT NULL,
  `lote` varchar(255) NOT NULL,
  `peso` varchar(255) NOT NULL,
  `altura` varchar(255) NOT NULL,
  `comprimento` varchar(255) NOT NULL,
  `largura` varchar(255) NOT NULL,
  `espessura` varchar(255) NOT NULL,
  `profundidade` varchar(255) NOT NULL,
  `cor` varchar(255) NOT NULL,
  `montagem` varchar(255) NOT NULL,
  `aplicacao` varchar(255) NOT NULL,
  `modelo` varchar(255) NOT NULL,
  `vida_util` varchar(255) NOT NULL,
  `preco_compra` decimal(20,2) NOT NULL,
  `preco_a_vista` decimal(20,2) NOT NULL,
  `quantidade_componentes` varchar(255) NOT NULL,
  `data_primeira_compra` date NOT NULL,
  `data_fabricacao` date NOT NULL,
  `data_validade` date NOT NULL,
  `codigo` varchar(255) NOT NULL,
  `codigo_barras` varchar(255) NOT NULL,
  `funcionario_nome` varchar(255) NOT NULL,
  `data_cadastro` date NOT NULL,
  `hora_cadastro` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id`, `nome`, `marca`, `quantidade`, `garantia`, `descricao`, `fornecedor_nome`, `tipo_produto`, `lote`, `peso`, `altura`, `comprimento`, `largura`, `espessura`, `profundidade`, `cor`, `montagem`, `aplicacao`, `modelo`, `vida_util`, `preco_compra`, `preco_a_vista`, `quantidade_componentes`, `data_primeira_compra`, `data_fabricacao`, `data_validade`, `codigo`, `codigo_barras`, `funcionario_nome`, `data_cadastro`, `hora_cadastro`) VALUES
(1, 'Cano 10cm', 'Tigre', '22', '12 meses', 'Cano de agua', 'Tigre', 'Tubulacao', 'e2019b', '1kg', '10cm', '2m', '10cm', '2mm', '0', 'Branca', 'Nao', 'Construção', 'Cano1', 'Indeterminado', '2.00', '2.00', '1', '2019-09-10', '2019-08-15', '2019-09-30', '0213698754', '5421369870', 'Admin', '2019-09-20', '20:10:30'),
(2, 'Cano 15cm', 'Tigre', '15', '12 meses', 'Cano de agua', 'Tigre', 'Tubulacao', 'e2019b', '2kg', '15cm', '2m', '15cm', '5mm', '0', 'Branca', 'Nao', 'Construção', 'Cano2', 'Indeterminado', '5.00', '5.00', '1', '2019-09-10', '2019-08-15', '2019-09-30', '5874598754', '9525475120', 'Admin', '2019-09-20', '20:12:30'),
(3, 'Cano 12cm', 'Tigre', '10', '12 meses', 'Cano de agua', 'Tigre', 'Tubulacao', 'e2019b', '1.5kg', '12cm', '2m', '12cm', '3mm', '0', 'Branca', 'Nao', 'Construção', 'Cano3', 'Indeterminado', '3.00', '3.00', '1', '2019-09-10', '2019-08-15', '2019-09-30', '0213357754', '4752248870', 'Admin', '2019-09-20', '20:15:30'),
(4, 'Cano 20cm', 'Tigre', '10', '12 meses', 'Cano de agua', 'Tigre', 'Tubulacao', 'e2019b', '2kg', '20cm', '2m', '20cm', '10mm', '0', 'Branca', 'Nao', 'Construção', 'Cano4', 'Indeterminado', '8.00', '8.00', '1', '2019-09-10', '2019-08-15', '2019-09-30', '1425785754', '1502442374', 'Admin', '2019-09-20', '20:18:30'),
(5, 'Cano 25cm', 'Tigre', '10', '12 meses', 'Cano de agua', 'Tigre', 'Tubulacao', 'e2019b', '2.5kg', '25cm', '2m', '25cm', '10mm', '0', 'Branca', 'Nao', 'Construção', 'Cano5', 'Indeterminado', '10.00', '10.00', '1', '2019-09-10', '2019-08-15', '2019-09-30', '0217525267', '1455889870', 'Admin', '2019-09-20', '20:20:30'),
(6, 'Cano 30cm', 'Tigre', '10', '12meses', 'Cano de agua', 'Tigre', 'Tubulacao', 'e2019i', '1kg', '30cm', '2m', '30cm', '10mm', '0', 'Branca', 'Nao', 'Construcao', 'Cano6', 'Indeterminado', '12.00', '12.00', '1', '2019-09-05', '2019-08-14', '2019-10-11', '7957804258', '6521349870', 'Admin', '2019-10-11', '11:46:53');

-- --------------------------------------------------------

--
-- Estrutura da tabela `venda`
--

CREATE TABLE `venda` (
  `id` int(10) NOT NULL,
  `codigo` varchar(255) NOT NULL,
  `precoTotal` decimal(20,2) NOT NULL,
  `listaProdutos` varchar(255) NOT NULL,
  `quantidadeItens` varchar(255) NOT NULL,
  `dataVenda` date NOT NULL,
  `horaVenda` time NOT NULL,
  `metodoPagamento` varchar(255) NOT NULL,
  `tipoPagamentoCartao` varchar(255) NOT NULL,
  `quantidadeParcelas` varchar(255) NOT NULL,
  `notaFiscal` varchar(255) NOT NULL,
  `cpfCliente` varchar(255) NOT NULL,
  `nomeFuncionario` varchar(255) NOT NULL,
  `cargoFuncionario` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `venda`
--
ALTER TABLE `venda`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
