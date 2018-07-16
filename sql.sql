CREATE SCHEMA php;

USE DATABASE php;

/* Criação da Tabela cliente */
CREATE TABLE php.cliente(
    id int(5) NOT NULL AUTO_INCREMENT,
    nome varchar(100),
    email varchar(100),
    endereco varchar(100),
    dataCadastro varchar(15), 
    primary key (id)
);

-- select * from php.cliente;