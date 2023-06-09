<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCropFamilyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crop_family', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('family_id'); 
            $table->foreign('family_id')->references('id')->on('families');
            $table->unsignedBigInteger('crop_id'); 
            $table->foreign('crop_id')->references('id')->on('crops');
            $table->unique(['family_id','crop_id']);
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
        Schema::dropIfExists('crop_family');
    }
}
