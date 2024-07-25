<?php
// Inclui o arquivo da classe Mensagem
include 'Mensagem.php';

try {
    // Verifica se os dados do formulário foram enviados
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Sanitiza e valida os dados
        $nome = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $mensagem = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception('Email inválido.');
        }

        // Cria um objeto da classe Mensagem
        $mensagemObj = new Mensagem($nome, $email, $mensagem);

        // Aqui pode processar a mensagem (ex.: enviar um email, salvar em banco de dados, etc.)

        // Redireciona para uma página de sucesso
        header('Location: success.php');
        exit();
    } else {
        throw new Exception('Método de solicitação inválido.');
    }
} catch (Exception $e) {
    // Redireciona para uma página de erro com a mensagem de erro
    header('Location: error.php?msg=' . urlencode($e->getMessage()));
    exit();
}
?>
