drop database lanchotec;
create database lanchotec;
use lanchotec;

CREATE TABLE cliente (
    id int PRIMARY KEY AUTO_INCREMENT,
    codigo varchar(11),
    nome varchar(50),
    endereco varchar(14)
);

CREATE TABLE bebida (
    id int PRIMARY KEY AUTO_INCREMENT,
    codigo varchar(11),
    name varchar(50),
    tipo varchar(2),
    fk_clienteId int
);

CREATE TABLE lanche (
    id int PRIMARY KEY AUTO_INCREMENT,
    codigo varchar(11),
    tipo varchar(4),
    fk_bebidaId int
);

CREATE TABLE adicionais (
    id int PRIMARY KEY AUTO_INCREMENT,
    codigo varchar(11),
    lanche int(2),
    bebida int(2),
    adicional int(2),
    fk_lancheId int,
    l_order int(2)
);


create user lanchotec@localhost identified by 'master';
grant select, insert, update, delete, execute on lanchotec.* to lanchotec@localhost;










