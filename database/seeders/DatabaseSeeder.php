<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\butaca;
use App\Models\ticket;
use App\Models\beneficio;
use App\Models\promo;
use App\Models\genero;
use App\Models\clasificacion;
use App\Models\horario;
use App\Models\sala;
use App\Models\codigo;
use App\Models\pelicula;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      \App\Models\User::factory(10)->create();

       $this->call(UserSeeder::class);
       
       genero::factory(5)->create();
       clasificacion::factory(4)->create();
       horario::factory(8)->create();
       butaca::factory(22)->create();
       pelicula::factory(4)->create();
       codigo::factory(4)->create();
       beneficio::factory(4)->create();
       promo::factory(6)->create();
       sala::factory(4)->create();
       ticket::factory(4)->create();
}
}