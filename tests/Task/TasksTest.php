<?php

describe('CRUD tasks', function () {

    it('should create a task', function () {
        $response = $this->postJson('/api/tasks',
            [
                'title'        => 'Lorem Ipsum',
                'description'  => 'Lorem Ipsum',
                'completed_at' => null,
            ]);

        $response
            ->assertStatus(201);
    });

    it('should retrieve all tasks', function () {
        $response = $this->get('/api/tasks');

        $response->assertStatus(200);
    });
    it('should retrieve one task', function () {
        $response = $this->get('/api/tasks/1');

        $response->assertStatus(200);
    });
});
