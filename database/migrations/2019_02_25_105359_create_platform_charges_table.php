<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlatformChargesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('platform_charges', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('document_id')->index();
            $table->double('charges');
            $table->string('payment_type');
            $table->bigInteger('amount');
            $table->string('purpose_of_use');
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
        Schema::dropIfExists('platform_charges');
    }
}
