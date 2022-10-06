<?php

namespace Database\Factories;

use App\Models\codigo;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CodigosFactory extends Factory
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
            'codigo' => $this->faker->enum(5)
        ];
    }
}
