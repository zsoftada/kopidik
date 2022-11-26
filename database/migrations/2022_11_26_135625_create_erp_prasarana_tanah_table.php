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
        Schema::create('erp_prasarana_tanah', function (Blueprint $table) {
            $table->id();
            $table->string('id_tanah');
            $table->string('jenis_prasarana_id')->nullable();
            $table->string('jenis_prasarana_id_str')->nullable();
            $table->string('nama')->nullable();
            $table->string('no_sertifikat_tanah')->nullable();
            $table->string('panjang')->nullable();
            $table->string('lebar')->nullable();
            $table->string('luas_lahan_tersedia')->nullable();
            $table->string('kepemilikan_sarpras')->nullable();
            $table->string('ket_tanah')->nullable();
            $table->string('jumlah_bangunan')->nullable();
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
        Schema::dropIfExists('erp_prasarana_tanah');
    }
};
