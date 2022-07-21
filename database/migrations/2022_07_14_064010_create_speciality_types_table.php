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
        Schema::create('speciality_types', function (Blueprint $table) {
            $table->id();

            $table->string('name_ar');
            $table->string('name_en');
            $table->string('name_fr');

            $table->unsignedBigInteger('occupation_type_id');
            $table->foreign('occupation_type_id')->references('id')->on('occupation_types');

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
        Schema::dropIfExists('speciality_types');
    }
};
