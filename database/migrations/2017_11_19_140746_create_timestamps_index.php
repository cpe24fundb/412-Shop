<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimestampsIndex extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->index('created_at');
        });

        Schema::table('bills', function (Blueprint $table) {
            $table->index('created_at');
        });

        Schema::table('stock_items', function (Blueprint $table) {
            $table->index('created_at');
        });

        Schema::table('bill_items', function (Blueprint $table) {
            $table->index('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropIndex(['created_at']);
        });

        Schema::table('bills', function (Blueprint $table) {
            $table->dropIndex(['created_at']);
        });

        Schema::table('stock_items', function (Blueprint $table) {
            $table->dropIndex(['created_at']);
        });

        Schema::table('bill_items', function (Blueprint $table) {
            $table->dropIndex(['created_at']);
        });
    }
}
