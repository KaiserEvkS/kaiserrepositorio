<?php
// MensagemRoot.php

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
        $this->nome = $nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getMensagem() {
        return $this->mensagem;
    }

    public function setMensagem($mensagem) {
        $this->mensagem = $mensagem;
    }
}