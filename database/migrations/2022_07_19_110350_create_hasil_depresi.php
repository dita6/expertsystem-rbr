<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHasilDepresi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hasil_depresi', function (Blueprint $table) {
            $table->id();
            $table->string('t3');
            $table->string('t10');
            $table->string('t13');
            $table->string('t16');
            $table->string('t17');
            $table->string('t21');
            $table->string('total_skor_depresi');
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
        Schema::dropIfExists('hasil_depresi');
    }
}
