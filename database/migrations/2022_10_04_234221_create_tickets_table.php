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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('entrada');
            $table->string('slug');
            $table->string('precio');
            $table->timestamps();

            $table->unsignedBigInteger('peliculas_id');
            $table->foreign('peliculas_id')->references('id')->on('peliculas')->onDelete('cascade');

            $table->unsignedBigInteger('beneficios_id');
            $table->foreign('beneficios_id')->references('id')->on('beneficios')->onDelete('cascade');

            $table->unsignedBigInteger('promos_id');
            $table->foreign('promos_id')->references('id')->on('promos')->onDelete('cascade');
            
            $table->unsignedBigInteger('users_id');
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
          
            $table->unsignedBigInteger('codigos_id');
            $table->foreign('codigos_id')->references('id')->on('codigos')->onDelete('cascade'); 
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
};
