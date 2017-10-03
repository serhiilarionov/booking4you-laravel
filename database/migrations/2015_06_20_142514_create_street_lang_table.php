<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStreetLangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('street_lang', function (Blueprint $table) {
            $table->increments('id');
            $table->string('locale', 3)->index();
            $table->integer('street_id')->unsigned();
            $table->string('name');

            $table->unique(['street_id', 'locale']);
            $table->foreign('street_id')->references('id')->on('street')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('street_lang');
    }
}
