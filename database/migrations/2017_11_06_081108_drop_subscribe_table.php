<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropSubscribeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::drop('subscribes');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('subscribes', function (Blueprint $table) {
            $table->primary(['notification_id', 'product_id']);
            $table->integer('notification_id');
            $table->integer('product_id');
            $table->timestamps();
        });
    }
}
