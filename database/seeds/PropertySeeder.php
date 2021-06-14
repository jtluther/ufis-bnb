<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('property')->insert([
                ['title' => 'Heart of Salt Lake City', 'type_id' => 1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
                ['title' => 'Glamorous Draper Mansion w/ Pool', 'type_id' => 1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
                ['title' => 'Historic Downtown Apartment', 'type_id' => 2, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
                ['title' => 'Charming Salt Lake Valley Bed & Breakfast', 'type_id' => 2, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
                ['title' => 'Secluded Cabin in Midway, UT', 'type_id' => 3, 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')]
            ]
        );
    }
}
