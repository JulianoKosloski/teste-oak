DROP DATABASE IF EXISTS loja;
CREATE DATABASE loja;
USE loja;

CREATE TABLE loja.produtos(
	id_produto int NOT NULL,
    nome_produto varchar (45) NOT NULL,
    valor_produto DECIMAL (10,2) NOT NULL,
	descricao_produto varchar (200) NOT NULL,
    disponibilidade_produto BOOLEAN NOT NULL,
    PRIMARY KEY (id_produto)
);

INSERT INTO loja.produtos VALUES (1, "celular", "2299.99", "Muitas funcionalidades, muito moderno, top.", 1);
INSERT INTO loja.produtos VALUES (2, "tv", "5130.45", "Alta definição, muitas polegadas.", 0);