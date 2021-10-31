<?php

namespace Database\Seeders;

use App\Models\Orders;
use Illuminate\Database\Seeder;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Orders::create([
            "product_name" => "Pizza",
            "price" => 40.00,
        ]);

        Orders::create([
            "product_name" => "Pizza M",
            "price" => 20.00,
        ]);
    }
}
