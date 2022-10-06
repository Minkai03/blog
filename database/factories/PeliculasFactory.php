<?php

namespace Database\Factories;

use App\Models\pelicula;
use App\Models\clasificacion;
use App\Models\genero;
use App\Models\horario;
use App\Models\p_image;
use App\Models\sala;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PeliculasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $nombre=$this->faker->unique()->sentence();

        return [
            'nombre' => $nombre,
            'slug' => Str::slug($nombre),
            'sinopsis' => $this->faker->text(3000),
            'director' => $this->faker->text(500),
            'reparto' => $this->faker->text(1000),
            'duracion' => $this->faker->time(2),
            'trailer_url' => $this->faker->text(500),
            'sala_id' => sala::all()->random()->id,
            'genero_id' => genero::all()->random()->id,
            'clasificacion_id' => clasificacion::all()->random()->id,
            'p_image_id' => p_image::all()->random()->id,
            'horario_id' => horario::all()->random()->id
        ];
    }
}
