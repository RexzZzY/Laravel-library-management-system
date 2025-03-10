<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class studentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $gender=['male','female'];
        return [
            'name' => $this->faker->name,
            'gender' => $gender[random_int(0,1)],
            'index' => $this->faker->index,
            'class' => $this->faker->sentence(3)
        ];
    }
}
