<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHasilKecemasan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hasil_kecemasan', function (Blueprint $table) {
            $table->id();
            $table->string('t2');
            $table->string('t4');
            $table->string('t7');
            $table->string('t9');
            $table->string('t15');
            $table->string('t19');
            $table->string('t20');
            $table->string('total_skor_kecemasan');
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
        Schema::dropIfExists('hasil_kecemasan');
    }
}
