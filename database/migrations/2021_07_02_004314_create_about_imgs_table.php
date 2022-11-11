<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutImgsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_imgs', function (Blueprint $table) {
            $table->id()->from(1000);
            $table->bigInteger('about_uses_id')->unsigned();
            $table->foreign('about_uses_id')->references('id')->on('about_uses')->onDelete('cascade')->onUpdate('cascade');
            $table->string('img_one');
            $table->string('img_two');
            $table->string('img_tree');
            $table->string('img_index');
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
        Schema::dropIfExists('about_imgs');
    }
}
