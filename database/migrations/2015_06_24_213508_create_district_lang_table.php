<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDistrictLangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('district_lang', function (Blueprint $table) {
            $table->increments('id');
            $table->string('locale', 3)->index();
            $table->integer('district_id')->unsigned();
            $table->string('name');

            $table->unique(['district_id', 'locale']);
            $table->foreign('district_id')->references('id')->on('district')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('district_lang');
    }
}
