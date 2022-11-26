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
        Schema::create('erp_data_guru', function (Blueprint $table) {
            $table->id();
            $table->string('ptk_id');
            $table->string('ptk_terdaftar_id');
            $table->string('tahun_ajaran_id')->nullable();
            $table->integer('ptk_induk')->nullable();
            $table->string('tanggal_surat_tugas')->nullable();
            $table->string('nama')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->string('tanggal_lahir')->nullable();
            $table->integer('agama_id')->nullable();
            $table->string('agama_id_str')->nullable();
            $table->string('nuptk')->nullable();
            $table->string('nik')->nullable();
            $table->string('jenis_ptk_id')->nullable();
            $table->string('jenis_ptk_id_str')->nullable();
            $table->integer('status_kepegawaian_id')->nullable();
            $table->string('status_kepegawaian_id_str')->nullable();
            $table->string('nip')->nullable();
            $table->string('pendidikan_terakhir')->nullable();
            $table->string('bidang_studi_terakhir')->nullable();
            $table->string('pangkat_golongan_terakhir')->nullable();
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
        Schema::dropIfExists('erp_data_guru');
    }
};
