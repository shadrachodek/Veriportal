<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReceiveItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receive_items', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('receive_item_id');
            $table->unsignedBigInteger('received_quantity');
            $table->integer('receiver')->unsigned()->index();
            $table->integer('stock_id')->unsigned()->index();


            $table->foreign('receiver')->references('id')->on('users');
            $table->foreign('stock_id')->references('id')->on('stocks');
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
        Schema::dropIfExists('receive_items');
    }
}
