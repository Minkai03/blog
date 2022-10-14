<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\butaca;
use App\Models\ticket;
use App\Models\beneficio;
use App\Models\genero;
use App\Models\clasificacion;
use App\Models\horario;
use App\Models\sala;
use App\Models\codigo;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);

        Storage::makeDirectory('public/peliculas');
        Storage::makeDirectory('public/promos');

        $this->call(RoleSeeder::class);

        Genero::factory(5)->create();
       Clasificacion::factory(4)->create();
       Horario::factory(8)->create();
       Butaca::factory(22)->create();
       Codigo::factory(4)->create();
       Beneficio::factory(4)->create();
       $this->call(PromoSeeder::class);
       Sala::factory(4)->create();
       $this->call(PeliculaSeeder::class);
       Ticket::factory(4)->create();
}
}