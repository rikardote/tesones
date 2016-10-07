<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTesonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tesons', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('remision_nomina');
            $table->integer('tipo_personal');
            $table->integer('tipo_nomina');
            $table->integer('folio_inicial');
            $table->integer('folio_final');
            $table->date('fecha_emision');
            $table->date('fecha_elaboracion');
            $table->string('observaciones');
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
        Schema::drop('tesons');
    }
}
