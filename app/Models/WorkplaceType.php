<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WorkplaceType extends Model
{
    use HasFactory, SoftDeletes, CrudTrait;

    protected $fillable = [
        'type_ar',
        'type_en',
        'type_fr',
        'occupation_type_id',
    ];

    public function occupationType()
    {
        return $this->belongsTo(OccupationType::class);
    }
}
