<?php

namespace Database\Seeders;

use App\Models\Ticket;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();


        for ($i=0; $i < 1000; $i++) { 
            $user = $users->random();

            Ticket::factory()->create([
                'user_id'=>$user->id
            ]);
        }
    }
}
