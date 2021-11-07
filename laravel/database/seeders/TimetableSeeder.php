<?php

namespace Database\Seeders;

use App\Models\Timetable;
use Illuminate\Database\Seeder;

class TimetableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Timetable::factory()->times(50)->create();
    }
}
