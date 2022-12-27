<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHasilStress extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hasil_stress', function (Blueprint $table) {
            $table->id();
            $table->string('t1');
            $table->string('t6');
            $table->string('t8');
            $table->string('t11');
            $table->string('t12');
            $table->string('t14');
            $table->string('t18');
            $table->string('total_skor_stress');
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
        Schema::dropIfExists('hasil_stress');
    }
}
