<?php

namespace Database\Factories;

use App\Models\Invoices;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoices>
 */
class InvoicesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Invoices::class;
    public function definition(): array
    {
        return [
            'company' => fake()->company,
            'reference' => "REF" . fake()->numberBetween(1, 100) . "-" . fake()->numberBetween(1, 100),
            'created_at' => fake()->date(),
            'price' => fake()->numberBetween(75, 2500),
            'description' => fake()->text(100),
            'rate' => 21,
            'title' => fake()->text(10),
        ];
    }
}
