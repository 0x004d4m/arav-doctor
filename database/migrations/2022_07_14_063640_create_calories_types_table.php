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
        Schema::create('calories_types', function (Blueprint $table) {
            $table->id();

            $table->string('name_ar');
            $table->string('name_en');
            $table->string('name_fr');

            $table->string('size_ar');
            $table->string('size_en');
            $table->string('size_fr');

            $table->string('weight_in_grams');

            $table->string('calories');

            $table->unsignedBigInteger('calories_type_id');
            $table->foreign('calories_type_id')->references('id')->on('calories_types');

            $table->unsignedBigInteger('food_type_id');
            $table->foreign('food_type_id')->references('id')->on('food_types');



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
        Schema::dropIfExists('calories_types');
    }
};
