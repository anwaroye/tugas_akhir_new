<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testing', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('nis_test')->nullable();
            $table->string('nama_test',50)->nullable();
            $table->tinyInteger('n_gh_test');
            $table->tinyInteger('n_ppgd_test');
            $table->tinyInteger('n_sar_test');
            $table->tinyInteger('n_impk_test');
            $table->tinyInteger('n_repling_test');
            $table->tinyInteger('n_sebrang_kering_test');
            $table->tinyInteger('minat_test');
            $table->string('divisi_test');
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
        Schema::dropIfExists('testings');
    }
}
