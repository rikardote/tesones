<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNominaIdToTesons extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tesons', function (Blueprint $table) {
            $table->dropColumn('tipo_nomina');
            $table->dropColumn('fecha_emision');
            $table->integer('nomina_id')->unsigned();
            $table->foreign('nomina_id')->references('id')->on('nominas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tesons', function (Blueprint $table) {
            $table->dropColumn('nomina_id');
        });
    }
}
