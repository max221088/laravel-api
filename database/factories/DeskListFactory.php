<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Desk;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DeskList>
 */
class DeskListFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
					'name'=> $this->faker->title(20),
					'desk_id'=> Desk::inRandomOrder()->first()->id
        ];
    }
}
