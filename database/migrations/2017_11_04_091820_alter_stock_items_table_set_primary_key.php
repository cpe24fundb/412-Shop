<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterStockItemsTableSetPrimaryKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('stock_items', function (Blueprint $table) {
            $table->primary(['product_id', 'stock_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('stock_items', function (Blueprint $table) {
             $table->dropPrimary('tables_product_id_stock_id_primary');
        });
    }
}
