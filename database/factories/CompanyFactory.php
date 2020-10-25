<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Company::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->randomDigit,
            'name' => $this->faker->company,
            'logo' => $this->faker->image,
            'category' =>$this->faker->jobTitle,
            'street' => $this->faker->streetName,
            'houseNumber' => $this->faker->buildingNumber,
            'pobox' => $this->faker->buildingNumber,
            'postalCode' => $this->faker->postcode,
            'city' => $this->faker->city,
            'mail' => $this->faker->companyEmail,
            'telephone' => $this->faker->phoneNumber,
            'description' => $this->faker->realText($maxNbChars = 200, $indexSize = 2),
            'LinkedIn' => $this->faker->url,
            'website' => $this->faker->url
        ];
    }
}
