<?php

namespace Database\Factories;

use App\Models\p_image;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class P_imagesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'url' => 'peliculas/' . $this->faker->image('public/storage/peliculas', 640, 480, null, false)
        ];
    }
}
