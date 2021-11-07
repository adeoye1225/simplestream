<?php

namespace Database\Factories;

use App\Models\Channel;
use Carbon\Carbon;
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
        $channels = Channel::pluck('id')->toArray();
        $start =$this->faker->dateTimeBetween('now', 'now +7 days'); 
        $end = $this->faker->dateTimeBetween($start, $start->format('Y-m-d H:i:s').' +1 day');
        $start_time = Carbon::parse($start);
        $end_time = Carbon::parse($end);
        $duration = $end_time->diffInSeconds($start_time);
        //dd($duration);
        //$seconds = $duration->s;
        return [
            'channel_id'=> $this->faker->randomElement($channels),
            'name'=>$this->faker->name,
             'uuid'=>$this->faker->uuid(),   
            'start_time'=> $start,
            'end_time' => $end,
            'duration' => $duration

            
           
        ];
    }
}
