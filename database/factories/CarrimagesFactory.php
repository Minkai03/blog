<?php

namespace Database\Factories;

use App\Models\carrimage;
use App\Models\b_image;
use App\Models\p_image;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CarrimagesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'b_image_id' => b_image::all()->random()->id,
            'p_image_id' => p_image::all()->random()->id
        ];
    }
}
