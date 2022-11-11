<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTitleimagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('titleimages', function (Blueprint $table) {
            $table->id()->from(1000);
            $table->string('homepage_title_img')->nullable();
            $table->string('homepage_title_img_768')->nullable();
            $table->string('homepage_title_img_425')->nullable();
            $table->string('trainingpage_title_img')->nullable();
            $table->string('trainingpage_title_img_768')->nullable();
            $table->string('trainingpage_title_img_425')->nullable();
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
        Schema::dropIfExists('titleimages');
    }
}
