<?php

namespace Database\Factories;

use App\Models\b_image;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class B_imagesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
           'url' => 'promos/' . $this->faker->image('public/storage/promos', 640, 480, null, false)
        ];
    }
}
