<?php

use App\Controllers\ContactController;

// Mapeamento de rotas
$router->get('/', 'HomeController@index'); // Página inicial
$router->get('/contact', 'ContactController@showForm'); // Exibe o formulário de contato
$router->post('/contact', 'ContactController@sendForm'); // Envia o formulário de contato
$router->get('/success', 'SuccessController@index'); // Página de sucesso
$router->get('/error', 'ErrorController@show'); // Página de erro
