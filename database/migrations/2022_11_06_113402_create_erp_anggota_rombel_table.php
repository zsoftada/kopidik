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
        Schema::create('erp_anggota_rombel', function (Blueprint $table) {
            $table->id();
            $table->string('anggota_rombel_id');
            $table->string('peserta_didik_id')->nullable();
            $table->string('jenis_pendaftaran_id')->nullable();
            $table->string('jenis_pendaftaran_id_str')->nullable();
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
        Schema::dropIfExists('erp_anggota_rombel');
    }
};
