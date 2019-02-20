<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('warehouses', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('warehouse_id');
            $table->string('production');
            $table->string('storage');
            $table->timestamps();
        });

            Schema::create('stocks', function (Blueprint $table) {
                $table->increments('id');
                $table->unsignedBigInteger('stock_id');
                $table->string('name');
                $table->integer('document_list_id')->unsigned()->index();
                $table->integer('warehouse_id')->unsigned()->index();
                $table->unsignedInteger('status');


                $table->foreign('warehouse_id')->references('id')->on('warehouses');
                $table->foreign('document_list_id')->references('id')->on('document_lists');

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
        Schema::dropIfExists('stocks');
        Schema::dropIfExists('warehouses');

    }
}
