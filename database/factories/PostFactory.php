<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'body' => $this->faker->paragraph(),
            'image' => $this->faker->image(),
            'slug' => $this->faker->unique->slug(),
            'user_id' => 1,
            'category_id' => Category::factory()
        ];
    }
}
