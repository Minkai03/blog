<?php

namespace Database\Factories;

use App\Models\ticket;
use App\Models\beneficio;
use App\Models\pelicula;
use App\Models\promo;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TicketsFactory extends Factory
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
            'precio' => $this->faker->enum(5),
            'pelicula_id' => pelicula::all()->random()->id,
            'beneficio_id' => beneficio::all()->random()->id,
            'promo_id' => promo::all()->random()->id,
            'user_id' => user::all()->random()->id
        ];
    }
}
