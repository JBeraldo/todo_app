<?php

namespace Database\Factories;

use App\Modules\Tasks\Task;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TaskFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<\Illuminate\Database\Eloquent\Model>
     */
    protected $model = Task::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->words(4,true),
            'description' => fake()->sentence(),
            'completed_at' => rand(0,10) > 5 ? fake()->date('Y-m-d h:i:s') : null
        ];
    }
}
