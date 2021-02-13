<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Omar',
            'email' => 'omar.furrer@gmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('super-admin');
        User::create([
            'name' => 'Vincent',
            'email' => 'vincentmaar@gmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('super-admin');
    }
}
