<?php

namespace Database\Seeders;

use App\Models\p_image;
use App\Models\pelicula;
use Database\Factories\PeliculasFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeliculaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $peliculas = Pelicula::factory(100)->create();
    
    }
}
