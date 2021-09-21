<?php

namespace Database\Factories;

use App\Models\Export;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExportFactory extends Factory
{
    public function definition()
    {
        return [
            'firstName' => $this->faker->firstName(),
            'lastName' => $this->faker->lastName(),
        ];
    }
}
