<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FoodName;

class FoodNameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FoodName::truncate();
        $csvData = fopen(base_path('database\import_csv\food.csv'), 'r');
        $transRow = true;
        while (($data = fgetcsv($csvData, 425, ',')) !== false) {
            if (!$transRow) {
                FoodName::create([
                    'name' => $data['1'],
                ]);
            }
            $transRow = false;
        }
        fclose($csvData);
    }

}
