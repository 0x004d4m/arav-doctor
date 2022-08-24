<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CaloriesType extends Model
{
    use HasFactory, SoftDeletes, CrudTrait;

    protected $fillable = [
        'name_ar',
        'name_en',
        'name_fr',
        'size_ar',
        'size_en',
        'size_fr',
        'weight_in_grams',
        'calories',
        'calories_type_id',
        'food_type_id',
    ];

    public function foodType()
    {
        return $this->belongsTo(FoodType::class);
    }
}
