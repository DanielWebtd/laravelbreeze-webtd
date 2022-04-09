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
        Schema::create('cuentas_bancarias', function (Blueprint $table) {
            
            $table->id();
            $table->double('saldo');
            $table->tinyInteger('habilitada');
            $table->unsignedBigInteger('banco_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('banco_id')->references('id')
                ->on('bancos');
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
        Schema::dropIfExists('cuentas_bancarias');
    }
};
