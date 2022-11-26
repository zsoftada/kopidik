<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DapodikSync extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'ip_erapor',
        'ip_dapodik',
        'key',
        'npsn'
    ];

    protected $table = 'erp_dapodik_sync';
}
