DROP DATABASE IF EXISTS AbrigoAnimal;
CREATE DATABASE IF NOT EXISTS AbrigoAnimal;
USE AbrigoAnimal;

CREATE TABLE cidade (
    id      INT AUTO_INCREMENT,
    nome    VARCHAR(100),
    estado  VARCHAR(100),
    PRIMARY KEY (id)
);

CREATE TABLE pessoa (
    id           INT AUTO_INCREMENT,
    nome         VARCHAR(50) NOT NULL,
    email        VARCHAR(50) NOT NULL,
    endereco     VARCHAR(100) NOT NULL,
    bairro       VARCHAR(100) NOT NULL,
    id_cidade    INT,
    cep          VARCHAR(8),
    PRIMARY KEY(id),
    CONSTRAINT fk_pessoacidade
        FOREIGN KEY (id_cidade) REFERENCES cidade(id)
);

CREATE TABLE animal (
    id            INT AUTO_INCREMENT,
    nome          VARCHAR(50) NOT NULL,
    especie       VARCHAR(50) NOT NULL,
    raca          VARCHAR(50) NOT NULL,
    dataNascimento DATE,
    id_pessoa     INT,
    PRIMARY KEY(id),
    CONSTRAINT fk_pessoaanimal
        FOREIGN KEY (id_pessoa) REFERENCES pessoa(id)
);

INSERT INTO cidade (nome, estado) VALUES ('São Paulo', 'SP');
INSERT INTO cidade (nome, estado) VALUES ('Rio de Janeiro', 'RJ');

INSERT INTO pessoa (nome, email, endereco, bairro, id_cidade, cep) 
VALUES ('João da Silva', 'joao.silva@example.com', 'Rua A, 123', 'Centro', 1, '12345678');

INSERT INTO animal (nome, especie, raca, dataNascimento, id_pessoa)
VALUES ('Rex', 'Cão', 'Labrador', '2015-05-10', 1);

SELECT * FROM pessoa;
SELECT * FROM animal;

SELECT p.nome AS pessoa_nome, c.nome AS cidade_nome
FROM pessoa p
JOIN cidade c ON p.id_cidade = c.id;

SELECT a.nome AS animal_nome, a.especie, a.raca, a.dataNascimento, c.nome AS cidade_nome
FROM animal a
JOIN pessoa p ON a.id_pessoa = p.id
JOIN cidade c ON p.id_cidade = c.id;

UPDATE pessoa
SET endereco = 'Rua B, 456'
WHERE id = 1;

UPDATE animal
SET especie = 'Gato'
WHERE id = 1;

DELETE FROM pessoa
WHERE id = 1;

DELETE FROM animal
WHERE id = 1;

DELETE FROM cidade
WHERE id = 1;

