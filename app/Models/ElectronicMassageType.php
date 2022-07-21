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
        'from_user_id',
        'to_user_id',
        'text_ar',
        'text_en',
        'text_fr',
        'read',
    ];

    public function fromUser()
    {
        return $this->belongsTo(User::class, 'from_user_id');
    }

    public function toUser()
    {
        return $this->belongsTo(User::class, 'to_user_id');
    }
}
