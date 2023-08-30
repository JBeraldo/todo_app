<?php

namespace App\Modules\Tasks;

use Exception;
use Illuminate\Support\Facades\DB;

class TaskService
{
    public function __construct(Task $model)
    {
        $this->model = $model;
    }

    public function get()
    {
        try {
            DB::beginTransaction();

            $models = $this->model->get();

            DB::commit();
        } catch (Exception $e) {
            DB::rollback();
            throw $e;
        }
        return $models;
    }

    public function find(Int $id)
    {
        try {
            DB::beginTransaction();

            $model = $this->model->find($id);

            DB::commit();
        } catch (Exception $e) {
            DB::rollback();
            throw $e;
        }
        return $model;
    }

    public function destroy(Int $id)
    {
        try {
            DB::beginTransaction();

            $this->model->destroy($id);

            DB::commit();
        } catch (Exception $e) {
            DB::rollback();
            throw $e;
        }
    }

    public function store(array $data)
    {
        try {
            DB::beginTransaction();

            $this->model->create($data);

            DB::commit();
        } catch (Exception $e) {
            DB::rollback();
            throw $e;
        }
    }
    public function update(array $data)
    {
        try {
            DB::beginTransaction();

            $model = $this->find($data['id']);

            $model->update($data);

            DB::commit();
        } catch (Exception $e) {
            DB::rollback();
            throw $e;
        }
    }
}
