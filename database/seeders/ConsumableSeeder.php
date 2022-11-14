<?php

namespace Database\Seeders;

use App\Models\Consumable;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConsumableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Consumable::create([
            'name' => 'Coca Cola',
            'description' => 'Coca Cola',
            'is_available' => 1,
            'price' => 2.50,
            'category_id' => 4,
        ]);

        Consumable::create([
            'name' => 'Fanta',
            'description' => 'Fanta',
            'is_available' => 1,
            'price' => 2.35,
            'category_id' => 4,
        ]);

        Consumable::create([
            'name' => 'Sprite',
            'description' => 'Sprite',
            'is_available' => 1,
            'price' => 2.10,
            'category_id' => 4,
        ]);

        Consumable::create([
            'name' => 'Saté',
            'description' => 'Lekker satetje',
            'is_available' => 1,
            'price' => 4.50,
            'category_id' => 1,
        ]);

        Consumable::create([
            'name' => 'Sla',
            'description' => 'Lekker slaatje',
            'is_available' => 1,
            'price' => 1.50,
            'category_id' => 2,
        ]);

        Consumable::create([
            'name' => 'Biefstuk',
            'description' => 'Lekker biefstukje',
            'is_available' => 1,
            'price' => 8.50,
            'category_id' => 2,
        ]);

        Consumable::create([
            'name' => 'Friet',
            'description' => 'Lekker frietje',
            'is_available' => 1,
            'price' => 2.50,
            'category_id' => 3,
        ]);

        Consumable::create([
            'name' => 'Ijs',
            'description' => 'Lekker ijsje',
            'is_available' => 1,
            'price' => 1.75,
            'category_id' => 3,
        ]);
    }
}
