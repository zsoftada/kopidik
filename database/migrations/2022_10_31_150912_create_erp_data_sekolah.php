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
        Schema::create('erp_data_sekolah', function (Blueprint $table) {
            $table->id();
            $table->string('sekolah_id');
            $table->string('nama')->nullable();
            $table->string('nss')->nullable();
            $table->string('npsn')->nullable();
            $table->string('bentuk_pendidikan_id')->nullable();
            $table->string('bentuk_pendidikan_id_str')->nullable();
            $table->string('status_sekolah')->nullable();
            $table->string('status_sekolah_str')->nullable();
            $table->string('alamat_jalan')->nullable();
            $table->string('rt')->nullable();
            $table->string('rw')->nullable();
            $table->string('kode_wilayah')->nullable();
            $table->string('kode_pos')->nullable();
            $table->string('nomor_telepon')->nullable();
            $table->string('nomor_fax')->nullable();
            $table->string('email')->nullable();
            $table->string('website')->nullable();
            $table->string('is_sks')->nullable();
            $table->string('lintang')->nullable();
            $table->string('bujur')->nullable();
            $table->string('dusun')->nullable();
            $table->string('desa_kelurahan')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('kabupaten_kota')->nullable();
            $table->string('provinsi')->nullable();
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
        Schema::dropIfExists('erp_data_sekolah');
    }
};
