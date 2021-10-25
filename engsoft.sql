-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2020 at 02:45 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `engsoft`
--

-- --------------------------------------------------------

--
-- Table structure for table `categoria`
--

CREATE TABLE `categoria` (
  `ID_Categoria` int(11) NOT NULL,
  `Nome` varchar(100) NOT NULL,
  `Designativo` varchar(50) NOT NULL,
  `ID_IVA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categoria`
--

INSERT INTO `categoria` (`ID_Categoria`, `Nome`, `Designativo`, `ID_IVA`) VALUES
(1, 'Brinquedos de cão', '2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cliente`
--

CREATE TABLE `cliente` (
  `ID_Cliente` int(11) NOT NULL,
  `Nome` varchar(50) NOT NULL,
  `Data_Nascimento` date NOT NULL,
  `Numero_Cartao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cliente`
--

INSERT INTO `cliente` (`ID_Cliente`, `Nome`, `Data_Nascimento`, `Numero_Cartao`) VALUES
(1, 'Diogo', '1998-05-01', 1),
(2, 'Vanessa', '1997-02-14', 12),
(3, 'Carlão', '1972-02-06', 19965);

-- --------------------------------------------------------

--
-- Table structure for table `iva`
--

CREATE TABLE `iva` (
  `ID_IVA` int(11) NOT NULL,
  `iva` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `iva`
--

INSERT INTO `iva` (`ID_IVA`, `iva`) VALUES
(1, 23);

-- --------------------------------------------------------

--
-- Table structure for table `linhapedido`
--

CREATE TABLE `linhapedido` (
  `ID_Linha` int(11) NOT NULL,
  `ID_Venda` int(11) NOT NULL,
  `ID_Stock` int(11) NOT NULL,
  `Quantidade` int(11) NOT NULL,
  `Total_Sem_IVA` float NOT NULL,
  `Total_Com_IVA` float NOT NULL,
  `ID_IVA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `linhapedido`
--

INSERT INTO `linhapedido` (`ID_Linha`, `ID_Venda`, `ID_Stock`, `Quantidade`, `Total_Sem_IVA`, `Total_Com_IVA`, `ID_IVA`) VALUES
(1, 1, 1, 123, 12, 12, 1),
(2, 1, 1, 16554, 12, 23, 1),
(3, 2, 1, 23442, 1, 1, 1),
(4, 2, 1, 123, 213, 2, 1),
(5, 3, 1, 2, 2, 2, 1),
(6, 1, 1, 12345, 12, 123, 1);

-- --------------------------------------------------------

--
-- Table structure for table `lote`
--

CREATE TABLE `lote` (
  `ID_Lote` int(11) NOT NULL,
  `ID_Produto` int(11) NOT NULL,
  `Data_Validade` date NOT NULL,
  `Quantidade` int(11) NOT NULL,
  `descricao` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lote`
--

INSERT INTO `lote` (`ID_Lote`, `ID_Produto`, `Data_Validade`, `Quantidade`, `descricao`) VALUES
(1, 1, '2020-04-30', 3, 'Lote de ossos de Cão');

-- --------------------------------------------------------

--
-- Table structure for table `produto`
--

CREATE TABLE `produto` (
  `ID_Produto` int(11) NOT NULL,
  `ID_IVA` int(11) NOT NULL,
  `ID_Categoria` int(11) NOT NULL,
  `Nome` varchar(50) NOT NULL,
  `descricao` varchar(50) NOT NULL,
  `preco` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produto`
--

INSERT INTO `produto` (`ID_Produto`, `ID_IVA`, `ID_Categoria`, `Nome`, `descricao`, `preco`) VALUES
(1, 1, 1, 'Osso de cão', 'Brinquedos de cão', 3);

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `ID_Stock` int(11) NOT NULL,
  `Quantidade_Inserida` int(11) NOT NULL,
  `Quantidade_Existente` int(11) NOT NULL,
  `data` date NOT NULL,
  `ID_Lote` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`ID_Stock`, `Quantidade_Inserida`, `Quantidade_Existente`, `data`, `ID_Lote`) VALUES
(1, 5, 20, '2020-04-01', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `User_ID` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_ID`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'diamorim', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `venda`
--

CREATE TABLE `venda` (
  `ID_Venda` int(11) NOT NULL,
  `ID_Cliente` int(11) NOT NULL,
  `Data_Venda` date NOT NULL,
  `Total_Com_IVA` float NOT NULL,
  `Total_Sem_IVA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `venda`
--

INSERT INTO `venda` (`ID_Venda`, `ID_Cliente`, `Data_Venda`, `Total_Com_IVA`, `Total_Sem_IVA`) VALUES
(1, 1, '2020-05-22', 4, 3),
(2, 3, '2020-06-06', 50, 30),
(3, 2, '2020-06-06', 50, 30);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`ID_Categoria`),
  ADD KEY `ID_IVA` (`ID_IVA`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`ID_Cliente`);

--
-- Indexes for table `iva`
--
ALTER TABLE `iva`
  ADD PRIMARY KEY (`ID_IVA`);

--
-- Indexes for table `linhapedido`
--
ALTER TABLE `linhapedido`
  ADD PRIMARY KEY (`ID_Linha`),
  ADD KEY `ID_Venda` (`ID_Venda`),
  ADD KEY `ID_Stock` (`ID_Stock`),
  ADD KEY `ID_IVA` (`ID_IVA`);

--
-- Indexes for table `lote`
--
ALTER TABLE `lote`
  ADD PRIMARY KEY (`ID_Lote`),
  ADD KEY `ID_Produto` (`ID_Produto`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`ID_Produto`),
  ADD KEY `ID_IVA` (`ID_IVA`),
  ADD KEY `ID_Categoria` (`ID_Categoria`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`ID_Stock`),
  ADD KEY `ID_Lote` (`ID_Lote`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_ID`);

--
-- Indexes for table `venda`
--
ALTER TABLE `venda`
  ADD PRIMARY KEY (`ID_Venda`),
  ADD KEY `ID_Cliente` (`ID_Cliente`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `ID_Categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `ID_Cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `iva`
--
ALTER TABLE `iva`
  MODIFY `ID_IVA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `linhapedido`
--
ALTER TABLE `linhapedido`
  MODIFY `ID_Linha` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `lote`
--
ALTER TABLE `lote`
  MODIFY `ID_Lote` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `ID_Produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `ID_Stock` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `venda`
--
ALTER TABLE `venda`
  MODIFY `ID_Venda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categoria`
--
ALTER TABLE `categoria`
  ADD CONSTRAINT `categoria_ibfk_1` FOREIGN KEY (`ID_IVA`) REFERENCES `iva` (`ID_IVA`);

--
-- Constraints for table `linhapedido`
--
ALTER TABLE `linhapedido`
  ADD CONSTRAINT `linhapedido_ibfk_1` FOREIGN KEY (`ID_Venda`) REFERENCES `venda` (`ID_Venda`),
  ADD CONSTRAINT `linhapedido_ibfk_2` FOREIGN KEY (`ID_Stock`) REFERENCES `stock` (`ID_Stock`),
  ADD CONSTRAINT `linhapedido_ibfk_3` FOREIGN KEY (`ID_IVA`) REFERENCES `iva` (`ID_IVA`);

--
-- Constraints for table `lote`
--
ALTER TABLE `lote`
  ADD CONSTRAINT `lote_ibfk_1` FOREIGN KEY (`ID_Produto`) REFERENCES `produto` (`ID_Produto`);

--
-- Constraints for table `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `produto_ibfk_1` FOREIGN KEY (`ID_IVA`) REFERENCES `iva` (`ID_IVA`),
  ADD CONSTRAINT `produto_ibfk_2` FOREIGN KEY (`ID_Categoria`) REFERENCES `categoria` (`ID_Categoria`);

--
-- Constraints for table `stock`
--
ALTER TABLE `stock`
  ADD CONSTRAINT `stock_ibfk_1` FOREIGN KEY (`ID_Lote`) REFERENCES `lote` (`ID_Lote`);

--
-- Constraints for table `venda`
--
ALTER TABLE `venda`
  ADD CONSTRAINT `venda_ibfk_1` FOREIGN KEY (`ID_Cliente`) REFERENCES `cliente` (`ID_Cliente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
