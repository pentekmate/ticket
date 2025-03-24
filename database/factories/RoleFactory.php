<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Role>
 */
class RoleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     public function definition(): array
     {
         static $roles = ['rendszergazda', 'tanár'];
         static $counter = 0;
 
         return [
             'role_name' => $roles[$counter++ % count($roles)], // Váltakozva adja: rendszergazda, tanár
         ];
     }
}
