<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCancelationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cancelations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('teson_id');
            $table->integer('num_empleado');
            $table->string('nombre');
            $table->integer('numero_cheque');
            $table->decimal('importe');
            $table->integer('clave');
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
        Schema::drop('cancelations');
    }
}
