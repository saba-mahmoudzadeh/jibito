<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Entry>
 */
class EntryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id'=>function () {
                return Category::factory()->create()->id;
            },
            'user_id'=>function () {
                return User::factory()->create()->id;
            },
            'title'=>$this->faker->word(),
            'type'=>$this->faker->randomElement(['income','expense']),
            'amount'=>$this->faker->randomNumber(3, false),
            'entry_date'=>$this->faker->date('Y_m_d'),
            'description'=>$this->faker->text(),
            'file'=>null
        ];
    }
}
