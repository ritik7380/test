<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TeacherFactory extends Factory
{
    protected $model = \App\Models\Teacher::class;

    public function definition()
    {
        return [
            'teacher_name' => $this->faker->name(),
        ];
    }
}
