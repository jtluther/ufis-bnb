<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert([
                ['property_id' => 1, 'rating' => '5', 'review' => 'This is a great place', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
                ['property_id' => 2, 'rating' => '4', 'review' => 'It was fine', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
                ['property_id' => 2, 'rating' => '1', 'review' => 'Blah', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
                ['property_id' => 2, 'rating' => '3', 'review' => 'It was fine', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
                ['property_id' => 2, 'rating' => '1', 'review' => 'Blah', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
                ['property_id' => 1, 'rating' => '4', 'review' => 'It was fine', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
                ['property_id' => 3, 'rating' => '1', 'review' => 'Blah', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
                ['property_id' => 4, 'rating' => '4', 'review' => 'It was fine', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
                ['property_id' => 5, 'rating' => '1', 'review' => 'Blah', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
                ['property_id' => 5, 'rating' => '1', 'review' => 'Not good', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
                ['property_id' => 5, 'rating' => '1', 'review' => 'Where is it', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ]
        );
    }
}
