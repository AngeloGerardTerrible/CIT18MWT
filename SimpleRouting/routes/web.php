<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetController;
use App\Http\Controllers\TaskController;

Route::resource('tasks', TaskController::class);
// Route that returns a simple message
Route::get('/hello', function () {
    return 'Hello, Laravel!';
});

// Route that calls a method in GreetController to return a Blade view
Route::get('/greet', [GreetController::class, 'showGreeting']);

