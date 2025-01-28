<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mycontroller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LaravelForm;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

Route::get('/mycontroller/{id?}', [Mycontroller::class, 'myfunction']);
Route::post('/mycontroller/{id?}', [Mycontroller::class, 'myfunction']);

Route::get('/login',
[LoginController::class, 'index']);

Route::get('/home',
[HomeController::class, 'index']);

Route::get('/register',
[RegisterController::class, 'index']);
Route::post('/register',
[RegisterController::class, 'create']);

Route::get('/',
[HomeController::class, 'index']);

Route::get('/users',
[UserController::class, 'index']);
