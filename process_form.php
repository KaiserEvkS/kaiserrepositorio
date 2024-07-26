<?php
// Carregar o autoloader do Composer
require_once 'vendor/autoload.php';

use App\Model\Mensagem;
use App\Exception\CustomException;

try {
    // Verificar se a solicitação é do tipo POST
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Filtrar e sanitizar as entradas
        $nome = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $mensagem = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

        // Validar o email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new CustomException('Email inválido.');
        }

        // Criar um novo objeto Mensagem
        $mensagemObj = new Mensagem($nome, $email, $mensagem);

        // Processar a mensagem (por exemplo: enviar um email, salvar no banco de dados, etc.)
        // Código para processar a mensagem aqui...

        // Redirecionar para a página de sucesso
        header('Location: success.php');
        exit();
    } else {
        throw new CustomException('Método de solicitação inválido.');
    }
} catch (CustomException $e) {
    // Redirecionar para a página de erro com a mensagem da exceção personalizada
    header('Location: error.php?msg=' . urlencode($e->getMessage()));
    exit();
} catch (\Exception $e) {
    // Redirecionar para a página de erro com uma mensagem genérica
    header('Location: error.php?msg=' . urlencode('Ocorreu um erro inesperado.'));
    exit();
}
