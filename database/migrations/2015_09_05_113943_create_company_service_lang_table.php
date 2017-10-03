<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyServiceLangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_service_lang', function (Blueprint $table) {
            $table->increments('id');
            $table->string('locale', 3)->index();
            $table->integer('company_service_id')->unsigned()->index();
            $table->string('name');
            $table->text('desc')->nullable();

            $table->unique(['company_service_id', 'locale']);
            $table->foreign('company_service_id')->references('id')->on('company_service')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('company_service_lang');
    }
}
