<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SpecialityType extends Model
{
    use HasFactory, SoftDeletes, CrudTrait;

    protected $fillable = [
        'name_ar',
        'name_en',
        'name_fr',
        'occupation_type_id',
    ];

    public function occupationType()
    {
        return $this->belongsTo(OccupationType::class);
    }
}
