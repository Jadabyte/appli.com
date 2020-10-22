<?php

namespace Database\Factories;

use App\Models\Companies;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompaniesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Companies::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company,
            'logo' => $this->faker->image,
            'category' =>$this->faker->jobTitle,
            'street_and_number' => $this->faker->streetAdress,
            'pobox' => $this->faker->buildingNumber,
            'postal_code' => $this->faker->postcode,
            'city' => $this->faker->city,
            'mail' => $this->faker->companyEmail,
            'phone' => $this->faker->phoneNumber,
            'description' => $this->faker->realText($maxNbChars = 200, $indexSize = 2),
            'LinkedIn' => $this->faker->url,
            'website' => $this->faker->url
        ];
    }
}
