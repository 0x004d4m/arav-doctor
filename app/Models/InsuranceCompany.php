<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InsuranceCompany extends Model
{
    use HasFactory, SoftDeletes, CrudTrait;

    protected $fillable = [
        'name_ar',
        'name_en',
        'name_fr',
        'country_id',
    ];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
