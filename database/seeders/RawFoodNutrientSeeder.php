<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\RawFoodNutrient;

class RawFoodNutrientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RawFoodNutrient::truncate();
        $csvData = fopen(base_path('database\import_csv\rawFoodNutri.csv'), 'r');
        $transRow = true;
        while (($data = fgetcsv($csvData, 425, ',')) !== false) {
            if (!$transRow) {
                RawFoodNutrient::create([
                    'Water' => $data['1'],
                    'Protein' => $data['2'],
                    'Total_lipid_(fat)' => $data['3'],
                    'Carbohydrate_by_difference' => $data['4'],
                    'Calcium_Ca' => $data['5'],
                    'Iron_Fe' => $data['6'],
                    'Magnesium_Mg' => $data['7'],
                    'Phosphorus_P' => $data['8'],
                    'Potassium_K' => $data['9'],
                    'Sodium_Na' => $data['10'],
                    'Zinc_Zn' => $data['11'],
                    'Copper_Cu' => $data['12'],
                    'Manganese_Mn' => $data['13'],
                    'Selenium_Se' => $data['14'],
                    'Vitamin_C_total_ascorbic_acid' => $data['15'],
                    'Thiamin' => $data['16'],
                    'Riboflavin' => $data['17'],
                    'Niacin' => $data['18'],
                    'Pantothenic_acid' => $data['19'],
                    'Vitamin_B-6' => $data['20'],
                    'Folate_total' => $data['21'],
                    'Vitamin_B-12' => $data['22'],
                    'Vitamin_A_RAE' => $data['23'],
                    'Cholesterol' => $data['24'],
                    'Fatty_acids_total_saturated' => $data['25'],
                    'Fatty_acids_total_monounsaturated' => $data['26'],
                    'Fatty_acids_total_polyunsaturated' => $data['27'],
                ]);
            }
            $transRow = false;
        }
        fclose($csvData);
    }
}
