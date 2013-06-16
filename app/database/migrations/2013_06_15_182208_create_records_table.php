<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRecordsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('country_id');
			$table->string('year');
			$table->integer('gni');
			$table->integer('population');
			$table->bigInteger('gdp');
			$table->smallInteger('gdp_growth');
			$table->smallInteger('life_expectancy');
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
        Schema::drop('records');
    }

}
