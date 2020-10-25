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
            'name' => $this->faker->company,
            'street' => $this->faker->streetName,
            'category' =>$this->faker->jobTitle,
            'house',
            'pobox' => $this->faker->buildingNumber,
            'postal_code' => $this->faker->postcode,
            'city' => $this->faker->city,
            'mail' => $this->faker->companyEmail,
            'telephone' => $this->faker->phoneNumber,
            'LinkedIn' => $this->faker->url,
            'website' => $this->faker->url,
            'logo' => $this->faker->image,
            'description' => $this->faker->realText($maxNbChars = 200, $indexSize = 2)
        ];
    }
}
