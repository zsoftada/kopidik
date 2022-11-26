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
        Schema::create('erp_rwy_kepangkatan', function (Blueprint $table) {
            $table->id();
            $table->string('ptk_id');
            $table->string('riwayat_kepangkatan_id');
            $table->date('tanggal_sk')->nullable();
            $table->date('tmt_pangkat')->nullable();
            $table->integer('masa_kerja_gol_tahun')->nullable();
            $table->integer('masa_kerja_gol_bulan')->nullable();
            $table->string('pangkat_golongan_id_str')->nullable();
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
        Schema::dropIfExists('erp_rwy_kepangkatan');
    }
};
