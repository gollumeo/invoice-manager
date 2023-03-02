<?php

namespace Database\Factories;

use App\Models\Companies;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Companies>
 */
class CompaniesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Companies::class;
    public function definition(): array
    {
        return [
            'name' => fake()->company(),
            'address' => fake()->streetName() . ' ' . fake()->buildingNumber(),
            'city' => fake()->city(),
            'zipcode' => fake()->postcode(),
            'country' => fake()->country(),
            'vat' => fake()->countryCode . fake()->numberBetween(100000000, 999999999)
        ];
    }
}
