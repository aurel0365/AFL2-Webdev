<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\PortfolioController;

Route::get('/', [PortfolioController::class, 'index']);
