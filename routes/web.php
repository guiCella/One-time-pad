<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VernamCipherController;


Route::post('/encrypt', [VernamCipherController::class, 'encrypt']);
Route::post('/decrypt', [VernamCipherController::class, 'decrypt']);
Route::get('/cipher', [VernamCipherController::class, 'showForm']);

