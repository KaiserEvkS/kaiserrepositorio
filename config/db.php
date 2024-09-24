<?php

// Configurações de conexão com o banco de dados
$dsn = 'mysql:host=localhost;dbname=erik_kaiser_banco;charset=utf8';
$username = 'erik_kaiser_banco'; //  nome de usuário do banco de dados
$password = 'Kaiserprograma10';   // Senha do banco de dados

try {
    // Cria uma nova conexão PDO
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Captura erros de conexão
    die('Conexão falhou: ' . $e->getMessage());
}
