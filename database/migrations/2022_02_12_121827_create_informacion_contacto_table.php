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
        Schema::create('informacion_contacto', function (Blueprint $table) {
            $table->id();
            $table->string('telefono', 50)->unique();
            $table->string('email', 50)->nullable()->unique();
            $table->unsignedBigInteger('plataforma_id')->unique(); // RELACION 1:1.
            $table->timestamps();
            $table->foreign('plataforma_id')->references('id')
                ->on('plataformas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('informacion_contacto');
    }
};
