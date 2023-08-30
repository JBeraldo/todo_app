<?php

use App\Modules\Tasks\Http\Controllers\TaskController;

Route::get('tasks', [TaskController::class, 'get']);
Route::get('tasks/{id}', [TaskController::class, 'find']);
Route::delete('tasks/{id}', [TaskController::class, 'destroy']);
Route::post('tasks', [TaskController::class, 'store']);
