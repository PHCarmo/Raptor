CREATE SCHEMA `bd_convenes` ;
USE `bd_convenes` ;

CREATE TABLE `bd_convenes`.`tb_fornecedores` (
  `IDFornecedor` INT(6) NOT NULL AUTO_INCREMENT,
  `NomeFornecedor` VARCHAR(60) NOT NULL,
  `CNPJFornecedor` VARCHAR(14) NULL,
  `IEFornecedor` VARCHAR(12) NULL,
  `EnderecoFornecedor` VARCHAR(60) NULL,
  `TelefoneFornecedor` VARCHAR(11) NULL,
  `EmailFornecedor` VARCHAR(45) NULL,
  PRIMARY KEY (`IDFornecedor`));

CREATE TABLE `bd_convenes`.`tb_clientes` (
  `IDCliente` INT NOT NULL AUTO_INCREMENT,
  `NomeCliente` VARCHAR(60) NOT NULL,
  `DtNascCliente` VARCHAR(10) NULL,
  `SexoCliente` VARCHAR(10) NULL,
  `RGCliente` VARCHAR(10) NULL,
  `CPFCliente` VARCHAR(11) NULL,
  `EnderecoCliente` VARCHAR(60) NULL,
  `TelefoneCliente` VARCHAR(11) NULL,
  `EmailCliente` VARCHAR(45) NULL,
  `TipoCliente` VARCHAR(15) NULL,
  `CNPJCliente` VARCHAR(14) NULL,
  PRIMARY KEY (`IDCliente`));

CREATE TABLE `bd_convenes`.`tb_produto` (
  `IDProduto` INT NOT NULL AUTO_INCREMENT,
  `NomeProduto` VARCHAR(60) NOT NULL,
  `QtdProduto` INT(10) NULL,
  `DTValProduto` VARCHAR(10) NULL,
  `PrecoProduto` VARCHAR(11) NULL,
  `DescricaoProduto` VARCHAR(60) NULL,
  `IDFornecedor` INT(6) NOT NULL,
  PRIMARY KEY (`IDProduto`))
COMMENT = '	';

CREATE TABLE `bd_convenes`.`tb_venda` (
  `IDVenda` INT(6) NOT NULL,
  `IDPagamento` INT(2) NOT NULL,
  `IDProduto` INT(6) NOT NULL,
  `IDCliente` INT(6) NOT NULL,
  `Frete` DECIMAL(11) NULL,
  `DescricaoVenda` VARCHAR(60) NULL,
  PRIMARY KEY (`IDVenda`));
  
CREATE TABLE `bd_convenes`.`tb_pagamento` (
  `IDPagamento` INT(6) NOT NULL AUTO_INCREMENT,
  `FormaPagamento` VARCHAR(15) NOT NULL,
  `IDCartao` INT(6) NOT NULL,
  PRIMARY KEY (`IDPagamento`));

CREATE TABLE `bd_convenes`.`tb_cartao` (
  `IDCartao` INT(6) NOT NULL,
  `BandeiraCartao` VARCHAR(15) NOT NULL,
  `ValidadeCartao` DATE NULL,
  `NumeroCartao` VARCHAR(16) NOT NULL,
  `NomeCartao` VARCHAR(25) NOT NULL,
  PRIMARY KEY (`IDCartao`));
  
CREATE TABLE `bd_convenes`.`tb_usuario` (
  `IDUsuario` INT(6) NOT NULL,
  `login` VARCHAR(25) NOT NULL,
  `senha` VARCHAR(15) NOT NULL,
  `ativo` BINARY(1) NULL,
  PRIMARY KEY (`IDUsuario`));
  
/*ALTER TABLE `bd_convenes`.`tb_produto` ADD FOREIGN KEY (IDFornecedor) REFERENCES `bd_convenes`.`tb_fornecedores`(IDFornecedor);
ALTER TABLE `bd_convenes`.`tb_venda` ADD FOREIGN KEY (IDPagamento) REFERENCES `bd_convenes`.`tb_pagamento`(IDPagamento);
ALTER TABLE `bd_convenes`.`tb_venda` ADD FOREIGN KEY (IDProduto) REFERENCES `bd_convenes`.`tb_produto`(IDProduto);
ALTER TABLE `bd_convenes`.`tb_venda` ADD FOREIGN KEY (IDCliente) REFERENCES `bd_convenes`.`tb_clientes`(IDCliente);
ALTER TABLE `bd_convenes`.`tb_pagamento` ADD FOREIGN KEY (IDCartao) REFERENCES `bd_convenes`.`tb_cartao`(IDCartao);*/

/* select * from `bd_convenes`.`tb_produto`;
select * from `bd_convenes`.`tb_clientes`;
select * from `bd_convenes`.`tb_Fornecedores`; */

INSERT INTO `bd_convenes`.`tb_fornecedores` (`IDFornecedor`,`NomeFornecedor`,`CNPJFornecedor`,`IEFornecedor`,
`EnderecoFornecedor`,`TelefoneFornecedor`,`EmailFornecedor`) VALUES
(1, 'Coca-Cola Brasil', '12345', '12345', 'Rua dos Bobos', '12345', '12345@coca.com');

INSERT INTO `bd_convenes`.`tb_produto` (`IDProduto`,`NomeProduto`,`QtdProduto`,`DTValProduto`,
`PrecoProduto`,`DescricaoProduto`,`IDFornecedor`) VALUES
(1, 'Coca-Cola', 20, '20/11/2019', 4.59, '2L Sabor Cola', 1),
(2, 'Água Mineral', 30, '20/11/2019', 3.59, 'Inodora', 1);