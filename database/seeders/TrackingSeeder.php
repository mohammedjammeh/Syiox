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
            [
                'id' => 1,
                'size' => '10',
                'scale_id' => 1,
            ],
            [
                'id' => 2,
                'size' => '20',
                'scale_id' => 2,
            ],
            [
                'id' => 3,
                'size' => '30',
                'scale_id' => 3,
            ],
            [
                'id' => 4,
                'size' => '40',
                'scale_id' => 4,
            ],
            [
                'id' => 5,
                'size' => '50',
                'scale_id' => 5,
            ],
        ]);
    }
}
