<?php

use App\Modules\Tasks\Task;

describe('Create Task', function () {

    it('should update a task', function () {
        $task = Task::factory()
            ->create(['title' => 'to be updated']);

        $this->assertDatabaseHas('tasks', [
            "id"    => $task->id,
            "title" => 'to be updated',
        ]);

        $task->title = "updated";

        $response = $this->putJson("/api/tasks/$task->id", $task->toArray());

        $this->assertDatabaseHas('tasks', [
            "id"    => $task->id,
            "title" => 'updated',
        ]);

        $response
            ->assertStatus(204);
    });
});
