<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Author>
 */
class AuthorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name_author' => $this->faker->name(),
            'username_author' => $this->faker->userName(),
            'email_author' => $this->faker->email(),
            'city_author' => $this->faker->city(),
            'address_author' => $this->faker->address(),
            'address_author' => $this->faker->address(),
            'telepon_author' => $this->faker->phoneNumber(),

        ];
    }
}
