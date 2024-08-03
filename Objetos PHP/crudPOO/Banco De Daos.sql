create database pdo;
use pdo;

create table produtos(
	idproduto int primary key auto_increment,
    nome varchar(100) not null,
    descricao varchar(255) not null
);

select * from produtos;