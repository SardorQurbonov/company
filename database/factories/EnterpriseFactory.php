<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EnterpriseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'enterprise_name' => $this->faker->company,
            'full_name' => $this->faker->name,
            'address' => $this->faker->address,
            'email' => $this->faker->email,
            'website' => $this->faker->url,
            'phone' => $this->faker->phoneNumber,
        ];
    }
}
