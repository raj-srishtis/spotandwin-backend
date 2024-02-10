<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Vishnu Santhosh - SICS',
            'email' => 'vishnus.srishti@gmail.com',
            'password' => bcrypt('vishnus.srishti@gmail.com'),
        ]);
        User::create([
            'name' => 'Rajagopal Mahadevan- SICS',
            'email' => 'raj.srishtis@gmail.com',
            'password' => bcrypt('raj.srishtis@gmail.com'),
        ]);
    }
}
