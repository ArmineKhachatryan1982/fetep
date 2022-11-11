<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOurPartnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('our_partners', function (Blueprint $table) {
            $table->id()->from(1000);
            $table->string('img_name');
            $table->string('title_text_am');
            $table->string('title_text_en');
            $table->string('text_am');
            $table->string('text_en');
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
        Schema::dropIfExists('our_partners');
    }
}
