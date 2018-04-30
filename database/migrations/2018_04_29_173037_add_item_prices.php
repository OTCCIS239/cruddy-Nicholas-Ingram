<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddItemPrices extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function($table) {
            $table->renameColumn('item_total_price', 'items_ordered_prices');
        });

        Schema::table('orders', function($table) {
            $table->string('items_ordered_prices')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function($table) {
            $table->renameColumn('items_ordered_prices', 'item_total_price');
        });

        Schema::table('orders', function($table) {
            $table->integer('item_total_price')->change();
        });
    }
}
