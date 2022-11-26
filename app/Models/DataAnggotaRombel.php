<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataAnggotaRombel extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'erp_anggota_rombel';

    public function pd()
    {
        return $this->belongsTo(DataPesertaDidik::class, 'peserta_didik_id');
    }
}
