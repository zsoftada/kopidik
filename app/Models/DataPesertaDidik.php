<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPesertaDidik extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'erp_data_peserta_didik';
}
