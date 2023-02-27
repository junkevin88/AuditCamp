<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        //
        User::create([
            'name' => 'Admin',
            'email' => 'admin@auditcamp.com',
            'password' => bcrypt('password'),
            'email_verified_at' => now(),
            'is_admin' => true,

        ]);
    }
}
