<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumniAssociationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumni_associations', function (Blueprint $table) {
            $table->id()->from(1000);
            $table->string('title_en')->nullable();
            $table->string('title_am')->nullable();
            $table->longText('text_one_en')->nullable();
            $table->longText('text_one_am')->nullable();
            $table->longText('text_two_en')->nullable();
            $table->longText('text_two_am')->nullable();
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
        Schema::dropIfExists('alumni_associations');
    }
}
