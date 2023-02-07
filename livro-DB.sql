create database livro;
use livro;

create table Cliente(
	codigo int not null primary key auto_increment,
    nome varchar(100) not null,
    telefone varchar(11) not null,
    dataNascimento varchar(10) not null,
    login varchar(15) not null,
    senha varchar(8) not null
) Engine = InnoDB;

create table Endereco(
	codigo int not null primary key auto_increment,
    logradouro varchar(100) not null,
    numero varchar(100) not null,
    bairro varchar(100) not null,
    cidade varchar(100) not null
) Engine = InnoDB;

create table Catalogo(
	codigo int not null primary key auto_increment,
    isbn varchar(13) not null,
    nomeLivro varchar(50) not null,
    autor varchar(50) not null,
    preco float not null,
    quantidade int not null
) Engine = InnoDB;

alter table Catalogo add quantidadeReserva int;
delete from Catalogo where codigo = 2;
select * from Cliente;
select * from Endereco;
select * from Catalogo;