<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->randomDigit,
            'mobile' => $this->faker->phoneNumber,
            'LinkedIn' => $this->faker->url,
            'portfolio' => $this->faker->url,
            //'category' =>$this->faker->jobTitle,
            'category' =>$this->faker->randomDigit,
            'biography' => $this->faker->realText($maxNbChars = 500, $indexSize = 2),
        ];
    }
}
