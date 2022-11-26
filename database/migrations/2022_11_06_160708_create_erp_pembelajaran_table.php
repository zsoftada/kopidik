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
        Schema::create('erp_pembelajaran', function (Blueprint $table) {
            $table->id();
            $table->string('pembelajaran_id');
            $table->string('mata_pelajaran_id')->nullable();
            $table->string('mata_pelajaran_id_str')->nullable();
            $table->string('ptk_terdaftar_id')->nullable();
            $table->string('ptk_id')->nullable();
            $table->string('nama_mata_pelajaran')->nullable();
            $table->string('induk_pembelajaran_id')->nullable();
            $table->string('jam_mengajar_per_minggu')->nullable();
            $table->string('status_di_kurikulum')->nullable();
            $table->string('status_di_kurikulum_str')->nullable();
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
        Schema::dropIfExists('erp_pembelajaran');
    }
};
