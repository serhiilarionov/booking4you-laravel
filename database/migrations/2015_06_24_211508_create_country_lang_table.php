<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountryLangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('country_lang', function (Blueprint $table) {
            $table->increments('id');
            $table->string('locale', 3)->index();
            $table->integer('country_id')->unsigned();
            $table->string('name');

            $table->unique(['country_id', 'locale']);
            $table->foreign('country_id')->references('id')->on('country')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('country_lang');
    }
}
