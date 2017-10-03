<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStreetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('street', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('city_id')->unsigned()->references('id')->on('city')->onDelete('cascade')->index();
            $table->integer('district_id')->unsigned()->nullable()->references('id')->on('district')->onDelete('cascade')->index();
            $table->integer('street_type_id')->unsigned()->references('id')->on('street_type')->onDelete('cascade')->index();
            $table->string('name_orig');
            $table->point('point')->nullable();
            $table->multipoint('bound')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('street');
    }
}
