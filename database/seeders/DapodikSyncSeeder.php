<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DapodikSyncSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('erp_dapodik_sync')->insert([
            'name' => "Koneksi Dapodik",
            'ip_erapor' => "0.0.0.0",
            'ip_dapodik' => "0.0.0.0",
            'key' => "-",
            'npsn' => "-"
        ]);
    }
}
