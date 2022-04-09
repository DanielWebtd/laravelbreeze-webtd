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
        Schema::create('videos', function (Blueprint $table) {
            
            $table->id();
            $table->string('titulo', 150);
            $table->unsignedBigInteger('plataforma_id');
            $table->unsignedBigInteger('pais_id');
            $table->tinyInteger('publicado');
            $table->unsignedBigInteger('user_id');
            $table->text('descripcion');
            $table->timestamps();

            $table->foreign('plataforma_id')->references('id')
                ->on('plataformas');
            $table->foreign('pais_id')->references('id')
                ->on('paises');
            $table->foreign('user_id')->references('id')
                ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('videos');
    }
};
