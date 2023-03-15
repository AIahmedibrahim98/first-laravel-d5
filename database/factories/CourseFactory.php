<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=> $this->faker->sentence(2),
            'start_date'=>$this->faker->date(),
            'end_date'=>$this->faker->date(),
            'start_time'=>$this->faker->time(),
            'end_time'=>$this->faker->time(),
            'type'=>$this->faker->randomElement(['public','private','hybrid']),
        ];
    }
}
