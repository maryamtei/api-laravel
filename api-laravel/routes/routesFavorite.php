<?php

use App\Http\Controllers\favoriteController;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Foreach_;

Route::post('/addFavorite', [\App\Http\Controllers\favoriteController::class, 'addFavorite']);
Route::post('/deleteFavorite', [\App\Http\Controllers\favoriteController::class, 'deleteFavorite']);
