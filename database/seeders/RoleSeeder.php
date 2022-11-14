<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'Admin',
            'description' => 'Beheerder die alles kan zien en aanpassen',
        ]);
        Role::create([
            'name' => 'Kitchen',
            'description' => 'Keukenpersoneel dat bestellingen kan zien en aanpassen',
        ]);
        Role::create([
            'name' => 'Bar',
            'description' => 'Barpersoneel dat bestellingen kan zien en aanpassen',
        ]);
    }
}
