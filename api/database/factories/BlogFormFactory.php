<?php

namespace Database\Factories;

use App\Models\BlogForm;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFormFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BlogForm::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'link' => $this->faker->url,
            'author' => $this->faker->name,
            'comments' => $this->faker->sentence,
        ];
    }
}
