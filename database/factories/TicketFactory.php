<?php

namespace Database\Factories;

use App\Models\ticket;
use App\Models\beneficio;
use App\Models\pelicula;
use App\Models\promo;
use App\Models\codigo;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $entrada=$this->faker->unique()->sentence();

        return [
            'entrada' => $entrada,
            'slug' => Str::slug($entrada),
            'precio' => $this->faker->text(10),
            'peliculas_id' => Pelicula::all()->random()->id,
            'beneficios_id' => Beneficio::all()->random()->id,
            'codigos_id' => Codigo::all()->random()->id,
            'promos_id' => Promo::all()->random()->id,
            'users_id' => User::all()->random()->id
        ];
    }
}

