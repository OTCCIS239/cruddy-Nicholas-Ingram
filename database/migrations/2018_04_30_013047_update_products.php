<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('games', function($table) {
            $table->longText('description')->change();
            $table->float('price')->change();
        });

        Schema::table('accessories', function($table) {
            $table->longText('description')->change();
            $table->float('price')->change();
        });

        Schema::table('consoles', function($table) {
            $table->longText('description')->change();
            $table->float('price')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('games', function($table) {
            $table->string('description')->change();
            $table->integer('price')->change();
        });

        Schema::table('accessories', function($table) {
            $table->string('description')->change();
            $table->integer('price')->change();
        });

        Schema::table('consoles', function($table) {
            $table->string('description')->change();
            $table->integer('price')->change();
        });
    }
}
