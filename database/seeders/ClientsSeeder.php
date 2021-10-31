<?php

namespace Database\Seeders;

use App\Models\Clients;
use Illuminate\Database\Seeder;

class ClientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Clients::create([
            "name" => "Felipe May",
            "cnpj" => "079.662.152-22",
            "total_expense" => 0,
            "address" => "Rua la de casa",
            "address_number" => "35",
            "city" => "Joinville",
            "state" => "Santa Catarina",
            "phone" => "(47) 9 9720-3726"
        ]);

        Clients::create([
            "name" => "Jean May",
            "cnpj" => "079.662.152-22",
            "total_expense" => 0,
            "address" => "Rua la de casa",
            "address_number" => "55",
            "city" => "Joinville",
            "state" => "Santa Catarina",
            "phone" => "(47) 9 9720-3726"
        ]);    
        
    }
}
