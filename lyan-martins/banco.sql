
-- Nome
-- Data de nascimento
-- Sexo
-- Data de cadastro

-- drop database desafio;
create database desafio;
use desafio;

create table cadastro(
	
	id	int not null PRIMARY KEY AUTO_INCREMENT,
	nome varchar(140) not null,
	dtNasc DATE not null,
	sexo varchar(1) not null,
	dtCadastro DATETIME  DEFAULT CURRENT_TIMESTAMP
	
);

insert into cadastro(nome,dtNasc,sexo) values ("Lyan","2018-04-12","M");

select * from cadastro;