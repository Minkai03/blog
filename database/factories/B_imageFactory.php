<?php

namespace Database\Factories;

use App\Models\b_image;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class b_imageFactory extends Factory
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
