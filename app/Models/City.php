<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class City extends Model
{
    use HasFactory, SoftDeletes, CrudTrait;

    protected $fillable = [
        'name_ar',
        'name_en',
        'name_fr',
        'governorate_id',
    ];

    public function governorate()
    {
        return $this->belongsTo(Governorate::class);
    }
}
