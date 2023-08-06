<?php

use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Foreach_;

Route::post('/signup', [\App\Http\Controllers\userController::class, 'signup']);
Route::post('/login', [\App\Http\Controllers\userController::class, 'login']);
Route::get('/user', [\App\Http\Controllers\userController::class, 'getUserInformation']);
Route::patch('/profil', [\App\Http\Controllers\userController::class, 'modifyUser']);
