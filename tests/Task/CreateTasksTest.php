<?php

use App\Modules\Tasks\Task;

describe('Create Task', function () {

    it('should create a task', function () {
        $response = $this->postJson('/api/tasks',Task::factory()->make()->toArray());

        $response
            ->assertStatus(201);
    });
});
