<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Student;
use App\Models\Teacher;

class StudentFactory extends Factory
{
    protected $model = Student::class;

    public function definition()
    {
        return [
            'student_name' => $this->faker->name(),
            'class_teacher_id' => Teacher::factory(),
            'class' => $this->faker->randomElement(['Class 1', 'Class 2', 'Class 3']),
            'admission_date' => $this->faker->date(),
            'yearly_fees' => $this->faker->randomFloat(2, 500, 2000),
        ];
    }
}
