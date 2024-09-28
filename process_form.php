<?php

require_once 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception as PHPMailerException;
use Dotenv\Dotenv;
use App\Models\Mensagem;
use App\Exceptions\FormValidationException; // Exceção personalizada

// Carrega as variáveis de ambiente
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Inclui a conexão com o banco de dados
require_once 'config/db.php';

// Define a constante para redirecionamento de erro
define('ERROR_REDIRECT', 'Location: error.php?msg=');

try {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Validação dos campos
        if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['message'])) {
            throw new FormValidationException('Todos os campos são obrigatórios.');
        }

        // Sanitização dos dados de entrada
        $nome = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
        $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
        $mensagem = htmlspecialchars($_POST['message'], ENT_QUOTES, 'UTF-8');

        if (!$email) {
            throw new FormValidationException('E-mail inválido.');
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
            throw new PHPMailerException('Falha no envio do e-mail.');
        }
    } else {
        throw new FormValidationException('Método de solicitação inválido.');
    }
} catch (FormValidationException $e) {
    // Lida com exceções de validação
    $erroMsg = $e->getMessage();
    header(ERROR_REDIRECT . urlencode($erroMsg));
    exit;
} catch (PHPMailerException $e) {
    // Lida com exceções do PHPMailer
    $erroMsg = $e->getMessage();
    header(ERROR_REDIRECT . urlencode($erroMsg));
    exit;
} catch (Exception $e) {
    // Lida com exceções genéricas
    $erroMsg = $e->getMessage();
    header(ERROR_REDIRECT . urlencode($erroMsg));
    exit;
}
