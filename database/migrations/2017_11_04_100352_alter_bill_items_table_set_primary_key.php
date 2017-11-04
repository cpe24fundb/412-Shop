<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterBillItemsTableSetPrimaryKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bill_items', function (Blueprint $table) {
            $table->primary(['bill_id', 'product_id']);            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bill_items', function (Blueprint $table) {
            $table->dropPrimary('tables_bill_id_product_id_primary');            
        });
    }
}
