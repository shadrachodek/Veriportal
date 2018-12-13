<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material_requests', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('request_id');
            $table->unsignedBigInteger('request_quantity');
            $table->unsignedBigInteger('approved_quantity');
            $table->string('status')->default('pending');
            $table->integer('stock_id')->unsigned()->index();
            $table->integer('requester')->unsigned()->index();
            $table->integer('approver')->unsigned()->index()->nullable();


            $table->foreign('stock_id')->references('id')->on('stocks');
            $table->foreign('requester')->references('id')->on('users');
            $table->foreign('approver')->references('id')->on('users');
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
        Schema::dropIfExists('material_requests');
    }
}
