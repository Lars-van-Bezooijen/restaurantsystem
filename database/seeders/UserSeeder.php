<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
            'role_id' => 1,
            'name' => 'Lars',
            'email' => 'lars@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        User::create([
            'role_id' => 2,
            'name' => 'Jeroen',
            'email' => 'jeroen@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        User::create([
            'role_id' => 3,
            'name' => 'Thijs',
            'email' => 'thijs@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
    }
}
