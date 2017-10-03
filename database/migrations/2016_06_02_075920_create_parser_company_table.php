<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParserCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parser_company', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('source')->index();
            $table->string('source_id')->nullable();
            $table->integer('city_id')->unsigned();
            $table->string('name');
            $table->string('url');
            $table->string('category_id');
            $table->jsonb('display_category_id');
            $table->text('desc');
            $table->jsonb('phone')->nullable();
            $table->jsonb('address')->nullable();
            $table->jsonb('email')->nullable();
            $table->jsonb('website')->nullable();
            $table->jsonb('work_time')->nullable();
            $table->jsonb('image_list')->nullable();
            $table->boolean('active')->default(true);
            $table->dateTime('merged_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('parser_company');
    }
}
