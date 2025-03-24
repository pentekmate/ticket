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
        $teachers = User::where('role_id',1)->get();
        $sysAdmins = User::where('role_id',0)->get();
        
        for ($i=0; $i < 1000; $i++) { 
            $user = $teachers->random();
            $sysAdmin = $sysAdmins->random();

            Ticket::factory()->create([
                'user_id'=>$user->id,
                'admin_id'=>$sysAdmin->id
            ]);
        }
    }
}
