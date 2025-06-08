<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Sample1Controller;

Route::get('/', function () {
    return view('welcome');
});

Route::resource("sample1", Sample1Controller::class);