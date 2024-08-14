<?php
require_once 'vendor/autoload.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sucesso</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="success.css">
    <?php require_once 'Header.phtml'; ?>
</head>
<body>
    <div class="container">
        <h1>Sucesso!</h1>
        <p>Sua mensagem foi enviada com sucesso.</p>
        <button onclick="window.location.href='index.php'">Voltar à Página Inicial</button>
    </div>
    <?php require_once 'Footer.phtml'; ?>
</body>
</html>