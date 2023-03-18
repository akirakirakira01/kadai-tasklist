<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;



Route::get('/', [TasksController::class, 'index']);
Route::get('/dashboard', [TasksController::class, 'index']);

Route::resource('tasks', TasksController::class);

/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
*/

require __DIR__.'/auth.php';

Route::group(['middleware' => ['auth']], function () {                                    // 追記
    Route::resource('tasks', TasksController::class);     // 追記
}); 
