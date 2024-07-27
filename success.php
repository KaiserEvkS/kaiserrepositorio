<?php
require_once __DIR__ . '/../vendor/autoload.php';

use App\Views\Header;
use App\Views\Footer;

$header = new Header();
$footer = new Footer();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sucesso</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="success.css">
    <?php require 'header.php'; ?>
</head>
<body>
    <?php $header->render(); ?>
    <div class="container">
        <h1>Sucesso!</h1>
        <p>Sua mensagem foi enviada com sucesso.</p>
        <button onclick="window.location.href='index.php'">Voltar à Página Inicial</button>
    </div>
    <?php require 'footer.php'; ?>
</body>
</html>
