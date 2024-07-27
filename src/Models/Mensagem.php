<?php
// src/Models/Mensagem.php

namespace App\Models;

class Mensagem {
    // Variáveis privadas
    private $nome;
    private $email;
    private $mensagem;

    // Construtor
    public function __construct($nome = '', $email = '', $mensagem = '') {
        $this->nome = $nome;
        $this->email = $email;
        $this->mensagem = $mensagem;
    }

    // Getters e Setters
    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        // Adicione validação se necessário
        $this->nome = $nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        // Adicione validação de e-mail se necessário
        $this->email = $email;
    }

    public function getMensagem() {
        return $this->mensagem;
    }

    public function setMensagem($mensagem) {
        // Adicione validação se necessário
        $this->mensagem = $mensagem;
    }
}
