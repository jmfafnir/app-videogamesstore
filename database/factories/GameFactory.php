<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Game>
 */
class GameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'slug' => $this->faker->slug,
            'developer_company' => $this->faker->randomElement(['Riot Games','Supercell','Epic Games','Sony Interactive Entertainment',
                'Xbox Game Studios','Bethesda Games Studios','Activision Blizzard']),
            'game_hours' => $this->faker->randomNumber(2),
            'classification' => $this->faker->randomElement(['EC – Early Childhood','E – Everyone','E 10+ - Everyone 10 and up',
                'T – Teen', 'M – Mature 17+', 'AO – Adults only 18+']),
            'release_date' => $this->faker->dateTimeInInterval('-10 years','now'),
            'category_id' => Category::all()->random()->id,
            'price' => $this->faker->randomNumber(5),
        ];
    }
}
