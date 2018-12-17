<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLugarToCspAlertas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('csp_reportes_alertas', function($table) {
          $table->integer('canton_id')->index();
          $table->integer('provincia_id')->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('csp_reportes_alertas', function($table) {
          $table->dropColumn('canton_id');
          $table->dropColumn('provincia_id');
        });
    }
}
