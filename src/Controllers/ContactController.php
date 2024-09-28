<?php

namespace App\Controllers;

use App\Models\Mensagem;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class ContactController
{
    public function sendForm()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            try {
                // Validação dos campos
                if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['message'])) {
                    throw new Exception('Todos os campos são obrigatórios.');
                }

                $nome = $_POST['name'];
                $email = $_POST['email'];
                $mensagem = $_POST['message'];

                // Criação do objeto Mensagem (Modelo)
                $mensagemObj = new Mensagem($nome, $email, $mensagem);

                // Configuração e envio do e-mail
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

                // Envia o e-mail
                if ($mail->send()) {
                    header('Location: /success');
                    exit;
                } else {
                    throw new Exception('Falha no envio do e-mail.');
                }
            } catch (Exception $e) {
                // Redireciona para a página de erro com a mensagem de erro
                header('Location: /error?msg=' . urlencode($e->getMessage()));
                exit;
            }
        }
    }
}

