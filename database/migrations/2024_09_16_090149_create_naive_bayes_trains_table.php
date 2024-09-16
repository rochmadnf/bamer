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
        Schema::create('naive_bayes_trains', function (Blueprint $table) {
            $table->id();
            $table->string('kesamaan_sifat');
            $table->integer('ketuaan');
            $table->boolean('kekerasan');
            $table->string('kekeringan');
            $table->boolean('kotoran');
            $table->boolean('kebusukan');
            $table->boolean('kerusakan');
            $table->float('kadar_air');
            $table->float('diameter');
            $table->tinyInteger('mutu_class');
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
        Schema::dropIfExists('naive_bayes_trains');
    }
};
