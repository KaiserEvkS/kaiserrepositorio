<?php
require_once 'config/db.php';

if ($pdo) {
    echo 'Conexão bem-sucedida!';
} else {
    echo 'Falha na conexão.';
}
