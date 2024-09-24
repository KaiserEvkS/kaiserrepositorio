<?php

require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Dotenv\Dotenv;
use App\Models\Mensagem;

// Carrega as variáveis de ambiente
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Inclui a conexão com o banco de dados
require 'config/db.php';

try {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Validação dos campos
        if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['message'])) {
            throw new Exception('Todos os campos são obrigatórios.');
        }

        // Sanitização dos dados de entrada
        $nome = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
        $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
        $mensagem = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

        if (!$email) {
            throw new Exception('E-mail inválido.');
        }

        // Criação do objeto Mensagem
        $mensagemObj = new Mensagem($nome, $email, $mensagem);

        // Salva a mensagem no banco de dados
        $sql = "INSERT INTO mensagens (nome, email, mensagem) VALUES (?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$nome, $email, $mensagem]);

        // Configuração do PHPMailer
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = $_ENV['MAIL_HOST'];
        $mail->SMTPAuth = true;
        $mail->Username = $_ENV['MAIL_USERNAME'];
        $mail->Password = $_ENV['MAIL_PASSWORD'];
        $mail->SMTPSecure = $_ENV['MAIL_ENCRYPTION'];
        $mail->Port = $_ENV['MAIL_PORT'];

        $mail->setFrom($_ENV['MAIL_FROM_ADDRESS'], $_ENV['MAIL_FROM_NAME']);
        $mail->addAddress($mensagemObj->getEmail(), $mensagemObj->getNome());

        $mail->isHTML(true);
        $mail->Subject = 'Nova mensagem do formulário';
        $mail->Body = nl2br("Nome: {$mensagemObj->getNome()}\nEmail: {$mensagemObj->getEmail()}\n\nMensagem:\n{$mensagemObj->getMensagem()}");

        // Envio do e-mail
        if ($mail->send()) {
            header('Location: success.php');
            exit;
        } else {
            throw new Exception('Falha no envio do e-mail.');
        }
    } else {
        throw new Exception('Método de solicitação inválido.');
    }
} catch (Exception $e) {
    // Redireciona para a página de erro com a mensagem de erro
    $erroMsg = $e->getMessage();
    header('Location: error.php?msg=' . urlencode($erroMsg));
    exit;
}
