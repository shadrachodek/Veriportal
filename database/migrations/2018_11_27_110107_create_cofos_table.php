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
            $table->string('house_plot_number');
            $table->string('street_name');
            $table->string('lga');
            $table->string('city');
            $table->string('dimension');
            $table->string('survey_plan_number');
            $table->string('purpose_of_use');
            $table->string('commencement_year');
            $table->string('development_period');
            $table->string('building_value');
            $table->string('yearly_rent_payable');
            $table->string('term');
            $table->string('revision_period');
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
