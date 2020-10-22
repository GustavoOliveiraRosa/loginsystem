CREATE DATABASE loginRepo;
USE loginRepo;

CREATE TABLE usuarios (
    id INT (11) NOT NULL AUTO_INCREMENT COMMENT 'Id do usuario',
    email VARCHAR (255) NOT NULL COMMENT 'E-mail',
    senha VARCHAR (255) NOT NULL COMMENT 'Senha',
    PRIMARY KEY (id)
) CHARSET = utf8;

insert into usuarios (email,senha) values ("email@email","123");