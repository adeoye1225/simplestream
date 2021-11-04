<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TimetableFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //'duration'=> $this->faker->in,
            'name'=>$this->faker->name,
            'start_time'= $this->faker->dateTime();
            'end_time ' = $this->faker->dateTime('')
        ];
    }
}
