<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VernamCipherController;

Route::get('/', function () {
    return view('welcome');
}); 

Route::get('/cipher', [VernamCipherController::class, 'showForm']);



