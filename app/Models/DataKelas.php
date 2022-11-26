<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKelas extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'erp_data_kelas';

    public function anggota_rombel()
    {
        return $this->hasMany(DataAnggotaRombel::class, 'anggota_rombel_id', 'rombongan_belajar_id');
    }
}
