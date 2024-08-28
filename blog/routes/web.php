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
