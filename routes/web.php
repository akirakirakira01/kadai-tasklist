<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;



Route::get('/', [TasksController::class, 'index']);
Route::resource('tasks', TasksController::class);