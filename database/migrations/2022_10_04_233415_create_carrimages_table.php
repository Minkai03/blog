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
        Schema::create('carrimages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('p_images_id');
            $table->foreign('p_images_id')->references('id')->on('p_images')->onDelete('cascade');
            $table->unsignedBigInteger('b_images_id');
            $table->foreign('b_images_id')->references('id')->on('b_images')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carrimages');
    }
};
