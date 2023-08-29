<?php

use App\Modules\Tasks\Task;

describe('GET Tasks' , function(){

    it('should retrieve all tasks', function () {
        $response = $this->get('/api/tasks');

        $response->assertStatus(200);
    });

    it('should retrieve one task', function () {
        $task = Task::factory()->create();

        $response = $this->get("/api/tasks/$task->id");

        $response->assertStatus(200);
    });

});
