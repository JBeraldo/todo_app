<?php

use App\Modules\Tasks\Task;

describe('Delete Task', function () {

    it('should delete a task', function () {
        $task = Task::factory()->create();

        $response = $this->delete("/api/tasks/$task->id");

        $response->assertStatus(204);
        $this->assertSoftDeleted($task);
    });
});
