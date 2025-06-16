<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'homepage']);

Route::get('/Dettagli/{id}', [PageController::class, 'details']);
