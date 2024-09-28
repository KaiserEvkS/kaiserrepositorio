-- Criação do banco de dados
CREATE DATABASE IF NOT EXISTS erik_kaiser_banco
CHARACTER SET utf8mb4
COLLATE utf8mb4_general_ci;

-- Seleção do banco de dados
USE erik_kaiser_banco;

-- Criação da tabela de mensagens
CREATE TABLE IF NOT EXISTS mensagens (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    mensagem TEXT NOT NULL,
    data_envio TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
