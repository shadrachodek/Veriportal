<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mode')->default('New Registration');
            $table->unsignedBigInteger('document_id')->unsigned();
            $table->unsignedBigInteger('batch_id')->unsigned()->index()->nullable();
            $table->unsignedBigInteger('owner_id')->unsigned()->index();
            $table->boolean('print_status')->default(false);
            $table->unsignedBigInteger('reprint_counter')->default(0);
            $table->integer('set_for_approval_by')->index()->nullable();
            $table->boolean('set_for_approval_status')->default(false);
            $table->dateTime('set_for_approval_at')->nullable();
            $table->integer('approved_status')->nullable();
            $table->integer('approved_by')->index()->nullable();
            $table->dateTime('approved_at')->nullable();
            $table->string('status')->default('Pending Approval');
            $table->text('message')->nullable();
            $table->morphs('documentable');
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
        Schema::dropIfExists('documents');
    }
}
