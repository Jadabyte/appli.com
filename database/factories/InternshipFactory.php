<?php

namespace Database\Factories;

use App\Models\Internship;
use Illuminate\Database\Eloquent\Factories\Factory;

class InternshipFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Internship::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->jobTitle,
            'description' => $this->faker->realText($maxNbChars = 200, $indexSize = 2),
            'category' =>$this->faker->jobTitle,
            'requirements' =>$this->faker->realText($maxNbChars = 100),
            'company_id' => $this->faker->randomDigit,
            'availability' =>$this->faker->numberBetween($min = 0, $max = 1)
        ];
    }
}
