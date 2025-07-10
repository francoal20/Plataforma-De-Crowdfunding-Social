<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::resource('projects', ProjectController::class)->only([
        'index', 'create', 'show'
    ]);
});

Route::get('/', function () {
    return view('welcome');
});