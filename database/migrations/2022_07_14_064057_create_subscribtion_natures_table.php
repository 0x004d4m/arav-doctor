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
        Schema::create('subscribtion_natures', function (Blueprint $table) {
            $table->id();

            $table->string('name_ar');
            $table->string('name_en');
            $table->string('name_fr');

            $table->unsignedBigInteger('subscribtion_status_id');
            $table->foreign('subscribtion_status_id')->references('id')->on('subscribtion_statuses');

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
        Schema::dropIfExists('subscribtion_natures');
    }
};
