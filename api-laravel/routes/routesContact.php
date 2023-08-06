<?php

use App\Http\Controllers\contactController;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Foreach_;

Route::post('/contact', [\App\Http\Controllers\contactController::class, 'Contact']);
