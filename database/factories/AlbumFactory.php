<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Album>
 */
class AlbumFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Album::class;

     public function definition()
     {
         return [
             'title' => $this->faker->sentence(2),
             'img_path' => $this->faker->paragraph(4),
             'release_date' => $this->faker->randomFloat(2, 1, 100),
         ];
     }
}
