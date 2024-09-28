<?php
require_once 'config/db.php'; //o arquivo de conexão

if ($pdo) {
    echo 'Conexão bem-sucedida!';
} else {
    echo 'Falha na conexão.';
}
