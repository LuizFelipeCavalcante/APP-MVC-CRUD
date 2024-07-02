create database primeirocrud;
use primeirocrud;

create table usuario (
id int auto_increment primary key not null,
nome varchar(50),
email varchar(50),
cpf varchar(14),
data_nascimento datetime,
telefone varchar (20),
endereco varchar(50)
);