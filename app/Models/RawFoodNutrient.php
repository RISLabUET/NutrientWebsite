<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RawFoodNutrient extends Model
{
    use HasFactory;

    protected $fillable = [
        'Water',
        'Protein',
        'Total_lipid_(fat)',
        'Carbohydrate_by_difference',
        'Calcium_Ca',
        'Iron_Fe',
        'Magnesium_Mg',
        'Phosphorus_P',
        'Potassium_K',
        'Sodium_Na',
        'Zinc_Zn',
        'Copper_Cu',
        'Manganese_Mn',
        'Selenium_Se',
        'Vitamin_C_total_ascorbic_acid',
        'Thiamin',
        'Riboflavin',
        'Niacin',
        'Pantothenic_acid',
        'Vitamin_B-6',
        'Folate_total',
        'Vitamin_B-12',
        'Vitamin_A_RAE',
        'Cholesterol',
        'Fatty_acids_total_saturated',
        'Fatty_acids_total_monounsaturated',
        'Fatty_acids_total_polyunsaturated'];

    protected $table = "raw_food_nutrients";

    public function foodName() {
        return $this->belongsTo(FoodName::class, 'id', 'id');
    }
}
