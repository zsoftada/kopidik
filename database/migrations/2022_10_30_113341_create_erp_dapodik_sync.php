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
        Schema::create('erp_dapodik_sync', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('ip_erapor');
            $table->string('ip_dapodik');
            $table->string('key');
            $table->string('npsn');
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
        Schema::dropIfExists('erp_dapodik_sync');
    }
};
