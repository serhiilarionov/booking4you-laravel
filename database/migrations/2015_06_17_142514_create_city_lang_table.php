<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCityLangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('city_lang', function (Blueprint $table) {;
            $table->increments('id');
            $table->string('locale', 3)->index();
            $table->integer('city_id')->unsigned();
            $table->string('name');

            $table->unique(['city_id', 'locale']);
            $table->foreign('city_id')->references('id')->on('city')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('city_lang');
    }
}
