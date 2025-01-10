CREATE DATABASE contato;

USE contato;

CREATE TABLE contato (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    telefone VARCHAR(12)
) ENGINE=INNODB;

INSERT INTO contato (nome, telefone) VALUES
('João Silva', '999999999'),
('Maria Oliveira', '988888888'),
('Carlos Pereira', '977777777'),
('Ana Souza', '966666666'),
('Pedro Santos', '955555555'),
('Mariana Costa', '944444444'),
('Lucas Almeida', '933333333'),
('Fernanda Lima', '922222222'),
('Gabriel Rocha', '911111111'),
('Laura Machado', '900000000');