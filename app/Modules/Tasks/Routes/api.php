<?php

use App\Modules\Tasks\Http\Controllers\TaskController;

Route::get('tasks', [TaskController::class, 'get']);
Route::get('tasks/{id}', [TaskController::class, 'find']);
Route::post('tasks', [TaskController::class, 'store']);
Route::put('tasks/{id}', [TaskController::class, 'update']);
Route::delete('tasks/{id}', [TaskController::class, 'destroy']);
