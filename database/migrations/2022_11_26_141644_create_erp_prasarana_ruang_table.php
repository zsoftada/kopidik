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
        Schema::create('erp_prasarana_ruang', function (Blueprint $table) {
            $table->id();
            $table->string('id_ruang');
            $table->string('id_bangunan');
            $table->string('jenis_prasarana_id')->nullable();
            $table->string('jenis_prasarana_id_str')->nullable();
            $table->string('kode_ruang')->nullable();
            $table->string('nama_ruang')->nullable();
            $table->string('registrasi_ruang')->nullable();
            $table->string('lantai_ke')->nullable();
            $table->string('panjang')->nullable();
            $table->string('lebar')->nullable();
            $table->string('nilai_kerusakan')->nullable();
            $table->string('kriteria_kerusakan')->nullable();
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
        Schema::dropIfExists('erp_prasarana_ruang');
    }
};
