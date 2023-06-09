<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('families', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('mid_name');
            $table->string('last_name');
            $table->integer('number');
            $table->integer('id_num')->unique();
            $table->unsignedBiginteger('place_id')->nullable();
            $table->foreign('place_id')->references('id')->on('placess');
             $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('families');
    }
};
