<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->randomElement(['Acción','Arcade','Deportivo','Estrategia','Simulación']),
            'slug' => $this->faker->slug(3),
            'description' =>$this->faker->text(100),
            'priority' => $this->faker->numberBetween(0,5)
        ];
    }
}
