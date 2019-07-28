<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('training', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('nis')->nullable();
            $table->string('nama',50)->nullable();
            $table->tinyInteger('nilai_gh');
            $table->tinyInteger('nilai_ppgd');
            $table->tinyInteger('nilai_sar');
            $table->tinyInteger('nilai_impk');
            $table->tinyInteger('nilai_repling');
            $table->tinyInteger('nilai_sebrang_kering');
            $table->tinyInteger('minat');
            $table->string('divisi');
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
        Schema::dropIfExists('trainings');
    }
}
