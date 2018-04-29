<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateConditionAgain extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('consoles', function($table) {
            $table->string('condition')->change();
        });
        Schema::table('accessories', function($table) {
            $table->string('condition')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('consoles', function($table) {
            $table->integer('condition')->change();
        });
        Schema::table('accessories', function($table) {
            $table->integer('condition')->change();
        });
    }
}
