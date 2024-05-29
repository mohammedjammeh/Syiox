<?php

namespace Database\Seeders;

use App\Enums\ScaleStatus;
use App\Models\Scale;
use Illuminate\Database\Seeder;

class ScaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Scale::insert([
            [
                'id' => 1,
                'name' => 'oat milk',
                'external_id' => '1-abc-def',
                'max_weight' => 10,
                'description' => 'oatty milk, nice drink, more sips',
                'status' => ScaleStatus::FULL,
            ],
            [
                'id' => 2,
                'name' => 'coca cola',
                'external_id' => '2-abc-def',
                'max_weight' => 10,
                'description' => null,
                'status' => ScaleStatus::EMPTY,
            ],
            [
                'id' => 3,
                'name' => 'water',
                'external_id' => '3-abc-def',
                'max_weight' => 10,
                'description' => 'drink my friend, you need water',
                'status' => ScaleStatus::HALF,
            ],
            [
                'id' => 4,
                'name' => 'cereals',
                'external_id' => '4-abc-def',
                'max_weight' => 10,
                'description' => null,
                'status' => ScaleStatus::HALF,
            ],
            [
                'id' => 5,
                'name' => 'coffee',
                'external_id' => '5-abc-def',
                'max_weight' => '10',
                'description' => null,
                'status' => ScaleStatus::EMPTY,
            ],
        ]);
    }
}
