<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BloodGroupType extends Model
{
    use HasFactory, SoftDeletes, CrudTrait;

    protected $fillable = [
        'type',
    ];
}
