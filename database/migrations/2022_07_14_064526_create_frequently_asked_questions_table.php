<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frequently_asked_questions', function (Blueprint $table) {
            $table->id();

            $table->text('question_ar');
            $table->text('question_en');
            $table->text('question_fr');

            $table->text('answer_ar');
            $table->text('answer_en');
            $table->text('answer_fr');

            $table->unsignedBigInteger('frequently_asked_question_type_id');
            $table->foreign('frequently_asked_question_type_id','fqa_type_id')->references('id')->on('frequently_asked_question_types');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('frequently_asked_questions');
    }
};
