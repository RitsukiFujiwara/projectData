<?php

namespace Database\Factories;

use App\Models\catalog;
use Illuminate\Database\Eloquent\Factories\Factory;

class catalogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Model::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => catalog::factory(),
            'user_id' => $this->faker->integer(1),
            'title' => $this->faker->text(20),
            'text' => $this->faker->text(20),
            'skill' => $this->faker->integer(1),
        ];
    }
}
