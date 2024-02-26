<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Food;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Food::truncate();
        $csvData = fopen(base_path('database\import_csv\food.csv'), 'r');
        $transRow = true;
        while (($data = fgetcsv($csvData, 426, ',')) !== false) {
            if (!$transRow) {
                Food::create([
                    'name' => $data['1'],
                ]);
            }
            $transRow = false;
        }
        fclose($csvData);
    }
}
