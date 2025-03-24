<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ticket>
 */
class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'status'=>fake()->randomElement(['Nyitott','Lezárva','Folyamatban']),
            'title' => fake()->title(),
            'content' => fake()->paragraph(3),
            'priority' => rand(1,6),
            'user_id' => User::where('role_id', 1)->inRandomOrder()->first()->id, // Normál user
            'admin_id' => User::where('role_id', 0)->inRandomOrder()->first()->id, // Rendszergazda
        ];
    }
}
