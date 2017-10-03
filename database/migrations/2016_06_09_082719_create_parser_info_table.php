<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParserInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parser_info', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('source')->index();
            $table->integer('last_source_id');
            $table->integer('total_errors')->default(0);
            $table->integer('errors')->default(0);
            $table->integer('success_count')->nullable();
            $table->integer('last_success_id')->nullable();
            $table->dateTime('last_success_date')->nullable();
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
        Schema::drop('parser_info');
    }
}
