<?php

use App\Http\Controllers\scheduleController;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Foreach_;

Route::post('/addMealSchedule', [\App\Http\Controllers\scheduleController::class, 'addMealSchedule']);
Route::post('/deleteMealSchedule', [\App\Http\Controllers\scheduleController::class, 'deleteMealSchedule']);
