<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSteeringImgsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('steering_imgs', function (Blueprint $table) {
            $table->id()->from(1000);
            $table->bigInteger('steering_committees_id')->unsigned();
            $table->foreign('steering_committees_id')->references('id')->on('steering_committees')->onDelete('cascade')->onUpdate('cascade');
            $table->string('img_name');
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
        Schema::dropIfExists('steering_imgs');
    }
}
