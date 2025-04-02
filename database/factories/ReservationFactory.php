<?php

namespace Database\Factories;

use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reservation>
 */
class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'restaurant_id' => Restaurant::inRandomOrder()->first()->id,
            'date' => $this->faker->dateTimeBetween(),
            'time' => $this->faker->time('H:i'),
            'guest_count' => $this->faker->numberBetween(1,10)
        ];
    }
}
