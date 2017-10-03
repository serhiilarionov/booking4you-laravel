<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegionLangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('region_lang', function (Blueprint $table) {
            $table->increments('id');
            $table->string('locale', 3)->index();
            $table->integer('region_id')->unsigned();
            $table->string('name');

            $table->unique(['region_id', 'locale']);
            $table->foreign('region_id')->references('id')->on('region')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('region_lang');
    }
}
