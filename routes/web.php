<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VernamCipherController;

Route::get('/', function () {
    return view('welcome');
}); 

Route::post('/encrypt-file', [VernamCipherController::class, 'encryptFile']);
Route::get('/cipher', [VernamCipherController::class, 'showForm']);



