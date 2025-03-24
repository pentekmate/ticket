<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use  App\Models\Role;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Role::insert([
            ['id' => 1, 'role_name' => 'rendszergazda'],
            ['id' => 2, 'role_name' => 'tanár'],
        ]);
    }
}
