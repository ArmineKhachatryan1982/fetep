<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomePageTextsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_page_texts', function (Blueprint $table) {
            $table->id()->from(1000);
            $table->bigInteger('home_page_id')->unsigned();
            $table->foreign('home_page_id')->references('id')->on('home_pages')->onDelete('cascade')->onUpdate('cascade');
            $table->string('home_page_text_am');
            $table->string('home_page_text_en');
            $table->tinyInteger('status')->default(0);
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
        Schema::dropIfExists('home_page_texts');
    }
}
