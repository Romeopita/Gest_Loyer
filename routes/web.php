<?php

use App\Http\Controllers\BienController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.index');
});

Route::resource('biens', BienController::class);
Route::resource('clients', ClientController::class);
Route::resource('transactions', TransactionController::class);