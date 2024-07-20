<?php
// Função para exibir mensagens com estilo
function exibirMensagem($mensagem, $tipo = 'sucesso') {
    $cor = ($tipo == 'erro') ? '#d9534f' : '#5bc0de';
    echo 
// Verifica se a requisição é POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coleta e valida os dados do formulário
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

    // Verifica se todos os campos foram preenchidos
    if ($name && $email && $message) {
        // Mensagem de sucesso
        exibirMensagem("Nome: " . htmlspecialchars($name) . "<br>" .
                        "Email: " . htmlspecialchars($email) . "<br>" .
                        "Mensagem: " . htmlspecialchars($message));
    } else {
        // Mensagem de erro
        exibirMensagem("Por favor, preencha todos os campos corretamente.", 'erro');
    }
} else {
    // Mensagem de erro
    exibirMensagem("Método de requisição inválido.", 'erro');
}
?>
