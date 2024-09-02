<?php

use Illuminate\Support\Facades\Route;
/*
Route::get('/', function () {
    return 'Ola seja bem vindo';
});
*/

Route::get('/', 'PrincipalController@principal');

Route::get('/sobre-nos', 'SobreNosController@sobre');

Route::get('/contato', 'ContatoController@contato');


// Nome, categoria, assunto, mensagem
Route::get('/contato/{nome}/{categoria}/{assunto}/{mensagem}', function(string $nome, string $categoria, string $assunto, string $mensagem) {
    echo "Estamos aqui: $nome - $categoria $assunto $mensagem";
});
