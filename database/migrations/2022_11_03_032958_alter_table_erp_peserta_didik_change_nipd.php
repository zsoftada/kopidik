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
        Schema::table('erp_data_peserta_didik', function (Blueprint $table) {
            $table->string('nipd')->nullable(true)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('erp_data_peserta_didik', function (Blueprint $table) {
            $table->string('nipd')->nullable(false)->change();
        });
    }
};
