# Loja-de-Produtos
Loja de produtos desenvolvida durante um curso de PHP e MySQL

CÓDIGOS SQL ↓

--------------------------------------------------------------------------------

#CURSO DE PHP & MYSQL
CREATE database loja;
USE loja;


/*
SHOW TABLES;
SELECT * FROM produtos;
SELECT * FROM categorias;
SELECT * FROM usuarios;
*/


 ALTER DATABASE `loja` CHARSET = UTF8 COLLATE = utf8_unicode_ci;
 
-- TABELAS CRIADAS --------------------------------------------------------------

CREATE TABLE produtos(
id integer auto_increment primary key,
nome varchar(255) NOT NULL,
preco decimal(10,2) NOT NULL
) ENGINE = INNODB DEFAULT charset = utf8;

CREATE TABLE categorias(
id integer auto_increment primary key,
nome varchar(255) NOT NULL
) ENGINE = INNODB DEFAULT charset = utf8;

CREATE TABLE usuarios(
id integer auto_increment primary key,
email varchar(255) NOT NULL,
senha varchar(255) NOT NULL
) ENGINE = INNODB DEFAULT charset = utf8;

-- FIM DAS TABELAS --------------------------------------------------------------

-- INSERTS, UPDATES E ALTER TABLE------------------------------------------------

INSERT INTO produtos VALUES(1, 'Carro', 20000);
INSERT INTO produtos VALUES(2, 'Motocicleta', 10000);
INSERT INTO produtos (nome, preco) VALUES('Bicicleta', 300);
ALTER TABLE produtos add column descricao text;
ALTER TABLE produtos add column usado boolean DEFAULT false;
UPDATE produtos SET descricao = "";


INSERT INTO categorias (nome) VALUES("Esportes"), ("Escolar"), ("Mobilidade"),("Guloseimas"),("Brinquedos");
UPDATE categorias SET nome = "Acessorios" WHERE nome = "Guloseimas";

INSERT INTO usuarios (email, senha) VALUES('silasrodrigues.fatec@gmail.com', '85c6d1acb80d037be20e3d298713f488');

ALTER TABLE produtos ADD COLUMN categoria_id INTEGER;
UPDATE produtos SET categoria_id=3;
