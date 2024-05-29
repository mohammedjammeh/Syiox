<?php

namespace Database\Seeders;

use App\Enums\ScaleStatus;
use App\Models\Scale;
use App\Models\Tracking;
use Illuminate\Database\Seeder;

class TrackingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tracking::insert([
            // scale 1
            [
                'id' => 1,
                'weight' => 2.5,
                'scale_id' => 1,
            ],
            [
                'id' => 2,
                'weight' => 10,
                'scale_id' => 1,
            ],

            // scale 2
            [
                'id' => 3,
                'weight' => 5,
                'scale_id' => 2,
            ],
            [
                'id' => 4,
                'weight' => 1.75,
                'scale_id' => 2,
            ],

            // scale 3
            [
                'id' => 5,
                'weight' => 10,
                'scale_id' => 3,
            ],
            [
                'id' => 6,
                'weight' => 5,
                'scale_id' => 3,
            ],

            // scale 4
            [
                'id' => 7,
                'weight' => 10,
                'scale_id' => 4,
            ],
            [
                'id' => 8,
                'weight' => 5,
                'scale_id' => 4,
            ],

            // scale 5
            [
                'id' => 9,
                'weight' => 15,
                'scale_id' => 5,
            ],
            [
                'id' => 10,
                'weight' => 1.5,
                'scale_id' => 5,
            ],
        ]);
    }
}
