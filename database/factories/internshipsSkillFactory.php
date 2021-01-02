<?php

namespace Database\Factories;

use App\Models\InternshipsSkill;
use Illuminate\Database\Eloquent\Factories\Factory;

class InternshipsSkillFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = InternshipsSkill::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'internship_id' => $this->faker->randomDigit,
            'skill_id' => $this->faker->randomDigit
        ];
    }
}
