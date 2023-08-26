<?php

namespace App\Modules\Tasks\Providers;

use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class TaskServiceProvider extends ServiceProvider
{

    public function boot(): void
    {
        Route::middleware('api')
            ->prefix('api')
            ->namespace('App\Modules\Tasks\Http\Controllers')
            ->group(__DIR__ . '/../routes/api.php');

        Relation::morphMap([
            'tasks' => 'App\Modules\Tasks\Task',
        ]);
    }
}
