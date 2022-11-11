<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsAndEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_and_events', function (Blueprint $table) {
            $table->id()->from(1000);
            $table->string('date_en');
            $table->string('date_am');
            $table->string('title_text_am');
            $table->string('title_text_en');
            $table->string('index_text_am');
            $table->string('index_text_en');
            $table->longText('text_am');
            $table->longText('text_en');
            $table->string('index_img_name');
            $table->string('page_img_name');
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
        Schema::dropIfExists('news_and_events');
    }
}
