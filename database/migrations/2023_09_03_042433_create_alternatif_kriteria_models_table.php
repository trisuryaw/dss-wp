<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alternatif_kriteria', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_alternatif');
            $table->unsignedBigInteger('id_kriteria');
            $table->unsignedBigInteger('id_bobot_kriter');
            $table->timestamps();

            $table->foreign('id_alternatif')->references('id')->on('alternatif');
            $table->foreign('id_kriteria')->references('id')->on('kriteria');
            $table->foreign('id_bobot_kriter')->references('id')->on('bobot_kriteria');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alternatif_kriteria_models');
    }
};
