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
            $table->string('house_plot_number');
            $table->string('street_name')->nullable();
            $table->string('area');
            $table->string('city')->nullable();
            $table->string('dimension')->nullable();
            $table->string('survey_plan_number');
            $table->string('purpose_of_use');
            $table->string('commencement_year')->nullable();
            $table->string('development_period');
            $table->double('building_value');
            $table->double('yearly_rent_payable');
            $table->string('term');
            $table->string('revision_period')->nullable();
            $table->string('file_number');
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
