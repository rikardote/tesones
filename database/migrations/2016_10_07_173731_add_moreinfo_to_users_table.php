<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMoreinfoToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('adscripcion');
            $table->string('unidad');
            $table->string('lugar');
            $table->string('titular_area');
            $table->string('pagador_habilitado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropcolumn('adscripcion');
            $table->dropColumn('unidad');
            $table->dropColumn('lugar');
            $table->dropColumn('titular_area');
            $table->dropColumn('pagador_habilitado');
        });
    }
}
