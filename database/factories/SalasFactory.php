<?php

namespace Database\Factories;
use App\Models\sala;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\butaca;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class SalasFactory extends Factory
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
            'butaca_id' => butaca::all()->random()->id
        ];
    }
}
