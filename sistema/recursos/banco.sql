CREATE TABLE usuario(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome VARCHAR(45),
    cpf VARCHAR(45),
    senha VARCHAR(45)
);

INSERT INTO usuario (nome, cpf, senha) VALUES
('Joaquim', '123', '123'),
('Marlon', '111', '111');

CREATE TABLE profissao(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    descricao VARCHAR(45),
    obs VARCHAR(255)
);

INSERT INTO profissao(descricao, obs) VALUES
('Programador', 'Iniciante'),
('Gerente', 'Expert');

CREATE TABLE funcionario(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome VARCHAR(45),
    salario VARCHAR(45),
    data_nascimento VARCHAR(45),
    cpf VARCHAR(45),
    cidade VARCHAR(45),
    profissao INT
);

INSERT INTO funcionario(nome, salario, data_nascimento, cpf, cidade, profissao) VALUES
('Leticia','2000','01-01-2000','123','Marilena', 1),
('Matheus','2000','02-02-1990','222','Nova Londrina', 2);

CREATE TABLE cidade(
    id INT PRIMARY KEY NOT NUL AUTO_INCREMENT,
    nome VARCHAR(60),
    cep VARCHAR(20),
    estado VARCHAR (20),
);

INSERT INTO cidade(nome, cep, estado) VALUES ('Nova Londrina', '87970-000', 'Paraná');

CREATE TABLE recrutamento(
    id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    nome VARCHAR(255),
    contato VARCHAR(100),
    email VARCHAR(100),
    data_entrevista DATE,
    data_cadastro DATETIME DEFAULT CURRENT_TIMESTAMP,
    tipo VARCHAR(100),
    obs VARCHAR(255),
    curriculo VARCHAR(255),
    foto VARCHAR(255)
);

ALTER TABLE recrutamento
ADD COLUMN hora_inicio TIME,
ADD COLUMN hora_fim TIME;
