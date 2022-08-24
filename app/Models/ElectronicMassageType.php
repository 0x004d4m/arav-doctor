<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ElectronicMassageType extends Model
{
    use HasFactory, SoftDeletes, CrudTrait;

    protected $fillable = [
        'title',
        'method',
        'reason',
        'text_ar',
        'text_en',
        'text_fr',
    ];
}
