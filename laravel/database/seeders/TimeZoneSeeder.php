<?php

namespace Database\Seeders;

use App\Models\TimeZone;
use Illuminate\Database\Seeder;

class TimeZoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $timestamp = time();
        foreach (timezone_identifiers_list() as $zone) {
            date_default_timezone_set($zone);
            $zones['offset'] = date('P', $timestamp);
            $zones['diff_from_gmt'] = 'UTC/GMT '.date('P', $timestamp);

            TimeZone::updateOrCreate(['name' => $zone], $zones);
        }
    }
}
