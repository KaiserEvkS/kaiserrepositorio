<?php
require 'config/db.php'; // Inclua o arquivo de conexão

if ($pdo) {
    echo 'Conexão bem-sucedida!';
} else {
    echo 'Falha na conexão.';
}
