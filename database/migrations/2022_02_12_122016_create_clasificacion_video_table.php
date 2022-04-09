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
        Schema::create('clasificacion_video', function (Blueprint $table) {

            $table->id();
            $table->unsignedBigInteger('clasificacion_id');
            $table->unsignedBigInteger('video_id');
            $table->timestamps();

            $table->foreign('clasificacion_id')->references('id')
                ->on('clasificaciones');
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
        Schema::dropIfExists('clasificacion_video');
    }
};
