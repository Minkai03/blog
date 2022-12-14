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
        Schema::create('peliculas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('slug');
            $table->longtext('sinopsis');
            $table->text('director');
            $table->longtext('reparto');
            $table->time('duracion');
            $table->longtext('trailer_url');
            $table->timestamps();

            $table->unsignedBigInteger('salas_id');
            $table->foreign('salas_id')->references('id')->on('salas')->onDelete('cascade');
           
            $table->unsignedBigInteger('generos_id');
            $table->foreign('generos_id')->references('id')->on('generos')->onDelete('cascade');

            $table->unsignedBigInteger('clasificacions_id');
            $table->foreign('clasificacions_id')->references('id')->on('clasificacions')->onDelete('cascade');

            $table->unsignedBigInteger('p_images_id');
            $table->foreign('p_images_id')->references('id')->on('p_images')->onDelete('cascade');

            $table->unsignedBigInteger('horarios_id');
            $table->foreign('horarios_id')->references('id')->on('horarios')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peliculas');
    }
};
