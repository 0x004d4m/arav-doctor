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

            $table->string('question_ar');
            $table->string('question_en');
            $table->string('question_fr');

            $table->string('answer_ar');
            $table->string('answer_en');
            $table->string('answer_fr');

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
