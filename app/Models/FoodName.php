<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodName extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
    protected $table = "food_names";
    public function rawFoodNutrient()
    {
        return $this->hasOne(RawFoodNutrient::class, 'id', 'id');
    }

    public function cookedFoodNutrient()
    {
        return $this->hasOne(CookedFoodNutrient::class, 'id', 'id');
    }

}
