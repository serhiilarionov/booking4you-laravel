<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyLocationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_location', function (Blueprint $table) {
            $table->integer('company_id')->unsigned()->nullable();
            $table->foreign('company_id')->references('id')->on('company');
            $table->point('point')->nullable();
            $table->integer('building_id')->unsigned()->index()->references('id')->on('building');
            $table->integer('street_id')->unsigned()->index()->references('id')->on('street');
            $table->integer('district_id')->unsigned()->index()->references('id')->on('district');
            $table->integer('city_id')->unsigned()->index()->references('id')->on('city');
            $table->string('room')->nullable();
            $table->string('detail')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('company_location');
    }
}
