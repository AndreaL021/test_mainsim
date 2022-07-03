<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
    public function run()
    {
        for ($i=0; $i < 10; $i++) { 
            Product::create([
                'product'=>"Product ".($i+1),
                'price'=>50+($i*10),
            ]);
        }
    }
}
