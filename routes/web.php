<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VernamCipherController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/encrypt', [VernamCipherController::class, 'encrypt']);
Route::post('/encrypt-file', [VernamCipherController::class, 'encryptFile']);
Route::get('/decrypt', [VernamCipherController::class, 'showDecryptForm']);
Route::get('/cipher', [VernamCipherController::class, 'showForm']);
Route::post('/decrypt-file', [VernamCipherController::class, 'decryptFile']);


