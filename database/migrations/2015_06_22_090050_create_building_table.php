<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuildingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('building', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('street_id')->unsigned()->references('id')->on('street')->onDelete('cascade')->index();
            $table->string('number', 10)->index();
            $table->point('point')->nullable();

            $table->unique(['street_id', 'number']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('building');
    }
}
