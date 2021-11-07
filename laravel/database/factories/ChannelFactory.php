<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ChannelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
                //
                'uuid'=> $this->faker->uuid(),
                'image'=> $this->faker->url(150),
                'name'=>$this->faker->name,
        
        ];
    }
}
