<?php

namespace Database\Factories;

use App\Models\internshipsSkill;
use Illuminate\Database\Eloquent\Factories\Factory;

class internshipsSkillFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = internshipsSkill::class;

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
