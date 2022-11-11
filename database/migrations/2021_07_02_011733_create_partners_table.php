<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partners', function (Blueprint $table) {
            $table->id()->from(1000);
            $table->string('name_am');
            $table->string('name_en');
            $table->longText('min_text_en');
            $table->longText('min_text_am');
            $table->string('img_partner');
            $table->string('compni_logo');
            $table->longText('des_am')->nullable();
            $table->longText('des_en')->nullable();
            $table->longText('text_one_am')->nullable();
            $table->longText('text_one_en')->nullable();
            $table->longText('text_two_am')->nullable();
            $table->longText('text_two_en')->nullable();
            $table->longText('text_tree_am')->nullable();
            $table->longText('text_three_en')->nullable();
          
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
        Schema::dropIfExists('partners');
    }
}
