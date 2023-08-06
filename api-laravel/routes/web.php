<?php

use App\Http\Controllers\userController;
use App\Http\Controllers\contactController;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Foreach_;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/contact', [\App\Http\Controllers\contactController::class, 'Contact']);
Route::post('/signup', [\App\Http\Controllers\userController::class, 'signup']);
