<?php
namespace App\Model;

class Mensagem
{
    private $nome;
    private $email;
    private $mensagem;

    public function __construct($nome, $email, $mensagem)
    {
        $this->nome = $nome;
        $this->email = $email;
        $this->mensagem = $mensagem;
    }

    // Getters e setters
}
