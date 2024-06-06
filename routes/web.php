<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VernamCipherController;


// Retorna a view de boas-vindas

Route::get('/', function () {
    return view('welcome');
});

// Define as rotas para o formulário e a lógica de encriptação

Route::post('/encrypt-file', [VernamCipherController::class, 'encryptFile']);

// Define a rota para o formulário

Route::get('/cipher', [VernamCipherController::class, 'showForm']);

Route::get('/daisy',  [VernamCipherController::class, 'showDaisy']);
