<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cooked_food_nutrients', function (Blueprint $table) {
            $table->id();
            $table->double('Water');
            $table->double('Protein');
            $table->double('Total_lipid_fat');
            $table->double('Carbohydrate_by_difference');
            $table->double('Calcium_Ca');
            $table->double('Iron_Fe');
            $table->double('Magnesium_Mg');
            $table->double('Phosphorus_P');
            $table->double('Potassium_K');
            $table->double('Sodium_Na');
            $table->double('Zinc_Zn');
            $table->double('Copper_Cu');
            $table->double('Manganese_Mn');
            $table->double('Selenium_Se');
            $table->double('Vitamin_C_total_ascorbic_acid');
            $table->double('Thiamin');
            $table->double('Riboflavin');
            $table->double('Niacin');
            $table->double('Pantothenic_acid');
            $table->double('Vitamin_B6');
            $table->double('Folate_total');
            $table->double('Vitamin_B12');
            $table->double('Vitamin_A_RAE');
            $table->double('Cholesterol');
            $table->double('Fatty_acids_total_saturated');
            $table->double('Fatty_acids_total_monounsaturated');
            $table->double('Fatty_acids_total_polyunsaturated');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cooked_food_nutrients');
    }
};
