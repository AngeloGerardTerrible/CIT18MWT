<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetController;

// Route that returns a simple message
Route::get('/hello', function () {
    return 'Hello, Laravel!';
});

// Route that calls a method in GreetController to return a Blade view
Route::get('/greet', [GreetController::class, 'showGreeting']);

