<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumniAssociationImgsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumni_association_imgs', function (Blueprint $table) {
            $table->id()->from(1000);
            $table->bigInteger('alumni_associations_id')->unsigned();
            $table->foreign('alumni_associations_id')->references('id')->on('alumni_associations')->onDelete('cascade')->onUpdate('cascade');
            $table->string('img_url');
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
        Schema::dropIfExists('alumni_association_imgs');
    }
}
