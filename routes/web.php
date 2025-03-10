<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/trangchu', [PageController::class, 'getIndex']);
Route::get('/products', [PageController::class, 'getProducts']);
