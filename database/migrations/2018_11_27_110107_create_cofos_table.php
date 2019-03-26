<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCofosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cofos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('category');
            $table->string('house_plot_number')->nullable();
            $table->string('street_name')->nullable();
            $table->string('area')->nullable();
            $table->string('city')->nullable();
            $table->string('dimension')->nullable();
            $table->string('survey_plan_number')->nullable();
            $table->string('purpose_of_use')->nullable();
            $table->string('commencement_year')->nullable();
            $table->string('development_period')->nullable();
            $table->double('building_value')->nullable();
            $table->double('yearly_rent_payable')->nullable();
            $table->string('term')->nullable();
            $table->string('revision_period')->nullable();
            $table->string('file_number')->nullable();
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
        Schema::dropIfExists('cofos');
    }
}
