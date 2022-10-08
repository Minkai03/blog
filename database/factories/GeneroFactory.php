<?php

namespace Database\Factories;

use App\Models\genero;
use Illuminate\Database\Eloquent\Factories\Factory;
Use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class GeneroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $nombre=$this->faker->unique()->word(100);

        return [
            'nombre' => $nombre,
            'slug' => Str::slug($nombre)
        ];
    }
}
