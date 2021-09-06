<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->city(),
            'description' => $this->faker->text(),
            'date' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'auteur' => $this->faker->firstname(),
            'img' => $this->faker->imageUrl($width = 640, $height = 480),
            'created_at' => now(),
        ];
    }
}
