<?php
require 'Mensagem.php'; // Inclua o arquivo da classe Mensagem
require 'vendor/autoload.php'; // Autoload do Composer

try {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Validação básica dos dados
        $nome = $_POST['name'];
        $email = $_POST['email'];
        $mensagem = $_POST['message'];

        if (empty($nome) || empty($email) || empty($mensagem)) {
            throw new Exception('Todos os campos são obrigatórios.');
        }

        // Criação do objeto Mensagem
        $mensagemObj = new Mensagem($nome, $email, $mensagem);

        // Configurações do Formspree
        $formspreeUrl = 'https://formspree.io/f/xleqyykq'; // ID do Formulário Formspree
        $data = [
            'name' => $mensagemObj->getNome(),
            'email' => $mensagemObj->getEmail(),
            'message' => $mensagemObj->getMensagem()
        ];

        // Envio dos dados para o Formspree
        $response = sendToFormspree($formspreeUrl, $data);

        if ($response['status'] === 200) {
            // Redireciona para a página de sucesso
            header('Location: success.php');
            exit;
        } else {
            throw new Exception('Falha no envio do formulário. Código de resposta: ' . $response['status']);
        }
    } else {
        throw new Exception('Método de solicitação inválido.');
    }
} catch (Exception $e) {
    // Captura a exceção e redireciona para a página de erro com a mensagem
    $erroMsg = $e->getMessage();
    header('Location: error.php?msg=' . urlencode($erroMsg));
    exit;
}

// Função para enviar dados para o Formspree
function sendToFormspree($url, $data) {
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Accept: application/json'
    ]);

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    return [
        'status' => $httpCode,
        'response' => $response
    ];
}
?>
