<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/alert', function () {
    return view('alert');
});

Route::GET('/contact', [Controller::class, 'send']);

