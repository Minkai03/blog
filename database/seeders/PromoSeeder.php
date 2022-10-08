<?php

namespace Database\Seeders;

use App\Models\b_image;
use App\Models\promo;
use Database\Factories\PromosFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PromoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $promos = Promo::factory(100)->create();
    }
}
