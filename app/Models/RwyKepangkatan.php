<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RwyKepangkatan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'erp_rwy_kepangkatan';
}
