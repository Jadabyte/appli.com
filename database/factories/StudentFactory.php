<?php

namespace Database\Factories;

use App\Models\Students;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Students::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'firstName' => $this->faker->firstName,
            'lastName' => $this->faker->lastName,
            'address' => $this->faker->address,
            'mobile' => $this->faker->phoneNumber,
            'LinkedIn' => $this->faker->url,
            'portfolio' => $this->faker->url,
            'category' =>$this->faker->jobTitle,
            'biography' => $this->faker->realText($maxNbChars = 500, $indexSize = 2),
            'email' => $this->faker->email,
            'password' =>$this->faker->password
        ];
    }
}
