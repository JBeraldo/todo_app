<?php

namespace App\Modules\Tasks\Http\Controllers;

use App\Modules\Tasks\Http\Requests\TaskRequest;
use App\Modules\Tasks\TaskService;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class TaskController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function __construct(TaskService $task_service)
    {
        $this->task_service = $task_service;
    }

    public function get()
    {
        return response()->json([
            'tasks' => $this->task_service->get(),
        ]);
    }

    public function find($id)
    {
        return response()->json([
            'task' => $this->task_service->find($id),
        ]);
    }

    public function destroy($id)
    {
        $this->task_service->destroy($id);
        return response('', 204);
    }

    public function store(TaskRequest $request)
    {

        $this->task_service->store($request->toArray());

        return response('', 201);
    }

    public function update(TaskRequest $request)
    {

        $this->task_service->update($request->toArray());

        return response('', 204);
    }
}
