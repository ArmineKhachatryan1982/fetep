<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCohortGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cohort_groups', function (Blueprint $table) {
            $table->id();
            $table->string('cohort_group_en');
            $table->string('cohort_img_name'); 
            $table->string('cohort_pic_title_en');
            $table->string('cohort_pic_title_am');
            $table->string('cohort_img_text_en');
            $table->string('cohort_img_text_am');
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
        Schema::dropIfExists('cohort_groups');
    }
}
