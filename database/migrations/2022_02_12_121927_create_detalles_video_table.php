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
        Schema::create('detalles_video', function (Blueprint $table) {
            
            $table->id();
            $table->string('duracion', 50)->nullable();
            $table->timestamp('fecha_publicacion');
            $table->enum('extension', ['.mp4', '.mov', '.wmv']);
            $table->string('dimensiones', 50)->nullable();
            $table->unsignedBigInteger('video_id')->unique(); // Relacion 1:1
            $table->unsignedBigInteger('cantidad_visitas');
            $table->double('ganancia_generada');
            $table->timestamps();

            $table->foreign('video_id')->references('id')
                ->on('videos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalles_video');
    }
};
