<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\TempController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return ('Hello,laravel');
});

Route::get('/hello/{name}/info', function ($name) {
    return 'Hello,' . $name . ' !!!';
});

Route::get('/tmp', [TempController::class, 'tmpFunction']);
    





