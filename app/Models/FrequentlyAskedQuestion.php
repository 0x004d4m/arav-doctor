<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FrequentlyAskedQuestion extends Model
{
    use HasFactory, SoftDeletes, CrudTrait;

    protected $fillable = [
        'question_en',
        'question_ar',
        'question_fr',
        'answer_ar',
        'answer_en',
        'answer_fr',
        'frequently_asked_question_type_id',
    ];

    public function frequentlyAskedQuestionType()
    {
        return $this->belongsTo(FrequentlyAskedQuestionType::class);
    }
}
