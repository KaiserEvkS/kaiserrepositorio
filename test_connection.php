<?php
require 'config/db.php';

if ($pdo) {
    echo 'Conexão bem-sucedida!';
} else {
    echo 'Falha na conexão.';
}
