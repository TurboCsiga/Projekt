<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CartItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\CartItem::factory(20)->create();
    }
}
