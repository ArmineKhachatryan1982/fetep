<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCohortTextsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cohort_texts', function (Blueprint $table) {
            $table->id()->from(1000);
            $table->longText('cohort_text_en');
            $table->longText('cohort_text_am');
            $table->string('cohort_date_en');
            $table->string('cohort_date_am');
            $table->string('cohort_group_en');
            $table->string('cohort_group_am');
            $table->string('cohort_date_second_en');
            $table->string('cohort_date_second_am');
            $table->string('cohort_group_second_en');
            $table->string('cohort_group_second_am');
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
        Schema::dropIfExists('cohort_texts');
    }
}
