<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTreyningsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('treynings', function (Blueprint $table) {
            // $table->id();
            // $table->string('imagepath');
            // $table->string('img_text_am');
            // $table->string('img_text_en');
            // $table->string('title_en');
            // $table->string('title_am');
            // $table->longText('text_one_am');
            // $table->longText('text_one_en');
            // $table->longText('text_two_am');
            // $table->longText('text_two_en');
            // $table->timestamps();
            $table-> id();
            $table-> string('ckeditor_en');
            $table-> string('ckeditor_am');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('treynings');
    }
}
